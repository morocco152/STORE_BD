<?php
    session_start();
    $usuario=$_SESSION['usuario'];
    include('operation/db/database.php');
    $result = mysqli_query($coon,'select * from productos');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <title> Bienvenido a la tienda </title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Archivo&display=swap" rel="stylesheet">
        <link rel = "stylesheet" href = "assets/css/home.css">
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
    </head>
    <body>
    <header>
        <strong><a href = "home.php" > MOTORS</a></strong>
        <a href = "home.php" ><img src = "assets/css/imagenes/home.png"/></a>
        <a href = "carrito.php" ><img src = "assets/css/imagenes/carrito.png"/> </a>
        <a href = "logout.php" ><img src = "assets/css/imagenes/exit.png"/></a>
        <a href = "#" >Hola <?php echo $usuario ?></a>
    </header>
        <div id="wrapper">
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <strong><li class="sidebar-brand"><a href="home.php">HOME</a></li></strong>
                <strong><li><a href="#">LINEALES</a></li></strong>
                <strong><li><a href="#">CUATRIMOTOS</a></li></strong>
            </ul>
        </div>
        <div id="page-content-wrapper">
            <div class="page-content">
                <div class="container">
                    <div class="row">
                        <?php foreach($result as $row){ ?>
                            <div class="col-md-3">
                                <div class = "small-container">
                                    <h2> Pila <?php echo $row['id_item']?></h2>
                                    <div class = "row">
                                        <div class = "col-12">
                                            <img src="moto.png" width="100%">
                                            <h4><?php echo $row['nombre_producto']?></h4>
                                            <p>Precio $ <?php echo $row['precio_u']?></p>
                                            <a class = "btn btn-primary">Comprar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php }?>    
                    </div>
                </div>
            </div>
        </div>
        </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    </body>
</html>
