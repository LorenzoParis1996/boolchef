@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                @if (session('not-auth'))
                    <div class="alert alert-danger">
                        {{ session('not-auth') }}
                    </div>
                @endif
<<<<<<< HEAD
                <div class="card">
                    <div class="card-header">{{ __('Accedi come Chef') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}" novalidate>
                            @csrf
=======

                <div class="card">
                    <div class="card-header">{{ __('Accedi come Chef') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}" novalidate>
                            @csrf

                            <!-- Email -->
                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('E-mail') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <span class="invalid-feedback" role="alert"></span>
                                </div>
                            </div>
>>>>>>> 91bcd1fd2c56edd611a1546364c7931d7a625db1

                            <!-- Password -->
                            <div class="row mb-3">
<<<<<<< HEAD
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('E-mail') }}</label>
=======
                                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
>>>>>>> 91bcd1fd2c56edd611a1546364c7931d7a625db1

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>

<<<<<<< HEAD
                                    @error('email')
=======
                                    @error('password')
>>>>>>> 91bcd1fd2c56edd611a1546364c7931d7a625db1
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <span class="invalid-feedback" role="alert"></span>
                                </div>
<<<<<<< HEAD

                                <div class="row mb-3">
                                    <label for="password"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                        <span class="invalid-feedback" role="alert"></span>
=======
                            </div>

                            <!-- Remember Me -->
                            <div class="row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember"
                                            id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Ricordami') }}
                                        </label>
>>>>>>> 91bcd1fd2c56edd611a1546364c7931d7a625db1
                                    </div>

<<<<<<< HEAD
                                    <div class="row mb-3">
                                        <div class="col-md-6 offset-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember"
                                                    id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="form-check-label" for="remember">
                                                    {{ __('Ricordami') }}
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-0">
                                        <div class="col-md-8 offset-md-4">
                                            <button type="submit" class="btn btn-warning">
                                                {{ __('Accedi') }}
                                            </button>

                                            @if (Route::has('password.request'))
                                                <a class="btn btn-link text-decoration-none"
                                                    href="{{ route('password.request') }}">
                                                    {{ __('Non ricordi la password?') }}
                                                </a>
                                            @endif
                                        </div>
                                    </div>
=======
                            <!-- Submit Button and Forgot Password Link -->
                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-warning">
                                        {{ __('Accedi') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link text-decoration-none"
                                            href="{{ route('password.request') }}">
                                            {{ __('Non ricordi la password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>

>>>>>>> 91bcd1fd2c56edd611a1546364c7931d7a625db1
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    @vite('resources/js/myScript/login-validation.js')
@endsection

