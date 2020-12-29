<?php

class Hubungi_kami extends CI_Controller
{
   
    public function index()
    {       
        $data['hubungi'] = $this->hubungi_model->tampil_data('hubungi')->result();
        $this->load->view('template_customer2/header');
        $this->load->view('customer2/dashboard_customer2',$data);
        $this->load->view('template_customer2/footer');
    }

    public function kirim_pesan()
    {
        
        $this->_rules();

        if($this->form_validation->run() == FALSE) {
            $this->index();

        }else{
            $id                  = $this->input->post('id_hubungi');
            $nama                = $this->input->post('nama');
            $email               = $this->input->post('email');
            $pesan               = $this->input->post('pesan');
            
        
        $data = array(
            
           
            'nama'          => $nama,
            'email'         => $email,
            'pesan'         => $pesan,            
        );

        $this->hubungi_model->insert_data($data,'hubungi');
        $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
                        Pesan Anda Berasil Terkirim!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>');
        redirect('customer2/dashboard_customer2');
        
        }

        
      

       
    }

    public function _rules()
    {
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('pesan','Pesan','required');
    }

}



?>