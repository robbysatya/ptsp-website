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
                    <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                        <div class="row gy-4">

                            <div class="col-md-4">
                                <label for="name-field" class="pb-2">Nama Anda</label>
                                <input type="text" name="name" id="name-field" class="form-control" required="">
                            </div>

                            <div class="col-md-4">
                                <label for="email-field" class="pb-2">Email Anda</label>
                                <input type="email" class="form-control" name="email" id="email-field" required="">
                            </div>

                            <div class="col-md-4">
                                <label for="number-field" class="pb-2">Nomor Telepon</label>
                                <label for="phone-field"></label><input type="text" class="form-control" name="phone" id="phone-field" required="">
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
    </section>
</main>
@include('layouts.footer')
