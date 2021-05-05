<?php
namespace Storage\V1\Rest\ItemCategory;

use OrdbModels\Storage\ItemCategory;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity()
 */

class ItemCategoryEntity extends ItemCategory
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    public ?int $id = null;
}
