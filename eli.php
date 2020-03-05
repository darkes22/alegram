<?php 
session_start();
include "conexion.php";
$sql="DELETE FROM fotos WHERE id='$_GET[eli]'";
mysqli_query($conex,$sql);
header("location:index.php");
 ?>