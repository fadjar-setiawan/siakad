<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <p class="mb-4"><i class="fas fa-home"></i><a href="<?php echo base_url('admin/dashboard') ?>"> Halaman Utama</a> / <a href="<?php echo base_url('admin/baak/datakurikulum') ?>"> Managemen Kurikulum </a> / <strong> Tambah Kurikulum</strong> </p>
            </div>

<!-- DataTales Example -->
<div class="card shadow mb-4" >
    <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-primary">Tambah Kurikulum</h5>
        
    </div>
    
    <div class="card-body">
        <div class="table-responsive">
            <table id="example" class="table table-striped" style="width:100%">
                <thead>

            <div class="card" style="width: 100%; margin-bottom: 100px ">
            	<div class="card-body">
            		
            		<form method="POST" action="<?php echo base_url('admin/baak/datakurikulum/tambahdataaksi') ?>" enctype="multipart/form-data">

            		<div class="form-group">
            			<label>Kode Kurikulum</label>
            			<input type="text" name="kdkurikulum" class="form-control mb-3">
                              <?php echo form_error('kdkurikulum','<div class="text-small text-danger"></div>') ?>
            		</div>

                        <div class="form-group">
                              <label>Nama Kurikulum</label>
                              <input type="text" name="nmkurikulum" class="form-control mb-3">
                              <?php echo form_error('nmkurikulum','<div class="text-small text-danger"></div>') ?>
                        </div>

                    <div class="form-group">
                              <label>Jurusan</label>
                                <select name="kdjur" class="form-control">
                                    <option value="">Pilih Jurusan</option>
                                    <?php foreach($jurusan as $p) : ?>
                                    <option value="<?php echo $p->kdjur ?>"><?php echo $p->nmjur ?></option>
                                <?php endforeach; ?>
                              </select>
                    </div>

                    <div class="form-group">
                              <label>Tahun Ajaran</label>
                                <select class="form-control ml-2" name="tahun">
                                    <option value="">Tahun Ajaran</option>
                                    <?php $tahun = date('Y'); for($i=2021;$i<$tahun+10;$i++) {?>
                                        <option value="<?php echo $i ?>"><?php echo $i ?></option>
                                <?php } ?>
                                </select>
                    </div>

                    <div class="form-group">
                              <label>Semester</label>
                              <select name="semester" class="form-control">
                                    <option value="">Pilih Semester</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                              </select>
                    </div>   
                    
					<button type="submit" class="btn btn-success">Simpan</button>
                    <a href="<?php echo base_url('admin/baak/datakurikulum') ?>"> <button type="button" class="btn btn-danger" >Batal</button></a>

            		</form>
            	</div>
            </div>


        </div>
    