<?php
header("Last-Modified: " . gmdate("D, d M Y H:i ") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

$nombre = $contra = $id="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nombre = $_POST["correo"];
  $contra = $_POST["contra"];
  if($nombre=="" || $contra==""){
        echo "<!DOCTYPE html>
        <html>

        <head>
          <link rel='stylesheet' type='text/css' href='http://localhost/ProyectoCine/MyStyle.css'>
          <link href='https://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
          <link rel='stylesheet' href='font-awesome-4.6.1/css/font-awesome.min.css'>


        </head>
        <body>
        <div style='position:
        absolute;top:100px;font-size:50px;'>
        Porfavor verifica llenar todos los campos
          </div><br>
        </body>
        </html>";
      }else{
                            $hostname ="localhost";
                            $database = "b33_20671515_agencia";
                            $username = "root";
                            $password = "";

                            $conexion = mysql_connect($hostname,$username,$password);
                            mysql_select_db($database,$conexion)OR DIE ("Error: No es posible establecer la conexión");

                            $query = "select id from usuarios where mail = '$nombre' and password = '$contra'";

                             $id = mysql_result(mysql_query($query,$conexion),0);

                            mysql_close($conexion);
                        if($id){
                           header('Location: ../index.php?usuario='.$nombre);
                              }else {
                              echo $id;
                            echo "<!DOCTYPE html>
                            <html>

                            <head>
                              <link rel='stylesheet' type='text/css' href='http://localhost/ProyectoCine/MyStyle.css'>
                              <link href='https://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
                              <link rel='stylesheet' href='font-awesome-4.6.1/css/font-awesome.min.css'>


                            </head>
                            <body>
                            <div style='position:
                            absolute;top:100px;font-size:50px;'>
                            usuario no encontrado
                              </div><br>
                            </body>
                            </html>";

                              }

                          }

}
?>
