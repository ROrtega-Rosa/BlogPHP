<?php

require "../BlogPHP/admin/config.php";
require "../BlogPHP/functions.php";
$conexion=conexion($bd_config);
if(!$conexion){

    header("Location:error.php");
}
if(isset($_GET["enviar"])){
if( !empty($_GET['busqueda'])){

    $busqueda=limpiarDatos($_GET['busqueda']);
    $statement=$conexion->prepare(

        'SELECT * FROM articulo WHERE titulo LIKE :busqueda or texto LIKE :busqueda'
    );
    
    $statement->execute(array(':busqueda'=>"%$busqueda%"));
    $resultados=$statement->fetchAll();

    if(empty($resultados)){

       $titulo= 'No se encontraron articulos con el resultado '.$busqueda;
    }else{
        $titulo='Resultado de la búsqueda: '.$busqueda;
    }
}else{


    header("Location: ". RUTA ."index.php");
}
}
require "view/buscar.view.php";

?>