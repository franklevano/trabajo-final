<div class="container my-5">
    <h2 style="color: #D50000;">Editar usuario</h2>
    <form method="POST" action="TiendaControl.php?opcion=empleado-editar-procesar">
        <input type="hidden" name="idEmp" value="<?php echo isset($idEmpleado) ? $idEmpleado : ''; ?>">
        <div class="row mb-3">
            <label class="col-sm-3 col-form-label" style="color: #D50000;">USUARIO</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="usuarioA" value="<?php echo isset($usuarioA) ? $usuarioA : ''; ?>" required>
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-3 col-form-label" style="color: #D50000;">CONTRASEÑA</label>
            <div class="col-sm-6">
                <input type="password" class="form-control" name="contraseñaA" placeholder="Nueva contraseña" required>
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-3 col-form-label" style="color: #D50000;">DNI</label>
            <div class="col-sm-6">
                <input type="number" class="form-control" name="dni" value="<?php echo isset($dni) ? $dni : ''; ?>" required>
            </div>
        </div>

        <div class="row mb-3">
            <div class="offset-sm-3 col-sm-3 d-grid">
                <button type="submit" class="btn btn-primary" style="background-color: #D50000; border-color: #D50000;">Guardar</button>
            </div>
        </div>
    </form>
</div>
