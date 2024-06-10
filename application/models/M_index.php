<?php 

class M_index extends CI_MODEL
{
    public function view(){
        return $this->db->get('pensiun')->result();
    }

    public function view_by($id){

        $this->db->where('id',$id);
        return $this->db->get('pensiun')->row();
        $data['pensiun'] = $this->M_index->view_by($id);


}
}
?>