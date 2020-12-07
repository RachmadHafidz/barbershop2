<?php

class Transaksi extends CI_Controller{
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
        $customer = $this->session->userdata('id_customer');
        $data['transaksi'] = $this->db->query("SELECT * FROM transaksi tr, paket_cukur pk, customer cs 
        WHERE tr.id_paket = pk.id_paket AND tr.id_customer = cs.id_customer AND tr.alamat_order != cs.alamat 
        AND cs.id_customer = '$customer' ORDER BY id_order DESC")->result();        
        $this->load->view('template_customer2/header2');
        $this->load->view('customer2/transaksi',$data);
        $this->load->view('template_customer2/footer');
    }

}

?>