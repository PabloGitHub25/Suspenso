<?php
// Conexión a la base de datos
include("../Config/confg.php");

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Recibir los datos del formulario
$email = $_POST['email'];
$contraseña = $_POST['contraseña'];

// Consulta para verificar si el usuario existe
$sql = "SELECT * FROM usuario WHERE email='$email' AND contraseña='$contraseña'";
$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    // Usuario autenticado
    echo "<script>alert('Usuario verificado');</script>";
    echo "<script>window.location.href='../View/VPaginaPrivada.php';</script>";
} else {
    // Usuario no encontrado o credenciales incorrectas
    echo "<script>alert('Usuario no encontrado o credenciales incorrectas');</script>";
}

// Cerrar la conexión
$conexion->close();
?>
