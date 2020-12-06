<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {
	public function __construct(){
        parent:: __construct();
		$this->load->model('User_model');      
		       // Load cart library
		 $this->load->library('cart');
        $this->load->model("cart")
        $data["product"] = $this->cart->fetch_all();
			   // Load product model
		 $this->load->model('product');  
    }
}