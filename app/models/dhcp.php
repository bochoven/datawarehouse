<?php

class Dhcp extends Model
{
    
    function __construct($mac='')
    {
		parent::__construct('id', strtolower(get_class($this))); //primary key, tablename
        $this->rs['id'] = '';
        $this->rs['mac'] = ''; $this->rt['mac'] = 'CHAR(17)';
        $this->rs['host'] = ''; $this->rt['host'] = 'VARCHAR(100)';
        $this->rs['vlan'] = ''; $this->rt['vlan'] = 'VARCHAR(10)';
        $this->rs['ip'] = ''; $this->rt['ip'] = 'CHAR(15)';
        $this->rs['timestamp'] = time();

        // Add indexes
        $this->idx[] = array('host');
        $this->idx[] = array('mac');
        $this->idx[] = array('mac', 'vlan');
        $this->idx[] = array('vlan');

        $this->idx[] = array('ip');

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
        $subclass = array();

        // This array holds fixed ip info
        $fixed_array = array();

        // Read dhcp data
        while (($data = fgets($handle)) !== FALSE)
        {
            if( preg_match('/\s*host\s*(\w+)\s*{/', $data, $matches))
            {
                 $host = $matches[1];
                 $ether = $fixed = '';

                 // Search within the host block
                 while (($data = fgets($handle)) !== FALSE)
                 {
                    if( strpos($data, '}') !== FALSE)
                    {
                        break;
                    }

                    if( preg_match('/hardware ethernet\s+((\w+:){5}(\w+))/', $data, $matches))
                    {
                        $ether = strtolower($matches[1]);
                    }
                    elseif( preg_match('/ddns-hostname\s*"(.+)"/', $data, $matches))
                    {
                        $host = $matches[1];
                    }
                    elseif( preg_match('/fixed-address\s+((\d+\.){3}\d+)/', $data, $matches))
                    {
                        $fixed = $matches[1];
                    }

                 }

                 if($fixed)
                 {
                    $fixed_array[$ether] = $fixed;
                 }

                 // We assume all host entries have an unique ether address
                 $out[$ether] = $host;

            }
            elseif( preg_match('/subclass "(.*)" 1:((\w+[:]){5}(\w+));/', $data, $matches))
            {
                $subclass[$matches[1]][] = strtolower($matches[2]);
            }
            //$this->save();
        }

		//echo '<pre>'; print_r($subclass); echo '</pre>';

        // Drop and recreate table
        $dbh->exec("DROP table $this->tablename");
        $this->create_table($force = TRUE);

        $cnt = 0;

        // Wrap in transaction
        $dbh->beginTransaction();

		foreach( $subclass AS $client_class => $ethers)
		{
			foreach($ethers AS $ether)
			{
				$fixed = array_key_exists($ether, $fixed_array) ? $fixed_array[$ether] : '';
				$host = array_key_exists($ether, $out) ? $out[$ether] : '';
				
				$this->id = '';
				$this->rs['mac'] = strtoupper($ether);
				$this->rs['host'] = $host;
				$this->rs['vlan'] = $client_class;
				$this->rs['ip'] = $fixed;
				$this->save();
				$cnt++;

			}
		}

        $dbh->commit();

        alert("Imported $cnt DHCP configuration items", 'success');
    }

}
