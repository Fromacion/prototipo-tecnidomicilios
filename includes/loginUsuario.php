<?php
session_start();
include("conex.php");

if(isset($_POST['email']) && isset($_POST['password'])){
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $usuario = validate($_POST['email']);
    $pass = validate($_POST['password']);

    /*  empty nos valida si los campos estan vacios */
    if(empty($usuario)){
        header("location: index.php?error=El ususario es requerido");
        exit();
    }elseif(empty($pass)){
        header("location: index.php?error=La contraseña es requerida");
        exit();
    }else{
        

        /* md5 lo que nos permite es encriptar la contraseña del usuario */
        $pass = md5($pass);

        $sql = "SELECT * FROM clientes WHERE email = '$usuario' AND contrasenia = '$pass'";
        $result = mysqli_query($conex, $sql);

        if(mysqi_num_rows($result) === 1){
            $row = mysqli_fetch_assoc($result);
            if ($row['email'] === $usuario && $row['contrasenia'] === $pass){
                $_SESSION['email'] = $row['email'];
                $_SESSION['nombre'] = $row['nombre'];
                $_SESSION['id'] = $row['id'];

                header("location: index.php");
                exit();
            }else{
                header("location: index.php?error = El usuario o la contraseña son incorectas");
                exit();
            }
        }else{
            header("location: index.php?error = El usuario o la contraseña son incorectas");
            exit();
        }
    }

}else{
    header("location: index.php");
    exit();
}

?>