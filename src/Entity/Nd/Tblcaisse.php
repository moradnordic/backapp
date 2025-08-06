<?php

namespace App\Entity\Nd;

use App\Repository\Nd\TblcaisseRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'tblCaisse')]
#[ORM\Entity(repositoryClass: TblcaisseRepository::class)]
class Tblcaisse
{
    #[ORM\Column(name: "Caisse", nullable: true)]
    private ?int $caisse = null;

    #[ORM\Column(name: "N°")]
    private ?int $n° = null;

    #[ORM\Column(name: "CaisseTypeOperation", nullable: true)]
    private ?int $caissetypeoperation = null;

    #[ORM\Column(name: "User", nullable: true)]
    private ?int $user = null;

    #[ORM\Column(name: "DateSaisie", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $datesaisie = null;

    #[ORM\Column(name: "DateOperationCaisse", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateoperationcaisse = null;

    #[ORM\Column(name: "Montant", nullable: true)]
    private ?float $montant = null;

    #[ORM\Column(name: "MotifCaisse", nullable: true)]
    private ?int $motifcaisse = null;

    #[ORM\Column(name: "ScanPiece", length: 255, nullable: true)]
    private ?string $scanpiece = null;

    #[ORM\Column(name: "Valide")]
    private ?bool $valide = null;

    #[ORM\Column(name: "Bloquee")]
    private ?bool $bloquee = null;

    #[ORM\Column(name: "RelatedEmployee", nullable: true)]
    private ?int $relatedemployee = null;

    #[ORM\Column(name: "RelatedBanque", nullable: true)]
    private ?int $relatedbanque = null;

    #[ORM\Column(name: "RelatedCaisse", nullable: true)]
    private ?int $relatedcaisse = null;

    #[ORM\Column(name: "RelatedFrs", nullable: true)]
    private ?int $relatedfrs = null;

    #[ORM\Column(name: "RelatedClt", nullable: true)]
    private ?int $relatedclt = null;

    #[ORM\Column(name: "RelatedPrestExt", nullable: true)]
    private ?int $relatedprestext = null;

    #[ORM\Column(name: "SiVersementGenereNr", nullable: true)]
    private ?int $siversementgenerenr = null;

    #[ORM\Column(name: "SiAutreMouvCaisseGenereNr", nullable: true)]
    private ?int $siautremouvcaissegenerenr = null;

    #[ORM\Column(name: "ProvienDeCaisseNum", nullable: true)]
    private ?int $proviendecaissenum = null;

    #[ORM\Column(name: "ProvienMvNum", nullable: true)]
    private ?int $provienmvnum = null;

    #[ORM\Column(name: "RefPiece", length: 255, nullable: true)]
    private ?string $refpiece = null;

    #[ORM\Column(name: "CPT")]
    private ?bool $cpt = null;

    #[ORM\Column(name: "EcritureAnnulee")]
    private ?bool $ecritureannulee = null;

    #[ORM\Column(name: "CTRL")]
    private ?bool $ctrl = null;

    #[ORM\Column(name: "CTRLPAR", length: 255, nullable: true)]
    private ?string $ctrlpar = null;

    #[ORM\Column(name: "CTRLLE", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $ctrlle = null;

    public function getCaisse(): ?int
    {
        return $this->caisse;
    }

    public function setCaisse(?int $caisse): static
    {
        $this->caisse = $caisse;

        return $this;
    }

    public function getN°(): ?int
    {
        return $this->n°;
    }

    public function setN°(int $n°): static
    {
        $this->n° = $n°;

        return $this;
    }

    public function getCaissetypeoperation(): ?int
    {
        return $this->caissetypeoperation;
    }

    public function setCaissetypeoperation(?int $caissetypeoperation): static
    {
        $this->caissetypeoperation = $caissetypeoperation;

        return $this;
    }

    public function getUser(): ?int
    {
        return $this->user;
    }

    public function setUser(?int $user): static
    {
        $this->user = $user;

        return $this;
    }

    public function getDatesaisie(): ?\DateTimeInterface
    {
        return $this->datesaisie;
    }

    public function setDatesaisie(?\DateTimeInterface $datesaisie): static
    {
        $this->datesaisie = $datesaisie;

        return $this;
    }

    public function getDateoperationcaisse(): ?\DateTimeInterface
    {
        return $this->dateoperationcaisse;
    }

    public function setDateoperationcaisse(?\DateTimeInterface $dateoperationcaisse): static
    {
        $this->dateoperationcaisse = $dateoperationcaisse;

        return $this;
    }

    public function getMontant(): ?float
    {
        return $this->montant;
    }

