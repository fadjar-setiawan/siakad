<?php 

class Datamatakuliah extends CI_Controller{
			
	public function index()
	{
		$data['title'] = "Halaman Administrator";
		$data['matakuliah'] = $this->Penggajianmodel->get_data('matakuliah')->result();
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/baak/datamatakuliah/data_matakuliah', $data);
		$this->load->view('templates_admin/foother');
	}


	public function tambahdata()
	{
		$data['title'] = "Halaman Administrator";
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/baak/datamatakuliah/tambahdatamatakuliah', $data);
		$this->load->view('templates_admin/foother');
	}

	public function tambahdataaksi()
	{
		
		$this->_rules();

		if($this->form_validation->run() == FALSE) {
			$this->tambahdata();


		}else{
			$kdmatkul 			=$this->input->post('kdmatkul');
			$nmmatkul 			=$this->input->post('nmmatkul');
            $sks 			    =$this->input->post('sks');
			$jenis 			    =$this->input->post('jenis');

			$data = array(

				'kdmatkul' 			=> $kdmatkul,
				'nmmatkul' 			=> $nmmatkul,
                'sks' 			    => $sks,
				'jenis' 			=> $jenis,
			);


			$this->Penggajianmodel->insert_data($data, 'matakuliah');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
											  <strong>Data berhasil di tambah</strong>
											  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
											    <span aria-hidden="true">&times;</span>
													</button>
														</div>');

			redirect('admin/baak/datamatakuliah');

		}
		
	}

//update data//

	public function updatedata($id)
	{
		$where = array ('kdmatkul' => $id);
		$data['matakuliah'] = $this->db->query("SELECT * FROM matakuliah WHERE kdmatkul ='$id'")->result();
		$data['title'] = "Halaman Administrator";
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/baak/datamatakuliah/updatedatamatakuliah', $data);
		$this->load->view('templates_admin/foother');
	}

	public function updatedataaksi()
	{

        $kdmatkul 			=$this->input->post('kdmatkul');
        $nmmatkul 			=$this->input->post('nmmatkul');
        $jenis 			    =$this->input->post('jenis');

			$data = array(

				'kdmatkul' 			=> $kdmatkul,
				'nmmatkul' 			=> $nmmatkul,
				'jenis' 			=> $jenis,
				);
		
				$where = array(
					'kdmatkul' => $kdmatkul
				);
		

			$this->Penggajianmodel->update_data('matakuliah',$data,$where);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
											  <strong>Data berhasil di update</strong>
											  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
											    <span aria-hidden="true">&times;</span>
													</button>
														</div>');

			redirect('admin/baak/datamatakuliah');

		
		
	}

//akhir update data//


	public function _rules()
	{
		$this->form_validation->set_rules('kdmatkul','Kode','required');
		$this->form_validation->set_rules('nmmatkul','Matakuliah','required');
		$this->form_validation->set_rules('sks','SKS','required');
		$this->form_validation->set_rules('jenis','Jenis','required');

		//$this->form_validation->set_rules('photo','photo','required');
	}

	public function deletedata($id)
	{
		$where = array('kdmatkul' => $id);
		$this->Penggajianmodel->delete_data($where,'matakuliah');	
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
											  <strong>Data berhasil di hapus</strong>
											  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
											    <span aria-hidden="true">&times;</span>
													</button>
														</div>');
			redirect('admin/baak/datamatakuliah');
	}
}


 ?>