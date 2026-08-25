<?php
require_once __DIR__ . '/bootstrap.php';

// Captura el parámetro 'nombre' de la URL (ej: eje01.php?nombre=Juan)
$nombre = $_GET['nombre'] ?? 'Invitado';

echo $twig->render('eje01.html.twig', [
    'nombre' => $nombre
]);
