<?php

namespace App\Entity\Nd;

use App\Repository\Nd\TblpiecesdepayementclientsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'tblPiecesDePayementClients')]
#[ORM\Entity(repositoryClass: TblpiecesdepayementclientsRepository::class)]
class Tblpiecesdepayementclients
{
    #[ORM\Column(name: "N°")]
    private ?int $n° = null;

    #[ORM\Column(name: "Selected")]
    private ?bool $selected = null;

    #[ORM\Column(name: "Deleted")]
    private ?bool $deleted = null;

    #[ORM\Column(name: "DeletedBy", nullable: true)]
    private ?int $deletedby = null;

    #[ORM\Column(name: "DeletedOn", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $deletedon = null;

    #[ORM\Column(name: "NumRemiseTemps", nullable: true)]
    private ?int $numremisetemps = null;

    #[ORM\Column(name: "Valide")]
    private ?bool $valide = null;

    #[ORM\Column(name: "DateReception", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $datereception = null;

    #[ORM\Column(name: "Commercial", nullable: true)]
    private ?int $commercial = null;

    #[ORM\Column(name: "DateRemise", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateremise = null;

    #[ORM\Column(name: "Par", nullable: true)]
    private ?int $par = null;

    #[ORM\Column(name: "TypeDePaiement", nullable: true)]
    private ?int $typedepaiement = null;

    #[ORM\Column(name: "Client", nullable: true)]
    private ?int $client = null;

    #[ORM\Column(name: "NumPiece", length: 255, nullable: true)]
    private ?string $numpiece = null;

    #[ORM\Column(name: "EmetteurPiece", length: 255, nullable: true)]
    private ?string $emetteurpiece = null;

    #[ORM\Column(name: "Montant", nullable: true)]
    private ?float $montant = null;

    #[ORM\Column(name: "Echeance", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $echeance = null;

    #[ORM\Column(name: "DateFactureRegler", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $datefactureregler = null;

    #[ORM\Column(name: "NotreBanque", nullable: true)]
    private ?int $notrebanque = null;

    #[ORM\Column(name: "AgenceBanque", nullable: true)]
    private ?int $agencebanque = null;

    #[ORM\Column(name: "Sort", nullable: true)]
    private ?int $sort = null;

    #[ORM\Column(name: "SortAviserLe", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $sortaviserle = null;

    #[ORM\Column(name: "Remis")]
    private ?bool $remis = null;

    #[ORM\Column(name: "NumRemise", nullable: true)]
    private ?int $numremise = null;

    #[ORM\Column(name: "NumPieceBanque", length: 255, nullable: true)]
    private ?string $numpiecebanque = null;

    #[ORM\Column(name: "ScanPieceBanque", length: 255, nullable: true)]
    private ?string $scanpiecebanque = null;

    #[ORM\Column(name: "DatePieceBanque", length: 255, nullable: true)]
    private ?string $datepiecebanque = null;

    #[ORM\Column(name: "ScanDelaPiece", length: 255, nullable: true)]
    private ?string $scandelapiece = null;

    #[ORM\Column(name: "TypeDeRemise", length: 255, nullable: true)]
    private ?string $typederemise = null;

    #[ORM\Column(name: "ScanEnCasDIMPAYE", length: 255, nullable: true)]
    private ?string $scanencasdimpaye = null;

    #[ORM\Column(name: "BanqueDuTire", nullable: true)]
    private ?int $banquedutire = null;

    #[ORM\Column(name: "VilleBanqueTire", nullable: true)]
    private ?int $villebanquetire = null;

    #[ORM\Column(name: "DateValeurCredit", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $datevaleurcredit = null;

    #[ORM\Column(name: "CoutEscompte", nullable: true)]
    private ?int $coutescompte = null;

    #[ORM\Column(name: "DocumentBloque")]
    private ?bool $documentbloque = null;

    #[ORM\Column(name: "Naissance", nullable: true)]
    private ?int $naissance = null;

    #[ORM\Column(name: "NePasVerser")]
    private ?bool $nepasverser = null;

    #[ORM\Column(name: "SiEspeceNumOpCaisse", nullable: true)]
    private ?int $siespecenumopcaisse = null;

    #[ORM\Column(name: "SortSiImpaye", nullable: true)]
    private ?int $sortsiimpaye = null;

    #[ORM\Column(name: "SiImpaye_NumRegRepresentation", nullable: true)]
    private ?int $siimpayeNumregrepresentation = null;

    #[ORM\Column(name: "SiRepresente_NumRegInitial", nullable: true)]
    private ?int $sirepresenteNumreginitial = null;

    #[ORM\Column(name: "SortFinalImpayeRegler")]
    private ?bool $sortfinalimpayeregler = null;

