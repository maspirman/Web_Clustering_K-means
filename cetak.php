    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/icofont.min.css">
    <link rel="stylesheet" href="assets/css/lightcase.css">
    <link rel="stylesheet" href="assets/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <?php 
    include 'db/koneksi.php';
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
