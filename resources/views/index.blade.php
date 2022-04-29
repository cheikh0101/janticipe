@extends('template')
@section('content')
    <div class="container col-xxl-8 px-4 py-0">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="img/online_school_SVG.svg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700"
                    height="200" loading="lazy">
            </div>
            <div class="col-lg-6">
                <h1 class="display-5 fw-bold lh-1 mb-3">Cours</h1>
                <p class="lead">
                    <b>J'Anticipe</b> est une plateforme regroupant tous les Cours Magistraux,les TD/TP, les projets et
                    bien
                    d'autres surprises
                    dans le but d'aider les étudiants de la Licence Informatique de l'UIDT de mieux appréhender l'année
                    universitaire en anticipant
                    sur les cours afin d'avoir des résultats meilleurs.
                </p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <div class="btn-group">
                        <button class="btn btn-primary btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Tous les cours
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/cours/s1">Semestre 1</a></li>
                            <li><a class="dropdown-item" href="/cours/s2">Semestre 2</a></li>
                            <li><a class="dropdown-item" href="/cours/s3">Semestre 3</a></li>
                            <li><a class="dropdown-item" href="/cours/s4">Semestre 4</a></li>
                            <li><a class="dropdown-item" href="/cours/s5">Semestre 5</a></li>
                            <li><a class="dropdown-item" href="/cours/s6">Semestre 6</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container col-xxl-8 px-4 py-0">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <h1 class="display-5 fw-bold lh-1 mb-3">TD/TP/EXAMENS</h1>
                <p class="lead"><b>J'Anticipe</b>, plateforme regroupant un bon nombre des TD/TP,et bien
                    d'autres surprises
                    dans le but d'aider les étudiants de la Licence Informatique de l'UIDT de mieux appréhender l'année
                    universitaire en anticipant
                    sur les cours afin d'avoir des résultats meilleurs.</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <div class="btn-group">
                        <button class="btn btn-primary btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Découvrir
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/td/s1">Semestre 1</a></li>
                            <li><a class="dropdown-item" href="/td/s2">Semestre 2</a></li>
                            <li><a class="dropdown-item" href="/td/s3">Semestre 3</a></li>
                            <li><a class="dropdown-item" href="/td/s4">Semestre 4</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <img src="img/Books_SVG.svg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700"
                    height="200" loading="lazy">
            </div>
        </div>
    </div>
@endsection
