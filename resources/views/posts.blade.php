@extends('layouts.main')

@section('container')
    <main class="container pt-5">
        <div class="row justify-content-center mb-3">
            <div class="col-md-6">
                <form action="/posts">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="search" placeholder="Cari Artikel Disini">
                        <button class="btn btn-primary" type="submit">Search</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="p-4 p-md-5 mb-4 rounded"
            style="background: linear-gradient(rgba(15, 15, 15, 0.373), rgba(15, 15, 15, 0.719)), url('{{ asset('storage/' . $terbaru[0]->image) }}'); background-repeat: no-repeat; background-size: cover;">
            <a href="/posts/{{ $terbaru[0]->id }}" class="text-decoration-none">
                <div class="col-md-6 px-0">
                    <h1 class="display-4 text-white fw-semibold">{{ $terbaru[0]->judul }}</h1>
                    <p class="lead my-3">{{ $terbaru[0]->excerpt }}</p>
                </div>
            </a>
        </div>

        <div class="row mb-2">
            <div class="col-md-6">
                <a href="/posts/{{ $terbaru[1]->id }}" class="text-decoration-none text-dark">
                    <div
                        class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static">
                            <strong class="d-inline-block mb-2 text-primary">World</strong>
                            <h3 class="mb-0">{{ $terbaru[1]->judul }}</h3>
                            <div class="mb-1 text-muted">Nov 12</div>
                            <p class="card-text mb-auto">{{ $terbaru[1]->excerpt }}</p>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <img src="{{ asset('storage/' . $terbaru[1]->image) }}" alt="" width="200"
                                height="250" style="object-fit: cover;">
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6">
                <a href="/posts/{{ $terbaru[2]->id }}" class="text-decoration-none text-dark">
                    <div
                        class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static">
                            <strong class="d-inline-block mb-2 text-success">Design</strong>
                            <h3 class="mb-0">{{ $terbaru[2]->judul }}</h3>
                            <div class="mb-1 text-muted">Nov 11</div>
                            <p class="mb-auto">{{ $terbaru[2]->excerpt }}</p>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <img src="{{ asset('storage/' . $terbaru[2]->image) }}" alt="" width="200"
                                height="250" style="object-fit: cover;">

                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="row g-5">
            <div class="col-md-8">
                <h3 class="pb-4 mb-4 fst-italic border-bottom">
                    Semua Artikel
                </h3>

                @foreach ($posts as $post)
                    <article class="blog-post">
                        <a href="/posts/{{ $post->id }}" class="blog-post-title mb-1 text-decoration-none text-dark">
                            <h2 class="blog-post-title mb-1">{{ $post->judul }}</h2>
                        </a>
                        <p class="blog-post-meta">Diunggah {{ $post->created_at->diffForHumans() }} oleh <a
                                href="#">Mark</a></p>

                        <p>{{ $post->excerpt }}</p>
                        <hr>
                    </article>
                @endforeach



            </div>

            <div class="col-md-4">
                <div class="position-sticky" style="top: 7rem;">
                    <div class="p-4 mb-3 bg-light rounded">
                        <h4 class="fst-italic">About</h4>
                        <p class="mb-0">Customize this section to tell your visitors a little bit about your
                            publication, writers, content, or something else entirely. Totally up to you.</p>
                    </div>
                    <div class="p-4">
                        <h4 class="fst-italic">Sumber Artikel</h4>
                        <ol class="list-unstyled">
                            <li><a href="#">Kompas</a></li>
                            <li><a href="#">Twitter</a></li>
                            <li><a href="#">Facebook</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection
