<?php 

class M_komponenbiaya extends CI_model{

	public function get_data($table){
		return $this->db->get($table);
	}

	public function load_komponenbiaya(){
        $query3 = $this->db->query("SELECT komponen_biaya.kode as kode_biaya, komponen_biaya.nama_komponen as nm_komponen, jenis_komponen.jenis_komponen as jenis FROM komponen_biaya join jenis_komponen on komponen_biaya.id_jenis=jenis_komponen.id_jenis order by komponen_biaya.kode Asc");
    
        foreach ($query3->result() as $row3)
            {
                
                $data[] =  array(
                           'kode_biaya'			        => $row3->kode_biaya,
                           'nm_komponen'	       		=> $row3->nm_komponen,
                           'jenis'       		        => $row3->jenis
                           
      
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