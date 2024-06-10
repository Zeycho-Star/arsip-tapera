<?php

class home extends CI_Controller {

    public function __construct(){

        parent::__construct();
        if (empty($this->session->userdata('login'))) {
            redirect('utama');
        }
            $this->load->model('M_pensiun') ;
        
    }

    public function index() {
        $data['pensiun'] = $this->M_pensiun->view();
        $this->load->view('template/navbar');
        $this->load->view('template/breadcrumb');
        $this->load->view('admin/home',$data);
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('template/footer');
        
       
    }

public function tambah(){
    if($this->input->post('submit')){
        if($this->M_pensiun->validation("save")){
            $this->M_pensiun->save();
            redirect('home');
        }
    }
    $this->load->view('template/navbar');
    $this->load->view('template/breadcrumb');
    $this->load->view('admin/form_tambah');
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('template/footer');
} 

public function ubah($id){
    if($this->input->post('submit')){
        if($this->M_pensiun->validation("update")){
            $this->M_pensiun->edit($id);
            redirect('home');
        }
    }
    $data['pensiun'] = $this->M_pensiun->view_by($id);
    $this->load->view('template/navbar');
    $this->load->view('template/breadcrumb');
    $this->load->view('admin/form_ubah',$data);
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('template/footer');

}
public function hapus($id){
    $this->M_pensiun->delete($id);
    redirect('home');
}
}

?> 