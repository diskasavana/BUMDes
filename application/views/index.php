<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>BUMdes AMARTA</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url('assets/img/favicon.jpg') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/img/icon.jpg') ?>" rel="stylesheet">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url('assets/vendor/aos/aos.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/boxicons/css/boxicons.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/glightbox/css/glightbox.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/swiper/swiper-bundle.min.css') ?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/css/custom.css') ?>" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/responsive.css') ?>">

  <style>
    #carousel1 {
      top: 60%;
      transform: translateY(-60%);
    }
  </style>


  <!-- =======================================================
  * Template Name: Scaffold
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/scaffold-bootstrap-metro-style-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <div class="description">
        <div class="logo">
          <img src="<?= base_url('assets/img/logo 3.png" alt=""') ?>">
        </div>
      </div>
      <div class="logo me-auto">
        <h><a href="index.html">BUMDesa AMARTA</a></h>
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href='welcome'>Home </a></li>
          <li class="dropdown"><a href="#"><span>Unit Usaha</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a class="nav-link scrollto" href='sampah'>Unit Pengelolaan Sampah</a></li>
              <li><a class="nav-link scrollto" href='tamkul'>Unit Usaha Taman Kuliner</a></li>
              <li><a class="nav-link scrollto" href='kolam'>Unit Usaha Kolam Renang</a></li>
              <li><a class="nav-link scrollto" href='beras'>Produksi Beras Sleman</a></li>
              <li><a class="nav-link scrollto" href='toko'>Toko Desa</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href='mitra'>Mitra usaha </a></li>
          <li><a class="nav-link scrollto " href='ecommerce'>E-Commerce</a></li>
          <li><a class="nav-link scrollto " href='berita'>Berita</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="header-social-links d-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="https://www.facebook.com/profile.php?id=100064683969849&_rdc=1&_rdr" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="carouselExampleInterval" class="carousel slide">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="video-container d-block w-100">
            <iframe src="https://www.youtube.com/embed/JVtsM0cr-Uc?si=4doO9tYNCNwz7Qa4&modestbranding=0&rel=0" frameborder="0" allow="clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
        <div class="carousel-item">
          <img src="<?= base_url('assets/img/new.png') ?>" class="d-block w-100" alt="" style="max-width: 100%; height: 100%;">
          <div id="carousel1" class="carousel-caption my-auto" style="margin-right: -500px;">
          <h5 class="display-1 fw-bolder fs-1 text-capitalize" style="font-weight: bold; font-size: 40em;">Tentang Kami</h5>
            <a href="<?= base_url('detail'); ?>" class="text-capitalize mt-2 btn btn-primary btn-sm" style="margin-right: 10px;">Baca Selengkapnya</a>
            <!-- <p>Kerja sama BUMDES dengan Universitas Amikom Yogyarta</p> -->
          </div>
        </div>
        <div class="carousel-item">
          <img src="<?= base_url('assets/img/Hero.jpg') ?>" class="d-block w-100" alt="" style="max-width: 100%; height: 100%;">
          <div id="carousel1" class="carousel-caption my-auto">
            <h5 class="display-1 fw-bolder fs-1 text-capitalize">Bergerak Bersama Masyarakat</h5>
            <!-- <button class="text-uppercase fs-3 mt-5 btn btn-success px-4 py-2 fs-5 mt-5">Baca Selengkapnya</button> -->
            <p>Kerja sama BUMDES dengan Universitas Amikom Yogyarta</p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
    </div>
    <!-- <div class="video-container"> -->
    <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/JVtsM0cr-Uc?si=q_zbXmZuX6XawWJL&amp;controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> -->
    <!-- <iframe src="https://www.youtube.com/embed/JVtsM0cr-Uc?si=4doO9tYNCNwz7Qa4&modestbranding=0&rel=0"  frameborder="0" allow="clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
    <!-- </div> -->
  </section><!-- End Hero -->
  <!-- 
  <section id="content" class="jumbotron text-center">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 pt-5 pt-lg-0 d-flex flex-column justify-content-center" data-aos="fade-up">
        <div>
          <h2 class="display-4">Bergerak Bersama Masyarakat</h2>
          <p class="lead">Kerja sama BUMDes dengan Universitas Amikom Yogyakarta</p> -->
  <!-- <a href="<?php echo base_url('login'); ?>" class="btn btn-primary btn-lg">Get Started</a> -->
  <!-- </div>
      </div>
      <div class="col-lg-6 hero-img" data-aos="fade-left">
        <img src="<?= base_url('assets/img/Hero.jpg') ?>" class="img-fluid" alt="" style="max-width: 100%; height: 100%;">
      </div>
    </div>
  </div>
