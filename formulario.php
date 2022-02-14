<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>

    <?php
    include('conexion.php');
    ?>

    <h1>Formulario</h1>
    <ul>
        <li> <a href="index.php">Inicio</a></li>
        <li><a href="formulario.php">Formulario</a></li>
    </ul>


    <form action="store.php" method="POST">
        <label for= "Nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre">
        <br>
        <label for= "apellido">Apellido</label>
        <input type="text" name="apellido" id="apellido"> 
        <br>
        <label for= "correo">Correo electrónico</label>
        <input type="email" name="correo" id="correo"> 
        <br>
        
        <label for= "genero">Género</label>
        <input type="radio" name="genero" value="femenino" id="genero"> Femenino
        <input type="radio" name="genero" value="masculino" id="genero"> Masculino
        <input type="radio" name="genero" value="no binario" id="genero"> No binario
    <br>
        <label for= "ocupacion">Ocupacion</label>
        <select name="ocupacion">
            <option value="Escuela">Escuela</option>
            <option value="Personal">Personal</option>
            <option value="Trabajo">Trabajo</option>
        </select>

        <input type="submit" value="Enviar">
        <br>
    </form>


</body>
</html>