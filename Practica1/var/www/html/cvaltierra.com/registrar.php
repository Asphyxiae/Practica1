<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtén la información ingresada en el formulario
    $nombre = $_POST["info"];

    // Conecta a la base de datos MySQL (asegúrate de configurar los datos de conexión)
    $servidor = "192.168.100.112"; // Cambia esto si tu servidor MySQL no está en localhost
    $usuario = "vlca";
    $contrasena = "37510";
    $basededatos = "db"; // Nombre de la base de datos que creaste

    // Intenta conectar a la base de datos
    $conexion = new mysqli($servidor, $usuario, $contrasena, $basededatos);

    // Verifica si la conexión fue exitosa
    if ($conexion->connect_error) {
        die("Error en la conexión a la base de datos: " . $conexion->connect_error);
    }

    // Prepara la consulta SQL para insertar el usuario
    $sql = "INSERT INTO usuarios (nombre) VALUES (?)";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("s", $nombre);

    // Ejecuta la consulta SQL
    if ($stmt->execute()) {
        // Redirige de vuelta a la página principal
        header("Location: index.html");
    } else {
        echo "Error al registrar el usuario: " . $stmt->error;
    }

    // Cierra la conexión
    $stmt->close();
    $conexion->close();
}
?>
