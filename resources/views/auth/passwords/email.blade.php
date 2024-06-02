@extends('layouts.auth-master')

@section('content')
    <section class="section-half-rounded bg-cover bg-size--cover py-4 py-sm-0" style="background-image: url(../../assets/img/backgrounds/img-3.jpg);">
        <div class="container-fluid d-flex flex-column">
            <div class="row align-items-center min-vh-100">
                <div class="col-md-6 col-lg-5 col-xl-4 mx-auto">
                    <div class="card shadow-lg border-0 mb-0">
                        <div class="card-body py-5 px-sm-5">
                            <div>
                                <div class="mb-5 text-center">
                                    <h6 class="h3 mb-1">Сброс пароля</h6>
                                    <p class="text-muted mb-0">Вы можете сбросить ваш пароль</p>
                                </div>
                                <span class="clearfix"></span>
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                <form method="POST" action="{{ route('password.email') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="email" class="form-control-label">{{ __('Email') }}</label>
                                        <div class="input-group input-group-merge">
                                            <input type="email" id="email" name="email" class="form-control form-control-prepend @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                            <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-at-sign">
                                                    <circle cx="12" cy="12" r="4"></circle>
                                                    <path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94"></path>
                                                </svg>
                                            </span>
                                            </div>
                                        </div>
                                        @error('email')
                                        <script>
                                            toastr["warning"]("{{ $message }}", "Ошибка");
                                        </script>
                                        @enderror
                                    </div>
                                    <div class="row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary">Сброс пароля</button>
                                        </div>
                                    </div>
                                </form>
                                <!-- Links -->
                                <div class="mt-4 text-center">
                                    <small>Нет аккаунта?</small>
                                    <a href="{{route('register')}}" class="small font-weight-bold">Создать</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
