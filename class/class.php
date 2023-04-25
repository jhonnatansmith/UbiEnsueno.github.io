<!DOCTYPE html>
<html lang="es">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">-->
        <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="./sw/dist/sweetalert2.min.css">
        <script type="text/javascript" language="Javascript" src="./js/funcionad.js"></script>
    
        <title>CRUD</title>
    </head>
    
    <body>
        <?php
            class conectar{
                public static function conec(){
                    $host="localhost";
                    $user="root";
                    $pass="";
                    $db_name="UbiEnsueño";
                    //CONECTARNOS A LA BD
                    $link=mysqli_connect($host,$user,$pass)
                    or die("ERROR al conectar con la BD".mysqli_error($link));
                    //SELECCIONAR LA BD
                    mysqli_select_db($link,$db_name)
                    or die("ERROR al seleccionar la BD ".mysqli_error($link));
                    return $link;
                }
            }

            class usuarios{
                private $user;

                public function __construct(){
                    $this->user = array();
                }
                
                public function insertuser($id,$name,$tel,$em,$pass){
                    $sql="insert into usuario values ('$id','$name','$tel','$em','$pass')";
                    $res=mysqli_query(Conectar::conec(),$sql);
                    echo '
                    <script>
                        alert(" Registro exitoso ");
                        window.location = "index.php";
                    </script>
                    ';
                }

                public function  deleteuser($id){
                    $sql="delete from usuario where id = '$id'";
                    $res=mysqli_query(conectar::conec(),$sql);
                    if ($res == 1 ){
                        echo '
                        <script>
                            alert("Se elimino el registro");
                            window.location = "principal.php";
                        </script>
                        ';
                    } else {
                        echo '
                        <script>
                            alert ("No hay datos que coincidan en la BD")
                            window.location = "eliminar.php";
                        </script>
                        ';
                    }
                    
                }
            }
        ?>
    </body>
</html>