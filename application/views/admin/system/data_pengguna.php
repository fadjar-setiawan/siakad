        
    <div class="container-fluid">  
        <p class="mb-4"><i class="fas fa-home"></i><a href="<?php echo base_url('admin/dashboard') ?>"> Halaman Utama</a> / <strong>Managemen Pengguna</strong></a></p>
 
        <div class="card shadow mb-4" >
            <div class="card-header py-3">
                <h5 class="m-0 font-weight-bold text-primary">Managemen Pengguna</h5>
                
            </div>
            <div class="card-body">
                <div class="table-responsive">
                
                <a class= "btn btn-sm btn-success mb-3" href=" <?php echo base_url('admin/system/datapengguna/tambahdata') ?> "></i>Tambah Pengguna</a>

                </div>
    
                <?php echo $this->session->flashdata('pesan') ?>
                    <div class="card shadow mb-4">                       
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Username</th>
                                            <th class="text-center">Nama Lengkap</th>
                                            <th class="text-center">Email</th>
                                            <th class="text-center">No.Telp/HP</th>
                                            <th class="text-center">Level</th>
                                            <th class="text-center">Blokir</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Username</th>
                                            <th class="text-center">Nama Lengkap</th>
                                            <th class="text-center">Email</th>
                                            <th class="text-center">No.Telp/HP</th>
                                            <th class="text-center">Level</th>
                                            <th class="text-center">Blokir</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php $no=1; foreach($users as $p) : ?>
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><?php echo $p->id_user ?></td>
                                                <td><?php echo $p->nama_lengkap ?></td>
                                                <td><?php echo $p->email ?></td>
                                                <td><?php echo $p->no_telp ?></td>
                                                <td><?php echo $p->level ?></td>
                                                <td><?php echo $p->blokir ?></td>


                                                <td>
                                                    <center>
                                                        <a class= "btn btn-sm btn-primary" href=" <?php echo base_url('admin/system/datapengguna/updatedata/'.$p->id_user) ?> "><i class="fas fa-edit"></i></a>
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