
<?php
//conexión
$config=mysqli_connect("localhost",'root','','wordpress16')
or die("DB NOT CONNECTED");
?>

<?php
$servername = "localhost";
$username = 'root';
$password = '';
$database = 'wordpress16';


// Create connection
if(!$con = mysqli_connect($servername,$username,$password,$database));
{
    die("Error de conexión");
}

echo "Conexión establecida";

?>
