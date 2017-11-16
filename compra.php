<!DOCTYPE html>
<html>
<head>
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="font-awesome-4.6.1/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="styles/MyStyle.css">
</head>
  <body>
    <?php
$car = $_GET['car'];
$page = $_GET['page'];
$idname="";
$idname =$_GET['idname'];

$hostname ="localhost";
$database = "b33_20671515_agencia";
$username = "root";
$password = "";

$conexion = mysql_connect($hostname,$username,$password);
 mysql_select_db($database,$conexion)OR DIE ("Error: No es posible establecer la conexión");

 $query = "select precio from cars where id = ".$car;
 $precio = mysql_result(mysql_query($query,$conexion),0);

 mysql_close($conexion);

 ?>
    <div>
      <div>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <a id="barra" href="Autos.php" style="color:gray;">
        <i class="fa fa-home" aria-hidden="true"></i></a> <<
        <a id="barra" href="infoCarros.php?car=<?php echo $car.'&page='.$page;?> " style="color:gray;"><?php echo $page ?></a> <<
        <a id="barra" href="<?php echo $pagina ?>"style="color:#0052cc;">Pagar</a>
         </div>

         <div style=" position:absolute;  left: 1px;right: 1px;top:50px;">

           <h2 style="color:#0052cc">1. Precio</h2>

            <div>
              <form action="finalizarcompra.php?car=<?php echo $car.'&page='.$page.'&idname='.$idname; ?>" method="post">

              <div style="background-color:#e2e2e3;color:#555555;font-size: 17px;
                            height: 50px;line-height: 22px;padding: 11px 20px;
                              position: relative;margin-right:600px;">
                  <label>
                    <span >Sencillo</span>
                    <span > </span>
                    <span ><?php echo $precio ?> </span>
                  </label>

                </div>


                <div class="divSpan" style="background: #ff4d4d;color: #ffffff;font-size: 17px; height: 50px;
                              line-height: 22px;padding: 11px 20px;position: relative;margin-right:600px;">
                Total a pagar
                <span><?php echo $precio ?> </span>
                 <br>
                 <br>
                <div style="color:gray;">
                <h2 style="color:#0052cc">2. Ingrese los datos de su targeta</h2>
                  <br>
                    <span >Numero de Tarjeta:</span>
                    <input style="margin-left: 50px;" type="text" name="numtar">
                    <br>
                    <br>
                    <span >Fecha de dia de pago:</span>
                    <input style="margin-left: 33px;" type="date" name="date" value="2014-02-09">
                    <br>
                    <br>
                    <span > Cantidad de pago:</span>
                    <input style="margin-left: 34px;" type="text" name="pay"><br>
                    <br>
                    <br>
                    <h2 style="color:#0052cc">3. Ingrese la contraseña de su cuenta</h2>
                    <span > Ingrese contraseña:</span>
                    <input style="margin-left: 34px;" type="password" name="pass">

                    </form>
                    <input type="submit" name="submit" value="Siguiente"class="button2"
                   style="position:absolute;top:300px;margin-left:300px;text-align:center;">
                    <br>
                   </div>
              </div>
            </div>
         </div>

         </div>

  </body>
  </html>
