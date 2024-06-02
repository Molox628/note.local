@extends('layouts.master')

@section('content')

    <section class="slice py-5">
        <div class="container">
            <div class="row row-grid align-items-center">
                <div class="col-12 col-md-5 col-lg-6 order-md-2">
                    <figure class="w-100"><img alt="Image placeholder"
                                               src="../../assets/img/svg/illustrations/illustration-1.svg"
                                               class="img-fluid mw-md-120"></figure>
                </div>
                <div class="col-12 col-md-7 col-lg-6 order-md-1 pr-md-5"><h1
                        class="display-4 text-center text-md-left mb-3">UniverseNote - самый технологчиный <strong
                            class="text-primary">сервис заметок</strong></h1>
                    <p class="lead text-center text-md-left text-muted">Создавай, редактируй, делись!</p>
                    <div class="text-center text-md-left mt-5">
                        <a href="#" class="btn btn-primary btn-icon">
                            <span class="btn-inner--text">Начать</span>
                            <span class="btn-inner--icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                            </span>
                        </a>
                        <a href="#"  class="btn btn-neutral btn-icon d-none d-lg-inline-block">API документауия</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="slice slice-lg pt-lg-6 pb-0 pb-lg-6">
        <div class="container">
            <div class="row justify-content-lg-end">
                <div class="col-lg-5 text-lg-right"><h6 class="display-4 text-danger">3k+</h6>
                    <p class="lh-180 mb-3">Нам всё ровно на национальное законодетаельво...
                    </p>
                </div>
                <div class="col-lg-6">
                    <h3 class="display-4 lh-130">Уже поделились успехами &amp; идеями</h3>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-4">
                    <div class="card border-0 bg-soft-danger">
                        <div class="card-body pb-5">
                            <div class="pt-4 pb-5"><img src="../../assets/img/svg/illustrations/illustration-5.svg"
                                                        class="img-fluid img-center" style="height:200px"
                                                        alt="Illustration"></div>
                            <h5 class="h4 lh-130 text-dark mb-3">Unleash you creativity</h5>
                            <p class="text-dark opacity-6 mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, vel.</p></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 bg-soft-success mt-lg-5">
                        <div class="card-body pb-5">
                            <div class="pt-4 pb-5"><img src="../../assets/img/svg/illustrations/illustration-6.svg"
                                                        class="img-fluid img-center" style="height:200px"
                                                        alt="Illustration"></div>
                            <h5 class="h4 lh-130 text-dark mb-3">Get more results</h5>
                            <p class="text-dark opacity-6 mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore nisi quibusdam recusandae!</p></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 bg-soft-warning mt-lg-7">
                        <div class="card-body pb-5">
                            <div class="pt-4 pb-5"><img src="../../assets/img/svg/illustrations/illustration-7.svg"
                                                        class="img-fluid img-center" style="height:200px"
                                                        alt="Illustration"></div>
                            <h5 class="h4 lh-130 text-dark mb-3">Increase your audience</h5>
                            <p class="text-dark opacity-6 mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor eveniet fugiat laudantium saepe sunt.</p></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

