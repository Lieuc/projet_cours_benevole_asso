<?php

namespace App\Entity;

use App\Repository\ContientRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ContientRepository::class)]
class Contient
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $DomaineId = null;

    #[ORM\Column]
    private ?int $MissionId = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDomaineId(): ?int
    {
        return $this->DomaineId;
    }

    public function setDomaineId(int $DomaineId): static
    {
        $this->DomaineId = $DomaineId;

        return $this;
    }

    public function getMissionId(): ?int
    {
        return $this->MissionId;
    }

    public function setMissionId(int $MissionId): static
    {
        $this->MissionId = $MissionId;

        return $this;
    }
}
