<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../font-awesome-4.6.1/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="../styles/MyStyle.css">
    <title>Registrarse</title>
  </head>
  <body>
    <div style="margin-left:50px">
           <h2 style="color:#0052cc">1. Registrate</h2>
            <div>
              <form action="finalizarcompra.php?car=<?php echo $car.'&page='.$page; ?>" method="post">
                <div style="color:gray;">

                    <br>
                  <span >Nombre(s):</span>
                  <input style="margin-left: 50px;" type="text" name="nombres"id="nombres">
                  <br>
                  <br>
                  <span >Apellidos(s):</span>
                  <input style="margin-left: 38px;" type="text" name="apellidos" id="apellidos">
                  <br>
                  <br>
                  <span >Domicilio:</span>
                  <input style="margin-left: 55px;" type="text" name="domicilio" id="domicilio">
                  <br>
                  <br>
                  <span >Telefono:</span>
                  <input style="margin-left: 63px;" type="text" name="telefono" id="Telefono">
                  <br>
                  <br>
                  <span >Fecha de Nac:</span>
                  <input style="margin-left: 33px;" type="date" id="date" value="2014-02-09">
                  <br>
                  <br>
                  <span >Correo:</span>
                  <input  style="margin-left: 80px;" type="email" name="correo" id="Correo">
                    </form>
                    <input type="submit" name="submit" value="Aceptar"class="button2"
                   style="position:absolute;top:400px;margin-left:100px;text-align:center;">
                    <br>
           </div>
          </div>
         </div>
  </body>
</html>
