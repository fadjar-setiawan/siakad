<?php 

class Datacekduplikasi extends CI_Controller{
			
	public function index()
	{
		$data['title'] = "Halaman Administrator";
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/system/data_cekduplikasi', $data);

	}
}


 ?>