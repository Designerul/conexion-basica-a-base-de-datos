<?php
    include('conexion.php');

    if (count($_POST) > 0) {

        $nombre = $_POST['nombre'];
        $edad = $_POST['edad'];
        $zodiaco = $_POST['zodiaco'];

        $sql = "INSERT INTO zodiaco (nombre, edad, zodiaco) VALUES ('$nombre', '$edad', '$zodiaco')";
        
        // Utilizar exec() dado que no se regresan resultados
        $conn->exec($sql);

        header('location: index.php');
    }
?>