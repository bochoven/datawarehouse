<?php

class Topdesk extends Model
{
    
    function __construct()
    {
		parent::__construct('id', strtolower(get_class($this))); //primary key, tablename
        $this->rs['id'] = '';
		$this->rs['afschrijftermijn'] = '';
		$this->rs['macadres'] = ''; $this->rt['macadres'] = 'CHAR(20)';
		$this->rs['ref_soort'] = '';
		$this->rs['ref_leverancier'] = '';
		$this->rs['ref_vestiging'] = '';
		$this->rs['ref_finbudgethouder'] = ''; // Afkorting bijv. FEW
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
		$this->rs['naam'] = ''; $this->rt['naam'] = 'CHAR(6) UNIQUE'; //object-id
		$this->rs['garantiedatum'] = '';
		$this->rs['onderhoudtot'] = '';
		$this->rs['persoonid_naam'] = '';
		$this->rs['uidaanmk_naam'] = '';
		$this->rs['vrijeopzoek2_naam'] = ''; // Budgetnumber
		$this->rs['vrijeopzoek1_naam'] = '';
		$this->rs['statusid_naam'] = '';
		$this->rs['onderhoudsoortid_tekst'] = '';
		$this->rs['persoonid_loginnaamnetwerk'] = '';  $this->rt['persoonid_loginnaamnetwerk'] = 'CHAR(6)'; //vunet-id
		$this->rs['uidwijzig_naam'] = '';
		$this->rs['attentieid_naam'] = '';
		$this->rs['timestamp'] = time();

        // Add indexes
        $this->idx[] = array('persoonid_loginnaamnetwerk');
        $this->idx[] = array('ref_finbudgethouder');
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

        $sql = "SELECT t.naam, t.hostnaam, t.ref_soort, LOWER(t.macadres)
        FROM topdesk t
        LEFT JOIN fixed f ON (t.naam = f.naam)
        WHERE t.macadres != $binary LOWER(t.macadres)
        AND f.naam IS NULL";

        return ($this->query($sql));
    }

}
