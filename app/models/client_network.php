<?php

class Client_network extends Model
{
    
    function __construct()
    {
		parent::__construct('id', strtolower(get_class($this))); //primary key, tablename
        $this->rs['id'] = '';
        $this->rs['serial_number'] = '';
        $this->rs['ethernet'] = '';
        $this->rs['service'] = '';
        $this->rs['ipv4ip'] = '';
        $this->rs['last_seen'] = 0;
        $this->rs['provider'] = ''; // munkireport or sccm
        $this->rs['timestamp'] = time();

        // Add indexes

        // Table version. Increment when creating a db migration
        $this->schema_version = 0;

		// Create table if it does not exist
        $this->create_table();
        
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


        // Wrap in transaction
        $dbh->beginTransaction();

        // Remove previous data
        $dbh->exec("DELETE FROM $this->tablename WHERE provider = 'munkireport'");

        
        // Read JSON data
        $data = fgets($handle);
        if($jsonobj = json_decode($data))
        {
            foreach($jsonobj->data as $item)
            {
                $this->id = '';
                $this->serial_number = $item[0];
                $this->ethernet = $item[1];
                $this->service = $item[2];
                $this->ipv4ip = $item[3];
                $this->last_seen = $item[4];
                $this->provider = 'munkireport';
                $this->timestamp = time();
                // Integrity checks
                if(strlen($this->ethernet) != 17){ continue;}
                $this->create();
            }
        }
        else {
            print 'JSON decode failed';
        }
        
        $dbh->commit();

        exit;
    
    }

}
