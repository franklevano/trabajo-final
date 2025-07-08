<div class="container my-5">
    <h2 style="color: #D50000;">Editar Distribuidor</h2>
    <form method="POST" action="TiendaControl.php?opcion=distribuidor-editar-procesar">
        <input type="hidden" name="idDis" value="<?php echo isset($idDistribuidor) ? $idDistribuidor : ''; ?>">
        <div class="row mb-3">
            <label class="col-sm-3 col-form-label" style="color: #D50000;">Distribuidor</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="distribuidor" value="<?php echo isset($distribuidor) ? $distribuidor : ''; ?>" required>
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
