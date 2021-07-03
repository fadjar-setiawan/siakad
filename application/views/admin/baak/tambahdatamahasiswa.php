<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <p class="mb-4"><i class="fas fa-home"></i><a href="<?php echo base_url('admin/dashboard') ?>"> Halaman Utama</a> / <a href="<?php echo base_url('admin/baak/datamahasiswa') ?>"> Managemen Mahasiswa </a> / <strong> Tambah Mahasiswa</strong> </p>
            </div>

<!-- DataTales Example -->
<div class="card shadow mb-4" >
    <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-primary">Tambah Mahasiswa</h5>
        
    </div>
    
    <div class="card-body">
        <div class="table-responsive">
            <table id="example" class="table table-striped" style="width:100%">
                <thead>

            <div class="card" style="width: 100%; margin-bottom: 100px ">
            	<div class="card-body">
            		
            		<form method="POST" action="<?php echo base_url('admin/baak/datamahasiswa/tambahdataaksi') ?>" enctype="multipart/form-data">

            		<div class="form-group">
            			<label>NRP</label>
            			<input type="text" name="nim" class="form-control mb-3">
                              <?php echo form_error('nim','<div class="text-small text-danger"></div>') ?>
            		</div>

                    <div class="form-group">
                        <label>No. Pendaftaran</label>
                        <input type="text" name="no_pendaftaran" class="form-control mb-3">
                              <?php echo form_error('no_pendaftaran','<div class="text-small text-danger"></div>') ?>
                    </div>  

                    <div class="form-group">
                        <label>RFID</label>
                        <input type="text" name="rfid" class="form-control mb-3">
                              <?php echo form_error('rfid','<div class="text-small text-danger"></div>') ?>
                    </div>  

                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control mb-3">
                              <?php echo form_error('nama','<div class="text-small text-danger"></div>') ?>
                    </div>
                    
                    <div class="form-group">
            			<label>Password</label>
            			<input type="password" name="password" class="form-control mb-3">
                              <?php echo form_error('password','<div class="text-small text-danger"></div>') ?>
            		</div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control mb-3">
                              <?php echo form_error('email','<div class="text-small text-danger"></div>') ?>
                    </div> 

                    <div class="form-group">
                        <label>Jurusan</label>
                        <input type="text" name="nmmatkul" class="form-control mb-3">
                              <?php echo form_error('nmmatkul','<div class="text-small text-danger"></div>') ?>
                    </div>  

                    <div class="form-group">
                        <label>Angkatan</label>
                        <input type="text" name="nmmatkul" class="form-control mb-3">
                              <?php echo form_error('nmmatkul','<div class="text-small text-danger"></div>') ?>
                    </div>  

                    <div class="form-group">
                              <label>Unggah Foto</label>
                              <input type="file" name="foto" class="form-control mb-3">                             
                    </div>

                    <div class="form-group">
            			<label>Alamat</label>
            			<input type="text" name="alamat" class="form-control mb-3">
                              <?php echo form_error('alamat','<div class="text-small text-danger"></div>') ?>
            		</div>

                    <div class="form-group">
                        <label>Telepon</label>
                        <input type="number" name="notelp" class="form-control mb-3">
                              <?php echo form_error('notelp','<div class="text-small text-danger"></div>') ?>
                    </div>  

                    <div class="form-group">
                        <label>Tempat Lahir</label>
                        <input type="text" name="tplhr" class="form-control mb-3">
                              <?php echo form_error('tplhr','<div class="text-small text-danger"></div>') ?>
                    </div>  

                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" name="tgllhr" class="form-control mb-3">
                              <?php echo form_error('tgllhr','<div class="text-small text-danger"></div>') ?>
                    </div>   

                    <div class="form-group">
                              <label>Jenis Kelamin</label>
                              <select name="jekel" class="form-control">
                                    <option value="">Pilih Jenis Kelamin</option>
                                    <option value="Pria">Pria</option>
                                    <option value="Wanita">Wanita</option>
                              </select>
                              <?php echo form_error('jekel','<div class="text-small text-danger"></div>') ?>
                    </div>

                    <div class="form-group">
                              <label>Agama</label>
                              <select name="agama" class="form-control">
                                    <option value="">Pilih Agama</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen Protestan">Kristen Protestan</option>
                                    <option value="Kristen Katholik">Kristen Katholik</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Budha">Budha</option>
                              </select>
                              <?php echo form_error('agama','<div class="text-small text-danger"></div>') ?>
                    </div> 

                    <div class="form-group">
                        <label>Asal Sekolah</label>
                        <input type="text" name="asalsekolah" class="form-control mb-3">
                              <?php echo form_error('asalsekolah','<div class="text-small text-danger"></div>') ?>
                    </div>  

                    <div class="form-group">
                        <label>Tahun Lulus</label>
                        <input type="text" name="nmmatkul" class="form-control mb-3">
                              <?php echo form_error('nmmatkul','<div class="text-small text-danger"></div>') ?>
                    </div>  

                    <div class="form-group">
                        <label>Nama Ayah</label>
                        <input type="text" name="nama_ayah" class="form-control mb-3">
                              <?php echo form_error('nama_ayah','<div class="text-small text-danger"></div>') ?>
                    </div>   

                    <div class="form-group">
            			<label>Nama Ibu</label>
            			<input type="text" name="nama_ibu" class="form-control mb-3">
                              <?php echo form_error('nama_ibu','<div class="text-small text-danger"></div>') ?>
            		</div>

                    <div class="form-group">
                        <label>Pekerjaan Ayah</label>
                        <input type="text" name="pekerjaan_ayah" class="form-control mb-3">
                              <?php echo form_error('pekerjaan_ayah','<div class="text-small text-danger"></div>') ?>
                    </div> 

                    <div class="form-group">
                        <label>Pekerjaan Ibu</label>
                        <input type="text" name="pekerjaan_ibu" class="form-control mb-3">
                              <?php echo form_error('pekerjaan_ibu','<div class="text-small text-danger"></div>') ?>
                    </div>  

                    <div class="form-group">
                        <label>Telepon Orang Tua</label>
                        <input type="text" name="tlp_ortu" class="form-control mb-3">
                              <?php echo form_error('tlp_ortu','<div class="text-small text-danger"></div>') ?>
                    </div>    	
				
					<button type="submit" class="btn btn-success">Simpan</button>
                    <a href="<?php echo base_url('admin/baak/datamahasiswa') ?>"> <button type="button" class="btn btn-danger" >Batal</button></a>

            		</form>
            	</div>
            </div>


        </div>
    