<?php
include "koneksi.php";
// Check if the form is submitted
if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $komentar = $_POST['comment'];

    // Insert data into the database
    $query = "INSERT INTO tb_komen (id, komentar, id_user) VALUES ('', '$komentar', '$username')";
    $hasil = mysqli_query($conn, $query);

    if($hasil) {
      header("Location: get a quote.php");
        exit();
    } else {
        echo "Gagal menyimpan komentar.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Gulat Pedia</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="biru.png" rel="icon">
  <link href="biru.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Logis
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Gulat Pedia</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.html">Beranda</a></li>
          <li><a href="about.html">Tentang</a></li>
          <li><a href="services.html">Atlet</a></li>
          <li><a href="pricing.html">Sejarah</a></li>
          <li><a href="dropdown.html">Juara</a></li>
          <li><a href="lainya.html">Atlet Indonesia</a></li>
          <li><a href="ciri.html">Ciri Khas</a></li>
          <li><a class="get-a-quote" href="get a quote.php" class="active">Contact</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('pedia.webp');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Contact</h2>
              <p></p>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Contact</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.088191724155!2d112.624730408354!3d-7.989828979644609!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6281b75ea5485%3A0x90fd5c6fcedf6acf!2sSMK%20Negeri%204%20Kota%20Malang!5e0!3m2!1sid!2sid!4v1699930397401!5m2!1sid!2sid" width="1120" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
       
        </div><!-- End Google Maps -->

        <div class="row gy-4 mt-4">

          <div class="col-lg-4">

            <div class="info-item d-flex">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h4>Location:</h4>
                <p>SMKN 4 MALANG</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h4>Email:</h4>
                <p>kautsaraksay424@gmail.com</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex">
              <i class="bi bi-phone flex-shrink-0"></i>
              <div>
                <h4>Call:</h4>
                <p>+1 5589 55488 55</p>
              </div>
            </div><!-- End Info Item -->

            <div id="comments">
    <table>
        <!-- Formulir Komentar Baru -->
        <form id="commentForm" method="post" onsubmit="return tampilkanAlert()">
            <tr>
                <td><label for="username">Nama Pengguna:</label></td>
                <td><input type="text" id="username" name="username" required></td>
            </tr>

            <tr>
                <td><label for="comment">Komentar:</label></td>
                <td><textarea id="comment" name="comment" rows="4" required></textarea></td>
            </tr>

            <tr>
                <td><input type="submit" name="submit"></td>
            </tr>
        </form>
    </table>

    <script>
        // Fungsi untuk menampilkan pesan alert saat formulir disubmit
        function tampilkanAlert() {
            alert("Komentar telah berhasil disubmit!");
            return true; // Mengembalikan nilai true agar formulir bisa disubmit
        }
    </script>
</div>
<!-- End Contact Form -->
          
      </section><!-- End Contact Section -->

          </div>
          <section id="team" class="team pt-0">
            <div class="container" data-aos="fade-up">
      
              <div class="section-header">
                <span>Web developer</span>
                <h2>Web Developer</h2>
      
              </div>
      
            
      
          <!-- ======= Testimonials Section ======= -->
          <section id="testimonials" class="testimonials">
            <div class="container">
      
              <div class="slides-1 swiper" data-aos="fade-up">
                <div class="swiper-wrapper">
      
      
                  <div class="swiper-slide">
                    <div class="testimonial-item">
                      <img src="gua.jpg" class="testimonial-img" alt="">
                      <h3>Aksay Kautsar</h3>
                      <h4></h4>
                      <div class="stars">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        See you again in the next match.
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                    </div>
                  </div><!-- End testimonial item -->
      
                </div>
                <div class="swiper-pagination"></div>
              </div>
      
            </div>
          </section><!-- End Testimonials Section -->
      
        </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="index.html" class="logo d-flex align-items-center">
            <span>Gulat Pedia</span>
          </a>
          <p>Sekali lagi, kami ucapkan terima kasih atas kunjungan Anda. Jika ada pertanyaan atau saran, jangan ragu untuk menghubungi kami. Sampai jumpa di konten selanjutnya!</p>
          <div class="social-links d-flex mt-4">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Terms of service</a></li>
            <li><a href="#">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">Web Development</a></li>
            <li><a href="#">Product Management</a></li>
            <li><a href="#">Marketing</a></li>
            <li><a href="#">Graphic Design</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>
            Aksay Kautsar <br>
            SMKN 4 MALANG<br>
            Indonesia <br><br>
            <strong>Phone:</strong> +1 5589 55488 55<br>
            <strong>Email:</strong> kautsaraksay424@gmail.com<br>
          </p>

        </div>

      </div>
    </div>

    <div class="container mt-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Gulat Pedia</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/ -->
        Designed by <a href="https://bootstrapmade.com/">Aksay Kautsar</a>
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->


  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>