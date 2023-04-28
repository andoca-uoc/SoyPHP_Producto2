<?php
include('config.php');
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
        <li><a class="boxnav" href="panel_admin.php">Panel</a></li>
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
        <li><a class="box" href="class_create.php">Crear</a></li>
        <li><a class="box" href="class_modify.php">Modificar</a></li>
        <li><a class="box" href="class_delete.php">Eliminar</a></li>
    </ul>
</div>
<div class="container2">
    <h3>Profesores</h3>
    <ul>
        <li><a class="box" href="teacher_create.php">Crear</a></li>
        <li><a class="box" href="teacher_modify.php">Modificar</a></li>
        <li><a class="box" href="teacher_delete.php">Eliminar</a></li>
    </ul>
</div>
</body>
</html>

