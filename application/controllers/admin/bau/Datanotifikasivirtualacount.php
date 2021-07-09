<?php 

class Datanotifikasivirtualacount extends CI_Controller{
			
	public function index()
	{
		$data['title'] = "Halaman Administrator";
		$data['callback'] = $this->M_notifikasivirtualacount->get_data('callback')->result();
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/bau/datanotifikasivirtualacount/data_notifikasivirtualacount', $data);
		$this->load->view('templates_admin/foother');
	}


}

 ?>