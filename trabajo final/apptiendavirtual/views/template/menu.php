<?php
// Obtener la opción actual desde la URL (simulado para demostración)
$current_option = isset($_GET['opcion']) ? $_GET['opcion'] : '';

// Función para agregar la clase 'active' al elemento activo
function isActive($option, $current_option) {
    return ($option === $current_option) ? 'active' : '';
}
?>

<nav class="navbar navbar-inverse" style="background-color: #d32f2f; border-color: #d32f2f;">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#" style="color: white;">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c8/Escudo_del_Peru.png/521px-Escudo_del_Peru.png" alt="Logo Perú" style="width: 30px; margin-right: 10px;">Logo
            </a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="<?php echo isActive('empleado-listado', $current_option); ?>">
                    <a href="TiendaControl.php?opcion=empleado-listado" style="color: white;">EMPLEADOS</a>
                </li>
                <li class="<?php echo isActive('cliente-listado', $current_option); ?>">
                    <a href="TiendaControl.php?opcion=cliente-listado" style="color: white;">CLIENTES</a>
                </li>
                <li class="<?php echo isActive('producto-listado', $current_option); ?>">
                    <a href="TiendaControl.php?opcion=producto-listado" style="color: white;">PRODUCTOS</a>
                </li>
                <li class="<?php echo isActive('categoria-listado', $current_option); ?>">
                    <a href="TiendaControl.php?opcion=categoria-listado" style="color: white;">CATEGORIAS</a>
                </li>
                <li class="<?php echo isActive('distribuidor-listado', $current_option); ?>">
                    <a href="TiendaControl.php?opcion=distribuidor-listado" style="color: white;">DISTRIBUIDORES</a>
                </li>
                <li class="<?php echo isActive('proveedor-listado', $current_option); ?>">
                    <a href="TiendaControl.php?opcion=proveedor-listado" style="color: white;">PROVEEDORES</a>
                </li>
                <li class="<?php echo isActive('compra-listado', $current_option); ?>">
                    <a href="TiendaControl.php?opcion=compra-listado" style="color: white;">DETALLES DE PEDIDOS</a>
                </li>
                <li class="<?php echo isActive('compra1-listado', $current_option); ?>">
                    <a href="TiendaControl.php?opcion=compra1-listado" style="color: white;">PEDIDOS</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="TiendaControl.php?opcion=login-form-admin" style="color: white;"><span class="glyphicon glyphicon-log-in"></span> SALIR</a></li>
            </ul>
        </div>
    </div>
</nav>

<style>
    .navbar-nav > li.active > a,
    .navbar-nav > li.active > a:hover,
    .navbar-nav > li.active > a:focus {
        background-color: yellow !important;
        color: black !important;
    }
</style>
