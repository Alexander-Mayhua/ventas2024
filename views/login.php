<?php

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./views/style.css">
</head>
<body id="body">
    <div id="contenedor">
        <div class="imagen-login">
            <img class="img" src="./views/plantilla/logo.jpg" alt="">
            <img class="img2" src="./views/plantilla/log.jpg " alt="">
            
        </div>
    <form class="login" method="post" action="login.php">
        <h1>Iniciar Sesión</h1>
        <img class="usuario" src="img/usuario.png" alt="" width="70px">
        
        <input class="imput" type="text" id="username" name="username" placeholder="NOMBRE USUARIO" required>

        
        <input class="imput" type="password" id="password" name="password" placeholder="CONTRASEÑA" required>

        <button class="boton" type="submit"> <a class="dropdown-item" href="<?php echo BASE_URL ?>inicio">ingresar</a></button>
    </form>
</div>
</body>
</html>
