<?php

class Paket_cukur extends CI_Controller
{
    public function index()
    {
        $data['paket'] = $this->paket_model->get_data('paket_cukur')->result();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/paket_cukur',$data);
        $this->load->view('template_admin/footer');
    }
//button tambah paket
    public function tambah_paket()
    {
        $data['paket'] = $this->paket_model->get_data('paket_cukur')->result();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/form_tambah_paket',$data);
        $this->load->view('template_admin/footer');
    }

//tambah data paket ke database    
    public function tambah_paket_aksi()
    {
        $this-> _rules();

        if($this->form_validation->run() == FALSE) {
            $this->tambah_paket();
        }else{
            
            $nama_paket         = $this->input->post('nama_paket');
            $detail_paket       = $this->input->post('detail_paket');
            $harga              = $this->input->post('harga');
        
        $data = array(
            
            'nama_paket'      => $nama_paket,
            'detail_paket'    => $detail_paket,
            'harga'           => $harga
        );
    

        $this->paket_model->insert_data($data,'paket_cukur');
        $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
                        Data Berhasil Ditambahkan!.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>');
        redirect('admin/paket_cukur');
        }
    }

    public function _rules()
    {
       
        $this->form_validation->set_rules('nama_paket','Nama Paket','required');
        $this->form_validation->set_rules('detail_paket','Detail Paket','required');
        $this->form_validation->set_rules('harga','Harga','required');
    }

//update paket 
    public function update_paket($id)
    {
        $where = array('id_paket' => $id);
        $data['paket'] = $this->db->query("SELECT * FROM paket_cukur pk WHERE pk.id_paket='$id'")->result();
        
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/form_update_paket',$data);
        $this->load->view('template_admin/footer');
    }

    public function update_paket_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE)
        {
            $this->update_paket();
        }else{
            $id                 = $this->input->post('id_paket');
            $nama_paket         = $this->input->post('nama_paket');
            $detail_paket       = $this->input->post('detail_paket');
            $harga              = $this->input->post('harga');
        
        $data = array(
            'nama_paket'      => $nama_paket,
            'detail_paket'    => $detail_paket,
            'harga'           => $harga
        );

        $where = array(
            'id_paket' => $id
        );
        $this->paket_model->update_paket('paket_cukur', $data, $where);
        $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
                        Data Berhasil Diupdate!.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>');
        redirect('admin/paket_cukur');
    
        }
        
    }
}

?>