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

      <a href="/adm-index" class="logo d-flex align-items-center">
        <h1>Admin<span>.</span></h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="/adm-index">Users</a></li>
          <li><a href="/unit-adm" class="active">Unit</a></li>
          <li><a href="/blog">Blog</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{ asset('') }}assets/img/hero-carousel/hero-carousel-1.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
        <h2>Admin</h2>
         <ol>
           <li><a href="/unit-adm">Unit</a></li>
           <li>Data</li>
         </ol>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
          <div class="col-lg-14">

                <div style="margin-bottom: 1rem">
                  <a href="{{ route('unit-adm.create') }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Tambah</a>  
                </div>
                @if (Session::has('sucsess'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  Data Anda Berhasil Ditambah
                   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                 </div>
                 @elseif (Session::has('sucsessedt'))
                 <div class="alert alert-success alert-dismissible fade show" role="alert">
                  Data Anda Berhasil Diedit
                   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                 </div>
                @endif
                <div>
                    <div class="table-responsive mt-7">
                        <table class="table table-hover table-bordered">
                        <thead class="table-primary" style="text-align: center;">
                            <tr>
                                <td>No</td>
                                <td>Nama Mobil</td>
                                <td>Jenis</td>
                                <td>Harga Sewa</td>
                                <td>Foto Mobil</td>
                                <td>Foto Tampak Dalam</td>
                                <td>Foto Tampak Depan</td>
                                <td>Deskripsi</td>
                                <td>Created At</td>
                                <td>Update At</td>
                                <td>Menu</td>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($unit as $u)
                            <tr> 
                                <td>{{$loop->iteration}}</td>
                                <td>{{$u->nama}}</td>
                                <td>{{$u->jenis}}</td>
                                <td>@currency($u->harga)</td>
                                <td>
                                  @if($u->logo)
                                    <img src="{{ asset('storage/public/unit-images/'.$u->logo) }}" style="height: 100px;width:auto;">
                                    @else 
                                    <span>No image found!</span>
                                    @endif
                                </td>
                                <td>
                                  @if($u->dalam)
                                  <img src="{{ asset('storage/public/unit-images/'.$u->dalam) }}" style="height: 100px;width:auto;">
                                  @else 
                                  <span>No image found!</span>
                                  @endif
                                </td>
                                <td>
                                  @if($u->depan)
                                  <img src="{{ asset('storage/public/unit-images/'.$u->depan) }}" style="height: 100px;width:auto;">
                                  @else 
                                  <span>No image found!</span>
                                  @endif
                                </td>
                                <td>{{$u->deskripsi}}</td>
                                <td>{{$u->created_at}}</td>
                                <td>{{$u->updated_at}}</td>
                                <td>
                                  <form class="py-1" method="POST" action="{{ url('unit-adm/'.$u->id) }}">
                                    @csrf
                                    @method('DELETE')
                                  <button type="submit" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></a></button>
                                  </form> 
                                  <a href="{{ url('unit/'.$u->id) }}" class="btn btn-sm btn-primary"><i class="fa-solid fa-pen-to-square"></i></a><span>
                                </td>
                            </tr>
                          @endforeach
                        </tbody>
                        </table>
                    </div>
                </div>

            </div>
          </div><!-- End Info Item -->

      </div>
    </section><!-- End Contact Section -->

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

  <div id="preloader"></div>

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