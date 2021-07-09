<?php 

class M_dosen extends CI_model{

	public function get_data($table){
		return $this->db->get($table);
	}

	public function load_dosen(){
	$query3 = $this->db->query("SELECT materibaru.kode_dosen as kode, dosen.nama_dosen as nm_dosen, matakuliah.nmmatkul as nama_matakuliah, matakuliah.sks, jurusan.nmjur as nama_jurusan, materibaru.tahun as tahun, materibaru.semester as semester FROM materibaru join matakuliah on materibaru.kdmatkul=matakuliah.kdmatkul join dosen on materibaru.kode_dosen=dosen.kode_dosen join jurusan on materibaru.kdjur=jurusan.kdjur join kelas on materibaru.kdkelas=kelas.kdkelas order by materibaru.kode_dosen Asc");

	foreach ($query3->result() as $row3)
		{
			
	        $data[] =  array(
				       'kode'						=> $row3->kode,
				       'nm_dosen'					=> $row3->nm_dosen,
					   'nama_matakuliah'			=> $row3->nama_matakuliah,
				       'sks'						=> $row3->sks,
					   'nama_jurusan'				=> $row3->nama_jurusan,
				       'tahun'						=> $row3->tahun,
				       'semester'					=> $row3->semester
					   

			);
		}

		$rtn = array('data'=>$data);

		return $rtn; 
	}

	public function insert_data($data,$table){
		$this->db->insert($table,$data);
	}

	public function update_data($table,$data,$where){
		$this->db->update($table,$data,$where);
	}

	public function delete_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function insert_batch($table = null, $data = array())
	{
		$jumlah = count($data);
		if($jumlah > 0)
		{
			$this->db->insert_batch($table, $data);
		}
	}

	public function cek_login()
	{
		$username	= set_value('username');
		$password	= set_value('password');

		$result		= $this->db ->where('username', $username)
								->where('password',md5($password))
								->limit(1)
								->get('data_pegawai');
		if($result->num_rows()>0){
			return $result->row();
		}else{
			return FALSE;
		}

		}

	}

 ?>