<?php

// Declarar las variables en donde se guardaran los valores de la coneccion validando los datos del servidor

$servidor = "127.0.0.1";
/* $servidor = "localhost"; */
$usuario = "root";
$pass = "";
$bd = "tecnidomicilios";

//Hacemos la coneccion a la BD
$conex = mysqli_connect($servidor, $usuario, $pass, $bd);


?>