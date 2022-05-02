@extends('template')
@section('content')
    <div class="container py-5" id="featured-3">
        <h2 class="pb-2 border-bottom">TD Semestre 3</h2>
        <div class="row g-5 py-5">
            <div class="feature col-md-4">
                <h2>Mathématiques</h2>
                <ul>
                    <li>
                        Probabilités et Statistiques
                    </li>

                    <li>
                        Calcul Numérique
                    </li>
                </ul>
                <a href="#" class="icon-link">
                    Non Disponible
                </a>
            </div>
            <div class="feature col-md-4">
                <h2>Réseaux et Systèmes d'exploitation</h2>
                <ul>
                    <li>
                        Réseaux
                    </li>
                    <li>
                        Systèmes d'exploitation
                    </li>
                </ul>
                <a href="#" class="icon-link" data-bs-toggle="modal" data-bs-target="#tdreseaux">
                    Découvrir
                </a>
            </div>
            <div class="feature col-md-4">
                <h2>Informatique et Systèmes d'informations</h2>
                <ul>
                    <li>
                        Informatique
                    </li>
                    <li>
                        Systèmes d'informations
                    </li>
                </ul>
                <a href="#" class="icon-link" data-bs-toggle="modal" data-bs-target="#tdbdd">
                    Découvrir
                </a>
            </div>
        </div>
    </div>

    <!-- Modal Reseaux-->
    <div class="modal fade" id="tdreseaux" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">TD S3</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button>
                </div>
                <div class="modal-body">
                    <h5>Réseaux</h5>
                    <ol>
                        <li>
                            <a href="https://drive.google.com/file/d/1dTQjCMsN1aBX5SnfiEMft8lzI9An7JV-/view?usp=sharing">TD
                                1</a>
                        </li>

                        <li>
                            <a href="https://drive.google.com/file/d/1-Us1lSLLorQnPv2zHP29DgK-Ghg5Z8It/view?usp=sharing">TD
                                2</a>
                        </li>

                        <li>
                            <a href="https://drive.google.com/file/d/1qPKCpY-SMFnLbNCN0GTZlnm4Mx6cyq_O/view?usp=sharing">TD
                                3</a>
                        </li>

                        <li>
                            <a href="https://drive.google.com/file/d/1FxsPT16xuj70VnOpcJoTSvVyNWo0W17W/view?usp=sharing">TD
                                4</a>
                        </li>
                    </ol>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>
    <!--fin modal-->

    <!-- Modal BDD-->
    <div class="modal fade" id="tdbdd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">TD S3</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button>
                </div>
                <div class="modal-body">
                    <h5>Systèmes d'informations</h5>
                    <ul>
                        <li>
                            <h5>ACSI</h5>
                            <ul>
                                <li>
                                    <a
                                        href="https://drive.google.com/file/d/1XfaW-ZaiGwG752qvfDUi6DfXG3e83VXO/view?usp=sharing">Cas
                                        ABC</a>
                                </li>

                                <li>
                                    <a
                                        href="https://drive.google.com/file/d/1hr7t_prS-MmgiJ2hqrVHsvl3i03w0kGY/view?usp=sharing">Cas
                                        Mercato</a>
                                </li>

                                <li>
                                    <a
                                        href="https://drive.google.com/file/d/1RHIubWNv9ApAK3F9xWE2F1hQDSnBYVZv/view?usp=sharing">Cas
                                        Altima</a>
                                </li>
                                <li>
                                    <a
                                        href="https://drive.google.com/file/d/1FvuA9FLj-IuRoQbtuXHW_8JqAPeC0dgL/view?usp=sharing">Série
                                        de 4 exercices</a>
                                </li>

                                <li>
                                    <a
                                        href="https://drive.google.com/file/d/13iCvmTTj6WygNmPr8nG__JoLZsM0L2Hh/view?usp=sharing">Processus
                                        des Affaires</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <h5>
                                BDDR
                            </h5>
                            <ul>
                                <li>
                                    <a
                                        href="https://drive.google.com/file/d/159Kx0ShFOpOzW7-54aO3DT-z-NiSGE9j/view?usp=sharing">Examen
                                        Première Session SEG</a>
                                </li>
                                <li>
                                    <a
                                        href="https://drive.google.com/file/d/1ABBLWZ2aP1CNSDe5Uqf7capfmDQ89g54/view?usp=sharing">Examen
                                        Deuxième Session SEG</a>
                                </li>
                                <li>
                                    <a
                                        href="https://drive.google.com/file/d/1xxMpzAOmhwgjy5oFq4N-QukqbR85E7VW/view?usp=sharing">Examen
                                        Deuxième Session LI</a>
                                </li>
                            </ul>
                        </li>
                    </ul>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>
    <!--fin modal-->
@endsection
