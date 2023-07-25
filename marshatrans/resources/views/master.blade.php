<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Marsha Tour and Rent Car</title>

  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

</head>

<body>

  
  <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="/" class="logo d-flex align-items-center">
        <h1>MarshaRentcar<span>.</span></h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="/" class="active">Home</a></li>
          <li><a href="/unit">Units</a></li>
          <li><a href="blog.html">Blog</a></li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
      </nav>

    </div>
  </header>

  <section id="hero" class="hero">

    <div class="info d-flex align-items-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <h2 data-aos="fade-down">Welcome to <span>MarshaRentCar<span>.</span></span></h2>
            <p data-aos="fade-up">Rental Mobil Kota Malang dan Batu dengan harga termurah dan armada yang berkualitas</p>
            <a data-aos="fade-up" data-aos-delay="200" href="#get-started" class="btn-get-started">Get Started</a>
          </div>
        </div>
      </div>
    </div>

    <div id="hero-carousel" class="carousel slide">
      <div class="carousel-item active" style="background-image: url({{ asset('assets/img/hero-carousel/hero-carousel-1.jpg') }})"></div>
    </div>

  </section>

  <main id="main">
    <section id="get-started" class="constructions">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Kenapa Harus Marsha</h2>
        </div>

        <div class="row gy-4">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg" style="background-image: url({{ asset('assets/img/constructions-1.jpg') }});"></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">Harga Termurah</h4>
                    <p>Rental Mobil Kota Malang dan Batu dengan harga termurah dan armada yang berkualitas</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg" style="background-image: url({{ asset('assets/img/constructions-2.jpg') }});"></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">Armada Berkualitas</h4>
                    <p>Sunt deserunt maiores voluptatem autem est rerum perferendis rerum blanditiis. Est laboriosam qui iste numquam laboriosam voluptatem architecto. Est laudantium sunt at quas aut hic. Eum dignissimos.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg" style="background-image: url({{ asset('assets/img/constructions-3.jpg') }});"></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">Admin 24 Jam</h4>
                    <p>Dicta porro nobis. Velit cum in. Nesciunt dignissimos enim molestiae facilis numquam quae quaerat ipsam omnis. Neque debitis ipsum at architecto officia laboriosam odit. Ut sunt temporibus nulla culpa.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg" style="background-image: url({{ asset('assets/img/constructions-4.jpg') }});"></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">Tanpa Ribet</h4>
                    <p>Aut est quidem doloremque voluptatem magnam quis excepturi vero quia. Eum eos doloremque architecto illo at beatae dolore. Fugiat suscipit et sint ratione dolores. Aut aliquid ea dolores libero nobis.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>

    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Services</h2>
          <p>Voluptatem quibusdam ut ullam perferendis repellat non ut consequuntur est eveniet deleniti fignissimos eos quam</p>
        </div>

            <div class="service-item  position-center">
              <h3>Daftar Harga Sewa Mobil Malang - Batu</h3>
              <div class="table-responsive">
                <table class="table table-bordered" style="text-align: center;">
                  <thead>
                  <tr>
                    <td>No</td>
                    <td>Mobil</td>
                    <td>Jenis</td>
                    <td>Harga Unit</td>
                    <td>Harga Unit + driver</td>
                  </tr>
                </thead>
                @foreach ($unit as $u)
                <tbody>
                  <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{ $u->nama }}</td>
                    <td>{{$u->jenis}}</td>
                    <td>@currency($u->harga)</td>
                    <td>@currency($u->harga+200000)</td>
                  </tr>
                </tbody>
                  @endforeach
                </table>
              </div>
              <div class="keterangan">
                <p class="bold">*harga tersebut tidak termasuk bbm dan driver dalam kota ( luar kota beda harga )</p>
                <h4 class="sub-tittle">Syarat dan Ketentuan</h4>
                <p>1. KTP
                <br>2. HP
                </p>
              </div>
            </div>


    <section id="projects" class="projects">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Our Units</h2>
        </div>

        <div class="portfolio-isotope">

          <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
            
            @foreach ($unit as $u)
            <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling ">
              <div class="portfolio-content h-100">
                <img src="{{ asset('storage/public/unit-images/'.$u->logo)  }}" class="img-fluid" alt="">
                <div class="portfolio-info" style="text-align: center;">
                  <p>{{ $u->nama }}</p>
                  <a href="{{ asset('storage/public/unit-images/'.$u->logo) }}"
                  data-glightbox="title:{{ $u->nama }}; description: @currency($u->harga) <br> <a href=http://google.com>Sewa Sekarang</a>" class="glightbox preview-link">
                  <i class="bi bi-zoom-in"></i>
                  </a>
                  <a href="/unit-details" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div>
            @endforeach

          </div><!-- End Projects Container -->

        </div>

      </div>
    </section><!-- End Our Projects Section -->


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
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>