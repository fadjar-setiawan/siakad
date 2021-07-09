<?php 

class M_aturbiaya extends CI_model{

	public function get_data($table){
		return $this->db->get($table);
	}

	public function load_aturbiaya(){
        $query3 = $this->db->query("SELECT master_biaya.nm_master_biaya as nama_master, jurusan.kdjur as kode_jurusan, jurusan.nmjur as nama_jurusan, seting_biaya.id_set_biaya as id_biaya, komponen_biaya.nama_komponen as nm_komponen, master_biaya.tahun_ajaran as thn_ajaran, master_biaya.semester as smtr, seting_biaya.kd_master_biaya as kd_master, seting_biaya.jumlah as jmlh, seting_biaya.kode as kode, seting_biaya.model_pembayaran as mdl_pembayaran, seting_biaya.tipe as tp_biaya FROM seting_biaya join komponen_biaya on seting_biaya.kode=komponen_biaya.kode join master_biaya on seting_biaya.kd_master_biaya=master_biaya.kd_master_biaya join jurusan on master_biaya.kdjur=jurusan.kdjur order by master_biaya.nm_master_biaya Asc");
    
        foreach ($query3->result() as $row3)
            {
                
                $data[] =  array(
                           'nama_master'			    => $row3->nama_master,
                           'nm_komponen'	       		=> $row3->nm_komponen,
                           'kode_jurusan'       		=> $row3->kode_jurusan,
						   'nama_jurusan'       		=> $row3->nama_jurusan,
						   'id_biaya'       			=> $row3->id_biaya,
                           'thn_ajaran'			    	=> $row3->thn_ajaran,
                           'smtr'	        			=> $row3->smtr,
						   'kd_master'	        		=> $row3->kd_master,
                           'jmlh'       				=> $row3->jmlh,
						   'mdl_pembayaran'       		=> $row3->mdl_pembayaran,
						   'tp_biaya'       			=> $row3->tp_biaya,
						   'kode'       				=> $row3->kode
                           
      
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