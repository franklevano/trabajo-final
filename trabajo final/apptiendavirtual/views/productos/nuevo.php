<div class="container-fluid text-center" style="background-color: #ffffff; padding-top: 20px; padding-bottom: 20px;">
    <div class="container my-5" style="background-color: #ffffff; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
        <h2 style="color: #d32f2f;">Nuevo Producto</h2>
        <form method="POST" action="TiendaControl.php?opcion=producto-nuevo-procesar">

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label" style="color: #d32f2f;">Codigo</label>
                <div class="col-sm-6">
                    <input type="number" class="form-control" name="codigo" required>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label" style="color: #d32f2f;">Nombre</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="nombre" required>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label" style="color: #d32f2f;">Descripción</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="descripcion" required>
                </div>
            </div>
            
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label" style="color: #d32f2f;">Proveedor</label>
                <div class="col-sm-6">
                    <select class="form-control" name="proveedor" required>
                        <option value="...">...</option>
                        <?php if(!empty($resultProveedores)) { ?>
                           <?php foreach ($resultProveedores as $key => $value){ ?>
                                <option value="<?php echo $value['proveedor']; ?>"><?php echo $value['proveedor']; ?></option>
                        <?php   }     ?>
                     <?php   } ?>
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label" style="color: #d32f2f;">Categoría</label>
                <div class="col-sm-6">
                    <select class="form-control" name="categoria" required>
                        <option value="...">...</option>
                        <?php if(!empty($resultCategorias)) { ?>
                           <?php foreach ($resultCategorias as $key => $value){ ?>
                                <option value="<?php echo $value['categorias']; ?>"><?php echo $value['categorias']; ?></option>
                        <?php   }     ?>
                     <?php   } ?>
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label" style="color: #d32f2f;">Estado</label>
                <div class="col-sm-6">
                    <select class="form-control" id="estado" name="estado" required>
                        <option value="...">...</option>
                        <option value="DISPONIBLE">DISPONIBLE</option>
                        <option value="NO DISPONIBLE">NO DISPONIBLE</option>
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label" style="color: #d32f2f;">Stock</label>
                <div class="col-sm-6">
                    <input type="number" class="form-control" name="stock" required>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label" style="color: #d32f2f;">Precio</label>
                <div class="col-sm-6">
                    <input type="number" class="form-control" name="precio" required>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label" style="color: #d32f2f;">Imagen</label>
                <div class="col-sm-6">
                    <input type="text" id="imagen" class="form-control" name="imagen" required>
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
