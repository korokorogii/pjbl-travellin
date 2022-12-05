<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {

        return view('posts', [
            "title" => "Artikel",
            "terbaru" => Post::latest()->get(),
            "posts" => Post::latest()->filter()->get(),
        ]);
    }

    public function home()
    {
        return view('home', [
            "title" => "Dashboard",
            "terbaru" => Post::latest()->get(),
            "posts" => Post::all(),
        ]);
    }

    public function galeri()
    {
        return view('galeri', [
            "title" => "Galeri",
            "terbaru" => Post::latest()->get(),
            "posts" => Post::all(),
        ]);
    }

    public function show($slug)
    {
        return view('post', [
            "title" => "Artikel",
            "post" => Post::find($slug)
        ]);
    }
}
