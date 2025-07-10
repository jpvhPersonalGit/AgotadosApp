<?php
$host = 'localhost';
$dbname = 'agotadosapp';
$user = 'postgres';
$pass = 'Juan1500';

try {
    $pdo = new PDO("pgsql:host=$host;dbname=$dbname", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<script>alert('Conexión con la base de datos EXITOSA');</script>";
} catch (PDOException $e) {
    echo "<script>alert('Error de conexión con la base de datos: " . $e->getMessage() . "');</script>";
}
?>