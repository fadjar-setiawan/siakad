<?php 

class Datajurusan extends CI_Controller{
			
	public function index()
	{
		$data['title'] = "Halaman Administrator";
		$data['rtn'] = $this->Penggajianmodel->load_jurusan();
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/institusi/datajurusan/data_jurusan', $data);
		$this->load->view('templates_admin/foother');
	}


	public function tambahdata()
	{
		$data['title'] = "Halaman Administrator";
        $data['fakultas'] = $this->Penggajianmodel->get_data('fakultas')->result();
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/institusi/datajurusan/tambahdatajurusan', $data);
		$this->load->view('templates_admin/foother');
	}

	public function tambahdataaksi()
	{
		
		
			$kdjur 				=$this->input->post('kdjur');
			$nmjur 				=$this->input->post('nmjur');
            $kdfak 				=$this->input->post('kdfak');

			$data = array(

				'kdjur'	 		=> $kdjur,
				'nmjur' 		=> $nmjur,
                'kdfak'	 		=> $kdfak,
			);


			$this->M_jurusan->tambah_data($data);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
											  <strong>Data berhasil di tambah</strong>
											  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
											    <span aria-hidden="true">&times;</span>
													</button>
														</div>');

			redirect('admin/institusi/datajurusan/index');

		
		
	}

//update data//

	public function updatedata($id)
	{
		$where = array ('kdjur' => $id);
		$data['jurusan'] = $this->db->query("SELECT * FROM jurusan WHERE kdjur ='$id'")->result();
		$data['fakultas'] = $this->Penggajianmodel->get_data('fakultas')->result();
		$data['title'] = "Halaman Administrator";
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/institusi/datajurusan/updatedatajurusan', $data);
		$this->load->view('templates_admin/foother');
	}

	public function updatedataaksi()
	{
		$kdjur 				=$this->input->post('kdjur');
		$nmjur 				=$this->input->post('nmjur');
		$kdfak 				=$this->input->post('kdfak');

		$data = array(

			'kdjur'	 		=> $kdjur,
			'nmjur' 		=> $nmjur,
			'kdfak'	 		=> $kdfak,
		);

		$where = array(
			'kdjur' => $kdjur
		);
		

			$this->M_jurusan->update_data('jurusan',$data,$where);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
											  <strong>Data berhasil di update</strong>
											  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
											    <span aria-hidden="true">&times;</span>
													</button>
														</div>');

			redirect('admin/institusi/datajurusan');

	
		
	}

//akhir update data//


	public function _rules()
	{
		$this->form_validation->set_rules('kdjur','Kode Jurusan','required');
		$this->form_validation->set_rules('nmjur','Nama Jurusan','required');
		$this->form_validation->set_rules('kdfak','Kode Fakultas','required');
		//$this->form_validation->set_rules('photo','photo','required');
	}

	public function deletedata($id)
	{
		$where = array('kdjur' => $id);
		$this->M_jurusan->delete_data($where,'jurusan');	
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
											  <strong>Data berhasil di hapus</strong>
											  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
											    <span aria-hidden="true">&times;</span>
													</button>
														</div>');
			redirect('admin/institusi/datajurusan');
	}
}


 ?>