    public function setMontant(?float $montant): static
    {
        $this->montant = $montant;

        return $this;
    }

    public function getMotifcaisse(): ?int
    {
        return $this->motifcaisse;
    }

    public function setMotifcaisse(?int $motifcaisse): static
    {
        $this->motifcaisse = $motifcaisse;

        return $this;
    }

    public function getScanpiece(): ?string
    {
        return $this->scanpiece;
    }

    public function setScanpiece(?string $scanpiece): static
    {
        $this->scanpiece = $scanpiece;

        return $this;
    }

    public function getValide(): ?bool
    {
        return $this->valide;
    }

    public function setValide(bool $valide): static
    {
        $this->valide = $valide;

        return $this;
    }

    public function getBloquee(): ?bool
    {
        return $this->bloquee;
    }

    public function setBloquee(bool $bloquee): static
    {
        $this->bloquee = $bloquee;

        return $this;
    }

    public function getRelatedemployee(): ?int
    {
        return $this->relatedemployee;
    }

    public function setRelatedemployee(?int $relatedemployee): static
    {
        $this->relatedemployee = $relatedemployee;

        return $this;
    }

    public function getRelatedbanque(): ?int
    {
        return $this->relatedbanque;
    }

    public function setRelatedbanque(?int $relatedbanque): static
    {
        $this->relatedbanque = $relatedbanque;

        return $this;
    }

    public function getRelatedcaisse(): ?int
    {
        return $this->relatedcaisse;
    }

    public function setRelatedcaisse(?int $relatedcaisse): static
    {
        $this->relatedcaisse = $relatedcaisse;

        return $this;
    }

    public function getRelatedfrs(): ?int
    {
        return $this->relatedfrs;
    }

    public function setRelatedfrs(?int $relatedfrs): static
    {
        $this->relatedfrs = $relatedfrs;

        return $this;
    }

    public function getRelatedclt(): ?int
    {
        return $this->relatedclt;
    }

    public function setRelatedclt(?int $relatedclt): static
    {
        $this->relatedclt = $relatedclt;

        return $this;
    }

    public function getRelatedprestext(): ?int
    {
        return $this->relatedprestext;
    }

    public function setRelatedprestext(?int $relatedprestext): static
    {
        $this->relatedprestext = $relatedprestext;

        return $this;
    }

    public function getSiversementgenerenr(): ?int
    {
        return $this->siversementgenerenr;
    }

    public function setSiversementgenerenr(?int $siversementgenerenr): static
    {
        $this->siversementgenerenr = $siversementgenerenr;

        return $this;
    }

    public function getSiautremouvcaissegenerenr(): ?int
    {
        return $this->siautremouvcaissegenerenr;
    }

    public function setSiautremouvcaissegenerenr(?int $siautremouvcaissegenerenr): static
    {
        $this->siautremouvcaissegenerenr = $siautremouvcaissegenerenr;

        return $this;
    }

    public function getProviendecaissenum(): ?int
    {
        return $this->proviendecaissenum;
    }

    public function setProviendecaissenum(?int $proviendecaissenum): static
    {
        $this->proviendecaissenum = $proviendecaissenum;

        return $this;
    }

    public function getProvienmvnum(): ?int
    {
        return $this->provienmvnum;
    }

    public function setProvienmvnum(?int $provienmvnum): static
    {
        $this->provienmvnum = $provienmvnum;

        return $this;
    }

    public function getRefpiece(): ?string
    {
        return $this->refpiece;
    }

    public function setRefpiece(?string $refpiece): static
    {
        $this->refpiece = $refpiece;

        return $this;
    }

    public function getCpt(): ?bool
    {
        return $this->cpt;
    }

    public function setCpt(bool $cpt): static
    {
        $this->cpt = $cpt;

        return $this;
    }

    public function getEcritureannulee(): ?bool
    {
        return $this->ecritureannulee;
    }

    public function setEcritureannulee(bool $ecritureannulee): static
    {
        $this->ecritureannulee = $ecritureannulee;

        return $this;
    }

    public function getCtrl(): ?bool
    {
        return $this->ctrl;
    }

    public function setCtrl(bool $ctrl): static
    {
        $this->ctrl = $ctrl;

        return $this;
    }

    public function getCtrlpar(): ?string
    {
        return $this->ctrlpar;
    }

    public function setCtrlpar(?string $ctrlpar): static
    {
        $this->ctrlpar = $ctrlpar;

        return $this;
    }

    public function getCtrlle(): ?\DateTimeInterface
    {
        return $this->ctrlle;
    }

    public function setCtrlle(?\DateTimeInterface $ctrlle): static
    {
        $this->ctrlle = $ctrlle;

        return $this;
    }
}
