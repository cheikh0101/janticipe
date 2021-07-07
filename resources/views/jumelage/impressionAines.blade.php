<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style>
        table {
            border-collapse: collapse;
            /* Les bordures du tableau seront collées (plus joli) */
        }

        td,
        th {
            border: 3px solid black;
        }

        body {
            margin-left: 100px
        }
    </style>
</head>

<body>
    <table>
        <caption>Liste des étudiants de la LI2 inscris au programme de jumelage</caption>
        <br>
        <thead>
            <tr>
                <th colspan="5">
                    <center> Licence Informatique 2 </center>
                </th>
            </tr>
            <tr>
                <th>Id</th>
                <th>PRENOM</th>
                <th>NOM</th>
                <th>N° téléphone</th>
                <th>Adresse mail</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($aines as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->prenom}}</td>
                <td>{{$item->nom}}</td>
                <td>{{$item->num_telephone}}</td>
                <td>{{$item->adresse_mail}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>