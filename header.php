<!-- pemangilan koneksi database -->
<?php include 'db/koneksi.php'; 
$ambil=$koneksi->query("SELECT * FROM settings");
$data=$ambil->fetch_array();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Darul Falah</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/x-icon/02.png">

    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/icofont.min.css">
    <link rel="stylesheet" href="assets/css/lightcase.css">
    <link rel="stylesheet" href="assets/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <!-- preloader start here -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- preloader ending here -->

    <!-- Header Section Starts Here -->
    <header class="header-3 pattern-1">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-3 col-12">
                    <div class="mobile-menu-wrapper d-flex flex-wrap align-items-center justify-content-between">
                        <div class="header-bar d-lg-none">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="logo">
                            <a href="index.php">
                                <img src="assets/images/logo/logo.png" alt="logo">
                            </a>
                        </div>
                        <div class="ellepsis-bar d-lg-none">
                            <i class="fas fa-ellipsis-h"></i>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-12">
                    <div class="header-top">
                        <div class="header-top-area">
                            <ul class="left lab-ul">
                                <li>
                                    <i class="icofont-ui-call"></i> <span><?php echo $data['no_tlp']; ?></span>
                                </li>
                                <li>
                                    <i class="fas fa-map-marker-alt"></i> <?php echo $data['alamat']; ?>
                                </li>
                            </ul>

                        </div>
                    </div>
                    <div class="header-bottom">
                        <div class="header-wrapper">
                            <div class="menu-area justify-content-between w-100">
                                <ul class="menu lab-ul">
                                    <li>
                                        <a href="index.php">Beranda</a>
                                    </li>
                                    <li>
                                        <a href="#tentang">Tentang Pesantren</a>
                                    </li>
                                    <li>
                                        <a href="hasil.php">Hasil Seleksi</a>
                                    </li>
                                    <li>
                                        <a href="#footer">Contact</a>
                                    </li>
                                </ul>
                                <div class="prayer-time d-none d-lg-block">
                                    <a href="login.php" class="prayer-time-btn"><i class="icofont-clock-time"></i> Login</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Section Ends Here-->