<?php  

class Data_customer extends CI_Controller
{
    public function index()
    {
        $data['customer'] = $this->paket_model->get_data('customer')->result();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/data_customer', $data);
        $this->load->view('template_admin/footer');
    }

    public function tambah_customer()
    {
        $data['customer'] = $this->paket_model->get_data('customer')->result();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/form_tambah_customer');
        $this->load->view('template_admin/footer');
    }

    public function tambah_customer_aksi()
    {
        $this-> _rules();

        if($this->form_validation->run() == FALSE) {
            $this->tambah_data();
        }else{
            
            $nama                   = $this->input->post('nama');
            $username               = $this->input->post('username');
            $password               = $this->input->post('password');
            $alamat                 = $this->input->post('alamat');
            $no_telepon             = $this->input->post('no_telepon');
        
        $data = array(
            
            'nama'          => $nama,
            'username'      => $username,
            'password'      => $password,
            'alamat'        => $alamat,
            'no_telepon'    => $no_telepon
        );
    

        $this->paket_model->insert_data($data,'customer');
        $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
                        Data Berhasil Ditambahkan!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>');
        redirect('admin/data_customer');
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