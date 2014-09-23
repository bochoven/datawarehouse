<?php

class Dhcp_log extends Model
{
    
    function __construct($mac='')
    {
		parent::__construct('id', strtolower(get_class($this))); //primary key, tablename
        $this->rs['id'] = '';
        $this->rs['timestamp'] = time();
        $this->rs['mac'] = ''; $this->rt['mac'] = 'CHAR(17)';
        $this->rs['ip'] = ''; $this->rt['ip'] = 'CHAR(15)';
        $this->rs['host'] = ''; $this->rt['host'] = 'VARCHAR(255)';
        $this->rs['count'] = 0;
        $this->rs['helper_address'] = ''; $this->rt['helper_address'] = 'CHAR(15)';
        $this->rs['client_class'] = ''; $this->rt['client_class'] = 'CHAR(15)';
        $this->rs['building_block'] = ''; $this->rt['building_block'] = 'CHAR(15)';
        $this->rs['usergroup'] = ''; $this->rt['usergroup'] = 'CHAR(15)';

        // Add indexes
        $this->idx[] = array('host');
        $this->idx[] = array('mac');
        $this->idx[] = array('ip');
        $this->idx[] = array('timestamp');

        // Table version. Increment when creating a db migration
        $this->schema_version = 0;

		// Create table if it does not exist
        $this->create_table();
        
        if($mac)
        {
            $this->retrieve_one('mac=?', array($mac));
            $this->mac = $mac;
        }
        
        return $this;
    }

    /**
     * Process uploaded file
     *
     * @return void
     * @author 
     **/
    /**
     * Process uploaded file
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

        // Wrap in transaction
        $dbh->beginTransaction();

        // Read csv data
        while (($data = fgetcsv($handle, 0, ",", '"')) !== FALSE)
        {
            // Convert time to timestamp
            //$data[0] = strtotime($data[0]);

            // Prepend array with id, account for extra item because of next()
            array_unshift($data, '', ''); 

            // Loop through fields
            foreach($this->rs as &$value)
            {
              $value = next($data);
            }

            // Check for empty lines
            if($this->rs['mac'])
            {
                $this->rs['mac'] = strtoupper($this->rs['mac']);
                $this->save();
                $cnt++;
            }

        }

        $dbh->commit();

        alert("Imported $cnt DHCP log items", 'success');

    }

}
