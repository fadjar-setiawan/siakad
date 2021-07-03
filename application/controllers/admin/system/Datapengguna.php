<?php 

class Datapengguna extends CI_Controller{
			
	public function index()
	{
		$data['title'] = "Halaman Administrator";
		$data['users'] = $this->M_pengguna->get_data('users')->result();
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/system/data_pengguna', $data);
		$this->load->view('templates_admin/foother');
	}


	public function tambahdata()
	{
		$data['title'] = "Halaman Administrator";
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/system/tambahdatapengguna', $data);
		$this->load->view('templates_admin/foother');
	}

	public function tambahdataaksi()
	{
		
		$this->_rules();

		if($this->form_validation->run() == FALSE) {
			$this->tambahdata();


		}else{
			$id_user 			    =$this->input->post('id_user');
			$password 			    =$this->input->post('password');
			$nama_lengkap 			=$this->input->post('nama_lengkap');
            $img 				    =$this->input->post('img');
			$email 				    =$this->input->post('email');
			$no_telp 				=$this->input->post('no_telp');
			$level 			        =$this->input->post('level');

			$data = array(

				'id_user' 			=> $id_user,
				'password' 			=> $password,
				'nama_lengkap' 		=> $nama_lengkap,
                'img' 				=> $img,
				'email' 			=> $email,
				'no_telp' 			=> $no_telp,
				'level' 		    => $level,
			);


			$this->M_pengguna->insert_data($data, 'users');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
											  <strong>Data berhasil di tambah</strong>
											  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
											    <span aria-hidden="true">&times;</span>
													</button>
														</div>');

			redirect('admin/system/datausers');

		}
		
	}

//update data//

	public function updatedata($id)
	{
		$where = array ('id_user' => $id);
		$data['users'] = $this->db->query("SELECT * FROM users WHERE id_user ='$id'")->result();
		$data['title'] = "Halaman Administrator";
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/system/updatedatapengguna', $data);
		$this->load->view('templates_admin/foother');
	}

	public function updatedataaksi()
	{

            $id_user 			    =$this->input->post('id_user');
			$password 			    =$this->input->post('password');
			$nama_lengkap 			=$this->input->post('nama_lengkap');
            $img 				    =$this->input->post('img');
			$email 				    =$this->input->post('email');
			$no_telp 				=$this->input->post('no_telp');
			$level 			        =$this->input->post('level');

			$data = array(

				'id_user' 			=> $id_user,
				'password' 			=> $password,
				'nama_lengkap' 		=> $nama_lengkap,
                'img' 				=> $img,
				'email' 			=> $email,
				'no_telp' 			=> $no_telp,
				'level' 		    => $level,
			);

		
				$where = array(
					'id_user' => $id_user
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
		$this->form_validation->set_rules('id_user','Nama Pengguna','required');
		$this->form_validation->set_rules('password','Kata Sandi','required');
		$this->form_validation->set_rules('nama_lengkap','Nama Lengkap','required');

		//$this->form_validation->set_rules('photo','photo','required');
	}

}


 ?>