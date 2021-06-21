<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <p class="mb-4"><i class="fas fa-home"></i><a href="<?php echo base_url('admin/dashboard') ?>"> Halaman Utama</a> / <a href="<?php echo base_url('admin/bau/datakomponenbiaya') ?>"> Managemen Komponen Biaya </a> / <strong> Tambah Komponen Biaya</strong> </p>
            </div>

<!-- DataTales Example -->
<div class="card shadow mb-4" >
    <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-primary">Tambah Komponen Biaya</h5>
        
    </div>
    
    <div class="card-body">
        <div class="table-responsive">
            <table id="example" class="table table-striped" style="width:100%">
                <thead>

            <div class="card" style="width: 100%; margin-bottom: 100px ">
            	<div class="card-body">
            		
            		<form method="POST" action="<?php echo base_url('admin/bau/datajenisbiaya/tambahdataaksi') ?>" enctype="multipart/form-data">


                    <div class="form-group">
                        <label>Kode</label>
                        <input type="text" name="kode" class="form-control mb-3">
                              <?php echo form_error('kode','<div class="text-small text-danger"></div>') ?>
                    </div>

                    <div class="form-group">
                        <label>Komponen Biaya</label>
                        <input type="text" name="nama_komponen" class="form-control mb-3">
                              <?php echo form_error('nama_komponen','<div class="text-small text-danger"></div>') ?>
                    </div>   

                    <div class="form-group">
                              <label>Komponen Biaya</label>
                              <select name="nama_komponen" class="form-control">
                                    <option value="">Pilih Komponen Biaya</option>
                                    <?php foreach($jenis_komponen as $j) : ?>
                                    <option value="<?php echo $j->id_jenis ?>"><?php echo $j->jenis_komponen ?></option>
                              <?php endforeach; ?>
                              </select>
                              <?php echo form_error('id_jenis','<div class="text-small text-danger"></div>') ?>
                        </div>
        	
				
					<button type="submit" class="btn btn-success">Simpan</button>
                    <a href="<?php echo base_url('admin/bau/datakomponenbiaya') ?>"> <button type="button" class="btn btn-danger" >Batal</button></a>

            		</form>
            	</div>
            </div>


        </div>
    