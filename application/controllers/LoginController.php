<?php
defined('BASEPATH') OR exit(' NO direct script access allowed');

/**
 * 
 */
class LoginController extends CI_Controller
{
	
	function __construct()
	{
		 parent::__construct();
		$this->load->model('UserModel');

	}



	public function index(){
		$this->load->view('user_login');

	}


	public function registration(){
		$this->load->view('user_reg');

	}


	public function reg_save(){

	$this->form_validation->set_rules('f_name','First Name','trim|required|alpha|min_length[2]');
	$this->form_validation->set_rules('l_name','Last name','trim|required|alpha|min_length[2]');
	$this->form_validation->set_rules('email','Eamil','trim|required|valid_email|is_unique[user.email]');
	$this->form_validation->set_rules('mobile','Mobile','trim|required|integer|exact_length[10]|is_unique[user.mobile]');
	$this->form_validation->set_rules('password','Password','trim|required|matches[re_password]');
	$this->form_validation->set_rules('re_password','Password','trim|required');
		
		if($this->form_validation->run()==true) 
		{
          $data = array(
				'f_name' =>$this->input->post('f_name') , 
				'l_name' =>$this->input->post('l_name') , 
				'mobile' =>$this->input->post('mobile') , 
				'email' =>$this->input->post('email') , 
				'password' =>$this->input->post('password') , 
			   );
          if($this->UserModel->save($data))
          {
          	 $this->load->view('user_login');
          }


		}
		 else {
			$this->form_validation->set_error_delimiters('<p style="color:red;">', '</p>');
				$this->load->view('user_reg');
		}




	}



	 public function validation()
	 {
	  
	   $this->form_validation->set_rules('email', 'Email Address', 'required|trim|valid_email');
	   $this->form_validation->set_rules('password', 'Password', 'required');
	 
		  if($this->form_validation->run())
		  {
            $this->load->model('LoginModel');
		   $result = $this->LoginModel->can_login($this->input->post('email'), $this->input->post('password'));

		   if($info = $result)
		   {
		   	 $this->session->set_userdata($info);
		     redirect(base_url('HomeController'));
		   }

		   else
		   {
		    $this->form_validation->set_error_delimiters('<p style="color:red;">', '</p>');
		    $this->load->view('user_login');
		   }
		  }


	 }
	  


}