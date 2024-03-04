<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Fotos</title>
</head>
<body>

<h1>Listado de Fotos</h1>

<table border="1">
    <tr>
        <th>Título</th>
        <th>Fecha</th>
        <th>País</th>
    </tr>
    <?php while ($fila = mysqli_fetch_assoc($resultado)): ?>
        <tr>
            <td><?php echo $fila['titulo']; ?></td>
            <td><?php echo $fila['fechaReal']; ?></td>
            <td><?php echo obtenerPaisUsuario($fila['idUser']); ?></td>
        </tr>
    <?php endwhile; ?>
</table>

</body>
</html>

<?php
function obtenerPaisUsuario($idUser) {
    include("../Config/confg.php");
    $query = "SELECT pais FROM usuario WHERE idUser = $idUser";
    $resultado = mysqli_query($conexion, $query);
    if ($resultado && mysqli_num_rows($resultado) > 0) {
        $fila = mysqli_fetch_assoc($resultado);
        return $fila['pais'];
    } else {
        return "Desconocido";
    }
}
?>
