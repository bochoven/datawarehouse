<?php

class Vervangbedrag extends Model
{
    
    function __construct()
    {
		parent::__construct('id', strtolower(get_class($this))); //primary key, tablename
        $this->rs['id'] = '';
        $this->rs['soort'] = ''; $this->rt['soort'] = 'varchar(255) UNIQUE';
        $this->rs['prijs'] = 0;
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
        $dbh->exec('DELETE FROM '.$this->tablename);

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

            // Check if this is a valid entry
            if($this->rs['soort'])
            {
                $this->rs['timestamp'] = time();
                $this->save();
            }

        }

        $dbh->commit();
    
    }

}
