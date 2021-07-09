<?php 

class M_masterbiaya extends CI_model{

	public function get_data($table){
		return $this->db->get($table);
	}

	public function load_masterbiaya(){
        $query3 = $this->db->query("SELECT master_biaya.kd_master_biaya as kode, master_biaya.nm_master_biaya as nama_biaya, master_biaya.kdjur as kode_jurusan, master_biaya.tahun_ajaran as tahun, master_biaya.semester as semester, jurusan.nmjur as nama_jurusan FROM master_biaya join jurusan on master_biaya.kdjur=jurusan.kdjur order by  master_biaya.kd_master_biaya Asc");
    
        foreach ($query3->result() as $row3)
            {
                
                $data[] =  array(
                           'kode'			    => $row3->kode,
                           'nama_biaya'	        => $row3->nama_biaya,
                           'kode_jurusan'       => $row3->kode_jurusan,
                           'tahun'			    => $row3->tahun,
                           'semester'	        => $row3->semester,
                           'nama_jurusan'       => $row3->nama_jurusan
                           
      
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
}

 ?>