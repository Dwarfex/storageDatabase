<?php
namespace Storage\V1\Rest\Products;

use OrdbModels\Storage\Product;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 */

class ProductsEntity extends Product
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    public ?int $id = null;

    /**
     * @ORM\Column
     */
    public string $imageUrl = '';



}