</section> -->



  <main id="main" class="jumbotron">
    <!-- ======= About Section ======= -->
    <!-- <section id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="col-md-6" data-aos="zoom-in">
                    <img src="<?= base_url('assets/img/Logo-img.png') ?>" class="card-img" alt="Gambar Card" style="float: left;">
                </div>
                <div class="col-lg-6 pt-5 pt-lg-0 d-flex flex-column justify-content-center" data-aos="fade-up">
                    <div>
                        <h1 class="display-4">Tentang BUMDesa</h1>
                        <p class="lead">BUMDesa Amarta Pandowoharjo merupakan suatu kumpulan dari usaha-usaha yang berlokasikan di Desa Pandowoharjo, Kec. Sleman. Kab. Sleman. Yogyakarta. Berdiri sejak tahun 2016</p>
                        <a href="<?php echo base_url('detail'); ?>" class="btn btn-primary btn-lg">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- End About Section -->

    <!-- ======= Team Section ======= -->
    <section id="Pengurus" class="team">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2>Pengurus Bumdes</h2>
          <p>Berikut adalah beberapa pengurus BUMDes Amarta</p>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in">
              <div class="pic"><img src="assets/img/Pengurus/Pengurus-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Agus Setyanta, S.Sos.</h4>
                <span>Direktur Bumdes Amarta</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="assets/img/Pengurus/Pengurus-2.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Eko Susetyo</h4>
                <span>Bendahara Bumdes Amarta</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href="https://www.facebook.com/profile.php?id=100064683969849&_rdc=1&_rdr" class="facebook"><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="200">
              <div class="pic"><img src="assets/img/Pengurus/Pengurus-3.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Sri Nurtamsi</h4>
                <span>Sekretaris Bumdes Amarta</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Team Section -->
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Galeri Batik Sekar Idaman</h2>
          <p>Batik Sekar Idaman menyediakan berbagai macam batik dengan motif yang sangat cantik dan elegan yang sangat cocok digunakan untuk sehari-hari ataupun acara resmi karena sangat fashionable tetapi tidak mengurangi nilai batik itu sendiri.</p>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
          <div class="col-lg-4 col-md-6 portfolio-item ">
            <div class="portfolio-wrap">
              <img src="assets/img/UMKM/UMKM1.jpg" class="img-fluid" alt="">
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item ">
            <div class="portfolio-wrap">
              <img src="assets/img/UMKM/UMKM2.jpg" class="img-fluid" alt="">
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item ">
            <div class="portfolio-wrap">
              <img src="assets/img/UMKM/UMKM3.jpg" class="img-fluid" alt="">
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/UMKM/UMKM4.jpg" class="img-fluid" alt="">
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/UMKM/UMKM5.jpg" class="img-fluid" alt="">
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/UMKM/UMKM6.jpg" class="img-fluid" alt="">
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/UMKM/UMKM7.jpg" class="img-fluid" alt="">
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/UMKM/UMKM8.jpg" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/UMKM/UMKM9.jpg" class="img-fluid" alt="">
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="Utama" class="testimonials">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2>Galeri Kami</h2>
          <p>Berikut adalah beberapa potret kegiatan yang telah berlangsung di BUMDes Amarta.</p>
        </div>
        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="1000">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img src="assets/img/Utama/Utama1.png" alt="galery">
            </div><!-- End testimonial item -->
            <div class="swiper-slide">
              <img src="assets/img/Utama/Utama2.png" alt="galery">
              <!-- </div> -->
            </div><!-- End testimonial item -->
            <div class="swiper-slide">
              <img src="assets/img/Utama/Utama3.png" alt="galery">
            </div><!-- End testimonial item -->
            <div class="swiper-slide">
              <img src="assets/img/Utama/Utama4.png" alt="galery">
              <h4></h4>
            </div><!-- End testimonial item -->
            <div class="swiper-slide">
              <img src="assets/img/Utama/Utama5.png" alt="galery">
            </div><!-- End testimonial item -->
            <div class="swiper-slide">
              <img src="assets/img/Utama/Utama8.png" alt="galery">
            </div>
            <div class="swiper-slide">
              <img src="assets/img/Utama/Utama7.png" alt="galery">
            </div>
            <div class="swiper-slide">
              <img src="assets/img/Utama/Utama 10.jpg" alt="galery">
            </div>
            <div class="swiper-slide">
              <img src="assets/img/Utama/Utama 11.jpg" alt="galery">
            </div>
          </div>
        </div>
        <div class="swiper-pagination">
        </div>
      </div>
    </section><!-- End Testimonials Section -->



    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">
        <div class="row" data-aos="zoom-in">
          <div class="col-lg-9 text-center text-lg-start">
            <h3>Kirim Pesan Kepada Kami</h3>
            <p> Tidak tahu harus mulai dari mana? Beri tahu kami tentang pertanyaan, saran, dan keluhan Anda disini.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="https://wa.me/6287838523909">087838523909</a>
          </div>
        </div>
      </div>
    </section><!-- End Cta Section -->


    <!-- <main id="main" data-aos="fade" data-aos-delay="0"> -->
    <!-- ======= Katalog Section ======= -->
    <section id="katalog">
      <div class="container">
        <div class="section-title">
          <h2>Katalog Kami</h2>
          <p>Berikut adalah katalog BUMDes Amarta Pandowoharjo.</p>
        </div>
        <!-- Baris pertama -->
        <div class="flex-wrap justify-center">
          <iframe src="<?= base_url('assets/docs/Katalog_BUMDES_Amarta.pdf') ?>" width="100%" height="900px"></iframe>
        </div>

      </div>
    </section><!-- Akhir Bagian Katalog -->
    <!-- </main>End #main -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2>Pertanyaan yang Sering Diajukan</h2>
        </div>
        <ul class="faq-list">
          <li>
            <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Kapan BUMDes Amarta Didirikan? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq1" class="collapse" data-bs-parent=".faq-list">
              <p>
                BUMDes Amarta berdiri pada tanggal 6 Juni 2016.
              </p>
            </div>
          </li>
          <li>
            <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Unit usaha apa saja yang telah bergerak pada BUMdes Amarta? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq2" class="collapse" data-bs-parent=".faq-list">
              <p>
                BUMDes Amarta bergerak pada Instalasi Pengelolaan Sampah Terpadu (IPST) dengan lima unit usaha, yaitu Unit Pengelolaan Sampah, Unit Usaha Taman Kuliner, Unit Usaha Kolam Renang, Usaha Produksi Beras sleman dan Toko Desa.
              </p>
            </div>
          </li>
          <li>
            <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Penghasilan BUMDes untuk siapa? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq3" class="collapse" data-bs-parent=".faq-list">
              <p>
                Bagi hasil BUMDes ini dapat digunakan untuk menopang desa, seperti pembangunan desa, pengembangan masyarakat, membantu masyarakat miskin melalui hibah dan lain-lain.
              </p>
            </div>
          </li>
          <li>
            <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Apa Visi BUMDes Amarta? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq4" class="collapse" data-bs-parent=".faq-list">
              <p>
                Bersinergi Mewujudkan Desa Mandiri.
              </p>
            </div>
          </li>
          <li>
            <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">Apa tugas Direktur BUMDes? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq5" class="collapse" data-bs-parent=".faq-list">
              <p>
                Melaksanaan pengelolaan BUMDes. Mengembangkan BUMDes dengan memberdayakan sumber daya dan potensi desa. Membangun kemitraan dengan lembaga desa lain. Menyusun rencana kerja dan rencana anggaran tahunan bersama pemerintah desa.
              </p>
            </div>
          </li>
          <li>
            <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">Alamat BUMDes Amarta? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq6" class="collapse" data-bs-parent=".faq-list">
              <p>
                Niron, Pandowoharjo, Kec. Sleman, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55512.
              </p>
            </div>
          </li>
        </ul>
      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2>Hubungi Kami</h2>
        </div>
        <div class="row">
          <div class="col-lg-5 d-flex align-items-stretch" data-aos="fade-right">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Lokasi</h4>
                <p>Niron, Pandowoharjo, Sleman, Sleman Regency, Special Region of Yogyakarta 55512</p>
              </div>
              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>
              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Telepon:</h4>
                <p>087838523909</p>
              </div>
              <!-- <iframe src="https://www.bing.com/maps?q=bumdes+pandowoharjo&FORM=HDRSC7&cp=-7.797398%7E110.366592&lvl=11.0" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe> -->
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7907.619337920803!2d110.3579020413105!3d-7.7035635678357846!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5f3a07af7a8f%3A0xe8ae35338e5dcb42!2sNiron%2C%20Pandowoharjo%2C%20Sleman%2C%20Sleman%20Regency%2C%20Special%20Region%20of%20Yogyakarta!5e0!3m2!1sen!2sid!4v1696994496401!5m2!1sen!2sid" width="380" height="450" style="border:0;" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch" data-aos="fade-left">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Nama</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6 mt-3 mt-md-0">
                  <label for="name">Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <label for="name">Judul</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group mt-3">
                <label for="name">Pesan</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Kirim Pesan</button></div>
            </form>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>BUMDes</h3>
              <p>
                BUMDes Amarta merupakan unit usaha milik desa Pandowoharjo. Saat ini Amarta memiliki lima unit usaha
                dan telah bekerjasama dengan berbagai Mitra
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="https://www.facebook.com/profile.php?id=100064683969849&_rdc=1&_rdr" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Tentang Kami</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="welcome">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="detail">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="welcome#Pengurus">Pengurus BUMDes</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Alamat</h4>
            <p>
              Niron, Pandowoharjo, Sleman,<br>
              Sleman Regency, Special Region of Yogyakarta 55512<br><br>
              <strong>Phone:</strong> 087838523909<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>
          <div class="col-lg-4 col-md-6 footer-newsletter">
            <!-- <h4>Bagaimana Pendapatmu Tentang Kami</h4>
            <p></p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Kirim">
            </form> -->
            <h4>Mitra Kami</h4>

            <div class="row">
              <div class="col">
                <img src="assets/img/Mitra/BRI.jpg" class="img-fluid" alt="">
              </div>

              <div class="col">
                <img src="assets/img/Mitra/PRSI.png" class="img-fluid" alt="">
              </div>
              <div class="col">
                <img src="assets/img/Mitra/jejamuran.png" class="img-fluid" alt="">
              </div>
              <div class="col">
                <img src="assets/img/Mitra/sampoerna.png" class="img-fluid" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>BUMDes</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/scaffold-bootstrap-metro-style-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>