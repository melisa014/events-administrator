<?php

namespace App\Entity;

use App\Repository\EventRepository;
use DateTimeImmutable;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EventRepository::class)
 */
class Event
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
     * @var EventType
     *
     * @ORM\Column(type="string", length=255)
     */
    private $type;

    /**
     * @var Person
     *
     * @ORM\OneToOne(targetEntity="Person")
     * @ORM\JoinColumn(name="organizer_id", referencedColumnName="id")
     */
    private $organizer;

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
     * @var Collection | Location[]
     *
     * @ORM\OneToMany(targetEntity="Location", mappedBy="event", cascade={"remove", "persist"})
     */
    private $locations;

    /**
     * @var Collection | Transport[]
     *
     * @ORM\OneToMany(targetEntity="Transport", mappedBy="event", cascade={"remove", "persist"})
     */
    private $transports;

    /**
     * @var Nutrition
     *
     * @ORM\OneToOne(targetEntity="Nutrition")
     * @ORM\JoinColumn(name="nutrition_id", referencedColumnName="id")
     */
    private $nutrition;

    /**
     * @var Collection | TimetableItem[]
     *
     * @ORM\OneToMany(targetEntity="TimetableItem", mappedBy="event", cascade={"remove", "persist"})
     */
    private $timetableItems;

    /**
     * @var Collection | Equipment[]
     *
     * @ORM\OneToMany(targetEntity="Equipment", mappedBy="event", cascade={"remove", "persist"})
     */
    private $equipments;

    /**
     * @var Collection | Member[]
     *
     * @ORM\OneToMany(targetEntity="Member", mappedBy="event", cascade={"remove", "persist"})
     */
    private $members;

    /**
     * @var Collection | Document[]
     *
     * @ORM\OneToMany(targetEntity="Document", mappedBy="event", cascade={"remove", "persist"})
     */
    private $documents;

    /**
     * @var Collection | Part[]
     *
     * @ORM\OneToMany(targetEntity="Part", mappedBy="event", cascade={"remove", "persist"})
     */
    private $parts;

    /**
     * @var Collection | Notification[]
     *
     * @ORM\OneToMany(targetEntity="Notification", mappedBy="event", cascade={"remove", "persist"})
     */
    private $notifications;

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
     * @return EventType|null
     */
    public function getType(): ?EventType
    {
        return $this->type;
    }

    /**
     * @param EventType $type
     *
     * @return $this
     */
    public function setType(EventType $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return Person|null
     */
    public function getOrganizer(): ?Person
    {
        return $this->organizer;
    }

    /**
     * @param Person $organizer
     *
     * @return $this
     */
    public function setOrganizer(Person $organizer): self
    {
        $this->organizer = $organizer;

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
     * @return Collection|Location[]|null
     */
    public function getLocations(): ?Collection
    {
        return $this->locations;
    }

    /**
     * @param Location $location
     *
     * @return $this
     */
    public function addLocation(Location $location): self
    {
        if (!$this->locations->contains($location)) {
            $this->locations->add($location);
        }

        return $this;
    }

    /**
     * @return Collection|Transport[]|null
     */
    public function getTransports(): ?Collection
    {
        return $this->transports;
    }

    /**
     * @param Transport $transport
     *
     * @return $this
     */
    public function addTransport(Transport $transport): self
    {
        if (!$this->transports->contains($transport)) {
            $this->transports->add($transport);
        }

        return $this;
    }

    /**
     * @return Nutrition|null
     */
    public function getNutrition(): ?Nutrition
    {
        return $this->nutrition;
    }

    /**
     * @param Nutrition $nutrition
     *
     * @return $this
     */
    public function setNutrition(Nutrition $nutrition): self
    {
        $this->nutrition = $nutrition;

        return $this;
    }

    /**
     * @return Collection|TimetableItem[]|null
     */
    public function getTimetableItems(): ?Collection
    {
        return $this->timetableItems;
    }

    /**
     * @param TimetableItem $timetableItem
     *
     * @return $this
     */
    public function addTimetableItem(TimetableItem $timetableItem): self
    {
        if (!$this->timetableItems->contains($timetableItem)) {
            $this->timetableItems->add($timetableItem);
        }

        return $this;
    }

    /**
     * @return Collection|Equipment[]|null
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
    public function addEquipment(Equipment $equipment): self
    {
        if (!$this->equipments->contains($equipment)) {
            $this->equipments->add($equipment);
        }

        return $this;
    }

    /**
     * @return Collection|Member[]|null
     */
    public function getMembers(): ?Collection
    {
        return $this->members;
    }

    /**
     * @param Member $member
     *
     * @return $this
     */
    public function addMember(Member $member): self
    {
        if (!$this->members->contains($member)) {
            $this->members->add($member);
        }

        return $this;
    }

    /**
     * @return Collection|Document[]|null
     */
    public function getDocuments(): ?Collection
    {
        return $this->documents;
    }

    /**
     * @param Document $document
     *
     * @return $this
     */
    public function addDocument(Document $document): self
    {
        if (!$this->documents->contains($document)) {
            $this->documents->add($document);
        }

        return $this;
    }

    /**
     * @return Collection|Part[]|null
     */
    public function getParts(): ?Collection
    {
        return $this->parts;
    }

    /**
     * @param Part $part
     *
     * @return $this
     */
    public function addPart(Part $part): self
    {
        if (!$this->parts->contains($part)) {
            $this->parts->add($part);
        }

        return $this;
    }

    /**
     * @return Collection|Notification[]|null
     */
    public function getNotifications(): ?Collection
    {
        return $this->notifications;
    }

    /**
     * @param Notification $notification
     *
     * @return $this
     */
    public function setNotification(Notification $notification): self
    {
        if (!$this->notifications->contains($notification)) {
            $this->notifications->add($notification);
        }

        return $this;
    }
}
