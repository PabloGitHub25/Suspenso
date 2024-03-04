<?php
include("../Config/confg.php");

// Verificar si se ha enviado un ID válido
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];

    // Obtener los datos del usuario con el ID especificado
    $query = "SELECT * FROM usuario WHERE idUser = $id";
    $result = mysqli_query($conexion, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $usuario = mysqli_fetch_assoc($result);

        // Verificar si se ha enviado el formulario de confirmación
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['confirmar'])) {
            // Eliminar el usuario de la base de datos
            $query_delete = "DELETE FROM usuario WHERE idUser = $id";
            $result_delete = mysqli_query($conexion, $query_delete);

            if ($result_delete) {
                echo "<script>alert('Usuario eliminado correctamente');</script>";
                echo "<script>window.location.href='../index.html';</script>";
            } else {
                echo "<script>alert('Error al eliminar el usuario');</script>";
            }
        }
    } else {
        echo "No se encontró el usuario.";
        exit;
    }
} else {
    echo "ID no válido.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dar de Baja</title>
</head>
<body>
    <center>
        <h2>Dar de Baja</h2>
        <p>¿Está seguro que desea eliminar el usuario <strong><?php echo $usuario['nombreUser']; ?></strong>?</p>
        <form action="" method="post">
            <input type="submit" name="confirmar" value="Confirmar">
            <a href="../index.html">Cancelar</a>
        </form>
    </center>
</body>
</html>
