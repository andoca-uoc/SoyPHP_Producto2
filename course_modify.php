<?php

session_start();
include 'config.php';

if(isset($_GET['id_course'])) {
    $id_course = $_GET['id_course'];
    $query = "SELECT * FROM courses WHERE id_course = $id_course";
    $result = mysqli_query($con, $query);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $id_course = $row['id_course'];
        $name = $row['name'];
        $description = $row['description'];
        $date_start = $row['date_start'];
        $date_end = $row['date_end'];
        $active = $row['active'];

    }
}

if (isset($_POST['update'])) {
    $id_class = $_GET['id_course'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $date_start = $_POST['date_start'];
    $date_end = $_POST['date_end'];
    $active = $_POST['active'];

    $query = "UPDATE course set name = '$name', description = '$description', date_start = '$date_start', date_end = '$date_end', active = '$active'  WHERE id_course = '$id_course'";
    mysqli_query($con, $query);

    $_SESSION['message'] = 'Actualizado correectamente';
    header("Location: course_list.php");
}
?>

<div class="container2">
                <form action="course_create.php" method="POST">
                    <h2>Información del curso</h2>
                    <input type="hidden" name="id_course" value="<?php echo $id_course; ?>>
                    <label>Nombre</label>
                    <input type="text"  name="name" value="<?php echo $name; ?> required>
                    <label>Descripcion</label>
                    <input type="text"  name="description" value="<?php echo $description; ?> required>
                    <br><label>Fecha Inicio</label>
                    <input type="date"  name="date_start" value="<?php echo $date_start; ?> required>
                    <label>Fecha Fin</label>
                    <input type="date"  name="date_end" value="<?php echo $date_end; ?> required>


                        </br><input class="submit" type="submit" value="Enviar">

                </form>

</div>
