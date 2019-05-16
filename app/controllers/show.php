<?php
class show extends Controller
{
	function __construct()
	{
		if( ! $this->authorized())
		{
			redirect('auth/login');
		}
	}

	function index()
	{
		$data = array();
		$obj = new View();

		$obj->view('dashboard/dashboard', $data);

	}

	function item($identifier = '', $value = '')
	{
		$data['identifier'] = $identifier;
		$data['value'] = $value;
		$view = 'item/unknown';

		switch ($identifier) {
			case 'topdesk_id':
				$view = 'item/topdesk';
				break;

			default:
				# code...
				break;
		}

		$obj = new View();

		$obj->view($view, $data);
	}

	function listing($which = '')
	{
		if($which)
		{
			$data['page'] = 'clients';
			$data['scripts'] = array("clients/client_list.js");
			$data['authorized_for_download'] = $this->authorized('download_tasks');
			$view = 'listing/'.$which;
		}
		else
		{
			$data = array('status_code' => 404);
			$view = 'error/client_error';
		}

		$obj = new View();
		$obj->view($view, $data);
	}

	function fixes($which = '')
	{

		if( ! $this->authorized('admin_tasks'))
		{
			redirect('auth/login');
		}

		if($which)
		{
			$data['page'] = 'fixes';
			$data['scripts'] = array("clients/client_list.js");
			$view = 'fixes/'.$which;
		}
		else
		{
			$data = array('status_code' => 404);
			$view = 'error/client_error';
		}

		$obj = new View();
		$obj->view($view, $data);
	}

	function reports($which = 'default')
	{
		if($which)
		{
			$data['page'] = 'clients';
			$data['scripts'] = array("clients/client_list.js");
			$view = 'report/'.$which;
		}
		else
		{
			$data = array('status_code' => 404);
			$view = 'error/client_error';
		}

		$obj = new View();
		$obj->view($view, $data);
	}
}
