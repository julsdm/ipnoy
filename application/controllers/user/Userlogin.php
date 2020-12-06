<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Userlogin extends CI_Controller {
	public function __construct(){
        parent:: __construct();
        $this->load->model('user/User_model');        
	}
	
	public function index()
	{
		$this->load->model('User_model');
		$data['product']=$this->User_model->getProducts();
		$this->load->view('pages/user/login_view');
	}
	
	public function validatelogin(){
		//call the function check user in the model..
		$data = $this->User_model->checkuser();
		
	}

	public function getUserData(){
		//call model to give the user info
		$data = $this->User_model->getUserData();
		print_r($data);
	}


}
