@extends('layouts.app')

@section('content')

<style>
                .forum-post-container .media {
            margin: 10px 10px 10px 10px;
            padding: 20px 10px 20px 10px;
            border-bottom: 1px solid #f1f1f1;
        }

        .forum-avatar {
            float: left;
            margin-right: 20px;
            text-align: center;
            width: 110px;
        }

        .forum-avatar .img-circle {
            height: 48px;
            width: 48px;
        }

        .author-info {
            color: #676a6c;
            font-size: 11px;
            margin-top: 5px;
            text-align: center;
        }

        .forum-post-info {
            padding: 9px 12px 6px 12px;
            background: #f9f9f9;
            border: 1px solid #f1f1f1;
        }

        .media-body>.media {
            background: #f9f9f9;
            border-radius: 3px;
            border: 1px solid #f1f1f1;
        }

        .forum-post-container .media-body .photos {
            margin: 10px 0;
        }

        .forum-photo {
            max-width: 140px;
            border-radius: 3px;
        }

        .media-body>.media .forum-avatar {
            width: 70px;
            margin-right: 10px;
        }

        .media-body>.media .forum-avatar .img-circle {
            height: 38px;
            width: 38px;
        }

        .mid-icon {
            font-size: 66px;
        }

        .forum-item {
            margin: 10px 0;
            padding: 10px 0 20px;
            border-bottom: 1px solid #f1f1f1;
        }

        .views-number {
            font-size: 24px;
            line-height: 18px;
            font-weight: 400;
        }

        .forum-container,
        .forum-post-container {
            padding: 30px !important;
        }

        .forum-item small {
            color: #999;
        }

        .forum-item .forum-sub-title {
            color: #999;
            margin-left: 50px;
        }

        .forum-title {
            margin: 15px 0 15px 0;
        }

        .forum-info {
            text-align: center;
        }

        .forum-desc {
            color: #999;
        }

        .forum-icon {
            float: left;
            width: 30px;
            margin-right: 20px;
            text-align: center;
        }

        a.forum-item-title {
            color: inherit;
            display: block;
            font-size: 18px;
            font-weight: 600;
        }

        a.forum-item-title:hover {
            color: inherit;
        }

        .forum-icon .fa {
            font-size: 30px;
            margin-top: 8px;
            color: #9b9b9b;
        }

        .forum-item.active .fa {
            color: #1ab394;
        }

        .forum-item.active a.forum-item-title {
            color: #1ab394;
        }

        @media (max-width: 992px) {
            .forum-info {
                margin: 15px 0 10px 0;
                /* Comment this is you want to show forum info in small devices */
                display: none;
            }

            .forum-desc {
                float: none !important;
            }
        }


            .ibox {
            clear: both;
            margin-bottom: 25px;
            margin-top: 0;
            padding: 0;
        }

        .ibox.collapsed .ibox-content {
            display: none;
        }

        .ibox.collapsed .fa.fa-chevron-up:before {
            content: "\f078";
        }

        .ibox.collapsed .fa.fa-chevron-down:before {
            content: "\f077";
        }

        .ibox:after,
        .ibox:before {
            display: table;
        }

        .ibox-title {
            -moz-border-bottom-colors: none;
            -moz-border-left-colors: none;
            -moz-border-right-colors: none;
            -moz-border-top-colors: none;
            background-color: #ffffff;
            border-color: #e7eaec;
            border-image: none;
            border-style: solid solid none;
            border-width: 3px 0 0;
            color: inherit;
            margin-bottom: 0;
            padding: 14px 15px 7px;
            min-height: 48px;
        }

        .ibox-content {
            background-color: #ffffff;
            color: inherit;
            padding: 15px 20px 20px 20px;
            border-color: #e7eaec;
            border-image: none;
            border-style: solid solid none;
            border-width: 1px 0;
        }

        .ibox-footer {
            color: inherit;
            border-top: 1px solid #e7eaec;
            font-size: 90%;
            background: #ffffff;
            padding: 10px 15px;
        }

        body {
            margin-top: 20px;
            background: #eee;
        }

