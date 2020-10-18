<?php

class Dashboard_customer extends CI_Controller{
    public function index()
    {
        $this->load->view('template_customer/header');
        $this->load->view('customer/dashboard_customer');
        $this->load->view('template_customer/footer');
    }
}

?>