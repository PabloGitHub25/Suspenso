<?php
include("../Config/confg.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $contraseña = $_POST['contraseña'];
    $email = $_POST['email'];
    $sexo = $_POST['sexo'];
    $fechaNac = $_POST['fechaNac'];
    $ciudad = $_POST['ciudad'];
    $pais = $_POST['pais'];

    // Actualizar los datos en la base de datos
    $query = "UPDATE usuario SET nombreUser = '$nombre', contraseña = '$contraseña', email = '$email', sexo = '$sexo', fechaNac = '$fechaNac', ciudad = '$ciudad', pais = '$pais' WHERE idUser = $id";

    $result = mysqli_query($conexion, $query);

    if ($result) {
        echo "<script>alert('Usuario actualizado correctamente');</script>";
        echo "<script>window.location.href='../View/VPaginaPrivada.php';</script>";
    } else {
        echo "<script>alert('Error al actualizar el usuario: " . mysqli_error($conexion) . "');</script>";
    }
}
?>
