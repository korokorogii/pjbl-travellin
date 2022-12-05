@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Buat Artikel Baru</h1>
</div>
<div class="col-lg-8">
    <form method="post" action="/dashboard/posts" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="judul" class="form-label">Judul</label>
          <input type="text" id="judul" name="judul" class="form-control @error('judul') is-invalid @enderror">
        </div>
        <div class="mb-3">
          <label for="slug" class="form-label">Slug</label>
          <input type="text" class="form-control" id="slug" name="slug" readonly>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Thumbnail</label>
            <input class="form-control" type="file" id="image" name="image">
          </div>
          
        <div class="mb-3">
            <label for="isi" class="form-label">Isi</label>
            <input type="hidden" id="isi" name="isi">
            <trix-editor input="isi"></trix-editor>
        </div>
        <button type="submit" class="btn btn-primary w-100">Unggah Artikel</button>
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