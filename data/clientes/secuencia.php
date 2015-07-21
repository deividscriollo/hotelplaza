<?php	
	include '../procesos/funciones_generales.php';			
	$sql = "";
	$lista1 = array();
	$id_tabla = '';
	if($_GET['fn'] == '0'){//function atras
		if($_GET['id'] == ''){///si exsite un id previo
			$sql = "select id from cliente order by fecha_creacion desc limit 1";			
			$id_tabla = id_unique($sql);			
		}else{
			$sql = "select id from cliente where id not in (select id from cliente where id >= '$_GET[id]' order by id desc) order by fecha_creacion desc limit 1";
			$id_tabla = id_unique($sql);			
		}		
		$sql = "select cliente.id,nombre_cliente,apellido_cliente,tipo_identificacion,identificacion,direccion,telefono,celular,email,id_ciudad,img,fecha_creacion,clave_cliente from cliente,clave_cliente where cliente.id = clave_cliente.id_cliente and cliente.id = '".$id_tabla."'";										
		$lista1=array(atras_adelente($sql)); 				
		$data = (json_encode($lista1));
		echo $data;
	}else{
		if($_GET['fn'] == '1'){//function adelante
			if($_GET['id'] == ''){///si exsite un id previo
				$sql = "select id from cliente order by fecha_creacion desc limit 1";
				
				$id_tabla = id_unique($sql);			
			}else{
				$sql = "select id from cliente where id not in (select id from cliente where id <= '$_GET[id]' order by id asc) order by fecha_creacion asc limit 1";				
				$id_tabla = id_unique($sql);			
			}
			$sql = "select cliente.id,nombre_cliente,apellido_cliente,tipo_identificacion,identificacion,direccion,telefono,celular,email,id_ciudad,img,fecha_creacion,clave_cliente from cliente,clave_cliente where cliente.id = clave_cliente.id_cliente and cliente.id = '".$id_tabla."'";					
			$lista1=array(atras_adelente($sql)); 		
			$data = (json_encode($lista1));
			echo $data;
		}	
	}

?>