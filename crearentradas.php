
<?php require_once 'includes/redireccion.php'?>

<?php require_once 'includes/cabezera.php' ?>

    <!--Aside-->
<?php require_once 'includes/aside.php' ?>
<section id='main' class=''>
        <h2>Postule una mision caballero 🔍</h2>
       <p>Cree una nueva mision caballero!</p>
       <br/>
        <form action="./includes/guardarEntrada.php" method="POST">
            <label for="name">Misión Nueva!</label>
                <input type="text" name="titulo" />
                
                <label for="description">Descripcion de la mision</label>
                <input type="text" name="description" />

                <label for="categoria">Tipo Aventura</label>
                <select name="categoria">
                <?php $categorias=conseguirCategorias($db);
                while($categoria=mysqli_fetch_assoc($categorias)):?>
                </select>    
                <input type="submit" value="Guarde la Misión"/>

        </form>
    </section>
    <!--fin Caja principal-->
   
<!--Pie de pagina-->
<?php require_once 'includes/footer.php' ?>
</body>
