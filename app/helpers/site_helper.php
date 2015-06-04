<?php

// Webapp name
$GLOBALS['app_name'] = 'datawarehouse';

// Webapp version
$GLOBALS['version'] = '1.0.2';

// Return version without commit count
function get_version()
{
	return preg_replace('/(.*)\.\d+$/', '$1', $GLOBALS['version']);
}

//===============================================
// Uncaught Exception Handling
//===============================================s
function uncaught_exception_handler($e)
{
  // Dump out remaining buffered text
  ob_end_clean();

  // Get error message
  error('Uncaught Exception: '.$e->getMessage());

  // Write footer
  die(View::do_fetch(conf('view_path').'partials/foot.php'));
}

function custom_error($msg='') 
{
	$vars['msg']=$msg;
	die(View::do_fetch(APP_PATH.'errors/custom_error.php',$vars));
}

//===============================================
// Alerts
//===============================================s

$GLOBALS['alerts'] = array();

/**
 * Add Alert
 *
 * @param string alert message
 * @param string type (danger, warning, success, info)
 **/
function alert($msg, $type="info")
{
	$GLOBALS['alerts'][$type][] = $msg;
}

/**
 * Add error message
 *
 * @param string message
 **/
function error($msg)
{
	alert($msg, 'danger');
}

//===============================================
// Database
//===============================================

function getdbh()
{
	if ( ! isset($GLOBALS['dbh']))
	{
		try
		{
			$GLOBALS['dbh'] = new PDO(
				conf('pdo_dsn'),
				conf('pdo_user'),
				conf('pdo_pass'),
				conf('pdo_opts')
				);
		}
		catch (PDOException $e)
		{
			fatal('Connection failed: '.$e->getMessage());
		}

		// Set error mode
		$GLOBALS['dbh']->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		// Store database name in config array
		if(preg_match('/.*dbname=([^;]+)/', conf('pdo_dsn'), $result))
		{
			$GLOBALS['conf']['dbname'] = $result[1];
		}
	}
	return $GLOBALS['dbh'];
}

//===============================================
// Autoloading for Business Classes
//===============================================
// module classes end with _model
function __autoload( $classname )
{
	// Switch to lowercase filename for models
	$classname = strtolower($classname);

	if(substr($classname, -4) == '_api')
	{
		$path = APP_PATH.'modules/'.substr($classname, 0, -4).'/api'.EXT;
	}
	elseif(substr($classname, -6) == '_model')
	{
		$module = substr($classname, 0, -6);
		$path = APP_PATH."modules/${module}/${module}_model".EXT;
	}
	else
	{
		$path = APP_PATH.'models/'.$classname.EXT;
	}

	if ((@include_once $path) !== 1)
	{
		return; //fatal(sprintf('failed to load model at %s', $path), 1);
	}
}

//===============================================
// Language getter, lazy loading
//===============================================

function lang($str)
{
	static $lang = '';

	if( $lang === '')
	{
		$path = conf('application_path') . 'lang/' . 
			conf('lang', 'en') . '/lang.php';
		if ((@include_once $path) !== 1)
		{
			alert('failed to load language file for language: '.conf('lang', 'en'), 'danger');
			$lang = array();
		}
	}
	return array_key_exists($str, $lang) ? $lang[$str] : $str;
}

function url($url='', $fullurl = FALSE)
{
  $s = $fullurl ? conf('webhost') : '';
  $s .= conf('subdirectory').($url && INDEX_PAGE ? INDEX_PAGE.'/' : INDEX_PAGE) . ltrim($url, '/');
  return $s;
}

/**
 * Return a secure url
 *
 * @param string url
 * @return string secure url
 * @author 
 **/
function secure_url($url = '')
{
	$parse_url = parse_url(url($url, TRUE));
	$parse_url['scheme'] = 'https';

	return 
		 ((isset($parse_url['scheme'])) ? $parse_url['scheme'] . '://' : '')
		.((isset($parse_url['user'])) ? $parse_url['user'] 
		.((isset($parse_url['pass'])) ? ':' . $parse_url['pass'] : '') .'@' : '')
		.((isset($parse_url['host'])) ? $parse_url['host'] : '')
		.((isset($parse_url['port'])) ? ':' . $parse_url['port'] : '')
		.((isset($parse_url['path'])) ? $parse_url['path'] : '')
		.((isset($parse_url['query'])) ? '?' . $parse_url['query'] : '')
		.((isset($parse_url['fragment'])) ? '#' . $parse_url['fragment'] : '')
        ;
}

function redirect($uri = '', $method = 'location', $http_response_code = 302)
{
	if ( ! preg_match('#^https?://#i', $uri))
	{
		$uri = url($uri);
	}
	
	switch($method)
	{
		case 'refresh'	: header("Refresh:0;url=".$uri);
			break;
		default			: header("Location: ".$uri, TRUE, $http_response_code);
			break;
	}
	exit;
}

/**
 * Clear value used by array_walk
 *
 * @author Bochoven, A.E. van
 **/
function clear_value(&$val)
{
	$val = '';
}