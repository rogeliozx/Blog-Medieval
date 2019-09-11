<?php 
include_once 'includes/conexion.php';

//rocoger datos del formulario
if($_POST){
    $email=mysqli_real_escape_string ($db,trim($_POST["email"]));
    $password=$_POST['password'];
    
    $sql="SELECT * from usuarios WHERE email='$email'";
    $login=mysqli_query($db,$sql);
    
    if ($login && mysqli_num_rows($login)==1) {
        $usuario=mysqli_fetch_assoc($login);
      
        $verify= password_verify($password,$usuario['password']);

        if($verify){
            $_SESSION['usuario']=$usuario;
            if(isset( $_SESSION['Error_login'])){
                unset($_SESSION['Error_login']);
            }
        }else{
            $_SESSION['Error_login']='Caballero no registrado';
        }
       
       
    }else{
        $_SESSION['Error_login']='Caballero no registrado';
    }
   
}
header('Location:index.php');



//redirigir al index

?>