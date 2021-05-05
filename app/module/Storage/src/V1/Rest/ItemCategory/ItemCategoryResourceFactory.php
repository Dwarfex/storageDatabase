<?php

namespace Storage\V1\Rest\ItemCategory;

use Doctrine\ORM\EntityManager;

class ItemCategoryResourceFactory
{
    public function __invoke($services)
    {
        $em          = $services->get(EntityManager::class);
        $productRepo = $em->getRepository(ItemCategoryEntity::class);
        return new ItemCategoryResource($em, $productRepo);
    }
}
