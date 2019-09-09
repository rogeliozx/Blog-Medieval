<?php 

function mostrarError($errores, $campo){
 
    $alerta='';
  
    if (isset($errores[$campo])&&!empty($campo)) {
        # code...
return $alerta='<div  class="alerta alerta-error">'.$errores[$campo].'</div>';
    }else{
        return $alerta;
    }
    # code...
}
function borrarErrores(){
    $delete=false;
    $_SESSION['completado']=null;
    $_SESSION['errores']=null;
    if ($_SESSION['errores']) {
        $_SESSION['errores']=null;
        $delete=session_unset();
    }
    
    

   
   if ($_SESSION['completado']) {
    $_SESSION['completado']=null;
    session_unset( );
   }
   else {
    return  $delete;
   }
  
   return  $delete; 
}

?>