@extends('layouts.main')

@section('container')
    
<div class="row justify-content-center">
    <div class="col-md-4">

        @if (session()->has('Success'))
            
         <div class="alert alert-success alert-dismissible fade show" role="alert">
             {{ session('Success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        @endif

        @if (session()->has('loginError'))
            
         <div class="alert alert-danger alert-dismissible fade show" role="alert">
             {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        @endif

        <main class="form-signin">
            <h1 class="h3 mb-3 fw-normal text-center mt-5">Please Login</h1>
            <i class="bi bi-person-circle d-block text-center display-1"></i>
            <form action="/login" method="POST">
                @csrf
                <div class="form-floating mb-3 mt-3">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                    <label for="email">Email address</label>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                    <label for="password">Password</label>
                </div>
                <button class="w-100 btn btn-lg btn-danger" type="submit">Login</button>
            </form>
            <small class="d-block text-center mt-3">Not registered? <a href="/register">Register Now!</a></small>
        </main>
    </div>
</div>

@endsection