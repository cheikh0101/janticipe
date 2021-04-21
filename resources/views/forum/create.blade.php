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

                <div class="card">
                    <div class="card-body">

                        <form action="forum" method="post">
                            @csrf

                            <div class="form-group">
                            <label for="">Categories</label>
                            <select multiple class="custom-select" name="" id="">
                                    <option selected>Algorithme et Programmation</option>
                                    <option value="">Développement Web</option>
                                    <option value="">Base de Données</option>
                                    <option value="">Programmation Oriente Objet</option>
                                    <option value="">Réseaux</option>
                                    <option value="">Autres</option>
                                </select>
                            </div>

                            <div class="form-group">
                            <label for="">Titre</label>
                            <input type="text" name="title" id="" class="form-control" placeholder="" aria-describedby="helpId">
                            <small id="helpId" class="text-muted">Un texte explicite pour qu'on puisse vous aider rapidement</small>
                            </div>

                            <div class="form-group">
                              <label for="">Contenu</label>
                              <textarea class="form-control" name="" id="" rows="3"></textarea>
                            </div>

                            <div class="row mb-2">
                                <div class="col">
                                    Genre :
                                </div>
                                <div class="col">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="" id="" value="checkedValue" >
                                            Masculin
                                        </label>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="" id="" value="checkedValue" >
                                            Féminin
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary btn-block">Publier</button>
                        </form>

                    </div>
                </div>


            </div>
        </div>
    </div>

@endsection
