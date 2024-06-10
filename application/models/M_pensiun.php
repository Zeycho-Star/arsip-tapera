<?php 

class M_pensiun extends CI_MODEL
{
    public function view(){
        // return $this->db->get('pensiun')->result();
         $this->db->select('*');
         $this->db->from('pensiun');
        $this->db->join('user','user.id_user=pensiun.id_user');
        $query = $this->db->get();
        return $query->result();
    }

    public function view_by($id){
        $this->db->where('id_pensiun',$id);
        return $this->db->get('pensiun')->row();
    }

    public function validation($mode){
        $this->load->library('form_validation');
        if(($mode == "save")||($mode=="update")){
        $this->form_validation->set_rules('id_user','id_user','required');
        $this->form_validation->set_rules('input_nama','Nama','required');
        $this->form_validation->set_rules('input_nip','NIP','required');
        $this->form_validation->set_rules('input_nohp','NoHp','required');
        $this->form_validation->set_rules('input_status','status','required');
        }
        if($this->form_validation->run())
        return TRUE ;
        else
        return FALSE ;
    }
    public function save(){
        $data = array(
            "id_user"=>$this->input->post('id_user'),
            "nama"   =>$this->input->post('input_nama'), 
            "nip"    =>$this->input->post('input_nip'), 
            "nohp"   =>$this->input->post('input_nohp'), 
            "status" =>$this->input->post('input_status')
        );

        $this->db->insert('pensiun',$data);
    }

    public function edit($id_pensiun){
        $data = array(
            "id_user"=>$this->input->post('id_user'),
            "nama"   =>$this->input->post('input_nama'), 
            "nip"    =>$this->input->post('input_nip'), 
            "nohp"   =>$this->input->post('input_nohp'), 
            "status" =>$this->input->post('input_status')
        );
        $this->db->where('id_pensiun',$id_pensiun);
        $this->db->update('pensiun',$data);
    }

    public function delete($id_pensiun){
        $this->db->where('id_pensiun',$id_pensiun);
        $this->db->delete('pensiun');
    }

    // public function berkas_terkirim(){

    //     $this->db->select('count');
    //     $this->db->from('pensiun');
    //     $this->db->where('status',['Terkirim']);

    //     return $this->db->get()->num_rows();
    // }
    
}

?>