@include('layouts.head')

<body class="class-index">

{{-- Header --}}
@include('layouts.header')
<main class="main">
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
        </div>
    </section>
    <!-- /Team Section -->
</main>
@include('layouts.footer')
