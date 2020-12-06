<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {
	public function __construct(){
        parent:: __construct();
		$this->load->model('user/User_model');      
    }
	public function index()
    {
        $data['users_data'] = $this->User_model->getPend();
        $data['merchant'] = $this->User_model->getmerchant();
        $data['prods'] = $this->User_model->getProducts();
        $data['address'] = $this->User_model->getaddress();
		$this->load->view('pages/user/cart_view',$data);
    }
    public function approvepend()
    {
        $ordernum=strtotime("now");
        $this->User_model->updatestocks();
        $this->User_model->updatetotalorders();
        $this->User_model->checkout($ordernum);
        $this->index();
    }
    public function removeitem($order_no)
    {
        $this->db->select('*');
        $this->db->where('order_no', $order_no);
        $this->db->delete('pendorder_tb');
        redirect('user/product');
    }
    

}
