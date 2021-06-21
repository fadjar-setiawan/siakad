<?php 

class M_fakultas extends CI_model{


    public function edit_data($where, $table){
		return $this->db->get_where($table, $where);
	}

	public function update_data($table,$data,$where){
		$this->db->update($table,$data,$where);
	}

    

    public function update_datax($kd_f, $nm_f){
		$this->db->query("UPDATE fakultas SET nmfak  = '$nm_f' 
                            WHERE  kdfak    = '$kd_f'");
	}

}
?>