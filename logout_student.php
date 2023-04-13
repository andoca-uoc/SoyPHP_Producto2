<?php
session_start();

if(session_destroy()) {
    header("Location: student_login.php");
}
?>
