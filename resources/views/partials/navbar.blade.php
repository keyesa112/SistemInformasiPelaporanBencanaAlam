
<link rel="stylesheet" href="assets/css/main.css">

<!-- ======= Header ======= -->
<section id="topbar" class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:pusdalops@bnpb.go.id">pusdalops@bnpb.go.id</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><a href="tel:112">112</a></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="https://twitter.com/BNPB_Indonesia?s=20" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="https://www.facebook.com/InfoBencanaBNPB/" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/bnpb_indonesia/" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="https://www.linkedin.com/company/badan-nasional-penanggulangan-bencana/" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section><!-- End Top Bar -->

  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="/index" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Pelaporan Bencana<span></span></h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="/index#">Beranda</a></li>
          <li><a href="/index#about">Profil</a></li>

          <!-- LAPORAN --> 
          <li><a href="/index#services">Laporkan</a></li>
          
         <!-- BERITA --> 
          <li class="dropdown"><a href="#"><span>Berita Kebencanaan</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="/index#testimonials">Laporan Mereka</a></li>
              <li class="dropdown"><a href="#portfolio">Pembaruan Kebencanaan Terkini</a></li>
              <li><a href="/index#faq">Panduan Edukasi Penyelamatan</a></li>
            </ul>
          </li>

          <li class="dropdown"><a href="#"><span>Menu</span><i class="bi bi-chevron-down dropdown-indicator"></i></a>
        <ul>
              @guest
              @if (Route::has('login'))
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                  </li>
              @endif

              @if (Route::has('register'))
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                  </li>
              @endif
          @else

          @if (auth()->user()->level=="admin")
          <li><a href="/admin">Admin</a></li>
          <li><a href="/users">Users</a></li>
          <li><a href="/histori">Histori Laporan User</a></li>
          @else
          <li><a href="/blogs">Histori Laporanmu</a></li>
          @endif

<hr>
              <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                   {{ __('Logout') }}
                  </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                          @csrf
                      </form>
                  </div>
              </li>
          @endguest
          </li>
        </ul

      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
  <!-- End Header -->