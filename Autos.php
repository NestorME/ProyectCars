<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="styles/MyStyle.css">
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
</head>
  <body onload='nobackbutton();'>
    <?php
    $idname="";
    $idname =$_GET['idname'];
     ?>
  <div class="container"  style=" margin-left:15px;">
    <div class="divcarimg" >
      <a href="infoCarros.php?car=1&idname=<?php echo $idname;?>" target="_self"><img class="img" src="cars/dune.png" >
        <h4>Nuevo Beetle</h4>
      </a>
    </div>
  </div>


  <div class="container" style=" margin-left:250px;">
    <div class="divcarimg" >
    <a href="infoCarros.php?car=2&idname=<?php echo $idname;?>" target="_self"><img class="img" src="cars/crossfox.png" >
        <h4>CrossFox</h4>
      </a>
    </div>
  </div>

  <div class="container"  style="margin-left:480px;">
    <div class="divcarimg" >
      <a href="infoCarros.php?car=3&idname=<?php echo $idname;?>" target="_self"><img class="img" src="cars/cut-out.png" >
        <h4>Golf GTI</h4>
        </a>
    </div>
  </div>

  <div class="container" style=" margin-left:720px;">
    <div class="divcarimg" >
      <a href="infoCarros.php?car=4&idname=<?php echo $idname;?>" target="_self"><img class="img" src="cars/cutout_gol2017.png" >
        <h4>Gol</h4>
      </a>
    </div>
  </div>

  <div class="container"  style=" margin-left:15px;margin-top:250px">
    <div class="divcarimg" >
      <a href="infoCarros.php?car=5&idname=<?php echo $idname;?>" target="_self"><img class="img" src="cars/cutout.png" >
        <h4>Vento</h4>
      </a>
    </div>
  </div>

  <div class="container" style=" margin-left:250px;margin-top:250px">
    <div class="divcarimg" >
      <a href="infoCarros.php?car=6&idname=<?php echo $idname;?>" target="_self"><img class="img" src="cars/cutoutrans.png" >
        <h4>Up!</h4>
        </a>
    </div>
  </div>
  <div class="container" style=" margin-left:480px;margin-top:250px">
    <div class="divcarimg" >
      <a href="infoCarros.php?car=7&idname=<?php echo $idname;?>" target="_self"><img class="img" src="cars/gol-sedan.png" >
        <h4>Gol Sedan</h4>
      </a>
    </div>
  </div>
  <div class="container" style=" margin-left:720px;margin-top:250px">
    <div class="divcarimg" >
        <a href="infoCarros.php?car=8&idname=<?php echo $idname;?>" target="_self"><img class="img" src="cars/touareg.png" >
        <h4>Touareg</h4>
      </a>
    </div>
  </div>
  <div class="container" style=" margin-left:15px;margin-top:450px">
    <div class="divcarimg" >
    <a href="infoCarros.php?car=9&idname=<?php echo $idname;?>" target="_self">  <img class="img" src="cars/jetta.png" >
        <h4>Jetta</h4>
       </a>
    </div>
  </div>
  <div class="container" style=" margin-left:250px;margin-top:450px">
    <div class="divcarimg" >
      <a href="infoCarros.php?car=10&idname=<?php echo $idname;?>" target="_self"><img class="img" src="cars/passat-2017-cout-out.png" >
        <h4>Passat</h4>
      </a>
    </div>
  </div>
  <div class="container" style=" margin-left:480px;margin-top:450px">
    <div class="divcarimg" >
      <a href="infoCarros.php?car=11&idname=<?php echo $idname;?>" target="_self"><img class="img" src="cars/polo-sportline-cutout.png" >
        <h4>Polo</h4>
      </a>
    </div>
  </div>
  <div class="container" style=" margin-left:720px;margin-top:450px">
    <div class="divcarimg" >
      <a href="infoCarros.php?car=13&idname=<?php echo $idname;?>" target="_self"><img class="img" src="cars/nuevogolf.png" >
        <h4>Nuevo Golf</h4>
      </a>
    </div>
  </div>
  <div class="container" style=" margin-left:15px;margin-top:650px">
    <div class="divcarimg" >
      <a href="infoCarros.php?car=12&idname=<?php echo $idname;?>" target="_self"><img class="img" src="cars/tiguan-cutout.png" >
        <h4>Nuevo Tiguan</h4>
      </a>
    </div>
  </div>


</body>
<script src='script/back.js'></script>
</html>
