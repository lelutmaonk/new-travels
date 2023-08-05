<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Melalitobali</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('templates/user/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('templates/user/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('templates/user/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('templates/user/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('templates/user/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('templates/user/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('templates/user/css/style.css') }}" rel="stylesheet">
  <style>
    .whatsapp-button {
      position: fixed;
      bottom: 20px;
      right: 20px;
      z-index: 999;
    }
  
    .whatsapp-button a {
      font-size: 24px; /* Sesuaikan ukuran sesuai keinginan Anda */
      width: 60px; /* Sesuaikan lebar sesuai keinginan Anda */
      height: 60px; /* Sesuaikan tinggi sesuai keinginan Anda */
      line-height: 60px;
      background-color: #198754; /* Sesuaikan warna latar sesuai keinginan Anda */
      color: white; /* Sesuaikan warna teks sesuai keinginan Anda */
      border-radius: 50%; /* Membuat tombol berbentuk lingkaran */
      text-align: center;
      text-decoration: none;
      display: block;
    }
  </style>

<style>
  .language-dropdown {
    position: fixed;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    z-index: 999;
  }

  .language-dropdown .dropdown-menu {
    min-width: 120px; /* Sesuaikan ukuran dropdown sesuai kebutuhan Anda */
  }
</style>


  
  
  

</head>

<body>

  @include('user.layouts._navbar')
  
  @yield('content')

  @include('user.layouts._footer')

  <div id="preloader"></div>

  {{-- button whatsapp --}}
  {{-- <a href="" class=""><i class="bi bi-whatsapp"></i></a> --}}
  <div class="whatsapp-button">
    <a href="https://api.whatsapp.com/send/?phone=087756862237&text&type=phone_number&app_absent=0" target="_blank">
      <i class="bi bi-whatsapp"></i>
    </a>
  </div>

  <div class="dropdown language-dropdown p-3">
    <button class="btn btn-success dropdown-toggle" type="button" id="languageDropdown" data-bs-toggle="dropdown" aria-expanded="false">
      Select a language
    </button>
    <ul class="dropdown-menu" aria-labelledby="languageDropdown">
      <li><a class="dropdown-item" href="{{ $indonesia }}">Indonesia</a></li>
      <li><a class="dropdown-item" href="{{ $english }}">English</a></li>
    </ul>
  </div>


  

  <!-- Vendor JS Files -->
  <script src="{{ asset('templates/user/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('templates/user/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('templates/user/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('templates/user/js/main.js') }}"></script>

</body>

</html>