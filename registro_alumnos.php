<?php
// Obtener los datos enviados desde el formulario
$fecha = $_POST['fecha'];
$nombre_alumno = $_POST['nombre_alumno'];
$hora_entrada = $_POST['hora_entrada'];
$hora_salida = $_POST['hora_salida'];

// Crear el contenido a guardar como bloque HTML
$registro = "
<div style='border:1px solid #ccc; margin:10px; padding:10px;'>
  <p><strong>Fecha:</strong> $fecha</p>
  <p><strong>Nombre del alumno:</strong> $nombre_alumno</p>
  <p><strong>Hora de entrada:</strong> $hora_entrada</p>
  <p><strong>Hora de salida:</strong> $hora_salida</p>
</div>\n";

// Guardar los datos en un archivo llamado alumnos.html
file_put_contents("alumnos.html", $registro, FILE_APPEND);

// Mostrar confirmación al usuario
echo "<h2>Registro guardado correctamente.</h2>";
echo "<a href='alumnos.html'>Volver</a>";
?>

