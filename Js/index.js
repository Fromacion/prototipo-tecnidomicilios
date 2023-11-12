

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