<!doctype html>
<html lang="en">

<head>
    <title>J'Anticipe</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/">J'Anticipe</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Acceuil
                            <span class="sr-only"></span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Cours
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="/cours/s1">Semestre 1</a></li>
                            <li><a class="dropdown-item" href="/cours/s2">Semestre 2</a></li>
                            <li><a class="dropdown-item" href="/cours/s3">Semestre 3</a></li>
                            <li><a class="dropdown-item" href="/cours/s4">Semestre 4</a></li>
                            <li><a class="dropdown-item" href="/cours/s5">Semestre 5</a></li>
                            <li><a class="dropdown-item" href="/cours/s6">Semestre 6</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            TD/TP
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="/td/s1">Semestre 1</a></li>
                            <li><a class="dropdown-item" href="/td/s2">Semestre 2</a></li>
                            <li><a class="dropdown-item" href="/td/s3">Semestre 3</a></li>
                            <li><a class="dropdown-item" href="/td/s4">Semestre 4</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Suggestions
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="/suggestions/s1">Semestre 1</a></li>
                            <li><a class="dropdown-item" href="/suggestions/s2">Semestre 2</a></li>
                            <li><a class="dropdown-item" href="/suggestions/s3">Semestre 3</a></li>
                            <li><a class="dropdown-item" href="/suggestions/s4">Semestre 4</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/projets">Projets</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="/jumelage">Jumelage</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tooltip" data-bs-placement="bottom"
                            title="En développement">
                            Blog
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tooltip" data-bs-placement="bottom"
                            title="En développement">
                            Forum
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <header class="bg-primary py-5 mb-5">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-lg-12">
                    <h1 class="display-4 text-white mt-5 mb-2">J'Anticipe</h1>
                    <p class="lead mb-5 text-white-50">
                        C'est bien beau de se divertir pendant les vacances mais n'empeche si vous avez la possibilité
                        d'anticiper vos cours mieux vaut en profiter.
                        C'est en ce sens que ces documents ont été regroupés ici pour vous permettre d'avoir au moins un
                        aperçu.
                        <br>
                        <i>Juk ça bamuy téel</i>
                    </p>
                </div>
            </div>
        </div>
    </header>

    <!-- Page Content -->
    <div class="container">
        @if(session('header') != true)
        <div class="row">
            <div class="col-md-8 mb-5">
                <h2>A propos</h2>
                <hr>
                <p>
                    <b>J'ANTICIPE </b>
                    est une plateforme proposée par les étudiants de la licence 2 en Informatique promotion
                    2018-2020 de
                    l'Université Iba Der Thiam de Thies pour permettre aux étudiants de tous les niveaux (l1,l2,l3)
                    d'accéder
                    aux documents cibles de meme que
                    des <b> Suggestions </b> .
                </p>
                <p>
                    Ne s'arretant pas là nous les offrons aussi un <b>forum</b> de discussion à but pédagogique dans
                    lequel ils
                    pourront échanger avec leurs ainés voir
                    meme entre eux sur les différents problèmes qu'ils rencontrent.
                </p>
            </div>
            <div class="col-md-4 mb-5">
                <h2>Offert par</h2>
                <hr>
                <address>
                    <strong>
                        Licence Informatique 2 de l'UIDT
                        <br>
                        Promotion : 2018-2019
                    </strong>
                    <br>
                </address>
            </div>
        </div>
        <!-- /.row -->
        @endif

    </div>

    @yield('content')

    <!-- Footer -->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; LI -- Promo 2018-2019 </p>
        </div>
        <!-- /.container -->
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous">
    </script>
</body>

</html>