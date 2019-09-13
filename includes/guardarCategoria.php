<?php 
if(isset($_POST)){
  require_once 'conexion.php';

  $nombre=isset($_POST["name"])? mysqli_real_escape_string ($db,$_POST["name"]):false;
}
$errores=array();
//validar nombre
if(!empty($nombre)&& !is_numeric($nombre)&& !preg_match("/[0-9]/",$nombre)){
$nombre_valid=true;
}else{
$errores['name']='Nombre no valido';
$nombre_valid=false;
}
if (count($errores==0)) {
   $sql="INSERT INTO categorias VALUES(NULL,'$nombre');";
   $categorias=mysqli_query($db,$sql);
}
header("Location:../index.php");
?>