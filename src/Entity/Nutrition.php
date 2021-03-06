<?php

namespace App\Entity;

use App\Repository\NutritionRepository;
use DateTimeImmutable;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=NutritionRepository::class)
 */
class Nutrition
{
    /**
     * @var int
     *
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(type="integer", nullable=true)
     */
    private $personsCount;

    /**
     * @var int
     *
     * @ORM\Column(type="integer", options={"default" : 0})
     */
    private $cost;

    /**
     * @var Collection|Product[]|null
     *
     * @ORM\OneToMany(targetEntity="Product", mappedBy="nutrition", cascade={"remove", "persist"})
     */
    private $products;

    /**
     * @var Event
     *
     * @ORM\OneToOne(targetEntity="Event")
     * @ORM\JoinColumn(name="event_id", referencedColumnName="id")
     */
    private $event;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return int|null
     */
    public function getPersonsCount(): ?int
    {
        return $this->personsCount;
    }

    /**
     * @param int|null $personsCount
     *
     * @return $this
     */
    public function setPersonsCount(?int $personsCount): self
    {
        $this->personsCount = $personsCount;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getCost(): ?int
    {
        return $this->cost;
    }

    /**
     * @param int $cost
     *
     * @return $this
     */
    public function setCost(int $cost): self
    {
        $this->cost = $cost;

        return $this;
    }

    /**
     * @return Collection|null
     */
    public function getProducts(): ?Collection
    {
        return $this->products;
    }

    /**
     * @param Product $product
     *
     * @return $this
     */
    public function addProduct(Product $product): self
    {
        if (!$this->products->contains($product)) {
            $this->products->add($product);
        }

        return $this;
    }

    /**
     * @return Event|null
     */
    public function getEvent(): ?Event
    {
        return $this->event;
    }

    /**
     * @param Event $event
     *
     * @return $this
     */
    public function setEvent(Event $event): self
    {
        $this->event = $event;

        return $this;
    }
}
