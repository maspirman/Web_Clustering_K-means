    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php 
    include '../db/koneksi.php';
    $param=$_GET['id'];

    if ($param =='a'){ 
    	echo '<div class="table-responsive">';
    	echo '<div class="grid-title">';
    	echo '<p><center>Daftar Santri Putri Kelas A</center></p>';
    	echo '</div>';
    	echo '<table class="table table-bordered table-striped">';
    	echo '<tr>';
    	echo '<th>No</th>';
    	echo '<th>Nama Lengkap</th>';
    	echo '<th>Al-Quran</th>';
    	echo '<th>Tajwid</th>';
    	echo '<th>Fasohah</th>';
    	echo '<th>Tarlil</th>';
    	echo '<th>Kelas</th>';

    	echo '</tr>';
    	$nomor=1;
    	$ambil3=$koneksi->query("SELECT * FROM tb_hasil_clustering join tb_santri_2 where tb_hasil_clustering.id_santri = tb_santri_2.id_santri and tb_hasil_clustering.cluster='A'");
    	while ($data3=$ambil3->fetch_array()){


    		echo '<tr>';
    		echo '<td>'.$nomor++;'</td>';
    		echo '<td>'.$data3['nama_santri'];'</td>';
    		echo '<td>'.$data3['alquran'];'</td>';
    		echo '<td>'.$data3['tajwid'];'</td>';
    		echo '<td>'.$data3['fashohah'];'</td>';
    		echo '<td>'.$data3['tartil'];'</td>';
    		echo '<td><span class="btn btn-success">A</span></td>';
    		echo '</tr>';
    	};
    	echo '</table>';

    	echo '</div>';
    	echo '<script> window.print();</script>';
    }elseif($param =='b'){ 

    	echo '<div class="table-responsive">';
    	echo '<div class="grid-title">';
    	echo '<p><center>Daftar Santri Putri Kelas B</center></p>';
    	echo '</div>';
    	echo '<table class="table table-bordered table-striped">';
    	echo '<tr>';
    	echo '<th>No</th>';
    	echo '<th>Nama Lengkap</th>';
    	echo '<th>Al-Quran</th>';
    	echo '<th>Tajwid</th>';
    	echo '<th>Fasohah</th>';
    	echo '<th>Tartil</th>';
    	echo '<th>Kelas</th>';

    	echo '</tr>';
    	$nomor=1;
    	$ambil3=$koneksi->query("SELECT * FROM tb_hasil_clustering join tb_santri_2 where tb_hasil_clustering.id_santri = tb_santri_2.id_santri and tb_hasil_clustering.cluster='B'");
    	while ($data3=$ambil3->fetch_array()){


    		echo '<tr>';
    		echo '<td>'.$nomor++;'</td>';
    		echo '<td>'.$data3['nama_santri'];'</td>';
    		echo '<td>'.$data3['alquran'];'</td>';
    		echo '<td>'.$data3['tajwid'];'</td>';
    		echo '<td>'.$data3['fashohah'];'</td>';
    		echo '<td>'.$data3['tartil'];'</td>';
    		echo '<td><span class="btn btn-success">B</span></td>';
    		echo '</tr>';
    	};
    	echo '</table>';

    	echo '</div>';
    	echo '<script> window.print();</script>';
    	
    }elseif($param ='c'){ 
    	echo '<div class="table-responsive">';
    	echo '<div class="grid-title">';
    	echo '<p><center>Daftar Santri Putri Kelas C</center></p>';
    	echo '</div>';
    	echo '<table class="table table-bordered table-striped">';
    	echo '<tr>';
    	echo '<th>No</th>';
    	echo '<th>Nama Lengkap</th>';
    	echo '<th>Al-Quran</th>';
    	echo '<th>Tajwid</th>';
    	echo '<th>Fasohah</th>';
    	echo '<th>Tartil</th>';
    	echo '<th>Kelas</th>';

    	echo '</tr>';
    	$nomor=1;
    	$ambil3=$koneksi->query("SELECT * FROM tb_hasil_clustering join tb_santri_2 where tb_hasil_clustering.id_santri = tb_santri_2.id_santri and tb_hasil_clustering.cluster='C'");
    	while ($data3=$ambil3->fetch_array()){


    		echo '<tr>';
    		echo '<td>'.$nomor++;'</td>';
    		echo '<td>'.$data3['nama_santri'];'</td>';
    		echo '<td>'.$data3['alquran'];'</td>';
    		echo '<td>'.$data3['tajwid'];'</td>';
    		echo '<td>'.$data3['fashohah'];'</td>';
    		echo '<td>'.$data3['tartil'];'</td>';
    		echo '<td><span class="btn btn-success">C</span></td>';
    		echo '</tr>';
    	};
    	echo '</table>';

    	echo '</div>';
    	echo '<script> window.print();</script>';
    }else{
    	echo "Data Tidak Ditemukan";
    }
    ?>
