<?php
    include('operation/db/database.php');
    if(!empty($_POST['nombre_producto'] && $_POST['stock'] && $_POST['descripcion_producto'] && $_POST['costo_u'] && $_POST['precio_u'] && $_POST['color'] && $_POST['num_cilindros'] && $_POST['transmision'] && $_POST['num_pasajeros'] && $_POST['potencia'])){
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
        $query = mysqli_query($coon,"insert into productos(nombre_producto,stock,descripcion_producto,costo_u,precio_u,color,cilindros,transmision,pasajeros,Potencia) values ('$pro','$st','$des','$csu','$pru','$col','$ncil','$tran','$npas','$pot')");

        if($query){
            header('location: index1.php');
        }
    }
?>