<?php
// src/Entity/Product.php
namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use App\Repository\ProductRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProductRepository::class)]
class Product
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column]
    private ?int $price = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    #[ORM\Column(type: Types::TEXT)]
    private string $description;
    
    public static function getDescription(){

    }
    
    public static function setDescription(){ 

    }
}