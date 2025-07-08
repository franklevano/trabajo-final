<div class="container my-5" style="background-color: #ffffff; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
    <h2 style="color: #d32f2f;">Editar usuario</h2>
    <form method="POST" action="TiendaControl.php?opcion=categoria-editar-procesar">

        <input type="hidden" name="idCat" value="<?php echo isset($idCategoria) ? $idCategoria : ''; ?>">

        <div class="row mb-3">
            <label class="col-sm-3 col-form-label" style="color: #d32f2f;">CATEGORÍA</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="categoria" value="<?php echo isset($categoria) ? $categoria : ''; ?>" required>
            </div>
        </div>

        <div class="row mb-3">
            <div class="offset-sm-3 col-sm-3 d-grid">
                <button type="submit" class="btn btn-primary" style="background-color: #d32f2f; border-color: #d32f2f;">Guardar</button>
            </div>
        </div>
    </form>
</div>
