<?php

class Dhcp extends Model
{
    
    function __construct($mac='')
    {
		parent::__construct('id', strtolower(get_class($this))); //primary key, tablename
        $this->rs['id'] = '';
        $this->rs['mac'] = ''; $this->rt['mac'] = 'CHAR(17) UNIQUE';
        $this->rs['host'] = ''; $this->rt['host'] = 'VARCHAR(30)';
        $this->rs['vlan'] = ''; $this->rt['vlan'] = 'VARCHAR(10)';
        $this->rs['timestamp'] = time();

        // Add indexes
        $this->idx[] = array('host');
        $this->idx[] = array('vlan');

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
    function process($handle)
    {
        // Get database handle
        $dbh = $this->getdbh();

        // This array holds all values until we dump it into the db
        $out = array();

        // This array hold vlan information
        $vlan = array();

        echo '<pre>';

        // Read dhcp data
        while (($data = fgets($handle)) !== FALSE)
        {
            if( preg_match('/\s*host\s*(\w+)\s*{/', $data, $matches))
            {
                 $host = $matches[1];
                 $ether = '';
                 while (($data = fgets($handle)) !== FALSE)
                 {
                    if( strpos($data, '}') !== FALSE)
                    {
                        break;
                    }

                    if( preg_match('/hardware ethernet\s*((\w+[:]){5}(\w+))/', $data, $matches))
                    {
                        $ether = strtolower($matches[1]);
                    }

                    // Overwrite host with ddns hostname
                    if( preg_match('/ddns-hostname\s*"(.+)"/', $data, $matches))
                    {
                        $host = $matches[1];
                    }

                 }

                 $out[$ether] = $host;

            }
            elseif( preg_match('/subclass "(.*)" 1:((\w+[:]){5}(\w+));/', $data, $matches))
            {
                $vlan[strtolower($matches[2])] = $matches[1];
            }
            //$this->save();
        }

        // Drop and recreate table
        $dbh->exec("DROP table $this->tablename");
        $this->create_table($force = TRUE);

        // Wrap in transaction
        $dbh->beginTransaction();

        foreach($out AS $ether => $host)
        {
            $this->id = '';
            $this->rs['mac'] = $ether;
            $this->rs['host'] = $host;
            $this->rs['vlan'] = array_key_exists($ether, $vlan) ? $vlan[$ether] : '';
            $this->save();
        }

        $dbh->commit();
    }

}
