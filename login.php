<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Login</title>

    <script type="text/javascript" src="/md5.js"></script>

    <link rel="stylesheet" type="text/css" href="css/login/reset.css">

    <link rel='stylesheet prefetch' href='css/login/font-awesome.min.css'>

    <link rel="stylesheet" href="css/login/style.css">

  </head>

  <body >

<div class="login">

  <?php 
    $img_array = array();
    $directorio = opendir("img/"); //ruta actual
    while ($archivo = readdir($directorio)) //obtenemos un archivo y luego otro sucesivamente
    {
        if (is_dir($archivo))//verificamos si es o no un directorio
        {
            //de ser un directorio lo envolvemos entre corchetes
        }
        else
        {
            array_push($img_array, $archivo);
        }
    }

    $position = rand(0, count($img_array) -1);


  ?>
  
  <img src="img/<?php echo $img_array[$position]; ?>" style="border-radius: 14px; width:100%;">  

  <fieldset ng-controller="formLogin" style="border-radius: 14px; text-align: center;">
    
    <legend class="legend">Conectate Gratis, Cortesia de Polo, da click en el botón</legend>
    
    <a href="$(link-login-only)?dst=$(link-orig-esc)&amp;username=T-$(mac-esc)"><button type="buttom" class="submit"><i class="fa fa-long-arrow-right"></i></button></a>
    

  </fieldset>
  
</div>
  

  
  <script type="text/javascript">
  
    function doLogin() {
      document.sendin.username.value = document.login.username.value;
      document.sendin.password.value = hexMD5('$(chap-id)' + document.login.password.value + '$(chap-challenge)');
      document.sendin.submit();
      return false;
    }

    document.login.username.focus();
    
    document.oncontextmenu = function(){return false;}

    /*Obtener imagenes que se van am mostrar de forma aleatoria*/
    
      
  </script>



  </body>
</html>
