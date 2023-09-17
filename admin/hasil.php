<?php include 'header.php'; ?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon">
                 <span>Admin</span>
             </div>
         </a>

         <!-- Divider -->
         <hr class="sidebar-divider my-0">

         <!-- Nav Item - Dashboard -->
         <li class="nav-item active">
            <a class="nav-link" href="index.php">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Data
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-trophy"></i>
                <span>Data Master</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Data Master:</h6>
                    <a class="collapse-item" href="santri.php">Data Santri</a>
                    <a class="collapse-item" href="kriteria.php">Data Kriteria</a>
                    <a class="collapse-item" href="nilai.php">Data Penilaian</a>
                </div>
            </div>
        </li>


        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Perhitungan
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item active">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-users"></i>
            <span>Perhitungan</span>
        </a>
        <div id="collapsePages" class="collapse show" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Perhitungan:</h6>
                <a class="collapse-item" href="clustering.php">Clustering</a>
                <a class="collapse-item active" href="hasil.php">Hasil</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Charts -->
    <li class="nav-item active">
        <a class="nav-link" href="settings.php">
            <i class="fas fa-fw fa-cog"></i>
            <span>Web Settings</span></a>
        </li>


        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>



    </ul>
    <!-- End of Sidebar -->
    <?php include 'nav.php'; ?>


    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Pembagian Kelas Santri</h1>
        </div>

        <div class="row">


            <div class="col-lg-12">

                <!-- Dropdown Card Example -->
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <!-- Basic Card Example -->

                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-success">Data Pembagian Kelas Santri 
                            &emsp; 
                            <button class="btn btn-outline-success" data-toggle="modal" data-target="#cetak" ><i class="fas fa-print"></i></button>
                        </h6>
                    </div>
                    <div class="card-body">
                     <ul class="nav nav-tabs nav-tabs-solid nav-tabs-rounded nav-justified">
                        <li class="nav-item "><a class="nav-link show active" href="#solid-rounded-justified-a" data-toggle="tab">Kelas A
                            <li class="nav-item"><a class="nav-link" href="#solid-rounded-justified-b" data-toggle="tab">Kelas B
                               <li class="nav-item"><a class="nav-link" href="#solid-rounded-justified-c" data-toggle="tab">Kelas C
                               </ul>
                               <div class="tab-content">
                                <div class="tab-pane show active" id="solid-rounded-justified-a">
                                    <div class="table-responsive">
                                        <center><h3>Data Santri Kelas A</h3></center>
                                        <table class="table table-bordered" id="" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                    <th>Al Qur'an</th>
                                                    <th>Tajwid</th>
                                                    <th>Fashohah</th>
                                                    <th>Tartil</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                             <?php $nomor=1;
                                             $ambil=$koneksi->query("SELECT * FROM tb_hasil_clustering where cluster='A'");
                                             while ($data=$ambil->fetch_array()){

                                               ?>
                                               <tr>
                                                <td><?php echo $nomor++; ?></td>
                                                <td><?php echo $data['nama_santri']; ?></td>
                                                <td><?php echo $data['alquran'];?></td>
                                                <td><?php echo $data['tajwid']; ?></td>
                                                <td><?php echo $data['fashohah']; ?></td>
                                                <td><?php echo $data['tartil']; ?></td>

                                            </tr>
                                        <?php }; ?>





                                    </tbody>
                                </table>
                            </div>

                        </div>



                        <div class="tab-pane" id="solid-rounded-justified-b">
                            <div class="table-responsive">
                               <center><h3>Data Santri Kelas B</h3></center>
                               <table class="table table-bordered" id="" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Al Qur'an</th>
                                        <th>Tajwid</th>
                                        <th>Fashohah</th>
                                        <th>Tartil</th>
                                    </tr>
                                </thead>

                                <tbody>
                                 <?php $nomor=1;
                                 $ambil=$koneksi->query("SELECT * FROM tb_hasil_clustering where cluster='B'");
                                 while ($data=$ambil->fetch_array()){

                                   ?>
                                   <tr>
                                    <td><?php echo $nomor++; ?></td>
                                    <td><?php echo $data['nama_santri']; ?></td>
                                    <td><?php echo $data['alquran'];?></td>
                                    <td><?php echo $data['tajwid']; ?></td>
                                    <td><?php echo $data['fashohah']; ?></td>
                                    <td><?php echo $data['tartil']; ?></td>

                                </tr>
                            <?php }; ?>
                        </tbody>
                    </table>
                </div>
            </div>


            <div class="tab-pane" id="solid-rounded-justified-c">
                <div class="table-responsive">
                  <center><h3>Data Santri Kelas C</h3></center>
                  <table class="table table-bordered" id="" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Al Qur'an</th>
                            <th>Tajwid</th>
                            <th>Fashohah</th>
                            <th>Tartil</th>
                        </tr>
                    </thead>

                    <tbody>
                     <?php $nomor=1;
                     $ambil=$koneksi->query("SELECT * FROM tb_hasil_clustering where cluster='C'");
                     while ($data=$ambil->fetch_array()){

                       ?>
                       <tr>
                        <td><?php echo $nomor++; ?></td>
                        <td><?php echo $data['nama_santri']; ?></td>
                        <td><?php echo $data['alquran'];?></td>
                        <td><?php echo $data['tajwid']; ?></td>
                        <td><?php echo $data['fashohah']; ?></td>
                        <td><?php echo $data['tartil']; ?></td>

                    </tr>
                <?php }; ?>
            </tbody>
        </table>
    </div>
</div>
</div>

</div>




</div>

</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy;  Siti Khumairoh - 1895124017</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModall" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-success" href="">Logout</a>
        </div>
    </div>
</div>
</div>





<!-- Add Modal-->
<div class="modal fade" id="cetak" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">

<div class="modal-dialog" role="document">
   <div class="modal-content">
       <div class="modal-header">
           <h5 class="modal-title" id="exampleModalLabel">Cetak Data Kelas Santri</h5>
           <button class="close" type="button" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">×</span>
           </button>
       </div>
       <div class="modal-body">
        <form class="user"  method="post">
            <div class="form-group">                  
                <label>Pilih Kelas</label>
                <select name="kelas" class="form-control">
                    <option value="all">SEMUA</option>
                    <option value="a">KELAS A</option>
                    <option value="b">KELAS B</option>
                    <option value="c">KELAS C</option>
                </select>
            </div>
            <button class="btn btn-success" name="cetak">Cetak Sekarang</button>
        </form>
        <?php if (isset($_POST['cetak'])) {
            echo "<meta http-equiv='refresh' content='1;url=cetak.php?id=$_POST[kelas]'>";
        } ?>

    </div>
    <div class="modal-footer">
       <button class="btn btn-danger" type="button" data-dismiss="modal">Cancel</button>
   </div>
</div>
</div>

</div>



<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/datatables-demo.js"></script>

</body>

</html>


<?php 
$tanggal=date('y-m-d');
if (isset($_POST['simpan']))
{

    $koneksi->query("INSERT INTO tb_santri
        (nama_santri,tempat_lahir,tanggal_lahir,alamat,no_hp) 
        VALUES ('$_POST[nama]','$_POST[tempat]','$_POST[tgl]','$_POST[alamat]','$_POST[no_hp]')");

    echo "<script type='text/javascript'>
    setTimeout(function () { 
        swal({
            title: 'Data berhasil tersimpan.',
            type: 'success',
            timer: 3200,
            showConfirmButton: true
            });   
            },10);  
            window.setTimeout(function(){ 
                window.location.replace('santri.php');
                } ,3200); 
                </script>";
            }


            ?>
