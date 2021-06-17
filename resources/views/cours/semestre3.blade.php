@extends('template')
@section('content')

<div class="container">
    <div class="row" id="cours">
        <div class="col-md-4">
            <hr>
        </div>
        <div class="col-md-4 text-center">
            <h4> Cours -- Semestre 3 </h4>
        </div>
        <div class="col-md-4">
            <hr>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4 mb-5">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">
                        UE: Mathématiques INF 231
                    </h5>
                    <p class="card-text">Intitulés ECUE :
                        <br>
                        <ul>
                            <li>
                                Probabilités et Statistiques
                            </li>
                            <li>
                                Calcul Numérique
                            </li>
                        </ul>
                    </p>
                </div>
                <div class="card-footer">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#maths">
                        Découvrir Plus!
                    </button>

                    <!-- Modal -->
                    <div class="modal fade " id="maths" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Cours S3</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">x</button>
                                </div>
                                <div class="modal-body">
                                    <h5>Probabilités et Statistiques</h5>
                                    <ol>
                                        <li>
                                            <a
                                                href="https://drive.google.com/file/d/1_KD6nZGHWjoqv_uOlSCO1Dyv2ZozQwGD/view?usp=sharing">Module
                                                1</a>
                                        </li>
                                        <li>
                                            <a
                                                href="https://drive.google.com/file/d/1KL9LzxeevtUNv9JNcTlO0Tw1G_5iiFjH/view?usp=sharing">Module
                                                2</a>
                                        </li>
                                        <li>
                                            <a
                                                href="https://drive.google.com/file/d/1c76IKGjJ433lXBWjf933Zg0wFwdiiFiJ/view?usp=sharing">Module
                                                3</a>
                                        </li>
                                        <li>
                                            <a
                                                href="https://drive.google.com/file/d/1slPUubxwV0BkEPEXXoRZb_N-1SIFdCO_/view?usp=sharing">Module
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
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Fermé</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--fin modal-->
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-5">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">
                        UE: Réseaux et Systèmes
                        INF 232
                    </h5>
                    <p class="card-text">Intitulés ECUE :
                        <br>
                        <ul>
                            <li>
                                Systèmes d’Exploitation
                            </li>
                            <li>
                                Introduction aux réseaux
                            </li>
                        </ul>
                    </p>
                </div>
                <div class="card-footer">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#reseaux">
                        Découvrir Plus!
                    </button>

                    <!-- Modal -->
                    <div class="modal fade " id="reseaux" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Cours S3</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">x</button>
                                </div>
                                <div class="modal-body">
                                    <h5>Introduction aux Réseaux</h5>
                                    <ol>
                                        <li>
                                            <a
                                                href="https://drive.google.com/file/d/17ZozEMR0FnBO-G_RR5pwhZJdZnArc3G3/view?usp=sharing">Cours
                                                Réseaux 1</a>
                                        </li>
                                        <li>
                                            <a
                                                href="https://drive.google.com/file/d/1UsObZkOO9vtqRUz_dNEGgNMOJfG3Yhzs/view?usp=sharing">Cours
                                                Réseaux 2</a>
                                        </li>
                                        <li>
                                            <a
                                                href="https://drive.google.com/file/d/1ejRUgrMIZqNlGcg_RIGqYkpmNrPO2d4o/view?usp=sharing">Cours
                                                Réseaux 3</a>
                                        </li>
                                    </ol>

                                    <hr>

                                    <h5>Systèmes d’Exploitation</h5>
                                    <ul>
                                        <li>
                                            <a
                                                href="https://drive.google.com/file/d/1344JMHRpo1bwno3IRHn55PMgAfpnNMuM/view?usp=sharing">Processus
                                                et Gestion mémoire</a>
                                        </li>
                                    </ul>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Fermé</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--fin modal-->

                </div>
            </div>
        </div>

        <div class="col-md-4 mb-5">
            <div class="card h-100">
                <div class="card-body">
                    <h4 class="card-title">Informatique
                        INF 233</h4>
                    <p class="card-text">Intitulés ECUE :
                        <br>
                        <ul>
                            <li>
                                Algorithmique et Structures de données
                            </li>
                            <li>
                                Développement web 1
                            </li>
                        </ul>
                    </p>
                </div>
                <div class="card-footer">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#algo3">
                        Découvrir Plus!
                    </button>

                    <!-- Modal -->
                    <div class="modal fade " id="algo3" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Cours S3</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">x</button>
                                </div>
                                <div class="modal-body">
                                    <h5>Algo 3 && SD</h5>
                                    <ol>
                                        <li>
                                            <a
                                                href="https://drive.google.com/file/d/1RUkq0-Kp7vQkxn5gdKSuhTw1oA1eHxEo/view?usp=sharing">Cours
                                                1</a>
                                        </li>
                                        <li>
                                            <a
                                                href="https://drive.google.com/file/d/1zRpQ1Ms1rrm5h_iJxu-OeZFm782zKfGr/view?usp=sharing">Cours
                                                2</a>
                                        </li>
                                        <li>
                                            <a
                                                href="https://drive.google.com/file/d/1nQix16Hys-vW7ltNGXaHjPPJf9Toqp_k/view?usp=sharing">Cours
                                                3</a>
                                        </li>
                                        <li>
                                            <a
                                                href="https://drive.google.com/file/d/1ZEL75EzNU1WIZvcUvflFeJ5dQJ2IipjH/view?usp=sharing">Cours
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
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Fermé</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--fin modal-->


                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->


    <div class="row">
    </div>
    <div class="col-md-4 mb-5">
        <div class="card h-100">
            <div class="card-body">
                <h4 class="card-title">Systèmes
                    d’Information
                    INF 234</h4>
                <p class="card-text">Intitulés ECUE :
                    <br>
                    <ul>
                        <li>
                            Analyse et Conception des Systèmes d’Information
                        </li>
                        <li>
                            Introduction aux Bases de Données Relationnelles
                        </li>
                    </ul>
                </p>
            </div>
            <div class="card-footer">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#bdd">
                    Découvrir Plus!
                </button>

                <!-- Modal -->
                <div class="modal fade " id="bdd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Cours S3</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close">x</button>
                            </div>
                            <div class="modal-body">
                                <h5>BDD</h5>
                                <ul>
                                    <li>
                                        <a
                                            href="https://drive.google.com/file/d/1PllMuHKNzGbuBhxNy6vLBYjQ2IasUq-K/view?usp=sharing">Cours
                                        </a>
                                    </li>
                                </ul>

                                <hr>
                                <h5>ACSI</h5>
                                <ol>
                                    <li>
                                        <a
                                            href="https://drive.google.com/file/d/1yVzjn4oFO458K7fVyB3Zggm9du_lzUVR/view?usp=sharing">Cours
                                            1</a>
                                    </li>

                                    <li>
                                        <a
                                            href="https://drive.google.com/file/d/16DkMt15-Z00hhquRjHmoicD_xo6frKbr/view?usp=sharing">Cours
                                            2</a>
                                    </li>

                                    <li>
                                        <a
                                            href="https://drive.google.com/file/d/10m7LVcS-BcsboTjUMEvxyVcv2-WaQTeZ/view?usp=sharing">Cours
                                            3</a>
                                    </li>

                                    <li>
                                        <a
                                            href="https://drive.google.com/file/d/1hGEoGdtzFsdljPdhOkzE_cbUvL7bxJ7a/view?usp=sharing">Cours
                                            4--5</a>
                                    </li>

                                    <li>
                                        <a
                                            href="https://drive.google.com/file/d/1lUU3XRV2RAC5BNCLyWc-X-GLN8XgrUqu/view?usp=sharing">Cours
                                            6</a>
                                    </li>
                                </ol>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermé</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--fin modal-->

            </div>
        </div>
    </div>
    <div class="col-md-4 mb-5">
        <div class="col-md-4 mb-5">

        </div>
    </div>
    <!-- /.row -->
</div>
@endsection
