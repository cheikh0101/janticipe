<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <h2 class="pb-2 border-bottom">{{$forum->title}}</h2>
                <div class="inner-main-body p-2 p-sm-3 collapse forum-content show">
                    <div class="card mb-2">
                        <div class="card-body p-2 p-sm-3">
                            <div class="media forum-item">
                                <a href="#" data-toggle="collapse" data-target=".forum-content">
                                    <img src="{{$image}}" class="mr-3 rounded-circle" width="50" alt="photo" />
                                </a>
                                <div class="media-body">
                                    <h6><a href="#" data-toggle="collapse" data-target=".forum-content" class="text-body"> {{$forum->title}} </a></h6>
                                    <p class="text-secondary">
                                        {{$forum->content}}
                                    </p>
                                    <div class="d-flex justify-content-between">
                                        <p class="text-muted"><a href="">Posté par:</a> {{$forum->user->name}} <span class="text-secondary font-weight-bold"> -- le {{$forum->created_at->format('d/m/y à h:m:s')}}</span></p>
                                        <span class="badge badge-primary ">{{$forum->category}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <span>
                                <a href=" {{route('forum.edit',$forum)}} " class="btn btn-primary">Editer</a>
                            </span>

                            <span>
                                <form action=" {{route('forum.destroy',$forum)}} " method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger ">Supprimer</button>
                                </form>
                            </span>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <h5 class="pb-2 border-bottom">Liste des Commentaires</h5>

        <h5 class="pb-2 border-bottom">Votre Commentaire</h5>
        <div class="row align-items-md-stretch">
            <div class="col">
              <div class="h-100 p-5 text-white bg-dark rounded-3">
                <form action="" method="post">
                   <div class="form-group">
                     <label for="">Commentaire</label>
                     <textarea class="form-control" name="comment" id="" rows="3" required ></textarea>
                   </div>
                    <button class="btn btn-outline-light" type="submit">Commenter</button>
                </form>
              </div>
            </div>
          </div>

    </div>
@endsection
