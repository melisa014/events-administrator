<?php

namespace App\Entity;

use App\Repository\TaskRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TaskRepository::class)
 */
class Task
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
    private $text;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $chargePerson;

    /**
     * @ORM\Column(type="datetime_immutable")
     */
    private $transmittedAt;

    /**
     * @ORM\Column(type="datetime_immutable", nullable=true)
     */
    private $confirmedAt;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $part;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(string $text): self
    {
        $this->text = $text;

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

    public function getTransmittedAt(): ?\DateTimeImmutable
    {
        return $this->transmittedAt;
    }

    public function setTransmittedAt(\DateTimeImmutable $transmittedAt): self
    {
        $this->transmittedAt = $transmittedAt;

        return $this;
    }

    public function getConfirmedAt(): ?\DateTimeImmutable
    {
        return $this->confirmedAt;
    }

    public function setConfirmedAt(\DateTimeImmutable $confirmedAt): self
    {
        $this->confirmedAt = $confirmedAt;

        return $this;
    }

    public function getPart(): ?string
    {
        return $this->part;
    }

    public function setPart(string $part): self
    {
        $this->part = $part;

        return $this;
    }
}
