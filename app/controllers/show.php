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
}