</style>

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-12">
            <div class="wrapper wrapper-content animated fadeInRight">

                <div class="ibox-content m-b-sm border-bottom">
                    <div class="p-xs">
                        <div class="pull-left m-r-md">
                            <i class="fa fa-globe text-navy mid-icon"></i>
                        </div>
                        <h2>Bienvenue dans les statistiques du forum</h2>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-12">
            <div class="wrapper wrapper-content animated fadeInRight">

                <div class="ibox-content m-b-sm border-bottom">

                    <div class="forum-title">
                        <h3>Statistique Général</h3>
                    </div>

                    <div class="forum-item">
                        <div class="row">
                            <div class="col-md-9">
                                <div class="forum-icon">
                                    <i class="fa fa-bolt"></i>
                                </div>
                                <a href="forum_post.html" class="forum-item-title">Total Sujet</a>
                                <div class="forum-sub-title">Ceci est le nombre total de sujets de discussion</div>
                            </div>
                            <div class="col-md-1 forum-info">
                                <span class="views-number">
                                    000
                                </span>
                                <div>
                                    <small>Sujets</small>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="forum-item">
                        <div class="row">
                            <div class="col-md-9">
                                <div class="forum-icon">
                                    <i class="fa fa-bolt"></i>
                                </div>
                                <a href="forum_post.html" class="forum-item-title">Total Commentaire</a>
                                <div class="forum-sub-title">Ceci est le nombre total de commentaires de discussion</div>
                            </div>
                            <div class="col-md-1 forum-info">
                                <span class="views-number">
                                    000
                                </span>
                                <div>
                                    <small>Commentaires</small>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="forum-item">
                        <div class="row">
                            <div class="col-md-9">
                                <div class="forum-icon">
                                    <i class="fa fa-bolt"></i>
                                </div>
                                <a href="forum_post.html" class="forum-item-title">Post des Hommes</a>
                                <div class="forum-sub-title">Ceci est le nombre total des posts de sujet de discussion des hommes</div>
                            </div>
                            <div class="col-md-1 forum-info">
                                <span class="views-number">
                                    000
                                </span>
                                <div>
                                    <small>Post Hommes</small>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="forum-item">
                        <div class="row">
                            <div class="col-md-9">
                                <div class="forum-icon">
                                    <i class="fa fa-bolt"></i>
                                </div>
                                <a href="forum_post.html" class="forum-item-title">Post des Femmes</a>
                                <div class="forum-sub-title">Ceci est le nombre total des posts de sujet de discussion des femmes</div>
                            </div>
                            <div class="col-md-1 forum-info">
                                <span class="views-number">
                                    000
                                </span>
                                <div>
                                    <small>Post Femmes</small>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="forum-item">
                        <div class="row">
                            <div class="col-md-9">
                                <div class="forum-icon">
                                    <i class="fa fa-bolt"></i>
                                </div>
                                <a href="forum_post.html" class="forum-item-title">Nombre de post de AUTEUR</a>
                                <div class="forum-sub-title">Voila l'ensemble des sujets de discussion dont vous etes l'auteur.</div>
                            </div>
                            <div class="col-md-1 forum-info">
                                <span class="views-number">
                                    000
                                </span>
                                <div>
                                    <small>Nbre Post</small>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="forum-item">
                        <div class="row">
                            <div class="col-md-9">
                                <div class="forum-icon">
                                    <i class="fa fa-bolt"></i>
                                </div>
                                <a href="forum_post.html" class="forum-item-title">Nombre de commentaires de AUTEUR</a>
                                <div class="forum-sub-title">Voila l'ensemble des commentaires dont vous etes l'auteur.</div>
                            </div>
                            <div class="col-md-1 forum-info">
                                <span class="views-number">
                                    000
                                </span>
                                <div>
                                    <small>Nbre Commentaire</small>
                                </div>
                            </div>

                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>

@endsection
