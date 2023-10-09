<?php
// Verificar si se recibieron datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener datos del formulario
    $id_eliminar = $_POST['id_eliminar'];
    // Configuración de la conexión a la base de datos
    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "maria_auxiliadora";
    // Crear conexión
    $conexion = new mysqli($server, $user, $pass, $db);
    // Verificar conexión
    if (!$conexion) {
        die("La conexión a la base de datos falló: " . mysqli_connect_error());
    }
    // Consulta de eliminación doncente desde su ID
    $eliminarDocente = "DELETE FROM docentes WHERE id = $id_eliminar";
    // Mostrar la consulta de eliminacións
    if (mysqli_query($conexion,$eliminarDocente)) {
        echo "Usuario eliminado correctamente.";
    } else {
        echo "Error al eliminar usuario: " . mysqli_connect_error();
    }
    // Cerrar la conexión
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
    <title>Docente Eliminado!</title>
</head>
<body>
    <br>
    <br>
    <a href="index.html"><button type="button">Volver al menú principal</button</a>
</body>
</html>