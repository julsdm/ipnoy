<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class address_model extends CI_Model {
	public function __construct(){
        parent:: __construct();
        $this->load->database();        
    }

    public function getAllUsersData(){
        //query database for users data
        $this->db->select('*');
        $this->db->from('user_address_tb');
        $query = $this->db->get();
        return $query->result();
    }
    public function checkuser(){
        //get input with post
        $Customer_username = $this->input->post('username');
        $Customer_password = $this->input->post('password');
        $this->db->select('*');
        $this->db->where('Customer_username',$Customer_username);
        $this->db->where('Customer_password',$Customer_password);
        $this->db->where('Customer_ID',$Customer_ID);
        
        $query = $this->db->get('customer_tb');
        
        //check if result is > 0
        if($query->num_rows()>0){
        
            //get user session data and set
            foreach($query->result() as $row){
                $user_info= array (
                    'Customer_username' => $row->Customer_username,
                    'Customer_password' => $row->Customer_password,
                    'Customer_ID' => $row->Customer_ID,
                    );
            }
            //set session variable
            $this->session->set_userdata($user_info);
            redirect('user/dashboard');
        }
        else{
            //set session flash data for error credentials
            $this->session->set_flashdata('info','Error in username or password! sabi ni sir');
            redirect('login');
        }
   
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
        $Customer_ID = $this->session->userdata('Customer_ID');


        //create array from the obtained data
        $data_array = array(
            'Customer_ID' => $Customer_ID,
            'Add_surname' => $Add_surname,
            'Add_firstname' => $Add_firstname,
            'Add_middleinitial' => $Add_middleinitial,
            'Add_phone' => $Add_phone,
            'Add_postal' => $Add_postal,
            'Add_province' => $Add_province,
            'Add_city' => $Add_city,
            'Add_housenum' => $Add_housenum,
            'Add_street' => $Add_street,
        );
         $this->session->set_userdata($data_array);
        //insert to the database
        $this->db->insert('user_address_tb',$data_array);
    }

    public function deleteuser($Add_ID){
        //query to delete user
        $this->db->delete('user_address_tb',array('Add_ID'=>$Add_ID));
    }

}

