<?php

class Pengisian_data extends CI_Controller
{
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
    public function tambah_order($id)
    {
        $data['detail'] = $this->paket_model->ambil_id_paket($id);
        $this->load->view('template_customer2/header2');
        $this->load->view('customer2/pengisian_data' ,$data);
        $this->load->view('template_customer2/footer');
    }

    public function tambah_order_aksi()
    {
        
        $id_customer         = $this->session->userdata('id_customer');
        $id_paket            = $this->input->post('id_paket');
        $nama_paket          = $this->input->post('nama_paket');
        $detail_paket        = $this->input->post('detail_paket');
        $harga               = $this->input->post('harga');
        $tanggal_order       = $this->input->post('tanggal_order');
        $alamat_order              = $this->input->post('alamat_order');

        $data = array(
            
            'id_customer'       => $id_customer,
            'id_paket'          => $id_paket,
            'nama_paket'        => $nama_paket,
            'detail_paket'      => $detail_paket,
            'harga'             => $harga,
            'tanggal_order'     => $tanggal_order,
            'alamat_order'      => $alamat_order,
            'status_order'      => 'Belum Selesai',
        );

        $this->paket_model->insert_data($data, 'transaksi');
        $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
        Transaksi Berhasil, Silahkan Chechout!.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>');
        redirect('customer2/order');
    }

}

?>