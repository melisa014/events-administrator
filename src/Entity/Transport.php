<?php

namespace App\Entity;

use App\Repository\TransportRepository;
use DateTimeImmutable;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TransportRepository::class)
 */
class Transport
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
     * @var int
     *
     * @ORM\Column(type="integer", options={"default" : 0})
     */
    private $cost;

    /**
     * @var TransportType
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $type;

    /**
     * @var Collection|Tiket[]|null
     *
     * @ORM\OneToMany(targetEntity="Tiket", mappedBy="transport", cascade={"remove", "persist"})
     */
    private $tikets;

    /**
     * @var Event
     *
     * @ORM\ManyToOne(targetEntity="Event", inversedBy="transports")
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
     * @return int|null
     */
    public function getCost(): ?int
    {
        return $this->cost;
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
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param string|null $type
     *
     * @return $this
     */
    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return Collection|null
     */
    public function getTikets(): ?Collection
    {
        return $this->tikets;
    }

    /**
     * @param Tiket|null $tiket
     *
     * @return self
     */
    public function setTikets(?Tiket $tiket): self
    {
        if (!$this->tikets->contains($tiket)) {
            $this->tikets->add($tiket);
        }

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
