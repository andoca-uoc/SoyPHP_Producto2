<?php
include('config.php');
session_start();

$user_check = $_SESSION['admin_login'];

$ses_sql = mysqli_query($db,"select username from users_admin where username = '$user_check' ");

$row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

$login_session = $row['username'];

if(!isset($_SESSION['student_login'])){
    header("location:student_login.php");
    die();
}
?>
