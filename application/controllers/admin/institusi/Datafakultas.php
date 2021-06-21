<?php 

class Datafakultas extends CI_Controller{
			
	public function index()
	{
		$data['title'] = "Halaman Administrator";
		$data['fakultas'] = $this->Penggajianmodel->get_data('fakultas')->result();
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/institusi/data_fakultas', $data);
		$this->load->view('templates_admin/foother');
	}


	public function tambahdata()
	{
		$data['title'] = "Halaman Administrator";
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/institusi/tambahdatafakultas', $data);
		$this->load->view('templates_admin/foother');
	}

	public function tambahdataaksi()
	{
		
		$this->_rules();

		if($this->form_validation->run() == FALSE) {
			$this->tambahdata();


		}else{
			$kdfak 				=$this->input->post('kdfak');
			$nmfak 				=$this->input->post('nmfak');

			$data = array(

				'kdfak'	 		=> $kdfak,
				'nmfak' 		=> $nmfak,
			);


			$this->Penggajianmodel->insert_data($data, 'fakultas');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
											  <strong>Data berhasil di tambah</strong>
											  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
											    <span aria-hidden="true">&times;</span>
													</button>
														</div>');

			redirect('admin/institusi/datafakultas');

		}
		
	}

//update data//

	public function updatedata($id)
	{
		$data['title'] = "Halaman Administrator";
		$where = array('kdfak' => $id);		
		$data['fakultas'] = $this->M_fakultas->edit_data($where, 'fakultas')->result();
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/institusi/updatedatafakultas', $data);
		$this->load->view('templates_admin/foother');
	}

	public function updatedataaksi()
	{
		
		
			$kdfak 				=$this->input->post('kdfak');
			$nmfak 				=$this->input->post('nmfak');
		

			$this->M_fakultas->update_data($kdfak, $nmfak);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
											  <strong>Data berhasil di update</strong>
											  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
											    <span aria-hidden="true">&times;</span>
													</button>
														</div>');

			redirect('admin/institusi/datafakultas');

	
		
	}

//akhir update data//


	public function _rules()
	{
		$this->form_validation->set_rules('kdfak','Kode Fakultas','required');
		$this->form_validation->set_rules('nmfak','Nama Fakultas','required');
		//$this->form_validation->set_rules('photo','photo','required');
	}

	public function deletedata($id)
	{
		$where = array('kdfak' => $id);
		$this->Penggajianmodel->delete_data($where,'fakultas');	
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
											  <strong>Data berhasil di hapus</strong>
											  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
											    <span aria-hidden="true">&times;</span>
													</button>
														</div>');
			redirect('admin/institusi/datafakultas');
	}
}


 ?>