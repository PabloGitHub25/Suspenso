<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    <h1 style="text-align: center;">Registro de Nuevo Usuario</h1>
    <form action="../Model/MVerificarRegistro.php" method="post" enctype="multipart/form-data">
        <label for="nombre">Nombre Usuario:</label>
        <input type="text" name="nombre" id="nombre">
        <br><br>
        <label for="contraseña">Contraseña:</label>
        <input type="password" name="contraseña" id="contraseña">
        <br><br>
        <label for="contraseña2">Repetir contraseña:</label>
        <input type="password" name="contraseña2" id="contraseña2">
        <br><br>
        <label for="email">Email:</label>
        <input type="text" name="email" id="email">
        <br><br>
        <label for="sexo">Sexo:</label>
        <select name="sexo" id="sexo">
            <option value="Masculino">Masculino</option>
            <option value="Femenino">Femenino</option>
        </select>
        <br><br>
        <label for="fechNac">Fecha nacimiento:</label>
        <input type="date" name="fechaNac" id="fechaNac" max='2024-03-04'>
        <br><br>
        <label for="ciudad">Ciudad:</label>
        <input type="text" name="ciudad" id="ciudad">
        <br><br>
        <label for="pais">País:</label>
        <input type="text" name="pais" id="pais">
        <br><br>
        <label for="foto">Ingrese la foto:</label>
        <input type="file" id="foto" name="foto">
        <br><br>
        <input type="submit" value="Agregar usuario" class="button">
    </form>
</body>
</html>
