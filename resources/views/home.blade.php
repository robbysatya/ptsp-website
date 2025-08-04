@include('layouts.head')
<body class="index-page">

  {{-- Header --}}
  @include('layouts.header')

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="fade-up">
            <h1>Selamat Datang di</h1>
            <p>Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu Kota Metro</p>
            <div class="d-flex">
              <a href="#about" class="btn-get-started" data-aos="zoom-in">Lihat Selengkapnya</a>
              <a href="https://www.youtube.com/watch?v=h0ci067jsDU" class="glightbox btn-watch-video d-flex align-items-center" data-aos="zoom-in"><i class="bi bi-play-circle"></i><span>Lihat Video</span></a>
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="100">
            <img src="{{ asset('assets/img/hero-img.png') }}" class="img-fluid animated" alt="">
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <span>Tentang Kami<br></span>
        <h2>Tentang Kami</h2>
        {{-- <p>Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu Kota Metro</p> --}}
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">
          <div class="col-lg-6 position-relative" data-aos="fade-up" data-aos-delay="100">
            <img src="{{ asset('assets/img/about/FO1.jpeg') }}" class="img-fluid about-1" alt="" style="top: 0; left: 0; z-index: 1; border-radius: 10px;">
            {{-- <a href="https://www.youtube.com/watch?v=h0ci067jsDU" class="glightbox pulsating-play-btn"></a> --}}
          </div>
          <div class="col-lg-6 content ps-5" data-aos="fade-up" data-aos-delay="200">
            <h3>Tugas DPMPTSP Kota Metro</h3>
            <p class="text-justify">
              Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu Kota Metro mempunyai tugas merumuskan dan
              melaksanakan kebijakan di bidang penanaman modal serta penyelenggaraan pelayanan administrasi penanaman modal, perizinan dan non perizinan secara terpadu
              dengan prinsip :
            </p>
            <ul class="d-flex flex-wrap justify-content-between">
              <div class="col-6 col-md-6">
                <li><i class="bi bi-check2-all"></i> <span>Koordinasi</span></li>
                <li><i class="bi bi-check2-all"></i> <span>Integrasi</span></li>
                <li><i class="bi bi-check2-all"></i> <span>Sinkronisasi</span></li>
                <li><i class="bi bi-check2-all"></i> <span>Simplifikasi</span></li>
              </div>

              <div class="col-6 col-md-6">
                <li><i class="bi bi-check2-all"></i> <span>Keamanan</span></li>
                <li><i class="bi bi-check2-all"></i> <span>Kepastian</span></li>
                <li><i class="bi bi-check2-all"></i> <span>Transparansi</span></li>
              </div>

              {{-- Button About --}}
              <div class="col-12 text-start mt-4">
                <a href="#about" class="btn-get-started" style="color: var(--contrast-color);background: var(--accent-color);border: 0;padding: 10px 30px;transition: 0.4s;border-radius: 50px;">Lihat Selengkapnya</a>
              </div>
            </ul>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Stats Section -->
    <section id="stats" class="stats section gray-background" style="padding-top: 20px;">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 justify-content-center">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="272" data-purecounter-duration="1" class="purecounter"></span>
              <p>Jumlah Layanan</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span class="stat-prefix"></span>
              <span data-purecounter-start="0" data-purecounter-end="100" data-purecounter-duration="1" class="purecounter"></span>
              <span class="stat-suffix">+</span>
              <p>Lebih Izin Terbit</p>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>

    </section><!-- /Stats Section -->

    <!-- Services Section -->
    <section id="services" class="services section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <span>Pelayanan Perizinan</span>
        <h2>Pelayanan Perizinan</h2>
        {{-- <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p> --}}
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-activity"></i>
              </div>
              <a href="" class="stretched-link">
                <h3>Perizinan Tenaga Kesehatan</h3>
              </a>
              <p>Perizinan terkait Tenaga Kesehatan untuk pembuatan Surat Izin Praktik (SIP) dan Pencabutan SIP.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-broadcast"></i>
              </div>
              <a href="" class="stretched-link">
                <h3>Perizinan Berusaha</h3>
              </a>
              <p>Perizinan terkait pembuatan usaha melalui OSS Berusaha dan Izin terkait Usaha lainnya.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-easel"></i>
              </div>
              <a href="" class="stretched-link">
                <h3>Perizinan Non Berusaha</h3>
              </a>
              <p>Perizinan terkait izin individu ataupun perorangan.</p>
            </div>
          </div><!-- End Service Item -->

          {{-- Button Layanan --}}
{{--          <div class="d-flex col-md-12 justify-content-center text-center">--}}
{{--              <a href="#about" class="mt-4 btn-get-started" style="color: var(--contrast-color);background: var(--accent-color);border: 0;padding: 10px 30px;transition: 0.4s;border-radius: 50px;">Lihat Selengkapnya</a>--}}
{{--          </div>--}}

        </div>

      </div>

    </section><!-- /Services Section -->

    <!-- Berita Section -->
    <section id="berita" class="portfolio section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <span>Berita</span>
        <h2>Berita</h2>
        <p>Berita Kegiatan Terkini DPMTPSP Kota Metro</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

            @foreach ($posts as $post)
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                <img src="{{ asset('storage/' . $post->thumbnail) }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                    <h4>{{ $post->title }}</h4>
                    <p>{{ $post->title }}</p>
                    <a href="{{ asset('storage/' . $post->thumbnail) }}" title="{{ $post->title }}" data-description="{{ $post->content }}" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="{{ route('view', $post) }}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div>
              @endforeach
              <!-- End Portfolio Item -->

          </div><!-- End Portfolio Container -->

        </div>
        {{-- Button Berita --}}
        <div class="col-12 text-center mt-4">
          <a href="{{ route('posts') }}" class="btn-get-started" style="color: var(--contrast-color);background: var(--accent-color);border: 0;padding: 10px 30px;transition: 0.4s;border-radius: 50px;">Lihat Selengkapnya</a>
        </div>
      </div>
    </section><!-- /Portfolio Section -->

    <!-- Konsultasi Whatsapp -->
    <section id="call-to-action" class="call-to-action section accent-background">

      <div class="container">
        <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-xl-10">
            <div class="text-center">
              <h3>Konsultasi Online</h3>
              <p>Untuk informasi dan konsultasi, hubungi kami melalui kontak <b>Whatsapp</b> resmi kami dibawah ini.</p>
              <a class="cta-btn" href="https://s.id/ZIi6O"><i class="bi bi-whatsapp"></i> Hubungi Kami</a>
            </div>
          </div>
        </div>
      </div>

    </section><!-- /Call To Action Section -->

    <!-- Struktur Organisasi -->
    <section id="team" class="team section light-background">

      <div class="container section-title" data-aos="fade-up">
        <span>Struktur Organisasi</span>
        <h2>Struktur Organisasi</h2>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-5 d-flex justify-content-center">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="pic text-center"><img src="{{ asset('assets/img/team/kadis_ptsp.png') }}" style="height: 400px" class="img-fluid img-thumbnail" alt="Kepala Dinas PMPTSP Kota Metro"></div>
              <div class="member-info">
                <h4>Ismet, S.E</h4>
                <span>Kepala Dinas PTSP Kota Metro</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="pic text-center"><img src="{{ asset('assets/img/team/sekretaris_ptsp.png') }}" style="height: 400px" class="img-fluid img-thumbnail" alt="Sekretaris DPMPTSP Kota Metro"></div>
              <div class="member-info">
                <h4>Kori Aulina, S.IP</h4>
                <span>Sekretaris Dinas PTSP Kota Metro</span>
              </div>
            </div>
          </div><!-- End Team Member -->
        </div>
        {{-- Button Struktur Organisasi --}}
         <div class="col-12 text-center mt-4">
           <a href="{{ route('struktur-organisasi') }}" class="btn-get-started" style="color: var(--contrast-color);background: var(--accent-color);border: 0;padding: 10px 30px;transition: 0.4s;border-radius: 50px;">Lihat Selengkapnya</a>
         </div>
      </div>
    </section>
    <!-- /Team Section -->

    <!-- Contact Pengaduan Section -->
    <section id="pengaduan" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <span>Alamat & Pengaduan</span>
        <h2>Alamat & Pengaduan</h2>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-5">

            <div class="info-wrap">
              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h3>Alamat</h3>
                  <p>Jl. Kyai Haji Arsyad No.7, Imopuro, Kec. Metro Pusat, Kota Metro, Lampung 34125</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-telephone flex-shrink-0"></i>
                <div>
                  <h3>Hubungi Kami</h3>
                  <p>(0725) 49638</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h3>Email Kami</h3>
                  <p>pmptspmetrokota@gmail.com</p>
                </div>
              </div><!-- End Info Item -->

              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d440.8181042888495!2d105.30865608936551!3d-5.113994348659558!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40bbe4bf12034b%3A0x419694ccfb48cb00!2sDinas%20Penanaman%20Modal%20Dan%20Pelayanan%20Terpadu%20Satu%20Pintu%20Kota%20Metro!5e1!3m2!1sid!2sid!4v1751208696570!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>

          <div class="col-lg-7">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">

                <div class="col-md-6">
                  <label for="name-field" class="pb-2">Nama Anda</label>
                  <input type="text" name="name" id="name-field" class="form-control" required="">
                </div>

                <div class="col-md-6">
                  <label for="email-field" class="pb-2">Email Anda</label>
                  <input type="email" class="form-control" name="email" id="email-field" required="">
                </div>

                <div class="col-md-12">
                  <label for="subject-field" class="pb-2">Subjek</label>
                  <input type="text" class="form-control" name="subject" id="subject-field" required="">
                </div>

                <div class="col-md-12">
                  <label for="message-field" class="pb-2">Pesan</label>
                  <textarea class="form-control" name="message" rows="10" id="message-field" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Kirim Laporan</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  @include('layouts.footer')
