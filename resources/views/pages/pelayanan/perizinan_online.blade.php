@include('layouts.head')

<body class="class-index">

{{-- Header --}}
@include('layouts.header')
<main class="main">
            <section id="services" class="services section">
            <div class="container section-title" data-aos="fade-up">
                <span>Perizinan Online</span>
                <h2>Perizinan Online</h2>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item position-relative">
                            <img src="{{asset('assets/img/logo-instansi/sicantik.png')}}" alt="SiCantik" sizes="" srcset="" style="width: 150px;">
                            <a href="https://sicantik.go.id/" class="stretched-link">
                                <h3>SiCantik Cloud</h3>
                            </a>
                            <p>Merupakan aplikasi perizinan yang mempermudah layanan perizinan, baik perizinan berusaha maupun non-berusaha, yang disediakan untuk instansi pemerintah baik pusat maupun daerah secara gratis.</p>

                            <div class="d-flex col-md-12 justify-content-center text-center">
                                <a href="https://sicantik.go.id/" class="mt-4 btn-get-started" style="color: var(--contrast-color);background: var(--accent-color);border: 0;padding: 10px 30px;transition: 0.4s;border-radius: 50px;">Lihat Selengkapnya</a>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item position-relative">
                            <img src="{{asset('assets/img/logo-instansi/mppdigital.png')}}" alt="MPP Digital" sizes="" srcset="" style="width: 150px;">
                            <a href="https://play.google.com/store/apps/details?id=com.mppdigital.app&hl=id" class="stretched-link">
                                <h3>MPP Digital</h3>
                            </a>
                            <p>Merupakan platform digital yang saat ini difokuskan untuk penerbitan Surat Izin Praktek bagi tenaga medis dan tenaga kesehatan, yang terintgrasi dengan Satu Sehat Kementrian Kesehatan.</p>

                            <div class="d-flex col-md-12 justify-content-center text-center">
                                <a href="https://play.google.com/store/apps/details?id=com.mppdigital.app&hl=id" class="mt-4 btn-get-started" style="color: var(--contrast-color);background: var(--accent-color);border: 0;padding: 10px 30px;transition: 0.4s;border-radius: 50px;">Lihat Selengkapnya</a>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item position-relative">
                            <img src="{{asset('assets/img/logo-instansi/OSS-LOGO.svg')}}" alt="OSS RBA" sizes="" srcset="" style="width: 150px; height: 80px;">
                            <a href="https://oss.go.id/" class="stretched-link">
                                <h3>OSS RBA</h3>
                            </a>
                            <p>OSS RBA adalah singkatan dari Online Single Submission Risk Based Approach, yaitu sistem perizinan berusaha terintegrasi secara elektronik yang dinilai berdasarkan tingkat risiko kegiatan usaha.</p>

                            <div class="d-flex col-md-12 justify-content-center text-center">
                                <a href="https://oss.go.id/" class="mt-4 btn-get-started" style="color: var(--contrast-color);background: var(--accent-color);border: 0;padding: 10px 30px;transition: 0.4s;border-radius: 50px;">Lihat Selengkapnya</a>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                </div>

            </div>

            </section>
</main>
@include('layouts.footer')
