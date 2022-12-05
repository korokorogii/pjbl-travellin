@extends('layouts.main')

@section('container')
    <div class="wrapper">
        <div class="buatthumbnail">
            <div class="text">
                <h1 class="judul-main mb-0" style="font-weight: 900;">HALO, TRAVELLER!</h1>
                <h1 class="mb-0 judul-main" style="font-weight: 900;">MARI MULAI PERJALANANMU DISINI.</h4>
                    <a class="text-decoration-none button fw-bold" href="#haha"><button class="ketour mt-2 fw-bold">Lihat
                            Lebih Lanjut!</button></a>
            </div>
        </div>
        <div class="wrap kurtaw pt-5 pb-5" id="haha">
            <div class="sectionwrap mx-auto pt-5">
                <h1 class="text-center text-dark" style="font-weight: 900; font-size:50px">KENAPA HARUS TRAVELLIN?</h1>
            </div>
            <div class="container mx-auto pt-5 row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="mt-5">
                        <div class="wrapperimg pb-3">
                            <img src="/img/praktis.png" class="praktis mx-auto" alt="...">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title text-center fw-bold">PRAKTIS</h4>
                            <p class="card-text text-center">Lakukan pemesanan dimanapun, kapanpun! Buat pemesanan dari
                                perangkat desktop maupun perangkat seluler anda.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="mt-5">
                        <div class="wrapperimg pb-3">
                            <img src="/img/artikel.png" class="praktis mx-auto" alt="...">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title text-center fw-bold">ARTIKEL</h4>
                            <p class="card-text text-center">Masih bingung pilih destinasi wisata? Tenang, travellin punya
                                fitur artikel yang penuh dengan rekomendasi wisata se Jawa Timur!</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="mt-5">
                        <div class="wrapperimg pb-3 pt-3">
                            <img src="/img/galeri.png" class="praktis mx-auto" alt="...">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title text-center fw-bold">Galeri</h4>
                            <p class="card-text text-center">Belum ada waktu buat jalan-jalan? Travellin punya fitur galeri,
                                kok! Bisa nih buat lihat-lihat destinasi dulu.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="splitter-white pt-0">
            <div class="sectionwrap mx-auto pt-5 pb-5 wrap2 bg-dark">
                <h1 class="text-center text-dark pt-3 pb-5 text-white" style="font-weight: 900; font-size:50px">Artikel
                    Terbaru!</h1>
            </div>
            <div class="row row-cols-1 row-cols-md-5 g-4 px-5 pb-5 bg-dark mx-auto">
                <div class="col">
                    <div class="card text-bg-secondary">
                        <img src="{{ asset('storage/' . $terbaru[0]->image) }}" alt="" class="card-img-top">
                        <div class="card-body">
                            <h4 class="card-title">{{ $terbaru[0]->judul }}</h4>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-bg-secondary">
                        <img src="{{ asset('storage/' . $terbaru[1]->image) }}" alt="" class="card-img-top">
                        <div class="card-body">
                            <h4 class="card-title">{{ $terbaru[1]->judul }}</h4>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-bg-secondary">
                        <img src="{{ asset('storage/' . $terbaru[2]->image) }}" alt="" class="card-img-top">
                        <div class="card-body">
                            <h4 class="card-title">{{ $terbaru[2]->judul }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
