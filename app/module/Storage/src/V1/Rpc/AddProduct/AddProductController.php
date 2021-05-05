<?php

namespace Storage\V1\Rpc\AddProduct;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;
use Faker\Factory;
use GuzzleHttp\Client;
use Laminas\Mvc\Controller\AbstractActionController;
use Piedweb\AmazonParser\ProductPage;
use Storage\V1\Rest\ItemCategory\ItemCategoryEntity;
use Storage\V1\Rest\Products\ProductsEntity;

class AddProductController extends AbstractActionController
{
    private Client $client;
    private EntityManager $entityManager;
    private EntityRepository $productRepository;

    public function __construct(Client $client, EntityManager $entityManager, EntityRepository $productRepository)
    {
        $this->client            = $client;
        $this->entityManager     = $entityManager;
        $this->productRepository = $productRepository;
    }

    public function addProductAction()
    {
        $request       = $this->getRequest();
        $number        = $this->params()->fromRoute('number', false);
        if(!$number){
            return [];
        }
        $alphas = range('A', 'Z');
        $categories= [];
        for($i = 0; $i<10; $i++){
            $category = new ItemCategoryEntity();
            $category->name = 'Category '.$alphas[$i] .' '. rand(0,50000);
            $this->entityManager->persist($category);
            $categories[] = $category;
        }

        $faker = Factory::create();
        $newProduct = new ProductsEntity();
        $newProduct->ean = $faker->ean13;
        $newProduct->gs1 = $faker->ean13;
        $newProduct->asin = 'A'.$faker->ean8;
        $newProduct->description = $faker->sentences[0];
        $newProduct->name = $faker->catchPhrase;
        $newProduct->imageUrl = $faker->imageUrl(640,480,);
        $newProduct->itemCategories = [$categories[rand(0,9)]];

        try {
            $this->entityManager->persist($newProduct);
            $this->entityManager->flush();
        }catch (\Exception $exception){
            return [];
        }

        return $this->redirect()->toRoute('storage.rest.products', ['products_id' => $newProduct->id]);


    }
}
