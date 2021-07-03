        
    <div class="container-fluid">  
        <p class="mb-4"><i class="fas fa-home"></i><a href="<?php echo base_url('admin/dashboard') ?>"> Halaman Utama</a> / <strong>Managemen Komponen Biaya</strong></a></p>
 
        <div class="card shadow mb-4" >
            <div class="card-header py-3">
                <h5 class="m-0 font-weight-bold text-primary">Managemen Komponen Biaya</h5>
                
            </div>
            <div class="card-body">
                <div class="table-responsive">
                
                <a class= "btn btn-sm btn-success mb-3" href=" <?php echo base_url('admin/bau/datakomponenbiaya/tambahdata') ?> "></i>Tambah Komponen Biaya</a>

                </div>
    
                <?php echo $this->session->flashdata('pesan') ?>
                    <div class="card shadow mb-4">                       
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Kode Komponen Biaya</th>
                                            <th class="text-center">Nama Komponen Biaya</th>
                                            <th class="text-center">Jenis Komponen Biaya</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Kode Komponen Biaya</th>
                                            <th class="text-center">Nama Komponen Biaya</th>
                                            <th class="text-center">Jenis Komponen Biaya</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php $no=1; foreach($komponen_biaya as $p) : ?>
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><?php echo $p->kode ?></td>
                                                <td><?php echo $p->nama_komponen ?></td>
                                                <td><?php echo $p->id_jenis ?></td>


                                                <td>
                                                    <center>
                                                        <a class= "btn btn-sm btn-primary" href=" <?php echo base_url('admin/bau/datakomponenbiaya/updatedata/'.$p->kode) ?> "><i class="fas fa-edit"></i></a>
                                                        <a onclick="return confirm ('Yakin Hapus')" class= "btn btn-sm btn-danger" href="<?php echo base_url('admin/bau/datakomponenbiaya/deletedata/'.$p->kode) ?> "><i class="fas fa-trash"></i></a>
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