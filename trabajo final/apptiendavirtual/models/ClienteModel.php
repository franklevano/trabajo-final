<?php 
require_once("conexion.php");
class ClienteModel{

	function __construct() {
	}
	function listarCliente(){

		$objCon = new Conexion();
		$con = $objCon->getconexion();
		
		$sql = "SELECT * FROM clientes  ";
		$result = $con->query($sql);
	
		if ($result->num_rows > 0) {
		  // output data of each row
		  while($row = $result->fetch_assoc()) {
		    $arrClientes[] = $row;
		  }
		  return $arrClientes;
		} else {
		  //echo "0 results";
		}
	
	}
	
	function obtenerCliente($idCli) {
        $objCon = new Conexion();
        $con = $objCon->getconexion();

        $sql = "SELECT usuario, nombre, apellido, pregunta, respuesta FROM clientes WHERE id = $idCli";
        $result = $con->query($sql);

        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return null;
        }
    }

    function actualizarCliente($idCli, $usuario, $nombre, $apellido, $contraseña, $pregunta, $respuesta) {
        $objCon = new Conexion();
        $con = $objCon->getconexion();
        
        $sql = "UPDATE clientes SET usuario = '$usuario', nombre = '$nombre', apellido = '$apellido', contraseña = '$contraseña', pregunta = '$pregunta', respuesta = '$respuesta' WHERE id = $idCli";
        $result = $con->query($sql);

        if($result) {
            return 1;
        } else {
            return 0;
        }
    }

	function borrarCliente($idCli){

		$objCon = new Conexion();
		$con = $objCon->getconexion();
		
		$sql = "DELETE FROM clientes WHERE id = $idCli ";
		$result = $con->query($sql);

		if($result){
			return 1;
		}else{
			return 0;
		}

	}

	function crearCliente($usuario,$nombre,$apellido,$contraseña,$pregunta,$respuesta){
		$objCon = new Conexion();
		$con = $objCon->getconexion();
		
		$sql = "INSERT INTO clientes (usuario,nombre,apellido,contraseña,pregunta,respuesta) VALUES  ('$usuario', '$nombre', '$apellido','$contraseña','$pregunta','$respuesta')";
		$result = $con->query($sql);

		if($result){
			return 1;
		}else{
			return 0;
		}


	}
}