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
        <li class="nav-item">
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
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
        aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-fw fa-users"></i>
        <span>Perhitungan</span>
    </a>
    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Perhitungan:</h6>
            <a class="collapse-item" href="clustering.php">Clustering</a>
            <a class="collapse-item" href="hasil.php">Hasil</a>
        </div>
    </div>
</li>


<!-- Nav Item - Charts -->
<li class="nav-item active">
    <a class="nav-link active" href="settings.html">
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
        <h1 class="h3 mb-0 text-gray-800">Setting Website  Siti Khumairoh - 1895124017</h1>
    </div>


    <div class="row">


        <div class="col-lg-12">

            <!-- Dropdown Card Example -->
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <!-- Basic Card Example -->

                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-success">Form Setting Website

                    </h6>
                </div>
                <div class="card-body">
                    <?php $nomor=1;
                    $ambil=$koneksi->query("SELECT * FROM settings");
                    $data=$ambil->fetch_array();?>
                    <form class="user"  method="post">

                        <div class="form-group">                  
                            <label>Logo</label>
                            <input type="file" class="form-control" name="logo"
                            value="<?php echo $data['logo']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Tentang Pesantren</label>
                            <textarea class="form-control" name="tentang"><?php echo $data['tentang']; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" class="form-control" name="alamat"
                            value="<?php echo $data['alamat']; ?>">
                        </div>
                        <div class="form-group">

                            <label>No Telepon</label>
                            <input type="text" name="no_tlp" class="form-control"
                            value="<?php echo $data['no_tlp']; ?>">

                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" name="email"
                            value="<?php echo $data['email']; ?>">
                        </div>
                        <button type="submit" name="save" class="btn btn-primary btn-user btn-block">
                            Simpan
                        </button>
                    </form>


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
if (isset($_POST['save'])) {
    // simpan settings

    $koneksi->query("UPDATE settings set logo='$_POST[logo]', tentang='$_POST[tentang]', alamat='$_POST[alamat]', no_tlp='$_POST[no_tlp]', email='$_POST[email]'");

    echo "<div class='alert alert-info'>Data Tersimpan</div>";
    echo "<meta http-equiv='refresh' content='1;url=settings.php'>";
};
?>