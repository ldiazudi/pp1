<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductoController extends AbstractController
{
    #[Route('/', name: 'listar_productos')]
    public function listarProductos(): Response
    {
        // Enlazamos el controlador con la vista que crearemos en el Paso 3
        return $this->render('producto/lista.html.twig', [
            'mensaje' => 'Esta es la lista de productos'
        ]);
    }
}
