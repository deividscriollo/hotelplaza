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
    if ($_POST['oper'] == "add") {
        $repetidos = repetidos("nombre_cargo", strtoupper($_POST['nombre_cargo']), "cargo", "g", "", "");                
        if ($repetidos == 'true') {
            $data = "1"; /// este dato ya existe;
        } else {
            $sql = "insert into cargo values ('$id','" . strtoupper($_POST['nombre_cargo']) . "','".$fecha."')";
            $guardar = guardarSql($sql);
            $data = "2";//guardado
        }
    } else {
        if ($_POST['oper'] == "edit") {            
             $repetidos = repetidos("nombre_cargo",strtoupper($_POST["nombre_cargo"]),"cargo","m",$_POST['id'],"id");      
            if ($repetidos == 'true') {
                $data = "1"; /// este dato ya existe;
            } else {
                $sql = "update cargo set nombre_cargo = '" . strtoupper($_POST['nombre_cargo']) . "' where id = '$_POST[id]'";
                $guardar = guardarSql($sql);               
                $data = "3";
            }
        }
    }
    echo $data;
?>

