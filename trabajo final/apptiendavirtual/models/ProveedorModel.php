<?php 
require_once("conexion.php");
class ProveedorModel{

	function __construct() {
	}
	function listarProveedor(){

		$objCon = new Conexion();
		$con = $objCon->getconexion();
		
		$sql = "SELECT * FROM proveedores ";
		$result = $con->query($sql);
	
		if ($result->num_rows > 0) {
		  // output data of each row
		  while($row = $result->fetch_assoc()) {
		    $arrProveedores[] = $row;
		  }
		  return $arrProveedores;
		} else {
		  //echo "0 results";
		}

	}

	function obtenerProveedor($idProv) {
        $objCon = new Conexion();
        $con = $objCon->getconexion();

        $sql = "SELECT proveedor, nombre, direccion, ciudad, codigopostal, celular FROM proveedores WHERE id = $idProv";
        $result = $con->query($sql);

        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return null;
        }
    }

	function actualizarProveedor($idProv,$proveedor,$nombre,$direccion,$ciudad,$codigopostal,$celular) {
        $objCon = new Conexion();
        $con = $objCon->getconexion();
        
        $sql = "UPDATE proveedores SET proveedor = '$proveedor', nombre = '$nombre', direccion = '$direccion', ciudad = '$ciudad', codigopostal = '$codigopostal', celular = '$celular' WHERE id = $idProv";
        $result = $con->query($sql);

        if($result) {
            return 1;
        } else {
            return 0;
        }
    }

	function borrarProveedor($idProv){

		$objCon = new Conexion();
		$con = $objCon->getconexion();
		
		$sql = "DELETE FROM proveedores WHERE id = $idProv ";
		$result = $con->query($sql);

		if($result){
			return 1;
		}else{
			return 0;
		}

	}

	function crearProveedor($proveedor,$nombre,$direccion,$ciudad,$codigopostal,$celular){
		$objCon = new Conexion();
		$con = $objCon->getconexion();
		
		$sql = "INSERT INTO proveedores (proveedor,nombre,direccion,ciudad,codigopostal,celular ) VALUES  ('$proveedor', '$nombre', '$direccion', '$ciudad', '$codigopostal', '$celular') ";
		$result = $con->query($sql);

		if($result){
			return 1;
		}else{
			return 0;
		}


	}
}