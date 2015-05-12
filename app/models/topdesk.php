<?php

class Topdesk extends Model
{
    
    function __construct()
    {
		parent::__construct('id', strtolower(get_class($this))); //primary key, tablename
        $this->rs['id'] = '';		
		$this->rs['vrijeopzoek4_naam'] = '';
		$this->rs['macadres'] = ''; $this->rt['macadres'] = 'CHAR(20)';
		$this->rs['attvrijelogisch4'] = '';
		$this->rs['attvrijelogisch5'] = '';
		$this->rs['verhuurtekst'] = '';
		$this->rs['specificatie'] = '';
		$this->rs['attvrijelogisch1'] = '';
		$this->rs['attvrijegetal4'] = '';
		$this->rs['attvrijegetal5'] = '';
		$this->rs['attvrijelogisch3'] = '';
		$this->rs['attvrijegetal2'] = '';
		$this->rs['attvrijegetal3'] = '';
		$this->rs['vrijememo1'] = '';
		$this->rs['attvrijelogisch2'] = '';
		$this->rs['vrijedatum4'] = '';
		$this->rs['vrijememo2'] = '';
		$this->rs['vrijedatum3'] = '';
		$this->rs['vrijememo3'] = '';
		$this->rs['hostnaam'] = '';
		$this->rs['vrijememo4'] = '';
		$this->rs['aankoopbedrag'] = '';
		$this->rs['naam'] = ''; $this->rt['naam'] = 'CHAR(6) UNIQUE'; //object-id
		$this->rs['vrijememo5'] = '';
		$this->rs['vrijegetal5'] = '';
		$this->rs['vrijedatum5'] = '';
		$this->rs['garantiedatum'] = '';
		$this->rs['vrijegetal4'] = '';
		$this->rs['vrijegetal3'] = '';
		$this->rs['vrijedatum2'] = '';
		$this->rs['vrijegetal2'] = '';
		$this->rs['vrijedatum1'] = '';
		$this->rs['vrijegetal1'] = '';
		$this->rs['rm_specification'] = '';
		$this->rs['vrijelogisch2'] = '';
		$this->rs['vrijelogisch1'] = '';
		$this->rs['attvrijetekst1'] = '';
		$this->rs['attvrijetekst2'] = '';
		$this->rs['attvrijetekst3'] = '';
		$this->rs['onderhoudnummer'] = '';
		$this->rs['attvrijetekst4'] = '';
		$this->rs['attvrijetekst5'] = '';
		$this->rs['attvrijegetal1'] = '';
		$this->rs['datwijzig'] = '';
		$this->rs['topsisusername'] = '';
		$this->rs['attvrijedatum4'] = '';
		$this->rs['attvrijedatum5'] = '';
		$this->rs['attvrijedatum1'] = '';
		$this->rs['attvrijedatum2'] = '';
		$this->rs['wburl'] = '';
		$this->rs['attvrijedatum3'] = '';
		$this->rs['afschrijftermijn'] = '';
		$this->rs['reserveerbaarsshd'] = '';
		$this->rs['verhuurborg'] = '';
		$this->rs['verzekerdatum'] = '';
		$this->rs['aanschafdatum'] = '';
		$this->rs['onderhoudprijs'] = '';
		$this->rs['onderhoudcontract'] = '';
		$this->rs['serienummer'] = '';
		$this->rs['opmerking'] = '';
		$this->rs['webbrowser'] = '';
		$this->rs['dataanmk'] = '';
		$this->rs['ipadres'] = '';
		$this->rs['vrijelogisch5'] = '';
		$this->rs['vrijelogisch3'] = '';
		$this->rs['objecttype'] = '';
		$this->rs['vrijelogisch4'] = '';
		$this->rs['reserveerbaarkantooruren'] = '';
		$this->rs['reserveerbaaractiveerbaar'] = '';
		$this->rs['restwaarde'] = '';
		$this->rs['reserveerbaarsecure'] = '';
		$this->rs['onderhoudvanaf'] = '';
		$this->rs['verhuurprijssysteem'] = '';
		$this->rs['reservzichtbaarsshd'] = '';
		$this->rs['onderhoudresponsietijd'] = '';
		$this->rs['attvrijememo1'] = '';
		$this->rs['attvrijememo2'] = '';
		$this->rs['attvrijememo3'] = '';
		$this->rs['topsis'] = '';
		$this->rs['attvrijememo4'] = '';
		$this->rs['attvrijememo5'] = '';
		$this->rs['verhuurprijs'] = '';
		$this->rs['vrijetekst5'] = '';
		$this->rs['vrijetekst4'] = '';
		$this->rs['vrijetekst3'] = '';
		$this->rs['vrijetekst2'] = '';
		$this->rs['vrijetekst1'] = '';
		$this->rs['onderhoudtot'] = '';
		$this->rs['attvrijeopzoek2_naam'] = '';
		$this->rs['attvrijeopzoek1_naam'] = '';
		$this->rs['vrijeopzoek2_naam'] = ''; // Budgetnumber
		$this->rs['vestigingid_naam'] = '';
		$this->rs['leverancierid_naam'] = '';
		$this->rs['attvrijeopzoek5_naam'] = '';
		$this->rs['attvrijeopzoek3_naam'] = '';
		$this->rs['merkid_naam'] = '';
		$this->rs['statusid_naam'] = '';
		$this->rs['onderhoudsoortid_tekst'] = '';
		$this->rs['budgethouderid_naam'] = '';
		$this->rs['attentieid_naam'] = '';
		$this->rs['installatiedoorid_loginnaamnetwerk'] = '';
		$this->rs['aanspreekpuntid_loginnaamnetwerk'] = '';
		$this->rs['lokatieid_naam'] = '';
		$this->rs['attvrijeopzoek4_naam'] = '';
		$this->rs['vrijeopzoek5_naam'] = '';
		$this->rs['persoonid_loginnaamnetwerk'] = '';  $this->rt['persoonid_loginnaamnetwerk'] = 'CHAR(6)'; //vunet-id
		$this->rs['uidwijzig_naam'] = '';
		$this->rs['vrijeopzoek3_naam'] = '';
		$this->rs['persoonid_naam'] = '';
		$this->rs['uidaanmk_naam'] = '';
		$this->rs['soortid_naam'] = '';
		$this->rs['onderhoud_doorid_naam'] = '';
		$this->rs['vrijeopzoek1_naam'] = ''; // Eigenaar
		$this->rs['timestamp'] = time();


        // Add indexes
        $this->idx[] = array('persoonid_loginnaamnetwerk');
        $this->idx[] = array('budgethouderid_naam');
        $this->idx[] = array('vrijeopzoek2_naam');
        $this->idx[] = array('macadres');
        $this->idx[] = array('statusid_naam');

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

        // Drop and recreate table
        $dbh->exec("DROP table $this->tablename");
        $this->create_table($force = TRUE);

        // Drop and recreate fixed table
        $fixed = new Fixed;
        $dbh->exec("DROP table fixed");
        $fixed->create_table($force = TRUE);

        $cnt = 0;

        // Wrap in transaction
        $dbh->beginTransaction();

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

            $cnt++;

            $this->save();
        }

        $dbh->commit();

        alert('Imported '.$cnt.' TOPdesk objects', 'success');
    }

    /**
     * Select uppercase mac addresses
     *
     * @return void
     * @author 
     **/
    function get_uppercase_mac_adresses()
    {
        // Get database handle
        $dbh = $this->getdbh();

        // Make sure the fixed table exists
        $fixed = new Fixed;

        // MySQL has default case insensitive collation
        if($this->get_driver() == 'mysql')
        {
            $binary = 'BINARY';
        }
        else
        {
            $binary = '';
        }

        $sql = "SELECT t.naam, t.hostnaam, t.soortid_naam, LOWER(t.macadres)
        FROM topdesk t
        LEFT JOIN fixed f ON (t.naam = f.naam)
        WHERE t.macadres != $binary LOWER(t.macadres)
        AND f.naam IS NULL";

        return ($this->query($sql));
    }

}
