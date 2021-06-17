@extends('layouts.app')


<style type="text/css">
    body {
        margin-top: 20px;
        background-color: #f7f7fc;
    }
</style>

@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col mt-5">
            <h1 class="h3 mb-3"> &hearts; Créer un Sujet &hearts; </h1>
            <div class="card">
                <div class="card-body">

                    <form action="{{route('forum.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Categories</label>
                            <select class="form-control" name="category" id="" required>
                                <option value="Algorithme et Programmation">Algorithme et Programmation</option>
                                <option value="Développement Web">Développement Web</option>
                                <option value="Base de Données">Base de Données</option>
                                <option value="Programmation Oriente Objet">Programmation Oriente Objet</option>
                                <option value="Réseaux">Réseaux</option>
                                <option value="Autres">Autres</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">Titre</label>
                            <input type="text" name="title" id="" class="form-control" placeholder=""
                                aria-describedby="helpId" required>
                            <small id="helpId" class="text-muted">Un texte explicite pour qu'on puisse vous aider
                                rapidement</small>
                        </div>

                        <div class="form-group">
                            <label for="">Contenu</label>
                            <textarea class="form-control" name="content" id="" rows="3" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Publier</button>
                    </form>

                </div>
            </div>


        </div>
    </div>
</div>

@endsection
