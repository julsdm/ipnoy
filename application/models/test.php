<?php>
public function checkuser(){
        //get input with post
         $user = $this->input->post('username');
         $pass = $this->input->post('password');
        
         //Query Database
         $this->db->select('*');
         $this->db->where('username',$user);
         $this->db->where('password',$pass);
         $query = $this->db->get('account_tb');
           
        //check if result is > 0
        if($query->num_rows()>0){
            //get user session data and set
            //redirect to user dashboard
        }
        else {
            //set session flash data for error credentials
        }
            
    }





?>
    <html>
        <?php
            $info = $this->session->flashdata('info');
            if (!empty($info)){
                echo $info;
            }
        ?></p>
    </html>
