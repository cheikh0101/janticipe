@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <div class="inner-main-body p-2 p-sm-3 collapse forum-content show">
                    <div class="card mb-2">
                        <div class="card-body p-2 p-sm-3">
                            <div class="media forum-item">
                                <a href="#" data-toggle="collapse" data-target=".forum-content"><img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="mr-3 rounded-circle" width="50" alt="User" /></a>
                                <div class="media-body">
                                    <h6><a href="#" data-toggle="collapse" data-target=".forum-content" class="text-body">Realtime fetching data</a></h6>
                                    <p class="text-secondary">
                                        lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet
                                    </p>
                                    <p class="text-muted"><a href="javascript:void(0)">drewdan</a> replied <span class="text-secondary font-weight-bold">13 minutes ago</span></p>
                                </div>
                                <div class="text-muted small text-center align-self-center">
                                    <span class="d-none d-sm-inline-block"><i class="far fa-eye"></i> 19</span>
                                    <span><i class="far fa-comment ml-2"></i> 3</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
