<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<p class="mb-4"><i class="fas fa-home"></i><a href="<?php echo base_url('admin/dashboard') ?>"> Halaman Utama</a> / <strong>Managemen Callback</strong></a></p>

<!-- DataTales Example -->
<div class="card shadow mb-4" id="table1">
    <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-primary">Managemen Managemen Callback</h5>
        
    </div>
    
    <div class="card-body">
        <div class="table-responsive">
            <table id="example" class="table table-striped" style="width:100%">
                <thead>
    
    
    <?php echo $this->session->flashdata('pesan') ?>
        <table class="table table-bordered table-striped mt-2" >
            <tr>
                <th class="text-center">No</th>
                <th class="text-center">Trx Id</th>
                <th class="text-center">Virtual Account</th>
                <th class="text-center">Custimer Name</th>
                <th class="text-center">Trx Amount</th>
                <th class="text-center">Payment Amount</th>
                <th class="text-center">Cumulative Payment Amount</th>
                <th class="text-center">Payment NTB</th>
                <th class="text-center">Date time Payment</th>
                <th class="text-center">Date time ISO8601</th>
            </tr>

            <?php $no=1; foreach($jenis_komponen as $p) : ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $p->jenis_komponen ?></td>
                    <td><?php echo $p->jenis_komponen ?></td>
                    <td><?php echo $p->jenis_komponen ?></td>
                    <td><?php echo $p->jenis_komponen ?></td>
                    <td><?php echo $p->jenis_komponen ?></td>
                    <td><?php echo $p->jenis_komponen ?></td>
                    <td><?php echo $p->jenis_komponen ?></td>
                    <td><?php echo $p->jenis_komponen ?></td>
                    <td><?php echo $p->jenis_komponen ?></td>



                    
                </tr>
            <?php endforeach; ?> 	
        </table>

    </div>