@include('layouts.head')

<body class="class-index">

{{-- Header --}}
@include('layouts.header')
<main class="main">
    <section id="team" class="team section light-background">

        <div class="container section-title" data-aos="fade-up">
            <span>{{ $title }}</span>
            <h2>{{ $title }}</h2>
        </div><!-- End Section Title -->

    </section>
</main>
@include('layouts.footer')
