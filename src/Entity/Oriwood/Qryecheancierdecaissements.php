<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\QryecheancierdecaissementsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'qryEcheancierDecaissements')]
#[ORM\Entity(repositoryClass: QryecheancierdecaissementsRepository::class)]
class Qryecheancierdecaissements
{
    #[ORM\Column(name: "NumeroCheque", nullable: true)]
    private ?int $numerocheque = null;

    #[ORM\Column(name: "DateEmission", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateemission = null;

    #[ORM\Column(name: "Echeance", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $echeance = null;

    #[ORM\Column(name: "Beneficiaire", length: 255, nullable: true)]
    private ?string $beneficiaire = null;

    #[ORM\Column(name: "Montant", nullable: true)]
    private ?float $montant = null;

    #[ORM\Column(name: "Annuler")]
    private ?bool $annuler = null;

    #[ORM\Column(name: "Valide")]
    private ?bool $valide = null;

    #[ORM\Column(name: "Debiter")]
    private ?bool $debiter = null;

    #[ORM\Column(name: "Abrev", length: 255, nullable: true)]
    private ?string $abrev = null;

    #[ORM\Column(name: "[tblSociete.Nom]", length: 255, nullable: true)]
    private ?string $tblsociete_nom = null;

    #[ORM\Column(name: "[tblCheques.N°]")]
    private ?int $tblcheques_n = null;

    #[ORM\Column(name: "ChequierPere", nullable: true)]
    private ?int $chequierpere = null;

    #[ORM\Column(name: "PrefixeCheque", length: 4, nullable: true)]
    private ?string $prefixecheque = null;

    #[ORM\Column(name: "SignerPar", nullable: true)]
    private ?int $signerpar = null;

    #[ORM\Column(name: "ScanCheque", length: 255, nullable: true)]
    private ?string $scancheque = null;

    #[ORM\Column(name: "ScanPiece", length: 255, nullable: true)]
    private ?string $scanpiece = null;

    #[ORM\Column(name: "DebiterLE", type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $debiterle = null;

    #[ORM\Column(name: "Banque", nullable: true)]
    private ?int $banque = null;

    #[ORM\Column(name: "Societe", nullable: true)]
    private ?int $societe = null;

    #[ORM\Column(name: "[tblnosbanques.N°]")]
    private ?int $tblnosbanques_n = null;

    #[ORM\Column(name: "[tblnosbanques.Nom]", length: 255, nullable: true)]
    private ?string $tblnosbanques_nom = null;

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

    #[ORM\Column(name: "[tblnosbanques.Pays]", length: 255, nullable: true)]
    private ?string $tblnosbanques_pays = null;

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

    #[ORM\Column(name: "[tblSociete.N°]")]
    private ?int $tblsociete_n = null;

    #[ORM\Column(name: "RC", length: 255, nullable: true)]
    private ?string $rc = null;

    #[ORM\Column(name: "TVA", length: 255, nullable: true)]
    private ?string $tva = null;

    #[ORM\Column(name: "ICE", length: 255, nullable: true)]
    private ?string $ice = null;

    #[ORM\Column(name: "Patente", length: 255, nullable: true)]
    private ?string $patente = null;

    #[ORM\Column(name: "[tblSociete.Adresse]", length: 255, nullable: true)]
    private ?string $tblsociete_adresse = null;

    #[ORM\Column(name: "[tblSociete.Ville]", length: 255, nullable: true)]
    private ?string $tblsociete_ville = null;

    #[ORM\Column(name: "[tblSociete.Pays]", length: 255, nullable: true)]
    private ?string $tblsociete_pays = null;

    #[ORM\Column(name: "CodePostal", length: 255, nullable: true)]
    private ?string $codepostal = null;

    #[ORM\Column(name: "FormLegale", length: 255, nullable: true)]
    private ?string $formlegale = null;

    #[ORM\Column(name: "LoyerLocaux", nullable: true)]
    private ?float $loyerlocaux = null;

    #[ORM\Column(name: "EmailDirGen", length: 255, nullable: true)]
    private ?string $emaildirgen = null;

