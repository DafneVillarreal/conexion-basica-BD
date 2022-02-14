<?php
    include('conexion.php');

    if (count ($_POST) > 0) {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $correo = $_POST['correo'];
        $genero = $_POST['genero'];
        $ocupacion = $_POST['ocupacion'];

        $sql = "INSERT INTO datos (nombre, apellido, correo, genero, ocupacion)
        VALUES ('$nombre', '$apellido', '$correo', '$genero', '$ocupacion')";
        
        // Utilizar exec() dado que no se regresan resultados
        $conn->exec($sql);

        header('Location: index.php');
    }
?>

