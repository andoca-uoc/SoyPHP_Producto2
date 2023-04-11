<?php

//conexión revisar puerto
$server = 'localhost:80';
$username = 'root';
$password = 'root';
$database = 'wordpress16';

try {

    $connection = new PDO('mysql:host=localhost;dbname=producto2;',$username,$password);
} catch (PDOException $e) {
    die('Connection Failed: '.$e->getMessage());
}

?>

