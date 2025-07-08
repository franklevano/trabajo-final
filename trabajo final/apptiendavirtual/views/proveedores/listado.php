<div class="container-fluid text-center">    
    <div class="row content">
        
        <!-- Columna Izquierda -->
        <div class="col-sm-2 sidenav">
            <p><a href="TiendaControl.php?opcion=proveedor-nuevo">Nuevo Proveedor</a></p>
        </div>
        
        <!-- Columna Centro -->
        <div class="col-sm-8 text-left"> 
            <h1>LISTADO DE PROVEEDORES</h1>
            <h2>
                <span style="color:red">
                    <?php 
                    if(!empty($_GET['msg'])) { 
                        echo $_GET['msg']; 
                    } 
                    ?>
                </span>
            </h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>PROVEEDOR</th>
                        <th>NOMBRE</th>
                        <th>DIRECCION</th>
                        <th>CIUDAD</th>
                        <th>CODIGO POSTAL</th>
                        <th>CELULAR</th>
                        <th>OPCIONES</th>
                    </tr>
                </thead>
                <?php if(!empty($resultProveedores)) { ?>
                    <?php foreach ($resultProveedores as $key => $value) { ?>
                        <tr>
                            <td><?php echo $value['id'] ?></td>
                            <td><?php echo $value['proveedor'] ?></td>
                            <td><?php echo $value['nombre'] ?></td>
                            <td><?php echo $value['direccion'] ?></td>
                            <td><?php echo $value['ciudad'] ?></td>
                            <td><?php echo $value['codigopostal'] ?></td>
                            <td><?php echo $value['celular'] ?></td>
                            <td>
                                <a href="TiendaControl.php?opcion=proveedor-editar&idProv=<?php echo $value['id'] ?>">Editar</a> - 
                                <a href="TiendaControl.php?opcion=proveedor-eliminar&idProv=<?php echo $value['id'] ?>">Eliminar</a>
                            </td>
                        </tr>
                    <?php } ?>
                <?php } ?>
            </table>
        </div>
        
        <!-- Columna Derecha (Promociones) -->
        <div class="col-sm-2 sidenav">
            <div class="well text-center">
                <img src="https://0901.static.prezi.com/preview/v2/v527xfmoq6m6pgctfk3r6biz7d6jc3sachvcdoaizecfr3dnitcq_3_0.png" alt="Producto 1" class="img-responsive">
            </div>
            <div class="well text-center">
                <img src="https://i.pinimg.com/736x/da/20/75/da2075601a03cf082b1e5025d41c23dc.jpg" alt="Producto 2" class="img-responsive">
                
            </div>
        </div>
        
    </div>
</div>
