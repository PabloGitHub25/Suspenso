<?php
include("../Config/confg.php");

// Consulta SQL
$sql = "SELECT * FROM usuario";
$result = mysqli_query($conexion, $sql);

if ($result) {
    if (mysqli_num_rows($result) > 0) {
        // Mostrar los datos en una tabla
        echo "<div style='text-align: center;'>
                <h2>Listado</h2>
                <table border='1' style='margin: 0 auto;'> 
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Sexo</th>
                        <th>Fecha Nacimiento</th>
                        <th>Ciudad</th>
                        <th>Pais</th>
                        <th>Foto</th>
                        <th>Acción</th>
                    </tr>";

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>{$row['idUser']}</td>
                    <td>{$row['nombreUser']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['sexo']}</td>
                    <td>{$row['fechaNac']}</td>
                    <td>{$row['ciudad']}</td>
                    <td>{$row['pais']}</td>
                    <td>{$row['foto']}</td>
                    <td><a href='MEditar.php?id={$row['idUser']}'>Editar</a></td>
                  </tr>";
        }
        echo "</table>
              </div>";
    } else {
        echo "<script>alert('No se encontraron resultados.');</script>";
        echo "<script>window.location.href='../index.html';</script>";
    }
} else {
    echo "Error al ejecutar la consulta: " . mysqli_error($conexion);
}

// Cerrar la conexión
mysqli_close($conexion);
?>
