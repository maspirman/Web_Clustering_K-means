<?php 
session_start();
// hancurkan login (sesion member)
session_destroy();
echo "<script>alert('Anda Berhasil Log out');</script>";
echo "<script>location='../login.php';</script>";
?>