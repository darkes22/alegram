<?php 
	include "conexion.php";
	session_start();

	$sql="UPDATE usuarios SET status=2 where id='$_GET[eli]'";


	if (mysqli_query($conex,$sql))
	 {

		echo "Se borro correctamente su cuenta";
		session_destroy();

	 }else
	 	{
	 		echo "Fallo grave";

	 	}
 ?>
 <br>

 <a href="index.php">Volver a la pagina anterior</a>