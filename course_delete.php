<?php
include 'config.php';
$id_course = $_GET['id_course'];
$eliminar = "DELETE FROM courses WHERE id_course = '$id_course' ";
$elimina = $con->query($eliminar);
header("location:course_list.php");
?>

