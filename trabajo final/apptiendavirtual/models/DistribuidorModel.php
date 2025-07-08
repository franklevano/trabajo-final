<?php 
require_once("conexion.php");
class DistribuidorModel{

	function __construct() {
	}
	function listarDistribuidor(){

		$objCon = new Conexion();
		$con = $objCon->getconexion();
		
		$sql = "SELECT * FROM distribuidores ";
		$result = $con->query($sql);
	
		if ($result->num_rows > 0) {
		  // output data of each row
		  while($row = $result->fetch_assoc()) {
		    $arrDistribuidores[] = $row;
		  }
		  return $arrDistribuidores;
		} else {
		  //echo "0 results";
		}

	}

	function obtenerDistribuidor($idDis) {
        $objCon = new Conexion();
        $con = $objCon->getconexion();

        $sql = "SELECT distribuidor, celular FROM distribuidores WHERE id = $idDis";
        $result = $con->query($sql);

        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return null;
        }
    }

	function actualizarDistribuidor($idDis,$distribuidor,$celular) {
        $objCon = new Conexion();
        $con = $objCon->getconexion();
        
        $sql = "UPDATE distribuidores SET distribuidor = '$distribuidor', celular = '$celular' WHERE id = $idDis";
        $result = $con->query($sql);

        if($result) {
            return 1;
        } else {
            return 0;
        }
    }

	function borrarDistribuidor($idDis){

		$objCon = new Conexion();
		$con = $objCon->getconexion();
		
		$sql = "DELETE FROM distribuidores WHERE id = $idDis ";
		$result = $con->query($sql);

		if($result){
			return 1;
		}else{
			return 0;
		}

	}

	function crearDistribuidor($distribuidor,$celular){
		$objCon = new Conexion();
		$con = $objCon->getconexion();
		
		$sql = "INSERT INTO distribuidores (distribuidor,celular) VALUES  ('$distribuidor', '$celular') ";
		$result = $con->query($sql);

		if($result){
			return 1;
		}else{
			return 0;
		}


	}
}