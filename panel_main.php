<?php session_start();
if(isset($_SESSION['username'])) {
    header('location: student_login.php');
}
?>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles/styles.css">
    <title> Modificar perfíl </title>
    <meta charset="utf-8">
</head>
<body>
<header>
    <h1>Acceso Web</h1>
</header>
<nav>
    <ul>
        <li><a class="boxnav" href="index.php">Panel</a></li>
    </ul>
</nav>
<div class="container2">
    <h3>Cursos</h3>
    <ul>
        <li><a class="box" href="course_create.php">Crear</a></li>
        <li><a class="box" href="course_modify.php">Modificar</a></li>
        <li><a class="box" href="course_delete.php">Eliminar</a></li>
    </ul>
</div>
<div class="container2">
    <h3>Clases</h3>
    <ul>
        <li><a class="box" href="#">Crear</a></li>
        <li><a class="box" href="#">Modificar</a></li>
        <li><a class="box" href="#">Eliminar</a></li>
    </ul>
</div>
<div class="container2">
    <h3>Profesores</h3>
    <ul>
        <li><a class="box" href="#">Crear</a></li>
        <li><a class="box" href="#">Modificar</a></li>
        <li><a class="box" href="#">Eliminar</a></li>
    </ul>
    <a href="logout_student.php">Salir de la sesión</a>
</div>
</body>
</html>



