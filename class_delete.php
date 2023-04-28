<?php
include 'config.php';
$id_course = $_GET['id_course'];
$eliminar = "DELETE FROM class WHERE id_class = '$id_class' ";
$elimina = $con->query($eliminar);
header("location:class_list.php");
?>