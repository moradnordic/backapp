<?php

namespace App\Entity\Nd;

use App\Repository\Nd\TblcaisseMotifMouvementRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'tblCaisse_Motif_Mouvement___')]
#[ORM\Entity(repositoryClass: TblcaisseMotifMouvementRepository::class)]
class TblcaisseMotifMouvement
{
    #[ORM\Column(name: "N°")]
    private ?int $n° = null;

    #[ORM\Column(name: "Motif", length: 255, nullable: true)]
    private ?string $motif = null;

    #[ORM\Column(name: "TypeCaisseMouvement", nullable: true)]
    private ?int $typecaissemouvement = null;

    #[ORM\Column(name: "Autoriser")]
    private ?bool $autoriser = null;

    #[ORM\Column(name: "GenerMovement")]
    private ?bool $genermovement = null;

    #[ORM\Column(name: "TypeMouvementGenere", length: 255, nullable: true)]
    private ?string $typemouvementgenere = null;

    #[ORM\Column(name: "TableDestination", length: 255, nullable: true)]
    private ?string $tabledestination = null;

    #[ORM\Column(name: "ExigeExplication")]
    private ?bool $exigeexplication = null;

    #[ORM\Column(name: "ExigeActionSup")]
    private ?bool $exigeactionsup = null;

    #[ORM\Column(name: "RelatedEmployee")]
    private ?bool $relatedemployee = null;

    #[ORM\Column(name: "RelatedBanque")]
    private ?bool $relatedbanque = null;

    #[ORM\Column(name: "RelatedCaisse")]
    private ?bool $relatedcaisse = null;

    #[ORM\Column(name: "RelatedFrs")]
    private ?bool $relatedfrs = null;

    #[ORM\Column(name: "RelatedClt")]
    private ?bool $relatedclt = null;

    #[ORM\Column(name: "RelatedEmployeeCtrl", length: 255, nullable: true)]
    private ?string $relatedemployeectrl = null;

    #[ORM\Column(name: "RelatedBanqueCtrl", length: 255, nullable: true)]
    private ?string $relatedbanquectrl = null;

    #[ORM\Column(name: "RelatedCaisseCtrl", length: 255, nullable: true)]
    private ?string $relatedcaissectrl = null;

    #[ORM\Column(name: "RelatedFrsCtrl", length: 255, nullable: true)]
    private ?string $relatedfrsctrl = null;

    #[ORM\Column(name: "RelatedCltCtrl", length: 255, nullable: true)]
    private ?string $relatedcltctrl = null;

    public function getN°(): ?int
    {
        return $this->n°;
    }

    public function setN°(int $n°): static
    {
        $this->n° = $n°;

        return $this;
    }

    public function getMotif(): ?string
    {
        return $this->motif;
    }

    public function setMotif(?string $motif): static
    {
        $this->motif = $motif;

        return $this;
    }

    public function getTypecaissemouvement(): ?int
    {
        return $this->typecaissemouvement;
    }

    public function setTypecaissemouvement(?int $typecaissemouvement): static
    {
        $this->typecaissemouvement = $typecaissemouvement;

        return $this;
    }

    public function getAutoriser(): ?bool
    {
        return $this->autoriser;
    }

    public function setAutoriser(bool $autoriser): static
    {
        $this->autoriser = $autoriser;

        return $this;
    }

    public function getGenermovement(): ?bool
    {
        return $this->genermovement;
    }

    public function setGenermovement(bool $genermovement): static
    {
        $this->genermovement = $genermovement;

        return $this;
    }

    public function getTypemouvementgenere(): ?string
    {
        return $this->typemouvementgenere;
    }

    public function setTypemouvementgenere(?string $typemouvementgenere): static
    {
        $this->typemouvementgenere = $typemouvementgenere;

        return $this;
    }

    public function getTabledestination(): ?string
    {
        return $this->tabledestination;
    }

    public function setTabledestination(?string $tabledestination): static
    {
        $this->tabledestination = $tabledestination;

        return $this;
    }

    public function getExigeexplication(): ?bool
    {
        return $this->exigeexplication;
    }

    public function setExigeexplication(bool $exigeexplication): static
    {
        $this->exigeexplication = $exigeexplication;

        return $this;
    }

    public function getExigeactionsup(): ?bool
    {
        return $this->exigeactionsup;
    }

    public function setExigeactionsup(bool $exigeactionsup): static
    {
        $this->exigeactionsup = $exigeactionsup;

        return $this;
    }

    public function getRelatedemployee(): ?bool
    {
        return $this->relatedemployee;
    }

    public function setRelatedemployee(bool $relatedemployee): static
    {
        $this->relatedemployee = $relatedemployee;

        return $this;
    }

    public function getRelatedbanque(): ?bool
    {
        return $this->relatedbanque;
    }

    public function setRelatedbanque(bool $relatedbanque): static
    {
        $this->relatedbanque = $relatedbanque;

        return $this;
    }

    public function getRelatedcaisse(): ?bool
    {
        return $this->relatedcaisse;
    }

    public function setRelatedcaisse(bool $relatedcaisse): static
    {
        $this->relatedcaisse = $relatedcaisse;

        return $this;
    }

    public function getRelatedfrs(): ?bool
    {
        return $this->relatedfrs;
    }

    public function setRelatedfrs(bool $relatedfrs): static
    {
        $this->relatedfrs = $relatedfrs;

        return $this;
    }

    public function getRelatedclt(): ?bool
    {
        return $this->relatedclt;
    }

    public function setRelatedclt(bool $relatedclt): static
    {
        $this->relatedclt = $relatedclt;

        return $this;
    }

    public function getRelatedemployeectrl(): ?string
    {
        return $this->relatedemployeectrl;
    }

    public function setRelatedemployeectrl(?string $relatedemployeectrl): static
    {
        $this->relatedemployeectrl = $relatedemployeectrl;

        return $this;
    }

    public function getRelatedbanquectrl(): ?string
    {
        return $this->relatedbanquectrl;
    }

    public function setRelatedbanquectrl(?string $relatedbanquectrl): static
    {
        $this->relatedbanquectrl = $relatedbanquectrl;

        return $this;
    }

    public function getRelatedcaissectrl(): ?string
    {
        return $this->relatedcaissectrl;
    }

    public function setRelatedcaissectrl(?string $relatedcaissectrl): static
    {
        $this->relatedcaissectrl = $relatedcaissectrl;

        return $this;
    }

    public function getRelatedfrsctrl(): ?string
    {
        return $this->relatedfrsctrl;
    }

    public function setRelatedfrsctrl(?string $relatedfrsctrl): static
    {
        $this->relatedfrsctrl = $relatedfrsctrl;

        return $this;
    }

    public function getRelatedcltctrl(): ?string
    {
        return $this->relatedcltctrl;
    }

    public function setRelatedcltctrl(?string $relatedcltctrl): static
    {
        $this->relatedcltctrl = $relatedcltctrl;

        return $this;
    }
}
