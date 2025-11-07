<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario | Frutas de Temporada</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <header>
        <img src="for.webp" alt="Logo del Proyecto" class="logo">
        <h1>Formulario de Opinión</h1>
    </header>

    <?php include 'menu.php'; ?>

    <main>
        <section class="bienvenida">
            <h2>Cuéntanos tu opinión 🍎</h2>
            <form action="#" method="post" class="formulario">
                <label>Nombre:</label>
                <input type="text" name="nombre" required>

                <label>Fruta favorita de noviembre:</label>
                <select name="fruta">
                    <option value="mandarina">Mandarina</option>
                    <option value="guayaba">Guayaba</option>
                    <option value="papaya">Papaya</option>
                    <option value="manzana">Manzana</option>
                </select>

                <label>Comentario:</label>
                <textarea name="mensaje" rows="5" required></textarea>

                <button type="submit">Enviar</button>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 Frutas de Temporada | Desarrollado por [LIANA ALEXA ONZALEZ MARTINEZ GRUPO 503]</p>
    </footer>
</body>
</html>
