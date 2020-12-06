<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class reg_model extends CI_Model {
	public function __construct(){
        parent:: __construct();
        $this->load->database();        
    }

    public function checkuser(){
        //get input with post
        $user = $this->input->post('username');
        $pass = $this->input->post('password');
        
        $this->db->select('*');
        $this->db->where('username',$user);
        $this->db->where('password',$pass);
        $query = $this->db->get('account_tb');
        
        //check if result is > 0
        if($query->num_rows()>0){
        
            //get user session data and set
            foreach($query->result() as $row){
                $user_info= array (
                    'username' => $row->username,
                    'password' => $row->password,
                    'accountid' => $row->id,
                    'roles' => $row->roles,
                    );
            }
            //set session variable
            $this->session->set_userdata($user_info);

            //redirect
            if($user_info['roles']=="admin"){
                redirect('admin/dashboard');
            }
            elseif($user_info['roles']=="user"){
                redirect('user/dashboard');
            }
            
        }
        else{
            //set session flash data for error credentials
            $this->session->set_flashdata('info','Error in username or password! sabi ni sir');
            redirect('Login');
        }
    }

    public function getUserData(){
        //query here
        $query = $this->db->query('SELECT * FROM account_tb');
        return $query->result();
    }

    public function adduser(){
        $customer_username = $this->input->post('username');
        $customer_password = $this->input->post('password');
        
         
        $this->db->select('*');
        $this->db->where('customer_username',$customer_username);
        $query = $this->db->get('customer_tb');
        
        //check if result is > 0
        if($query->num_rows()>0){
            echo "<script>
            alert('Registration Fail');
            window.location.href='home';
            </script>";
        }
        else{
            $data_array = array(
                'customer_username' => $customer_username,
                'customer_password' => $customer_password,
            );
            $this->db->insert('customer_tb',$data_array);
            echo "<script>
            window.location.href='home';
            </script>";
        }
        

    }

}
