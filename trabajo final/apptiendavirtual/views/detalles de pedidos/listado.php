<div class="container-fluid text-center">    
    <div class="row content">
        
        <!-- Columna Izquierda -->
        <div class="col-sm-2 sidenav">
            <p><a href="TiendaControl.php?opcion=compra-nuevo">Nueva Compra</a></p>
        </div>
        
        <!-- Columna Centro -->
        <div class="col-sm-8 text-left"> 
            <h1>LISTADO DE DETALLES DEL PEDIDO</h1>
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
                        <th>PRODUCTO</th>
                        <th>CANTIDAD</th>
                        <th>OPCIONES</th>
                    </tr>
                </thead>
                <?php if(!empty($resultCompras)) { ?>
                    <?php foreach ($resultCompras as $key => $value) { ?>
                        <tr>
                            <td><?php echo $value['id'] ?></td>
                            <td><?php echo $value['producto'] ?></td>
                            <td><?php echo $value['cantidad'] ?></td>
                            <td><a href="TiendaControl.php?opcion=compra-editar&idCom=<?php echo $value['id'] ?>">Editar</a> - 
                                <a href="TiendaControl.php?opcion=compra-eliminar&idCom=<?php echo $value['id'] ?>">Eliminar</a></td>
                        </tr>
                    <?php } ?>
                <?php } ?>
            </table>
        </div>
        
        <!-- Columna Derecha (Promociones) -->
        <div class="col-sm-2 sidenav">
            <div class="well text-center">
                <img src="https://m.plazavea.com.pe/repositorioaps/0/0/jer/-1/images/atun%20florida.jpg" alt="Producto 1" class="img-responsive">
                <p>Promoción de fiestas patrias</p>
            </div>
            <div class="well text-center">
                <img src="https://cdn.teleticket.com.pe/especiales/diaspatrios2022/images/banner.png" alt="Producto 2" class="img-responsive">
            </div>
        </div>
        
    </div>
</div>
