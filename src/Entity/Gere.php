<?php

namespace App\Entity;

use App\Repository\GereRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GereRepository::class)]
class Gere
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $UserId = null;

    #[ORM\Column]
    private ?int $AssociationId = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserId(): ?int
    {
        return $this->UserId;
    }

    public function setUserId(int $UserId): static
    {
        $this->UserId = $UserId;

        return $this;
    }

    public function getAssociationId(): ?int
    {
        return $this->AssociationId;
    }

    public function setAssociationId(int $AssociationId): static
    {
        $this->AssociationId = $AssociationId;

        return $this;
    }
}
