<?php
include('config.php');
session_start();

$user_check = $_SESSION['student_login'];

$ses_sql = mysqli_query($db,"select username from students where username = '$user_check' ");

$row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

$login_session = $row['username'];

if(!isset($_SESSION['username'])){
    header("location:student_login.php");
    die();
}
?>