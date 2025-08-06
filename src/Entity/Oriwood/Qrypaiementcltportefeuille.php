<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\QrypaiementcltportefeuilleRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'qryPaiementcltPorteFeuille')]
#[ORM\Entity(repositoryClass: QrypaiementcltportefeuilleRepository::class)]
class Qrypaiementcltportefeuille
{
    #[ORM\Column(name: "NomClient", length: 255, nullable: true)]
    private ?string $nomclient = null;

    #[ORM\Column(name: "Com", length: 255, nullable: true)]
    private ?string $com = null;

    #[ORM\Column(name: "Selected")]
    private ?bool $selected = null;

    #[ORM\Column(name: "[tblPiecesDePayementClients.Valide]")]
    private ?bool $tblpiecesdepayementclients_valide = null;

    #[ORM\Column(name: "[N° Piece]", length: 255, nullable: true)]
    private ?string $nPiece = null;

    #[ORM\Column(name: "Montant", nullable: true)]
    private ?float $montant = null;

    #[ORM\Column(name: "EchPay", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $echpay = null;

    #[ORM\Column(name: "DateFactureRegler", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $datefactureregler = null;

    #[ORM\Column(name: "SortSiImpaye", nullable: true)]
    private ?int $sortsiimpaye = null;

    #[ORM\Column(name: "Annuler")]
    private ?bool $annuler = null;

    #[ORM\Column(name: "NePasVerser")]
    private ?bool $nepasverser = null;

    #[ORM\Column(name: "Sort", nullable: true)]
    private ?int $sort = null;

    #[ORM\Column(name: "[Type Reg]", length: 255, nullable: true)]
    private ?string $typeReg = null;

    #[ORM\Column(name: "Commarcial_F", length: 255, nullable: true)]
    private ?string $commarcialF = null;

    #[ORM\Column(name: "Client_F", length: 255, nullable: true)]
    private ?string $clientF = null;

    #[ORM\Column(name: "Delai", nullable: true)]
    private ?float $delai = null;

    #[ORM\Column(name: "Sort_Filtre", nullable: true)]
    private ?int $sortFiltre = null;

    #[ORM\Column(name: "Delai_Auj", nullable: true)]
    private ?float $delaiAuj = null;

    #[ORM\Column(name: "[tblPiecesDePayementClients.N°]")]
    private ?int $tblpiecesdepayementclients_n = null;

    #[ORM\Column(name: "[tblPiecesDePayementClients.AdminsOnly]")]
    private ?bool $tblpiecesdepayementclients_adminsonly = null;

    #[ORM\Column(name: "Deleted")]
    private ?bool $deleted = null;

    #[ORM\Column(name: "DeletedBy", nullable: true)]
    private ?int $deletedby = null;

    #[ORM\Column(name: "DeletedOn", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $deletedon = null;

    #[ORM\Column(name: "NumRemiseTemps", nullable: true)]
    private ?int $numremisetemps = null;

    #[ORM\Column(name: "DateReception", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $datereception = null;

    #[ORM\Column(name: "[tblPiecesDePayementClients.Commercial]", nullable: true)]
    private ?int $tblpiecesdepayementclients_commercial = null;

    #[ORM\Column(name: "DateRemise", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateremise = null;

    #[ORM\Column(name: "Par", nullable: true)]
    private ?int $par = null;

    #[ORM\Column(name: "TypeDePaiement", nullable: true)]
    private ?int $typedepaiement = null;

    #[ORM\Column(name: "Client", nullable: true)]
    private ?int $client = null;

    #[ORM\Column(name: "EmetteurPiece", length: 255, nullable: true)]
    private ?string $emetteurpiece = null;

    #[ORM\Column(name: "NotreBanque", nullable: true)]
    private ?int $notrebanque = null;

    #[ORM\Column(name: "AgenceBanque", nullable: true)]
    private ?int $agencebanque = null;

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

    #[ORM\Column(name: "SiEspeceNumOpCaisse", nullable: true)]
    private ?int $siespecenumopcaisse = null;

    #[ORM\Column(name: "SiImpaye_NumRegRepresentation", nullable: true)]
    private ?int $siimpayeNumregrepresentation = null;

