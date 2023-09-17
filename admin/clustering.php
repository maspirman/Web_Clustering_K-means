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
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-trophy"></i>
                    <span>Data Master</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Data Santri & Penilaian:</h6>
                        <a class="collapse-item" href="santri.php">Data Santri</a>
                        <a class="collapse-item" href="kriteria.php">Data Kriteria</a>
                        <a class="collapse-item " href="nilai.php">Data Penilaian</a>
                    </div>
                </div>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Hitung
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
                    <h6 class="collapse-header">Data Cluster</h6>
                    <a class="collapse-item active" href="clustering.php">Clustering</a>
                    <a class="collapse-item" href="hasil.php">Hasil</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Charts -->
        <li class="nav-item">
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

            <!-- Sidebar Message -->
            

        </ul>
        <!-- End of Sidebar -->

        <?php include 'nav.php'; ?>


        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Data Penilaian Santri</h1>
            </div>


            <div class="row">


                <div class="col-lg-12">

                    <!-- Dropdown Card Example -->
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <!-- Basic Card Example -->

                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-success">Data Penilaian Santri 
                            </h6>
                        </div>
                        <div class="card-body">
                           <div class="form-group">
                            <?php 

                            $query = $koneksi->query("SELECT * FROM tb_santri_2");

                            ?>
                     <!-- <form method='POST' >
                        <div class='form-group'>
                            <label>Jumlah Cluster</label>
                            <input type='text' class='form-control' id='jumlah_cluster' value='3'
                            disabled>
                        </div>
                    </form> -->
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Santri</th>
                                    <th>Al-Qur'an</th>
                                    <th>Tajwid</th>
                                    <th>Fashohah</th>
                                    <th>Tartil</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $nomor=1;
                                while($data=$query->fetch_assoc()){
                                    ?>
                                    <tr>
                                        <td><?php echo $nomor++; ?></td>
                                        <td align="center" class="text-center"><?php echo $data['nama_santri']; ?></td>
                                        <td align="center" class="text-center"><?php echo $data['alquran']; ?></td>
                                        <td align="center" class="text-center"><?php echo $data['tajwid']; ?></td>
                                        <td align="center" class="text-center"><?php echo $data['fashohah']; ?></td>
                                        <td align="center" class="text-center"><?php echo $data['tartil']; ?></td>

                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>


                </div> 
                <form method="post">
                    <button class="btn btn-success" name="proses">Proses</button>


                </form>

                <?php if (!isset($_POST['proses'])) {
                    echo 'data belum dihitung';
                }else{
                    echo '<form method="post">';
                    echo'<button class="btn btn-danger" name="reset">Reset</button>';

                    echo'</form>';
                } ?>







            </div>
        </div>


    </div>
    <?php if (isset($_POST['proses'])) {?>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Hasil Perhitungan</h4>
                </div>


                <?php

                $query = $koneksi->query("SELECT * FROM tb_santri_2");

    // Check connection
                if (mysqli_connect_errno())
                {
                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                }
                $data=[];
                $nama=[];
                while($row=$query->fetch_assoc()){
                    $data[]=$row;
                    $nama[]=$row['nama_santri'];
                }
    //hitung Euclidean Distance Space

                function eucDistance(array $a, array $b) {
                    return
                    array_sum(
                        array_map(
                            function($x, $y) {
                                return abs($x - $y) ** 2;
                            }, $a, $b
                        )
                    ) ** (1/2);
                }
                function jarakEuclidean($data=array(),$centroid=array()){
                    return sqrt(pow(($data[0]-$centroid[0]),2) + pow(($data[1]-$centroid[1]),2)+pow(($data[2]-$centroid[2]),2) + pow(($data[3]-$centroid[3]),2));
                }

                function jarakTerdekat($jarak_ke_centroid=array(),$centroid){
                    foreach ($jarak_ke_centroid as $key => $value) {
                        if(!isset($minimum)){
                            $minimum=$value;
                            $cluster=($key+1);
                            continue;
                        }
                        else if($value<$minimum){
                            $minimum=$value;
                            $cluster=($key+1);
                        }
                    }
                    return array(
                        'cluster'=>$cluster,
                        'value'=>$minimum,
                    );
                }

                function perbaruiCentroid($table_iterasi,&$hasil_cluster){
                    $hasil_cluster=[];
        //looping untuk mengelompokan x dan y sesuai cluster
                    foreach ($table_iterasi as $key => $value) {
                        $hasil_cluster[($value['jarak_terdekat']['cluster']-1)][0][]= $value['data'][0];
                        $hasil_cluster[($value['jarak_terdekat']['cluster']-1)][1][]= $value['data'][1];
                        $hasil_cluster[($value['jarak_terdekat']['cluster']-1)][2][]= $value['data'][2];
                        $hasil_cluster[($value['jarak_terdekat']['cluster']-1)][3][]= $value['data'][3];

                    }
                    $new_centroid=[];
                    foreach ($hasil_cluster as $key => $value) {
                        $new_centroid[$key]= [
                            array_sum($value[0])/count($value[0]),
                            array_sum($value[1])/count($value[1]),
                            array_sum($value[2])/count($value[2]),
                            array_sum($value[3])/count($value[3])
                        ]; 
                    }
        //sorting berdasarkan cluster
                    ksort($new_centroid);
                    return $new_centroid;
                }

                function centroidBerubah($centroid,$iterasi){
        $centroid_lama = flatten_array($centroid[($iterasi-1)]); //flattern array
        $centroid_baru = flatten_array($centroid[$iterasi]); //flatten array
        //hitbandingkan centroid yang lama dan baru jika berubah return true, jika tidak berubah/jumlah sama=0 return false
        $jumlah_sama=0;
        for($i=0;$i<count($centroid_lama);$i++){
            if($centroid_lama[$i]===$centroid_baru[$i]){
                $jumlah_sama++;
            }
        }
        return $jumlah_sama===count($centroid_lama) ? false : true; 
    }

    function flatten_array($arg) {
        return is_array($arg) ? array_reduce($arg, function ($c, $a) { return array_merge($c, flatten_array($a)); },[]) : [$arg];
    }

    function pointingHasilCluster($hasil_cluster){
        $result=[];
        foreach ($hasil_cluster as $key => $value) {
            for ($i=0; $i<count($value[0]);$i++) { 
                $result[$key][]=[$hasil_cluster[$key][0][$i],$hasil_cluster[$key][1][$i]];
            }

        }
        return ksort($result);
    }

    //start program
    // get data dari database
    
    // cek koneksi
    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit;
    }
    $query = $koneksi->query("SELECT * FROM tb_santri_2");
    $data=[];
    //masukan data santri dan nilai ke array data
    while($row=$query->fetch_assoc()){
        $data[]=[$row['alquran'],$row['tajwid'],$row['fashohah'],$row['tartil']];
    }
    
    //jumlah cluster
    $cluster = 3;
    $variable_0 = 'alquran';
    $variable_1 = 'tajwid';
    $variable_2 = 'fashohah';
    $variable_3 = 'tartil';

    //centroid awal ambil 
    $centroid[0][]=[
        $data[0][0],
        $data[0][1],
        $data[0][2],
        $data[0][3]
    ];
    $centroid[0][]=[
        $data[4][0],
        $data[4][1],
        $data[4][2],
        $data[4][3]
    ];
    $centroid[0][]=[
        $data[9][0],
        $data[9][1],
        $data[9][2],
        $data[9][3]
    ];
    
    
    $hasil_iterasi=[];
    $hasil_cluster=[];

    //iterasi
    $iterasi=0;
    while(true){
        $table_iterasi=array();
        //untuk setiap data ke i (x dan y)
        foreach ($data as $key => $value) {
            //untuk setiap table centroid pada iterasi ke i
            $table_iterasi[$key]['data']=$value;
            foreach ($centroid[$iterasi] as $key_c => $value_c) {
                //hitung jarak euclidean 
                $table_iterasi[$key]['jarak_ke_centroid'][]=eucDistance($value,$value_c);    
            }
            //hitung jarak terdekat dan tentukan cluster nya
            $table_iterasi[$key]['jarak_terdekat']=jarakTerdekat($table_iterasi[$key]['jarak_ke_centroid'],$centroid);
        }
        array_push($hasil_iterasi, $table_iterasi);
        $centroid[++$iterasi]=perbaruiCentroid($table_iterasi,$hasil_cluster);
        $lanjutkan=centroidBerubah($centroid,$iterasi);
        $boolval = boolval($lanjutkan) ? 'ya' : 'tidak';
        // echo 'proses iterasi ke-'.$iterasi.' : lanjutkan iterasi ? '.$boolval.'<br>';
        if(!$lanjutkan)
            break;
        //loop sampai setiap nilai centroid sama dengan nilai centroid sebelumnya
    } 
    ?>
    <div class="card-body">
        <ul class="nav nav-tabs nav-tabs-solid nav-tabs-rounded nav-justified">
            <li class="nav-item"><a class="nav-link active" href="#solid-rounded-justified-tab1" data-toggle="tab">Inisialisai</a></li>
            <?php foreach ($hasil_iterasi as $key => $value) { ?>
                <li class="nav-item"><a class="nav-link" href="#solid-rounded-justified-iterasi-<?php echo $key; ?>" data-toggle="tab">Iterasi ke <?php echo ($key+1); ?></a></li>
            <?php }  ?>
        </ul>
        <div class="tab-content">
            <div class="tab-pane show active" id="solid-rounded-justified-tab1">

                <div class="card card-body">
                    <h2>Inisialisasi</h2>
                    <div class="row">
                        <div class="col-md-12">
                          <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th rowspan="1">Centroid</th>
                                        <th rowspan="1"><?php echo $variable_0; ?></th>
                                        <th rowspan="1"><?php echo $variable_1; ?></th>
                                        <th rowspan="1"><?php echo $variable_2; ?></th>
                                        <th rowspan="1"><?php echo $variable_3; ?></th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($centroid[0] as $key_c => $value_c) { ?>
                                        <tr>
                                            <td align="center"><?php echo ($key_c+1); ?></td>
                                            <td align="center"><?php echo $value_c[0]; ?></td>
                                            <td align="center"><?php echo $value_c[1]; ?></td>
                                            <td align="center"><?php echo $value_c[2]; ?></td>
                                            <td align="center"><?php echo $value_c[3]; ?></td>

                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 justify-content-md-center">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th rowspan="1">Data ke-i</th>
                                        <th rowspan="1"><?php echo $variable_0; ?></th>
                                        <th rowspan="1"><?php echo $variable_1; ?></th>
                                        <th rowspan="1"><?php echo $variable_2; ?></th>
                                        <th rowspan="1"><?php echo $variable_3; ?></th>


                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data as $key_c => $value_c) { ?>
                                        <tr>
                                            <td align="center"><?php echo ($key_c+1); ?></td>
                                            <td align="center"><?php echo $value_c[0]; ?></td>
                                            <td align="center"><?php echo $value_c[1]; ?></td>
                                            <td align="center"><?php echo $value_c[2]; ?></td>
                                            <td align="center"><?php echo $value_c[3]; ?></td>

                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <?php
        foreach ($hasil_iterasi as $key => $value) { ?>
            <div class="tab-pane" id="solid-rounded-justified-iterasi-<?php echo ($key); ?>">

                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th rowspan="1" class="text-center">Centroid</th>
                                <th rowspan="1" class="text-center"><?php echo $variable_0; ?></th>
                                <th rowspan="1" class="text-center"><?php echo $variable_1; ?></th>
                                <th rowspan="1" class="text-center"><?php echo $variable_2; ?></th>
                                <th rowspan="1" class="text-center"><?php echo $variable_3; ?></th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($centroid[$key] as $key_c => $value_c) { ?>
                                <tr>
                                    <td align="center" class="text-center"><?php echo ($key_c+1); ?></td>
                                    <td align="center" class="text-center"><?php echo $value_c[0]; ?></td>
                                    <td align="center" class="text-center"><?php echo $value_c[1]; ?></td>
                                    <td align="center" class="text-center"><?php echo $value_c[2]; ?></td>
                                    <td align="center" class="text-center"><?php echo $value_c[3]; ?></td>
                                    
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>

                <br>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th rowspan="2" class="text-center">Data ke i</th>
                                <th rowspan="2" class="text-center">Nama</th>
                                <th rowspan="2" class="text-center" colspan=1><?php echo $variable_0; ?></th>
                                <th rowspan="2" class="text-center" colspan=1><?php echo $variable_1; ?></th>
                                <th rowspan="2" class="text-center" colspan=1><?php echo $variable_2; ?></th>
                                <th rowspan="2" class="text-center" colspan=1><?php echo $variable_3; ?></th>
                                <th rowspan="1" class="text-center" colspan="<?php echo $cluster; ?>"> Jarak ke centroid</th>
                                <th rowspan="2" class="text-center" >Jarak terdekat</th>
                                <th rowspan="2" class="text-center" colspan=2>Cluster</th>
                            </tr>
                            <tr>
                                <?php for ($i=1; $i <=$cluster ; $i++) { ?> 
                                    <th rowspan="1" class="text-center"><?php echo $i; ?></th>
                                <?php }?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($value as $key_data => $value_data) { 

                                ?> 

                                <tr>
                                    <td align="center" class="text-center" ><?php echo $key_data+1; ?></td>
                                    <td align="center" class="text-center"><?php echo $nama[$key_data];  ?></td>
                                    <td align="center" class="text-center"><?php echo $value_data['data'][0]; ?></td>
                                    <td align="center" class="text-center"><?php echo $value_data['data'][1]; ?></td>
                                    <td align="center" class="text-center"><?php echo $value_data['data'][2]; ?></td>
                                    <td align="center" class="text-center"><?php echo $value_data['data'][3]; ?></td>


                                    <?php
                                    foreach ($value_data['jarak_ke_centroid'] as $key_jc => $value_jc) { ?>
                                        <td align="center" class="text-center"><?php echo $value_jc; ?></td>
                                        <?php 
                                    }
                                    ?>
                                    <td align="center" class="text-center"><?php echo $value_data['jarak_terdekat']['value']; ?></td>
                                    <td align="center" class="text-center"><?php  
                                    if ($value_data['jarak_terdekat']['cluster']==1){echo "1";}
                                    if ($value_data['jarak_terdekat']['cluster']==2){echo "2";}
                                    if ($value_data['jarak_terdekat']['cluster']==3){echo "3";}
                                ?></td>
                            </tr>

                        <?php } ?>
                    </tbody>
                </table>
            </div>

        </div>
    <?php } ?>
       <!--  <div class="tab-pane" id="solid-rounded-justified-tab3">
            Tab content 3
        </div>
        <div class="tab-pane" id="solid-rounded-justified-tab3">
            Tab content 3
        </div>
        <div class="tab-pane" id="solid-rounded-justified-tab3">
            Tab content 3
        </div>
        <div class="tab-pane" id="solid-rounded-justified-tab3">
            Tab content 3
        </div>
        <div class="tab-pane" id="solid-rounded-justified-tab3">
            Tab content 3
        </div> -->
    </div>
</div>
<?php }else{ ?>

<?php }; ?>
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

<!-- admin Modal-->
<div class="modal fade" id="admin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    <input type="text" class="form-control " id="nama"
                    placeholder="Nama">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" name="" placeholder="Email">
                </div>

                <div class="form-group">
                  <input type="password" placeholder="password"> 
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
           <h5 class="modal-title" id="exampleModalLabel">Data Admin Awards</h5>
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