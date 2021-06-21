<?php 

class Datakomponenbiaya extends CI_Controller{
			
	public function index()
	{
		$data['title'] = "Halaman Administrator";
		$data['komponen_biaya'] = $this->Penggajianmodel->get_data('komponen_biaya')->result();
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/bau/data_komponenbiaya', $data);
		$this->load->view('templates_admin/foother');
	}


	public function tambahdata()
	{
		$data['title'] = "Halaman Administrator";
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/bau/tambahdatakomponenbiaya', $data);
		$this->load->view('templates_admin/foother');
	}

	public function tambahdataaksi()
	{
		
		$this->_rules();

		if($this->form_validation->run() == FALSE) {
			$this->tambahdata();


		}else{
			$kode 			        	=$this->input->post('kode');
			$nama_komponen 				=$this->input->post('nama_komponen');
			$id_jenis 					=$this->input->post('id_jenis');

			$data = array(

				'kode' 			        	=> $kode,
				'nama_komponen' 			=> $nama_komponen,
				'id_jenis' 					=> $id_jenis,
			);


			$this->Penggajianmodel->insert_data($data, 'komponen_biaya');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
											  <strong>Data berhasil di tambah</strong>
											  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
											    <span aria-hidden="true">&times;</span>
													</button>
														</div>');

			redirect('admin/bau/datakomponenbiaya');

		}
		
	}

//update data//

	public function updatedata($id)
	{
		$where = array ('kdmatkul' => $id);
		$data['komponen_biaya'] = $this->db->query("SELECT * FROM komponen_biaya WHERE kode ='$id'")->result();
		$data['title'] = "Halaman Administrator";
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/bau/updatedatakomponenbiaya', $data);
		$this->load->view('templates_admin/foother');
	}

	public function updatedataaksi()
	{

        	$kode 			        	=$this->input->post('kode');
			$nama_komponen 				=$this->input->post('nama_komponen');
			$id_jenis 					=$this->input->post('id_jenis');

			$data = array(

				'kode' 			        	=> $kode,
				'nama_komponen' 			=> $nama_komponen,
				'id_jenis' 					=> $id_jenis,
				);
		
				$where = array(
					'kode' => $kode
				);
		

			$this->Penggajianmodel->update_data('komponen_biaya',$data,$where);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
											  <strong>Data berhasil di update</strong>
											  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
											    <span aria-hidden="true">&times;</span>
													</button>
														</div>');

			redirect('admin/bau/datakomponenbiaya');

		
		
	}

//akhir update data//


	public function _rules()
	{
		$this->form_validation->set_rules('kode','Kode Komponen Biaya','required');
		$this->form_validation->set_rules('nama_komponen','Nama Komponen Biaya','required');
		$this->form_validation->set_rules('id_jenis','Jenis Komponen Biaya','required');

		//$this->form_validation->set_rules('photo','photo','required');
	}

	public function deletedata($id)
	{
		$where = array('kode' => $id);
		$this->Penggajianmodel->delete_data($where,'komponen_biaya');	
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
											  <strong>Data berhasil di hapus</strong>
											  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
											    <span aria-hidden="true">&times;</span>
													</button>
														</div>');
			redirect('admin/bau/datakomponenbiaya');
	}
}


 ?>