<?php

class Hubungi_kami extends CI_Controller{
   
    public function index()
    {       
        $data['hubungi'] = $this->hubungi_model->tampil_data('hubungi')->result();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/hubungi_kami',$data);
        $this->load->view('template_admin/footer');
    }

    public function kirim_email($id)
    {
        $where = array('id_hubungi' => $id);
        $data['hubungi'] = $this->hubungi_model->kirim_data($where, 'hubungi')->result();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/form_kirim_email',$data);
        $this->load->view('template_admin/footer');
    }

    public function kirim_email_aksi()
    {

        $to_email = $this->input->post('email');
        $subject = $this->input->post('subject');
        $message= $this->input->post('pesan');
        $config = 
        [
            'mailtype'      => 'html',
            'charset'       => 'utf-8',
            'protocol'      => 'smtp',
            'smtp_host'     => 'ssl://smtp.gmail.com',
            'smtp_user'     => 'ifarmahendra1933@gmail.com',
            'smtp_pass'     => 'ipangpersib1933',
            'smtp_post'     => 465,
            'crlf'          => "\r\n",
            'newline'       => "\r\n"
        ];

        $this->load->library('email', $config);

        $this->email->from("Barbershop Lareoz");

        $this->email->to($to_email);

        $this->email->subject($subject);

        $this->email->message($message);

        if($this->email->send())
        {
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
                        Pesan Berhasil Terkirim!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>');
            redirect('admin/hubungi_kami');
        }else{
            $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                       Pesan Gagal Terkirim!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>');
            redirect('admin/hubungi_kami');
        }
    }

    public function delete_pesan($id)
    {
        $where = array('id_hubungi' => $id);
        $this->paket_model->delete_data($where, 'hubungi' );
        $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Data Berhasil Dihapus!.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>');
        redirect('admin/hubungi_kami');
    }

}

?>