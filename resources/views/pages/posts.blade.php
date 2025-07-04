@include('layouts.head')
@include('layouts.header')
<section class="w-full flex flex-col items-center justify-center">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-6">{{ $title }}</h1>
        <div class="row grid grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($posts as $post)
                <div class="bg-white rounded-lg shadow-md p-4 col-md-4">
                    <div class="p-4 border border-gray-200 hover:shadow-lg transition-shadow duration-300 rounded">
                        <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="image_post" class="rounded mb-4" style="object-fit: contain; width: 100%">
                        <h2 class="text-xl font-semibold mb-2">{{ $post->title }}</h2>
                        <p class="text-gray-700 mb-4">{{ Str::limit($post->content, 200) }}</p>
                        <a href="{{ route('posts.show', $post->id) }}" class="text-blue-500 btn-getstarted hover:underline">Baca Selengkapnya  </a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="mt-6">
            {{ $posts->links() }}
        </div>
    </div>
</section> 
@include('layouts.footer')