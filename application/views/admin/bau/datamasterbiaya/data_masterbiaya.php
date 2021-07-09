        
    <div class="container-fluid">  
        <p class="mb-4"><i class="fas fa-home"></i><a href="<?php echo base_url('admin/dashboard') ?>"> Halaman Utama</a> / <strong>Managemen Master Biaya</strong></a></p>
 
        <div class="card shadow mb-4" >
            <div class="card-header py-3">
                <h5 class="m-0 font-weight-bold text-primary">Managemen Master Biaya</h5>
                
            </div>

            <div class="card-body">
                <div class="table-responsive">
                
                <a class= "btn btn-sm btn-success mb-3" href=" <?php echo base_url('admin/bau/datamasterbiaya/tambahdata') ?> "></i>Tambah Master Biaya</a>

                </div>
    
                <?php echo $this->session->flashdata('pesan') ?>
                    <div class="card shadow mb-4">                       
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Kode</th>
                                            <th class="text-center">Nama Master Biaya</th>
                                            <th class="text-center">Jurusan</th>
                                            <th class="text-center">Tahun Ajaran</th>
                                            <th class="text-center">Semester</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Kode</th>
                                            <th class="text-center">Nama Master Biaya</th>
                                            <th class="text-center">Jurusan</th>
                                            <th class="text-center">Tahun Ajaran</th>
                                            <th class="text-center">Semester</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php $no=1; foreach($rtn['data'] as $p) : ?>
                                        <tr>
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $p['kode'] ?></td>
                                            <td><?php echo $p['nama_biaya'] ?></td>
                                            <td><?php echo $p['nama_jurusan'] ?></td>
                                            <td><?php echo $p['tahun'] ?></td>
                                            <td><?php echo $p['semester'] ?></td>

                                                <td>
                                                    <center>
                                                        <a class= "btn btn-sm btn-primary" href=" <?php echo base_url('admin/bau/datamasterbiaya/updatedata/'.$p['kode']) ?> "><i class="fas fa-edit"></i></a>
                                                        <a onclick="return confirm ('Yakin Hapus')" class= "btn btn-sm btn-danger" href="<?php echo base_url('admin/bau/datamasterbiaya/deletedata/'.$p['kode']) ?> "><i class="fas fa-trash"></i></a>
                                                    </center>
                                                </td>
                                        <?php endforeach; ?> 	
                                    </tbody>
                                </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>