
    <!-- Main Content -->
    <main>
        <div class="container">
            <div class="page-header">
                <h1>Solicitar Soporte Técnico</h1>
                <p>Complete el formulario para registrar su solicitud de soporte técnico</p>
            </div>

            <div class="support-request-card">
                <form class="support-form" method="POST" action="/formulario/solicitud">
                    <div class="form-section">
                        <h2 class="section-title">Información Personal</h2>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label for="nombre">Nombre </label>
                                <input type="text" id="nombre" name="nombre" value="" required>

                            </div>
                            
                            <div class="form-group">
                              
                            <label for="nombre">Apellidos</label>
                                <input type="text" id="nombre" name="apellidos" value="" required>

                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group"><!---Modificar S-->
                                <label for="departamento">Departamento</label>
                                <input type="text" id="departamento" name="departamento" value="" >
                            </div>
                       
                        </div>
                    </div>
                    
                    <div class="form-section">
                        <h2 class="section-title">Detalles del Problema</h2>

                        <div class="form-group">
                            <label for="asunto">Asunto</label>
                            <input type="text" id="asunto" name="asunto" placeholder="Breve descripción del problema" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="descripcion">Descripción Detallada</label>
                            <textarea id="descripcion" name="descripcion" rows="6" placeholder="Describa detalladamente el problema que está experimentando." required></textarea>
                        </div>
                        
                        <div class="form-group">
                            <label for="prioridad">Nivel de Prioridad</label>
                            <div class="select-wrapper">
                                <select id="prioridad" name="prioridad" required>
                                    <option value="" disabled selected>Seleccione el nivel de prioridad</option>
                                    <option value="baja">Baja - No afecta mi trabajo diario</option>
                                    <option value="media">Media - Dificulta algunas tareas</option>
                                    <option value="alta">Alta - Impide realizar mi trabajo correctamente</option>
                                    <option value="critica">Crítica - Sistema completamente inutilizable</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="form-actions">
                        <a href="/panel" type="button" class="btn btn-outline">Cancelar</a>
                        <button type="submit" class="btn btn-primary">Enviar Solicitud</button>
                    </div>
                </form>
            </div>
        </div>
    </main>

  

    <script src="/src/js/utils/form-solicitud.js"> 
    </script>
