<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\PProjetaffRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'P_PROJETAFF')]
#[ORM\Entity(repositoryClass: PProjetaffRepository::class)]
class PProjetaff
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "PA_Numero", length: 9, nullable: true)]
    private ?string $paNumero = null;

    #[ORM\Column(name: "PA_Origine01", type: Types::SMALLINT, nullable: true)]
    private ?int $paOrigine01 = null;

    #[ORM\Column(name: "PA_Origine02", type: Types::SMALLINT, nullable: true)]
    private ?int $paOrigine02 = null;

    #[ORM\Column(name: "PA_Origine03", type: Types::SMALLINT, nullable: true)]
    private ?int $paOrigine03 = null;

    #[ORM\Column(name: "PA_Origine04", type: Types::SMALLINT, nullable: true)]
    private ?int $paOrigine04 = null;

    #[ORM\Column(name: "PA_Origine05", type: Types::SMALLINT, nullable: true)]
    private ?int $paOrigine05 = null;

    #[ORM\Column(name: "PA_Origine06", type: Types::SMALLINT, nullable: true)]
    private ?int $paOrigine06 = null;

    #[ORM\Column(name: "PA_Origine07", type: Types::SMALLINT, nullable: true)]
    private ?int $paOrigine07 = null;

    #[ORM\Column(name: "PA_Origine08", type: Types::SMALLINT, nullable: true)]
    private ?int $paOrigine08 = null;

    #[ORM\Column(name: "PA_Origine09", type: Types::SMALLINT, nullable: true)]
    private ?int $paOrigine09 = null;

    #[ORM\Column(name: "PA_Origine10", type: Types::SMALLINT, nullable: true)]
    private ?int $paOrigine10 = null;

    #[ORM\Column(name: "PA_Origine11", type: Types::SMALLINT, nullable: true)]
    private ?int $paOrigine11 = null;

    #[ORM\Column(name: "PA_Origine12", type: Types::SMALLINT, nullable: true)]
    private ?int $paOrigine12 = null;

    #[ORM\Column(name: "PA_Origine13", type: Types::SMALLINT, nullable: true)]
    private ?int $paOrigine13 = null;

    #[ORM\Column(name: "PA_Origine14", type: Types::SMALLINT, nullable: true)]
    private ?int $paOrigine14 = null;

    #[ORM\Column(name: "PA_Origine15", type: Types::SMALLINT, nullable: true)]
    private ?int $paOrigine15 = null;

    #[ORM\Column(name: "PA_Origine16", type: Types::SMALLINT, nullable: true)]
    private ?int $paOrigine16 = null;

    #[ORM\Column(name: "PA_Origine17", type: Types::SMALLINT, nullable: true)]
    private ?int $paOrigine17 = null;

    #[ORM\Column(name: "PA_Origine18", type: Types::SMALLINT, nullable: true)]
    private ?int $paOrigine18 = null;

    #[ORM\Column(name: "PA_Origine19", type: Types::SMALLINT, nullable: true)]
    private ?int $paOrigine19 = null;

    #[ORM\Column(name: "PA_Origine20", type: Types::SMALLINT, nullable: true)]
    private ?int $paOrigine20 = null;

    #[ORM\Column(name: "PA_Origine21", type: Types::SMALLINT, nullable: true)]
    private ?int $paOrigine21 = null;

    #[ORM\Column(name: "PA_Origine22", type: Types::SMALLINT, nullable: true)]
    private ?int $paOrigine22 = null;

    #[ORM\Column(name: "PA_Origine23", type: Types::SMALLINT, nullable: true)]
    private ?int $paOrigine23 = null;

    #[ORM\Column(name: "PA_Origine24", type: Types::SMALLINT, nullable: true)]
    private ?int $paOrigine24 = null;

    #[ORM\Column(name: "PA_Origine25", type: Types::SMALLINT, nullable: true)]
    private ?int $paOrigine25 = null;

    #[ORM\Column(name: "PA_Origine26", type: Types::SMALLINT, nullable: true)]
    private ?int $paOrigine26 = null;

    #[ORM\Column(name: "PA_Origine27", type: Types::SMALLINT, nullable: true)]
    private ?int $paOrigine27 = null;

    #[ORM\Column(name: "PA_Origine28", type: Types::SMALLINT, nullable: true)]
    private ?int $paOrigine28 = null;

    #[ORM\Column(name: "PA_Origine29", type: Types::SMALLINT, nullable: true)]
    private ?int $paOrigine29 = null;

    #[ORM\Column(name: "PA_Origine30", type: Types::SMALLINT, nullable: true)]
    private ?int $paOrigine30 = null;

    #[ORM\Column(name: "PA_Origine31", type: Types::SMALLINT, nullable: true)]
    private ?int $paOrigine31 = null;

    #[ORM\Column(name: "PA_Origine32", type: Types::SMALLINT, nullable: true)]
    private ?int $paOrigine32 = null;

    #[ORM\Column(name: "PA_Origine33", type: Types::SMALLINT, nullable: true)]
    private ?int $paOrigine33 = null;

    #[ORM\Column(name: "PA_Origine34", type: Types::SMALLINT, nullable: true)]
    private ?int $paOrigine34 = null;

    #[ORM\Column(name: "PA_Origine35", type: Types::SMALLINT, nullable: true)]
    private ?int $paOrigine35 = null;

    #[ORM\Column(name: "PA_Origine36", type: Types::SMALLINT, nullable: true)]
    private ?int $paOrigine36 = null;

    #[ORM\Column(name: "PA_Origine37", type: Types::SMALLINT, nullable: true)]
    private ?int $paOrigine37 = null;

    #[ORM\Column(name: "PA_Origine38", type: Types::SMALLINT, nullable: true)]
    private ?int $paOrigine38 = null;

    #[ORM\Column(name: "PA_Origine39", type: Types::SMALLINT, nullable: true)]
    private ?int $paOrigine39 = null;

    #[ORM\Column(name: "PA_Origine40", type: Types::SMALLINT, nullable: true)]
    private ?int $paOrigine40 = null;

    #[ORM\Column(name: "PA_Origine41", type: Types::SMALLINT, nullable: true)]
    private ?int $paOrigine41 = null;

    #[ORM\Column(name: "PA_Origine42", type: Types::SMALLINT, nullable: true)]
    private ?int $paOrigine42 = null;

    #[ORM\Column(name: "PA_Origine43", type: Types::SMALLINT, nullable: true)]
    private ?int $paOrigine43 = null;

    #[ORM\Column(name: "PA_Origine44", type: Types::SMALLINT, nullable: true)]
    private ?int $paOrigine44 = null;

    #[ORM\Column(name: "PA_Origine45", type: Types::SMALLINT, nullable: true)]
    private ?int $paOrigine45 = null;

    #[ORM\Column(name: "PA_Origine46", type: Types::SMALLINT, nullable: true)]
    private ?int $paOrigine46 = null;

    #[ORM\Column(name: "PA_Origine47", type: Types::SMALLINT, nullable: true)]
    private ?int $paOrigine47 = null;

    #[ORM\Column(name: "PA_Origine48", type: Types::SMALLINT, nullable: true)]
    private ?int $paOrigine48 = null;

    #[ORM\Column(name: "PA_Origine49", type: Types::SMALLINT, nullable: true)]
    private ?int $paOrigine49 = null;

    #[ORM\Column(name: "PA_Origine50", type: Types::SMALLINT, nullable: true)]
    private ?int $paOrigine50 = null;

    #[ORM\Column(name: "PA_Origine51", type: Types::SMALLINT, nullable: true)]
    private ?int $paOrigine51 = null;

    #[ORM\Column(name: "PA_Origine52", type: Types::SMALLINT, nullable: true)]
    private ?int $paOrigine52 = null;

    #[ORM\Column(name: "PA_Origine53", type: Types::SMALLINT, nullable: true)]
    private ?int $paOrigine53 = null;

    #[ORM\Column(name: "PA_Origine54", type: Types::SMALLINT, nullable: true)]
    private ?int $paOrigine54 = null;

    #[ORM\Column(name: "PA_Origine55", type: Types::SMALLINT, nullable: true)]
    private ?int $paOrigine55 = null;

    #[ORM\Column(name: "PA_Origine56", type: Types::SMALLINT, nullable: true)]
    private ?int $paOrigine56 = null;

    #[ORM\Column(name: "PA_Origine57", type: Types::SMALLINT, nullable: true)]
    private ?int $paOrigine57 = null;

    #[ORM\Column(name: "PA_Origine58", type: Types::SMALLINT, nullable: true)]
    private ?int $paOrigine58 = null;

    #[ORM\Column(name: "PA_Origine59", type: Types::SMALLINT, nullable: true)]
    private ?int $paOrigine59 = null;

    #[ORM\Column(name: "PA_Origine60", type: Types::SMALLINT, nullable: true)]
    private ?int $paOrigine60 = null;

    #[ORM\Column(name: "PA_Origine61", type: Types::SMALLINT, nullable: true)]
    private ?int $paOrigine61 = null;

    #[ORM\Column(name: "PA_Origine62", type: Types::SMALLINT, nullable: true)]
    private ?int $paOrigine62 = null;

    #[ORM\Column(name: "PA_Origine63", type: Types::SMALLINT, nullable: true)]
    private ?int $paOrigine63 = null;

    #[ORM\Column(name: "PA_Origine64", type: Types::SMALLINT, nullable: true)]
    private ?int $paOrigine64 = null;

    #[ORM\Column(name: "PA_Origine65", type: Types::SMALLINT, nullable: true)]
    private ?int $paOrigine65 = null;

    #[ORM\Column(name: "PA_Origine66", type: Types::SMALLINT, nullable: true)]
    private ?int $paOrigine66 = null;

    #[ORM\Column(name: "PA_Origine67", type: Types::SMALLINT, nullable: true)]
    private ?int $paOrigine67 = null;

    #[ORM\Column(name: "PA_Origine68", type: Types::SMALLINT, nullable: true)]
    private ?int $paOrigine68 = null;

    #[ORM\Column(name: "PA_Origine69", type: Types::SMALLINT, nullable: true)]
    private ?int $paOrigine69 = null;

    #[ORM\Column(name: "PA_Origine70", type: Types::SMALLINT, nullable: true)]
    private ?int $paOrigine70 = null;

    #[ORM\Column(name: "PA_Origine71", type: Types::SMALLINT, nullable: true)]
    private ?int $paOrigine71 = null;

    #[ORM\Column(name: "PA_Origine72", type: Types::SMALLINT, nullable: true)]
    private ?int $paOrigine72 = null;

    #[ORM\Column(name: "PA_Origine73", type: Types::SMALLINT, nullable: true)]
    private ?int $paOrigine73 = null;

    #[ORM\Column(name: "PA_Origine74", type: Types::SMALLINT, nullable: true)]
    private ?int $paOrigine74 = null;

    #[ORM\Column(name: "PA_Origine75", type: Types::SMALLINT, nullable: true)]
    private ?int $paOrigine75 = null;

    #[ORM\Column(name: "PA_Origine76", type: Types::SMALLINT, nullable: true)]
    private ?int $paOrigine76 = null;

    #[ORM\Column(name: "PA_Origine77", type: Types::SMALLINT, nullable: true)]
    private ?int $paOrigine77 = null;

    #[ORM\Column(name: "PA_Origine78", type: Types::SMALLINT, nullable: true)]
    private ?int $paOrigine78 = null;

    #[ORM\Column(name: "PA_Origine79", type: Types::SMALLINT, nullable: true)]
    private ?int $paOrigine79 = null;

    #[ORM\Column(name: "PA_Origine80", type: Types::SMALLINT, nullable: true)]
    private ?int $paOrigine80 = null;

    #[ORM\Column(name: "PA_Origine81", type: Types::SMALLINT, nullable: true)]
    private ?int $paOrigine81 = null;

    #[ORM\Column(name: "PA_Origine82", type: Types::SMALLINT, nullable: true)]
    private ?int $paOrigine82 = null;

    #[ORM\Column(name: "PA_Origine83", type: Types::SMALLINT, nullable: true)]
    private ?int $paOrigine83 = null;

    #[ORM\Column(name: "PA_Origine84", type: Types::SMALLINT, nullable: true)]
    private ?int $paOrigine84 = null;

    #[ORM\Column(name: "PA_Origine85", type: Types::SMALLINT, nullable: true)]
    private ?int $paOrigine85 = null;

    #[ORM\Column(name: "PA_Origine86", type: Types::SMALLINT, nullable: true)]
    private ?int $paOrigine86 = null;

    #[ORM\Column(name: "PA_Origine87", type: Types::SMALLINT, nullable: true)]
    private ?int $paOrigine87 = null;

    #[ORM\Column(name: "PA_Origine88", type: Types::SMALLINT, nullable: true)]
    private ?int $paOrigine88 = null;

    #[ORM\Column(name: "PA_Planning01", type: Types::SMALLINT, nullable: true)]
    private ?int $paPlanning01 = null;

    #[ORM\Column(name: "PA_Planning02", type: Types::SMALLINT, nullable: true)]
    private ?int $paPlanning02 = null;

    #[ORM\Column(name: "PA_Planning03", type: Types::SMALLINT, nullable: true)]
    private ?int $paPlanning03 = null;

    #[ORM\Column(name: "PA_Planning04", type: Types::SMALLINT, nullable: true)]
    private ?int $paPlanning04 = null;

    #[ORM\Column(name: "PA_Planning05", type: Types::SMALLINT, nullable: true)]
    private ?int $paPlanning05 = null;

    #[ORM\Column(name: "PA_Planning06", type: Types::SMALLINT, nullable: true)]
    private ?int $paPlanning06 = null;

    #[ORM\Column(name: "PA_Planning07", type: Types::SMALLINT, nullable: true)]
    private ?int $paPlanning07 = null;

    #[ORM\Column(name: "PA_Planning08", type: Types::SMALLINT, nullable: true)]
    private ?int $paPlanning08 = null;

    #[ORM\Column(name: "PA_Planning09", type: Types::SMALLINT, nullable: true)]
    private ?int $paPlanning09 = null;

    #[ORM\Column(name: "PA_Planning10", type: Types::SMALLINT, nullable: true)]
    private ?int $paPlanning10 = null;

    #[ORM\Column(name: "PA_Planning11", type: Types::SMALLINT, nullable: true)]
    private ?int $paPlanning11 = null;

    #[ORM\Column(name: "PA_Planning12", type: Types::SMALLINT, nullable: true)]
    private ?int $paPlanning12 = null;

    #[ORM\Column(name: "PA_Planning13", type: Types::SMALLINT, nullable: true)]
    private ?int $paPlanning13 = null;

    #[ORM\Column(name: "PA_Planning14", type: Types::SMALLINT, nullable: true)]
    private ?int $paPlanning14 = null;

    #[ORM\Column(name: "PA_Synthese01", type: Types::SMALLINT, nullable: true)]
    private ?int $paSynthese01 = null;

    #[ORM\Column(name: "PA_Synthese02", type: Types::SMALLINT, nullable: true)]
    private ?int $paSynthese02 = null;

    #[ORM\Column(name: "PA_Synthese03", type: Types::SMALLINT, nullable: true)]
    private ?int $paSynthese03 = null;

    #[ORM\Column(name: "PA_Synthese04", type: Types::SMALLINT, nullable: true)]
    private ?int $paSynthese04 = null;

    #[ORM\Column(name: "PA_Synthese05", type: Types::SMALLINT, nullable: true)]
    private ?int $paSynthese05 = null;

    #[ORM\Column(name: "PA_Synthese06", type: Types::SMALLINT, nullable: true)]
    private ?int $paSynthese06 = null;

    #[ORM\Column(name: "PA_Synthese07", type: Types::SMALLINT, nullable: true)]
    private ?int $paSynthese07 = null;

    #[ORM\Column(name: "PA_Synthese08", type: Types::SMALLINT, nullable: true)]
    private ?int $paSynthese08 = null;

    #[ORM\Column(name: "PA_Synthese09", type: Types::SMALLINT, nullable: true)]
    private ?int $paSynthese09 = null;

    #[ORM\Column(name: "PA_Synthese10", type: Types::SMALLINT, nullable: true)]
    private ?int $paSynthese10 = null;

    #[ORM\Column(name: "PA_Synthese11", type: Types::SMALLINT, nullable: true)]
    private ?int $paSynthese11 = null;

    #[ORM\Column(name: "PA_Synthese12", type: Types::SMALLINT, nullable: true)]
    private ?int $paSynthese12 = null;

    #[ORM\Column(name: "PA_Synthese13", type: Types::SMALLINT, nullable: true)]
    private ?int $paSynthese13 = null;

    #[ORM\Column(name: "PA_Synthese14", type: Types::SMALLINT, nullable: true)]
    private ?int $paSynthese14 = null;

    #[ORM\Column(name: "PA_Synthese15", type: Types::SMALLINT, nullable: true)]
    private ?int $paSynthese15 = null;

    #[ORM\Column(name: "PA_Historique01", type: Types::SMALLINT, nullable: true)]
    private ?int $paHistorique01 = null;

    #[ORM\Column(name: "PA_Historique02", type: Types::SMALLINT, nullable: true)]
    private ?int $paHistorique02 = null;

    #[ORM\Column(name: "PA_Historique03", type: Types::SMALLINT, nullable: true)]
    private ?int $paHistorique03 = null;

    #[ORM\Column(name: "PA_Historique04", type: Types::SMALLINT, nullable: true)]
    private ?int $paHistorique04 = null;

    #[ORM\Column(name: "PA_Historique05", type: Types::SMALLINT, nullable: true)]
    private ?int $paHistorique05 = null;

    #[ORM\Column(name: "PA_Historique06", type: Types::SMALLINT, nullable: true)]
    private ?int $paHistorique06 = null;

    #[ORM\Column(name: "PA_Historique07", type: Types::SMALLINT, nullable: true)]
    private ?int $paHistorique07 = null;

    #[ORM\Column(name: "PA_Historique08", type: Types::SMALLINT, nullable: true)]
    private ?int $paHistorique08 = null;

    #[ORM\Column(name: "PA_Historique09", type: Types::SMALLINT, nullable: true)]
    private ?int $paHistorique09 = null;

    #[ORM\Column(name: "PA_Historique10", type: Types::SMALLINT, nullable: true)]
    private ?int $paHistorique10 = null;

    #[ORM\Column(name: "PA_Historique11", type: Types::SMALLINT, nullable: true)]
    private ?int $paHistorique11 = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getPaNumero(): ?string
    {
        return $this->paNumero;
    }

    public function setPaNumero(?string $paNumero): static
    {
        $this->paNumero = $paNumero;

        return $this;
    }

    public function getPaOrigine01(): ?int
    {
        return $this->paOrigine01;
    }

    public function setPaOrigine01(?int $paOrigine01): static
    {
        $this->paOrigine01 = $paOrigine01;

        return $this;
    }

    public function getPaOrigine02(): ?int
    {
        return $this->paOrigine02;
    }

    public function setPaOrigine02(?int $paOrigine02): static
    {
        $this->paOrigine02 = $paOrigine02;

        return $this;
    }

    public function getPaOrigine03(): ?int
    {
        return $this->paOrigine03;
    }

    public function setPaOrigine03(?int $paOrigine03): static
    {
        $this->paOrigine03 = $paOrigine03;

        return $this;
    }

    public function getPaOrigine04(): ?int
    {
        return $this->paOrigine04;
    }

    public function setPaOrigine04(?int $paOrigine04): static
    {
        $this->paOrigine04 = $paOrigine04;

        return $this;
    }

    public function getPaOrigine05(): ?int
    {
        return $this->paOrigine05;
    }

    public function setPaOrigine05(?int $paOrigine05): static
    {
        $this->paOrigine05 = $paOrigine05;

        return $this;
    }

    public function getPaOrigine06(): ?int
    {
        return $this->paOrigine06;
    }

    public function setPaOrigine06(?int $paOrigine06): static
    {
        $this->paOrigine06 = $paOrigine06;

        return $this;
    }

    public function getPaOrigine07(): ?int
    {
        return $this->paOrigine07;
    }

    public function setPaOrigine07(?int $paOrigine07): static
    {
        $this->paOrigine07 = $paOrigine07;

        return $this;
    }

    public function getPaOrigine08(): ?int
    {
        return $this->paOrigine08;
    }

    public function setPaOrigine08(?int $paOrigine08): static
    {
        $this->paOrigine08 = $paOrigine08;

        return $this;
    }

    public function getPaOrigine09(): ?int
    {
        return $this->paOrigine09;
    }

    public function setPaOrigine09(?int $paOrigine09): static
    {
        $this->paOrigine09 = $paOrigine09;

        return $this;
    }

    public function getPaOrigine10(): ?int
    {
        return $this->paOrigine10;
    }

    public function setPaOrigine10(?int $paOrigine10): static
    {
        $this->paOrigine10 = $paOrigine10;

        return $this;
    }

    public function getPaOrigine11(): ?int
    {
        return $this->paOrigine11;
    }

    public function setPaOrigine11(?int $paOrigine11): static
    {
        $this->paOrigine11 = $paOrigine11;

        return $this;
    }

    public function getPaOrigine12(): ?int
    {
        return $this->paOrigine12;
    }

    public function setPaOrigine12(?int $paOrigine12): static
    {
        $this->paOrigine12 = $paOrigine12;

        return $this;
    }

    public function getPaOrigine13(): ?int
    {
        return $this->paOrigine13;
    }

    public function setPaOrigine13(?int $paOrigine13): static
    {
        $this->paOrigine13 = $paOrigine13;

        return $this;
    }

    public function getPaOrigine14(): ?int
    {
        return $this->paOrigine14;
    }

    public function setPaOrigine14(?int $paOrigine14): static
    {
        $this->paOrigine14 = $paOrigine14;

        return $this;
    }

    public function getPaOrigine15(): ?int
    {
        return $this->paOrigine15;
    }

    public function setPaOrigine15(?int $paOrigine15): static
    {
        $this->paOrigine15 = $paOrigine15;

        return $this;
    }

    public function getPaOrigine16(): ?int
    {
        return $this->paOrigine16;
    }

    public function setPaOrigine16(?int $paOrigine16): static
    {
        $this->paOrigine16 = $paOrigine16;

        return $this;
    }

    public function getPaOrigine17(): ?int
    {
        return $this->paOrigine17;
    }

    public function setPaOrigine17(?int $paOrigine17): static
    {
        $this->paOrigine17 = $paOrigine17;

        return $this;
    }

    public function getPaOrigine18(): ?int
    {
        return $this->paOrigine18;
    }

    public function setPaOrigine18(?int $paOrigine18): static
    {
        $this->paOrigine18 = $paOrigine18;

        return $this;
    }

    public function getPaOrigine19(): ?int
    {
        return $this->paOrigine19;
    }

    public function setPaOrigine19(?int $paOrigine19): static
    {
        $this->paOrigine19 = $paOrigine19;

        return $this;
    }

    public function getPaOrigine20(): ?int
    {
        return $this->paOrigine20;
    }

    public function setPaOrigine20(?int $paOrigine20): static
    {
        $this->paOrigine20 = $paOrigine20;

        return $this;
    }

    public function getPaOrigine21(): ?int
    {
        return $this->paOrigine21;
    }

    public function setPaOrigine21(?int $paOrigine21): static
    {
        $this->paOrigine21 = $paOrigine21;

        return $this;
    }

    public function getPaOrigine22(): ?int
    {
        return $this->paOrigine22;
    }

    public function setPaOrigine22(?int $paOrigine22): static
    {
        $this->paOrigine22 = $paOrigine22;

        return $this;
    }

    public function getPaOrigine23(): ?int
    {
        return $this->paOrigine23;
    }

    public function setPaOrigine23(?int $paOrigine23): static
    {
        $this->paOrigine23 = $paOrigine23;

        return $this;
    }

    public function getPaOrigine24(): ?int
    {
        return $this->paOrigine24;
    }

    public function setPaOrigine24(?int $paOrigine24): static
    {
        $this->paOrigine24 = $paOrigine24;

        return $this;
    }

    public function getPaOrigine25(): ?int
    {
        return $this->paOrigine25;
    }

    public function setPaOrigine25(?int $paOrigine25): static
    {
        $this->paOrigine25 = $paOrigine25;

        return $this;
    }

    public function getPaOrigine26(): ?int
    {
        return $this->paOrigine26;
    }

    public function setPaOrigine26(?int $paOrigine26): static
    {
        $this->paOrigine26 = $paOrigine26;

        return $this;
    }

    public function getPaOrigine27(): ?int
    {
        return $this->paOrigine27;
    }

    public function setPaOrigine27(?int $paOrigine27): static
    {
        $this->paOrigine27 = $paOrigine27;

        return $this;
    }

    public function getPaOrigine28(): ?int
    {
        return $this->paOrigine28;
    }

    public function setPaOrigine28(?int $paOrigine28): static
    {
        $this->paOrigine28 = $paOrigine28;

        return $this;
    }

    public function getPaOrigine29(): ?int
    {
        return $this->paOrigine29;
    }

    public function setPaOrigine29(?int $paOrigine29): static
    {
        $this->paOrigine29 = $paOrigine29;

        return $this;
    }

    public function getPaOrigine30(): ?int
    {
        return $this->paOrigine30;
    }

    public function setPaOrigine30(?int $paOrigine30): static
    {
        $this->paOrigine30 = $paOrigine30;

        return $this;
    }

    public function getPaOrigine31(): ?int
    {
        return $this->paOrigine31;
    }

    public function setPaOrigine31(?int $paOrigine31): static
    {
        $this->paOrigine31 = $paOrigine31;

        return $this;
    }

    public function getPaOrigine32(): ?int
    {
        return $this->paOrigine32;
    }

    public function setPaOrigine32(?int $paOrigine32): static
    {
        $this->paOrigine32 = $paOrigine32;

        return $this;
    }

    public function getPaOrigine33(): ?int
    {
        return $this->paOrigine33;
    }

    public function setPaOrigine33(?int $paOrigine33): static
    {
        $this->paOrigine33 = $paOrigine33;

        return $this;
    }

    public function getPaOrigine34(): ?int
    {
        return $this->paOrigine34;
    }

    public function setPaOrigine34(?int $paOrigine34): static
    {
        $this->paOrigine34 = $paOrigine34;

        return $this;
    }

    public function getPaOrigine35(): ?int
    {
        return $this->paOrigine35;
    }

    public function setPaOrigine35(?int $paOrigine35): static
    {
        $this->paOrigine35 = $paOrigine35;

        return $this;
    }

    public function getPaOrigine36(): ?int
    {
        return $this->paOrigine36;
    }

    public function setPaOrigine36(?int $paOrigine36): static
    {
        $this->paOrigine36 = $paOrigine36;

        return $this;
    }

    public function getPaOrigine37(): ?int
    {
        return $this->paOrigine37;
    }

    public function setPaOrigine37(?int $paOrigine37): static
    {
        $this->paOrigine37 = $paOrigine37;

        return $this;
    }

    public function getPaOrigine38(): ?int
    {
        return $this->paOrigine38;
    }

    public function setPaOrigine38(?int $paOrigine38): static
    {
        $this->paOrigine38 = $paOrigine38;

        return $this;
    }

    public function getPaOrigine39(): ?int
    {
        return $this->paOrigine39;
    }

    public function setPaOrigine39(?int $paOrigine39): static
    {
        $this->paOrigine39 = $paOrigine39;

        return $this;
    }

    public function getPaOrigine40(): ?int
    {
        return $this->paOrigine40;
    }

    public function setPaOrigine40(?int $paOrigine40): static
    {
        $this->paOrigine40 = $paOrigine40;

        return $this;
    }

    public function getPaOrigine41(): ?int
    {
        return $this->paOrigine41;
    }

    public function setPaOrigine41(?int $paOrigine41): static
    {
        $this->paOrigine41 = $paOrigine41;

        return $this;
    }

    public function getPaOrigine42(): ?int
    {
        return $this->paOrigine42;
    }

    public function setPaOrigine42(?int $paOrigine42): static
    {
        $this->paOrigine42 = $paOrigine42;

        return $this;
    }

    public function getPaOrigine43(): ?int
    {
        return $this->paOrigine43;
    }

    public function setPaOrigine43(?int $paOrigine43): static
    {
        $this->paOrigine43 = $paOrigine43;

        return $this;
    }

    public function getPaOrigine44(): ?int
    {
        return $this->paOrigine44;
    }

    public function setPaOrigine44(?int $paOrigine44): static
    {
        $this->paOrigine44 = $paOrigine44;

        return $this;
    }

    public function getPaOrigine45(): ?int
    {
        return $this->paOrigine45;
    }

    public function setPaOrigine45(?int $paOrigine45): static
    {
        $this->paOrigine45 = $paOrigine45;

        return $this;
    }

    public function getPaOrigine46(): ?int
    {
        return $this->paOrigine46;
    }

    public function setPaOrigine46(?int $paOrigine46): static
    {
        $this->paOrigine46 = $paOrigine46;

        return $this;
    }

    public function getPaOrigine47(): ?int
    {
        return $this->paOrigine47;
    }

    public function setPaOrigine47(?int $paOrigine47): static
    {
        $this->paOrigine47 = $paOrigine47;

        return $this;
    }

    public function getPaOrigine48(): ?int
    {
        return $this->paOrigine48;
    }

    public function setPaOrigine48(?int $paOrigine48): static
    {
        $this->paOrigine48 = $paOrigine48;

        return $this;
    }

    public function getPaOrigine49(): ?int
    {
        return $this->paOrigine49;
    }

    public function setPaOrigine49(?int $paOrigine49): static
    {
        $this->paOrigine49 = $paOrigine49;

        return $this;
    }

    public function getPaOrigine50(): ?int
    {
        return $this->paOrigine50;
    }

    public function setPaOrigine50(?int $paOrigine50): static
    {
        $this->paOrigine50 = $paOrigine50;

        return $this;
    }

    public function getPaOrigine51(): ?int
    {
        return $this->paOrigine51;
    }

    public function setPaOrigine51(?int $paOrigine51): static
    {
        $this->paOrigine51 = $paOrigine51;

        return $this;
    }

    public function getPaOrigine52(): ?int
    {
        return $this->paOrigine52;
    }

    public function setPaOrigine52(?int $paOrigine52): static
    {
        $this->paOrigine52 = $paOrigine52;

        return $this;
    }

    public function getPaOrigine53(): ?int
    {
        return $this->paOrigine53;
    }

    public function setPaOrigine53(?int $paOrigine53): static
    {
        $this->paOrigine53 = $paOrigine53;

        return $this;
    }

    public function getPaOrigine54(): ?int
    {
        return $this->paOrigine54;
    }

    public function setPaOrigine54(?int $paOrigine54): static
    {
        $this->paOrigine54 = $paOrigine54;

        return $this;
    }

    public function getPaOrigine55(): ?int
    {
        return $this->paOrigine55;
    }

    public function setPaOrigine55(?int $paOrigine55): static
    {
        $this->paOrigine55 = $paOrigine55;

        return $this;
    }

    public function getPaOrigine56(): ?int
    {
        return $this->paOrigine56;
    }

    public function setPaOrigine56(?int $paOrigine56): static
    {
        $this->paOrigine56 = $paOrigine56;

        return $this;
    }

    public function getPaOrigine57(): ?int
    {
        return $this->paOrigine57;
    }

    public function setPaOrigine57(?int $paOrigine57): static
    {
        $this->paOrigine57 = $paOrigine57;

        return $this;
    }

    public function getPaOrigine58(): ?int
    {
        return $this->paOrigine58;
    }

    public function setPaOrigine58(?int $paOrigine58): static
    {
        $this->paOrigine58 = $paOrigine58;

        return $this;
    }

    public function getPaOrigine59(): ?int
    {
        return $this->paOrigine59;
    }

    public function setPaOrigine59(?int $paOrigine59): static
    {
        $this->paOrigine59 = $paOrigine59;

        return $this;
    }

    public function getPaOrigine60(): ?int
    {
        return $this->paOrigine60;
    }

    public function setPaOrigine60(?int $paOrigine60): static
    {
        $this->paOrigine60 = $paOrigine60;

        return $this;
    }

    public function getPaOrigine61(): ?int
    {
        return $this->paOrigine61;
    }

    public function setPaOrigine61(?int $paOrigine61): static
    {
        $this->paOrigine61 = $paOrigine61;

        return $this;
    }

    public function getPaOrigine62(): ?int
    {
        return $this->paOrigine62;
    }

    public function setPaOrigine62(?int $paOrigine62): static
    {
        $this->paOrigine62 = $paOrigine62;

        return $this;
    }

    public function getPaOrigine63(): ?int
    {
        return $this->paOrigine63;
    }

    public function setPaOrigine63(?int $paOrigine63): static
    {
        $this->paOrigine63 = $paOrigine63;

        return $this;
    }

    public function getPaOrigine64(): ?int
    {
        return $this->paOrigine64;
    }

    public function setPaOrigine64(?int $paOrigine64): static
    {
        $this->paOrigine64 = $paOrigine64;

        return $this;
    }

    public function getPaOrigine65(): ?int
    {
        return $this->paOrigine65;
    }

    public function setPaOrigine65(?int $paOrigine65): static
    {
        $this->paOrigine65 = $paOrigine65;

        return $this;
    }

    public function getPaOrigine66(): ?int
    {
        return $this->paOrigine66;
    }

    public function setPaOrigine66(?int $paOrigine66): static
    {
        $this->paOrigine66 = $paOrigine66;

        return $this;
    }

    public function getPaOrigine67(): ?int
    {
        return $this->paOrigine67;
    }

    public function setPaOrigine67(?int $paOrigine67): static
    {
        $this->paOrigine67 = $paOrigine67;

        return $this;
    }

    public function getPaOrigine68(): ?int
    {
        return $this->paOrigine68;
    }

    public function setPaOrigine68(?int $paOrigine68): static
    {
        $this->paOrigine68 = $paOrigine68;

        return $this;
    }

    public function getPaOrigine69(): ?int
    {
        return $this->paOrigine69;
    }

    public function setPaOrigine69(?int $paOrigine69): static
    {
        $this->paOrigine69 = $paOrigine69;

        return $this;
    }

    public function getPaOrigine70(): ?int
    {
        return $this->paOrigine70;
    }

    public function setPaOrigine70(?int $paOrigine70): static
    {
        $this->paOrigine70 = $paOrigine70;

        return $this;
    }

    public function getPaOrigine71(): ?int
    {
        return $this->paOrigine71;
    }

    public function setPaOrigine71(?int $paOrigine71): static
    {
        $this->paOrigine71 = $paOrigine71;

        return $this;
    }

    public function getPaOrigine72(): ?int
    {
        return $this->paOrigine72;
    }

    public function setPaOrigine72(?int $paOrigine72): static
    {
        $this->paOrigine72 = $paOrigine72;

        return $this;
    }

    public function getPaOrigine73(): ?int
    {
        return $this->paOrigine73;
    }

    public function setPaOrigine73(?int $paOrigine73): static
    {
        $this->paOrigine73 = $paOrigine73;

        return $this;
    }

    public function getPaOrigine74(): ?int
    {
        return $this->paOrigine74;
    }

    public function setPaOrigine74(?int $paOrigine74): static
    {
        $this->paOrigine74 = $paOrigine74;

        return $this;
    }

    public function getPaOrigine75(): ?int
    {
        return $this->paOrigine75;
    }

    public function setPaOrigine75(?int $paOrigine75): static
    {
        $this->paOrigine75 = $paOrigine75;

        return $this;
    }

    public function getPaOrigine76(): ?int
    {
        return $this->paOrigine76;
    }

    public function setPaOrigine76(?int $paOrigine76): static
    {
        $this->paOrigine76 = $paOrigine76;

        return $this;
    }

    public function getPaOrigine77(): ?int
    {
        return $this->paOrigine77;
    }

    public function setPaOrigine77(?int $paOrigine77): static
    {
        $this->paOrigine77 = $paOrigine77;

        return $this;
    }

    public function getPaOrigine78(): ?int
    {
        return $this->paOrigine78;
    }

    public function setPaOrigine78(?int $paOrigine78): static
    {
        $this->paOrigine78 = $paOrigine78;

        return $this;
    }

    public function getPaOrigine79(): ?int
    {
        return $this->paOrigine79;
    }

    public function setPaOrigine79(?int $paOrigine79): static
    {
        $this->paOrigine79 = $paOrigine79;

        return $this;
    }

    public function getPaOrigine80(): ?int
    {
        return $this->paOrigine80;
    }

    public function setPaOrigine80(?int $paOrigine80): static
    {
        $this->paOrigine80 = $paOrigine80;

        return $this;
    }

    public function getPaOrigine81(): ?int
    {
        return $this->paOrigine81;
    }

    public function setPaOrigine81(?int $paOrigine81): static
    {
        $this->paOrigine81 = $paOrigine81;

        return $this;
    }

    public function getPaOrigine82(): ?int
    {
        return $this->paOrigine82;
    }

    public function setPaOrigine82(?int $paOrigine82): static
    {
        $this->paOrigine82 = $paOrigine82;

        return $this;
    }

    public function getPaOrigine83(): ?int
    {
        return $this->paOrigine83;
    }

    public function setPaOrigine83(?int $paOrigine83): static
    {
        $this->paOrigine83 = $paOrigine83;

        return $this;
    }

    public function getPaOrigine84(): ?int
    {
        return $this->paOrigine84;
    }

    public function setPaOrigine84(?int $paOrigine84): static
    {
        $this->paOrigine84 = $paOrigine84;

        return $this;
    }

    public function getPaOrigine85(): ?int
    {
        return $this->paOrigine85;
    }

    public function setPaOrigine85(?int $paOrigine85): static
    {
        $this->paOrigine85 = $paOrigine85;

        return $this;
    }

    public function getPaOrigine86(): ?int
    {
        return $this->paOrigine86;
    }

    public function setPaOrigine86(?int $paOrigine86): static
    {
        $this->paOrigine86 = $paOrigine86;

        return $this;
    }

    public function getPaOrigine87(): ?int
    {
        return $this->paOrigine87;
    }

    public function setPaOrigine87(?int $paOrigine87): static
    {
        $this->paOrigine87 = $paOrigine87;

        return $this;
    }

    public function getPaOrigine88(): ?int
    {
        return $this->paOrigine88;
    }

    public function setPaOrigine88(?int $paOrigine88): static
    {
        $this->paOrigine88 = $paOrigine88;

        return $this;
    }

    public function getPaPlanning01(): ?int
    {
        return $this->paPlanning01;
    }

    public function setPaPlanning01(?int $paPlanning01): static
    {
        $this->paPlanning01 = $paPlanning01;

        return $this;
    }

    public function getPaPlanning02(): ?int
    {
        return $this->paPlanning02;
    }

    public function setPaPlanning02(?int $paPlanning02): static
    {
        $this->paPlanning02 = $paPlanning02;

        return $this;
    }

    public function getPaPlanning03(): ?int
    {
        return $this->paPlanning03;
    }

    public function setPaPlanning03(?int $paPlanning03): static
    {
        $this->paPlanning03 = $paPlanning03;

        return $this;
    }

    public function getPaPlanning04(): ?int
    {
        return $this->paPlanning04;
    }

    public function setPaPlanning04(?int $paPlanning04): static
    {
        $this->paPlanning04 = $paPlanning04;

        return $this;
    }

    public function getPaPlanning05(): ?int
    {
        return $this->paPlanning05;
    }

    public function setPaPlanning05(?int $paPlanning05): static
    {
        $this->paPlanning05 = $paPlanning05;

        return $this;
    }

    public function getPaPlanning06(): ?int
    {
        return $this->paPlanning06;
    }

    public function setPaPlanning06(?int $paPlanning06): static
    {
        $this->paPlanning06 = $paPlanning06;

        return $this;
    }

    public function getPaPlanning07(): ?int
    {
        return $this->paPlanning07;
    }

    public function setPaPlanning07(?int $paPlanning07): static
    {
        $this->paPlanning07 = $paPlanning07;

        return $this;
    }

    public function getPaPlanning08(): ?int
    {
        return $this->paPlanning08;
    }

    public function setPaPlanning08(?int $paPlanning08): static
    {
        $this->paPlanning08 = $paPlanning08;

        return $this;
    }

    public function getPaPlanning09(): ?int
    {
        return $this->paPlanning09;
    }

    public function setPaPlanning09(?int $paPlanning09): static
    {
        $this->paPlanning09 = $paPlanning09;

        return $this;
    }

    public function getPaPlanning10(): ?int
    {
        return $this->paPlanning10;
    }

    public function setPaPlanning10(?int $paPlanning10): static
    {
        $this->paPlanning10 = $paPlanning10;

        return $this;
    }

    public function getPaPlanning11(): ?int
    {
        return $this->paPlanning11;
    }

    public function setPaPlanning11(?int $paPlanning11): static
    {
        $this->paPlanning11 = $paPlanning11;

        return $this;
    }

    public function getPaPlanning12(): ?int
    {
        return $this->paPlanning12;
    }

    public function setPaPlanning12(?int $paPlanning12): static
    {
        $this->paPlanning12 = $paPlanning12;

        return $this;
    }

    public function getPaPlanning13(): ?int
    {
        return $this->paPlanning13;
    }

    public function setPaPlanning13(?int $paPlanning13): static
    {
        $this->paPlanning13 = $paPlanning13;

        return $this;
    }

    public function getPaPlanning14(): ?int
    {
        return $this->paPlanning14;
    }

    public function setPaPlanning14(?int $paPlanning14): static
    {
        $this->paPlanning14 = $paPlanning14;

        return $this;
    }

    public function getPaSynthese01(): ?int
    {
        return $this->paSynthese01;
    }

    public function setPaSynthese01(?int $paSynthese01): static
    {
        $this->paSynthese01 = $paSynthese01;

        return $this;
    }

    public function getPaSynthese02(): ?int
    {
        return $this->paSynthese02;
    }

    public function setPaSynthese02(?int $paSynthese02): static
    {
        $this->paSynthese02 = $paSynthese02;

        return $this;
    }

    public function getPaSynthese03(): ?int
    {
        return $this->paSynthese03;
    }

    public function setPaSynthese03(?int $paSynthese03): static
    {
        $this->paSynthese03 = $paSynthese03;

        return $this;
    }

    public function getPaSynthese04(): ?int
    {
        return $this->paSynthese04;
    }

    public function setPaSynthese04(?int $paSynthese04): static
    {
        $this->paSynthese04 = $paSynthese04;

        return $this;
    }

    public function getPaSynthese05(): ?int
    {
        return $this->paSynthese05;
    }

    public function setPaSynthese05(?int $paSynthese05): static
    {
        $this->paSynthese05 = $paSynthese05;

        return $this;
    }

    public function getPaSynthese06(): ?int
    {
        return $this->paSynthese06;
    }

    public function setPaSynthese06(?int $paSynthese06): static
    {
        $this->paSynthese06 = $paSynthese06;

        return $this;
    }

    public function getPaSynthese07(): ?int
    {
        return $this->paSynthese07;
    }

    public function setPaSynthese07(?int $paSynthese07): static
    {
        $this->paSynthese07 = $paSynthese07;

        return $this;
    }

    public function getPaSynthese08(): ?int
    {
        return $this->paSynthese08;
    }

    public function setPaSynthese08(?int $paSynthese08): static
    {
        $this->paSynthese08 = $paSynthese08;

        return $this;
    }

    public function getPaSynthese09(): ?int
    {
        return $this->paSynthese09;
    }

    public function setPaSynthese09(?int $paSynthese09): static
    {
        $this->paSynthese09 = $paSynthese09;

        return $this;
    }

    public function getPaSynthese10(): ?int
    {
        return $this->paSynthese10;
    }

    public function setPaSynthese10(?int $paSynthese10): static
    {
        $this->paSynthese10 = $paSynthese10;

        return $this;
    }

    public function getPaSynthese11(): ?int
    {
        return $this->paSynthese11;
    }

    public function setPaSynthese11(?int $paSynthese11): static
    {
        $this->paSynthese11 = $paSynthese11;

        return $this;
    }

    public function getPaSynthese12(): ?int
    {
        return $this->paSynthese12;
    }

    public function setPaSynthese12(?int $paSynthese12): static
    {
        $this->paSynthese12 = $paSynthese12;

        return $this;
    }

    public function getPaSynthese13(): ?int
    {
        return $this->paSynthese13;
    }

    public function setPaSynthese13(?int $paSynthese13): static
    {
        $this->paSynthese13 = $paSynthese13;

        return $this;
    }

    public function getPaSynthese14(): ?int
    {
        return $this->paSynthese14;
    }

    public function setPaSynthese14(?int $paSynthese14): static
    {
        $this->paSynthese14 = $paSynthese14;

        return $this;
    }

    public function getPaSynthese15(): ?int
    {
        return $this->paSynthese15;
    }

    public function setPaSynthese15(?int $paSynthese15): static
    {
        $this->paSynthese15 = $paSynthese15;

        return $this;
    }

    public function getPaHistorique01(): ?int
    {
        return $this->paHistorique01;
    }

    public function setPaHistorique01(?int $paHistorique01): static
    {
        $this->paHistorique01 = $paHistorique01;

        return $this;
    }

    public function getPaHistorique02(): ?int
    {
        return $this->paHistorique02;
    }

    public function setPaHistorique02(?int $paHistorique02): static
    {
        $this->paHistorique02 = $paHistorique02;

        return $this;
    }

    public function getPaHistorique03(): ?int
    {
        return $this->paHistorique03;
    }

    public function setPaHistorique03(?int $paHistorique03): static
    {
        $this->paHistorique03 = $paHistorique03;

        return $this;
    }

    public function getPaHistorique04(): ?int
    {
        return $this->paHistorique04;
    }

    public function setPaHistorique04(?int $paHistorique04): static
    {
        $this->paHistorique04 = $paHistorique04;

        return $this;
    }

    public function getPaHistorique05(): ?int
    {
        return $this->paHistorique05;
    }

    public function setPaHistorique05(?int $paHistorique05): static
    {
        $this->paHistorique05 = $paHistorique05;

        return $this;
    }

    public function getPaHistorique06(): ?int
    {
        return $this->paHistorique06;
    }

    public function setPaHistorique06(?int $paHistorique06): static
    {
        $this->paHistorique06 = $paHistorique06;

        return $this;
    }

    public function getPaHistorique07(): ?int
    {
        return $this->paHistorique07;
    }

    public function setPaHistorique07(?int $paHistorique07): static
    {
        $this->paHistorique07 = $paHistorique07;

        return $this;
    }

    public function getPaHistorique08(): ?int
    {
        return $this->paHistorique08;
    }

    public function setPaHistorique08(?int $paHistorique08): static
    {
        $this->paHistorique08 = $paHistorique08;

        return $this;
    }

    public function getPaHistorique09(): ?int
    {
        return $this->paHistorique09;
    }

    public function setPaHistorique09(?int $paHistorique09): static
    {
        $this->paHistorique09 = $paHistorique09;

        return $this;
    }

    public function getPaHistorique10(): ?int
    {
        return $this->paHistorique10;
    }

    public function setPaHistorique10(?int $paHistorique10): static
    {
        $this->paHistorique10 = $paHistorique10;

        return $this;
    }

    public function getPaHistorique11(): ?int
    {
        return $this->paHistorique11;
    }

    public function setPaHistorique11(?int $paHistorique11): static
    {
        $this->paHistorique11 = $paHistorique11;

        return $this;
    }
}
