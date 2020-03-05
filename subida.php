<?php
session_start();
include "conexion.php";
extract($_POST);


	$imagen=$_FILES['imagen']['tmp_name'];
	$tipo=getimagesize($imagen);
	if($tipo[2]==1){
		$ext=".gif";
	}elseif($tipo[2]==2){
		$ext=".jpg";
	}elseif($tipo[2]==3){
		$ext=".png";
	}else{
		header("location:subidafotos.php?item=1");
	}
	if(!isset($error)){
		$sql="SELECT max(id) from fotos";
		$q=mysqli_query($conex,$sql);
		$ultimo=mysqli_fetch_array($q);
		$maximo=$ultimo[0]+1;
		$ruta="fotos/".$maximo.$ext;
		if(copy($imagen,$ruta)){
		$sql="INSERT INTO fotos VALUES('',$usuario,'$titulo','$descripcion','$ruta')";
		mysqli_query($conex,$sql);
		}else{
			header("location:subidafotos.php?item=2");
		}
			}
	
	header("location:index.php");


?>
