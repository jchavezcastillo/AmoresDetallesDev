
<!--MAQUETACIÓN http://getbootstrap.com/components/-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Amores Detalles</title>

    <!-- Bootstrap -->
    <link href="lib/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="lib/jquery-1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="lib/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link href="css/amoresdetalles.css" rel="stylesheet">
    <link href="css/menu.css" rel="stylesheet">

  </head>

  <body>
    
    <!--Header de la página (cortina)-->
    <?php include("/templates/header.php"); ?>

    <!--Contenedor principal-->
    <div class="container first">

      <div class="row-first row">

        <!--Menú de navegación col-md-offset-1 mover a la derecha-->
        <section class="menu col-xs-12 col-sm-12 col-md-3 col-md-lg-3">
          <?php include("/templates/menu.html"); ?>          
        </section>

        <!--Galería-->
        <section class="galery red col-xs-12 col-sm-12 col-md-9 col-md-lg-9">
          <div class=""></div>
        </section>

      </div>
      
    </div>




  </body>
</html>