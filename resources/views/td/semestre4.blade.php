@extends('template')
@section('content')
    <div class="container py-5" id="featured-3">
        <h2 class="pb-2 border-bottom">TD Semestre 4</h2>
        <div class="row g-5 py-5">
            <div class="feature col-md-4">
                <h2>Réseaux et Sécurité</h2>
                <ul>
                    <li>
                        Réseaux
                    </li>

                    <li>
                        Sécurité
                    </li>
                </ul>
                <a href="#" class="icon-link" data-bs-toggle="modal" data-bs-target="#tdreseauxetsecurite">
                    Découvrir
                </a>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="tdreseauxetsecurite" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">TD S4</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button>
                </div>
                <div class="modal-body">
                    <h5>Réseaux</h5>
                    <ol>
                    </ol>

                    <hr>
                    <h5>Sécurité</h5>
                    <ul>
                        <li>
                            <a href="https://drive.google.com/file/d/1FTQ0M6TjNZRiHYn_Fmu_RJ9Kx2O1Ywe_/view?usp=sharing">TD1
                                et 2</a>
                        </li>

                        <li>
                            <a href="https://drive.google.com/file/d/1Ajmhu9PQR3m537dh_CpNC1hpRsc7w0il/view?usp=sharing">TP1
                            </a>
                        </li>

                        <li>
                            <a href="https://drive.google.com/file/d/1q8rM3FCmIKv8qcggkus3JclRYhfJBjfr/view?usp=sharing">TP
                                2</a>
                        </li>

                        <li>
                            <a href="https://drive.google.com/file/d/1p1vivr9i2kbBG1sjGCUlnlj9ctsTP684/view?usp=sharing">TP
                                3</a>
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
@endsection
