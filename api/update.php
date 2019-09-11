<?php

include '../Modelo/class.api.links.php';

$data['id']             = isset($_POST['id'])?              $_POST['id']            : '';
$data['title']          = isset($_POST['title']) ?          $_POST['title']         : '';
$data['url']            = isset($_POST['url']) ?            $_POST['url']           : '';
$data['description']    = isset($_POST['description']) ?    $_POST['description']   : '';

$link = new Consultas();
$link->update($data);

?>