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
    <h2>Tabla de class</h2>
    <table  class="table" >
        <thead>
        <th>id_class</th>
        <th>id_teacher</th>
        <th>id_course</th>
        <th>id_schedule</th>
        <th>nombre</th>
        <th>color</th>
        <th>Opciones</th>
        </thead>
        <tbody>
        <?php
        $query = "SELECT * FROM courses";
        $class_list = mysqli_query($con, $query);

        while($row = mysqli_fetch_array($class_list)) { ?>
            <tr>
                <td><?php echo $row['id_class']; ?></td>
                <td><?php echo $row['id_teacher']; ?></td>
                <td><?php echo $row['id_course']; ?></td>
                <td><?php echo $row['id_schedule']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['color']; ?></td>
                <td>
                    <a href="class_modify.php?id_course=<?php echo $row['id_class'];?>">Editar</a>
                    <a href="class_delete.php?id_course=<?php echo $row['id_class'];?>">Borrar</a>
                </td>
            </tr>
        <?php }?>
        </tbody>
    </table>
</div>
</body>
</html>