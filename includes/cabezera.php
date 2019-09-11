<?php require_once 'conexion.php'?>
<?php require_once 'helpers.php' ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <link rel="icon" type="assets/png" href="./assets/img/favicon32.png" sizes="32x32" />
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Blog Medieval</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" type="text/css" href="./assets/css/mystyles.css" />

</head>

<body>
    <!--Cabecera-->
    <header id="header">
        <div id='logo'>
            <a href="index.php">
                <h1>Blog Medieval</h1>
            </a>
        </div>

        <!--Menu-->
       
        <nav id="nav">

            <ul id='' clas=''>
                <li>
                    <a href="index.php">Inicio 1</a>
                </li>
                <?php 
                    $categorias=conseguirCategorias($db);
                 
                    if(!empty($categorias)): 
                    while ($result = mysqli_fetch_assoc($categorias)):
                 ?>
                <li>
                    <a href="categoria.php?id=<?=$result['id']?>"><?=$result['nombre'] ?></a>
                </li>
                    <?php 
                
                         endwhile;
                    endif;
                ?>
                    <li>
                    <a href="index.php">Sobre mi</a>
                </li>
                <li>
                    <a href="index.php">Contacto</a>
                </li>
            </ul>


        </nav>
        <div class="clearfix"></div>
    </header>
    <section id='container'>