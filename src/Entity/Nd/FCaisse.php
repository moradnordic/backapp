<?php

namespace App\Entity\Nd;

use App\Repository\Nd\FCaisseRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_CAISSE')]
#[ORM\UniqueConstraint(name: 'ICS_NO', columns: ['CA_No'])]
#[ORM\UniqueConstraint(name: 'ICS_INTITULE', columns: ['cbCA_Intitule'])]
#[ORM\Index(name: 'ICS_DEPOT', columns: ['DE_No'])]
#[ORM\Index(name: 'ICS_VENDEUR', columns: ['CO_No'])]
#[ORM\Index(name: 'ICS_CAISSIER', columns: ['CO_NoCaissier'])]
#[ORM\Index(name: 'ICS_TIERS', columns: ['cbCT_Num'])]
#[ORM\Index(name: 'FKIA_F_CAISSE_DE_No', columns: ['DE_No'])]
#[ORM\Entity(repositoryClass: FCaisseRepository::class)]
class FCaisse
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "CA_No", nullable: true)]
    private ?int $caNo = null;

    #[ORM\Column(name: "CA_Intitule", length: 35, nullable: true)]
    private ?string $caIntitule = null;

    #[ORM\Column(name: "cbCA_Intitule", type: Types::BINARY, nullable: true)]
    private $cbcaIntitule = null;

    #[ORM\Column(name: "DE_No")]
    private ?int $deNo = null;

    #[ORM\Column(name: "CO_No", nullable: true)]
    private ?int $coNo = null;

    #[ORM\Column(name: "cbCO_No", nullable: true)]
    private ?int $cbcoNo = null;

    #[ORM\Column(name: "CO_NoCaissier", nullable: true)]
    private ?int $coNocaissier = null;

    #[ORM\Column(name: "cbCO_NoCaissier", nullable: true)]
    private ?int $cbcoNocaissier = null;

    #[ORM\Column(name: "CT_Num", length: 17)]
    private ?string $ctNum = null;

    #[ORM\Column(name: "cbCT_Num", type: Types::BINARY, nullable: true)]
    private $cbctNum = null;

    #[ORM\Column(name: "JO_Num", length: 7)]
    private ?string $joNum = null;

    #[ORM\Column(name: "CA_IdentifCaissier", type: Types::SMALLINT, nullable: true)]
    private ?int $caIdentifcaissier = null;

    #[ORM\Column(name: "CA_DateCreation", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $caDatecreation = null;

    #[ORM\Column(name: "N_Comptoir", type: Types::SMALLINT, nullable: true)]
    private ?int $nComptoir = null;

    #[ORM\Column(name: "N_Clavier", type: Types::SMALLINT, nullable: true)]
    private ?int $nClavier = null;

    #[ORM\Column(name: "CA_LignesAfficheur", type: Types::SMALLINT, nullable: true)]
    private ?int $caLignesafficheur = null;

    #[ORM\Column(name: "CA_ColonnesAfficheur", type: Types::SMALLINT, nullable: true)]
    private ?int $caColonnesafficheur = null;

    #[ORM\Column(name: "CA_ImpTicket", type: Types::SMALLINT, nullable: true)]
    private ?int $caImpticket = null;

    #[ORM\Column(name: "CA_SaisieVendeur", type: Types::SMALLINT, nullable: true)]
    private ?int $caSaisievendeur = null;

    #[ORM\Column(name: "CA_Souche", type: Types::SMALLINT, nullable: true)]
    private ?int $caSouche = null;

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

    public function getCaNo(): ?int
    {
        return $this->caNo;
    }

    public function setCaNo(?int $caNo): static
    {
        $this->caNo = $caNo;

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

    public function getCbcaIntitule()
    {
        return $this->cbcaIntitule;
    }

    public function setCbcaIntitule($cbcaIntitule): static
    {
        $this->cbcaIntitule = $cbcaIntitule;

        return $this;
    }

    public function getDeNo(): ?int
    {
        return $this->deNo;
    }

    public function setDeNo(int $deNo): static
    {
        $this->deNo = $deNo;

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

    public function getCoNocaissier(): ?int
    {
        return $this->coNocaissier;
    }

    public function setCoNocaissier(?int $coNocaissier): static
    {
        $this->coNocaissier = $coNocaissier;

        return $this;
    }

    public function getCbcoNocaissier(): ?int
    {
        return $this->cbcoNocaissier;
    }

    public function setCbcoNocaissier(?int $cbcoNocaissier): static
    {
        $this->cbcoNocaissier = $cbcoNocaissier;

        return $this;
    }

    public function getCtNum(): ?string
    {
        return $this->ctNum;
    }

    public function setCtNum(string $ctNum): static
    {
        $this->ctNum = $ctNum;

        return $this;
    }

    public function getCbctNum()
    {
        return $this->cbctNum;
    }

    public function setCbctNum($cbctNum): static
    {
        $this->cbctNum = $cbctNum;

        return $this;
    }

    public function getJoNum(): ?string
    {
        return $this->joNum;
    }

    public function setJoNum(string $joNum): static
    {
        $this->joNum = $joNum;

        return $this;
    }

    public function getCaIdentifcaissier(): ?int
    {
        return $this->caIdentifcaissier;
    }

    public function setCaIdentifcaissier(?int $caIdentifcaissier): static
    {
        $this->caIdentifcaissier = $caIdentifcaissier;

        return $this;
    }

    public function getCaDatecreation(): ?\DateTimeInterface
    {
        return $this->caDatecreation;
    }

    public function setCaDatecreation(?\DateTimeInterface $caDatecreation): static
    {
        $this->caDatecreation = $caDatecreation;

        return $this;
    }

    public function getNComptoir(): ?int
    {
        return $this->nComptoir;
    }

    public function setNComptoir(?int $nComptoir): static
    {
        $this->nComptoir = $nComptoir;

        return $this;
    }

    public function getNClavier(): ?int
    {
        return $this->nClavier;
    }

    public function setNClavier(?int $nClavier): static
    {
        $this->nClavier = $nClavier;

        return $this;
    }

    public function getCaLignesafficheur(): ?int
    {
        return $this->caLignesafficheur;
    }

    public function setCaLignesafficheur(?int $caLignesafficheur): static
    {
        $this->caLignesafficheur = $caLignesafficheur;

        return $this;
    }

    public function getCaColonnesafficheur(): ?int
    {
        return $this->caColonnesafficheur;
    }

    public function setCaColonnesafficheur(?int $caColonnesafficheur): static
    {
        $this->caColonnesafficheur = $caColonnesafficheur;

        return $this;
    }

    public function getCaImpticket(): ?int
    {
        return $this->caImpticket;
    }

    public function setCaImpticket(?int $caImpticket): static
    {
        $this->caImpticket = $caImpticket;

        return $this;
    }

    public function getCaSaisievendeur(): ?int
    {
        return $this->caSaisievendeur;
    }

    public function setCaSaisievendeur(?int $caSaisievendeur): static
    {
        $this->caSaisievendeur = $caSaisievendeur;

        return $this;
    }

    public function getCaSouche(): ?int
    {
        return $this->caSouche;
    }

    public function setCaSouche(?int $caSouche): static
    {
        $this->caSouche = $caSouche;

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
