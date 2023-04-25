<?php
include('./class/class.php');

//Creamos un objeto de la clase usuarios
$usu = new usuarios ();

$usu->insertuser($_REQUEST['user'],$_REQUEST['name'],$_REQUEST['tel'],$_REQUEST['em'],$_REQUEST['passw']);
?>