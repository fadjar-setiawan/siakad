<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <p class="mb-4"><i class="fas fa-home"></i><a href="<?php echo base_url('admin/dashboard') ?>"> Halaman Utama</a> / <a href="<?php echo base_url('admin/bau/dataaturbiaya') ?>"> Managemen Komponen Biaya</a> / <strong> Edit Komponen Biaya</strong> </p>
            </div>

<!-- DataTales Example -->
<div class="card shadow mb-4" >
    <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-primary">Edit Komponen Biaya</h5>
        
    </div>
    
    <div class="card-body">
        <div class="table-responsive">
            <table id="example" class="table table-striped" style="width:100%">
                <thead>

<?php foreach ($seting_biaya as $p):?>
            		
            		<form method="POST" action="<?php echo base_url('admin/bau/dataaturbiaya/updatedataaksi') ?>" enctype="multipart/form-data">

                    <div class="form-group">
                              <label>Master Biaya</label>
                              <select name="kd_master_biaya" class="form-control" value="<?php echo $p->kd_master_biaya ?>">
                                    <option value="">Pilih Master Biaya</option>
                                    <?php foreach($master_biaya as $p) : ?>
                                    <option value="<?php echo $p->kd_master_biaya ?>"><?php echo $p->nm_master_biaya ?></option>
                              <?php endforeach; ?>
                              </select>
                        </div>


                        <div class="form-group">
                              <label>Komponen Biaya</label>
                              <select name="kode" class="form-control" value="<?php echo $p->kode ?>">
                                    <?php foreach($komponen_biaya as $p) : ?>
                                    <option value="<?php echo $p->kode ?>"><?php echo $p->nama_komponen ?></option>
                              <?php endforeach; ?>
                              </select>
                        </div> 


                    <div class="form-group">
                        <label>Jumlah</label>
                        <input type="text" name="jumlah" class="form-control mb-3" value="<?php echo $p->jumlah ?>">
                              <?php echo form_error('jumlah','<div class="text-small text-danger"></div>') ?>
                    </div>

                    <div class="form-group">
                              <label>Model Pembayaran</label>
                              <select name="model_pembayaran" class="form-control" value="<?php echo $p->model_pembayaran ?>">
                                    <option value="">Pilih Model Pembayaran</option>
                                    <option value="i">Open Payment/Cicil</option>
                                    <option value="c">Fixed Pyment/Sekali Bayar</option>
                              </select>
                    </div> 

                    <div class="form-group">
                              <label>Tipe Biaya</label>
                              <select name="tipe" class="form-control" value="<?php echo $p->tipe ?>">
                                    <option value="">Pilih Tipe Biaya</option>
                                    <option value="Wajib">Wajib</option>
                                    <option value="Tidak Wajib">Tidak Wajib</option>
                              </select>
                    </div> 
                        
					<button type="submit" class="btn btn-success">Simpan</button>
                    <a href="<?php echo base_url('admin/bau/dataaturbiaya') ?>"> <button type="button" class="btn btn-danger" >Batal</button></a>

            		</form>

<?php endforeach; ?>
            	</div>
            </div>


        </div>
    