<?php

class Order extends CI_Controller{
    public function index()
    {
        
        $this->load->view('template_customer2/header');
        $this->load->view('customer2/order');
        $this->load->view('template_customer2/footer');
    }

}

?>