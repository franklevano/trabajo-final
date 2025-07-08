<?php 
require_once("conexion.php");
class CategoriaModel{

	function __construct() {
	}
	function listarCategoria(){

		$objCon = new Conexion();
		$con = $objCon->getconexion();
		
		$sql = "SELECT * FROM categorias  ";
		$result = $con->query($sql);
	
		if ($result->num_rows > 0) {
		  // output data of each row
		  while($row = $result->fetch_assoc()) {
		    $arrCategorias[] = $row;
		  }
		  return $arrCategorias;
		} else {
		  //echo "0 results";
		}
	
	}
	
	function obtenerCategoria($idCat) {
        $objCon = new Conexion();
        $con = $objCon->getconexion();

        $sql = "SELECT categorias FROM categorias WHERE id = $idCat";
        $result = $con->query($sql);

        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return null;
        }
    }

    function actualizarCategoria($idCat, $categoria) {
        $objCon = new Conexion();
        $con = $objCon->getconexion();
        
        $sql = "UPDATE categorias SET categorias = '$categoria' WHERE id = $idCat";
        $result = $con->query($sql);

        if($result) {
            return 1;
        } else {
            return 0;
        }
    }

	function borrarCategoria($idCat){

		$objCon = new Conexion();
		$con = $objCon->getconexion();
		
		$sql = "DELETE FROM categorias WHERE id = $idCat ";
		$result = $con->query($sql);

		if($result){
			return 1;
		}else{
			return 0;
		}

	}

	function crearCategoria($categoria){
		$objCon = new Conexion();
		$con = $objCon->getconexion();
		
		$sql = "INSERT INTO categorias (categorias) VALUES  ('$categoria')";
		$result = $con->query($sql);

		if($result){
			return 1;
		}else{
			return 0;
		}


	}
}