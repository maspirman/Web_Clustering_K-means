<?php 
$ambil=$koneksi->query("SELECT * FROM settings");
$data=$ambil->fetch_array();

?>
<!-- Footer Section start here -->
<footer class="footer-section" id="footer" style="background-image: url(assets/images/bg-images/footer-bg.png);">
    <div class="footer-top">
        <div class="container">
            <div class="row g-3 justify-content-center g-lg-0">
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="footer-top-item lab-item">
                        <div class="lab-inner">
                            <div class="lab-thumb">
                                <img src="assets/images/footer/footer-top/01.png" alt="Phone-icon">
                            </div>
                            <div class="lab-content">
                                <span> <?php echo $data['no_tlp']; ?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="footer-top-item lab-item">
                        <div class="lab-inner">
                            <div class="lab-thumb">
                                <img src="assets/images/footer/footer-top/02.png" alt="email-icon">
                            </div>
                            <div class="lab-content">
                                <span> <?php echo $data['email']; ?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="footer-top-item lab-item">
                        <div class="lab-inner">
                            <div class="lab-thumb">
                                <img src="assets/images/footer/footer-top/03.png" alt="location-icon">
                            </div>
                            <div class="lab-content">
                                <span> <?php echo $data['alamat']; ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-middle padding-tb tri-shape-3">
        <div class="container">
            <div class="row"></div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer-bottom-content text-center">
                        <p>&copy;2022 <a href="index.php">Darul Falah</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section end here -->



<!-- scrollToTop start here -->
<a href="#" class="scrollToTop"><i class="icofont-bubble-up"></i><span class="pluse_1"></span><span
    class="pluse_2"></span></a>
    <!-- scrollToTop ending here -->


    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/fontawesome.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/swiper.min.js"></script>
    <script src="assets/js/circularProgressBar.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/lightcase.js"></script>
    <script src="assets/js/functions.js"></script>
</body>

</html>