<!DOCTYPE html>
<html lang="es" ng-app='MyApp'>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDO - PHP - Angular</title>
    <link rel="shortcut icon" href="../../image/logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../node_modules/@fortawesome/fontawesome-free/css/all.min.css">

</head>

<body ng-controller='Links'>

    <?php
    include '../Partial/navbar.php';
    ?>

    <div class="container mt-4">
        <div class="row">
            <div class="col-3  offset-md-9 mb-4">
                <div class="title">
                    <h5>{{ Title }}</h5>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-3 align-self-end offset-md-9 mb-4">
                <button class='btn btn-outline-info' ng-click='registrar()'><i class='fas fa-link'></i> Nuevo</button>
            </div>
        </div>
        <div class="row">
            <div class="col-12">

                <!--  -->
                <div class="card-deck">
                    <div class="card border-dark shadow mb-5 rounded" style="width:30%;" ng-repeat='Link in Links'>
                        <div class="card-header bg-secondary text-white text-right text-uppercase">
                            {{ Link.title }}
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><a href="{{ Link.url }}" target='_black'> <i class='fas fa-link'></i> Link </a></h5>
                            <hr>
                            <span class='text-center'>
                                <a ng-click='editar(Link.id)' class='text-warning text-right'>[ <i class="far fa-edit"></i> editar]</a>
                                <a ng-click='borrar(Link.id)' class='text-danger text-right'>[ <i class="far fa-trash-alt"></i> Eliminar]</a>
                            </span>
                            <p class="card-text">
                                {{ Link.description }}
                            </p>
                        </div>
                    </div>
                </div>
                <!--  -->

            </div>
        </div>

    </div>


    <script src="../../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src='../../node_modules/angular/angular.min.js'></script>
    <script src="../../node_modules/angular-modal-service/dst/angular-modal-service.min.js"></script>

    <script src="../../js/angular.links.js"></script>

</body>

</html>