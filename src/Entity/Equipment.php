<?php

namespace App\Entity;

use App\Repository\EquipmentRepository;
use DateTimeImmutable;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EquipmentRepository::class)
 */
class Equipment
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
     * @var string
     *
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(type="integer", options={"default" : 0})
     */
    private $cost;

    /**
     * @var TimetableItem
     *
     * @ORM\ManyToOne(targetEntity="TimetableItem", inversedBy="equipments")
     * @ORM\JoinColumn(name="timetable_item_id", referencedColumnName="id")
     */
    private $timetableItem;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getCostInRubles(): ?float
    {
        return $this->cost/100;
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
     * @return TimetableItem|null
     */
    public function getTimetableItem(): ?TimetableItem
    {
        return $this->timetableItem;
    }

    /**
     * @param TimetableItem $timetableItem
     *
     * @return $this
     */
    public function setTimetableItem(TimetableItem $timetableItem): self
    {
        $this->timetableItem = $timetableItem;

        return $this;
    }
}
