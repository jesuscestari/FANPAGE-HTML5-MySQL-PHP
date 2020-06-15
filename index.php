<!doctype html>
<?php
require 'funciones/conexion.php';
require_once "navbar.php";
?>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--CSS-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.css">
      <link rel="stylesheet" href="css/estilos.css">

    <!-- JS-->
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

    <title>League of legends</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  </head>

  <body>
        <nav class="navbar navbar-expand-md  navbar-dark arriba sticky-top">
  <a class="navbar-brand" href="index.php?seccion=home"><img src="imagenes/logo.png" id="logo" alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">

    <?php
                    foreach($navbar as $nombre => $url):
                ?>
                        <li class="nav-item <?= !empty($_GET["seccion"]) && $_GET["seccion"] == $url ? "active ingreso" : "";  ?>">
                            <a class="nav-link" href="index.php?seccion=<?= $url; ?>"><?= $nombre; ?></a>
                        </li>
                <?php
                    endforeach;
                ?>
    </ul>
  </div>
        </div>
    </nav>

<?php
if(!empty($_GET["seccion"])):
    $seccion = $_GET["seccion"];

    if(file_exists("secciones/$seccion.php")):
        require_once("secciones/$seccion.php");
    else:
        require_once("secciones/home.php");
    endif;

else:
    require_once("secciones/home.php");
endif;
    ?>

<footer class="page-footer font-small blue abajo">
    <div class="footer-copyright text-center py-5"><img id="riot" src="imagenes/riotlogo2.png" alt="">© Jesús Ricardo Cestari
    </div>
  </footer>


  </body>
</html>
