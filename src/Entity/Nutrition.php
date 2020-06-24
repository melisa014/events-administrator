<?php

namespace App\Entity;

use App\Repository\NutritionRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=NutritionRepository::class)
 */
class Nutrition
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $personsNumber;

    /**
     * @ORM\Column(type="integer", options={"default" : 0})
     */
    private $cost;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $products;

    /**
     * @ORM\Column(type="date_immutable", nullable=true)
     */
    private $confirmedAt;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPersonsNumber(): ?int
    {
        return $this->personsNumber;
    }

    public function setPersonsNumber(?int $personsNumber): self
    {
        $this->personsNumber = $personsNumber;

        return $this;
    }

    public function getCost(): ?int
    {
        return $this->cost;
    }

    public function setCost(int $cost): self
    {
        $this->cost = $cost;

        return $this;
    }

    public function getProducts(): ?string
    {
        return $this->products;
    }

    public function setProducts(string $products): self
    {
        $this->products = $products;

        return $this;
    }

    public function getConfirmedAt(): ?\DateTimeImmutable
    {
        return $this->confirmedAt;
    }

    public function setConfirmedAt(?\DateTimeImmutable $confirmedAt): self
    {
        $this->confirmedAt = $confirmedAt;

        return $this;
    }
}
