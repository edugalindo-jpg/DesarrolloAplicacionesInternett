<?php
include("conexion.php");

$id = $_GET['id'];

if (isset($_POST['actualizar'])) {
    $anio = $_POST['anio'];
    $autor = $_POST['autor'];
    $titulo = $_POST['titulo'];
    $url = $_POST['url'];
    $especialidad = $_POST['especialidad'];
    $editorial = $_POST['editorial'];

    $sql = "UPDATE libros 
            SET anio=?, autor=?, titulo=?, url=?, especialidad=?, editorial=? 
            WHERE id=?";

    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("isssssi", $anio, $autor, $titulo, $url, $especialidad, $editorial, $id);
    $stmt->execute();

    header("Location: index.php");
}

$resultado = $conexion->query("SELECT * FROM libros WHERE id=$id");
$fila = $resultado->fetch_assoc();
?>

<form method="POST">
    <input type="number" name="anio" value="<?= $fila['anio'] ?>">
    <input type="text" name="autor" value="<?= $fila['autor'] ?>">
    <input type="text" name="titulo" value="<?= $fila['titulo'] ?>">
    <input type="text" name="url" value="<?= $fila['url'] ?>">
    <input type="text" name="especialidad" value="<?= $fila['especialidad'] ?>">
    <input type="text" name="editorial" value="<?= $fila['editorial'] ?>">
    <button type="submit" name="actualizar">Actualizar</button>
</form>