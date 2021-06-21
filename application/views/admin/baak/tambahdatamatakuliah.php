<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <p class="mb-4"><i class="fas fa-home"></i><a href="<?php echo base_url('admin/dashboard') ?>"> Halaman Utama</a> / <a href="<?php echo base_url('admin/baak/datamatakuliah') ?>"> Managemen Matakuliah </a> / <strong> Tambah Matakuliah</strong> </p>
            </div>

<!-- DataTales Example -->
<div class="card shadow mb-4" >
    <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-primary">Tambah Matakuliah</h5>
        
    </div>
    
    <div class="card-body">
        <div class="table-responsive">
            <table id="example" class="table table-striped" style="width:100%">
                <thead>

            <div class="card" style="width: 100%; margin-bottom: 100px ">
            	<div class="card-body">
            		
            		<form method="POST" action="<?php echo base_url('admin/baak/datamatakuliah/tambahdataaksi') ?>" enctype="multipart/form-data">

            		<div class="form-group">
            			<label>Kode</label>
            			<input type="text" name="kdmatkul" class="form-control mb-3">
                              <?php echo form_error('kdmatkul','<div class="text-small text-danger"></div>') ?>
            		</div>

                    <div class="form-group">
                        <label>Matakuliah</label>
                        <input type="text" name="nmmatkul" class="form-control mb-3">
                              <?php echo form_error('nmmatkul','<div class="text-small text-danger"></div>') ?>
                    </div>   

                    <div class="form-group">
                        <label>SKS</label>
                        <input type="text" name="sks" class="form-control mb-3">
                              <?php echo form_error('sks','<div class="text-small text-danger"></div>') ?>
                    </div>   

                    <div class="form-group">
                        <label>Jenis</label>
                        <input type="text" name="jenis" class="form-control mb-3">
                              <?php echo form_error('jenis','<div class="text-small text-danger"></div>') ?>
                    </div>           	
				
					<button type="submit" class="btn btn-success">Simpan</button>
                    <a href="<?php echo base_url('admin/baak/datamatakuliah') ?>"> <button type="button" class="btn btn-danger" >Batal</button></a>

            		</form>
            	</div>
            </div>


        </div>
    