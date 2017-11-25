<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../font-awesome-4.6.1/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="../styles/MyStyle.css">
    <title>Editar</title>
  </head>
  <?php
  $idname = $_GET["idname"];
  $hostname ="localhost";
  $database = "b33_20671515_agencia";
  $username = "root";
  $password = "";
  $conexion = mysql_connect($hostname,$username,$password);
  mysql_select_db($database,$conexion)OR DIE ("Error: No es posible establecer la conexión");

  $query = "select * from usuarios where id = '$idname'";

   $data = mysql_query($query,$conexion);
   while($row=mysql_fetch_row($data))
          {
   ?>
  <body>
    <div style="margin-left:50px">
           <h2 style="color:#0052cc">1. Edita tu informacion</h2>
            <div>
              <form action="saveEdUser.php?idname=<?php echo $idname;?>" method="post">
                <div style="color:gray;">

                    <br>
                  <span >Domicilio:</span>
                  <input style="margin-left: 55px;" type="text" name="domicilio" value="<?php echo $row[3]?>">
                  <br>
                  <br>
                  <span >Telefono:</span>
                  <input style="margin-left: 63px;" type="text" name="telefono"  value="<?php echo $row[4]?>">
                  <br>
                  <br>
                  <span >Correo:</span>
                  <input  style="margin-left: 80px;" type="email" name="correo"  value="<?php echo $row[6]?>">
                    </form>
                    <input type="submit" name="submit" value="Guardar"class="button5"
                   style="position:absolute;top:200px;margin-left:100px;text-align:center;">
                    <br>
           </div>
          </div>
         </div>
  </body>
<?php } ?>
</html>
