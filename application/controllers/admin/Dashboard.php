<?php 

class Dashboard extends CI_Controller{

	public function index()
	{
		$data['title'] = "Halaman Administrator";
		$mahasiswa 		= $this->db->query("SELECT * FROM mahasiswa");
		$dosen 			= $this->db->query("SELECT * FROM dosen");
		$matakuliah 	= $this->db->query("SELECT * FROM matakuliah");
		$users 			= $this->db->query("SELECT * FROM users");
		$kelas 			= $this->db->query("SELECT * FROM kelas");
		$kurikulum 		= $this->db->query("SELECT * FROM kurikulum");
		$krs 			= $this->db->query("SELECT * FROM krs");
		$pembayaran 	= $this->db->query("SELECT * FROM pembayaran");
		$jadwal 		= $this->db->query("SELECT * FROM jadwal");


		$data ['mahasiswa'] 	= $mahasiswa->num_rows();
		$data ['dosen'] 		= $dosen->num_rows();
		$data ['matakuliah'] 	= $matakuliah->num_rows();
		$data ['users'] 		= $users->num_rows();
		$data ['kelas'] 		= $kelas->num_rows();
		$data ['kurikulum'] 	= $kurikulum->num_rows();
		$data ['krs'] 			= $krs->num_rows();
		$data ['pembayaran'] 	= $pembayaran->num_rows();
		$data ['jadwal'] 		= $jadwal->num_rows();




			$this->load->view('templates_admin/header', $data);
			$this->load->view('templates_admin/sidebar');
			$this->load->view('admin/dashboard', $data);
			$this->load->view('templates_admin/foother');
	}
}



 ?>