@extends('template')
@section('content')
<div class="container py-5" id="featured-3">
    <div class="accordion accordion-flush" id="accordionFlushExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    <h5>Développement Web 2</h5>
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
                                    <div class="card-text text-black-50"> <a
                                            href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql">
                                            Apprendre PHP
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
                                            href="https://www.youtube.com/watch?v=vk6hvBETCDo&t=2028s">Bonjour
                                            Django.
                                        </a></div>
                                </div>
                            </div>
                        </div>
                        <div class="feature col-md-4">
                            <div class="card border-0 shadow">
                                <img src="../img/code/{{rand(1,5)}}.png" class="card-img-top" alt="...">
                                <div class="card-body text-center">
                                    <div class="card-text text-black-50">
                                        <a href="https://youtu.be/ZbKRogkbE6c?list=PL4aesujMK8HSOwgOauTiAgKdqBg_sY2_V">TP
                                            avec PHP</a>
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
                    <h5>POO 1</h5>
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
                                    <div class="card-text text-black-50">
                                        <a
                                            href="https://drive.google.com/file/d/1rIJ6dRBUq1bIqDOLgwshTFeqAZLTFlxb/view?usp=sharing">Apprenez
                                            à
                                            programmer en JAVA &smile; </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="feature col-md-4">
                            <div class="card border-0 shadow">
                                <img src="../img/code/{{rand(1,5)}}.png" class="card-img-top" alt="...">
                                <div class="card-body text-center">
                                    <div class="card-text text-black-50">
                                        <a
                                            href="https://openclassrooms.com/fr/courses/4302126-decouvrez-la-programmation-orientee-objet-avec-python">Apprendre
                                            à programmer en Python</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="feature col-md-4">
                            <div class="card border-0 shadow">
                                <div class="card-body text-center">
                                    <div class="card-text text-black-50">
                                        La programmation orientée objet (POO) est un paradigme informatique consistant à
                                        définir et
                                        à
                                        faire interagir des objets grâce à différentes technologies, notamment les
                                        langages de
                                        programmation
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
                    <h5>
                        Technologies XML
                    </h5>
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
                                            href="http://user.oc-static.com/pdf/664330-structurez-vos-donnees-avec-xml.pdf">Tout
                                            ce qu'il faut savoir sur le XML </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="feature col-md-4">
                            <div class="card border-0 shadow">
                                <img src="../img/tutorial.png" class="card-img-top" alt="...">
                                <div class="card-body text-center">
                                    <div class="card-text text-black-50">
                                        <a href="https://www.youtube.com/watch?v=iLY_-vXEsCI">Une série de vidéo sur
                                            xml
                                            (théorie et pratique) -- Part 1</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="feature col-md-4">
                            <div class="card border-0 shadow">
                                <img src="../img/code/{{rand(1,5)}}.png" class="card-img-top" alt="...">
                                <div class="card-body text-center">
                                    <div class="card-text text-black-50">
                                        <a href="https://www.youtube.com/watch?v=68YAczzygDI&t=82s">Une série de
                                            vidéo
                                            sur xml (théorie et pratique) -- Part 2</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row g-5 py-5">
                        <div class="feature col-md-4">
                            <div class="card border-0 shadow">
                                <img src="../img/code/{{rand(1,5)}}.png" class="card-img-top" alt="...">
                                <div class="card-body text-center">
                                    <div class="card-text text-black-50">
                                        <a href="https://www.youtube.com/watch?v=0ef-t3m216s&t=6s">Une série de
                                            vidéo
                                            sur xml (théorie et pratique) -- Part 3</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="feature col-md-4">
                            <div class="card border-0 shadow">
                                <img src="../img/tutorial.png" class="card-img-top" alt="...">
                                <div class="card-body text-center">
                                    <div class="card-text text-black-50">
                                        <a href="https://www.youtube.com/watch?v=SUptsOhB8Rk&t=132s">Une série de
                                            vidéo
                                            sur xml (théorie et pratique) -- Part 4</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="feature col-md-4">
                            <div class="card border-0 shadow">
                                <img src="../img/code/{{rand(1,5)}}.png" class="card-img-top" alt="...">
                                <div class="card-body text-center">
                                    <div class="card-text text-black-50">
                                        <a href="https://www.youtube.com/watch?v=gMI3Mko9rKk&t=240s">Une série de
                                            vidéo
                                            sur xml (théorie et pratique) -- Part 5</a>
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
