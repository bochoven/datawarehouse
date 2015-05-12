<?php
class admin extends Controller
{
	function __construct()
	{
		if( ! $this->authorized())
		{
			redirect('auth/login');
		}
	} 


	//===============================================================

	function index()
	{
        $data = array();
		$obj = new View();
		$obj->view('admin/import_export', $data);

	}

	//===============================================================


	function panel($which = '')
	{
		if($which)
		{
			$data['page'] = 'clients';
			$data['scripts'] = array("clients/client_list.js");
			$view = 'admin/'.$which;
		}
		else
		{
			$data = array('status_code' => 404);
			$view = 'error/client_error';
		}

		$obj = new View();
		$obj->view($view, $data);
	}

	//===============================================================

	/**
	 * Get count of objects
	 *
	 * @param string 
	 * @author 
	 **/
	function get_count($what = '')
	{
		switch ($what)
		{
			case 'fixed':
				$sql = "SELECT COUNT(*) AS count FROM fixed";
				break;
			
			default:
				// Get queries
				$queries = conf('queries');
				if(isset($queries[$what]))
				{
					// Only select t.naam in subquery -> remove others
					// assumes t represents the topdesk table
					$subq = preg_replace('/SELECT.+FROM/si', 'SELECT t.naam FROM', $queries[$what]);

					$sql = sprintf("SELECT COUNT(1) as count FROM topdesk WHERE naam IN (%s)", $subq);
				}
				else
				{
					// Query does not exist
					$sql = "SELECT 0 AS count";
					$msg['error'] = 'Cannot find query for :' . $what;
				}
		}

		$msg['count'] = 0;

		try
		{
			$model = new Fixed;
		
			if($res = $model->query($sql))
			{
				$msg['count'] = (int) $res[0]->count;
			}
		}
		catch (Exception $e)
		{
			// TODO: generate an error
			$msg['error'] = $e->getMessage();
		}
		

		
		$obj = new View();
		$obj->view('json', array('msg' => $msg));


	}

	/**
	 * Redirect to TOPdesk hardware card
	 *
	 * @author 
	 **/
	function topdesk_view($name = '')
	{
		$params['lookup'] = 'naam';
		$params['lookupValue'] = $name;
		redirect(conf('topdesk_server')."/tas/secure/hardware?".http_build_query($params));
	}

	/**
	 * Get fix params and redirect to topdesk edit url
	 *
	 * @param lookupvalue
	 * @author 
	 **/
	function topdesk_fix($name, $save = '')
	{
		$fixed = new Fixed;
		$topdesk = new Topdesk;

		// Save the record?
		$save = $save == 'save' ? 'true' : 'false';

		// Skip these key when comparing with fix array
		$skipthese = array('id', 'datwijzig');

		// Changeable values todo: move to config
		// When the value is an array this is a ref_field
		// Otherwise it is a normal field
		$change_array = array(
			'vrijeopzoek1_naam' => array('naam'),
			'vrijeopzoek2_naam' => array('naam'),
			'lokatieid' => array('naam'),
			'budgethouderid' => array('naam'),
			'vestigingid' => array('naam'),
			'persoonid' => array('loginnaamnetwerk'),
			'budgethouderid_naam' => array('naam'),
			'lokatieid_naam' => array('naam'),
			'aanschafdatum' => '',
			'aankoopbedrag' => '',
			'macadres' => '',
			'vrijetekst1' => ''
			);

		// Some fields have to be renamed :-(
		$rename_array = array(
			'vrijeopzoek1_naam' => 'vrijeopzoek1',
			'vrijeopzoek2_naam' => 'vrijeopzoek2',
			'budgethouderid_naam' => 'budgethouderid',
			'lokatieid_naam' => 'lokatieid'
			);

		// Holds the changed fields
		$changes = array();

		// Get fixed object
		if( ! $fixed->retrieve_one('naam=?', $name))
		{
			error('Object niet in fixed '.$name);
		}

		// Get topdesk object
		if( ! $topdesk->retrieve_one('naam=?', $name))
		{
			error('Object niet in topdesk '.$name);
		}

		// Check for errors
		if( ! $GLOBALS['alerts'])
		{
			foreach($fixed->rs AS $k => $v)
			{
				if(in_array($k, $skipthese))
				{
					continue;
				}

				if($topdesk->$k !== $v)
				{
					$changes[$k] = $v;
				} 
			}

			// Check for changes
			if($changes)
			{
				$params = array();
				$cnt = 0;

				// Contains items for note
				$item_arr = array();

				// Convert changes to params
				foreach($changes AS $field => $value)
				{
					if(array_key_exists($field, $change_array))
					{
						
						$change_format = $change_array[$field];

						// Rename
						$field = array_key_exists($field, $rename_array) ? $rename_array[$field] : $field;

						// Ref_fields are encoded as array
						if(is_array($change_format))
						{
							$params['replacefield'.$cnt] = $field;
							$params['searchfield'.$cnt] = $change_format[0];
							$params['searchvalue'.$cnt] = $value;
						}
						else // Regular field
						{
							$params['field'.$cnt] = $field;
							$params['value'.$cnt] = $value;
						}

						// Increment counter
						$cnt++;
					}
					else
					{
						error("Field $field is not listed in change_array");
						break;
					}

					$item_arr[] = "$field = $value";
				}

				if( ! $GLOBALS['alerts'])
				{
					// Add Note
					$params['field'.$cnt] = 'aantekeningen';
					$params['value'.$cnt] = sprintf('%s Datawarehouse updated %s', date('d-m-Y H:i'), implode(', ', $item_arr));
					$params['append'.$cnt] = 'true';
					$params['newline'.$cnt] = '2';

					// Add extra params
					$params['action'] = 'edit';
					$params['lookup'] = 'naam';
					$params['lookupValue'] = $name;
					$params['validate'] = 'true';
					$params['save'] = $save;

					// Store changes in topdesk table
					foreach($changes AS $k => $v)
					{
						$topdesk->$k = $v;
					}
					$topdesk->save();

					// Delete fixed entry
					$fixed->delete();

					echo conf('topdesk_server')."/tas/secure/hardware?".http_build_query($params);

					// Redirect to topdesk and apply fixes
					redirect(conf('topdesk_server')."/tas/secure/hardware?".http_build_query($params));

				}
			}
			else
			{
				error('No changes?');
			}
		}


		$data = array();
		$obj = new View();
		$obj->view('admin/data_import', $data);

					

	}

