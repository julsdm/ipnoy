
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class circuits extends CI_Controller {  
        public function index()
        {
            //$this->load->view('pages/Landing_page_view');
            $this->load->view('pages/user/course_details_circuits');
        }

}
