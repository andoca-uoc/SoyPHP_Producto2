<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Ángel Doña Cazalla">
    <meta name="description" content="Login para estudiantes">
    <link rel="stylesheet" type="text/css" href="styles/styles.css">
    <title>App Notas</title>
</head>
<body>




<header>
    <h1>Acceso Web</h1>
</header>
<body>
<div class="container2h">
    <h2>Login Estudiante</h2>
</div>

<div class="container2b">
    <h2>Introduzca sus credenciales de estudiante</h2>

    <!-- Mensaje a imprimir en caso de que de error el login -->
    <?php if (!empty($message)): ?>
        <p><?= $message ?></p>
    <?php endif; ?>
    <form class="form" action="student_login.php" method="POST">
        <label for="email">e-mail</label><br>
        <input type="email" name="email" placeholder="Introduce tu Email"><br>
        <!-- -->
        <label for="pass">contraseña</label><br>
        <input type="password" name="password" placeholder="Introduce tu contraseña"></br>
        <!-- -->
        <input class="submit" type="submit" name="login_std" value="Entra">
    </form>
    <?php
    include 'config.php';
    if(isset($_POST['login_std'])) {
        $email=$_POST['email'];
        $pass=$_POST['password'];


        $select="SELECT * FROM students WHERE email='$email' && pass='$pass'";
        $query=mysqli_query($con,$select);
        $row=mysqli_num_rows($query);
        $fetch=mysqli_fetch_array($query);
        if($row==1){
            echo "succesful";

            session_start();

            header('location: panel_main.php');
        } else {
            echo "invalid email/password";
        }
    }
    ?>

</div>
    <ul>
        <li><a href="student_signup.php"><u>¿Aún no eres alumno?</u></a></li>

    </ul>


</body>
<footer>
    <hr>
</footer>
</html>
