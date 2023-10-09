<?php
// Verificar si se recibieron datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener datos del formulario
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"]; 
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
    // Consulta de inserccion
    $registrarDocente = "INSERT INTO docentes (nombre, apellido) VALUES ('$nombre', '$apellido')";
    // Mostrar registro realizado
    if (mysqli_query($conexion, $registrarDocente)) {
        $nuevoID = mysqli_insert_id($conexion);
        echo "<h2>Registro Exitoso</h2>";
        echo "<p><strong>Estimado/a: " . $nombre . " " . $apellido . " su número de identificación es:</strong> " . $nuevoID . "</p>";
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
    <title>Registro Exitoso!</title>
</head>
<body>
    <br>
    <a href="index.html"><button type="button">Volver al menú principal</button</a>
</body>
</html>