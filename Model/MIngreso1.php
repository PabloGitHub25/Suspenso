<?php
// Conexión a la base de datos
// Conexión a la base de datos
$conexion = new mysqli("localhost", "root", "", "gestoralbumes");


// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Recibir los datos del formulario
$titulo = $_POST['titulo'];
$fecha = $_POST['fecha'];

// Procesar la imagen
$directorio_destino = "../img/fotos/";
$nombre_archivo = $_FILES['foto']['name'];
$ruta_archivo = $directorio_destino . $nombre_archivo;

if (move_uploaded_file($_FILES['foto']['tmp_name'], $ruta_archivo)) {
    // Insertar el registro en la base de datos
    $sql = "INSERT INTO fotos (titulo, fechaReal, foto) VALUES ('$titulo', '$fecha', '$ruta_archivo')";
    if ($conexion->query($sql) === TRUE) {
        echo "Foto subida y registro insertado correctamente";
    } else {
        echo "Error al insertar registro: " . $conexion->error;
    }
} else {
    echo "Error al subir la foto";
}

// Cerrar la conexión
$conexion->close();
?>
