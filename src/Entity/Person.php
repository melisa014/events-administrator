<?php

namespace App\Entity;

use App\Repository\PersonRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PersonRepository::class)
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
     * @var int
     *
     * @ORM\Column(type="string", length=255)
     */
    private $firstName;

    /**
     * @var int
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $middleName;

    /**
     * @var int
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $phone;

    /**
     * @var Collection | Member[]
     *
     * @ORM\OneToMany(targetEntity="Member", mappedBy="person")
     */
    private $memberships;

    /**
     * @var Collection | Task[]
     *
     * @ORM\OneToMany(targetEntity="Task", mappedBy="person", cascade={"remove", "persist"})
     */
    private $tasks;

    /**
     * @var Collection | Notification[]
     *
     * @ORM\OneToMany(targetEntity="Notification", mappedBy="person", cascade={"remove", "persist"})
     */
    private $notifications;

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
    public function getFirstName(): ?string
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
     * @param string $middleName
     *
     * @return $this
     */
    public function setMiddleName(string $middleName): self
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
     * @param string $lastName
     *
     * @return $this
     */
    public function setLastName(string $lastName): self
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
}
