<?php

class Order extends CI_Controller{
    public function __construct(){
        parent::__construct();

        if($this->session->userdata('role_id') != '2'){
            $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Anda Harus Login!.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>');
                    redirect('customer2/login');
        }
    }
    public function index()
    {
        $data['paket'] = $this->paket_model->get_data('paket_cukur')->result();
        $this->load->view('template_customer2/header');
        $this->load->view('customer2/order',$data);
        $this->load->view('template_customer2/footer');
    }

}

?>