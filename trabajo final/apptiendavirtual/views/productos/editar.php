<div class="container my-5">
    <h2 style="color: #D50000;">Editar producto</h2>
    <form method="POST" action="TiendaControl.php?opcion=producto-editar-procesar">
        <input type="hidden" name="idPro" value="<?php echo isset($idProducto) ? $idProducto : ''; ?>">
        
        <div class="row mb-3">
            <label class="col-sm-3 col-form-label" style="color: #D50000;">CODIGO</label>
            <div class="col-sm-6">
                <input type="number" class="form-control" name="codigo" value="<?php echo isset($codigo) ? $codigo : ''; ?>" required>
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-3 col-form-label" style="color: #D50000;">NOMBRE</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="nombre" value="<?php echo isset($nombre) ? $nombre : ''; ?>" required>
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-3 col-form-label" style="color: #D50000;">Descripcion</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="descripcion" value="<?php echo isset($descripcion) ? $descripcion : ''; ?>" required>
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-3 col-form-label" style="color: #D50000;">Proveedor</label>
            <div class="col-sm-6">
                <select class="form-control" name="proveedor" required>
                    <option value="...">...</option>
                    <?php if (!empty($resultProveedores)) { ?>
                        <?php foreach ($resultProveedores as $key => $value) { ?>
                            <option value="<?php echo $value['proveedor']; ?>" <?php echo ($proveedor == $value['proveedor']) ? 'selected' : ''; ?>>
                                <?php echo $value['proveedor']; ?>
                            </option>
                        <?php } ?>
                    <?php } ?>
                </select>
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-3 col-form-label" style="color: #D50000;">Categoría</label>
            <div class="col-sm-6">
                <select class="form-control" name="categoria" required>
                    <option value="...">...</option>
                    <?php if (!empty($resultCategorias)) { ?>
                        <?php foreach ($resultCategorias as $key => $value) { ?>
                            <option value="<?php echo $value['categorias']; ?>" <?php echo ($categoria == $value['categorias']) ? 'selected' : ''; ?>>
                                <?php echo $value['categorias']; ?>
                            </option>
                        <?php } ?>
                    <?php } ?>
                </select>
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-3 col-form-label" style="color: #D50000;">Estado</label>
            <div class="col-sm-6">
                <select class="form-control" name="estado" required>
                    <option value="...">...</option>
                    <option value="DISPONIBLE" <?php echo ($estado == 'DISPONIBLE') ? 'selected' : ''; ?>>DISPONIBLE</option>
                    <option value="NO DISPONIBLE" <?php echo ($estado == 'NO DISPONIBLE') ? 'selected' : ''; ?>>NO DISPONIBLE</option>
                </select>
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-3 col-form-label" style="color: #D50000;">Stock</label>
            <div class="col-sm-6">
                <input type="number" class="form-control" name="stock" value="<?php echo isset($stock) ? $stock : ''; ?>" required>
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-3 col-form-label" style="color: #D50000;">Precio</label>
            <div class="col-sm-6">
                <input type="number" class="form-control" name="precio" value="<?php echo isset($precio) ? $precio : ''; ?>" required>
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-3 col-form-label" style="color: #D50000;">Imagen</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="imagen" value="<?php echo isset($imagen) ? $imagen : ''; ?>" required>
            </div>
        </div>

        <div class="row mb-3">
            <div class="offset-sm-3 col-sm-3 d-grid">
                <button type="submit" class="btn btn-primary" style="background-color: #D50000; border-color: #D50000;">Guardar</button>
            </div>
        </div>
    </form>
</div>
