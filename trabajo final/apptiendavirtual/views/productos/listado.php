<div class="container-fluid text-center">    
    <div class="row content">
        
        <!-- Columna Izquierda -->
        <div class="col-sm-2 sidenav">
            <p><a href="TiendaControl.php?opcion=producto-nuevo">Nuevo producto</a></p>
        </div>
        
        <!-- Columna Centro -->
        <div class="col-sm-8 text-left"> 
            <h1>LISTADO DE PRODUCTOS</h1>
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
                        <th>CODIGO</th>
                        <th>NOMBRE</th>
                        <th>DESCRIPCION</th>
                        <th>PROVEEDOR</th>
                        <th>CATEGORIA</th>
                        <th>ESTADO</th>
                        <th>STOCK</th>
                        <th>PRECIO</th>
                        <th>IMAGEN</th>
                        <th>OPCIONES</th>
                    </tr>
                </thead>
                <?php if(!empty($resultProductos)) { ?>
                    <?php foreach ($resultProductos as $key => $value) { ?>
                        <tr>
                            <td><?php echo $value['id'] ?></td>
                            <td><?php echo $value['codigo'] ?></td>
                            <td><?php echo $value['nombre'] ?></td>
                            <td><?php echo $value['descripcion'] ?></td>
                            <td><?php echo $value['proveedor'] ?></td>
                            <td><?php echo $value['categoria'] ?></td>
                            <td><?php echo $value['estado'] ?></td>
                            <td><?php echo $value['stock'] ?></td>
                            <td><?php echo $value['precio'] ?></td>
                            <td><img src='<?php echo $value['imagen'] ?>' alt='Imagen' width='100' height='100'></td>
                            <td>
                                <a href="TiendaControl.php?opcion=producto-editar&idPro=<?php echo $value['id'] ?>">Editar</a> - 
                                <a href="TiendaControl.php?opcion=producto-eliminar&idPro=<?php echo $value['id'] ?>">Eliminar</a>
                            </td>
                        </tr>
                    <?php } ?>
                <?php } ?>
            </table>
        </div>
        
        <!-- Columna Derecha (Promociones) -->
        <div class="col-sm-2 sidenav">
            <div class="well text-center">
                <img src="https://m.plazavea.com.pe/repositorioaps/0/0/jer/-1/images/atun%20florida.jpg" alt="Producto 1" class="img-responsive">
            </div>
            <div class="well text-center">
                <img src="https://cdn.teleticket.com.pe/especiales/diaspatrios2022/images/banner.png" alt="Producto 2" class="img-responsive">
            </div>
        </div>
        
    </div>
</div>
