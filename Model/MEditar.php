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
    <title>Editar Usuario</title>
</head>
<body>
    <center>
        <h2>Editar Usuario</h2>
        <form action="../Model/MActualizar.php" method="post">
            <input type="hidden" name="id" value="<?php echo $usuario['idUser']; ?>">
            <label for="nombre">Nombre Usuario : </label>
            <input type="text" id="nombre" name="nombre" value="<?php echo $usuario['nombreUser']; ?>">
            <br><br>
            <label for="contraseña">Contraseña user: </label>
            <input type="password" id="contraseña" name="contraseña" value="<?php echo $usuario['contraseña']; ?>">
            <br><br>
            <label for="contraseña2">Repetir contraseña: </label>
            <input type="password" id="contraseña2">
            <br><br>
            <label for="email">Email : </label>
            <input type="text" id="email" name="email" value="<?php echo $usuario['email']; ?>">
            <br><br>
            <label for="sexo">Sexo : </label>
            <select name="sexo" id="sexo">
                <option value="Masculino" <?php if ($usuario['sexo'] == 'Masculino') echo 'selected'; ?>>Masculino</option>
                <option value="Femenino" <?php if ($usuario['sexo'] == 'Femenino') echo 'selected'; ?>>Femenino</option>
            </select>
            <br><br>
            <label for="fechNac">Fecha nacimiento : </label>
            <input type="date" id="fechaNac" name="fechaNac" value="<?php echo $usuario['fechaNac']; ?>">
            <br><br>
            <label for="ciudad">Ciudad : </label>
            <input type="text" id="ciudad" name="ciudad" value="<?php echo $usuario['ciudad']; ?>">
            <br><br>
            <label for="pais">País : </label>
            <input type="text" id="pais" name="pais" value="<?php echo $usuario['pais']; ?>">
            <br><br>
            <label for="foto">Ingrese la foto: </label>
            <input type="file" id="foto" name="foto">
            <br><br>
            <input type="submit" value="Actualizar" class="button">
        </form>
    </center>
</body>
</html>
