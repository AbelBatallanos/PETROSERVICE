document.addEventListener('DOMContentLoaded', function() {
    // Por defecto, mostrar el primer panel
    document.getElementById('panel-tecnico-pendientes').style.display = 'block';
    document.getElementById('panel-tecnico-progreso').style.display = 'none';
    document.getElementById('panel-empleado').style.display = 'none';
    
    
    document.getElementById('panel-tecnico-pendientes').style.display = 'none';
    document.getElementById('panel-tecnico-progreso').style.display = 'block';
    document.getElementById('panel-empleado').style.display = 'none';

    const tabs = document.querySelectorAll(".tab");

    tabs.forEach(tab => {
        tab.addEventListener("click", function (event) {
            // Elimina la clase "active" de todas las pestañas
            tabs.forEach(t => t.classList.remove("active"));

            // Agrega la clase "active" a la pestaña seleccionada
            this.classList.add("active");
        });
    });

    // Mobile menu toggle
document.querySelector('.mobile-menu-toggle').addEventListener('click', function() {
    document.querySelector('.main-nav').classList.toggle('show');
});

// User dropdown menu
document.querySelector('.user-avatar').addEventListener('click', function() {
    document.querySelector('.dropdown-menu').classList.toggle('show');
});

// Close dropdown when clicking outside
window.addEventListener('click', function(e) {
    if (!e.target.matches('.user-avatar') && !e.target.matches('.user-avatar *')) {
        const dropdown = document.querySelector('.dropdown-menu');
        if (dropdown.classList.contains('show')) {
            dropdown.classList.remove('show');
        }
    }
});

// File upload preview
document.getElementById('adjuntos').addEventListener('change', function() {
    const fileList = document.getElementById('file-list');
    const noFiles = document.querySelector('.no-files');
    
    if (this.files.length > 0) {
        noFiles.style.display = 'none';
        fileList.innerHTML = '';
        
        for (let i = 0; i < this.files.length; i++) {
            const file = this.files[i];
            const fileItem = document.createElement('div');
            fileItem.className = 'file-item';
            
            const fileIcon = document.createElement('i');
            if (file.type.startsWith('image/')) {
                fileIcon.className = 'fas fa-file-image';
            } else if (file.type === 'application/pdf') {
                fileIcon.className = 'fas fa-file-pdf';
            } else {
                fileIcon.className = 'fas fa-file';
            }
            
            const fileName = document.createElement('span');
            fileName.textContent = file.name;
            
            const fileSize = document.createElement('span');
            fileSize.className = 'file-size';
            fileSize.textContent = formatFileSize(file.size);
            
            const removeBtn = document.createElement('button');
            removeBtn.type = 'button';
            removeBtn.className = 'remove-file';
            removeBtn.innerHTML = '<i class="fas fa-times"></i>';
            removeBtn.onclick = function() {
                fileItem.remove();
                if (fileList.children.length === 0) {
                    noFiles.style.display = 'block';
                }
            };
            
            fileItem.appendChild(fileIcon);
            fileItem.appendChild(fileName);
            fileItem.appendChild(fileSize);
            fileItem.appendChild(removeBtn);
            fileList.appendChild(fileItem);
        }
    } else {
        noFiles.style.display = 'block';
        fileList.innerHTML = '';
    }
});

// Format file size
function formatFileSize(bytes) {
    if (bytes < 1024) return bytes + ' B';
    else if (bytes < 1048576) return (bytes / 1024).toFixed(1) + ' KB';
    else return (bytes / 1048576).toFixed(1) + ' MB';
}

});



