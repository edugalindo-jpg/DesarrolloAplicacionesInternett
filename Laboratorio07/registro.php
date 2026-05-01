<?php
include("conexion.php");

if (isset($_POST['guardar'])) {
    $anio = $_POST['anio'];
    $autor = $_POST['autor'];
    $titulo = $_POST['titulo'];
    $url = $_POST['url'];
    $especialidad = $_POST['especialidad'];
    $editorial = $_POST['editorial'];

    $sql = "INSERT INTO libros(anio, autor, titulo, url, especialidad, editorial)
            VALUES (?, ?, ?, ?, ?, ?)";

    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("isssss", $anio, $autor, $titulo, $url, $especialidad, $editorial);
    $stmt->execute();

    header("Location: index.php");
}
?>