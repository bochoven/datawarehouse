<?php

class Orgeen extends Model
{
    
    function __construct()
    {
		parent::__construct('id', strtolower(get_class($this))); //primary key, tablename
        $this->rs['id'] = '';
		$this->rs['org_code'] = ''; $this->rt['org_code'] = 'CHAR(4)';
		$this->rs['parentcode'] = ''; $this->rt['parentcode'] = 'CHAR(4)';
		$this->rs['SAPHR'] = '';
		$this->rs['naam_organisatie'] = '';
		$this->rs['afkorting'] = '';
		$this->rs['begindatum'] = '';
		$this->rs['einddatum'] = '';
		$this->rs['ind_mail'] = '';
		$this->rs['domein_empl'] = '';
		$this->rs['domein_student'] = '';
		$this->rs['timestamp'] = time();


        // Add indexes
        $this->idx[] = array('org_code');

        // Table version. Increment when creating a db migration
        $this->schema_version = 1;

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
            $this->rs['timestamp'] = time();

            $this->save();
        }

        $dbh->commit();
    }

}
