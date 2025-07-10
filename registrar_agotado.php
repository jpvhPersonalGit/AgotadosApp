<?php
require './conexion.php';

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_prod = $_POST['id_prod'];
    $descripcion = $_POST['descripcion'];
    $cant_inv = $_POST['cant_inv'];
    $cant_sug = $POST['cant_sug'];

    $sql = "INSERT INTO agotados(
        id_prod
        descripcion,
        cant_inv,
        cant_sug
    )VALUES(
        :id_prod, 
        :descripcion,
        :cant_inv,
        :cant_sug
    )";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':id_prod' => $id_prod,
        ':descripcion' => $descripcion,
        ':cant_inv' => $cant_inv,
        ':cant_sug' => $cant_sug
    ]);

    echo "Registro guardado correctamente.";
}
?>