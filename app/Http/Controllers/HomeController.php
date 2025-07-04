<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $post = Post::query()
            ->where('active', '=', 1)
            ->where('published_at', '!=', NULL) 
            ->orderBy('published_at', 'desc')
            ->paginate(6);

        return view('home', [
            'description' => 'Welcome to our website. Explore our content and services.',
            'posts' => $post,
            'title' => 'Home',
        ]);
    }
}
