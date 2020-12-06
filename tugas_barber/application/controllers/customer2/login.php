<?php

class Login extends CI_Controller{
    public function index()
    {
        $this->_rules();

        if($this->form_validation->run()== FALSE){
            $this->load->view('login');     
        
        }else{
            $username = $this->input->post('username');
            $password = md5($this->input->post('password'));

            $cek = $this->paket_model->cek_login($username, $password,);
            
            if($cek == FALSE)
            {
                $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Username Atau Password Salah!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
                redirect('customer2/login');
            }else{
                
                $this->session->set_userdata('username',$cek->username);
                $this->session->set_userdata('role_id',$cek->role_id);
                $this->session->set_userdata('nama',$cek->nama);
                $this->session->set_userdata('id_customer',$cek->id_customer);
                

                switch ($cek->role_id){
                    case 1: redirect('admin/dashboard_admin');
                            break;
                    case 2: redirect('customer2/dashboard_customer2');
                            break;

                    default: break;
                }
            }
        }
        
    }

    public function _rules()
    {
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('customer2/dashboard_customer2');
    }

}

?>