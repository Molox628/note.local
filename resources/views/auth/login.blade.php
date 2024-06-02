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
                                    <h6 class="h3 mb-1">Авторизация</h6>
                                    <p class="text-muted mb-0">Войдите для продолжения</p>
                                </div>
                                <span class="clearfix"></span>
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label class="form-control-label">Email</label>
                                        <div class="input-group input-group-merge">
                                            <input type="email" name="email" class="form-control form-control-prepend" id="input-email" placeholder="name@example.com">
                                            <div class="input-group-prepend " >
                                                <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg></span>
                                            </div>
                                        </div>

                                        @error('email')
<script>

    toastr["warning"]("Email не найден", "Ошибка")
</script>
                                        @enderror




                                    </div>
                                    <div class="form-group mb-0">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div>
                                                <label class="form-control-label">Пароль</label>
                                            </div>
                                            <div class="mb-2">
                                                <a href="#" class="small text-muted text-underline--dashed border-primary" data-toggle="password-text" data-target="#input-password">Показать пароль</a>
                                            </div>

                                            @error('password')
                                            <script>

                                                toastr["warning"]("Не верный логин или пароль", "Ошибка")
                                            </script>
                                            @enderror
                                        </div>
                                        <div class="input-group input-group-merge">
                                            <input type="password" name="password" class="form-control form-control-prepend" id="input-password" placeholder="Пароль">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-key"><path d="M21 2l-2 2m-7.61 7.61a5.5 5.5 0 1 1-7.778 7.778 5.5 5.5 0 0 1 7.777-7.777zm0 0L15.5 7.5m0 0l3 3L22 7l-3-3m-3.5 3.5L19 4"></path></svg></span>
                                            </div>
                                        </div>
                                        <!-- Links -->
                                        <div class="mt-4 text-center">
                                            <a href="{{route('password.request')}}" class="small font-weight-bold">Востановить пароль</a>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <button type="submit" class="btn btn-block btn-primary">Войти</button></div>
                                </form>

                                <!-- Links -->
                                <div class="mt-4 text-center"><small>Не рарегистрирован?</small>
                                    <a href="{{route('register')}}" class="small font-weight-bold">Создать аккаунт</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




@endsection
