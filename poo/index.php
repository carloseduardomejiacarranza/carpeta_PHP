<?php


require_once "Producto.php";

$p1 = [
        ["nombre" => "Nombre 1", "precio" => 10, "categoria" => "Categoria 1", "estaPublicado" => true, "puntuacion" => 5],
        ["nombre" => "Nombre 2", "precio" => 5, "categoria" => "Categoria 2", "estaPublicado" => false, "puntuacion" => 10],
];

$p2 = [
        new Producto("Nombre 1", 10, "Categoria 1", true, 5),
        new Producto("Nombre 2", 5, "Categoria 2", false, 10),
];

?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>POO</title>
</head>
<body>

<?php

foreach ($p1 as $p) {
    echo $p["nombre"] . " " . $p["precio"] . " " . $p["categoria"] . "<br>";
}

foreach ($p2 as $p) {
    $p->printHTML();
}


?>

</body>
</html>