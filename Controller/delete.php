<?php

include '../Modelo/class.links.php';

$data['id'] = isset($_POST['id']) ? $_POST['id'] : '';

$cn = new Consultas();
$cn->delete($data['id']);

header('location:../View/links/index.php');

?>