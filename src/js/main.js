import{registrarUsuario} from "./api/auth.js";
import{formRegistro} from "./utils/validaciones.js";

document.addEventListener("DOMContentLoaded", () => {
    const ruta = window.location.pathname; // Obtiene la URL actual

    if (ruta.includes("/registrarse")) {
        console.log("Estamos en la página de registro");

        // document.querySelector(".btn-submit").addEventListener("click",  function(e){
        //     e.preventDefault();
        //     let datos = formRegistro();
        //     if (!datos || Object.keys(datos).length === 0) {
        //         console.log("Error: Datos vacíos o inválidos.");
        //         return; 
        //     }
        //     console.log(datos);
        //     try {
        //         const resultado = registrarUsuario(datos);
        //         console.log(JSON.parse(resultado) + " DE LA API AJAX");

        //     } catch (error) {
        //         console.error("Error en la petición:", error);
        //     }
        // })
        // Aquí ejecutar lógica específica para registro
    } else if (ruta.includes("/inicio")) {
        console.log("Estamos en la página de inicio de sesión");
        // Aquí lógica diferente
    }
});


