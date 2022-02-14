<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bases de datos</title>
</head>

<body>
    <?php
        include('conexion.php');
    ?>

    <h1>Inicio</h1>

    <ul>
        <li> <a href="index.php">Inicio</a></li>
        <li><a href="formulario.php">Formulario</a></li>
    </ul>


<table cellspacing="10" cellpadding="10" border="3">
<tr>

<th>Nombre</th> 

<th>Apellido</th> 

<th>Correo electronico</th> 

<th>Genero</th> 

<th>Ocupacion</th> 

</tr>

    <?php

        $sql = "SELECT * FROM datos";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        // Configura los resultados como un arreglo asociativo
        $stmt->setFetchMode(PDO::FETCH_ASSOC);

            // $stmt->fetchAll() Obtiene el arreglo asociativo
            foreach ($stmt->fetchAll() as $row) {
                 echo "<tr>" . "<td>" . $row['nombre'] . "</td>" . " " . "<td>" . $row['apellido'] . "</td>" . " " . "<td>" . $row['correo'] . "</td>" . " " . "<td>" . $row['genero'] . "</td>" . " " . "<td>" . $row['ocupacion'] . "</td>" . "</tr>";
            }
    ?>
    
</table>

</body>
</html>