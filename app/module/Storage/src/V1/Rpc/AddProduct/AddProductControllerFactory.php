<?php

namespace Storage\V1\Rpc\AddProduct;

use DEMV\Entity\BrokerIdentifier;
use Doctrine\ORM\EntityManager;
use GuzzleHttp\Client;
use Storage\V1\Rest\Products\ProductsEntity;

class AddProductControllerFactory
{
    public function __invoke($controllers)
    {
        $em          = $controllers->get(EntityManager::class);
        $productRepo = $em->getRepository(ProductsEntity::class);
        $guzzle      = new Client();
        return new AddProductController($guzzle, $em, $productRepo);
    }
}
