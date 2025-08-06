<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\PCommunicationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'P_COMMUNICATION')]
#[ORM\Entity(repositoryClass: PCommunicationRepository::class)]
class PCommunication
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "N_CatTarif", type: Types::SMALLINT, nullable: true)]
    private ?int $nCattarif = null;

    #[ORM\Column(name: "N_CatCompta", type: Types::SMALLINT, nullable: true)]
    private ?int $nCatcompta = null;

    #[ORM\Column(name: "CO_SoucheSite", type: Types::SMALLINT, nullable: true)]
    private ?int $coSouchesite = null;

    #[ORM\Column(name: "DE_No", nullable: true)]
    private ?int $deNo = null;

    #[ORM\Column(name: "AR_RefAttente", length: 19, nullable: true)]
    private ?string $arRefattente = null;

    #[ORM\Column(name: "CO_CdeLast", length: 17, nullable: true)]
    private ?string $coCdelast = null;

    #[ORM\Column(name: "CO_Modele", length: 255, nullable: true)]
    private ?string $coModele = null;

    #[ORM\Column(name: "CO_Accuse", type: Types::SMALLINT, nullable: true)]
    private ?int $coAccuse = null;

    #[ORM\Column(name: "CO_NomSite", length: 101, nullable: true)]
    private ?string $coNomsite = null;

    #[ORM\Column(name: "CO_MotPasseSite", length: 21, nullable: true)]
    private ?string $coMotpassesite = null;

    #[ORM\Column(name: "N_Condition", type: Types::SMALLINT, nullable: true)]
    private ?int $nCondition = null;

    #[ORM\Column(name: "N_Expedition", type: Types::SMALLINT, nullable: true)]
    private ?int $nExpedition = null;

    #[ORM\Column(name: "N_Period", type: Types::SMALLINT, nullable: true)]
    private ?int $nPeriod = null;

    #[ORM\Column(name: "CO_Statut", type: Types::SMALLINT, nullable: true)]
    private ?int $coStatut = null;

    #[ORM\Column(name: "CO_Regime", type: Types::SMALLINT, nullable: true)]
    private ?int $coRegime = null;

    #[ORM\Column(name: "CO_Transaction", type: Types::SMALLINT, nullable: true)]
    private ?int $coTransaction = null;

    #[ORM\Column(name: "CO_NbFacture", type: Types::SMALLINT, nullable: true)]
    private ?int $coNbfacture = null;

    #[ORM\Column(name: "CO_Colisage", type: Types::SMALLINT, nullable: true)]
    private ?int $coColisage = null;

    #[ORM\Column(name: "CO_TypeColis", type: Types::SMALLINT, nullable: true)]
    private ?int $coTypecolis = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getNCattarif(): ?int
    {
        return $this->nCattarif;
    }

    public function setNCattarif(?int $nCattarif): static
    {
        $this->nCattarif = $nCattarif;

        return $this;
    }

    public function getNCatcompta(): ?int
    {
        return $this->nCatcompta;
    }

    public function setNCatcompta(?int $nCatcompta): static
    {
        $this->nCatcompta = $nCatcompta;

        return $this;
    }

    public function getCoSouchesite(): ?int
    {
        return $this->coSouchesite;
    }

    public function setCoSouchesite(?int $coSouchesite): static
    {
        $this->coSouchesite = $coSouchesite;

        return $this;
    }

    public function getDeNo(): ?int
    {
        return $this->deNo;
    }

    public function setDeNo(?int $deNo): static
    {
        $this->deNo = $deNo;

        return $this;
    }

    public function getArRefattente(): ?string
    {
        return $this->arRefattente;
    }

    public function setArRefattente(?string $arRefattente): static
    {
        $this->arRefattente = $arRefattente;

        return $this;
    }

    public function getCoCdelast(): ?string
    {
        return $this->coCdelast;
    }

    public function setCoCdelast(?string $coCdelast): static
    {
        $this->coCdelast = $coCdelast;

        return $this;
    }

    public function getCoModele(): ?string
    {
        return $this->coModele;
    }

    public function setCoModele(?string $coModele): static
    {
        $this->coModele = $coModele;

        return $this;
    }

    public function getCoAccuse(): ?int
    {
        return $this->coAccuse;
    }

    public function setCoAccuse(?int $coAccuse): static
    {
        $this->coAccuse = $coAccuse;

        return $this;
    }

    public function getCoNomsite(): ?string
    {
        return $this->coNomsite;
    }

    public function setCoNomsite(?string $coNomsite): static
    {
        $this->coNomsite = $coNomsite;

        return $this;
    }

    public function getCoMotpassesite(): ?string
    {
        return $this->coMotpassesite;
    }

    public function setCoMotpassesite(?string $coMotpassesite): static
    {
        $this->coMotpassesite = $coMotpassesite;

        return $this;
    }

    public function getNCondition(): ?int
    {
        return $this->nCondition;
    }

    public function setNCondition(?int $nCondition): static
    {
        $this->nCondition = $nCondition;

        return $this;
    }

    public function getNExpedition(): ?int
    {
        return $this->nExpedition;
    }

    public function setNExpedition(?int $nExpedition): static
    {
        $this->nExpedition = $nExpedition;

        return $this;
    }

    public function getNPeriod(): ?int
    {
        return $this->nPeriod;
    }

    public function setNPeriod(?int $nPeriod): static
    {
        $this->nPeriod = $nPeriod;

        return $this;
    }

    public function getCoStatut(): ?int
    {
        return $this->coStatut;
    }

    public function setCoStatut(?int $coStatut): static
    {
        $this->coStatut = $coStatut;

        return $this;
    }

    public function getCoRegime(): ?int
    {
        return $this->coRegime;
    }

    public function setCoRegime(?int $coRegime): static
    {
        $this->coRegime = $coRegime;

        return $this;
    }

    public function getCoTransaction(): ?int
    {
        return $this->coTransaction;
    }

    public function setCoTransaction(?int $coTransaction): static
    {
        $this->coTransaction = $coTransaction;

        return $this;
    }

    public function getCoNbfacture(): ?int
    {
        return $this->coNbfacture;
    }

    public function setCoNbfacture(?int $coNbfacture): static
    {
        $this->coNbfacture = $coNbfacture;

        return $this;
    }

    public function getCoColisage(): ?int
    {
        return $this->coColisage;
    }

    public function setCoColisage(?int $coColisage): static
    {
        $this->coColisage = $coColisage;

        return $this;
    }

    public function getCoTypecolis(): ?int
    {
        return $this->coTypecolis;
    }

    public function setCoTypecolis(?int $coTypecolis): static
    {
        $this->coTypecolis = $coTypecolis;

        return $this;
    }
}
