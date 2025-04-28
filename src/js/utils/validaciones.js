
export function formRegistro(){
    let mensaje ="";

    const selectElement = document.querySelector("select[data-dpto='departamento']");
    const valorSeleccionado = selectElement.value;
    mensaje =validarDatosRegister(valorSeleccionado);

    if(mensaje) return console.log(generarMensaje(mensaje));
    
    const datos = {
        nombre: document.querySelector("input[data-tipo='nombre']").value,
        apellidos: document.querySelector("input[data-tipo='apellidos']").value,
        correo: document.querySelector("input[data-tipo='correo']").value,
        password: document.querySelector("input[data-tipo='contraseña']").value,
        departamento: selectElement.value
    };
 
    return datos;
}

function validarDatosRegister(dato){
    if(!dato.trim()){
        return "Debes rellar todos los campos requeridos";
    }
}

function generarMensaje(m){
    let parrafo=document.createElement("P");
    parrafo.style = "";
    parrafo.innerHTML = m;

    return parrafo;
}

function contraseñaIdentica(passw, passw_r){
    if(!(passw === passw_r)){
        return "¡No Coinciden!";
    }
}
