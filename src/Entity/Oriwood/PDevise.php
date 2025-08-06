<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\PDeviseRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'P_DEVISE')]
#[ORM\Entity(repositoryClass: PDeviseRepository::class)]
class PDevise
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "D_Intitule", length: 35, nullable: true)]
    private ?string $dIntitule = null;

    #[ORM\Column(name: "D_Format", length: 31, nullable: true)]
    private ?string $dFormat = null;

    #[ORM\Column(name: "D_Cours", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $dCours = null;

    #[ORM\Column(name: "D_CoursP", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $dCoursp = null;

    #[ORM\Column(name: "D_Monnaie", length: 21, nullable: true)]
    private ?string $dMonnaie = null;

    #[ORM\Column(name: "D_SousMonnaie", length: 21, nullable: true)]
    private ?string $dSousmonnaie = null;

    #[ORM\Column(name: "D_CodeISO", length: 3, nullable: true)]
    private ?string $dCodeiso = null;

    #[ORM\Column(name: "D_Sigle", length: 5, nullable: true)]
    private ?string $dSigle = null;

    #[ORM\Column(name: "D_Mode", type: Types::SMALLINT, nullable: true)]
    private ?int $dMode = null;

    #[ORM\Column(name: "N_DeviseCot", type: Types::SMALLINT, nullable: true)]
    private ?int $nDevisecot = null;

    #[ORM\Column(name: "D_CoursClot", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $dCoursclot = null;

    #[ORM\Column(name: "D_AncDate", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dAncdate = null;

    #[ORM\Column(name: "D_AncCours", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $dAnccours = null;

    #[ORM\Column(name: "D_AncMode", type: Types::SMALLINT, nullable: true)]
    private ?int $dAncmode = null;

    #[ORM\Column(name: "N_DeviseAncCot", type: Types::SMALLINT, nullable: true)]
    private ?int $nDeviseanccot = null;

    #[ORM\Column(name: "D_CodeRemise", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoderemise = null;

    #[ORM\Column(name: "D_Euro", type: Types::SMALLINT, nullable: true)]
    private ?int $dEuro = null;

    #[ORM\Column(name: "D_CodeISONum", length: 5, nullable: true)]
    private ?string $dCodeisonum = null;

    #[ORM\Column(name: "cbIndice", type: Types::SMALLINT, nullable: true)]
    private ?int $cbindice = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getDIntitule(): ?string
    {
        return $this->dIntitule;
    }

    public function setDIntitule(?string $dIntitule): static
    {
        $this->dIntitule = $dIntitule;

        return $this;
    }

    public function getDFormat(): ?string
    {
        return $this->dFormat;
    }

    public function setDFormat(?string $dFormat): static
    {
        $this->dFormat = $dFormat;

        return $this;
    }

    public function getDCours(): ?string
    {
        return $this->dCours;
    }

    public function setDCours(?string $dCours): static
    {
        $this->dCours = $dCours;

        return $this;
    }

    public function getDCoursp(): ?string
    {
        return $this->dCoursp;
    }

    public function setDCoursp(?string $dCoursp): static
    {
        $this->dCoursp = $dCoursp;

        return $this;
    }

    public function getDMonnaie(): ?string
    {
        return $this->dMonnaie;
    }

    public function setDMonnaie(?string $dMonnaie): static
    {
        $this->dMonnaie = $dMonnaie;

        return $this;
    }

    public function getDSousmonnaie(): ?string
    {
        return $this->dSousmonnaie;
    }

    public function setDSousmonnaie(?string $dSousmonnaie): static
    {
        $this->dSousmonnaie = $dSousmonnaie;

        return $this;
    }

    public function getDCodeiso(): ?string
    {
        return $this->dCodeiso;
    }

    public function setDCodeiso(?string $dCodeiso): static
    {
        $this->dCodeiso = $dCodeiso;

        return $this;
    }

    public function getDSigle(): ?string
    {
        return $this->dSigle;
    }

    public function setDSigle(?string $dSigle): static
    {
        $this->dSigle = $dSigle;

        return $this;
    }

    public function getDMode(): ?int
    {
        return $this->dMode;
    }

    public function setDMode(?int $dMode): static
    {
        $this->dMode = $dMode;

        return $this;
    }

    public function getNDevisecot(): ?int
    {
        return $this->nDevisecot;
    }

    public function setNDevisecot(?int $nDevisecot): static
    {
        $this->nDevisecot = $nDevisecot;

        return $this;
    }

    public function getDCoursclot(): ?string
    {
        return $this->dCoursclot;
    }

    public function setDCoursclot(?string $dCoursclot): static
    {
        $this->dCoursclot = $dCoursclot;

        return $this;
    }

    public function getDAncdate(): ?\DateTimeInterface
    {
        return $this->dAncdate;
    }

    public function setDAncdate(?\DateTimeInterface $dAncdate): static
    {
        $this->dAncdate = $dAncdate;

        return $this;
    }

    public function getDAnccours(): ?string
    {
        return $this->dAnccours;
    }

    public function setDAnccours(?string $dAnccours): static
    {
        $this->dAnccours = $dAnccours;

        return $this;
    }

    public function getDAncmode(): ?int
    {
        return $this->dAncmode;
    }

    public function setDAncmode(?int $dAncmode): static
    {
        $this->dAncmode = $dAncmode;

        return $this;
    }

    public function getNDeviseanccot(): ?int
    {
        return $this->nDeviseanccot;
    }

    public function setNDeviseanccot(?int $nDeviseanccot): static
    {
        $this->nDeviseanccot = $nDeviseanccot;

        return $this;
    }

    public function getDCoderemise(): ?int
    {
        return $this->dCoderemise;
    }

    public function setDCoderemise(?int $dCoderemise): static
    {
        $this->dCoderemise = $dCoderemise;

        return $this;
    }

    public function getDEuro(): ?int
    {
        return $this->dEuro;
    }

    public function setDEuro(?int $dEuro): static
    {
        $this->dEuro = $dEuro;

        return $this;
    }

    public function getDCodeisonum(): ?string
    {
        return $this->dCodeisonum;
    }

    public function setDCodeisonum(?string $dCodeisonum): static
    {
        $this->dCodeisonum = $dCodeisonum;

        return $this;
    }

    public function getCbindice(): ?int
    {
        return $this->cbindice;
    }

    public function setCbindice(?int $cbindice): static
    {
        $this->cbindice = $cbindice;

        return $this;
    }
}
