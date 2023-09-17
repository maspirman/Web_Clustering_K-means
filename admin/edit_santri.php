<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>           
<?php 
include '../db/koneksi.php';
$id=$_GET['id'];
$koneksi->query("UPDATE tb_santri_2 set nama_santri='$_POST[nama]', tempat_lahir='$_POST[tempat]', tanggal_lahir='$_POST[tgl]', alamat='$_POST[alamat]', no_hp='$_POST[no_hp]' where id_santri='$id'");


echo "<div class='alert alert-info'>Data Tersimpan</div>";
echo "<meta http-equiv='refresh' content='1;url=santri.php'>";

?>