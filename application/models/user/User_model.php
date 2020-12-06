<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
	    public function __construct(){
        $this->load->database();        
    }
    
    public function checkuser(){
        //get input with post
        $user = $this->input->post('username');
        $pass = $this->input->post('password');
        
        $this->db->select('*');
        $this->db->where('customer_username',$user);
        $this->db->where('customer_password',$pass);
        $query = $this->db->get('customer_tb');
        
        //check if result is > 0
        if($query->num_rows()>0){
        
            //get user session data and set
            foreach($query->result() as $row){
                $user_info= array (
                    'customer_username' => $row->customer_username,
                    'customer_password' => $row->customer_password,
                    'customer_id' => $row->customer_id,
                    'primarycity' => $row->primarycity,
                    'primaryprovince' => $row->primaryprovince,
                    'contactno' => $row->contactno,
                    );
            }
            //set session variable
            $this->session->set_userdata($user_info);

                redirect('user/dashboard');

        }
        else{
            //set session flash data for error credentials
            $this->session->set_flashdata('info','Error in username or password! sabi ni sir');
            redirect('user/Userlogin');
        }
    }
    public function getTop()
        {
        $this->db->select('*');
        $this->db->from('product_tb');
        $this->db->order_by('orders', 'DESC');
        $this->db->limit(10);
        $query = $this->db->get();
        return $query->result();
        }
    public function getboost(){
            //query database for users data
            $this->db->select('*');
            $this->db->from('pendboost_tb');
            $this->db->where('approveboost',1);
            $query = $this->db->get();
            return $query->result();
        }


    public function getUserData(){
        //query here
        $query = $this->db->query('SELECT * FROM account_tb');
        return $query->result();
    }

    
    public function getAllUsersData(){
        //query database for users data
        $this->db->select('*');
        $this->db->from('useraddress_tb');
        $this->db->where('Customer_ID',$this->session->userdata('id'));
        $query = $this->db->get();
        return $query->result();
    }

    public function getfeedData(){
        //query database for users data
        $this->db->select('*');
        $this->db->from('prodfeed_tb');
        $query = $this->db->get();
        return $query->result();
    }
    public function getfeed($productid){
        //query database for users data
        $this->db->select('*');
        $this->db->from('prodfeed_tb');
        $this->db->where('prodid',$productid);
        $query = $this->db->get();
        return $query->result();
    }
    public function getCustomerData(){
        //query database for users data
        $this->db->select('*');
        $this->db->from('customer_tb');
        $query = $this->db->get();
        return $query->result();
    }

    public function getmerchant(){
        //query database for users data
        $this->db->select('*');
        $this->db->from('merchant_tb');
        $query = $this->db->get();
        return $query->result();
    }

    public function filter(){
        //query database for users data
        $category = $this->input->post('category');
        $type = $this->input->post('type');
        $search = $this->input->post('search');
        $this->db->select('*');
        $this->db->from('product_tb');
      if (isset($category))
      $this->db->where('category',$category);
      if (isset($type))
      $this->db->where('type',$type);
      if (isset($search))
      $this->db->like('prodname', $search);


        $query = $this->db->get();
      // sort($query);
        return $query->result();
    }

    public function chosenproduct($prodid){
        //query database for users data
        $this->db->select('*');
        $this->db->from('product_tb');
        $this->db->where('prodid',$prodid);
        $query = $this->db->get();
        return $query->result();
    }
    public function chosenmerch($merchid){
        //query database for users data
        $this->db->select('*');
        $this->db->from('merchant_tb');
        $this->db->where('merchid',$merchid);
        $query = $this->db->get();
        return $query->result();
    }

   
    
    public function insertuserAddress(){
        //query database to insert new user
        //first get all the value of the input from 
        //views
        $Add_surname = $this->input->post('Add_surname');
        $Add_firstname = $this->input->post('Add_firstname');
        $Add_middleinitial = $this->input->post('Add_middleinitial');
        $Add_phone = $this->input->post('Add_phone');
        $Add_postal= $this->input->post('Add_postal');
        $Add_province = $this->input->post('Add_province');
        $Add_city = $this->input->post('Add_city');
        $Add_housenum = $this->input->post('Add_housenum');
        $Add_street = $this->input->post('Add_street');
        $Customer_ID = $this->session->userdata('id');
        
        

        //create array from the obtained data
        $data_array = array(
            'Add_surname' => $Add_surname,
            'Add_firstname' => $Add_firstname,
            'Add_middleinitial' => $Add_middleinitial,
            'Add_phone' => $Add_phone,
            'Add_postal' => $Add_postal,
            'Add_province' => $Add_province,
            'Add_city' => $Add_city,
            'Add_housenum' => $Add_housenum,
            'Add_street' => $Add_street,
            'Customer_ID'=> $Customer_ID,);
       //insert to the database
       $this->db->insert('useraddress_tb',$data_array);

        

    }
    public function addpendorder($ordernum){
        $custid = $this->input->post('customerid');
        $merchid = $this->input->post('merchid');
        $prodid = $this->input->post('prodid');
        $price = $this->input->post('price');
        $order_no = $this->input->post('order_no');

        $data_array = array(
            'customer_id' => $custid,
            'merch_id' => $merchid,
            'prod_id' => $prodid,
            'quantity' => $ordernum,
            'price' => $price,
            'order_no' => $order_no,
        );
        $this->db->insert('pendorder_tb',$data_array);

    }
    
    public function setuseraddress($deliveryadd){
       $city =  $this->User_model->findcity($deliveryadd);
       $province =  $this->User_model->findprovince($deliveryadd);
       $this->db->set('primarycity', $city);
       $this->db->set('primaryprovince', $province);
       $this->db->where('customer_id', $this->session->userdata('customer_id'));
       $this->db->update('customer_tb');

        
    }
    public function findcity($deliveryadd)
    {
        $this->db->select('add_city');
        $this->db->from('useradd_tb');
        $this->db->where('add_id',$deliveryadd);
        return $this->db->get()->row()->add_city;

    }
    public function findprovince($deliveryadd)
    {
        $this->db->select('add_province');
        $this->db->from('useradd_tb');
        $this->db->where('add_id',$deliveryadd);
        return $this->db->get()->row()->add_province;

    }


    public function deleteAddressuser($Add_ID){
        //query to delete user
        $this->db->delete('useraddress_tb',array('Add_ID'=>$Add_ID));
    }

    public function getProducts()
        {
        $this->db->select('*');
        $this->db->from('product_tb');

        $query = $this->db->get();
        return $query->result();
        }
    public function getProducts2($merchid)
        {
        $this->db->select('*');
        $this->db->from('product_tb');
        $this->db->where('merchid',$merchid);
        $query = $this->db->get();
        return $query->result();
        }
    public function getPend()
        {
        $this->db->select('*');
        $this->db->from('pendorder_tb');
        $this->db->where('customer_id',$this->session->userdata('customer_id'));
        $query = $this->db->get();
        return $query->result();
        }
    public function getdelivery()
        {
        $this->db->select('*');
        $this->db->from('delivery_tb');
        $this->db->where('customer_id',$this->session->userdata('customer_id'));
        $this->db->order_by('merch_id', 'ASC');
        $query = $this->db->get();
        return $query->result();
        }
    public function checkout($ordernum)
        {
            $totalprice = $this->input->post('total');
            $city = $this->input->post('city') ;
            $province = $this->input->post('province') ;
            $address = $city ." , ".  $province ;
            $order_no = $ordernum;
            $payment = $this->input->post('payment');
            $this->db->set('order_no', $order_no);
            $this->db->where('customer_id', $this->session->userdata('customer_id'));
            $this->db->update('pendorder_tb');
            $data = $this->User_model->getPend();
            $this->db->insert_batch('order_tb', $data);
            $data = $this->User_model->getPend();
            $this->db->insert_batch('delivery_tb', $data);
    
            $this->db->where('customer_id', $this->session->userdata('customer_id'));
            $this->db->delete('pendorder_tb');

            $data = $this->User_model->getdelivery();
            $this->db->set('deliveryaddress', $address);
            $this->db->set('paymentoption', $payment);
            $this->db->set('custcontact', $this->session->userdata('contactno'));
            $this->db->where('order_no', $order_no);
            $this->db->update('delivery_tb');



        }
    public function updatestocks()
    {
        $this->db->select('*');
        $this->db->where('customer_id', $this->session->userdata('customer_id'));
        $oquantity = $this->db->get('pendorder_tb');
        $this->db->select('*');
        $pquantity = $this->db->get('product_tb');

        foreach($oquantity->result() as $row){
            foreach($pquantity->result() as $row2){
                if($row->prod_id == $row2->prodid )
                { 
                    $oquantity = $this->db->get('pendorder_tb');
                    $answer = intval($row2->quantity - $row->quantity);
                    $this->db->set('quantity', $answer);
                    $this->db->where('prodid', $row->prod_id);
                    $this->db->update('product_tb');

                }
            }
        }
    }
    public function updatetotalorders()
    {
        $this->db->select('*');
        $this->db->where('customer_id', $this->session->userdata('customer_id'));
        $orderincrement = $this->db->get('pendorder_tb');
        $this->db->select('*');
        $ordertotal = $this->db->get('product_tb');

        foreach($orderincrement->result() as $row){
            foreach($ordertotal->result() as $row2){
                if($row->prod_id == $row2->prodid )
                {
                    $answer = intval($row2->orders + 1);
                    $this->db->set('orders', $answer);
                    $this->db->where('prodid', $row->prod_id);
                    $this->db->update('product_tb');

                }
            }
        }
    }
    public function findstock()
    {
        $prodid = $this->input->post('prodid');
        $this->db->select('quantity');
        $this->db->from('product_tb');
        $this->db->where('prodid',$prodid);
        return $this->db->get()->row()->quantity;

    }
    
    public function fetch_all()
    {
        $query= $this->db->get("product");
        return $query->result();
    }

    public function getcustdata(){
        $custid = $this->session->userdata('customer_id');
        //query database for users data
        $this->db->select('*');
        $this->db->from('customer_tb');
        $this->db->where('customer_id',$custid);
        $query = $this->db->get();
        return $query->result();
    }

    public function addaddress(){
        $custid = $this->session->userdata('customer_id');
        $city = $this->input->post('city');
        $province = $this->input->post('province');
        //query database for users data
        $data_array = array(
            'customer_id' => $custid,
            'add_city' => $city,
            'add_province' => $province,

        );
        $this->db->insert('useradd_tb',$data_array);
    }
    public function getaddress(){
        $custid = $this->session->userdata('customer_id');
        $this->db->select('*');
        $this->db->from('useradd_tb');
        $this->db->where('customer_id',$custid);
        $query = $this->db->get();
        return $query->result();
    }

    public function edituser($image_path)
    {
        
        $user_info= array (
            'customer_username' => $this->input->post('username'),
            'customer_password' => $this->input->post('password'),
            'customer_picture' =>$image_path,
            'contactno' =>$this->input->post('contactno'),
            );
    $this->db->where('customer_id',$this->session->userdata('customer_id'));
    $this->db->update('customer_tb', $user_info);
    }
    public function edituser2()
    {
        
        $user_info= array (
            'customer_username' => $this->input->post('username'),
            'customer_password' => $this->input->post('password'),
            'contactno' =>$this->input->post('contactno'),
            );
    $this->db->where('customer_id',$this->session->userdata('customer_id'));
    $this->db->update('customer_tb', $user_info);
    }

    public function deladdress(){
        $addid = $this->input->post('addid');
        $this->db->where('add_id', $addid);
        $this->db->delete('useradd_tb');
    }

    public function productfeedback(){
        $feedback = $this->input->post('feedback');
        $rating = $this->input->post('rating');
        $merchant = $this->input->post('merchant');
        $product = $this->input->post('product');
        $orderid = $this->input->post('orderid');
        $data_array = array(
            'customer_id' => $this->session->userdata('customer_id'),
            'order_id' => $orderid,
            'merchid' => $merchant,
            'prodid' => $product,
            'prod_feedback' => $feedback,
            'prod_rate' => $rating,
            

        );
        $this->db->insert('prodfeed_tb',$data_array);
    }

    public function getbank(){
        //query database for users data
        $this->db->select('*');
        $this->db->from('merchbank_tb');

        $query = $this->db->get();
        return $query->result();
    }

    public function inserttransaction($image_path){
        $customer_id = $this->session->userdata('customer_id');
        $order_no = $this->input->post('order_no');
        $prod_id = $this->input->post('prod_id');
        $merch_id = $this->input->post('merch_id');
        $this->db->set('transacpicture',$image_path);
        $this->db->set('merchid',$merch_id);
        $this->db->set('customer_Id',$customer_id);
        $this->db->set('prodid',$prod_id);
        $this->db->where('order_no',$order_no);
        $this->db->insert('banktransac_tb');
    }
}
