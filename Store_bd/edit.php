<?php
    include('operation/db/database.php');
    $id = $_GET['id'];
    $result = mysqli_query($coon,"select *from productos where id_item = '$id'");
    $row = mysqli_fetch_assoc($result);

    if($_SERVER['REQUEST_METHOD']=='POST'){
        $pro = $_POST['nombre_producto'];
        $st = $_POST['stock'];
        $des = $_POST['descripcion_producto'];
        $csu = $_POST['costo_u'];
        $pru = $_POST['precio_u'];
        $col = $_POST['color'];
        $ncil = $_POST['num_cilindros'];
        $tran = $_POST['transmision'];
        $npas = $_POST['num_pasajeros'];
        $pot = $_POST['potencia'];
        $result = mysqli_query($coon,"update productos set nombre_producto = '$pro', stock = '$st', descripcion_producto = '$des', costo_u = '$csu', precio_u = '$pru', color = '$col', cilindros = '$ncil', transmision = '$tran', pasajeros = '$npas', Potencia = '$pot' where id_item = '$id' ");
        
        if($result){
            header('location: index1.php');
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <title>CRUD</title>
        <style>
            .n{
                margin-top:100px;
            }
        </style>
    </head>
    <body>
    <div class = "container n">
        <div class = "row"> 
            <div class = "col-lg-3">
                <form action="" method = "post">
                    <h1><Strong>Motos</strong></h1>
                    <br>
                    <input type = "text" value = "<?php echo $row['nombre_producto']; ?>" class = "form-control" placeholder = "producto" required name = "nombre_producto">
                    <br>
                    <input type = "number" value = "<?php echo $row['stock']; ?>"  class = "form-control" placeholder = "cantidad" required name = "stock">
                    <br>
                    <input type = "text" value = "<?php echo $row['descripcion_producto']; ?>" class = "form-control" placeholder = "descripcion" required name = "descripcion_producto">
                    <br>
                    <input type = "number" value = "<?php echo $row['costo_u']; ?>" class = "form-control" placeholder = "costo_u" required name = "costo_u">
                    <br>
                    <input type = "number" value = "<?php echo $row['precio_u']; ?>" class = "form-control" placeholder = "precio unitario" required name = "precio_u">
                    <br>
                    <input type = "text"  value = "<?php echo $row['color']; ?>" class = "form-control" placeholder = "color" required name = "color">
                    <br>
                    <input type = "number" value = "<?php echo $row['cilindros']; ?>"  class = "form-control" placeholder = "Numero cilindros" required name = "num_cilindros">
                    <br>
                    <input type = "text" value = "<?php echo $row['transmision']; ?>" class = "form-control" placeholder = "transmision" required name = "transmision">
                    <br>
                    <input type = "number" value = "<?php echo $row['pasajeros']; ?>" class = "form-control" placeholder = "num_pasajeros" required name = "num_pasajeros">
                    <br>
                    <input type = "number" value = "<?php echo $row['Potencia']; ?>" class = "form-control" placeholder = "potencia" required name = "potencia">
                    <br>
                    <input type = "submit" value = "agregar" class = "btn btn-primary">
            </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    </body>
</html>