    #[ORM\Column(name: "SiRepresente_NumRegInitial", nullable: true)]
    private ?int $sirepresenteNumreginitial = null;

    #[ORM\Column(name: "SortFinalImpayeRegler")]
    private ?bool $sortfinalimpayeregler = null;

    #[ORM\Column(name: "[tblEmployesSTE.N°]")]
    private ?int $tblemployesste_n = null;

    #[ORM\Column(name: "[tblEmployesSTE.Nom]", length: 255, nullable: true)]
    private ?string $tblemployesste_nom = null;

    #[ORM\Column(name: "active")]
    private ?bool $active = null;

    #[ORM\Column(name: "Admin")]
    private ?bool $admin = null;

    #[ORM\Column(name: "[tblEmployesSTE.Commercial]")]
    private ?bool $tblemployesste_commercial = null;

    #[ORM\Column(name: "Logistique")]
    private ?bool $logistique = null;

    #[ORM\Column(name: "Depot")]
    private ?bool $depot = null;

    #[ORM\Column(name: "Permis", length: 255, nullable: true)]
    private ?string $permis = null;

    #[ORM\Column(name: "DatePermis", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $datepermis = null;

    #[ORM\Column(name: "DateExpirationPermis", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateexpirationpermis = null;

    #[ORM\Column(name: "ScanPermis", length: 255, nullable: true)]
    private ?string $scanpermis = null;

    #[ORM\Column(name: "CIN", length: 255, nullable: true)]
    private ?string $cin = null;

    #[ORM\Column(name: "DateExpirationCIN", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateexpirationcin = null;

    #[ORM\Column(name: "NumTel", length: 255, nullable: true)]
    private ?string $numtel = null;

    #[ORM\Column(name: "Vehicule_OuiNon")]
    private ?bool $vehiculeOuinon = null;

    #[ORM\Column(name: "Vehicule", nullable: true)]
    private ?int $vehicule = null;

    #[ORM\Column(name: "Carburant_OuiNon")]
    private ?bool $carburantOuinon = null;

    #[ORM\Column(name: "NumCarteCarburant", length: 255, nullable: true)]
    private ?string $numcartecarburant = null;

    #[ORM\Column(name: "[tblClientsLocaux.N°]")]
    private ?int $tblclientslocaux_n = null;

    #[ORM\Column(name: "CodeClientSage", length: 255, nullable: true)]
    private ?string $codeclientsage = null;

    #[ORM\Column(name: "[tblClientsLocaux.Ville]", length: 255, nullable: true)]
    private ?string $tblclientslocaux_ville = null;

    #[ORM\Column(name: "[tblClientsLocaux.Adresse]", length: 255, nullable: true)]
    private ?string $tblclientslocaux_adresse = null;

    #[ORM\Column(name: "CodePostal", length: 255, nullable: true)]
    private ?string $codepostal = null;

    #[ORM\Column(name: "TelFixe", length: 255, nullable: true)]
    private ?string $telfixe = null;

    #[ORM\Column(name: "Fax", length: 255, nullable: true)]
    private ?string $fax = null;

    #[ORM\Column(name: "Email", length: 255, nullable: true)]
    private ?string $email = null;

    #[ORM\Column(name: "Contact", length: 255, nullable: true)]
    private ?string $contact = null;

    #[ORM\Column(name: "Categorie", nullable: true)]
    private ?int $categorie = null;

    #[ORM\Column(name: "[tblTypeModePaiementLocaux.N°]")]
    private ?int $tbltypemodepaiementlocaux_n = null;

    #[ORM\Column(name: "Banque")]
    private ?bool $banque = null;

    #[ORM\Column(name: "Risque")]
    private ?bool $risque = null;

    #[ORM\Column(name: "AffectCommercial")]
    private ?bool $affectcommercial = null;

    #[ORM\Column(name: "NumPiece")]
    private ?bool $numpiece = null;

    #[ORM\Column(name: "Escompte")]
    private ?bool $escompte = null;

    #[ORM\Column(name: "AffecteClient")]
    private ?bool $affecteclient = null;

    #[ORM\Column(name: "AutreAgenceBanque")]
    private ?bool $autreagencebanque = null;

