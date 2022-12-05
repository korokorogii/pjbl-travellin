@extends('layouts.main')

@section('container')
    <div class="container pt-5">
        <h5 class="text-center">Created at {{ date('j F, Y'), strtotime($post->created_at) }}</h5>
        <h1 class="text-center fw-bolder">{{ $post->judul }}</h1>
        <h5 class="text-center mb-5">Posted by {{ $post->user->name }}</h5>
        <img src="{{ asset('storage/' . $post->image) }}" alt="" style="width: 100%; border-radius: 10px;">
        <img src="https://source.unsplash.com/1600x950/?sea" alt="" class="w-100 rounded">
        <p class="text-center pt-2">Sumber: Unsplash</p>
        <div class="mt-5 h5 mb-5 pb-5">{!! $post->isi !!}</div>
    </div>
@endsection
