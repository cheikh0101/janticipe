@extends('template')
@section('content')
    <div class="container py-5" id="featured-3">
        <h2 class="pb-2 border-bottom">Cours Semestre 4</h2>
        <div class="row g-5 py-5">
            <div class="feature col-md-4">
                <h2>Réseaux et Sécurité</h2>
                <ul>
                    <li>
                        Introduction à la sécurité
                    </li>

                    <li>
                        Réseaux locaux
                    </li>
                </ul>
                <a href="#" class="icon-link" data-bs-toggle="modal" data-bs-target="#sécurité">
                    Découvrir
                </a>
            </div>
            <div class="feature col-md-4">
                <h2>Programmation</h2>
                <ul>
                    <li>
                        Programmation Orientée Objet
                        1
                    </li>
                    <li>
                        Analyse et Conception des
                        Systèmes Orientés Objet
                    </li>
                </ul>
                <a href="#" class="icon-link" data-bs-toggle="modal" data-bs-target="#poo_ascoo">
                    Découvrir
                </a>
            </div>
            <div class="feature col-md-4">
                <h2>Informatique</h2>
                <ul>
                    <li>
                        Technologies XML
                    </li>
                    <li>
                        Développement web 2
                    </li>
                </ul>
                <a href="#" class="icon-link" data-bs-toggle="modal" data-bs-target="#xml_devweb2">
                    Découvrir
                </a>
            </div>
        </div>
    </div>

    <!-- Modal Securite-->
    <div class="modal fade " id="sécurité" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cours S4</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button>
                </div>
                <div class="modal-body">
                    <h5>Introduction à la Sécurité</h5>
                    <ol>
                        <li>
                            <a href="https://drive.google.com/file/d/1L02RDsdXehXQajH3pWj7dzD5kpQ_C_55/view?usp=sharing">Cours
                                1</a>
                        </li>
                        <li>
                            <a href="https://drive.google.com/file/d/1P4Llh9WEMsPFxgSwP5d0vxebw9FE8HhK/view?usp=sharing">Cours
                                2</a>
                        </li>
                        <li>
                            <a href="https://drive.google.com/file/d/10a4OkhmhqutzKewaC7gKqdXByDAHd3wq/view?usp=sharing">Cours
                                3</a>
                        </li>

                    </ol>

                    <hr>

                    <h5>Réseaux Locaux</h5>
                    <ul>
                        <li>
                            <a href="https://drive.google.com/file/d/17PB3EvZ-0ZoFYMqeuTclCcwV1th-IC8r/view?usp=sharing">Réseau
                                Ethernet Commuté</a>
                        </li>
                        <li>
                            <a
                                href="https://drive.google.com/file/d/18MUDJvzx2v1auFikPGH3xmYd9sVUVBNo/view?usp=sharing">VLAN</a>
                        </li>
                        <li>
                            <a href="https://drive.google.com/file/d/1sPDmNN_8tcOIb8giIyAUG1MdmYA4wWen/view?usp=sharing">Spanning
                                Tree</a>
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

    <!-- Modal POO-->
    <div class="modal fade " id="poo_ascoo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cours S4</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button>
                </div>
                <div class="modal-body">
                    <h5>POO1</h5>
                    <ol>
                        <li>
                            <a href="https://drive.google.com/file/d/1ZwtS0SUlJqDxRCCl614XXoJswVGnCWqD/view?usp=sharing">Cours
                                1</a>
                        </li>
                        <li>
                            <a href="https://drive.google.com/file/d/1eIQuMB-7PBxrncV1e1x71KXH8AaRQoB3/view?usp=sharing">Cours
                                2</a>
                        </li>
                        <li>
                            <a href="https://drive.google.com/file/d/1_HOXcNv3FApKBX1_YrSrxyEPeEZQotkH/view?usp=sharing">Cours
                                de Mr THIAM</a>
                        </li>
                    </ol>
                    <hr>
                    <h5>ACSOO</h5>
                    <ul>
                        <li>
                            <a
                                href="https://drive.google.com/file/d/1TVT7D34wD1W86gpNsO95QYmPwN8tT_de/view?usp=sharing">Introduction</a>
                        </li>
                        <li>
                            <a href="https://drive.google.com/file/d/1ipQlfww_0eBXmbWLupXlqJCrqczXKZAh/view?usp=sharing">Diagramme
                                de cas d'utilisation</a>
                        </li>
                        <li>
                            <a href="https://drive.google.com/file/d/1lhH31wau7TfXIDZokTrspbkia1cA6WZ9/view?usp=sharing">Diagramme
                                de classes et d'Objets</a>
                        </li>
                        <li>
                            <a href="https://drive.google.com/file/d/1BMnelEDYl2CvEu8bujDtgnV-VmMvHXMI/view?usp=sharing">Diagramme
                                d'état</a>
                        </li>
                        <li>
                            <a href="https://drive.google.com/file/d/151q51rgdvBuvuMGHA8u5MR5TZS0X6rLx/view?usp=sharing">Diagramme
                                de Séquence</a>
                        </li>
                        <li>
                            <a href="https://drive.google.com/file/d/1fnr0Hp01xXkfln5r3EUqCdICU3my_I33/view?usp=sharing">Diagramme
                                d'activité</a>
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

    <!-- Modal DevWeb-->
    <div class="modal fade " id="xml_devweb2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cours S4</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button>
                </div>
                <div class="modal-body">
                    <h5>XML</h5>
                    <ol>
                        <li>
                            <a
                                href="https://drive.google.com/file/d/1z3_AZyOXOzd11H-7Cs_46eLTlGFG5VbL/view?usp=sharing">Introduction</a>
                        </li>
                        <li>
                            <a
                                href="https://drive.google.com/file/d/1WtY1PrMqZWBXuJkf083AgZuK6IsZy73m/view?usp=sharing">Schema</a>
                        </li>
                        <li>
                            <a
                                href="https://drive.google.com/file/d/1mf1efmPsTOERb1cBio1VYmWlZoiuSlMJ/view?usp=sharing">DTD</a>
                        </li>
                        <li>
                            <a
                                href="https://drive.google.com/file/d/1OUxQc2ZtEvFumJCpj6ajKUOIuzD8HWgF/view?usp=sharing">Dom--Xpath--Xslt</a>
                        </li>
                    </ol>

                    <hr>

                    <h5>DEV WEB 2</h5>
                    <ul>
                        <li>
                            <a href="https://drive.google.com/file/d/1hRzMP9DmYvSOUXBv-xt4EgmADJGO9j7k/view?usp=sharing">Cours
                                1</a>
                        </li>
                        <li>
                            <a href="https://drive.google.com/file/d/14QV_EiwbJ4ujDOjyVioncqZD84eNLQwA/view?usp=sharing">Cours
                                2</a>
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
