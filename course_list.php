<?php
include 'config.php';
session_start();
?>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles/styles.css">
    <title> Tabla profesores </title>
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
    <h2>Tabla de courses</h2>
                <table  class="table" >
                    <thead>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Fecha de inicio</th>
                    <th>Fecha de fin</th>
                    <th>Activo</th>
                    <th>Opciones</th>
                    </thead>
                    <tbody>
                    <?php
                    $query = "SELECT * FROM courses";
                    $course_list = mysqli_query($con, $query);

                    while($row = mysqli_fetch_array($course_list)) { ?>
                        <tr>
                            <td><?php echo $row['id_course']; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['description']; ?></td>
                            <td><?php echo $row['date_start']; ?></td>
                            <td><?php echo $row['date_end']; ?></td>
                            <td><?php echo $row['active']; ?></td>
                            <td>
                                <a href="course_modify.php?id_course=<?php echo $row['id_course'];?>">Editar</a>
                                <a href="course_delete.php?id_course=<?php echo $row['id_course'];?>">Borrar</a>
                            </td>
                        </tr>
                    <?php }?>
                    </tbody>
                </table>
</div>
</body>
</html>