<?php

namespace App\Entity;

use App\Repository\CIVILITERepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CIVILITERepository::class)]
class CIVILITE
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name:'Identifiant')]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Identifiant = null;

    #[ORM\Column(length: 255)]
    private ?string $LibelleCourt = null;

    #[ORM\Column(length: 255)]
    private ?string $LibelleLong = null;

    #[ORM\ManyToMany(targetEntity: OFFRE::class, inversedBy: 'CIVILITE')]
    private Collection $OFFRE;

    public function __construct()
    {
        $this->OFFRE = new ArrayCollection();
    }

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

    public function getLibelleCourt(): ?string
    {
        return $this->LibelleCourt;
    }

    public function setLibelleCourt(string $LibelleCourt): self
    {
        $this->LibelleCourt = $LibelleCourt;

        return $this;
    }

    public function getLibelleLong(): ?string
    {
        return $this->LibelleLong;
    }

    public function setLibelleLong(string $LibelleLong): self
    {
        $this->LibelleLong = $LibelleLong;

        return $this;
    }

    /**
     * @return Collection<int, OFFRE>
     */
    public function getOFFRE(): Collection
    {
        return $this->OFFRE;
    }

    public function addOFFRE(OFFRE $oFFRE): self
    {
        if (!$this->OFFRE->contains($oFFRE)) {
            $this->OFFRE->add($oFFRE);
        }

        return $this;
    }

    public function removeOFFRE(OFFRE $oFFRE): self
    {
        $this->OFFRE->removeElement($oFFRE);

        return $this;
    }
}
