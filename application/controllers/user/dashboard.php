<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct(){
        parent:: __construct();
        $this->load->model('user/User_model');        
    }
    public function index()
	{
		$this->load->model('User_model');
		$data['product']=$this->User_model->getTop();
		$data['boost']=$this->User_model->getboost();
		$data['merchant']=$this->User_model->getmerchant();
		$this->load->view('pages/user/login_dashboard',$data);
	}
    
	public function logout(){
		//this wil logout the user
		$this->session->set_userdata('username', FALSE);
        $this->session->sess_destroy();
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }
		redirect('Home');
	}
}
