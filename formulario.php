<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Formulario</title>

        <div class="navegador">
            <p style="text-align: right;">
                <span style="float:left"><a href="formulario.php" class="link">Formulario</a></span>
                <a href="index.php" class="upperRight">Index</a>
            </p>
        </div>
    </head>

    <body>
        <div class="fondo_form">
            <?php
                include('conexion.php');
            ?>

            <h1 class="Titulo">Registro</h1>

            <section class="formulario">
                <p class="titulo_section">Formulario</p>

                <form method="POST" action="store.php">

                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre">
                    <br>
                    <label for="edad">Edad</label>
                    <input type="number" name="edad" id="edad">
                    <br>
                    <label for="zodiaco">Signo Zodiacal</label>
                    <input type="text" name="zodiaco" id="zodiaco">
                    <br>
                    <input type="submit" value="Enviar">

                </form>
            </section>
        </div>
    </body>
</html>