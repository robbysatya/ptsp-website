<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="{{ '/' }}" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="{{ asset('assets/img/logo-ptsp.png') }}" alt="Logo PTSP Kota Metro">
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{ '/' }}">Beranda</a></li>
          
          <li class="dropdown"><a href="#about"><span>Tentang Kami</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Profil Organisasi</a></li>
              <li><a href="#">Visi dan Misi</a></li>
              <li><a href="#">Tugas Pokok dan Fungsi</a></li>
              <li><a href="#">Struktur Organisasi</a></li>
              <li><a href="#">Perencanaan dan Pelaporan</a></li>
            </ul>
          </li>

          <li class="dropdown"><a href="#services"><span>Pelayanan Perizinan</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Perizinan Online</a></li>
              <li><a href="#">Informasi KBLI</a></li>
              <li><a href="#">Layanan Perbantuan </a></li>
              <li><a href="#">FAQ </a></li>
              <li class="dropdown"><a href="#"><span>Informasi Perizinan</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Standar Pelayanan</a></li>
                  <li><a href="#">Standar Operasial Pelayanan</a></li>
                  <li><a href="#">Persyaratan Perizinan dan Non Perizinan</a></li>
                  <li><a href="#">Indeks Kepuasan Masyarakat (IKM) </a></li>
                  <li><a href="#">Peraturan dan Regulasi </a></li>
                </ul>
              </li>
            </ul>
          </li>

          <li class="dropdown"><a href="#"><span>Penanaman Modal</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Arah dan Kebijakan</a></li>
              <li><a href="#">Realisasi Investasi</a></li>
              <li><a href="#">Promosi Investasi</a></li>
            </ul>
          </li>
                  
          <li class="dropdown"><a href="#pengaduan"><span>Pengaduan</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Pengaduan Online</a></li>
              <li><a href="#">Whistleblowing</a></li>
              <li><a href="#">Standar Pelayanan Pengaduan</a></li>
              <li><a href="#">SOP Penanganan Pengaduan</a></li>
            </ul>
          </li>
          
          <li class="dropdown"><a href="#berita"><span>Berita & Gallery</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="{{ '/posts' }}">Berita</a></li>
              <li><a href="#">Gallery</a></li>
            </ul>
          </li>

          <li><a href="#">Tutorial</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      {{-- <a class="btn-getstarted" href="index.html#about">Get Started</a> --}}

    </div>
  </header>