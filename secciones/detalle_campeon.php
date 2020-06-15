<?php
$id = mysqli_real_escape_string($db, $_GET['id']);

$consulta = "SELECT campeones.nombre, subtitulo, rol, fecha_salida,regiones.nombre as region, imagen 
            FROM campeones
            INNER JOIN regiones
            on campeones.id_regiones = regiones.id_regiones
            where campeones.id_campeones = '$id'";

$resultado = mysqli_query($db, $consulta);

$campeon =  mysqli_fetch_assoc($resultado);
?>

<div class="fondogaleria ">

    <div class="container">
        <h1 class="font-weight-light text-center text-lg-center ">Detalles</h1>
        <div class="card-detalle text-white bg-dark col-lg-6 col-md-3 my-4">
        <div class="alumno-image">
            <img src="<?= "imagenes/" . $campeon['imagen'];?>" style="width: 400px" alt=""/>
        </div>
        <table class="table table-striped table-dark" style="margin-bottom: 15%;">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre del campeón: <?=$campeon['nombre'];?></th>

            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">#</th>
                <td>Conocido por: <?=ucfirst($campeon['subtitulo']);?> </td>

            </tr>
            <tr>
                <th scope="row">#</th>
                <td>Rol: <?=$campeon['rol'];?> </td>

            </tr>
            <tr>
                <th scope="row">#</th>
                <td>Fecha de salida: <?=$campeon['fecha_salida'];?> </td>

            </tr>

            <tr>
                <th scope="row">#</th>
                <td>Región:  <?=$campeon['region'];?></td>

            </tr>

            </tbody>
        </table>
        
            </div>
    </div>
