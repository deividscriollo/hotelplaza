<?php
include '../procesos/funciones_generales.php';  
$page = $_GET['page'];
$limit = $_GET['rows'];
$sidx = $_GET['sidx'];
$sord = $_GET['sord'];
$search = $_GET['_search'];

$db = new MySQL();      
if (!$sidx)
    $sidx = 1;

$result = $db->consulta("SELECT COUNT(*) AS count from usuario, ciudad,cargo,clave where usuario.id_ciudad = ciudad.id and cargo.id = usuario.id_cargo and clave.id_usuario = usuario.id");

$row = $db->fetch_row($result);
$count = $row[0];
if ($count > 0 && $limit > 0) {
    $total_pages = ceil($count / $limit);
} else {
    $total_pages = 0;
}
if ($page > $total_pages)
    $page = $total_pages;
$start = $limit * $page - $limit;
if ($start < 0)
    $start = 0;
if ($search == 'false') {
    $SQL = "select cliente.id,nombre_cliente,apellido_cliente,tipo_identificacion,identificacion,direccion,telefono,celular,email,id_ciudad,img,fecha_creacion from cliente,clave_cliente where cliente.id = clave_cliente.id_cliente ORDER BY  $sidx $sord limit $limit offset $start";
} else {
    $campo = $_GET['searchField'];
  
    if ($_GET['searchOper'] == 'eq') {
        $SQL = "select cliente.id,nombre_cliente,apellido_cliente,tipo_identificacion,identificacion,direccion,telefono,celular,email,id_ciudad,img,fecha_creacion from cliente,clave_cliente where cliente.id = clave_cliente.id_cliente and $campo = '$_GET[searchString]' ORDER BY $sidx $sord limit $limit offset $start";
    }         
    if ($_GET['searchOper'] == 'cn') {
        $SQL = "select cliente.id,nombre_cliente,apellido_cliente,tipo_identificacion,identificacion,direccion,telefono,celular,email,id_ciudad,img,fecha_creacion from cliente,clave_cliente where cliente.id = clave_cliente.id_cliente and $campo like '%$_GET[searchString]%' ORDER BY $sidx $sord limit $limit offset $start";
    }
  
}
//echo $SQL;
$result = $db->consulta($SQL);
header("Content-type: text/xml;charset=utf-8");
$s = "<?xml version='1.0' encoding='utf-8'?>";
$s .= "<rows>";
$s .= "<page>" . $page . "</page>";
$s .= "<total>" . $total_pages . "</total>";
$s .= "<records>" . $count . "</records>";
    while($row = $db->fetch_array($result)){ 
    $s .= "<row id='" . $row[0] . "'>";
    $s .= "<cell>" . $row[0] . "</cell>";
    $s .= "<cell>" . $row[1] . "</cell>";
    $s .= "<cell>" . $row[2] . "</cell>";
    $s .= "<cell>" . $row[3] . "</cell>";
    $s .= "<cell>" . $row[4] . "</cell>";
    $s .= "<cell>" . $row[5] . "</cell>";
    $s .= "<cell>" . $row[6] . "</cell>";
    $s .= "<cell>" . $row[7] . "</cell>";
    $s .= "<cell>" . $row[8] . "</cell>";
    $s .= "<cell>" . $row[9] . "</cell>";
    $s .= "<cell>" . $row[10] . "</cell>";
    $s .= "<cell>" . $row[11] . "</cell>";        
    $s .= "</row>";
}
$s .= "</rows>";
echo $s;
?>
