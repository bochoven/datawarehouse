<?php

class Outlet_room extends Model
{
    
    function __construct()
    {
		parent::__construct('id', strtolower(get_class($this))); //primary key, tablename
        $this->rs['id'] = '';
        $this->rs['datacom'] = ''; $this->rt['datacom'] = 'varchar(30)';
        $this->rs['gebruikersnaam'] = ''; $this->rt['gebruikersnaam'] = 'varchar(100)';
        $this->rs['omschrijving'] = ''; $this->rt['omschrijving'] = 'varchar(100)';
        $this->rs['ruimtenr'] = ''; $this->rt['ruimtenr'] = 'VARCHAR(20)';
        $this->rs['verdiepingsnr'] = ''; $this->rt['verdiepingsnr'] = 'varchar(10)';
        $this->rs['bestandsnaam'] = '';
        $this->rs['timestamp'] = time();

        // Add indexes
        $this->idx[] = array('datacom');
        $this->idx[] = array('ruimtenr');

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

        // Drop and recreate table
        $dbh->exec("DROP table $this->tablename");
        $this->create_table($force = TRUE);

        // Wrap in transaction
        $dbh->beginTransaction();

        // Counter
        $cnt = 0;

        // Read csv data
        while (($data = fgetcsv($handle, 0, ";", '"')) !== FALSE)
        {
            // Prepend array with id, account for extra item because of next()
            array_unshift($data, '', ''); 

            // Loop through fields
            foreach($this->rs as &$value)
            {
              $value = trim(next($data));
            }

            // Check if this is a valid entry
            if($this->rs['omschrijving'] == 'Aansluitpunt data bedraad')
            {
                $this->rs['timestamp'] = time();
                $this->save();
                $cnt++;
            }

        }

        $dbh->commit();

        alert('Succesfully inserted '.$cnt.' outlets', 'success');
    
    }

}
