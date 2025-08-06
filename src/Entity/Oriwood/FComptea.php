<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\FCompteaRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_COMPTEA')]
#[ORM\UniqueConstraint(name: 'ICA_NUM', columns: ['cbCA_Num'])]
#[ORM\Index(name: 'ICA_CLASS', columns: ['cbCA_Num'])]
#[ORM\Index(name: 'ICA_RACC', columns: ['cbCA_Raccourci'])]
#[ORM\Index(name: 'ICA_TYPE', columns: ['cbCA_Num'])]
#[ORM\Index(name: 'ICA_TYPECLASS', columns: ['cbCA_Classement'])]
#[ORM\Index(name: 'ICA_SOMNUM', columns: ['CA_Type'])]
#[ORM\Index(name: 'ICA_SOMCLASS', columns: ['cbCA_Num'])]
#[ORM\Index(name: 'ICA_SOMTYPE', columns: ['cbCA_Num'])]
#[ORM\Index(name: 'ICA_STATUTNUM', columns: ['cbCA_Num'])]
#[ORM\Index(name: 'ICA_STATUTCLASS', columns: ['cbCA_Num'])]
#[ORM\Index(name: 'ICA_STATUTTYPE', columns: ['cbCA_Num'])]
#[ORM\Index(name: 'ICA_STATUTSOMNUM', columns: ['CA_Type'])]
#[ORM\Index(name: 'ICA_STATUTSOMCLASS', columns: ['cbCA_Num'])]
#[ORM\Index(name: 'ICA_STATUTSOMTYPE', columns: ['cbCA_Num'])]
#[ORM\Index(name: 'ICA_CONO', columns: ['CO_No'])]
#[ORM\UniqueConstraint(name: 'UKA_F_COMPTEA_CA_Num', columns: ['CA_Num'])]
#[ORM\Index(name: 'FKIA_F_COMPTEA_CO_No', columns: ['cbCO_No'])]
#[ORM\Entity(repositoryClass: FCompteaRepository::class)]
class FComptea
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "N_Analytique", type: Types::SMALLINT)]
    private ?int $nAnalytique = null;

    #[ORM\Column(name: "CA_Num", length: 13)]
    private ?string $caNum = null;

    #[ORM\Column(name: "cbCA_Num", type: Types::BINARY, nullable: true)]
    private $cbcaNum = null;

    #[ORM\Column(name: "CA_Intitule", length: 35, nullable: true)]
    private ?string $caIntitule = null;

    #[ORM\Column(name: "CA_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $caType = null;

    #[ORM\Column(name: "CA_Classement", length: 17, nullable: true)]
    private ?string $caClassement = null;

    #[ORM\Column(name: "cbCA_Classement", type: Types::BINARY, nullable: true)]
    private $cbcaClassement = null;

    #[ORM\Column(name: "CA_Raccourci", length: 7, nullable: true)]
    private ?string $caRaccourci = null;

    #[ORM\Column(name: "cbCA_Raccourci", type: Types::BINARY, nullable: true)]
    private $cbcaRaccourci = null;

    #[ORM\Column(name: "CA_Report", type: Types::SMALLINT, nullable: true)]
    private ?int $caReport = null;

    #[ORM\Column(name: "N_Analyse", type: Types::SMALLINT, nullable: true)]
    private ?int $nAnalyse = null;

    #[ORM\Column(name: "CA_Saut", type: Types::SMALLINT, nullable: true)]
    private ?int $caSaut = null;

    #[ORM\Column(name: "CA_Sommeil", type: Types::SMALLINT, nullable: true)]
    private ?int $caSommeil = null;

    #[ORM\Column(name: "CA_DateCreate", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $caDatecreate = null;

    #[ORM\Column(name: "CA_Domaine", type: Types::SMALLINT, nullable: true)]
    private ?int $caDomaine = null;

    #[ORM\Column(name: "CA_Achat", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caAchat = null;

    #[ORM\Column(name: "CA_Vente", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caVente = null;

    #[ORM\Column(name: "CO_No", nullable: true)]
    private ?int $coNo = null;

    #[ORM\Column(name: "cbCO_No", nullable: true)]
    private ?int $cbcoNo = null;

    #[ORM\Column(name: "CA_Statut", type: Types::SMALLINT, nullable: true)]
    private ?int $caStatut = null;

    #[ORM\Column(name: "CA_DateCreationAffaire", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $caDatecreationaffaire = null;

    #[ORM\Column(name: "CA_DateAcceptAffaire", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $caDateacceptaffaire = null;

    #[ORM\Column(name: "CA_DateDebutAffaire", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $caDatedebutaffaire = null;

    #[ORM\Column(name: "CA_DateFinAffaire", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $caDatefinaffaire = null;

    #[ORM\Column(name: "CA_ModeFacturation", type: Types::SMALLINT, nullable: true)]
    private ?int $caModefacturation = null;

    #[ORM\Column(name: "cbProt", type: Types::SMALLINT, nullable: true)]
    private ?int $cbprot = null;

    #[ORM\Column(name: "cbCreateur", length: 4, nullable: true, options: ["fixed" => true])]
    private ?string $cbcreateur = 'CSQL';

    #[ORM\Column(name: "cbModification", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $cbmodification = null;

    #[ORM\Column(name: "cbReplication", nullable: true)]
    private ?int $cbreplication = null;

    #[ORM\Column(name: "cbFlag", type: Types::SMALLINT, nullable: true)]
    private ?int $cbflag = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getNAnalytique(): ?int
    {
        return $this->nAnalytique;
    }

    public function setNAnalytique(int $nAnalytique): static
    {
        $this->nAnalytique = $nAnalytique;

        return $this;
    }

    public function getCaNum(): ?string
    {
        return $this->caNum;
    }

    public function setCaNum(string $caNum): static
    {
        $this->caNum = $caNum;

        return $this;
    }

    public function getCbcaNum()
    {
        return $this->cbcaNum;
    }

    public function setCbcaNum($cbcaNum): static
    {
        $this->cbcaNum = $cbcaNum;

        return $this;
    }

    public function getCaIntitule(): ?string
    {
        return $this->caIntitule;
    }

    public function setCaIntitule(?string $caIntitule): static
    {
        $this->caIntitule = $caIntitule;

        return $this;
    }

    public function getCaType(): ?int
    {
        return $this->caType;
    }

    public function setCaType(?int $caType): static
    {
        $this->caType = $caType;

        return $this;
    }

    public function getCaClassement(): ?string
    {
        return $this->caClassement;
    }

    public function setCaClassement(?string $caClassement): static
    {
        $this->caClassement = $caClassement;

        return $this;
    }

    public function getCbcaClassement()
    {
        return $this->cbcaClassement;
    }

    public function setCbcaClassement($cbcaClassement): static
    {
        $this->cbcaClassement = $cbcaClassement;

        return $this;
    }

    public function getCaRaccourci(): ?string
    {
        return $this->caRaccourci;
    }

    public function setCaRaccourci(?string $caRaccourci): static
    {
        $this->caRaccourci = $caRaccourci;

        return $this;
    }

    public function getCbcaRaccourci()
    {
        return $this->cbcaRaccourci;
    }

    public function setCbcaRaccourci($cbcaRaccourci): static
    {
        $this->cbcaRaccourci = $cbcaRaccourci;

        return $this;
    }

    public function getCaReport(): ?int
    {
        return $this->caReport;
    }

    public function setCaReport(?int $caReport): static
    {
        $this->caReport = $caReport;

        return $this;
    }

    public function getNAnalyse(): ?int
    {
        return $this->nAnalyse;
    }

    public function setNAnalyse(?int $nAnalyse): static
    {
        $this->nAnalyse = $nAnalyse;

        return $this;
    }

    public function getCaSaut(): ?int
    {
        return $this->caSaut;
    }

    public function setCaSaut(?int $caSaut): static
    {
        $this->caSaut = $caSaut;

        return $this;
    }

    public function getCaSommeil(): ?int
    {
        return $this->caSommeil;
    }

    public function setCaSommeil(?int $caSommeil): static
    {
        $this->caSommeil = $caSommeil;

        return $this;
    }

    public function getCaDatecreate(): ?\DateTimeInterface
    {
        return $this->caDatecreate;
    }

    public function setCaDatecreate(?\DateTimeInterface $caDatecreate): static
    {
        $this->caDatecreate = $caDatecreate;

        return $this;
    }

    public function getCaDomaine(): ?int
    {
        return $this->caDomaine;
    }

    public function setCaDomaine(?int $caDomaine): static
    {
        $this->caDomaine = $caDomaine;

        return $this;
    }

    public function getCaAchat(): ?string
    {
        return $this->caAchat;
    }

    public function setCaAchat(?string $caAchat): static
    {
        $this->caAchat = $caAchat;

        return $this;
    }

    public function getCaVente(): ?string
    {
        return $this->caVente;
    }

    public function setCaVente(?string $caVente): static
    {
        $this->caVente = $caVente;

        return $this;
    }

    public function getCoNo(): ?int
    {
        return $this->coNo;
    }

    public function setCoNo(?int $coNo): static
    {
        $this->coNo = $coNo;

        return $this;
    }

    public function getCbcoNo(): ?int
    {
        return $this->cbcoNo;
    }

    public function setCbcoNo(?int $cbcoNo): static
    {
        $this->cbcoNo = $cbcoNo;

        return $this;
    }

    public function getCaStatut(): ?int
    {
        return $this->caStatut;
    }

    public function setCaStatut(?int $caStatut): static
    {
        $this->caStatut = $caStatut;

        return $this;
    }

    public function getCaDatecreationaffaire(): ?\DateTimeInterface
    {
        return $this->caDatecreationaffaire;
    }

    public function setCaDatecreationaffaire(?\DateTimeInterface $caDatecreationaffaire): static
    {
        $this->caDatecreationaffaire = $caDatecreationaffaire;

        return $this;
    }

    public function getCaDateacceptaffaire(): ?\DateTimeInterface
    {
        return $this->caDateacceptaffaire;
    }

    public function setCaDateacceptaffaire(?\DateTimeInterface $caDateacceptaffaire): static
    {
        $this->caDateacceptaffaire = $caDateacceptaffaire;

        return $this;
    }

    public function getCaDatedebutaffaire(): ?\DateTimeInterface
    {
        return $this->caDatedebutaffaire;
    }

    public function setCaDatedebutaffaire(?\DateTimeInterface $caDatedebutaffaire): static
    {
        $this->caDatedebutaffaire = $caDatedebutaffaire;

        return $this;
    }

    public function getCaDatefinaffaire(): ?\DateTimeInterface
    {
        return $this->caDatefinaffaire;
    }

    public function setCaDatefinaffaire(?\DateTimeInterface $caDatefinaffaire): static
    {
        $this->caDatefinaffaire = $caDatefinaffaire;

        return $this;
    }

    public function getCaModefacturation(): ?int
    {
        return $this->caModefacturation;
    }

    public function setCaModefacturation(?int $caModefacturation): static
    {
        $this->caModefacturation = $caModefacturation;

        return $this;
    }

    public function getCbprot(): ?int
    {
        return $this->cbprot;
    }

    public function setCbprot(?int $cbprot): static
    {
        $this->cbprot = $cbprot;

        return $this;
    }

    public function getCbcreateur(): ?string
    {
        return $this->cbcreateur;
    }

    public function setCbcreateur(?string $cbcreateur): static
    {
        $this->cbcreateur = $cbcreateur;

        return $this;
    }

    public function getCbmodification(): ?\DateTimeInterface
    {
        return $this->cbmodification;
    }

    public function setCbmodification(?\DateTimeInterface $cbmodification): static
    {
        $this->cbmodification = $cbmodification;

        return $this;
    }

    public function getCbreplication(): ?int
    {
        return $this->cbreplication;
    }

    public function setCbreplication(?int $cbreplication): static
    {
        $this->cbreplication = $cbreplication;

        return $this;
    }

    public function getCbflag(): ?int
    {
        return $this->cbflag;
    }

    public function setCbflag(?int $cbflag): static
    {
        $this->cbflag = $cbflag;

        return $this;
    }
}
