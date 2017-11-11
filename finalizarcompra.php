<?php
header("Last-Modified: " . gmdate("D, d M Y H:i ") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

$car = $_GET['car'];
$page = $_GET['page'];


$nombre = $apellido = $telefono =$domicilio = $car=$correo="";
$numtar=$fechaven=$codtar=$page= "";

$car = $_GET['car'];
$page = $_GET['page'];


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nombre = $_POST["nombres"];
  $apellido = $_POST["apellidos"];
  $domicilio = $_POST["domicilio"];
  $telefono = $_POST["telefono"];
  $correo = $_POST["correo"];
  $numtar = $_POST["numtar"];
  $fechaven = $_POST["fechavenc"];
  $codtar = $_POST["codtar"];
  $hostname ="localhost";
  $database = "b33_20671515_agencia";
  $username = "root";
  $password = "";

  $conexion = mysql_connect($hostname,$username,$password);
  mysql_select_db($database,$conexion)OR DIE ("Error: No es posible establecer la conexión");

  $query = "insert into compras(id,idauto,nombre,apellidos,domicilio,telefono,mail,numtarj) values('','".$car."','".$nombre."','".$apellido."','".$domicilio."','".$telefono."','".$correo."','".$numtar."');";
  mysql_query($query,$conexion);

  mysql_close($conexion);
}
if($nombre=="" || $apellido=="" || $apellido == "" || $telefono == "" || $correo == "")
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
      Porfavor verifica los campos
      <br> de tus datos personales  </div><br>
      </body>
      </html>";
                else if ($numtar=="" || $fechaven=="" || $codtar=="") {

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
                          Por favor ingrese los datos
                          <br> de su targeta de credito </div><br>
                          </body>
                          </html>";
                        }else{
                          echo "<!DOCTYPE html>
                          <html>

                          <head>
                            <link rel='stylesheet' type='text/css' href='styles/MyStyle.css'>
                            <link href='https://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
                            <link rel='stylesheet' href='font-awesome-4.6.1/css/font-awesome.min.css'>


                          </head>
                          <body onload='nobackbutton();'>
                          <div >
                            <br>
                            <br>
                            <h2 style='color:#0052cc;margin-left:50px;'>4. Tu compra ha sido Finalizada</h2>
                            <br>

                            <div style=' margin-left:300px; position:absolute;  left: 1px;right: 1px;top:100px;'>
                              <br>
                              <br>
                              <h3>Nombre:&nbsp;".$nombre."&nbsp;&nbsp;".$apellido."</h3>
                              <h3>Domicilio:&nbsp;".$domicilio."</h3>
                              <h3>Telefono:&nbsp;".$telefono."</h3>
                              <h3>Correo:&nbsp;".$correo."</h3>
                              <h3>Modelo:&nbsp;".$page."</h3>


                            </div>

                           <form action='Autos.php' method='post'>

                            <input type='submit' name='submit' value='Aceptar' class='button2'
                           style='position:absolute;top:400px;margin-left:500px;text-align:center;'>
                            <br>
                            </form>
                          </div>
                          </body>
                          <script src='script/back.js'></script>
                          </html>";

                        } ?>
