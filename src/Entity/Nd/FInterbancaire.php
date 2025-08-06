<?php

namespace App\Entity\Nd;

use App\Repository\Nd\FInterbancaireRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_INTERBANCAIRE')]
#[ORM\UniqueConstraint(name: 'IIB_AFB', columns: ['IB_Sens'])]
#[ORM\Index(name: 'IIB_SENS', columns: ['cbIB_AFB'])]
#[ORM\Index(name: 'IIB_RAPPROAFB', columns: ['cbIB_RapproAFB'])]
#[ORM\UniqueConstraint(name: 'UKA_F_INTERBANCAIRE_IB_AFB', columns: ['IB_Sens'])]
#[ORM\Entity(repositoryClass: FInterbancaireRepository::class)]
class FInterbancaire
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "IB_AFB", length: 3)]
    private ?string $ibAfb = null;

    #[ORM\Column(name: "cbIB_AFB", type: Types::BINARY, nullable: true)]
    private $cbibAfb = null;

    #[ORM\Column(name: "IB_Nature", length: 5, nullable: true)]
    private ?string $ibNature = null;

    #[ORM\Column(name: "IB_Intitule", length: 35, nullable: true)]
    private ?string $ibIntitule = null;

    #[ORM\Column(name: "IB_Sens", type: Types::SMALLINT)]
    private ?int $ibSens = null;

    #[ORM\Column(name: "IB_NbJoursValeur", type: Types::SMALLINT, nullable: true)]
    private ?int $ibNbjoursvaleur = null;

    #[ORM\Column(name: "IB_JourType", type: Types::SMALLINT, nullable: true)]
    private ?int $ibJourtype = null;

    #[ORM\Column(name: "IB_EchReport", type: Types::SMALLINT, nullable: true)]
    private ?int $ibEchreport = null;

    #[ORM\Column(name: "IB_ExoCommission", type: Types::SMALLINT, nullable: true)]
    private ?int $ibExocommission = null;

    #[ORM\Column(name: "IB_NbJoursEcheance", type: Types::SMALLINT, nullable: true)]
    private ?int $ibNbjoursecheance = null;

    #[ORM\Column(name: "IB_JourTypeEcheance", type: Types::SMALLINT, nullable: true)]
    private ?int $ibJourtypeecheance = null;

    #[ORM\Column(name: "IB_NatureTreso", nullable: true)]
    private ?int $ibNaturetreso = null;

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

    #[ORM\Column(name: "N_Reglement01", type: Types::SMALLINT, nullable: true)]
    private ?int $nReglement01 = null;

    #[ORM\Column(name: "N_Reglement02", type: Types::SMALLINT, nullable: true)]
    private ?int $nReglement02 = null;

    #[ORM\Column(name: "N_Reglement03", type: Types::SMALLINT, nullable: true)]
    private ?int $nReglement03 = null;

    #[ORM\Column(name: "N_Reglement04", type: Types::SMALLINT, nullable: true)]
    private ?int $nReglement04 = null;

    #[ORM\Column(name: "N_Reglement05", type: Types::SMALLINT, nullable: true)]
    private ?int $nReglement05 = null;

    #[ORM\Column(name: "N_Reglement06", type: Types::SMALLINT, nullable: true)]
    private ?int $nReglement06 = null;

    #[ORM\Column(name: "N_Reglement07", type: Types::SMALLINT, nullable: true)]
    private ?int $nReglement07 = null;

    #[ORM\Column(name: "N_Reglement08", type: Types::SMALLINT, nullable: true)]
    private ?int $nReglement08 = null;

    #[ORM\Column(name: "N_Reglement09", type: Types::SMALLINT, nullable: true)]
    private ?int $nReglement09 = null;

    #[ORM\Column(name: "N_Reglement10", type: Types::SMALLINT, nullable: true)]
    private ?int $nReglement10 = null;

    #[ORM\Column(name: "N_Reglement11", type: Types::SMALLINT, nullable: true)]
    private ?int $nReglement11 = null;

    #[ORM\Column(name: "N_Reglement12", type: Types::SMALLINT, nullable: true)]
    private ?int $nReglement12 = null;

    #[ORM\Column(name: "N_Reglement13", type: Types::SMALLINT, nullable: true)]
    private ?int $nReglement13 = null;

    #[ORM\Column(name: "N_Reglement14", type: Types::SMALLINT, nullable: true)]
    private ?int $nReglement14 = null;

    #[ORM\Column(name: "N_Reglement15", type: Types::SMALLINT, nullable: true)]
    private ?int $nReglement15 = null;

    #[ORM\Column(name: "N_Reglement16", type: Types::SMALLINT, nullable: true)]
    private ?int $nReglement16 = null;

    #[ORM\Column(name: "N_Reglement17", type: Types::SMALLINT, nullable: true)]
    private ?int $nReglement17 = null;

    #[ORM\Column(name: "N_Reglement18", type: Types::SMALLINT, nullable: true)]
    private ?int $nReglement18 = null;

    #[ORM\Column(name: "N_Reglement19", type: Types::SMALLINT, nullable: true)]
    private ?int $nReglement19 = null;

    #[ORM\Column(name: "N_Reglement20", type: Types::SMALLINT, nullable: true)]
    private ?int $nReglement20 = null;

    #[ORM\Column(name: "N_Reglement21", type: Types::SMALLINT, nullable: true)]
    private ?int $nReglement21 = null;

    #[ORM\Column(name: "N_Reglement22", type: Types::SMALLINT, nullable: true)]
    private ?int $nReglement22 = null;

    #[ORM\Column(name: "N_Reglement23", type: Types::SMALLINT, nullable: true)]
    private ?int $nReglement23 = null;

    #[ORM\Column(name: "N_Reglement24", type: Types::SMALLINT, nullable: true)]
    private ?int $nReglement24 = null;

    #[ORM\Column(name: "N_Reglement25", type: Types::SMALLINT, nullable: true)]
    private ?int $nReglement25 = null;

    #[ORM\Column(name: "N_Reglement26", type: Types::SMALLINT, nullable: true)]
    private ?int $nReglement26 = null;

    #[ORM\Column(name: "N_Reglement27", type: Types::SMALLINT, nullable: true)]
    private ?int $nReglement27 = null;

    #[ORM\Column(name: "N_Reglement28", type: Types::SMALLINT, nullable: true)]
    private ?int $nReglement28 = null;

    #[ORM\Column(name: "N_Reglement29", type: Types::SMALLINT, nullable: true)]
    private ?int $nReglement29 = null;

    #[ORM\Column(name: "N_Reglement30", type: Types::SMALLINT, nullable: true)]
    private ?int $nReglement30 = null;

    #[ORM\Column(name: "N_ReglementPrinc", type: Types::SMALLINT, nullable: true)]
    private ?int $nReglementprinc = null;

    #[ORM\Column(name: "IB_RapproMode", type: Types::SMALLINT, nullable: true)]
    private ?int $ibRappromode = null;

    #[ORM\Column(name: "IB_RapproAFB", length: 3, nullable: true)]
    private ?string $ibRapproafb = null;

    #[ORM\Column(name: "cbIB_RapproAFB", type: Types::BINARY, nullable: true)]
    private $cbibRapproafb = null;

    #[ORM\Column(name: "IB_RapproPuissanceEc", type: Types::SMALLINT, nullable: true)]
    private ?int $ibRappropuissanceec = null;

    #[ORM\Column(name: "IB_RapproPuissanceEx", type: Types::SMALLINT, nullable: true)]
    private ?int $ibRappropuissanceex = null;

    #[ORM\Column(name: "IB_RapproDelaiEc", type: Types::SMALLINT, nullable: true)]
    private ?int $ibRapprodelaiec = null;

    #[ORM\Column(name: "IB_RapproDelaiEcNbJours", type: Types::SMALLINT, nullable: true)]
    private ?int $ibRapprodelaiecnbjours = null;

    #[ORM\Column(name: "IB_RapproDelaiEx", type: Types::SMALLINT, nullable: true)]
    private ?int $ibRapprodelaiex = null;

    #[ORM\Column(name: "IB_RapproDelaiExNbJours", type: Types::SMALLINT, nullable: true)]
    private ?int $ibRapprodelaiexnbjours = null;

    #[ORM\Column(name: "IB_RapproDelaiEcEx", type: Types::SMALLINT, nullable: true)]
    private ?int $ibRapprodelaiecex = null;

    #[ORM\Column(name: "IB_RapproDelaiEcExNbJours", type: Types::SMALLINT, nullable: true)]
    private ?int $ibRapprodelaiecexnbjours = null;

    #[ORM\Column(name: "IB_RapproComp", type: Types::SMALLINT, nullable: true)]
    private ?int $ibRapprocomp = null;

    #[ORM\Column(name: "IB_RapproCompNbCar", type: Types::SMALLINT, nullable: true)]
    private ?int $ibRapprocompnbcar = null;

    #[ORM\Column(name: "IB_RapproCompEcZone", type: Types::SMALLINT, nullable: true)]
    private ?int $ibRapprocompeczone = null;

    #[ORM\Column(name: "IB_RapproCompEcPos", type: Types::SMALLINT, nullable: true)]
    private ?int $ibRapprocompecpos = null;

    #[ORM\Column(name: "IB_RapproCompExZone", type: Types::SMALLINT, nullable: true)]
    private ?int $ibRapprocompexzone = null;

    #[ORM\Column(name: "IB_RapproCompExPos", type: Types::SMALLINT, nullable: true)]
    private ?int $ibRapprocompexpos = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getIbAfb(): ?string
    {
        return $this->ibAfb;
    }

    public function setIbAfb(string $ibAfb): static
    {
        $this->ibAfb = $ibAfb;

        return $this;
    }

    public function getCbibAfb()
    {
        return $this->cbibAfb;
    }

    public function setCbibAfb($cbibAfb): static
    {
        $this->cbibAfb = $cbibAfb;

        return $this;
    }

    public function getIbNature(): ?string
    {
        return $this->ibNature;
    }

    public function setIbNature(?string $ibNature): static
    {
        $this->ibNature = $ibNature;

        return $this;
    }

    public function getIbIntitule(): ?string
    {
        return $this->ibIntitule;
    }

    public function setIbIntitule(?string $ibIntitule): static
    {
        $this->ibIntitule = $ibIntitule;

        return $this;
    }

    public function getIbSens(): ?int
    {
        return $this->ibSens;
    }

    public function setIbSens(int $ibSens): static
    {
        $this->ibSens = $ibSens;

        return $this;
    }

    public function getIbNbjoursvaleur(): ?int
    {
        return $this->ibNbjoursvaleur;
    }

    public function setIbNbjoursvaleur(?int $ibNbjoursvaleur): static
    {
        $this->ibNbjoursvaleur = $ibNbjoursvaleur;

        return $this;
    }

    public function getIbJourtype(): ?int
    {
        return $this->ibJourtype;
    }

    public function setIbJourtype(?int $ibJourtype): static
    {
        $this->ibJourtype = $ibJourtype;

        return $this;
    }

    public function getIbEchreport(): ?int
    {
        return $this->ibEchreport;
    }

    public function setIbEchreport(?int $ibEchreport): static
    {
        $this->ibEchreport = $ibEchreport;

        return $this;
    }

    public function getIbExocommission(): ?int
    {
        return $this->ibExocommission;
    }

    public function setIbExocommission(?int $ibExocommission): static
    {
        $this->ibExocommission = $ibExocommission;

        return $this;
    }

    public function getIbNbjoursecheance(): ?int
    {
        return $this->ibNbjoursecheance;
    }

    public function setIbNbjoursecheance(?int $ibNbjoursecheance): static
    {
        $this->ibNbjoursecheance = $ibNbjoursecheance;

        return $this;
    }

    public function getIbJourtypeecheance(): ?int
    {
        return $this->ibJourtypeecheance;
    }

    public function setIbJourtypeecheance(?int $ibJourtypeecheance): static
    {
        $this->ibJourtypeecheance = $ibJourtypeecheance;

        return $this;
    }

    public function getIbNaturetreso(): ?int
    {
        return $this->ibNaturetreso;
    }

    public function setIbNaturetreso(?int $ibNaturetreso): static
    {
        $this->ibNaturetreso = $ibNaturetreso;

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

    public function getNReglement01(): ?int
    {
        return $this->nReglement01;
    }

    public function setNReglement01(?int $nReglement01): static
    {
        $this->nReglement01 = $nReglement01;

        return $this;
    }

    public function getNReglement02(): ?int
    {
        return $this->nReglement02;
    }

    public function setNReglement02(?int $nReglement02): static
    {
        $this->nReglement02 = $nReglement02;

        return $this;
    }

    public function getNReglement03(): ?int
    {
        return $this->nReglement03;
    }

    public function setNReglement03(?int $nReglement03): static
    {
        $this->nReglement03 = $nReglement03;

        return $this;
    }

    public function getNReglement04(): ?int
    {
        return $this->nReglement04;
    }

    public function setNReglement04(?int $nReglement04): static
    {
        $this->nReglement04 = $nReglement04;

        return $this;
    }

    public function getNReglement05(): ?int
    {
        return $this->nReglement05;
    }

    public function setNReglement05(?int $nReglement05): static
    {
        $this->nReglement05 = $nReglement05;

        return $this;
    }

    public function getNReglement06(): ?int
    {
        return $this->nReglement06;
    }

    public function setNReglement06(?int $nReglement06): static
    {
        $this->nReglement06 = $nReglement06;

        return $this;
    }

    public function getNReglement07(): ?int
    {
        return $this->nReglement07;
    }

    public function setNReglement07(?int $nReglement07): static
    {
        $this->nReglement07 = $nReglement07;

        return $this;
    }

    public function getNReglement08(): ?int
    {
        return $this->nReglement08;
    }

    public function setNReglement08(?int $nReglement08): static
    {
        $this->nReglement08 = $nReglement08;

        return $this;
    }

    public function getNReglement09(): ?int
    {
        return $this->nReglement09;
    }

    public function setNReglement09(?int $nReglement09): static
    {
        $this->nReglement09 = $nReglement09;

        return $this;
    }

    public function getNReglement10(): ?int
    {
        return $this->nReglement10;
    }

    public function setNReglement10(?int $nReglement10): static
    {
        $this->nReglement10 = $nReglement10;

        return $this;
    }

    public function getNReglement11(): ?int
    {
        return $this->nReglement11;
    }

    public function setNReglement11(?int $nReglement11): static
    {
        $this->nReglement11 = $nReglement11;

        return $this;
    }

    public function getNReglement12(): ?int
    {
        return $this->nReglement12;
    }

    public function setNReglement12(?int $nReglement12): static
    {
        $this->nReglement12 = $nReglement12;

        return $this;
    }

    public function getNReglement13(): ?int
    {
        return $this->nReglement13;
    }

    public function setNReglement13(?int $nReglement13): static
    {
        $this->nReglement13 = $nReglement13;

        return $this;
    }

    public function getNReglement14(): ?int
    {
        return $this->nReglement14;
    }

    public function setNReglement14(?int $nReglement14): static
    {
        $this->nReglement14 = $nReglement14;

        return $this;
    }

    public function getNReglement15(): ?int
    {
        return $this->nReglement15;
    }

    public function setNReglement15(?int $nReglement15): static
    {
        $this->nReglement15 = $nReglement15;

        return $this;
    }

    public function getNReglement16(): ?int
    {
        return $this->nReglement16;
    }

    public function setNReglement16(?int $nReglement16): static
    {
        $this->nReglement16 = $nReglement16;

        return $this;
    }

    public function getNReglement17(): ?int
    {
        return $this->nReglement17;
    }

    public function setNReglement17(?int $nReglement17): static
    {
        $this->nReglement17 = $nReglement17;

        return $this;
    }

    public function getNReglement18(): ?int
    {
        return $this->nReglement18;
    }

    public function setNReglement18(?int $nReglement18): static
    {
        $this->nReglement18 = $nReglement18;

        return $this;
    }

    public function getNReglement19(): ?int
    {
        return $this->nReglement19;
    }

    public function setNReglement19(?int $nReglement19): static
    {
        $this->nReglement19 = $nReglement19;

        return $this;
    }

    public function getNReglement20(): ?int
    {
        return $this->nReglement20;
    }

    public function setNReglement20(?int $nReglement20): static
    {
        $this->nReglement20 = $nReglement20;

        return $this;
    }

    public function getNReglement21(): ?int
    {
        return $this->nReglement21;
    }

    public function setNReglement21(?int $nReglement21): static
    {
        $this->nReglement21 = $nReglement21;

        return $this;
    }

    public function getNReglement22(): ?int
    {
        return $this->nReglement22;
    }

    public function setNReglement22(?int $nReglement22): static
    {
        $this->nReglement22 = $nReglement22;

        return $this;
    }

    public function getNReglement23(): ?int
    {
        return $this->nReglement23;
    }

    public function setNReglement23(?int $nReglement23): static
    {
        $this->nReglement23 = $nReglement23;

        return $this;
    }

    public function getNReglement24(): ?int
    {
        return $this->nReglement24;
    }

    public function setNReglement24(?int $nReglement24): static
    {
        $this->nReglement24 = $nReglement24;

        return $this;
    }

    public function getNReglement25(): ?int
    {
        return $this->nReglement25;
    }

    public function setNReglement25(?int $nReglement25): static
    {
        $this->nReglement25 = $nReglement25;

        return $this;
    }

    public function getNReglement26(): ?int
    {
        return $this->nReglement26;
    }

    public function setNReglement26(?int $nReglement26): static
    {
        $this->nReglement26 = $nReglement26;

        return $this;
    }

    public function getNReglement27(): ?int
    {
        return $this->nReglement27;
    }

    public function setNReglement27(?int $nReglement27): static
    {
        $this->nReglement27 = $nReglement27;

        return $this;
    }

    public function getNReglement28(): ?int
    {
        return $this->nReglement28;
    }

    public function setNReglement28(?int $nReglement28): static
    {
        $this->nReglement28 = $nReglement28;

        return $this;
    }

    public function getNReglement29(): ?int
    {
        return $this->nReglement29;
    }

    public function setNReglement29(?int $nReglement29): static
    {
        $this->nReglement29 = $nReglement29;

        return $this;
    }

    public function getNReglement30(): ?int
    {
        return $this->nReglement30;
    }

    public function setNReglement30(?int $nReglement30): static
    {
        $this->nReglement30 = $nReglement30;

        return $this;
    }

    public function getNReglementprinc(): ?int
    {
        return $this->nReglementprinc;
    }

    public function setNReglementprinc(?int $nReglementprinc): static
    {
        $this->nReglementprinc = $nReglementprinc;

        return $this;
    }

    public function getIbRappromode(): ?int
    {
        return $this->ibRappromode;
    }

    public function setIbRappromode(?int $ibRappromode): static
    {
        $this->ibRappromode = $ibRappromode;

        return $this;
    }

    public function getIbRapproafb(): ?string
    {
        return $this->ibRapproafb;
    }

    public function setIbRapproafb(?string $ibRapproafb): static
    {
        $this->ibRapproafb = $ibRapproafb;

        return $this;
    }

    public function getCbibRapproafb()
    {
        return $this->cbibRapproafb;
    }

    public function setCbibRapproafb($cbibRapproafb): static
    {
        $this->cbibRapproafb = $cbibRapproafb;

        return $this;
    }

    public function getIbRappropuissanceec(): ?int
    {
        return $this->ibRappropuissanceec;
    }

    public function setIbRappropuissanceec(?int $ibRappropuissanceec): static
    {
        $this->ibRappropuissanceec = $ibRappropuissanceec;

        return $this;
    }

    public function getIbRappropuissanceex(): ?int
    {
        return $this->ibRappropuissanceex;
    }

    public function setIbRappropuissanceex(?int $ibRappropuissanceex): static
    {
        $this->ibRappropuissanceex = $ibRappropuissanceex;

        return $this;
    }

    public function getIbRapprodelaiec(): ?int
    {
        return $this->ibRapprodelaiec;
    }

    public function setIbRapprodelaiec(?int $ibRapprodelaiec): static
    {
        $this->ibRapprodelaiec = $ibRapprodelaiec;

        return $this;
    }

    public function getIbRapprodelaiecnbjours(): ?int
    {
        return $this->ibRapprodelaiecnbjours;
    }

    public function setIbRapprodelaiecnbjours(?int $ibRapprodelaiecnbjours): static
    {
        $this->ibRapprodelaiecnbjours = $ibRapprodelaiecnbjours;

        return $this;
    }

    public function getIbRapprodelaiex(): ?int
    {
        return $this->ibRapprodelaiex;
    }

    public function setIbRapprodelaiex(?int $ibRapprodelaiex): static
    {
        $this->ibRapprodelaiex = $ibRapprodelaiex;

        return $this;
    }

    public function getIbRapprodelaiexnbjours(): ?int
    {
        return $this->ibRapprodelaiexnbjours;
    }

    public function setIbRapprodelaiexnbjours(?int $ibRapprodelaiexnbjours): static
    {
        $this->ibRapprodelaiexnbjours = $ibRapprodelaiexnbjours;

        return $this;
    }

    public function getIbRapprodelaiecex(): ?int
    {
        return $this->ibRapprodelaiecex;
    }

    public function setIbRapprodelaiecex(?int $ibRapprodelaiecex): static
    {
        $this->ibRapprodelaiecex = $ibRapprodelaiecex;

        return $this;
    }

    public function getIbRapprodelaiecexnbjours(): ?int
    {
        return $this->ibRapprodelaiecexnbjours;
    }

    public function setIbRapprodelaiecexnbjours(?int $ibRapprodelaiecexnbjours): static
    {
        $this->ibRapprodelaiecexnbjours = $ibRapprodelaiecexnbjours;

        return $this;
    }

    public function getIbRapprocomp(): ?int
    {
        return $this->ibRapprocomp;
    }

    public function setIbRapprocomp(?int $ibRapprocomp): static
    {
        $this->ibRapprocomp = $ibRapprocomp;

        return $this;
    }

    public function getIbRapprocompnbcar(): ?int
    {
        return $this->ibRapprocompnbcar;
    }

    public function setIbRapprocompnbcar(?int $ibRapprocompnbcar): static
    {
        $this->ibRapprocompnbcar = $ibRapprocompnbcar;

        return $this;
    }

    public function getIbRapprocompeczone(): ?int
    {
        return $this->ibRapprocompeczone;
    }

    public function setIbRapprocompeczone(?int $ibRapprocompeczone): static
    {
        $this->ibRapprocompeczone = $ibRapprocompeczone;

        return $this;
    }

    public function getIbRapprocompecpos(): ?int
    {
        return $this->ibRapprocompecpos;
    }

    public function setIbRapprocompecpos(?int $ibRapprocompecpos): static
    {
        $this->ibRapprocompecpos = $ibRapprocompecpos;

        return $this;
    }

    public function getIbRapprocompexzone(): ?int
    {
        return $this->ibRapprocompexzone;
    }

    public function setIbRapprocompexzone(?int $ibRapprocompexzone): static
    {
        $this->ibRapprocompexzone = $ibRapprocompexzone;

        return $this;
    }

    public function getIbRapprocompexpos(): ?int
    {
        return $this->ibRapprocompexpos;
    }

    public function setIbRapprocompexpos(?int $ibRapprocompexpos): static
    {
        $this->ibRapprocompexpos = $ibRapprocompexpos;

        return $this;
    }
}
