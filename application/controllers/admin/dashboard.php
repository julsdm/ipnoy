<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct(){
        parent:: __construct();
		$this->load->model('Login_model'); 
		$this->load->model('Gen_crud_model');
		$this->load->model('user/User_model');         
    }
	public function index()
	{	
		//load admin dashboard
		$this->load->view('pages/admin/admin_dashboard_view');
	}

	public function users(){
		//load user management view
		$this->load->view('pages/admin/manage_users_view');
	}
	public function adminlogin(){
		//load user management view
		$this->load->view('pages/admin/adminlogin_view');
	}
	public function boostpage(){
		$data['users_data'] = $this->Gen_crud_model->getAllboostData();
		$data['merchant_data'] = $this->User_model->getmerchant();
		//load view for user management (admin)
		$this->load->view('pages/admin/boostmanagement_view',$data);
	}

	public function checkadmin(){
        //get input with post
        $user = $this->input->post('username');
        $pass = $this->input->post('password');
        
        $this->db->select('*');
        $this->db->where('admin_username',$user);
        $this->db->where('admin_password',$pass);
        $query = $this->db->get('admins_tb');
        
        //check if result is > 0
        if($query->num_rows()>0){
        
            //get user session data and set
            foreach($query->result() as $row){
                $user_info= array (
                    'username' => $row->admin_username,
                    'password' => $row->admin_password,
                    'admin_id' => $row->admin_id,
                    );
            }
            //set session variable
            $this->session->set_userdata($user_info);

                redirect('admin/dashboard');

        }
        else{
            //set session flash data for error credentials
            $this->session->set_flashdata('info','Error in username or password! sabi ni sir');
            $this->adminlogin();
        }
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

	public function usermanagement(){
		//call model to fetch all users data
		$data['users_data'] = $this->Gen_crud_model->getAllUsersData();
		//load view for user management (admin)
		$this->load->view('pages/admin/usermanagement_view',$data);
	}
	public function usermanagement2(){
		//call model to fetch all users data
		$data['users_data'] = $this->Gen_crud_model->getAllmerchantData();
		//load view for user management (admin)
		$this->load->view('pages/admin/merchantmanagement_view',$data);
	}
	public function usermanagement3(){
		//call model to fetch all users data
		$data['users_data'] = $this->Gen_crud_model->getAllboostData();
		$data['merchant_data'] = $this->User_model->getmerchant();
		//load view for user management (admin)
		$this->load->view('pages/admin/boostmanagement_view',$data);
	}

	public function adduser(){
		//call model to add user to the database
		$this->Gen_crud_model->insertNewUser();
		//load add user view
		$data['users_data'] = $this->Gen_crud_model->getAllUsersData();
		//load view for user management (admin)
		$this->load->view('pages/admin/usermanagement_view',$data);
	}
	public function adduser2(){
		//call model to add user to the database
		$this->Gen_crud_model->insertNewUser2();
		//load add user view
		$data['users_data'] = $this->Gen_crud_model->getAllmerchantData();
		//load view for user management (admin)
		$this->load->view('pages/admin/merchantmanagement_view',$data);
	}
	public function deleteuser($id){
		//call model to delete
		$this->Gen_crud_model->deleteUser($id);
		//load add user view
		$data['users_data'] = $this->Gen_crud_model->getAllUsersData();
		//load view for user management (admin)
		$this->load->view('pages/admin/usermanagement_view',$data);
	}
	public function deleteuser2($id){
		//call model to delete
		$this->Gen_crud_model->deleteUser2($id);
		//load add user view
		$data['users_data'] = $this->Gen_crud_model->getAllmerchantData();
		//load view for user management (admin)
		$this->load->view('pages/admin/merchantmanagement_view',$data);
	}

	public function approve($id){
		//call model to delete
		$this->Gen_crud_model->approve($id);
		//load add user view
		$this->boostpage();
	}

	public function resetboost($id){
		//call model to delete
		$this->Gen_crud_model->reset($id);
		//load add user view
		$this->boostpage();
	}

	

	
}
