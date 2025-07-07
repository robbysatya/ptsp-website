<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $post = Post::query()
            ->where('status', '=', 1)
            ->where('published_at', '!=', NULL) 
            ->orderBy('published_at', 'desc')
            ->paginate(5);

        $category = Category::query()
            ->orderBy('name', 'asc')
            ->get();

        return view('pages.post.posts', [
            'posts' => $post,
            'categories' => $category,
            'title' => 'Daftar Berita',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        if (!$post->status || !$post->published_at > now()) {
            throw new NotFoundHttpException('Post not found or not available.');
        }

        $category = Category::query()
            ->orderBy('name', 'asc')
            ->get();
        
        return view('pages.post.view', [
            'categories' => $category,
        ], compact('post'))
            ->with('title', $post->title)
            ->with('description', Str::limit(strip_tags($post->content), 150))
            ->with('image', $post->image ? Storage::url($post->image) : null);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
