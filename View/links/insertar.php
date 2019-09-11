
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

    <div class="container">
        <div class="row">
            <div class="col-4 offset-4 mt-4 text-center">
                REGISTRO DE UN LINK
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-4 offset-4">
                <form action="../../Controller/insertar.php" method='POST'>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-bookmark"></i></span>
                        </div>
                        <input type="text" class="form-control" name='title' placeholder="Titulo" aria-label="Username" required>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-link"></i></span>
                        </div>
                        <input type="url" class="form-control" name='url' placeholder="Direccion Web" aria-label="Username" required>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-marker"></i></span>
                        </div>
                        <textarea name="description"  cols="30" rows="10" placeholder='Descripcion del Sitio'></textarea>
                    </div>
                    <div class="input-group ">
                        <button type="submit" class="btn  btn-outline-secondary ml-auto">
                        <i class="far fa-save"></i> Registrar
                        </button>
                        <button type="button" class="btn  btn-danger ml-2" onclick='goback()'>
                        <i class="fas fa-arrow-circle-left"></i> volver
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>


<script src="node_modules/jquery/dist/jquery.min.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

<script>

 function goback() {

    window.history.back();
}

</script>


</body>
</html>