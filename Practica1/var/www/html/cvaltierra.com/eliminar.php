<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Conecta a la base de datos MySQL 
    $servidor = "192.168.100.112"; 
    $usuario = "vlca";
    $contrasena = "37510";
    $basededatos = "db"; 

    $conexion = new mysqli($servidor, $usuario, $contrasena, $basededatos);

    // Verifica si la conexión fue exitosa
    if ($conexion->connect_error) {
        die("Error en la conexión a la base de datos: " . $conexion->connect_error);
    }

    // Consulta SQL para eliminar todos los registros de la tabla usuarios
    $sql = "DELETE FROM usuarios";

    if ($conexion->query($sql) === TRUE) {
        echo "Registros eliminados exitosamente.";
    } else {
        echo "Error al eliminar registros: " . $conexion->error;
    }

    // Cierra la conexión
    $conexion->close();
} else {
    echo "No se ha realizado una solicitud válida para eliminar los registros.";
}
?>
