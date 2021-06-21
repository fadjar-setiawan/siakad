<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<p class="mb-4"><i class="fas fa-home"></i><a href="<?php echo base_url('admin/dashboard') ?>"> Halaman Utama</a> / <strong>Managemen Matakuliah</strong></a></p>

<!-- DataTales Example -->
<div class="card shadow mb-4" id="table1">
    <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-primary">Managemen Matakuliah</h5>
        
    </div>
    
    <div class="card-body">
        <div class="table-responsive">
            <table id="example" class="table table-striped" style="width:100%">
                <thead>

    <a class= "btn btn-sm btn-success mb-3" href=" <?php echo base_url('admin/baak/datamatakuliah/tambahdata') ?> "></i>Tambah Matakuliah</a>
    
    
    <?php echo $this->session->flashdata('pesan') ?>
        <table class="table table-bordered table-striped mt-2" >
            <tr>
                <th class="text-center">No</th>
                <th class="text-center">Kode Matakuliah</th>
                <th class="text-center">Nama Matakuliah</th>
                <th class="text-center">SKS</th>
                <th class="text-center">Jenis</th>
                <th class="text-center">Action</th>
            </tr>

            <?php $no=1; foreach($matakuliah as $p) : ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $p->kdmatkul ?></td>
                    <td><?php echo $p->nmmatkul ?></td>
                    <td><?php echo $p->sks ?></td>
                    <td><?php echo $p->jenis ?></td>


                    <td>
                        <center>
                            <a class= "btn btn-sm btn-primary" href=" <?php echo base_url('admin/baak/datamatakuliah/updatedata/'.$p->kdmatkul) ?> "><i class="fas fa-edit"></i></a>
                            <a onclick="return confirm ('Yakin Hapus')" class= "btn btn-sm btn-danger" href="<?php echo base_url('admin/baak/datamatakuliah/deletedata/'.$p->kdmatkul) ?> "><i class="fas fa-trash"></i></a>
                        </center>
                    </td>
                    
                </tr>
            <?php endforeach; ?> 	
        </table>

    </div>
