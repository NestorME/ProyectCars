 <?php
 header("Last-Modified: " . gmdate("D, d M Y H:i ") . " GMT");
 header("Cache-Control: no-store, no-cache, must-revalidate");
 header("Cache-Control: post-check=0, pre-check=0", false);
 header("Pragma: no-cache");

 $nombre = $apellido = $telefono =$domicilio = $fechaNac=$correo=$contra=$recontra="";

 if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $idname = $_GET["idname"];
   $domicilio = $_POST["domicilio"];
   $telefono = $_POST["telefono"];
   $correo = $_POST["correo"];

    if ( $domicilio == "" || $telefono == "" || $correo == ""){
         echo "<!DOCTYPE html>
         <html>

         <head>
           <link rel='stylesheet' type='text/css' href='../styles/MyStyle.css'>
           <link href='https://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
           <link rel='stylesheet' href='font-awesome-4.6.1/css/font-awesome.min.css'>


         </head>
         <body>
         <div style='position:
         absolute;top:100px;font-size:50px;'>
         Porfavor verifica llenar todos los campos
         <br> de tus datos personales  </div><br>
         </body>
         </html>";
       }else{
                             $hostname ="localhost";
                             $database = "b33_20671515_agencia";
                             $username = "root";
                             $password = "";

                             $conexion = mysql_connect($hostname,$username,$password);
                             mysql_select_db($database,$conexion)OR DIE ("Error: No es posible establecer la conexión");
                             $query = "UPDATE usuarios SET domicilio='$domicilio',telefono='$telefono',mail='$correo' where id='$idname'";

                             $retval=mysql_query($query,$conexion);
                             if(! $retval ) {
                           die('Could not update data: ' . mysql_error());
                            }
                             mysql_close($conexion);

                             echo "<!DOCTYPE html>
                             <html>

                             <head>
                               <link rel='stylesheet' type='text/css' href='../styles/MyStyle.css'>
                               <link href='https://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
                               <link rel='stylesheet' href='../font-awesome-4.6.1/css/font-awesome.min.css'>


                             </head>
                             <body onload='nobackbutton();'>
                             <div >
                               <br>
                               <br>
                               <h2 style='color:#0052cc;margin-left:50px;'>2. Usuario Registrado inicia sesion con tu correo</h2>
                               <br>

                               <div style=' margin-left:300px; position:absolute;  left: 1px;right: 1px;top:100px;'>
                                 <br>
                                 <br>
                                 <h3>Domicilio:&nbsp;".$domicilio."</h3>
                                 <h3>Telefono:&nbsp;".$telefono."</h3>
                                 <h3>Correo:&nbsp;".$correo."</h3>


                               </div>

                              <form action='../index.php?usuario=$correo' method='post'>

                               <input type='submit' name='submit' value='Aceptar' class='button2'
                              style='position:absolute;top:400px;margin-left:500px;text-align:center;'>
                               <br>
                               </form>
                             </div>
                             </body>
                             <script src='../script/back.js'></script>
                             </html>";

                           }

 }
 ?>
