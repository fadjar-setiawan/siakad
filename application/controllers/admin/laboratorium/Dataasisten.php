<?php 

class Dataasisten extends CI_Controller{
			
	public function index()
	{
		$data['title'] = "Halaman Administrator";
		$data['asisten'] = $this->M_asisten->get_data('asisten')->result();
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/laboratorium/data_asisten', $data);
		$this->load->view('templates_admin/foother');
	}


	public function tambahdata()
	{
		$data['title'] = "Halaman Administrator";
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/laboratorium/tambahasisten', $data);
		$this->load->view('templates_admin/foother');
	}

	public function tambahdataaksi()
	{
		
		$this->_rules();

		if($this->form_validation->run() == FALSE) {
			$this->tambahdata();


		}else{
			$kode_asisten 			=$this->input->post('kode_asisten');
			$nama_asisten 			=$this->input->post('nama_asisten');
            $alamat 				=$this->input->post('alamat');
            $telepon 			    =$this->input->post('telepon');
            $jenis_kelamin 			=$this->input->post('jenis_kelamin');
			$tempat_lahir 			=$this->input->post('tempat_lahir');
			$tanggal_lahir 			=$this->input->post('tanggal_lahir');
            $status_asisten	 		=$this->input->post('status_asisten	');
			$tgl_masuk 			    =$this->input->post('tgl_masuk');;
			$foto        			=$this->input->post('foto');

			$data = array(

				'kode_asisten' 			=> $kode_asisten,
				'nama_asisten' 			=> $nama_asisten,
                'alamat' 				=> $alamat,
                'telepon' 		        => $telepon,
                'jenis_kelamin' 		=> $jenis_kelamin,
				'tempat_lahir' 			=> $tempat_lahir,
				'tanggal_lahir' 		=> $tanggal_lahir,
                'status_asisten' 	    => $status_asisten,
				'tgl_masuk' 			=> $tgl_masuk,
				'tanggal_lahir' 		=> $tanggal_lahir,
				'foto' 				    => $foto,
			);


			$this->M_asisten->insert_data($data, 'asisten');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
											  <strong>Data berhasil di tambah</strong>
											  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
											    <span aria-hidden="true">&times;</span>
													</button>
														</div>');

            redirect('admin/laboratorium/dataasisten');

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
					'kode_asisten' => $kode_asisten
				);
		

			$this->Penggajianmodel->update_data('dosen',$data,$where);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
											  <strong>Data berhasil di update</strong>
											  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
											    <span aria-hidden="true">&times;</span>
													</button>
														</div>');
            redirect('admin/laboratorium/dataasisten');

		
		
	}

//akhir update data//


	public function _rules()
	{
		$this->form_validation->set_rules('kode_asisten','Kode Asisten','required');
		$this->form_validation->set_rules('nama_asisten','Nama Asisten','required');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_rules('alamat','Alamat','required');
		//$this->form_validation->set_rules('photo','photo','required');
	}

	public function deletedata($id)
	{
		$where = array('kode_asisten' => $id);
		$this->M_asisten->delete_data($where,'asisten');	
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
											  <strong>Data berhasil di hapus</strong>
											  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
											    <span aria-hidden="true">&times;</span>
													</button>
														</div>');
			redirect('admin/laboratorium/dataasisten');
	}
}


 ?>