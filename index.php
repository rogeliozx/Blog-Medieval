<?php require_once 'includes/cabezera.php' ?>

    <!--Aside-->
<?php require_once 'includes/aside.php' ?>

    <!--Caja principal-->
    <section id='main' class=''>
        <h2>Misiones disponibles</h2>
        <?php 
        $entradas=conseguirEntradas($db);
       
    
        if(!empty($entradas)):
            while($entrada=mysqli_fetch_assoc($entradas)):

        ?>
        <article class="entrada">
            <a href="#">
                <h3><?= $entrada["titulo"]?></h3>
                <h5><?= $entrada["categoria"] .' | '.$entrada["fecha"] ?></h5>
                <p>
                  <?=substr($entrada['descripcion'],0,100).'...' ?>  
                </p>
            </a>
        </article>

        <?php 
        endwhile;
        endif;?>
        
        <section id="all"><a href="#">Ver todas las misiones</a></section>
    </section>
    <!--fin Caja principal-->
   
<!--Pie de pagina-->
<?php require_once 'includes/footer.php' ?>
</body>

</html>