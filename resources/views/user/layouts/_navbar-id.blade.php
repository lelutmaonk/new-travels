<!-- ======= Header/Navbar ======= -->
<nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="index.html">Melalito<span class="color-b">bali</span></a>

      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">

          <li class="nav-item">
            <a class="nav-link" href="{{ route('user.home') }}">Beranda</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="{{ route('user.packages') }}">Paket</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="{{ route('user.pickup') }}">Jemputan</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="{{ route('user.activities') }}">Aktivitas di Bali</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="{{ route('user.about') }}">Tentang</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="{{ route('user.contact') }}">Kontak</a>
          </li>

        </ul>
      </div>

    </div>
  </nav><!-- End Header/Navbar -->