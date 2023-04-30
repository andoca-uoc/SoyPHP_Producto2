<?php
include('config.php');
?>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles/styles.css">
    <meta charset="utf-8">
</head>
<body>
<header class="admin-header">
    <h1>Panel administración</h1>
    <nav>
        <ul>
            <li><a class="boxnav" href="index.php">Inicio</a></li>
            <li><a class="boxnav" href="panel_admin.php">Panel</a></li>
        </ul>
    </nav>
</header>
<div class="container2">
    <ul>
        <li><a class="box" href="course_create.php">Crear curso</a></li>
        <li><a class="box" href="course_list.php">Listado de cursos</a></li>

    </ul>
</div>
<div class="container2">
    <ul>
        <li><a class="box" href="class_create.php">Crear clase</a></li>
        <li><a class="box" href="class_list.php">Listado de clases</a></li>
    </ul>
</div>
<div class="container2">
    <ul>
        <li><a class="box" href="teacher_create.php">Crear profesor</a></li>
        <li><a class="box" href="teacher_list.php">Listado de profesores</a></li>
    </ul>
</div>
</body>
</html>

