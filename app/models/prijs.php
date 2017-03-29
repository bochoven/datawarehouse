<?php

class Prijs extends Model
{

    function __construct()
    {
		parent::__construct('id', strtolower(get_class($this))); //primary key, tablename
        $this->rs['id'] = '';
        $this->rs['soort'] = ''; $this->rt['soort'] = 'varchar(255) UNIQUE';
        $this->rs['prijs'] = 0.0;
        $this->rs['vervangbedrag'] = 0.0;
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

        // Read csv data
        while (($data = fgetcsv($handle, 0, ";", '"')) !== FALSE)
        {
            // Prepend array with id, account for extra item because of next()
            array_unshift($data, '', '');

            // Loop through fields
            foreach($this->rs as $key => &$value)
            {
                if($key == 'soort')
                {
                    $value = next($data);
                }
                else
                {
                    // Replace comma with dot
                    $value = str_replace(',', '.', next($data));

                    // Remove 0.0
                    // if(preg_match('/^0.0+/', $value)){
                    //     $value = '';
                    // }
                }
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
