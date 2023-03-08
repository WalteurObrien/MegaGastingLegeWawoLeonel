<?php

namespace App\Entity;

use App\Repository\NIVEAURepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: NIVEAURepository::class)]
class NIVEAU
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Identifiant = null;

    #[ORM\Column(length: 255)]
    private ?string $Libelle = null;

    #[ORM\ManyToOne(inversedBy: 'nIVEAUs')]
    #[ORM\JoinColumn(nullable: false)]
    private ?OFFRE $relation = null;

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

    public function getRelation(): ?OFFRE
    {
        return $this->relation;
    }

    public function setRelation(?OFFRE $relation): self
    {
        $this->relation = $relation;

        return $this;
    }
}
