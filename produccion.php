<?php
// -----------------------------------------------------------------------------
// produccion.php
// Sistema de producción de frutas de temporada - Villa de Allende
// Desarrollado para ejecutarse en Visual Studio Code con XAMPP o AlwaysData
// -----------------------------------------------------------------------------

// --- CONFIGURACIÓN DE CONEXIÓN A LA BASE DE DATOS ---
$host = "localhost"; // Cambia a: mysql-alexagon08.alwaysdata.net si estás en AlwaysData
$dbname = "bd_frutas"; // Nombre de tu base de datos
$username = "root"; // Usuario local (o el de AlwaysData, ejemplo: 435440)
$password = ""; // Contraseña local (o la de AlwaysData)

// --- CONEXIÓN ---
try {
    $conexion = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Consulta SQL: frutas del municipio "Villa de Allende"
    $sql = "SELECT * FROM frutas_temporada WHERE municipio = 'Villa de Allende'";
    $stmt = $conexion->prepare($sql);
    $stmt->execute();

    $frutas = $stmt->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    die("❌ Error de conexión a la base de datos: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Producción de Frutas de Temporada - Villa de Allende</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f8f5;
            color: #2c3e50;
            margin: 0;
            padding: 0;
        }
        header {
            background: #27ae60;
            color: white;
            padding: 15px;
            text-align: center;
        }
        table {
            width: 90%;
            margin: 30px auto;
            border-collapse: collapse;
            background: white;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
        }
        th, td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
            text-align: center;
        }
        th {
            background: #2ecc71;
            color: white;
        }
        tr:hover {
            background: #ecf0f1;
        }
        footer {
            text-align: center;
            background: #27ae60;
            color: white;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        h2 {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<header>
    <h1>Producción de Frutas de Temporada</h1>
    <h3>Municipio de Villa de Allende</h3>
</header>

<h2>Listado de Producción</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Fruta</th>
        <th>Temporada</th>
        <th>Producción (Toneladas)</th>
        <th>Municipio</th>
    </tr>

    <?php if (!empty($frutas)): ?>
        <?php foreach ($frutas as $fila): ?>
            <tr>
                <td><?= htmlspecialchars($fila['id']); ?></td>
                <td><?= htmlspecialchars($fila['nombre']); ?></td>
                <td><?= htmlspecialchars($fila['temporada']); ?></td>
                <td><?= htmlspecialchars($fila['produccion_toneladas']); ?></td>
                <td><?= htmlspecialchars($fila['municipio']); ?></td>
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="5">No hay registros disponibles de frutas de Villa de Allende.</td>
        </tr>
    <?php endif; ?>
</table>

<footer>
    © <?php echo date('Y'); ?> | Producción Agrícola - Villa de Allende
</footer>

</body>
</html>
