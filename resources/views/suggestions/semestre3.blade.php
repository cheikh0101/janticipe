@extends('template')
@section('content')
<div class="container py-5" id="featured-3">
    <div class="accordion accordion-flush" id="accordionFlushExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    <h5>&hearts; SD en wolof &hearts;</h5>
                </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <div class="row g-5 py-5">
                        <div class="feature col-md-4">
                            <div class="card border-0 shadow">
                                <img src="../img/code/{{rand(1,5)}}.png" class="card-img-top" alt="...">
                                <div class="card-body text-center">
                                    <h5 class="card-title mb-0">.</h5>
                                    <div class="card-text text-black-50"> <a href="https://youtu.be/4ORzTYO4KXc">
                                            Les SD en Wolof 1
                                        </a></div>
                                </div>
                            </div>
                        </div>
                        <div class="feature col-md-4">
                            <div class="card border-0 shadow">
                                <img src="../img/code/{{rand(1,5)}}.png" class="card-img-top" alt="...">
                                <div class="card-body text-center">
                                    <h5 class="card-title mb-0">.</h5>
                                    <div class="card-text text-black-50"> <a href="https://youtu.be/NGdhclVrej0">
                                            Les SD en Wolof 2
                                        </a></div>
                                </div>
                            </div>
                        </div>
                        <div class="feature col-md-4">
                            <div class="card border-0 shadow">
                                <img src="../img/code/{{rand(1,5)}}.png" class="card-img-top" alt="...">
                                <div class="card-body text-center">
                                    <div class="card-text text-black-50">
                                        <a href="https://youtu.be/bEnDQgnJ9SA">
                                            Les SD en Wolof 3
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    <h5>Développement Web 1</h5>
                </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <div class="row g-5 py-5">
                        <div class="feature col-md-4">
                            <div class="card border-0 shadow">
                                <img src="../img/code/{{rand(1,5)}}.png" class="card-img-top" alt="...">
                                <div class="card-body text-center">
                                    <h5 class="card-title mb-0">.</h5>
                                    <div class="card-text text-black-50"> <a
                                            href="https://openclassrooms.com/fr/courses/1946386-comprendre-le-web">
                                            Le WEB
                                        </a></div>
                                </div>
                            </div>
                        </div>
                        <div class="feature col-md-4">
                            <div class="card border-0 shadow">
                                <img src="../img/code/{{rand(1,5)}}.png" class="card-img-top" alt="...">
                                <div class="card-body text-center">
                                    <h5 class="card-title mb-0">.</h5>
                                    <div class="card-text text-black-50"> <a
                                            href="https://www.w3schools.com/whatis/default.asp">
                                            Feuille de route
                                        </a></div>
                                </div>
                            </div>
                        </div>
                        <div class="feature col-md-4">
                            <div class="card border-0 shadow">
                                <img src="../img/code/{{rand(1,5)}}.png" class="card-img-top" alt="...">
                                <div class="card-body text-center">
                                    <div class="card-text text-black-50">
                                        <a
                                            href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3">
                                            Les Bases
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row g-5 py-5">
                        <div class="feature col-md-4">
                            <div class="card border-0 shadow">
                                <img src="../img/tutorial.png" class="card-img-top" alt="...">
                                <div class="card-body text-center">
                                    <div class="card-text text-black-50"> <a
                                            href="https://openclassrooms.com/fr/courses/6391096-creez-des-sites-web-responsive-avec-bootstrap-4">
                                            Bootstrap 4
                                        </a></div>
                                </div>
                            </div>
                        </div>
                        <div class="feature col-md-4">
                            <div class="card border-0 shadow">
                                <img src="../img/tutorial.png" class="card-img-top" alt="...">
                                <div class="card-body text-center">
                                    <div class="card-text text-black-50"> <a
                                            href="https://openclassrooms.com/fr/courses/6175841-apprenez-a-programmer-avec-javascript">
                                            JS
                                        </a></div>
                                </div>
                            </div>
                        </div>
                        <div class="feature col-md-4">
                            <div class="card border-0 shadow">
                                <img src="../img/code/{{rand(1,5)}}.png" class="card-img-top" alt="...">
                                <div class="card-body text-center">
                                    <div class="card-text text-black-50">
                                        <a
                                            href="https://www.youtube.com/watch?v=kgyqJ_oXN6M&list=PLA6zApbO92QbZ5gJaGcfgzmtuPMdJTOkQ&index=4">
                                            Introduction
                                            au langage de programmation C 2
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    <h5>Introduction aux réseaux</h5>
                </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <div class="row g-5 py-5">
                        <div class="feature col-md-4">
                            <div class="card border-0 shadow">
                                <img src="../img/cours.png" class="card-img-top" alt="...">
                                <div class="card-body text-center">
                                    <div class="card-text text-black-50">
                                        <a
                                            href="http://user.oc-static.com/pdf/346829-apprenez-le-fonctionnement-des-reseaux-tcp-ip.pdf">
                                            Les
                                            bases en réseau
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="feature col-md-4">
                            <div class="card border-0 shadow">
                                <img src="../img/tutorial.png" class="card-img-top" alt="...">
                                <div class="card-body text-center">
                                    <div class="card-text text-black-50">
                                        <a href="https://youtu.be/py1E14pXfAM?list=PLrSOXFDHBtfHKxuz6NySItyf4iSEcTw97">Introduction
                                            à GNU/Linux</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="feature col-md-4">
                            <div class="card border-0 shadow">
                                <img src="../img/tutorial.png" class="card-img-top" alt="...">
                                <div class="card-body text-center">
                                    <div class="card-text text-black-50">
                                        <a href="https://youtu.be/0i2WTmKktbE?list=PLrSOXFDHBtfHKxuz6NySItyf4iSEcTw97">
                                            Installation du système
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    <h5>Introduction aux bases de données</h5>
                </button>
            </h2>
            <div id="-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <div class="row g-5 py-5">
                        <div class="feature col-md-4">
                            <div class="card border-0 shadow">
                                <img src="../img/cours.png" class="card-img-top" alt="...">
                                <div class="card-body text-center">
                                    <div class="card-text text-black-50">
                                        <a
                                            href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/915107-les-fonctions-sql">Apprendre
                                            le Mysql en compagnie de PHP</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="feature col-md-4">
                            <div class="card border-0 shadow">
                                <img src="../img/tutorial.png" class="card-img-top" alt="...">
                                <div class="card-body text-center">
                                    <div class="card-text text-black-50">
                                        <a href="https://www.w3schools.com/mysql/">
                                            Tutoriels pour mieux maitriser MySQL
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="feature col-md-4">
                            <div class="card border-0 shadow">
                                <img src="../img/tutorial.png" class="card-img-top" alt="...">
                                <div class="card-body text-center">
                                    <div class="card-text text-black-50">
                                        <a
                                            href="https://www.w3schools.com/mysql/trymysql.asp?filename=trysql_select_columns">
                                            Pratiquez Mysql
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
