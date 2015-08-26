<?php
class datatables extends Controller
{
	function __construct()
	{
		if( ! $this->authorized())
		{
			die('Authenticate first.'); // Todo: return json?
		}
	} 

	function data()
	{
		// Sanitize the GET variables here.
		$cfg = array(
			'columns' => array(),
			'start' => 0, // Start
			'length' => 0, // Length
			'draw' => 0, // Identifier, just return
			'search' => '', // Search query
			'where' => '' // Optional where clause
		);
		//echo '<pre>';print_r($_GET);return;

		$cols = $sortcols = $searchcols = array();

		// Process $_GET array
		foreach($_GET as $k => $v)
		{
			if($k == 'search')
			{
				$cfg['search'] = $v['value'];
			}
			elseif(isset($cfg[$k]))
			{
				$cfg[$k] = $v;
			}
		}// endforeach

		// Add columns to config
		$cfg['cols'] = $cols;
		$cfg['sort_cols'] = $sortcols;
		$cfg['search_cols'] = $searchcols;

		//print_r($cfg);

		try
		{
			// Get model
			$obj = new Tablequery($cfg);
			echo json_encode($obj->fetch($cfg));
		}
		catch(Exception $e) 
		{
			echo json_encode(array(
				'error' => $e->getMessage(),
				'draw' => intval($cfg['draw'])
			));
		}

	}
	
}