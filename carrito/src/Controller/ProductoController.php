<?php

namespace App\Controller;

use App\Manager\ProductoManager; 
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductoController extends AbstractController
{
    // creamos una instancia de ProductoManager en el constructor
    private ProductoManager $productoManager;

    public function __construct(ProductoManager $productoManager){
        $this->productoManager = $productoManager;
    }

    #[Route('/', name: 'listar_productos')]
    
    public function listarProductos(): Response
    {
        // 1. Buscamos todos los productos en la base de datos
        $listaDeProductos = $this->productoManager->getProductos();

        // 2. Enviamos la variable "productos" que el archivo lista.html.twig necesita
        return $this->render('producto/lista.html.twig', [
            'mensaje'   => 'Esta es la lista de productos',
            'productos' => $listaDeProductos 
        ]);
    }

    #[Route('/producto/{id}', name: 'detalle_producto')]
    public function getProducto(int $id): Response
    {
        $producto = $this->productoManager->getProducto($id);
        return $this->render('producto/detalle.html.twig', [
            'producto' => $producto
        ]);
    }

}
