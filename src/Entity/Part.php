<?php

namespace App\Entity;

use App\Repository\PartRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PartRepository::class)
 */
class Part
{
    /**
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
    private $partType;

    /**
     * @var string
     *
     * @ORM\Column(type="integer")
     */
    private $partId;

    /**
     * @var Event
     *
     * @ORM\ManyToOne(targetEntity="Event", inversedBy="parts")
     * @ORM\JoinColumn(name="event_id", referencedColumnName="id")
     */
    private $event;

    /**
     * @var Collection | Task[]
     *
     * @ORM\OneToMany(targetEntity="Task", mappedBy="part", cascade={"remove", "persist"})
     */
    private $tasks;

    /**
     * @var Collection | Comment[]
     *
     * @ORM\OneToMany(targetEntity="Comment", mappedBy="part", cascade={"remove", "persist"})
     */
    private $comments;

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
    public function getPartType(): ?string
    {
        return $this->partType;
    }

    /**
     * @param string $partType
     *
     * @return $this
     */
    public function setPartType(string $partType): self
    {
        $this->partType = $partType;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getPartId(): ?int
    {
        return $this->partId;
    }

    /**
     * @param int $partId
     *
     * @return $this
     */
    public function setPartId(int $partId): self
    {
        $this->partId = $partId;

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
     * @return Collection|Comment[]|null
     */
    public function getComments(): ?Collection
    {
        return $this->comments;
    }

    /**
     * @param Comment $comment
     *
     * @return $this
     */
    public function addComment(Comment $comment): self
    {
        if (!$this->comments->contains($comment)) {
            $this->comments->add($comment);
        }

        return $this;
    }
}
