<?php

namespace App\Entity;

use App\Repository\TimetableItemRepository;
use DateTimeImmutable;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TimetableItemRepository::class)
 */
class TimetableItem
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="datetime_immutable")
     */
    private $startDate;

    /**
     * @ORM\Column(type="datetime_immutable")
     */
    private $endDate;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $equipments;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $chargePerson;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $event;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getStartDate(): ?DateTimeImmutable
    {
        return $this->startDate;
    }

    public function setStartDate(DateTimeImmutable $startDate): self
    {
        $this->startDate = $startDate;

        return $this;
    }

    public function getEndDate(): ?DateTimeImmutable
    {
        return $this->endDate;
    }

    public function setEndDate(DateTimeImmutable $endDate): self
    {
        $this->endDate = $endDate;

        return $this;
    }

    public function getEquipments(): ?string
    {
        return $this->equipments;
    }

    public function setEquipments(string $equipments): self
    {
        $this->equipments = $equipments;

        return $this;
    }

    public function getChargePerson(): ?string
    {
        return $this->chargePerson;
    }

    public function setChargePerson(string $chargePerson): self
    {
        $this->chargePerson = $chargePerson;

        return $this;
    }

    public function getEvent(): ?string
    {
        return $this->event;
    }

    public function setEvent(string $event): self
    {
        $this->event = $event;

        return $this;
    }
}
