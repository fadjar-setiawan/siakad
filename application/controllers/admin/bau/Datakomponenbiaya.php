<?php 

class Datakomponenbiaya extends CI_Controller{
			
	public function index()
	{
		$data['title'] = "Halaman Administrator";
		$data['rtn'] = $this->M_komponenbiaya->load_komponenbiaya();
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/bau/datakomponenbiaya/data_komponen', $data);
		$this->load->view('templates_admin/foother');
	}


	public function tambahdata()
	{
		$data['title'] = "Halaman Administrator";
		$data['jenis_komponen'] = $this->M_komponenbiaya->get_data('jenis_komponen')->result();
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/bau/datakomponenbiaya/tambahdatakomponen', $data);
		$this->load->view('templates_admin/foother');
	}

	public function tambahdataaksi()
	{
		
		$this->_rules();

		if($this->form_validation->run() == FALSE) {
			$this->tambahdata();


		}else{
			$kode 			        =$this->input->post('kode');
			$nama_komponen 			=$this->input->post('nama_komponen');
			$id_jenis 				=$this->input->post('id_jenis');

			$data = array(

				'kode' 			       		=> $kode,
				'nama_komponen' 			=> $nama_komponen,
				'id_jenis' 					=> $id_jenis,
			);


			$this->M_komponenbiaya->insert_data($data, 'komponen_biaya');
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
		$where = array ('kode' => $id);
		$data['komponen_biaya'] = $this->db->query("SELECT * FROM komponen_biaya WHERE kode ='$id'")->result();
		$data['jenis_komponen'] = $this->M_komponenbiaya->get_data('jenis_komponen')->result();
		$data['title'] = "Halaman Administrator";
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/bau/datakomponenbiaya/updatedatakomponen', $data);
		$this->load->view('templates_admin/foother');
	}

	public function updatedataaksi()
	{

        	$kode 			        =$this->input->post('kode');
			$nama_komponen 			=$this->input->post('nama_komponen');
			$id_jenis 				=$this->input->post('id_jenis');

			$data = array(

				'kode' 			       		=> $kode,
				'nama_komponen' 			=> $nama_komponen,
				'id_jenis' 					=> $id_jenis,
			);
		
				$where = array(
					'kode' => $kode
				);
		

			$this->M_komponenbiaya->update_data('komponen_biaya',$data,$where);
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
		$this->form_validation->set_rules('kode','Kode','required');
		$this->form_validation->set_rules('nama_komponen','Komponen Biaya','required');
		$this->form_validation->set_rules('id_jenis','Komponen Biaya','required');

		//$this->form_validation->set_rules('photo','photo','required');
	}

	public function deletedata($id)
	{
		$where = array('kode' => $id);
		$this->M_komponenbiaya->delete_data($where,'komponen_biaya');	
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