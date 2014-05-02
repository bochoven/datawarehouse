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
			'PoE'
			),
		'outlet_room' => array(
			'Datacom',
			'Gebruikersnaam',
			'Omschrijving',
			'Ruimtenr',
			'Verdiepingsnr',
			''
			),
		'topdesk' => array(
			'afschrijftermijn',
			'macadres',
			'ref_soort',
			'ref_leverancier',
			'ref_vestiging',
			'ref_finbudgethouder',
			'aanschafdatum',
			'ref_lokatie',
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
			'onderhoudsoortid_tekst',
			'persoonid_loginnaamnetwerk',
			'uidwijzig_naam',
			'attentieid_naam'),
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
		'ruimte_correctie' => array ( 
			'Ruimte_special',
			'Kostenplaats_Special',
			'Eigenaar',
			'Type',
			'',
			'',
			'',
			'')
		);
	
	// Lijst van machines die op vunetid staan
	// en waarvan het vunetid maar 1 orgeencode heeft
	// en department matcht, maar orgeen is niet ingevuld
	$conf['queries']['orgeen_fix'] = 
		"SELECT t.naam, t.hostnaam, t.ref_soort, t.persoonid_loginnaamnetwerk, 
				comment, t.ref_finbudgethouder, t.vrijeopzoek2_naam,
				departmentnumber, 
			o.afkorting 
		FROM topdesk t 
		LEFT JOIN users u ON (t.persoonid_loginnaamnetwerk = u.uid)
		LEFT JOIN orgeen o ON (u.departmentnumber = o.org_code)
		LEFT JOIN fixed f ON (t.naam = f.naam)
		WHERE t.persoonid_loginnaamnetwerk != ''
		AND u.comment = ''
		AND t.ref_finbudgethouder = afkorting
		AND t.vrijeopzoek2_naam = ''
		AND f.vrijeopzoek2_naam IS NULL";

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
		array('data_age', 'data_integrity'),
		array('topdesk_budget', 'topdesk_soort')
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
	
	
