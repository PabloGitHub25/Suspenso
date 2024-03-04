<?php
include("../Config/confg.php");

// Obtener los criterios de búsqueda y ordenación
$titulo = $_GET['titulo'] ?? '';
$fecha = $_GET['fecha'] ?? '';
$pais = $_GET['pais'] ?? '';
$orden = $_GET['orden'] ?? '';
$ordenSQL = '';

// Construir la consulta SQL
$query = "SELECT * FROM fotos";

// Aplicar los filtros de búsqueda
if (!empty($titulo) || !empty($fecha) || !empty($pais)) {
    $query .= " WHERE ";
    $condiciones = [];
    if (!empty($titulo)) {
        $condiciones[] = "titulo LIKE '%$titulo%'";
    }
    if (!empty($fecha)) {
        $condiciones[] = "fechaReal = '$fecha'";
    }
    if (!empty($pais)) {
        $condiciones[] = "idUser IN (SELECT idUser FROM usuario WHERE pais = '$pais')";
    }
    $query .= implode(" AND ", $condiciones);
}

// Aplicar el ordenamiento
if ($orden == 'asc') {
    $ordenSQL = " ORDER BY titulo ASC";
} elseif ($orden == 'desc') {
    $ordenSQL = " ORDER BY titulo DESC";
}

$query .= $ordenSQL;

// Ejecutar la consulta
$resultado = mysqli_query($conexion, $query);

// Verificar si se obtuvieron resultados
if ($resultado) {
    // Mostrar los resultados en la vista
    include("../View/VListado.php");
} else {
    echo "Error al ejecutar la consulta: " . mysqli_error($conexion);
}

// Cerrar la conexión
mysqli_close($conexion);
?>
