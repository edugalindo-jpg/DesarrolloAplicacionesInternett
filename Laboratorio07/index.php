<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Biblioteca Digital</title>
</head>
<body>

<h2>Registro de Libros</h2>

<form action="registro.php" method="POST">
    <input type="number" name="anio" placeholder="Año" required>
    <input type="text" name="autor" placeholder="Autor" required>
    <input type="text" name="titulo" placeholder="Título" required>
    <input type="text" name="url" placeholder="URL del libro" required>
    <input type="text" name="especialidad" placeholder="Especialidad" required>
    <input type="text" name="editorial" placeholder="Editorial" required>
    <button type="submit" name="guardar">Guardar</button>
</form>

<h2>Listado de Libros</h2>

<table border="1">
    <tr>
        <th>Año</th>
        <th>Autor</th>
        <th>Título</th>
        <th>Especialidad</th>
        <th>Editorial</th>
        <th>Leer</th>
        <th>Editar</th>
        <th>Eliminar</th>
    </tr>

    <?php include("mostrar.php"); ?>

</table>

</body>
</html>