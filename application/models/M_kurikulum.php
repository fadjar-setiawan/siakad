<?php 

class M_kurikulum extends CI_model{

	public function get_data($table){
		return $this->db->get($table);
	}

	public function load_kurikulum(){
        $query3 = $this->db->query("SELECT kurikulum.nmkurikulum as nama_kurikulum, kurikulum.kdkurikulum as kode_kurikulum, kurikulum.semester as semester, kurikulum.tahun as tahun, kurikulum.semester as semester, kurikulum.kdjur as kd_jur, jurusan.nmjur as nama_jurusan FROM kurikulum join jurusan on kurikulum.kdjur=jurusan.kdjur order by kurikulum.nmkurikulum Asc");
    
        foreach ($query3->result() as $row3)
            {
                
                $data[] =  array(
                           'nama_kurikulum'			    => $row3->nama_kurikulum,
						   'kode_kurikulum'			    => $row3->kode_kurikulum,
                           'semester'	       			=> $row3->semester,
                           'tahun'       				=> $row3->tahun,
                           'semester'			    	=> $row3->semester,
                           'kd_jur'	        			=> $row3->kd_jur,
                           'nama_jurusan'       		=> $row3->nama_jurusan
                           
      
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

}

 ?>