	/**
	 * Apply fixes
	 *
	 * @return void
	 * @author 
	 **/
	function fix($what)
	{
		// Fix array key = fixed field, value = query field.
		$fix_array = array();

		// Hardcoded values
		$set_value_array = array();

		switch ($what)
		{
			case 'orgeencode':

				// Get the orgeen_fix query
				$queries = conf('queries');
				$sql = $queries['orgeen_fix'];

				// Replace fixed.vrijeopzoek2_naam with user.departmentnumber
				$fix_array = array('vrijeopzoek2_naam' => 'departmentnumber');

				break;

			case 'mac':
				// Get the macadres_fix query
				$queries = conf('queries');
				$sql = $queries['macadres_fix'];

				// Replace fixed.macadres with lowercase macadres
				$fix_array = array('macadres' => 'macadres');

				break;

			case 'fco':
				// Get fco_fix query
				$queries = conf('queries');
				$sql = $queries['fco_fix'];

				// Replace vrijeopzoek2_naam with debiteur (orgeencode)
				$fix_array['vrijeopzoek2_naam'] = 'debiteur';
				$fix_array['budgethouderid_naam'] = 'afkorting';

				break;

			case 'ruimte_correctie':
				// Get the ruimte_correctie query
				$queries = conf('queries');
				$sql = $queries['ruimte_correctie'];

				// Replace fixed.macadres with lowercase macadres
				$fix_array = array(
					'budgethouderid_naam' => 'eigenaar',
					'vrijeopzoek2_naam' => 'kostenplaats_special'
				);

				break;

			case 'walloutlet_location':
				// Get the walloutlet_location query
				$queries = conf('queries');
				$sql = $queries['walloutlet_location_fix'];

				// Replace lokatieid_naam with fco ruimtenr
				$fix_array['lokatieid_naam'] = 'ruimtenr';

				// We zetten daarbij nu een - onder eigenaar zodat we weten dat deze 
				// hardware niet gezien is bij de inventarisatie maar via een 
				// Walloutlet op eenheid is gekoppeld
				$set_value_array['vrijeopzoek1_naam'] = '-';

				break;

			case 'prijs':
				// Get the walloutlet_location query
				$queries = conf('queries');
				$sql = $queries['prijs_fix'];

				// Replace lokatieid_naam with fco ruimtenr
				$fix_array['aankoopbedrag'] = 'prijs';

				break;

			case 'walloutlet':
				// Get the walloutlet_location query
				$queries = conf('queries');
				$sql = $queries['walloutlet_fix'];

				// Replace vrijetekst1 with port string
				$fix_array['vrijetekst1'] = 'port';

				break;						
			
			default:
				return;
				break;
		}

		$model = new Fixed;
		$fixed = new Fixed;
		$topdesk = new Topdesk;

		$dbh = getdbh();

		$dbh->beginTransaction();

		$cnt = 0;
		foreach ($model->query($sql) as $obj)
		{
			// Reset id
			$fixed->id = '';

			// Load record from fixed array;
			$fixed->retrieve_one('naam=?', $obj->naam);

			if( ! $fixed->id)
			{
				// Record does not exist, load record from topdesk table
				$topdesk->retrieve_one('naam=?', $obj->naam);
				// Copy values to fixed;
				$fixed->rs = $topdesk->rs;

				// Reset id
				$fixed->id = '';
			}

			// Apply fixes
			foreach ($fix_array as $target => $source)
			{
				$fixed->$target = $obj->$source;
			}

			// Set hardcoded values (if any)
			foreach ($set_value_array as $target => $value)
			{
				$fixed->$target = $value;
			}

			// Set modified time
			$fixed->datwijzig = date('Y-m-d H:i:s');

			// Save to db
			$fixed->save();

			$cnt++;
		}

		$dbh->commit();

		// Return json
		$msg['info'] = "$cnt fixes applied";
		$obj = new View();
		$obj->view('json', array('msg' => $msg));

	}

