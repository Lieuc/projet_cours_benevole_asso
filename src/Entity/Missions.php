<?php

namespace App\Entity;

use App\Repository\MissionsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MissionsRepository::class)]
class Missions
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $MissionId = null;

    #[ORM\Column(length: 255)]
    private ?string $Description = null;

    #[ORM\Column]
    private ?\DateTime $StartDate = null;

    #[ORM\Column]
    private ?\DateTime $EndDate = null;

    #[ORM\Column]
    private ?int $AskedVolunteer = null;

    #[ORM\Column]
    private ?int $AssociationId = null;

    #[ORM\Column]
    private ?int $AdresseId = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(string $Description): static
    {
        $this->Description = $Description;

        return $this;
    }

    public function getStartDate(): ?\DateTime
    {
        return $this->StartDate;
    }

    public function setStartDate(\DateTime $StartDate): static
    {
        $this->StartDate = $StartDate;

        return $this;
    }

    public function getEndDate(): ?\DateTime
    {
        return $this->EndDate;
    }

    public function setEndDate(\DateTime $EndDate): static
    {
        $this->EndDate = $EndDate;

        return $this;
    }

    public function getAskedVolunteer(): ?int
    {
        return $this->AskedVolunteer;
    }

    public function setAskedVolunteer(int $AskedVolunteer): static
    {
        $this->AskedVolunteer = $AskedVolunteer;

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
