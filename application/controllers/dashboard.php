<?php
class dashboard extends CI_Controller {


    public function __construct(){
        parent::__construct();
        if (empty($this->session->userdata('login'))) {
            redirect('utama');
        }
            $this->load->model('M_pensiun') ;
    }


public function index() {

    // $data['berkas_terkirim'] = $this->M_pensiun->berkas_terkirim();
    $this->load->view('template/navbar');
    $this->load->view('template/breadcrumb');
    $this->load->view('admin/dashboard');
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('template/footer');


}
}
