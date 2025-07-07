@include('layouts.head')
@include('layouts.header')

    <div class="container">
        <h1 class="mt-4 mb-3">{{ $title }}</h1>
        <div class="row">
            <div class="col-md-8">
                @foreach ($posts as $post)
                    <div class="card mb-4">
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
                <div class="card mb-4">
                    <div class="card-header">
                        <h4 class="card-title  ">Berita Populer</h4>
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



{{-- Old Style --}}

{{-- <section class="w-full flex flex-col items-center justify-center">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-6">{{ $title }}</h1>
        <div class="row grid grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($posts as $post)
                <div class="bg-white rounded-lg shadow-md p-4 col-span-1">
                    <div class="p-4 border border-gray-200 hover:shadow-lg transition-shadow duration-300 rounded">
                        <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="image_post" class="rounded mb-4" style="object-fit: contain; width: 100%">
                        <h2 class="text-xl font-semibold mb-2">{{ $post->title }}</h2>
                        <p class="text-gray-500 mb-2">
                            <i class="fas fa-calendar-alt"></i> {{  $post->getFormattedDate() }} 
                        </p>
                        <p class="text-gray-700 mb-4" >{!! Str::limit($post->content, 150) !!}</p>
                        <a href="{{ route('posts.show', $post->id) }}" class="text-blue-500 btn-getstarted hover:underline">Baca Selengkapnya  </a>
                    </div>
                </div>
            @endforeach

          
            
            @if ($posts->hasPages())
            <nav class="pagination">
                <nav role="navigation" aria-label="Pagination Navigation" class="flex items-center justify-between">
                    <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                        <div>
                            <p class="text-sm text-gray-700 dark:text-gray-300">
                                Menampilkan
                                <span class="font-medium">{{ $posts->firstItem() }}</span>
                                sampai
                                <span class="font-medium">{{ $posts->lastItem() }}</span>
                                dari
                                <span class="font-medium">{{ $posts->total() }}</span>
                                hasil
                            </p>
                        </div>

                        <div class="relative z-0 inline-flex rtl:flex-row-reverse shadow-sm rounded-md">
                            @if ($posts->onFirstPage())
                                <span class="relative inline-flex items-center px-2 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5 rounded-l-md dark:text-gray-600 dark:bg-gray-800 dark:border-gray-600">
                                     <i class="bi bi-arrow-left-circle-fill"></i> Previous
                                </span>
                            @else
                                <a href="{{ $posts->previousPageUrl() }}" class="relative inline-flex items-center px-2 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-l-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-300 dark:focus:border-blue-700 dark:active:bg-gray-700 dark:active:text-gray-300">
                                    <i class="bi bi-arrow-left-circle-fill"></i> Previous
                                </a>
                            @endif

                            @foreach ($posts->getUrlRange(1, $posts->lastPage()) as $page => $url)
                                @if ($page == $posts->currentPage())
                                    <span class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-blue-600 bg-white border border-blue-300 cursor-default leading-5 rounded-md dark:bg-blue-800 dark:text-blue-400">
                                        {{ $page }}
                                    </span>
                                @else
                                    <a href="{{ $url }}" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-300 dark:focus:border-blue-700 dark:active:bg-gray-700 dark:active:text-gray-300">
                                        {{ $page }}
                                    </a>
                                @endif
                            @endforeach

                            @if ($posts->hasMorePages())
                                <a href="{{ $posts->nextPageUrl() }}" class="relative inline-flex items-center px-2 py-2 -ml-px text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-r-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-300 dark:focus:border-blue-700 dark:active:bg-gray-700 dark:active:text-gray-300">
                                    Next <i class="bi bi-arrow-right-circle-fill"></i>
                                </a>
                            @else
                                <span class="relative inline-flex items-center px-2 py-2 -ml-px text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5 rounded-r-md dark:text-gray-600 dark:bg-gray-800 dark:border-gray-600">
                                    Next <i class="bi bi-arrow-right-circle-fill"></i>
                                </span>
                            @endif
                        </div>
                    </div>
                </nav>
            </nav>
            @endif
        </div>
    </div>
</section>  --}}

{{-- Footer --}}
@include('layouts.footer')