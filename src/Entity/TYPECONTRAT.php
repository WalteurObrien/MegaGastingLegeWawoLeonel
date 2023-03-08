<?php

namespace App\Entity;

use App\Repository\TYPECONTRATRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TYPECONTRATRepository::class)]
class TYPECONTRAT
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Identifiant = null;

    #[ORM\Column(length: 255)]
    private ?string $Libelle = null;

    #[ORM\Column(length: 255)]
    private ?string $OFFRE = null;

    #[ORM\ManyToOne(inversedBy: 'TYPECONTRAT')]
    #[ORM\JoinColumn(nullable: false)]
    private ?OFFRE $oFFRE = null;

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

    public function getLibelle(): ?string
    {
        return $this->Libelle;
    }

    public function setLibelle(string $Libelle): self
    {
        $this->Libelle = $Libelle;

        return $this;
    }

    public function getOFFRE(): ?string
    {
        return $this->OFFRE;
    }

    public function setOFFRE(string $OFFRE): self
    {
        $this->OFFRE = $OFFRE;

        return $this;
    }
}
