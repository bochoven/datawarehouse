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
				$sql = "SELECT COUNT(*) AS count fROM fixed";
				break;
			
			default:
				// Get queries
				$queries = conf('queries');
				if(isset($queries[$what]))
				{
					$sql = str_replace('SELECT', 'SELECT COUNT(*) AS count,', conf('queries')[$what]);
				}
				else
				{
					$sql = "SELECT COUNT(*) AS count fROM fixed";
				}
		}

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
		}
		

		
		$obj = new View();
		$obj->view('json', array('msg' => $msg));


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
		switch ($what)
		{
			case 'orgeencode':

				// Get the orgeen_fix query
				$sql = conf('queries')['orgeen_fix'];

				// Replace fixed.vrijeopzoek2_naam with user.departmentnumber
				$fix_array = array('vrijeopzoek2_naam' => 'departmentnumber');

				break;
			
			default:
				return;
				break;
		}

		$model = new Fixed;
		$fixed = new Fixed;
		$topdesk = new Topdesk;
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
			foreach ($fix_array as $target => $source) {
				$fixed->$target = $obj->$source;
			}

			// Set modified time
			$fixed->datwijzig = date('Y-m-d H:i:s');

			// Save to db
			$fixed->save();

			$cnt++;
		}

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
		            printf("Failed query: %s; reason: %s", print_r($model_obj->rs, TRUE), $e->getMessage());
		            return FALSE;
		        }

		        fclose($handle);

				echo 'Success';

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
	function dump($what = 'topdesk')
	{
		$data = array();
		$obj = new View();
		$obj->view('topdesk/export', $data);

	}

}