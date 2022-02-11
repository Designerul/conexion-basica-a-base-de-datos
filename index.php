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
                    $sql = "SELECT * FROM zodiaco";
                    $stmt = $conn->prepare($sql);
                    $stmt->execute();

                    $stmt->setFetchMode(PDO::FETCH_ASSOC);

                    foreach ($stmt->fetchAll() as $row){
                ?>
                <tr>
                    <td> <?php echo $row['nombre']  ?> </td>
                    <td> <?php echo $row['edad']  ?> </td>
                    <td> <?php echo $row['zodiaco']  ?> </td>
                </tr>
                <?php
                    }
                ?>
            </table>

        </div>
    </body>
</html>