<?php

class AD_computer extends Model
{
    
    function __construct()
    {
		parent::__construct('id', strtolower(get_class($this))); //primary key, tablename
        $this->rs['id'] = '';
        $this->rs['description'] = '';
        $this->rs['dn'] = '';
        $this->rs['lastlogon'] = 0;
        $this->rs['name'] = '';
        $this->rs['operatingsystem'] = '';
        $this->rs['timestamp'] = time();

        // Add indexes
        $this->idx[] = array('dn');
        $this->idx[] = array('operatingsystem');
        $this->idx[] = array('description');

        // Table version. Increment when creating a db migration
        $this->schema_version = 0;

		// Create table if it does not exist
        $this->create_table();
                
        return $this;
    }

    /**
     * Process uploaded file
     * [abn290@pfils001 AD_parser]$ ldapsearch -LLL -E pr=10000/noprompt "objectClass=computer" name operatingSystem description lastLogon > AD.ldif; python ldif2csv.py -F ';' AD.ldif > AD.csv
     *
     *
     * @return void
     * @author 
     **/
    function process($handle)
    {
        // Get database handle
        $dbh = $this->getdbh();

        // Drop and recreate table
        $dbh->exec("DROP table IF EXISTS $this->tablename");
        $this->create_table($force = TRUE);

        $cnt = 0;

        $time = time();

        // Wrap in transaction
        $dbh->beginTransaction();

        // Read csv data
        while (($data = fgetcsv($handle, 0, ";", '"')) !== FALSE)
        {
            // Prepend array with id, account for extra item because of next()
            array_unshift($data, '', ''); 

            // Loop through fields
            foreach($this->rs as &$value)
            {
              $value = next($data);
            }

            // Check for empty lines
            if($this->rs['lastlogon'])
            {
                // Convert lastlogon to unix timestamp
                $this->rs['lastlogon'] = floor($this->rs['lastlogon']/10000000)-11644473600;
            }
            else
            {
                $this->rs['lastlogon'] = 946684800; // 1 jan 2000
            }

            // Remove superflous dn info
            $this->rs['dn'] = str_replace(',DC=vu,DC=local', '', str_replace('CN='.$this->rs['name'].',', '', $this->rs['dn']));

            // Uppercase name
            $this->rs['name'] = strtoupper($this->rs['name']);
            
            $this->rs['timestamp'] = $time;

            $this->save();
            $cnt++;

        }

        $dbh->commit();

        alert("Imported $cnt AD computer items", 'success');

    }

}
