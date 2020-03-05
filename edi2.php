<?php 
	include "conexion.php";
	session_start();
	extract($_POST);
	$sql="UPDATE fotos set 
			titulo='$titulo',
			descripcion='$descripcion'
		WHERE id=$oculto";
	if (mysqli_query($conex,$sql))
	 {
		echo "Se edito su foto";
	 }else
	 	{
	 		echo "Fallo grave";

	 	}
 ?>
 <br>

 <a href="editarfoto.php">Volver a la pagina anterior</a>