<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>AMORES DETALLES</title>

    <link rel='stylesheet prefetch' href='css/menu.css'>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


  </head>


  <body>

  <style type="text/css">
    body
    {
      background: #dedede;
    }

    .container-second{
      margin: auto;
      border: 1px solid #000000;
      width: 80%;
      height: 300px;
    }

    .container-menu{
      width: 13%;
      min-width: 200px;
      border: 1px solid #000000;
      height: 100%;
      background: #f9e977;
    }

    .container-menu >ul{
      width: 90%;
      margin: auto;
      font-size: 1.4em;
    }

    .container-menu > ul > li{
      padding-bottom: 2px;
    }

  </style>

  <div class="container-first" style="margin: auto;width: 100%;">
    
    <!--header cortina-->
    <div class="header-img" style="width: 100%;"> 
      <img src="img/header/cortina.png" style="width: 100%;">
    </div>

    <!--Contiene el menú y una galería-->
    <div class="container-second">
      
      <!--<div class="container-menu">
        <ul>
          <li>Inicio</li>
          <li>Tienda virtual</li>
          <li>Catálogo de productos</li>
          <li>Talleres</li>
        </ul>
      </div>-->

      <?php 
        include('templates/menu.html'); 
      ?>

      <div class="container-galeria"></div>

    </div>



  </div>



  </body>
</html>


$iteration_service->bid_service->bid_id