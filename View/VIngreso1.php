<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingreso</title>
    <link rel="stylesheet" type="text/css" href="/disenio.css">
    <script src=""></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>
<body>
    
<form action="../Model/MIngreso1.php" method="post" enctype="multipart/form-data">
    <label for="titulo">Titulo foto: </label>
    <input type="text" id="titulo" name="titulo">
    <br>
    <br>
    <label for="fecha">Fecha de realización: </label>
    <input type="date" id="fecha" name="fecha">
    <br>
    <br>
    <label for="foto">Ingrese la foto: </label>
    <input type="file" id="foto" name="foto">
    <input type="submit" class="btn btn-primary" value="Ingresar" name="submit">
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src=""></script>
</body>
</html>
