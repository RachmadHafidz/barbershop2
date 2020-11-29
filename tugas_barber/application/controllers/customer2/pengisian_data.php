<?php

class Pengisian_data extends CI_Controller{
    public function index()
    {
        
        $this->load->view('template_customer2/header');
        $this->load->view('customer2/pengisian_data');
        $this->load->view('template_customer2/footer');
    }

}

?>