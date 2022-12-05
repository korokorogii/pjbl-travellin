@extends('layouts.main')

@section('container')
<div class="row justify-content-center">

  @if(Session::has('success'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif

  @if(Session::has('loginError'))
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{ session('loginError') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif

    <div class="col-lg-5">
        <main class="form-signin w-100 m-auto card px-5 py-4 rounded">
            <form action="/login" method="post">
              @csrf
              <h2 class="mb-3 fw-semibold text-center">Login</h2>
              <p class="text-center">Ayo masukkan detail informasimu untuk melakukan login!</p>
          
              <div class="form-floating pb-3">
                <input type="email" name="email" class="form-control @error('email')
                  is-invalid
                @enderror" id="floatingInput" placeholder="name@example.com" autofocus value="{{ old('email') }}">
                <label for="floatingInput">Alamat Surel</label>
                @error('email')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control @error('password')
                  is-invalid
                @enderror" id="password" placeholder="Password">
                <label for="floatingPassword">Kata Sandi</label>
                @error('password')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
              <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
              <p class="text-center pt-3">Belum memiliki akun? <a href="/register">Buat sekarang!</a></p>
              <p class="mt-2 mb-3 text-muted text-center">&copy; Travellin, 2022</p>
            </form>
          </main>
    </div>
</div>
@endsection