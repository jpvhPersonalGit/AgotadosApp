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
        <article class="form-container">
            <form action="registrar_agotado.php" method="post">
            <label>ID Producto:</label><br>
            <input type="number" name="id_prod" required><br>

            <label>Descripción:</label><br>
            <input type="text" name="descripcion" required><br>

            <label>Cantidad en inventario:</label><br>
            <input type="number" step="0.01" name="cant_inv"><br>

            <label>Cantidad sugerida:</label><br>
            <input type="number" step="0.01" name="cant_sug"><br>

            <article class="button-container">
                <button class="btn-guardar" type="submit">GUARDAR</button>
                <button class="btn-limpiar" type="reset">LIMPIAR</button>
            </article>
        </form>
        </article>
    </section>
    <footer>
        <p>Aplicativo desarrollado por: Juan Pablo Vargas Hernández - Todos los derechos reservados</p>
        <p>Contacto: 318.625.9804 - Solo WhatsApp</p>
    </footer>
</body>
</html>