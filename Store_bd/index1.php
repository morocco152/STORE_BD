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
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel = "stylesheet" href = "assets/css/home.css">
        <title>CRUD</title>
        <style>
            .n{
                margin-top:100px;
                margin-left:50px;
            }
            .m{
                margin-top:0px;
                margin-left:200px;
            }
        </style>
    </head>
    <body>
    <header>
        <strong><a href = "index1.php" > MOTORS</a></strong>
        <a href = "index1.php" ><img src = "assets/css/imagenes/home.png"/></a>
        <a href = "#" ><img src = "assets/css/imagenes/reportes.png"/></a>
        <a href = "logout.php" ><img src = "assets/css/imagenes/exit.png"/></a>
        <a href = "#" >Hola <?php echo $usuario ?></a>
    </header>
    <div class = "container n ">
        <div class = "row"> 
            <div class = "col-lg-4">
                <form action="add.php" method = "post">
                    <h1><Strong>Motos</strong></h1>
                    <br>
                    <input type = "text" class = "form-control" placeholder = "producto" required name = "nombre_producto">
                    <br>
                    <input type = "number" class = "form-control" placeholder = "cantidad" required name = "stock">
                    <br>
                    <input type = "text" class = "form-control" placeholder = "descripcion" required name = "descripcion_producto">
                    <br>
                    <input type = "number" class = "form-control" placeholder = "costo_u" required name = "costo_u">
                    <br>
                    <input type = "number" class = "form-control" placeholder = "precio unitario" required name = "precio_u">
                    <br>
                    <input type = "text" class = "form-control" placeholder = "color" required name = "color">
                    <br>
                    <input type = "number" class = "form-control" placeholder = "Numero cilindros" required name = "num_cilindros">
                    <br>
                    <input type = "text" class = "form-control" placeholder = "transmision" required name = "transmision">
                    <br>
                    <input type = "number" class = "form-control" placeholder = "num_pasajeros" required name = "num_pasajeros">
                    <br>
                    <input type = "number" class = "form-control" placeholder = "potencia" required name = "potencia">
                    <br>
                    <input type = "submit" value = "agregar" class = "btn btn-primary">
            </div>
            <div class = "col-lg-8">
                <table class="table m">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Producto</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Costo</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Color</th>
                        <th scope="col">#Cilindros</th>
                        <th scope="col">Transmision</th>
                        <th scope="col">Pasajeros</th>
                        <th scope="col">Potencia</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($result as $row){ ?>  
                            <tr>
                            <td><?php echo $row['id_item'];?></td>
                            <td><?php echo $row['nombre_producto'];?></td>
                            <td><?php echo $row['stock'];?></td>
                            <td><?php echo $row['descripcion_producto'];?></td>
                            <td><?php echo $row['costo_u'];?></td>
                            <td><?php echo $row['precio_u'];?></td>
                            <td><?php echo $row['color'];?></td>
                            <td><?php echo $row['cilindros'];?></td>
                            <td><?php echo $row['transmision'];?></td>
                            <td><?php echo $row['pasajeros'];?></td>
                            <td><?php echo $row['Potencia'];?></td>
                            <td><a href = "edit.php?id=<?php echo $row['id_item'];?>" class = "btn btn-primary">Editar</a></td>
                            <td><a href = "delete.php?id=<?php echo $row['id_item']; ?>" class = "btn btn-danger">Eliminar</a></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    </body>
</html>