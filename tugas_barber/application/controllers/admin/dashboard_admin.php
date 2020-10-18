<?php

class dashboard_admin extends CI_Controller{
    public function index()
    {
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/dashboard_admin');
        $this->load->view('template_admin/footer');
    }
}

?>
