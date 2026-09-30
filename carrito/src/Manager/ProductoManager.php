<?php

namespace App\Manager;
use App\Repository\ProductoRepository; 
use App\Entity\Producto;

class ProductoManager


{
    private ProductoRepository $productoRepository;

    // creamos una instancia de ProductoRepository en el constructor
    public function __construct( ProductoRepository $productoRepository){
        $this->productoRepository = $productoRepository;
    }
    
    public function getProductos(): Array
    {
        // 1. LLamamos al método findAll del repositorio
        $listaDeProductos = $this->productoRepository->findAll();

        // 2. Devolvemos la lista de productos, arreglo
        return $listaDeProductos;
    }

    public function getProducto(int $id): Producto
    {
        return $this->productoRepository->find($id);
    }
}
