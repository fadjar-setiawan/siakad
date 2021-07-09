<?php 

class M_jurusan extends CI_model{

	public function tambah_data($data){
		$kode=$data['kdjur'];
		$kodefak=$data['kdfak'];
		$namajur=$data['nmjur'];
		$this->db->query("INSERT into jurusan(kdjur, kdfak, nmjur) values('$kode', '$kodefak', '$namajur')");
		
	}

	public function update_data($table,$data,$where){
		$this->db->update($table,$data,$where);
	}

	public function delete_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

}

 ?>