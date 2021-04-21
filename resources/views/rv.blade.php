<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Plateforme pour mieux appréhender l'année universitaire">
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
      <a class="navbar-brand" href="/">J'Anticipe</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/">Acceuil
              <span class="sr-only">(current)</span>
            </a>
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
          <h1 class="display-4 text-white mt-5 mb-2">Rendez-Vous</h1>
          <p class="lead mb-5 text-white-50">
            Vous avez des problèmes dans le cadre pédagogique et vous peinez à trouver une solution meme dans le <a href="" style="color: black">FORUM</a>
            mis en place et vous pensez que prendre rendez-vous avec un ainè pour lui faire part de votre problème est l'unique solution alors
            bienvenue .
            <br>
            Remplis le formulaire et veuillez rester à l'écoute.
          </p>
        </div>
      </div>
    </div>
  </header>

  <!-- Page Content -->
  <div class="container">

    @isset($message)
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only">Close</span>
            </button>
            <strong>{{$message}}!</strong>
        </div>
    @endisset

    <script>
      function toggleReplyComment()
      {
        let element = document.getElementById('replyComment');
        element.classList.toggle('d-none');
      }

      function toggleReply()
      {
        let element = document.getElementById('reply');
        element.classList.toggle('d-none');
      }
    </script>

    <div class="row">
        <div class="col mb-5">
          <button onclick="toggleReplyComment()" class="btn btn-primary btn-block">Espace Cadet</button>
        </div>

        <div class="col">
          <button onclick="toggleReply()" class="btn btn-primary btn-block">Espace Ainè</button>
        </div>
    </div>

    <div class="row mb-5 d-none" id="reply">
        <div class="col">
            <form action="rendez-vous" method="post">
                @csrf
                <div class="form-group">
                  <label for="">Mot de Passe</label>
                  <input type="password" required name="password" id="" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
                <button type="submit" class="btn btn-primary">Envoyer</button>
            </form>
        </div>
    </div>

    <div class="row mb-5 d-none" id="replyComment">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <form action=" {{route('rv.store')}} "  method="post">
                        @csrf
                        <div class="form-group">
                          <label for="">Prenom</label>
                          <input required type="text" name="prenom" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>

                        <div class="form-group">
                            <label for="">Nom</label>
                            <input required type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId">
                          </div>

                          <div class="form-group">
                            <label for="">Email</label>
                            <input required type="email" name="email" id="" class="form-control" placeholder="" aria-describedby="helpId">
                            <small id="helpId" class="text-muted">Mettez une adresse pour qu'on puisse vous joindre facilement</small>
                          </div>

                          <div class="form-group">
                            <label for="">N° téléphone</label>
                            <input required type="number" name="number" id="" class="form-control" placeholder="" aria-describedby="helpId">
                            <small id="helpId" class="text-muted">Ne faites pas d'erreur pour qu'on puisse vous joindre facilement</small>
                          </div>

                          <div class="form-group">
                            <label for="">Description de votre problème</label>
                            <textarea class="form-control" name="content" id="" rows="3"></textarea>
                          </div>

                          <button type="submit" class="btn btn-outline-primary btn-block">Envoyer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @isset($infos)

    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                    <tr>
                        <th>N°</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Email</th>
                        <th>Numéro de téléphone</th>
                        <th>Contenu</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($infos as $item)
                        <tr>
                            <td scope="row"> {{$item->id}} </td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->prenom}}</td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->number}}</td>
                            <td>{{$item->content}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    @endisset

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; LGI2 -- </p>
    </div>
    <!-- /.container -->
  </footer>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>
