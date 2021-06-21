<?php 

class Datakelas extends CI_Controller{
			
	public function index()
	{
		$data['title'] = "Halaman Administrator";
		$data['kelas'] = $this->Penggajianmodel->get_data('kelas')->result();
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/baak/data_kelas', $data);
		$this->load->view('templates_admin/foother');
	}


	public function tambahdata()
	{
		$data['title'] = "Halaman Administrator";
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/baak/tambahdatakelas', $data);
		$this->load->view('templates_admin/foother');
	}

	public function tambahdataaksi()
	{
		
		$this->_rules();

		if($this->form_validation->run() == FALSE) {
			$this->tambahdata();


		}else{
			$kdkelas 			=$this->input->post('kdkelas');
			$nmkelas 			=$this->input->post('nmkelas');

			$data = array(

				'kdkelas' 			=> $kdkelas,
				'nmkelas' 			=> $nmkelas,
			);


			$this->Penggajianmodel->insert_data($data, 'kelas');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
											  <strong>Data berhasil di tambah</strong>
											  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
											    <span aria-hidden="true">&times;</span>
													</button>
														</div>');

			redirect('admin/baak/datakelas');

		}
		
	}

//update data//

	public function updatedata($id)
	{
		$where = array ('kdkelas' => $id);
		$data['kelas'] = $this->db->query("SELECT * FROM kelas WHERE kdkelas ='$id'")->result();
		$data['title'] = "Halaman Administrator";
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/baak/updatedatakelas', $data);
		$this->load->view('templates_admin/foother');
	}

	public function updatedataaksi()
	{

			$kdkelas 			=$this->input->post('kdkelas');
			$nmkelas 			=$this->input->post('nmkelas');

			$data = array(

				'kdkelas' 			=> $kdkelas,
				'nmkelas' 		    => $nmkelas,
				);
		
				$where = array(
					'kdkelas' => $kdkelas
				);
		

			$this->Penggajianmodel->update_data('kelas',$data,$where);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
											  <strong>Data berhasil di update</strong>
											  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
											    <span aria-hidden="true">&times;</span>
													</button>
														</div>');

			redirect('admin/baak/datakelas');

		
		
	}

//akhir update data//


	public function _rules()
	{
		$this->form_validation->set_rules('kdkelas','Kode Kelas','required');
		$this->form_validation->set_rules('nmkelas','Nama Kelas','required');

		//$this->form_validation->set_rules('photo','photo','required');
	}

	public function deletedata($id)
	{
		$where = array('kdkelas' => $id);
		$this->Penggajianmodel->delete_data($where,'kelas');	
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
											  <strong>Data berhasil di hapus</strong>
											  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
											    <span aria-hidden="true">&times;</span>
													</button>
														</div>');
			redirect('admin/baak/datakelas');
	}
}


 ?>