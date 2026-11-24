<?php

require_once "secciones/utils.php";

include_once("arrays_a_usar.php");

// Si entramos en la página a través de POST, vamos a intentar recuperar/obtener los datos de los inputs que estén en el formulario desde donde se envía
// $_POST
// $_GET

include_once "secciones/obtener_datos_formulario.php";

?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Primer Ejercicio PHP Web</title>

    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>

<?php
include "secciones/primera-seccion.php";
include_once "secciones/formulario_creacion.php";
?>

</body>
</html>