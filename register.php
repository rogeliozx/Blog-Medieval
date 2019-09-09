<?php 

if(isset($_POST)){
   require_once 'includes/conexion.php';
   if(!isset($_SESSION)){
      session_start();
   }
  

    $nombre=isset($_POST["name"]) ? mysqli_real_escape_string ($db,$_POST["name"]):false;
    $apellidos=isset($_POST["lastname"]) ?mysqli_real_escape_string ($db, $_POST["lastname"]):false;
    $email=isset($_POST["email"]) ? mysqli_real_escape_string ($db,trim($_POST["email"])):false;
    $password=isset($_POST["password"]) ? mysqli_real_escape_string ($db,$_POST["password"]):false;
    //array de errores
    $errores=array();
    //validar nombre
if(!empty($nombre)&& !is_numeric($nombre)&& !preg_match("/[0-9]/",$nombre)){
   $nombre_valid=true;
}else{
   $errores['name']='Nombre no valido';
   $nombre_valid=false;
}
//validar apellidos
if(!empty($apellidos)&& !is_numeric($apellidos)&& !preg_match("/[0-9]/",$apellidos)){
    $apellidos_valid=true;
 }else{
    $errores['lastname']='apellidos no valido';
    $apellidos_valid=false;
 }
 //Validando email
 if(!empty($email)&& filter_var($email,FILTER_VALIDATE_EMAIL)){
    $email_valid=true;
 }else{
    $errores['email']='email no valido';
    $email_valid=false;
 }
 //Validando contrasena
 if(!empty($password)){
   $password_valid=true;
}else{
   $errores['password']='password no valido';
   $password_valid=false;
}
$guardar_usuario=false;
if (count($errores)==0) {
//cifrar la contraseña
$password_segura=password_hash($password,PASSWORD_BCRYPT,['cost'=>4]);
//insert bd
$sql="INSERT INTO usuarios VALUES(null,'$nombre','$apellidos','$email','$password_segura' ,CURDATE())";

$guardar=mysqli_query($db,$sql);

   # insertar usuarios en base de datos
   $guardar_usuario=true;
   if ($guardar) {
     $_SESSION['completado']='El registro se a Completado con exito';
   }else {
      $_SESSION['errores']['general']='Fallo al guardar el usuario!';
   }
}else {
 $_SESSION['errores']=$errores;
 

}

}
header('Location:index.php');
?>