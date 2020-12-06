<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class registration extends CI_Controller {
	public function __construct(){
        parent:: __construct();
		$this->load->model('merchant_model');  
		$this->load->model('reg_model');      
	}
	
	public function index()
	{
		$this->load->view('pages/regform');
	}
	public function home()
	{
		redirect('Home');
	}

	public function regmerch()
	{
		$this->load->view('pages/regmerchant_view');
	}

	public function addmerch()
    {
		$this->merchant_model->checkMusername();

        $config = [
            'upload_path' =>'./uploads',
            'allowed_types' => 'png|jpg|jppeg',
        ];
        $this->load->library('upload',$config);
        $this->form_validation->set_error_delimiters();
        if ($this->upload->do_upload('merchpic')){
            $data = $this->input->post('merchpic');
            $info = $this->upload->data();
			$image_path = base_url("uploads/".$info['raw_name'].$info['file_ext']);
			$this->merchant_model->insertmerch($image_path);
			$this->merchant_model->boost();
			echo "<script>
            alert('Success registration');
            window.location.href='home';
            </script>";
        }
		else
		print_r( $this->upload->display_errors());
    }

	public function registeruser()
	{	
		$this->reg_model->adduser();
	}

	public function reg()
		{	
			
			$this->load->view('pages/login_view');
		}
	
	public function validatelogin(){
		//call the function check user in the model..
		$data = $this->Login_model->checkuser();
		
	}

	public function getUserData(){
		//call model to give the user info
		$data = $this->Login_model->getUserData();
		print_r($data);
	}


}
