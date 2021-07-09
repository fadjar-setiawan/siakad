<?php 

class Dataaturbiaya extends CI_Controller{
			
	public function index()
	{
		$data['title'] = "Halaman Administrator";
		$data['rtn'] = $this->M_aturbiaya->load_aturbiaya();
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/bau/dataaturbiaya/data_aturbiaya', $data);
		$this->load->view('templates_admin/foother');
	}
	public function tambahdata()
	{
		$data['title'] = "Halaman Administrator";
		$data['komponen_biaya'] = $this->M_aturbiaya->get_data('komponen_biaya')->result();
		$data['master_biaya'] = $this->M_aturbiaya->get_data('master_biaya')->result();
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/bau/dataaturbiaya/tambahdataaturbiaya', $data);
		$this->load->view('templates_admin/foother');
	}

	public function tambahdataaksi()
	{
		
		$this->_rules();

		if($this->form_validation->run() == FALSE) {
			$this->tambahdata();


		}else{
			$kd_master_biaya 			=$this->input->post('kd_master_biaya');
			$kode 						=$this->input->post('kode');
			$jumlah 					=$this->input->post('jumlah');
			$model_pembayaran 			=$this->input->post('model_pembayaran');
			$tipe 						=$this->input->post('tipe');

			$data = array(

				'kd_master_biaya' 			=> $kd_master_biaya,
				'kode' 						=> $kode,
				'jumlah' 					=> $jumlah,
				'model_pembayaran' 			=> $model_pembayaran,
				'tipe' 						=> $tipe,
			);


			$this->M_aturbiaya->insert_data($data, 'seting_biaya');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
											  <strong>Data berhasil di tambah</strong>
											  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
											    <span aria-hidden="true">&times;</span>
													</button>
														</div>');

			redirect('admin/bau/dataaturbiaya');

		}
		
	}

//update data//

	public function updatedata($id)
	{
		$where = array ('kd_master_biaya' => $id);
		$data['seting_biaya'] = $this->db->query("SELECT * FROM seting_biaya, master_biaya, komponen_biaya WHERE seting_biaya.kode=komponen_biaya.kode and seting_biaya.id_set_biaya='$id' AND seting_biaya.kd_master_biaya=master_biaya.kd_master_biaya")->result();

		$data['komponen_biaya'] = $this->M_aturbiaya->get_data('komponen_biaya')->result();
		$data['master_biaya'] = $this->M_aturbiaya->get_data('master_biaya')->result();

		$data['title'] = "Halaman Administrator";
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/bau/dataaturbiaya/updatedataaturbiaya', $data);
		$this->load->view('templates_admin/foother');
	}

	public function updatedataaksi()
	{

		$kd_master_biaya 			=$this->input->post('kd_master_biaya');
		$kode 						=$this->input->post('kode');
		$jumlah 					=$this->input->post('jumlah');
		$model_pembayaran 			=$this->input->post('model_pembayaran');
		$tipe 						=$this->input->post('tipe');

		$data = array(

			'kd_master_biaya' 			=> $kd_master_biaya,
			'kode' 						=> $kode,
			'jumlah' 					=> $jumlah,
			'model_pembayaran' 			=> $model_pembayaran,
			'tipe' 						=> $tipe,
		);
		
				$where = array(
					'kd_master_biaya' => $kd_master_biaya
				);
		

			$this->M_aturbiaya->update_data('seting_biaya',$data,$where);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
											  <strong>Data berhasil di update</strong>
											  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
											    <span aria-hidden="true">&times;</span>
													</button>
														</div>');

			redirect('admin/bau/dataaturbiaya');

		
		
	}

//akhir update data//


	public function _rules()
	{
		$this->form_validation->set_rules('jumlah','Jumlah','required');

		//$this->form_validation->set_rules('photo','photo','required');
	}

	public function deletedata($id)
	{
		$where = array('nm_master_biaya' => $id);
		$this->M_aturbiaya->delete_data($where,'master_biaya');	
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
											  <strong>Data berhasil di hapus</strong>
											  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
											    <span aria-hidden="true">&times;</span>
													</button>
														</div>');
			redirect('admin/bau/dataaturbiaya');
	}
}


 ?>