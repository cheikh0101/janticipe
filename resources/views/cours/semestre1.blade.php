@extends('template')

@section('content')


<div class="container py-5" id="featured-3">
    <h2 class="pb-2 border-bottom">Cours Semestre 1</h2>
    <div class="row g-5 py-5">
        <div class="feature col-md-4">
            <h2>Mathématiques</h2>
            <p>
                <ul>
                    <li>
                        Analyse 1
                    </li>
                    <li>
                        Algèbre 1
                    </li>
                </ul>
            </p>
            <a href="#" class="icon-link">
                Non disponible!!
                <i class="fas fa-directions"></i>
            </a>
        </div>
        <div class="feature col-md-4">
            <h2>Physique</h2>
            <p>
                <ul>
                    <li>
                        Fondamentaux de Physique
                    </li>
                    <li>
                        Electricité
                    </li>
                </ul>
            </p>
            <a href="#" class="icon-link" data-bs-toggle="modal" data-bs-target="#coursPhysique">
                Découvrir!!
            </a>
            <!-- Modal -->
            <div class="modal fade" id="coursPhysique" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Cours et Suggestions</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <h5>
                                Cours
                            </h5>
                            <hr>
                            <ul>
                                <li>
                                    Fondamentaux de Physique
                                    <ul>
                                        <li>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    Electricité
                                    <ol>
                                        <li>
                                            <a
                                                href="https://drive.google.com/file/d/1TweDz5OHlwBEjs4On5FfxFaX_wqQgyAV/view?usp=sharing">Chap
                                                1</a>
                                        </li>
                                        <li>
                                            <a
                                                href="https://drive.google.com/file/d/14fbYBFsSrsvn4lGH4_Qxs6ybpTm3VfOP/view?usp=sharing">Chap
                                                2</a>
                                        </li>
                                        <li>
                                            <a
                                                href="https://drive.google.com/file/d/17KzWh7jzP3nWwvVwyervzZG1JX0e2PoI/view?usp=sharing">Chap
                                                3</a>
                                        </li>
                                        <li>
                                            <a
                                                href="https://drive.google.com/file/d/1V3WOtEf2UaRLgnpjN_BZ4iGktS5XtKkQ/view?usp=sharing">Chap
                                                4</a>
                                        </li>
                                        <li>
                                            <a
                                                href="https://drive.google.com/file/d/1VQzygRa5DIS8Lo8-RDlvTDK76I6nGh9i/view?usp=sharing">Chap
                                                5</a>
                                        </li>
                                        <li>
                                            <a
                                                href="https://drive.google.com/file/d/1nzbyehTaJqlpP8lAPWWMtJOq-cRspBbi/view?usp=sharing">Chap
                                                6</a>
                                        </li>
                                    </ol>
                                </li>
                            </ul>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermé</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--fin modal-->
        </div>
        <div class="feature col-md-4">
            <h2>Informatique</h2>
            <p>
                <ul>
                    <li>
                        Algorithmique et programmation 1
                    </li>
                    <li>
                        Introduction aux systèmes d’exploitation
                    </li>
                </ul>
            </p>
            <a href="#" class="icon-link" data-bs-toggle="modal" data-bs-target="#coursInformatique">
                Découvrir!!
            </a>
            <!-- Modal -->
            <div class="modal fade" id="coursInformatique" data-bs-backdrop="static" data-bs-keyboard="false"
                tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Cours</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <ul>
                                <li>
                                    Algorithmique et programmation 1
                                    <ul>
                                        <li>
                                            <a
                                                href="https://drive.google.com/file/d/1lR0fVsNGJ6Thnm515x9zfEwFU-WK_dmt/view?usp=sharing">Cours</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    Introduction aux systèmes d’exploitation
                                    <ul>
                                        <li>
                                            <a
                                                href="https://drive.google.com/file/d/1FSFp_PbfJaEd_CuFchXWYg9IU_jpqOVr/view?usp=sharing">Cours
                                                Systèmes d'exploitation</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
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

@endsection
