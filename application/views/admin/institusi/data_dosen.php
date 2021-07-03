        
    <div class="container-fluid">  
        <p class="mb-4"><i class="fas fa-home"></i><a href="<?php echo base_url('admin/dashboard') ?>"> Halaman Utama</a> / <strong>Managemen Dosen</strong></a></p>
 
        <div class="card shadow mb-4" >
            <div class="card-header py-3">
                <h5 class="m-0 font-weight-bold text-primary">Managemen Dosen</h5>
                
            </div>
            <div class="card-body">
                <div class="table-responsive">
                
                <a class= "btn btn-sm btn-success mb-3" href=" <?php echo base_url('admin/institusi/datadosen/tambahdata') ?> "></i>Tambah Dosen</a>

                </div>
    
                <?php echo $this->session->flashdata('pesan') ?>
                    <div class="card shadow mb-4">                       
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Kode Dosen</th>
                                        <th class="text-center">Nama</th>
                                        <th class="text-center">Alamat</th>
                                        <th class="text-center">Telpon</th>
                                        <th class="text-center">Jenis Kelamin</th>
                                        <th class="text-center">Tempat/Tanggal Lahir</th>
                                        <th class="text-center">Pendidikan</th>
                                        <th class="text-center">Status Dosen</th>
                                        <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Kode Dosen</th>
                                        <th class="text-center">Nama</th>
                                        <th class="text-center">Alamat</th>
                                        <th class="text-center">Telpon</th>
                                        <th class="text-center">Jenis Kelamin</th>
                                        <th class="text-center">Tempat/Tanggal Lahir</th>
                                        <th class="text-center">Pendidikan</th>
                                        <th class="text-center">Status Dosen</th>
                                        <th class="text-center">Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php $no=1; foreach($dosen as $p) : ?>
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><?php echo $p->kode_dosen ?></td>
                                                <td><?php echo $p->nama_dosen ?></td>
                                                <td><?php echo $p->alamat ?></td>
                                                <td><?php echo $p->telpon ?></td>
                                                <td><?php echo $p->jenis_kelamin ?></td>
                                                <td><?php echo $p->tempat_lahir, $p->tanggal_lahir ?></td>
                                                <td><?php echo $p->pendidikan ?></td>
                                                <td><?php echo $p->status_dosen ?></td>


                                                <td>
                                                    <center>
                                                        <a class= "btn btn-sm btn-primary" href=" <?php echo base_url('admin/institusi/datadosen/updatedata/'.$p->kode_dosen) ?> "><i class="fas fa-edit"></i></a>
                                                        <a onclick="return confirm ('Yakin Hapus')" class= "btn btn-sm btn-danger" href="<?php echo base_url('admin/institusi/datadosen/deletedata/'.$p->kode_dosen) ?> "><i class="fas fa-trash"></i></a>
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