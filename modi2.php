<?php 
	include "conexion.php";
	extract($_POST);
	$clave=md5($clave);
	$sql="UPDATE usuarios set 
			nombre='$nombre',
			clave='$clave'
		WHERE id=$oculto";
	if (mysqli_query($conex,$sql))
	 {
		echo "Se modifico correctamente en la base de datos";
	 }else
	 	{
	 		echo "Fallo grave";

	 	}
 ?>
 <br>

 <a href="modificar.php">Volver a la pagina anterior</a>