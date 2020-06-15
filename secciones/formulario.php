<div class="fondogaleria">
    <div class="container">
        <h1 class="font-weight-light text-center text-lg-left ">¡Dejanos tu opinión! </h1>
        <p>Las opiniones de los jugadores son un factor importante en el proceso de toma de decisiones de Riot Games. Si quieres expresar tu opinión, contarnos qué te parece el juego es una buena forma de empezar.</p>
        <?php
        if(isset($_GET["nombre"]) && isset($_GET["comentario"]) && isset($_GET["email"]) && !empty($_GET["email"]) && !empty($_GET["comentario"]) && !empty($_GET["nombre"])):
            ?>

            <div class="alert alert-primary alert-dismissible fade show text-center" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <strong>Tu comentario se ha enviado correctamente</strong>
            </div>
        <?php
        endif;
        ?>
        <?php
        if(isset($_GET["error"]) && !empty($_GET["error"]) == "true"):
            ?>
            <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <strong>Error!</strong> Los campos <b>Nombre</b>, <b>Email</b> y <b>Comentario </b> son obligatorios.
            </div>
        <?php
        endif
        ?>

        <div class="container contact-form">
        <form action="datos-formulario.php" method="post" class="border p-3 lab">
            <div class="contact-image">
                <img src="imagenes/lollogo.png" alt=""/>
            </div>
            
                <div class="form-group lab">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingrese su nombre">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="usuario@mail.com">
                </div>
                <label>¿Que sitios usas para mejorar en tus partidas?</label>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="lista[]" id="opgg" value="opgg">
                        Op.gg
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="lista[]" id="twitch" value="twitch"> Twitch.tv </label> </div> <div class="form-check"> <label class="form-check-label"> <input type="checkbox" class="form-check-input" name="lista[]" id="reddit" value="reddit">
                        Reddit
                    </label>
                </div>
                <div class="form-check"> <label class="form-check-label"> <input type="checkbox" class="form-check-input" name="lista[]" id="lolgraphs" value="lolgraphs">
                        LeagueOfGraphs
                    </label>
                </div>
                <div class="form-group">
                    <label for="comentario">Comentario</label>
                    <textarea class="form-control" placeholder="Escriba aqui" name="comentario" id="comentario" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-block btn-secondary">Enviar</button>
            </form>
        </div>



    </div>