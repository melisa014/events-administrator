<?php

namespace App\Entity;

use App\Repository\EventRepository;
use DateTimeImmutable;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EventRepository::class)
 */
class Event
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
     * @ORM\Column(type="string", length=255)
     */
    private $type;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $organizer;

    /**
     * @ORM\Column(type="date_immutable")
     */
    private $startDate;

    /**
     * @ORM\Column(type="date_immutable")
     */
    private $endDate;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $location;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $transport;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nutrition;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $timetable;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $equipment;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $members;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $documents;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $parts;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $notifications;

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

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getOrganizer(): ?string
    {
        return $this->organizer;
    }

    public function setOrganizer(string $organizer): self
    {
        $this->organizer = $organizer;

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

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(string $location): self
    {
        $this->location = $location;

        return $this;
    }

    public function getTransport(): ?string
    {
        return $this->transport;
    }

    public function setTransport(string $transport): self
    {
        $this->transport = $transport;

        return $this;
    }

    public function getNutrition(): ?string
    {
        return $this->nutrition;
    }

    public function setNutrition(string $nutrition): self
    {
        $this->nutrition = $nutrition;

        return $this;
    }

    public function getTimetable(): ?string
    {
        return $this->timetable;
    }

    public function setTimetable(string $timetable): self
    {
        $this->timetable = $timetable;

        return $this;
    }

    public function getEquipment(): ?string
    {
        return $this->equipment;
    }

    public function setEquipment(string $equipment): self
    {
        $this->equipment = $equipment;

        return $this;
    }

    public function getMembers(): ?string
    {
        return $this->members;
    }

    public function setMembers(string $members): self
    {
        $this->members = $members;

        return $this;
    }

    public function getDocuments(): ?string
    {
        return $this->documents;
    }

    public function setDocuments(string $documents): self
    {
        $this->documents = $documents;

        return $this;
    }

    public function getParts(): ?string
    {
        return $this->parts;
    }

    public function setParts(string $parts): self
    {
        $this->parts = $parts;

        return $this;
    }

    public function getNotifications(): ?string
    {
        return $this->notifications;
    }

    public function setNotifications(string $notifications): self
    {
        $this->notifications = $notifications;

        return $this;
    }
}
