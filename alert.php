<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body onload='Alert();'>
    <?php
    $name = "";
    $name =$_GET['usuario'];
     ?>
  <script>

  function Alert() {
      var password = prompt("Por favor ingrese su contraseña:", "");
      if (password == null || password == "") {
          location.href ="index.php?usuario=<?php echo $name?>";
      } else {
          location.href ="ajustes.php?usuario=<?php echo $name?>&password="+password;
      }
  }
  </script>
  </body>
  </html>