    #[ORM\Column(name: "[tblVersementsBanqueMarocaines.N°]")]
    private ?int $tblversementsbanquemarocaines_n = null;

    #[ORM\Column(name: "[tblVersementsBanqueMarocaines.AdminsOnly]")]
    private ?bool $tblversementsbanquemarocaines_adminsonly = null;

    #[ORM\Column(name: "DateVersement", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateversement = null;

    #[ORM\Column(name: "VersementPar", nullable: true)]
    private ?int $versementpar = null;

    #[ORM\Column(name: "CheminScanVersement", length: 255, nullable: true)]
    private ?string $cheminscanversement = null;

    #[ORM\Column(name: "VersChezBanque", nullable: true)]
    private ?int $verschezbanque = null;

    #[ORM\Column(name: "VersChezAgenceBanque", nullable: true)]
    private ?int $verschezagencebanque = null;

    #[ORM\Column(name: "ReferenceBanque", length: 255, nullable: true)]
    private ?string $referencebanque = null;

    #[ORM\Column(name: "TypeVersements", nullable: true)]
    private ?int $typeversements = null;

    #[ORM\Column(name: "TypeReglementAVerser", nullable: true)]
    private ?int $typereglementaverser = null;

    #[ORM\Column(name: "Locked")]
    private ?bool $locked = null;

    #[ORM\Column(name: "[tblVersementsBanqueMarocaines.Valide]")]
    private ?bool $tblversementsbanquemarocaines_valide = null;

    #[ORM\Column(name: "SiVersementEspeceNumPiece", nullable: true)]
    private ?int $siversementespecenumpiece = null;

    #[ORM\Column(name: "[tblnosbanques.N°]")]
    private ?int $tblnosbanques_n = null;

    #[ORM\Column(name: "[tblnosbanques.Nom]", length: 255, nullable: true)]
    private ?string $tblnosbanques_nom = null;

    #[ORM\Column(name: "Abrev", length: 255, nullable: true)]
    private ?string $abrev = null;

    #[ORM\Column(name: "EscompteEffets")]
    private ?bool $escompteeffets = null;

    #[ORM\Column(name: "PlafondEscompte", nullable: true)]
    private ?float $plafondescompte = null;

    #[ORM\Column(name: "TauxEscompte", nullable: true)]
    private ?float $tauxescompte = null;

    #[ORM\Column(name: "Agence", length: 255, nullable: true)]
    private ?string $agence = null;

    #[ORM\Column(name: "[tblnosbanques.Adresse]", length: 255, nullable: true)]
    private ?string $tblnosbanques_adresse = null;

    #[ORM\Column(name: "CodePostale", length: 255, nullable: true)]
    private ?string $codepostale = null;

    #[ORM\Column(name: "[tblnosbanques.Ville]", length: 255, nullable: true)]
    private ?string $tblnosbanques_ville = null;

    #[ORM\Column(name: "Pays", length: 255, nullable: true)]
    private ?string $pays = null;

    #[ORM\Column(name: "Swift", length: 255, nullable: true)]
    private ?string $swift = null;

    #[ORM\Column(name: "RIB", length: 255, nullable: true)]
    private ?string $rib = null;

    #[ORM\Column(name: "IBAN", length: 255, nullable: true)]
    private ?string $iban = null;

    #[ORM\Column(name: "EtatOrdreVirementEtranger", length: 255, nullable: true)]
    private ?string $etatordrevirementetranger = null;

    #[ORM\Column(name: "FC", nullable: true)]
    private ?float $fc = null;

    #[ORM\Column(name: "RefinDev", nullable: true)]
    private ?float $refindev = null;

    #[ORM\Column(name: "RefinMad", nullable: true)]
    private ?float $refinmad = null;

    #[ORM\Column(name: "OC", nullable: true)]
    private ?float $oc = null;

    #[ORM\Column(name: "TXFC", nullable: true)]
    private ?float $txfc = null;

    #[ORM\Column(name: "TXRefDev", nullable: true)]
    private ?float $txrefdev = null;

    #[ORM\Column(name: "TXOC", nullable: true)]
    private ?float $txoc = null;

