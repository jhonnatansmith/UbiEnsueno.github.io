<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registarse</title>
        <link rel="stylesheet" href="registro.css">
        <script type="text/javascript" language="Javascript" src="./js/funcionad.js"></script>
    </head>

    <body onload="limpiar();">
        <div class="form">
            <div class="img">
                <img src="images/usuario.png" alt="login-icon" style="height: 7rem" />
            </div>
            <h1>REGISTRO</h1>
            <form name="form" method="post" action="insertar.php" >
                <div class="user">
                    <input type="text" name="user" required />
                    <label>Cedula</label>
                </div>
                <div class="user">
                    <input type="text" name="name" required />
                    <label>Nombre</label>
                </div>
                <div class="user">
                    <input type="text" name="tel" required />
                    <label>Telefono</label>
                </div>
                <div class="user">
                    <input type="email" name="em" required />
                    <label>Correo</label>
                </div>
                <div class="user">
                    <input type="password" name="passw" required />
                    <label>Contraseña</label>
                </div>
                <input type="submit" value="Registrar">
            </form>
        </div>
    </body>
</html>