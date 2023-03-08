<?php

namespace App\Entity;

use App\Repository\OFFRERepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OFFRERepository::class)]
class OFFRE
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Identifiant = null;

    #[ORM\Column(length: 255)]
    private ?string $libelle = null;

    #[ORM\Column(length: 255)]
    private ?string $Reference = null;

    #[ORM\Column(length: 255)]
    private ?string $DateDiffusion = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $DateDebutCasting = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $DateFinCasting = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $DateFinDiffusion = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $Description = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $Localite = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $Publie = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $AgeMin = null;

    #[ORM\Column(length: 255)]
    private ?string $OFFRE = null;

    #[ORM\OneToMany(mappedBy: 'oFFRE', targetEntity: TYPECONTRAT::class)]
    private Collection $TYPECONTRAT;

    #[ORM\OneToMany(mappedBy: 'relation', targetEntity: NIVEAU::class)]
    private Collection $nIVEAUs;

    #[ORM\ManyToMany(targetEntity: CIVILITE::class, mappedBy: 'OFFRE')]
    private Collection $CIVILITE;

    public function __construct()
    {
        $this->TYPECONTRAT = new ArrayCollection();
        $this->nIVEAUs = new ArrayCollection();
        $this->CIVILITE = new ArrayCollection();
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

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getReference(): ?string
    {
        return $this->Reference;
    }

    public function setReference(string $Reference): self
    {
        $this->Reference = $Reference;

        return $this;
    }

    public function getDateDiffusion(): ?string
    {
        return $this->DateDiffusion;
    }

    public function setDateDiffusion(string $DateDiffusion): self
    {
        $this->DateDiffusion = $DateDiffusion;

        return $this;
    }

    public function getDateDebutCasting(): ?\DateTimeInterface
    {
        return $this->DateDebutCasting;
    }

    public function setDateDebutCasting(\DateTimeInterface $DateDebutCasting): self
    {
        $this->DateDebutCasting = $DateDebutCasting;

        return $this;
    }

    public function getDateFinCasting(): ?\DateTimeInterface
    {
        return $this->DateFinCasting;
    }

    public function setDateFinCasting(\DateTimeInterface $DateFinCasting): self
    {
        $this->DateFinCasting = $DateFinCasting;

        return $this;
    }

    public function getDateFinDiffusion(): ?\DateTimeInterface
    {
        return $this->DateFinDiffusion;
    }

    public function setDateFinDiffusion(\DateTimeInterface $DateFinDiffusion): self
    {
        $this->DateFinDiffusion = $DateFinDiffusion;

        return $this;
    }

    public function getDescription(): ?int
    {
        return $this->Description;
    }

    public function setDescription(int $Description): self
    {
        $this->Description = $Description;

        return $this;
    }

    public function getLocalite(): ?int
    {
        return $this->Localite;
    }

    public function setLocalite(int $Localite): self
    {
        $this->Localite = $Localite;

        return $this;
    }

    public function getPublie(): ?int
    {
        return $this->Publie;
    }

    public function setPublie(int $Publie): self
    {
        $this->Publie = $Publie;

        return $this;
    }

    public function getAgeMin(): ?int
    {
        return $this->AgeMin;
    }

    public function setAgeMin(int $AgeMin): self
    {
        $this->AgeMin = $AgeMin;

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

    /**
     * @return Collection<int, TYPECONTRAT>
     */
    public function getTYPECONTRAT(): Collection
    {
        return $this->TYPECONTRAT;
    }

    public function addTYPECONTRAT(TYPECONTRAT $tYPECONTRAT): self
    {
        if (!$this->TYPECONTRAT->contains($tYPECONTRAT)) {
            $this->TYPECONTRAT->add($tYPECONTRAT);
            $tYPECONTRAT->setOFFRE($this);
        }

        return $this;
    }

    public function removeTYPECONTRAT(TYPECONTRAT $tYPECONTRAT): self
    {
        if ($this->TYPECONTRAT->removeElement($tYPECONTRAT)) {
            // set the owning side to null (unless already changed)
            if ($tYPECONTRAT->getOFFRE() === $this) {
                $tYPECONTRAT->setOFFRE(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, NIVEAU>
     */
    public function getNIVEAUs(): Collection
    {
        return $this->nIVEAUs;
    }

    public function addNIVEAUs(NIVEAU $nIVEAUs): self
    {
        if (!$this->nIVEAUs->contains($nIVEAUs)) {
            $this->nIVEAUs->add($nIVEAUs);
            $nIVEAUs->setRelation($this);
        }

        return $this;
    }

    public function removeNIVEAUs(NIVEAU $nIVEAUs): self
    {
        if ($this->nIVEAUs->removeElement($nIVEAUs)) {
            // set the owning side to null (unless already changed)
            if ($nIVEAUs->getRelation() === $this) {
                $nIVEAUs->setRelation(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, CIVILITE>
     */
    public function getCIVILITE(): Collection
    {
        return $this->CIVILITE;
    }

    public function addCIVILITE(CIVILITE $cIVILITE): self
    {
        if (!$this->CIVILITE->contains($cIVILITE)) {
            $this->CIVILITE->add($cIVILITE);
            $cIVILITE->addOFFRE($this);
        }

        return $this;
    }

    public function removeCIVILITE(CIVILITE $cIVILITE): self
    {
        if ($this->CIVILITE->removeElement($cIVILITE)) {
            $cIVILITE->removeOFFRE($this);
        }

        return $this;
    }
}
