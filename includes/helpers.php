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
function conseguirCategorias($conexion){
    $sql="SELECT * FROM categorias ORDER BY id ASC";
   $categorias= mysqli_query($conexion,$sql);
   $result=false;
   if ($categorias && mysqli_num_rows($categorias)>=1) {
    $result=$categorias;
   }
   return $result;
}
function conseguirEntradas($conexion){
    
   
    $sql='SELECT e.*,c.nombre AS "categoria" FROM entradas AS e
    INNER JOIN categorias AS c ON e.categoria_id=c.id 
    ORDER BY e.id DESC LIMIT 4';
    $entradas=mysqli_query($conexion,$sql);
    
    $result=false;
    
    if ($entradas && mysqli_num_rows($entradas)>=1) {
     $result=$entradas;
    }
    
    return $result;
 
}

?>