<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\FAbonnementRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_ABONNEMENT')]
#[ORM\UniqueConstraint(name: 'IAB_NO', columns: ['AB_No'])]
#[ORM\Index(name: 'IAB_MODELE', columns: ['AB_Type'])]
#[ORM\Index(name: 'IAB_TIERS', columns: ['AB_Type'])]
#[ORM\Index(name: 'IAB_INTITULE', columns: ['AB_Type'])]
#[ORM\Index(name: 'IAB_TYPMODELE', columns: ['cbCT_Num'])]
#[ORM\Index(name: 'IAB_TYPTIERS', columns: ['cbAB_Modele'])]
#[ORM\Index(name: 'IAB_TYPINTITULE', columns: ['cbCT_Num'])]
#[ORM\Index(name: 'IAB_DEBUT', columns: ['AB_Type'])]
#[ORM\Index(name: 'IAB_TYPDEBUT', columns: ['cbAB_Modele'])]
#[ORM\Index(name: 'IAB_FIN', columns: ['AB_Type'])]
#[ORM\Index(name: 'IAB_TYPFIN', columns: ['cbAB_Modele'])]
#[ORM\Index(name: 'IAB_TOUTTYPMODELE', columns: ['cbCT_Num'])]
#[ORM\Index(name: 'IAB_TOUTTYPINTITULE', columns: ['cbCT_Num'])]
#[ORM\Entity(repositoryClass: FAbonnementRepository::class)]
class FAbonnement
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "AB_No", nullable: true)]
    private ?int $abNo = null;

    #[ORM\Column(name: "AB_TypeTiers", type: Types::SMALLINT, nullable: true)]
    private ?int $abTypetiers = null;

    #[ORM\Column(name: "AB_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $abType = null;

    #[ORM\Column(name: "CT_Num", length: 17, nullable: true)]
    private ?string $ctNum = null;

    #[ORM\Column(name: "cbCT_Num", type: Types::BINARY, nullable: true)]
    private $cbctNum = null;

    #[ORM\Column(name: "AB_Modele", length: 11, nullable: true)]
    private ?string $abModele = null;

    #[ORM\Column(name: "cbAB_Modele", type: Types::BINARY, nullable: true)]
    private $cbabModele = null;

    #[ORM\Column(name: "AB_Intitule", length: 35, nullable: true)]
    private ?string $abIntitule = null;

    #[ORM\Column(name: "cbAB_Intitule", type: Types::BINARY, nullable: true)]
    private $cbabIntitule = null;

    #[ORM\Column(name: "AB_Contrat", length: 35, nullable: true)]
    private ?string $abContrat = null;

    #[ORM\Column(name: "AB_Periodicite", type: Types::SMALLINT, nullable: true)]
    private ?int $abPeriodicite = null;

    #[ORM\Column(name: "AB_TypePeriod", type: Types::SMALLINT, nullable: true)]
    private ?int $abTypeperiod = null;

    #[ORM\Column(name: "AB_Duree", type: Types::SMALLINT, nullable: true)]
    private ?int $abDuree = null;

    #[ORM\Column(name: "AB_TypeDuree", type: Types::SMALLINT, nullable: true)]
    private ?int $abTypeduree = null;

    #[ORM\Column(name: "AB_Debut", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $abDebut = null;

    #[ORM\Column(name: "AB_Fin", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $abFin = null;

    #[ORM\Column(name: "AB_Resiliation", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $abResiliation = null;

    #[ORM\Column(name: "AB_Motif", type: Types::SMALLINT, nullable: true)]
    private ?int $abMotif = null;

    #[ORM\Column(name: "AB_Delai", type: Types::SMALLINT, nullable: true)]
    private ?int $abDelai = null;

    #[ORM\Column(name: "AB_TypeDelai", type: Types::SMALLINT, nullable: true)]
    private ?int $abTypedelai = null;

    #[ORM\Column(name: "AB_FinAbo", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $abFinabo = null;

    #[ORM\Column(name: "AB_Reconduction", type: Types::SMALLINT, nullable: true)]
    private ?int $abReconduction = null;

    #[ORM\Column(name: "AB_PieceGen", type: Types::SMALLINT, nullable: true)]
    private ?int $abPiecegen = null;

    #[ORM\Column(name: "AB_Souche", type: Types::SMALLINT, nullable: true)]
    private ?int $abSouche = null;

    #[ORM\Column(name: "AB_NbJoursGen", type: Types::SMALLINT, nullable: true)]
    private ?int $abNbjoursgen = null;

    #[ORM\Column(name: "AB_TypeGen", type: Types::SMALLINT, nullable: true)]
    private ?int $abTypegen = null;

    #[ORM\Column(name: "AB_JourTbGen01", type: Types::SMALLINT, nullable: true)]
    private ?int $abJourtbgen01 = null;

    #[ORM\Column(name: "AB_JourTbGen02", type: Types::SMALLINT, nullable: true)]
    private ?int $abJourtbgen02 = null;

    #[ORM\Column(name: "AB_JourTbGen03", type: Types::SMALLINT, nullable: true)]
    private ?int $abJourtbgen03 = null;

    #[ORM\Column(name: "AB_JourTbGen04", type: Types::SMALLINT, nullable: true)]
    private ?int $abJourtbgen04 = null;

    #[ORM\Column(name: "AB_JourTbGen05", type: Types::SMALLINT, nullable: true)]
    private ?int $abJourtbgen05 = null;

    #[ORM\Column(name: "AB_JourTbGen06", type: Types::SMALLINT, nullable: true)]
    private ?int $abJourtbgen06 = null;

    #[ORM\Column(name: "AB_NbJoursLivr", type: Types::SMALLINT, nullable: true)]
    private ?int $abNbjourslivr = null;

    #[ORM\Column(name: "AB_TypeLivr", type: Types::SMALLINT, nullable: true)]
    private ?int $abTypelivr = null;

    #[ORM\Column(name: "AB_JourTbLivr01", type: Types::SMALLINT, nullable: true)]
    private ?int $abJourtblivr01 = null;

    #[ORM\Column(name: "AB_JourTbLivr02", type: Types::SMALLINT, nullable: true)]
    private ?int $abJourtblivr02 = null;

    #[ORM\Column(name: "AB_JourTbLivr03", type: Types::SMALLINT, nullable: true)]
    private ?int $abJourtblivr03 = null;

    #[ORM\Column(name: "AB_JourTbLivr04", type: Types::SMALLINT, nullable: true)]
    private ?int $abJourtblivr04 = null;

    #[ORM\Column(name: "AB_JourTbLivr05", type: Types::SMALLINT, nullable: true)]
    private ?int $abJourtblivr05 = null;

    #[ORM\Column(name: "AB_JourTbLivr06", type: Types::SMALLINT, nullable: true)]
    private ?int $abJourtblivr06 = null;

    #[ORM\Column(name: "AB_Entete", type: Types::SMALLINT, nullable: true)]
    private ?int $abEntete = null;

    #[ORM\Column(name: "AB_Tarif", type: Types::SMALLINT, nullable: true)]
    private ?int $abTarif = null;

    #[ORM\Column(name: "AB_Remise", type: Types::SMALLINT, nullable: true)]
    private ?int $abRemise = null;

    #[ORM\Column(name: "AB_CatCompta", type: Types::SMALLINT, nullable: true)]
    private ?int $abCatcompta = null;

    #[ORM\Column(name: "AB_Represent", type: Types::SMALLINT, nullable: true)]
    private ?int $abRepresent = null;

    #[ORM\Column(name: "AB_Depot", type: Types::SMALLINT, nullable: true)]
    private ?int $abDepot = null;

    #[ORM\Column(name: "AB_Escompte", type: Types::SMALLINT, nullable: true)]
    private ?int $abEscompte = null;

    #[ORM\Column(name: "AB_Echeance", type: Types::SMALLINT, nullable: true)]
    private ?int $abEcheance = null;

    #[ORM\Column(name: "AB_Contact", type: Types::SMALLINT, nullable: true)]
    private ?int $abContact = null;

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

    public function getAbNo(): ?int
    {
        return $this->abNo;
    }

    public function setAbNo(?int $abNo): static
    {
        $this->abNo = $abNo;

        return $this;
    }

    public function getAbTypetiers(): ?int
    {
        return $this->abTypetiers;
    }

    public function setAbTypetiers(?int $abTypetiers): static
    {
        $this->abTypetiers = $abTypetiers;

        return $this;
    }

    public function getAbType(): ?int
    {
        return $this->abType;
    }

    public function setAbType(?int $abType): static
    {
        $this->abType = $abType;

        return $this;
    }

    public function getCtNum(): ?string
    {
        return $this->ctNum;
    }

    public function setCtNum(?string $ctNum): static
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

    public function getAbModele(): ?string
    {
        return $this->abModele;
    }

    public function setAbModele(?string $abModele): static
    {
        $this->abModele = $abModele;

        return $this;
    }

    public function getCbabModele()
    {
        return $this->cbabModele;
    }

    public function setCbabModele($cbabModele): static
    {
        $this->cbabModele = $cbabModele;

        return $this;
    }

    public function getAbIntitule(): ?string
    {
        return $this->abIntitule;
    }

    public function setAbIntitule(?string $abIntitule): static
    {
        $this->abIntitule = $abIntitule;

        return $this;
    }

    public function getCbabIntitule()
    {
        return $this->cbabIntitule;
    }

    public function setCbabIntitule($cbabIntitule): static
    {
        $this->cbabIntitule = $cbabIntitule;

        return $this;
    }

    public function getAbContrat(): ?string
    {
        return $this->abContrat;
    }

    public function setAbContrat(?string $abContrat): static
    {
        $this->abContrat = $abContrat;

        return $this;
    }

    public function getAbPeriodicite(): ?int
    {
        return $this->abPeriodicite;
    }

    public function setAbPeriodicite(?int $abPeriodicite): static
    {
        $this->abPeriodicite = $abPeriodicite;

        return $this;
    }

    public function getAbTypeperiod(): ?int
    {
        return $this->abTypeperiod;
    }

    public function setAbTypeperiod(?int $abTypeperiod): static
    {
        $this->abTypeperiod = $abTypeperiod;

        return $this;
    }

    public function getAbDuree(): ?int
    {
        return $this->abDuree;
    }

    public function setAbDuree(?int $abDuree): static
    {
        $this->abDuree = $abDuree;

        return $this;
    }

    public function getAbTypeduree(): ?int
    {
        return $this->abTypeduree;
    }

    public function setAbTypeduree(?int $abTypeduree): static
    {
        $this->abTypeduree = $abTypeduree;

        return $this;
    }

    public function getAbDebut(): ?\DateTimeInterface
    {
        return $this->abDebut;
    }

    public function setAbDebut(?\DateTimeInterface $abDebut): static
    {
        $this->abDebut = $abDebut;

        return $this;
    }

    public function getAbFin(): ?\DateTimeInterface
    {
        return $this->abFin;
    }

    public function setAbFin(?\DateTimeInterface $abFin): static
    {
        $this->abFin = $abFin;

        return $this;
    }

    public function getAbResiliation(): ?\DateTimeInterface
    {
        return $this->abResiliation;
    }

    public function setAbResiliation(?\DateTimeInterface $abResiliation): static
    {
        $this->abResiliation = $abResiliation;

        return $this;
    }

    public function getAbMotif(): ?int
    {
        return $this->abMotif;
    }

    public function setAbMotif(?int $abMotif): static
    {
        $this->abMotif = $abMotif;

        return $this;
    }

    public function getAbDelai(): ?int
    {
        return $this->abDelai;
    }

    public function setAbDelai(?int $abDelai): static
    {
        $this->abDelai = $abDelai;

        return $this;
    }

    public function getAbTypedelai(): ?int
    {
        return $this->abTypedelai;
    }

    public function setAbTypedelai(?int $abTypedelai): static
    {
        $this->abTypedelai = $abTypedelai;

        return $this;
    }

    public function getAbFinabo(): ?\DateTimeInterface
    {
        return $this->abFinabo;
    }

    public function setAbFinabo(?\DateTimeInterface $abFinabo): static
    {
        $this->abFinabo = $abFinabo;

        return $this;
    }

    public function getAbReconduction(): ?int
    {
        return $this->abReconduction;
    }

    public function setAbReconduction(?int $abReconduction): static
    {
        $this->abReconduction = $abReconduction;

        return $this;
    }

    public function getAbPiecegen(): ?int
    {
        return $this->abPiecegen;
    }

    public function setAbPiecegen(?int $abPiecegen): static
    {
        $this->abPiecegen = $abPiecegen;

        return $this;
    }

    public function getAbSouche(): ?int
    {
        return $this->abSouche;
    }

    public function setAbSouche(?int $abSouche): static
    {
        $this->abSouche = $abSouche;

        return $this;
    }

    public function getAbNbjoursgen(): ?int
    {
        return $this->abNbjoursgen;
    }

    public function setAbNbjoursgen(?int $abNbjoursgen): static
    {
        $this->abNbjoursgen = $abNbjoursgen;

        return $this;
    }

    public function getAbTypegen(): ?int
    {
        return $this->abTypegen;
    }

    public function setAbTypegen(?int $abTypegen): static
    {
        $this->abTypegen = $abTypegen;

        return $this;
    }

    public function getAbJourtbgen01(): ?int
    {
        return $this->abJourtbgen01;
    }

    public function setAbJourtbgen01(?int $abJourtbgen01): static
    {
        $this->abJourtbgen01 = $abJourtbgen01;

        return $this;
    }

    public function getAbJourtbgen02(): ?int
    {
        return $this->abJourtbgen02;
    }

    public function setAbJourtbgen02(?int $abJourtbgen02): static
    {
        $this->abJourtbgen02 = $abJourtbgen02;

        return $this;
    }

    public function getAbJourtbgen03(): ?int
    {
        return $this->abJourtbgen03;
    }

    public function setAbJourtbgen03(?int $abJourtbgen03): static
    {
        $this->abJourtbgen03 = $abJourtbgen03;

        return $this;
    }

    public function getAbJourtbgen04(): ?int
    {
        return $this->abJourtbgen04;
    }

    public function setAbJourtbgen04(?int $abJourtbgen04): static
    {
        $this->abJourtbgen04 = $abJourtbgen04;

        return $this;
    }

    public function getAbJourtbgen05(): ?int
    {
        return $this->abJourtbgen05;
    }

    public function setAbJourtbgen05(?int $abJourtbgen05): static
    {
        $this->abJourtbgen05 = $abJourtbgen05;

        return $this;
    }

    public function getAbJourtbgen06(): ?int
    {
        return $this->abJourtbgen06;
    }

    public function setAbJourtbgen06(?int $abJourtbgen06): static
    {
        $this->abJourtbgen06 = $abJourtbgen06;

        return $this;
    }

    public function getAbNbjourslivr(): ?int
    {
        return $this->abNbjourslivr;
    }

    public function setAbNbjourslivr(?int $abNbjourslivr): static
    {
        $this->abNbjourslivr = $abNbjourslivr;

        return $this;
    }

    public function getAbTypelivr(): ?int
    {
        return $this->abTypelivr;
    }

    public function setAbTypelivr(?int $abTypelivr): static
    {
        $this->abTypelivr = $abTypelivr;

        return $this;
    }

    public function getAbJourtblivr01(): ?int
    {
        return $this->abJourtblivr01;
    }

    public function setAbJourtblivr01(?int $abJourtblivr01): static
    {
        $this->abJourtblivr01 = $abJourtblivr01;

        return $this;
    }

    public function getAbJourtblivr02(): ?int
    {
        return $this->abJourtblivr02;
    }

    public function setAbJourtblivr02(?int $abJourtblivr02): static
    {
        $this->abJourtblivr02 = $abJourtblivr02;

        return $this;
    }

    public function getAbJourtblivr03(): ?int
    {
        return $this->abJourtblivr03;
    }

    public function setAbJourtblivr03(?int $abJourtblivr03): static
    {
        $this->abJourtblivr03 = $abJourtblivr03;

        return $this;
    }

    public function getAbJourtblivr04(): ?int
    {
        return $this->abJourtblivr04;
    }

    public function setAbJourtblivr04(?int $abJourtblivr04): static
    {
        $this->abJourtblivr04 = $abJourtblivr04;

        return $this;
    }

    public function getAbJourtblivr05(): ?int
    {
        return $this->abJourtblivr05;
    }

    public function setAbJourtblivr05(?int $abJourtblivr05): static
    {
        $this->abJourtblivr05 = $abJourtblivr05;

        return $this;
    }

    public function getAbJourtblivr06(): ?int
    {
        return $this->abJourtblivr06;
    }

    public function setAbJourtblivr06(?int $abJourtblivr06): static
    {
        $this->abJourtblivr06 = $abJourtblivr06;

        return $this;
    }

    public function getAbEntete(): ?int
    {
        return $this->abEntete;
    }

    public function setAbEntete(?int $abEntete): static
    {
        $this->abEntete = $abEntete;

        return $this;
    }

    public function getAbTarif(): ?int
    {
        return $this->abTarif;
    }

    public function setAbTarif(?int $abTarif): static
    {
        $this->abTarif = $abTarif;

        return $this;
    }

    public function getAbRemise(): ?int
    {
        return $this->abRemise;
    }

    public function setAbRemise(?int $abRemise): static
    {
        $this->abRemise = $abRemise;

        return $this;
    }

    public function getAbCatcompta(): ?int
    {
        return $this->abCatcompta;
    }

    public function setAbCatcompta(?int $abCatcompta): static
    {
        $this->abCatcompta = $abCatcompta;

        return $this;
    }

    public function getAbRepresent(): ?int
    {
        return $this->abRepresent;
    }

    public function setAbRepresent(?int $abRepresent): static
    {
        $this->abRepresent = $abRepresent;

        return $this;
    }

    public function getAbDepot(): ?int
    {
        return $this->abDepot;
    }

    public function setAbDepot(?int $abDepot): static
    {
        $this->abDepot = $abDepot;

        return $this;
    }

    public function getAbEscompte(): ?int
    {
        return $this->abEscompte;
    }

    public function setAbEscompte(?int $abEscompte): static
    {
        $this->abEscompte = $abEscompte;

        return $this;
    }

    public function getAbEcheance(): ?int
    {
        return $this->abEcheance;
    }

    public function setAbEcheance(?int $abEcheance): static
    {
        $this->abEcheance = $abEcheance;

        return $this;
    }

    public function getAbContact(): ?int
    {
        return $this->abContact;
    }

    public function setAbContact(?int $abContact): static
    {
        $this->abContact = $abContact;

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
