<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>J'Anticipe</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- Custom styles for this template -->
  <link href="css/index.css" rel="stylesheet">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">J'Anticipe</a>
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
            <a class="nav-link" href="#faq">FAQ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Forum</a>
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

    @include('pages.apropos')

    @include('pages.cours.semestre3')

    @include('pages.cours.semestre4')

    @include('pages.td.semestre3')

    @include('pages.td.semestre4')

    @include('pages.suggestions')

    @include('pages.faq')

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; LGI2 -- </p>
    </div>
    <!-- /.container -->
  </footer>
</body>

</html>
