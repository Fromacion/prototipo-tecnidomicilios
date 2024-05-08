<?php
/* ob_start(); // activa el buffer de salida PHP para almacenar y procesar datos antes de enviarlos al cliente.*/

// Estamos llamando el archivo con los datos de conexion a la Base de Datos
include("conex.php");


//Insertamos datos de registro al mysql xampp, indicamos nombre de la tabla a la que se le van a hacer la incercion de la informacion
/* isset verifica si una variable está definida y no es null para evitar errores. */
if (isset($_POST["resgistrarme"])){

    // strlen devuelve la longitud del string, útil para validar la entrada de datos. osea borra los espacion innecesarios
    // tambien estamos validando que cada uno de los campos no esta en blanco o el operador de comparacion >=    
    if (strlen($_POST["id_cliente"]) >= 1 && strlen($_POST["nombre"]) >= 1 && strlen($_POST["telefono"]) >= 1 && strlen($_POST["direccion"]) >= 1 && strlen($_POST["correoUs"]) >= 1 && strlen($_POST["password"]) >= 1 && strlen($_POST["apellido"]) >= 1) {

        //creamos las variables de los campos name="" que usaremos del formulario de registro que esta en el archivo "registro_usu.php"
        $nombre = trim($_POST["nombre"]);
        $apellido = trim($_POST["apellido"]);
        $id_cliente = trim($_POST["id_cliente"]);
        $password = trim($_POST["password"]);
        $direccion = trim($_POST["direccion"]);
        $telefono = trim($_POST["telefono"]);
        $email = trim($_POST["correoUs"]);
        $fecha_registro = date("Y-m-d H:i:s");
        // Creamos la instruccion sql para incluir los datos en la base de datos esto lo hacemos dede phpMyAdmin

        $password = md5($password);
        $instruccion_sql = "INSERT INTO clientes(id_cliente, nombre, telefono, direccion, email, contrasenia, fecha_registro, apellido) 
                            VALUES ('$id_cliente','$nombre','$telefono','$direccion','$email','$password','$fecha_registro','$apellido')";
        // Esta variable la cremos con el fin de saber el resultado de la inclucion de datos.
        $resultado = mysqli_query($conex, $instruccion_sql);
        if ($resultado){
            echo '<script>alert("Te has registrado correctamente!");</script>'; 
        }
        else{
            $error = mysqli_error($conex);
            
            if(strpos($error, 'Duplicate entry') !== false) {
                echo '<script>alert("Ya existe un usuario registrado con el mismo ID, por favor intente con otro.");</script>';
            }else {
                echo '<script>alert("Ups, ha ocurrido un error!");</script>';    
            }
        }
    }
    else {
        echo '<script>alert("Por favor complete todos los campos!");</script>';
    }
}
/* ob_flush() //envía el contenido almacenado en el buffer de salida PHP al cliente. */
//127.0.0.1 servidor
?>