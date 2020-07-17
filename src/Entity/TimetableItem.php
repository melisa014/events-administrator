<?php

namespace App\Entity;

use App\Repository\TimetableItemRepository;
use DateTimeImmutable;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TimetableItemRepository::class)
 */
class TimetableItem
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
     * @var DateTimeImmutable
     *
     * @ORM\Column(type="datetime_immutable")
     */
    private $startDate;

    /**
     * @var DateTimeImmutable
     *
     * @ORM\Column(type="datetime_immutable")
     */
    private $endDate;

    /**
     * @var Collection | Equipment[]
     *
     * @ORM\OneToMany(targetEntity="Equipment", mappedBy="event", cascade={"remove", "persist"})
     */
    private $equipments;

    /**
     * @var Person
     *
     * @ORM\ManyToOne(targetEntity="Person", inversedBy="notifications")
     * @ORM\JoinColumn(name="person_id", referencedColumnName="id")
     */
    private $chargePerson;

    /**
     * @var Event
     *
     * @ORM\ManyToOne(targetEntity="Event", inversedBy="timetableItems")
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
     * @return DateTimeImmutable|null
     */
    public function getStartDate(): ?DateTimeImmutable
    {
        return $this->startDate;
    }

    /**
     * @param DateTimeImmutable $startDate
     *
     * @return $this
     */
    public function setStartDate(DateTimeImmutable $startDate): self
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * @return DateTimeImmutable|null
     */
    public function getEndDate(): ?DateTimeImmutable
    {
        return $this->endDate;
    }

    /**
     * @param DateTimeImmutable $endDate
     *
     * @return $this
     */
    public function setEndDate(DateTimeImmutable $endDate): self
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * @return Collection|Notification[]|null
     */
    public function getEquipments(): ?Collection
    {
        return $this->equipments;
    }

    /**
     * @param Equipment $equipment
     *
     * @return $this
     */
    public function addEquipments(Equipment $equipment): self
    {
        if (!$this->equipments->contains($equipment)) {
            $this->equipments->add($equipment);
        }

        return $this;
    }

    /**
     * @return Person|null
     */
    public function getChargePerson(): ?Person
    {
        return $this->chargePerson;
    }

    /**
     * @param Person $chargePerson
     *
     * @return $this
     */
    public function setChargePerson(Person $chargePerson): self
    {
        $this->chargePerson = $chargePerson;

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
