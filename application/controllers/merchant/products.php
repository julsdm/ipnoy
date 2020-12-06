<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class products extends CI_Controller {
    public function __construct(){
		parent:: __construct();  
		$this->load->model('merchant_model');    
	}
    public function index()
	{

		$data['users_data'] = $this->merchant_model->getAllUsersData();
		$this->load->view('pages/merchant/products_view',$data);
	}

	public function deleteprod($prodid)
	{

		$this->merchant_model->deleteproduct($prodid);
		$this->index();
	}

	public function updateprod()
	{

		$this->merchant_model->updateproduct();
		$this->index();
	}


    

}
