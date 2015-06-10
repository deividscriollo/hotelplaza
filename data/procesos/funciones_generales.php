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
	            	$lista[] = $row[$i];	   	            	         
	            }	   		
		 	}
		}	    
	    echo $lista = json_encode($lista);
	}
?>