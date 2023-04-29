<?php
include 'config.php';
session_start();

$consulta = "SELECT * FROM courses";
$guardar = $con->query($consulta);
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
        <th>id_teacher</th>
        <th>nombre</th>
        <th>apellido</th>
        <th>teléfono</th>
        <th>nif</th>
        <th>email</th>
        <th>Opciones</th>
        </thead>
        <tbody>
        <?php
        $query = "SELECT * FROM teachers";
        $teacher_list = mysqli_query($con, $query);

        while($row = mysqli_fetch_array($teacher_list)) { ?>
            <tr>
                <td><?php echo $row['id_teacher']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['surname']; ?></td>
                <td><?php echo $row['telephone']; ?></td>
                <td><?php echo $row['nif']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td>
                    <a href="teacher_modify.php?id_teacher=<?php echo $row['id_teacher'];?>">Editar</a>
                    <a href="teacher_delete.php?id_teacher=<?php echo $row['id_teacher'];?>">Borrar</a>
                </td>
            </tr>
        <?php }?>
        </tbody>
    </table>
</div>
</body>
</html>


