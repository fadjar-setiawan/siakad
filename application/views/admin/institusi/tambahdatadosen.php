<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <p class="mb-4"><i class="fas fa-home"></i><a href="<?php echo base_url('admin/dashboard') ?>"> Halaman Utama</a> / <a href="<?php echo base_url('admin/institusi/datadosen') ?>"> Managemen Dosen </a> / <strong> Tambah Dosen</strong> </p>
            </div>

<!-- DataTales Example -->
<div class="card shadow mb-4" >
    <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-primary">Tambah Dosen</h5>
        
    </div>
    
    <div class="card-body">
        <div class="table-responsive">
            <table id="example" class="table table-striped" style="width:100%">
                <thead>

            <div class="card" style="width: 100%; margin-bottom: 100px ">
            	<div class="card-body">
            		
            		<form method="POST" action="<?php echo base_url('admin/institusi/datadosen/tambahdataaksi') ?>" enctype="multipart/form-data">

            		<div class="form-group">
            			<label>Kode Dosen</label>
            			<input type="number" name="kode_dosen" class="form-control mb-3">
                              <?php echo form_error('kode_dosen','<div class="text-small text-danger"></div>') ?>
            		</div>

                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" name="nama_dosen" class="form-control mb-3">
                        <?php echo form_error('nama_dosen','<div class="text-small text-danger"></div>') ?>
                    </div>

                    <div class="form-group">
                        <label>RFID</label>
                        <input type="text" name="rfid" class="form-control mb-3">
                        <?php echo form_error('rfid','<div class="text-small text-danger"></div>') ?>
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control mb-3">
                        <?php echo form_error('password','<div class="text-small text-danger"></div>') ?>
                    </div>

                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" name="alamat" class="form-control mb-3">
                        <?php echo form_error('alamat','<div class="text-small text-danger"></div>') ?>
                    </div>

                    <div class="form-group">
            			<label>Telepon</label>
            			<input type="number" name="telpon" class="form-control mb-3">
                              <?php echo form_error('telpon','<div class="text-small text-danger"></div>') ?>
            		</div>

                    <div class="form-group">
                              <label>Jenis Kelamin</label>
                              <select name="jenis_kelamin" class="form-control">
                                    <option value="">Pilih Jenis Kelamin</option>
                                    <option value="Pria">Pria</option>
                                    <option value="Wanita">Wanita</option>
                              </select>
                              <?php echo form_error('jenis_kelamin','<div class="text-small text-danger"></div>') ?>
                    </div>

                    <div class="form-group">
                        <label>Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" class="form-control mb-3">
                        <?php echo form_error('tempat_lahir','<div class="text-small text-danger"></div>') ?>
                    </div>

                    <div class="form-group">
                              <label>Tanggal Lahir</label>
                              <input type="date" name="tanggal_lahir" class="form-control mb-3">
                              <?php echo form_error('tanggal_lahir','<div class="text-small text-danger"></div>') ?>
                    </div>

                    <div class="form-group">
                        <label>Pendidikan</label>
                        <input type="text" name="pendidikan" class="form-control mb-3">
                        <?php echo form_error('pendidikan','<div class="text-small text-danger"></div>') ?>
                    </div>

                    <div class="form-group">
                        <label>Jabatan</label>
                        <input type="text" name="jabatan" class="form-control mb-3">
                        <?php echo form_error('jabatan','<div class="text-small text-danger"></div>') ?>
                    </div>

                    <div class="form-group">
                        <label>Golongan</label>
                        <input type="text" name="golongan" class="form-control mb-3">
                        <?php echo form_error('golongan','<div class="text-small text-danger"></div>') ?>
                    </div>

                    <div class="form-group">
                              <label>Status Dosen</label>
                              <select name="status_dosen" class="form-control">
                                    <option value="">Pilih Status Dosen</option>
                                    <option value="Dosen Tetap">Dosen Tetap</option>
                                    <option value="Dosen Luar Biasa">Dosen Luar Biasa</option>
                              </select>
                              <?php echo form_error('jenis_kelamin','<div class="text-small text-danger"></div>') ?>
                    </div>

                    <div class="form-group">
                        <label>Spesialisasi Mengajar</label>
                        <input type="text" name="spesial_mengajar" class="form-control mb-3">
                        <?php echo form_error('spesial_mengajar','<div class="text-small text-danger"></div>') ?>
                    </div>
                               	
				
					<button type="submit" class="btn btn-success">Simpan</button>
                              <a href="<?php echo base_url('admin/institusi/datadosen') ?>"><button type="button" class="btn btn-danger" >Batal</button></a>

            		</form>
            	</div>
            </div>


        </div>
    