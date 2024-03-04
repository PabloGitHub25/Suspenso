<?php
// Verificar si se recibieron datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Incluir el archivo de configuración de la base de datos
    include("../Config/confg.php");

    // Obtener los datos del formulario
    $nombre = $_POST['nombre'];
    $contraseña = $_POST['contraseña'];
    $email = $_POST['email'];
    $sexo = $_POST['sexo'];
    $fechaNac = $_POST['fechaNac'];
    $ciudad = $_POST['ciudad'];
    $pais = $_POST['pais'];

    // Manejo de la foto
    $foto = $_FILES['foto']['name'];
    $foto_temp = $_FILES['foto']['tmp_name'];
    $ruta = "../ruta/donde/guardar/la/foto/" . $foto;
    move_uploaded_file($foto_temp, $ruta);

    // Preparar la consulta SQL para insertar los datos en la base de datos
    $sql = "INSERT INTO usuario (nombreUser, contraseña, email, sexo, fechaNac, ciudad, pais, foto) 
    VALUES ('$nombre', '$contraseña', '$email', '$sexo', '$fechaNac', '$ciudad', '$pais', '$foto')";

    // Ejecutar la consulta y verificar si se realizó correctamente
    if (mysqli_query($conexion, $sql)) {
        // Redireccionar a una página de éxito si el registro fue exitoso
        header("Location: index.html");
        exit();
    } else {
        // Mostrar un mensaje de error si hubo un problema con la consulta SQL
        echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
    }

    // Cerrar la conexión a la base de datos
    mysqli_close($conexion);
}
?>
