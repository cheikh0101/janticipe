@extends('template')
@section('content')
    <div class="container py-5" id="featured-3">
        <h2 class="pb-2 border-bottom">TD Semestre 1</h2>
        <div class="row g-5 py-5">
            <div class="feature col-md-4">
                <h2>Mathématiques</h2>
                <ul>
                    <li>
                        Analyse 1
                    </li>
                    <li>
                        Algèbre 1
                    </li>
                </ul>
                <a href="#" class="icon-link" data-bs-toggle="modal" data-bs-target="#mathematique1">
                    Découvrir
                </a>
            </div>
            <div class="feature col-md-4">
                <h2>Physique</h2>
                <ul>
                    <li>
                        Fondamentaux de Physique
                    </li>
                    <li>
                        Electricité
                    </li>
                </ul>
                <a href="#" class="icon-link" data-bs-toggle="modal" data-bs-target="#fondamentaux">
                    Découvrir
                </a>
            </div>
            <div class="feature col-md-4">
                <h2>Informatique</h2>
                <ul>
                    <li>
                        Algorithmique et programmation 1
                    </li>
                    <li>
                        Introduction aux systèmes d’exploitation
                    </li>
                </ul>
                <a href="#" class="icon-link" data-bs-toggle="modal" data-bs-target="#tdInformatique1">
                    Découvrir
                </a>
            </div>
        </div>
    </div>

    <!-- Modal Informatique-->
    <div class="modal fade" id="tdInformatique1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">TD</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <ul>
                        <li>
                            Algorithmique et programmation 1
                            <ul>
                                <li>
                                    <ol>
                                        <li>
                                            <a
                                                href="https://drive.google.com/file/d/10hGLkmTg6Sp0ZYsO6-WEXiR_ll6ObZDV/view?usp=sharing">Generalites
                                                et Instruction de Base</a> &nbsp;
                                        </li>
                                        <li>
                                            <a href="https://github.com/cheikh0101/correctionAlgo1/blob/main/fiche1/exo1.c">
                                                Proposition de Correction
                                            </a>
                                        </li>
                                    </ol>
                                </li>
                                <hr>
                                <li>
                                    <ol>
                                        <li>
                                            <a
                                                href="https://drive.google.com/file/d/1EvKR5i0ZAtwqLFsyLCT6MMETsB8c08Xw/view?usp=sharing">Structures
                                                et Opérations de Base</a>
                                        </li>
                                        <li>
                                            <a href="https://github.com/cheikh0101/correctionAlgo1/tree/main/fiche2">
                                                Proposition de Correction
                                            </a>
                                        </li>
                                    </ol>
                                </li>
                                <hr>
                                <li>
                                    <ol>
                                        <li>
                                            <a
                                                href="https://drive.google.com/file/d/1aStGhEUz4cajb67SCEKruO13U9pLBBfX/view?usp=sharing">Structures
                                                de Controle</a>
                                        </li>
                                        <li>
                                            <a href="https://github.com/cheikh0101/correctionAlgo1/tree/main/fiche3">Proposition
                                                de Correction</a>
                                        </li>
                                    </ol>

                                </li>
                                <hr>
                                <li>
                                    <ol>
                                        <li>
                                            <a
                                                href="https://drive.google.com/file/d/1W2JFLCGBLoCTjBXOVfeF4WsaYsGkJ38x/view?usp=sharing">Structures
                                                Selectives</a>
                                        </li>
                                        <li>
                                            <a
                                                href="https://github.com/cheikh0101/correctionAlgo1/tree/main/fiche4">Correction</a>
                                        </li>
                                    </ol>
                                </li>
                                <hr>
                                <li>
                                    <a
                                        href="https://drive.google.com/file/d/1a4rIfYCcmxSIaF_tX-yLvwrnPXqxj3xm/view?usp=sharing">Examen
                                        1er Semestre</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            Introduction aux systèmes d’exploitation
                            <ul>
                                <li>
                                    <a
                                        href="https://drive.google.com/file/d/1uA91J3ujMbfON7TJ3ErAe5FuzcogBdZj/view?usp=sharing">Examen</a>
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

    <!-- Modal Mathematiques-->
    <div class="modal fade" id="mathematique1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">TD</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <ul>
                        <li><a class="dropdown-item"
                                href="https://drive.google.com/file/d/1UDyNYqW_mj9QcM3F2b8J2MAj7n9tyWS7/view?usp=sharing">Examen
                                1</a></li>
                        <li> <a class="dropdown-item"
                                href="https://drive.google.com/file/d/1B5Sc7xN8ecuLTeTDNRJEWCZOYsD2bkS5/view?usp=sharing">Examen
                                2</a></li>
                        <li> <a class="dropdown-item"
                                href="https://drive.google.com/file/d/1tQAtJG6dH1cd7OWLxclaBfQVGteJB3G3/view?usp=sharing">Examen
                                3</a></li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>
    <!--fin modal-->

    <!-- Modal Physique-->
    <div class="modal fade" id="fondamentaux" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">TD</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <ul>
                        <h5 class="border-bottom">Fondemantaux</h5>
                        <li><a class="dropdown-item"
                                href="https://drive.google.com/file/d/1gMKyIMeNkDxUU4W8SCKKHDPtQE7seYOd/view?usp=sharing">TD</a>
                        </li>
                        <li> <a class="dropdown-item"
                                href="https://drive.google.com/file/d/17YRWUPYBnzomx0lMkpPPShQM3oAifBkg/view?usp=sharing">
                                Correction TD 1</a></li>
                        <li> <a class="dropdown-item"
                                href="https://drive.google.com/file/d/1FM1PZOie8aqQDLvOmCYCxkaaD2sQkkrN/view?usp=sharing">
                                Correction TD 2</a></li>
                        <li> <a class="dropdown-item"
                                href="https://drive.google.com/file/d/1M11qxpxZ0VomO2b5wBZM3KBTJyuITD3M/view?usp=sharing">
                                Examen 1</a></li>
                        <li> <a class="dropdown-item"
                                href="https://drive.google.com/file/d/1hgStuFFfYnoE3y8PxMh7Lcix0lZexUW0/view?usp=sharing">
                                Examen 2</a></li>
                        <li> <a class="dropdown-item"
                                href="https://drive.google.com/file/d/1Ocx4flhboghr29-jt6ECdnX2vNQa46hQ/view?usp=sharing">
                                Examen 3</a></li>
                    </ul>
                    <ul>
                        <h5 class="border-bottom">Electricite</h5>
                        <li><a class="dropdown-item"
                                href="https://drive.google.com/file/d/1gV6bmpMI3Sn7CnpiW2DbJwr9JwB_8Jig/view?usp=sharing">Sujet
                                Devoir</a></li>
                        <li> <a class="dropdown-item"
                                href="https://drive.google.com/file/d/103fzv5fF3Ljg1XxCl7_g2bz3iH-nS2gv/view?usp=sharing">Examen
                                Electricite 1</a></li>
                        <li> <a class="dropdown-item"
                                href="https://drive.google.com/file/d/1sUCQ86SXn0xp_TCOUCmo9_Ub6o9-SGe5/view?usp=sharing">Examen
                                d'Electricite 2</a></li>
                        <li> <a class="dropdown-item"
                                href="https://drive.google.com/file/d/1ccv2c_PGoTS9F4TXvZk_6SCjMxakRBJb/view?usp=sharing">Examen
                                d'Electricite 3</a></li>
                        <li> <a class="dropdown-item"
                                href="https://drive.google.com/file/d/1TL52lRN-L8oukzJcsBqlDvUKqVVDGXrm/view?usp=sharing">Epreuve
                                d'Electricite 4</a></li>
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
