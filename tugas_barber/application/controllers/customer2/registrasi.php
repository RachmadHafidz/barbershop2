<?php

class Registrasi extends CI_Controller{
    public function index()
    {
        $this->_rules();

        if($this->form_validation->run() == FALSE) {
            $this->load->view('template_admin/header');
            $this->load->view('registrasi');
            $this->load->view('template_admin/footer');

        }else{
            $nama                   = $this->input->post('nama');
            $username               = $this->input->post('username');
            $password               = md5($this->input->post('password'));
            $alamat                 = $this->input->post('alamat');
            $no_telepon             = $this->input->post('no_telepon');
            $role_id                = '2';
        
        $data = array(
            
            'nama'          => $nama,
            'username'      => $username,
            'password'      => $password,
            'alamat'        => $alamat,
            'no_telepon'    => $no_telepon,
            'role_id'       => $role_id
        );

        $this->paket_model->insert_data($data,'customer');
        $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
                        Berhasil Registrasi, Silahkan Login!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>');
        redirect('customer2/login');
        }

       
    }

    public function _rules()
    {
       
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required');
        $this->form_validation->set_rules('alamat','Alamat','required');
        $this->form_validation->set_rules('no_telepon','No. Telepon','required');
    }    

}

?>