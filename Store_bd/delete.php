<?php
    include('operation/db/database.php');
    $id = $_GET['id'];
    $query = mysqli_query($coon,"delete from productos where(id_item = '$id')");
    if($query){
        header('location:index1.php');
    }
?>