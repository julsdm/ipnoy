<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About_us extends CI_Controller {  
        public function index()
        {
            //$this->load->view('pages/Landing_page_view');
            $this->load->view('pages/user/about_us');
        }
}
