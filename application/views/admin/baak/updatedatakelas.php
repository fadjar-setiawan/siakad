<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <p class="mb-4"><i class="fas fa-home"></i><a href="<?php echo base_url('admin/dashboard') ?>"> Halaman Utama</a> / <a href="<?php echo base_url('admin/baak/datakelas') ?>"> Managemen Kelas </a> / <strong> Edit Kelas</strong> </p>
            </div>

<!-- DataTales Example -->
<div class="card shadow mb-4" >
    <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-primary">Edit Kelas</h5>
        
    </div>
    
    <div class="card-body">
        <div class="table-responsive">
            <table id="example" class="table table-striped" style="width:100%">
                <thead>

<?php foreach ($kelas as $p):?>
            		
            		<form method="POST" action="<?php echo base_url('admin/baak/datakelas/updatedataaksi') ?>" enctype="multipart/form-data">

            		<div class="form-group">
            	
                              <input type="hidden" name="kdkelas" class="form-control mb-3" value="<?php echo $p->kdkelas ?>">            			
            		</div>

                        <div class="form-group">
                              <label>Nama Kelas</label>
                              <input type="text" name="nmkelas" class="form-control mb-3" value="<?php echo $p->nmkelas ?>">
                              <?php echo form_error('nmkelas','<div class="text-small text-danger"></div>') ?>
                        </div>

                        
					<button type="submit" class="btn btn-success ">Simpan</button>
                    <a href="<?php echo base_url('admin/baak/datafakultas') ?>"> <button type="button" class="btn btn-danger" >Batal</button></a>

            		</form>

<?php endforeach; ?>
            	</div>
            </div>


        </div>
    