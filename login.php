<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Iniciar Sesion</title>
        <link rel="stylesheet" href="login.css">
        <script type="text/javascript" language="Javascript" src="./js/funcionad.js"></script>
    </head>

    <body>
        <div class="form">
            <div class="img">
                <img src="images/usuario.png" alt="login-icon" style="height: 7rem" />
            </div>
            <h1>INICIO DE SESION</h1>
            <form name="form" method="post" action="verifica.php" >
                <div class="user">
                    <input type="text" name="user" required />
                    <label>Cedula</label>
                </div>
                <div class="user">
                    <input type="password" name="passw" required />
                    <label>Contraseña</label>
                </div>
                <div class="recovery">
                    <a href="olvidar.php">¿Olvido su contraseña?</a>
                </div>

                <input type="submit" value="Iniciar">
                
            </form>
        </div>
    </body>
</html>