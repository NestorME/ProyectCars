<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../font-awesome-4.6.1/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="../styles/MyStyle.css">
    <title>Password</title>
  </head>
  <?php
  $idname = $_GET["idname"];
  $correo = $_GET["user"];
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
           <h2 style="color:#0052cc">1. Cambiar password</h2>
            <div>
              <form action="savePass.php?idname=<?php echo $idname."&user=".$correo;?>" method="post">
                <div style="color:gray;">
                    <br>
                    <span >Nueva Contraseña:</span>
                    <input  style="margin-left: 80px;" type="password" name="contra" >
                    <span >Repetir Contraseña:</span>
                    <input  style="margin-left: 80px;" type="password" name="recontra" >
                      </form>
                      <input type="submit" name="submit" value="cambiar"class="button2"
                     style="position:absolute;top:100px;margin-left:100px;text-align:center;">
                      <br>
           </div>
          </div>
         </div>
  </body>
<?php } ?>
</html>
