<div class="container my-5">
    <h2 style="color: #D50000;">Editar usuario</h2>
    <form method="POST" action="TiendaControl.php?opcion=cliente-editar-procesar">
        <input type="hidden" name="idCli" value="<?php echo isset($idCliente) ? $idCliente : ''; ?>">
        <div class="row mb-3">
            <label class="col-sm-3 col-form-label" style="color: #D50000;">USUARIO</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="usuario" value="<?php echo isset($usuario) ? $usuario : ''; ?>" required>
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-3 col-form-label" style="color: #D50000;">NOMBRE</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="nombre" value="<?php echo isset($nombre) ? $nombre : ''; ?>" required>
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-3 col-form-label" style="color: #D50000;">APELLIDO</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="apellido" value="<?php echo isset($apellido) ? $apellido : ''; ?>" required>
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-3 col-form-label" style="color: #D50000;">CONTRASEÑA</label>
            <div class="col-sm-6">
                <input type="password" class="form-control" name="contraseña" placeholder="Nueva contraseña" required>
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-3 col-form-label" style="color: #D50000;">PREGUNTA</label>
            <div class="col-sm-6">
                <select class="form-control" name="pregunta" required>
                    <option value="..." style="color: #D50000;">...</option>
                    <option value="Deporte Favorito" style="color: #D50000;" <?php echo (isset($pregunta) && $pregunta == 'Deporte Favorito') ? 'selected' : ''; ?>>Deporte Favorito</option>
                    <option value="Comida Favorita" style="color: #D50000;" <?php echo (isset($pregunta) && $pregunta == 'Comida Favorita') ? 'selected' : ''; ?>>Comida Favorita</option>
                    <option value="Pelicula Favorita" style="color: #D50000;" <?php echo (isset($pregunta) && $pregunta == 'Pelicula Favorita') ? 'selected' : ''; ?>>Pelicula Favorita</option>
                </select>
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-3 col-form-label" style="color: #D50000;">RESPUESTA</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="respuesta" value="<?php echo isset($respuesta) ? $respuesta : ''; ?>" required>
            </div>
        </div>

        <div class="row mb-3">
            <div class="offset-sm-3 col-sm-3 d-grid">
                <button type="submit" class="btn btn-primary" style="background-color: #D50000; border-color: #D50000;">Guardar</button>
            </div>
        </div>
    </form>
</div>
