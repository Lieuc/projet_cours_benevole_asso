<?php

namespace App\Entity;

use App\Repository\AssociationsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AssociationsRepository::class)]
class Associations
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $AssociationId = null;

    #[ORM\Column(length: 255)]
    private ?string $Url = null;

    #[ORM\Column]
    private ?\DateTime $CreationDate = null;

    #[ORM\Column]
    private ?bool $IsValid = null;

    #[ORM\Column(length: 255)]
    private ?string $Name = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $Description = null;

    #[ORM\Column(nullable: true)]
    private ?int $RnaNumber = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $UrlImgAssociation = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getUrl(): ?string
    {
        return $this->Url;
    }

    public function setUrl(string $Url): static
    {
        $this->Url = $Url;

        return $this;
    }

    public function getCreationDate(): ?\DateTime
    {
        return $this->CreationDate;
    }

    public function setCreationDate(\DateTime $CreationDate): static
    {
        $this->CreationDate = $CreationDate;

        return $this;
    }

    public function isValid(): ?bool
    {
        return $this->IsValid;
    }

    public function setIsValid(bool $IsValid): static
    {
        $this->IsValid = $IsValid;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): static
    {
        $this->Name = $Name;

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

    public function getRnaNumber(): ?int
    {
        return $this->RnaNumber;
    }

    public function setRnaNumber(?int $RnaNumber): static
    {
        $this->RnaNumber = $RnaNumber;

        return $this;
    }

    public function getUrlImgAssociation(): ?string
    {
        return $this->UrlImgAssociation;
    }

    public function setUrlImgAssociation(?string $UrlImgAssociation): static
    {
        $this->UrlImgAssociation = $UrlImgAssociation;

        return $this;
    }
}
