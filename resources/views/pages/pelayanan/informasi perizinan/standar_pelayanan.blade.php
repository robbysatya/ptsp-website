@include('layouts.head')

<body class="class-index">

{{-- Header --}}
@include('layouts.header')
<main class="main">
    <section id="contact" class="contact section light-background">

        <div class="container section-title" data-aos="fade-up">
            <span>{{ $title }}</span>
            <h2>{{ $title }}</h2>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

                <div class="col-lg-12">
                    <form class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                        <div class="row gy-4">

                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama Izin</th>
                                            <th scope="col">Berkas Izin</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($standar_pelayanan as $sp)
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>{{ $sp->name }}</td>
                                            <td><a href="../storage/{{ $sp['file'] }}"><i class="bi bi-eye-fill"></i>  Lihat/Unduh</a></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </form>
                </div><!-- End Contact Form -->

            </div>

        </div>

    </section>
</main>
@include('layouts.footer')
