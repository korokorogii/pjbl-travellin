@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Artikel</h1>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="col-lg-8">
    <form method="post" action="/dashboard/posts/{{ $post->slug }}">
        @method('put')
        @csrf
        <div class="mb-3">
          <label for="judul" class="form-label">Judul</label>
          <input type="text" id="judul" name="judul" class="form-control @error('judul') is-invalid @enderror" value="{{ old('judul', $post->judul) }}">
        </div>
        <div class="mb-3">
          <label for="slug" class="form-label">Slug</label>
          <input type="text" class="form-control" id="slug" name="slug" readonly value="{{ old('judul', $post->slug) }}">
        </div>
        <div class="mb-3">
            <label for="isi" class="form-label">Isi</label>
            <input type="hidden" id="isi" name="isi" value="{{ old('judul', $post->isi) }}">
            <trix-editor input="isi"></trix-editor>
        </div>
        <button type="submit" class="btn btn-primary w-100">Perbarui Artikel</button>
    </form>
</div>

<script>
    const judul = document.querySelector('#judul');
    const slug = document.querySelector('#slug');

    judul.addEventListener('change', function() {
        fetch('/dashboard/posts/checkSlug?judul=' + judul.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    })
</script>
@endsection