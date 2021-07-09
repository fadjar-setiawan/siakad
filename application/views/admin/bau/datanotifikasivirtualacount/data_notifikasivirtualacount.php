        
    <div class="container-fluid">  
        <p class="mb-4"><i class="fas fa-home"></i><a href="<?php echo base_url('admin/dashboard') ?>"> Halaman Utama</a> / <strong>Managemen Fakultas</strong></a></p>
 
        <div class="card shadow mb-4" >
            <div class="card-header py-3">
                <h5 class="m-0 font-weight-bold text-primary">Managemen Kelas</h5>
                
            </div>
            <div class="card-body">
                <div class="table-responsive">
                
                <a class= "btn btn-sm btn-success mb-3" href=" <?php echo base_url('admin/baak/datakelas/tambahdata') ?> "></i>Tambah Kelas</a>

                </div>
    
                <?php echo $this->session->flashdata('pesan') ?>
                    <div class="card shadow mb-4">                       
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Trx Id</th>
                                            <th class="text-center">Customer Name</th>
                                            <th class="text-center">Trx Amount</th>
                                            <th class="text-center">Payment Amount</th>
                                            <th class="text-center">Cumulative Payment Amount</th>
                                            <th class="text-center">Payment NTB</th>
                                            <th class="text-center">Datetime Payment</th>
                                            <th class="text-center">Datetime Payment ISO8601</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Trx Id</th>
                                            <th class="text-center">Virtual Account</th>
                                            <th class="text-center">Customer Name</th>
                                            <th class="text-center">Trx Amount</th>
                                            <th class="text-center">Payment Amount</th>
                                            <th class="text-center">Cumulative Payment Amount</th>
                                            <th class="text-center">Payment NTB</th>
                                            <th class="text-center">Datetime Payment</th>
                                            <th class="text-center">Datetime Payment ISO8601</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php $no=1; foreach($callback as $p) : ?>
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><?php echo $p->trx_id ?></td>
                                                <td><?php echo $p->virtual_account ?></td>
                                                <td><?php echo $p->customer_name ?></td>
                                                <td><?php echo $p->trx_amount ?></td>
                                                <td><?php echo $p->payment_amount ?></td>
                                                <td><?php echo $p->cumulative_payment_amount ?></td>
                                                <td><?php echo $p->payment_ntb ?></td>
                                                <td><?php echo $p->datetime_payment ?></td>
                                                <td><?php echo $p->datetime_payment_iso8601 ?></td>

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