    #[ORM\Column(name: "EmailDirFin", length: 255, nullable: true)]
    private ?string $emaildirfin = null;

    #[ORM\Column(name: "EmailDirCommerciale", length: 255, nullable: true)]
    private ?string $emaildircommerciale = null;

    #[ORM\Column(name: "EmailFrontOffice", length: 255, nullable: true)]
    private ?string $emailfrontoffice = null;

    #[ORM\Column(name: "EmailBackOffice", length: 255, nullable: true)]
    private ?string $emailbackoffice = null;

    #[ORM\Column(name: "EmailLogistique", length: 255, nullable: true)]
    private ?string $emaillogistique = null;

    #[ORM\Column(name: "EmailMoyensGeneraux", length: 255, nullable: true)]
    private ?string $emailmoyensgeneraux = null;

    #[ORM\Column(name: "EmailsRH", length: 255, nullable: true)]
    private ?string $emailsrh = null;

    public function getNumerocheque(): ?int
    {
        return $this->numerocheque;
    }

    public function setNumerocheque(?int $numerocheque): static
    {
        $this->numerocheque = $numerocheque;

        return $this;
    }

    public function getDateemission(): ?\DateTimeInterface
    {
        return $this->dateemission;
    }

    public function setDateemission(?\DateTimeInterface $dateemission): static
    {
        $this->dateemission = $dateemission;

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

    public function getBeneficiaire(): ?string
    {
        return $this->beneficiaire;
    }

    public function setBeneficiaire(?string $beneficiaire): static
    {
        $this->beneficiaire = $beneficiaire;

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

    public function getAnnuler(): ?bool
    {
        return $this->annuler;
    }

    public function setAnnuler(bool $annuler): static
    {
        $this->annuler = $annuler;

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

    public function getDebiter(): ?bool
    {
        return $this->debiter;
    }

    public function setDebiter(bool $debiter): static
    {
        $this->debiter = $debiter;

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

    public function getTblsociete_nom(): ?string
    {
        return $this->tblsociete_nom;
    }

    public function setTblsociete_nom(?string $tblsociete_nom): static
    {
        $this->tblsociete_nom = $tblsociete_nom;

        return $this;
    }

    public function getTblcheques_n(): ?int
    {
        return $this->tblcheques_n;
    }

    public function setTblcheques_n(int $tblcheques_n): static
    {
        $this->tblcheques_n = $tblcheques_n;

        return $this;
    }

    public function getChequierpere(): ?int
    {
        return $this->chequierpere;
    }

    public function setChequierpere(?int $chequierpere): static
    {
        $this->chequierpere = $chequierpere;

        return $this;
    }

    public function getPrefixecheque(): ?string
    {
        return $this->prefixecheque;
    }

    public function setPrefixecheque(?string $prefixecheque): static
    {
        $this->prefixecheque = $prefixecheque;

        return $this;
    }

    public function getSignerpar(): ?int
    {
        return $this->signerpar;
    }

    public function setSignerpar(?int $signerpar): static
    {
        $this->signerpar = $signerpar;

        return $this;
    }

    public function getScancheque(): ?string
    {
        return $this->scancheque;
    }

    public function setScancheque(?string $scancheque): static
    {
        $this->scancheque = $scancheque;

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

    public function getDebiterle(): ?\DateTimeInterface
    {
        return $this->debiterle;
    }

    public function setDebiterle(?\DateTimeInterface $debiterle): static
    {
        $this->debiterle = $debiterle;

        return $this;
    }

    public function getBanque(): ?int
    {
        return $this->banque;
    }

    public function setBanque(?int $banque): static
    {
        $this->banque = $banque;

        return $this;
    }

    public function getSociete(): ?int
    {
        return $this->societe;
    }

    public function setSociete(?int $societe): static
    {
        $this->societe = $societe;

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

    public function getTblnosbanques_pays(): ?string
    {
        return $this->tblnosbanques_pays;
    }

    public function setTblnosbanques_pays(?string $tblnosbanques_pays): static
    {
        $this->tblnosbanques_pays = $tblnosbanques_pays;

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

    public function getTblsociete_n(): ?int
    {
        return $this->tblsociete_n;
    }

    public function setTblsociete_n(int $tblsociete_n): static
    {
        $this->tblsociete_n = $tblsociete_n;

        return $this;
    }

    public function getRc(): ?string
    {
        return $this->rc;
    }

    public function setRc(?string $rc): static
    {
        $this->rc = $rc;

        return $this;
    }

    public function getTva(): ?string
    {
        return $this->tva;
    }

    public function setTva(?string $tva): static
    {
        $this->tva = $tva;

        return $this;
    }

    public function getIce(): ?string
    {
        return $this->ice;
    }

    public function setIce(?string $ice): static
    {
        $this->ice = $ice;

        return $this;
    }

    public function getPatente(): ?string
    {
        return $this->patente;
    }

    public function setPatente(?string $patente): static
    {
        $this->patente = $patente;

        return $this;
    }

    public function getTblsociete_adresse(): ?string
    {
        return $this->tblsociete_adresse;
    }

    public function setTblsociete_adresse(?string $tblsociete_adresse): static
    {
        $this->tblsociete_adresse = $tblsociete_adresse;

        return $this;
    }

    public function getTblsociete_ville(): ?string
    {
        return $this->tblsociete_ville;
    }

    public function setTblsociete_ville(?string $tblsociete_ville): static
    {
        $this->tblsociete_ville = $tblsociete_ville;

        return $this;
    }

    public function getTblsociete_pays(): ?string
    {
        return $this->tblsociete_pays;
    }

    public function setTblsociete_pays(?string $tblsociete_pays): static
    {
        $this->tblsociete_pays = $tblsociete_pays;

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

    public function getFormlegale(): ?string
    {
        return $this->formlegale;
    }

    public function setFormlegale(?string $formlegale): static
    {
        $this->formlegale = $formlegale;

        return $this;
    }

    public function getLoyerlocaux(): ?float
    {
        return $this->loyerlocaux;
    }

    public function setLoyerlocaux(?float $loyerlocaux): static
    {
        $this->loyerlocaux = $loyerlocaux;

        return $this;
    }

    public function getEmaildirgen(): ?string
    {
        return $this->emaildirgen;
    }

    public function setEmaildirgen(?string $emaildirgen): static
    {
        $this->emaildirgen = $emaildirgen;

        return $this;
    }

    public function getEmaildirfin(): ?string
    {
        return $this->emaildirfin;
    }

    public function setEmaildirfin(?string $emaildirfin): static
    {
        $this->emaildirfin = $emaildirfin;

        return $this;
    }

    public function getEmaildircommerciale(): ?string
    {
        return $this->emaildircommerciale;
    }

    public function setEmaildircommerciale(?string $emaildircommerciale): static
    {
        $this->emaildircommerciale = $emaildircommerciale;

        return $this;
    }

    public function getEmailfrontoffice(): ?string
    {
        return $this->emailfrontoffice;
    }

    public function setEmailfrontoffice(?string $emailfrontoffice): static
    {
        $this->emailfrontoffice = $emailfrontoffice;

        return $this;
    }

    public function getEmailbackoffice(): ?string
    {
        return $this->emailbackoffice;
    }

    public function setEmailbackoffice(?string $emailbackoffice): static
    {
        $this->emailbackoffice = $emailbackoffice;

        return $this;
    }

    public function getEmaillogistique(): ?string
    {
        return $this->emaillogistique;
    }

    public function setEmaillogistique(?string $emaillogistique): static
    {
        $this->emaillogistique = $emaillogistique;

        return $this;
    }

    public function getEmailmoyensgeneraux(): ?string
    {
        return $this->emailmoyensgeneraux;
    }

    public function setEmailmoyensgeneraux(?string $emailmoyensgeneraux): static
    {
        $this->emailmoyensgeneraux = $emailmoyensgeneraux;

        return $this;
    }

    public function getEmailsrh(): ?string
    {
        return $this->emailsrh;
    }

    public function setEmailsrh(?string $emailsrh): static
    {
        $this->emailsrh = $emailsrh;

        return $this;
    }
}
