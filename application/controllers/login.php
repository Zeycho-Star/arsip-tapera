<?php
class login extends CI_Controller {


    public function __construct(){
        parent::__construct();

        $this->load->model('M_login');
    }

    public function index() {

    $this->load->view('login/login');

}
    public function login_aksi(){

        $user = $this->input->post('username',true);
        $pass = md5($this->input->post('password',true));


        //rule validasi 

        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required');

        if($this->form_validation->run() != FALSE){
            $where = array(
                    'username' => $user,
                    'password' => $pass
            );

            $cek_login = $this->M_login->cek_login($where)->num_rows();

            if($cek_login > 0){
                $id_user=$this->M_login->get_id_user($user);

                $sess_data = array (
                    'username' => $user,
                    'login'     => 'OK'
                ); 

                $this->session->set_userdata($sess_data);
                $this->session->set_userdata('id_user',$id_user);

                redirect(base_url('home'));

            }else{
                redirect(base_url('login'));
            }


        }else{
            $this->load->view('login/login');
        }

        }

    public function logout(){

        $this->session->sess_destroy();
        redirect(base_url('utama'));
    }


}

?>