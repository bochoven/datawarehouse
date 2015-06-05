<?php

use \ForceUTF8\Encoding;

class Fco extends Model
{
    
    function __construct($functieplaats='')
    {
		parent::__construct('id', strtolower(get_class($this))); //primary key, tablename
        $this->rs['id'] = '';
        $this->rs['functieplaats'] = ''; $this->rt['functieplaats'] = 'VARCHAR(20) UNIQUE';
        $this->rs['deurcode'] = ''; $this->rt['deurcode'] = 'VARCHAR(10)';
        $this->rs['omschrijving'] = ''; $this->rt['omschrijving'] = 'VARCHAR(100)';
        $this->rs['activiteitcode'] = ''; $this->rt['activiteitcode'] = 'CHAR(4)';
        $this->rs['klantnaam'] = ''; $this->rt['klantnaam'] = 'VARCHAR(100)';
        $this->rs['debiteur'] = ''; $this->rt['debiteur'] = 'char(10)';
        $this->rs['gebruikerstatus'] = ''; $this->rt['gebruikerstatus'] = 'VARCHAR(10)';
        $this->rs['lokale_info'] = ''; $this->rt['lokale_info'] = 'VARCHAR(100)';
        $this->rs['in_gebruik_van'] = ''; $this->rt['in_gebruik_van'] = 'CHAR(10)';
        $this->rs['hoofd_deb_code'] = ''; $this->rt['hoofd_deb_code'] = 'CHAR(10)';
        $this->rs['timestamp'] = time();

        // Add indexes
        $this->idx[] = array('functieplaats');
        $this->idx[] = array('hoofd_deb_code');

        // Table version. Increment when creating a db migration
        $this->schema_version = 0;

		// Create table if it does not exist
        $this->create_table();
        
        if($functieplaats)
        {
            $this->retrieve_one('functieplaats=?', array($functieplaats));
            $this->functieplaats = $functieplaats;
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

        $cnt = 0;

        // Wrap in transaction
        $dbh->beginTransaction();

        // Drop and recreate table
        $dbh->exec("DROP table $this->tablename");
        $this->create_table($force = TRUE);

		// Load utf-8 library
		include_once (APP_PATH . '/lib/forceutf8/src/ForceUTF8/Encoding.php');


        // Read csv data
        while (($data = fgetcsv($handle, 0, ";", '"')) !== FALSE)
        {
            // Prepend array with id, account for extra item because of next()
            array_unshift($data, '', ''); 

            // Loop through fields
            foreach($this->rs as &$value)
            {
              $value = Encoding::toUTF8(next($data));
            }
            $this->rs['timestamp'] = time();

            $this->save();
            $cnt++;
        }

        $dbh->commit();

        alert("Imported $cnt FCO location items", 'success');

    }

}
