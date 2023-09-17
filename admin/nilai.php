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
         <li class="nav-item">
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
            <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Data Master:</h6>
                    <a class="collapse-item" href="santri.php">Data Santri</a>
                    <a class="collapse-item" href="kriteria.php">Data Kriteria</a>
                    <a class="collapse-item active" href="">Data Penilaian</a>
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
            <h1 class="h3 mb-0 text-gray-800">Data Penilaian</h1>
        </div>

        <div class="row">


            <div class="col-lg-12">

                <!-- Dropdown Card Example -->
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <!-- Basic Card Example -->

                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-success">Data Penilaian Santri
                            &emsp; 
                            <a href="cetak_penilaian.php" class="btn btn-outline-success"><i class="fas fa-print"></i></a>
                        </h6>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Membaca Al-Qur'an</th>
                                        <th>Tajwid</th>
                                        <th>Fashohah</th>
                                        <th>Tartil</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                   <?php $nomor=1;

                                   $ambil=$koneksi->query("SELECT * from tb_santri_2");

                                   while ($data=$ambil->fetch_array()){

                                     ?>
                                     <tr>
                                        <td><?php echo $nomor++; ?></td>
                                        <td><?php echo $data['nama_santri']; ?></td>
                                        <td><?php echo $data['alquran'];?></td>
                                        <td><?php echo $data['tajwid']; ?></td>
                                        <td><?php echo $data['fashohah']; ?></td>
                                        <td><?php echo $data['tartil']; ?></td>


                                        <td>

                                            <button data-toggle="modal" data-target="#edit<?php echo $data['id_santri']; ?>" class="btn btn-outline-warning"><i class="fas fa-edit"></i></button>
                                            <button data-toggle="modal" data-target="#delete<?php $data['id_santri']; ?>" class="btn btn-outline-danger"><i class="fas fa-trash"></i></button>
                                        </td>
                                    </tr>

                                    <!-- Edit Modal-->
                                    <div class="modal fade" id="edit<?php echo $data['id_santri']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                        aria-hidden="true">

                                        <div class="modal-dialog" role="document">
                                           <div class="modal-content">
                                               <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit Data Penilaian</h5>
                                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                   <span aria-hidden="true">×</span>
                                               </button>
                                           </div>
                                           <div class="modal-body">
                                            <form class="user"  method="post" action="edit_penilaian.php?id=<?php echo $data['id_santri']; ?>">

                                                <div class="form-group">                  
                                                    <label>Nama Santri</label>
                                                    <input type="text" class="form-control form-control-user" name="nama"
                                                    value="<?php echo $data['nama_santri']; ?>">
                                                </div>

                                                <div class="form-group">
                                                    <label>Al-Qur'an</label>
                                                    <input type="text" class="form-control form-control-user" name="alquran"
                                                    value="<?php echo $data['alquran']; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>Tajwid</label>
                                                    <input type="text" name="tajwid" class="form-control form-control-user"
                                                    value="<?php echo $data['tajwid']; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>Fashohah</label>
                                                    <input type="text" name="fashohah" class="form-control form-control-user"
                                                    value="<?php echo $data['fashohah']; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>Tartil</label>
                                                    <input type="text" name="tartil" class="form-control form-control-user"
                                                    value="<?php echo $data['tartil']; ?>">
                                                </div>
                                                <button type="submit"  class="btn btn-primary btn-user btn-block">
                                                    Simpan
                                                </button>
                                            </form>

                                        </div>
                                        <div class="modal-footer">
                                           <button class="btn btn-danger" type="button" data-dismiss="modal">Cancel</button>
                                       </div>
                                   </div>
                               </div>

                           </div>

                           <!-- Delete Modal-->
                           <div class="modal fade" id="delete<?php $data['id_santri']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Apakah Anda Yakin Untuk Menghapus?</h5>
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">Klik "Delete" jika anda yakin untuk menghapus data dari <b><?php echo $data['nama_santri']; ?></b> .</div>
                                    <div class="modal-footer">
                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                        <form method="post" action="delete_santri.php?id=<?php echo $data['id_santri']; ?>">
                                            <button type="submit" class="btn btn-success" name="delete"><i class="fas fa-trash"></i> Delete</button>
                                        </form>


                                    </div>
                                </div>
                            </div>
                        </div>



                    <?php }; ?>



                </tbody>
            </table>


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

<!-- Delete Modal-->
<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Apakah Anda Yakin Untuk Menghapus?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">Klik "Delete" jika anda yakin untuk menghapus data.</div>
        <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-success" href=""><i class="fas fa-trash"></i> Delete</a>
        </div>
    </div>
</div>
</div>

<!-- karya Modal-->
<div class="modal fade" id="karya" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Data Karya Nominasi</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">

            <form class="user" >
                <div class="form-group">
                    <input type="file" class="form-control " id="image"
                    >
                </div>
                <div class="form-group">
                    <input type="text" class="form-control " id="judul"
                    placeholder="Judul Karya">
                </div>
                <div class="form-group">
                  <select class="form-control" name="peserta" id="">
                      <option value="">Pilih Peserta</option>
                      <option value=""> Nanas Risya</option>
                  </select>
              </div>

              <div class="form-group">
                  <select class="form-control" name="peserta" id="">
                      <option value="">Pilih Kategori</option>
                      <option value=""> Video Mars</option>
                  </select>
              </div>
              <div class="form-group">
                <input type="text" class="form-control form-control-user" id="description"
                placeholder="Description">
            </div>
            <a href="#" class="btn btn-primary btn-user btn-block">
                Save
            </a>
        </form>

    </div>
    <div class="modal-footer">
        <button class="btn btn-danger" type="button" data-dismiss="modal">Cancel</button>

    </div>
</div>
</div>
</div>


<!-- view kategori Modal-->
<div class="modal fade" id="viewkarya" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
 <div class="modal-content">
     <div class="modal-header">
         <h5 class="modal-title" id="exampleModalLabel">Data Karya Awards</h5>
         <button class="close" type="button" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">×</span>
         </button>
     </div>
     <div class="modal-body">
        <form class="user" >

            <div class="form-group">
              <td> <img width="50%" src="img/user-daftar.png" alt=""></td>
          </div>
          <div class="form-group">
            judul <br>
            <td>Malam Takbir</td>
        </div>
        <div class="form-group">
            Nama Peserta <br>
            <td>Nanas Risya</td>
        </div>
        <div class="form-group">
            Asal Peserta <br>
            <td>Ansor Jatim</td>
            <div class="form-group">
                Kategori <br>
                <td>Video Mars Ansor</td>
            </div>

        </form>

    </div>
    <div class="modal-footer">
     <button class="btn btn-danger" type="button" data-dismiss="modal">Close</button>
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