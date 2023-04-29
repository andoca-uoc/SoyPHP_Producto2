<?php
include 'config.php';

if (isset($_GET['id_class'])) {
    $id_class = $_GET['id_class'];
    $query = "DELETE FROM class WHERE id_class = $id_class";
    $result = mysqli_query($con, $query);
    if (!$result) {
        die("Query failed");
    }

    $_SESSION['message'] = 'Class eliminada';

    header("Location: class_list.php");
}

?>