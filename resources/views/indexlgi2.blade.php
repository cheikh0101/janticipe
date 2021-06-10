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
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#apropos">A Propos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#cours">Cours</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#td">TD</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#suggestions">Suggestions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#faq">Bon à Savoir</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="rendez-vous">RV</a>
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
        @include('apropos')
        @include('pages_li2.cours.semestre3')
        @include('pages_li2.cours.semestre4')
        @include('pages_li2.td.semestre3')
        @include('pages_li2.td.semestre4')
        @include('pages_li2.suggestions')
        @include('pages_li2.faq')
    </div>
    <!-- /.container -->
    @include('footer')
</body>

</html>
