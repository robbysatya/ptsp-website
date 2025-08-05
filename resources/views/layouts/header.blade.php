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
              <li><a href="{{ route('profil-organisasi') }}">Profil Organisasi</a></li>
              <li><a href="{{ route('visi-misi') }}">Visi dan Misi</a></li>
              <li><a href="{{ route('tugas-pokok') }}">Tugas Pokok dan Fungsi</a></li>
              <li><a href="{{ route('struktur-organisasi') }}">Struktur Organisasi</a></li>
              <li><a href="{{ route('perencanaan-pelaporan') }}">Perencanaan dan Pelaporan</a></li>
            </ul>
          </li>

          <li class="dropdown"><a href="#services"><span>Pelayanan Perizinan</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="{{ route('perizinan-online') }}">Perizinan Online</a></li>
              <li><a href="https://oss.go.id/informasi/kbli-berbasis-risiko" target="_blank">Informasi KBLI</a></li>
              <li><a href="{{ route('layanan-perbantuan') }}">Layanan Perbantuan </a></li>
              <li><a href="{{ route('faq') }}">FAQ </a></li>
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
              <li><a href="{{ route('pengaduan-online') }}">Pengaduan Online</a></li>
              <li><a href="{{ route('whistleblowing') }}">Whistleblowing</a></li>
              <li><a href="{{ route('standar-pengaduan') }}">Standar Pelayanan Pengaduan</a></li>
              <li><a href="{{ route('sop-penanganan-pengaduan') }}">SOP Penanganan Pengaduan</a></li>
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
