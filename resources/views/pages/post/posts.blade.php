@include('layouts.head')

<body class="class-index">

@include('layouts.header')

    <main class="main" id="berita">
        {{-- Title Page --}}
        <section id="services" class="contact section light-background">

            <div class="container section-title" data-aos="fade-up">
                <span>{{ $title }}</span>
                <h2>{{ $title }}</h2>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="200">
                <div class="row gy-4">
                    <div class="col-md-8">
                        @foreach ($posts as $post)
                            <div class="card mb-4 post-card" data-aos="fade-up" data-aos-delay="200">
                                <img class="card-img-top" src="{{ asset('storage/'.$post->thumbnail) }}" alt="{{ $post->title }}">
                                <div class="card-body">
                                    <h2 class="card-title">{{ $post->title }}</h2>
                                    <p class="card-text">{{ $post->getExcerpt() }}</p>
                                    <a href="{{ route('view', $post->slug) }}" class="btn btn-primary" style="background: var(--accent-color); border: solid 1px var(--accent-color); ">Baca Selengkapnya &rarr;</a>
                                </div>
                                <div class="card-footer text-muted">
                                    Diposting pada {{ $post->published_at->format('d M Y') }}
                                </div>
                            </div>
                        @endforeach
                        <nav aria-label="Page navigation example">
                            <div class="pagination">
                                {{-- Pagination --}}
                                <div class="page pagination d-flex justify-content-center">
                                    {{ $posts->links() }}
                                </div>
                            </div>
                        </nav>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 post-card" data-aos="fade-up" data-aos-delay="300">
                            <div class="card-header">
                                <h4 class="card-title">Kategori</h4>
                            </div>
                            <div class="card-body">
                                <ul class="list-group">
                                    @foreach ($categories as $category)
                                        <li class="list-group-item">
                                            <a href="{{ $category->slug }}">
                                                <i class="bi bi-folder"></i> {{ $category->name }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="card mb-4 post-card" data-aos="fade-up" data-aos-delay="400">
                            <div class="card-header">
                                <h4 class="card-title">Berita Populer</h4>
                            </div>
                            <div class="card-body">
                                <ul class="list-group">
                                    @foreach ($posts->sortByDesc('views')->take(5) as $popularPost)
                                        <li class="list-group-item">
                                            <a href="{{ route('view', $popularPost->slug) }}">
                                                <i class="bi bi-eye"></i> {{ $popularPost->title }} ({{ $popularPost->views }})
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

{{-- Footer --}}
@include('layouts.footer')
