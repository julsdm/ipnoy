<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
	public function __construct(){
        parent:: __construct();
        $this->load->model('user/User_model');        
    }
	public function index()
	{
		$data['product']=$this->User_model->getProducts();
		$data['merchant']=$this->User_model->getmerchant();
		$this->load->view('pages/user/product_view',$data);
	}

	public function Details()
	{
		$this->load->view('pages/user/product_details_view');
	}	

	public function filt()
	{
		$data['product']=$this->User_model->filter();
		$data['merchant']=$this->User_model->getmerchant();
		$this->load->view('pages/user/product_view',$data);
	}
	public function chooseproduct($productid)
	{
		$data['users_data']=$this->User_model->chosenproduct($productid);
		$data['feedback']=$this->User_model->getfeed($productid);
		$data['customer']=$this->User_model->getCustomerData();
		$this->load->view('pages/user/chosenproduct_view',$data);
	}

	public function choosemerchant($merchid)
	{
		$data['users_data']=$this->User_model->chosenmerch($merchid);
		$data['prod']=$this->User_model->getProducts($merchid);
		$this->load->view('pages/user/chosenmerchant_view',$data);
	}
	public function pendingorder()
	{
		$ordernum = $this->input->post('orderquantity');
		$stockquantity = $this->User_model->findstock();
		if($ordernum <= $stockquantity) 
		$this->User_model->addpendorder($ordernum);
		$this->index();
	}

	

}
