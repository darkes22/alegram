<?php 
include "conexion.php";
extract($_POST);
if ($correo=="" || $clave=="")
{
	header("location:login.php?e=2");
}
else
{
	$clave=md5($clave);
	$sql="SELECT id,nombre FROM usuarios WHERE correo='$correo' AND clave='$clave'";
	$q=mysqli_query($conex,$sql);
	if ($c=mysqli_fetch_array($q))
	{
		session_start();
		$_SESSION['quien']=$c[0];
		$_SESSION['nombre']=$c[1];
		header("location:index.php");
	} else 
		{
			header("location:login.php?e=1");
		}
 }
 ?>
