<?php

namespace App\Entity;

use App\Repository\CLIENTRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CLIENTRepository::class)]
class CLIENT
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Identifiant = null;

    #[ORM\Column(length: 255)]
    private ?string $Nom = null;

    #[ORM\Column(length: 255)]
    private ?string $ville = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $Telephone = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $Email = null;

    #[ORM\Column(length: 255)]
    private ?string $Login = null;

    #[ORM\Column(length: 255)]
    private ?string $Password = null;

    #[ORM\Column(length: 255)]
    private ?string $Siret = null;

    #[ORM\Column(length: 255)]
    private ?string $Url = null;

    #[ORM\Column(length: 255)]
    private ?string $Actif = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdentifiant(): ?string
    {
        return $this->Identifiant;
    }

    public function setIdentifiant(string $Identifiant): self
    {
        $this->Identifiant = $Identifiant;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): self
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getTelephone(): ?int
    {
        return $this->Telephone;
    }

    public function setTelephone(int $Telephone): self
    {
        $this->Telephone = $Telephone;

        return $this;
    }

    public function getEmail(): ?int
    {
        return $this->Email;
    }

    public function setEmail(int $Email): self
    {
        $this->Email = $Email;

        return $this;
    }

    public function getLogin(): ?string
    {
        return $this->Login;
    }

    public function setLogin(string $Login): self
    {
        $this->Login = $Login;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->Password;
    }

    public function setPassword(string $Password): self
    {
        $this->Password = $Password;

        return $this;
    }

    public function getSiret(): ?string
    {
        return $this->Siret;
    }

    public function setSiret(string $Siret): self
    {
        $this->Siret = $Siret;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->Url;
    }

    public function setUrl(string $Url): self
    {
        $this->Url = $Url;

        return $this;
    }

    public function getActif(): ?string
    {
        return $this->Actif;
    }

    public function setActif(string $Actif): self
    {
        $this->Actif = $Actif;

        return $this;
    }
}
