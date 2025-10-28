<?php
$host = 'mysql-alexagon08.alwaysdata.net';
$dbname = 'alexagon08_proyecto_transversal';
$user = '435440';
$pass = 'contrasena2109_2008';

try {
    $conexion = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error en la conexión: " . $e->getMessage());
}
?>
