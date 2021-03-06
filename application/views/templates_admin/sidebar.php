<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard">
                
                <div class="sidebar-brand-text mx-3" ><h2><strong>SIAKAD</strong></h2></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item ">
                <a class="nav-link" href="<?php echo base_url('admin/dashboard') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#multiCollapseExample1"
                    aria-expanded="true" aria-controls="multiCollapseExample1">
                    <i class="fas fa-fw fa-database"></i>
                    <span>INSTITUSI</span>
                </a>
                <div id="multiCollapseExample1" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?php echo base_url('admin/institusi/datafakultas') ?>">Fakultas/Prodi</a>
                        <a class="collapse-item" href="<?php echo base_url('admin/institusi/datajurusan') ?>">Jurusan</a>
                        <a class="collapse-item" href="<?php echo base_url('admin/institusi/datadosen') ?>">Dosen</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#multiCollapseExample2"
                    aria-expanded="true" aria-controls="multiCollapseExample2">
                    <i class="fas fa-fw fa-money-check-alt"></i>
                    <span>BAAK</span>
                </a>
                <div id="multiCollapseExample2" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?php echo base_url('admin/baak/datamahasiswa') ?>">Mahasiswa</a>
                        <a class="collapse-item" href="<?php echo base_url('admin/baak/datakelas') ?>">Kelas</a>
                        <a class="collapse-item" href="<?php echo base_url('admin/baak/datamatakuliah') ?>">Matakuliah</a>
                        <a class="collapse-item" href="<?php echo base_url('admin/baak/datakurikulum') ?>">Kurikulum</a>
                        <a class="collapse-item" href="<?php echo base_url('admin/baak/dataplotingdosen') ?>">Ploting Dosen</a>
                        <a class="collapse-item" href="<?php echo base_url('admin/baak/datakelas') ?>">Jadwal</a>
                        <a class="collapse-item" href="<?php echo base_url('admin/baak/datakelas') ?>">Handout</a>
                        <a class="collapse-item" href="<?php echo base_url('admin/baak/datakelas') ?>">Absen Dosen Teori</a>
                        <a class="collapse-item" href="<?php echo base_url('admin/baak/datakelas') ?>">Absen Mahasiswa</a>
                        <a class="collapse-item" href="<?php echo base_url('admin/baak/datakelas') ?>">Ujian</a>

                        <div class="collapse-divider">
                            <h6 class="collapse-header">Kartu Rencana Studi:</h6>
                                <a class="collapse-item" href="404.html">Data KRS</a>
                                <a class="collapse-item" href="blank.html">Cetak KRS</a>
                            <h6 class="collapse-header">Nilai:</h6>
                                <a class="collapse-item" href="404.html">Data Nilai</a>
                                <a class="collapse-item" href="404.html">Cetak DNS</a>
                            <h6 class="collapse-header">Laporan:</h6>
                                <a class="collapse-item" href="404.html">Laporan Jadwal</a>
                                <a class="collapse-item" href="404.html">Laporan Absensi Dosen</a>
                                <a class="collapse-item" href="404.html">Laporan Absensi Mhsw</a>
                                <a class="collapse-item" href="blank.html">Laporan Nilai</a>
                        </div>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#multiCollapseExample3"
                    aria-expanded="true" aria-controls="multiCollapseExample3">
                    <i class="far fa-fw fa-copy"></i>
                    <span>BAU</span>
                </a>
                <div id="multiCollapseExample3" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="<?php echo base_url('admin/bau/datajenisbiaya') ?>">Jenis Biaya</a>
                        <a class="collapse-item" href="<?php echo base_url('admin/bau/datakomponenbiaya') ?>">Biaya</a>
                        <a class="collapse-item" href="<?php echo base_url('admin/bau/datamasterbiaya') ?>">Master Biaya</a>
                        <a class="collapse-item" href="<?php echo base_url('admin/bau/dataaturbiaya') ?>">Atur Biaya</a>
                        <a class="collapse-item" href="<?php echo base_url('admin/baak/datakelas') ?>">Pembayaran</a>
                        <a class="collapse-item" href="<?php echo base_url('admin/baak/datakelas') ?>">Import Pembayaran</a>
                        <a class="collapse-item" href="<?php echo base_url('admin/baak/datakelas') ?>">Import Detail Pembayaran</a>
                        <a class="collapse-item" href="<?php echo base_url('admin/baak/datakelas') ?>">Virtual Acount</a>
                        <a class="collapse-item" href="<?php echo base_url('admin/baak/datakelas') ?>">Virtual Acount Tambahan</a>
                        <a class="collapse-item" href="<?php echo base_url('admin/bau/datanotifikasivirtualacount') ?>">Notifikasi Virtual Acount</a>

                        <div class="collapse-divider">
                            <h6 class="collapse-header">Laporan:</h6>
                                <a class="collapse-item" href="404.html">Absensi Dosen Teori</a>
                                <a class="collapse-item" href="blank.html">Absensi Dosen Pratikum</a>
                                <a class="collapse-item" href="blank.html">Absensi Asisten</a>
                            <h6 class="collapse-header">Laporan Pembayaran:</h6>
                                <a class="collapse-item" href="404.html">Trks Pembayaran Perhari</a>
                                <a class="collapse-item" href="404.html">Trks Pembayaran Perbulan</a>
                                <a class="collapse-item" href="404.html">Trks Pembayaran Pertahun</a>
                                <a class="collapse-item" href="blank.html">Lap Virtual Account</a>
                        </div>
                    
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#multiCollapseExample4"
                    aria-expanded="true" aria-controls="multiCollapseExample4">
                    <i class="fas fa-fw fa-money-check-alt"></i>
                    <span>LABORATORIUM</span>
                </a>
                <div id="multiCollapseExample4" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?php echo base_url('admin/laboratorium/dataasisten') ?>">Asisten</a>
                        <a class="collapse-item" href="<?php echo base_url('admin/potongangaji') ?>">Absensi Dosen</a>
                        <a class="collapse-item" href="<?php echo base_url('admin/potongangaji') ?>">Absensi Asisten</a>
                        <a class="collapse-item" href="<?php echo base_url('admin/potongangaji') ?>">Absensi Mahasiswa</a>
                        <a class="collapse-item" href="<?php echo base_url('admin/potongangaji') ?>">Laporan</a>                        
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
             <!--<li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#multiCollapseExample5"
                    aria-expanded="true" aria-controls="multiCollapseExample5">
                    <i class="fas fa-fw fa-money-check-alt"></i>
                    <span>SMS</span>
                </a>
                <div id="multiCollapseExample5" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?php echo base_url('admin/dataabsensi') ?>">Data Absensi</a>
                        <a class="collapse-item" href="<?php echo base_url('admin/potongangaji') ?>">Seting Potongan Gaji</a>
                        <a class="collapse-item" href="<?php echo base_url('admin/datapenggajian') ?>">Data Gaji</a>
                    </div>
                </div>
            </li> -->

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#multiCollapseExample6"
                    aria-expanded="true" aria-controls="multiCollapseExample6">
                    <i class="fas fa-fw fa-money-check-alt"></i>
                    <span>SYSTEM</span>
                </a>
                <div id="multiCollapseExample6" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?php echo base_url('admin/system/datapengguna') ?>">Manajemen User</a>
                        <a class="collapse-item" href="<?php echo base_url('admin/system/datacekduplikasi') ?>">Cek Duplikasi Data MHS</a>
                        <a class="collapse-item" href="<?php echo base_url('admin/system/datamanajemenvideo') ?>">Manajemen Video Display</a>
                        <a class="collapse-item" href="<?php echo base_url('admin/system/datapengumuman') ?>">Pengumuman</a>
                    </div>
                </div>
            </li>








            
          <!--  <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('admin/ubahpassword') ?>">
                    <i class="fas fa-fw fa-lock"></i>
                    <span>Ubah Password</span></a>
            </li>-->

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url ('welcome/logout')?>">
                    <i class="fas fa-fw fa-sign-out-alt"></i>
                    <span>Logout</span></a>
            </li>

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <h4 class="font-weight-bold"></h4>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Selamat Datang <?php echo $this->session->userdata('nama_pegawai') ?></span>

                                <img class="img-profile rounded-circle"src="<?php echo base_url('/assets/photo/').$this->session->userdata('photo') ?>">
                            </a>
                        </li>
                        

                    </ul>

                </nav>
                <!-- End of Topbar -->