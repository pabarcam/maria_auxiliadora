<?php
// Verificar si se recibieron datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener datos del formulario
    $fecha = $_POST["fecha"];
    $hora = $_POST["hora"];
    $id = $_POST["id"];
    // Configuración de la conexión a la base de datos
    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "maria_auxiliadora";
    // Crear la conexión
    $conexion = mysqli_connect($server, $user, $pass, $db);
    // Verificar la conexión
    if (!$conexion) {
        die("La conexión a la base de datos falló: " . mysqli_connect_error());
    }
    // Consulta de insercción de datos
    $registrarIngreso = "INSERT INTO control_ingresos (id, fecha, hora) VALUES ('$id', '$fecha', '$hora')";
    // Mostrar la consulta de insercción
    if (mysqli_query($conexion, $registrarIngreso)) {
        echo "<h2>Ingreso Exitoso</h2>";
    } else {
        echo "<h2>Error al Registrar Datos</h2>";
        echo "<p>Error: " . mysqli_error($conexion) . "</p>";
    }
    // Cierra la conexión
    mysqli_close($conexion);
} else {
    echo "<h2>Error</h2>";
    echo "<p>No se recibieron datos del formulario.</p>";
}
?>
<!--Mostrar botón volver al menú principal-->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingreso Exitoso!</title>
</head>
<body>
    <br>
    <a href="index.html"><button type="button">Volver al menú principal</button</a>
</body>
</html>