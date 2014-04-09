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

	function submit()
	{
		
		if($_FILES)
		{
			if( ! isset($_FILES['file']) OR $_FILES['file']['error'] != 0)
			{
				echo 'upload failed';
				print_r(ini_get_all());
				require(APP_PATH.'helpers/upload_helper'.EXT);
				throw new UploadException($_FILES['file']['error']);
				exit;
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
				}
			}

			if( ! $found)
			{
				throw new Exception("Cannot determine type", 1);
				
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
	            echo "Failed: " . $e->getMessage();
	            return FALSE;
	        }

	        fclose($handle);

			echo 'Success';

			return;

			// Move excel to downloads folder
			move_uploaded_file($_FILES['file']['tmp_name'], APP_ROOT . 'downloads/'.$GLOBALS['shortname'].'.xls');

			

		}

		//redirect('admin/dashboard');
	}

	

}