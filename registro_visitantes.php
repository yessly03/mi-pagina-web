<?php
// Recibir datos del formulario
 $nombre = $_POST["nombre_padre"];
 $procedencia = $_POST['procedencia'];
 $area = $_POST['area_visita'];
 $persona = $_POST['persona_visita'];
 $asunto = $_POST['asunto'];
 $identificacion = $_POST['identificacion'];
 $hora_entrada = $_POST['hora_entrada'];
 $hora_salida = $_POST['hora_salida'];

// Crear el registro como bloque HTML
$registro = "
<div style='border:1px solid #ccc; margin:10px; padding:10px;'>
  <p><strong>Nombre:</strong> $nombre</p>
  <p><strong>Procedencia:</strong> $procedencia</p>
  <p><strong>Área que visita:</strong> $area</p>
  <p><strong>Persona que visita:</strong> $persona</p>
  <p><strong>Asunto:</strong> $asunto</p>
  <p><strong>Identificación:</strong> $identificacion</p>
  <p><strong>Hora de entrada:</strong> $hora_entrada</p>
  <p><strong>Hora de salida:</strong> $hora_salida</p>
</div>\n";

// Guardar en el archivo visitantes.html
file_put_contents("visitantes.html", $registro, FILE_APPEND);

// Confirmar registro
echo "<h2>Registro guardado correctamente.</h2>";
echo "<a href='Menu.html'>Volver</a>";
?>
