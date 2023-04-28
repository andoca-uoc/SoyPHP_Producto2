<?php
//conexión
$con=mysqli_connect("localhost",'root','','wordpress16')
or die("DB NOT CONNECTED");

if (isset($con)) {
    echo 'La base de datos está conectada';
}
?>
