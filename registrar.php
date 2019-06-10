<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registro</title>
</head>

<body>

<?php

	
	$apellido= $_POST["apel"];
	$nombre= $_POST["nom"];
	$alias= $_POST["al"];
	$clave= $_POST["clav"];
	
	
				
	try{
		$dbconn = pg_connect("host=localhost dbname=pelispedia user=postgres password=root")
    or die('No se ha podido conectar: ' . pg_last_error());

// Realizando una consulta SQL
$query="INSERT INTO USUARIO(usuario_id,apellido,nombre,alias,clave) values(default, '$apellido','$nombre','$alias','$clave')";
$result = pg_query($dbconn, $query) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());
$cmdtuples = pg_affected_rows($result);
echo $cmdtuples . " datos registrados.\n";
// Free resultset liberar los datos
pg_free_result($result);

// Closing connection cerrar la conexión
pg_close($dbconn);

	}catch(Exception $e){			
		
		
		echo "Línea del error: " . $e->getLine();
		
	}finally{
		
		$base=null;
		
		
	}

?>
</body>
</html>