	/**
	 * Reset table
	 * 
	 * Drop and recreate table
	 *
	 * @param string table name
	 * @author 
	 **/
	function reset($table = 'fixed')
	{
		$sql = "DROP table $table";
		$model = new $table;
		$model->query($sql);
		$model->create_table($force = TRUE);

		$msg['info'] = "Table '$table' reset successfully";
		$obj = new View();
		$obj->view('json', array('msg' => $msg));

	}

	//===============================================================

	function get_users()
	{
		$model_obj = new Users();
		
		try
		{
			$model_obj->process();
        }
        catch (Exception $e) 
        {
            $dbh = getdbh();
            $dbh->rollBack();
            $this->errors .= "Failed: " . $e->getMessage();
            printf("Failed query: %s; reason: %s", print_r($model_obj->rs, TRUE), $e->getMessage());
            return FALSE;
        }

        echo 'Success';
	}
	//===============================================================

	function submit()
	{
		try
		{
			if($_FILES)
			{
				
				if( ! isset($_FILES['file']) OR $_FILES['file']['error'] != 0)
				{
					require(APP_PATH.'helpers/upload_helper'.EXT);
					throw new UploadException($_FILES['file']['error']);
				}

				//Read first line to detect filetype
				ini_set("auto_detect_line_endings", true);

				if (($handle = fopen($_FILES['file']['tmp_name'], "r")) === FALSE)
				{
					throw new Exception("Cannot read ".$_FILES['file']['tmp_name'], 1);
				}

				if(($data = fgetcsv($handle, 0, ";", '"')) === FALSE)
				{
					throw new Exception("Cannot read first line of csv file", 1);				
				}

				$found = '';
				foreach(conf('csv_formats', array()) AS $model => $header)
				{
					if($header == $data)
					{
						$found = $model;
						break;
					}
				}

				if( ! $found)
				{
					throw new Exception(sprintf("Cannot determine type for this header: %s", var_export($data, TRUE)), 1);
				}

				// Instantiate model
				$model_obj = new $found;

				try
				{
					$model_obj->process($handle);
		        }
		        catch (Exception $e) 
		        {
		            $dbh = getdbh();
		            $dbh->rollBack();
		            $this->errors .= "Failed: " . $e->getMessage();
		            error(sprintf("Failed query: %s; reason: %s", print_r($model_obj->rs, TRUE), $e->getMessage()));
		        }

		        fclose($handle);

		        $obj = new View();
				$obj->view('admin/data_import', array());


				return;

				// Move excel to downloads folder
				move_uploaded_file($_FILES['file']['tmp_name'], APP_ROOT . 'downloads/'.$GLOBALS['shortname'].'.xls');

				

			}
		}
		catch (Exception $e)
		{
			fatal('Upload failed: '.$e->getMessage());
		}
		

		//redirect('admin/dashboard');
	}

	/**
	 * Dump csv
	 *
	 * @return void
	 * @author 
	 **/
	function dump_csv($what = 'hardware_gebouw')
	{
		
		$export_queries = conf('exports');

		if(array_key_exists($what, $export_queries))
		{
			$data['sql'] = $export_queries[$what];
			$data['filename'] = $what;
			$view = 'export/export_csv';
		}
		else
		{
			$data['status_code'] = 'Export unknown: '.$what;
			$view = 'error/client_error'; //FIXME
		}

		$obj = new View();
		$obj->view($view, $data);

	}

	/**
	 * Dump xls
	 *
	 * @return void
	 * @author 
	 **/
	function dump_xls($what = 'hardware_persoon')
	{
		$export_queries = conf('exports');

		if(array_key_exists($what, $export_queries))
		{
			$data['sql'] = $export_queries[$what];
			$data['filename'] = $what;
			$view = 'export/export_xls';
		}
		else
		{
			$data['status_code'] = 'Export unknown: '.$what;
			$view = 'error/client_error'; //FIXME
		}

		$obj = new View();
		$obj->view($view, $data);

	}

}