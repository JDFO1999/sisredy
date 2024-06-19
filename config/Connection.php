<?php
  
//Función para conectarse de la base de datos	
function Conectarbd()
{
	
	$conexion = pg_connect("host=localhost port=5432 dbname=pg_occd002 user=postgres password='postgres' ");

	return $conexion;
}  

  //Función para desconectarse de la base de datos	
 function Desconectarbd($conexion)
 {
	  pg_close($conexion);
 }

?>

