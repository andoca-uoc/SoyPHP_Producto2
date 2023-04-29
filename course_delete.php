<?php
include 'config.php';

if (isset($_GET['id_course'])) {
    $id_course = $_GET['id_course'];
    $query = "DELETE FROM courses WHERE id_course = $id_course";
    $result = mysqli_query($con, $query);
    if (!$result) {
        die("Query failed");
    }

    $_SESSION['message'] = 'Class eliminada';

    header("Location: course_list.php");
}

?>

