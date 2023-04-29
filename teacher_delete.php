<?php
include 'config.php';

if (isset($_GET['id_teacher'])) {
    $id_course = $_GET['id_teacher'];
    $query = "DELETE FROM teachers WHERE id_teacher = $id_teacher";
    $result = mysqli_query($con, $query);
    if (!$result) {
        die("Query failed");
    }

    $_SESSION['message'] = 'teacher eliminada';

    header("Location: teacher_list.php");
}

?>