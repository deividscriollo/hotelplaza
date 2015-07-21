<?php	
	include '../procesos/funciones_generales.php';			
    date_default_timezone_set('America/Guayaquil');    
	$fecha = date('Y-m-d H:i:s', time());
	$fecha_larga = date('His', time());
	$sql = "";	
	$id = unique($fecha_larga);	
	$id_c = unique($fecha_larga);	
	//$id_user = sesion_activa();	
	$id_user = '1';
	$check = "OFF";	
	if(isset($_POST["form-field-checkbox"]))
		$check = "ON";	
	$cadena = " ".$_POST['img'];	
	$buscar = 'data:image/png;base64,';		
	$ciudad = isset($_POST['txt_11']);
	echo $ciudad;
	if($_POST['tipo'] == "g"){
		$repetidos = repetidos("usuario",strtoupper($_POST["txt_13"]),"usuario","g","","");	
		if( $repetidos == 'true'){
			$data = 1; /// este usuario ya existe;
		}else{		
			$repetidos = repetidos("identificacion",strtoupper($_POST["txt_1"]),"usuario","g","","");		
			if( $repetidos == 'true'){
				$data = 2; /// este nro de cedula ya existe;
			}else{						
				if (strpos($cadena, $buscar) ==  FALSE) {
					$sql ="insert into usuario values ('".$id."','1','".$_POST['txt_2']."','".'CI'."','".$_POST['txt_1']."','".$_POST['txt_3']."','".$_POST['txt_7']."','".$_POST['txt_8']."','".$_POST['txt_13']."','0','$fecha','".$_POST['txt_11']."','".$_POST['txt_4']."','".$check."','default.png','".$_POST['txt_12']."')";					
				}else{					
					$resp = img_64("img",$_POST['img'],'png',$id);					
					if($resp == "true"){
						$sql ="insert into usuario values ('".$id."','1','".$_POST['txt_2']."','".'CI'."','".$_POST['txt_1']."','".$_POST['txt_3']."','".$_POST['txt_7']."','".$_POST['txt_8']."','".$_POST['txt_13']."','0','$fecha','".$_POST['txt_11']."','".$_POST['txt_4']."','".$check."','".$id.".png','".$_POST['txt_12']."')";
					}
					else{
						$sql ="insert into usuario values ('".$id."','1','".$_POST['txt_2']."','".'CI'."','".$_POST['txt_1']."','".$_POST['txt_3']."','".$_POST['txt_7']."','".$_POST['txt_8']."','".$_POST['txt_13']."','0','$fecha','".$_POST['txt_11']."','".$_POST['txt_4']."','".$check."','default.png','".$_POST['txt_12']."')";					
					}
				}					
				$guardar = guardarSql($sql);
				$sql_nuevo = "select id,id_hotel ,nombre_usuario ,tipo_identificacion ,telefono ,celular ,email ,usuario ,estado ,fecha ,id_ciudad ,id_cargo ,extranjero ,imagen ,direccion from usuario where id ='$id'";        
        		$sql_nuevo = sql_array($sql_nuevo);

        		auditoria_sistema('usuario',$id_user,'Insert',$id,$fecha_larga,$fecha,$sql_nuevo,'');
        		if( $guardar == 'true'){
					$data = 0; ////datos guardados
				}else{
					$data = 3; /// error al guardar
				}
				$sql = "insert into clave values ('$id_c','$id','".$_POST['txt_5']."')";				
				$guardar = guardarSql($sql);
				if( $guardar == 'true'){
					$data = 0; ////datos guardados
				}else{
					$data = 3; /// error al guardar
				}
			}	
		}
	}else{
		if($_POST['tipo'] == "m"){
			$repetidos = repetidos("usuario",strtoupper($_POST["txt_13"]),"usuario","m",$_POST['txt_o'],"id");		
			if( $repetidos == 'true'){
				$data = 1; /// este dato ya existe;
			}else{		
				if (strpos($cadena, $buscar) ==  FALSE) {
					$sql ="update usuario set id_hotel='1',nombre_usuario='".$_POST['txt_2']."',tipo_identificacion='".'CI'."',identificacion='".$_POST['txt_1']."',telefono='".$_POST['txt_3']."',celular='".$_POST['txt_7']."',email='".$_POST['txt_8']."',usuario='".$_POST['txt_13']."',estado = '0',id_ciudad='".$_POST['txt_11']."',id_cargo='".$_POST['txt_4']."',extranjero='".$check."',direccion='".$_POST['txt_12']."' where id = '".$_POST['txt_o']."'";												
				}else{	
					$resp = img_64("img",$_POST['img'],'png',$_POST['txt_o']);														
					if($resp == "true"){												
						$sql ="update usuario set id_hotel='1',nombre_usuario='".$_POST['txt_2']."',tipo_identificacion='".'CI'."',identificacion='".$_POST['txt_1']."',telefono='".$_POST['txt_3']."',celular='".$_POST['txt_7']."',email='".$_POST['txt_8']."',usuario='".$_POST['txt_13']."',estado = '0',id_ciudad='".$_POST['txt_11']."',id_cargo='".$_POST['txt_4']."',extranjero='".$check."',imagen='".$_POST['txt_o'].".png',direccion='".$_POST['txt_12']."' where id = '".$_POST['txt_o']."'";				
					}
					else{						
						$sql ="update usuario set id_hotel='1',nombre_usuario='".$_POST['txt_2']."',tipo_identificacion='".'CI'."',identificacion='".$_POST['txt_1']."',telefono='".$_POST['txt_3']."',celular='".$_POST['txt_7']."',email='".$_POST['txt_8']."',usuario='".$_POST['txt_13']."',estado = '0',id_ciudad='".$_POST['txt_11']."',id_cargo='".$_POST['txt_4']."',extranjero='".$check."',direccion='".$_POST['txt_12']."' where id = '".$_POST['txt_o']."'";				
					}
				}	
				$guardar = guardarSql($sql);
				if( $guardar == 'true'){
					$data = 0; ////datos guardados
				}else{
					$data = 2; /// error al guardar
				}				
				$sql = "update clave set id_usuario='".$_POST['txt_o']."',clave='".$_POST['txt_5']."' where id = '".$_POST['txt_o']."'";
				$sql_anterior = "select id,id_hotel ,nombre_usuario ,tipo_identificacion ,telefono ,celular ,email ,usuario ,estado ,fecha ,id_ciudad ,id_cargo ,extranjero ,imagen ,direccion from usuario where id ='$id'";        
        		$sql_anterior = sql_array($sql_anterior);
				guardarSql($sql);
				$sql_nuevo = "select id,id_hotel ,nombre_usuario ,tipo_identificacion ,telefono ,celular ,email ,usuario ,estado ,fecha ,id_ciudad ,id_cargo ,extranjero ,imagen ,direccion from usuario where id ='$id'";        
            	$sql_nuevo = sql_array($sql_nuevo);            
            	auditoria_sistema('usuario',$id_user,'Update',$_POST['txt_o'],$fecha_larga,$fecha,$sql_nuevo,$sql_anterior);
			}
		}
	}	
	echo $data;
?>