<?php 

class Datamahasiswa extends CI_Controller{
			
	public function index()
	{
		$data['title'] = "Halaman Administrator";
		$data['mahasiswa'] = $this->Penggajianmodel->get_data('mahasiswa')->result();
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/baak/data_mahasiswa', $data);
		$this->load->view('templates_admin/foother');
	}


	public function tambahdata()
	{
		$data['title'] = "Halaman Administrator";
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/baak/tambahdatamahasiswa', $data);
		$this->load->view('templates_admin/foother');
	}

	public function tambahdataaksi()
	{
		
		$this->_rules();

		if($this->form_validation->run() == FALSE) {
			$this->tambahdata();


		}else{
			$nim 			            =$this->input->post('nim');
            $no_pendaftaran 			=$this->input->post('no_pendaftaran');
            $rfid 			            =$this->input->post('rfid');
			$nama 			            =$this->input->post('nama');
            $password 			        =$this->input->post('password');
			$kdjur 			            =$this->input->post('kdjur');
            $angkatan 	                =$this->input->post('angkatan');
            $foto 				=$_FILES['foto']['name'];
			if($foto==''){
			}else{
				$config ['upload_path'] = './assets/photo';
				$config ['allowed_types'] = 'jpg|jpeg|png|tiff';
				$this->load->library('upload',$config);
				if(!$this->upload->do_upload('foto')){
					echo "foto Gagal Di Upload";
				}else{
					$foto=$this->upload->data('file_name');
				}
			}

            $alamat 			        =$this->input->post('alamat');
            $notelp 			        =$this->input->post('notelp');
			$tplhr 			            =$this->input->post('tplhr');
            $tgllhr 			        =$this->input->post('tgllhr');
			$jekel 			            =$this->input->post('jekel');
            $agama 	                    =$this->input->post('agama');
            $asalsekolah 	            =$this->input->post('asalsekolah');
            $thlulus 	                =$this->input->post('thlulus');
            $nama_ayah 	                =$this->input->post('nama_ayah');
            $nama_ibu 	                =$this->input->post('nama_ibu');
            $pekerjaan_ayah 	        =$this->input->post('pekerjaan_ayah');
            $pekerjaan_ibu 	            =$this->input->post('pekerjaan_ibu');
            $tlp_ortu 	                =$this->input->post('tlp_ortu');
            $email 	                    =$this->input->post('email');



			$data = array(

				'nim' 			                => $nim,
				'nano_pendaftaranma' 			=> $no_pendaftaran,
                'rfid' 	                        => $rfid,
                'nama' 			                => $nama,
				'password' 			            => $password,
                'kdjur' 	                    => $kdjur,
                'angkatan' 			            => $angkatan,
				'foto' 			                => $foto,
                'alamat' 	                    => $alamat,
                'notelp' 			            => $notelp,
				'tplhr' 			            => $tplhr,
                'tgllhr' 	                    => $tgllhr,
                'jekel' 			            => $jekel,
				'agama' 			            => $agama,
                'asalsekolah' 	                => $asalsekolah,
                'thlulus' 	                    => $thlulus,
                'nama_ayah' 			        => $nama_ayah,
				'nama_ibu' 			            => $nama_ibu,
                'nama_ibu' 	                    => $nama_ibu,
                'pekerjaan_ayah' 	            => $pekerjaan_ayah,
                'pekerjaan_ibu' 	            => $pekerjaan_ibu,
                'tlp_ortu' 	                    => $tlp_ortu,
                'email' 	                    => $email,

            );

			$this->Penggajianmodel->insert_data($data, 'mahasiswa');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
											  <strong>Data berhasil di tambah</strong>
											  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
											    <span aria-hidden="true">&times;</span>
													</button>
														</div>');

			redirect('admin/baak/datamahasiswa');

		}
		
	}

//update data//

	public function updatedata($id)
	{
		$where = array ('nim' => $id);
		$data['mahasiswa'] = $this->db->query("SELECT * FROM mahasiswa WHERE nim ='$id'")->result();
		$data['title'] = "Halaman Administrator";
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/baak/updatedatamahasiswa', $data);
		$this->load->view('templates_admin/foother');
	}

