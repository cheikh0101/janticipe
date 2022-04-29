@extends('template')
@section('content')
    <div class="container py-5" id="featured-3">
        <h2 class="pb-2 border-bottom">Cours Semestre 3</h2>
        <div class="row g-5 py-5">
            <div class="feature col-md-3">
                <h2>Mathématiques</h2>
                <ul>
                    <li>
                        Probabilités et Statistiques
                    </li>

                    <li>
                        Calcul Numérique
                    </li>
                </ul>
                <a href="#" class="icon-link" data-bs-toggle="modal" data-bs-target="#maths">
                    Découvrir
                </a>
            </div>
            <div class="feature col-md-3">
                <h2>Réseaux et Systèmes</h2>
                <ul>
                    <li>
                        Systèmes d’Exploitation
                    </li>
                    <li>
                        Introduction aux réseaux
                    </li>
                </ul>
                <a href="#" class="icon-link" data-bs-toggle="modal" data-bs-target="#reseaux">
                    Découvrir
                </a>
            </div>
            <div class="feature col-md-3">
                <h2>Informatique</h2>
                <ul>
                    <li>
                        Algorithmique et Structures de données
                    </li>
                    <li>
                        Développement web 1
                    </li>
                </ul>
                <a href="#" class="icon-link" data-bs-toggle="modal" data-bs-target="#algo3">
                    Découvrir
                </a>
            </div>
            <div class="feature col-md-3">
                <h2>Systèmes
                    d’Information</h2>
                <ul>
                    <li>
                        Analyse et Conception des Systèmes d’Information
                    </li>
                    <li>
                        Introduction aux Bases de Données Relationnelles
                    </li>
                </ul>
                <a href="#" class="icon-link" data-bs-toggle="modal" data-bs-target="#bdd">
                    Découvrir
                </a>
            </div>
        </div>
    </div>

    <!-- Modal Mathematiques-->
    <div class="modal fade " id="maths" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cours S3</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button>
                </div>
                <div class="modal-body">
                    <h5>Probabilités et Statistiques</h5>
                    <ol>
                        <li>
                            <a href="https://drive.google.com/file/d/1_KD6nZGHWjoqv_uOlSCO1Dyv2ZozQwGD/view?usp=sharing">Module
                                1</a>
                        </li>
                        <li>
                            <a href="https://drive.google.com/file/d/1KL9LzxeevtUNv9JNcTlO0Tw1G_5iiFjH/view?usp=sharing">Module
                                2</a>
                        </li>
                        <li>
                            <a href="https://drive.google.com/file/d/1c76IKGjJ433lXBWjf933Zg0wFwdiiFiJ/view?usp=sharing">Module
                                3</a>
                        </li>
                        <li>
                            <a href="https://drive.google.com/file/d/1slPUubxwV0BkEPEXXoRZb_N-1SIFdCO_/view?usp=sharing">Module
                                4</a>
                        </li>

                    </ol>

                    <hr>

                    <h5>Calcul Numérique</h5>
                    <ul>
                        <li>
                            <a href="">Pas encore disponible</a>
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

    <!-- Modal Reseaux-->
    <div class="modal fade " id="reseaux" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cours S3</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button>
                </div>
                <div class="modal-body">
                    <h5>Introduction aux Réseaux</h5>
                    <ol>
                        <li>
                            <a href="https://drive.google.com/file/d/17ZozEMR0FnBO-G_RR5pwhZJdZnArc3G3/view?usp=sharing">Cours
                                Réseaux 1</a>
                        </li>
                        <li>
                            <a href="https://drive.google.com/file/d/1UsObZkOO9vtqRUz_dNEGgNMOJfG3Yhzs/view?usp=sharing">Cours
                                Réseaux 2</a>
                        </li>
                        <li>
                            <a href="https://drive.google.com/file/d/1ejRUgrMIZqNlGcg_RIGqYkpmNrPO2d4o/view?usp=sharing">Cours
                                Réseaux 3</a>
                        </li>
                    </ol>

                    <hr>

                    <h5>Systèmes d’Exploitation</h5>
                    <ul>
                        <li>
                            <a href="https://drive.google.com/file/d/1344JMHRpo1bwno3IRHn55PMgAfpnNMuM/view?usp=sharing">Processus
                                et Gestion mémoire</a>
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

    <!-- Modal Algo3-->
    <div class="modal fade " id="algo3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cours S3</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button>
                </div>
                <div class="modal-body">
                    <h5>Algo 3 && SD</h5>
                    <ol>
                        <li>
                            <a href="https://drive.google.com/file/d/1RUkq0-Kp7vQkxn5gdKSuhTw1oA1eHxEo/view?usp=sharing">Cours
                                1</a>
                        </li>
                        <li>
                            <a href="https://drive.google.com/file/d/1zRpQ1Ms1rrm5h_iJxu-OeZFm782zKfGr/view?usp=sharing">Cours
                                2</a>
                        </li>
                        <li>
                            <a href="https://drive.google.com/file/d/1nQix16Hys-vW7ltNGXaHjPPJf9Toqp_k/view?usp=sharing">Cours
                                3</a>
                        </li>
                        <li>
                            <a href="https://drive.google.com/file/d/1ZEL75EzNU1WIZvcUvflFeJ5dQJ2IipjH/view?usp=sharing">Cours
                                4</a>
                        </li>
                    </ol>

                    <hr>
                    <h5>Développement Web 1</h5>
                    <ul>
                        <li>
                            <a
                                href="https://drive.google.com/file/d/1e3Vi30SyCGnKpRhlihRNDKYfpVK6xbY_/view?usp=sharing">Cours</a>
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

    <!-- Modal BDD-->
    <div class="modal fade " id="bdd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cours S3</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button>
                </div>
                <div class="modal-body">
                    <h5>BDD</h5>
                    <ul>
                        <li>
                            <a href="https://drive.google.com/file/d/1PllMuHKNzGbuBhxNy6vLBYjQ2IasUq-K/view?usp=sharing">Cours
                            </a>
                        </li>
                    </ul>

                    <hr>
                    <h5>ACSI</h5>
                    <ol>
                        <li>
                            <a href="https://drive.google.com/file/d/1yVzjn4oFO458K7fVyB3Zggm9du_lzUVR/view?usp=sharing">Cours
                                1</a>
                        </li>

                        <li>
                            <a href="https://drive.google.com/file/d/16DkMt15-Z00hhquRjHmoicD_xo6frKbr/view?usp=sharing">Cours
                                2</a>
                        </li>

                        <li>
                            <a href="https://drive.google.com/file/d/10m7LVcS-BcsboTjUMEvxyVcv2-WaQTeZ/view?usp=sharing">Cours
                                3</a>
                        </li>

                        <li>
                            <a href="https://drive.google.com/file/d/1hGEoGdtzFsdljPdhOkzE_cbUvL7bxJ7a/view?usp=sharing">Cours
                                4--5</a>
                        </li>

                        <li>
                            <a href="https://drive.google.com/file/d/1lUU3XRV2RAC5BNCLyWc-X-GLN8XgrUqu/view?usp=sharing">Cours
                                6</a>
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
@endsection
