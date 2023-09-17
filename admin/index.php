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
                    <a class="collapse-item" href="">Data Penilaian</a>
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
            <h1 class="h3 mb-0 text-gray-800">Dashboard Admin</h1>
        </div>

        <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Santri</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">50</div>
                            </div>
                            <div class="col-auto">
                                <img width="40%" src="img/visitor.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Kriteria</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">4</div>
                            </div>
                            <div class="col-auto">
                                <img width="40%" src="img/user-daftar.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Cluster</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">3</div>
                            </div>
                            <div class="col-auto">
                                <img width="40%" src="img/daftar-nominasi.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card bg-gradient-success shadow h-100 py-2">
                    <div class="card-body">
                        <a href="#" data-toggle="modal" data-target="#qris">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-uppercase mb-1" style="color: aliceblue;">
                                    Siti Khumairoh </div>
                                    <div class="h5 mb-0 font-weight-bold" style="color: aliceblue;">1895124017</div>
                                </div>
                                <div class="col-auto">
                                   <img width="40%" src="img/upload-qris-white.png" alt="">
                               </div>
                           </div>
                       </a>
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
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
            <a class="btn btn-success" href="logout.php">Logout</a>
        </div>
    </div>
</div>
</div>


<!-- Register Modal-->
<div class="modal fade" id="registermodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Create an Account!</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">
            <form class="user">
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" class="form-control form-control-user" id="exampleFirstName"
                        placeholder="First Name">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control form-control-user" id="exampleLastName"
                        placeholder="Last Name">
                    </div>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                    placeholder="Email Address">
                </div>

                <div class="form-group">
                    <input type="number" class="form-control form-control-user" id="exampleInputnumber"
                    placeholder="Nomor Hp">
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="password" class="form-control form-control-user"
                        id="exampleInputPassword" placeholder="Password">
                    </div>
                    <div class="col-sm-6">
                        <input type="password" class="form-control form-control-user"
                        id="exampleRepeatPassword" placeholder="Repeat Password">
                    </div>
                </div>
                <a href="logout.php" class="btn btn-primary btn-user btn-block">
                    Register Account
                </a>

            </form>
            <hr>
            <div class="text-center">
                <a class="small" href="forgot-password.html">Forgot Password?</a>
            </div>
            <div class="text-center">
                <a class="small" href="#"  data-toggle="modal" data-target="#loginmodal"  data-dismiss="modal">Already have an account? Login!</a>
            </div>

        </div>
        <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>

        </div>
    </div>
</div>
</div>



<!-- upload qr Modal-->
<div class="modal fade" id="qris" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
 <div class="modal-content">
     <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Oleh:</h5>
    </div>
    <div class="modal-body">
        <form class="user" >
            <h4>Siti Khumairoh</h4>
            <h4>1895124017</h4>

        </form>

    </div>
    <div class="modal-footer">
     <button class="btn btn-danger" type="button" data-dismiss="modal">Cancel</button>
 </div>
</div>
</div>
</div>

<!-- login Modal-->
<div class="modal fade" id="loginmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
   <div class="modal-content">
       <div class="modal-header">
           <h5 class="modal-title" id="exampleModalLabel">Login to Your Account?</h5>
           <button class="close" type="button" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">×</span>
           </button>
       </div>
       <div class="modal-body">

        <form class="user">
            <div class="form-group">
                <input type="email" class="form-control form-control-user"
                id="exampleInputEmail" aria-describedby="emailHelp"
                placeholder="Enter Email Address...">
            </div>
            <div class="form-group">
                <input type="password" class="form-control form-control-user"
                id="exampleInputPassword" placeholder="Password">
            </div>
            <div class="form-group">
                <div class="custom-control custom-checkbox small">
                    <input type="checkbox" class="custom-control-input" id="customCheck">
                    <label class="custom-control-label" for="customCheck">Remember
                    Me</label>
                </div>
            </div>
            <a href="admin-dashboard/index.php" class="btn btn-primary btn-user btn-block">
                Login
            </a>
        </form>
        <hr>
        <div class="text-center">
            <a class="small" href="forgot-password.html">Forgot Password?</a>
        </div>
        <div class="text-center">
            <a class="small" href="#" data-toggle="modal" data-target="#regismodal">Create an Account!</a>
        </div>


    </div>
    <div class="modal-footer">
       <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
   </div>
</div>
</div>
</div>

<!-- Add Kategori Modal-->
<div class="modal fade" id="addkat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
 <div class="modal-content">
     <div class="modal-header">
         <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori Awards</h5>
         <button class="close" type="button" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">×</span>
         </button>
     </div>
     <div class="modal-body">
        <form class="user" >

            <div class="form-group">
                <input type="text" class="form-control form-control-user" id="namakategori"
                placeholder="Nama Kategori">
            </div>
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user"
                    id="color" placeholder="Warna">
                </div>
                <div class="col-sm-6">
                    <input type="file" class="form-control form-control-user"
                    id="icon" placeholder="Gambar">
                </div>
            </div>
            <a href="logout.php" class="btn btn-primary btn-user btn-block">
                Save Kategori
            </a>
        </form>

    </div>
    <div class="modal-footer">
     <button class="btn btn-danger" type="button" data-dismiss="modal">Cancel</button>
 </div>
</div>
</div>
</div>


<script type="text/javascript">
    function printDiv(elementId) {
     var a = document.getElementById('printing-css').value;
     var b = document.getElementById(elementId).innerHTML;
     window.frames["print_frame"].document.title = document.title;
     window.frames["print_frame"].document.body.innerHTML = '<style>' + a + '</style>' + b;
     window.frames["print_frame"].window.focus();
     window.frames["print_frame"].window.print();
 }
</script>

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