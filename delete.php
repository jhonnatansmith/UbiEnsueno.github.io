<?php
session_start();
include('./class/class.php');
//Creamos el objeto de la clase usuarios

$usu=new usuarios();
$user=$_SESSION['usuario'];
$usu->deleteuser($user);
?>