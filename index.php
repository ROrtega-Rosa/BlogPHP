<?php
require "../BlogPHP/admin/config.php";
require "../BlogPHP/functions.php";
$conexion=conexion($bd_config);
if(!$conexion){

    header("Location:error.php");
}

$posts=obtener_post($blog_config['post_por_pagina'],$conexion);

if(!$posts){

    header("Location:error.php");
}


require "../BlogPHP/view/index.view.php";

?>