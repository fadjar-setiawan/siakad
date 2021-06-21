<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <p class="mb-4"><i class="fas fa-home"></i><a href="<?php echo base_url('admin/dashboard') ?>"> Halaman Utama</a> / <a href="<?php echo base_url('admin/institusi/datajurusan') ?>"> Managemen Jurusan </a> / <strong> Tambah Jurusan</strong> </p>
            </div>

<!-- DataTales Example -->
<div class="card shadow mb-4" >
    <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-primary">Tambah Jurusan</h5>
        
    </div>
    
    <div class="card-body">
        <div class="table-responsive">
            <table id="example" class="table table-striped" style="width:100%">
                <thead>

            <div class="card" style="width: 100%; margin-bottom: 100px ">
            	<div class="card-body">
            		
            		<form method="POST" action="<?php echo base_url('admin/institusi/datajurusan/tambahdataaksi') ?>" enctype="multipart/form-data">

            		<div class="form-group">
            			<label>Kode</label>
            			<input type="number" name="kdfak" class="form-control mb-3">
                              <?php echo form_error('kdfak','<div class="text-small text-danger"></div>') ?>
            		</div>

                    <div class="form-group">
                        <label>Jurusan</label>
                        <input type="text" name="nmfak" class="form-control mb-3">
                              <?php echo form_error('nmfak','<div class="text-small text-danger"></div>') ?>
                    </div>        

                    <div class="form-group">
                              <label>Fakultas</label>
                              <select name="kdfak" class="form-control">
                                    <option value="">--Pilih Fakultas--</option>
                                    <?php foreach($fakultas as $f) : ?>
                                    <option value="<?php echo $f->nmfak ?>"><?php echo $f->nmfak ?></option>
                              <?php endforeach; ?>
                              </select>
                              <?php echo form_error('fakultas','<div class="text-small text-danger"></div>') ?>
                        </div>


					<button type="submit" class="btn btn-success">Simpan</button>
                    <a href="<?php echo base_url('admin/institusi/datafakultas') ?>"> <button type="button" class="btn btn-danger" >Batal</button></a>

            		</form>
            	</div>
            </div>


        </div>
    