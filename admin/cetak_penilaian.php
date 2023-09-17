    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php 
    include '../db/koneksi.php';
    
    echo '<div class="table-responsive">';
    echo '<div class="grid-title">';
    echo '<p><center>Daftar Santri Putri Pondok Pesantren Darul Falah</center></p>';
    echo '</div>';
    echo '<table class="table table-bordered table-striped">';
    echo '<tr>';
    echo '<th>No</th>';
    echo '<th>Nama Lengkap</th>';
    echo '<th>Al-Quran</th>';
    echo '<th>Tajwid</th>';
    echo '<th>Fasohah</th>';
    echo '<th>Tartil</th>';
    
    echo '</tr>';
    $nomor=1;
    $ambil3=$koneksi->query("SELECT * FROM tb_santri_2");
    while ($data3=$ambil3->fetch_array()){

        echo '<tr>';
        echo '<td>'.$nomor++;'</td>';
        echo '<td>'.$data3['nama_santri'];'</td>';
        echo '<td>'.$data3['alquran'];'</td>';
        echo '<td>'.$data3['tajwid'];'</td>';
        echo '<td>'.$data3['fashohah'];'</td>';
        echo '<td>'.$data3['tartil'];'</td>';
        echo '</tr>';
    };
    echo '</table>';

    echo '</div>';
    echo '<script> window.print();</script>';
?>