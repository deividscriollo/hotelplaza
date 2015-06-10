<?php	
	include 'funciones_generales.php';		
	$sql = "";
	if($_GET['fun'] == "1"){//para paises
		if($_GET['tipo'] == "0"){//indica que se carga al inicio de la pagina
			$sql = "select id,nombre_cargo from cargo";
			cargarSelect($sql,$_GET['tam']);
		}else{

		}
	}else{
	}
?>