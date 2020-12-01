<?php

class Pengisian_data extends CI_Controller
{
    public function tambah_order($id)
    {
        $data['detail'] = $this->paket_model->ambil_id_paket($id);
        $this->load->view('template_customer2/header');
        $this->load->view('customer2/pengisian_data' ,$data);
        $this->load->view('template_customer2/footer');
    }

    

}

?>