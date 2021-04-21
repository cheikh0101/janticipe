@extends('layouts.app')

@section('content')

<style type="text/css">
    body {
        margin-top: 20px;
        background-color: #f7f7fc;
    }

    .card-subtitle,
    .card-title {
        font-weight: 400;
    }

    .card-title {
        font-size: .875rem;
        color: #495057;
    }

    .card {
        margin-bottom: 24px;
        box-shadow: 0 0 0.875rem 0 rgba(33, 37, 41, .05);
    }

    .card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: initial;
        border: 0 solid transparent;
        border-radius: .25rem;
    }

    .card-body {
        flex: 1 1 auto;
        padding: 1.25rem;
    }

    .card-header:first-child {
        border-radius: .25rem .25rem 0 0;
    }

    .card-header {
        border-bottom-width: 1px;
    }

    .pb-0 {
        padding-bottom: 0 !important;
    }

    .card-header {
        padding: 1rem 1.25rem;
        margin-bottom: 0;
        background-color: #fff;
        border-bottom: 0 solid transparent;
    }
</style>

<div class="container p-0 mt-5">

    <a href="forum/create" class="btn btn-primary float-right mt-n1"><i class="fas fa-plus"></i> Nouveau Sujet</a>
    <h1 class="h3 mb-3"> &hearts; Dalal akk Jaam &hearts; </h1>

    <div class="row">
        @foreach ($topic as $item)
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card">

                    <div class="card-header px-4 pt-4">
                        <div class="card-actions float-right">
                        ...
                        </div>
                        <h5 class="card-title mb-0">Category</h5>
                        <div class="badge bg-success my-2">{{$item->category}}</div>
                    </div>
                    <div class="card-body px-4 pt-2">
                        <h4>
                            <u>
                                {{$item->title}}
                            </u>
                        </h4>
                        <p>
                            @if (strlen($item->content) >= 100)
                                {{--strlen($item->content) == 100--}}
                            @endif
                            {{ $item->content }}
                        </p>
                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="rounded-circle mr-1"
                            alt="Avatar" width="28" height="28">
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item px-4 pb-4">
                            <p class="mb-2 font-weight-bold">Posté par: <span class="float-right">xxx</span></p>
                            <div class="progress progress-lg">
                                Le : &nbsp;&nbsp;&nbsp;{{$item->created_at->format('d/m/y  à h:m')}}
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        @endforeach
    </div>

</div>

@endsection
