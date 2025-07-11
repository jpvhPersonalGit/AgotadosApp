<?php
require './registrar_agotado.php'
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agotados</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <link rel="stylesheet" href="./sass/style.css">
</head>
<body>
    <header>
        <div class="logo-container">
            <img src="logo4.png" alt="logo surtiviveres">
        </div>
        <div>
            <h1>Registro de Agotados</h1>
        </div>
        <div>
            <h2>Surtiviveres la sabana SAS</h2>
        </div>
    </header>
    <section class="form-section">
        <div class="form-container">
        <form class="form-grid" action="registrar_agotado.php" method="post">
            <div class="form-group span-1">
                <label>ID Producto:</label><br>
                <input type="text" name="id_prod" required>
            </div>

            <div class="form-group span-3">
                <label>Descripción:</label><br>
                <input type="text" name="descripcion" required>
            </div>

            <div class="form-group span-2">
                <label>Cantidad en inventario:</label><br>
                <input type="text" step="0.01" name="cant_inv">
            </div>

            <div class="form-group span-2">
                <label>Cantidad sugerida:</label><br>
                <input type="text" step="0.01" name="cant_sug">
            </div>

            <div class="button-container span-4">
                <button class="btn-guardar" type="submit">GUARDAR</button>
                <button class="btn-limpiar" type="reset">LIMPIAR</button>
            </div>
        </form>
        </div>
    </section>
    <footer>
        <p>Aplicativo desarrollado por: Juan Pablo Vargas Hernández - Todos los derechos reservados</p>
        <p>Contacto: 318.625.9804 - Solo WhatsApp</p>
    </footer>
</body>
</html>