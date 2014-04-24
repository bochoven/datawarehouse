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