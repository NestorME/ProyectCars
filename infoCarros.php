<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="styles/MyStyle.css">
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="font-awesome-4.6.1/css/font-awesome.min.css">

</head>
  <body>
    <?php
    $car =$_GET['car'];
    $idname="";
    $idname =$_GET['idname'];
    $hostname ="localhost";
    $database = "b33_20671515_agencia";
    $username = "root";
    $password = "";

    $conexion = mysql_connect($hostname,$username,$password);
     mysql_select_db($database,$conexion)OR DIE ("Error: No es posible establecer la conexión");

     $query = "select titulo from cars where id = ".$car;
     $Tileresult = mysql_result(mysql_query($query,$conexion),0);

     $query = "select linkvideo from cars where id = ".$car;
     $videoresult = mysql_result(mysql_query($query,$conexion),0);

     $query = "select tipo from cars where id = ".$car;
     $Tiporesult = mysql_result(mysql_query($query,$conexion),0);

     $query = "select fotoppal from cars where id = ".$car;
     $fotoppal = mysql_result(mysql_query($query,$conexion),0);

     mysql_close($conexion);

     ?>
    <div >
      <br>
         <div style="margin-left:15px; background-image: url(cars/<?php echo $fotoppal;?> );background-repeat: no-repeat;background-size:cover; width:950px; height:450px;padding: 15px;">
           <div style="color: white">
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <a id="barra" href="Autos.php?idname=<?php echo $idname;?>" style="color:white;hover-color:red"><i class="fa fa-home" aria-hidden="true"></i></a> << <a id="barra" href="infoCarros.php?car=<?php echo $car."&idname=".$idname ?>" style="color:white;hover:color:read"><?php echo $Tiporesult?></a>
              </div>
           <h1 style="color: white;"><?php echo $Tileresult ?></h1>
           <a href="compra.php?car=<?php echo $car.'&page='.$Tiporesult.'&idname='.$idname; ?>" target="_self" class="button2" >&nbsp;&nbsp;<i class="fa fa-usd" aria-hidden="true"></i> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Comprar</a>
           <a href="pruebas/prueba.php?car=<?php echo $car.'&page='.$Tiporesult.'&idname='.$idname; ?>" target="_self" class="button4" >&nbsp;&nbsp;<i class="fa  fa-car" aria-hidden="true"></i> Prueba manejo</a>

           <div  class="slider1">
             <ul>
            <li><a id="barra2" href="descripcion/descripcion.php?car=<?php echo $car?>" target="Iframe2"> <h2 ><i class="fa fa-align-justify fa-0x" aria-hidden="true"></i> Reseña</h2></a> </li>
             <li ><a id="barra2" href="<?php echo $videoresult?>" target="Iframe2"><h2 ><i class="fa fa-video-camera" aria-hidden="true"></i> Video</h2></a> </li>
             <li><a id="barra2" href="FotosPage/fotos.php?car=<?php echo $car?>" target="Iframe2"> <h2><i class="fa fa-camera" aria-hidden="true"></i> Fotos</h2></a> </li>
           </ul>
            </div>
         </div>
         <br>
          <div style="margin-left:15px">
          <iframe width="744" height="370" src="descripcion/descripcion.php?car=<?php echo $car?>" name="Iframe2" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>
  </body>
  </html>
