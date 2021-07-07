@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center d-none">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h4>
                        Générer un login et mp pour LGI1
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{route('authlgi1.store')}} " method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Adresse mail </label>
                            <input type="text" class="form-control" name="email" id="" aria-describedby="helpId"
                                placeholder="">
                        </div>
                        <button type="submit" class="btn btn-primary">Envoyer</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h4>
                        Générer un login et mp pour LGI2
                    </h4>
                </div>
                <div class="card-body">
                    <form action=" {{route('authlgi2.store')}} " method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Adresse mail </label>
                            <input type="text" class="form-control" name="email" id="" aria-describedby="helpId"
                                placeholder="">
                        </div>
                        <button type="submit" class="btn btn-primary">Envoyer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col">
            <h5>Liste des login et mp generes</h5>
            <table class="table">
                <thead>
                    <tr>
                        <th>#id</th>
                        <th>Adresse mail</th>
                        <th>Password</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($authLgi1 as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->password}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col">
            <h5>Liste des login et mp generes</h5>
            <table class="table">
                <thead>
                    <tr>
                        <th>#id</th>
                        <th>Adresse mail</th>
                        <th>Password</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($authLgi2 as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->password}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col">
            <div class="d-flex justify-content-between">
                <span>
                    <h5> Etudiants de la LGI 1 ({{$nbreCadet}}) </h5>
                </span>
                <span>
                    <a href="pdf-generateCadet" class="btn btn-primary"> <i class="fa fa-download"
                            aria-hidden="true"></i>
                        Convertir en
                        pdf </a>
                </span>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>#id</th>
                        <th>Prénom</th>
                        <th>Nom</th>
                        <th>Adresse Mail</th>
                        <th>Numéro Téléphone</th>
                        <th colspan="2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cadets as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->prenom}}</td>
                        <td>{{$item->nom}}</td>
                        <td>{{$item->adresse_mail}}</td>
                        <td>{{$item->num_telephone}}</td>
                        <td><a href="" class="btn btn-primary"> <i class="fa fa-pencil" aria-hidden="true"></i> </a>
                        </td>
                        <td>
                            <form action=" {{route('cadet.destroy',$item)}} " method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="d-flex justify-content-between">
                <span>
                    <h5> Etudiants de la LGI 2 ({{$nbreAine}})</h5>
                </span>
                <span>
                    <a href="pdf-generateAines" class="btn btn-primary"> <i class="fa fa-download"
                            aria-hidden="true"></i>
                        Convertir en
                        pdf </a>
                </span>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>#id</th>
                        <th>Prénom</th>
                        <th>Nom</th>
                        <th>Adresse Mail</th>
                        <th>Numéro Téléphone</th>
                        <th colspan="2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($aines as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->prenom}}</td>
                        <td>{{$item->nom}}</td>
                        <td>{{$item->adresse_mail}}</td>
                        <td>{{$item->num_telephone}}</td>
                        <td><a href=" {{route('aine.destroy',$item)}} " class="btn btn-primary"> <i class="fa fa-pencil"
                                    aria-hidden="true"></i> </a>
                        </td>
                        <td>
                            <form action="{{route('aine.destroy',$item)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"> <i class="fa fa-remove"
                                        aria-hidden="true"></i> </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modelId">
                Je jumele en envoyant les mails et la creation
                d'un pdf
            </button>

            <!-- Modal -->
            <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Etes vous sur de vouloir le faire ?</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="d-flex justify-content-between">
                                <span>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Non</button>
                                </span>
                                <span>
                                    <a href=" {{route('jumelage')}} " class="btn btn-primary">Oui</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection