@extends('layouts.master')

@section('content')

    <section class="pt-5 bg-section-secondary">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <img id="avatar-image" src="{{ Auth::user()->avatar_url }}" class="avatar avatar-xl rounded-circle" style="cursor: pointer;">
                        </div>
                        <div class="col ml-n3 ml-md-n2">
                            <h2 class="mb-0">{{ Auth::user()->name }}</h2>
                        </div>
                    </div>
                    <div class="mt-4">
                        <ul class="nav nav-tabs overflow-x">
                            <li class="nav-item">
                                <a href="{{ route('profile') }}" class="nav-link">Настройки</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <form id="avatar-form" action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data" style="display: none;">
            @csrf
            @method('PUT')
            <input type="file" name="avatar" id="avatar-input">
        </form>
    </section>


    <!--
    <x-head.tinymce-config/>


    <form method="post">
        <textarea id="myeditorinstance"></textarea>
    </form>

-->

    <div class="container">

        <div class="my-3">
            <!-- Title -->
            <h5 class="my-3">Основная информация</h5>
            <!-- Form -->
            <form method="post" action="{{route('profile.update_info')}}">
                @csrf
                <!-- General information -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-control-label">ФИО</label>
                            <input class="form-control" type="text" name="name" value="{{ Auth::user()->name }}" placeholder="Enter your first name">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-control-label">Компания</label>
                            <input class="form-control" value="{{ Auth::user()->company }}" type="text" name="company" placeholder="Also your last name">
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-control-label">Email</label>
                            <input class="form-control" type="email" name="email" value="{{ Auth::user()->email }}" placeholder="name@exmaple.com">
                            <small class="form-text text-muted mt-2">This is the main email address that we'll send notifications.</small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-control-label">Телефон</label>
                            <input class="form-control" type="text" value="{{ Auth::user()->phone }}" name="phone" placeholder="+40-777 245 549">
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-control-label">Дата рождения</label>
                            <input type="text" name="birthday" value="{{ Auth::user()->birthday }}" class="form-control flatpickr-input active" data-toggle="date" placeholder="Select your birth date">
                        </div>
                    </div>

                </div>
                <!-- Buttons -->
                <div class="mt-3">
                    <button type="submit" class="btn btn-sm btn-primary">Сохранить</button>
                </div>
            </form>
        </div>

    </div>




    <script>
        $(document).ready(function() {
            $('#avatar-image').on('click', function() {
                $('#avatar-input').click();
            });

            $('#avatar-input').on('change', function() {
                $('#avatar-form').submit();
            });
        });
    </script>



@endsection
