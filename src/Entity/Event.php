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
    private $locations;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $transports;

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
    private $equipments;

    /**
     * Только участники мероприятия (ответственные за выполнение задач не включены)
     *
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

    public function getLocations(): ?string
    {
        return $this->locations;
    }

    public function setLocations(string $locations): self
    {
        $this->locations = $locations;

        return $this;
    }

    public function getTransports(): ?string
    {
        return $this->transports;
    }

    public function setTransports(string $transports): self
    {
        $this->transports = $transports;

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

    public function getEquipments(): ?string
    {
        return $this->equipments;
    }

    public function setEquipments(string $equipments): self
    {
        $this->equipments = $equipments;

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
