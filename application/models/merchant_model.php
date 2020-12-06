<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class merchant_model extends CI_Model {
	public function __construct(){
        parent:: __construct();
        $this->load->database();        
    }

    public function getAllUsersData(){
        //query database for users data
        $this->db->select('*');
        $this->db->from('product_tb');
        $this->db->where('merchid',$this->session->userdata('merchid'));

        $query = $this->db->get();
        return $query->result();
    }

    public function getAllOrdersData(){
        //query database for users data
        $this->db->select('*');
        $this->db->from('prodfeed_tb');
        $this->db->where('merchid',$this->session->userdata('merchid'));

        $query = $this->db->get();
        return $query->result();
    }

    public function getprofileData(){
        //query database for users data
        $this->db->select('*');
        $this->db->from('merchant_tb');
        $this->db->where('merchid',$this->session->userdata('merchid'));

        $query = $this->db->get();
        return $query->result();
    }

    public function getbankData(){
        //query database for users data
        $this->db->select('*');
        $this->db->from('merchbank_tb');
        $this->db->where('merchid',$this->session->userdata('merchid'));

        $query = $this->db->get();
        return $query->result();
    }

    public function getOrdersData(){
        //query database for users data
        $this->db->select('*');
        $this->db->from('order_tb');
        $this->db->where('merch_id',$this->session->userdata('merchid'));

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
    public function getTrackingData(){
        //query database for users data
        $this->db->select('*');
        $this->db->from('delivery_tb');
        $this->db->where('merch_id',$this->session->userdata('merchid'));
        $query = $this->db->get();
        return $query->result();
    }

    public function editstatus()
    {
        $status = $this->input->post('status');
        $order_no = $this->input->post('order_no');
        $courier = $this->input->post('courier');
        $customer_id = $this->input->post('customer_id');
        $merch_id = $this->input->post('merch_id');
        $price = $this->input->post('price');
        $couriertracking = $this->input->post('couriertracking');

            $user_info= array (
                'status' => $status,
                'courier' => $courier,
                'price' => $price,
                'couriertracking' => $couriertracking,
                );
        $this->db->where('order_no',$order_no);
        $this->db->where('customer_id',$customer_id);
        $this->db->where('merch_id',$merch_id);
        $this->db->update('delivery_tb', $user_info);
    }



    public function insertprod($image_path){
        //query database to insert new user
        //first get all the value of the input from 
        //views
        $prodname = $this->input->post('prodname');
        $description = $this->input->post('description');
        $quantity = $this->input->post('quantity');
        $merchid = $this->session->userdata('merchid');
        $category = $this->input->post('category');
        $type = $this->input->post('type');
        $price = $this->input->post('price');
        //create array from the obtained data
        $data_array = array(
            'prodname' => $prodname,
            'description' => $description,
            'prodpic' => $image_path,
            'quantity' => $quantity,
            'merchid'=> $merchid,
            'type'=> $type,
            'price'=> $price,
            'category'=> $category,
        );

        //insert to the database
        $this->db->insert('product_tb',$data_array);
    }

    public function insertmerch($image_path){
        //query database to insert new user
        //first get all the value of the input from 
        //views
        $merch_firstname = $this->input->post('merch_firstname');
        $merch_middleinitial = $this->input->post('merch_middleinitial');
        $merch_surname = $this->input->post('merch_surname');
        $merch_username = $this->input->post('merch_username');
        $merch_email = $this->input->post('merch_email');
        $merch_displayname = $this->input->post('merch_displayname');
        $merch_pername = $this->input->post('merch_pername');
        $merch_address = $this->input->post('merch_address');
        $merch_phone = $this->input->post('merch_phone');
        $merch_password = $this->input->post('merch_password');

        //create array from the obtained data
        $data_array = array(
            'merch_firstname' => $merch_firstname,
            'merch_middleinitial' => $merch_middleinitial,
            'merchpic' => $image_path,
            'merch_surname' => $merch_surname,
            'merch_username'=> $merch_username,
            'merch_email' => $merch_email,
            'merch_displayname'=> $merch_displayname,
            'merch_address' => $merch_address,
            'merch_phone'=> $merch_phone,
            'merch_password' => $merch_password,
            'merch_pername' => $merch_pername,
        );

        //insert to the database
        $this->db->insert('merchant_tb',$data_array);
    }

    public function checkMusername(){
        $merch_username = $this->input->post('merch_username');
        $this->db->select('*');
        $this->db->from('merchant_tb');
        $this->db->where('merch_username',$merch_username);
        $query = $this->db->get();
        if($query->num_rows()>0){
            echo "<script>
            alert('Failed Registration');
            window.location.href='home';
            </script>";
        }
        
    }

    public function editprof($image_path)
    {
            $user_info= array (
                'merch_username' => $this->input->post('username'),
                'merch_password' => $this->input->post('password'),
                'merch_surname' => $this->input->post('surname'),
                'merch_firstname' => $this->input->post('firstname'),
                'merch_middleinitial' => $this->input->post('middleinitial'),
                'merch_email' => $this->input->post('email'),
                'merch_address' => $this->input->post('address'),
                'merch_pername' => $this->input->post('pername'),
                'merch_phone' => $this->input->post('phone'),
                'merch_displayname' => $this->input->post('displayname'),
                'merchid' => $this->session->userdata('merchid'),
                'merchpic' =>$image_path,
                );
        $this->db->where('merchid',$this->session->userdata('merchid'));
        $this->db->update('merchant_tb', $user_info);
    }

    public function editprof2()
    {
            $user_info= array (
                'merch_username' => $this->input->post('username'),
                'merch_password' => $this->input->post('password'),
                'merch_surname' => $this->input->post('surname'),
                'merch_firstname' => $this->input->post('firstname'),
                'merch_middleinitial' => $this->input->post('middleinitial'),
                'merch_email' => $this->input->post('email'),
                'merch_address' => $this->input->post('address'),
                'merch_pername' => $this->input->post('pername'),
                'merch_phone' => $this->input->post('phone'),
                'merch_displayname' => $this->input->post('displayname'),
                'merchid' => $this->session->userdata('merchid'),
                );
        $this->db->where('merchid',$this->session->userdata('merchid'));
        $this->db->update('merchant_tb', $user_info);
    }

    public function checkuser(){
        //get input with post
        $user = $this->input->post('username');
        $pass = $this->input->post('password');
        
        $this->db->select('*');
        $this->db->where('merch_username',$user);
        $this->db->where('merch_password',$pass);
        $query = $this->db->get('merchant_tb');
        
        //check if result is > 0
        if($query->num_rows()>0){
        
            //get user session data and set
            foreach($query->result() as $row){
                $user_info= array (
                'merch_username' => $row->merch_username,
                'merch_password' => $row->merch_password,
                'merch_surname' => $row->merch_surname,
                'merch_firstname' => $row->merch_firstname,
                'merch_middleinitial' => $row->merch_middleinitial,
                'merch_email' => $row->merch_email,
                'merch_address' => $row->merch_address,
                'merch_pername' => $row->merch_pername,
                'merch_phone' => $row->merch_phone,
                'merch_displayname' => $row->merch_displayname,
                'merchid' => $row->merchid,
                    );
            }
            //set session variable
            $this->session->set_userdata($user_info);

            //redirect
            if($query->num_rows()>0){
                redirect('merchant/dashboard');
        }
        
    }
    else{
        //set session flash data for error credentials
        $this->session->set_flashdata('info','Error in username or password! sabi ni sir');
        redirect('Home');
    }
    }

    public function boostapplication(){
        $merchid = $this->session->userdata('merchid');
        $pend = $this->input->post('penddate');
        $dateapp = date("F d Y ");
        $this->db->set('pendmerchboost',$pend);
        $this->db->set('datepend',$dateapp);
        $this->db->where('merch_id',$merchid);
        $this->db->update('pendboost_tb');
    }

    public function boost(){
        $merch_username = $this->input->post('merch_username');
        $this->db->select('*');
        $this->db->where('merch_username',$merch_username);
        $query = $this->db->get('merchant_tb');

        foreach($query->result() as $row){
            $user_info= array (
            'merch_id' => $row->merchid,
            );
        }
        $this->db->insert('pendboost_tb',$user_info);
}
public function getAllboostData($merchid){
    //query database for users data
    $this->db->select('*');
    $this->db->where('merch_id',$merchid);
    $this->db->from('pendboost_tb');
    $query = $this->db->get();
    return $query->result();
}

public function deleteproduct($prodid){
    //query to delete user
    $this->db->delete('product_tb',array('prodid'=>$prodid));
}

public function deletebank($bankid){
    //query to delete user
    $this->db->delete('merchbank_tb',array('bank_id'=>$bankid));
}

public function updateproduct(){
    $prodname = $this->input->post('prodname');
    $description = $this->input->post('description');
    $quantity = $this->input->post('quantity');
    $prodid = $this->input->post('prodid');
    $category = $this->input->post('category');
    $type = $this->input->post('type');
    $price = $this->input->post('price');
    $this->db->set('prodname',$prodname);
    $this->db->set('description',$description);
    $this->db->set('quantity',$quantity);
    $this->db->set('category',$category);
    $this->db->set('type',$type);
    $this->db->set('price',$price);
    $this->db->where('prodid',$prodid);
    $this->db->update('product_tb');
}

public function addbank(){
    $merchid = $this->session->userdata('merchid');
    $bank_num = $this->input->post('bank_num');
    $acc_name = $this->input->post('acc_name');
    $bank = $this->input->post('bank');
    //query database for users data
    $data_array = array(
        'bank_num' => $bank_num,
        'acc_name' => $acc_name,
        'bank' => $bank,
        'merchid' => $merchid,

    );
    $this->db->insert('merchbank_tb',$data_array);
}


}