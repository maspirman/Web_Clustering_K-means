<?php include 'header.php';
$ambil=$koneksi->query("SELECT * FROM settings");
$data=$ambil->fetch_array();

?>

<!-- Banner Section start here -->
<section class="banner-section">
    <div class="container">
        <div class="row align-items-center flex-column-reverse flex-md-row">
            <div class="col-md-6">
                <div class="banner-item">
                    <div class="banner-inner">
                        <div class="banner-thumb">
                            <img src="assets/images/banner/01.png" alt="Banner-image">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="banner-item">
                    <div class="banner-inner">
                        <div class="banner-content align-middle">

                            <h1><span class="">PONDOK PESANTREN <br class="d-none d-lg-block">
                            DARUL FALAH I </span>CUKIR DIWEK JOMBANG</h1>

                            <a href="#tentang" class="lab-btn mt-3">Sejarah <i class="icofont-heart-alt"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section end here -->

<!-- About section start here -->
<section class="about-section padding-tb shape-1" id="tentang">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-12">
                <div class="lab-item">
                    <div class="lab-inner">
                        <div class="lab-content">
                            <div class="header-title text-start m-0">
                                <h5>Sejarah Tentang</h5>
                                <h2 class="mb-0">PONDOK PESANTREN DARUL FALAH I CUKIR DIWEK JOMBANG</h2>
                            </div>
                            <h5 class="my-4">Sejarah Singkat Berdirinya</h5>
                            <p><?php echo $data['tentang']; ?></p>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="lab-item">
                    <div class="lab-inner">
                        <div class="lab-thumb">
                            <div class="img-grp">
                                <div class="about-circle-wrapper">
                                    <div class="about-circle-2"></div>
                                    <div class="about-circle"></div>
                                </div>
                                <div class="about-fg-img">
                                    <img src="assets/images/about/02.png" alt="about-image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About section end here -->

<!-- Feature Section Start Here -->
<section class="feature-section bg-ash padding-tb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-1 col-sm-6 col-12"></div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="lab-item feature-item">
                    <div class="lab-inner">
                        <div class="lab-thumb">
                            <img src="assets/images/feature/02.png" alt="feature-image">
                        </div>
                        <div class="lab-content">
                            <h5>VISI</h5>
                            <p>Mempersiapkan generasi muslimah berkualitas yang mampu menghadapi tantangan masa depan dalam era globalisasi. 
                            </p>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="lab-item feature-item">
                    <div class="lab-inner">
                        <div class="lab-thumb">
                            <img src="assets/images/feature/02.png" alt="feature-image">
                        </div>
                        <div class="lab-content">
                            <h5>MISI</h5>
                            <p><li>A.  Menyelenggarakan pembelajaran meliputi kajian al-qur’an dan kitab salaf</li>
                              <li>  B.  Menyelenggarakan progam tahfidz al-qur’an dengan metode yang efektif</li>
                              <li>C.  Mengarahkan santri pada pola hidup mandiri, terampil, serta berkepribadian islami</li>
                          </p>

                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-3 col-sm-6 col-12">
            <div class="lab-item feature-item">
                <div class="lab-inner">
                    <div class="lab-thumb">
                        <img src="assets/images/feature/03.png" alt="feature-image">
                    </div>
                    <div class="lab-content">
                        <h5>TUJUAN</h5>
                        <p>Mengarahkan para santri menjadi muslimah yang beriman, berpengetahuan agama secara luas serta berkepribadian yang mulia, dalam pandangan Allah dan manusia/masyarakat. </p>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-1 col-sm-6 col-12"></div>
    </div>
</div>
</section>
<!-- Feature Section End Here -->





<?php include 'footer.php'; ?>