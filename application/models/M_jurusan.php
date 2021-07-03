<?php 

class M_jurusan extends CI_model{

	public function tambah_data($data){
		$kode=$data['kdjur'];
		$kodefak=$data['kdfak'];
		$namajur=$data['nmjur'];
		$this->db->query("INSERT into jurusan(kdjur, kdfak, nmjur) values('$kode', '$kodefak', '$namajur')");
		
	}

}

 ?>