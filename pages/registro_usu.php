<?php
include("../includes/Registro.php");
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tecnidomicilios S.A.S.</title>
    <link rel="shortcut icon" href="../img/icono.jpg" type="image/x-icon" />
    <link rel="stylesheet" href="../css/estilo_registro.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <header>
      <h1 class="titulo">TECNIDOMICILIOS</h1>
      <h2 class="titulo">SERVICIO TÉCNICO A DOMICILIO 100% SEGURO</h2>
      <nav>
        <a href="../index.php#inicio">Inicio</a>
        <a href="inicioSesion.php">Acceder</a>
        <!-- <a href="#registro">Registrarme</a> -->
      </nav>
      
    </header>

    <main>
      <section class="registro">
        <div class="cont-formulario-registro">                
            <form class="formulario-registro" method="post"> <!-- Es importante establecer el metodo con el que va a ahacer el envio de los datos en este caso usamos POST -->
                <h1>Registro de usuario.</h1>
                
                <form class="formulario" >
                  <p>* Campo obligatorio</p>
                  <input id="nombre" name="nombre" class="dato" type="text" placeholder="Nombre: *"><br>
                  <input id="apellido" name="apellido" class="dato" type="text" placeholder="Apellido: *"><br>
                  <input id="id-cliente" name="id_cliente" class="dato" type="number" placeholder="Cedula: *"><br>
                  <input id="password" name="password" class="dato" type="password" placeholder="Contraseña: *"><br>
                  <input id="validar-password" name="validar_password" class="dato" type="password" placeholder="Confirmar contraseña: *"><br>
                  <input id="direccion" name="direccion" class="dato" type="text" placeholder="Direccion: *"><br>
                  <input id="telefono" name="telefono" class="dato" type="number" placeholder="Telefono/Celular: *"><br>
                  <input id="correoUs" name="correoUs" class="dato" type="email" placeholder="Correo electronico"><br>

                  <!-- botos para enviar el formulario -->
                  <input id="boton-registro" class="btn-dato" name="resgistrarme"  type="submit" ><br>
                 
                  <!-- <button id="boton-registro" name="resgistrarme" type="button" class="btn-dato" onclick="registroUsuario()">Registrarme</button> -->
              </form>
            </form>
            
            <div class="img-registro">
                <img  src="../img/[removal.ai]fontanero-haciendo-corazon-sus-manos.png" alt="fontanero contactanos reparaciones deja tu mensaje">
            </div>       
        </div>
    </main>
    <footer>
      <div class="contenedor-footer">
        <p>
          <strong>Tel: </strong> 3406758 <br /><strong>Email: </strong>
          tecnidomiciliossas@gmail.com <br />
          <strong>Direccion: </strong> Cr 9 # 124-12 <br />
          <strong
            >&copy; Tecnidomicilios S.A.S Todos los derechos reservados.</strong
          >
        </p>
      </div>
    </footer>
    <script src="js/index.js"></script>
  </body>
</html>
