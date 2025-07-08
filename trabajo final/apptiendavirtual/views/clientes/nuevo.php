<div class="container-fluid text-center" style="background-color: #ffffff; padding-top: 20px; padding-bottom: 20px;">
    <div class="container my-5" style="background-color: #ffffff; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
        <h2 style="color: #d32f2f;">Nuevo Cliente</h2>
        <form method="POST" action="TiendaControl.php?opcion=cliente-nuevo-procesar">

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label" style="color: #d32f2f;">USUARIO</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="usuario" required>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label" style="color: #d32f2f;">NOMBRE</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="nombre" required>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label" style="color: #d32f2f;">APELLIDO</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="apellido" required>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label" style="color: #d32f2f;">CONTRASEÑA</label>
                <div class="col-sm-6">
                    <input type="password" class="form-control" name="contraseña" required>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label" style="color: #d32f2f;">PREGUNTA</label>
                <div class="col-sm-6">
                    <select class="form-control" name="pregunta" required>
                        <option value="...">...</option>
                        <option value="Deporte Favorito">Deporte Favorito</option>
                        <option value="Comida Favorita">Comida Favorita</option>
                        <option value="Pelicula Favorita">Pelicula Favorita</option>
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label" style="color: #d32f2f;">RESPUESTA</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="respuesta" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit" class="btn btn-primary" style="background-color: #d32f2f; border-color: #d32f2f;">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
