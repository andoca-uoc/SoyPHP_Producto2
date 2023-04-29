<?php

session_start();
include 'config.php';

if(isset($_GET['id_teacher'])) {
    $id_teacher = $_GET['id_teacher'];
    $query = "SELECT * FROM teachers WHERE id_teacher = $id_teacher";
    $result = mysqli_query($con, $query);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $id_teacher = $row['id_teacher'];
        $name = $row['name'];
        $surname = $row['surname'];
        $telephone = $row['telephone'];
        $nif= $row['nif'];
        $email = $row['email'];

    }
}

if (isset($_POST['update'])) {
    $id_teacher = $_GET['id_teacher'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $telephone = $_POST['telephone'];
    $nif = $_POST['nif'];
    $email = $_POST['email'];

    $query = "UPDATE teacher set name = '$name', surname = '$surname', telephone = '$telephone', nif = '$nif', email = '$email'  WHERE id_teacher = '$id_teacher'";
    mysqli_query($con, $query);

    $_SESSION['message'] = 'Actualizado correectamente';
    header("Location: teacher_list.php");
}
?>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <title> Tabla Alumnos </title>
    <meta charset=”utf-8″>
</head>

<body class="body">
<div class="contenido2">
    <h1>Editar Profesor</h1>
                <form class="" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <input type="hidden" name="id_teacher" value="<?php echo $id_teacher; ?>>
                    <label>Nombre</label>
                    <input type="text"  name="name" value="<?php echo $name; ?> required>
                    <label>Apellido</label>
                    <input type="text"  name="surname" value="<?php echo $surname; ?> required>
                    <br><label>Telefono</label>
                    <input type="text"  name="telephone" value="<?php echo $telephone; ?> required>
                    <label>NIF</label>
                    <input type="text"  name="nif" value="<?php echo $nif; ?> required>
                    <br><label>Email</label>
                    <input type="text"  name="email" value="<?php echo $email; ?> required>
                    <div class="enviar">
                        <br><input class="submit" type="submit" name="editar" value="Modificar">
                    </div>
                </form>
</div>
</body>
</html>
