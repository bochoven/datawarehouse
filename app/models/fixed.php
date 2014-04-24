<?php

class Fixed extends Model
{
    
    function __construct()
    {
		parent::__construct('id', strtolower(get_class($this))); //primary key, tablename
        $this->rs['id'] = '';
		$this->rs['afschrijftermijn'] = '';
		$this->rs['macadres'] = '';
		$this->rs['ref_soort'] = '';
		$this->rs['ref_leverancier'] = '';
		$this->rs['ref_vestiging'] = '';
		$this->rs['ref_finbudgethouder'] = '';
		$this->rs['aanschafdatum'] = '';
		$this->rs['ref_lokatie'] = '';
		$this->rs['serienummer'] = '';
		$this->rs['opmerking'] = '';
		$this->rs['specificatie'] = '';
		$this->rs['ref_merk'] = '';
		$this->rs['datwijzig'] = '';
		$this->rs['dataanmk'] = '';
		$this->rs['ipadres'] = '';
		$this->rs['hostnaam'] = '';
		$this->rs['vrijetekst1'] = '';
		$this->rs['objecttype'] = '';
		$this->rs['aankoopbedrag'] = '';
		$this->rs['naam'] = '';
		$this->rs['garantiedatum'] = '';
		$this->rs['onderhoudtot'] = '';
		$this->rs['persoonid_naam'] = '';
		$this->rs['uidaanmk_naam'] = '';
		$this->rs['vrijeopzoek2_naam'] = '';
		$this->rs['vrijeopzoek1_naam'] = '';
		$this->rs['statusid_naam'] = '';
		$this->rs['onderhoudsoortid_tekst'] = '';
		$this->rs['persoonid_loginnaamnetwerk'] = '';
		$this->rs['uidwijzig_naam'] = '';
		$this->rs['attentieid_naam'] = '';
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
            $this->rs['timestamp'] = time();

            $this->save();
        }

        $dbh->commit();
    }

}
