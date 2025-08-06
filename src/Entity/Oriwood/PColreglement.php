<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\PColreglementRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'P_COLREGLEMENT')]
#[ORM\Entity(repositoryClass: PColreglementRepository::class)]
class PColreglement
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "CR_NumPiece01", type: Types::SMALLINT, nullable: true)]
    private ?int $crNumpiece01 = null;

    #[ORM\Column(name: "CR_NumPiece02", type: Types::SMALLINT, nullable: true)]
    private ?int $crNumpiece02 = null;

    #[ORM\Column(name: "CR_Numero01", length: 13, nullable: true)]
    private ?string $crNumero01 = null;

    #[ORM\Column(name: "CR_Numero02", length: 13, nullable: true)]
    private ?string $crNumero02 = null;

    #[ORM\Column(name: "CR_ColReglement01", type: Types::SMALLINT, nullable: true)]
    private ?int $crColreglement01 = null;

    #[ORM\Column(name: "CR_ColReglement02", type: Types::SMALLINT, nullable: true)]
    private ?int $crColreglement02 = null;

    #[ORM\Column(name: "CR_ColReglement03", type: Types::SMALLINT, nullable: true)]
    private ?int $crColreglement03 = null;

    #[ORM\Column(name: "CR_ColReglement04", type: Types::SMALLINT, nullable: true)]
    private ?int $crColreglement04 = null;

    #[ORM\Column(name: "CR_ColReglement05", type: Types::SMALLINT, nullable: true)]
    private ?int $crColreglement05 = null;

    #[ORM\Column(name: "CR_ColReglement06", type: Types::SMALLINT, nullable: true)]
    private ?int $crColreglement06 = null;

    #[ORM\Column(name: "CR_ColReglement07", type: Types::SMALLINT, nullable: true)]
    private ?int $crColreglement07 = null;

    #[ORM\Column(name: "CR_ColReglement08", type: Types::SMALLINT, nullable: true)]
    private ?int $crColreglement08 = null;

    #[ORM\Column(name: "CR_ColReglement09", type: Types::SMALLINT, nullable: true)]
    private ?int $crColreglement09 = null;

    #[ORM\Column(name: "CR_ColReglement10", type: Types::SMALLINT, nullable: true)]
    private ?int $crColreglement10 = null;

    #[ORM\Column(name: "CR_ColReglement11", type: Types::SMALLINT, nullable: true)]
    private ?int $crColreglement11 = null;

    #[ORM\Column(name: "CR_ColReglement12", type: Types::SMALLINT, nullable: true)]
    private ?int $crColreglement12 = null;

    #[ORM\Column(name: "CR_ColReglement13", type: Types::SMALLINT, nullable: true)]
    private ?int $crColreglement13 = null;

    #[ORM\Column(name: "CR_ColReglement14", type: Types::SMALLINT, nullable: true)]
    private ?int $crColreglement14 = null;

    #[ORM\Column(name: "CR_ColReglement15", type: Types::SMALLINT, nullable: true)]
    private ?int $crColreglement15 = null;

    #[ORM\Column(name: "CR_ColReglement16", type: Types::SMALLINT, nullable: true)]
    private ?int $crColreglement16 = null;

    #[ORM\Column(name: "CR_ColReglement17", type: Types::SMALLINT, nullable: true)]
    private ?int $crColreglement17 = null;

    #[ORM\Column(name: "CR_ColReglement18", type: Types::SMALLINT, nullable: true)]
    private ?int $crColreglement18 = null;

    #[ORM\Column(name: "CR_ColReglement19", type: Types::SMALLINT, nullable: true)]
    private ?int $crColreglement19 = null;

    #[ORM\Column(name: "CR_ColReglement20", type: Types::SMALLINT, nullable: true)]
    private ?int $crColreglement20 = null;

    #[ORM\Column(name: "CR_ColReglement21", type: Types::SMALLINT, nullable: true)]
    private ?int $crColreglement21 = null;

    #[ORM\Column(name: "CR_ColReglement22", type: Types::SMALLINT, nullable: true)]
    private ?int $crColreglement22 = null;

    #[ORM\Column(name: "CR_ColReglement23", type: Types::SMALLINT, nullable: true)]
    private ?int $crColreglement23 = null;

    #[ORM\Column(name: "CR_ColReglement24", type: Types::SMALLINT, nullable: true)]
    private ?int $crColreglement24 = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getCrNumpiece01(): ?int
    {
        return $this->crNumpiece01;
    }

    public function setCrNumpiece01(?int $crNumpiece01): static
    {
        $this->crNumpiece01 = $crNumpiece01;

        return $this;
    }

    public function getCrNumpiece02(): ?int
    {
        return $this->crNumpiece02;
    }

    public function setCrNumpiece02(?int $crNumpiece02): static
    {
        $this->crNumpiece02 = $crNumpiece02;

        return $this;
    }

    public function getCrNumero01(): ?string
    {
        return $this->crNumero01;
    }

    public function setCrNumero01(?string $crNumero01): static
    {
        $this->crNumero01 = $crNumero01;

        return $this;
    }

    public function getCrNumero02(): ?string
    {
        return $this->crNumero02;
    }

    public function setCrNumero02(?string $crNumero02): static
    {
        $this->crNumero02 = $crNumero02;

        return $this;
    }

    public function getCrColreglement01(): ?int
    {
        return $this->crColreglement01;
    }

    public function setCrColreglement01(?int $crColreglement01): static
    {
        $this->crColreglement01 = $crColreglement01;

        return $this;
    }

    public function getCrColreglement02(): ?int
    {
        return $this->crColreglement02;
    }

    public function setCrColreglement02(?int $crColreglement02): static
    {
        $this->crColreglement02 = $crColreglement02;

        return $this;
    }

    public function getCrColreglement03(): ?int
    {
        return $this->crColreglement03;
    }

    public function setCrColreglement03(?int $crColreglement03): static
    {
        $this->crColreglement03 = $crColreglement03;

        return $this;
    }

    public function getCrColreglement04(): ?int
    {
        return $this->crColreglement04;
    }

    public function setCrColreglement04(?int $crColreglement04): static
    {
        $this->crColreglement04 = $crColreglement04;

        return $this;
    }

    public function getCrColreglement05(): ?int
    {
        return $this->crColreglement05;
    }

    public function setCrColreglement05(?int $crColreglement05): static
    {
        $this->crColreglement05 = $crColreglement05;

        return $this;
    }

    public function getCrColreglement06(): ?int
    {
        return $this->crColreglement06;
    }

    public function setCrColreglement06(?int $crColreglement06): static
    {
        $this->crColreglement06 = $crColreglement06;

        return $this;
    }

    public function getCrColreglement07(): ?int
    {
        return $this->crColreglement07;
    }

    public function setCrColreglement07(?int $crColreglement07): static
    {
        $this->crColreglement07 = $crColreglement07;

        return $this;
    }

    public function getCrColreglement08(): ?int
    {
        return $this->crColreglement08;
    }

    public function setCrColreglement08(?int $crColreglement08): static
    {
        $this->crColreglement08 = $crColreglement08;

        return $this;
    }

    public function getCrColreglement09(): ?int
    {
        return $this->crColreglement09;
    }

    public function setCrColreglement09(?int $crColreglement09): static
    {
        $this->crColreglement09 = $crColreglement09;

        return $this;
    }

    public function getCrColreglement10(): ?int
    {
        return $this->crColreglement10;
    }

    public function setCrColreglement10(?int $crColreglement10): static
    {
        $this->crColreglement10 = $crColreglement10;

        return $this;
    }

    public function getCrColreglement11(): ?int
    {
        return $this->crColreglement11;
    }

    public function setCrColreglement11(?int $crColreglement11): static
    {
        $this->crColreglement11 = $crColreglement11;

        return $this;
    }

    public function getCrColreglement12(): ?int
    {
        return $this->crColreglement12;
    }

    public function setCrColreglement12(?int $crColreglement12): static
    {
        $this->crColreglement12 = $crColreglement12;

        return $this;
    }

    public function getCrColreglement13(): ?int
    {
        return $this->crColreglement13;
    }

    public function setCrColreglement13(?int $crColreglement13): static
    {
        $this->crColreglement13 = $crColreglement13;

        return $this;
    }

    public function getCrColreglement14(): ?int
    {
        return $this->crColreglement14;
    }

    public function setCrColreglement14(?int $crColreglement14): static
    {
        $this->crColreglement14 = $crColreglement14;

        return $this;
    }

    public function getCrColreglement15(): ?int
    {
        return $this->crColreglement15;
    }

    public function setCrColreglement15(?int $crColreglement15): static
    {
        $this->crColreglement15 = $crColreglement15;

        return $this;
    }

    public function getCrColreglement16(): ?int
    {
        return $this->crColreglement16;
    }

    public function setCrColreglement16(?int $crColreglement16): static
    {
        $this->crColreglement16 = $crColreglement16;

        return $this;
    }

    public function getCrColreglement17(): ?int
    {
        return $this->crColreglement17;
    }

    public function setCrColreglement17(?int $crColreglement17): static
    {
        $this->crColreglement17 = $crColreglement17;

        return $this;
    }

    public function getCrColreglement18(): ?int
    {
        return $this->crColreglement18;
    }

    public function setCrColreglement18(?int $crColreglement18): static
    {
        $this->crColreglement18 = $crColreglement18;

        return $this;
    }

    public function getCrColreglement19(): ?int
    {
        return $this->crColreglement19;
    }

    public function setCrColreglement19(?int $crColreglement19): static
    {
        $this->crColreglement19 = $crColreglement19;

        return $this;
    }

    public function getCrColreglement20(): ?int
    {
        return $this->crColreglement20;
    }

    public function setCrColreglement20(?int $crColreglement20): static
    {
        $this->crColreglement20 = $crColreglement20;

        return $this;
    }

    public function getCrColreglement21(): ?int
    {
        return $this->crColreglement21;
    }

    public function setCrColreglement21(?int $crColreglement21): static
    {
        $this->crColreglement21 = $crColreglement21;

        return $this;
    }

    public function getCrColreglement22(): ?int
    {
        return $this->crColreglement22;
    }

    public function setCrColreglement22(?int $crColreglement22): static
    {
        $this->crColreglement22 = $crColreglement22;

        return $this;
    }

    public function getCrColreglement23(): ?int
    {
        return $this->crColreglement23;
    }

    public function setCrColreglement23(?int $crColreglement23): static
    {
        $this->crColreglement23 = $crColreglement23;

        return $this;
    }

    public function getCrColreglement24(): ?int
    {
        return $this->crColreglement24;
    }

    public function setCrColreglement24(?int $crColreglement24): static
    {
        $this->crColreglement24 = $crColreglement24;

        return $this;
    }
}
