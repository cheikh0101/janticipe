<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Plateforme pour mieux appréhender l'année universitaire">
  <meta name="author" content="">

  <title>J'Anticipe</title>

  <!-- Bootstrap core CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <style>
    .b-example-divider {
  height: 3rem;
  background-color: rgba(0, 0, 0, .1);
  border: solid rgba(0, 0, 0, .15);
  border-width: 1px 0;
  box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
}

.bi {
  vertical-align: -.125em;
  fill: currentColor;
}

.feature-icon {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 4rem;
  height: 4rem;
  margin-bottom: 1rem;
  font-size: 2rem;
  color: #fff;
  border-radius: .75rem;
}

.icon-link {
  display: inline-flex;
  align-items: center;
}
.icon-link > .bi {
  margin-top: .125rem;
  margin-left: .125rem;
  transition: transform .25s ease-in-out;
  fill: currentColor;
}
.icon-link:hover > .bi {
  transform: translate(.25rem);
}

.icon-square {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 3rem;
  height: 3rem;
  font-size: 1.5rem;
  border-radius: .75rem;
}

.rounded-4 { border-radius: .5rem; }
.rounded-5 { border-radius: 1rem; }

.text-shadow-1 { text-shadow: 0 .125rem .25rem rgba(0, 0, 0, .25); }
.text-shadow-2 { text-shadow: 0 .25rem .5rem rgba(0, 0, 0, .25); }
.text-shadow-3 { text-shadow: 0 .5rem 1.5rem rgba(0, 0, 0, .25); }

.card-cover {
  background-repeat: no-repeat;
  background-position: center center;
  background-size: cover;
}
</style>


  <!-- Custom styles for this template -->
  <link href="css/index.css" rel="stylesheet">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

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
            <a class="nav-link" href="#">Acceuil
              <span class="sr-only"></span>
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
            <a class="nav-link" href="#tutos">Tutos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://samaforum.herokuapp.com/">Forum</a>
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
            C'est bien beau pour ne pas dire normal les films ,les séries, les jeux vidéos pendant les vacances.
            En tant que ainé(e) on ne vous conseillera pas uniquement cela vu les enjeux et les nombreux défits à relever.
            <br>
            <i>Joukk tcha bamouy tell</i>
          </p>
        </div>
      </div>
    </div>
  </header>

  <!-- Page Content -->
  <div class="container">

    <div id="apropos">
        @include('pages_li1.apropos')
    </div>

    <div id="cours">

        @include('pages_li1.cours.semestre1')

        @include('pages_li1.cours.semestre2')

    </div>

    <div id="td">

        @include('pages_li1.td.semestre1')

        @include('pages_li1.td.semestre2')

    </div>

    <div id="suggestions">

        @include('pages_li1.suggestions')

    </div>

    <div id="tutos">

        @include('pages_li1.tutos')
    </div>

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; LI -- Promo 2018-2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>
