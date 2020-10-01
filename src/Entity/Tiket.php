<?php

namespace App\Entity;

use App\Entity\Person\Person;
use App\Repository\TiketRepository;
use DateTimeImmutable;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TiketRepository::class)
 */
class Tiket
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
    private $departureFrom;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255)
     */
    private $arriveTo;

    /**
     * @var DateTimeImmutable
     *
     * @ORM\Column(type="datetime_immutable")
     */
    private $departureAt;

    /**
     * @var DateTimeImmutable
     *
     * @ORM\Column(type="datetime_immutable")
     */
    private $arriveAt;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $bookingNumber;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $voyageNumber;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $seatNumber;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $luggageWeight;

    /**
     * @var int
     *
     * @ORM\Column(type="integer", options={"default" : 0})
     */
    private $price;

    /**
     * @var Person
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Person\Person", inversedBy="tikets")
     * @ORM\JoinColumn(name="person_id", referencedColumnName="id")
     */
    private $passenger;

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
    public function getDepartureFrom(): ?string
    {
        return $this->departureFrom;
    }

    /**
     * @param string $departureFrom
     *
     * @return $this
     */
    public function setDepartureFrom(string $departureFrom): self
    {
        $this->departureFrom = $departureFrom;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getArriveTo(): ?string
    {
        return $this->arriveTo;
    }

    /**
     * @param string $arriveTo
     *
     * @return $this
     */
    public function setArriveTo(string $arriveTo): self
    {
        $this->arriveTo = $arriveTo;

        return $this;
    }

    /**
     * @return DateTimeImmutable|null
     */
    public function getDepartureAt(): ?DateTimeImmutable
    {
        return $this->departureAt;
    }

    /**
     * @param DateTimeImmutable $departureAt
     *
     * @return $this
     */
    public function setDepartureAt(DateTimeImmutable $departureAt): self
    {
        $this->departureAt = $departureAt;

        return $this;
    }

    /**
     * @return DateTimeImmutable|null
     */
    public function getArriveAt(): ?DateTimeImmutable
    {
        return $this->arriveAt;
    }

    /**
     * @param DateTimeImmutable $arriveAt
     *
     * @return $this
     */
    public function setArriveAt(DateTimeImmutable $arriveAt): self
    {
        $this->arriveAt = $arriveAt;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getBookingNumber(): ?string
    {
        return $this->bookingNumber;
    }

    /**
     * @param string $bookingNumber
     *
     * @return $this
     */
    public function setBookingNumber(string $bookingNumber): self
    {
        $this->bookingNumber = $bookingNumber;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getVoyageNumber(): ?string
    {
        return $this->voyageNumber;
    }

    /**
     * @param string $voyageNumber
     *
     * @return $this
     */
    public function setVoyageNumber(string $voyageNumber): self
    {
        $this->voyageNumber = $voyageNumber;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getSeatNumber(): ?string
    {
        return $this->seatNumber;
    }

    /**
     * @param string $seatNumber
     *
     * @return $this
     */
    public function setSeatNumber(string $seatNumber): self
    {
        $this->seatNumber = $seatNumber;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getLuggageWeight(): ?string
    {
        return $this->luggageWeight;
    }

    /**
     * @param string $luggageWeight
     *
     * @return $this
     */
    public function setLuggageWeight(string $luggageWeight): self
    {
        $this->luggageWeight = $luggageWeight;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getPrice(): ?int
    {
        return $this->price;
    }

    /**
     * @param int $price
     *
     * @return $this
     */
    public function setPrice(int $price): self
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @return Person|null
     */
    public function getPassenger(): ?Person
    {
        return $this->passenger;
    }

    /**
     * @param Person $passenger
     *
     * @return $this
     */
    public function setPassenger(Person $passenger): self
    {
        $this->passenger = $passenger;

        return $this;
    }
}
