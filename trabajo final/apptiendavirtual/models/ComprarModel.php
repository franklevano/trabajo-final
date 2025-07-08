<?php 
require_once("conexion.php");
class CompraModel{

	function __construct() {
	}
	function listarCompra(){

		$objCon = new Conexion();
		$con = $objCon->getconexion();
		
		$sql = "SELECT * FROM pedidos ";
		$result = $con->query($sql);
	
		if ($result->num_rows > 0) {
		  // output data of each row
		  while($row = $result->fetch_assoc()) {
		    $arrCompras[] = $row;
		  }
		  return $arrCompras;
		} else {
		  //echo "0 results";
		}

	}

	function obtenerCompra($idCom) {
        $objCon = new Conexion();
        $con = $objCon->getconexion();

        $sql = "SELECT cliente, empleado, producto, cantidad, distribuidor FROM pedidos WHERE id = $idCom";
        $result = $con->query($sql);

        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return null;
        }
    }

	function actualizarCompra($idCom, $cliente, $empleado, $producto, $cantidad, $distribuidor) {
        $objCon = new Conexion();
        $con = $objCon->getconexion();
        
        $sql = "UPDATE pedidos SET cliente = '$cliente', empleado = '$empleado', producto = '$producto', distribuidor = '$distribuidor', cantidad = '$cantidad' WHERE id = $idCom";
        $result = $con->query($sql);

        if($result) {
            return 1;
        } else {
            return 0;
        }
    }

	function borrarCompra($idCom){

		$objCon = new Conexion();
		$con = $objCon->getconexion();
		
		$sql = "DELETE FROM pedidos WHERE id = $idCom ";
		$result = $con->query($sql);

		if($result){
			return 1;
		}else{
			return 0;
		}

	}

	function crearCompra($cliente, $empleado, $producto, $cantidad, $distribuidor){
		$objCon = new Conexion();
		$con = $objCon->getconexion();
		
		$sql = "INSERT INTO pedidos (cliente,empleado,producto,cantidad,distribuidor) VALUES  ('$cliente', '$empleado','$producto', '$cantidad', '$distribuidor') ";
		$result = $con->query($sql);

		if($result){
			return 1;
		}else{
			return 0;
		}

	}
}