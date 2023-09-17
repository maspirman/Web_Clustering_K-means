<?php include 'header.php';
$ambil=$koneksi->query("SELECT * FROM settings");
$data=$ambil->fetch_array();

?>

<!-- Page Header Section Start Here -->
<section class="page-header bg_img padding-tb">
    <div class="overlay"></div>
    <div class="container">
        <div class="page-header-content-area">
            <h4 class="ph-title">Pengumuman Hasil Pembagian Kelas</h4>
            <ul class="lab-ul">
                <li><a href="index.php">Home</a></li>
                <li><a class="active">Hasil Seleksi</a></li>
            </ul>
        </div>
    </div>
</section>
<!-- Page Header Section Ending Here -->

<!-- Gallary section start here-->
<div class="gallery-section padding-tb">
    <div class="container">
        <ul class="filter-button-group lab-ul d-flex justify-content-center mb-4">
            <li class="filter-btn is-checked" data-filter="*">Semua Kelas <span class="filter-item-num">50</span></li>
            <li class="filter-btn" data-filter=".ula">Kelas A<span class="filter-item-num">19</span>
            </li>
            <li class="filter-btn" data-filter=".wustho">Kelas B <span class="filter-item-num">14</span>
            </li>
            <li class="filter-btn" data-filter=".ulya">Kelas C <span class="filter-item-num">17</span></li>
        </ul>
        <div class="col-lg-12 grid">
            <div class="grid-item ula">
                <div class="grid-inner">
                    <div class="grid-thumb">
                        <div class="table-responsive">
                            <div class="grid-title">
                                <h3><center>Daftar Santri Putri Kelas A</center></h3>
                                <a style="float-right;" href="cetak.php?id=a" class="btn btn-primary text-right"><i class="fas fa-print"> Download</i></a>
                                <br>
                            </div>
                            <table class="table table-bordered table-striped">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Lengkap</th>
                                    <th>Alamat</th>
                                    <th>Al-Qur'an</th>
                                    <th>Tajwid</th>
                                    <th>Fashohah</th>
                                    <th>Tartil</th>
                                    <th>Kelas</th>

                                </tr>
                                <?php $nomor=1;
                                $ambil=$koneksi->query("SELECT * FROM tb_hasil_clustering join tb_santri_2 where tb_hasil_clustering.id_santri = tb_santri_2.id_santri and tb_hasil_clustering.cluster='A'");
                                while ($data=$ambil->fetch_array()){

                                   ?>
                                   <tr>
                                    <td><?php echo $nomor++; ?></td>
                                    <td><?php echo $data['nama_santri']; ?></td>
                                    <td><?php echo $data['alamat']; ?></td>
                                    <td><?php echo $data['alquran']; ?></td>
                                    <td><?php echo $data['tajwid']; ?></td>
                                    <td><?php echo $data['fashohah']; ?></td>
                                    <td><?php echo $data['tartil']; ?></td>
                                    <td><span class="btn btn-success">A</span></td>
                                </tr>
                            <?php }; ?>
                        </table>

                    </div>
                </div>

            </div>
        </div>
        <div class="grid-item wustho">
            <div class="grid-inner">
                <div class="grid-thumb">
                    <div class="table-responsive">
                        <div class="grid-title">
                            <h3><center>Daftar Santri Putri Kelas B</center></h3>
                            <a style="float-right;" href="cetak.php?id=b" class="btn btn-primary text-right"><i class="fas fa-print"> Download</i></a>
                            <br>
                        </div>
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>No</th>
                                <th>Nama Lengkap</th>
                                <th>Alamat</th>
                                <th>Al-Qur'an</th>
                                <th>Tajwid</th>
                                <th>Fashohah</th>
                                <th>Tartil</th>
                                <th>Kelas</th>

                            </tr>
                            <?php $nomor=1;
                            $ambil2=$koneksi->query("SELECT * FROM tb_hasil_clustering join tb_santri_2 where tb_hasil_clustering.id_santri = tb_santri_2.id_santri and tb_hasil_clustering.cluster='B'");
                            while ($data2=$ambil2->fetch_array()){

                               ?>
                               <tr>
                                <td><?php echo $nomor++; ?></td>
                                <td><?php echo $data2['nama_santri']; ?></td>
                                <td><?php echo $data2['alamat']; ?></td>
                                <td><?php echo $data2['alquran']; ?></td>
                                <td><?php echo $data2['tajwid']; ?></td>
                                <td><?php echo $data2['fashohah']; ?></td>
                                <td><?php echo $data2['tartil']; ?></td>
                                <td><span class="btn btn-success">B</span></td>
                            </tr>
                        <?php }; ?>
                    </table>

                </div>
            </div>

        </div>
    </div>
    <div class="grid-item ulya">
        <div class="grid-inner">
            <div class="grid-thumb">
                <div class="table-responsive">
                    <div class="grid-title">
                        <h3><center>Daftar Santri Putri Kelas C</center></h3>
                        <a style="float-right;" href="cetak.php?id=c" class="btn btn-primary text-right"><i class="fas fa-print"> Download</i></a>
                        <br>
                    </div>
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>No</th>
                            <th>Nama Lengkap</th>
                            <th>Alamat</th>
                            <th>Al-Qur'an</th>
                            <th>Tajwid</th>
                            <th>Fashohah</th>
                            <th>Tartil</th>
                            <th>Kelas</th>

                        </tr>
                        <?php $nomor=1;
                        $ambil3=$koneksi->query("SELECT * FROM tb_hasil_clustering join tb_santri_2 where tb_hasil_clustering.id_santri = tb_santri_2.id_santri and tb_hasil_clustering.cluster='C'");
                        while ($data3=$ambil3->fetch_array()){

                           ?>
                           <tr>
                            <td><?php echo $nomor++; ?></td>
                            <td><?php echo $data3['nama_santri']; ?></td>
                            <td><?php echo $data3['alamat']; ?></td>
                            <td><?php echo $data3['alquran']; ?></td>
                            <td><?php echo $data3['tajwid']; ?></td>
                            <td><?php echo $data3['fashohah']; ?></td>
                            <td><?php echo $data3['tartil']; ?></td>
                            <td><span class="btn btn-success">C</span></td>
                        </tr>
                    <?php }; ?>
                </table>

            </div>
        </div>

    </div>
</div>

</div>
</div>
</div>
<!-- Gallary section end here-->

<?php include 'footer.php'; ?>