<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Marsha Tour and Rent Car</title>

  <!-- Favicons -->
  <link href="{{ asset('') }}assets/img/favicon.png" rel="icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('') }}assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('') }}assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{ asset('') }}assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="{{ asset('') }}assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{ asset('') }}assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{ asset('') }}assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('') }}assets/css/main.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <h1>MarshaRentcar<span>.</span></h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="/">Home</a></li>
          <li><a href="/unit" class="active">Units</a></li>
          <li><a href="/blog">Blog</a></li>
          <li><a href="/contact">Contact</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{ asset('') }}assets/img/hero-carousel/hero-carousel-1.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Unit Details</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Unit Details</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Projet Details Section ======= -->
    <section id="project-details" class="project-details">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="position-relative h-100">
          <div class="slides-1 portfolio-details-slider swiper">
            <div class="swiper-wrapper align-items-center">

              <div class="swiper-slide">
                <img src="{{ asset('') }}assets/img/projects/avanza.png" alt="">
              </div>

              <div class="swiper-slide">
                <img src="{{ asset('') }}assets/img/projects/detail-1.webp" alt="">
              </div>

              <div class="swiper-slide">
                <img src="{{ asset('') }}assets/img/projects/detail-2.jpg" alt="">
              </div>

            </div>
            <div class="swiper-pagination"></div>
          </div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>

        </div>

        <div class="row justify-content-between gy-4 mt-4">

          <div class="col-lg-8">
            <div class="portfolio-description">
              <h2>Avanza</h2>
              <p>
                Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
              </p>
              <p>
                Amet consequatur qui dolore veniam voluptatem voluptatem sit. Non aspernatur atque natus ut cum nam et. Praesentium error dolores rerum minus sequi quia veritatis eum. Eos et doloribus doloremque nesciunt molestiae laboriosam.
              </p>

              <p>
                Impedit ipsum quae et aliquid doloribus et voluptatem quasi. Perspiciatis occaecati earum et magnam animi. Quibusdam non qui ea vitae suscipit vitae sunt. Repudiandae incidunt cumque minus deserunt assumenda tempore. Delectus voluptas necessitatibus est.

              <p>
                Sunt voluptatum sapiente facilis quo odio aut ipsum repellat debitis. Molestiae et autem libero. Explicabo et quod necessitatibus similique quis dolor eum. Numquam eaque praesentium rem et qui nesciunt.
              </p>

            </div>
          </div>

          <div class="col-lg-3">
            <div class="portfolio-info">
              <h3>Unit Information</h3>
              <ul>
                <li><strong>Tahun Pembuatan</strong> <span>2021</span></li>
                <li><strong>BBM</strong> <span>Pertalite</span></li>
                <li><strong>Harga</strong> <span>Rp. 200.000</span></li>
                <li><a href="#" class="btn-visit align-self-start">Sewa Sekarang</a></li>
              </ul>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Projet Details Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-content position-relative">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>MarshaRentcar</h3>
              <p>
                Jl. Raya Ampeldento <br> Kec. Pakis, Kabupaten Malang <br>Jawa Timur 65154 <br><br>
                <strong>Phone:</strong> +1 5589 55488 55<br>
              </p>
              <div class="social-links d-flex mt-3">
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-whatsapp"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-phone"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-instagram"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End footer info column-->

        </div>
      </div>
    </div>

  </footer>
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('') }}assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('') }}assets/vendor/aos/aos.js"></script>
  <script src="{{ asset('') }}assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{ asset('') }}assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{ asset('') }}assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{ asset('') }}assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="{{ asset('') }}assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('') }}assets/js/main.js"></script>

</body>

</html>