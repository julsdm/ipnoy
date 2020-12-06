<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
	public function __construct(){
        parent:: __construct();
        $this->load->model('Login_model');
        $this->load->model('user/User_model');        
    }
	public function index()
	{
        $data['cust'] = $this->User_model->getcustdata();
        $data['address'] = $this->User_model->getaddress();
		$this->load->view('pages/user/profile_view',$data);
    }

    public function addadd()
	{
        $this->User_model->addaddress();
		$this->index();
    }

    public function deleteadd()
	{
        $this->User_model->deladdress();
		$this->index();
    }

    public function setprimaryadd()
	{
        $deliveryadd = $this->input->post('deliveryaddress');
        $this->User_model->setuseraddress($deliveryadd);
        echo "<script>
            alert('Please Login again to apply');
            window.location.href='index';
            </script>";
    }

    public function updateuser(){
        if($this->input->post('picchange') == "Yes"){
        $config = [
            'upload_path' =>'./uploads',
            'allowed_types' => 'png|jpg|jppeg',
        ];
        $this->load->library('upload',$config);
        $this->form_validation->set_error_delimiters();
        if ($this->upload->do_upload('userpic')){
            $data = $this->input->post('userpic');
            $info = $this->upload->data();
			$image_path = base_url("uploads/".$info['raw_name'].$info['file_ext']);
			$this->User_model->edituser($image_path);
            echo "<script>
            alert('Please Login again to apply');
            window.location.href='index';
            </script>";
        }
		else 
        print_r( $this->upload->display_errors());
        }

        else
        {
            $this->User_model->edituser2();
            echo "<script>
            alert('Please Login again to apply');
            window.location.href='index';
            </script>";
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
}
