<?php 
class lupa extends CI_Controller {

    public function __construct(){

        parent::__construct();

        if (empty($this->session->userdata('login'))) {
            redirect('utama');
        }
            $this->load->model('M_lupa') ;
        
    }

    public function index() {
        $data['pensiun'] = $this->M_lupa->view();
        $this->load->view('template/navbar');
        $this->load->view('template/breadcrumb');
        $this->load->view('admin/data_lupa',$data);
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('template/footer');
        
       
    }

    public function tambah(){
        if($this->input->post('submit')){
            if($this->M_lupa->validation("save")){
                $this->M_lupa->save();
                redirect('lupa');
            }
        }
        $this->load->view('template/navbar');
        $this->load->view('template/breadcrumb');
        $this->load->view('admin/form_lupa');
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('template/footer');
    }

    public function ubah($id){
        if($this->input->post('submit')){
            if($this->M_lupa->validation("update")){
                $this->M_lupa->edit($id);
                redirect('lupa');
            }
        }
        $data['lupa'] = $this->M_lupa->view_by($id);
        $this->load->view('template/navbar');
        $this->load->view('template/breadcrumb');
        $this->load->view('admin/edit_lupa',$data);
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('template/footer');
    
    }
    public function hapus($id){
        $this->M_lupa->delete($id);
        redirect('lupa');
    }
    
}
