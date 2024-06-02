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


  <!--
        <div class="form-group">
            <label for="avatar">Upload Avatar</label>
            <input type="file" name="avatar" id="avatar" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
-->

@endsection
