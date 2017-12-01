<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="../styles/MyStyle.css">
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="../font-awesome-4.6.1/css/font-awesome.min.css">

</head>

  <body>
    <?php
    $car =$_GET['car'];
    $hostname ="localhost";
    $database = "b33_20671515_agencia";
    $username = "root";
    $password = "";

    $conexion = mysql_connect($hostname,$username,$password);
     mysql_select_db($database,$conexion)OR DIE ("Error: No es posible establecer la conexión");

     $query = "select galeri1 from cars where id = ".$car;
     $galeri1 = mysql_fetch_array(mysql_query($query,$conexion),0);

     $query = "select galeri2 from cars where id = ".$car;
     $galeri2 = mysql_fetch_array(mysql_query($query,$conexion),0);

     $query = "select galeri3 from cars where id = ".$car;
     $galeri3 = mysql_fetch_array(mysql_query($query,$conexion),0);

     $query = "select galeri4 from cars where id = ".$car;
     $galeri4 = mysql_fetch_array(mysql_query($query,$conexion),0);

     $imagen1 = $galeri1[0];
     $imagen2 = $galeri2[0];
     $imagen3 = $galeri3[0];
     $imagen4 = $galeri4[0];
     ?>
      <img src="data:image/png;base64,<?php echo base64_encode( $imagen1 ); ?>" />
      <img src="data:image/png;base64,<?php echo base64_encode( $imagen2 ); ?>" />
      <img src="data:image/png;base64,<?php echo base64_encode( $imagen3 ); ?>" />
      <img src="data:image/png;base64,<?php echo base64_encode( $imagen4 ); ?>" />
  </body>
</html>
