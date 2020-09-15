<?php

namespace App\Entity;

use App\Entity\Person\Person;
use App\Repository\TaskRepository;
use DateTimeImmutable;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TaskRepository::class)
 */
class Task
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
    private $text;

    /**
     * @var Person
     *
     * @ORM\ManyToOne(targetEntity="Person", inversedBy="tasks")
     * @ORM\JoinColumn(name="person_id", referencedColumnName="id")
     */
    private $chargePerson;

    /**
     * @var DateTimeImmutable
     *
     * @ORM\Column(type="datetime_immutable")
     */
    private $transmittedAt;

    /**
     * @var DateTimeImmutable
     *
     * @ORM\Column(type="datetime_immutable", nullable=true)
     */
    private $confirmedAt;

    /**
     * @var Part
     *
     * @ORM\ManyToOne(targetEntity="Part", inversedBy="comments")
     * @ORM\JoinColumn(name="part_id", referencedColumnName="id")
     */
    private $part;

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
    public function getText(): ?string
    {
        return $this->text;
    }

    /**
     * @param string $text
     *
     * @return $this
     */
    public function setText(string $text): self
    {
        $this->text = $text;

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
     * @return DateTimeImmutable|null
     */
    public function getTransmittedAt(): ?DateTimeImmutable
    {
        return $this->transmittedAt;
    }

    /**
     * @param DateTimeImmutable $transmittedAt
     *
     * @return $this
     */
    public function setTransmittedAt(DateTimeImmutable $transmittedAt): self
    {
        $this->transmittedAt = $transmittedAt;

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
     * @param DateTimeImmutable $confirmedAt
     *
     * @return $this
     */
    public function setConfirmedAt(DateTimeImmutable $confirmedAt): self
    {
        $this->confirmedAt = $confirmedAt;

        return $this;
    }

    /**
     * @return Part|null
     */
    public function getPart(): ?Part
    {
        return $this->part;
    }

    /**
     * @param Part $part
     *
     * @return $this
     */
    public function setPart(Part $part): self
    {
        $this->part = $part;

        return $this;
    }
}
