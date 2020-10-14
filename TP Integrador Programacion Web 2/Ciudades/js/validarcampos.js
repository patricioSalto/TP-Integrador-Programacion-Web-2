
function validarRegistro() {
    var nombre,apellido,usuario,contrasenia;
    
    nombre = document.getElementById("nombre").value;
    apellido = document.getElementById("apellido").value;
    usuario = document.getElementById("usuario").value;
    contrasenia = document.getElementById("contrasenia").value;
    
    if(nombre === "" || apellido === "" || usuario === "" || contrasenia === ""){
        alert("Todos los campos son obligatorios");
        return false;
        
    }else if (nombre.length > 100 || apellido.length > 100){
        alert("El nombre o apellido son muy largo (100 caracteres maximo)");
        return false;
        
    }
    else if (usuario.length > 100){
        alert("El correo es muy largo");
        return false;
        
    }

    else if (contrasenia.length < 5){
        alert("La contrasseña es muy corta");
        return false;
        
    }
}

function validarLogin(){
    
    var usuario2,contrasenia2;
    
    usuario2 = document.getElementById("usuario").value;
    contrasenia2 = document.getElementById("contrasenia").value;
    expresion2 = /\w+@\w+\.+[a-z]/;
    
    if(usuario2 === "" || contrasenia2 === ""){
        alert("Por favor debe llenar los campos");
        return false;
    }

}