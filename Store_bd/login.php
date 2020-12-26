<DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <title>LOGIN</title>
        <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@600&display=swap" rel="stylesheet">
        <link rel = "stylesheet" href = "assets/css/login.css">
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
    </head>
    <body>
    <header>
        <strong><a href = "index.php" > MOTORS </a></strong>
        <a href = "login.php" ><img src = "assets/css/imagenes/ususario.png"/></a>
        <a href = "signup.php" ><img src = "assets/css/imagenes/signup.png"/></a>
    </header>
            <form action = "validacion.php" method = "post">
            <h1>LOGIN</h1>
            <input type = "text" name = "email" placeholder = "email" require >
            <input type = "password" name = "password" placeholder = "password" require >
            <input type = "submit" value = "ENTER">
    </body>
</html>