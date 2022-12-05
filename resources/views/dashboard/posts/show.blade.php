@extends('dashboard.layouts.main')

@section('container')
    <div class="container pt-5">
        <div class="col-lg-8 mb-3">
            <a href="/dashboard/posts" class="btn btn-success">Lihat Semua Artikel</a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning">Edit Artikel</a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Artikel Ini?')"><i class="uil uil-trash"></i> Hapus</button>
            </form>
        </div>
        <h5 class="">Created at {{ date("j F, Y"),strtotime($post->created_at) }}</h5>
        <h1 class=" fw-bolder">{{ $post->judul }}</h1>
        <h5 class="mb-5">Posted by {{ $post->user->name }}</h5>
        <img src="{{ asset('storage/' . $post->image) }}" alt="" class="w-100 rounded">
        <div class="mt-5">{!! $post->isi !!}</div>
    </div>
@endsection