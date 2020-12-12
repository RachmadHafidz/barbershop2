<?php  

class Data_transaksi extends CI_Controller
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
        $data['transaksi'] = $this->db->query("SELECT * FROM transaksi tr, paket_cukur pk, customer cs 
        WHERE tr.id_paket = pk.id_paket AND tr.id_customer = cs.id_customer")->result();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/data_transaksi', $data);
        $this->load->view('template_admin/footer');
    }

    public function pembayaran($id)
    {
        $where = array('id_order' => $id);
        $data['pembayaran'] = $this->db->query("SELECT * FROM transaksi WHERE id_order = '$id'")->result();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/konfirmasi_pembayaran', $data);
        $this->load->view('template_admin/footer');
    }

    public function cek_pembayaran()
    {
        $id                 = $this->input->post('id_order');
        $status_pembayaran  = $this->input->post('status_pembayaran');

        $data= array(
            'status_pembayaran' => $status_pembayaran,
        );

        $where = array(
            'id_order' => $id
        );

        $this->paket_model->update_paket('transaksi',$data,$where);
        redirect('admin/data_transaksi');
    }

    public function download_bayar($id)
    {
        $this->load->helper('download');
        $filePembayaran = $this->paket_model->downloadbayar($id);
        $file = 'assets/assets_customer2/upload/'. $filePembayaran['bukti_pembayaran'];
        force_download($file, NULL);
    }

    public function transaksi_selesai($id)
    {
        $where = array('id_order' => $id);
        $data['transaksi'] = $this->db->query("SELECT * FROM transaksi tr, customer cs 
        WHERE tr.id_customer = cs.id_customer   AND id_order='$id'")->result();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/transaksi_selesai', $data);
        $this->load->view('template_admin/footer');
    }

    public function transaksi_selesai_aksi()
    {
        $id             = $this->input->post('id_order');        
        $status_order   = $this->input->post('status_order');

        $data = array(            
            'status_order' => $status_order,
        );

        $where = array(
            'id_order' => $id
        );

        $this->paket_model->update_paket('transaksi', $data, $where);
        $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Transaksi Berhasil Diupdate!.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>');
        redirect('admin/data_transaksi');
    }

}
?>