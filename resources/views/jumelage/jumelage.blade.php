@extends('template')
@section('content')

<main>
    <div class="container py-4">
        <div class="p-2 mb-4 bg-light rounded-3">
            <div class="container-fluid py-5">
                <h1 class="display-5 fw-bold">Programme de jumelage</h1>
                <p class="col-md-8 fs-4">
                    Le Programme de jumelage offre l’occasion aux étudiants actuels de l’UIDT,UFR SET,département
                    INFORMATIQUE
                    d’établir des liens avec de nouveaux étudiants et permet aux étudiants
                    de s’intégrer et de s’adapter aux coutumes de la vie universitaire plus
                    aisément.
                </p>
                <hr>
                <h5 class="display-5 fw-bold">Pourquoi participer au Programme de jumelage?</h5>
                <p class="col-md-8 fs-4">
                    <ul>
                        <li>
                            Acquérir de l’expérience et des contacts
                        </li>
                        <li>
                            Créer de nouvelles amitiés
                        </li>
                        <li>
                            Apprendre davantage sur diverses domaines
                        </li>
                        <li>
                            Explorer et découvrir tout ce qui tourne au tour de l'INFORMATIQUE
                        </li>
                    </ul>
                </p>
                <hr>
                <h5 class="display-5 fw-bold">Comment S'inscrire?</h5>
                <p class="col-md-8 fs-4">
                    Pour participer au Programme de jumelage, il suffit de remplir le formulaire
                    <a href="#sinscrire"> ci-dessous</a> .
                </p>
                <hr>
                <h5 class="display-5 fw-bold">Questions supplémentaires</h5>
                <p class="col-md-8 fs-4">
                    Si vous avez des questions concernant le Programme de jumelage ou si vous avez des difficultés
                    à remplir le formulaire, veuillez nous <a class="text-primary" data-bs-toggle="tooltip"
                        data-bs-placement="bottom" title="+221 77 111 61 22">
                        contacter.
                    </a>
                </p>
                <hr>
                <div id="sinscrire">
                    <h5 class="display-5 fw-bold">S'inscrire</h5>
                </div>
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseOne" aria-expanded="false"
                                aria-controls="flush-collapseOne">
                                Formulaire qui ne concerne que les étudiants dans la LI1 promo 2019-2020
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <form method="" action="">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Prénom</label>
                                        <input type="text" name="prenom" required id="" class="form-control"
                                            placeholder=" Modou" aria-describedby="helpId">
                                        <small id="helpId" class="text-danger">*champ obligatoire</small>
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Nom</label>
                                        <input type="text" name="nom" required id="" class="form-control"
                                            placeholder="Fall" aria-describedby="helpId">
                                        <small id="helpId" class="text-danger">*champ obligatoire</small>
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Numéro de Téléphone</label>
                                        <input type="number" name="num_telephone" required id="" class="form-control"
                                            placeholder="771234567" aria-describedby="helpId">
                                        <small id="helpId" class="text-danger">*champ obligatoire</small>
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Adresse mail</label>
                                        <input type="email" name="adresse_mail" required id="" class="form-control"
                                            placeholder="" aria-describedby="helpId">
                                        <small id="helpId" class="text-danger">*champ obligatoire</small>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Envoyer</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                aria-controls="flush-collapseTwo">
                                Formulaire qui ne concerne que les étudiants dans la LI2 promo 2020-2021
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <form method="" action="">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Prénom</label>
                                        <input type="text" name="prenom" required id="" class="form-control"
                                            placeholder=" Coumba" aria-describedby="helpId">
                                        <small id="helpId" class="text-danger">*champ obligatoire</small>
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Nom</label>
                                        <input type="text" name="nom" required id="" class="form-control"
                                            placeholder="Fall" aria-describedby="helpId">
                                        <small id="helpId" class="text-danger">*champ obligatoire</small>
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Numéro de Téléphone</label>
                                        <input type="number" name="num_telephone" required id="" class="form-control"
                                            placeholder="771234567" aria-describedby="helpId">
                                        <small id="helpId" class="text-danger">*champ obligatoire</small>
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Adresse mail</label>
                                        <input type="email" name="adresse_mail" required id="" class="form-control"
                                            placeholder="coumba@gmail.com" aria-describedby="helpId">
                                        <small id="helpId" class="text-danger">*champ obligatoire</small>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Envoyer</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <hr>
                <small>Nous vous demandons d'y prendre part!</small>
            </div>
        </div>
    </div>
</main>


<button type="button" class="btnee btn-primary d-none" data-toggle="modal" data-target="#myModal">
    Open modal
</button>

<!-- The Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog  ">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title font-italic">🥳🥳🥳🥳🥳🥳</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <img src="img/commerce.jpg" alt="Le commmercant" class="img-fluid">
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>
<script>
    const Modal = document.querySelector('.modal');
Modal.style.display = "none";
const boutonTrigger = document.querySelector('.btnee');
boutonTrigger.style.display = "none";

window.addEventListener('scroll', myfunc);
let x = 0;
function myfunc() {
    x += 1;
    console.log(x);
    if (x == 5) {
        boutonTrigger.click();
        Modal.style.display = "block";

    }
}
</script>
@endsection
