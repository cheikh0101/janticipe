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
    </style>
</head>

<body>
    <table>
        <caption>Jumelage entre la LI1 et la LI2 2020-2021</caption>
        <thead>
            <tr>
                <th colspan="3">LI1</th>
                <th>-</th>
                <th colspan="3">LI2</th>
            </tr>
            <tr>
                <th>PRENOM</th>
                <th>NOM</th>
                <th>N° téléphone</th>
                <th>
                    <-->
                </th>
                <th>PRENOM</th>
                <th>NOM</th>
                <th>N° téléphone</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($jumelage[0] as $item)
            <tr>
                <td>{{$item->prenom}}</td>
                <td>{{$item->nom}}</td>
                <td>{{$item->num_telephone}}</td>
                <td>
                    <-->
                </td>
                <td>{{$item->prenom}}</td>
                <td>{{$item->nom}}</td>
                <td>{{$item->num_telephone}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>