<?php 
require_once("conexion.php");
class ProductoModel{

	function __construct() {
	}
	function listarProducto(){

		$objCon = new Conexion();
		$con = $objCon->getconexion();
		
		$sql = "SELECT * FROM productos ";
		$result = $con->query($sql);
	
		if ($result->num_rows > 0) {
		  // output data of each row
		  while($row = $result->fetch_assoc()) {
		    $arrProductos[] = $row;
		  }
		  return $arrProductos;
		} else {
		  //echo "0 results";
		}

	}

	function obtenerProducto($idPro) {
        $objCon = new Conexion();
        $con = $objCon->getconexion();

        $sql = "SELECT codigo, nombre, descripcion, proveedor, categoria, estado, stock, precio, imagen FROM productos WHERE id = $idPro";
        $result = $con->query($sql);

        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return null;
        }
    }

	function actualizarProducto($idPro, $codigo, $nombre, $descripcion, $proveedor, $categoria, $estado, $stock, $precio, $imagen) {
        $objCon = new Conexion();
        $con = $objCon->getconexion();
        
        $sql = "UPDATE productos SET codigo = '$codigo', nombre = '$nombre', descripcion = '$descripcion', proveedor = '$proveedor', categoria = '$categoria', estado = '$estado', stock = '$stock', precio = '$precio', imagen = '$imagen' WHERE id = $idPro";
        $result = $con->query($sql);

        if($result) {
            return 1;
        } else {
            return 0;
        }
    }

	function borrarproducto($idPro){

		$objCon = new Conexion();
		$con = $objCon->getconexion();
		
		$sql = "DELETE FROM productos WHERE id = $idPro ";
		$result = $con->query($sql);

		if($result){
			return 1;
		}else{
			return 0;
		}

	}

	function crearProducto($codigo, $nombre, $descripcion, $proveedor, $categoria, $estado, $stock, $precio, $imagen){
		$objCon = new Conexion();
		$con = $objCon->getconexion();
		
		$sql = "INSERT INTO productos (codigo,nombre,descripcion,proveedor,categoria,estado,stock,precio,imagen) VALUES  ('$codigo', '$nombre', '$descripcion', '$proveedor', '$categoria', '$estado', '$stock', '$precio', '$imagen') ";
		$result = $con->query($sql);

		if($result){
			return 1;
		}else{
			return 0;
		}

	}
}