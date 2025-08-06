<?php

namespace App\Entity\Nd;

use App\Repository\Nd\PColonncptaRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'P_COLONNCPTA')]
#[ORM\Entity(repositoryClass: PColonncptaRepository::class)]
class PColonncpta
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "C_Coche01", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche01 = null;

    #[ORM\Column(name: "C_Coche02", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche02 = null;

    #[ORM\Column(name: "C_Coche03", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche03 = null;

    #[ORM\Column(name: "C_Coche04", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche04 = null;

    #[ORM\Column(name: "C_Coche05", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche05 = null;

    #[ORM\Column(name: "C_Coche06", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche06 = null;

    #[ORM\Column(name: "C_Coche07", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche07 = null;

    #[ORM\Column(name: "C_Coche08", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche08 = null;

    #[ORM\Column(name: "C_Coche09", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche09 = null;

    #[ORM\Column(name: "C_Coche10", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche10 = null;

    #[ORM\Column(name: "C_Coche11", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche11 = null;

    #[ORM\Column(name: "C_Coche12", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche12 = null;

    #[ORM\Column(name: "C_Coche13", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche13 = null;

    #[ORM\Column(name: "C_Coche14", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche14 = null;

    #[ORM\Column(name: "C_Coche15", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche15 = null;

    #[ORM\Column(name: "C_Coche16", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche16 = null;

    #[ORM\Column(name: "C_Coche17", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche17 = null;

    #[ORM\Column(name: "C_Coche18", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche18 = null;

    #[ORM\Column(name: "C_Coche19", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche19 = null;

    #[ORM\Column(name: "C_Coche20", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche20 = null;

    #[ORM\Column(name: "C_Coche21", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche21 = null;

    #[ORM\Column(name: "C_Coche22", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche22 = null;

    #[ORM\Column(name: "C_Coche23", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche23 = null;

    #[ORM\Column(name: "C_Coche24", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche24 = null;

    #[ORM\Column(name: "C_Coche25", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche25 = null;

    #[ORM\Column(name: "C_Coche26", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche26 = null;

    #[ORM\Column(name: "C_Coche27", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche27 = null;

    #[ORM\Column(name: "C_Coche28", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche28 = null;

    #[ORM\Column(name: "C_Coche29", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche29 = null;

    #[ORM\Column(name: "C_Coche30", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche30 = null;

    #[ORM\Column(name: "C_Coche31", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche31 = null;

    #[ORM\Column(name: "C_Coche32", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche32 = null;

    #[ORM\Column(name: "C_Coche33", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche33 = null;

    #[ORM\Column(name: "C_Coche34", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche34 = null;

    #[ORM\Column(name: "C_Coche35", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche35 = null;

    #[ORM\Column(name: "C_Coche36", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche36 = null;

    #[ORM\Column(name: "C_Coche37", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche37 = null;

    #[ORM\Column(name: "C_Coche38", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche38 = null;

    #[ORM\Column(name: "C_Coche39", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche39 = null;

    #[ORM\Column(name: "C_Coche40", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche40 = null;

    #[ORM\Column(name: "C_Coche41", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche41 = null;

    #[ORM\Column(name: "C_Coche42", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche42 = null;

    #[ORM\Column(name: "C_Coche43", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche43 = null;

    #[ORM\Column(name: "C_Coche44", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche44 = null;

    #[ORM\Column(name: "C_Coche45", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche45 = null;

    #[ORM\Column(name: "C_Coche46", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche46 = null;

    #[ORM\Column(name: "C_Coche47", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche47 = null;

    #[ORM\Column(name: "C_Coche48", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche48 = null;

    #[ORM\Column(name: "C_Coche49", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche49 = null;

    #[ORM\Column(name: "C_Coche50", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche50 = null;

    #[ORM\Column(name: "C_Coche51", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche51 = null;

    #[ORM\Column(name: "C_Coche52", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche52 = null;

    #[ORM\Column(name: "C_Coche53", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche53 = null;

    #[ORM\Column(name: "C_Coche54", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche54 = null;

    #[ORM\Column(name: "C_Coche55", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche55 = null;

    #[ORM\Column(name: "C_Coche56", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche56 = null;

    #[ORM\Column(name: "C_Coche57", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche57 = null;

    #[ORM\Column(name: "C_Coche58", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche58 = null;

    #[ORM\Column(name: "C_Coche59", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche59 = null;

    #[ORM\Column(name: "C_Coche60", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche60 = null;

    #[ORM\Column(name: "C_Coche61", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche61 = null;

    #[ORM\Column(name: "C_Coche62", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche62 = null;

    #[ORM\Column(name: "C_Coche63", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche63 = null;

    #[ORM\Column(name: "C_Coche64", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche64 = null;

    #[ORM\Column(name: "C_Coche65", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche65 = null;

    #[ORM\Column(name: "C_Coche66", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche66 = null;

    #[ORM\Column(name: "C_Coche67", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche67 = null;

    #[ORM\Column(name: "C_Coche68", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche68 = null;

    #[ORM\Column(name: "C_Coche69", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche69 = null;

    #[ORM\Column(name: "C_Coche70", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche70 = null;

    #[ORM\Column(name: "C_Coche71", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche71 = null;

    #[ORM\Column(name: "C_Coche72", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche72 = null;

    #[ORM\Column(name: "C_Coche73", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche73 = null;

    #[ORM\Column(name: "C_Coche74", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche74 = null;

    #[ORM\Column(name: "C_Coche75", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche75 = null;

    #[ORM\Column(name: "C_Coche76", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche76 = null;

    #[ORM\Column(name: "C_Coche77", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche77 = null;

    #[ORM\Column(name: "C_Coche78", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche78 = null;

    #[ORM\Column(name: "C_Coche79", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche79 = null;

    #[ORM\Column(name: "C_Coche80", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche80 = null;

    #[ORM\Column(name: "C_Coche81", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche81 = null;

    #[ORM\Column(name: "C_Coche82", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche82 = null;

    #[ORM\Column(name: "C_Coche83", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche83 = null;

    #[ORM\Column(name: "C_Coche84", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche84 = null;

    #[ORM\Column(name: "C_Coche85", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche85 = null;

    #[ORM\Column(name: "C_Coche86", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche86 = null;

    #[ORM\Column(name: "C_Coche87", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche87 = null;

    #[ORM\Column(name: "C_Coche88", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche88 = null;

    #[ORM\Column(name: "C_Coche89", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche89 = null;

    #[ORM\Column(name: "C_Coche90", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche90 = null;

    #[ORM\Column(name: "C_Coche91", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche91 = null;

    #[ORM\Column(name: "C_Coche92", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche92 = null;

    #[ORM\Column(name: "C_Coche93", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche93 = null;

    #[ORM\Column(name: "C_Coche94", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche94 = null;

    #[ORM\Column(name: "C_Coche95", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche95 = null;

    #[ORM\Column(name: "C_Coche96", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche96 = null;

    #[ORM\Column(name: "C_Coche97", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche97 = null;

    #[ORM\Column(name: "C_Coche98", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche98 = null;

    #[ORM\Column(name: "C_Coche99", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche99 = null;

    #[ORM\Column(name: "C_Coche100", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche100 = null;

    #[ORM\Column(name: "C_Coche101", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche101 = null;

    #[ORM\Column(name: "C_Coche102", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche102 = null;

    #[ORM\Column(name: "C_Coche103", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche103 = null;

    #[ORM\Column(name: "C_Coche104", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche104 = null;

    #[ORM\Column(name: "C_Coche105", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche105 = null;

    #[ORM\Column(name: "C_Coche106", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche106 = null;

    #[ORM\Column(name: "C_Coche107", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche107 = null;

    #[ORM\Column(name: "C_Coche108", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche108 = null;

    #[ORM\Column(name: "C_Coche109", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche109 = null;

    #[ORM\Column(name: "C_Coche110", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche110 = null;

    #[ORM\Column(name: "C_Coche111", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche111 = null;

    #[ORM\Column(name: "C_Coche112", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche112 = null;

    #[ORM\Column(name: "C_Coche113", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche113 = null;

    #[ORM\Column(name: "C_Coche114", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche114 = null;

    #[ORM\Column(name: "C_Coche115", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche115 = null;

    #[ORM\Column(name: "C_Coche116", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche116 = null;

    #[ORM\Column(name: "C_Coche117", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche117 = null;

    #[ORM\Column(name: "C_Coche118", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche118 = null;

    #[ORM\Column(name: "C_Coche119", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche119 = null;

    #[ORM\Column(name: "C_Coche120", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche120 = null;

    #[ORM\Column(name: "C_Coche121", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche121 = null;

    #[ORM\Column(name: "C_Coche122", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche122 = null;

    #[ORM\Column(name: "C_Coche123", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche123 = null;

    #[ORM\Column(name: "C_Coche124", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche124 = null;

    #[ORM\Column(name: "cbIndice", type: Types::SMALLINT, nullable: true)]
    private ?int $cbindice = null;

    #[ORM\Column(name: "C_Coche125", type: Types::SMALLINT, nullable: true)]
    private ?int $cCoche125 = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getCCoche01(): ?int
    {
        return $this->cCoche01;
    }

    public function setCCoche01(?int $cCoche01): static
    {
        $this->cCoche01 = $cCoche01;

        return $this;
    }

    public function getCCoche02(): ?int
    {
        return $this->cCoche02;
    }

    public function setCCoche02(?int $cCoche02): static
    {
        $this->cCoche02 = $cCoche02;

        return $this;
    }

    public function getCCoche03(): ?int
    {
        return $this->cCoche03;
    }

    public function setCCoche03(?int $cCoche03): static
    {
        $this->cCoche03 = $cCoche03;

        return $this;
    }

    public function getCCoche04(): ?int
    {
        return $this->cCoche04;
    }

    public function setCCoche04(?int $cCoche04): static
    {
        $this->cCoche04 = $cCoche04;

        return $this;
    }

    public function getCCoche05(): ?int
    {
        return $this->cCoche05;
    }

    public function setCCoche05(?int $cCoche05): static
    {
        $this->cCoche05 = $cCoche05;

        return $this;
    }

    public function getCCoche06(): ?int
    {
        return $this->cCoche06;
    }

    public function setCCoche06(?int $cCoche06): static
    {
        $this->cCoche06 = $cCoche06;

        return $this;
    }

    public function getCCoche07(): ?int
    {
        return $this->cCoche07;
    }

    public function setCCoche07(?int $cCoche07): static
    {
        $this->cCoche07 = $cCoche07;

        return $this;
    }

    public function getCCoche08(): ?int
    {
        return $this->cCoche08;
    }

    public function setCCoche08(?int $cCoche08): static
    {
        $this->cCoche08 = $cCoche08;

        return $this;
    }

    public function getCCoche09(): ?int
    {
        return $this->cCoche09;
    }

    public function setCCoche09(?int $cCoche09): static
    {
        $this->cCoche09 = $cCoche09;

        return $this;
    }

    public function getCCoche10(): ?int
    {
        return $this->cCoche10;
    }

    public function setCCoche10(?int $cCoche10): static
    {
        $this->cCoche10 = $cCoche10;

        return $this;
    }

    public function getCCoche11(): ?int
    {
        return $this->cCoche11;
    }

    public function setCCoche11(?int $cCoche11): static
    {
        $this->cCoche11 = $cCoche11;

        return $this;
    }

    public function getCCoche12(): ?int
    {
        return $this->cCoche12;
    }

    public function setCCoche12(?int $cCoche12): static
    {
        $this->cCoche12 = $cCoche12;

        return $this;
    }

    public function getCCoche13(): ?int
    {
        return $this->cCoche13;
    }

    public function setCCoche13(?int $cCoche13): static
    {
        $this->cCoche13 = $cCoche13;

        return $this;
    }

    public function getCCoche14(): ?int
    {
        return $this->cCoche14;
    }

    public function setCCoche14(?int $cCoche14): static
    {
        $this->cCoche14 = $cCoche14;

        return $this;
    }

    public function getCCoche15(): ?int
    {
        return $this->cCoche15;
    }

    public function setCCoche15(?int $cCoche15): static
    {
        $this->cCoche15 = $cCoche15;

        return $this;
    }

    public function getCCoche16(): ?int
    {
        return $this->cCoche16;
    }

    public function setCCoche16(?int $cCoche16): static
    {
        $this->cCoche16 = $cCoche16;

        return $this;
    }

    public function getCCoche17(): ?int
    {
        return $this->cCoche17;
    }

    public function setCCoche17(?int $cCoche17): static
    {
        $this->cCoche17 = $cCoche17;

        return $this;
    }

    public function getCCoche18(): ?int
    {
        return $this->cCoche18;
    }

    public function setCCoche18(?int $cCoche18): static
    {
        $this->cCoche18 = $cCoche18;

        return $this;
    }

    public function getCCoche19(): ?int
    {
        return $this->cCoche19;
    }

    public function setCCoche19(?int $cCoche19): static
    {
        $this->cCoche19 = $cCoche19;

        return $this;
    }

    public function getCCoche20(): ?int
    {
        return $this->cCoche20;
    }

    public function setCCoche20(?int $cCoche20): static
    {
        $this->cCoche20 = $cCoche20;

        return $this;
    }

    public function getCCoche21(): ?int
    {
        return $this->cCoche21;
    }

    public function setCCoche21(?int $cCoche21): static
    {
        $this->cCoche21 = $cCoche21;

        return $this;
    }

    public function getCCoche22(): ?int
    {
        return $this->cCoche22;
    }

    public function setCCoche22(?int $cCoche22): static
    {
        $this->cCoche22 = $cCoche22;

        return $this;
    }

    public function getCCoche23(): ?int
    {
        return $this->cCoche23;
    }

    public function setCCoche23(?int $cCoche23): static
    {
        $this->cCoche23 = $cCoche23;

        return $this;
    }

    public function getCCoche24(): ?int
    {
        return $this->cCoche24;
    }

    public function setCCoche24(?int $cCoche24): static
    {
        $this->cCoche24 = $cCoche24;

        return $this;
    }

    public function getCCoche25(): ?int
    {
        return $this->cCoche25;
    }

    public function setCCoche25(?int $cCoche25): static
    {
        $this->cCoche25 = $cCoche25;

        return $this;
    }

    public function getCCoche26(): ?int
    {
        return $this->cCoche26;
    }

    public function setCCoche26(?int $cCoche26): static
    {
        $this->cCoche26 = $cCoche26;

        return $this;
    }

    public function getCCoche27(): ?int
    {
        return $this->cCoche27;
    }

    public function setCCoche27(?int $cCoche27): static
    {
        $this->cCoche27 = $cCoche27;

        return $this;
    }

    public function getCCoche28(): ?int
    {
        return $this->cCoche28;
    }

    public function setCCoche28(?int $cCoche28): static
    {
        $this->cCoche28 = $cCoche28;

        return $this;
    }

    public function getCCoche29(): ?int
    {
        return $this->cCoche29;
    }

    public function setCCoche29(?int $cCoche29): static
    {
        $this->cCoche29 = $cCoche29;

        return $this;
    }

    public function getCCoche30(): ?int
    {
        return $this->cCoche30;
    }

    public function setCCoche30(?int $cCoche30): static
    {
        $this->cCoche30 = $cCoche30;

        return $this;
    }

    public function getCCoche31(): ?int
    {
        return $this->cCoche31;
    }

    public function setCCoche31(?int $cCoche31): static
    {
        $this->cCoche31 = $cCoche31;

        return $this;
    }

    public function getCCoche32(): ?int
    {
        return $this->cCoche32;
    }

    public function setCCoche32(?int $cCoche32): static
    {
        $this->cCoche32 = $cCoche32;

        return $this;
    }

    public function getCCoche33(): ?int
    {
        return $this->cCoche33;
    }

    public function setCCoche33(?int $cCoche33): static
    {
        $this->cCoche33 = $cCoche33;

        return $this;
    }

    public function getCCoche34(): ?int
    {
        return $this->cCoche34;
    }

    public function setCCoche34(?int $cCoche34): static
    {
        $this->cCoche34 = $cCoche34;

        return $this;
    }

    public function getCCoche35(): ?int
    {
        return $this->cCoche35;
    }

    public function setCCoche35(?int $cCoche35): static
    {
        $this->cCoche35 = $cCoche35;

        return $this;
    }

    public function getCCoche36(): ?int
    {
        return $this->cCoche36;
    }

    public function setCCoche36(?int $cCoche36): static
    {
        $this->cCoche36 = $cCoche36;

        return $this;
    }

    public function getCCoche37(): ?int
    {
        return $this->cCoche37;
    }

    public function setCCoche37(?int $cCoche37): static
    {
        $this->cCoche37 = $cCoche37;

        return $this;
    }

    public function getCCoche38(): ?int
    {
        return $this->cCoche38;
    }

    public function setCCoche38(?int $cCoche38): static
    {
        $this->cCoche38 = $cCoche38;

        return $this;
    }

    public function getCCoche39(): ?int
    {
        return $this->cCoche39;
    }

    public function setCCoche39(?int $cCoche39): static
    {
        $this->cCoche39 = $cCoche39;

        return $this;
    }

    public function getCCoche40(): ?int
    {
        return $this->cCoche40;
    }

    public function setCCoche40(?int $cCoche40): static
    {
        $this->cCoche40 = $cCoche40;

        return $this;
    }

    public function getCCoche41(): ?int
    {
        return $this->cCoche41;
    }

    public function setCCoche41(?int $cCoche41): static
    {
        $this->cCoche41 = $cCoche41;

        return $this;
    }

    public function getCCoche42(): ?int
    {
        return $this->cCoche42;
    }

    public function setCCoche42(?int $cCoche42): static
    {
        $this->cCoche42 = $cCoche42;

        return $this;
    }

    public function getCCoche43(): ?int
    {
        return $this->cCoche43;
    }

    public function setCCoche43(?int $cCoche43): static
    {
        $this->cCoche43 = $cCoche43;

        return $this;
    }

    public function getCCoche44(): ?int
    {
        return $this->cCoche44;
    }

    public function setCCoche44(?int $cCoche44): static
    {
        $this->cCoche44 = $cCoche44;

        return $this;
    }

    public function getCCoche45(): ?int
    {
        return $this->cCoche45;
    }

    public function setCCoche45(?int $cCoche45): static
    {
        $this->cCoche45 = $cCoche45;

        return $this;
    }

    public function getCCoche46(): ?int
    {
        return $this->cCoche46;
    }

    public function setCCoche46(?int $cCoche46): static
    {
        $this->cCoche46 = $cCoche46;

        return $this;
    }

    public function getCCoche47(): ?int
    {
        return $this->cCoche47;
    }

    public function setCCoche47(?int $cCoche47): static
    {
        $this->cCoche47 = $cCoche47;

        return $this;
    }

    public function getCCoche48(): ?int
    {
        return $this->cCoche48;
    }

    public function setCCoche48(?int $cCoche48): static
    {
        $this->cCoche48 = $cCoche48;

        return $this;
    }

    public function getCCoche49(): ?int
    {
        return $this->cCoche49;
    }

    public function setCCoche49(?int $cCoche49): static
    {
        $this->cCoche49 = $cCoche49;

        return $this;
    }

    public function getCCoche50(): ?int
    {
        return $this->cCoche50;
    }

    public function setCCoche50(?int $cCoche50): static
    {
        $this->cCoche50 = $cCoche50;

        return $this;
    }

    public function getCCoche51(): ?int
    {
        return $this->cCoche51;
    }

    public function setCCoche51(?int $cCoche51): static
    {
        $this->cCoche51 = $cCoche51;

        return $this;
    }

    public function getCCoche52(): ?int
    {
        return $this->cCoche52;
    }

    public function setCCoche52(?int $cCoche52): static
    {
        $this->cCoche52 = $cCoche52;

        return $this;
    }

    public function getCCoche53(): ?int
    {
        return $this->cCoche53;
    }

    public function setCCoche53(?int $cCoche53): static
    {
        $this->cCoche53 = $cCoche53;

        return $this;
    }

    public function getCCoche54(): ?int
    {
        return $this->cCoche54;
    }

    public function setCCoche54(?int $cCoche54): static
    {
        $this->cCoche54 = $cCoche54;

        return $this;
    }

    public function getCCoche55(): ?int
    {
        return $this->cCoche55;
    }

    public function setCCoche55(?int $cCoche55): static
    {
        $this->cCoche55 = $cCoche55;

        return $this;
    }

    public function getCCoche56(): ?int
    {
        return $this->cCoche56;
    }

    public function setCCoche56(?int $cCoche56): static
    {
        $this->cCoche56 = $cCoche56;

        return $this;
    }

    public function getCCoche57(): ?int
    {
        return $this->cCoche57;
    }

    public function setCCoche57(?int $cCoche57): static
    {
        $this->cCoche57 = $cCoche57;

        return $this;
    }

    public function getCCoche58(): ?int
    {
        return $this->cCoche58;
    }

    public function setCCoche58(?int $cCoche58): static
    {
        $this->cCoche58 = $cCoche58;

        return $this;
    }

    public function getCCoche59(): ?int
    {
        return $this->cCoche59;
    }

    public function setCCoche59(?int $cCoche59): static
    {
        $this->cCoche59 = $cCoche59;

        return $this;
    }

    public function getCCoche60(): ?int
    {
        return $this->cCoche60;
    }

    public function setCCoche60(?int $cCoche60): static
    {
        $this->cCoche60 = $cCoche60;

        return $this;
    }

    public function getCCoche61(): ?int
    {
        return $this->cCoche61;
    }

    public function setCCoche61(?int $cCoche61): static
    {
        $this->cCoche61 = $cCoche61;

        return $this;
    }

    public function getCCoche62(): ?int
    {
        return $this->cCoche62;
    }

    public function setCCoche62(?int $cCoche62): static
    {
        $this->cCoche62 = $cCoche62;

        return $this;
    }

    public function getCCoche63(): ?int
    {
        return $this->cCoche63;
    }

    public function setCCoche63(?int $cCoche63): static
    {
        $this->cCoche63 = $cCoche63;

        return $this;
    }

    public function getCCoche64(): ?int
    {
        return $this->cCoche64;
    }

    public function setCCoche64(?int $cCoche64): static
    {
        $this->cCoche64 = $cCoche64;

        return $this;
    }

    public function getCCoche65(): ?int
    {
        return $this->cCoche65;
    }

    public function setCCoche65(?int $cCoche65): static
    {
        $this->cCoche65 = $cCoche65;

        return $this;
    }

    public function getCCoche66(): ?int
    {
        return $this->cCoche66;
    }

    public function setCCoche66(?int $cCoche66): static
    {
        $this->cCoche66 = $cCoche66;

        return $this;
    }

    public function getCCoche67(): ?int
    {
        return $this->cCoche67;
    }

    public function setCCoche67(?int $cCoche67): static
    {
        $this->cCoche67 = $cCoche67;

        return $this;
    }

    public function getCCoche68(): ?int
    {
        return $this->cCoche68;
    }

    public function setCCoche68(?int $cCoche68): static
    {
        $this->cCoche68 = $cCoche68;

        return $this;
    }

    public function getCCoche69(): ?int
    {
        return $this->cCoche69;
    }

    public function setCCoche69(?int $cCoche69): static
    {
        $this->cCoche69 = $cCoche69;

        return $this;
    }

    public function getCCoche70(): ?int
    {
        return $this->cCoche70;
    }

    public function setCCoche70(?int $cCoche70): static
    {
        $this->cCoche70 = $cCoche70;

        return $this;
    }

    public function getCCoche71(): ?int
    {
        return $this->cCoche71;
    }

    public function setCCoche71(?int $cCoche71): static
    {
        $this->cCoche71 = $cCoche71;

        return $this;
    }

    public function getCCoche72(): ?int
    {
        return $this->cCoche72;
    }

    public function setCCoche72(?int $cCoche72): static
    {
        $this->cCoche72 = $cCoche72;

        return $this;
    }

    public function getCCoche73(): ?int
    {
        return $this->cCoche73;
    }

    public function setCCoche73(?int $cCoche73): static
    {
        $this->cCoche73 = $cCoche73;

        return $this;
    }

    public function getCCoche74(): ?int
    {
        return $this->cCoche74;
    }

    public function setCCoche74(?int $cCoche74): static
    {
        $this->cCoche74 = $cCoche74;

        return $this;
    }

    public function getCCoche75(): ?int
    {
        return $this->cCoche75;
    }

    public function setCCoche75(?int $cCoche75): static
    {
        $this->cCoche75 = $cCoche75;

        return $this;
    }

    public function getCCoche76(): ?int
    {
        return $this->cCoche76;
    }

    public function setCCoche76(?int $cCoche76): static
    {
        $this->cCoche76 = $cCoche76;

        return $this;
    }

    public function getCCoche77(): ?int
    {
        return $this->cCoche77;
    }

    public function setCCoche77(?int $cCoche77): static
    {
        $this->cCoche77 = $cCoche77;

        return $this;
    }

    public function getCCoche78(): ?int
    {
        return $this->cCoche78;
    }

    public function setCCoche78(?int $cCoche78): static
    {
        $this->cCoche78 = $cCoche78;

        return $this;
    }

    public function getCCoche79(): ?int
    {
        return $this->cCoche79;
    }

    public function setCCoche79(?int $cCoche79): static
    {
        $this->cCoche79 = $cCoche79;

        return $this;
    }

    public function getCCoche80(): ?int
    {
        return $this->cCoche80;
    }

    public function setCCoche80(?int $cCoche80): static
    {
        $this->cCoche80 = $cCoche80;

        return $this;
    }

    public function getCCoche81(): ?int
    {
        return $this->cCoche81;
    }

    public function setCCoche81(?int $cCoche81): static
    {
        $this->cCoche81 = $cCoche81;

        return $this;
    }

    public function getCCoche82(): ?int
    {
        return $this->cCoche82;
    }

    public function setCCoche82(?int $cCoche82): static
    {
        $this->cCoche82 = $cCoche82;

        return $this;
    }

    public function getCCoche83(): ?int
    {
        return $this->cCoche83;
    }

    public function setCCoche83(?int $cCoche83): static
    {
        $this->cCoche83 = $cCoche83;

        return $this;
    }

    public function getCCoche84(): ?int
    {
        return $this->cCoche84;
    }

    public function setCCoche84(?int $cCoche84): static
    {
        $this->cCoche84 = $cCoche84;

        return $this;
    }

    public function getCCoche85(): ?int
    {
        return $this->cCoche85;
    }

    public function setCCoche85(?int $cCoche85): static
    {
        $this->cCoche85 = $cCoche85;

        return $this;
    }

    public function getCCoche86(): ?int
    {
        return $this->cCoche86;
    }

    public function setCCoche86(?int $cCoche86): static
    {
        $this->cCoche86 = $cCoche86;

        return $this;
    }

    public function getCCoche87(): ?int
    {
        return $this->cCoche87;
    }

    public function setCCoche87(?int $cCoche87): static
    {
        $this->cCoche87 = $cCoche87;

        return $this;
    }

    public function getCCoche88(): ?int
    {
        return $this->cCoche88;
    }

    public function setCCoche88(?int $cCoche88): static
    {
        $this->cCoche88 = $cCoche88;

        return $this;
    }

    public function getCCoche89(): ?int
    {
        return $this->cCoche89;
    }

    public function setCCoche89(?int $cCoche89): static
    {
        $this->cCoche89 = $cCoche89;

        return $this;
    }

    public function getCCoche90(): ?int
    {
        return $this->cCoche90;
    }

    public function setCCoche90(?int $cCoche90): static
    {
        $this->cCoche90 = $cCoche90;

        return $this;
    }

    public function getCCoche91(): ?int
    {
        return $this->cCoche91;
    }

    public function setCCoche91(?int $cCoche91): static
    {
        $this->cCoche91 = $cCoche91;

        return $this;
    }

    public function getCCoche92(): ?int
    {
        return $this->cCoche92;
    }

    public function setCCoche92(?int $cCoche92): static
    {
        $this->cCoche92 = $cCoche92;

        return $this;
    }

    public function getCCoche93(): ?int
    {
        return $this->cCoche93;
    }

    public function setCCoche93(?int $cCoche93): static
    {
        $this->cCoche93 = $cCoche93;

        return $this;
    }

    public function getCCoche94(): ?int
    {
        return $this->cCoche94;
    }

    public function setCCoche94(?int $cCoche94): static
    {
        $this->cCoche94 = $cCoche94;

        return $this;
    }

    public function getCCoche95(): ?int
    {
        return $this->cCoche95;
    }

    public function setCCoche95(?int $cCoche95): static
    {
        $this->cCoche95 = $cCoche95;

        return $this;
    }

    public function getCCoche96(): ?int
    {
        return $this->cCoche96;
    }

    public function setCCoche96(?int $cCoche96): static
    {
        $this->cCoche96 = $cCoche96;

        return $this;
    }

    public function getCCoche97(): ?int
    {
        return $this->cCoche97;
    }

    public function setCCoche97(?int $cCoche97): static
    {
        $this->cCoche97 = $cCoche97;

        return $this;
    }

    public function getCCoche98(): ?int
    {
        return $this->cCoche98;
    }

    public function setCCoche98(?int $cCoche98): static
    {
        $this->cCoche98 = $cCoche98;

        return $this;
    }

    public function getCCoche99(): ?int
    {
        return $this->cCoche99;
    }

    public function setCCoche99(?int $cCoche99): static
    {
        $this->cCoche99 = $cCoche99;

        return $this;
    }

    public function getCCoche100(): ?int
    {
        return $this->cCoche100;
    }

    public function setCCoche100(?int $cCoche100): static
    {
        $this->cCoche100 = $cCoche100;

        return $this;
    }

    public function getCCoche101(): ?int
    {
        return $this->cCoche101;
    }

    public function setCCoche101(?int $cCoche101): static
    {
        $this->cCoche101 = $cCoche101;

        return $this;
    }

    public function getCCoche102(): ?int
    {
        return $this->cCoche102;
    }

    public function setCCoche102(?int $cCoche102): static
    {
        $this->cCoche102 = $cCoche102;

        return $this;
    }

    public function getCCoche103(): ?int
    {
        return $this->cCoche103;
    }

    public function setCCoche103(?int $cCoche103): static
    {
        $this->cCoche103 = $cCoche103;

        return $this;
    }

    public function getCCoche104(): ?int
    {
        return $this->cCoche104;
    }

    public function setCCoche104(?int $cCoche104): static
    {
        $this->cCoche104 = $cCoche104;

        return $this;
    }

    public function getCCoche105(): ?int
    {
        return $this->cCoche105;
    }

    public function setCCoche105(?int $cCoche105): static
    {
        $this->cCoche105 = $cCoche105;

        return $this;
    }

    public function getCCoche106(): ?int
    {
        return $this->cCoche106;
    }

    public function setCCoche106(?int $cCoche106): static
    {
        $this->cCoche106 = $cCoche106;

        return $this;
    }

    public function getCCoche107(): ?int
    {
        return $this->cCoche107;
    }

    public function setCCoche107(?int $cCoche107): static
    {
        $this->cCoche107 = $cCoche107;

        return $this;
    }

    public function getCCoche108(): ?int
    {
        return $this->cCoche108;
    }

    public function setCCoche108(?int $cCoche108): static
    {
        $this->cCoche108 = $cCoche108;

        return $this;
    }

    public function getCCoche109(): ?int
    {
        return $this->cCoche109;
    }

    public function setCCoche109(?int $cCoche109): static
    {
        $this->cCoche109 = $cCoche109;

        return $this;
    }

    public function getCCoche110(): ?int
    {
        return $this->cCoche110;
    }

    public function setCCoche110(?int $cCoche110): static
    {
        $this->cCoche110 = $cCoche110;

        return $this;
    }

    public function getCCoche111(): ?int
    {
        return $this->cCoche111;
    }

    public function setCCoche111(?int $cCoche111): static
    {
        $this->cCoche111 = $cCoche111;

        return $this;
    }

    public function getCCoche112(): ?int
    {
        return $this->cCoche112;
    }

    public function setCCoche112(?int $cCoche112): static
    {
        $this->cCoche112 = $cCoche112;

        return $this;
    }

    public function getCCoche113(): ?int
    {
        return $this->cCoche113;
    }

    public function setCCoche113(?int $cCoche113): static
    {
        $this->cCoche113 = $cCoche113;

        return $this;
    }

    public function getCCoche114(): ?int
    {
        return $this->cCoche114;
    }

    public function setCCoche114(?int $cCoche114): static
    {
        $this->cCoche114 = $cCoche114;

        return $this;
    }

    public function getCCoche115(): ?int
    {
        return $this->cCoche115;
    }

    public function setCCoche115(?int $cCoche115): static
    {
        $this->cCoche115 = $cCoche115;

        return $this;
    }

    public function getCCoche116(): ?int
    {
        return $this->cCoche116;
    }

    public function setCCoche116(?int $cCoche116): static
    {
        $this->cCoche116 = $cCoche116;

        return $this;
    }

    public function getCCoche117(): ?int
    {
        return $this->cCoche117;
    }

    public function setCCoche117(?int $cCoche117): static
    {
        $this->cCoche117 = $cCoche117;

        return $this;
    }

    public function getCCoche118(): ?int
    {
        return $this->cCoche118;
    }

    public function setCCoche118(?int $cCoche118): static
    {
        $this->cCoche118 = $cCoche118;

        return $this;
    }

    public function getCCoche119(): ?int
    {
        return $this->cCoche119;
    }

    public function setCCoche119(?int $cCoche119): static
    {
        $this->cCoche119 = $cCoche119;

        return $this;
    }

    public function getCCoche120(): ?int
    {
        return $this->cCoche120;
    }

    public function setCCoche120(?int $cCoche120): static
    {
        $this->cCoche120 = $cCoche120;

        return $this;
    }

    public function getCCoche121(): ?int
    {
        return $this->cCoche121;
    }

    public function setCCoche121(?int $cCoche121): static
    {
        $this->cCoche121 = $cCoche121;

        return $this;
    }

    public function getCCoche122(): ?int
    {
        return $this->cCoche122;
    }

    public function setCCoche122(?int $cCoche122): static
    {
        $this->cCoche122 = $cCoche122;

        return $this;
    }

    public function getCCoche123(): ?int
    {
        return $this->cCoche123;
    }

    public function setCCoche123(?int $cCoche123): static
    {
        $this->cCoche123 = $cCoche123;

        return $this;
    }

    public function getCCoche124(): ?int
    {
        return $this->cCoche124;
    }

    public function setCCoche124(?int $cCoche124): static
    {
        $this->cCoche124 = $cCoche124;

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

    public function getCCoche125(): ?int
    {
        return $this->cCoche125;
    }

    public function setCCoche125(?int $cCoche125): static
    {
        $this->cCoche125 = $cCoche125;

        return $this;
    }
}
