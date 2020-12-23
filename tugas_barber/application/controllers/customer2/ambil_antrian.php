<?php

class Ambil_antrian extends CI_Controller{
    
    public function tambah_antrian()
   
    {
        $customer = $this->session->userdata('id_customer');
        $data['antri'] = $this->db->query("SELECT * FROM antrian ar, customer cs 
        WHERE ar.id_customer = cs.id_customer AND ar.no_hp = cs.no_telepon")->result();
        $data['antri'] = $this->paket_model->get_data('customer')->result();              
        $this->load->view('template_customer2/header2');
        $this->load->view('customer2/ambil_antrian',$data);
        $this->load->view('template_customer2/footer');
    }

    public function tambah_antrian_aksi()
    {
        
        $id_customer        = $this->session->userdata('id_customer');
        $alamat             = $this->input->post('alamat');
        $no_hp              = $this->input->post('no_hp');
       

        $data = array(
            
            'id_customer'       => $id_customer,
            'alamat'            => $alamat,
            'no_hp'             => $no_hp,
            
        );

        $this->paket_model->insert_data($data, 'antrian');
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