	public function updatedataaksi()
	{

        $nim 			            =$this->input->post('nim');
        $no_pendaftaran 			=$this->input->post('no_pendaftaran');
        $rfid 			            =$this->input->post('rfid');
        $nama 			            =$this->input->post('nama');
        $password 			        =$this->input->post('password');
        $kdjur 			            =$this->input->post('kdjur');
        $angkatan 	                =$this->input->post('angkatan');
        $foto 				=$_FILES['foto']['name'];
			if($foto){
				$config ['upload_path'] = './assets/photo';
				$config ['allowed_types'] = 'jpg|jpeg|png|tiff';
				$this->load->library('upload',$config);
				if($this->upload->do_upload('foto')){
					$foto=$this->upload->data('file_name');
					$this->db->set('foto',$foto);
				}else{
					echo $this->upload->display_errors();
				}
			}

        $alamat 			        =$this->input->post('alamat');
        $notelp 			        =$this->input->post('notelp');
        $tplhr 			            =$this->input->post('tplhr');
        $tgllhr 			        =$this->input->post('tgllhr');
        $jekel 			            =$this->input->post('jekel');
        $agama 	                    =$this->input->post('agama');
        $asalsekolah 	            =$this->input->post('asalsekolah');
        $thlulus 	                =$this->input->post('thlulus');
        $nama_ayah 	                =$this->input->post('nama_ayah');
        $nama_ibu 	                =$this->input->post('nama_ibu');
        $pekerjaan_ayah 	        =$this->input->post('pekerjaan_ayah');
        $pekerjaan_ibu 	            =$this->input->post('pekerjaan_ibu');
        $tlp_ortu 	                =$this->input->post('tlp_ortu');
        $email 	                    =$this->input->post('email');




			$data = array(

				'nim' 			                => $nim,
				'nano_pendaftaranma' 			=> $no_pendaftaran,
                'rfid' 	                        => $rfid,
                'nama' 			                => $nama,
				'password' 			            => $password,
                'kdjur' 	                    => $kdjur,
                'angkatan' 			            => $angkatan,
				'foto' 			                => $foto,
                'alamat' 	                    => $alamat,
                'notelp' 			            => $notelp,
				'tplhr' 			            => $tplhr,
                'tgllhr' 	                    => $tgllhr,
                'jekel' 			            => $jekel,
				'agama' 			            => $agama,
                'asalsekolah' 	                => $asalsekolah,
                'thlulus' 	                    => $thlulus,
                'nama_ayah' 			        => $nama_ayah,
				'nama_ibu' 			            => $nama_ibu,
                'nama_ibu' 	                    => $nama_ibu,
                'pekerjaan_ayah' 	            => $pekerjaan_ayah,
                'pekerjaan_ibu' 	            => $pekerjaan_ibu,
                'tlp_ortu' 	                    => $tlp_ortu,
                'email' 	                    => $email,

			);
		
				$where = array(
					'nim' => $nim
				);
		

			$this->Penggajianmodel->update_data('mahasiswa',$data,$where);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
											  <strong>Data berhasil di update</strong>
											  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
											    <span aria-hidden="true">&times;</span>
													</button>
														</div>');

			redirect('admin/baak/datamahasiswa');

		
		
	}

//akhir update data//


	public function _rules()
	{
		$this->form_validation->set_rules('rfid','RFID','required');
        $this->form_validation->set_rules('nama','Nama Lengkap','required');
        $this->form_validation->set_rules('password','Password','required');
        $this->form_validation->set_rules('kdjur','Jurusan','required');
        $this->form_validation->set_rules('angkatan','Angkatan','required');
        $this->form_validation->set_rules('foto','Unggah Foto','required');
        $this->form_validation->set_rules('alamat','Alamat','required');
        $this->form_validation->set_rules('notelp','Telepon','required');
		$this->form_validation->set_rules('tplhr','Tempat Lahir','required');
		$this->form_validation->set_rules('tgllhr','Tanggal Lahir','required');
		$this->form_validation->set_rules('jekel','Jenis Kelamin','required');
        $this->form_validation->set_rules('agama','Agama','required');
		$this->form_validation->set_rules('asalsekolah','Asal Sekolah','required');
		$this->form_validation->set_rules('thlulus','Tahun Lulus','required');
		$this->form_validation->set_rules('nama_ayah','Nama Ayah','required');
        $this->form_validation->set_rules('nama_ibu','Nama Ibu','required');
		$this->form_validation->set_rules('pekerjaan_ayah','Pekerjaan Ayah','required');
		$this->form_validation->set_rules('pekerjaan_ibu','Pekerjaan Ibu','required');
		$this->form_validation->set_rules('tlp_ortu','Telepon Orang Tua','required');

		//$this->form_validation->set_rules('photo','photo','required');
	}

	public function deletedata($id)
	{
		$where = array('nim' => $id);
		$this->Penggajianmodel->delete_data($where,'mahasiswa');	
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
											  <strong>Data berhasil di hapus</strong>
											  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
											    <span aria-hidden="true">&times;</span>
													</button>
														</div>');
			redirect('admin/baak/datamahasiswa');
	}
}


 ?>