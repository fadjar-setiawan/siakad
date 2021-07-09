<?php 

class M_notifikasivirtualacount extends CI_model{

	public function get_data($table){
		return $this->db->get($table);
	}
}

 ?>