<?php
defined('BASEPATH') OR exit(' No direct script access allowed');
/**
*
*/
class HomeController extends CI_Controller
{
	/*
	function __construct()
	{
		# code...
	}*/
	public function index(){
       $this->load->view('home_page');

	}


	public function view_profile()
	{   
		// $this->load->model('UserModel');
		// $data = $this->UserModel->get_data_by_id();
		$this->load->view('view_profile');
	}

	public function edit_profile()
	{
		$this->load->view('edit_profile');
	}
}