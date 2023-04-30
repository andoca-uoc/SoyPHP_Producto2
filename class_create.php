<?php

include("config.php");
if($_SERVER['REQUEST_METHOD'] == "POST") {
    $id_class = $_POST['id_class'];
    $id_teacher = $_POST['id_teacher'];
    $id_course = $_POST['id_course'];
    $id_schedule = $_POST['id_schedule'];
    $name = $_POST['name'];
    $color = $_POST['color'];

    $query = "INSERT INTO class (id_class, id_teacher, id_course, id_schedule, name, color) VALUES ('$id_class', '$id_teacher', '$id_course', '$id_schedule', '$name', '$color')";
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
<header class="admin-header">
    <h1>Crear una clase</h1>
    <nav>
        <ul>
            <li><a class="boxnav" href="index.php">Inicio</a></li>
            <li><a class="boxnav" href="panel_admin.php">Panel</a></li>
        </ul>
    </nav>
</header>
<div class="container2">
        <form action="class_create.php" method="POST">
            <h2>Información de la clase</h2>
                <!--Nombre-->
                <label>Nombre</label><br>
                <input type="text" name="name" placeholder="Escriba el nombre de la clase"><br>
                <!--Color-->
                <label>Color</label><br>
                <input type="color" name="color"><br>
                <!--Elegir un curso para la clase-->
                <label>Curso</label><br>
                <select name="courseName">
                <option value="">Selecciona un curso</option>
                <?php
                $query ="SELECT name FROM courses";
                $result = $con->query($query);
                if($result->num_rows> 0){
                    while($optionData=$result->fetch_assoc()){
                        $option =$optionData['name'];
                        ?>
                        <?php
                        //selected option
                        if(!empty($name) && $name== $option){
                            // selected option
                            ?>
                            <option value="<?php echo $option; ?>" selected><?php echo $option; ?> </option>
                            <?php
                            continue;
                        }?>
                        <option value="<?php echo $option; ?>" ><?php echo $option; ?> </option>
                        <?php

                    }}
                ?>
                </select>
                <br><br>
                 <!-- -->
                <label>Profesor</label><br>
                <select name="teacherName">
                <option value="">Selecciona un profesor</option>
                <?php
                $query ="SELECT name FROM teachers";
                $result = $con->query($query);
                if($result->num_rows> 0){
                    while($optionData=$result->fetch_assoc()){
                        $option =$optionData['name'];
                        ?>
                        <?php
                        //selected option
                        if(!empty($name) && $name== $option){
                            // selected option
                            ?>
                            <option value="<?php echo $option; ?>" selected><?php echo $option; ?> </option>
                            <?php
                            continue;
                        }?>
                        <option value="<?php echo $option; ?>" ><?php echo $option; ?> </option>
                        <?php
                    }}
                ?>
            </select>
                <!-- -->
            <br><hr><br>
            <h2>Horario</h2>
            <!-- -->
            <label>Día de clase</label>
            <input type="date" name="day">
            <br>
            <label>Hora inicio</label>
            <input type="time" name="time_start">

            <label>Hora fin</label>
            <input type="time" name="time_end">


                <br><input class="submit" type="submit" value="Enviar">
        </form>
</div>
</body>
</html>


