
<?php require_once 'includes/redireccion.php'?>

<?php require_once 'includes/cabezera.php' ?>

    <!--Aside-->
<?php require_once 'includes/aside.php' ?>
<section id='main' class=''>
        <h2>Postule una aventura caballero 🗡️</h2>
       <p>Cree una nueva aventura caballero para crear nuevas misiones!</p>
       <br/>
        <form action="./includes/guardarCategoria.php" method="POST">
            <label for="name">Tipo aventura nueva!</label>
                <input type="text" name="name" />
                <input type="submit" value="Guarde la aventura"/>

        </form>
    </section>
    <!--fin Caja principal-->
   
<!--Pie de pagina-->
<?php require_once 'includes/footer.php' ?>
</body>
