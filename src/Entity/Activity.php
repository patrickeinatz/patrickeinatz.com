<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ActivityRepository")
 */
class Activity
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date;

    /**
     * @ORM\Column(type="integer")
     */
    private $training;

    /**
     * @ORM\Column(type="boolean")
     */
    private $no_alcohol;

    /**
     * @ORM\Column(type="boolean")
     */
    private $no_candy;

    /**
     * @ORM\Column(type="boolean")
     */
    private $no_carbs;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $comment;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="activities")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getTraining(): ?int
    {
        return $this->training;
    }

    public function setTraining(int $training): self
    {
        $this->training = $training;

        return $this;
    }

    public function getNoAlcohol(): ?bool
    {
        return $this->no_alcohol;
    }

    public function setNoAlcohol(bool $no_alcohol): self
    {
        $this->no_alcohol = $no_alcohol;

        return $this;
    }

    public function getNoCandy(): ?bool
    {
        return $this->no_candy;
    }

    public function setNoCandy(bool $no_candy): self
    {
        $this->no_candy = $no_candy;

        return $this;
    }

    public function getNoCarbs(): ?bool
    {
        return $this->no_carbs;
    }

    public function setNoCarbs(bool $no_carbs): self
    {
        $this->no_carbs = $no_carbs;

        return $this;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(?string $comment): self
    {
        $this->comment = $comment;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }
}
