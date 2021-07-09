<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <p class="mb-4"><i class="fas fa-home"></i><a href="<?php echo base_url('admin/dashboard') ?>"> Halaman Utama</a> / <a href="<?php echo base_url('admin/bau/datajenisbiaya') ?>"> Managemen Jenis Biaya </a> / <strong> Edit Jenis Biaya</strong> </p>
            </div>

<!-- DataTales Example -->
<div class="card shadow mb-4" >
    <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-primary">Edit Jenis Biaya</h5>
        
    </div>
    
    <div class="card-body">
        <div class="table-responsive">
            <table id="example" class="table table-striped" style="width:100%">
                <thead>

<?php foreach ($jenis_komponen as $p):?>
            		
            		<form method="POST" action="<?php echo base_url('admin/bau/datajenisbiaya/updatedataaksi') ?>" enctype="multipart/form-data">

            		<div class="form-group">
            	
                              <input type="hidden" name="id_jenis" class="form-control mb-3" value="<?php echo $p->id_jenis ?>">            			
            		</div>

                    <div class="form-group">
                            <label>Nama Jenis Biaya</label>
                            <input type="text" name="jenis_komponen" class="form-control mb-3" value="<?php echo $p->jenis_komponen ?>">
                              <?php echo form_error('jenis_komponen','<div class="text-small text-danger"></div>') ?>
                    </div>

                        
					<button type="submit" class="btn btn-success ">Simpan</button>
                    <a href="<?php echo base_url('admin/bau/datajenisbiaya') ?>"> <button type="button" class="btn btn-danger" >Batal</button></a>

            		</form>

<?php endforeach; ?>
            	</div>
            </div>


        </div>
    