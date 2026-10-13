<?php

namespace App\Manager;

use App\Repository\ProductoRepository;
use App\Entity\Orden;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;

class OrdenManager


{
    private ProductoRepository $productoRepository;
    private EntityManagerInterface $entityManager;

    // creamos una instancia de ProductoRepository en el constructor
    public function __construct(ProductoRepository $productoRepository, EntityManagerInterface $entityManager)
    {
        $this->productoRepository = $productoRepository;
        $this->entityManager = $entityManager;
    }

    public function agregarProducto(User $usuario, int $idProducto, int $cantidad): void
    {
        
        $orden = $this->obtenerOrden($usuario);

        $producto = $this->productoRepository->find($idProducto);

        $item = $orden->agregarItem($producto, $cantidad);

        //persistimos el item y la orden    
        $this->entityManager->persist($item);
        $this->entityManager->persist($orden);
        $this->entityManager->flush();
    }

    private function obtenerOrden(User $usuario): Orden
    {
        $orden = $this->entityManager->getRepository(Orden::class)->findOneBy(['usuario' => $usuario, 'estado' => 'Iniciada']);
        //si no existe una orden iniciada, la creamos
        if ($orden == null) {
            $orden = new Orden();
            $orden->setUsuario($usuario);
            $orden->setEstado('Iniciada');
            $orden->setIniciada(new \DateTime());
            $this->entityManager->persist($orden);
            $this->entityManager->flush();
        }
        return $orden;
    }
}
