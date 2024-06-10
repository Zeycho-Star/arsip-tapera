<?php 

class M_login extends CI_MODEL{

	public function cek_login($where){
		return $this->db->get_where('user',$where); 
	}

	public function get_id_user($user){
		$this->db->select('id_user');
		$this->db->from('user');
		$this->db->where('username',$user);
		return $this->db->get()->result();
	}
}

?>