    #[ORM\Column(name: "Annuler")]
    private ?bool $annuler = null;

    public function getN°(): ?int
    {
        return $this->n°;
    }

    public function setN°(int $n°): static
    {
        $this->n° = $n°;

        return $this;
    }

    public function getSelected(): ?bool
    {
        return $this->selected;
    }

    public function setSelected(bool $selected): static
    {
        $this->selected = $selected;

        return $this;
    }

    public function getDeleted(): ?bool
    {
        return $this->deleted;
    }

    public function setDeleted(bool $deleted): static
    {
        $this->deleted = $deleted;

        return $this;
    }

    public function getDeletedby(): ?int
    {
        return $this->deletedby;
    }

    public function setDeletedby(?int $deletedby): static
    {
        $this->deletedby = $deletedby;

        return $this;
    }

    public function getDeletedon(): ?\DateTimeInterface
    {
        return $this->deletedon;
    }

    public function setDeletedon(?\DateTimeInterface $deletedon): static
    {
        $this->deletedon = $deletedon;

        return $this;
    }

    public function getNumremisetemps(): ?int
    {
        return $this->numremisetemps;
    }

    public function setNumremisetemps(?int $numremisetemps): static
    {
        $this->numremisetemps = $numremisetemps;

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

    public function getDatereception(): ?\DateTimeInterface
    {
        return $this->datereception;
    }

    public function setDatereception(?\DateTimeInterface $datereception): static
    {
        $this->datereception = $datereception;

        return $this;
    }

    public function getCommercial(): ?int
    {
        return $this->commercial;
    }

    public function setCommercial(?int $commercial): static
    {
        $this->commercial = $commercial;

        return $this;
    }

    public function getDateremise(): ?\DateTimeInterface
    {
        return $this->dateremise;
    }

    public function setDateremise(?\DateTimeInterface $dateremise): static
    {
        $this->dateremise = $dateremise;

        return $this;
    }

    public function getPar(): ?int
    {
        return $this->par;
    }

    public function setPar(?int $par): static
    {
        $this->par = $par;

        return $this;
    }

    public function getTypedepaiement(): ?int
    {
        return $this->typedepaiement;
    }

    public function setTypedepaiement(?int $typedepaiement): static
    {
        $this->typedepaiement = $typedepaiement;

        return $this;
    }

    public function getClient(): ?int
    {
        return $this->client;
    }

    public function setClient(?int $client): static
    {
        $this->client = $client;

        return $this;
    }

    public function getNumpiece(): ?string
    {
        return $this->numpiece;
    }

    public function setNumpiece(?string $numpiece): static
    {
        $this->numpiece = $numpiece;

        return $this;
    }

    public function getEmetteurpiece(): ?string
    {
        return $this->emetteurpiece;
    }

    public function setEmetteurpiece(?string $emetteurpiece): static
    {
        $this->emetteurpiece = $emetteurpiece;

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

    public function getEcheance(): ?\DateTimeInterface
    {
        return $this->echeance;
    }

    public function setEcheance(?\DateTimeInterface $echeance): static
    {
        $this->echeance = $echeance;

        return $this;
    }

    public function getDatefactureregler(): ?\DateTimeInterface
    {
        return $this->datefactureregler;
    }

    public function setDatefactureregler(?\DateTimeInterface $datefactureregler): static
    {
        $this->datefactureregler = $datefactureregler;

        return $this;
    }

    public function getNotrebanque(): ?int
    {
        return $this->notrebanque;
    }

    public function setNotrebanque(?int $notrebanque): static
    {
        $this->notrebanque = $notrebanque;

        return $this;
    }

    public function getAgencebanque(): ?int
    {
        return $this->agencebanque;
    }

    public function setAgencebanque(?int $agencebanque): static
    {
        $this->agencebanque = $agencebanque;

        return $this;
    }

    public function getSort(): ?int
    {
        return $this->sort;
    }

    public function setSort(?int $sort): static
    {
        $this->sort = $sort;

        return $this;
    }

    public function getSortaviserle(): ?\DateTimeInterface
    {
        return $this->sortaviserle;
    }

    public function setSortaviserle(?\DateTimeInterface $sortaviserle): static
    {
        $this->sortaviserle = $sortaviserle;

        return $this;
    }

    public function getRemis(): ?bool
    {
        return $this->remis;
    }

    public function setRemis(bool $remis): static
    {
        $this->remis = $remis;

        return $this;
    }

    public function getNumremise(): ?int
    {
        return $this->numremise;
    }

    public function setNumremise(?int $numremise): static
    {
        $this->numremise = $numremise;

        return $this;
    }

    public function getNumpiecebanque(): ?string
    {
        return $this->numpiecebanque;
    }

    public function setNumpiecebanque(?string $numpiecebanque): static
    {
        $this->numpiecebanque = $numpiecebanque;

        return $this;
    }

    public function getScanpiecebanque(): ?string
    {
        return $this->scanpiecebanque;
    }

    public function setScanpiecebanque(?string $scanpiecebanque): static
    {
        $this->scanpiecebanque = $scanpiecebanque;

        return $this;
    }

    public function getDatepiecebanque(): ?string
    {
        return $this->datepiecebanque;
    }

    public function setDatepiecebanque(?string $datepiecebanque): static
    {
        $this->datepiecebanque = $datepiecebanque;

        return $this;
    }

    public function getScandelapiece(): ?string
    {
        return $this->scandelapiece;
    }

    public function setScandelapiece(?string $scandelapiece): static
    {
        $this->scandelapiece = $scandelapiece;

        return $this;
    }

    public function getTypederemise(): ?string
    {
        return $this->typederemise;
    }

    public function setTypederemise(?string $typederemise): static
    {
        $this->typederemise = $typederemise;

        return $this;
    }

    public function getScanencasdimpaye(): ?string
    {
        return $this->scanencasdimpaye;
    }

    public function setScanencasdimpaye(?string $scanencasdimpaye): static
    {
        $this->scanencasdimpaye = $scanencasdimpaye;

        return $this;
    }

    public function getBanquedutire(): ?int
    {
        return $this->banquedutire;
    }

    public function setBanquedutire(?int $banquedutire): static
    {
        $this->banquedutire = $banquedutire;

        return $this;
    }

    public function getVillebanquetire(): ?int
    {
        return $this->villebanquetire;
    }

    public function setVillebanquetire(?int $villebanquetire): static
    {
        $this->villebanquetire = $villebanquetire;

        return $this;
    }

    public function getDatevaleurcredit(): ?\DateTimeInterface
    {
        return $this->datevaleurcredit;
    }

    public function setDatevaleurcredit(?\DateTimeInterface $datevaleurcredit): static
    {
        $this->datevaleurcredit = $datevaleurcredit;

        return $this;
    }

    public function getCoutescompte(): ?int
    {
        return $this->coutescompte;
    }

    public function setCoutescompte(?int $coutescompte): static
    {
        $this->coutescompte = $coutescompte;

        return $this;
    }

    public function getDocumentbloque(): ?bool
    {
        return $this->documentbloque;
    }

    public function setDocumentbloque(bool $documentbloque): static
    {
        $this->documentbloque = $documentbloque;

        return $this;
    }

    public function getNaissance(): ?int
    {
        return $this->naissance;
    }

    public function setNaissance(?int $naissance): static
    {
        $this->naissance = $naissance;

        return $this;
    }

    public function getNepasverser(): ?bool
    {
        return $this->nepasverser;
    }

    public function setNepasverser(bool $nepasverser): static
    {
        $this->nepasverser = $nepasverser;

        return $this;
    }

    public function getSiespecenumopcaisse(): ?int
    {
        return $this->siespecenumopcaisse;
    }

    public function setSiespecenumopcaisse(?int $siespecenumopcaisse): static
    {
        $this->siespecenumopcaisse = $siespecenumopcaisse;

        return $this;
    }

    public function getSortsiimpaye(): ?int
    {
        return $this->sortsiimpaye;
    }

    public function setSortsiimpaye(?int $sortsiimpaye): static
    {
        $this->sortsiimpaye = $sortsiimpaye;

        return $this;
    }

    public function getSiimpayeNumregrepresentation(): ?int
    {
        return $this->siimpayeNumregrepresentation;
    }

    public function setSiimpayeNumregrepresentation(?int $siimpayeNumregrepresentation): static
    {
        $this->siimpayeNumregrepresentation = $siimpayeNumregrepresentation;

        return $this;
    }

    public function getSirepresenteNumreginitial(): ?int
    {
        return $this->sirepresenteNumreginitial;
    }

    public function setSirepresenteNumreginitial(?int $sirepresenteNumreginitial): static
    {
        $this->sirepresenteNumreginitial = $sirepresenteNumreginitial;

        return $this;
    }

    public function getSortfinalimpayeregler(): ?bool
    {
        return $this->sortfinalimpayeregler;
    }

    public function setSortfinalimpayeregler(bool $sortfinalimpayeregler): static
    {
        $this->sortfinalimpayeregler = $sortfinalimpayeregler;

        return $this;
    }

    public function getAnnuler(): ?bool
    {
        return $this->annuler;
    }

    public function setAnnuler(bool $annuler): static
    {
        $this->annuler = $annuler;

        return $this;
    }
}
