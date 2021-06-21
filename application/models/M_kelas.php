<?php 

class M_fakultas extends CI_model{


    public function edit_data($where, $table){
		return $this->db->get_where($table, $where);
	}

    public function update_datax($where, $data, $table){
		$this->db->where($where);
		$this->db->update($table, $data);
	}

    

    public function update_data($kd_k, $nm_k){
		$this->db->query("UPDATE kelas SET nmkelas  = '$nm_k' 
                            WHERE  kdkelas    = '$kd_k'");
	}

}
?>