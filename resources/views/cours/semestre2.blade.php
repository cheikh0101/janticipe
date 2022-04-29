@extends('template')
@section('content')
    <div class="container py-5" id="featured-3">
        <h2 class="pb-2 border-bottom">Cours Semestre 2</h2>
        <div class="row g-5 py-5">
            <div class="feature col-md-4">
                <h2>Mathématiques</h2>
                <ul>
                    <li>
                        Analyse 2
                    </li>

                    <li>
                        Algèbre 2
                    </li>
                </ul>
                <a href="#" class="icon-link" data-bs-toggle="modal" data-bs-target="#coursMathematiques2">
                    Découvrir
                </a>
            </div>
            <div class="feature col-md-4">
                <h2>Physique</h2>
                <ul>
                    <li>
                        Ondes et Propagation
                    </li>
                    <li>
                        Electronique
                    </li>
                </ul>
                <a href="#" class="icon-link">
                    Non disponible
                </a>
            </div>
            <div class="feature col-md-4">
                <h2>Informatique</h2>
                <ul>
                    <li>
                        Algorithmique et programmation 2
                    </li>
                    <li>
                        Architecture des ordinateurs
                    </li>
                </ul>
                <a href="#" class="icon-link" data-bs-toggle="modal" data-bs-target="#coursInformatique2">
                    Découvrir
                </a>
            </div>
        </div>
    </div>

    <!-- Modal Mathematiques-->
    <div class="modal fade" id="coursMathematiques2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Cours</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <ul>
                        <li>
                            Analyse 2
                            <ul>
                                <li>
                                    <a href="img/l1/maths/ensemble et relation binaire.pdf">Ensemble et Relation
                                        Binaire</a>
                                </li>

                                <li>
                                    <a href="img/l1/maths/espace vectoriel.pdf">Espace Vectoriel</a>
                                </li>

                                <li>
                                    <a href="img/l1/maths/Fonctions.pdf">Fonctions</a>
                                </li>
                                <li>
                                    <a href="img/l1/maths/FormulesTrigonometrie.pdf">Formules
                                        Trigonometriques</a>
                                </li>
                                <li>
                                    <a href="img/l1/maths/Intégration.pdf">Intégration</a>
                                </li>
                                <li>
                                    <a href="img/l1/maths/logique et raisonnement.pdf">Logique et
                                        Raisonnement</a>
                                </li>
                                <li>
                                    <a href="img/l1/maths/Matrice.pdf">Matrice</a>
                                </li>
                                <li>
                                    <a href="img/l1/maths/Suite.pdf">Suite</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            Algèbre 2
                            <ul>
                                <li>
                                    <a href=""></a>
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

    <!-- Modal Informatique-->
    <div class="modal fade" id="coursInformatique2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Cours</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <ul>
                        <li>
                            Algorithmique et programmation 2
                            <ul>
                                <li>
                                    <a
                                        href="https://drive.google.com/file/d/1S1_f16DLsGjrr4CrYzlpnIm4FlL0aufj/view?usp=sharing">Cours
                                        Complet</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            Architecture des ordinateurs
                            <ul>
                                <li>
                                    <a
                                        href="https://drive.google.com/file/d/1M6LCzq-XpBSOYx2iUwdyEMiyEOaJd8lu/view?usp=sharing">Chapitre
                                        1</a>
                                </li>
                                <li>
                                    <a
                                        href="https://drive.google.com/file/d/198qS9l5ZL_8CTsqHLa9-ZgF5_PH3BoF4/view?usp=sharing">Chapitre
                                        4</a>
                                </li>
                                <li>
                                    <a
                                        href="https://drive.google.com/file/d/1jxfiO9OD1rKLIGs8TXuW2pVoZ2c__uiR/view?usp=sharing">Chapitre
                                        5</a>
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
