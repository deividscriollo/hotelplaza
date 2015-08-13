<?php	
	include '../procesos/funciones_generales.php';			
	$sql = "";
	$lista1 = array();
	$id_tabla = '';
	if($_GET['fn'] == '0'){//function atras
		if($_GET['id'] == ''){///si exsite un id previo
			$sql = "select id from usuario order by fecha desc limit 1";			
			$id_tabla = id_unique($sql);			
		}else{
			$sql = "select id from usuario where id not in (select id from usuario where id >= '$_GET[id]' order by id desc) order by fecha desc limit 1";
			$id_tabla = id_unique($sql);			
		}		
		$sql = "select usuario.id,id_hotel,nombre_usuario,tipo_identificacion,identificacion,telefono,celular,email,usuario,estado,usuario.fecha,id_ciudad,id_cargo,nombre_cargo,extranjero,imagen,direccion,clave from usuario,cargo,clave where usuario.id_cargo = cargo.id and usuario.id = clave.id_usuario and usuario.id = '".$id_tabla."'";										
		//echo $sql;
		$lista1=array(atras_adelente($sql)); 				
		$data = (json_encode($lista1));
		echo $data;
	}else{
		if($_GET['fn'] == '1'){//function adelante
			if($_GET['id'] == ''){///si exsite un id previo
				$sql = "select id from usuario order by fecha desc limit 1";
				
				$id_tabla = id_unique($sql);			
			}else{
				$sql = "select id from usuario where id not in (select id from usuario where id <= '$_GET[id]' order by id asc) order by fecha asc limit 1";				
				$id_tabla = id_unique($sql);			
			}
			$sql = "select usuario.id,id_hotel,nombre_usuario,tipo_identificacion,identificacion,telefono,celular,email,usuario,estado,usuario.fecha,id_ciudad,id_cargo,nombre_cargo,extranjero,imagen,direccion,clave from usuario,cargo,clave where usuario.id_cargo = cargo.id and usuario.id = clave.id_usuario and usuario.id = '".$id_tabla."'";						
			$lista1=array(atras_adelente($sql)); 		
			$data = (json_encode($lista1));
			echo $data;
		}	
	}

?>