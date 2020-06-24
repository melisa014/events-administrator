<?php

namespace App\Entity;

use App\Repository\TiketRepository;
use DateTimeImmutable;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TiketRepository::class)
 */
class Tiket
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
    private $departureFrom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $arriveTo;

    /**
     * @ORM\Column(type="date_immutable")
     */
    private $departureAt;

    /**
     * @ORM\Column(type="date_immutable")
     */
    private $arriveAt;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $bookingNumber;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $voyageNumber;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $seatNumber;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $luggageWeight;

    /**
     * @ORM\Column(type="integer", options={"default" : 0})
     */
    private $price;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $passenger;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDepartureFrom(): ?string
    {
        return $this->departureFrom;
    }

    public function setDepartureFrom(string $departureFrom): self
    {
        $this->departureFrom = $departureFrom;

        return $this;
    }

    public function getArriveTo(): ?string
    {
        return $this->arriveTo;
    }

    public function setArriveTo(string $arriveTo): self
    {
        $this->arriveTo = $arriveTo;

        return $this;
    }

    public function getDepartureAt(): ?DateTimeImmutable
    {
        return $this->departureAt;
    }

    public function setDepartureAt(DateTimeImmutable $departureAt): self
    {
        $this->departureAt = $departureAt;

        return $this;
    }

    public function getArriveAt(): ?DateTimeImmutable
    {
        return $this->arriveAt;
    }

    public function setArriveAt(DateTimeImmutable $arriveAt): self
    {
        $this->arriveAt = $arriveAt;

        return $this;
    }

    public function getBookingNumber(): ?string
    {
        return $this->bookingNumber;
    }

    public function setBookingNumber(string $bookingNumber): self
    {
        $this->bookingNumber = $bookingNumber;

        return $this;
    }

    public function getVoyageNumber(): ?string
    {
        return $this->voyageNumber;
    }

    public function setVoyageNumber(string $voyageNumber): self
    {
        $this->voyageNumber = $voyageNumber;

        return $this;
    }

    public function getSeatNumber(): ?string
    {
        return $this->seatNumber;
    }

    public function setSeatNumber(string $seatNumber): self
    {
        $this->seatNumber = $seatNumber;

        return $this;
    }

    public function getLuggageWeight(): ?string
    {
        return $this->luggageWeight;
    }

    public function setLuggageWeight(string $luggageWeight): self
    {
        $this->luggageWeight = $luggageWeight;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getPassenger(): ?string
    {
        return $this->passenger;
    }

    public function setPassenger(string $passenger): self
    {
        $this->passenger = $passenger;

        return $this;
    }
}
