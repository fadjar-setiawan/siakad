<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <p class="mb-4"><i class="fas fa-home"></i><a href="<?php echo base_url('admin/dashboard') ?>"> Halaman Utama</a> / <a href="<?php echo base_url('admin/institusi/datajurusan') ?>"> Managemen Jurusan </a> / <strong> Edit Jurusan</strong> </p>
            </div>

<!-- DataTales Example -->
<div class="card shadow mb-4" >
    <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-primary">Edit Jurusan</h5>
        
    </div>
    
    <div class="card-body">
        <div class="table-responsive">
            <table id="example" class="table table-striped" style="width:100%">
                <thead>

<?php foreach ($jurusan as $p):?>
            		
            		<form method="POST" action="<?php echo base_url('admin/institusi/datajurusan/updatedataaksi') ?>" enctype="multipart/form-data">

            		<div class="form-group">
            	
                              <input type="hidden" name="kdjur" class="form-control mb-3" value="<?php echo $p->kdjur ?>">            			
            		</div>

                    <div class="form-group">
                        <label>Jurusan</label>
                        <input type="text" name="nmjur" class="form-control mb-3" value="<?php echo $p->nmjur ?>">
                              <?php echo form_error('nmjur','<div class="text-small text-danger"></div>') ?>
                    </div>        

                    <div class="form-group">
                              <label>Fakultas</label>
                              <select name="kdfak" class="form-control" value="<?php echo $p->kdfak ?>">
                                    <?php foreach($fakultas as $p) : ?>
                                    <option value="<?php echo $p->kdfak ?>"><?php echo $p->nmfak ?></option>
                              <?php endforeach; ?>
                              </select>
                              <?php echo form_error('kdfak','<div class="text-small text-danger"></div>') ?>
                        </div>


					<button type="submit" class="btn btn-success">Simpan</button>
                    <a href="<?php echo base_url('admin/institusi/datajurusan') ?>"> <button type="button" class="btn btn-danger" >Batal</button></a>

            		</form>

<?php endforeach; ?>
            	</div>
            </div>


        </div>
    