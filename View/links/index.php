<?php

include '../../Modelo/class.links.php';

$cn = new Consultas();
$rs = $cn->index();

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDO / PHP</title>
    <link rel="shortcut icon" href="../../image/logo.jpg" type="image/x-icon">

    <link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../node_modules/@fortawesome/fontawesome-free/css/all.min.css">
</head>

<body>

    <?php
    include '../Partial/navbar.php';
    ?>

    <div class="container mt-4">
        <div class="row">
            <div class="col-3 align-self-end offset-md-9 mb-4">
                <a class='btn btn-outline-info' href='insertar.php'><i class='fas fa-link'></i> Nuevo</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">

                <!--  -->
                <div class="card-deck">

                    <?php
                    if (isset($rs))
                        foreach ($rs as $i) {

                            ?>

                        <div class="card border-dark w-30 shadow mb-5 rounded" style="max-width: 18rem;">
                            <div class="card-header bg-secondary text-white text-right text-uppercase">
                                <?= $i['title']  ?>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><a href="<?= $i['url'] ?>" target='_black'> <i class='fas fa-link'></i> Link </a></h5>
                                <hr>
                                <span class='text-center'>
                                    <a href="./editar.php?id=<?= $i['id'] ?>" class='text-warning text-right'>[ <i class="far fa-edit"></i> editar]</a>
                                    <a href="./borrar.php?id=<?= $i['id'] ?>" class='text-danger text-right'>[ <i class="far fa-trash-alt"></i> Eliminar]</a>
                                </span>
                                <p class="card-text">
                                    <?= $i['description'] ?>
                                </p>
                            </div>
                        </div>
                    <?php  } else {
                    ?>
                        <div class="card border-dark">
                            <div class="card-header bg-secondary text-white">
                                No Found
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><a href="insertar.php"> <i class='fas fa-link'></i> Nuevo </a></h5>
                                <p class="card-text">
                                    No hay ningun Item
                                </p>
                            </div>
                        </div>

                    <?php
                    }

                    ?>
                </div>

                <!--  -->

            </div>
        </div>

    </div>

    <script src="../../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>

</html>