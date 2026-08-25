<?php
require_once __DIR__ . '/bootstrap.php';

// Captura ambos parámetros de la URL (ej: eje05.php?opcion=1&nombre=Carlos)
$parametro = $_GET['opcion'] ?? 0;
$nombre = $_GET['nombre'] ?? 'Invitado';

echo $twig->render('eje05.html.twig', [
    'parametro' => $parametro,
    'nombre'    => $nombre
]);
