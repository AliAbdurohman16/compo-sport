@extends('layouts.mazer')

@section('main')
    <div class="auth-logo">
        <a href="index.html">
            <img src="assets/images/logo/logo.svg" alt="Logo">
        </a>
    </div>
    <h1 class="auth-title">Log in.</h1>
    <p class="auth-subtitle mb-5">
        Log in with your data that you entered during registration.
    </p>
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-group position-relative has-icon-left mb-4">
            <input type="text" name="email" class="form-control form-control-xl @error('email')is-invalid @enderror"
                value="{{ old('email') }}" required autocomplete="email" autofocus>
            <div class="form-control-icon">
                <i class="bi bi-envelope"></i>
            </div>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group position-relative has-icon-left mb-4">
            <input type="password" name="password"
                class="form-control form-control-xl @error('password')is-invalid @enderror">
            <div class="form-control-icon">
                <i class="bi bi-shield-lock"></i>
            </div>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-check form-check-lg d-flex align-items-end">
            <input class="form-check-input me-2" name="remember" type="checkbox" id="remember"
                {{ old('remember') ? 'checked' : '' }}>
            <label class="form-check-label text-gray-600" for="remember"> {{ __('Remember Me') }}
            </label>
        </div>
        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5" type="submit">
            {{ __('Login') }}
        </button>

        @if (Route::has('password.request'))
            <a class="btn btn-link" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
        @endif
    </form>
@endsection