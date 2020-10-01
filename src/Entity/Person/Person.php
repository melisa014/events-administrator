<?php

namespace App\Entity\Person;

use App\Entity\Member;
use App\Entity\Notification;
use App\Entity\Task;
use App\Entity\Tiket;
use App\Repository\PersonRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=PersonRepository::class)
 * @ORM\Table(name="person")
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="discr", type="string")
 * @ORM\DiscriminatorMap({
 *     "person" = "App\Entity\Person\Person",
 *     "administrator" = "App\Entity\Person\Administrator",
 * })
 */
class Person
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
     * @Assert\NotBlank(message="Поле обязательно к заполнению")
     * @ORM\Column(type="string", length=255)
     */
    private $firstName;

    /**
     * @var string|null
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $middleName;

    /**
     * @var string|null
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $lastName;

    /**
     * @var string
     *
     * @Assert\NotBlank(message="Поле обязательно к заполнению")
     * @Assert\Regex(
     *     pattern="/^79\d{9}/",
     *     match=false,
     *     message="Введите номер телефона в формате 79*********"
     * )
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $phone;

    /**
     * @var Collection | Member[]
     *
     * @ORM\OneToMany(targetEntity="App\Entity\Member", mappedBy="person")
     */
    private $memberships;

    /**
     * @var Collection | Task[]
     *
     * @ORM\OneToMany(targetEntity="App\Entity\Task", mappedBy="person", cascade={"remove", "persist"})
     */
    private $tasks;

    /**
     * @var Collection | Notification[]
     *
     * @ORM\OneToMany(targetEntity="App\Entity\Notification", mappedBy="person", cascade={"remove", "persist"})
     */
    private $notifications;

    /**
     * @var Collection|Tiket[]|null
     *
     * @ORM\OneToMany(targetEntity="App\Entity\Tiket", mappedBy="passenger", cascade={"remove", "persist"})
     */
    private $tikets;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     *
     * @return $this
     */
    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getMiddleName(): ?string
    {
        return $this->middleName;
    }

    /**
     * @param string|null $middleName
     *
     * @return $this
     */
    public function setMiddleName(?string $middleName): self
    {
        $this->middleName = $middleName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * @param string|null $lastName
     *
     * @return $this
     */
    public function setLastName(?string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     *
     * @return $this
     */
    public function setPhone(string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * @return Collection|Member[]|null
     */
    public function getMemberships(): ?Collection
    {
        return $this->memberships;
    }

    /**
     * @param Member $member
     *
     * @return $this
     */
    public function addMembership(Member $member): self
    {
        if (!$this->memberships->contains($member)) {
            $this->memberships->add($member);
        }

        return $this;
    }

    /**
     * @return Collection|Task[]|null
     */
    public function getTasks(): ?Collection
    {
        return $this->tasks;
    }

    /**
     * @param Task $task
     *
     * @return $this
     */
    public function addTask(Task $task): self
    {
        if (!$this->tasks->contains($task)) {
            $this->tasks->add($task);
        }

        return $this;
    }

    /**
     * @return Collection|Notification[]|null
     */
    public function getNotifications(): ?Collection
    {
        return $this->notifications;
    }

    /**
     * @param Notification $notification
     *
     * @return $this
     */
    public function addNotification(Notification $notification): self
    {
        if (!$this->notifications->contains($notification)) {
            $this->notifications->add($notification);
        }

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
}
