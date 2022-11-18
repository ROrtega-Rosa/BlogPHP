<?php session_start();
require "../BlogPHP/admin/config.php";
require "../BlogPHP/functions.php";

if(isset($_POST["enviar"])){

$usuario=limpiarDatos($_POST["usuario"]);
$pass= limpiarDatos($_POST["contrasenia"]);

if($usuario==$blog_admin['usuario']&& $pass==$blog_admin['password']){

    $_SESSION['admin']=$blog_admin['usuario'];

    header('Location:'. RUTA. '/admin');


}




}


require "../BlogPHP/view/login.view.php";


?>