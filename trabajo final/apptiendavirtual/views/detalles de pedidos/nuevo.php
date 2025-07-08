<div class="container-fluid text-center" style="background-color: #ffffff; padding-top: 20px; padding-bottom: 20px;">
    <div class="container my-5" style="background-color: #ffffff; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
        <h2 style="color: #d32f2f;">Nueva Compra</h2>
        <form method="POST" action="TiendaControl.php?opcion=compra-nuevo-procesar">

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label" style="color: #d32f2f;">Cliente</label>
                <div class="col-sm-6">
                    <select class="form-control" name="cliente" required>
                        <option value="...">...</option>
                        <?php if(!empty($resultClientes)) { ?>
                            <?php foreach ($resultClientes as $key => $value){ ?>
                                <option value="<?php echo $value['nombre']; ?>"><?php echo $value['nombre']; ?></option>
                            <?php } ?>
                        <?php } ?>
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label" style="color: #d32f2f;">Empleado</label>
                <div class="col-sm-6">
                    <select class="form-control" name="empleado" required>
                        <option value="...">...</option>
                        <?php if(!empty($resultEmpleados)) { ?>
                            <?php foreach ($resultEmpleados as $key => $value){ ?>
                                <option value="<?php echo $value['usuario']; ?>"><?php echo $value['usuario']; ?></option>
                            <?php } ?>
                        <?php } ?>
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label" style="color: #d32f2f;">Producto</label>
                <div class="col-sm-6">
                    <select class="form-control" name="producto" required>
                        <option value="...">...</option>
                        <?php if(!empty($resultProductos)) { ?>
                            <?php foreach ($resultProductos as $key => $value){ ?>
                                <option value="<?php echo $value['nombre']; ?>"><?php echo $value['nombre']; ?></option>
                            <?php } ?>
                        <?php } ?>
                    </select>
                </div>
            </div>
            
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label" style="color: #d32f2f;">Cantidad</label>
                <div class="col-sm-6">
                    <input type="number" class="form-control" name="cantidad" required>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label" style="color: #d32f2f;">Distribuidor</label>
                <div class="col-sm-6">
                    <select class="form-control" name="distribuidor" required>
                        <option value="...">...</option>
                        <?php if(!empty($resultDistribuidores)) { ?>
                            <?php foreach ($resultDistribuidores as $key => $value){ ?>
                                <option value="<?php echo $value['distribuidor']; ?>"><?php echo $value['distribuidor']; ?></option>
                            <?php } ?>
                        <?php } ?>
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit" class="btn btn-primary" style="background-color: #d32f2f; border-color: #d32f2f;">Submit</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a class="btn btn-primary" href="index.php" role="button" style="background-color: #d32f2f; border-color: #d32f2f;">Cancel</a>
                </div>
            </div>

        </form>
    </div>
</div>
