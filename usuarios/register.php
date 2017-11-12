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
              <form action="saveUser.php" method="post">
                <div style="color:gray;">

                    <br>
                  <span >Nombre(s):</span>
                  <input style="margin-left: 50px;" type="text" name="nombres">
                  <br>
                  <br>
                  <span >Apellidos(s):</span>
                  <input style="margin-left: 38px;" type="text" name="apellidos">
                  <br>
                  <br>
                  <span >Domicilio:</span>
                  <input style="margin-left: 55px;" type="text" name="domicilio" >
                  <br>
                  <br>
                  <span >Telefono:</span>
                  <input style="margin-left: 63px;" type="text" name="telefono">
                  <br>
                  <br>
                  <span >Fecha de Nac:</span>
                  <input style="margin-left: 33px;" type="date" name="date" value="2014-02-09">
                  <br>
                  <br>
                  <span >Correo:</span>
                  <input  style="margin-left: 80px;" type="email" name="correo" >
                  <span >Contraseña:</span>
                  <input  style="margin-left: 80px;" type="password" name="contra" >
                  <span >Repetir Contraseña:</span>
                  <input  style="margin-left: 80px;" type="password" name="recontra" >
                    </form>
                    <input type="submit" name="submit" value="Registrarme"class="button2"
                   style="position:absolute;top:400px;margin-left:100px;text-align:center;">
                    <br>
           </div>
          </div>
         </div>
  </body>
</html>
