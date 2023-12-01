

// Para capturar los datos del comentario dejado por el usuario podemos usar cualquiera de las dos formas
// Teniendo en cuenta que para la segunda opcion en el "button" del html tendemos que agregar la funcion de la siguiente forma "onclick"nombre de la funcion()"

// Opcion 1

/* function capComentario(){
    const boton = document.getElementById("botonDato")


    boton.addEventListener("click", function(){

    let nombreUsuario = document.getElementById("nombreUs").value;
    let correoUsiario = document.getElementById("correoUs").value;
    let telefonoUsiario = document.getElementById("telUs").value;
    let comentarioUsiario = document.getElementById("text-a").value;

        console.log(`${nombreUsuario} Tu comentario ha sido ENVIADO!`)
    })
  
}

capComentario("botonDato") */

// Opcion 2
function capComentario(){
    let nombreUsuario = document.getElementById("nombreUs").value;
    let correoUsiario = document.getElementById("correoUs").value;
    let telefonoUsiario = document.getElementById("telUs").value;
    let comentarioUsiario = document.getElementById("text-a").value;

    if (nombreUsuario  == "") {
        alert("Ingresa tu nombre")
        document.getElementById("nombreUs").focus();
    }
    else if(correoUsiario == "") {
        alert("Ingresa tu correo")
        document.getElementById("correoUs").focus();
    }
    else if(telefonoUsiario == "") {
        alert("Ingresa tu Telefono")
        document.getElementById("telUs").focus();
    }
    else if(comentarioUsiario == "") {
        alert("Ingresa tu comentario")
        document.getElementById("text-a").focus();
    }else{
        document.getElementById("nombreUs").value = ""; //borra la informacion anterior con el fin de limpiar los campos
        document.getElementById("correoUs").value = ""; //borra la informacion anterior con el fin de limpiar los campos
        document.getElementById("telUs").value = ""; //borra la informacion anterior con el fin de limpiar los campos
        document.getElementById("text-a").value = ""; //borra la informacion anterior con el fin de limpiar los campos
        document.getElementById("nombreUs").focus(); // luego de limpiar los campos el cursor se enfoca en el primer campo
    }

    
    console.log(`Nombre: ${nombreUsuario}`);
    console.log(`Correo: ${correoUsiario}`);
    console.log(`Telefono: ${telefonoUsiario}`);
    console.log(`Comentario: ${comentarioUsiario}`);
    alert(`${nombreUsuario} Tu comentario ha sido ENVIADO!`);
}


// inicio de sesion

// Opcion 1
function login(){
    const botonLogin = document.getElementById("btnLogin");

    botonLogin.addEventListener("click", function(){
        let usuario = document.getElementById("usuario").value;
        let password = document.getElementById("password").value;

        if (usuario == ""){
            alert("Correo electronico, Usuario o telefono es ¡Nesesario!");
            document.getElementById("usuario").focus();
        }else if(password == ""){
            alert("Contraseña es ¡Nesesaria!");
            document.getElementById("password").focus();
        }else{
            document.getElementById("usuario").value = "";
            document.getElementById("password").value = "";
            document.getElementById("usuario").focus();
        }

        console.log(usuario);
        console.log(password);
    })
}
 login("btnLogin")


 //Opcion 2

 /* function login() {
    let usuario = document.getElementById("usuario").value;
    let password = document.getElementById("password").value;

    console.log(usuario)
    console.log(password)

 } */



 // solicitar servicios


 function solicitudServi() {

    const btnServicio = document.getElementById("btnMantenimientos")

    btnServicio.addEventListener("click", function(){
        href = "solicitar_servicios.html"
    })
    
 }

 solicitudServi(btnMantenimientos)



 // Registro de usuario

 function registroUsuario() {
    let id_usuario = document.getElementById("id-cliente").value;
    let nombre_usu = document.getElementById("nombre").value;
    let apellido_usu = document.getElementById("apellido").value;
    let Contraseña_usu = document.getElementById("password").value;
    let conf_contraseña = document.getElementById("validar-password").value;
    let direccion_usu = document.getElementById("direccion").value;
    let telefono_usu = document.getElementById("telefono").value;
    let correo_usu = document.getElementById("correoUs").value;

    if (nombre_usu == "") {
        alert("Nombre es necesario!")
        document.getElementById("nombre").focus();

    }else if (apellido_usu == "") {
        alert("Apellido es necesario!")
        document.getElementById("apellido").focus();

    }if (id_usuario == "") {
        alert("Cedula es necesaria!")
        document.getElementById("id-cliente").focus();

    }else if (Contraseña_usu && conf_contraseña == ""){
        alert("Contraseña es necesaria!")
        document.getElementById("password").focus();
        document.getElementById("validar-password").focus();
        
    }else if (Contraseña_usu != conf_contraseña){
        alert("Las contraseñas no coninsiden")
        document.getElementById("validar-password");

    }else if (direccion_usu == "") {
        alert("Direccion es necesaria!")
        document.getElementById("direccion");

    }else if(telefono_usu == "") {
        alert("Telefono/Celular es necesaria!")
        document.getElementById("telefono");

    }else if(correo_usu == "") {
        alert("Correo es necesario!")
        document.getElementById("correoUs");

    }else {
        
        document.getElementById("nombre").value = "";
        document.getElementById("apellido").value = "";
        document.getElementById("id-cliente").value = "";
        document.getElementById("password").value = "";
        document.getElementById("validar-password").value = "";
        document.getElementById("direccion").value = "";
        document.getElementById("telefono").value = "";
        document.getElementById("correoUs").value = "";
        document.getElementById("nombre").focus();
        
    }

    alert(`${nombre_usu} Tu registro ha sido EXITOSO!`);
}