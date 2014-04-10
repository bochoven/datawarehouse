<?php

class Nbd extends Model
{
    
    function __construct()
    {
		parent::__construct('id', strtolower(get_class($this))); //primary key, tablename
        $this->rs['id'] = '';
        $this->rs['port'] = ''; $this->rt['port'] = 'varchar(20)';
        $this->rs['vlan'] = 0;
        $this->rs['speed'] = 0;
        $this->rs['status'] = ''; $this->rt['status'] = 'char(4)';
        $this->rs['ip_address'] = ''; $this->rt['ip_address'] = 'char(15)';
        $this->rs['hostname'] = ''; $this->rt['hostname'] = 'varchar(100)';
        $this->rs['mac_address'] = ''; $this->rt['mac_address'] = 'char(17)';
        $this->rs['room'] = ''; $this->rt['room'] = 'varchar(20)';
        $this->rs['out_mb'] = 0.0;
        $this->rs['in_mb'] = 0.0;
        $this->rs['poe'] = $this->rt['poe'] = 'varchar(100)';
        $this->rs['timestamp'] = time();


        // Add indexes
        $this->idx[] = array('room');
        $this->idx[] = array('mac_address');

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
        $dbh->exec('TRUNCATE TABLE fco');

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
            $this->rs['timestamp'] = time();

            $this->save();
        }

        var_dump($data);

        $dbh->commit();
    
    }

}
