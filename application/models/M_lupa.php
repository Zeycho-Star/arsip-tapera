<?php 

class M_lupa extends CI_MODEL
{
    public function view(){
        return $this->db->get('lupa')->result();
    }

    public function view_by($id){
        $this->db->where('id',$id);
        return $this->db->get('lupa')->row();
    }

    public function validation($mode){
        $this->load->library('form_validation');
        if($mode == "save");
        $this->form_validation->set_rules('input_nama','Nama','required');
        $this->form_validation->set_rules('input_nip','NIP','required');
        $this->form_validation->set_rules('input_nik','NIK','required');
        $this->form_validation->set_rules('input_email','EMAIL','required');
        $this->form_validation->set_rules('input_nohp','NoHp','required');
        $this->form_validation->set_rules('input_unit','Unit','required');
        $this->form_validation->set_rules('input_status','status','required');

        if($this->form_validation->run())
        return TRUE ;
        else
        return FALSE ;
    }
    public function save(){
        $data = array(
            "nama"   =>$this->input->post('input_nama'), 
            "nip"    =>$this->input->post('input_nip'), 
            "nik"    =>$this->input->post('input_nik'), 
            "email"  =>$this->input->post('input_email'), 
            "nohp"   =>$this->input->post('input_nohp'), 
            "unit"   =>$this->input->post('input_unit'), 
            "status" =>$this->input->post('input_status')
        );

        $this->db->insert('lupa',$data);
    }

    public function edit($id){
        $data = array(
            "nama"   =>$this->input->post('input_nama'), 
            "nip"    =>$this->input->post('input_nip'), 
            "nik"    =>$this->input->post('input_nik'), 
            "email"  =>$this->input->post('input_email'), 
            "nohp"   =>$this->input->post('input_nohp'), 
            "unit"   =>$this->input->post('input_unit'), 
            "status" =>$this->input->post('input_status')
        );
        $this->db->where('id',$id);
        $this->db->update('lupa',$data);
    }

    public function delete($id){
        $this->db->where('id',$id);
        $this->db->delete('lupa');
    }
    
}
?>