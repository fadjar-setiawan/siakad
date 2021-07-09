<?php 

class Dataplotingdosen extends CI_Controller{
			
	public function index()
	{
		$data['title'] = "Halaman Administrator";
		$data['rtn'] = $this->M_dosen->load_dosen();
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/baak/dataplotingdosen/data_plotingdosen.php', $data);
		$this->load->view('templates_admin/foother');
	}


    public function data()
	{
		$data['title'] = "Halaman Administrator";
		$data['jurusan'] = $this->M_dosen->get_data('jurusan')->result();
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/baak/dataplotingdosen/dosen', $data);
		$this->load->view('templates_admin/foother');
	}

	public function tambahdata()
	{
		$data['title'] = "Halaman Administrator";
        $data['materibaru'] = $this->M_dosen->get_data('materibaru')->result();
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/baak/dataplotingdosen/tambahdatadosen', $data);
		$this->load->view('templates_admin/foother');
	}

	public function tambahdataaksi()
	{
		
		$this->_rules();

		if($this->form_validation->run() == FALSE) {
			$this->tambahdata();


		}else{
			$kdkurikulum 			=$this->input->post('kdkurikulum');
			$nmkurikulum 			=$this->input->post('nmkurikulum');
            $tahun 			        =$this->input->post('tahun');
			$kdjur 			        =$this->input->post('kdjur');
            $semester 			    =$this->input->post('semester');

			$data = array(

				'kdkurikulum' 			=> $kdkurikulum,
				'nmkurikulum' 			=> $nmkurikulum,
                'tahun' 			    => $tahun,
				'kdjur' 			    => $kdjur,
                'semester' 			    => $semester,
			);


			$this->M_dosen->insert_data($data, 'kdkurikulum');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
											  <strong>Data berhasil di tambah</strong>
											  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
											    <span aria-hidden="true">&times;</span>
													</button>
														</div>');

			redirect('admin/baak/datakurikulum');

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
		$this->load->view('admin/baak/dataplotingdosen/updatedatamatakuliah', $data);
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
		

			$this->M_dosen->update_data('kdkurikulum',$data,$where);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
											  <strong>Data berhasil di update</strong>
											  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
											    <span aria-hidden="true">&times;</span>
													</button>
														</div>');

            redirect('admin/baak/datakurikulum');

		
		
	}

//akhir update data//


	public function _rules()
	{

        $this->form_validation->set_rules('kdkurikulum','Kode Kurikulum','required');
		$this->form_validation->set_rules('nmkurikulum','Nama Kurikulum','required');

		//$this->form_validation->set_rules('photo','photo','required');
	}

	public function deletedata($id)
	{
		$where = array('kdmatkul' => $id);
		$this->M_dosen->delete_data($where,'matakuliah');	
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
											  <strong>Data berhasil di hapus</strong>
											  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
											    <span aria-hidden="true">&times;</span>
													</button>
														</div>');
			redirect('admin/baak/datakurikulum');
	}
}


 ?>