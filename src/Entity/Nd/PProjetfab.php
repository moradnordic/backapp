<?php

namespace App\Entity\Nd;

use App\Repository\Nd\PProjetfabRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'P_PROJETFAB')]
#[ORM\Entity(repositoryClass: PProjetfabRepository::class)]
class PProjetfab
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "PF_Numero", length: 9, nullable: true)]
    private ?string $pfNumero = null;

    #[ORM\Column(name: "PF_Origine01", type: Types::SMALLINT, nullable: true)]
    private ?int $pfOrigine01 = null;

    #[ORM\Column(name: "PF_Origine02", type: Types::SMALLINT, nullable: true)]
    private ?int $pfOrigine02 = null;

    #[ORM\Column(name: "PF_Origine03", type: Types::SMALLINT, nullable: true)]
    private ?int $pfOrigine03 = null;

    #[ORM\Column(name: "PF_Origine04", type: Types::SMALLINT, nullable: true)]
    private ?int $pfOrigine04 = null;

    #[ORM\Column(name: "PF_Origine05", type: Types::SMALLINT, nullable: true)]
    private ?int $pfOrigine05 = null;

    #[ORM\Column(name: "PF_Origine06", type: Types::SMALLINT, nullable: true)]
    private ?int $pfOrigine06 = null;

    #[ORM\Column(name: "PF_Origine07", type: Types::SMALLINT, nullable: true)]
    private ?int $pfOrigine07 = null;

    #[ORM\Column(name: "PF_Origine08", type: Types::SMALLINT, nullable: true)]
    private ?int $pfOrigine08 = null;

    #[ORM\Column(name: "PF_Origine09", type: Types::SMALLINT, nullable: true)]
    private ?int $pfOrigine09 = null;

    #[ORM\Column(name: "PF_Origine10", type: Types::SMALLINT, nullable: true)]
    private ?int $pfOrigine10 = null;

    #[ORM\Column(name: "PF_Origine11", type: Types::SMALLINT, nullable: true)]
    private ?int $pfOrigine11 = null;

    #[ORM\Column(name: "PF_Origine12", type: Types::SMALLINT, nullable: true)]
    private ?int $pfOrigine12 = null;

    #[ORM\Column(name: "PF_Origine13", type: Types::SMALLINT, nullable: true)]
    private ?int $pfOrigine13 = null;

    #[ORM\Column(name: "PF_Origine14", type: Types::SMALLINT, nullable: true)]
    private ?int $pfOrigine14 = null;

    #[ORM\Column(name: "PF_Origine15", type: Types::SMALLINT, nullable: true)]
    private ?int $pfOrigine15 = null;

    #[ORM\Column(name: "PF_Origine16", type: Types::SMALLINT, nullable: true)]
    private ?int $pfOrigine16 = null;

    #[ORM\Column(name: "PF_Origine17", type: Types::SMALLINT, nullable: true)]
    private ?int $pfOrigine17 = null;

    #[ORM\Column(name: "PF_Origine18", type: Types::SMALLINT, nullable: true)]
    private ?int $pfOrigine18 = null;

    #[ORM\Column(name: "PF_Origine19", type: Types::SMALLINT, nullable: true)]
    private ?int $pfOrigine19 = null;

    #[ORM\Column(name: "PF_Origine20", type: Types::SMALLINT, nullable: true)]
    private ?int $pfOrigine20 = null;

    #[ORM\Column(name: "PF_Origine21", type: Types::SMALLINT, nullable: true)]
    private ?int $pfOrigine21 = null;

    #[ORM\Column(name: "PF_Origine22", type: Types::SMALLINT, nullable: true)]
    private ?int $pfOrigine22 = null;

    #[ORM\Column(name: "PF_Origine23", type: Types::SMALLINT, nullable: true)]
    private ?int $pfOrigine23 = null;

    #[ORM\Column(name: "PF_Origine24", type: Types::SMALLINT, nullable: true)]
    private ?int $pfOrigine24 = null;

    #[ORM\Column(name: "PF_Origine25", type: Types::SMALLINT, nullable: true)]
    private ?int $pfOrigine25 = null;

    #[ORM\Column(name: "PF_Origine26", type: Types::SMALLINT, nullable: true)]
    private ?int $pfOrigine26 = null;

    #[ORM\Column(name: "PF_Origine27", type: Types::SMALLINT, nullable: true)]
    private ?int $pfOrigine27 = null;

    #[ORM\Column(name: "PF_Origine28", type: Types::SMALLINT, nullable: true)]
    private ?int $pfOrigine28 = null;

    #[ORM\Column(name: "PF_Origine29", type: Types::SMALLINT, nullable: true)]
    private ?int $pfOrigine29 = null;

    #[ORM\Column(name: "PF_Origine30", type: Types::SMALLINT, nullable: true)]
    private ?int $pfOrigine30 = null;

    #[ORM\Column(name: "PF_Origine31", type: Types::SMALLINT, nullable: true)]
    private ?int $pfOrigine31 = null;

    #[ORM\Column(name: "PF_Origine32", type: Types::SMALLINT, nullable: true)]
    private ?int $pfOrigine32 = null;

    #[ORM\Column(name: "PF_Origine33", type: Types::SMALLINT, nullable: true)]
    private ?int $pfOrigine33 = null;

    #[ORM\Column(name: "PF_Origine34", type: Types::SMALLINT, nullable: true)]
    private ?int $pfOrigine34 = null;

    #[ORM\Column(name: "PF_Origine35", type: Types::SMALLINT, nullable: true)]
    private ?int $pfOrigine35 = null;

    #[ORM\Column(name: "PF_Origine36", type: Types::SMALLINT, nullable: true)]
    private ?int $pfOrigine36 = null;

    #[ORM\Column(name: "PF_Origine37", type: Types::SMALLINT, nullable: true)]
    private ?int $pfOrigine37 = null;

    #[ORM\Column(name: "PF_Origine38", type: Types::SMALLINT, nullable: true)]
    private ?int $pfOrigine38 = null;

    #[ORM\Column(name: "PF_Origine39", type: Types::SMALLINT, nullable: true)]
    private ?int $pfOrigine39 = null;

    #[ORM\Column(name: "PF_Origine40", type: Types::SMALLINT, nullable: true)]
    private ?int $pfOrigine40 = null;

    #[ORM\Column(name: "PF_Origine41", type: Types::SMALLINT, nullable: true)]
    private ?int $pfOrigine41 = null;

    #[ORM\Column(name: "PF_Origine42", type: Types::SMALLINT, nullable: true)]
    private ?int $pfOrigine42 = null;

    #[ORM\Column(name: "PF_Origine43", type: Types::SMALLINT, nullable: true)]
    private ?int $pfOrigine43 = null;

    #[ORM\Column(name: "PF_Origine44", type: Types::SMALLINT, nullable: true)]
    private ?int $pfOrigine44 = null;

    #[ORM\Column(name: "PF_Origine45", type: Types::SMALLINT, nullable: true)]
    private ?int $pfOrigine45 = null;

    #[ORM\Column(name: "PF_Origine46", type: Types::SMALLINT, nullable: true)]
    private ?int $pfOrigine46 = null;

    #[ORM\Column(name: "PF_Origine47", type: Types::SMALLINT, nullable: true)]
    private ?int $pfOrigine47 = null;

    #[ORM\Column(name: "PF_Origine48", type: Types::SMALLINT, nullable: true)]
    private ?int $pfOrigine48 = null;

    #[ORM\Column(name: "PF_Origine49", type: Types::SMALLINT, nullable: true)]
    private ?int $pfOrigine49 = null;

    #[ORM\Column(name: "PF_Origine50", type: Types::SMALLINT, nullable: true)]
    private ?int $pfOrigine50 = null;

    #[ORM\Column(name: "PF_Origine51", type: Types::SMALLINT, nullable: true)]
    private ?int $pfOrigine51 = null;

    #[ORM\Column(name: "PF_Origine52", type: Types::SMALLINT, nullable: true)]
    private ?int $pfOrigine52 = null;

    #[ORM\Column(name: "PF_Origine53", type: Types::SMALLINT, nullable: true)]
    private ?int $pfOrigine53 = null;

    #[ORM\Column(name: "PF_Origine54", type: Types::SMALLINT, nullable: true)]
    private ?int $pfOrigine54 = null;

    #[ORM\Column(name: "PF_Origine55", type: Types::SMALLINT, nullable: true)]
    private ?int $pfOrigine55 = null;

    #[ORM\Column(name: "PF_Origine56", type: Types::SMALLINT, nullable: true)]
    private ?int $pfOrigine56 = null;

    #[ORM\Column(name: "PF_Origine57", type: Types::SMALLINT, nullable: true)]
    private ?int $pfOrigine57 = null;

    #[ORM\Column(name: "PF_Origine58", type: Types::SMALLINT, nullable: true)]
    private ?int $pfOrigine58 = null;

    #[ORM\Column(name: "PF_Origine59", type: Types::SMALLINT, nullable: true)]
    private ?int $pfOrigine59 = null;

    #[ORM\Column(name: "PF_Origine60", type: Types::SMALLINT, nullable: true)]
    private ?int $pfOrigine60 = null;

    #[ORM\Column(name: "PF_Origine61", type: Types::SMALLINT, nullable: true)]
    private ?int $pfOrigine61 = null;

    #[ORM\Column(name: "PF_Origine62", type: Types::SMALLINT, nullable: true)]
    private ?int $pfOrigine62 = null;

    #[ORM\Column(name: "PF_Origine63", type: Types::SMALLINT, nullable: true)]
    private ?int $pfOrigine63 = null;

    #[ORM\Column(name: "PF_Origine64", type: Types::SMALLINT, nullable: true)]
    private ?int $pfOrigine64 = null;

    #[ORM\Column(name: "PF_Origine65", type: Types::SMALLINT, nullable: true)]
    private ?int $pfOrigine65 = null;

    #[ORM\Column(name: "PF_Origine66", type: Types::SMALLINT, nullable: true)]
    private ?int $pfOrigine66 = null;

    #[ORM\Column(name: "PF_Origine67", type: Types::SMALLINT, nullable: true)]
    private ?int $pfOrigine67 = null;

    #[ORM\Column(name: "PF_Origine68", type: Types::SMALLINT, nullable: true)]
    private ?int $pfOrigine68 = null;

    #[ORM\Column(name: "PF_Origine69", type: Types::SMALLINT, nullable: true)]
    private ?int $pfOrigine69 = null;

    #[ORM\Column(name: "PF_Origine70", type: Types::SMALLINT, nullable: true)]
    private ?int $pfOrigine70 = null;

    #[ORM\Column(name: "PF_Origine71", type: Types::SMALLINT, nullable: true)]
    private ?int $pfOrigine71 = null;

    #[ORM\Column(name: "PF_Origine72", type: Types::SMALLINT, nullable: true)]
    private ?int $pfOrigine72 = null;

    #[ORM\Column(name: "PF_Origine73", type: Types::SMALLINT, nullable: true)]
    private ?int $pfOrigine73 = null;

    #[ORM\Column(name: "PF_Origine74", type: Types::SMALLINT, nullable: true)]
    private ?int $pfOrigine74 = null;

    #[ORM\Column(name: "PF_Origine75", type: Types::SMALLINT, nullable: true)]
    private ?int $pfOrigine75 = null;

    #[ORM\Column(name: "PF_Origine76", type: Types::SMALLINT, nullable: true)]
    private ?int $pfOrigine76 = null;

    #[ORM\Column(name: "PF_Origine77", type: Types::SMALLINT, nullable: true)]
    private ?int $pfOrigine77 = null;

    #[ORM\Column(name: "PF_Origine78", type: Types::SMALLINT, nullable: true)]
    private ?int $pfOrigine78 = null;

    #[ORM\Column(name: "PF_Origine79", type: Types::SMALLINT, nullable: true)]
    private ?int $pfOrigine79 = null;

    #[ORM\Column(name: "PF_Origine80", type: Types::SMALLINT, nullable: true)]
    private ?int $pfOrigine80 = null;

    #[ORM\Column(name: "PF_Origine81", type: Types::SMALLINT, nullable: true)]
    private ?int $pfOrigine81 = null;

    #[ORM\Column(name: "PF_Origine82", type: Types::SMALLINT, nullable: true)]
    private ?int $pfOrigine82 = null;

    #[ORM\Column(name: "PF_Origine83", type: Types::SMALLINT, nullable: true)]
    private ?int $pfOrigine83 = null;

    #[ORM\Column(name: "PF_Origine84", type: Types::SMALLINT, nullable: true)]
    private ?int $pfOrigine84 = null;

    #[ORM\Column(name: "PF_Planning01", type: Types::SMALLINT, nullable: true)]
    private ?int $pfPlanning01 = null;

    #[ORM\Column(name: "PF_Planning02", type: Types::SMALLINT, nullable: true)]
    private ?int $pfPlanning02 = null;

    #[ORM\Column(name: "PF_Planning03", type: Types::SMALLINT, nullable: true)]
    private ?int $pfPlanning03 = null;

    #[ORM\Column(name: "PF_Planning04", type: Types::SMALLINT, nullable: true)]
    private ?int $pfPlanning04 = null;

    #[ORM\Column(name: "PF_Planning05", type: Types::SMALLINT, nullable: true)]
    private ?int $pfPlanning05 = null;

    #[ORM\Column(name: "PF_Planning06", type: Types::SMALLINT, nullable: true)]
    private ?int $pfPlanning06 = null;

    #[ORM\Column(name: "PF_Planning07", type: Types::SMALLINT, nullable: true)]
    private ?int $pfPlanning07 = null;

    #[ORM\Column(name: "PF_Planning08", type: Types::SMALLINT, nullable: true)]
    private ?int $pfPlanning08 = null;

    #[ORM\Column(name: "PF_Planning09", type: Types::SMALLINT, nullable: true)]
    private ?int $pfPlanning09 = null;

    #[ORM\Column(name: "PF_Planning10", type: Types::SMALLINT, nullable: true)]
    private ?int $pfPlanning10 = null;

    #[ORM\Column(name: "PF_Planning11", type: Types::SMALLINT, nullable: true)]
    private ?int $pfPlanning11 = null;

    #[ORM\Column(name: "PF_Planning12", type: Types::SMALLINT, nullable: true)]
    private ?int $pfPlanning12 = null;

    #[ORM\Column(name: "PF_Planning13", type: Types::SMALLINT, nullable: true)]
    private ?int $pfPlanning13 = null;

    #[ORM\Column(name: "PF_Planning14", type: Types::SMALLINT, nullable: true)]
    private ?int $pfPlanning14 = null;

    #[ORM\Column(name: "PF_Synthese01", type: Types::SMALLINT, nullable: true)]
    private ?int $pfSynthese01 = null;

    #[ORM\Column(name: "PF_Synthese02", type: Types::SMALLINT, nullable: true)]
    private ?int $pfSynthese02 = null;

    #[ORM\Column(name: "PF_Synthese03", type: Types::SMALLINT, nullable: true)]
    private ?int $pfSynthese03 = null;

    #[ORM\Column(name: "PF_Synthese04", type: Types::SMALLINT, nullable: true)]
    private ?int $pfSynthese04 = null;

    #[ORM\Column(name: "PF_Synthese05", type: Types::SMALLINT, nullable: true)]
    private ?int $pfSynthese05 = null;

    #[ORM\Column(name: "PF_Synthese06", type: Types::SMALLINT, nullable: true)]
    private ?int $pfSynthese06 = null;

    #[ORM\Column(name: "PF_Synthese07", type: Types::SMALLINT, nullable: true)]
    private ?int $pfSynthese07 = null;

    #[ORM\Column(name: "PF_Synthese08", type: Types::SMALLINT, nullable: true)]
    private ?int $pfSynthese08 = null;

    #[ORM\Column(name: "PF_Synthese09", type: Types::SMALLINT, nullable: true)]
    private ?int $pfSynthese09 = null;

    #[ORM\Column(name: "PF_Synthese10", type: Types::SMALLINT, nullable: true)]
    private ?int $pfSynthese10 = null;

    #[ORM\Column(name: "PF_Synthese11", type: Types::SMALLINT, nullable: true)]
    private ?int $pfSynthese11 = null;

    #[ORM\Column(name: "PF_Synthese12", type: Types::SMALLINT, nullable: true)]
    private ?int $pfSynthese12 = null;

    #[ORM\Column(name: "PF_Synthese13", type: Types::SMALLINT, nullable: true)]
    private ?int $pfSynthese13 = null;

    #[ORM\Column(name: "PF_Synthese14", type: Types::SMALLINT, nullable: true)]
    private ?int $pfSynthese14 = null;

    #[ORM\Column(name: "PF_Synthese15", type: Types::SMALLINT, nullable: true)]
    private ?int $pfSynthese15 = null;

    #[ORM\Column(name: "PF_Historique01", type: Types::SMALLINT, nullable: true)]
    private ?int $pfHistorique01 = null;

    #[ORM\Column(name: "PF_Historique02", type: Types::SMALLINT, nullable: true)]
    private ?int $pfHistorique02 = null;

    #[ORM\Column(name: "PF_Historique03", type: Types::SMALLINT, nullable: true)]
    private ?int $pfHistorique03 = null;

    #[ORM\Column(name: "PF_Historique04", type: Types::SMALLINT, nullable: true)]
    private ?int $pfHistorique04 = null;

    #[ORM\Column(name: "PF_Historique05", type: Types::SMALLINT, nullable: true)]
    private ?int $pfHistorique05 = null;

    #[ORM\Column(name: "PF_Historique06", type: Types::SMALLINT, nullable: true)]
    private ?int $pfHistorique06 = null;

    #[ORM\Column(name: "PF_Historique07", type: Types::SMALLINT, nullable: true)]
    private ?int $pfHistorique07 = null;

    #[ORM\Column(name: "PF_Historique08", type: Types::SMALLINT, nullable: true)]
    private ?int $pfHistorique08 = null;

    #[ORM\Column(name: "PF_Historique09", type: Types::SMALLINT, nullable: true)]
    private ?int $pfHistorique09 = null;

    #[ORM\Column(name: "PF_Historique10", type: Types::SMALLINT, nullable: true)]
    private ?int $pfHistorique10 = null;

    #[ORM\Column(name: "PF_Historique11", type: Types::SMALLINT, nullable: true)]
    private ?int $pfHistorique11 = null;

    #[ORM\Column(name: "PF_Origine85", type: Types::SMALLINT, nullable: true)]
    private ?int $pfOrigine85 = null;

    #[ORM\Column(name: "PF_Origine86", type: Types::SMALLINT, nullable: true)]
    private ?int $pfOrigine86 = null;

    #[ORM\Column(name: "PF_Origine87", type: Types::SMALLINT, nullable: true)]
    private ?int $pfOrigine87 = null;

    #[ORM\Column(name: "PF_Origine88", type: Types::SMALLINT, nullable: true)]
    private ?int $pfOrigine88 = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getPfNumero(): ?string
    {
        return $this->pfNumero;
    }

    public function setPfNumero(?string $pfNumero): static
    {
        $this->pfNumero = $pfNumero;

        return $this;
    }

    public function getPfOrigine01(): ?int
    {
        return $this->pfOrigine01;
    }

    public function setPfOrigine01(?int $pfOrigine01): static
    {
        $this->pfOrigine01 = $pfOrigine01;

        return $this;
    }

    public function getPfOrigine02(): ?int
    {
        return $this->pfOrigine02;
    }

    public function setPfOrigine02(?int $pfOrigine02): static
    {
        $this->pfOrigine02 = $pfOrigine02;

        return $this;
    }

    public function getPfOrigine03(): ?int
    {
        return $this->pfOrigine03;
    }

    public function setPfOrigine03(?int $pfOrigine03): static
    {
        $this->pfOrigine03 = $pfOrigine03;

        return $this;
    }

    public function getPfOrigine04(): ?int
    {
        return $this->pfOrigine04;
    }

    public function setPfOrigine04(?int $pfOrigine04): static
    {
        $this->pfOrigine04 = $pfOrigine04;

        return $this;
    }

    public function getPfOrigine05(): ?int
    {
        return $this->pfOrigine05;
    }

    public function setPfOrigine05(?int $pfOrigine05): static
    {
        $this->pfOrigine05 = $pfOrigine05;

        return $this;
    }

    public function getPfOrigine06(): ?int
    {
        return $this->pfOrigine06;
    }

    public function setPfOrigine06(?int $pfOrigine06): static
    {
        $this->pfOrigine06 = $pfOrigine06;

        return $this;
    }

    public function getPfOrigine07(): ?int
    {
        return $this->pfOrigine07;
    }

    public function setPfOrigine07(?int $pfOrigine07): static
    {
        $this->pfOrigine07 = $pfOrigine07;

        return $this;
    }

    public function getPfOrigine08(): ?int
    {
        return $this->pfOrigine08;
    }

    public function setPfOrigine08(?int $pfOrigine08): static
    {
        $this->pfOrigine08 = $pfOrigine08;

        return $this;
    }

    public function getPfOrigine09(): ?int
    {
        return $this->pfOrigine09;
    }

    public function setPfOrigine09(?int $pfOrigine09): static
    {
        $this->pfOrigine09 = $pfOrigine09;

        return $this;
    }

    public function getPfOrigine10(): ?int
    {
        return $this->pfOrigine10;
    }

    public function setPfOrigine10(?int $pfOrigine10): static
    {
        $this->pfOrigine10 = $pfOrigine10;

        return $this;
    }

    public function getPfOrigine11(): ?int
    {
        return $this->pfOrigine11;
    }

    public function setPfOrigine11(?int $pfOrigine11): static
    {
        $this->pfOrigine11 = $pfOrigine11;

        return $this;
    }

    public function getPfOrigine12(): ?int
    {
        return $this->pfOrigine12;
    }

    public function setPfOrigine12(?int $pfOrigine12): static
    {
        $this->pfOrigine12 = $pfOrigine12;

        return $this;
    }

    public function getPfOrigine13(): ?int
    {
        return $this->pfOrigine13;
    }

    public function setPfOrigine13(?int $pfOrigine13): static
    {
        $this->pfOrigine13 = $pfOrigine13;

        return $this;
    }

    public function getPfOrigine14(): ?int
    {
        return $this->pfOrigine14;
    }

    public function setPfOrigine14(?int $pfOrigine14): static
    {
        $this->pfOrigine14 = $pfOrigine14;

        return $this;
    }

    public function getPfOrigine15(): ?int
    {
        return $this->pfOrigine15;
    }

    public function setPfOrigine15(?int $pfOrigine15): static
    {
        $this->pfOrigine15 = $pfOrigine15;

        return $this;
    }

    public function getPfOrigine16(): ?int
    {
        return $this->pfOrigine16;
    }

    public function setPfOrigine16(?int $pfOrigine16): static
    {
        $this->pfOrigine16 = $pfOrigine16;

        return $this;
    }

    public function getPfOrigine17(): ?int
    {
        return $this->pfOrigine17;
    }

    public function setPfOrigine17(?int $pfOrigine17): static
    {
        $this->pfOrigine17 = $pfOrigine17;

        return $this;
    }

    public function getPfOrigine18(): ?int
    {
        return $this->pfOrigine18;
    }

    public function setPfOrigine18(?int $pfOrigine18): static
    {
        $this->pfOrigine18 = $pfOrigine18;

        return $this;
    }

    public function getPfOrigine19(): ?int
    {
        return $this->pfOrigine19;
    }

    public function setPfOrigine19(?int $pfOrigine19): static
    {
        $this->pfOrigine19 = $pfOrigine19;

        return $this;
    }

    public function getPfOrigine20(): ?int
    {
        return $this->pfOrigine20;
    }

    public function setPfOrigine20(?int $pfOrigine20): static
    {
        $this->pfOrigine20 = $pfOrigine20;

        return $this;
    }

    public function getPfOrigine21(): ?int
    {
        return $this->pfOrigine21;
    }

    public function setPfOrigine21(?int $pfOrigine21): static
    {
        $this->pfOrigine21 = $pfOrigine21;

        return $this;
    }

    public function getPfOrigine22(): ?int
    {
        return $this->pfOrigine22;
    }

    public function setPfOrigine22(?int $pfOrigine22): static
    {
        $this->pfOrigine22 = $pfOrigine22;

        return $this;
    }

    public function getPfOrigine23(): ?int
    {
        return $this->pfOrigine23;
    }

    public function setPfOrigine23(?int $pfOrigine23): static
    {
        $this->pfOrigine23 = $pfOrigine23;

        return $this;
    }

    public function getPfOrigine24(): ?int
    {
        return $this->pfOrigine24;
    }

    public function setPfOrigine24(?int $pfOrigine24): static
    {
        $this->pfOrigine24 = $pfOrigine24;

        return $this;
    }

    public function getPfOrigine25(): ?int
    {
        return $this->pfOrigine25;
    }

    public function setPfOrigine25(?int $pfOrigine25): static
    {
        $this->pfOrigine25 = $pfOrigine25;

        return $this;
    }

    public function getPfOrigine26(): ?int
    {
        return $this->pfOrigine26;
    }

    public function setPfOrigine26(?int $pfOrigine26): static
    {
        $this->pfOrigine26 = $pfOrigine26;

        return $this;
    }

    public function getPfOrigine27(): ?int
    {
        return $this->pfOrigine27;
    }

    public function setPfOrigine27(?int $pfOrigine27): static
    {
        $this->pfOrigine27 = $pfOrigine27;

        return $this;
    }

    public function getPfOrigine28(): ?int
    {
        return $this->pfOrigine28;
    }

    public function setPfOrigine28(?int $pfOrigine28): static
    {
        $this->pfOrigine28 = $pfOrigine28;

        return $this;
    }

    public function getPfOrigine29(): ?int
    {
        return $this->pfOrigine29;
    }

    public function setPfOrigine29(?int $pfOrigine29): static
    {
        $this->pfOrigine29 = $pfOrigine29;

        return $this;
    }

    public function getPfOrigine30(): ?int
    {
        return $this->pfOrigine30;
    }

    public function setPfOrigine30(?int $pfOrigine30): static
    {
        $this->pfOrigine30 = $pfOrigine30;

        return $this;
    }

    public function getPfOrigine31(): ?int
    {
        return $this->pfOrigine31;
    }

    public function setPfOrigine31(?int $pfOrigine31): static
    {
        $this->pfOrigine31 = $pfOrigine31;

        return $this;
    }

    public function getPfOrigine32(): ?int
    {
        return $this->pfOrigine32;
    }

    public function setPfOrigine32(?int $pfOrigine32): static
    {
        $this->pfOrigine32 = $pfOrigine32;

        return $this;
    }

    public function getPfOrigine33(): ?int
    {
        return $this->pfOrigine33;
    }

    public function setPfOrigine33(?int $pfOrigine33): static
    {
        $this->pfOrigine33 = $pfOrigine33;

        return $this;
    }

    public function getPfOrigine34(): ?int
    {
        return $this->pfOrigine34;
    }

    public function setPfOrigine34(?int $pfOrigine34): static
    {
        $this->pfOrigine34 = $pfOrigine34;

        return $this;
    }

    public function getPfOrigine35(): ?int
    {
        return $this->pfOrigine35;
    }

    public function setPfOrigine35(?int $pfOrigine35): static
    {
        $this->pfOrigine35 = $pfOrigine35;

        return $this;
    }

    public function getPfOrigine36(): ?int
    {
        return $this->pfOrigine36;
    }

    public function setPfOrigine36(?int $pfOrigine36): static
    {
        $this->pfOrigine36 = $pfOrigine36;

        return $this;
    }

    public function getPfOrigine37(): ?int
    {
        return $this->pfOrigine37;
    }

    public function setPfOrigine37(?int $pfOrigine37): static
    {
        $this->pfOrigine37 = $pfOrigine37;

        return $this;
    }

    public function getPfOrigine38(): ?int
    {
        return $this->pfOrigine38;
    }

    public function setPfOrigine38(?int $pfOrigine38): static
    {
        $this->pfOrigine38 = $pfOrigine38;

        return $this;
    }

    public function getPfOrigine39(): ?int
    {
        return $this->pfOrigine39;
    }

    public function setPfOrigine39(?int $pfOrigine39): static
    {
        $this->pfOrigine39 = $pfOrigine39;

        return $this;
    }

    public function getPfOrigine40(): ?int
    {
        return $this->pfOrigine40;
    }

    public function setPfOrigine40(?int $pfOrigine40): static
    {
        $this->pfOrigine40 = $pfOrigine40;

        return $this;
    }

    public function getPfOrigine41(): ?int
    {
        return $this->pfOrigine41;
    }

    public function setPfOrigine41(?int $pfOrigine41): static
    {
        $this->pfOrigine41 = $pfOrigine41;

        return $this;
    }

    public function getPfOrigine42(): ?int
    {
        return $this->pfOrigine42;
    }

    public function setPfOrigine42(?int $pfOrigine42): static
    {
        $this->pfOrigine42 = $pfOrigine42;

        return $this;
    }

    public function getPfOrigine43(): ?int
    {
        return $this->pfOrigine43;
    }

    public function setPfOrigine43(?int $pfOrigine43): static
    {
        $this->pfOrigine43 = $pfOrigine43;

        return $this;
    }

    public function getPfOrigine44(): ?int
    {
        return $this->pfOrigine44;
    }

    public function setPfOrigine44(?int $pfOrigine44): static
    {
        $this->pfOrigine44 = $pfOrigine44;

        return $this;
    }

    public function getPfOrigine45(): ?int
    {
        return $this->pfOrigine45;
    }

    public function setPfOrigine45(?int $pfOrigine45): static
    {
        $this->pfOrigine45 = $pfOrigine45;

        return $this;
    }

    public function getPfOrigine46(): ?int
    {
        return $this->pfOrigine46;
    }

    public function setPfOrigine46(?int $pfOrigine46): static
    {
        $this->pfOrigine46 = $pfOrigine46;

        return $this;
    }

    public function getPfOrigine47(): ?int
    {
        return $this->pfOrigine47;
    }

    public function setPfOrigine47(?int $pfOrigine47): static
    {
        $this->pfOrigine47 = $pfOrigine47;

        return $this;
    }

    public function getPfOrigine48(): ?int
    {
        return $this->pfOrigine48;
    }

    public function setPfOrigine48(?int $pfOrigine48): static
    {
        $this->pfOrigine48 = $pfOrigine48;

        return $this;
    }

    public function getPfOrigine49(): ?int
    {
        return $this->pfOrigine49;
    }

    public function setPfOrigine49(?int $pfOrigine49): static
    {
        $this->pfOrigine49 = $pfOrigine49;

        return $this;
    }

    public function getPfOrigine50(): ?int
    {
        return $this->pfOrigine50;
    }

    public function setPfOrigine50(?int $pfOrigine50): static
    {
        $this->pfOrigine50 = $pfOrigine50;

        return $this;
    }

    public function getPfOrigine51(): ?int
    {
        return $this->pfOrigine51;
    }

    public function setPfOrigine51(?int $pfOrigine51): static
    {
        $this->pfOrigine51 = $pfOrigine51;

        return $this;
    }

    public function getPfOrigine52(): ?int
    {
        return $this->pfOrigine52;
    }

    public function setPfOrigine52(?int $pfOrigine52): static
    {
        $this->pfOrigine52 = $pfOrigine52;

        return $this;
    }

    public function getPfOrigine53(): ?int
    {
        return $this->pfOrigine53;
    }

    public function setPfOrigine53(?int $pfOrigine53): static
    {
        $this->pfOrigine53 = $pfOrigine53;

        return $this;
    }

    public function getPfOrigine54(): ?int
    {
        return $this->pfOrigine54;
    }

    public function setPfOrigine54(?int $pfOrigine54): static
    {
        $this->pfOrigine54 = $pfOrigine54;

        return $this;
    }

    public function getPfOrigine55(): ?int
    {
        return $this->pfOrigine55;
    }

    public function setPfOrigine55(?int $pfOrigine55): static
    {
        $this->pfOrigine55 = $pfOrigine55;

        return $this;
    }

    public function getPfOrigine56(): ?int
    {
        return $this->pfOrigine56;
    }

    public function setPfOrigine56(?int $pfOrigine56): static
    {
        $this->pfOrigine56 = $pfOrigine56;

        return $this;
    }

    public function getPfOrigine57(): ?int
    {
        return $this->pfOrigine57;
    }

    public function setPfOrigine57(?int $pfOrigine57): static
    {
        $this->pfOrigine57 = $pfOrigine57;

        return $this;
    }

    public function getPfOrigine58(): ?int
    {
        return $this->pfOrigine58;
    }

    public function setPfOrigine58(?int $pfOrigine58): static
    {
        $this->pfOrigine58 = $pfOrigine58;

        return $this;
    }

    public function getPfOrigine59(): ?int
    {
        return $this->pfOrigine59;
    }

    public function setPfOrigine59(?int $pfOrigine59): static
    {
        $this->pfOrigine59 = $pfOrigine59;

        return $this;
    }

    public function getPfOrigine60(): ?int
    {
        return $this->pfOrigine60;
    }

    public function setPfOrigine60(?int $pfOrigine60): static
    {
        $this->pfOrigine60 = $pfOrigine60;

        return $this;
    }

    public function getPfOrigine61(): ?int
    {
        return $this->pfOrigine61;
    }

    public function setPfOrigine61(?int $pfOrigine61): static
    {
        $this->pfOrigine61 = $pfOrigine61;

        return $this;
    }

    public function getPfOrigine62(): ?int
    {
        return $this->pfOrigine62;
    }

    public function setPfOrigine62(?int $pfOrigine62): static
    {
        $this->pfOrigine62 = $pfOrigine62;

        return $this;
    }

    public function getPfOrigine63(): ?int
    {
        return $this->pfOrigine63;
    }

    public function setPfOrigine63(?int $pfOrigine63): static
    {
        $this->pfOrigine63 = $pfOrigine63;

        return $this;
    }

    public function getPfOrigine64(): ?int
    {
        return $this->pfOrigine64;
    }

    public function setPfOrigine64(?int $pfOrigine64): static
    {
        $this->pfOrigine64 = $pfOrigine64;

        return $this;
    }

    public function getPfOrigine65(): ?int
    {
        return $this->pfOrigine65;
    }

    public function setPfOrigine65(?int $pfOrigine65): static
    {
        $this->pfOrigine65 = $pfOrigine65;

        return $this;
    }

    public function getPfOrigine66(): ?int
    {
        return $this->pfOrigine66;
    }

    public function setPfOrigine66(?int $pfOrigine66): static
    {
        $this->pfOrigine66 = $pfOrigine66;

        return $this;
    }

    public function getPfOrigine67(): ?int
    {
        return $this->pfOrigine67;
    }

    public function setPfOrigine67(?int $pfOrigine67): static
    {
        $this->pfOrigine67 = $pfOrigine67;

        return $this;
    }

    public function getPfOrigine68(): ?int
    {
        return $this->pfOrigine68;
    }

    public function setPfOrigine68(?int $pfOrigine68): static
    {
        $this->pfOrigine68 = $pfOrigine68;

        return $this;
    }

    public function getPfOrigine69(): ?int
    {
        return $this->pfOrigine69;
    }

    public function setPfOrigine69(?int $pfOrigine69): static
    {
        $this->pfOrigine69 = $pfOrigine69;

        return $this;
    }

    public function getPfOrigine70(): ?int
    {
        return $this->pfOrigine70;
    }

    public function setPfOrigine70(?int $pfOrigine70): static
    {
        $this->pfOrigine70 = $pfOrigine70;

        return $this;
    }

    public function getPfOrigine71(): ?int
    {
        return $this->pfOrigine71;
    }

    public function setPfOrigine71(?int $pfOrigine71): static
    {
        $this->pfOrigine71 = $pfOrigine71;

        return $this;
    }

    public function getPfOrigine72(): ?int
    {
        return $this->pfOrigine72;
    }

    public function setPfOrigine72(?int $pfOrigine72): static
    {
        $this->pfOrigine72 = $pfOrigine72;

        return $this;
    }

    public function getPfOrigine73(): ?int
    {
        return $this->pfOrigine73;
    }

    public function setPfOrigine73(?int $pfOrigine73): static
    {
        $this->pfOrigine73 = $pfOrigine73;

        return $this;
    }

    public function getPfOrigine74(): ?int
    {
        return $this->pfOrigine74;
    }

    public function setPfOrigine74(?int $pfOrigine74): static
    {
        $this->pfOrigine74 = $pfOrigine74;

        return $this;
    }

    public function getPfOrigine75(): ?int
    {
        return $this->pfOrigine75;
    }

    public function setPfOrigine75(?int $pfOrigine75): static
    {
        $this->pfOrigine75 = $pfOrigine75;

        return $this;
    }

    public function getPfOrigine76(): ?int
    {
        return $this->pfOrigine76;
    }

    public function setPfOrigine76(?int $pfOrigine76): static
    {
        $this->pfOrigine76 = $pfOrigine76;

        return $this;
    }

    public function getPfOrigine77(): ?int
    {
        return $this->pfOrigine77;
    }

    public function setPfOrigine77(?int $pfOrigine77): static
    {
        $this->pfOrigine77 = $pfOrigine77;

        return $this;
    }

    public function getPfOrigine78(): ?int
    {
        return $this->pfOrigine78;
    }

    public function setPfOrigine78(?int $pfOrigine78): static
    {
        $this->pfOrigine78 = $pfOrigine78;

        return $this;
    }

    public function getPfOrigine79(): ?int
    {
        return $this->pfOrigine79;
    }

    public function setPfOrigine79(?int $pfOrigine79): static
    {
        $this->pfOrigine79 = $pfOrigine79;

        return $this;
    }

    public function getPfOrigine80(): ?int
    {
        return $this->pfOrigine80;
    }

    public function setPfOrigine80(?int $pfOrigine80): static
    {
        $this->pfOrigine80 = $pfOrigine80;

        return $this;
    }

    public function getPfOrigine81(): ?int
    {
        return $this->pfOrigine81;
    }

    public function setPfOrigine81(?int $pfOrigine81): static
    {
        $this->pfOrigine81 = $pfOrigine81;

        return $this;
    }

    public function getPfOrigine82(): ?int
    {
        return $this->pfOrigine82;
    }

    public function setPfOrigine82(?int $pfOrigine82): static
    {
        $this->pfOrigine82 = $pfOrigine82;

        return $this;
    }

    public function getPfOrigine83(): ?int
    {
        return $this->pfOrigine83;
    }

    public function setPfOrigine83(?int $pfOrigine83): static
    {
        $this->pfOrigine83 = $pfOrigine83;

        return $this;
    }

    public function getPfOrigine84(): ?int
    {
        return $this->pfOrigine84;
    }

    public function setPfOrigine84(?int $pfOrigine84): static
    {
        $this->pfOrigine84 = $pfOrigine84;

        return $this;
    }

    public function getPfPlanning01(): ?int
    {
        return $this->pfPlanning01;
    }

    public function setPfPlanning01(?int $pfPlanning01): static
    {
        $this->pfPlanning01 = $pfPlanning01;

        return $this;
    }

    public function getPfPlanning02(): ?int
    {
        return $this->pfPlanning02;
    }

    public function setPfPlanning02(?int $pfPlanning02): static
    {
        $this->pfPlanning02 = $pfPlanning02;

        return $this;
    }

    public function getPfPlanning03(): ?int
    {
        return $this->pfPlanning03;
    }

    public function setPfPlanning03(?int $pfPlanning03): static
    {
        $this->pfPlanning03 = $pfPlanning03;

        return $this;
    }

    public function getPfPlanning04(): ?int
    {
        return $this->pfPlanning04;
    }

    public function setPfPlanning04(?int $pfPlanning04): static
    {
        $this->pfPlanning04 = $pfPlanning04;

        return $this;
    }

    public function getPfPlanning05(): ?int
    {
        return $this->pfPlanning05;
    }

    public function setPfPlanning05(?int $pfPlanning05): static
    {
        $this->pfPlanning05 = $pfPlanning05;

        return $this;
    }

    public function getPfPlanning06(): ?int
    {
        return $this->pfPlanning06;
    }

    public function setPfPlanning06(?int $pfPlanning06): static
    {
        $this->pfPlanning06 = $pfPlanning06;

        return $this;
    }

    public function getPfPlanning07(): ?int
    {
        return $this->pfPlanning07;
    }

    public function setPfPlanning07(?int $pfPlanning07): static
    {
        $this->pfPlanning07 = $pfPlanning07;

        return $this;
    }

    public function getPfPlanning08(): ?int
    {
        return $this->pfPlanning08;
    }

    public function setPfPlanning08(?int $pfPlanning08): static
    {
        $this->pfPlanning08 = $pfPlanning08;

        return $this;
    }

    public function getPfPlanning09(): ?int
    {
        return $this->pfPlanning09;
    }

    public function setPfPlanning09(?int $pfPlanning09): static
    {
        $this->pfPlanning09 = $pfPlanning09;

        return $this;
    }

    public function getPfPlanning10(): ?int
    {
        return $this->pfPlanning10;
    }

    public function setPfPlanning10(?int $pfPlanning10): static
    {
        $this->pfPlanning10 = $pfPlanning10;

        return $this;
    }

    public function getPfPlanning11(): ?int
    {
        return $this->pfPlanning11;
    }

    public function setPfPlanning11(?int $pfPlanning11): static
    {
        $this->pfPlanning11 = $pfPlanning11;

        return $this;
    }

    public function getPfPlanning12(): ?int
    {
        return $this->pfPlanning12;
    }

    public function setPfPlanning12(?int $pfPlanning12): static
    {
        $this->pfPlanning12 = $pfPlanning12;

        return $this;
    }

    public function getPfPlanning13(): ?int
    {
        return $this->pfPlanning13;
    }

    public function setPfPlanning13(?int $pfPlanning13): static
    {
        $this->pfPlanning13 = $pfPlanning13;

        return $this;
    }

    public function getPfPlanning14(): ?int
    {
        return $this->pfPlanning14;
    }

    public function setPfPlanning14(?int $pfPlanning14): static
    {
        $this->pfPlanning14 = $pfPlanning14;

        return $this;
    }

    public function getPfSynthese01(): ?int
    {
        return $this->pfSynthese01;
    }

    public function setPfSynthese01(?int $pfSynthese01): static
    {
        $this->pfSynthese01 = $pfSynthese01;

        return $this;
    }

    public function getPfSynthese02(): ?int
    {
        return $this->pfSynthese02;
    }

    public function setPfSynthese02(?int $pfSynthese02): static
    {
        $this->pfSynthese02 = $pfSynthese02;

        return $this;
    }

    public function getPfSynthese03(): ?int
    {
        return $this->pfSynthese03;
    }

    public function setPfSynthese03(?int $pfSynthese03): static
    {
        $this->pfSynthese03 = $pfSynthese03;

        return $this;
    }

    public function getPfSynthese04(): ?int
    {
        return $this->pfSynthese04;
    }

    public function setPfSynthese04(?int $pfSynthese04): static
    {
        $this->pfSynthese04 = $pfSynthese04;

        return $this;
    }

    public function getPfSynthese05(): ?int
    {
        return $this->pfSynthese05;
    }

    public function setPfSynthese05(?int $pfSynthese05): static
    {
        $this->pfSynthese05 = $pfSynthese05;

        return $this;
    }

    public function getPfSynthese06(): ?int
    {
        return $this->pfSynthese06;
    }

    public function setPfSynthese06(?int $pfSynthese06): static
    {
        $this->pfSynthese06 = $pfSynthese06;

        return $this;
    }

    public function getPfSynthese07(): ?int
    {
        return $this->pfSynthese07;
    }

    public function setPfSynthese07(?int $pfSynthese07): static
    {
        $this->pfSynthese07 = $pfSynthese07;

        return $this;
    }

    public function getPfSynthese08(): ?int
    {
        return $this->pfSynthese08;
    }

    public function setPfSynthese08(?int $pfSynthese08): static
    {
        $this->pfSynthese08 = $pfSynthese08;

        return $this;
    }

    public function getPfSynthese09(): ?int
    {
        return $this->pfSynthese09;
    }

    public function setPfSynthese09(?int $pfSynthese09): static
    {
        $this->pfSynthese09 = $pfSynthese09;

        return $this;
    }

    public function getPfSynthese10(): ?int
    {
        return $this->pfSynthese10;
    }

    public function setPfSynthese10(?int $pfSynthese10): static
    {
        $this->pfSynthese10 = $pfSynthese10;

        return $this;
    }

    public function getPfSynthese11(): ?int
    {
        return $this->pfSynthese11;
    }

    public function setPfSynthese11(?int $pfSynthese11): static
    {
        $this->pfSynthese11 = $pfSynthese11;

        return $this;
    }

    public function getPfSynthese12(): ?int
    {
        return $this->pfSynthese12;
    }

    public function setPfSynthese12(?int $pfSynthese12): static
    {
        $this->pfSynthese12 = $pfSynthese12;

        return $this;
    }

    public function getPfSynthese13(): ?int
    {
        return $this->pfSynthese13;
    }

    public function setPfSynthese13(?int $pfSynthese13): static
    {
        $this->pfSynthese13 = $pfSynthese13;

        return $this;
    }

    public function getPfSynthese14(): ?int
    {
        return $this->pfSynthese14;
    }

    public function setPfSynthese14(?int $pfSynthese14): static
    {
        $this->pfSynthese14 = $pfSynthese14;

        return $this;
    }

    public function getPfSynthese15(): ?int
    {
        return $this->pfSynthese15;
    }

    public function setPfSynthese15(?int $pfSynthese15): static
    {
        $this->pfSynthese15 = $pfSynthese15;

        return $this;
    }

    public function getPfHistorique01(): ?int
    {
        return $this->pfHistorique01;
    }

    public function setPfHistorique01(?int $pfHistorique01): static
    {
        $this->pfHistorique01 = $pfHistorique01;

        return $this;
    }

    public function getPfHistorique02(): ?int
    {
        return $this->pfHistorique02;
    }

    public function setPfHistorique02(?int $pfHistorique02): static
    {
        $this->pfHistorique02 = $pfHistorique02;

        return $this;
    }

    public function getPfHistorique03(): ?int
    {
        return $this->pfHistorique03;
    }

    public function setPfHistorique03(?int $pfHistorique03): static
    {
        $this->pfHistorique03 = $pfHistorique03;

        return $this;
    }

    public function getPfHistorique04(): ?int
    {
        return $this->pfHistorique04;
    }

    public function setPfHistorique04(?int $pfHistorique04): static
    {
        $this->pfHistorique04 = $pfHistorique04;

        return $this;
    }

    public function getPfHistorique05(): ?int
    {
        return $this->pfHistorique05;
    }

    public function setPfHistorique05(?int $pfHistorique05): static
    {
        $this->pfHistorique05 = $pfHistorique05;

        return $this;
    }

    public function getPfHistorique06(): ?int
    {
        return $this->pfHistorique06;
    }

    public function setPfHistorique06(?int $pfHistorique06): static
    {
        $this->pfHistorique06 = $pfHistorique06;

        return $this;
    }

    public function getPfHistorique07(): ?int
    {
        return $this->pfHistorique07;
    }

    public function setPfHistorique07(?int $pfHistorique07): static
    {
        $this->pfHistorique07 = $pfHistorique07;

        return $this;
    }

    public function getPfHistorique08(): ?int
    {
        return $this->pfHistorique08;
    }

    public function setPfHistorique08(?int $pfHistorique08): static
    {
        $this->pfHistorique08 = $pfHistorique08;

        return $this;
    }

    public function getPfHistorique09(): ?int
    {
        return $this->pfHistorique09;
    }

    public function setPfHistorique09(?int $pfHistorique09): static
    {
        $this->pfHistorique09 = $pfHistorique09;

        return $this;
    }

    public function getPfHistorique10(): ?int
    {
        return $this->pfHistorique10;
    }

    public function setPfHistorique10(?int $pfHistorique10): static
    {
        $this->pfHistorique10 = $pfHistorique10;

        return $this;
    }

    public function getPfHistorique11(): ?int
    {
        return $this->pfHistorique11;
    }

    public function setPfHistorique11(?int $pfHistorique11): static
    {
        $this->pfHistorique11 = $pfHistorique11;

        return $this;
    }

    public function getPfOrigine85(): ?int
    {
        return $this->pfOrigine85;
    }

    public function setPfOrigine85(?int $pfOrigine85): static
    {
        $this->pfOrigine85 = $pfOrigine85;

        return $this;
    }

    public function getPfOrigine86(): ?int
    {
        return $this->pfOrigine86;
    }

    public function setPfOrigine86(?int $pfOrigine86): static
    {
        $this->pfOrigine86 = $pfOrigine86;

        return $this;
    }

    public function getPfOrigine87(): ?int
    {
        return $this->pfOrigine87;
    }

    public function setPfOrigine87(?int $pfOrigine87): static
    {
        $this->pfOrigine87 = $pfOrigine87;

        return $this;
    }

    public function getPfOrigine88(): ?int
    {
        return $this->pfOrigine88;
    }

    public function setPfOrigine88(?int $pfOrigine88): static
    {
        $this->pfOrigine88 = $pfOrigine88;

        return $this;
    }
}
