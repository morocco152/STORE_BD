<?php
    $usuario = $_POST['email'];
    $contraseña = $_POST['password'];

    session_start();
    $_SESSION['email']=$usuario;

    include('operation/db/database.php');

    $consulta = "SELECT * FROM usuarios where usuario = '$usuario' and contraseña = '$contraseña' ";
    $resultado = mysqli_query($coon,$consulta);

    $filas = mysqli_fetch_array($resultado);

    if ($filas['id_cargo']==1){
        $_SESSION['usuario']=$usuario;
        header('location:index1.php');
    }else if($filas['id_cargo']==2){
        $_SESSION['usuario']=$usuario;
        header('location:home.php');
    }
    else{
        ?>
        <?php
        include('login.php');
        ?>
        <h1 class = "bad">ERROR</h1>
        <?php
    }
    mysqli_free_result($resultado);
    mysqli_close($coon);