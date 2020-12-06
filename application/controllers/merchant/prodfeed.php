<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class prodfeed extends CI_Controller {
    public function __construct(){
		parent:: __construct();  
		$this->load->model('merchant_model');    
	}
    public function index()
	{

		$data['users_data'] = $this->merchant_model->getAllOrdersData();
		$data['custo_data'] = $this->merchant_model->getCustomerData();
		$data['prods_data'] = $this->merchant_model->getAllUsersData();
		$this->load->view('pages/merchant/prodfeed_view',$data);
	}
    

}
