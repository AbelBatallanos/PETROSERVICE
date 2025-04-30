document.addEventListener("DOMContentLoaded", function() {
    const tabs = document.querySelectorAll(".main-nav a.tab");

    tabs.forEach(tab => {
      tab.addEventListener("click", function(e) {
        // Si se quiere prevenir la redirección mientras se hace la prueba, descomenta la siguiente línea:
        // e.preventDefault();
        
        // Elimina la clase 'active' de todas las pestañas
        tabs.forEach(t => t.classList.remove("active"));
        
        // Agrega la clase 'active' a la pestaña clickeada
        this.classList.add("active");
      });
    });
  });