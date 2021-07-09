        
    <div class="container-fluid">  
        <p class="mb-4"><i class="fas fa-home"></i><a href="<?php echo base_url('admin/dashboard') ?>"> Halaman Utama</a> / <strong>Managemen Kurikulum</strong></a></p>
 
        <div class="card shadow mb-4" >
            <div class="card-header py-3">
                <h5 class="m-0 font-weight-bold text-primary">Managemen Kurikulum</h5>
                
            </div>
            <div class="card-body">
                <div class="table-responsive">
                
                <a class= "btn btn-sm btn-success mb-3" href=" <?php echo base_url('admin/baak/datakurikulum/tambahdata') ?> "></i>Tambah Kurikulum</a>

                <a class= "btn btn-sm btn-primary mb-3" href=" <?php echo base_url('admin/baak/datakurikulum/data') ?> "></i>Pencarian Kurikulum</a>

                </div>
    
                <?php echo $this->session->flashdata('pesan') ?>
                    <div class="card shadow mb-4">                       
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Nama Kurikulum</th>
                                            <th class="text-center">Jurusan</th>
                                            <th class="text-center">Semester</th>
                                            <th class="text-center">Tahun</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Nama Kurikulum</th>
                                            <th class="text-center">Jurusan</th>
                                            <th class="text-center">Semester</th>
                                            <th class="text-center">Tahun</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php $no=1; foreach($rtn['data'] as $p) : ?> 
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><?php echo $p['nama_kurikulum'] ?></td>
                                                <td><?php echo $p['nama_jurusan'] ?></td>
                                                <td><?php echo $p['semester'] ?></td>
                                                <td><?php echo $p['tahun'] ?></td>
                           

                                                <td>
                                                    <center>
                                                        <a class= "btn btn-sm btn-primary" href=" <?php echo base_url('admin/baak/datakurikulum/updatedata/'.$p['nama_kurikulum']) ?> "><i class="fas fa-edit"></i></a>
                                                        <a onclick="return confirm ('Yakin Hapus')" class= "btn btn-sm btn-danger" href="<?php echo base_url('admin/baak/datakurikulum/deletedata/'.$p['nama_kurikulum']) ?> "><i class="fas fa-trash"></i></a>
                                                    </center>
                                                </td>
                                                
                                            </tr>
                                        <?php endforeach; ?> 	
                                    </tbody>
                                </table>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>