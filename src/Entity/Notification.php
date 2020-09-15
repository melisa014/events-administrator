<?php

namespace App\Entity;

use App\Entity\Person\Person;
use App\Repository\NotificationRepository;
use DateTimeImmutable;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=NotificationRepository::class)
 */
class Notification
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
     * @ORM\Column(type="text")
     */
    private $message;

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
     * @ORM\Column(type="datetime_immutable")
     */
    private $plannedSentDate;

    /**
     * @var DateTimeImmutable
     *
     * @ORM\Column(type="datetime_immutable", nullable=true)
     */
    private $sentDate;

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
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * @param string $message
     *
     * @return $this
     */
    public function setMessage(string $message): self
    {
        $this->message = $message;

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
    public function getPlannedSentDate(): ?DateTimeImmutable
    {
        return $this->plannedSentDate;
    }

    /**
     * @param DateTimeImmutable $plannedSentDate
     *
     * @return $this
     */
    public function setPlannedSentDate(DateTimeImmutable $plannedSentDate): self
    {
        $this->plannedSentDate = $plannedSentDate;

        return $this;
    }

    /**
     * @return DateTimeImmutable|null
     */
    public function getSentDate(): ?DateTimeImmutable
    {
        return $this->sentDate;
    }

    /**
     * @param DateTimeImmutable $sentDate
     *
     * @return $this
     */
    public function setSentDate(DateTimeImmutable $sentDate): self
    {
        $this->sentDate = $sentDate;

        return $this;
    }
}
