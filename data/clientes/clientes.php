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
	$cadena = " ".$_POST['img'];	
	$buscar = 'data:image/png;base64,';	
	$ciudad = "";	
	$data = "";
	if(isset($_POST["txt_11"]))
		$ciudad = $_POST['txt_11'];	
	if($_POST['tipo'] == "g"){								
		$repetidos = repetidos("email",strtolower($_POST["txt_8"]),"cliente","g","","");	
		if( $repetidos == 'true'){
			$data = 1; /// este usuario ya existe;
		}else{		
			$repetidos = repetidos("identificacion",strtoupper($_POST["txt_2"]),"cliente","g","","");		
			if( $repetidos == 'true'){
				$data = 2; /// este nro de cedula ya existe;
			}else{						
				if (strpos($cadena, $buscar) ==  FALSE) {
					$sql ="insert into cliente values ('".$id."','".$_POST['txt_3']."','".$_POST['txt_4']."','".$_POST['txt_1']."','".$_POST['txt_2']."','".$_POST['txt_5']."','".$_POST['txt_6']."','".$_POST['txt_7']."','".$_POST['txt_8']."','".$ciudad."','default.png','".$fecha."')";														
				}else{					
					$resp = img_64("img",$_POST['img'],'png',$id);					
					if($resp == "true"){
						$sql ="insert into cliente values ('".$id."','".$_POST['txt_3']."','".$_POST['txt_4']."','".$_POST['txt_1']."','".$_POST['txt_2']."','".$_POST['txt_5']."','".$_POST['txt_6']."','".$_POST['txt_7']."','".$_POST['txt_8']."','".$ciudad."',''".$id.".png','".$fecha."')";								
					}
					else{
						$sql ="insert into cliente values ('".$id."','".$_POST['txt_3']."','".$_POST['txt_4']."','".$_POST['txt_1']."','".$_POST['txt_2']."','".$_POST['txt_5']."','".$_POST['txt_6']."','".$_POST['txt_7']."','".$_POST['txt_8']."','".$ciudad."','default.png','".$fecha."')";											
					}
				}										
				$guardar = guardarSql($sql);
				$sql_nuevo = "select id,nombre_cliente,apellido_cliente,tipo_identificacion,identificacion,direccion,telefono,celular,email,id_ciudad,img,fecha_creacion from cliente where id ='$id'";        
        		$sql_nuevo = sql_array($sql_nuevo);

        		auditoria_sistema('cliente',$id_user,'Insert',$id,$fecha_larga,$fecha,$sql_nuevo,'');
        		if( $guardar == 'true'){
					$data = 0; ////datos guardados
				}else{
					$data = 3; /// error al guardar
				}
				$sql = "insert into clave_cliente values ('$id_c','".$_POST['txt_12']."','$id')";				
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
			$repetidos = repetidos("email",strtolower($_POST["txt_8"]),"cliente","m",$_POST['txt_o'],"id");		
			if( $repetidos == 'true'){
				$data = 1; /// este dato ya existe;
			}else{	
				$repetidos = repetidos("identificacion",strtoupper($_POST["txt_2"]),"cliente","m",$_POST['txt_o'],"id");
				if( $repetidos == 'true'){
					$data = 2; /// este nro de cedula ya existe;
				}else{							
					if (strpos($cadena, $buscar) ==  FALSE) {
						$sql ="update cliente set nombre_cliente='".$_POST['txt_3']."',apellido_cliente='".$_POST['txt_4']."',tipo_identificacion='".$_POST['txt_1']."',identificacion='".$_POST['txt_2']."',direccion='".$_POST['txt_5']."',telefono='".$_POST['txt_6']."',celular='".$_POST['txt_7']."',email='".$_POST['txt_8']."',id_ciudad='".$ciudad."' where id= '".$_POST['txt_o']."'";							
					}else{	
						$resp = img_64("img",$_POST['img'],'png',$_POST['txt_o']);
						if($resp == "true"){	
							$sql ="update cliente set nombre_cliente='".$_POST['txt_3']."',apellido_cliente='".$_POST['txt_4']."',tipo_identificacion='".$_POST['txt_1']."',identificacion='".$_POST['txt_2']."',direccion='".$_POST['txt_5']."',telefono='".$_POST['txt_6']."',celular='".$_POST['txt_7']."',email='".$_POST['txt_8']."',id_ciudad='".$ciudad."',img='".$_POST['txt_o'].".png' where id= '".$_POST['txt_o']."'";				
						}
						else{
							$sql ="update cliente set nombre_cliente='".$_POST['txt_3']."',apellido_cliente='".$_POST['txt_4']."',tipo_identificacion='".$_POST['txt_1']."',identificacion='".$_POST['txt_2']."',direccion='".$_POST['txt_5']."',telefono='".$_POST['txt_6']."',celular='".$_POST['txt_7']."',email='".$_POST['txt_8']."',id_ciudad='".$ciudad."' where id= '".$_POST['txt_o']."'";
						}
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