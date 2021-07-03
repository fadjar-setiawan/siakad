<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <p class="mb-4"><i class="fas fa-home"></i><a href="<?php echo base_url('admin/dashboard') ?>"> Halaman Utama</a> / <a href="<?php echo base_url('admin/system/datapengguna') ?>"> Managemen Pengguna </a> / <strong> Tambah Pengguna</strong> </p>
            </div>

<!-- DataTales Example -->
<div class="card shadow mb-4" >
    <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-primary">Tambah Pengguna</h5>
        
    </div>
    
    <div class="card-body">
        <div class="table-responsive">
            <table id="example" class="table table-striped" style="width:100%">
                <thead>

            <div class="card" style="width: 100%; margin-bottom: 100px ">
            	<div class="card-body">
            		
            		<form method="POST" action="<?php echo base_url('admin/system/datapengguna/tambahdataaksi') ?>" enctype="multipart/form-data">


                    <div class="form-group">
                        <label>Nama Pengguna</label>
                        <input type="id_user" name="id_user" class="form-control mb-3">
                              <?php echo form_error('id_user','<div class="text-small text-danger"></div>') ?>
                    </div>

                    <div class="form-group">
                        <label>Kata Sandi</label>
                        <input type="password" name="password" class="form-control mb-3">
                              <?php echo form_error('password','<div class="text-small text-danger"></div>') ?>
                    </div> 

                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" name="nama_lengkap" class="form-control mb-3">
                              <?php echo form_error('nama_lengkap','<div class="text-small text-danger"></div>') ?>
                    </div>

                    <div class="form-group">
                        <label>Unggah Gambar</label>
                        <input type="file" name="img" class="form-control mb-3">
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control mb-3">
                    </div>

                    <div class="form-group">
                        <label>Telepon</label>
                        <input type="text" name="no_telp" class="form-control mb-3">
                    </div>

                    <div class="form-group">
                              <label>Level</label>
                              <select name="level" class="form-control">
                                    <option value="admin">Administrator</option>
                                    <option value="baak">BAAK</option>
                                    <option value="bau">BAU</option>
                                    <option value="lab">Laboratorium</option>
                              </select>
                    </div> 

					<button type="submit" class="btn btn-success">Simpan</button>
                    <a href="<?php echo base_url('admin/system/datapengguna') ?>"> <button type="button" class="btn btn-danger" >Batal</button></a>

            		</form>
            	</div>
            </div>


        </div>
    