<?php

namespace App\Entity;

use App\Repository\IngredientRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: IngredientRepository::class)]
class Ingredient
{
    
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[Assert\Length(min: 2, max: 30)]
    #[Assert\Unique]
    #[Assert\NotBlank]
    #[ORM\Column(length: 30)]
    private ?string $name = null;

    #[Assert\Positive]
    #[Assert\NotNull]
    #[ORM\Column]
    private ?float $price = null;

    #[ORM\Column]
    #[Assert\NotNull]
    private ?\DateTimeImmutable $created_date;

    /**
     * Ingredient constructor
     */
    public function __construct()
    {
        $this->created_date = new \DateTimeImmutable();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): static
    {
        $this->price = $price;

        return $this;
    }

    public function getCreatedDate(): ?\DateTimeImmutable
    {
        return $this->created_date;
    }

    public function setCreatedDate(\DateTimeImmutable $created_date): static
    {
        $this->created_date = $created_date;

        return $this;
    }
}
