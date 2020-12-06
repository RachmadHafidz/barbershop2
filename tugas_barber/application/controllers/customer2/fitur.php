<?php

class Fitur extends CI_Controller{
    public function index()
    {
        
        
        $this->load->view('customer2/fitur');
        $this->load->view('template_customer2/footer');
    }

}

?>