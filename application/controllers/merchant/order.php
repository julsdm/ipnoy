<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class order extends CI_Controller {
	public function __construct(){
        parent:: __construct();
        $this->load->model('merchant_model');        
    }
	public function index()
	{
        $data['users_data'] = $this->merchant_model->getOrdersData();
        $data['prods_data'] = $this->merchant_model->getAllUsersData();
        $data['custo_data'] = $this->merchant_model->getCustomerData();
        $data['track_data'] = $this->merchant_model->getTrackingData();
		$this->load->view('pages/merchant/order_view',$data);
    }

    public function updatestatus(){
        $this->merchant_model->editstatus();
        $this->index();
    }
    


}