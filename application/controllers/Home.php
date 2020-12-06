<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Home extends CI_Controller {
	public function __construct(){
        parent:: __construct();
        $this->load->model('user/User_model');        
    }
	public function index()
	{
		$this->load->model('User_model');
		$data['product']=$this->User_model->getTop();
		$data['boost']=$this->User_model->getboost();
		$data['merchant']=$this->User_model->getmerchant();
		$this->load->view('pages/se_landingpage',$data);
	}

	public function Details()
	{
		$this->load->view('pages/se_landingpage');
	}
}


