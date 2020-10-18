<?php

class Paket_cukur extends CI_Controller{
    public function index()
    {
        $data['paket'] = $this->paket_model->get_data('paket_cukur')->result();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/paket_cukur',$data);
        $this->load->view('template_admin/footer');
    }
}

?>