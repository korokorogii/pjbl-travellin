@extends('layouts.main')

@section('container')
    <h1 class="text-white fw-bold text-center pt-5">Galeri Wisata!</h1>
    <div class="bungkus mx-auto">
        <div class="gambar">
            @foreach ($posts as $post)
                <img src="{{ asset('storage/' . $post->image) }}" alt="">
            @endforeach
        </div>
        <div class="popup">
            <span><i class="uil uil-multiply"></i></span>
            <img src="{{ asset('storage/' . $posts[0]->image) }}" alt="">
        </div>
    </div>
@endsection
