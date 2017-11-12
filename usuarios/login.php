<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../font-awesome-4.6.1/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="../styles/MyStyle.css">
    <title>Login</title>
  </head>
  <body>
    <div style="margin-left:50px">
           <h2 style="color:#0052cc">1. Inicia Sesion</h2>
            <div>
              <form action="loginUser.php" method="post">
                <div style="color:gray;">

                    <br>
                  <span >Correo:</span>
                  <input style="margin-left: 70px;" type="text" name="correo">
                  <br>
                  <br>
                  <span >Contraseña:</span>
                  <input style="margin-left: 35px;" type="password" name="contra">
                    </form>
                    <input type="submit" name="submit" value="Iniciar Sesion"class="button2"
                   style="position:absolute;top:200px;margin-left:100px;text-align:center;">
                    <br>
           </div>
          </div>
         </div>
  </body>
</html>
