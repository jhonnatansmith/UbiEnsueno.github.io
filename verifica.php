<?php
include('./class/class_log.php');
//Creamos el objeto de la clase login
$log=new Login();
$user=$_REQUEST['user'];
$pass=$_REQUEST['passw'];
$log->validar($user,$pass);
?>