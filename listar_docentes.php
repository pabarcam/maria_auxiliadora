<?php
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
    } else {
        echo "<h2>Ingesos Docentes</h2><br>";
    }
    // Consulta de selección de datos releacionados
    $seleccionarDocente = mysqli_query($conexion, "SELECT docentes.id, docentes.nombre, docentes.apellido, control_ingresos.fecha, control_ingresos.hora FROM docentes LEFT JOIN control_ingresos ON docentes.id = control_ingresos.id");
    // Mostrar consulta
    while ($docente = mysqli_fetch_array($seleccionarDocente)) {
        echo "<p><strong>Estimado/a: " . $docente['nombre'] . " " . $docente['apellido'] . " número ID: " . $docente['id'] . " , sus registros de ingresos son los siguientes:</strong> " . $docente['fecha'] . " " . $docente['hora'] . "</p>";
    }
    // Cierra la conexión
    mysqli_close($conexion);
?>
<!--Mostrar botón volver al menú principal-->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, sinitial-scale=1.0">
    <title>Ingresos Docentes</title>
</head>
<body>  
    <br>
    <a href="index.html"><button type="button">Volver al menú principal</button</a>
</body>
</html>