<?php
// Conecta a la base de datos MySQL (asegúrate de configurar los datos de conexión)
$servidor = "192.168.100.112"; //
$usuario = "vlca";
$contrasena = "37510";
$basededatos = "db"; 

$conexion = new mysqli($servidor, $usuario, $contrasena, $basededatos);

// Verifica si la conexión fue exitosa
if ($conexion->connect_error) {
    die("Error en la conexión a la base de datos: " . $conexion->connect_error);
}

// Consulta SQL para obtener la información de los usuarios
$sql = "SELECT id, nombre, fecha_registro FROM usuarios";
$resultado = $conexion->query($sql);

$data = array(); // Inicializamos un array para almacenar los datos

if ($resultado->num_rows > 0) {
    while ($fila = $resultado->fetch_assoc()) {
        $data[] = $fila; // Agregamos cada fila como elemento del array
    }
}

// Cierra la conexión
$conexion->close();

// Devolvemos los datos como JSON
header('Content-Type: application/json');
echo json_encode($data);
?>


