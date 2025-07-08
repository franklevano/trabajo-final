<div class="container my-5">
    <h2 style="color: #D50000;">Editar Compra</h2>
    <form method="POST" action="TiendaControl.php?opcion=compra-editar-procesar">
        <input type="hidden" name="idCom" value="<?php echo isset($idCompra) ? $idCompra : ''; ?>">
        
        <div class="row mb-3">
            <label class="col-sm-3 col-form-label" style="color: #D50000;">Cliente</label>
            <div class="col-sm-6">
                <select class="form-control" name="cliente" required>
                    <option value="..." style="color: #D50000;">...</option>
                    <?php if (!empty($resultClientes)) { ?>
                        <?php foreach ($resultClientes as $key => $value) { ?>
                            <option value="<?php echo $value['nombre']; ?>" <?php echo ($cliente == $value['nombre']) ? 'selected' : ''; ?> style="color: #D50000;">
                                <?php echo $value['nombre']; ?>
                            </option>
                        <?php } ?>
                    <?php } ?>
                </select>
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-3 col-form-label" style="color: #D50000;">Empleado</label>
            <div class="col-sm-6">
                <select class="form-control" name="empleado" required>
                    <option value="..." style="color: #D50000;">...</option>
                    <?php if (!empty($resultEmpleados)) { ?>
                        <?php foreach ($resultEmpleados as $key => $value) { ?>
                            <option value="<?php echo $value['usuario']; ?>" <?php echo ($empleado == $value['usuario']) ? 'selected' : ''; ?> style="color: #D50000;">
                                <?php echo $value['usuario']; ?>
                            </option>
                        <?php } ?>
                    <?php } ?>
                </select>
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-3 col-form-label" style="color: #D50000;">Producto</label>
            <div class="col-sm-6">
                <select class="form-control" name="producto" required>
                    <option value="..." style="color: #D50000;">...</option>
                    <?php if (!empty($resultProductos)) { ?>
                        <?php foreach ($resultProductos as $key => $value) { ?>
                            <option value="<?php echo $value['nombre']; ?>" <?php echo ($producto == $value['nombre']) ? 'selected' : ''; ?> style="color: #D50000;">
                                <?php echo $value['nombre']; ?>
                            </option>
                        <?php } ?>
                    <?php } ?>
                </select>
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-3 col-form-label" style="color: #D50000;">Cantidad</label>
            <div class="col-sm-6">
                <input type="number" class="form-control" name="cantidad" value="<?php echo isset($cantidad) ? $cantidad : ''; ?>" required>
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-3 col-form-label" style="color: #D50000;">Distribuidor</label>
            <div class="col-sm-6">
                <select class="form-control" name="distribuidor" required>
                    <option value="..." style="color: #D50000;">...</option>
                    <?php if (!empty($resultDistribuidores)) { ?>
                        <?php foreach ($resultDistribuidores as $key => $value) { ?>
                            <option value="<?php echo $value['distribuidor']; ?>" <?php echo ($distribuidor == $value['distribuidor']) ? 'selected' : ''; ?> style="color: #D50000;">
                                <?php echo $value['distribuidor']; ?>
                            </option>
                        <?php } ?>
                    <?php } ?>
                </select>
            </div>
        </div>


        <div class="row mb-3">
            <div class="offset-sm-3 col-sm-3 d-grid">
                <button type="submit" class="btn btn-primary" style="background-color: #D50000; border-color: #D50000;">Guardar</button>
            </div>
        </div>
    </form>
</div>
