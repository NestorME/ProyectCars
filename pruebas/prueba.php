<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Agenda tu prueba</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../font-awesome-4.6.1/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="../styles/MyStyle.css">
  </head>
  <body>
    <?php
    $idname=$idcar="";
    $idname =$_GET['idname'];
    $idcar =$_GET['car'];
     ?>
    <div style="margin-left:50px">
           <h2 style="color:#0052cc">1. Agenda una prueba de manejo</h2>
            <div>
              <form action="savePrueba.php?idname=<?php echo $idname.'&car='.$idcar;?> " method="post">
                <div style="color:gray;">

                  <span >Seleccione una posible fecha:</span>
                  <input style="margin-left: 33px;" type="date" name="date" value="<?php echo date("Y-m-d"); ?>"><br><br>
                  <span >Seleccione la hora deseada:</span>
                  <input style="margin-left: 45px;" type="time" name="hora" value="11:45:00" max="20:30:00" min="10:00:00" step="1">

                    </form>
                    <input type="submit" name="submit" value="Registrar"class="button2"
                   style="position:absolute;top:200px;margin-left:100px;text-align:center;">
                    <br>
           </div>
          </div>
         </div>
  </body>
</html>
