<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <p class="mb-4"><i class="fas fa-home"></i><a href="<?php echo base_url('admin/dashboard') ?>"> Halaman Utama</a> / <a href="<?php echo base_url('admin/institusi/datafakultas') ?>"> Managemen Fakultas </a> / <strong> Edit Fakultas</strong> </p>
            </div>

<!-- DataTales Example -->
<div class="card shadow mb-4" >
    <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-primary">Edit Fakultas</h5>
        
    </div>
    
    <div class="card-body">
        <div class="table-responsive">
            <table id="example" class="table table-striped" style="width:100%">
                <thead>

<?php foreach ($fakultas as $p):?>
            		
            		<form method="POST" action="<?php echo base_url('admin/institusi/datafakultas/updatedataaksi') ?>" enctype="multipart/form-data">

            		<div class="form-group">
            	
                              <input type="hidden" name="kdfak" class="form-control mb-3" value="<?php echo $p->kdfak ?>">            			
            		</div>

                        <div class="form-group">
                              <label>Nama Fakultas</label>
                              <input type="text" name="nmfak" class="form-control mb-3" value="<?php echo $p->nmfak ?>">
                              <?php echo form_error('nmfak','<div class="text-small text-danger"></div>') ?>
                        </div>

                        
					<button type="submit" class="btn btn-success ">Simpan</button>
                    <a href="<?php echo base_url('admin/institusi/datafakultas') ?>"> <button type="button" class="btn btn-danger" >Batal</button></a>

            		</form>

<?php endforeach; ?>
            	</div>
            </div>


        </div>
    