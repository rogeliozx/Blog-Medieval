 <!--Barra lateral-->
<?php require_once 'helpers.php' ?>
 <aside id="sidebar">
 <?php if(isset($_SESSION['usuario'])): ?>
 <div id='usuario-login' class="block-aside">
 <h4>Bienvenido Caballero <?=$_SESSION['usuario']['nombre'].' '.$_SESSION['usuario']['apellidos']; ?> ⚔️🛡️</h4>
 </div>
<?php elseif (!isset($_SESSION['usuario'])): ?>
     <div id='login' class="block-aside">
         <h4>Login</h4>
         <form action="login.php" method="POST">
             <label for="email">Email</label>
             <input type="text" name="email" />

             <label for="password">Password</label>
             <input type="password" name="password" />

             <input type="submit" value="Login" />
         </form>
     </div>
     <?php endif;?>
     <div id='register' class="block-aside">
   
         <h4>Signup</h4>
         <?php if(isset($_SESSION['completado'])):?>
         <div class='alerta alerta-exito'>
         <h4><?= $_SESSION['completado'];?></h4>
         </div>  
<?php elseif(isset($_SESSION['errores']['general'])):?>
<div class='alerta alerta-error'>
         <h4><?=  $_SESSION['errores']['general'];?></h4>
         </div>   
<?php endif;?>
         <form action="register.php" method="POST">
             <label for="name">Name</label>
             <input type="text" name="name" />
                <?php echo isset($_SESSION['errores'])? mostrarError($_SESSION['errores'],'name'):'' ?>
             <label for="lastname">Last Name</label>
             <input type="text" name="lastname" />
             <?php echo isset($_SESSION['errores'])? mostrarError($_SESSION['errores'],'lastname'):'' ?>
             <label for="email">Email</label>
             <input type="email" name="email" />
             <?php echo isset($_SESSION['errores'])? mostrarError($_SESSION['errores'],'email'):'' ?>
             <label for="password">Password</label>
             <input type="password" name="password" />
             <?php echo isset($_SESSION['errores'])? mostrarError($_SESSION['errores'],'password'):'' ?>
             <input type="submit" name="submit" value="Signup" />
         </form>
         <?php borrarErrores(); ?>
     </div>
 </aside>