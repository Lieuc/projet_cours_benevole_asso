<?php

namespace App\Entity;

use App\Repository\UsersRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UsersRepository::class)]
class Users
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $UserId = null;

    #[ORM\Column(length: 255)]
    private ?string $Firstname = null;

    #[ORM\Column(length: 255)]
    private ?string $Lastname = null;

    #[ORM\Column(length: 255)]
    private ?string $email = null;

    #[ORM\Column]
    private ?\DateTime $RegisterDate = null;

    #[ORM\Column(length: 255)]
    private ?string $Password = null;

    #[ORM\Column]
    private ?int $FavoriteDuration = null;

    #[ORM\Column]
    private ?bool $Available = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $ImgProfilPic = null;

    #[ORM\Column]
    private ?int $RoleId = null;

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

    public function getFirstname(): ?string
    {
        return $this->Firstname;
    }

    public function setFirstname(string $Firstname): static
    {
        $this->Firstname = $Firstname;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->Lastname;
    }

    public function setLastname(string $Lastname): static
    {
        $this->Lastname = $Lastname;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getRegisterDate(): ?\DateTime
    {
        return $this->RegisterDate;
    }

    public function setRegisterDate(\DateTime $RegisterDate): static
    {
        $this->RegisterDate = $RegisterDate;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->Password;
    }

    public function setPassword(string $Password): static
    {
        $this->Password = $Password;

        return $this;
    }

    public function getDureeFavoris(): ?int
    {
        return $this->DureeFavoris;
    }

    public function setDureeFavoris(int $DureeFavoris): static
    {
        $this->DureeFavoris = $DureeFavoris;

        return $this;
    }

    public function isAvailable(): ?bool
    {
        return $this->Available;
    }

    public function setAvailable(bool $Available): static
    {
        $this->Available = $Available;

        return $this;
    }

    public function getImgProfilPic(): ?string
    {
        return $this->ImgProfilPic;
    }

    public function setImgProfilPic(?string $ImgProfilPic): static
    {
        $this->ImgProfilPic = $ImgProfilPic;

        return $this;
    }

    public function getRoleId(): ?int
    {
        return $this->RoleId;
    }

    public function setRoleId(int $RoleId): static
    {
        $this->RoleId = $RoleId;

        return $this;
    }
}
