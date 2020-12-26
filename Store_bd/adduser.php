<?php
    include('operation/db/database.php');
    if(!empty($_POST['nombre'] && $_POST['email'] && $_POST['password'])){
        $name = $_POST['nombre'];
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $id = 2;
        $query = mysqli_query($coon,"insert into usuarios(nombre,usuario,contraseña,id_cargo) values ('$name','$email','$pass','$id')");

        if($query){
            header('location: login.php');
        }else{
            echo "error";
        }
    }
?>