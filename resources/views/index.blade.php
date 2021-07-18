@extends('template')
@section('content')
<div class="container col-xxl-8 px-4 py-0">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6">
            <img src="img/cours.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700"
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
            <img src="img/exams.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700"
                height="200" loading="lazy">
        </div>
    </div>
</div>

<div class="container py-5">
    <h2 class="pb-2 border-bottom">Partage</h2>
    <div class="row g-5 py-5">
        <div class="col-md-4 d-flex align-items-start">
            <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
                <i class="fa fa-keyboard-o" aria-hidden="true"></i>
            </div>
            <div>
                <h2>Projets</h2>
                <p>Le chemin est long du projet à la chose</p>
                <a href="/projets" class="btn btn-primary">
                    Découvrir
                </a>
            </div>
        </div>
        <div class="col-md-4 d-flex align-items-start">
            <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
                <i class="fa fa-code" aria-hidden="true"></i>
            </div>
            <div>
                <h2>Forum</h2>
                <p>Forum dédié à l'informatique et aux nouvelles technologies,du dépannage matériel à l'assistance ou
                    l'entraide sur l'utilisation des logiciels.</p>
                <a href="#" class="btn btn-primary">
                    Disponible Bientôt
                </a>
            </div>
        </div>
        <div class="col-md-4 d-flex align-items-start">
            <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
                <i class="fa fa-quote-left" aria-hidden="true"></i>
            </div>
            <div>
                <h2>Blog</h2>
                <p>Blog contenant des articles en lien avec l'informatique.Nous mettons à votre disposition des outils
                    et informations pertinentes pour vous aider au quotidien.</p>
                <a href="#" class="btn btn-primary">
                    Disponible Bientôt
                </a>
            </div>
        </div>
    </div>
</div>

@if (session('jumelage') != true)
<button class="btne btn-primary d-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop"
    aria-controls="offcanvasTop">Toggle top offcanvas</button>
<div class="offcanvas offcanvas-top bg-secondary text-white " tabindex="-1" id="offcanvasTop"
    aria-labelledby="offcanvasTopLabel">
    <div class="offcanvas-header">
        <h5 id="offcanvasTopLabel">Jumelage 2020-2021</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <p>
            Comme chaque année au niveau de la LI de l'UIDT un 🤩jumelage🤩 s'effectue entre la LI2 et la LI1.
            <br>
            Si tu ne t'es pas encore inscris alors c'est le  🤩MOMENT🤩.
        </p>
        <a href="/jumelage" class="btn btn-primary">Je m'inscris</a>
    </div>
</div>
<script>
    const Modal = document.querySelector('.offcanvas');
Modal.style.display = "none";
const boutonTrigger = document.querySelector('.btne');
boutonTrigger.style.display = "none";

window.addEventListener('scroll', myfunc);
let x = 0;
function myfunc() {
    x += 1;
    console.log(x);
    if (x == 5) {
        boutonTrigger.click();
        Modal.style.display = "block";

    }
}
</script>
@endif
@endsection