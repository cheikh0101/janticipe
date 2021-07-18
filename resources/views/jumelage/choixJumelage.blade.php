@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col">
            <a href=" {{route('choixjumelage')}} " class="btn btn-primary btn-block">Je jumele de façon aléatoire</a>
        </div>
        <div class="col">
            <a href="" class="btn btn-primary btn-block">Je jumele en fonction de la Résidence</a>
        </div>
    </div>
</div>
@endsection