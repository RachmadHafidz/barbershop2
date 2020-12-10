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

    public function pembayaran($id)
    {
        $data['transaksi'] = $this->db->query("SELECT * FROM transaksi tr, paket_cukur pk, customer cs 
        WHERE tr.id_paket = pk.id_paket AND tr.id_customer = cs.id_customer AND tr.alamat_order != cs.alamat 
        AND tr.id_order = '$id' ORDER BY id_order DESC")->result();
        $data['bank'] = $this->paket_model->get_data('rekening')->result();
        $this->load->view('template_customer2/header2');
        $this->load->view('customer2/pembayaran',$data);
        $this->load->view('template_customer2/footer'); 
        
    }

    public function pembayaran_aksi()
    {
        $id     = $this->input->post('id_order');
        $bukti_pembayaran = $_FILES['bukti_pembayaran']['name'];
        if($bukti_pembayaran){
            $config ['upload_path']     = 'assets/assets_customer2/upload';
            $config ['allowed_types']   = 'pdf|jpg|jpeg|png|tiff';

            $this->load->library('upload', $config);

            if($this->upload->do_upload('bukti_pembayaran')){
                $bukti_pembayaran=$this->upload->data('file_name');
                $this->db->set('bukti_pembayaran', $bukti_pembayaran);
            }else{
                echo $this->upload->display_errors();
            }
        }

        $data= array(
            'bukti_pembayaran' => $bukti_pembayaran,
        );

        $where = array(
            'id_order' => $id
        );

        $this->paket_model->update_paket('transaksi', $data, $where );
        $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
                        Bukti Pembayaran Anda Berhasil Di Upload!.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>');
        redirect('customer2/transaksi');

    }

}

?>