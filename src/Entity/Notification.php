<?php

namespace App\Entity;

use App\Repository\NotificationRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=NotificationRepository::class)
 */
class Notification
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $message;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $person;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $event;

    /**
     * @ORM\Column(type="datetime_immutable")
     */
    private $plannedSentDate;

    /**
     * @ORM\Column(type="datetime_immutable", nullable=true)
     */
    private $sentDate;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(string $message): self
    {
        $this->message = $message;

        return $this;
    }

    public function getPerson(): ?string
    {
        return $this->person;
    }

    public function setPerson(string $person): self
    {
        $this->person = $person;

        return $this;
    }

    public function getEevent(): ?string
    {
        return $this->event;
    }

    public function setEvent(string $event): self
    {
        $this->event = $event;

        return $this;
    }

    public function getPlannedSentDate(): ?\DateTimeImmutable
    {
        return $this->plannedSentDate;
    }

    public function setPlannedSentDate(\DateTimeImmutable $plannedSentDate): self
    {
        $this->plannedSentDate = $plannedSentDate;

        return $this;
    }

    public function getSentDate(): ?\DateTimeImmutable
    {
        return $this->sentDate;
    }

    public function setSentDate(\DateTimeImmutable $sentDate): self
    {
        $this->sentDate = $sentDate;

        return $this;
    }
}
