<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Ángel Doña Cazalla">
    <meta name="description" content="Página de inicio de la App">
    <link rel="stylesheet" type="text/css" href="styles/styles.css">
    <title>App Notas</title>
</head>
<body>
<header>
    <nav>
        <h1>Acceso Web</h1>
    </nav>
</header>
<div class="container">
    <h2>Introduce tus credenciales de administrador</h2>

    <form class="form" action="admin_login.php" method="POST">
        <!-- -->
        <label for="email">Cuenta:</label><br>
        <input type="text" name="email" placeholder="Introduce tu Email"><br>
        <!-- -->
        <label for="password">Contraseña:</label><br>
        <input type="password" name="password" placeholder="Introduce tu contraseña"></br>
        <!-- -->
        <input class="submit" type="submit" name="login_adm" value="Entra"><br>
    </form>
    <!-- -->
    <?php
    include 'config.php';
    if(isset($_POST['login_adm'])) {
        $id_user_admin=$_POST['id_user_admin'];
        $password=$_POST['password'];

    $select="SELECT * FROM users_admin WHERE id_user_admin='$id_user_admin' && password='$password'";
    $query=mysqli_query($con,$select);
    $row=mysqli_num_rows($query);
    $fetch=mysqli_fetch_array($query);
    if($row==1){
        echo "succesful";

        session_start();

        header('location: panel_admin.php');
        } else {
        echo "invalid id/password";
        }
    }
    ?>

    <ul>
        <li><a href="admin_signup.php"><u>¿No estás dado de alta?</u></a></li>

    </ul>

</div>



</body>
<footer>
    <hr>
    <p>copyright</p></p>
</footer>
</html>

