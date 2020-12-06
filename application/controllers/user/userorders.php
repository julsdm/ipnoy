<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class userorders extends CI_Controller {
	public function __construct(){
        parent:: __construct();
		$this->load->model('user/User_model');      
    }
	public function index()
    {
        $data['users_data'] = $this->User_model->getdelivery();
        $data['merchant'] = $this->User_model->getmerchant();
        $data['prods'] = $this->User_model->getProducts();
        $data['bank'] = $this->User_model->getbank();
		$this->load->view('pages/user/userorders_view.php',$data);
    }

    public function givefeedback()
    {
        $this->User_model->productfeedback();
        $this->index();
    }

    public function sendtransaction()
    {
        $config = [
            'upload_path' =>'./uploads',
            'allowed_types' => 'png|jpg|jppeg',
        ];
        $this->load->library('upload',$config);
        $this->form_validation->set_error_delimiters();
        if ($this->upload->do_upload('transacpic')){
            $data = $this->input->post('transacpic');
            $info = $this->upload->data();
			$image_path = base_url("transactions/".$info['raw_name'].$info['file_ext']);
			$this->User_model->inserttransaction($image_path);
            redirect('user/userorders');
        }
		else
		print_r( $this->upload->display_errors());
    }

}
