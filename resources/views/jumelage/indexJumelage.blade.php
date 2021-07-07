@extends('template')
@section('content')
<main>
    <div class="container py-4">
        <div class="p-2 mb-4 bg-light rounded-3">
            <div class="container-fluid py-5">
                <div class="my-5 text-center">
                    <h1 class="display-5 fw-bold">
                        Programme de
                        <span class="txt-rotate" data-period="2000" data-rotate='[ "JUMELAGE"]'></span>
                    </h1>
                    <div class="col-lg-6 mx-auto">
                        <p class="lead mb-4">Le Programme de jumelage offre l’occasion aux étudiants actuels de
                            l’UIDT,UFR SET,département INFORMATIQUE
                            d’établir des liens avec de nouveaux étudiants et permet aux étudiants
                            de s’intégrer et de s’adapter aux coutumes de la vie universitaire plus
                            aisément.
                        </p>
                    </div>
                </div>
                <hr>
                <h5 class="display-5 fw-bold">Pourquoi participer au Programme de jumelage?</h5>
                <p class="col-md-8 fs-4">
                    <ul>
                        <li>
                            <i class="fa fa-spinner" aria-hidden="true"></i> Acquérir de l’expérience et des contacts
                        </li>
                        <li>
                            <i class="fa fa-square" aria-hidden="true"></i> Créer de nouvelles amitiés
                        </li>
                        <li>
                            <i class="fa fa-square" aria-hidden="true"></i> Apprendre davantage sur diverses domaines
                        </li>
                        <li>
                            <i class="fa fa-spinner" aria-hidden="true"></i> Explorer et découvrir tout ce qui tourne au
                            tour de l'INFORMATIQUE
                        </li>
                    </ul>
                </p>
                <hr>
                <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                    <div class="col-10 col-sm-8 col-lg-6">
                        <img src="img/inscription.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes"
                            width="700" height="500" loading="lazy">
                    </div>
                    <div class="col-lg-6">
                        <h1 class="display-5 fw-bold lh-1 mb-3">Comment S'inscrire?</h1>
                        <p class="lead"> Pour participer au Programme de jumelage, il suffit de remplir le formulaire
                            <a href="#sinscrire"> ci-dessous</a> .</p>
                    </div>
                </div>
                <hr>
                <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                    <div class="col-lg-6">
                        <h1 class="display-5 fw-bold">
                            Questions
                            <span class="txt-rotate" data-period="1000" data-rotate='[ "supplémentaires"]'></span>
                        </h1>
                        <p class="lead"> Si vous avez des questions concernant le Programme de jumelage ou si vous avez
                            des difficultés
                            à remplir le formulaire, veuillez nous <a class="text-primary" data-bs-toggle="tooltip"
                                data-bs-placement="bottom" title="+221 77 111 61 22">
                                contacter
                            </a>.</p>
                    </div>
                    <div class="col-10 col-sm-8 col-lg-6">
                        <img src="img/questions.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes"
                            width="700" height="500" loading="lazy">
                    </div>
                </div>
                <hr>
                <div id="sinscrire">
                    <h5 class="display-5 fw-bold">Inscription</h5>
                </div>
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    @isset($tmp)
                    @if ($tmp == 2)
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseOne" aria-expanded="false"
                                aria-controls="flush-collapseOne">
                                Formulaire qui ne concerne que les étudiants dans la LI2 promo 2019-2020
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <form method="POST" action=" {{route('aine.store')}} ">
                                    @csrf
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
                    @else
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                aria-controls="flush-collapseTwo">
                                Formulaire qui ne concerne que les étudiants dans la LI1 promo 2020-2021
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <form method="POST" action=" {{route('cadet.store')}} ">
                                    @csrf
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
                    @endif
                    @endisset
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

var TxtRotate = function (el, toRotate, period) {
    this.toRotate = toRotate;
    this.el = el;
    this.loopNum = 0;
    this.period = parseInt(period, 10) || 2000;
    this.txt = '';
    this.tick();
    this.isDeleting = false;
};

TxtRotate.prototype.tick = function () {
    var i = this.loopNum % this.toRotate.length;
    var fullTxt = this.toRotate[i];

    if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
    } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
    }

    this.el.innerHTML = '<span class="wrap">' + this.txt + '</span>';

    var that = this;
    var delta = 300 - Math.random() * 100;

    if (this.isDeleting) { delta /= 2; }

    if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
    } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
    }

    setTimeout(function () {
        that.tick();
    }, delta);
};

window.onload = function () {
    var elements = document.getElementsByClassName('txt-rotate');
    for (var i = 0; i < elements.length; i++) {
        var toRotate = elements[i].getAttribute('data-rotate');
        var period = elements[i].getAttribute('data-period');
        if (toRotate) {
            new TxtRotate(elements[i], JSON.parse(toRotate), period);
        }
    }
    // INJECT CSS
    var css = document.createElement("style");
    css.type = "text/css";
    css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #666 }";
    document.body.appendChild(css);
};
</script>
@endsection