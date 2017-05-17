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
    <link href="css/galery.css" rel="stylesheet">

  </head>

  <body>
    
    <!--Header de la página (cortina)-->
    <?php include("templates/header.php"); ?>

    <!--Contenedor principal-->
    <div class="container first redondeo-5px">

        <!--Primera fila-->
        <div class="row-first row">

          <!--Menú de navegación col-md-offset-1 mover a la derecha-->
          <section class="menu col-xs-12 col-sm-12 col-md-1 col-md-lg-1">
            <?php include("templates/menu.html"); ?>          
          </section>

          <!--Galería-->
          <section class="galery col-xs-12 col-sm-12 col-md-9 col-md-lg-9 col-md-offset-1">
            <?php include("templates/galery.php"); ?>      
          </section>

        </div>
        <!--Fin, primera fila-->

        <!--Primera fila (Lo más vendido)-->
        <div class="row container-fluid">
          <div class="col-xs-12 col-sm-12 col-md-12 col-md-lg-12 bg-primary"> <h1 class="text-center section-title">Lo más vendido</h1> </div>
        </div>

        <!--Lo más vendido contenido-->
        <div class="container row margin-top-10">
          <?php  include("templates/the-most-sold.php"); ?>
        </div>


        <!--Primera fila (la creatividad nos mueve)-->
        <div class="row container-fluid" style="background:#d89316;color:#ffffff;">
          <div class="col-xs-12 col-sm-12 col-md-12 col-md-lg-12"> <h1 class="text-center section-title">¡La creatividad nos mueve!</h1> </div>
        </div>

        <!--Nos mueve la creatividad contenido-->
        <div class="container row margin-top-10">
          <?php  include("templates/creative.php"); ?>
        </div>
    </div>
    <!--Fin contenedor principal-->

    <!--Footer-->
    <footer class="container-fluid" style="background:#272727;">
      <?php  include("templates/footer.php"); ?>
    </footer>


  </body>
</html>