<?php

namespace App\Entity;

use App\Repository\PostesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PostesRepository::class)]
class Postes
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $PosteId = null;

    #[ORM\Column(length: 255)]
    private ?string $Title = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $Content = null;

    #[ORM\Column]
    private ?\DateTime $PostDate = null;

    #[ORM\Column(length: 255)]
    private ?string $ImageUrl = null;

    #[ORM\Column]
    private ?int $AssociationId = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPosteId(): ?int
    {
        return $this->PosteId;
    }

    public function setPosteId(int $PosteId): static
    {
        $this->PosteId = $PosteId;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->Title;
    }

    public function setTitle(string $Title): static
    {
        $this->Title = $Title;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->Content;
    }

    public function setContent(string $Content): static
    {
        $this->Content = $Content;

        return $this;
    }

    public function getPostDate(): ?\DateTime
    {
        return $this->PostDate;
    }

    public function setPostDate(\DateTime $PostDate): static
    {
        $this->PostDate = $PostDate;

        return $this;
    }

    public function getImageUrl(): ?string
    {
        return $this->ImageUrl;
    }

    public function setImageUrl(string $ImageUrl): static
    {
        $this->ImageUrl = $ImageUrl;

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
