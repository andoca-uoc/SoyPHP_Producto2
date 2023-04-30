<?php
include 'config.php';
session_start();

$consulta = "SELECT * FROM students";
$guardar = $con->query($consulta);
?>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles/styles.css">
    <title>Panel estudiante</title>
    <meta charset="utf-8">
</head>
<body>
<header>
    <h1>Panel del estudiante</h1>
</header>
<nav>
    <ul>
        <li><a class="boxnav" href="index.php">Home</a></li>
    </ul>
</nav>

<div class="container2">
    <h2>Datos personales</h2>
        <table  class="styled-table">
            <thead>
                <th>ID</th>
                <th>usuario</th>
                <th>e-mail</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Teléfono</th>
                <th>nif</th>
                <th>date_registered</th>
            </thead>
            <?php
            $query = "SELECT * FROM students";
            $student_list = mysqli_query($con, $query);

            while($row = mysqli_fetch_array($student_list)) { ?>
                <tr class="active-row">

                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['username']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['surname']; ?></td>
                <td><?php echo $row['telephone']; ?></td>
                <td><?php echo $row['nif']; ?></td>
                <td><?php echo $row['date_registered']; ?></td>

                </tr>
            <?php }?>
            </tbody>
        </table>

    <a href="modify_profile.php">Editar</a>
</div>
</body>
</html>

