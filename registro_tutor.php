<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $fecha = $_POST["fecha"];
    $nombre_padre = $_POST['nombre_padre'];
    $procedencia = $_POST['procedencia'];
    $area_visita = $_POST['area_visita'];
    $persona_visita = $_POST['persona_visita'];
    $asunto = $_POST['asunto'];
    $identificacion = $_POST["identificacion"];
    $nombre_alumno = $_POST["nombre_alumno"];
    $hora_entrada = $_POST["hora_entrada"];
    $hora_salida = $_POST["hora_salida"];

    // Crear una línea de texto con los datos
    $registro = "$fecha | $nombre_padre | $procedencia | $area_visita | $persona_visita | $asunto | $identificacion | $nombre_alumno | $hora_entrada | $hora_salida\n";

    // Guardar en archivo (modo de agregar)
    file_put_contents("registros_tutores.html", $registro, FILE_APPEND);

    // Redireccionar o mostrar mensaje
    echo "Registro guardado correctamente.";
} else {
    echo "Método no permitido.";
}
echo "<a href='Menu.html'>Volver</a>";
?>