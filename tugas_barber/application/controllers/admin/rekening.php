<?php

class Rekening extends CI_Controller
{
    public function index()
    {
        $data['bank'] = $this->paket_model->get_data('rekening')->result();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/rekening', $data);
        $this->load->view('template_admin/footer');
    }


    public function tambah_bank()
    {
        $data['bank'] = $this->paket_model->get_data('rekening')->result();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/form_tambah_bank',$data);
        $this->load->view('template_admin/footer');
    }

    public function tambah_bank_aksi()
    {
        $this-> _rules();

        if($this->form_validation->run() == FALSE) {
            $this->tambah_bank();
        }else{
            
            $nama_bank         = $this->input->post('nama_bank');
            $no_rekening       = $this->input->post('no_rekening');
            $atas_nama       = $this->input->post('atas_nama');
                    
        $data = array(
            
            'nama_bank'      => $nama_bank,
            'no_rekening'    => $no_rekening,
            'atas_nama'      => $atas_nama,              
        );
    

        $this->paket_model->insert_data($data,'rekening');
        $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
                        Data Berhasil Ditambahkan!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>');
        redirect('admin/rekening');
        }
    }

    public function _rules()
    {
       
        $this->form_validation->set_rules('nama_bank','Nama Bank','required');
        $this->form_validation->set_rules('no_rekening','No. Rekening','required');
        
    }

    
    public function delete_rekening($id)
    {
        $where = array('id_bank' => $id);
        $this->paket_model->delete_data($where, 'rekening' );
        $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Data Rekening Berhasil Dihapus!.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>');
        redirect('admin/rekening');
    }

    public function update_rekening($id)
    {
        $where = array('id_rekening' => $id);
        $data['rekening'] = $this->db->query("SELECT * FROM rekening rk WHERE rk.id_bank='$id'")->result();
        
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/form_update_rekening',$data);
        $this->load->view('template_admin/footer');
    }

    public function update_rekening_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE)
        {
            $this->update_rekening();
        }else{
            $id                 = $this->input->post('id_bank');
            $nama_bank          = $this->input->post('nama_bank');
            $no_rekening        = $this->input->post('no_rekening');
            $atas_nama          = $this->input->post('atas_nama');
        
        $data = array(
            'nama_bank'          => $nama_bank,
            'no_rekening'        => $no_rekening,
            'atas_nama'          => $atas_nama
        );

        $where = array(
            'id_bank' => $id
        );
        $this->paket_model->update_paket('rekening', $data, $where);
        $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
                        Data Berhasil Diupdate!.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>');
        redirect('admin/rekening');
    
        }
        
    }


}
?>