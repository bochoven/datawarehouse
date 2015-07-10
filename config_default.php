<?php if ( ! defined( 'KISS' ) ) exit;

	/*
	|===============================================
	| Default settings DON'T CHANGE!
	|===============================================
	|  
	| Please don't edit this file, it will get overwritten 
	| when a new version gets out. Just add the items you
	| want to change to config.php and change them there.
	|
	*/
	
	/*
	|===============================================
	| csv formats
	|===============================================
	|  
	| description of csv file headers
	| if the header matches, the data will be associated with the correct model
	| 
	|
	*/
	$conf['csv_formats'] = array(
		'fco' => array(
			'Functieplaats',
			'Deurcode',
			'Omschrijving',
			'Activiteitcode',
			'Klantnaam',
			'Debiteur',
			'Gebruikerstatus',
			'Lokale Info',
			'In gebruik van',
			'Hoofd deb code'
			),
		'nbd' => array(
			'Port',
			'VLAN',
			'Speed',
			'Status',
			'IP address',
			'hostname',
			'MAC address',
			'Room',
			'Out (MB)',
			'In (MB)',
			'timestamp'
			),
		'outlet_room' => array(
			'Datacom',
			'Gebruikersnaam',
			'Omschrijving',
			'Ruimtenr',
			'Verdiepingsnr',
			'Bestandsnaam'
			),
		'topdesk_old' => array(
			'afschrijftermijn',
			'macadres',
			'soortid_naam',
			'leverancierid_naam',
			'vestigingid_naam',
			'budgethouderid_naam',
			'aanschafdatum',
			'lokatieid_naam',
			'serienummer',
			'opmerking',
			'specificatie',
			'ref_merk',
			'datwijzig',
			'dataanmk',
			'ipadres',
			'hostnaam',
			'vrijetekst1',
			'objecttype',
			'aankoopbedrag',
			'naam',
			'garantiedatum',
			'onderhoudtot',
			'persoonid_naam',
			'uidaanmk_naam',
			'vrijeopzoek2_naam',
			'vrijeopzoek1_naam',
			'statusid_naam',
			'onderhoudsoortid_naam',
			'persoonid_loginnaamnetwerk',
			'uidwijzig_naam',
			'attentieid_naam'),
		'topdesk' => array(
			'vrijeopzoek4_naam',
			'macadres',
			'attvrijelogisch4',
			'attvrijelogisch5',
			'verhuurtekst',
			'specificatie',
			'attvrijelogisch1',
			'attvrijegetal4',
			'attvrijegetal5',
			'attvrijelogisch3',
			'attvrijegetal2',
			'attvrijegetal3',
			'vrijememo1',
			'attvrijelogisch2',
			'vrijedatum4',
			'vrijememo2',
			'vrijedatum3',
			'vrijememo3',
			'hostnaam',
			'vrijememo4',
			'aankoopbedrag',
			'naam',
			'vrijememo5',
			'vrijegetal5',
			'vrijedatum5',
			'garantiedatum',
			'vrijegetal4',
			'vrijegetal3',
			'vrijedatum2',
			'vrijegetal2',
			'vrijedatum1',
			'vrijegetal1',
			'rm_specification',
			'vrijelogisch2',
			'vrijelogisch1',
			'attvrijetekst1',
			'attvrijetekst2',
			'attvrijetekst3',
			'onderhoudnummer',
			'attvrijetekst4',
			'attvrijetekst5',
			'attvrijegetal1',
			'datwijzig',
			'topsisusername',
			'attvrijedatum4',
			'attvrijedatum5',
			'attvrijedatum1',
			'attvrijedatum2',
			'wburl',
			'attvrijedatum3',
			'afschrijftermijn',
			'reserveerbaarsshd',
			'verhuurborg',
			'verzekerdatum',
			'aanschafdatum',
			'onderhoudprijs',
			'onderhoudcontract',
			'serienummer',
			'opmerking',
			'webbrowser',
			'dataanmk',
			'ipadres',
			'vrijelogisch5',
			'vrijelogisch3',
			'objecttype',
			'vrijelogisch4',
			'reserveerbaarkantooruren',
			'reserveerbaaractiveerbaar',
			'restwaarde',
			'reserveerbaarsecure',
			'onderhoudvanaf',
			'verhuurprijssysteem',
			'reservzichtbaarsshd',
			'onderhoudresponsietijd',
			'attvrijememo1',
			'attvrijememo2',
			'attvrijememo3',
			'topsis',
			'attvrijememo4',
			'attvrijememo5',
			'verhuurprijs',
			'vrijetekst5',
			'vrijetekst4',
			'vrijetekst3',
			'vrijetekst2',
			'vrijetekst1',
			'onderhoudtot',
			'attvrijeopzoek2_naam',
			'attvrijeopzoek1_naam',
			'vrijeopzoek2_naam',
			'vestigingid_naam',
			'leverancierid_naam',
			'attvrijeopzoek5_naam',
			'attvrijeopzoek3_naam',
			'merkid_naam',
			'statusid_naam',
			'onderhoudsoortid_naam',
			'budgethouderid_naam',
			'attentieid_naam',
			'installatiedoorid_loginnaamnetwerk',
			'aanspreekpuntid_loginnaamnetwerk',
			'lokatieid_naam',
			'attvrijeopzoek4_naam',
			'vrijeopzoek5_naam',
			'persoonid_loginnaamnetwerk',
			'uidwijzig_naam',
			'vrijeopzoek3_naam',
			'persoonid_naam',
			'uidaanmk_naam',
			'soortid_naam',
			'onderhoud_doorid_naam',
			'vrijeopzoek1_naam'
		),
		'orgeen' => array(
		 	'org_code',
		 	'parentcode',
		 	'SAPHR',
		 	'naam_organisatie',
		 	'afkorting',
		 	'begindatum',
		 	'einddatum',
		 	'ind_mail',
		 	'domein_empl',
		 	'domein_student'),
		'prijs' => array (
			'Soort',
			'Prijs',
			''),
		'ruimte_correctie' => array( 
			'Ruimte_special',
			'Kostenplaats_Special',
			'Eigenaar',
			'Type',
			'',
			'',
			'',
			''),
		'dhcp' => array(
			'# DHCP Server Configuration file.'),
		'dhcp_log' => array(
			'last,mac,ip,host,cnt,"helper_address","client_class","building_block",usergroup'),
		'ad_computer' => array( // Active directory computer objects
			'description',
			'dn',
			'lastLogon',
			'name',
			'operatingSystem')
		);
	
	/*
	|===============================================
	| Fix queries 
	|===============================================
	|  
	| Queries that are used to correct the topdesk database
	| Use t for the topdesk table!
	| 
	|
	*/
	$conf['queries']['orgeen_fix'] = 
		"SELECT t.naam, t.hostnaam, t.soortid_naam, t.persoonid_loginnaamnetwerk, 
				comment, t.budgethouderid_naam, t.vrijeopzoek2_naam,
				departmentnumber, 
			o.afkorting 
		FROM topdesk t 
		LEFT JOIN users u ON (t.persoonid_loginnaamnetwerk = u.uid)
		LEFT JOIN orgeen o ON (u.departmentnumber = o.org_code)
		LEFT JOIN fixed f ON (t.naam = f.naam)
		WHERE t.persoonid_loginnaamnetwerk != ''
		AND u.comment = ''
		AND t.budgethouderid_naam = afkorting
		AND t.vrijeopzoek2_naam = ''
		AND f.vrijeopzoek2_naam IS NULL";

	// Find Lowercase macadresses
	$conf['queries']['macadres_fix'] = 
		"SELECT t.naam, t.hostnaam, t.soortid_naam, UPPER(t.macadres) AS macadres
		FROM topdesk t
		LEFT JOIN fixed f ON (t.naam = f.naam)
		WHERE t.macadres IS NOT NULL
		AND t.macadres != ''
		AND t.macadres != UPPER(t.macadres)
		AND (f.macadres IS NULL OR f.macadres != UPPER(t.macadres))";

	// Find hardware in the ruimte_correctie table
	$conf['queries']['ruimte_correctie'] = 
		"SELECT t.naam, t.lokatieid_naam, t.budgethouderid_naam, t.vrijeopzoek2_naam, 
			r.eigenaar, r.kostenplaats_special 
		FROM topdesk t 
		LEFT JOIN ruimte_correctie r ON (t.lokatieid_naam = r.ruimte_special)
		LEFT JOIN fixed f ON (t.naam = f.naam)
		WHERE t.budgethouderid_naam IS NOT NULL 
		AND t.soortid_naam NOT IN ('Printpaal', 'Multifunctional')
		AND (t.vrijeopzoek2_naam != kostenplaats_special OR t.budgethouderid_naam != eigenaar)
		AND (f.naam IS NULL OR f.vrijeopzoek2_naam != kostenplaats_special OR f.budgethouderid_naam != eigenaar)";

	// Walloutlet lokatie correctie
	$conf['queries']['walloutlet_location_fix'] =
		"SELECT t.naam, t.hostnaam, t.lokatieid_naam, o.ruimtenr 
		FROM topdesk t 
		LEFT JOIN nbd n ON (t.macadres = n.mac_address)
		LEFT JOIN outlet_room o ON (n.port = o.datacom)
		LEFT JOIN fixed f ON (t.naam = f.naam)
		WHERE o.ruimtenr IS NOT NULL 
		AND o.ruimtenr != ''
		AND t.soortid_naam NOT IN ('Printpaal', 'Multifunctional')
		AND o.ruimtenr != t.lokatieid_naam
		AND (f.naam IS NULL OR f.lokatieid_naam != o.ruimtenr)
		GROUP BY o.datacom 
		HAVING COUNT(*) = 1";

	// FCO correctie
	$conf['queries']['fco_fix'] =
		"SELECT t.naam, t.lokatieid_naam, t.budgethouderid_naam, t.vrijeopzoek2_naam,
			f.debiteur AS debiteur, o.afkorting, r.kostenplaats_special, r.eigenaar 
		FROM topdesk t 
		LEFT JOIN fco f ON (t.lokatieid_naam = f.functieplaats) 
		LEFT JOIN orgeen o ON (f.debiteur = o.org_code) 
		LEFT JOIN ruimte_correctie r ON (t.lokatieid_naam = r.ruimte_special)
		LEFT JOIN fixed fx ON (t.naam = fx.naam)
		WHERE t.persoonid_loginnaamnetwerk = ''
		AND t.soortid_naam NOT IN ('Printpaal', 'Multifunctional')
		AND f.debiteur IS NOT NULL
		AND f.debiteur != ''
		AND (t.vrijeopzoek2_naam != f.debiteur OR t.budgethouderid_naam != o.afkorting)
		AND r.ruimte_special IS NULL
		AND (fx.naam IS NULL OR fx.vrijeopzoek2_naam != f.debiteur OR fx.budgethouderid_naam != o.afkorting)";

	// Prijs correctie
	$conf['queries']['prijs_fix'] =
		"SELECT t.naam, t.vrijegetal1, p.prijs 
		FROM topdesk t
		LEFT JOIN prijs p ON (t.soortid_naam = p.soort)
		LEFT JOIN fixed f ON (t.naam = f.naam)
		WHERE p.prijs IS NOT NULL 
		AND p.prijs != t.vrijegetal1
		AND (f.naam IS NULL OR f.vrijegetal1 != p.prijs)";

	$conf['queries']['walloutlet_fix'] =
		"SELECT t.naam, n.port
		FROM topdesk t
		LEFT JOIN nbd n ON t.macadres = n.mac_address
		LEFT JOIN fixed f ON (t.naam = f.naam)
		WHERE n.mac_address IS NOT NULL
		AND n.port != '-'
		AND t.vrijetekst1 != n.port
		AND (f.naam IS NULL OR f.vrijetekst1 != n.port)
		GROUP BY n.mac_address
		HAVING COUNT(*) = 1";

	
	/*
	|===============================================
	| Export queries
	|===============================================
	|  
	| Queries that are used for exports
	|
	*/
