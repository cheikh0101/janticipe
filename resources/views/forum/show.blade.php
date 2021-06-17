@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col">
            <div class="card">
                <img class="card-img-top" src="{{$image}}" alt="avatar">
                <div class="card-body">
                    <h4 class="card-title">#{{$forum->id}} Titre : {{$forum->title}} </h4>
                    <p class="card-text">Catégories: {{$forum->category}}</p>
                    <p class="card-text">Contenu: {{$forum->content}}</p>
                    <div class="row">
                        <div class="col">
                            <a href=" {{route('forum.edit',$forum)}} " class="btn btn-primary">Editer</a>
                        </div>
                        <div class="col">
                            <form action=" {{route('forum.destroy',$forum)}} " method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger ">Supprimer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
