<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gen_crud_model extends CI_Model {
	public function __construct(){
        parent:: __construct();
        $this->load->database();        
    }

    public function getAllUsersData(){
        //query database for users data
        $this->db->select('*');
        $this->db->from('customer_tb');
        $query = $this->db->get();
        return $query->result();
    }
    public function getAllmerchantData(){
        //query database for users data
        $this->db->select('*');
        $this->db->from('merchant_tb');
        $query = $this->db->get();
        return $query->result();
    }
    public function getAllboostData(){
        //query database for users data
        
        $this->db->select('*');
        $this->db->where('pendmerchboost !=',0);
        $this->db->or_where('approveboost !=',0);
        $this->db->from('pendboost_tb');
        $query = $this->db->get();
        return $query->result();
    }

    public function insertNewUser(){
        //query database to insert new user
        //first get all the value of the input from 
        //views
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        //create array from the obtained data
        $data_array = array(
            'customer_username' => $username,
            'customer_password' => $password,

        );

        //insert to the database
        $this->db->insert('customer_tb',$data_array);
    }

    public function insertNewUser2(){
        //query database to insert new user
        //first get all the value of the input from 
        //views
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        //create array from the obtained data
        $data_array = array(
            'merch_username' => $username,
            'merch_password' => $password,

        );

        //insert to the database
        $this->db->insert('merchant_tb',$data_array);
    }


    public function deleteuser($id){
        //query to delete user
        $this->db->delete('customer_tb',array('customer_id'=>$id));
    }
    public function deleteuser2($id){
        //query to delete user
        $this->db->delete('merchant_tb',array('merchid'=>$id));
    }
    public function approve($id){
        //query to delete user
        $this->db->set('approveboost','pendmerchboost', FALSE);
        $this->db->where('merch_id',$id);
        $this->db->update('pendboost_tb');
        $pend = 0;
        $this->db->set('pendmerchboost',$pend);
        $this->db->where('merch_id',$id);
        $this->db->update('pendboost_tb');
    }
    public function reset($id){
        //query to delete user
        $app = 0;
        $this->db->set('approveboost',$app);
        $this->db->set('datepend',' ');
        $this->db->where('merch_id',$id);
        $this->db->update('pendboost_tb');
    }



    //common user
    public function insertcommonUser(){
        //query database to insert new user
        //first get all the value of the input from 
        //views
        $Cname = $this->input->post('Cname');
        $Cemail = $this->input->post('Cemail');
        $Cpassword = $this->input->post('Cpassword');

        //create array from the obtained data
        $data_array = array(
            'Cname' => $Cname,
            'Cemail' => $Cemail,
            'Cpassword' => $Cpassword,
        );

        //insert to the database
        $this->db->insert('commonuser',$data_array);
    }

    public function getAllcommonUsersData(){
        //query database for users data
        $this->db->select('*');
        $this->db->from('commonuser');
        $query = $this->db->get();
        return $query->result();
    }
}
