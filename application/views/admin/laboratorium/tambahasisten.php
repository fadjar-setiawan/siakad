<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <p class="mb-4"><i class="fas fa-home"></i><a href="<?php echo base_url('admin/dashboard') ?>"> Halaman Utama</a> / <a href="<?php echo base_url('admin/laboratorium/dataasisten') ?>"> Managemen Asisten </a> / <strong> Tambah Asisten</strong> </p>
            </div>

<!-- DataTales Example -->
<div class="card shadow mb-4" >
    <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-primary">Tambah Asisten</h5>
        
    </div>
    
    <div class="card-body">
        <div class="table-responsive">
            <table id="example" class="table table-striped" style="width:100%">
                <thead>

            <div class="card" style="width: 100%; margin-bottom: 100px ">
            	<div class="card-body">
            		
            		<form method="POST" action="<?php echo base_url('admin/laboratorium/dataasisten/tambahdataaksi') ?>" enctype="multipart/form-data">


                    <div class="form-group">
                        <label>Kode Asisten</label>
                        <input type="text" name="kode_asisten" class="form-control mb-3">
                              <?php echo form_error('kode_asisten','<div class="text-small text-danger"></div>') ?>
                    </div>

                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" name="nama_asisten" class="form-control mb-3">
                              <?php echo form_error('nama_asisten','<div class="text-small text-danger"></div>') ?>
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
                        <input type="text" name="telepon" class="form-control mb-3">
                    </div>

                    <div class="form-group">
                              <label>Jenis Kelamin</label>
                              <select name="jenis_kelamin" class="form-control">
                                    <option value="Pilih Jenis Kelamin">Pilih Jenis Kelamin</option>
                                    <option value="Pria">Pria</option>
                                    <option value="Wanita">Wanita</option>
                              </select>
                    </div> 

                    <div class="form-group">
                        <label>Tempat Lahir</label>
                        <input type="text" name="jenis_kelamin" class="form-control mb-3">
                    </div>

                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" class="form-control mb-3">
                    </div>

                    <div class="form-group">
                              <label>Status Asisten</label>
                              <select name="status_asisten" class="form-control">
                                    <option value="Aktif">Aktif</option>
                                    <option value="Tidak Aktif">Tidak Aktif</option>
                              </select>
                    </div> 
                    

					<button type="submit" class="btn btn-success">Simpan</button>
                    <a href="<?php echo base_url('admin/laboratorium/dataasisten') ?>"> <button type="button" class="btn btn-danger">Batal</button></a>

            		</form>
            	</div>
            </div>


        </div>
    