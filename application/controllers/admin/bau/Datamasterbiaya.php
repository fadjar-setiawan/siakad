<?php 

class Datamasterbiaya extends CI_Controller{
			
	public function index()
	{
		$data['title'] = "Halaman Administrator";
		$data['rtn'] = $this->M_masterbiaya->load_masterbiaya();
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/bau/datamasterbiaya/data_masterbiaya', $data);
		$this->load->view('templates_admin/foother');
	}


	public function tambahdata()
	{
		$data['title'] = "Halaman Administrator";
		$data['jurusan'] = $this->M_masterbiaya->get_data('jurusan')->result();
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/bau/datamasterbiaya/tambahdatamasterbiaya', $data);
		$this->load->view('templates_admin/foother');
	}

	public function tambahdataaksi()
	{
		
		$this->_rules();

		if($this->form_validation->run() == FALSE) {
			$this->tambahdata();


		}else{

			$kd_master_biaya 			=$this->input->post('kd_master_biaya');
			$nm_master_biaya 			=$this->input->post('nm_master_biaya');
			$tahun_ajaran 			    =$this->input->post('tahun_ajaran');
			$kdjur 						=$this->input->post('kdjur');
			$semester 			        =$this->input->post('semester');

			$data = array(

				'kd_master_biaya' 			=> $kd_master_biaya,
				'nm_master_biaya' 			=> $nm_master_biaya,
				'tahun_ajaran' 			    => $tahun_ajaran,
				'kdjur' 					=> $kdjur,
				'semester' 			        => $semester,
			);


			$this->M_masterbiaya->insert_data($data, 'master_biaya');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
											  <strong>Data berhasil di tambah</strong>
											  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
											    <span aria-hidden="true">&times;</span>
													</button>
														</div>');

			redirect('admin/bau/datamasterbiaya');

		}
		
	}

//update data//

	public function updatedata($id)
	{
		$where = array ('kd_master_biaya' => $id);
		$data['master_biaya'] = $this->db->query("SELECT * FROM master_biaya WHERE kd_master_biaya ='$id'")->result();
		$data['jurusan'] = $this->M_masterbiaya->get_data('jurusan')->result();
		$data['title'] = "Halaman Administrator";
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/bau/datamasterbiaya/updatedatamasterbiaya', $data);
		$this->load->view('templates_admin/foother');
	}

	public function updatedataaksi()
	{
		$kd_master_biaya 			=$this->input->post('kd_master_biaya');
		$nm_master_biaya 			=$this->input->post('nm_master_biaya');
		$tahun_ajaran 			    =$this->input->post('tahun_ajaran');
		$kdjur 						=$this->input->post('kdjur');
		$semester 			        =$this->input->post('semester');

		$data = array(

			'kd_master_biaya' 			=> $kd_master_biaya,
			'nm_master_biaya' 			=> $nm_master_biaya,
			'tahun_ajaran' 			    => $tahun_ajaran,
			'kdjur' 					=> $kdjur,
			'semester' 			        => $semester,
		);
		
				$where = array(
					'kd_master_biaya' => $kd_master_biaya
				);
		

			$this->M_masterbiaya->update_data('master_biaya',$data,$where);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
											  <strong>Data berhasil di update</strong>
											  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
											    <span aria-hidden="true">&times;</span>
													</button>
														</div>');

			redirect('admin/bau/datamasterbiaya');

		
		
	}

//akhir update data//


	public function _rules()
	{
		$this->form_validation->set_rules('kd_master_biaya','Kode','required');
        $this->form_validation->set_rules('nm_master_biaya','Nama Master Biaya','required');
        $this->form_validation->set_rules('tahun_ajaran','Tahun Ajaran','required');

		//$this->form_validation->set_rules('photo','photo','required');
	}

	public function deletedata($id)
	{
		$where = array('kd_master_biaya' => $id);
		$this->M_masterbiaya->delete_data($where,'master_biaya');	
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
											  <strong>Data berhasil di hapus</strong>
											  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
											    <span aria-hidden="true">&times;</span>
													</button>
														</div>');
		redirect('admin/bau/datamasterbiaya');
	}
}


 ?>