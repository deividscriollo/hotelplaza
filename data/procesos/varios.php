<?php	
	include 'funciones_generales.php';		
	$sql = "";
	/////////////////////////////////////
	if($_GET['fun'] == "1"){//para cargos
		if($_GET['tipo'] == "0"){//indica que se carga al inicio de la pagina
			$sql = "select id,nombre_cargo from cargo";
			cargarSelect($sql,$_GET['tam']);
		}else{

		}
	}else{
		if($_GET['fun'] == "2"){//para paises
			if($_GET['tipo'] == "0"){//indica que se carga al inicio de la pagina
				$sql = "select id,nombre_pais from pais";
				cargarSelect($sql,$_GET['tam']);
			}else{				
			}
		}else{
			if($_GET['fun'] == "3"){//para provincias
				if($_GET['tipo'] == "0"){//indica que se carga al inicio de la pagina
					$sql = "select id,nombre_provincia from provincia where id_pais = '$_GET[id]'";
					cargarSelect($sql,$_GET['tam']);
				}else{

				}
			}else{				
				if($_GET['fun'] == "4"){//para ciudades
					if($_GET['tipo'] == "0"){//indica que se carga al inicio de la pagina
						$sql = "select id,nombre_ciudad from ciudad where id_provincia = '$_GET[id]'";
						cargarSelect($sql,$_GET['tam']);
					}else{

					}
				}else{
					if($_GET['fun'] == "5"){//para pais modificar
						if($_GET['tipo'] == "0"){//indica que se carga al inicio de la pagina
							$sql = "select id_provincia from ciudad where id = '$_GET[id]'";							
							id($sql);
						}else{

						}
					}else{
						if($_GET['fun'] == "6"){//para pais modificar
							if($_GET['tipo'] == "0"){//indica que se carga al inicio de la pagina
								$sql = "select id_pais from provincia where id = '$_GET[id]'";															
								id($sql);
							}else{
								
							}
						}else{
						}
					}
				}
			}
		}
	}
?>