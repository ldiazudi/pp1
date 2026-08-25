<?php
require_once __DIR__ . '/bootstrap.php';

$pais = [
    "espana" => [ "nombre" => "España", "lengua" => "Castellano", "moneda" => "Euro" ],
    "usa"    => [ "nombre" => "USA", "lengua" => "Inglés", "moneda" => "Dolar" ],
    "arg"    => [ "nombre" => "Argentina", "lengua" => "Castellano", "moneda" => "Peso" ],
    "bra"    => [ "nombre" => "Brasil", "lengua" => "Portugués", "moneda" => "Real" ],
    "fra"    => [ "nombre" => "Francia", "lengua" => "Francés", "moneda" => "Euro" ]
];

echo $twig->render('eje03.html.twig', [
    'paises' => $pais
]);
