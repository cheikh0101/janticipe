@extends('template')

@section('content')


<div class="container py-5" id="featured-3">

    <h2 class="pb-2 border-bottom">TD Semestre 2</h2>

    <div class="row g-5 py-5">

        <div class="feature col-md-4">
            <h2>Mathématiques</h2>
            <p>
                <ul>
                    <li>
                        Analyse 2
                    </li>

                    <li>
                        Algèbre 2
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
            <a href="#" class="icon-link">
                Non disponible!!
            </a>
        </div>

        <div class="feature col-md-4">
            <h2>Informatique</h2>
            <p>
                <ul>
                    <li>
                        Algorithmique et programmation 2
                    </li>
                    <li>
                        Architecture des Ordinateurs
                    </li>
                </ul>
            </p>
            <a href="#" class="icon-link" data-bs-toggle="modal" data-bs-target="#tdInformatique2">
                S'exercer!!
            </a>


            <!-- Modal -->
            <div class="modal fade" id="tdInformatique2" data-bs-backdrop="static" data-bs-keyboard="false"
                tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">TD</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <ul>
                                <li>
                                    Algorithmique et programmation 2
                                    <ul>
                                        <li>
                                            <a
                                                href="https://drive.google.com/file/d/1nJ5ZGzY_-KgYAcLn_rjcxG1K4HMp_sqA/view?usp=sharing">Iterations</a>
                                        </li>
                                        <li>
                                            <a
                                                href="https://drive.google.com/file/d/1v4mlmA-NLf_YmQ7nTm_JD1oJ20xCAb6i/view?usp=sharing">Types
                                                Composés</a>
                                        </li>
                                        <li>
                                            <a
                                                href="https://drive.google.com/file/d/1WgDnN9I-OQMI0VcHcvsLjZJ7SWu8ynzw/view?usp=sharing">Chaines
                                                de Caractère</a>
                                        </li>
                                        <li>
                                            <a
                                                href="https://drive.google.com/file/d/11K3JOUGUoLZFUGqeyuzqDBpPWkl5oORw/view?usp=sharing">Pointeurs
                                                Preprocesseurs</a>
                                        </li>
                                        <li>
                                            <a
                                                href="https://drive.google.com/file/d/1eXlEnqF8yPNAevTNavyHIhunSVACd7zW/view?usp=sharing">Sous
                                                Programmes</a>
                                        </li>
                                        <li>
                                            <a
                                                href="https://drive.google.com/file/d/1c1OqOUTmQ-TcuEcpb12GmPq7OA3KcnqC/view?usp=sharing">Examen
                                                2nd Semestre</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    Architecture des Ordinateurs
                                    <ul>
                                        <li>
                                            <a href=""></a>
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
