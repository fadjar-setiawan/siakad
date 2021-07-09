<?php 

class Datakurikulum extends CI_Controller{
			
    public function index()
	{
		$data['title'] = "Halaman Administrator";
		$data['rtn'] = $this->M_kurikulum->load_kurikulum();
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/baak/datakurikulum/data_kurikulum', $data);
		$this->load->view('templates_admin/foother');
	}
	
	public function data()
	{
		$data['title'] = "Halaman Administrator";
		$data['kurikulum'] = $this->M_kurikulum->get_data('kurikulum')->result();
		$data['jurusan'] = $this->M_kurikulum->get_data('jurusan')->result();
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/baak/datakurikulum/kurikulum', $data);
		$this->load->view('templates_admin/foother');
	}

	public function tambahdata()
	{
		$data['title'] = "Halaman Administrator";
        $data['jurusan'] = $this->M_kurikulum->get_data('jurusan')->result();
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/baak/datakurikulum/tambahdatakurikulum', $data);
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


			$this->M_kurikulum->insert_data($data, 'kurikulum');
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
		$where = array ('kdkurikulum' => $id);
		$data['kurikulum'] = $this->db->query("SELECT * FROM kurikulum WHERE kdkurikulum ='$id'")->result();
		$data['title'] = "Halaman Administrator";
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/baak/datakurikulum/updatedatakurikulum', $data);
		$this->load->view('templates_admin/foother');
	}

	public function updatedataaksi()
	{

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
		
				$where = array(
					'kdkurikulum' => $kdkurikulum
				);
		

			$this->M_kurikulum->update_data('kurikulum',$data,$where);
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
		$where = array('nmkurikulum' => $id);
		$this->M_kurikulum->delete_data($where,'kurikulum');	
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