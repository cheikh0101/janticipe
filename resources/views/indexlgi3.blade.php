<!DOCTYPE html>
<html lang="en">

@include('head')

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
                        <a class="nav-link" href="#">Acceuil
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#apropos">A Propos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#cours">Cours</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://samaforum.herokuapp.com/">Forum</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header -->
    @include('header')
    <!-- Page Content -->
    <div class="container">

        <div id="apropos">
            @include('apropos')
        </div>
        <div id="cours">
            @include('pages_li3.cours.semestre5')
            @include('pages_li3.cours.semestre6')
        </div>
    </div>

    @include('footer')
</body>

</html>
