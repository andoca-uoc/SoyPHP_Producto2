<?php

include("config.php");
if($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST['name'];
    $color = $_POST['color'];

    $query = "INSERT INTO class (name, color) VALUES ('$name', '$color')";
    $result = mysqli_query($con, $query);

    if(!$result) {
        die("Query failed");
    }
    $_SESSION['message']='Clase creada';
    header("Location: class_create.php");
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Ángel Doña Cazalla">
    <meta name="description" content="Crear clase">
    <link rel="stylesheet" type="text/css" href="styles/styles.css">
    <title>App PHP</title>
</head>
<body>

<header>
    <h1>Acceso Web</h1>
</header>
<nav>
    <ul>
        <li><a class="boxnav" href="panel_admin.php">Panel</a></li>
    </ul>
</nav>
<div class="container2">
    <h1>Crear Clase</h1>
        <form action="class_create.php" method="POST">
            <h2>Información de la clase</h2>
                <!-- -->
                <label>Nombre</label>
                <input type="text" name="name" placeholder="Escriba el nombre de la clase">
                <!-- -->
                <label>Color</label>
                <input type="color" name="color"><br>
                <!-- -->
                <label>ID clase:</label>
                <option value="0">Elige un curso</option>
                 <!-- -->
                <label>ID Profesor:</label>
                <option value="0">Elige un Profesor</option>
                <!-- -->
                <br><h2>Horario</h2>
            <!-- -->
                <label>Día:</label>
                <input type="date" name="día_clase" placeholder="Introduce el día de la clase">
                <!-- -->
                <label>Hora inicio:</label>
                <input type="time" name="date_start" placeholder="La hora de inicio de la clase">
                <!-- -->
                <label>Hora fin:</label>
                <input type="time" name="date_end" placeholder="La hora que termina la clase">

                <br><input class="submit" type="submit" value="Enviar">
        </form>
</div>
</body>
</html>


