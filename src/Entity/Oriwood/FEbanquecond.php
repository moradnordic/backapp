<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\FEbanquecondRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_EBANQUECOND')]
#[ORM\UniqueConstraint(name: 'IEB_CONDNO', columns: ['EB_No'])]
#[ORM\Index(name: 'FKIA_F_EBANQUECOND_EB_No', columns: ['EB_No'])]
#[ORM\Entity(repositoryClass: FEbanquecondRepository::class)]
class FEbanquecond
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "EB_No")]
    private ?int $ebNo = null;

    #[ORM\Column(name: "EB_CondDecouvertCD_TypePlafond", type: Types::SMALLINT, nullable: true)]
    private ?int $ebConddecouvertcdTypeplafond = null;

    #[ORM\Column(name: "EB_CondDecouvertCD_BaseCalcul", type: Types::SMALLINT, nullable: true)]
    private ?int $ebConddecouvertcdBasecalcul = null;

    #[ORM\Column(name: "EB_CondDecouvertTR_No", nullable: true)]
    private ?int $ebConddecouverttrNo = null;

    #[ORM\Column(name: "cbEB_CondDecouvertTR_No", nullable: true)]
    private ?int $cbebConddecouverttrNo = null;

    #[ORM\Column(name: "EB_CondDecouvertCD_ValeurTaux", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $ebConddecouvertcdValeurtaux = null;

    #[ORM\Column(name: "EB_CondDecouvertCD_Plafond01CD_ValeurPlafond", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $ebConddecouvertcdPlafond01cdValeurplafond = null;

    #[ORM\Column(name: "EB_CondDecouvertCD_Plafond01CD_Marge", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $ebConddecouvertcdPlafond01cdMarge = null;

    #[ORM\Column(name: "EB_CondDecouvertCD_Plafond02CD_ValeurPlafond", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $ebConddecouvertcdPlafond02cdValeurplafond = null;

    #[ORM\Column(name: "EB_CondDecouvertCD_Plafond02CD_Marge", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $ebConddecouvertcdPlafond02cdMarge = null;

    #[ORM\Column(name: "EB_CondInteretCI_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $ebCondinteretciType = null;

    #[ORM\Column(name: "EB_CondInteretTR_No", nullable: true)]
    private ?int $ebCondinterettrNo = null;

    #[ORM\Column(name: "cbEB_CondInteretTR_No", nullable: true)]
    private ?int $cbebCondinterettrNo = null;

    #[ORM\Column(name: "EB_CondInteretCI_Taux", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $ebCondinteretciTaux = null;

    #[ORM\Column(name: "EB_CondInteretCI_Assiette", type: Types::SMALLINT, nullable: true)]
    private ?int $ebCondinteretciAssiette = null;

    #[ORM\Column(name: "EB_CondInteretCI_Limite", type: Types::SMALLINT, nullable: true)]
    private ?int $ebCondinteretciLimite = null;

    #[ORM\Column(name: "EB_CondInteretCI_BaseCalcul", type: Types::SMALLINT, nullable: true)]
    private ?int $ebCondinteretciBasecalcul = null;

    #[ORM\Column(name: "EB_CondCommissionCC_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $ebCondcommissionccType = null;

    #[ORM\Column(name: "EB_CondCommissionCC_Limite", nullable: true)]
    private ?int $ebCondcommissionccLimite = null;

    #[ORM\Column(name: "EB_CondCommissionCC_Taux", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $ebCondcommissionccTaux = null;

    #[ORM\Column(name: "EB_CondFraisCF_Commission", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $ebCondfraiscfCommission = null;

    #[ORM\Column(name: "EB_CondFraisCF_Compte", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $ebCondfraiscfCompte = null;

    #[ORM\Column(name: "EB_CondFraisCF_Periodicite", type: Types::SMALLINT, nullable: true)]
    private ?int $ebCondfraiscfPeriodicite = null;

    #[ORM\Column(name: "EB_CondFraisCF_SeuilExoneration", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $ebCondfraiscfSeuilexoneration = null;

    #[ORM\Column(name: "EB_CondFraisCF_TypeExoneration", type: Types::SMALLINT, nullable: true)]
    private ?int $ebCondfraiscfTypeexoneration = null;

    #[ORM\Column(name: "EB_CondFraisCF_SeuilCrediteur", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $ebCondfraiscfSeuilcrediteur = null;

    #[ORM\Column(name: "EB_CondFraisCF_ModePerception", type: Types::SMALLINT, nullable: true)]
    private ?int $ebCondfraiscfModeperception = null;

    #[ORM\Column(name: "EB_CondFraisCF_MontantVariableHT", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $ebCondfraiscfMontantvariableht = null;

    #[ORM\Column(name: "EB_CondFraisCF_MinimumPercu", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $ebCondfraiscfMinimumpercu = null;

    #[ORM\Column(name: "EB_CondFraisCF_MaximumPercu", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $ebCondfraiscfMaximumpercu = null;

    #[ORM\Column(name: "EB_CondFraisCF_AssujetTVACommission", type: Types::SMALLINT, nullable: true)]
    private ?int $ebCondfraiscfAssujettvacommission = null;

    #[ORM\Column(name: "EB_CondFraisCF_AssujetTVAFrais", type: Types::SMALLINT, nullable: true)]
    private ?int $ebCondfraiscfAssujettvafrais = null;

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

    public function getEbNo(): ?int
    {
        return $this->ebNo;
    }

    public function setEbNo(int $ebNo): static
    {
        $this->ebNo = $ebNo;

        return $this;
    }

    public function getEbConddecouvertcdTypeplafond(): ?int
    {
        return $this->ebConddecouvertcdTypeplafond;
    }

    public function setEbConddecouvertcdTypeplafond(?int $ebConddecouvertcdTypeplafond): static
    {
        $this->ebConddecouvertcdTypeplafond = $ebConddecouvertcdTypeplafond;

        return $this;
    }

    public function getEbConddecouvertcdBasecalcul(): ?int
    {
        return $this->ebConddecouvertcdBasecalcul;
    }

    public function setEbConddecouvertcdBasecalcul(?int $ebConddecouvertcdBasecalcul): static
    {
        $this->ebConddecouvertcdBasecalcul = $ebConddecouvertcdBasecalcul;

        return $this;
    }

    public function getEbConddecouverttrNo(): ?int
    {
        return $this->ebConddecouverttrNo;
    }

    public function setEbConddecouverttrNo(?int $ebConddecouverttrNo): static
    {
        $this->ebConddecouverttrNo = $ebConddecouverttrNo;

        return $this;
    }

    public function getCbebConddecouverttrNo(): ?int
    {
        return $this->cbebConddecouverttrNo;
    }

    public function setCbebConddecouverttrNo(?int $cbebConddecouverttrNo): static
    {
        $this->cbebConddecouverttrNo = $cbebConddecouverttrNo;

        return $this;
    }

    public function getEbConddecouvertcdValeurtaux(): ?string
    {
        return $this->ebConddecouvertcdValeurtaux;
    }

    public function setEbConddecouvertcdValeurtaux(?string $ebConddecouvertcdValeurtaux): static
    {
        $this->ebConddecouvertcdValeurtaux = $ebConddecouvertcdValeurtaux;

        return $this;
    }

    public function getEbConddecouvertcdPlafond01cdValeurplafond(): ?string
    {
        return $this->ebConddecouvertcdPlafond01cdValeurplafond;
    }

    public function setEbConddecouvertcdPlafond01cdValeurplafond(?string $ebConddecouvertcdPlafond01cdValeurplafond): static
    {
        $this->ebConddecouvertcdPlafond01cdValeurplafond = $ebConddecouvertcdPlafond01cdValeurplafond;

        return $this;
    }

    public function getEbConddecouvertcdPlafond01cdMarge(): ?string
    {
        return $this->ebConddecouvertcdPlafond01cdMarge;
    }

    public function setEbConddecouvertcdPlafond01cdMarge(?string $ebConddecouvertcdPlafond01cdMarge): static
    {
        $this->ebConddecouvertcdPlafond01cdMarge = $ebConddecouvertcdPlafond01cdMarge;

        return $this;
    }

    public function getEbConddecouvertcdPlafond02cdValeurplafond(): ?string
    {
        return $this->ebConddecouvertcdPlafond02cdValeurplafond;
    }

    public function setEbConddecouvertcdPlafond02cdValeurplafond(?string $ebConddecouvertcdPlafond02cdValeurplafond): static
    {
        $this->ebConddecouvertcdPlafond02cdValeurplafond = $ebConddecouvertcdPlafond02cdValeurplafond;

        return $this;
    }

    public function getEbConddecouvertcdPlafond02cdMarge(): ?string
    {
        return $this->ebConddecouvertcdPlafond02cdMarge;
    }

    public function setEbConddecouvertcdPlafond02cdMarge(?string $ebConddecouvertcdPlafond02cdMarge): static
    {
        $this->ebConddecouvertcdPlafond02cdMarge = $ebConddecouvertcdPlafond02cdMarge;

        return $this;
    }

    public function getEbCondinteretciType(): ?int
    {
        return $this->ebCondinteretciType;
    }

    public function setEbCondinteretciType(?int $ebCondinteretciType): static
    {
        $this->ebCondinteretciType = $ebCondinteretciType;

        return $this;
    }

    public function getEbCondinterettrNo(): ?int
    {
        return $this->ebCondinterettrNo;
    }

    public function setEbCondinterettrNo(?int $ebCondinterettrNo): static
    {
        $this->ebCondinterettrNo = $ebCondinterettrNo;

        return $this;
    }

    public function getCbebCondinterettrNo(): ?int
    {
        return $this->cbebCondinterettrNo;
    }

    public function setCbebCondinterettrNo(?int $cbebCondinterettrNo): static
    {
        $this->cbebCondinterettrNo = $cbebCondinterettrNo;

        return $this;
    }

    public function getEbCondinteretciTaux(): ?string
    {
        return $this->ebCondinteretciTaux;
    }

    public function setEbCondinteretciTaux(?string $ebCondinteretciTaux): static
    {
        $this->ebCondinteretciTaux = $ebCondinteretciTaux;

        return $this;
    }

    public function getEbCondinteretciAssiette(): ?int
    {
        return $this->ebCondinteretciAssiette;
    }

    public function setEbCondinteretciAssiette(?int $ebCondinteretciAssiette): static
    {
        $this->ebCondinteretciAssiette = $ebCondinteretciAssiette;

        return $this;
    }

    public function getEbCondinteretciLimite(): ?int
    {
        return $this->ebCondinteretciLimite;
    }

    public function setEbCondinteretciLimite(?int $ebCondinteretciLimite): static
    {
        $this->ebCondinteretciLimite = $ebCondinteretciLimite;

        return $this;
    }

    public function getEbCondinteretciBasecalcul(): ?int
    {
        return $this->ebCondinteretciBasecalcul;
    }

    public function setEbCondinteretciBasecalcul(?int $ebCondinteretciBasecalcul): static
    {
        $this->ebCondinteretciBasecalcul = $ebCondinteretciBasecalcul;

        return $this;
    }

    public function getEbCondcommissionccType(): ?int
    {
        return $this->ebCondcommissionccType;
    }

    public function setEbCondcommissionccType(?int $ebCondcommissionccType): static
    {
        $this->ebCondcommissionccType = $ebCondcommissionccType;

        return $this;
    }

    public function getEbCondcommissionccLimite(): ?int
    {
        return $this->ebCondcommissionccLimite;
    }

    public function setEbCondcommissionccLimite(?int $ebCondcommissionccLimite): static
    {
        $this->ebCondcommissionccLimite = $ebCondcommissionccLimite;

        return $this;
    }

    public function getEbCondcommissionccTaux(): ?string
    {
        return $this->ebCondcommissionccTaux;
    }

    public function setEbCondcommissionccTaux(?string $ebCondcommissionccTaux): static
    {
        $this->ebCondcommissionccTaux = $ebCondcommissionccTaux;

        return $this;
    }

    public function getEbCondfraiscfCommission(): ?string
    {
        return $this->ebCondfraiscfCommission;
    }

    public function setEbCondfraiscfCommission(?string $ebCondfraiscfCommission): static
    {
        $this->ebCondfraiscfCommission = $ebCondfraiscfCommission;

        return $this;
    }

    public function getEbCondfraiscfCompte(): ?string
    {
        return $this->ebCondfraiscfCompte;
    }

    public function setEbCondfraiscfCompte(?string $ebCondfraiscfCompte): static
    {
        $this->ebCondfraiscfCompte = $ebCondfraiscfCompte;

        return $this;
    }

    public function getEbCondfraiscfPeriodicite(): ?int
    {
        return $this->ebCondfraiscfPeriodicite;
    }

    public function setEbCondfraiscfPeriodicite(?int $ebCondfraiscfPeriodicite): static
    {
        $this->ebCondfraiscfPeriodicite = $ebCondfraiscfPeriodicite;

        return $this;
    }

    public function getEbCondfraiscfSeuilexoneration(): ?string
    {
        return $this->ebCondfraiscfSeuilexoneration;
    }

    public function setEbCondfraiscfSeuilexoneration(?string $ebCondfraiscfSeuilexoneration): static
    {
        $this->ebCondfraiscfSeuilexoneration = $ebCondfraiscfSeuilexoneration;

        return $this;
    }

    public function getEbCondfraiscfTypeexoneration(): ?int
    {
        return $this->ebCondfraiscfTypeexoneration;
    }

    public function setEbCondfraiscfTypeexoneration(?int $ebCondfraiscfTypeexoneration): static
    {
        $this->ebCondfraiscfTypeexoneration = $ebCondfraiscfTypeexoneration;

        return $this;
    }

    public function getEbCondfraiscfSeuilcrediteur(): ?string
    {
        return $this->ebCondfraiscfSeuilcrediteur;
    }

    public function setEbCondfraiscfSeuilcrediteur(?string $ebCondfraiscfSeuilcrediteur): static
    {
        $this->ebCondfraiscfSeuilcrediteur = $ebCondfraiscfSeuilcrediteur;

        return $this;
    }

    public function getEbCondfraiscfModeperception(): ?int
    {
        return $this->ebCondfraiscfModeperception;
    }

    public function setEbCondfraiscfModeperception(?int $ebCondfraiscfModeperception): static
    {
        $this->ebCondfraiscfModeperception = $ebCondfraiscfModeperception;

        return $this;
    }

    public function getEbCondfraiscfMontantvariableht(): ?string
    {
        return $this->ebCondfraiscfMontantvariableht;
    }

    public function setEbCondfraiscfMontantvariableht(?string $ebCondfraiscfMontantvariableht): static
    {
        $this->ebCondfraiscfMontantvariableht = $ebCondfraiscfMontantvariableht;

        return $this;
    }

    public function getEbCondfraiscfMinimumpercu(): ?string
    {
        return $this->ebCondfraiscfMinimumpercu;
    }

    public function setEbCondfraiscfMinimumpercu(?string $ebCondfraiscfMinimumpercu): static
    {
        $this->ebCondfraiscfMinimumpercu = $ebCondfraiscfMinimumpercu;

        return $this;
    }

    public function getEbCondfraiscfMaximumpercu(): ?string
    {
        return $this->ebCondfraiscfMaximumpercu;
    }

    public function setEbCondfraiscfMaximumpercu(?string $ebCondfraiscfMaximumpercu): static
    {
        $this->ebCondfraiscfMaximumpercu = $ebCondfraiscfMaximumpercu;

        return $this;
    }

    public function getEbCondfraiscfAssujettvacommission(): ?int
    {
        return $this->ebCondfraiscfAssujettvacommission;
    }

    public function setEbCondfraiscfAssujettvacommission(?int $ebCondfraiscfAssujettvacommission): static
    {
        $this->ebCondfraiscfAssujettvacommission = $ebCondfraiscfAssujettvacommission;

        return $this;
    }

    public function getEbCondfraiscfAssujettvafrais(): ?int
    {
        return $this->ebCondfraiscfAssujettvafrais;
    }

    public function setEbCondfraiscfAssujettvafrais(?int $ebCondfraiscfAssujettvafrais): static
    {
        $this->ebCondfraiscfAssujettvafrais = $ebCondfraiscfAssujettvafrais;

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
