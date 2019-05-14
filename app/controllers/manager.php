<?php
class Manager extends Controller
{
	function __construct()
	{
		if( ! $this->authorized('download_tasks'))
		{
			redirect('auth/login');
		}
	}

	//===============================================================

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
