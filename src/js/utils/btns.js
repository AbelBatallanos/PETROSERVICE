document.addEventListener("DOMContentLoaded", ()=>{
    Btn_register();
})


function Btn_register(){
    console.log("HOLA BB ESTOY DEVUELTA");

    document.getElementById("btnRegistrar").addEventListener("click", function() {
        window.location.href = "/registrarse";
    });

}
