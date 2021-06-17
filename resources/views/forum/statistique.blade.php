@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-12">
            <div class="wrapper wrapper-content animated fadeInRight">
                <div class="ibox-content m-b-sm border-bottom">
                    <div class="p-xs">
                        <h2>Bienvenue dans les statistiques du forum</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-12">
            <div class="card ">
                <div class="card-body">
                    <h1 class="card-title">Statistiques Général </h1>
                    <hr>
                    <p class="card-text">
                        <div class="row">
                            <div class="col">
                                <h3> Total Sujet</h3>
                                <small>Ceci est le nombre total de sujets de discussion</small>
                            </div>
                            <div class="col-6">
                                <h3 class="text-center">
                                    <span @if ($nbreSujets>5) class="badge badge-success" @else class="badge
                                        badge-danger" @endif>{{$nbreSujets}}</span>
                                </h3>
                            </div>
                        </div>
                    </p>
                    <hr>
                    <p class="card-text">
                        <div class="row">
                            <div class="col">
                                <h3> Total Commentaire</h3>
                                <small>Ceci est le nombre total de commentaires de discussion</small>
                            </div>
                            <div class="col-6">
                                <h3 class="text-center">00</h3>
                            </div>
                        </div>
                    </p>
                    <hr>
                    <p class="card-text">
                        <div class="row">
                            <div class="col">
                                <h3> Post des Hommes</h3>
                                <small>Ceci est le nombre total des posts de sujet de discussion
                                    des hommes</small>
                            </div>
                            <div class="col-6">
                                <h3 class="text-center"> <span class="badge badge-success"> {{$hommes}} </span> </h3>
                            </div>
                        </div>
                    </p>
                    <hr>
                    <p class="card-text">
                        <div class="row">
                            <div class="col">
                                <h3> Post des Femmes</h3>
                                <small>Ceci est le nombre total des posts de sujet de discussion
                                    des femmes</small>
                            </div>
                            <div class="col-6">
                                <h3 class="text-center">{{$femmes}}</h3>
                            </div>
                        </div>
                    </p>
                    <hr>
                    <p class="card-text">
                        <div class="row">
                            <div class="col">
                                <h3>Nombre de post de AUTEUR</h3>
                                <small>Voilà l'ensemble des sujets de discussion dont vous etes
                                    l'auteur.</small>
                            </div>
                            <div class="col-6">
                                <h3 class="text-center">00</h3>
                            </div>
                        </div>
                    </p>
                    <hr>
                    <p class="card-text">
                        <div class="row">
                            <div class="col">
                                <h3> Nombre de commentaires de AUTEUR</h3>
                                <small>Voila l'ensemble des commentaires dont vous etes l'auteur.</small>
                            </div>
                            <div class="col-6">
                                <h3 class="text-center">00</h3>
                            </div>
                        </div>
                    </p>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
