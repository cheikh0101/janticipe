@extends('template')

@section('content')

<div class="container">
    <h2 class="pb-2 border-bottom">Projets</h2>
    <div class="row g-5 py-5" id="projets">
        <div class="feature col-md-4">
            <h2>PHP</h2>
            <p>
                Projet qui concerne le domaine de la Santé
            </p>
            <a href="https://drive.google.com/file/d/1rs3VL7APTCg6CCKG-jMnSI3FhAmEZ85h/view?usp=sharing"
                class="icon-link">
                Découvrir!!
                <i class="fas fa-directions"></i>
            </a>
        </div>
        <div class="feature col-md-4">
            <h2>Angular</h2>
            <p>
                Une application Angular de gestion des Contacts
            </p>
            <a href="https://drive.google.com/file/d/1uJgPassf7IbABtkjfwMOKFQH7rBGEauR/view?usp=sharing"
                class="icon-link">
                Découvrir!!
            </a>
        </div>
        <div class="feature col-md-4">
            <h2>Laravel</h2>
            <p>
                Une petite application Laravel de gestion des Contacts
            </p>
            <a href="https://drive.google.com/file/d/1sqfuODqq4UC3ENugUW65hVKukhY4ZK7H/view?usp=sharing"
                class="icon-link">
                Découvrir!!
            </a>
        </div>
    </div>

    <div class="row" id="projets">
        <div class="feature col-md-4">
            <h2>PHP</h2>
            <p>
                L’objectif de cet projet est de mettre en place une boutique en ligne avec la gestion des produits.
            </p>
            <a href="https://drive.google.com/file/d/15J0FX12T1wcsrNpI1bOWBQCC9GN5D5pi/view?usp=sharing"
                class="icon-link">
                Découvrir!!
                <i class="fas fa-directions"></i>
            </a>
        </div>
        <div class="feature col-md-4">
            <h2>PHP</h2>
            <p>
                L’objectif de cet TP est de mettre en place la gestion des apprenants en TIC de l’ISEP.
            </p>
            <a href="https://drive.google.com/file/d/1rCeHCJOojUWhlzgfNqo5qc1d4dSWeTvv/view?usp=sharing"
                class="icon-link">
                Découvrir!!
            </a>
        </div>
        <div class="feature col-md-4">
            <h2>Laravel</h2>
            <p>
                Une petite application Laravel de gestion des Contacts
            </p>
            <a href="https://drive.google.com/file/d/1sqfuODqq4UC3ENugUW65hVKukhY4ZK7H/view?usp=sharing"
                class="icon-link">
                Découvrir!!
            </a>
        </div>
    </div>

    <div class="row" id="projets">
        <div class="feature col-md-4">
            <h2>JAVA</h2>
            <p>
                Le projet a pour but d’appliquer les principes des systèmes d’exploitation afin de réaliser
                l’une des 3 applications d'écrites dans la suite du document.
            </p>
            <a href="https://drive.google.com/file/d/1a_x8rdkyCS2iAkpUeRqoKPFW-Q87EFZh/view?usp=sharing"
                class="icon-link">
                Découvrir!!
                <i class="fas fa-directions"></i>
            </a>
        </div>
        <div class="feature col-md-4">
        </div>
        <div class="feature col-md-4">
        </div>
    </div>

    <h2 class="pb-2 border-bottom mt-4">Sujets</h2>
    <div class="row g-5 py-5" id="projets">
        <div class="feature col-md-4">
            <h5>Sujet 1: Etude et mise en place d’un Système de Covoiturage. (Mobile)</h5>
            <p>
                La thématique qui sera traitée dans ce travail sera du domaine transport.Il sera lieu
                de faciliter à un passager son moyen de transport et d’économiser du carburant
                pour le conducteur.
            </p>
        </div>
        <div class="feature col-md-4">
            <h5>Sujet 2: Etude et mise en place d’un Système de pointage pour le contrôle de
                paiement. (Mobile)</h5>
            <p>
                La thématique qui sera traitée dans ce travail sera du domaine scolaire. Il sera lieu
                de faciliter à un établissement le contrôle du paiement de mensualité des étudiants,
                ce système pourra se faire via QrCode, NFC, etc.
            </p>
        </div>
        <div class="feature col-md-4">
            <h5>Sujet 3: Etude et mise en place d’un Système de recherche de loyer.
                (Web, Mobile)</h5>
            <p>
                La thématique qui sera traitée dans ce travail sera du domaine immobilier. Il sera
                lieu de faciliter à un futur locataire la recherche de local, à travers ce système, les
                agences immobilières pourront enregistrer leurs locaux disponibles pour permettre
                la recherche exhaustive de loyer.
            </p>
        </div>
    </div>

    <div class="row g-5 py-5" id="projets">
        <div class="feature col-md-4">
            <h5>Sujet 4: Etude et mise en place d’un Systèmed’Authentification de médicament
                pharmaceutiques. (Web, Mobile)</h5>
            <p>
                La thématique qui sera traitée dans ce travail sera du domaine pharmaceutique.
                Il sera lieu de mettre en place un dispositif qui évitera la vente de faux
                médicaments, ce dispositif vérifiera les codes-barres des médicaments afin de voir
                l’authenticité lors de l’achat par un tiers.
            </p>
        </div>
        <div class="feature col-md-4">
            <h5>Sujet 5: Etude et mise en place d'un Système de Gestion pour
                les amateurs du Football sénégalais. (Web, Mobile)</h5>
            <p>
                La thématique qui sera traitée dans ce travail sera du domaine sportif plus
                précisément dans le cadre du football sénégalais.
                Il sera lieu de fournir à un amateur du football une interface d’accès pour voir
                les matchs organisés par catégories dans le pays. Un organisateur prendra le soin
                d’organiser les matchs et de saisir les résultats.
            </p>
        </div>
        <div class="feature col-md-4">
            <h5>Sujet 6:4-Réalisation d'un planning d'occupation de salles de cours dans
                un établissement scolaire</h5>
        </div>
    </div>
</div>

@endsection
