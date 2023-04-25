<?php
session_start();
include('class.php');
class Login
{
    public function validar($user, $pass)
    {
        //Validar si el usuario existe o no
            $sql= "select * from usuario where id='$user' and contraseña='$pass'";
            $res = mysqli_query(Conectar::conec(), $sql);
            if (mysqli_num_rows($res) > 0){
                $row = mysqli_fetch_array($res);
                $_SESSION['usuario'] = $row ['id'];
                $_SESSION['name'] = $row ['nombre']; 
                echo "
                <script>
                    alert('Bienvenido $_SESSION[name]');
                    window.location = 'principal.php';
                </script>
                ";
            } else {
                echo '
                <script>
                    alert("Usuario no existe, por favor verifique los datos introducidos");
                    window.location = "login.php";
                </script>
                ';
        }
    }
}
?>