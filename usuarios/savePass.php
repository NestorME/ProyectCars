<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <?php
    $name = "";
    $name =$_GET['usuario'];
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $idname = $_GET["idname"];
      $contra = $_POST["contra"];
      $correo = $_GET["user"];

       if($contra == ""){
            echo "<!DOCTYPE html>
            <html>

            <head>
              <link rel='stylesheet' type='text/css' href='../styles/MyStyle.css'>
              <link href='https://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
              <link rel='stylesheet' href='font-awesome-4.6.1/css/font-awesome.min.css'>


            </head>
            <body>
            <div style='position:
            absolute;top:100px;font-size:50px;'>
            Porfavor verifica llenar todos los campos
            <br> de tus datos personales  </div><br>
            </body>
            </html>";
          }else{
                                $hostname ="localhost";
                                $database = "b33_20671515_agencia";
                                $username = "root";
                                $password = "";

                                $conexion = mysql_connect($hostname,$username,$password);
                                mysql_select_db($database,$conexion)OR DIE ("Error: No es posible establecer la conexión");
                                $query = "UPDATE usuarios SET password='$contra' where id='$idname'";

                                $retval=mysql_query($query,$conexion);
                                if(! $retval ) {
                              die('Could not update data: ' . mysql_error());
                               }
                                header('Location: ../index.php?usuario='.$correo);
                                mysql_close($conexion);


    }
  }
     ?>
  </body>
  </html>
