<?php
require 'controllers.php';
$toko = query("SELECT * FROM cake");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<thead>
    <style>
        body{
            background:url(img/layered-peaks-haikei.svg)no-repeat;
            background-size:cover;
            color:white;
        }
        td a{
            text-decoration:none;
        }
        a{
            color:white;
            text-decoration:none;
        }
        table{
            margin-top:30px;
            background-color:black;
        }
        h1{
            text-align:center;
        }
        tr th, tr td{
            text-align:center;
            color:white;
        }
    </style>
    <div class="d-flex justify-content-center">
<table class="table table-bordered border-primary" style="width:1000px ">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>birthday</th>
                <th>waffle</th>
                <th>ice</th>
                <th>donat</th>
                <th>slice</th>
                <th>drink</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach($toko as $valo) { ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><?= $valo["nama"] ?></td>
                    <td><?= $valo["birthday"] ?></td>
                    <td><?= $valo["waffle"] ?></td>
                    <td><?= $valo["ice"] ?></td>
                    <td><?= $valo["donat"] ?></td>
                    <td><?= $valo["slice"] ?></td>
                    <td><?= $valo["drink"] ?></td>
                </tr>
                <?php $i++ ?>
           <?php } ?>
        </tbody>
        </table>
            </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>