<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class merchprof extends CI_Controller {
    public function __construct(){
		parent:: __construct();  
		$this->load->model('merchant_model');    
	}
    public function index()
	{

        $data['users_data'] = $this->merchant_model->getprofileData();
        $data['bank'] = $this->merchant_model->getbankData();
		$this->load->view('pages/merchant/merchprof_view',$data);
    }
    public function updateprof()
    {
        if($this->input->post('picchange') == "Yes"){
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
			$this->merchant_model->editprof($image_path);
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
            $this->merchant_model->editprof2();
            echo "<script>
            alert('Please Login again to apply');
            window.location.href='index';
            </script>";
        }
    }

    public function deletebank($bankid)
	{

		$this->merchant_model->deletebank($bankid);
		$this->index();
	}

	public function addbank()
	{
        $this->merchant_model->addbank();
		$this->index();
    }

}