$conf['exports']['hardware_update'] = 
		"SELECT vrijeopzoek4_naam, macadres, attvrijelogisch4, attvrijelogisch5, verhuurtekst, specificatie, attvrijelogisch1, attvrijegetal4, attvrijegetal5, attvrijelogisch3, attvrijegetal2, attvrijegetal3, vrijememo1, attvrijelogisch2, vrijedatum4, vrijememo2, vrijedatum3, vrijememo3, hostnaam, vrijememo4, aankoopbedrag, naam, vrijememo5, vrijegetal5, vrijedatum5, garantiedatum, vrijegetal4, vrijegetal3, vrijedatum2, vrijegetal2, vrijedatum1, vrijegetal1, rm_specification, vrijelogisch2, vrijelogisch1, attvrijetekst1, attvrijetekst2, attvrijetekst3, onderhoudnummer, attvrijetekst4, attvrijetekst5, attvrijegetal1, datwijzig, topsisusername, attvrijedatum4, attvrijedatum5, attvrijedatum1, attvrijedatum2, wburl, attvrijedatum3, afschrijftermijn, reserveerbaarsshd, verhuurborg, verzekerdatum, aanschafdatum, onderhoudprijs, onderhoudcontract, serienummer, opmerking, webbrowser, dataanmk, ipadres, vrijelogisch5, vrijelogisch3, objecttype, vrijelogisch4, reserveerbaarkantooruren, reserveerbaaractiveerbaar, restwaarde, reserveerbaarsecure, onderhoudvanaf, verhuurprijssysteem, reservzichtbaarsshd, onderhoudresponsietijd, attvrijememo1, attvrijememo2, attvrijememo3, topsis, attvrijememo4, attvrijememo5, verhuurprijs, vrijetekst5, vrijetekst4, vrijetekst3, vrijetekst2, vrijetekst1, onderhoudtot, attvrijeopzoek2_naam, attvrijeopzoek1_naam, vrijeopzoek2_naam, vestigingid_naam, leverancierid_naam, attvrijeopzoek5_naam, attvrijeopzoek3_naam, merkid_naam, statusid_naam, onderhoudsoortid_naam, budgethouderid_naam, attentieid_naam, installatiedoorid_loginnaamnetwerk, aanspreekpuntid_loginnaamnetwerk, lokatieid_naam, attvrijeopzoek4_naam, vrijeopzoek5_naam, persoonid_loginnaamnetwerk, uidwijzig_naam, vrijeopzoek3_naam, persoonid_naam, uidaanmk_naam, soortid_naam, onderhoud_doorid_naam, vrijeopzoek1_naam
		FROM fixed";

	$conf['exports']['duplicate_walloutlets'] =
		"SELECT o1.datacom, o1.gebruikersnaam, o1.omschrijving, o1.ruimtenr, o1.verdiepingsnr, o1.bestandsnaam
		FROM outlet_room o1
		LEFT JOIN outlet_room o2 ON o1.datacom = o2.datacom
		WHERE o1.id != o2.id
		ORDER BY o1.datacom";

	$conf['exports']['missing_walloutlets_ruimte_tbl'] =
		"SELECT n.port AS datacom, '' AS gebruikersnaam, '' AS omschrijving, '' AS ruimtenr, '' AS verdiepingsnr, '' AS bestandsnaam
		FROM nbd n 
		LEFT JOIN outlet_room o ON (n.port = o.datacom)
		WHERE o.datacom IS NULL
		AND n.port != '-'";

	// Full table exports
	$conf['exports']['dhcp'] =
		"SELECT host, mac, ip, vlan, timestamp
		FROM dhcp";

	$conf['exports']['dhcp_log'] =
		"SELECT *
		FROM dhcp_log";

	$conf['exports']['ad_computer'] =
		"SELECT *
		FROM ad_computer";

	$conf['exports']['fco'] =
		"SELECT *
		FROM fco";
			
	$conf['exports']['nbd'] =
		"SELECT *
		FROM nbd";


	/*
	|===============================================
	| Topdesk server url
	|===============================================
	|  
	| Write the topdesk server url for example
	| https://topdesk.my.org 
	|
	*/
	$conf['topdesk_server'] = "";


	/*
	|===============================================
	| Index page
	|===============================================
	|  
	| Default is index.php? which is the most compatible form.
	| You can leave it blank if you want nicer looking urls.
	| You will need a server which honors .htaccess (apache) or 
	| figure out how to rewrite urls in the server of your choice. 
	|
	*/
	$conf['index_page'] = 'index.php?';
	
	/*
	|===============================================
	| Uri protocol
	|===============================================
	|
	| $_SERVER variable that contains the correct request path, 
	| e.g. 'REQUEST_URI', 'QUERY_STRING', 'PATH_INFO', etc.
	| defaults to AUTO
	|
	*/
	$conf['uri_protocol'] = 'AUTO';
	
	/*
	|===============================================
	| HTTP host
	|===============================================
	|
	| The hostname of the webserver, default automatically
	| determined. no trailing slash
	| 
	*/
	$conf['webhost'] = (empty($_SERVER['HTTPS']) ? 'http' : 'https')
		. '://'.$_SERVER[ 'HTTP_HOST' ];
	
	
	/*
	|===============================================
	| Subdirectory
	|===============================================
	|  
	| Relative to the webroot, with trailing slash.
	| If you're running datawarehouse from a subdirectory of a website,
	| enter subdir path here. E.g. if datawarehouse is accessible here:
	| http://mysite/datawarehouse/ you should set subdirectory to
	| '/datawarehouse/'
	| If you're using .htaccess to rewrite urls, you should change that too
	| The code below is for automagically deterimining your subdirectory,
	| if it fails, just add $conf['subdirectory'] = '/your_sub_dir/' in
	| config.php
	|
	*/
	$conf['subdirectory'] = substr(
					    $_SERVER['PHP_SELF'],
					    0,
					    strpos($_SERVER['PHP_SELF'], basename(FC))  
				    );
	
	/*
	|===============================================
	| Sitename
	|===============================================
	| 
	| Will appear in the title bar of your browser and as heading on each webpage
	|
	*/
	$conf['sitename'] = 'datawarehouse';
	
	/*
	|===============================================
	| Authentication
	|===============================================
	| 
	| Currently four authentication methods are supported:
	|
	|	1) Don't require any authentication: paste the following line in your config.php
	|			$conf['auth']['auth_noauth'] = array();
	|
	|	2) (default) Local accounts: visit /index.php?/auth/generate and paste
	|	   the result in your config.php
	|
	|	3) LDAP:
	|		At least fill in these items:
	|		$conf['auth']['auth_ldap']['server']      = 'ldap.server.local'; // One or more servers separated by commas.
	|		$conf['auth']['auth_ldap']['usertree']    = 'uid=%{user},cn=users,dc=server,dc=local'; // Where to find the user accounts.
	|		$conf['auth']['auth_ldap']['grouptree']   = 'cn=groups,dc=server,dc=local'; // Where to find the groups.
	|		$conf['auth']['auth_ldap']['mr_allowed_users'] = array('user1','user2'); // For user based access, fill in users.
	|		$conf['auth']['auth_ldap']['mr_allowed_groups'] = array('group1','group2'); // For group based access, fill in groups.
	|
	|		Optional items:
	|		$default_conf['userfilter']  = '(&(uid=%{user})(objectClass=posixAccount))'; // LDAP filter to search for user accounts.
    |		$default_conf['groupfilter'] = '(&(objectClass=posixGroup)(memberUID=%{uid}))'; // LDAP filter to search for groups.
	|		$conf['auth']['auth_ldap']['port']        = 389; // LDAP port.
	|		$conf['auth']['auth_ldap']['version']     = 3; // Use LDAP version 1, 2 or 3.
	|		$conf['auth']['auth_ldap']['starttls']    = FALSE; // Set to TRUE to use TLS.
	|		$conf['auth']['auth_ldap']['referrals']   = FALSE; // Set to TRUE to follow referrals.
	|		$conf['auth']['auth_ldap']['deref']       = LDAP_DEREF_NEVER; // How to dereference aliases. See http://php.net/ldap_search
	|		$conf['auth']['auth_ldap']['binddn']      = ''; // Optional bind DN 
	|		$conf['auth']['auth_ldap']['bindpw']      = ''; // Optional bind password
	|		$conf['auth']['auth_ldap']['userscope']   = 'sub'; // Limit search scope to sub, one or base.
	|		$conf['auth']['auth_ldap']['groupscope']  = 'sub'; // Limit search scope to sub, one or base.
	|		$conf['auth']['auth_ldap']['groupkey']    = 'cn'; // The key that is used to determine group membership
	|		$conf['auth']['auth_ldap']['debug']       = 0; // Set to TRUE to debug LDAP.
	|
	|	4) Active Directory: fill the needed and include the lines in your config.php.
	|		 e.g.
	|		$conf['auth']['auth_AD']['account_suffix'] = '@mydomain.local';
	|		$conf['auth']['auth_AD']['base_dn'] = 'DC=mydomain,DC=local'; //set to NULL to auto-detect
	|		$conf['auth']['auth_AD']['domain_controllers'] = array('dc01.mydomain.local'); //can be an array of servers
	|		$conf['auth']['auth_AD']['admin_username'] = NULL; //if needed to perform the search
	|		$conf['auth']['auth_AD']['admin_password'] = NULL; //if needed to perform the search
	|		$conf['auth']['auth_AD']['mr_allowed_users'] = array('macadmin','bossman');
	|		$conf['auth']['auth_AD']['mr_allowed_groups'] = array('AD Group 1','AD Group 2'); //case sensitive
	|
	| Authentication methods are checked in the order that they appear above. Not in the order of your
	| config.php!. You can combine methods 2, 3 and 4
	|
	*/

	/*
	|===============================================
	| Force secure connection when authorizing
	|===============================================
	| 
	| Set this value to TRUE to force https when logging in.
	| This is useful for sites that serve MR both via http and https
	|
	*/
	$conf['auth_secure'] = FALSE;

	/*
	|===============================================
	| Locale
	|===============================================
	| 
	| You can set the locale string here, this will render certain strings
	| according to locale specific settings
	|
	*/
	$conf['locale'] = 'en_US';

	/*
	|===============================================
	| Language
	|===============================================
	| 
	| You can set the language here, this will change the user interface
	| language. See for possible values the 'lang' directory
	|
	*/
	$conf['lang'] = 'en';

    /*
	|===============================================
	| Migrations
	|===============================================
	| 
	| When a new version of datawarehouse comes out
	| it might need to update your database structure
	| if you want to allow this, set 
	| $conf['allow_migrations'] = TRUE;
	|
	| There is a small overhead (one database query) when setting allow_migrations
	| to TRUE. If you are concerned about performance, you can set allow_migrations
	| to FALSE when you're done migrating.
	|
	*/
    $conf['allow_migrations'] = FALSE;

	/*
	|===============================================
	| Dashboard - Layout
	|===============================================
	| 
	| Dashboard layout is an array of rows that contain
	| an array of widgets. Omit the _widget postfix
	|
	*/
    $conf['dashboard_layout'] = array(
		array('data_age', 'data_integrity')
	);

	/*
	|===============================================
	| App settings
	|===============================================
	|
	| If the webapp is in a different directory as index.php, adjust
	| the variables below. For enhanced security it is advised to put the
	| webapp in a directory that is not visible to the internet.
	*/
	
	// Path to system folder, with trailing slash
	$conf['system_path'] = APP_ROOT.'/system/'; 

	// Path to app folder, with trailing slash
	$conf['application_path'] = APP_ROOT.'/app/';

	// Path to view directory, with trailing slash
	$conf['view_path'] = $conf['application_path'].'views/';

	// Path to controller directory, with trailing slash
	$conf['controller_path'] = $conf['application_path'].'controllers/';

	// Path to modules directory, with trailing slash
	$conf['module_path'] = $conf['application_path'] . "modules/";

	
	
	// Routes
	$conf['routes'] = array();
	$conf['routes']['module(/.*)?']	= "module/load$1";
	
	
	/*
	|===============================================
	| PDO Datasource
	|===============================================
	|
	| Specify dsn, username, password and options
	| Supported engines: sqlite and mysql
	| Mysql example:
	| 	$conf['pdo_dsn'] = 'mysql:host=localhost;dbname=datawarehouse';
	| 	$conf['pdo_user'] = 'user';
	| 	$conf['pdo_pass'] = 'pass';
	| 	$conf['pdo_opts'] = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
	|
	*/
	$conf['pdo_dsn'] = 'sqlite:'.$conf['application_path'].'db/db.sqlite';
	$conf['pdo_user'] = '';
	$conf['pdo_pass'] = '';
	$conf['pdo_opts'] = array();
	
	/*
	|===============================================
	| Timezone
	|===============================================
	|
	| See http://www.php.net/manual/en/timezones.php for valid values
	|
	*/
	$conf['timezone'] = @date_default_timezone_get();
	
	/*
	|===============================================
	| Custom css and js
	|===============================================
	|
	| If you want to override the default css or default js
	| you can specify a custom file that will be included
	| in the header (css) and footer (js)
	|
	*/
	//$conf['custom_css'] = '/custom.css';
	//$conf['custom_js'] = '/custom.js';

	
	/*
	|===============================================
	| Debugging
	|===============================================
	|
	| If set to TRUE, will deliver debugging messages in the page. Set to
	| FALSE in a production environment
	*/
	$conf['debug'] = FALSE;
	
	
