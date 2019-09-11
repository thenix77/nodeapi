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
            <div class="col-3  offset-md-9 mb-4">
                <div class="title">
                    <h5>CRUD - API</h5>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-3 align-self-end offset-md-9 mb-4">
                <a class='btn btn-outline-info' id='nuevo'><i class='fas fa-link'></i> Nuevo</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">

                <!--  -->
                <div class="card-deck"> </div>
                <!--  -->

            </div>
        </div>

    </div>

    <!--  -->
    <?php
    include 'insert.php';
    include 'edit.php';
    include 'delete.php';

    ?>



    <script src="../../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

    <script src='../../js/links.js'></script>

</body>

</html>