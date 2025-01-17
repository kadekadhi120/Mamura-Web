<!DOCTYPE html>
<html>

<head>
    <style>
        body {
          font-family: Arial;
        }
        
        * {
          box-sizing: border-box;
        }
        
        form.example input[type=text] {
          padding: 10px;
          font-size: 17px;
          border: 1px solid grey;
          float: left;
          width: 80%;
          background: #f1f1f1;
        }
        
        form.example button {
          float: left;
          width: 20%;
          padding: 10px;
          background: #2196F3;
          color: white;
          font-size: 17px;
          border: 1px solid grey;
          border-left: none;
          cursor: pointer;
        }
        
        form.example button:hover {
          background: #0b7dda;
        }
        
        form.example::after {
          content: "";
          clear: both;
          display: table;
        }
        </style>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="">

  <title> Mamura </title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>

<body>

  <div class="hero_area">

    <div class="hero_bg_box">
      <div class="bg_img_box">
        <img src="images/hero-bg.png" alt="">
      </div>
    </div>

    <!-- header section strats -->
      <!-- header section starts -->
      <header class="header_section">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
            <a class="navbar-brand" href="index.html">
                <span>Mamura</span>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('/seller_page') }}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#penjualan">Penjualan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#kelola_produk">Kelola Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/seller_profile') }}"><i class="fa fa-user" aria-hidden="true"></i></a>
                    </li>
                    <!-- Tambahkan bagian logout di samping seller_profile -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                           Logout <i class="fa fa-sign-out" aria-hidden="true"></i>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>

    <!-- end header section -->

    <!-- slider section -->
    <section class="slider_section ">
          <div class="container ">
            <div class="row">
            <div class="d-flex flex-column align-items-center"></div>
              <div class="col-md-6 ">
                <div class="detail-box text-center">
                    <div class="heading_container heading_center">
                  <h1>
                    Hai Penyelamat <br>
                    Food Waste!
                  </h1>
                </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="img-box">
                  <img src="images/custpage.png" alt="">
                </div>
              </div>
            </div>
              </div>
          </div>
        </div>
      </div>
        <li data-target="#customCarousel1" class="active"></li>
    </div>

  </section>
    <!-- end slider section -->
  </div>

<!-- Penjualan section -->
<section  id="penjualan" class="cp_section layout_padding">
    <div class="container text-center">
      <div class="heading_container heading_center">
        <h2>
          <span>Penjualan Produk</span>
        </h2>
      </div>
  
      <!-- Informasi transaksi -->
      <div class="row mt-4">
        <div class="col-md-6 mb-4">
          <div class="card border-success">
            <div class="card-body p-4">
              <h5 class="card-title">Transaksi Berlangsung</h5>
              <p class="card-text">Ada 3 transaksi sedang berlangsung.</p>
              <a href="{{ url('/seller_transaksi') }}" class="btn btn-success btn-sm">Lihat Detail</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 mb-4">
          <div class="card border-info">
            <div class="card-body p-4">
              <h5 class="card-title">Transaksi Selesai</h5>
              <p class="card-text">Telah selesai 15 transaksi.</p>
              <a href="{{ url('/history_transaksi') }}" class="btn btn-info btn-sm">Lihat Detail</a>
            </div>
          </div>
        </div>
      </div>
  
      <!-- Daftar produk lainnya -->
      <div class="row mt-3">
        <!-- Tambahkan produk lainnya di sini -->
      </div>
    </div>
  </section>
  <!-- end kategori section -->

<!-- kategori section -->
<section class="cp_section layout_padding">
    <div class="container text-center">
      <div class="heading_container heading_center">
        <h2>
          <span>Produk Anda</span>
        </h2>
      </div>
      <div class="row">
      @foreach($products as $product)
        <div class="col-sm-3 mb-3 mb-sm-0">
            <div class="card">
                <div class="card-body">
                    <img src="{{ asset($product->FotoProduk) }}" class="card-img-top" alt="{{ $product->Nama }}">
                    <h5 class="card-title">{{ $product->Nama }}</h5>
                    <p class="card-price">Rp {{ number_format($product->Harga, 0, ',', '.') }}</p>
                    <p class="card-description">{{ $product->Deskripsi }}</p>
                    <p class="card-stock">Stok: {{ $product->Stock }}</p>
                    <a href="{{ route('products.edit', ['ProductID' => $product->ProductID]) }}" class="btn btn-primary btn-sm">Edit</a>
                </div>
            </div>
        </div>
    @endforeach
        </div>
      </div>
    </div>
  </section>
  <!-- end kategori section -->

  
<!-- kelola produk section -->
<section id="kelola_produk" class="cp_section layout_padding">
  <div class="container text-center">
    <div class="heading_container heading_center">
      <h2>
        <span>Kelola Produk</span>
      </h2>
    </div>

    <!-- Informasi Kelola Produk -->
    <div class="row mt-4">
      <div class="col-md-6 mb-4">
        <div class="card border-success">
          <div class="card-body p-4">
            <h5 class="card-title">Tambah Produk</h5>
            <p class="card-text">Tambah produk baru pada toko!</p>
            <a href="{{ url('/seller_produk') }}" class="btn btn-success btn-sm">Tambah Produk</a>
          </div>
        </div>
      </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end kelola produk section -->

<!-- restoran terdekat section -->

    <section class="resto_section layout_padding">
      <div class="container text-center">
        <div class="heading_container heading_center">
          <h2>
            <span>Penjualan</span>
          </h2>
        </div>
          <div class="row">
            <div class="col align-self-center">
                <div class="card text-center">
                <a class="navbar-brand" href="...">Luna's Doughnuts, Ijen</a>
              </div>
            </div>
            <div class="col align-self-center">
                <div class="card text-center">
                <a class="navbar-brand" href="...">Subway, Simpang Balapan</a>
              </div>
            </div>
            <div class="col align-self-center">
                <div class="card text-center">
                <a class="navbar-brand" href="...">Kopi Kenangan, Ijen</a>
              </div>
            </div>
          </div>
      </div>
    </section>
  
    <!-- end restoran terdekat section -->

  <!-- info section -->

  <section class="info_section layout_padding2">
    <div class="container">
      <div class="row justify-content-center align-items-center">
        <div class="col-md-2 d-flex justify-content-center">
          <h1 class="mamura-title">Mamura</h1>
        </div>
        <div class="col-md-1 d-flex justify-content-center">
          <div class="vertical-line"></div>
        </div>
        <div class="col-md-4 info_col">
          <div class="info_contact">
            <h4>Contact</h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-whatsapp" aria-hidden="true"></i>
                <span>+621234567890</span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>mamura@gmail.com</span>
              </a>
            </div>
          </div>
          <div class="info_social">
            <a href="">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        <div class="col-md-4 info_col">
          <div class="info_link_box">
            <h4>Links</h4>
            <div class="info_links">
              <a class="active" href="{{ url('/seller_page') }}">Home</a>
              <a href="#penjualan">Penjualan</a>
              <a href="#kelola_produk">Kelola Produk</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>  

  <!-- end info section -->


  <!-- jQery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- custom js -->
  <script type="text/javascript" src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->

</body>

</html>