<?php
header("Last-Modified: " . gmdate("D, d M Y H:i ") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

$idname =$passwd = $car="";
$numtar=$pay=$fechaven=$codtar=$page= "";

$car = $_GET['car'];
$page = $_GET['page'];
$idname = $_GET['idname'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $numtar = $_POST["numtar"];
  $fechaven = $_POST["date"];
  $passwd = $_POST["pass"];
  $pay = $_POST["pay"];
  $hostname ="localhost";
  $database = "b33_20671515_agencia";
  $username = "root";
  $password = "";

  $conexion = mysql_connect($hostname,$username,$password);
  mysql_select_db($database,$conexion)OR DIE ("Error: No es posible establecer la conexión");

  $query = "select id from usuarios where id = '$idname' and password = '$passwd'";

   $id = mysql_result(mysql_query($query,$conexion),0);

if($id){
  if ($numtar=="" || $fechaven=="" || $pay=="") {

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
                            Por favor ingrese los datos
                            <br> de su targeta de credito </div><br>
                            </body>
                            </html>";
                          }else{
                            $conexion = mysql_connect($hostname,$username,$password);
                            mysql_select_db($database,$conexion)OR DIE ("Error: No es posible establecer la conexión");


                            $query = "insert into compras(id,idauto,idUser,numtarj,fecha) values('','".$car."','".$idname."','".$numtar."','".date("Y/m/d")."');";

                            $idpay=mysql_query($query,$conexion);

                            $query = "insert into pagos(id,idUser,cantidad,fecha,idPay) values('','".$id."','".$pay."','".$fechaven."','".$idpay."');";

                            mysql_query($query,$conexion);
                            $query = "select * from usuarios where id = '$idname'";

                             $data = mysql_query($query,$conexion);
                             while($row=mysql_fetch_row($data))
                                    {


                            echo "<!DOCTYPE html>
                            <html>

                            <head>
                              <link rel='stylesheet' type='text/css' href='./styles/MyStyle.css'>
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

                                <h3>Nombre:&nbsp;".$row[1]."&nbsp;&nbsp;".$row[2]."</h3>
                                <h3>Domicilio:&nbsp;".$row[3]."</h3>
                                <h3>Telefono:&nbsp;".$row[4]."</h3>
                                <h3>Correo:&nbsp;".$row[6]."</h3>
                                <h3>Modelo:&nbsp;".$page."</h3>


                              </div>

                             <form action='Autos.php?idname=".$idname."' method='post'>

                              <input type='submit' name='submit' value='Aceptar' class='button2'
                             style='position:absolute;top:400px;margin-left:500px;text-align:center;'>
                              <br>
                              </form>
                            </div>
                            </body>
                            <script src='script/back.js'></script>
                            </html>";
                              }

                          }
}else{
  echo "<!DOCTYPE html>
  <html>

  <head>
    <link rel='stylesheet' type='text/css' href='./styles/MyStyle.css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
    <link rel='stylesheet' href='font-awesome-4.6.1/css/font-awesome.min.css'>


  </head>
  <body>
  <div style='position:
  absolute;top:100px;font-size:50px;'>
  Porfar inicie sesion
  <br> Antes de hacer una compra o verifique su contraseña </div><br>
  <form action='Autos.php?idname=".$idname."' method='post'>
   <input type='submit' name='submit' value='Aceptar' class='button2'
  style='position:absolute;top:400px;margin-left:500px;text-align:center;'>
  </body>
  <script src='script/back.js'></script>
  </html>";

}
  mysql_close($conexion);
}
 ?>
