@extends('login.main')

@section('formlogin')
    <div class="container-fluid d-flex justify-content-center align-items-center vh-100" style="background-image: url('background-image.jpg'); background-size: cover;">
        <div class="card shadow-lg p-3 mb-5 bg-body rounded" style="width: 25rem; background-color: #f8f9fa;">
            <div class="card-header text-center bg-white text-white">
                <h3 style="color: #000000;">Login</h3>
            </div>

            @if (session()->has('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert" style="background-color: #dc3545; color: #fff;">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="card-body">
                <form method="post" action="/">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="email">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3 position-relative"> <!-- Menambahkan kelas "position-relative" untuk penempatan ikon mata -->
                        <label for="password" class="form-label">Password</label>
                        <div class="input-group">
                            <input type="password" name="password" class="form-control password-toggle @error('password') is-invalid @enderror" id="password">
                            <button class="btn btn-outline-secondary password-toggle-btn" type="button">
                                <i class="bi bi-eye"></i>
                            </button>
                        </div>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    
                    <div class="row my-2">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-dark btn-block w-100 hover-effect">Log In</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-footer text-center">
                <p class="text-dark">Belum punya akun? <a href="{{ route('register') }}" class="hover-effect">Buat akun</a></p>
            </div>
        </div>
    </div>
@endsection
