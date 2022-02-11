<!DOCTYPE html>
<html lang="en">
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="">
        <title>Index</title>

        <div class="navegador">
            <p style="text-align: right;">
                <span style="float: left;"><a href="formulario.php" class="link">Formulario</a></span>
                <a href="index.php" class="=upperRight">Index</a>
            </p>
        </div>
    </head>

    <body>
        <div class="fondo_index">

            <?php
                include('conexion.php');
            ?>

            <h1>
                <?php echo "Signo Zodiacal"; ?>
            </h1>

            <table>
                <tr>
                    <th>Nombre</th>
                    <th>Edad</th>
                    <th>Signo Zodiacal</th>
                </tr>

                <?php
                    $result = mysqli_query($conn, "SELECT * from zodiaco");
                    while($mostar = mysqli_fetch_array($result)){
                ?>
                <tr>
                    <td> <?php echo $mostar['nombre']  ?> </td>
                    <td> <?php echo $mostar['edad']  ?> </td>
                    <td> <?php echo $mostar['zodiaco']  ?> </td>
                </tr>
                <?php
                    }
                ?>
            </table>

        </div>
    </body>
</html>