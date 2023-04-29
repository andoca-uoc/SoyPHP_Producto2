<?php

session_start();
include 'config.php';

if(isset($_GET['id_class'])) {
    $id_class = $_GET['id_class'];
    $query = "SELECT * FROM class WHERE id_class = $id_class";
    $result = mysqli_query($con, $query);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $name = $row['name'];
        $color = $row['color'];
    }
}

if (isset($_POST['update'])) {
    $id_class = $_GET['id_class'];
    $name = $_POST['name'];
    $color = $_POST['color'];

    $query = "UPDATE class set name = '$name', color = '$color' WHERE id_class = '$id_class'";
    mysqli_query($con, $query);

    $_SESSION['message'] = 'Actualizado correectamente';
    header("Location: class_list.php");
}
?>

<div class="container2">
    <h1>Editar Clase</h1>
    <form action="class_create.php" method="POST">
        <h2>Información de la clase</h2>
        <!-- -->
        <label>Nombre</label>
        <input type="text" name="name" value="<?php echo $name; ?>" placeholder="Actualice el nombre de la clase">
        <!-- -->
        <label>Color</label>
        <input type="color" name="color" value="<?php echo $color; ?>"><br>
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
        <input type="time" name="hora_inicio" placeholder="Hora de inicio de la clase">
        <!-- -->
        <label>Hora fin:</label>
        <input type="time" name="hora_fin" placeholder="Hora que termina la clase">

        <br><input class="submit" type="submit" value="Enviar">
    </form>
</div>