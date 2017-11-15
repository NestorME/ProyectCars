<?php
header("Last-Modified: " . gmdate("D, d M Y H:i ") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

$idname=$idcar= $fecha = $hora ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $idname =$_GET['idname'];
  $idcar = $_GET["car"];
  $fecha = $_POST["date"];
  $hora = $_POST["hora"];
if($idname != ""){
                            $hostname ="localhost";
                            $database = "b33_20671515_agencia";
                            $username = "root";
                            $password = "";

                            $conexion = mysql_connect($hostname,$username,$password);
                            mysql_select_db($database,$conexion)OR DIE ("Error: No es posible establecer la conexión");

                            $query = "insert into pruebas(id,idUser,fecha,hora,idAuto) values('','".$idname."','".$fecha."','".$hora."','".$idcar."');";
                            $id = mysql_query($query,$conexion);


                            mysql_close($conexion);

                            echo "<!DOCTYPE html>
                            <html>

                            <head>
                              <link rel='stylesheet' type='text/css' href='../styles/MyStyle.css'>
                              <link href='https://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
                              <link rel='stylesheet' href='../font-awesome-4.6.1/css/font-awesome.min.css'>


                            </head>
                            <body onload='nobackbutton();'>
                            <div >
                              <br>
                              <br>
                              <h2 style='color:#0052cc;margin-left:50px;'>2. Usuario Registrado inicia sesion con tu correo</h2>
                              <br>

                              <div style=' margin-left:100px; position:absolute;  left: 1px;right: 1px;top:100px;'>
                                <br>
                                <br>
                                <h3>Su cita ha sido guardad con exito uno de nuestros asesores se comunicara con usted</h3> <br>
                                <h3>Puede consultar la informacion en su perfil</h3>

                              </div>

                             <form action='../Autos.php?idname=$idname' method='post'>

                              <input type='submit' name='submit' value='Aceptar' class='button2'
                             style='position:absolute;top:400px;margin-left:500px;text-align:center;'>
                              <br>
                              </form>
                            </div>
                            </body>
                            <script src='../script/back.js'></script>
                            </html>";
                          }else{
                            echo "<!DOCTYPE html>
                            <html>

                            <head>
                              <link rel='stylesheet' type='text/css' href='../styles/MyStyle.css'>
                              <link href='https://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
                              <link rel='stylesheet' href='../font-awesome-4.6.1/css/font-awesome.min.css'>


                            </head>
                            <body>
                            <div style='position:
                            absolute;top:100px;font-size:50px;'>
                            Porfavor inicie sesion
                              </div><br>
                              <form action='../Autos.php?idname=.$idname.' method='post'>

                               <input type='submit' name='submit' value='Aceptar' class='button2'
                              style='position:absolute;top:400px;margin-left:500px;text-align:center;'>
                            </body>
                            </html>";

                          }

}
?>
