<?php

namespace App\Entity;

use App\Repository\HabiteRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HabiteRepository::class)]
class Habite
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $UserId = null;

    #[ORM\Column]
    private ?int $AdresseId = null;

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

    public function getAdresseId(): ?int
    {
        return $this->AdresseId;
    }

    public function setAdresseId(int $AdresseId): static
    {
        $this->AdresseId = $AdresseId;

        return $this;
    }
}
