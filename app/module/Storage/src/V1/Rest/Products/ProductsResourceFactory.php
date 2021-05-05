<?php
namespace Storage\V1\Rest\Products;

use Doctrine\ORM\EntityManager;

class ProductsResourceFactory
{
    public function __invoke($services)
    {
        $em          = $services->get(EntityManager::class);
        $productRepo = $em->getRepository(ProductsEntity::class);
        return new ProductsResource($em, $productRepo);
    }
}
