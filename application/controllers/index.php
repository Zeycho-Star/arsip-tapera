<?php 

class index extends CI_Controller {


        public function __construct(){

        parent::__construct();
        
        $this->load->model('M_index') ;
        
    }

    public function index() {

    $data['pensiun'] = $this->M_index->view();
    $this->load->view('template/header');
  	$this->load->view('public/index',$data);
    
       
    }
}
 ?>