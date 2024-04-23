@extends('layouts.auth')

@section('content')
    <h5 class="text-dark fw-bold mb-4">Sign In</h5>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="mb-3">
            <label for="email" class="mb-1">{{ __('Alamat Email') }}</label>
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                value="{{ old('email') }}" placeholder="Tulis alamat email kamu" required autocomplete="email" autofocus>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password" class="mb-1">Password</label>
            <input type="password" name="password" class="form-control @error('email') is-invalid @enderror"
                placeholder="Masukkan password kamu" required autocomplete="current-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <button class="btn btn-primary d-block w-100" type="submit">Sign In</button>
    </form>

@endsection
