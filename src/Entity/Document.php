<?php

namespace App\Entity;

use App\Repository\DocumentRepository;
use DateTimeImmutable;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DocumentRepository::class)
 */
class Document
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var DocumentType
     *
     * @ORM\Column(type="string", length=255)
     */
    private $type;

    /**
     * @var int
     *
     * @ORM\Column(type="integer", nullable=true)
     */
    private $cost;

    /**
     * @var Person
     *
     * @ORM\ManyToOne(targetEntity="Person", inversedBy="notifications")
     * @ORM\JoinColumn(name="person_id", referencedColumnName="id")
     */
    private $person;

    /**
     * @var Event
     *
     * @ORM\ManyToOne(targetEntity="Event", inversedBy="notifications")
     * @ORM\JoinColumn(name="event_id", referencedColumnName="id")
     */
    private $event;

    /**
     * @var DateTimeImmutable
     *
     * @ORM\Column(type="datetime_immutable", nullable=true)
     */
    private $confirmedAt;

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
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return $this
     */
    public function setType(string $type): self
    {
        $this->type = $type;

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
     * @param int|null $cost
     *
     * @return $this
     */
    public function setCost(?int $cost): self
    {
        $this->cost = $cost;

        return $this;
    }

    /**
     * @return Person|null
     */
    public function getPerson(): ?Person
    {
        return $this->person;
    }

    /**
     * @param Person $person
     *
     * @return $this
     */
    public function setPerson(Person $person): self
    {
        $this->person = $person;

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

    /**
     * @return DateTimeImmutable|null
     */
    public function getConfirmedAt(): ?DateTimeImmutable
    {
        return $this->confirmedAt;
    }

    /**
     * @param DateTimeImmutable|null $confirmedAt
     *
     * @return $this
     */
    public function setConfirmedAt(?DateTimeImmutable $confirmedAt): self
    {
        $this->confirmedAt = $confirmedAt;

        return $this;
    }
}
