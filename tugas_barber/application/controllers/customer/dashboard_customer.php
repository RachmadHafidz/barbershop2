<?php

class Dashboard_customer extends CI_Controller{
    public function index()
    {
        $data['paket'] = $this->paket_model->get_data('paket_cukur')->result();
        $this->load->view('template_customer/header');
        $this->load->view('customer/dashboard_customer',$data);
        $this->load->view('template_customer/footer');
    }
}

?>