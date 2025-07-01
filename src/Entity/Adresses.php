<?php

namespace App\Entity;

use App\Repository\AdressesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AdressesRepository::class)]
class Adresses
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $AdresseId = null;

    #[ORM\Column]
    private ?int $ZipCode = null;

    #[ORM\Column(length: 255)]
    private ?string $City = null;

    #[ORM\Column(length: 255)]
    private ?string $Street = null;

    #[ORM\Column]
    private ?int $StreetNumber = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getZipCode(): ?int
    {
        return $this->ZipCode;
    }

    public function setZipCode(int $ZipCode): static
    {
        $this->ZipCode = $ZipCode;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->City;
    }

    public function setCity(string $City): static
    {
        $this->City = $City;

        return $this;
    }

    public function getStreet(): ?string
    {
        return $this->Street;
    }

    public function setStreet(string $Street): static
    {
        $this->Street = $Street;

        return $this;
    }

    public function getStreetNumber(): ?int
    {
        return $this->StreetNumber;
    }

    public function setStreetNumber(int $StreetNumber): static
    {
        $this->StreetNumber = $StreetNumber;

        return $this;
    }
}
