<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\POrgastoRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'P_ORGASTO')]
#[ORM\Entity(repositoryClass: POrgastoRepository::class)]
class POrgasto
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "D_Valide", type: Types::SMALLINT, nullable: true)]
    private ?int $dValide = null;

    #[ORM\Column(name: "D_Coche01", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche01 = null;

    #[ORM\Column(name: "D_Coche02", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche02 = null;

    #[ORM\Column(name: "D_Coche03", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche03 = null;

    #[ORM\Column(name: "D_Coche04", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche04 = null;

    #[ORM\Column(name: "D_Coche05", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche05 = null;

    #[ORM\Column(name: "D_Coche06", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche06 = null;

    #[ORM\Column(name: "D_Coche07", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche07 = null;

    #[ORM\Column(name: "D_Coche08", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche08 = null;

    #[ORM\Column(name: "D_Coche09", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche09 = null;

    #[ORM\Column(name: "D_Coche10", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche10 = null;

    #[ORM\Column(name: "D_Coche11", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche11 = null;

    #[ORM\Column(name: "D_Coche12", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche12 = null;

    #[ORM\Column(name: "D_Coche13", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche13 = null;

    #[ORM\Column(name: "D_Coche14", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche14 = null;

    #[ORM\Column(name: "D_Coche15", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche15 = null;

    #[ORM\Column(name: "D_Coche16", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche16 = null;

    #[ORM\Column(name: "D_Coche17", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche17 = null;

    #[ORM\Column(name: "D_Coche18", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche18 = null;

    #[ORM\Column(name: "D_Coche19", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche19 = null;

    #[ORM\Column(name: "D_Coche20", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche20 = null;

    #[ORM\Column(name: "D_Coche21", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche21 = null;

    #[ORM\Column(name: "D_Coche22", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche22 = null;

    #[ORM\Column(name: "D_Coche23", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche23 = null;

    #[ORM\Column(name: "D_Coche24", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche24 = null;

    #[ORM\Column(name: "D_Coche25", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche25 = null;

    #[ORM\Column(name: "D_Coche26", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche26 = null;

    #[ORM\Column(name: "D_Coche27", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche27 = null;

    #[ORM\Column(name: "D_Coche28", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche28 = null;

    #[ORM\Column(name: "D_Coche29", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche29 = null;

    #[ORM\Column(name: "D_Coche30", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche30 = null;

    #[ORM\Column(name: "D_Coche31", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche31 = null;

    #[ORM\Column(name: "D_Coche32", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche32 = null;

    #[ORM\Column(name: "D_Coche33", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche33 = null;

    #[ORM\Column(name: "D_Coche34", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche34 = null;

    #[ORM\Column(name: "D_Coche35", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche35 = null;

    #[ORM\Column(name: "D_Coche36", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche36 = null;

    #[ORM\Column(name: "D_Coche37", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche37 = null;

    #[ORM\Column(name: "D_Coche38", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche38 = null;

    #[ORM\Column(name: "D_Coche39", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche39 = null;

    #[ORM\Column(name: "D_Coche40", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche40 = null;

    #[ORM\Column(name: "D_Coche41", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche41 = null;

    #[ORM\Column(name: "D_Coche42", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche42 = null;

    #[ORM\Column(name: "D_Coche43", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche43 = null;

    #[ORM\Column(name: "D_Coche44", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche44 = null;

    #[ORM\Column(name: "D_Coche45", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche45 = null;

    #[ORM\Column(name: "D_Coche46", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche46 = null;

    #[ORM\Column(name: "D_Coche47", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche47 = null;

    #[ORM\Column(name: "D_Coche48", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche48 = null;

    #[ORM\Column(name: "D_Coche49", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche49 = null;

    #[ORM\Column(name: "D_Coche50", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche50 = null;

    #[ORM\Column(name: "D_Coche51", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche51 = null;

    #[ORM\Column(name: "D_Coche52", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche52 = null;

    #[ORM\Column(name: "D_Coche53", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche53 = null;

    #[ORM\Column(name: "D_Coche54", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche54 = null;

    #[ORM\Column(name: "D_Coche55", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche55 = null;

    #[ORM\Column(name: "D_Coche56", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche56 = null;

    #[ORM\Column(name: "D_Coche57", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche57 = null;

    #[ORM\Column(name: "D_Coche58", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche58 = null;

    #[ORM\Column(name: "D_Coche59", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche59 = null;

    #[ORM\Column(name: "D_Coche60", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche60 = null;

    #[ORM\Column(name: "D_Coche61", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche61 = null;

    #[ORM\Column(name: "D_Coche62", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche62 = null;

    #[ORM\Column(name: "D_Coche63", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche63 = null;

    #[ORM\Column(name: "D_Coche64", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche64 = null;

    #[ORM\Column(name: "D_Coche65", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche65 = null;

    #[ORM\Column(name: "D_Coche66", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche66 = null;

    #[ORM\Column(name: "D_Coche67", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche67 = null;

    #[ORM\Column(name: "D_Coche68", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche68 = null;

    #[ORM\Column(name: "D_Coche69", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche69 = null;

    #[ORM\Column(name: "D_Coche70", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche70 = null;

    #[ORM\Column(name: "D_Coche71", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche71 = null;

    #[ORM\Column(name: "D_Coche72", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche72 = null;

    #[ORM\Column(name: "D_Coche73", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche73 = null;

    #[ORM\Column(name: "D_Coche74", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche74 = null;

    #[ORM\Column(name: "D_Coche75", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche75 = null;

    #[ORM\Column(name: "D_Coche76", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche76 = null;

    #[ORM\Column(name: "D_Coche77", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche77 = null;

    #[ORM\Column(name: "D_Coche78", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche78 = null;

    #[ORM\Column(name: "D_Coche79", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche79 = null;

    #[ORM\Column(name: "D_Coche80", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche80 = null;

    #[ORM\Column(name: "D_Coche81", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche81 = null;

    #[ORM\Column(name: "D_Coche82", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche82 = null;

    #[ORM\Column(name: "D_Coche83", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche83 = null;

    #[ORM\Column(name: "D_Coche84", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche84 = null;

    #[ORM\Column(name: "D_Coche85", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche85 = null;

    #[ORM\Column(name: "D_Coche86", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche86 = null;

    #[ORM\Column(name: "D_Coche87", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche87 = null;

    #[ORM\Column(name: "D_Coche88", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche88 = null;

    #[ORM\Column(name: "D_Coche89", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche89 = null;

    #[ORM\Column(name: "D_Coche90", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche90 = null;

    #[ORM\Column(name: "D_Coche91", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche91 = null;

    #[ORM\Column(name: "D_Coche92", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche92 = null;

    #[ORM\Column(name: "D_Coche93", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche93 = null;

    #[ORM\Column(name: "D_Coche94", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche94 = null;

    #[ORM\Column(name: "D_Coche95", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche95 = null;

    #[ORM\Column(name: "D_Coche96", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche96 = null;

    #[ORM\Column(name: "D_Coche97", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche97 = null;

    #[ORM\Column(name: "D_Coche98", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche98 = null;

    #[ORM\Column(name: "D_Coche99", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche99 = null;

    #[ORM\Column(name: "D_Coche100", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche100 = null;

    #[ORM\Column(name: "D_Coche101", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche101 = null;

    #[ORM\Column(name: "D_Coche102", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche102 = null;

    #[ORM\Column(name: "D_Coche103", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche103 = null;

    #[ORM\Column(name: "D_Coche104", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche104 = null;

    #[ORM\Column(name: "D_Coche105", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche105 = null;

    #[ORM\Column(name: "D_Coche106", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche106 = null;

    #[ORM\Column(name: "D_Coche107", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche107 = null;

    #[ORM\Column(name: "D_Coche108", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche108 = null;

    #[ORM\Column(name: "D_Coche109", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche109 = null;

    #[ORM\Column(name: "D_Coche110", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche110 = null;

    #[ORM\Column(name: "D_Coche111", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche111 = null;

    #[ORM\Column(name: "D_Coche112", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche112 = null;

    #[ORM\Column(name: "D_Coche113", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche113 = null;

    #[ORM\Column(name: "D_Coche114", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche114 = null;

    #[ORM\Column(name: "D_Coche115", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche115 = null;

    #[ORM\Column(name: "D_Coche116", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche116 = null;

    #[ORM\Column(name: "D_Coche117", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche117 = null;

    #[ORM\Column(name: "D_Coche118", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche118 = null;

    #[ORM\Column(name: "D_Coche119", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche119 = null;

    #[ORM\Column(name: "D_Coche120", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche120 = null;

    #[ORM\Column(name: "D_Coche121", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche121 = null;

    #[ORM\Column(name: "D_Coche122", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche122 = null;

    #[ORM\Column(name: "D_Coche123", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche123 = null;

    #[ORM\Column(name: "D_Coche124", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche124 = null;

    #[ORM\Column(name: "D_Coche125", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche125 = null;

    #[ORM\Column(name: "D_Coche126", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche126 = null;

    #[ORM\Column(name: "D_Coche127", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche127 = null;

    #[ORM\Column(name: "D_Coche128", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche128 = null;

    #[ORM\Column(name: "D_Coche129", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche129 = null;

    #[ORM\Column(name: "D_Coche130", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche130 = null;

    #[ORM\Column(name: "D_Coche131", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche131 = null;

    #[ORM\Column(name: "D_Coche132", type: Types::SMALLINT, nullable: true)]
    private ?int $dCoche132 = null;

    #[ORM\Column(name: "cbIndice", type: Types::SMALLINT, nullable: true)]
    private ?int $cbindice = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getDValide(): ?int
    {
        return $this->dValide;
    }

    public function setDValide(?int $dValide): static
    {
        $this->dValide = $dValide;

        return $this;
    }

    public function getDCoche01(): ?int
    {
        return $this->dCoche01;
    }

    public function setDCoche01(?int $dCoche01): static
    {
        $this->dCoche01 = $dCoche01;

        return $this;
    }

    public function getDCoche02(): ?int
    {
        return $this->dCoche02;
    }

    public function setDCoche02(?int $dCoche02): static
    {
        $this->dCoche02 = $dCoche02;

        return $this;
    }

    public function getDCoche03(): ?int
    {
        return $this->dCoche03;
    }

    public function setDCoche03(?int $dCoche03): static
    {
        $this->dCoche03 = $dCoche03;

        return $this;
    }

    public function getDCoche04(): ?int
    {
        return $this->dCoche04;
    }

    public function setDCoche04(?int $dCoche04): static
    {
        $this->dCoche04 = $dCoche04;

        return $this;
    }

    public function getDCoche05(): ?int
    {
        return $this->dCoche05;
    }

    public function setDCoche05(?int $dCoche05): static
    {
        $this->dCoche05 = $dCoche05;

        return $this;
    }

    public function getDCoche06(): ?int
    {
        return $this->dCoche06;
    }

    public function setDCoche06(?int $dCoche06): static
    {
        $this->dCoche06 = $dCoche06;

        return $this;
    }

    public function getDCoche07(): ?int
    {
        return $this->dCoche07;
    }

    public function setDCoche07(?int $dCoche07): static
    {
        $this->dCoche07 = $dCoche07;

        return $this;
    }

    public function getDCoche08(): ?int
    {
        return $this->dCoche08;
    }

    public function setDCoche08(?int $dCoche08): static
    {
        $this->dCoche08 = $dCoche08;

        return $this;
    }

    public function getDCoche09(): ?int
    {
        return $this->dCoche09;
    }

    public function setDCoche09(?int $dCoche09): static
    {
        $this->dCoche09 = $dCoche09;

        return $this;
    }

    public function getDCoche10(): ?int
    {
        return $this->dCoche10;
    }

    public function setDCoche10(?int $dCoche10): static
    {
        $this->dCoche10 = $dCoche10;

        return $this;
    }

    public function getDCoche11(): ?int
    {
        return $this->dCoche11;
    }

    public function setDCoche11(?int $dCoche11): static
    {
        $this->dCoche11 = $dCoche11;

        return $this;
    }

    public function getDCoche12(): ?int
    {
        return $this->dCoche12;
    }

    public function setDCoche12(?int $dCoche12): static
    {
        $this->dCoche12 = $dCoche12;

        return $this;
    }

    public function getDCoche13(): ?int
    {
        return $this->dCoche13;
    }

    public function setDCoche13(?int $dCoche13): static
    {
        $this->dCoche13 = $dCoche13;

        return $this;
    }

    public function getDCoche14(): ?int
    {
        return $this->dCoche14;
    }

    public function setDCoche14(?int $dCoche14): static
    {
        $this->dCoche14 = $dCoche14;

        return $this;
    }

    public function getDCoche15(): ?int
    {
        return $this->dCoche15;
    }

    public function setDCoche15(?int $dCoche15): static
    {
        $this->dCoche15 = $dCoche15;

        return $this;
    }

    public function getDCoche16(): ?int
    {
        return $this->dCoche16;
    }

    public function setDCoche16(?int $dCoche16): static
    {
        $this->dCoche16 = $dCoche16;

        return $this;
    }

    public function getDCoche17(): ?int
    {
        return $this->dCoche17;
    }

    public function setDCoche17(?int $dCoche17): static
    {
        $this->dCoche17 = $dCoche17;

        return $this;
    }

    public function getDCoche18(): ?int
    {
        return $this->dCoche18;
    }

    public function setDCoche18(?int $dCoche18): static
    {
        $this->dCoche18 = $dCoche18;

        return $this;
    }

    public function getDCoche19(): ?int
    {
        return $this->dCoche19;
    }

    public function setDCoche19(?int $dCoche19): static
    {
        $this->dCoche19 = $dCoche19;

        return $this;
    }

    public function getDCoche20(): ?int
    {
        return $this->dCoche20;
    }

    public function setDCoche20(?int $dCoche20): static
    {
        $this->dCoche20 = $dCoche20;

        return $this;
    }

    public function getDCoche21(): ?int
    {
        return $this->dCoche21;
    }

    public function setDCoche21(?int $dCoche21): static
    {
        $this->dCoche21 = $dCoche21;

        return $this;
    }

    public function getDCoche22(): ?int
    {
        return $this->dCoche22;
    }

    public function setDCoche22(?int $dCoche22): static
    {
        $this->dCoche22 = $dCoche22;

        return $this;
    }

    public function getDCoche23(): ?int
    {
        return $this->dCoche23;
    }

    public function setDCoche23(?int $dCoche23): static
    {
        $this->dCoche23 = $dCoche23;

        return $this;
    }

    public function getDCoche24(): ?int
    {
        return $this->dCoche24;
    }

    public function setDCoche24(?int $dCoche24): static
    {
        $this->dCoche24 = $dCoche24;

        return $this;
    }

    public function getDCoche25(): ?int
    {
        return $this->dCoche25;
    }

    public function setDCoche25(?int $dCoche25): static
    {
        $this->dCoche25 = $dCoche25;

        return $this;
    }

    public function getDCoche26(): ?int
    {
        return $this->dCoche26;
    }

    public function setDCoche26(?int $dCoche26): static
    {
        $this->dCoche26 = $dCoche26;

        return $this;
    }

    public function getDCoche27(): ?int
    {
        return $this->dCoche27;
    }

    public function setDCoche27(?int $dCoche27): static
    {
        $this->dCoche27 = $dCoche27;

        return $this;
    }

    public function getDCoche28(): ?int
    {
        return $this->dCoche28;
    }

    public function setDCoche28(?int $dCoche28): static
    {
        $this->dCoche28 = $dCoche28;

        return $this;
    }

    public function getDCoche29(): ?int
    {
        return $this->dCoche29;
    }

    public function setDCoche29(?int $dCoche29): static
    {
        $this->dCoche29 = $dCoche29;

        return $this;
    }

    public function getDCoche30(): ?int
    {
        return $this->dCoche30;
    }

    public function setDCoche30(?int $dCoche30): static
    {
        $this->dCoche30 = $dCoche30;

        return $this;
    }

    public function getDCoche31(): ?int
    {
        return $this->dCoche31;
    }

    public function setDCoche31(?int $dCoche31): static
    {
        $this->dCoche31 = $dCoche31;

        return $this;
    }

    public function getDCoche32(): ?int
    {
        return $this->dCoche32;
    }

    public function setDCoche32(?int $dCoche32): static
    {
        $this->dCoche32 = $dCoche32;

        return $this;
    }

    public function getDCoche33(): ?int
    {
        return $this->dCoche33;
    }

    public function setDCoche33(?int $dCoche33): static
    {
        $this->dCoche33 = $dCoche33;

        return $this;
    }

    public function getDCoche34(): ?int
    {
        return $this->dCoche34;
    }

    public function setDCoche34(?int $dCoche34): static
    {
        $this->dCoche34 = $dCoche34;

        return $this;
    }

    public function getDCoche35(): ?int
    {
        return $this->dCoche35;
    }

    public function setDCoche35(?int $dCoche35): static
    {
        $this->dCoche35 = $dCoche35;

        return $this;
    }

    public function getDCoche36(): ?int
    {
        return $this->dCoche36;
    }

    public function setDCoche36(?int $dCoche36): static
    {
        $this->dCoche36 = $dCoche36;

        return $this;
    }

    public function getDCoche37(): ?int
    {
        return $this->dCoche37;
    }

    public function setDCoche37(?int $dCoche37): static
    {
        $this->dCoche37 = $dCoche37;

        return $this;
    }

    public function getDCoche38(): ?int
    {
        return $this->dCoche38;
    }

    public function setDCoche38(?int $dCoche38): static
    {
        $this->dCoche38 = $dCoche38;

        return $this;
    }

    public function getDCoche39(): ?int
    {
        return $this->dCoche39;
    }

    public function setDCoche39(?int $dCoche39): static
    {
        $this->dCoche39 = $dCoche39;

        return $this;
    }

    public function getDCoche40(): ?int
    {
        return $this->dCoche40;
    }

    public function setDCoche40(?int $dCoche40): static
    {
        $this->dCoche40 = $dCoche40;

        return $this;
    }

    public function getDCoche41(): ?int
    {
        return $this->dCoche41;
    }

    public function setDCoche41(?int $dCoche41): static
    {
        $this->dCoche41 = $dCoche41;

        return $this;
    }

    public function getDCoche42(): ?int
    {
        return $this->dCoche42;
    }

    public function setDCoche42(?int $dCoche42): static
    {
        $this->dCoche42 = $dCoche42;

        return $this;
    }

    public function getDCoche43(): ?int
    {
        return $this->dCoche43;
    }

    public function setDCoche43(?int $dCoche43): static
    {
        $this->dCoche43 = $dCoche43;

        return $this;
    }

    public function getDCoche44(): ?int
    {
        return $this->dCoche44;
    }

    public function setDCoche44(?int $dCoche44): static
    {
        $this->dCoche44 = $dCoche44;

        return $this;
    }

    public function getDCoche45(): ?int
    {
        return $this->dCoche45;
    }

    public function setDCoche45(?int $dCoche45): static
    {
        $this->dCoche45 = $dCoche45;

        return $this;
    }

    public function getDCoche46(): ?int
    {
        return $this->dCoche46;
    }

    public function setDCoche46(?int $dCoche46): static
    {
        $this->dCoche46 = $dCoche46;

        return $this;
    }

    public function getDCoche47(): ?int
    {
        return $this->dCoche47;
    }

    public function setDCoche47(?int $dCoche47): static
    {
        $this->dCoche47 = $dCoche47;

        return $this;
    }

    public function getDCoche48(): ?int
    {
        return $this->dCoche48;
    }

    public function setDCoche48(?int $dCoche48): static
    {
        $this->dCoche48 = $dCoche48;

        return $this;
    }

    public function getDCoche49(): ?int
    {
        return $this->dCoche49;
    }

    public function setDCoche49(?int $dCoche49): static
    {
        $this->dCoche49 = $dCoche49;

        return $this;
    }

    public function getDCoche50(): ?int
    {
        return $this->dCoche50;
    }

    public function setDCoche50(?int $dCoche50): static
    {
        $this->dCoche50 = $dCoche50;

        return $this;
    }

    public function getDCoche51(): ?int
    {
        return $this->dCoche51;
    }

    public function setDCoche51(?int $dCoche51): static
    {
        $this->dCoche51 = $dCoche51;

        return $this;
    }

    public function getDCoche52(): ?int
    {
        return $this->dCoche52;
    }

    public function setDCoche52(?int $dCoche52): static
    {
        $this->dCoche52 = $dCoche52;

        return $this;
    }

    public function getDCoche53(): ?int
    {
        return $this->dCoche53;
    }

    public function setDCoche53(?int $dCoche53): static
    {
        $this->dCoche53 = $dCoche53;

        return $this;
    }

    public function getDCoche54(): ?int
    {
        return $this->dCoche54;
    }

    public function setDCoche54(?int $dCoche54): static
    {
        $this->dCoche54 = $dCoche54;

        return $this;
    }

    public function getDCoche55(): ?int
    {
        return $this->dCoche55;
    }

    public function setDCoche55(?int $dCoche55): static
    {
        $this->dCoche55 = $dCoche55;

        return $this;
    }

    public function getDCoche56(): ?int
    {
        return $this->dCoche56;
    }

    public function setDCoche56(?int $dCoche56): static
    {
        $this->dCoche56 = $dCoche56;

        return $this;
    }

    public function getDCoche57(): ?int
    {
        return $this->dCoche57;
    }

    public function setDCoche57(?int $dCoche57): static
    {
        $this->dCoche57 = $dCoche57;

        return $this;
    }

    public function getDCoche58(): ?int
    {
        return $this->dCoche58;
    }

    public function setDCoche58(?int $dCoche58): static
    {
        $this->dCoche58 = $dCoche58;

        return $this;
    }

    public function getDCoche59(): ?int
    {
        return $this->dCoche59;
    }

    public function setDCoche59(?int $dCoche59): static
    {
        $this->dCoche59 = $dCoche59;

        return $this;
    }

    public function getDCoche60(): ?int
    {
        return $this->dCoche60;
    }

    public function setDCoche60(?int $dCoche60): static
    {
        $this->dCoche60 = $dCoche60;

        return $this;
    }

    public function getDCoche61(): ?int
    {
        return $this->dCoche61;
    }

    public function setDCoche61(?int $dCoche61): static
    {
        $this->dCoche61 = $dCoche61;

        return $this;
    }

    public function getDCoche62(): ?int
    {
        return $this->dCoche62;
    }

    public function setDCoche62(?int $dCoche62): static
    {
        $this->dCoche62 = $dCoche62;

        return $this;
    }

    public function getDCoche63(): ?int
    {
        return $this->dCoche63;
    }

    public function setDCoche63(?int $dCoche63): static
    {
        $this->dCoche63 = $dCoche63;

        return $this;
    }

    public function getDCoche64(): ?int
    {
        return $this->dCoche64;
    }

    public function setDCoche64(?int $dCoche64): static
    {
        $this->dCoche64 = $dCoche64;

        return $this;
    }

    public function getDCoche65(): ?int
    {
        return $this->dCoche65;
    }

    public function setDCoche65(?int $dCoche65): static
    {
        $this->dCoche65 = $dCoche65;

        return $this;
    }

    public function getDCoche66(): ?int
    {
        return $this->dCoche66;
    }

    public function setDCoche66(?int $dCoche66): static
    {
        $this->dCoche66 = $dCoche66;

        return $this;
    }

    public function getDCoche67(): ?int
    {
        return $this->dCoche67;
    }

    public function setDCoche67(?int $dCoche67): static
    {
        $this->dCoche67 = $dCoche67;

        return $this;
    }

    public function getDCoche68(): ?int
    {
        return $this->dCoche68;
    }

    public function setDCoche68(?int $dCoche68): static
    {
        $this->dCoche68 = $dCoche68;

        return $this;
    }

    public function getDCoche69(): ?int
    {
        return $this->dCoche69;
    }

    public function setDCoche69(?int $dCoche69): static
    {
        $this->dCoche69 = $dCoche69;

        return $this;
    }

    public function getDCoche70(): ?int
    {
        return $this->dCoche70;
    }

    public function setDCoche70(?int $dCoche70): static
    {
        $this->dCoche70 = $dCoche70;

        return $this;
    }

    public function getDCoche71(): ?int
    {
        return $this->dCoche71;
    }

    public function setDCoche71(?int $dCoche71): static
    {
        $this->dCoche71 = $dCoche71;

        return $this;
    }

    public function getDCoche72(): ?int
    {
        return $this->dCoche72;
    }

    public function setDCoche72(?int $dCoche72): static
    {
        $this->dCoche72 = $dCoche72;

        return $this;
    }

    public function getDCoche73(): ?int
    {
        return $this->dCoche73;
    }

    public function setDCoche73(?int $dCoche73): static
    {
        $this->dCoche73 = $dCoche73;

        return $this;
    }

    public function getDCoche74(): ?int
    {
        return $this->dCoche74;
    }

    public function setDCoche74(?int $dCoche74): static
    {
        $this->dCoche74 = $dCoche74;

        return $this;
    }

    public function getDCoche75(): ?int
    {
        return $this->dCoche75;
    }

    public function setDCoche75(?int $dCoche75): static
    {
        $this->dCoche75 = $dCoche75;

        return $this;
    }

    public function getDCoche76(): ?int
    {
        return $this->dCoche76;
    }

    public function setDCoche76(?int $dCoche76): static
    {
        $this->dCoche76 = $dCoche76;

        return $this;
    }

    public function getDCoche77(): ?int
    {
        return $this->dCoche77;
    }

    public function setDCoche77(?int $dCoche77): static
    {
        $this->dCoche77 = $dCoche77;

        return $this;
    }

    public function getDCoche78(): ?int
    {
        return $this->dCoche78;
    }

    public function setDCoche78(?int $dCoche78): static
    {
        $this->dCoche78 = $dCoche78;

        return $this;
    }

    public function getDCoche79(): ?int
    {
        return $this->dCoche79;
    }

    public function setDCoche79(?int $dCoche79): static
    {
        $this->dCoche79 = $dCoche79;

        return $this;
    }

    public function getDCoche80(): ?int
    {
        return $this->dCoche80;
    }

    public function setDCoche80(?int $dCoche80): static
    {
        $this->dCoche80 = $dCoche80;

        return $this;
    }

    public function getDCoche81(): ?int
    {
        return $this->dCoche81;
    }

    public function setDCoche81(?int $dCoche81): static
    {
        $this->dCoche81 = $dCoche81;

        return $this;
    }

    public function getDCoche82(): ?int
    {
        return $this->dCoche82;
    }

    public function setDCoche82(?int $dCoche82): static
    {
        $this->dCoche82 = $dCoche82;

        return $this;
    }

    public function getDCoche83(): ?int
    {
        return $this->dCoche83;
    }

    public function setDCoche83(?int $dCoche83): static
    {
        $this->dCoche83 = $dCoche83;

        return $this;
    }

    public function getDCoche84(): ?int
    {
        return $this->dCoche84;
    }

    public function setDCoche84(?int $dCoche84): static
    {
        $this->dCoche84 = $dCoche84;

        return $this;
    }

    public function getDCoche85(): ?int
    {
        return $this->dCoche85;
    }

    public function setDCoche85(?int $dCoche85): static
    {
        $this->dCoche85 = $dCoche85;

        return $this;
    }

    public function getDCoche86(): ?int
    {
        return $this->dCoche86;
    }

    public function setDCoche86(?int $dCoche86): static
    {
        $this->dCoche86 = $dCoche86;

        return $this;
    }

    public function getDCoche87(): ?int
    {
        return $this->dCoche87;
    }

    public function setDCoche87(?int $dCoche87): static
    {
        $this->dCoche87 = $dCoche87;

        return $this;
    }

    public function getDCoche88(): ?int
    {
        return $this->dCoche88;
    }

    public function setDCoche88(?int $dCoche88): static
    {
        $this->dCoche88 = $dCoche88;

        return $this;
    }

    public function getDCoche89(): ?int
    {
        return $this->dCoche89;
    }

    public function setDCoche89(?int $dCoche89): static
    {
        $this->dCoche89 = $dCoche89;

        return $this;
    }

    public function getDCoche90(): ?int
    {
        return $this->dCoche90;
    }

    public function setDCoche90(?int $dCoche90): static
    {
        $this->dCoche90 = $dCoche90;

        return $this;
    }

    public function getDCoche91(): ?int
    {
        return $this->dCoche91;
    }

    public function setDCoche91(?int $dCoche91): static
    {
        $this->dCoche91 = $dCoche91;

        return $this;
    }

    public function getDCoche92(): ?int
    {
        return $this->dCoche92;
    }

    public function setDCoche92(?int $dCoche92): static
    {
        $this->dCoche92 = $dCoche92;

        return $this;
    }

    public function getDCoche93(): ?int
    {
        return $this->dCoche93;
    }

    public function setDCoche93(?int $dCoche93): static
    {
        $this->dCoche93 = $dCoche93;

        return $this;
    }

    public function getDCoche94(): ?int
    {
        return $this->dCoche94;
    }

    public function setDCoche94(?int $dCoche94): static
    {
        $this->dCoche94 = $dCoche94;

        return $this;
    }

    public function getDCoche95(): ?int
    {
        return $this->dCoche95;
    }

    public function setDCoche95(?int $dCoche95): static
    {
        $this->dCoche95 = $dCoche95;

        return $this;
    }

    public function getDCoche96(): ?int
    {
        return $this->dCoche96;
    }

    public function setDCoche96(?int $dCoche96): static
    {
        $this->dCoche96 = $dCoche96;

        return $this;
    }

    public function getDCoche97(): ?int
    {
        return $this->dCoche97;
    }

    public function setDCoche97(?int $dCoche97): static
    {
        $this->dCoche97 = $dCoche97;

        return $this;
    }

    public function getDCoche98(): ?int
    {
        return $this->dCoche98;
    }

    public function setDCoche98(?int $dCoche98): static
    {
        $this->dCoche98 = $dCoche98;

        return $this;
    }

    public function getDCoche99(): ?int
    {
        return $this->dCoche99;
    }

    public function setDCoche99(?int $dCoche99): static
    {
        $this->dCoche99 = $dCoche99;

        return $this;
    }

    public function getDCoche100(): ?int
    {
        return $this->dCoche100;
    }

    public function setDCoche100(?int $dCoche100): static
    {
        $this->dCoche100 = $dCoche100;

        return $this;
    }

    public function getDCoche101(): ?int
    {
        return $this->dCoche101;
    }

    public function setDCoche101(?int $dCoche101): static
    {
        $this->dCoche101 = $dCoche101;

        return $this;
    }

    public function getDCoche102(): ?int
    {
        return $this->dCoche102;
    }

    public function setDCoche102(?int $dCoche102): static
    {
        $this->dCoche102 = $dCoche102;

        return $this;
    }

    public function getDCoche103(): ?int
    {
        return $this->dCoche103;
    }

    public function setDCoche103(?int $dCoche103): static
    {
        $this->dCoche103 = $dCoche103;

        return $this;
    }

    public function getDCoche104(): ?int
    {
        return $this->dCoche104;
    }

    public function setDCoche104(?int $dCoche104): static
    {
        $this->dCoche104 = $dCoche104;

        return $this;
    }

    public function getDCoche105(): ?int
    {
        return $this->dCoche105;
    }

    public function setDCoche105(?int $dCoche105): static
    {
        $this->dCoche105 = $dCoche105;

        return $this;
    }

    public function getDCoche106(): ?int
    {
        return $this->dCoche106;
    }

    public function setDCoche106(?int $dCoche106): static
    {
        $this->dCoche106 = $dCoche106;

        return $this;
    }

    public function getDCoche107(): ?int
    {
        return $this->dCoche107;
    }

    public function setDCoche107(?int $dCoche107): static
    {
        $this->dCoche107 = $dCoche107;

        return $this;
    }

    public function getDCoche108(): ?int
    {
        return $this->dCoche108;
    }

    public function setDCoche108(?int $dCoche108): static
    {
        $this->dCoche108 = $dCoche108;

        return $this;
    }

    public function getDCoche109(): ?int
    {
        return $this->dCoche109;
    }

    public function setDCoche109(?int $dCoche109): static
    {
        $this->dCoche109 = $dCoche109;

        return $this;
    }

    public function getDCoche110(): ?int
    {
        return $this->dCoche110;
    }

    public function setDCoche110(?int $dCoche110): static
    {
        $this->dCoche110 = $dCoche110;

        return $this;
    }

    public function getDCoche111(): ?int
    {
        return $this->dCoche111;
    }

    public function setDCoche111(?int $dCoche111): static
    {
        $this->dCoche111 = $dCoche111;

        return $this;
    }

    public function getDCoche112(): ?int
    {
        return $this->dCoche112;
    }

    public function setDCoche112(?int $dCoche112): static
    {
        $this->dCoche112 = $dCoche112;

        return $this;
    }

    public function getDCoche113(): ?int
    {
        return $this->dCoche113;
    }

    public function setDCoche113(?int $dCoche113): static
    {
        $this->dCoche113 = $dCoche113;

        return $this;
    }

    public function getDCoche114(): ?int
    {
        return $this->dCoche114;
    }

    public function setDCoche114(?int $dCoche114): static
    {
        $this->dCoche114 = $dCoche114;

        return $this;
    }

    public function getDCoche115(): ?int
    {
        return $this->dCoche115;
    }

    public function setDCoche115(?int $dCoche115): static
    {
        $this->dCoche115 = $dCoche115;

        return $this;
    }

    public function getDCoche116(): ?int
    {
        return $this->dCoche116;
    }

    public function setDCoche116(?int $dCoche116): static
    {
        $this->dCoche116 = $dCoche116;

        return $this;
    }

    public function getDCoche117(): ?int
    {
        return $this->dCoche117;
    }

    public function setDCoche117(?int $dCoche117): static
    {
        $this->dCoche117 = $dCoche117;

        return $this;
    }

    public function getDCoche118(): ?int
    {
        return $this->dCoche118;
    }

    public function setDCoche118(?int $dCoche118): static
    {
        $this->dCoche118 = $dCoche118;

        return $this;
    }

    public function getDCoche119(): ?int
    {
        return $this->dCoche119;
    }

    public function setDCoche119(?int $dCoche119): static
    {
        $this->dCoche119 = $dCoche119;

        return $this;
    }

    public function getDCoche120(): ?int
    {
        return $this->dCoche120;
    }

    public function setDCoche120(?int $dCoche120): static
    {
        $this->dCoche120 = $dCoche120;

        return $this;
    }

    public function getDCoche121(): ?int
    {
        return $this->dCoche121;
    }

    public function setDCoche121(?int $dCoche121): static
    {
        $this->dCoche121 = $dCoche121;

        return $this;
    }

    public function getDCoche122(): ?int
    {
        return $this->dCoche122;
    }

    public function setDCoche122(?int $dCoche122): static
    {
        $this->dCoche122 = $dCoche122;

        return $this;
    }

    public function getDCoche123(): ?int
    {
        return $this->dCoche123;
    }

    public function setDCoche123(?int $dCoche123): static
    {
        $this->dCoche123 = $dCoche123;

        return $this;
    }

    public function getDCoche124(): ?int
    {
        return $this->dCoche124;
    }

    public function setDCoche124(?int $dCoche124): static
    {
        $this->dCoche124 = $dCoche124;

        return $this;
    }

    public function getDCoche125(): ?int
    {
        return $this->dCoche125;
    }

    public function setDCoche125(?int $dCoche125): static
    {
        $this->dCoche125 = $dCoche125;

        return $this;
    }

    public function getDCoche126(): ?int
    {
        return $this->dCoche126;
    }

    public function setDCoche126(?int $dCoche126): static
    {
        $this->dCoche126 = $dCoche126;

        return $this;
    }

    public function getDCoche127(): ?int
    {
        return $this->dCoche127;
    }

    public function setDCoche127(?int $dCoche127): static
    {
        $this->dCoche127 = $dCoche127;

        return $this;
    }

    public function getDCoche128(): ?int
    {
        return $this->dCoche128;
    }

    public function setDCoche128(?int $dCoche128): static
    {
        $this->dCoche128 = $dCoche128;

        return $this;
    }

    public function getDCoche129(): ?int
    {
        return $this->dCoche129;
    }

    public function setDCoche129(?int $dCoche129): static
    {
        $this->dCoche129 = $dCoche129;

        return $this;
    }

    public function getDCoche130(): ?int
    {
        return $this->dCoche130;
    }

    public function setDCoche130(?int $dCoche130): static
    {
        $this->dCoche130 = $dCoche130;

        return $this;
    }

    public function getDCoche131(): ?int
    {
        return $this->dCoche131;
    }

    public function setDCoche131(?int $dCoche131): static
    {
        $this->dCoche131 = $dCoche131;

        return $this;
    }

    public function getDCoche132(): ?int
    {
        return $this->dCoche132;
    }

    public function setDCoche132(?int $dCoche132): static
    {
        $this->dCoche132 = $dCoche132;

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
