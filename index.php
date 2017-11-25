<!DOCTYPE html>
<html>
<head>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="font-awesome-4.6.1/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="styles/MyStyle.css">
<title>Home</title>
</head>
  <body>
    <?php
    $name=$idname="";
    $name =$_GET['usuario'];
    $idname =$_GET['idname'];
     ?>
    <div>
   <div id="hearder" >
     <div class="logo">
    <img src="fondoslogos/logo.png" width="30%">
    </div>
    <?php if($name == "" && $idname==""){ ?>
    <div class="login">
      <a href="./usuarios/register.php" target="_self" class="button" >&nbsp;&nbsp;
        <i class="fa fa-user-plus" aria-hidden="true"></i> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Registrarse</a>
        <a href="./usuarios/login.php" target="_self" class="button3" >&nbsp;&nbsp;
          <i class="fa  fa-user" aria-hidden="true"></i> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Iniciar sesion</a>
    </div>
  <?php }else{
    $hostname ="localhost";
    $database = "b33_20671515_agencia";
    $username = "root";
    $password = "";
    $conexion = mysql_connect($hostname,$username,$password);
    mysql_select_db($database,$conexion)OR DIE ("Error: No es posible establecer la conexión");

    $query = "select id from usuarios where mail = '$name'";

     $idname = mysql_result(mysql_query($query,$conexion),0);

    mysql_close($conexion);
    ?>
     <div class="login">
       <a href="alert.php?usuario=<?php echo $name; ?>" target="_self" class="button3" >&nbsp;&nbsp;
         <i class="fa fa-user" aria-hidden="true"></i>&nbsp;<?php echo $name; ?></a>

         <a href="index.php" target="_self" class="button" >&nbsp;&nbsp;
           <i class="fa fa-close" aria-hidden="true"></i>&nbsp; Cerrar sesión</a>
     </div>
   <?php } ?>

    <div class="redes">
           Visitanos: <br>
           <a href="#" target="_self"><img src="cars/face.png" width="10%"></a>
           <a href="#" target="_self"><img src="cars/twiter.png" width="10%"></a>
           <a href="#" target="_self"><img src="cars/insta.jpeg" width="10%"></a>
           <a href="map.php" target="_self"><img src="cars/ubicacion.png" width="10%"></a><br>
    </div>
     <div class="slider">
       <ul>
         <li><a href="#" target="_self"><img src="promos/promo1.jpg"></a> </li>
         <li><a href="#" target="_self"><img src="promos/promo2.jpg"></a> </li>
         <li><a href="#" target="_self"><img src="promos/promo3.jpg"></a> </li>
         <li><a href="#" target="_self"><img src="promos/promo4.jpg"></a> </li>
       </ul>
     </div>

     <div class="menu">
       <a id="barra" style="color:white" href="Autos.php?idname= <?php echo $idname; ?>" target="Iframe">Inicio</a>
                  <a id="barra" style="color:white" href="#">Guia del Comprador</a>
                  <a id="barra"style="color:white" href="#">Mundo VolksWagen</a>
                  <a id="barra" style="color:white" href="#">Servicio</a>
                  <a id="barra" style="color:white" href="#">Experiencia VolksWagen</a>
                  <a id="barra" style="color:white" href="#">Acerca de...</a>
     </div>
</div>
<div class="divSecond">
<div  class="hearderBack" style=" padding-left:0px; padding-right:0px">
<br>
<br>
<div class="ventana">
<iframe src="Autos.php?idname= <?php echo $idname; ?>" width="1330" height="900"  frameborder="0" name="Iframe" scrolling="no"></iframe>
</div>
<br>
<br>
<br>
</div>
<div style="color:#2d5ec2; text-align:center ">
  <h3 ><i class="fa fa-trophy" aria-hidden="true"></i>&nbsp;Pomociones destacadas</h3>
  <br>
  <a href="#" target="_self"><img src="promos/promodown.PNG" width="20%"></a>
  <a href="#" target="_self"><img src="promos/promodown1.PNG" width="20%"></a>
  <a href="#" target="_self"><img src="promos/promodown2.PNG" width="20%"></a>
  <a href="#" target="_self"><img src="promos/promodown3.PNG" width="20%"></a>
<br>
<br>
</div>

<div class="contacto">
  <table style="background-color:#2d5ec2; color:white; width:100%;" >
    <td>
<h3 style="color:white; text-align:center ">Contacto</h3>
   <a id="barra1"href="#"><i class="fa fa-comments" aria-hidden="true"></i> Chatea con expertos </a>
   <br>
   <a id="barra1"href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i>Envianos tus comentarios</a>
    <br>
    <i class="fa fa-volume-control-phone" aria-hidden="true"></i>01 800 433 6755
    <br>
    </td>
    <td>
<h3 style="color:white; text-align:center ">Legal</h3>
<a id="barra1"href="#" >Terminos y condiciones</a>
<br>
<a id="barra1"href="#">Aviso de privacidad </a>
<br>
<a id="barra1"href="#">Terminos de las promociones</a>
    </td>
    <td>
      <h3 style="color:#white; text-align:center ">Compra tu VW</h3>
      <a id="barra1"href="#" >Configura y cotiza</a>
      <br>
      <a id="barra1"href="#">Autos usados </a>
      <br>
      <a id="barra1"href="#">consesionarias</a>
      <br>
    </td>
    <td>
<h3 style="color:white; text-align:center ">¿Quienes somos?</h3>
<a id="barra1"href="#" >Provedores</a>
<br>
<a id="barra1"href="#">proximas aperturas</a>
<br>
</td>
  </table>

</div>

   <div id="footer" style="background-color: #0052cc; color:white">
   DERECHOS RESERVADOS &copy; CADENA MEXICANA DE EXHIBICIÓN S.A. DE C.V. 2017.SITIO DESARROLLADO POR CUTONALA.
    <br>

   </div>


<div id="footer" style="background-color:#000000; color:white">
   Descarga nuestra app
   <br>
  <a target="_blank" href="https://play.google.com/store/apps/details?id=com.crayonlion.cinemas&referrer=utm_source%3Dlanding_page"><img src="iconos/android.png" width="100" style="background-color:white"></a>

  <a target="_blank" href="https://itunes.apple.com/mx/app/cine+/id681323593?mt=8A"><img src="iconos/appstore.png" width="110" style="background-color:white"></a>

  <a href="#"><img src="iconos/windows.png" width="100" style="background-color:white"></a>
  <br>
  <br>
 </div>
 </div>

</div>
</body>
</html>
