<div class="container-fluid">
	
	<div class="card mx-auto" style="width: 40%">
		<div class="card-header bg-primary text-white text-center">
            Managemen Kurikulum
		</div>

        <div class="card-body">
                <div class="table-responsive">
                
                <a class= "btn btn-sm btn-success mb-3" href=" <?php echo base_url('admin/baak/datakurikulum/tambahdata') ?> "></i>Tambah Kurikulum</a>

                <a class= "btn btn-sm btn-primary mb-3" href=" <?php echo base_url('admin/baak/datakurikulum/index') ?> "></i>Data Kurikulum</a>

                </div>
        

		<form method="POST" action="<?php echo base_url('admin/laporangaji/cetaklaporangaji') ?>">
		<div class="card-body">
        
        <div class="form-group row">
		        <label for="inputPassword" class="col-sm-3 col-form-label">Jurusan</label>
		            <div class="col-sm-9">
		                <select class="form-control ml-2" name="kdjur">
                                <option value="">Pilih Jurusan</option>
                                <?php foreach($jurusan as $p) : ?>
                                    <option value="<?php echo $p->kdjur ?>"><?php echo $p->nmjur ?></option>
                              <?php endforeach; ?>
                            </select>
    			</div>
  			</div>

			<div class="form-group row">
		    <label for="inputPassword" class="col-sm-3 col-form-label">Semester</label>
		    <div class="col-sm-9">
		    <select class="form-control ml-2" name="semester">
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
  </div>

            <div class="form-group row">
		        <label for="inputPassword" class="col-sm-3 col-form-label">Tahun</label>
		            <div class="col-sm-9">
		                <select class="form-control ml-2" name="tahun">
                                <option value="">Tahun Ajaran</option>
                                <?php $tahun = date('Y'); for($i=2021;$i<$tahun+10;$i++) {?>
                                    <option value="<?php echo $i ?>"><?php echo $i ?></option>
                            <?php } ?>
                            </select>
    			</div>
  			</div>
		
              <button type="submit" class="btn btn-success">Cari</button>
                    <a href="<?php echo base_url('admin/dashboard') ?>"> <button type="button" class="btn btn-danger" >Batal</button></a>
	</div>
		</div>
			</form>
</div>

