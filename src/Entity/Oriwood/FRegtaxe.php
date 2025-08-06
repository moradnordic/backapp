<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\FRegtaxeRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_REGTAXE')]
#[ORM\UniqueConstraint(name: 'IRT_ECNO', columns: ['EC_No'])]
#[ORM\Index(name: 'IRT_NO', columns: ['RT_No'])]
#[ORM\Index(name: 'IRT_CTNUM', columns: ['cbCT_Num'])]
#[ORM\Index(name: 'FKIA_F_REGTAXE_CG_NUM01', columns: ['CG_Num01'])]
#[ORM\Index(name: 'FKIA_F_REGTAXE_CG_NUM02', columns: ['CG_Num02'])]
#[ORM\Index(name: 'FKIA_F_REGTAXE_CG_NUM03', columns: ['CG_Num03'])]
#[ORM\Index(name: 'FKIA_F_REGTAXE_CG_NUM04', columns: ['CG_Num04'])]
#[ORM\Index(name: 'FKIA_F_REGTAXE_CG_NUM05', columns: ['CG_Num05'])]
#[ORM\Index(name: 'FKIA_F_REGTAXE_CG_NUM06', columns: ['CG_Num06'])]
#[ORM\Index(name: 'FKIA_F_REGTAXE_CG_NUM07', columns: ['CG_Num07'])]
#[ORM\Index(name: 'FKIA_F_REGTAXE_CG_NUM08', columns: ['CG_Num08'])]
#[ORM\Index(name: 'FKIA_F_REGTAXE_CG_NUM09', columns: ['CG_Num09'])]
#[ORM\Index(name: 'FKIA_F_REGTAXE_CG_NUM10', columns: ['CG_Num10'])]
#[ORM\Index(name: 'FKIA_F_REGTAXE_TA_CODE01', columns: ['TA_Code01'])]
#[ORM\Index(name: 'FKIA_F_REGTAXE_TA_CODE02', columns: ['TA_Code02'])]
#[ORM\Index(name: 'FKIA_F_REGTAXE_TA_CODE03', columns: ['TA_Code03'])]
#[ORM\Index(name: 'FKIA_F_REGTAXE_TA_CODE04', columns: ['TA_Code04'])]
#[ORM\Index(name: 'FKIA_F_REGTAXE_TA_CODE05', columns: ['TA_Code05'])]
#[ORM\Index(name: 'FKIA_F_REGTAXE_TA_CODE06', columns: ['TA_Code06'])]
#[ORM\Index(name: 'FKIA_F_REGTAXE_TA_CODE07', columns: ['TA_Code07'])]
#[ORM\Index(name: 'FKIA_F_REGTAXE_TA_CODE08', columns: ['TA_Code08'])]
#[ORM\Index(name: 'FKIA_F_REGTAXE_TA_CODE09', columns: ['TA_Code09'])]
#[ORM\Index(name: 'FKIA_F_REGTAXE_TA_CODE10', columns: ['TA_Code10'])]
#[ORM\Index(name: 'FKIA_F_REGTAXE_CT_Num', columns: ['CT_Num'])]
#[ORM\Index(name: 'FKIA_F_REGTAXE_EC_No', columns: ['EC_No'])]
#[ORM\Entity(repositoryClass: FRegtaxeRepository::class)]
class FRegtaxe
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "EC_No")]
    private ?int $ecNo = null;

    #[ORM\Column(name: "RT_No", nullable: true)]
    private ?int $rtNo = null;

    #[ORM\Column(name: "RT_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $rtType = null;

    #[ORM\Column(name: "RT_DateReg", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $rtDatereg = null;

    #[ORM\Column(name: "RT_DatePiece", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $rtDatepiece = null;

    #[ORM\Column(name: "CT_Num", length: 17, nullable: true)]
    private ?string $ctNum = null;

    #[ORM\Column(name: "cbCT_Num", type: Types::BINARY, nullable: true)]
    private $cbctNum = null;

    #[ORM\Column(name: "TA_Provenance01", type: Types::SMALLINT, nullable: true)]
    private ?int $taProvenance01 = null;

    #[ORM\Column(name: "TA_Provenance02", type: Types::SMALLINT, nullable: true)]
    private ?int $taProvenance02 = null;

    #[ORM\Column(name: "TA_Provenance03", type: Types::SMALLINT, nullable: true)]
    private ?int $taProvenance03 = null;

    #[ORM\Column(name: "TA_Provenance04", type: Types::SMALLINT, nullable: true)]
    private ?int $taProvenance04 = null;

    #[ORM\Column(name: "TA_Provenance05", type: Types::SMALLINT, nullable: true)]
    private ?int $taProvenance05 = null;

    #[ORM\Column(name: "TA_Provenance06", type: Types::SMALLINT, nullable: true)]
    private ?int $taProvenance06 = null;

    #[ORM\Column(name: "TA_Provenance07", type: Types::SMALLINT, nullable: true)]
    private ?int $taProvenance07 = null;

    #[ORM\Column(name: "TA_Provenance08", type: Types::SMALLINT, nullable: true)]
    private ?int $taProvenance08 = null;

    #[ORM\Column(name: "TA_Provenance09", type: Types::SMALLINT, nullable: true)]
    private ?int $taProvenance09 = null;

    #[ORM\Column(name: "TA_Provenance10", type: Types::SMALLINT, nullable: true)]
    private ?int $taProvenance10 = null;

    #[ORM\Column(name: "CG_Num01", length: 13, nullable: true)]
    private ?string $cgNum01 = null;

    #[ORM\Column(name: "CG_Num02", length: 13, nullable: true)]
    private ?string $cgNum02 = null;

    #[ORM\Column(name: "CG_Num03", length: 13, nullable: true)]
    private ?string $cgNum03 = null;

    #[ORM\Column(name: "CG_Num04", length: 13, nullable: true)]
    private ?string $cgNum04 = null;

    #[ORM\Column(name: "CG_Num05", length: 13, nullable: true)]
    private ?string $cgNum05 = null;

    #[ORM\Column(name: "CG_Num06", length: 13, nullable: true)]
    private ?string $cgNum06 = null;

    #[ORM\Column(name: "CG_Num07", length: 13, nullable: true)]
    private ?string $cgNum07 = null;

    #[ORM\Column(name: "CG_Num08", length: 13, nullable: true)]
    private ?string $cgNum08 = null;

    #[ORM\Column(name: "CG_Num09", length: 13, nullable: true)]
    private ?string $cgNum09 = null;

    #[ORM\Column(name: "CG_Num10", length: 13, nullable: true)]
    private ?string $cgNum10 = null;

    #[ORM\Column(name: "TA_TTaux01", type: Types::SMALLINT, nullable: true)]
    private ?int $taTtaux01 = null;

    #[ORM\Column(name: "TA_TTaux02", type: Types::SMALLINT, nullable: true)]
    private ?int $taTtaux02 = null;

    #[ORM\Column(name: "TA_TTaux03", type: Types::SMALLINT, nullable: true)]
    private ?int $taTtaux03 = null;

    #[ORM\Column(name: "TA_TTaux04", type: Types::SMALLINT, nullable: true)]
    private ?int $taTtaux04 = null;

    #[ORM\Column(name: "TA_TTaux05", type: Types::SMALLINT, nullable: true)]
    private ?int $taTtaux05 = null;

    #[ORM\Column(name: "TA_TTaux06", type: Types::SMALLINT, nullable: true)]
    private ?int $taTtaux06 = null;

    #[ORM\Column(name: "TA_TTaux07", type: Types::SMALLINT, nullable: true)]
    private ?int $taTtaux07 = null;

    #[ORM\Column(name: "TA_TTaux08", type: Types::SMALLINT, nullable: true)]
    private ?int $taTtaux08 = null;

    #[ORM\Column(name: "TA_TTaux09", type: Types::SMALLINT, nullable: true)]
    private ?int $taTtaux09 = null;

    #[ORM\Column(name: "TA_TTaux10", type: Types::SMALLINT, nullable: true)]
    private ?int $taTtaux10 = null;

    #[ORM\Column(name: "TA_Taux01", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $taTaux01 = null;

    #[ORM\Column(name: "TA_Taux02", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $taTaux02 = null;

    #[ORM\Column(name: "TA_Taux03", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $taTaux03 = null;

    #[ORM\Column(name: "TA_Taux04", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $taTaux04 = null;

    #[ORM\Column(name: "TA_Taux05", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $taTaux05 = null;

    #[ORM\Column(name: "TA_Taux06", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $taTaux06 = null;

    #[ORM\Column(name: "TA_Taux07", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $taTaux07 = null;

    #[ORM\Column(name: "TA_Taux08", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $taTaux08 = null;

    #[ORM\Column(name: "TA_Taux09", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $taTaux09 = null;

    #[ORM\Column(name: "TA_Taux10", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $taTaux10 = null;

    #[ORM\Column(name: "RT_Base01", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $rtBase01 = null;

    #[ORM\Column(name: "RT_Base02", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $rtBase02 = null;

    #[ORM\Column(name: "RT_Base03", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $rtBase03 = null;

    #[ORM\Column(name: "RT_Base04", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $rtBase04 = null;

    #[ORM\Column(name: "RT_Base05", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $rtBase05 = null;

    #[ORM\Column(name: "RT_Base06", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $rtBase06 = null;

    #[ORM\Column(name: "RT_Base07", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $rtBase07 = null;

    #[ORM\Column(name: "RT_Base08", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $rtBase08 = null;

    #[ORM\Column(name: "RT_Base09", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $rtBase09 = null;

    #[ORM\Column(name: "RT_Base10", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $rtBase10 = null;

    #[ORM\Column(name: "RT_Montant01", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $rtMontant01 = null;

    #[ORM\Column(name: "RT_Montant02", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $rtMontant02 = null;

    #[ORM\Column(name: "RT_Montant03", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $rtMontant03 = null;

    #[ORM\Column(name: "RT_Montant04", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $rtMontant04 = null;

    #[ORM\Column(name: "RT_Montant05", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $rtMontant05 = null;

    #[ORM\Column(name: "RT_Montant06", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $rtMontant06 = null;

    #[ORM\Column(name: "RT_Montant07", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $rtMontant07 = null;

    #[ORM\Column(name: "RT_Montant08", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $rtMontant08 = null;

    #[ORM\Column(name: "RT_Montant09", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $rtMontant09 = null;

    #[ORM\Column(name: "RT_Montant10", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $rtMontant10 = null;

    #[ORM\Column(name: "TA_Code01", length: 5, nullable: true)]
    private ?string $taCode01 = null;

    #[ORM\Column(name: "TA_Code02", length: 5, nullable: true)]
    private ?string $taCode02 = null;

    #[ORM\Column(name: "TA_Code03", length: 5, nullable: true)]
    private ?string $taCode03 = null;

    #[ORM\Column(name: "TA_Code04", length: 5, nullable: true)]
    private ?string $taCode04 = null;

    #[ORM\Column(name: "TA_Code05", length: 5, nullable: true)]
    private ?string $taCode05 = null;

    #[ORM\Column(name: "TA_Code06", length: 5, nullable: true)]
    private ?string $taCode06 = null;

    #[ORM\Column(name: "TA_Code07", length: 5, nullable: true)]
    private ?string $taCode07 = null;

    #[ORM\Column(name: "TA_Code08", length: 5, nullable: true)]
    private ?string $taCode08 = null;

    #[ORM\Column(name: "TA_Code09", length: 5, nullable: true)]
    private ?string $taCode09 = null;

    #[ORM\Column(name: "TA_Code10", length: 5, nullable: true)]
    private ?string $taCode10 = null;

    #[ORM\Column(name: "JM_Date", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $jmDate = null;

    #[ORM\Column(name: "RT_NbFactures", length: 15, nullable: true)]
    private ?string $rtNbfactures = null;

    #[ORM\Column(name: "RT_TypeTransac", type: Types::SMALLINT, nullable: true)]
    private ?int $rtTypetransac = null;

    #[ORM\Column(name: "RT_NumeroDe", length: 9, nullable: true)]
    private ?string $rtNumerode = null;

    #[ORM\Column(name: "RT_NumeroA", length: 9, nullable: true)]
    private ?string $rtNumeroa = null;

    #[ORM\Column(name: "RT_FactureRectif", length: 69, nullable: true)]
    private ?string $rtFacturerectif = null;

    #[ORM\Column(name: "RT_Motif", length: 69, nullable: true)]
    private ?string $rtMotif = null;

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

    public function getEcNo(): ?int
    {
        return $this->ecNo;
    }

    public function setEcNo(int $ecNo): static
    {
        $this->ecNo = $ecNo;

        return $this;
    }

    public function getRtNo(): ?int
    {
        return $this->rtNo;
    }

    public function setRtNo(?int $rtNo): static
    {
        $this->rtNo = $rtNo;

        return $this;
    }

    public function getRtType(): ?int
    {
        return $this->rtType;
    }

    public function setRtType(?int $rtType): static
    {
        $this->rtType = $rtType;

        return $this;
    }

    public function getRtDatereg(): ?\DateTimeInterface
    {
        return $this->rtDatereg;
    }

    public function setRtDatereg(?\DateTimeInterface $rtDatereg): static
    {
        $this->rtDatereg = $rtDatereg;

        return $this;
    }

    public function getRtDatepiece(): ?\DateTimeInterface
    {
        return $this->rtDatepiece;
    }

    public function setRtDatepiece(?\DateTimeInterface $rtDatepiece): static
    {
        $this->rtDatepiece = $rtDatepiece;

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

    public function getTaProvenance01(): ?int
    {
        return $this->taProvenance01;
    }

    public function setTaProvenance01(?int $taProvenance01): static
    {
        $this->taProvenance01 = $taProvenance01;

        return $this;
    }

    public function getTaProvenance02(): ?int
    {
        return $this->taProvenance02;
    }

    public function setTaProvenance02(?int $taProvenance02): static
    {
        $this->taProvenance02 = $taProvenance02;

        return $this;
    }

    public function getTaProvenance03(): ?int
    {
        return $this->taProvenance03;
    }

    public function setTaProvenance03(?int $taProvenance03): static
    {
        $this->taProvenance03 = $taProvenance03;

        return $this;
    }

    public function getTaProvenance04(): ?int
    {
        return $this->taProvenance04;
    }

    public function setTaProvenance04(?int $taProvenance04): static
    {
        $this->taProvenance04 = $taProvenance04;

        return $this;
    }

    public function getTaProvenance05(): ?int
    {
        return $this->taProvenance05;
    }

    public function setTaProvenance05(?int $taProvenance05): static
    {
        $this->taProvenance05 = $taProvenance05;

        return $this;
    }

    public function getTaProvenance06(): ?int
    {
        return $this->taProvenance06;
    }

    public function setTaProvenance06(?int $taProvenance06): static
    {
        $this->taProvenance06 = $taProvenance06;

        return $this;
    }

    public function getTaProvenance07(): ?int
    {
        return $this->taProvenance07;
    }

    public function setTaProvenance07(?int $taProvenance07): static
    {
        $this->taProvenance07 = $taProvenance07;

        return $this;
    }

    public function getTaProvenance08(): ?int
    {
        return $this->taProvenance08;
    }

    public function setTaProvenance08(?int $taProvenance08): static
    {
        $this->taProvenance08 = $taProvenance08;

        return $this;
    }

    public function getTaProvenance09(): ?int
    {
        return $this->taProvenance09;
    }

    public function setTaProvenance09(?int $taProvenance09): static
    {
        $this->taProvenance09 = $taProvenance09;

        return $this;
    }

    public function getTaProvenance10(): ?int
    {
        return $this->taProvenance10;
    }

    public function setTaProvenance10(?int $taProvenance10): static
    {
        $this->taProvenance10 = $taProvenance10;

        return $this;
    }

    public function getCgNum01(): ?string
    {
        return $this->cgNum01;
    }

    public function setCgNum01(?string $cgNum01): static
    {
        $this->cgNum01 = $cgNum01;

        return $this;
    }

    public function getCgNum02(): ?string
    {
        return $this->cgNum02;
    }

    public function setCgNum02(?string $cgNum02): static
    {
        $this->cgNum02 = $cgNum02;

        return $this;
    }

    public function getCgNum03(): ?string
    {
        return $this->cgNum03;
    }

    public function setCgNum03(?string $cgNum03): static
    {
        $this->cgNum03 = $cgNum03;

        return $this;
    }

    public function getCgNum04(): ?string
    {
        return $this->cgNum04;
    }

    public function setCgNum04(?string $cgNum04): static
    {
        $this->cgNum04 = $cgNum04;

        return $this;
    }

    public function getCgNum05(): ?string
    {
        return $this->cgNum05;
    }

    public function setCgNum05(?string $cgNum05): static
    {
        $this->cgNum05 = $cgNum05;

        return $this;
    }

    public function getCgNum06(): ?string
    {
        return $this->cgNum06;
    }

    public function setCgNum06(?string $cgNum06): static
    {
        $this->cgNum06 = $cgNum06;

        return $this;
    }

    public function getCgNum07(): ?string
    {
        return $this->cgNum07;
    }

    public function setCgNum07(?string $cgNum07): static
    {
        $this->cgNum07 = $cgNum07;

        return $this;
    }

    public function getCgNum08(): ?string
    {
        return $this->cgNum08;
    }

    public function setCgNum08(?string $cgNum08): static
    {
        $this->cgNum08 = $cgNum08;

        return $this;
    }

    public function getCgNum09(): ?string
    {
        return $this->cgNum09;
    }

    public function setCgNum09(?string $cgNum09): static
    {
        $this->cgNum09 = $cgNum09;

        return $this;
    }

    public function getCgNum10(): ?string
    {
        return $this->cgNum10;
    }

    public function setCgNum10(?string $cgNum10): static
    {
        $this->cgNum10 = $cgNum10;

        return $this;
    }

    public function getTaTtaux01(): ?int
    {
        return $this->taTtaux01;
    }

    public function setTaTtaux01(?int $taTtaux01): static
    {
        $this->taTtaux01 = $taTtaux01;

        return $this;
    }

    public function getTaTtaux02(): ?int
    {
        return $this->taTtaux02;
    }

    public function setTaTtaux02(?int $taTtaux02): static
    {
        $this->taTtaux02 = $taTtaux02;

        return $this;
    }

    public function getTaTtaux03(): ?int
    {
        return $this->taTtaux03;
    }

    public function setTaTtaux03(?int $taTtaux03): static
    {
        $this->taTtaux03 = $taTtaux03;

        return $this;
    }

    public function getTaTtaux04(): ?int
    {
        return $this->taTtaux04;
    }

    public function setTaTtaux04(?int $taTtaux04): static
    {
        $this->taTtaux04 = $taTtaux04;

        return $this;
    }

    public function getTaTtaux05(): ?int
    {
        return $this->taTtaux05;
    }

    public function setTaTtaux05(?int $taTtaux05): static
    {
        $this->taTtaux05 = $taTtaux05;

        return $this;
    }

    public function getTaTtaux06(): ?int
    {
        return $this->taTtaux06;
    }

    public function setTaTtaux06(?int $taTtaux06): static
    {
        $this->taTtaux06 = $taTtaux06;

        return $this;
    }

    public function getTaTtaux07(): ?int
    {
        return $this->taTtaux07;
    }

    public function setTaTtaux07(?int $taTtaux07): static
    {
        $this->taTtaux07 = $taTtaux07;

        return $this;
    }

    public function getTaTtaux08(): ?int
    {
        return $this->taTtaux08;
    }

    public function setTaTtaux08(?int $taTtaux08): static
    {
        $this->taTtaux08 = $taTtaux08;

        return $this;
    }

    public function getTaTtaux09(): ?int
    {
        return $this->taTtaux09;
    }

    public function setTaTtaux09(?int $taTtaux09): static
    {
        $this->taTtaux09 = $taTtaux09;

        return $this;
    }

    public function getTaTtaux10(): ?int
    {
        return $this->taTtaux10;
    }

    public function setTaTtaux10(?int $taTtaux10): static
    {
        $this->taTtaux10 = $taTtaux10;

        return $this;
    }

    public function getTaTaux01(): ?string
    {
        return $this->taTaux01;
    }

    public function setTaTaux01(?string $taTaux01): static
    {
        $this->taTaux01 = $taTaux01;

        return $this;
    }

    public function getTaTaux02(): ?string
    {
        return $this->taTaux02;
    }

    public function setTaTaux02(?string $taTaux02): static
    {
        $this->taTaux02 = $taTaux02;

        return $this;
    }

    public function getTaTaux03(): ?string
    {
        return $this->taTaux03;
    }

    public function setTaTaux03(?string $taTaux03): static
    {
        $this->taTaux03 = $taTaux03;

        return $this;
    }

    public function getTaTaux04(): ?string
    {
        return $this->taTaux04;
    }

    public function setTaTaux04(?string $taTaux04): static
    {
        $this->taTaux04 = $taTaux04;

        return $this;
    }

    public function getTaTaux05(): ?string
    {
        return $this->taTaux05;
    }

    public function setTaTaux05(?string $taTaux05): static
    {
        $this->taTaux05 = $taTaux05;

        return $this;
    }

    public function getTaTaux06(): ?string
    {
        return $this->taTaux06;
    }

    public function setTaTaux06(?string $taTaux06): static
    {
        $this->taTaux06 = $taTaux06;

        return $this;
    }

    public function getTaTaux07(): ?string
    {
        return $this->taTaux07;
    }

    public function setTaTaux07(?string $taTaux07): static
    {
        $this->taTaux07 = $taTaux07;

        return $this;
    }

    public function getTaTaux08(): ?string
    {
        return $this->taTaux08;
    }

    public function setTaTaux08(?string $taTaux08): static
    {
        $this->taTaux08 = $taTaux08;

        return $this;
    }

    public function getTaTaux09(): ?string
    {
        return $this->taTaux09;
    }

    public function setTaTaux09(?string $taTaux09): static
    {
        $this->taTaux09 = $taTaux09;

        return $this;
    }

    public function getTaTaux10(): ?string
    {
        return $this->taTaux10;
    }

    public function setTaTaux10(?string $taTaux10): static
    {
        $this->taTaux10 = $taTaux10;

        return $this;
    }

    public function getRtBase01(): ?string
    {
        return $this->rtBase01;
    }

    public function setRtBase01(?string $rtBase01): static
    {
        $this->rtBase01 = $rtBase01;

        return $this;
    }

    public function getRtBase02(): ?string
    {
        return $this->rtBase02;
    }

    public function setRtBase02(?string $rtBase02): static
    {
        $this->rtBase02 = $rtBase02;

        return $this;
    }

    public function getRtBase03(): ?string
    {
        return $this->rtBase03;
    }

    public function setRtBase03(?string $rtBase03): static
    {
        $this->rtBase03 = $rtBase03;

        return $this;
    }

    public function getRtBase04(): ?string
    {
        return $this->rtBase04;
    }

    public function setRtBase04(?string $rtBase04): static
    {
        $this->rtBase04 = $rtBase04;

        return $this;
    }

    public function getRtBase05(): ?string
    {
        return $this->rtBase05;
    }

    public function setRtBase05(?string $rtBase05): static
    {
        $this->rtBase05 = $rtBase05;

        return $this;
    }

    public function getRtBase06(): ?string
    {
        return $this->rtBase06;
    }

    public function setRtBase06(?string $rtBase06): static
    {
        $this->rtBase06 = $rtBase06;

        return $this;
    }

    public function getRtBase07(): ?string
    {
        return $this->rtBase07;
    }

    public function setRtBase07(?string $rtBase07): static
    {
        $this->rtBase07 = $rtBase07;

        return $this;
    }

    public function getRtBase08(): ?string
    {
        return $this->rtBase08;
    }

    public function setRtBase08(?string $rtBase08): static
    {
        $this->rtBase08 = $rtBase08;

        return $this;
    }

    public function getRtBase09(): ?string
    {
        return $this->rtBase09;
    }

    public function setRtBase09(?string $rtBase09): static
    {
        $this->rtBase09 = $rtBase09;

        return $this;
    }

    public function getRtBase10(): ?string
    {
        return $this->rtBase10;
    }

    public function setRtBase10(?string $rtBase10): static
    {
        $this->rtBase10 = $rtBase10;

        return $this;
    }

    public function getRtMontant01(): ?string
    {
        return $this->rtMontant01;
    }

    public function setRtMontant01(?string $rtMontant01): static
    {
        $this->rtMontant01 = $rtMontant01;

        return $this;
    }

    public function getRtMontant02(): ?string
    {
        return $this->rtMontant02;
    }

    public function setRtMontant02(?string $rtMontant02): static
    {
        $this->rtMontant02 = $rtMontant02;

        return $this;
    }

    public function getRtMontant03(): ?string
    {
        return $this->rtMontant03;
    }

    public function setRtMontant03(?string $rtMontant03): static
    {
        $this->rtMontant03 = $rtMontant03;

        return $this;
    }

    public function getRtMontant04(): ?string
    {
        return $this->rtMontant04;
    }

    public function setRtMontant04(?string $rtMontant04): static
    {
        $this->rtMontant04 = $rtMontant04;

        return $this;
    }

    public function getRtMontant05(): ?string
    {
        return $this->rtMontant05;
    }

    public function setRtMontant05(?string $rtMontant05): static
    {
        $this->rtMontant05 = $rtMontant05;

        return $this;
    }

    public function getRtMontant06(): ?string
    {
        return $this->rtMontant06;
    }

    public function setRtMontant06(?string $rtMontant06): static
    {
        $this->rtMontant06 = $rtMontant06;

        return $this;
    }

    public function getRtMontant07(): ?string
    {
        return $this->rtMontant07;
    }

    public function setRtMontant07(?string $rtMontant07): static
    {
        $this->rtMontant07 = $rtMontant07;

        return $this;
    }

    public function getRtMontant08(): ?string
    {
        return $this->rtMontant08;
    }

    public function setRtMontant08(?string $rtMontant08): static
    {
        $this->rtMontant08 = $rtMontant08;

        return $this;
    }

    public function getRtMontant09(): ?string
    {
        return $this->rtMontant09;
    }

    public function setRtMontant09(?string $rtMontant09): static
    {
        $this->rtMontant09 = $rtMontant09;

        return $this;
    }

    public function getRtMontant10(): ?string
    {
        return $this->rtMontant10;
    }

    public function setRtMontant10(?string $rtMontant10): static
    {
        $this->rtMontant10 = $rtMontant10;

        return $this;
    }

    public function getTaCode01(): ?string
    {
        return $this->taCode01;
    }

    public function setTaCode01(?string $taCode01): static
    {
        $this->taCode01 = $taCode01;

        return $this;
    }

    public function getTaCode02(): ?string
    {
        return $this->taCode02;
    }

    public function setTaCode02(?string $taCode02): static
    {
        $this->taCode02 = $taCode02;

        return $this;
    }

    public function getTaCode03(): ?string
    {
        return $this->taCode03;
    }

    public function setTaCode03(?string $taCode03): static
    {
        $this->taCode03 = $taCode03;

        return $this;
    }

    public function getTaCode04(): ?string
    {
        return $this->taCode04;
    }

    public function setTaCode04(?string $taCode04): static
    {
        $this->taCode04 = $taCode04;

        return $this;
    }

    public function getTaCode05(): ?string
    {
        return $this->taCode05;
    }

    public function setTaCode05(?string $taCode05): static
    {
        $this->taCode05 = $taCode05;

        return $this;
    }

    public function getTaCode06(): ?string
    {
        return $this->taCode06;
    }

    public function setTaCode06(?string $taCode06): static
    {
        $this->taCode06 = $taCode06;

        return $this;
    }

    public function getTaCode07(): ?string
    {
        return $this->taCode07;
    }

    public function setTaCode07(?string $taCode07): static
    {
        $this->taCode07 = $taCode07;

        return $this;
    }

    public function getTaCode08(): ?string
    {
        return $this->taCode08;
    }

    public function setTaCode08(?string $taCode08): static
    {
        $this->taCode08 = $taCode08;

        return $this;
    }

    public function getTaCode09(): ?string
    {
        return $this->taCode09;
    }

    public function setTaCode09(?string $taCode09): static
    {
        $this->taCode09 = $taCode09;

        return $this;
    }

    public function getTaCode10(): ?string
    {
        return $this->taCode10;
    }

    public function setTaCode10(?string $taCode10): static
    {
        $this->taCode10 = $taCode10;

        return $this;
    }

    public function getJmDate(): ?\DateTimeInterface
    {
        return $this->jmDate;
    }

    public function setJmDate(?\DateTimeInterface $jmDate): static
    {
        $this->jmDate = $jmDate;

        return $this;
    }

    public function getRtNbfactures(): ?string
    {
        return $this->rtNbfactures;
    }

    public function setRtNbfactures(?string $rtNbfactures): static
    {
        $this->rtNbfactures = $rtNbfactures;

        return $this;
    }

    public function getRtTypetransac(): ?int
    {
        return $this->rtTypetransac;
    }

    public function setRtTypetransac(?int $rtTypetransac): static
    {
        $this->rtTypetransac = $rtTypetransac;

        return $this;
    }

    public function getRtNumerode(): ?string
    {
        return $this->rtNumerode;
    }

    public function setRtNumerode(?string $rtNumerode): static
    {
        $this->rtNumerode = $rtNumerode;

        return $this;
    }

    public function getRtNumeroa(): ?string
    {
        return $this->rtNumeroa;
    }

    public function setRtNumeroa(?string $rtNumeroa): static
    {
        $this->rtNumeroa = $rtNumeroa;

        return $this;
    }

    public function getRtFacturerectif(): ?string
    {
        return $this->rtFacturerectif;
    }

    public function setRtFacturerectif(?string $rtFacturerectif): static
    {
        $this->rtFacturerectif = $rtFacturerectif;

        return $this;
    }

    public function getRtMotif(): ?string
    {
        return $this->rtMotif;
    }

    public function setRtMotif(?string $rtMotif): static
    {
        $this->rtMotif = $rtMotif;

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
