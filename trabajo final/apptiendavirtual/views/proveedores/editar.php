<div class="container my-5">
    <h2 style="color: #D50000;">Editar proveedor</h2>
    <form method="POST" action="TiendaControl.php?opcion=proveedor-editar-procesar">
        <input type="hidden" name="idProv" value="<?php echo isset($idProveedor) ? $idProveedor : ''; ?>">
        
        <div class="row mb-3">
            <label class="col-sm-3 col-form-label" style="color: #D50000;">Proveedor</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="proveedor" value="<?php echo isset($proveedor) ? $proveedor : ''; ?>" required>
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-3 col-form-label" style="color: #D50000;">Nombre</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="nombre" value="<?php echo isset($nombre) ? $nombre : ''; ?>" required>
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-3 col-form-label" style="color: #D50000;">Direccion</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="direccion" value="<?php echo isset($direccion) ? $direccion : ''; ?>" required>
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-3 col-form-label" style="color: #D50000;">Ciudad</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="ciudad" value="<?php echo isset($ciudad) ? $ciudad : ''; ?>" required>
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-3 col-form-label" style="color: #D50000;">Codigo Postal</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="codigopostal" value="<?php echo isset($codigopostal) ? $codigopostal : ''; ?>" required>
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-3 col-form-label" style="color: #D50000;">Celular</label>
            <div class="col-sm-6">
                <input type="number" class="form-control" name="celular" value="<?php echo isset($celular) ? $celular : ''; ?>" required>
            </div>
        </div>

        <div class="row mb-3">
            <div class="offset-sm-3 col-sm-3 d-grid">
                <button type="submit" class="btn btn-primary" style="background-color: #D50000; border-color: #D50000;">Guardar</button>
            </div>
        </div>
    </form>
</div>
