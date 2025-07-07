@include('layouts.head')

<body class="index-page">
    @include('layouts.header')
 
    <div class="container">
        <div class="row flex-column flex-md-row justify-content-right">
            <div class="col-8 mb-4 p-4"> 
                <img src="{{ asset('storage/'.$post->thumbnail) }}" alt="{{ $title }}" class="img-fluid mb-3 rounded" style="max-height: 600px; object-fit: cover;">
                <p class="text-muted mt-4">Diposting pada {{ $post->published_at->format('d M Y') }}</p>
                <h1>{{ $title }}</h1>
                <p>{!! $post->content !!}</p>
            </div>

            <div class="col-4 p-4">
                <div class="card mb-4">
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
                {{-- <div class="card mb-4">
                    <div class="card-header">
                        <h4 class="card-title">Berita Populer</h4>
                    </div>      
                    <div class="card-body">
                        <ul class="list-group">
                            @foreach ($popularPosts as $popularPost)
                                <li class="list-group-item">
                                    <a href="{{ $popularPost->slug }}">
                                        <i class="bi bi-file-text"></i> {{ $popularPost->title }} ({{ $popularPost->views }})
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
 </main>
@include('layouts.footer')