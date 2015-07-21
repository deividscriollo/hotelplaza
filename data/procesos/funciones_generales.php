<?php
	include("conexion.php");		
	function cargarSelect($sql, $tam) {		
		$db = new MySQL();			
	    $lista = array();
	    $data = 0;	    	    
	    $sql = $db->consulta($sql);	    
		if($db->num_rows($sql) > 0){			
			while($row = $db->fetch_array($sql)){ 				
				for($i = 0; $i < $tam; $i++){	            											
	            	$lista[] = utf8_encode($row[$i]);
	            }	   		
		 	}		 	
		}	    		
	    echo $lista = json_encode($lista);	    
	}

	function atras_adelente($sql){     
	    $db = new MySQL();
	    $sql = $db->consulta($sql);
	    $row = $db->fetch_row($sql);	    	    
	    return $row;
	}

	function img_64($destino,$img_64,$extension,$nombre){
	    define('UPLOAD_DIR', $destino.'/');    
	    $img_64 = str_replace('data:image/png;base64,', '', $img_64);        
	    $img_64 = str_replace(' ', '+', $img_64);
	    $data_img = base64_decode($img_64);
	    $file = UPLOAD_DIR . $nombre . '.'.$extension;
	    if($success = file_put_contents($file, $data_img)){
	        return "true";
	    }else{
	        return "false";
	    }
	}

	function unique($fecha_larga) {
	    $id = uniqid();
	    $id = $fecha_larga . $id;
	    return $id;
	}

	function sql_array($sql){        
		$db = new MySQL();				    	    	    		
	    $sql = $db->consulta($sql);	    
	    while($row = $db->fetch_array($sql)){ 	    		    		    	
	    	return $sql;     
	    }	    	    
	}
	function guardarSql($sql) {			    
	    $resp = true;    
	    $db = new MySQL();	    	    
	    $sql = $db->consulta($sql);	    	    
	   if($sql){
	   	    $resp = 'true';
	    } else {
	        $resp = 'false';
	    }
	    return $resp;	   	    	    
	}

	function id($sql) { //retorna el id de una consulta con solo un parametro de retorno en el sql
	    $id = 0;
	    $db = new MySQL();				        
	    $sql = $db->consulta($sql);
	    while($row = $db->fetch_array($sql)){ 			
            $id = $row[0];            
	 	}	    
	    echo $id;
	}
	function id_unique($sql) { //retorna el id de una consulta con solo un parametro de retorno en el sql
	    $id = 0;
	    $db = new MySQL();				        
	    $sql = $db->consulta($sql);
	    while($row = $db->fetch_array($sql)){ 
			$id = $row[0];
	 	}	    	        	    
	    return $id;
	}	
		
	function fecha_total(){   	    
	    date_default_timezone_set('America/Guayaquil');
	    $fecha=date('Y-m-d H:i:s', time()); 
	    $fecha_larga = date('His', time()); 
	    return $valor=uniqid('');
	}
	
	function maxCaracter($texto, $cant){        
	    $texto = substr($texto, 0,$cant);
	    return $texto;
	}

	function repetidos($campo, $valor, $tabla, $tipo, $id, $id_campo) {///conexion,campo a comparar,valor campo,tabla,tipo g o m id si tiene, id campo si tiene
	    $repetidos = 'true';
	    $db = new MySQL();				        
	    if ($tipo == "g") {
	        $sql = "select " . $campo . " from " . $tabla . " where " . $campo . " = '" . $valor . "'";
	        $sql = $db->consulta($sql);
			if($db->num_rows($sql)){	        
	            $repetidos = 'true';
	        } else {
	            $repetidos = 'false';
	        }
	    } else {
	        if ($tipo == "m") {
	            $sql = "select " . $campo . " from " . $tabla . " where " . $campo . " = '" . $valor . "' and " . $id_campo . " not in ('$id') ";
	            $sql = $db->consulta($sql);
				if($db->num_rows($sql)){	        
	                $repetidos = 'true';
	            } else {
	                $repetidos = 'false';
	            }
	        } else {
	            if ($tipo == "gr") {
	                $sql = "select " . $campo . " from " . $tabla . " where " . $campo . " = '" . $valor . "' and codigo_barras != ''";
	                $sql = $db->consulta($sql);
					if($db->num_rows($sql)){	        
	                    $repetidos = 'true';
	                } else {
	                    $repetidos = 'false';
	                }
	            }else{
	                if ($tipo == "mr") {
	                    $sql = "select " . $campo . " from " . $tabla . " where " . $campo . " = '" . $valor . "' and codigo_barras != '' and " . $id_campo . " not in ('$id') " ;	                    
	                    $sql = $db->consulta($sql);
						if($db->num_rows($sql)){	        
	                        $repetidos = 'true';
	                    } else {
	                        $repetidos = 'false';
	                    }
	                }
	            }    
	        }
	    }
	    return $repetidos;
	}
	function repetidos_1($campo, $valor, $tabla, $tipo, $id, $id_campo ,$extra_campo,$extra_campo_1) {///conexion,campo a comparar,valor campo,tabla,tipo g o m id si tiene, id campo si tiene
	    $repetidos = 'true';
	    if ($tipo == "g") {
	        $sql = "select " . $campo . " from " . $tabla . " where " . $campo . " = '" . $valor . "' and " . $extra_campo . " = '" .$extra_campo_1. "'";        
	        if (pg_num_rows(pg_query($conexion, $sql))) {
	            $repetidos = 'true';
	        } else {
	            $repetidos = 'false';
	        }
	    } else {
	        if ($tipo == "m") {
	            $sql = "select " . $campo . " from " . $tabla . " where " . $campo . " = '" . $valor . "' and " . $extra_campo . " = '" .$extra_campo_1. "'  and " . $id_campo . " not in ('$id') ";            
	            if (pg_num_rows(pg_query($conexion, $sql))) {
	                $repetidos = 'true';
	            } else {
	                $repetidos = 'false';
	            }
	        } else {
	            
	        }
	    }
	    return $repetidos;
	}
	function auditoria_sistema($tabla,$id_user,$proceso,$id_registro,$fecha_larga,$fecha,$sql_nuevo,$sql_anterior){
	    $cliente = $_SERVER['REMOTE_ADDR'];
	    $server = $_SERVER['SERVER_ADDR'];
	    $db = new MySQL();				        	    
	    $id = unique($fecha_larga);    
	    // if($proceso == 'Insert'){                
	    //     $sql = "insert into auditoria values ('$id','$tabla','$id_registro',array[''],$sql_nuevo::text[],'$proceso','$id_user','$cliente','$server','0','$fecha')";                       
	    //     $sql = $db->consulta($sql);	                
	    // }else{
	    //     if($proceso == 'Update'){        
	    //         $sql = "insert into auditoria values ('$id','$tabla','$id_registro',$sql_anterior::text[],$sql_nuevo::text[],'$proceso','$id_user','$cliente','$server','0','$fecha')";                       
	    //         $sql = $db->consulta($sql);    
	    //     }else{            
	    //         if($proceso == 'Backup'){        
	    //         }               
	    //     }
	    // }
	}


?>