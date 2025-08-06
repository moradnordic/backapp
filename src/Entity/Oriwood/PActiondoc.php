<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\PActiondocRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'P_ACTIONDOC')]
#[ORM\Entity(repositoryClass: PActiondocRepository::class)]
class PActiondoc
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "AD_Vente01", type: Types::SMALLINT, nullable: true)]
    private ?int $adVente01 = null;

    #[ORM\Column(name: "AD_Vente02", type: Types::SMALLINT, nullable: true)]
    private ?int $adVente02 = null;

    #[ORM\Column(name: "AD_Vente03", type: Types::SMALLINT, nullable: true)]
    private ?int $adVente03 = null;

    #[ORM\Column(name: "AD_Vente04", type: Types::SMALLINT, nullable: true)]
    private ?int $adVente04 = null;

    #[ORM\Column(name: "AD_Vente05", type: Types::SMALLINT, nullable: true)]
    private ?int $adVente05 = null;

    #[ORM\Column(name: "AD_Achat01", type: Types::SMALLINT, nullable: true)]
    private ?int $adAchat01 = null;

    #[ORM\Column(name: "AD_Achat02", type: Types::SMALLINT, nullable: true)]
    private ?int $adAchat02 = null;

    #[ORM\Column(name: "AD_Achat03", type: Types::SMALLINT, nullable: true)]
    private ?int $adAchat03 = null;

    #[ORM\Column(name: "AD_Achat04", type: Types::SMALLINT, nullable: true)]
    private ?int $adAchat04 = null;

    #[ORM\Column(name: "AD_Achat05", type: Types::SMALLINT, nullable: true)]
    private ?int $adAchat05 = null;

    #[ORM\Column(name: "AD_Stock01", type: Types::SMALLINT, nullable: true)]
    private ?int $adStock01 = null;

    #[ORM\Column(name: "AD_Stock02", type: Types::SMALLINT, nullable: true)]
    private ?int $adStock02 = null;

    #[ORM\Column(name: "AD_Stock03", type: Types::SMALLINT, nullable: true)]
    private ?int $adStock03 = null;

    #[ORM\Column(name: "AD_Stock04", type: Types::SMALLINT, nullable: true)]
    private ?int $adStock04 = null;

    #[ORM\Column(name: "AD_Stock05", type: Types::SMALLINT, nullable: true)]
    private ?int $adStock05 = null;

    #[ORM\Column(name: "AD_Interne01", type: Types::SMALLINT, nullable: true)]
    private ?int $adInterne01 = null;

    #[ORM\Column(name: "AD_Interne02", type: Types::SMALLINT, nullable: true)]
    private ?int $adInterne02 = null;

    #[ORM\Column(name: "AD_Interne03", type: Types::SMALLINT, nullable: true)]
    private ?int $adInterne03 = null;

    #[ORM\Column(name: "AD_Interne04", type: Types::SMALLINT, nullable: true)]
    private ?int $adInterne04 = null;

    #[ORM\Column(name: "AD_Interne05", type: Types::SMALLINT, nullable: true)]
    private ?int $adInterne05 = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getAdVente01(): ?int
    {
        return $this->adVente01;
    }

    public function setAdVente01(?int $adVente01): static
    {
        $this->adVente01 = $adVente01;

        return $this;
    }

    public function getAdVente02(): ?int
    {
        return $this->adVente02;
    }

    public function setAdVente02(?int $adVente02): static
    {
        $this->adVente02 = $adVente02;

        return $this;
    }

    public function getAdVente03(): ?int
    {
        return $this->adVente03;
    }

    public function setAdVente03(?int $adVente03): static
    {
        $this->adVente03 = $adVente03;

        return $this;
    }

    public function getAdVente04(): ?int
    {
        return $this->adVente04;
    }

    public function setAdVente04(?int $adVente04): static
    {
        $this->adVente04 = $adVente04;

        return $this;
    }

    public function getAdVente05(): ?int
    {
        return $this->adVente05;
    }

    public function setAdVente05(?int $adVente05): static
    {
        $this->adVente05 = $adVente05;

        return $this;
    }

    public function getAdAchat01(): ?int
    {
        return $this->adAchat01;
    }

    public function setAdAchat01(?int $adAchat01): static
    {
        $this->adAchat01 = $adAchat01;

        return $this;
    }

    public function getAdAchat02(): ?int
    {
        return $this->adAchat02;
    }

    public function setAdAchat02(?int $adAchat02): static
    {
        $this->adAchat02 = $adAchat02;

        return $this;
    }

    public function getAdAchat03(): ?int
    {
        return $this->adAchat03;
    }

    public function setAdAchat03(?int $adAchat03): static
    {
        $this->adAchat03 = $adAchat03;

        return $this;
    }

    public function getAdAchat04(): ?int
    {
        return $this->adAchat04;
    }

    public function setAdAchat04(?int $adAchat04): static
    {
        $this->adAchat04 = $adAchat04;

        return $this;
    }

    public function getAdAchat05(): ?int
    {
        return $this->adAchat05;
    }

    public function setAdAchat05(?int $adAchat05): static
    {
        $this->adAchat05 = $adAchat05;

        return $this;
    }

    public function getAdStock01(): ?int
    {
        return $this->adStock01;
    }

    public function setAdStock01(?int $adStock01): static
    {
        $this->adStock01 = $adStock01;

        return $this;
    }

    public function getAdStock02(): ?int
    {
        return $this->adStock02;
    }

    public function setAdStock02(?int $adStock02): static
    {
        $this->adStock02 = $adStock02;

        return $this;
    }

    public function getAdStock03(): ?int
    {
        return $this->adStock03;
    }

    public function setAdStock03(?int $adStock03): static
    {
        $this->adStock03 = $adStock03;

        return $this;
    }

    public function getAdStock04(): ?int
    {
        return $this->adStock04;
    }

    public function setAdStock04(?int $adStock04): static
    {
        $this->adStock04 = $adStock04;

        return $this;
    }

    public function getAdStock05(): ?int
    {
        return $this->adStock05;
    }

    public function setAdStock05(?int $adStock05): static
    {
        $this->adStock05 = $adStock05;

        return $this;
    }

    public function getAdInterne01(): ?int
    {
        return $this->adInterne01;
    }

    public function setAdInterne01(?int $adInterne01): static
    {
        $this->adInterne01 = $adInterne01;

        return $this;
    }

    public function getAdInterne02(): ?int
    {
        return $this->adInterne02;
    }

    public function setAdInterne02(?int $adInterne02): static
    {
        $this->adInterne02 = $adInterne02;

        return $this;
    }

    public function getAdInterne03(): ?int
    {
        return $this->adInterne03;
    }

    public function setAdInterne03(?int $adInterne03): static
    {
        $this->adInterne03 = $adInterne03;

        return $this;
    }

    public function getAdInterne04(): ?int
    {
        return $this->adInterne04;
    }

    public function setAdInterne04(?int $adInterne04): static
    {
        $this->adInterne04 = $adInterne04;

        return $this;
    }

    public function getAdInterne05(): ?int
    {
        return $this->adInterne05;
    }

    public function setAdInterne05(?int $adInterne05): static
    {
        $this->adInterne05 = $adInterne05;

        return $this;
    }
}
