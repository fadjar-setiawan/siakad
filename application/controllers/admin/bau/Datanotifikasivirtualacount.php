<?php 

class Datanotifikasivirtualacount extends CI_Controller{
			
	public function index()
	{
		$data['title'] = "Halaman Administrator";
		$data['jenis_komponen'] = $this->Penggajianmodel->get_data('jenis_komponen')->result();
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/bau/data_notifikasivirtualacount', $data);
		$this->load->view('templates_admin/foother');
	}


}

 ?>