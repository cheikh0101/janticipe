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
            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" id="mathematique2"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Disponible
                </button>
                <ul class="dropdown-menu" aria-labelledby="mathematique2">
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
        </div>
        <div class="feature col-md-4">
            <h2>Physique</h2>
            <p>
                <ul>
                    <li>
                        Ondes et Propagation
                    </li>
                    <li>
                        Electronique
                    </li>
                </ul>
            </p>
            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" id="electronique2"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Disponible
                </button>
                <ul class="dropdown-menu" aria-labelledby="electronique2">
                    <li><a class="dropdown-item"
                            href="https://drive.google.com/file/d/1A15SGPx2tKpxXwHEzddztqyOABcwsA8k/view?usp=sharing">Série
                            Diodes</a></li>
                    <li> <a class="dropdown-item"
                            href="https://drive.google.com/file/d/1npOQgjumZenMJoUh-JrjsVW3p3f20tLL/view?usp=sharing">TD
                            Electronique</a></li>
                </ul>
            </div>
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
            <button href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tdInformatique2">
                Disponible
            </button>
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
                                            <ol>
                                                <li>
                                                    <a
                                                        href="https://drive.google.com/file/d/1nJ5ZGzY_-KgYAcLn_rjcxG1K4HMp_sqA/view?usp=sharing">Iterations</a>

                                                </li>
                                                <li>
                                                    <a
                                                        href="https://github.com/cheikh0101/correctionAlgo1/tree/main/fiche5">Proposition
                                                        de Correction</a>
                                                </li>
                                            </ol>
                                        </li>
                                        <hr>
                                        <li>
                                            <ol>
                                                <li>
                                                    <a
                                                        href="https://drive.google.com/file/d/1v4mlmA-NLf_YmQ7nTm_JD1oJ20xCAb6i/view?usp=sharing">Types
                                                        Composés</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="https://github.com/cheikh0101/correctionAlgo1/tree/main/projet-types-composes">Proposition
                                                        de Correction</a>
                                                </li>
                                            </ol>

                                        </li>
                                        <hr>
                                        <li>
                                            <ol>
                                                <li>
                                                    <a
                                                        href="https://drive.google.com/file/d/1WgDnN9I-OQMI0VcHcvsLjZJ7SWu8ynzw/view?usp=sharing">Chaines
                                                        de Caractère</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="https://github.com/cheikh0101/correctionAlgo1/tree/main/caractere">Proposition
                                                        de Correction</a>
                                                </li>
                                            </ol>
                                        </li>
                                        <hr>
                                        <li>
                                            <ol>
                                                <li>
                                                    <a
                                                        href="https://drive.google.com/file/d/11K3JOUGUoLZFUGqeyuzqDBpPWkl5oORw/view?usp=sharing">Pointeurs
                                                        Preprocesseurs</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="https://github.com/cheikh0101/correctionAlgo1/tree/main/projet-pointeur">Proposition
                                                        de Correction</a>
                                                </li>
                                            </ol>
                                        </li>
                                        <hr>
                                        <li>
                                            <ol>
                                                <li>
                                                    <a
                                                        href="https://drive.google.com/file/d/1eXlEnqF8yPNAevTNavyHIhunSVACd7zW/view?usp=sharing">Sous
                                                        Programmes</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="https://github.com/cheikh0101/correctionAlgo1/tree/main/sous-prog">Proposition
                                                        de Correction</a>
                                                </li>
                                            </ol>
                                        </li>
                                        <hr>
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
                                            <a
                                                href="https://drive.google.com/file/d/1wam1C11-xyK8chlFpjskZKVnSwWqZy5y/view?usp=sharing">Recueil
                                                d'Exercices</a>
                                        </li>
                                        <li>
                                            <a
                                                href="https://drive.google.com/file/d/1G7nAZwSLSD1_ztQoDIF9_BP2lt8sUDJG/view?usp=sharing">Examen
                                                novembre 2018</a>
                                        </li>
                                        <li>
                                            <a
                                                href="https://drive.google.com/file/d/1CHjPBmNsclcnaUgY_I-YQV69vOpWOyi0/view?usp=sharing">Devoir
                                                1</a>
                                        </li>
                                        <li>
                                            <a
                                                href="https://drive.google.com/file/d/116Va_yzrYueCgf-OG70fLPBdMrmSiWFS/view?usp=sharing">Devoir
                                                2</a>
                                        </li>
                                        <li>
                                            <a
                                                href="https://drive.google.com/file/d/1AHJQQd2NgIq2Tvj73S3MWog0cn_xmmer/view?usp=sharing">Serie
                                                d'exercices</a>
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
