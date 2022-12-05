@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-lg-5">
        <main class="form-registration w-100 m-auto card px-5 py-4 rounded">
            <form action="/register" method="post">
              @csrf
              <h2 class="mb-3 fw-semibold text-center">Register</h2>
              <p class="text-center">Ayo masukkan detail informasimu untuk melakukan pendaftaran!</p>
          
              <div class="form-floating pb-3">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="name@example.com" id="floatingEmail" value="{{ old('email') }}">
                <label for="floatingEmail">Alamat Surel</label>
                @error('email')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                  @enderror  
              </div>
              <div class="form-floating pb-3">
                <input type="text" name="username" class="form-control @error('username')
                    is-invalid
                @enderror" id="floatingUsn" placeholder="name@example.com" value="{{ old('username') }}">
                <label for="floatingUsn">Username</label>
                @error('username')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                @enderror  
              </div>
              <div class="form-floating pb-3">
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="floatingName" placeholder="name@example.com" value="{{ old('name') }}">
                <label for="floatingName">Nama Lengkap</label>
                @error('name')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                @enderror 
              </div> 
              <div class="form-floating pb-3">
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password" value="{{ old('password') }}">
                <label for="floatingPassword">Kata Sandi</label>
                @error('password')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                @enderror  
              </div>
              <button class="w-100 btn btn-lg btn-primary" type="submit">Daftar</button>
              <p class="text-center pt-3">Sudah memiliki akun? <a href="/login">Login sekarang!</a></p>
              <p class="mt-2 mb-3 text-muted text-center">&copy; Travellin, 2022</p>
            </form>
          </main>
    </div>
</div>
@endsection