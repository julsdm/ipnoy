<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class addprod extends CI_Controller {
    public function __construct(){
		parent:: __construct();  
		$this->load->model('merchant_model');    
	}
    public function index()
	{
		$this->load->view('pages/merchant/addprods_view');
	}

	public function addprods()
    {
        $config = [
            'upload_path' =>'./uploads',
            'allowed_types' => 'png|jpg|jppeg',
        ];
        $this->load->library('upload',$config);
        $this->form_validation->set_error_delimiters();
        if ($this->upload->do_upload('prodpic')){
            $data = $this->input->post('prodpic');
            $info = $this->upload->data();
			$image_path = base_url("uploads/".$info['raw_name'].$info['file_ext']);
			$this->merchant_model->insertprod($image_path);
            redirect('merchant/addprod');
        }
		else
		print_r( $this->upload->display_errors());
    }

	
    

}
