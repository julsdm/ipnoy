<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct(){
        parent:: __construct();
		$this->load->model('merchant_model');
        
    }
	public function index()
	{
		$merchid = $this->session->userdata('merchid');
		$data['users_data'] = $this->merchant_model->getAllboostData($merchid);
		$this->load->view('pages/merchant/merch_view',$data);
		
	}
	public function merchlog()
	{
		$this->load->view('pages/merchant/merchlog_view');
	}
	public function merchvalidate(){
		//call the function check user in the model..
		$this->merchant_model->checkuser();
		
	}
	public function goboost(){
		//call the function check user in the model..
		$data = $this->merchant_model->boostapplication();
		$this->index();
		
	}
}
