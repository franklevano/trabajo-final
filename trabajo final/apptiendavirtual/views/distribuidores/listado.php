<div class="container-fluid text-center">    
    <div class="row content">
        
        <!-- Columna Izquierda -->
        <div class="col-sm-2 sidenav">
            <p><a href="TiendaControl.php?opcion=distribuidor-nuevo">Nuevo distribuidor</a></p>
        </div>
        
        <!-- Columna Centro -->
        <div class="col-sm-8 text-left"> 
            <h1>LISTADO DE DISTRIBUIDORES</h1>
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
                        <th>DISTRIBUIDOR</th>
                        <th>CELULAR</th>
                        <th>OPCIONES</th>
                    </tr>
                </thead>
                <?php if(!empty($resultDistribuidores)) { ?>
                    <?php foreach ($resultDistribuidores as $key => $value) { ?>
                        <tr>
                            <td><?php echo $value['id'] ?></td>
                            <td><?php echo $value['distribuidor'] ?></td>
                            <td><?php echo $value['celular'] ?></td>
                            <td><a href="TiendaControl.php?opcion=distribuidor-editar&idDis=<?php echo $value['id'] ?>">Editar</a> - 
                                <a href="TiendaControl.php?opcion=distribuidor-eliminar&idDis=<?php echo $value['id'] ?>">Eliminar</a></td>
                        </tr>
                    <?php } ?>
                <?php } ?>
            </table>
        </div>
        
        <!-- Columna Derecha (Promociones) -->
        <div class="col-sm-2 sidenav">
            <div class="well text-center">
                <img src="https://images.falabella.com/v3/assets/bltf4ed0b9a176c126e/bltff5ddc8a2f5e6dd9/65d38b7cbdb22a1952c22ce4/1200x630-Logo_Fala.png" alt="Producto 1" class="img-responsive">
            </div>
            <div class="well text-center">
                <img src="https://i.pinimg.com/originals/e0/ca/1d/e0ca1da3b894e8bcf74ede0312462070.png" alt="Producto 2" class="img-responsive">
            </div>
        </div>
        
    </div>
</div>
