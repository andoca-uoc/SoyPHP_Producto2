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
    <h1>acceso web</h1>
    <nav></nav>
</header>
<div class="container2h">
    <h2>Introduzca sus credenciales de administrador</h2>
</div>
<div class="container2b">
    <!-- Mensaje a imprimir en caso de que de error el login -->
    <?php if (!empty($message)): ?>
        <p><?= $message ?></p>
    <?php endif; ?>
    <form class="form" action="admin_login.php" method="POST">
        <!-- -->
        <label for="id_user_admin">ID</label><br>
        <input type="text" name="id_user_admin" placeholder="Introduce tu id"><br>
        <!-- -->
        <label for="password">contraseña</label><br>
        <input type="password" name="password" placeholder="Introduce tu contraseña"></br>
        <!-- -->
        <input class="submit" type="submit" name="login_adm" value="Entra">
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

</div>

    <ul>
        <li><a href="admin_signup.php"><u>¿No estás dado de alta?</u></a></li>

    </ul>
</body>
<footer>
    <hr>
</footer>
</html>

