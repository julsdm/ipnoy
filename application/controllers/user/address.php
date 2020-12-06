<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Address extends CI_Controller {
	public function __construct(){
        parent:: __construct();
        $this->load->model('user/User_model');        
    }
	public function index()
	{
		$this->load->view('pages/user/address_view');
    }

    public function adduser(){
        $data = $this->User_model->getUserData();
		//call model to add user to the database
        $this->User_model->insertuserAddress();
		//load add user view
        $data['users_data'] = $this->User_model->getAllUsersData();
        #insertuserAddress();
        //load view for user management (admin)
        $this->load->view('pages/user/profile_view',$data);
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
	$this->load->view('pages/se_landingpage');
	}
}
