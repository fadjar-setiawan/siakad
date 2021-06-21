<?php 

class Datadosen extends CI_Controller{
			
	public function index()
	{
		$data['title'] = "Halaman Administrator";
		$data['dosen'] = $this->Penggajianmodel->get_data('dosen')->result();
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/institusi/data_dosen', $data);
		$this->load->view('templates_admin/foother');
	}


	public function tambahdata()
	{
		$data['title'] = "Halaman Administrator";
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/institusi/tambahdatadosen', $data);
		$this->load->view('templates_admin/foother');
	}

	public function tambahdataaksi()
	{
		
		$this->_rules();

		if($this->form_validation->run() == FALSE) {
			$this->tambahdata();


		}else{
			$kode_dosen 			=$this->input->post('kode_dosen');
			$nama_dosen 			=$this->input->post('nama_dosen');
			$rfid 					=$this->input->post('rfid');
			$password 				=$this->input->post('password');
			$alamat 				=$this->input->post('alamat');
			$telpon 				=$this->input->post('telpon');
			$jenis_kelamin 			=$this->input->post('jenis_kelamin');
			$tempat_lahir 			=$this->input->post('tempat_lahir');
			$tanggal_lahir 			=$this->input->post('tanggal_lahir');
			$pendidikan 			=$this->input->post('pendidikan');
			$jabatan 				=$this->input->post('jabatan');
			$golongan 				=$this->input->post('golongan');
			$status_dosen	 		=$this->input->post('status_dosen');
			$spesial_mengajar 		=$this->input->post('spesial_mengajar');

			$data = array(

				'kode_dosen' 			=> $kode_dosen,
				'nama_dosen' 			=> $nama_dosen,
				'rfid' 					=> $rfid,
				'password' 				=> $password,
				'alamat' 				=> $alamat,
				'telpon' 				=> $telpon,
				'jenis_kelamin' 		=> $jenis_kelamin,
				'tempat_lahir' 			=> $tempat_lahir,
				'tanggal_lahir' 		=> $tanggal_lahir,
				'pendidikan' 			=> $pendidikan,
				'jabatan' 				=> $jabatan,
				'golongan' 				=> $golongan,
				'status_dosen' 			=> $status_dosen,
				'spesial_mengajar' 		=> $spesial_mengajar,
			);


			$this->Penggajianmodel->insert_data($data, 'dosen');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
											  <strong>Data berhasil di tambah</strong>
											  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
											    <span aria-hidden="true">&times;</span>
													</button>
														</div>');

			redirect('admin/institusi/datadosen');

		}
		
	}

//update data//

	public function updatedata($id)
	{
		$where = array ('kode_dosen' => $id);
		$data['dosen'] = $this->db->query("SELECT * FROM dosen WHERE kode_dosen ='$id'")->result();
		$data['title'] = "Halaman Administrator";
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/institusi/updatedatadosen', $data);
		$this->load->view('templates_admin/foother');
	}

	public function updatedataaksi()
	{

			$kode_dosen 			=$this->input->post('kode_dosen');
			$nama_dosen 			=$this->input->post('nama_dosen');
			$rfid 					=$this->input->post('rfid');
			$password 				=$this->input->post('password');
			$alamat 				=$this->input->post('alamat');
			$telpon 				=$this->input->post('telpon');
			$jenis_kelamin 			=$this->input->post('jenis_kelamin');
			$tempat_lahir 			=$this->input->post('tempat_lahir');
			$tanggal_lahir 			=$this->input->post('tanggal_lahir');
			$pendidikan 			=$this->input->post('pendidikan');
			$jabatan 				=$this->input->post('jabatan');
			$golongan 				=$this->input->post('golongan');
			$status_dosen	 		=$this->input->post('status_dosen');
			$spesial_mengajar 		=$this->input->post('spesial_mengajar');

			$data = array(

				'nama_dosen' 			=> $nama_dosen,
				'rfid' 					=> $rfid,
				'password' 				=> $password,
				'alamat' 				=> $alamat,
				'telpon' 				=> $telpon,
				'jenis_kelamin' 		=> $jenis_kelamin,
				'tempat_lahir' 			=> $tempat_lahir,
				'tanggal_lahir' 		=> $tanggal_lahir,
				'pendidikan' 			=> $pendidikan,
				'jabatan' 				=> $jabatan,
				'golongan' 				=> $golongan,
				'status_dosen' 			=> $status_dosen,
				'spesial_mengajar' 		=> $spesial_mengajar,
				);
		
				$where = array(
					'kode_dosen' => $kode_dosen
				);
		

			$this->Penggajianmodel->update_data('dosen',$data,$where);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
											  <strong>Data berhasil di update</strong>
											  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
											    <span aria-hidden="true">&times;</span>
													</button>
														</div>');

			redirect('admin/institusi/datadosen');

		
		
	}

//akhir update data//


	public function _rules()
	{
		$this->form_validation->set_rules('kode_dosen','Kode dosen','required');
		$this->form_validation->set_rules('nama_dosen','Nama dosen','required');
		$this->form_validation->set_rules('rfid','RFID','required');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_rules('alamat','Alamat','required');
		$this->form_validation->set_rules('telpon','Telpon','required');
		$this->form_validation->set_rules('jenis_kelamin','Jenis Kelamin','required');
		$this->form_validation->set_rules('tempat_lahir','Tempat Lahir','required');
		$this->form_validation->set_rules('tanggal_lahir','Tanggal Lahir','required');
		$this->form_validation->set_rules('pendidikan','Pendidikan','required');
		$this->form_validation->set_rules('jabatan','Jabatan','required');
		$this->form_validation->set_rules('golongan','Golongan','required');
		$this->form_validation->set_rules('status_dosen','Status Dosen','required');
		$this->form_validation->set_rules('spesial_mengajar','Spesial Mengajar','required');

		//$this->form_validation->set_rules('photo','photo','required');
	}

	public function deletedata($id)
	{
		$where = array('kode_dosen' => $id);
		$this->Penggajianmodel->delete_data($where,'dosen');	
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
											  <strong>Data berhasil di hapus</strong>
											  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
											    <span aria-hidden="true">&times;</span>
													</button>
														</div>');
			redirect('admin/institusi/datadosen');
	}
}


 ?>