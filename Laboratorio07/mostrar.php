<?php
include("conexion.php");

$resultado = $conexion->query("SELECT * FROM libros");

while ($fila = $resultado->fetch_assoc()) {
    echo "<tr>
        <td>{$fila['anio']}</td>
        <td>{$fila['autor']}</td>
        <td>{$fila['titulo']}</td>
        <td>{$fila['especialidad']}</td>
        <td>{$fila['editorial']}</td>
        <td><a href='{$fila['url']}' target='_blank'>Leer libro</a></td>
        <td><a href='editar.php?id={$fila['id']}'>Editar</a></td>
        <td><a href='eliminar.php?id={$fila['id']}'>Eliminar</a></td>
    </tr>";
}
?>