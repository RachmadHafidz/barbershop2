<?php

class Order extends CI_Controller{
    public function index()
    {
        $data['paket'] = $this->paket_model->get_data('paket_cukur')->result();
        $this->load->view('template_customer2/header');
        $this->load->view('customer2/order',$data);
        $this->load->view('template_customer2/footer');
    }

}

?>