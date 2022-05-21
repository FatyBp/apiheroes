<?php
    // $info = $_POST['informacion'];
    // echo strtoupper($info);
    include "./conexion.php";
    $c=new Conexion();
    $conexion=$c->conectar();
    $datos = explode("||", $_POST['heroes']);
    $acomulador = 0;
    $respuesta = 0;
    array_pop($datos);
    for($i=0; $i < count($datos); $i++){
        $heroe = explode(",", $datos[$i]);
        $nombre = $heroe[0];
        addslashes($slug = $heroe[1]);
        $imagen = $heroe[2];
        $query = "INSERT INTO informacion(nombre_heroe,slug,imagen) VALUE ('$nombre','$slug','$imagen')";
        
        $resultado = mysqli_query($conexion,$query);
        $acomulador += $resultado;
    }
    if($acomulador > 0){
        $respuesta = 1;
    }
    echo $respuesta;
?>