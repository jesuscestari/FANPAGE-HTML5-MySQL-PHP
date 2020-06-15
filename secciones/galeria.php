<?php
$consulta = "SELECT * FROM campeones";
$resultado = mysqli_query($db, $consulta);
?>
<div class="fondogaleria">
    <div class="container">
        <div class="row">
            <div class="col-12" >
                <h1 class="font-weight-light text-center text-lg-left mt-1 mb-3">Campeones</h1>
                <p>La Liga cuenta con varios arquetipos de campeones, desde malvadas mentes criminales hasta monstruosas
                    y épicas criaturas, pasando por toda clase de personaje que puedas imaginar. Los diferentes
                    campeones cubren diferentes posiciones y estrategias, así que no te desanimes si tu primera elección
                    no se adapta a tu estilo de juego.</p>
            </div>
        </div>

        <div class="row">
            <?php
            foreach ($resultado as $campeon):
                ?>
                <div class="card text-white bg-dark col-lg-6 col-md-3 my-4">
                    <img src="<?= "imagenes/" . $campeon['imagen'];?>" class="card-img-top" alt="<?= $campeon['nombre'] ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= ucfirst($campeon['nombre']);?></h5>
                            <h6 class="card-subtitle mb-2 text-muted">
                                <?= ucfirst($campeon['subtitulo']);?>
                                </h6>

                            <a href="index.php?seccion=detalle_campeon&id=<?=$campeon['id_campeones'];?>" class="card-link" style="color:rgb(230, 202, 139)">Ver más</a>
                        </div>
                </div>
            <?php
            endforeach;
            ?>
        </div>

    </div>
</div>
