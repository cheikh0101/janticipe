@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col">
            <form method="POST" action=" {{route('cadet.update',$cadet)}} ">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Prénom</label>
                    <input type="text" name="prenom" required id="" value="{{$cadet->prenom}}" class="form-control"
                        aria-describedby="helpId">
                    <small id="helpId" class="text-danger">*champ obligatoire</small>
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nom</label>
                    <input type="text" name="nom" required id="" value="{{$cadet->nom}}" class="form-control"
                        aria-describedby="helpId">
                    <small id="helpId" class="text-danger">*champ obligatoire</small>
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Numéro de Téléphone</label>
                    <input type="number" name="num_telephone" required id="" class="form-control"
                        value="{{$cadet->num_telephone}}" aria-describedby="helpId">
                    <small id="helpId" class="text-danger">*champ obligatoire</small>
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Adresse mail</label>
                    <input type="email" name="adresse_mail" required id="" class="form-control" value="
                        {{$cadet->adresse_mail}}" aria-describedby="helpId">
                    <small id="helpId" class="text-danger">*champ obligatoire</small>
                </div>
                <div class="form-group mb-3">
                    <label for="residence">Résidence</label>
                    <select class="form-control" name="residence" id="residence">
                        <option value="hotel"> Hotel du rail ou aux alentours </option>
                        <option value="vcn"> Site VCN ou aux alentours </option>
                        <option value="autres"> Autres </option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Envoyer</button>
            </form>
        </div>
    </div>
</div>
@endsection