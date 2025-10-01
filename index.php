<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PTI - Universitas Gajayana Malang</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <link rel="icon" href="assets/img/logo/pti-logo.png" type="image/png">
    <!-- Favicon -->
    <link href="assets/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>
    <?php include "templates/spinner.php" ?>

    <?php include "templates/topbar.php" ?>

    <?php include "templates/navbar.php" ?>

    <?php
    if (isset($_GET['page'])) {
        include('pages/' . $_GET['page'] . '.php');
    } elseif (isset($_GET['page/layanan'])) {
        include('pages/layanan/' . $_GET['page/layanan'] . '.php');
    } else {
    ?>
        <!-- Carousel Start -->
        <div class="container-fluid p-0 mb-5">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="assets/img/scott-rodgerson-PSpf_XgOM5w-unsplash.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(0, 0, 0, .4);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <!-- <h5 class="text-white text-uppercase mb-3 animated slideInDown">PTI</h5> -->
                                <h1 class="display-3 text-white animated slideInDown mb-4">Pusat Teknologi Informasi Universitas Gajayana Malang</h1>
                                <!-- <p class="fs-5 fw-medium text-white mb-4 pb-2">Berperan strategis dalam meningkatkan kualitas layanan digital dan memastikan aksesibilitas teknologi bagi seluruh sivitas akademika.</p> -->
                                <a href="?page=about" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Selebihnya Tentang Kami</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->


        <!-- Service Start -->
        <!-- <div class="container-xxl py-5">
              <div class="container">
                  <div class="row g-4">
                      <div class="col-lg-4 col-md-6 service-item-top wow fadeInUp" data-wow-delay="0.1s">
                          <div class="overflow-hidden">
                              <img class="img-fluid w-100 h-100" src="assets/img/service-1.jpg" alt="">
                          </div>
                          <div class="d-flex align-items-center justify-content-between bg-light p-4">
                              <h5 class="text-truncate me-3 mb-0">Residential Plumbing</h5>
                              <a class="btn btn-square btn-outline-primary border-2 border-white flex-shrink-0" href=""><i class="fa fa-arrow-right"></i></a>
                          </div>
                      </div>
                      <div class="col-lg-4 col-md-6 service-item-top wow fadeInUp" data-wow-delay="0.3s">
                          <div class="overflow-hidden">
                              <img class="img-fluid w-100 h-100" src="assets/img/service-2.jpg" alt="">
                          </div>
                          <div class="d-flex align-items-center justify-content-between bg-light p-4">
                              <h5 class="text-truncate me-3 mb-0">Commercial Plumbing</h5>
                              <a class="btn btn-square btn-outline-primary border-2 border-white flex-shrink-0" href=""><i class="fa fa-arrow-right"></i></a>
                          </div>
                      </div>
                      <div class="col-lg-4 col-md-6 service-item-top wow fadeInUp" data-wow-delay="0.5s">
                          <div class="overflow-hidden">
                              <img class="img-fluid w-100 h-100" src="assets/img/service-3.jpg" alt="">
                          </div>
                          <div class="d-flex align-items-center justify-content-between bg-light p-4">
                              <h5 class="text-truncate me-3 mb-0">Emergency Servicing</h5>
                              <a class="btn btn-square btn-outline-primary border-2 border-white flex-shrink-0" href=""><i class="fa fa-arrow-right"></i></a>
                          </div>
                      </div>
                  </div>
              </div>
          </div> -->
        <!-- Service End -->


        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <h6 style="font-size: 23px;" class="text-secondary text-uppercase">Visi & Misi</h6>
                        <h1 style="font-size: 20px;" class="mb-4">Visi dan Misi Pusat Teknologi Informasi (PTI)</h1>
                        <p class="mb-4"><b>Visi:</b></p>
                        <p class="mb-4">Menjadi pusat layanan teknologi informasi yang inovatif dan terdepan dalam mendukung pengembangan akademik, penelitian, dan administrasi melalui pemanfaatan teknologi digital yang canggih, aman, dan efisien di lingkungan Universitas Gajayana.</p>
                        <p><b>Misi:</b></p>
                        <p class="fw-medium text-primary">Menyediakan infrastruktur digital yang handal dan berkualitas</p>
                        <p class="fw-medium text-primary">Meningkatkan aksesibilitas dan efisiensi layanan TI</p>
                        <p class="fw-medium text-primary">Memastikan keamanan dan kelancaran operasional sistem IT</p>
                        <p class="fw-medium text-primary">Mendukung pengembangan inovasi teknologi di lingkungan kampus</p>
                        <p class="fw-medium text-primary">Menjadi mitra strategis dalam digitalisasi kampus</p>
                        <p>Dengan visi dan misi ini, PTI Universitas Gajayana berkomitmen untuk menjadi pendorong utama dalam digitalisasi dan transformasi teknologi di seluruh aspek kampus.</p>
                    </div>
                    <div class="col-lg-6 pt-4" style="min-height: 500px;">
                        <div class="position-relative h-100 wow fadeInUp" data-wow-delay="0.5s">
                            <img class="position-absolute img-fluid w-100 h-100" src="assets/img/data center.jpg" style="object-fit: cover; padding: 0 0 50px 100px;" alt="">
                            <img class="position-absolute start-0 bottom-0 img-fluid bg-white pt-2 pe-2 w-50 h-50" src="assets/img/kotak-kecil.jpg" style="object-fit: cover;" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Fact Start -->
        <div class="container-fluid bg-light my-5 py-5">
            <div class="container">
                <div class="row g-4">
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                        <img src="assets/img/logo/google-logo.png" alt="" class="w-50">
                    </div>
                    <div class="col-md-6 col-lg-2 text-center wow fadeIn" data-wow-delay="0.3s">
                        <img src="assets/img/logo/icon-plus-logo.png" alt="" class="w-50">
                    </div>
                    <div class="col-md-6 col-lg-2 text-center wow fadeIn" data-wow-delay="0.5s">
                        <img src="assets/img/logo/ikn-logo.png" alt="" class="w-50">
                    </div>
                    <div class="col-md-6 col-lg-2 text-center wow fadeIn" data-wow-delay="0.7s">
                        <img src="assets/img/logo/jagoan-hosting-logo.png" alt="" class="w-50">
                    </div>
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                        <img src="assets/img/logo/microsoft-logo.png" alt="" class="w-50">
                    </div>
                </div>
            </div>
        </div>
        <!-- Fact End -->


        <!-- Service Start -->
        <div class="container-fluid py-5 px-4 px-lg-0">
            <div class="row g-0">
                <div class="col-lg-3 d-none d-lg-flex">
                    <div class="d-flex align-items-center justify-content-center bg-primary w-100 h-100">
                        <h1 class="display-3 text-white m-0" style="transform: rotate(-90deg);">Layanan PTI</h1>
                    </div>
                </div>
                <div class="col-md-12 col-lg-9">
                    <div class="ms-lg-5 ps-lg-5">
                        <div class="text-center text-lg-start wow fadeInUp" data-wow-delay="0.1s">
                            <h6 style="font-size: 23px;" class="text-secondary text-uppercase">Layanan Kami</h6>
                            <h1 style="font-size: 20px;" class="mb-5">Jelajahi Layanan Kami</h1>
                        </div>
                        <div class="owl-carousel service-carousel position-relative wow fadeInUp" data-wow-delay="0.1s">
                            <div class="bg-light p-4">
                                <div class="d-flex align-items-center justify-content-center border border-5 border-white mb-4" style="width: 75px; height: 75px;">
                                    <i class="fa fa-solid fa fa-globe fa-2x text-primary"></i>
                                </div>
                                <h4 class="mb-3" style="height: 60px;">Layanan Koneksi Internet</h4>
                                <p style="height: 220px;">Pusat Teknologi Informasi UNIGA menyediakan layanan akses internet yang stabil, cepat, dan aman bagi seluruh sivitas akademika.</p>
                                <a href="?page/layanan=koneksi_internet" class="btn bg-white text-primary w-100 mt-4">Read More<i class="fa fa-arrow-right text-secondary ms-2"></i></a>
                            </div>
                            <div class="bg-light p-4">
                                <div class="d-flex align-items-center justify-content-center border border-5 border-white mb-4" style="width: 75px; height: 75px;">
                                    <i class="fa fa-solid fa fa-cloud fa-2x text-primary"></i>
                                </div>
                                <h4 class="mb-3" style="height: 60px;">Layanan Web Hosting</h4>
                                <p style="height: 220px;">Layanan Web Hosting Pusat Teknologi Informasi (PTI) Universitas Gajayana (Uniga) bertujuan untuk mendukung kebutuhan pengembangan situs web bagi berbagai unit, organisasi, dan kegiatan akademik di lingkungan kampus.</p>
                                <a href="?page/layanan=web_hosting" class="btn bg-white text-primary w-100 mt-4">Read More<i class="fa fa-arrow-right text-secondary ms-2"></i></a>
                            </div>
                            <div class="bg-light p-4">
                                <div class="d-flex align-items-center justify-content-center border border-5 border-white mb-4" style="width: 75px; height: 75px;">
                                    <i class="fa fa-solid fa fa-envelope fa-2x text-primary"></i>
                                </div>
                                <h4 class="mb-3" style="height: 60px;">Layanan Email</h4>
                                <p style="height: 220px;">Layanan Email Universitas Gajayana (Uniga) yang disediakan oleh Pusat Teknologi Informasi (PTI) bertujuan untuk mendukung komunikasi resmi dan kolaborasi bagi seluruh sivitas akademika, termasuk dosen, mahasiswa, dan tenaga kependidikan.</p>
                                <a href="?page/layanan=email" class="btn bg-white text-primary w-100 mt-4">Read More<i class="fa fa-arrow-right text-secondary ms-2"></i></a>
                            </div>
                            <div class="bg-light p-4">
                                <div class="d-flex align-items-center justify-content-center border border-5 border-white mb-4" style="width: 75px; height: 75px;">
                                    <i class="fa fa-solid  fa fa-graduation-cap fa-2x text-primary"></i>
                                </div>
                                <h4 class="mb-3" style="height: 60px;">Layanan Akademik</h4>
                                <p style="height: 220px;">PTI memberikan layanan akademik berupa SiskaVega, Siska Online, SIMBA, PMB Online</p>
                                <a href="?page/layanan=akademik" class="btn bg-white text-primary w-100 mt-4">Read More<i class="fa fa-arrow-right text-secondary ms-2"></i></a>
                            </div>
                            <div class="bg-light p-4">
                                <div class="d-flex align-items-center justify-content-center border border-5 border-white mb-4" style="width: 75px; height: 75px;">
                                    <i class="fa fa-solid fa fa-book fa-2x text-primary"></i>
                                </div>
                                <h4 class="mb-3" style="height: 60px;">Layanan Jurnal Online</h4>
                                <p style="height: 220px;">PTI juga memberikan layanan jurnal online, seperti E-Journal, Portal E-Learning, </p>
                                <a href="?page/layanan=jurnal" class="btn bg-white text-primary w-100 mt-4">Read More<i class="fa fa-arrow-right text-secondary ms-2"></i></a>
                            </div>
                            <div class="bg-light p-4">
                                <div class="d-flex align-items-center justify-content-center border border-5 border-white mb-4" style="width: 75px; height: 75px;">
                                    <i class="fa fa-solid fa fa-desktop fa-2x text-primary"></i>
                                </div>
                                <h4 class="mb-3" style="height: 60px;">Layanan Lab Komputer</h4>
                                <p style="height: 220px;">Layanan lab komputer PTI memberikan layanan Jadwal dan Reservasi lab, Dukungan Teknis, Pelatihan Pengguna, Pemeliharaan Perangkat, Pengumpulan Data dan Analisis, Infrastruktur Jaringan</p>
                                <a href="?page/layanan=lab_kom" class="btn bg-white text-primary w-100 mt-4">Read More<i class="fa fa-arrow-right text-secondary ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->


        <!-- Booking Start -->
        <!-- <div class="container-fluid my-5 px-0">
              <div class="video wow fadeInUp" data-wow-delay="0.1s">
                  <button type="button" class="btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                      <span></span>
                  </button>

                  <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                          <div class="modal-content rounded-0">
                              <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                  16:9 aspect ratio
                                  <div class="ratio ratio-16x9">
                                      <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                                          allow="autoplay"></iframe>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>

                  <h1 class="text-white mb-4">Emergency Plumbing Service</h1>
                  <h3 class="text-white mb-0">24 Hours 7 Days a Week</h3>
              </div>
              <div class="container position-relative wow fadeInUp" data-wow-delay="0.1s" style="margin-top: -6rem;">
                  <div class="row justify-content-center">
                      <div class="col-lg-8">
                          <div class="bg-light text-center p-5">
                              <h1 class="mb-4">Book For A Service</h1>
                              <form>
                                  <div class="row g-3">
                                      <div class="col-12 col-sm-6">
                                          <input type="text" class="form-control border-0" placeholder="Your Name" style="height: 55px;">
                                      </div>
                                      <div class="col-12 col-sm-6">
                                          <input type="email" class="form-control border-0" placeholder="Your Email" style="height: 55px;">
                                      </div>
                                      <div class="col-12 col-sm-6">
                                          <select class="form-select border-0" style="height: 55px;">
                                              <option selected>Select A Service</option>
                                              <option value="1">Service 1</option>
                                              <option value="2">Service 2</option>
                                              <option value="3">Service 3</option>
                                          </select>
                                      </div>
                                      <div class="col-12 col-sm-6">
                                          <div class="date" id="date1" data-target-input="nearest">
                                              <input type="text"
                                                  class="form-control border-0 datetimepicker-input"
                                                  placeholder="Service Date" data-target="#date1" data-toggle="datetimepicker" style="height: 55px;">
                                          </div>
                                      </div>
                                      <div class="col-12">
                                          <textarea class="form-control border-0" placeholder="Special Request"></textarea>
                                      </div>
                                      <div class="col-12">
                                          <button class="btn btn-primary w-100 py-3" type="submit">Book Now</button>
                                      </div>
                                  </div>
                              </form>
                          </div>
                      </div>
                  </div>
              </div>
          </div> -->
        <!-- Booking End -->


        <!-- Team Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 style="font-size: 23px;" class="text-secondary text-uppercase">PTI Team</h6>
                    <h1 style="font-size: 20px;" class="mb-5">Our Team</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid" src="assets/img/user-icon.png" alt="">
                            </div>
                            <div class="team-text">
                                <div class="bg-light">
                                    <h6 class="fw-bold mb-0">Gunadi, M.Sc., Ph.D.</h6>
                                    <!-- <small>Designation</small> -->
                                </div>
                                <div class="bg-primary">
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid" src="assets/img/user-icon.png" alt="">
                            </div>
                            <div class="team-text">
                                <div class="bg-light">
                                    <h6 class="fw-bold mb-0">Andreas Prasetia, S.Si.,M.T.</h6>
                                    <!-- <small>Designation</small> -->
                                </div>
                                <div class="bg-primary">
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid" src="assets/img/user-icon.png" alt="">
                            </div>
                            <div class="team-text">
                                <div class="bg-light">
                                    <h6 class="fw-bold mb-0">Rizki Nur Iman, S.Kom., M.M.</h6>
                                    <!-- <small>Designation</small> -->
                                </div>
                                <div class="bg-primary">
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="team-item">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid" src="assets/img/user-icon.png" alt="">
                            </div>
                            <div class="team-text">
                                <div class="bg-light">
                                    <h6 class="fw-bold mb-0">Resti Rahayu, S.Kom.,M.M.</h6>
                                    <!-- <small>Designation</small> -->
                                </div>
                                <div class="bg-primary">
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->


        <!-- Testimonial Start -->
        <!-- <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
              <div class="container">
                  <div class="text-center">
                      <h6 class="text-secondary text-uppercase">Testimonial</h6>
                      <h1 class="mb-5">Our Clients Say!</h1>
                  </div>
                  <div class="owl-carousel testimonial-carousel position-relative wow fadeInUp" data-wow-delay="0.1s">
                      <div class="testimonial-item text-center">
                          <div class="testimonial-text bg-light text-center p-4 mb-4">
                              <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                          </div>
                          <img class="bg-light rounded-circle p-2 mx-auto mb-2" src="assets/img/testimonial-1.jpg" style="width: 80px; height: 80px;">
                          <div class="mb-2">
                              <small class="fa fa-star text-secondary"></small>
                              <small class="fa fa-star text-secondary"></small>
                              <small class="fa fa-star text-secondary"></small>
                              <small class="fa fa-star text-secondary"></small>
                              <small class="fa fa-star text-secondary"></small>
                          </div>
                          <h5 class="mb-1">Client Name</h5>
                          <p class="m-0">Profession</p>
                      </div>
                      <div class="testimonial-item text-center">
                          <div class="testimonial-text bg-light text-center p-4 mb-4">
                              <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                          </div>
                          <img class="bg-light rounded-circle p-2 mx-auto mb-2" src="assets/img/testimonial-2.jpg" style="width: 80px; height: 80px;">
                          <div class="mb-2">
                              <small class="fa fa-star text-secondary"></small>
                              <small class="fa fa-star text-secondary"></small>
                              <small class="fa fa-star text-secondary"></small>
                              <small class="fa fa-star text-secondary"></small>
                              <small class="fa fa-star text-secondary"></small>
                          </div>
                          <h5 class="mb-1">Client Name</h5>
                          <p class="m-0">Profession</p>
                      </div>
                      <div class="testimonial-item text-center">
                          <div class="testimonial-text bg-light text-center p-4 mb-4">
                              <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                          </div>
                          <img class="bg-light rounded-circle p-2 mx-auto mb-2" src="assets/img/testimonial-3.jpg" style="width: 80px; height: 80px;">
                          <div class="mb-2">
                              <small class="fa fa-star text-secondary"></small>
                              <small class="fa fa-star text-secondary"></small>
                              <small class="fa fa-star text-secondary"></small>
                              <small class="fa fa-star text-secondary"></small>
                              <small class="fa fa-star text-secondary"></small>
                          </div>
                          <h5 class="mb-1">Client Name</h5>
                          <p class="m-0">Profession</p>
                      </div>
                      <div class="testimonial-item text-center">
                          <div class="testimonial-text bg-light text-center p-4 mb-4">
                              <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                          </div>
                          <img class="bg-light rounded-circle p-2 mx-auto mb-2" src="assets/img/testimonial-4.jpg" style="width: 80px; height: 80px;">
                          <div class="mb-2">
                              <small class="fa fa-star text-secondary"></small>
                              <small class="fa fa-star text-secondary"></small>
                              <small class="fa fa-star text-secondary"></small>
                              <small class="fa fa-star text-secondary"></small>
                              <small class="fa fa-star text-secondary"></small>
                          </div>
                          <h5 class="mb-1">Client Name</h5>
                          <p class="m-0">Profession</p>
                      </div>
                  </div>
              </div>
          </div> -->
        <!-- Testimonial End -->

        <!-- footer  -->
        <?php include "templates/footer.php" ?>
        <!-- footer  -->
    <?php } ?>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/lib/wow/wow.min.js"></script>
    <script src="assets/lib/easing/easing.min.js"></script>
    <script src="assets/lib/waypoints/waypoints.min.js"></script>
    <script src="assets/lib/counterup/counterup.min.js"></script>
    <script src="assets/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="assets/lib/tempusdominus/js/moment.min.js"></script>
    <script src="assets/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="assets/js/main.js"></script>
    <script>
        document.getElementById("year").textContent = new Date().getFullYear();
    </script>
</body>

</html>