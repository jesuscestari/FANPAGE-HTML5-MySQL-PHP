<?php

if(empty($_POST["nombre"]) || empty($_POST["email"]) || empty($_POST["comentario"])):
    header("Location:index.php?seccion=formulario&error=true");
    die();
endif;

$nombre = htmlentities(htmlspecialchars($_POST["nombre"]));
$email = htmlentities(htmlspecialchars($_POST["email"]));
$comentario = htmlentities(htmlspecialchars($_POST["comentario"]));

header("Location:index.php?seccion=formulario&nombre=$nombre&comentario=$comentario&email=$email");
?>