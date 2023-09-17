           
<?php 
include '../db/koneksi.php';
$id=$_GET['id'];
$koneksi->query("UPDATE tb_santri_2 set alquran='$_POST[alquran]', tajwid='$_POST[tajwid]', fashohah='$_POST[fashohah]', tartil='$_POST[tartil]'  where id_santri='$id'");


// echo "<script type='text/javascript'>
// setTimeout(function () { 
//     swal({
//         title: 'Data berhasil diubah.',
//         type: 'success',
//         timer: 3200,
//         showConfirmButton: true
//         });   
//         },10);  
//         window.setTimeout(function(){ 
//             window.location.replace('nilai.php');
//             } ,3200); 
//             </script>";
echo "<div class='alert alert-info'>Data Tersimpan</div>";
echo "<meta http-equiv='refresh' content='1;url=nilai.php'>";

?>