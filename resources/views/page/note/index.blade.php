@extends('layouts.master')

@section('content')

    <section class="slice py-5 bg-section-secondary">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="mb-4">
                        <!-- Title -->
                        <h5 class="mb-0 mb-md-3">Категории</h5>
                        <!-- Nav -->
                        <ul class="nav nav-menu overflow-x flex-nowrap flex-md-column mx-n2">
                            <li class="nav-item px-2">
                                <a href="#" class="nav-link">Accounting</a>
                            </li>

                        </ul>
                    </div>
                    <!-- Sponsor card -->
                    <div class="card bg-secondary shadow-none d-none d-md-flex">
                        <a class="card-body" href="#">
                            <div class="d-flex justify-content-between mb-3">
                                <div class="icon icon-sm">
                                    <img alt="Image placeholder" src="" class="svg-inject img-fluid">
                                </div>
                                <span class="text-xs text-uppercase ls-1 text-muted">Sponsor</span>
                            </div>
                            <p class="text-sm mb-0">Bring your team together with Slack, the collaboration hub for amazing teams.</p>
                        </a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="row align-items-center mb-4">
                        <div class="col">
                            <!-- Title -->
                            <h1 class="h5 mb-0">
                                Заметки
                            </h1>
                        </div>
                        <div class="col-auto">
                            <button type="button" class="btn btn-sm btn-warning btn-icon">
                                <span class="btn-inner--text">Submit app</span>
                                <span class="btn-inner--icon"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span>
                            </button>
                        </div>
                    </div>
                    <div class="row mx-n2">
                        <div class="col-sm-6 col-lg-4 px-2">
                            <div class="card mb-3">
                                <!-- Card header -->
                                <div class="card-header pb-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <span class="h6"></span>
                                        </div>
                                        <div class="text-right">
                                            <div class="actions mr-n2">
                                                <a href="#" class="action-item"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-refresh-ccw"><polyline points="1 4 1 10 7 10"></polyline><polyline points="23 20 23 14 17 14"></polyline><path d="M20.49 9A9 9 0 0 0 5.64 5.64L1 10m22 4l-4.64 4.36A9 9 0 0 1 3.51 15"></path></svg></a>
                                                <div class="dropdown action-item" data-toggle="dropdown">
                                                    <a href="#" class="action-item"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="#" class="dropdown-item">Refresh</a>
                                                        <a href="#" class="dropdown-item">Manage Widgets</a>
                                                        <a href="#" class="dropdown-item">Settings</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card body -->
                                <div class="card-body pt-0">
                                    <!-- App logo + status -->
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <div class="icon icon-sm">
                                                <img alt="Image placeholder" src="" class="svg-inject" style="width: 50px; height: 50px;">
                                            </div>
                                        </div>
                                        <div class="text-right">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <span class="badge badge-xs badge-circle rounded-circle badge-success"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg></span>
                                                </div>
                                                <div class="pl-2">
                                                    <small class="h6 text-xs text-success">Installed</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- App title -->
                                    <div class="mt-3">
                                        <h6 class="mb-0">Airbnb</h6>
                                        <p class="mb-0 text-sm text-muted">
                                            Your subtitle comes here
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
