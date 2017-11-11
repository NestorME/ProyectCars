<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="http://localhost/ProyectoCine/MyStyle.css">
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="font-awesome-4.6.1/css/font-awesome.min.css">
</head>
  <body style="text-align:left;">
    <?php
    $car =$_GET['car'];
    $hostname ="localhost";
    $database = "b33_20671515_agencia";
    $username = "root";
    $password = "";

    $conexion = mysql_connect($hostname,$username,$password);
     mysql_select_db($database,$conexion)OR DIE ("Error: No es posible establecer la conexión");

     $query = "select descripcion from cars where id = ".$car;
     $descresult = mysql_result(mysql_query($query,$conexion),0);

     mysql_close($conexion);

     ?>
    <span >
      <?php echo $descresult  ?>
    </span>
  </body>
      </html>
