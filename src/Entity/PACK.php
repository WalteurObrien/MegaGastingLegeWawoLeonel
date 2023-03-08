<?php

namespace App\Entity;

use App\Repository\PACKRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PACKRepository::class)]
class PACK
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Identifiant = null;

    #[ORM\Column(length: 255)]
    private ?string $LIibelle = null;

    #[ORM\Column(length: 255)]
    private ?string $NombreOffres = null;

    #[ORM\Column(length: 255)]
    private ?string $tafif = null;

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

    public function getLIibelle(): ?string
    {
        return $this->LIibelle;
    }

    public function setLIibelle(string $LIibelle): self
    {
        $this->LIibelle = $LIibelle;

        return $this;
    }

    public function getNombreOffres(): ?string
    {
        return $this->NombreOffres;
    }

    public function setNombreOffres(string $NombreOffres): self
    {
        $this->NombreOffres = $NombreOffres;

        return $this;
    }

    public function getTafif(): ?string
    {
        return $this->tafif;
    }

    public function setTafif(string $tafif): self
    {
        $this->tafif = $tafif;

        return $this;
    }
}
