<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {
	public function __construct(){
        parent:: __construct();
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
                    'customer_username' => $row->username,
                    'customer_password' => $row->password,
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

    public function getUserData(){
        //query here
        $query = $this->db->query('SELECT * FROM account_tb');
        return $query->result();
    }

}
