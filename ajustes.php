<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome-4.6.1/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="styles/MyStyle.css">
      <link rel="stylesheet" type="text/css" href="styles/Style.css">
    <title>Usuario</title>
  </head>
  <?php
  $mail = "";
  $mail =$_GET['usuario'];
  $pass = $_GET['password'];
  $hostname ="localhost";
  $database = "b33_20671515_agencia";
  $username = "root";
  $password = "";

  $conexion = mysql_connect($hostname,$username,$password);
  mysql_select_db($database,$conexion)OR DIE ("Error: No es posible establecer la conexión");

  $query = "select id from usuarios where mail = '$mail' and password = '$pass'";

   $id = mysql_result(mysql_query($query,$conexion),0);

  mysql_close($conexion);
if($id){
   ?>

  <body>
  <div class="tab">
    <div>
    <h1 class="perfil">Mi Perfil</h1>
   <img src="fondoslogos/logo.png" width="30%">
   </div>
    <button class="tablinks" onclick="openCity(event, 'Usuario')" id="defaultOpen"><i class="fa  fa-user" aria-hidden="true"></i> Usuario</button>
    <button class="tablinks" onclick="openCity(event, 'Prueba')"><i class="fa  fa-car" aria-hidden="true"></i> Prueba de manejo</button>
    <button class="tablinks" onclick="openCity(event, 'Pagos')"><i class="fa  fa-money" aria-hidden="true"></i> Mis Pagos</button>
  </div>

  <div id="Usuario" class="tabcontent">
    <?php
    $conexion = mysql_connect($hostname,$username,$password);
    mysql_select_db($database,$conexion)OR DIE ("Error: No es posible establecer la conexión");

    $query = "select * from usuarios where id = '$id'";

     $data = mysql_query($query,$conexion);
     while($row=mysql_fetch_row($data))
            {
    echo "<div class='divuserinfo'>
      <br>
      <br>
      <h2 style='color:#0052cc;margin-left:50px;'>1. Bienvenido $row[1] $row[2]</h2>
      <br>
      <h3>Domicilio:&nbsp;". $row[3]."</h3>
      <h3>Telefono:&nbsp;". $row[4]."</h3>
      <h3>Correo:&nbsp;". $row[6]."</h3>

     <form action='./usuarios/editUser.php?idname=$row[0]' method='post'>

      <input type='submit' name='submit' value='Editar' class='button2'
     style='position:absolute;top:300px;margin-left:200px;text-align:center;'>
     </form>

     <form action='./usuarios/changePass.php?idname=$row[0]&user=$row[6]' method='post'>

      <input type='submit' name='submit' value='Cambiar Contraseña' class='button2'
     style='position:absolute;top:300px;margin-left:400px;text-align:center;'>
      <br>
      </form>
      </div>";
    }
    mysql_close($conexion);
     ?>
  </div>

  <div id="Prueba" class="tabcontent">
    <?php
    $conexion = mysql_connect($hostname,$username,$password);
    mysql_select_db($database,$conexion)OR DIE ("Error: No es posible establecer la conexión");

    $query = "select * from pruebas where idUser = '$id'";

     $data = mysql_query($query,$conexion);
     while($row=mysql_fetch_row($data))
            {
    echo "<div class='divuserinfo'>
      <br>
      <br>
      <h2 style='color:#0052cc;margin-left:50px;'>1. Tus pruebas de manejo</h2>
      <br>
      <h3>Domicilio:&nbsp;". $row[3]."</h3>
      <h3>Telefono:&nbsp;". $row[4]."</h3>
      </div>";
    }
    mysql_close($conexion);
     ?>
  </div>

  <div id="Pagos" class="tabcontent">
    <?php
    $conexion = mysql_connect($hostname,$username,$password);
    mysql_select_db($database,$conexion)OR DIE ("Error: No es posible establecer la conexión");

    $query = "select * from pagos where idUser = '$id'";

     $data = mysql_query($query,$conexion);
     while($row=mysql_fetch_row($data))
            {
    echo "<div class='divuserinfo'>
      <br>
      <br>
      <h2 style='color:#0052cc;margin-left:50px;'>1. Tus Pagos</h2>
      <br>
      <h3>Domicilio:&nbsp;". $row[3]."</h3>
      <h3>Telefono:&nbsp;". $row[4]."</h3>
      </div>";
    }
    mysql_close($conexion);
     ?>
  </div>

  <script>
  function openCity(evt, cityName) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
          tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
          tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
      document.getElementById(cityName).style.display = "block";
      evt.currentTarget.className += " active";
  }

  // Get the element with id="defaultOpen" and click on it
  document.getElementById("defaultOpen").click();


  </script>

  </body>
<?php  }else{?>
  <body onload='Alert();'>
  <script>
  function Alert() {
     alert("contraseña incorrecta");
        location.href ="index.php?usuario=<?php echo $mail?>";
  }
  </script>
  </body>
  <?php } ?>
  </html>
