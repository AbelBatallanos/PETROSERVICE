document.addEventListener('DOMContentLoaded', function() {
    const tabs = document.querySelectorAll('.tab-btn');

    tabs.forEach(tab => {
        tab.addEventListener('click', function(event) {
            event.preventDefault(); // Evita la recarga de la página
            // console.log(event.target.href);
            window.href = event.target.href;
            // Remueve la clase "active" de todos los botones
            tabs.forEach(t => t.classList.remove('active'));

            // Agrega la clase "active" al botón clickeado
            this.classList.add('active');
        });
    })
});