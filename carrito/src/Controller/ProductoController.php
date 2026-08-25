<?php

namespace App\Controller;

use App\Repository\ProductoRepository; // ⚠️ Importante: Agrega esta línea
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductoController extends AbstractController
{
    #[Route('/', name: 'listar_productos')]
    // ⚠️ Agregamos ProductoRepository como parámetro aquí:
    public function listarProductos(ProductoRepository $productoRepository): Response
    {
        // 1. Buscamos todos los productos en la base de datos
        $listaDeProductos = $productoRepository->findAll();

        // 2. Enviamos la variable "productos" que el archivo lista.html.twig necesita
        return $this->render('producto/lista.html.twig', [
            'mensaje'   => 'Esta es la lista de productos',
            'productos' => $listaDeProductos 
        ]);
    }
}
