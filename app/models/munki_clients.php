<?php

class Munki_clients extends Model
{
    
    function __construct()
    {
		parent::__construct('id', strtolower(get_class($this))); //primary key, tablename
        $this->rs['id'] = '';
        $this->rs['serial_number'] = '';
        $this->rs['hardware_model'] = '';
        $this->rs['hostname'] = '';
        $this->rs['ip_address'] = '';
        $this->rs['maintenance_type'] = ''; // rood, groen
        $this->rs['os_version'] = '';
        $this->rs['last_user'] = '';
        $this->rs['purchase_date'] = '';
        $this->rs['last_seen'] = '';
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

        // Drop and recreate table
        $dbh->exec("DROP table IF EXISTS $this->tablename");
        $this->create_table($force = TRUE);
        
        // Read JSON data
        $data = fgets($handle);
        if($jsonobj = json_decode($data))
        {
            foreach($jsonobj->data as $item)
            {
                $this->id = '';
                $this->serial_number = $item[0];
                $this->hardware_model = $item[2];
                $this->hostname = $item[1];
                $this->ip_address = $item[7];
                $this->maintenance_type = strpos($item[8], 'selfserve') === FALSE ? 'GROEN' : 'ANDERS';
                $os_vers = str_split(str_pad($item[5], 6, '0'), 2);
                $this->os_version = implode('.', array_map('intval', $os_vers));
                $this->last_user = $item[4];
                $this->purchase_date = $item[6];
                $this->last_seen = date('Y-m-d', $item[3]);
                $this->timestamp = time();
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