    #[ORM\Column(name: "TXRefMAD", nullable: true)]
    private ?float $txrefmad = null;

    public function getNomclient(): ?string
    {
        return $this->nomclient;
    }

    public function setNomclient(?string $nomclient): static
    {
        $this->nomclient = $nomclient;

        return $this;
    }

    public function getCom(): ?string
    {
        return $this->com;
    }

    public function setCom(?string $com): static
    {
        $this->com = $com;

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

    public function getTblpiecesdepayementclients_valide(): ?bool
    {
        return $this->tblpiecesdepayementclients_valide;
    }

    public function setTblpiecesdepayementclients_valide(bool $tblpiecesdepayementclients_valide): static
    {
        $this->tblpiecesdepayementclients_valide = $tblpiecesdepayementclients_valide;

        return $this;
    }

    public function getNPiece(): ?string
    {
        return $this->nPiece;
    }

    public function setNPiece(?string $nPiece): static
    {
        $this->nPiece = $nPiece;

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

    public function getEchpay(): ?\DateTimeInterface
    {
        return $this->echpay;
    }

    public function setEchpay(?\DateTimeInterface $echpay): static
    {
        $this->echpay = $echpay;

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

    public function getSortsiimpaye(): ?int
    {
        return $this->sortsiimpaye;
    }

    public function setSortsiimpaye(?int $sortsiimpaye): static
    {
        $this->sortsiimpaye = $sortsiimpaye;

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

    public function getNepasverser(): ?bool
    {
        return $this->nepasverser;
    }

    public function setNepasverser(bool $nepasverser): static
    {
        $this->nepasverser = $nepasverser;

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

    public function getTypeReg(): ?string
    {
        return $this->typeReg;
    }

    public function setTypeReg(?string $typeReg): static
    {
        $this->typeReg = $typeReg;

        return $this;
    }

    public function getCommarcialF(): ?string
    {
        return $this->commarcialF;
    }

    public function setCommarcialF(?string $commarcialF): static
    {
        $this->commarcialF = $commarcialF;

        return $this;
    }

    public function getClientF(): ?string
    {
        return $this->clientF;
    }

    public function setClientF(?string $clientF): static
    {
        $this->clientF = $clientF;

        return $this;
    }

    public function getDelai(): ?float
    {
        return $this->delai;
    }

    public function setDelai(?float $delai): static
    {
        $this->delai = $delai;

        return $this;
    }

    public function getSortFiltre(): ?int
    {
        return $this->sortFiltre;
    }

    public function setSortFiltre(?int $sortFiltre): static
    {
        $this->sortFiltre = $sortFiltre;

        return $this;
    }

    public function getDelaiAuj(): ?float
    {
        return $this->delaiAuj;
    }

    public function setDelaiAuj(?float $delaiAuj): static
    {
        $this->delaiAuj = $delaiAuj;

        return $this;
    }

    public function getTblpiecesdepayementclients_n(): ?int
    {
        return $this->tblpiecesdepayementclients_n;
    }

    public function setTblpiecesdepayementclients_n(int $tblpiecesdepayementclients_n): static
    {
        $this->tblpiecesdepayementclients_n = $tblpiecesdepayementclients_n;

        return $this;
    }

    public function getTblpiecesdepayementclients_adminsonly(): ?bool
    {
        return $this->tblpiecesdepayementclients_adminsonly;
    }

    public function setTblpiecesdepayementclients_adminsonly(bool $tblpiecesdepayementclients_adminsonly): static
    {
        $this->tblpiecesdepayementclients_adminsonly = $tblpiecesdepayementclients_adminsonly;

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

    public function getDatereception(): ?\DateTimeInterface
    {
        return $this->datereception;
    }

    public function setDatereception(?\DateTimeInterface $datereception): static
    {
        $this->datereception = $datereception;

        return $this;
    }

    public function getTblpiecesdepayementclients_commercial(): ?int
    {
        return $this->tblpiecesdepayementclients_commercial;
    }

    public function setTblpiecesdepayementclients_commercial(?int $tblpiecesdepayementclients_commercial): static
    {
        $this->tblpiecesdepayementclients_commercial = $tblpiecesdepayementclients_commercial;

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

    public function getEmetteurpiece(): ?string
    {
        return $this->emetteurpiece;
    }

    public function setEmetteurpiece(?string $emetteurpiece): static
    {
        $this->emetteurpiece = $emetteurpiece;

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

    public function getSiespecenumopcaisse(): ?int
    {
        return $this->siespecenumopcaisse;
    }

    public function setSiespecenumopcaisse(?int $siespecenumopcaisse): static
    {
        $this->siespecenumopcaisse = $siespecenumopcaisse;

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

    public function getTblemployesste_n(): ?int
    {
        return $this->tblemployesste_n;
    }

    public function setTblemployesste_n(int $tblemployesste_n): static
    {
        $this->tblemployesste_n = $tblemployesste_n;

        return $this;
    }

    public function getTblemployesste_nom(): ?string
    {
        return $this->tblemployesste_nom;
    }

    public function setTblemployesste_nom(?string $tblemployesste_nom): static
    {
        $this->tblemployesste_nom = $tblemployesste_nom;

        return $this;
    }

    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(bool $active): static
    {
        $this->active = $active;

        return $this;
    }

    public function getAdmin(): ?bool
    {
        return $this->admin;
    }

    public function setAdmin(bool $admin): static
    {
        $this->admin = $admin;

        return $this;
    }

    public function getTblemployesste_commercial(): ?bool
    {
        return $this->tblemployesste_commercial;
    }

    public function setTblemployesste_commercial(bool $tblemployesste_commercial): static
    {
        $this->tblemployesste_commercial = $tblemployesste_commercial;

        return $this;
    }

    public function getLogistique(): ?bool
    {
        return $this->logistique;
    }

    public function setLogistique(bool $logistique): static
    {
        $this->logistique = $logistique;

        return $this;
    }

    public function getDepot(): ?bool
    {
        return $this->depot;
    }

    public function setDepot(bool $depot): static
    {
        $this->depot = $depot;

        return $this;
    }

    public function getPermis(): ?string
    {
        return $this->permis;
    }

    public function setPermis(?string $permis): static
    {
        $this->permis = $permis;

        return $this;
    }

    public function getDatepermis(): ?\DateTimeInterface
    {
        return $this->datepermis;
    }

    public function setDatepermis(?\DateTimeInterface $datepermis): static
    {
        $this->datepermis = $datepermis;

        return $this;
    }

    public function getDateexpirationpermis(): ?\DateTimeInterface
    {
        return $this->dateexpirationpermis;
    }

    public function setDateexpirationpermis(?\DateTimeInterface $dateexpirationpermis): static
    {
        $this->dateexpirationpermis = $dateexpirationpermis;

        return $this;
    }

    public function getScanpermis(): ?string
    {
        return $this->scanpermis;
    }

    public function setScanpermis(?string $scanpermis): static
    {
        $this->scanpermis = $scanpermis;

        return $this;
    }

    public function getCin(): ?string
    {
        return $this->cin;
    }

    public function setCin(?string $cin): static
    {
        $this->cin = $cin;

        return $this;
    }

    public function getDateexpirationcin(): ?\DateTimeInterface
    {
        return $this->dateexpirationcin;
    }

    public function setDateexpirationcin(?\DateTimeInterface $dateexpirationcin): static
    {
        $this->dateexpirationcin = $dateexpirationcin;

        return $this;
    }

    public function getNumtel(): ?string
    {
        return $this->numtel;
    }

    public function setNumtel(?string $numtel): static
    {
        $this->numtel = $numtel;

        return $this;
    }

    public function getVehiculeOuinon(): ?bool
    {
        return $this->vehiculeOuinon;
    }

    public function setVehiculeOuinon(bool $vehiculeOuinon): static
    {
        $this->vehiculeOuinon = $vehiculeOuinon;

        return $this;
    }

    public function getVehicule(): ?int
    {
        return $this->vehicule;
    }

    public function setVehicule(?int $vehicule): static
    {
        $this->vehicule = $vehicule;

        return $this;
    }

    public function getCarburantOuinon(): ?bool
    {
        return $this->carburantOuinon;
    }

    public function setCarburantOuinon(bool $carburantOuinon): static
    {
        $this->carburantOuinon = $carburantOuinon;

        return $this;
    }

    public function getNumcartecarburant(): ?string
    {
        return $this->numcartecarburant;
    }

    public function setNumcartecarburant(?string $numcartecarburant): static
    {
        $this->numcartecarburant = $numcartecarburant;

        return $this;
    }

    public function getTblclientslocaux_n(): ?int
    {
        return $this->tblclientslocaux_n;
    }

    public function setTblclientslocaux_n(int $tblclientslocaux_n): static
    {
        $this->tblclientslocaux_n = $tblclientslocaux_n;

        return $this;
    }

    public function getCodeclientsage(): ?string
    {
        return $this->codeclientsage;
    }

    public function setCodeclientsage(?string $codeclientsage): static
    {
        $this->codeclientsage = $codeclientsage;

        return $this;
    }

    public function getTblclientslocaux_ville(): ?string
    {
        return $this->tblclientslocaux_ville;
    }

    public function setTblclientslocaux_ville(?string $tblclientslocaux_ville): static
    {
        $this->tblclientslocaux_ville = $tblclientslocaux_ville;

        return $this;
    }

    public function getTblclientslocaux_adresse(): ?string
    {
        return $this->tblclientslocaux_adresse;
    }

    public function setTblclientslocaux_adresse(?string $tblclientslocaux_adresse): static
    {
        $this->tblclientslocaux_adresse = $tblclientslocaux_adresse;

        return $this;
    }

    public function getCodepostal(): ?string
    {
        return $this->codepostal;
    }

    public function setCodepostal(?string $codepostal): static
    {
        $this->codepostal = $codepostal;

        return $this;
    }

    public function getTelfixe(): ?string
    {
        return $this->telfixe;
    }

    public function setTelfixe(?string $telfixe): static
    {
        $this->telfixe = $telfixe;

        return $this;
    }

    public function getFax(): ?string
    {
        return $this->fax;
    }

    public function setFax(?string $fax): static
    {
        $this->fax = $fax;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getContact(): ?string
    {
        return $this->contact;
    }

    public function setContact(?string $contact): static
    {
        $this->contact = $contact;

        return $this;
    }

    public function getCategorie(): ?int
    {
        return $this->categorie;
    }

    public function setCategorie(?int $categorie): static
    {
        $this->categorie = $categorie;

        return $this;
    }

    public function getTbltypemodepaiementlocaux_n(): ?int
    {
        return $this->tbltypemodepaiementlocaux_n;
    }

    public function setTbltypemodepaiementlocaux_n(int $tbltypemodepaiementlocaux_n): static
    {
        $this->tbltypemodepaiementlocaux_n = $tbltypemodepaiementlocaux_n;

        return $this;
    }

    public function getBanque(): ?bool
    {
        return $this->banque;
    }

    public function setBanque(bool $banque): static
    {
        $this->banque = $banque;

        return $this;
    }

    public function getRisque(): ?bool
    {
        return $this->risque;
    }

    public function setRisque(bool $risque): static
    {
        $this->risque = $risque;

        return $this;
    }

    public function getAffectcommercial(): ?bool
    {
        return $this->affectcommercial;
    }

    public function setAffectcommercial(bool $affectcommercial): static
    {
        $this->affectcommercial = $affectcommercial;

        return $this;
    }

    public function getNumpiece(): ?bool
    {
        return $this->numpiece;
    }

    public function setNumpiece(bool $numpiece): static
    {
        $this->numpiece = $numpiece;

        return $this;
    }

    public function getEscompte(): ?bool
    {
        return $this->escompte;
    }

    public function setEscompte(bool $escompte): static
    {
        $this->escompte = $escompte;

        return $this;
    }

    public function getAffecteclient(): ?bool
    {
        return $this->affecteclient;
    }

    public function setAffecteclient(bool $affecteclient): static
    {
        $this->affecteclient = $affecteclient;

        return $this;
    }

    public function getAutreagencebanque(): ?bool
    {
        return $this->autreagencebanque;
    }

    public function setAutreagencebanque(bool $autreagencebanque): static
    {
        $this->autreagencebanque = $autreagencebanque;

        return $this;
    }

    public function getTblversementsbanquemarocaines_n(): ?int
    {
        return $this->tblversementsbanquemarocaines_n;
    }

    public function setTblversementsbanquemarocaines_n(int $tblversementsbanquemarocaines_n): static
    {
        $this->tblversementsbanquemarocaines_n = $tblversementsbanquemarocaines_n;

        return $this;
    }

    public function getTblversementsbanquemarocaines_adminsonly(): ?bool
    {
        return $this->tblversementsbanquemarocaines_adminsonly;
    }

    public function setTblversementsbanquemarocaines_adminsonly(bool $tblversementsbanquemarocaines_adminsonly): static
    {
        $this->tblversementsbanquemarocaines_adminsonly = $tblversementsbanquemarocaines_adminsonly;

        return $this;
    }

    public function getDateversement(): ?\DateTimeInterface
    {
        return $this->dateversement;
    }

    public function setDateversement(?\DateTimeInterface $dateversement): static
    {
        $this->dateversement = $dateversement;

        return $this;
    }

    public function getVersementpar(): ?int
    {
        return $this->versementpar;
    }

    public function setVersementpar(?int $versementpar): static
    {
        $this->versementpar = $versementpar;

        return $this;
    }

    public function getCheminscanversement(): ?string
    {
        return $this->cheminscanversement;
    }

    public function setCheminscanversement(?string $cheminscanversement): static
    {
        $this->cheminscanversement = $cheminscanversement;

        return $this;
    }

    public function getVerschezbanque(): ?int
    {
        return $this->verschezbanque;
    }

    public function setVerschezbanque(?int $verschezbanque): static
    {
        $this->verschezbanque = $verschezbanque;

        return $this;
    }

    public function getVerschezagencebanque(): ?int
    {
        return $this->verschezagencebanque;
    }

    public function setVerschezagencebanque(?int $verschezagencebanque): static
    {
        $this->verschezagencebanque = $verschezagencebanque;

        return $this;
    }

    public function getReferencebanque(): ?string
    {
        return $this->referencebanque;
    }

    public function setReferencebanque(?string $referencebanque): static
    {
        $this->referencebanque = $referencebanque;

        return $this;
    }

    public function getTypeversements(): ?int
    {
        return $this->typeversements;
    }

    public function setTypeversements(?int $typeversements): static
    {
        $this->typeversements = $typeversements;

        return $this;
    }

    public function getTypereglementaverser(): ?int
    {
        return $this->typereglementaverser;
    }

    public function setTypereglementaverser(?int $typereglementaverser): static
    {
        $this->typereglementaverser = $typereglementaverser;

        return $this;
    }

    public function getLocked(): ?bool
    {
        return $this->locked;
    }

    public function setLocked(bool $locked): static
    {
        $this->locked = $locked;

        return $this;
    }

    public function getTblversementsbanquemarocaines_valide(): ?bool
    {
        return $this->tblversementsbanquemarocaines_valide;
    }

    public function setTblversementsbanquemarocaines_valide(bool $tblversementsbanquemarocaines_valide): static
    {
        $this->tblversementsbanquemarocaines_valide = $tblversementsbanquemarocaines_valide;

        return $this;
    }

    public function getSiversementespecenumpiece(): ?int
    {
        return $this->siversementespecenumpiece;
    }

    public function setSiversementespecenumpiece(?int $siversementespecenumpiece): static
    {
        $this->siversementespecenumpiece = $siversementespecenumpiece;

        return $this;
    }

    public function getTblnosbanques_n(): ?int
    {
        return $this->tblnosbanques_n;
    }

    public function setTblnosbanques_n(int $tblnosbanques_n): static
    {
        $this->tblnosbanques_n = $tblnosbanques_n;

        return $this;
    }

    public function getTblnosbanques_nom(): ?string
    {
        return $this->tblnosbanques_nom;
    }

    public function setTblnosbanques_nom(?string $tblnosbanques_nom): static
    {
        $this->tblnosbanques_nom = $tblnosbanques_nom;

        return $this;
    }

    public function getAbrev(): ?string
    {
        return $this->abrev;
    }

    public function setAbrev(?string $abrev): static
    {
        $this->abrev = $abrev;

        return $this;
    }

    public function getEscompteeffets(): ?bool
    {
        return $this->escompteeffets;
    }

    public function setEscompteeffets(bool $escompteeffets): static
    {
        $this->escompteeffets = $escompteeffets;

        return $this;
    }

    public function getPlafondescompte(): ?float
    {
        return $this->plafondescompte;
    }

    public function setPlafondescompte(?float $plafondescompte): static
    {
        $this->plafondescompte = $plafondescompte;

        return $this;
    }

    public function getTauxescompte(): ?float
    {
        return $this->tauxescompte;
    }

    public function setTauxescompte(?float $tauxescompte): static
    {
        $this->tauxescompte = $tauxescompte;

        return $this;
    }

    public function getAgence(): ?string
    {
        return $this->agence;
    }

    public function setAgence(?string $agence): static
    {
        $this->agence = $agence;

        return $this;
    }

    public function getTblnosbanques_adresse(): ?string
    {
        return $this->tblnosbanques_adresse;
    }

    public function setTblnosbanques_adresse(?string $tblnosbanques_adresse): static
    {
        $this->tblnosbanques_adresse = $tblnosbanques_adresse;

        return $this;
    }

    public function getCodepostale(): ?string
    {
        return $this->codepostale;
    }

    public function setCodepostale(?string $codepostale): static
    {
        $this->codepostale = $codepostale;

        return $this;
    }

    public function getTblnosbanques_ville(): ?string
    {
        return $this->tblnosbanques_ville;
    }

    public function setTblnosbanques_ville(?string $tblnosbanques_ville): static
    {
        $this->tblnosbanques_ville = $tblnosbanques_ville;

        return $this;
    }

    public function getPays(): ?string
    {
        return $this->pays;
    }

    public function setPays(?string $pays): static
    {
        $this->pays = $pays;

        return $this;
    }

    public function getSwift(): ?string
    {
        return $this->swift;
    }

    public function setSwift(?string $swift): static
    {
        $this->swift = $swift;

        return $this;
    }

    public function getRib(): ?string
    {
        return $this->rib;
    }

    public function setRib(?string $rib): static
    {
        $this->rib = $rib;

        return $this;
    }

    public function getIban(): ?string
    {
        return $this->iban;
    }

    public function setIban(?string $iban): static
    {
        $this->iban = $iban;

        return $this;
    }

    public function getEtatordrevirementetranger(): ?string
    {
        return $this->etatordrevirementetranger;
    }

    public function setEtatordrevirementetranger(?string $etatordrevirementetranger): static
    {
        $this->etatordrevirementetranger = $etatordrevirementetranger;

        return $this;
    }

    public function getFc(): ?float
    {
        return $this->fc;
    }

    public function setFc(?float $fc): static
    {
        $this->fc = $fc;

        return $this;
    }

    public function getRefindev(): ?float
    {
        return $this->refindev;
    }

    public function setRefindev(?float $refindev): static
    {
        $this->refindev = $refindev;

        return $this;
    }

    public function getRefinmad(): ?float
    {
        return $this->refinmad;
    }

    public function setRefinmad(?float $refinmad): static
    {
        $this->refinmad = $refinmad;

        return $this;
    }

    public function getOc(): ?float
    {
        return $this->oc;
    }

    public function setOc(?float $oc): static
    {
        $this->oc = $oc;

        return $this;
    }

    public function getTxfc(): ?float
    {
        return $this->txfc;
    }

    public function setTxfc(?float $txfc): static
    {
        $this->txfc = $txfc;

        return $this;
    }

    public function getTxrefdev(): ?float
    {
        return $this->txrefdev;
    }

    public function setTxrefdev(?float $txrefdev): static
    {
        $this->txrefdev = $txrefdev;

        return $this;
    }

    public function getTxoc(): ?float
    {
        return $this->txoc;
    }

    public function setTxoc(?float $txoc): static
    {
        $this->txoc = $txoc;

        return $this;
    }

    public function getTxrefmad(): ?float
    {
        return $this->txrefmad;
    }

    public function setTxrefmad(?float $txrefmad): static
    {
        $this->txrefmad = $txrefmad;

        return $this;
    }
}
