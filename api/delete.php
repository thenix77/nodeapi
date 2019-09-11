<?php

include '../Modelo/class.api.links.php';

$id = isset($_POST['id']) ? $_POST['id'] : '';

$link = new Consultas();
$link->delete($id);

echo $id;
?>