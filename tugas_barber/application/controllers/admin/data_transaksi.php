<?php  

class Data_transaksi extends CI_Controller
{
    public function index()
    {
        $data['transaksi'] = $this->db->query("SELECT * FROM transaksi tr, paket_cukur pk, customer cs 
        WHERE tr.id_paket = pk.id_paket AND tr.id_customer = cs.id_customer")->result();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/data_transaksi', $data);
        $this->load->view('template_admin/footer');
    }

}
?>