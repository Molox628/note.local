@extends('layouts.auth-master')

@section('content')

    @if(false)
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endif

    <section class="section-half-rounded bg-cover bg-size--cover py-4 py-sm-0" style="background-image: url(../../assets/img/backgrounds/img-3.jpg);">
        <div class="container-fluid d-flex flex-column">
            <div class="row align-items-center min-vh-100">
                <div class="col-md-6 col-lg-5 col-xl-4 mx-auto">
                    <div class="card shadow-lg border-0 mb-0">
                        <div class="card-body py-5 px-sm-5">
                            <div>
                                <div class="mb-5 text-center">
                                    <h6 class="h3 mb-1">Авторизация</h6>
                                    <p class="text-muted mb-0">Войдите для продолжения</p>
                                </div>
                                <span class="clearfix"></span>
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label class="form-control-label">Email</label>
                                        <div class="input-group input-group-merge">
                                            <input type="email" class="form-control form-control-prepend @error('email') is-invalid @enderror" id="input-email" placeholder="name@example.com">
                                            <div class="input-group-prepend " >
                                                <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg></span>
                                            </div>
                                        </div>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>




                                        @enderror
                                    </div>
                                    <div class="form-group mb-0">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div>
                                                <label class="form-control-label">Пароль</label>
                                            </div>
                                            <div class="mb-2">
                                                <a href="#" class="small text-muted text-underline--dashed border-primary @error('password') is-invalid @enderror" data-toggle="password-text" data-target="#input-password">Показать пароль</a>
                                            </div>
                                        </div>
                                        <div class="input-group input-group-merge">
                                            <input type="password" class="form-control form-control-prepend" id="input-password" placeholder="Пароль">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-key"><path d="M21 2l-2 2m-7.61 7.61a5.5 5.5 0 1 1-7.778 7.778 5.5 5.5 0 0 1 7.777-7.777zm0 0L15.5 7.5m0 0l3 3L22 7l-3-3m-3.5 3.5L19 4"></path></svg></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <button type="submit" class="btn btn-block btn-primary">Войти</button></div>
                                </form>

                                <!-- Links -->
                                <div class="mt-4 text-center"><small>Не рарегистрирован?</small>
                                    <a href="register-overlay.html" class="small font-weight-bold">Создать аккаунт</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
