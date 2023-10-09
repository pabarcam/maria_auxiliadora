<?php
// Recibir los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $nuevo_nombre = $_POST["nuevo_nombre"];
    $nuevo_apellido = $_POST["nuevo_apellido"];
    // Configuración de la conexión a la base de datos
    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "maria_auxiliadora";
    // Crear conexión
    $conexion = new mysqli($server, $user, $pass, $db);
    // Verificar la conexión
    if (!$conexion) {
        die("La conexión a la base de datos falló: " . mysqli_connect_error());
    }
    // Consulta para actualizar nombre y apellido
    $modificarDocente = "UPDATE docentes SET nombre='$nuevo_nombre', apellido='$nuevo_apellido' WHERE id=$id";
    // Ejecutar la consulta
    if (mysqli_query($conexion, $modificarDocente)) {
        echo "Registro actualizado correctamente";
    } else {
        echo "Error al actualizar el registro: " . mysqli_connect_error();
    }
    // Cerrar la conexión
    mysqli_close($conexion);
}
?>
<!--Mostrar botón volver al menú principal-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    <a href="index.html"><button type="button">Volver al menú principal</button</a>
</body>
</html>
