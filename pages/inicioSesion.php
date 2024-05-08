<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tecnidomicilios S.A.S.</title>
    <link rel="shortcut icon" href="../img/icono.jpg" type="image/x-icon" />
    <link rel="stylesheet" href="../css/Estilo_inicioSesion.css" />
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
        <a href="../index.php">Inicio</a>
        <a href="../index.php">Contacto</a>
        <a href="registro_usu.php">Registrarme</a>
      </nav>
      
    </header>

    <main>
      <section class="login"  >
        <div class="cont-formulario">                
            <form class="formulario" method="POST">
                <h1>Iniciar sesion.</h1>
                <hr>
                <?php
                    if(isset($_GET['error'])){
                    ?>
                    <p class="error" >
                        <?php
                        echo $_GET['error']
                        ?>
                    </p>
                <?php
                    }
                ?>

                <hr>              
                <div class="username">
                  <img class="icono-usuario" src="../img/iconos/icLoginGreen.png" alt="">
                  <input id="usuario" name="email" class="dato" type="email" placeholder="Correo electronico, Usuario o telefono "><br>
              </div>
              <div class="password">
                <img class="icono-password" src="../img/iconos/passwordGreen.png" alt="">
                <input id="password" name="password" class="dato" type="password" placeholder="Contraseña"><br>
                
              </div>
              <div class="links">
                <a href="#">¿Olvidaste tu Contraseña?</a><br>
                <input id="btnLogin" name="login" class="btn-dato" type="submit">
                <!-- <button id="btnLogin" type="button" class="btn-dato">Iniciar sesion</button> -->
              </div>
            </form>
            <div class="img-contac">
                <img  src="../img/fontanero-señalando-lateral.png" alt="fontanero contactanos reparaciones deja tu mensaje">
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
    <script src="../js/index.js"></script>
  </body>
</html>