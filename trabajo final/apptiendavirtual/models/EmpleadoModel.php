<?php 
require_once("conexion.php");
class EmpleadoModel{

	function __construct() {
	}
	function listarEmpleado(){

		$objCon = new Conexion();
		$con = $objCon->getconexion();
		
		$sql = "SELECT * FROM admin  ";
		$result = $con->query($sql);
	
		if ($result->num_rows > 0) {
		  // output data of each row
		  while($row = $result->fetch_assoc()) {
		    $arrEmpleados[] = $row;
		  }
		  return $arrEmpleados;
		} else {
		  //echo "0 results";
		}
	
	}
	
	function obtenerEmpleado($idEmp) {
        $objCon = new Conexion();
        $con = $objCon->getconexion();

        $sql = "SELECT usuario, dni FROM admin WHERE id = $idEmp";
        $result = $con->query($sql);

        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return null;
        }
    }

    function actualizarEmpleado($idEmp, $usuarioA, $contraseñaA, $dni) {
        $objCon = new Conexion();
        $con = $objCon->getconexion();
        
        $sql = "UPDATE admin SET usuario = '$usuarioA', contraseña = '$contraseñaA', dni = '$dni' WHERE id = $idEmp";
        $result = $con->query($sql);

        if($result) {
            return 1;
        } else {
            return 0;
        }
    }

	function borrarEmpleado($idEmp){

		$objCon = new Conexion();
		$con = $objCon->getconexion();
		
		$sql = "DELETE FROM admin WHERE id = $idEmp ";
		$result = $con->query($sql);

		if($result){
			return 1;
		}else{
			return 0;
		}

	}

	function crearEmpleado($usuarioA,$contraseñaA,$dni){
		$objCon = new Conexion();
		$con = $objCon->getconexion();
		
		$sql = "INSERT INTO admin (usuario,contraseña,dni) VALUES  ('$usuarioA','$contraseñaA','$dni')";
		$result = $con->query($sql);

		if($result){
			return 1;
		}else{
			return 0;
		}


	}
}