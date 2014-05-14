<?php

class Users extends Model
{
    
    function __construct($uid='')
    {
		parent::__construct('id', strtolower(get_class($this))); //primary key, tablename
        $this->rs['id'] = '';
        $this->rs['uid'] = ''; $this->rt['uid'] = 'CHAR(6) UNIQUE';
        $this->rs['displayname'] = ''; $this->rt['displayname'] = 'VARCHAR(100)';
        $this->rs['departmentnumber'] = ''; $this->rt['department'] = 'CHAR(4)';
        $this->rs['vueenheidcode'] = ''; $this->rt['vueenheid'] = 'CHAR(4)';
        $this->rs['comment'] = ''; // Gebruik voor comments
        $this->rs['timestamp'] = time();

        // Add indexes
        $this->idx[] = array('displayname');
        $this->idx[] = array('departmentnumber');

        // Table version. Increment when creating a db migration
        $this->schema_version = 0;

		// Create table if it does not exist
        $this->create_table();
        
        if($uid)
        {
            $this->retrieve_one('uid=?', array($uid));
            $this->uid = $uid;
        }
        
        return $this;
    }

    // Soms is het department veld base64 encoded, bijvoorbeeld als het met een 0
    // begint en er geen string achter zit: department:: MDkwMCA=
    // Er staat dan een dubbele ::
    // Waarchijnlijk is dit om de nul te behouden als het veld numeriek wordt
    // beschouwd.
    // Gek genoeg vindt AD het record wel als je zoekt op een department 
    // die begint met een 0

    // Staat er wel een string achter dan wordt het gewoon
    // department: 0613 INHOLLAND - Schiphol-Rijk

    // Deze query trekt in 1x AD leeg:
    // ldapsearch -LLL -E pr=1000/noprompt -b 'OU=User Accounts,DC=vu,DC=local' '(&(!(userAccountControl:1.2.840.113556.1.4.803:=2))(department=*)(!(department= ))(!(department=  )))' name displayname department
    // (!(userAccountControl:1.2.840.113556.1.4.803:=2)) = alle enabled accounts
    // er zijn kennelijk accounts met 
    // geen department (studenten)
    // dept = ' '
    // dept = '  '

    function process()
    {

        // Get database handle
        $dbh = $this->getdbh();

        // Wrap in transaction
        $dbh->beginTransaction();

        // Remove previous data
        $dbh->exec('DELETE FROM '.$this->tablename);

        $ldap_conn = @ldap_connect(conf('ldap_server'), conf('ldap_port'));

        $attrs = conf('ldap_attrs', array());

        if ( ! @ldap_bind($ldap_conn, conf('ldap_bind_dn'), conf('ldap_pwd')))
        { 
            throw new Exception(ldap_error($ldap_conn), 1);            
        }

        if ( ! $ldap_res = @ldap_search($ldap_conn, conf('ldap_base_dn'), conf('ldap_filter'), $attrs))
        {
            throw new Exception(ldap_error($ldap_conn), 1);   
        }

        $cnt = 0;

        $entry = ldap_first_entry($ldap_conn, $ldap_res);
        while ($entry)
        {
            $this->rs['comment'] = '';
            $this->rs['id'] = 0;

            foreach( $attrs AS $attr)
            {
                $clean = $this->get_clean_attr($ldap_conn, $entry, $attr);
                if(strpos($clean, ','))
                {
                    $this->rs['comment'] .= "$attr: $clean;";
                    $this->rs[$attr] = strtok($clean, ',');
                }
                else
                {
                    $this->rs[$attr] = $clean;
                }
            }

            $this->save();

            $cnt++;

            $entry = ldap_next_entry($ldap_conn, $entry);
        }

        $dbh->commit();

        alert('Imported '.$cnt.' LDAP entries');
    }

    /**
     * Clean attribute
     *
     * @return string attribute
     * @author 
     **/
    function get_clean_attr( $ldap_conn, $entry, $attr )
    {
        
        if($values = @ldap_get_values_len($ldap_conn, $entry, $attr))
        {
            $out = '';

            if ( $values['count'] == 1 )
            {
                $out = $values[0];
            } 
            else
            {
                unset($values['count']);
                $out = implode(', ', $values);
            }

        }
        else
        {
            $out = '0000';
        }


        return $out;

    }

}
