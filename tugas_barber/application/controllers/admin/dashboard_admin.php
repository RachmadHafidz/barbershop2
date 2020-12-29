<?php

class dashboard_admin extends CI_Controller
{
    public function __construct(){
        parent::__construct();

        if($this->session->userdata('role_id') != '1'){
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
        $admin      = $this->db->query("SELECT * FROM customer WHERE role_id = '1'");
        $customer   = $this->db->query("SELECT * FROM customer WHERE role_id = '2'");
        $paket      = $this->db->query("SELECT * FROM paket_cukur");
        $transaksi  = $this->db->query("SELECT * FROM transaksi");
        $rekening   = $this->db->query("SELECT * FROM rekening");
        $hubungi    = $this->db->query("SELECT * FROM hubungi");
        $data['admin']      = $admin->num_rows();        
        $data['paket']      = $paket->num_rows();
        $data['customer']   = $customer->num_rows();
        $data['transaksi']  = $transaksi->num_rows();
        $data['rekening']   = $rekening->num_rows();
        $data['hubungi']    = $rekening->num_rows();
        $this->load->view('template_admin/header', $data);
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/dashboard_admin', $data);
        $this->load->view('template_admin/footer');
    }
}

?>
