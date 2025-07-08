<?php 
require_once("conexion.php");
class UsuarioModel{

	function __construct() {
	}
	function verUsuario($usuarioA,$contraseñaA){

		$objCon = new Conexion();
		$con = $objCon->getconexion();
		$sql = "SELECT usuario FROM admin WHERE usuario = '$usuarioA' AND contraseña = '$contraseñaA' ";
		$result = $con->query($sql);
	
		if ($result->num_rows > 0) {
		  return 1;
		} else {
		  return 0;
		}
	}
}