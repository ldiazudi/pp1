<?php
require_once __DIR__ . '/bootstrap.php';

// Captura el parámetro 'opcion' (ej: eje04.php?opcion=0 o opcion=1)
$parametro = $_GET['opcion'] ?? 0;

echo $twig->render('eje04.html.twig', [
    'parametro' => $parametro
]);
