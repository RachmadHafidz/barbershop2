<?php

class Dashboard_customer2 extends CI_Controller{
    public function index()
    {
        
        $this->load->view('template_customer2/header');
        $this->load->view('customer2/dashboard_customer2');
        $this->load->view('template_customer2/footer');
    }

}

?>