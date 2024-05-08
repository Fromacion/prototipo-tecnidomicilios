<?php

// Cometarios de funcionalidad en Registro.php
include("conex.php");



if(isset($_POST["comentar"])){
    if (strlen($_POST["nombreUs"]) >= 1 && strlen($_POST["correoUs"]) >= 1 && strlen($_POST["telUs"]) >= 1 && strlen($_POST["textCometario"]) >= 1 ){
        $nombre = trim($_POST["nombreUs"]);
        $email = trim($_POST["correoUs"]);
        $telefono = trim($_POST["telUs"]);
        $comentario = trim($_POST["textCometario"]);
        $fecha_comentario = date("Y-m-d H:i:s");
        
        $instruccion_sql = "INSERT INTO contacto(nombre, email, telefono, comentario, fecha_comentario) VALUES ('$nombre','$email','$telefono','$comentario','$fecha_comentario')";
        $resultado = mysqli_query($conex, $instruccion_sql);
        if ($resultado){
            echo '<script> alert("¡Tu comentario se ha guardado!")</script>';
        }
        
    }else {
        echo '<script>alert("Por favor complete todos los campos!");</script>';
    }
}


?>