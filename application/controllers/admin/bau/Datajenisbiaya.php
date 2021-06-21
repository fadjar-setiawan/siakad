<?php 

class Datajenisbiaya extends CI_Controller{
			
	public function index()
	{
		$data['title'] = "Halaman Administrator";
		$data['jenis_komponen'] = $this->Penggajianmodel->get_data('jenis_komponen')->result();
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/bau/data_jenisbiaya', $data);
		$this->load->view('templates_admin/foother');
	}


	public function tambahdata()
	{
		$data['title'] = "Halaman Administrator";
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/bau/tambahdatajenisbiaya', $data);
		$this->load->view('templates_admin/foother');
	}

	public function tambahdataaksi()
	{
		
		$this->_rules();

		if($this->form_validation->run() == FALSE) {
			$this->tambahdata();


		}else{
			$id_jenis 			        =$this->input->post('id_jenis');
			$jenis_komponen 			=$this->input->post('jenis_komponen');

			$data = array(

				'id_jenis' 			        => $id_jenis,
				'jenis_komponen' 			=> $jenis_komponen,
			);


			$this->Penggajianmodel->insert_data($data, 'jenis_komponen');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
											  <strong>Data berhasil di tambah</strong>
											  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
											    <span aria-hidden="true">&times;</span>
													</button>
														</div>');

			redirect('admin/bau/datajenisbiaya');

		}
		
	}

//update data//

	public function updatedata($id)
	{
		$where = array ('kdmatkul' => $id);
		$data['jenis_komponen'] = $this->db->query("SELECT * FROM jenis_komponen WHERE id_jenis ='$id'")->result();
		$data['title'] = "Halaman Administrator";
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/bau/updatedatajenisbiaya', $data);
		$this->load->view('templates_admin/foother');
	}

	public function updatedataaksi()
	{

        $id_jenis 			        =$this->input->post('id_jenis');
        $jenis_komponen 			=$this->input->post('jenis_komponen');

			$data = array(

				'id_jenis' 			        => $id_jenis,
                'jenis_komponen' 			=> $jenis_komponen,
				);
		
				$where = array(
					'id_jenis' => $id_jenis
				);
		

			$this->Penggajianmodel->update_data('jenis_komponen',$data,$where);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
											  <strong>Data berhasil di update</strong>
											  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
											    <span aria-hidden="true">&times;</span>
													</button>
														</div>');

			redirect('admin/bau/datajenisbiaya');

		
		
	}

//akhir update data//


	public function _rules()
	{
		$this->form_validation->set_rules('jenis_komponen','Jenis Komponen','required');

		//$this->form_validation->set_rules('photo','photo','required');
	}

	public function deletedata($id)
	{
		$where = array('id_jenis' => $id);
		$this->Penggajianmodel->delete_data($where,'jenis_komponen');	
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
											  <strong>Data berhasil di hapus</strong>
											  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
											    <span aria-hidden="true">&times;</span>
													</button>
														</div>');
			redirect('admin/bau/datajenisbiaya');
	}
}


 ?>