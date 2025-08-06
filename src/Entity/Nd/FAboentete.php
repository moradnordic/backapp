<?php

namespace App\Entity\Nd;

use App\Repository\Nd\FAboenteteRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_ABOENTETE')]
#[ORM\Index(name: 'IAE_NO', columns: ['AB_No'])]
#[ORM\Index(name: 'IAE_REPRESENT', columns: ['CO_No'])]
#[ORM\Index(name: 'IAE_DEPOT', columns: ['DE_No'])]
#[ORM\Index(name: 'IAE_DEPOTCL', columns: ['LI_No'])]
#[ORM\Index(name: 'IAE_NUM', columns: ['cbCT_NumPayeur'])]
#[ORM\Index(name: 'IAE_ANAL', columns: ['cbCA_Num'])]
#[ORM\Index(name: 'IAE_CGNUM', columns: ['cbCG_Num'])]
#[ORM\Index(name: 'IAE_CENTRALE', columns: ['cbCT_NumCentrale'])]
#[ORM\UniqueConstraint(name: 'UKA_F_ABOENTETE_AB_No', columns: ['AB_No'])]
#[ORM\Index(name: 'FKIA_F_ABOENTETE_DE_No', columns: ['DE_No'])]
#[ORM\Index(name: 'FKIA_F_ABOENTETE_AB_No', columns: ['AB_No'])]
#[ORM\Entity(repositoryClass: FAboenteteRepository::class)]
class FAboentete
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "AB_No")]
    private ?int $abNo = null;

    #[ORM\Column(name: "AE_Ref", length: 17, nullable: true)]
    private ?string $aeRef = null;

    #[ORM\Column(name: "CO_No", nullable: true)]
    private ?int $coNo = null;

    #[ORM\Column(name: "cbCO_No", nullable: true)]
    private ?int $cbcoNo = null;

    #[ORM\Column(name: "AE_Period", type: Types::SMALLINT, nullable: true)]
    private ?int $aePeriod = null;

    #[ORM\Column(name: "AE_Devise", type: Types::SMALLINT, nullable: true)]
    private ?int $aeDevise = null;

    #[ORM\Column(name: "AE_Cours", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $aeCours = null;

    #[ORM\Column(name: "DE_No")]
    private ?int $deNo = null;

    #[ORM\Column(name: "LI_No", nullable: true)]
    private ?int $liNo = null;

    #[ORM\Column(name: "cbLI_No", nullable: true)]
    private ?int $cbliNo = null;

    #[ORM\Column(name: "CT_NumPayeur", length: 17, nullable: true)]
    private ?string $ctNumpayeur = null;

    #[ORM\Column(name: "cbCT_NumPayeur", type: Types::BINARY, nullable: true)]
    private $cbctNumpayeur = null;

    #[ORM\Column(name: "AE_Expedit", type: Types::SMALLINT, nullable: true)]
    private ?int $aeExpedit = null;

    #[ORM\Column(name: "AE_NbFacture", type: Types::SMALLINT, nullable: true)]
    private ?int $aeNbfacture = null;

    #[ORM\Column(name: "AE_BLFact", type: Types::SMALLINT, nullable: true)]
    private ?int $aeBlfact = null;

    #[ORM\Column(name: "AE_TxEscompte", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $aeTxescompte = null;

    #[ORM\Column(name: "CA_Num", length: 13, nullable: true)]
    private ?string $caNum = null;

    #[ORM\Column(name: "cbCA_Num", type: Types::BINARY, nullable: true)]
    private $cbcaNum = null;

    #[ORM\Column(name: "AE_Coord01", length: 25, nullable: true)]
    private ?string $aeCoord01 = null;

    #[ORM\Column(name: "AE_Coord02", length: 25, nullable: true)]
    private ?string $aeCoord02 = null;

    #[ORM\Column(name: "AE_Coord03", length: 25, nullable: true)]
    private ?string $aeCoord03 = null;

    #[ORM\Column(name: "AE_Coord04", length: 25, nullable: true)]
    private ?string $aeCoord04 = null;

    #[ORM\Column(name: "AE_Condition", type: Types::SMALLINT, nullable: true)]
    private ?int $aeCondition = null;

    #[ORM\Column(name: "AE_Tarif", type: Types::SMALLINT, nullable: true)]
    private ?int $aeTarif = null;

    #[ORM\Column(name: "AE_Colisage", type: Types::SMALLINT, nullable: true)]
    private ?int $aeColisage = null;

    #[ORM\Column(name: "AE_TypeColis", type: Types::SMALLINT, nullable: true)]
    private ?int $aeTypecolis = null;

    #[ORM\Column(name: "AE_Transaction", type: Types::SMALLINT, nullable: true)]
    private ?int $aeTransaction = null;

    #[ORM\Column(name: "AE_Langue", type: Types::SMALLINT, nullable: true)]
    private ?int $aeLangue = null;

    #[ORM\Column(name: "AE_Regime", type: Types::SMALLINT, nullable: true)]
    private ?int $aeRegime = null;

    #[ORM\Column(name: "N_CatCompta", type: Types::SMALLINT, nullable: true)]
    private ?int $nCatcompta = null;

    #[ORM\Column(name: "AE_BaseCalcul", type: Types::SMALLINT, nullable: true)]
    private ?int $aeBasecalcul = null;

    #[ORM\Column(name: "AE_Genere", type: Types::SMALLINT, nullable: true)]
    private ?int $aeGenere = null;

    #[ORM\Column(name: "CG_Num", length: 13, nullable: true)]
    private ?string $cgNum = null;

    #[ORM\Column(name: "cbCG_Num", type: Types::BINARY, nullable: true)]
    private $cbcgNum = null;

    #[ORM\Column(name: "CA_NumIFRS", length: 13, nullable: true)]
    private ?string $caNumifrs = null;

    #[ORM\Column(name: "CT_NumCentrale", length: 17, nullable: true)]
    private ?string $ctNumcentrale = null;

    #[ORM\Column(name: "cbCT_NumCentrale", type: Types::BINARY, nullable: true)]
    private $cbctNumcentrale = null;

    #[ORM\Column(name: "AE_Contact", length: 35, nullable: true)]
    private ?string $aeContact = null;

    #[ORM\Column(name: "cbProt", type: Types::SMALLINT, nullable: true)]
    private ?int $cbprot = null;

    #[ORM\Column(name: "cbCreateur", length: 4, nullable: true, options: ["fixed" => true])]
    private ?string $cbcreateur = 'CSQL';

    #[ORM\Column(name: "cbModification", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $cbmodification = null;

    #[ORM\Column(name: "cbReplication", nullable: true)]
    private ?int $cbreplication = null;

    #[ORM\Column(name: "cbFlag", type: Types::SMALLINT, nullable: true)]
    private ?int $cbflag = null;

    #[ORM\Column(name: "Observation", length: 69, nullable: true)]
    private ?string $observation = null;

    #[ORM\Column(name: "Sous_Client", length: 69, nullable: true)]
    private ?string $sousClient = null;

    #[ORM\Column(name: "[MONTANT FACTURE DEVEISE]", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $montantFactureDeveise = null;

    #[ORM\Column(name: "[MONTANT PAYE]", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $montantPaye = null;

    #[ORM\Column(name: "[DATE ECHEANCE]", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateEcheance = null;

    #[ORM\Column(name: "[ADRESSE LIVRAISON]", length: 69, nullable: true)]
    private ?string $adresseLivraison = null;

    #[ORM\Column(name: "[CONDITION PAIEMENT]", length: 69, nullable: true)]
    private ?string $conditionPaiement = null;

    #[ORM\Column(name: "Situation", length: 21, nullable: true)]
    private ?string $situation = null;

    #[ORM\Column(name: "[N° Dossier]", length: 69, nullable: true)]
    private ?string $nDossier = null;

    #[ORM\Column(name: "AlerteStock", length: 21, nullable: true)]
    private ?string $alertestock = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getAbNo(): ?int
    {
        return $this->abNo;
    }

    public function setAbNo(int $abNo): static
    {
        $this->abNo = $abNo;

        return $this;
    }

    public function getAeRef(): ?string
    {
        return $this->aeRef;
    }

    public function setAeRef(?string $aeRef): static
    {
        $this->aeRef = $aeRef;

        return $this;
    }

    public function getCoNo(): ?int
    {
        return $this->coNo;
    }

    public function setCoNo(?int $coNo): static
    {
        $this->coNo = $coNo;

        return $this;
    }

    public function getCbcoNo(): ?int
    {
        return $this->cbcoNo;
    }

    public function setCbcoNo(?int $cbcoNo): static
    {
        $this->cbcoNo = $cbcoNo;

        return $this;
    }

    public function getAePeriod(): ?int
    {
        return $this->aePeriod;
    }

    public function setAePeriod(?int $aePeriod): static
    {
        $this->aePeriod = $aePeriod;

        return $this;
    }

    public function getAeDevise(): ?int
    {
        return $this->aeDevise;
    }

    public function setAeDevise(?int $aeDevise): static
    {
        $this->aeDevise = $aeDevise;

        return $this;
    }

    public function getAeCours(): ?string
    {
        return $this->aeCours;
    }

    public function setAeCours(?string $aeCours): static
    {
        $this->aeCours = $aeCours;

        return $this;
    }

    public function getDeNo(): ?int
    {
        return $this->deNo;
    }

    public function setDeNo(int $deNo): static
    {
        $this->deNo = $deNo;

        return $this;
    }

    public function getLiNo(): ?int
    {
        return $this->liNo;
    }

    public function setLiNo(?int $liNo): static
    {
        $this->liNo = $liNo;

        return $this;
    }

    public function getCbliNo(): ?int
    {
        return $this->cbliNo;
    }

    public function setCbliNo(?int $cbliNo): static
    {
        $this->cbliNo = $cbliNo;

        return $this;
    }

    public function getCtNumpayeur(): ?string
    {
        return $this->ctNumpayeur;
    }

    public function setCtNumpayeur(?string $ctNumpayeur): static
    {
        $this->ctNumpayeur = $ctNumpayeur;

        return $this;
    }

    public function getCbctNumpayeur()
    {
        return $this->cbctNumpayeur;
    }

    public function setCbctNumpayeur($cbctNumpayeur): static
    {
        $this->cbctNumpayeur = $cbctNumpayeur;

        return $this;
    }

    public function getAeExpedit(): ?int
    {
        return $this->aeExpedit;
    }

    public function setAeExpedit(?int $aeExpedit): static
    {
        $this->aeExpedit = $aeExpedit;

        return $this;
    }

    public function getAeNbfacture(): ?int
    {
        return $this->aeNbfacture;
    }

    public function setAeNbfacture(?int $aeNbfacture): static
    {
        $this->aeNbfacture = $aeNbfacture;

        return $this;
    }

    public function getAeBlfact(): ?int
    {
        return $this->aeBlfact;
    }

    public function setAeBlfact(?int $aeBlfact): static
    {
        $this->aeBlfact = $aeBlfact;

        return $this;
    }

    public function getAeTxescompte(): ?string
    {
        return $this->aeTxescompte;
    }

    public function setAeTxescompte(?string $aeTxescompte): static
    {
        $this->aeTxescompte = $aeTxescompte;

        return $this;
    }

    public function getCaNum(): ?string
    {
        return $this->caNum;
    }

    public function setCaNum(?string $caNum): static
    {
        $this->caNum = $caNum;

        return $this;
    }

    public function getCbcaNum()
    {
        return $this->cbcaNum;
    }

    public function setCbcaNum($cbcaNum): static
    {
        $this->cbcaNum = $cbcaNum;

        return $this;
    }

    public function getAeCoord01(): ?string
    {
        return $this->aeCoord01;
    }

    public function setAeCoord01(?string $aeCoord01): static
    {
        $this->aeCoord01 = $aeCoord01;

        return $this;
    }

    public function getAeCoord02(): ?string
    {
        return $this->aeCoord02;
    }

    public function setAeCoord02(?string $aeCoord02): static
    {
        $this->aeCoord02 = $aeCoord02;

        return $this;
    }

    public function getAeCoord03(): ?string
    {
        return $this->aeCoord03;
    }

    public function setAeCoord03(?string $aeCoord03): static
    {
        $this->aeCoord03 = $aeCoord03;

        return $this;
    }

    public function getAeCoord04(): ?string
    {
        return $this->aeCoord04;
    }

    public function setAeCoord04(?string $aeCoord04): static
    {
        $this->aeCoord04 = $aeCoord04;

        return $this;
    }

    public function getAeCondition(): ?int
    {
        return $this->aeCondition;
    }

    public function setAeCondition(?int $aeCondition): static
    {
        $this->aeCondition = $aeCondition;

        return $this;
    }

    public function getAeTarif(): ?int
    {
        return $this->aeTarif;
    }

    public function setAeTarif(?int $aeTarif): static
    {
        $this->aeTarif = $aeTarif;

        return $this;
    }

    public function getAeColisage(): ?int
    {
        return $this->aeColisage;
    }

    public function setAeColisage(?int $aeColisage): static
    {
        $this->aeColisage = $aeColisage;

        return $this;
    }

    public function getAeTypecolis(): ?int
    {
        return $this->aeTypecolis;
    }

    public function setAeTypecolis(?int $aeTypecolis): static
    {
        $this->aeTypecolis = $aeTypecolis;

        return $this;
    }

    public function getAeTransaction(): ?int
    {
        return $this->aeTransaction;
    }

    public function setAeTransaction(?int $aeTransaction): static
    {
        $this->aeTransaction = $aeTransaction;

        return $this;
    }

    public function getAeLangue(): ?int
    {
        return $this->aeLangue;
    }

    public function setAeLangue(?int $aeLangue): static
    {
        $this->aeLangue = $aeLangue;

        return $this;
    }

    public function getAeRegime(): ?int
    {
        return $this->aeRegime;
    }

    public function setAeRegime(?int $aeRegime): static
    {
        $this->aeRegime = $aeRegime;

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

    public function getAeBasecalcul(): ?int
    {
        return $this->aeBasecalcul;
    }

    public function setAeBasecalcul(?int $aeBasecalcul): static
    {
        $this->aeBasecalcul = $aeBasecalcul;

        return $this;
    }

    public function getAeGenere(): ?int
    {
        return $this->aeGenere;
    }

    public function setAeGenere(?int $aeGenere): static
    {
        $this->aeGenere = $aeGenere;

        return $this;
    }

    public function getCgNum(): ?string
    {
        return $this->cgNum;
    }

    public function setCgNum(?string $cgNum): static
    {
        $this->cgNum = $cgNum;

        return $this;
    }

    public function getCbcgNum()
    {
        return $this->cbcgNum;
    }

    public function setCbcgNum($cbcgNum): static
    {
        $this->cbcgNum = $cbcgNum;

        return $this;
    }

    public function getCaNumifrs(): ?string
    {
        return $this->caNumifrs;
    }

    public function setCaNumifrs(?string $caNumifrs): static
    {
        $this->caNumifrs = $caNumifrs;

        return $this;
    }

    public function getCtNumcentrale(): ?string
    {
        return $this->ctNumcentrale;
    }

    public function setCtNumcentrale(?string $ctNumcentrale): static
    {
        $this->ctNumcentrale = $ctNumcentrale;

        return $this;
    }

    public function getCbctNumcentrale()
    {
        return $this->cbctNumcentrale;
    }

    public function setCbctNumcentrale($cbctNumcentrale): static
    {
        $this->cbctNumcentrale = $cbctNumcentrale;

        return $this;
    }

    public function getAeContact(): ?string
    {
        return $this->aeContact;
    }

    public function setAeContact(?string $aeContact): static
    {
        $this->aeContact = $aeContact;

        return $this;
    }

    public function getCbprot(): ?int
    {
        return $this->cbprot;
    }

    public function setCbprot(?int $cbprot): static
    {
        $this->cbprot = $cbprot;

        return $this;
    }

    public function getCbcreateur(): ?string
    {
        return $this->cbcreateur;
    }

    public function setCbcreateur(?string $cbcreateur): static
    {
        $this->cbcreateur = $cbcreateur;

        return $this;
    }

    public function getCbmodification(): ?\DateTimeInterface
    {
        return $this->cbmodification;
    }

    public function setCbmodification(?\DateTimeInterface $cbmodification): static
    {
        $this->cbmodification = $cbmodification;

        return $this;
    }

    public function getCbreplication(): ?int
    {
        return $this->cbreplication;
    }

    public function setCbreplication(?int $cbreplication): static
    {
        $this->cbreplication = $cbreplication;

        return $this;
    }

    public function getCbflag(): ?int
    {
        return $this->cbflag;
    }

    public function setCbflag(?int $cbflag): static
    {
        $this->cbflag = $cbflag;

        return $this;
    }

    public function getObservation(): ?string
    {
        return $this->observation;
    }

    public function setObservation(?string $observation): static
    {
        $this->observation = $observation;

        return $this;
    }

    public function getSousClient(): ?string
    {
        return $this->sousClient;
    }

    public function setSousClient(?string $sousClient): static
    {
        $this->sousClient = $sousClient;

        return $this;
    }

    public function getMontantFactureDeveise(): ?string
    {
        return $this->montantFactureDeveise;
    }

    public function setMontantFactureDeveise(?string $montantFactureDeveise): static
    {
        $this->montantFactureDeveise = $montantFactureDeveise;

        return $this;
    }

    public function getMontantPaye(): ?string
    {
        return $this->montantPaye;
    }

    public function setMontantPaye(?string $montantPaye): static
    {
        $this->montantPaye = $montantPaye;

        return $this;
    }

    public function getDateEcheance(): ?\DateTimeInterface
    {
        return $this->dateEcheance;
    }

    public function setDateEcheance(?\DateTimeInterface $dateEcheance): static
    {
        $this->dateEcheance = $dateEcheance;

        return $this;
    }

    public function getAdresseLivraison(): ?string
    {
        return $this->adresseLivraison;
    }

    public function setAdresseLivraison(?string $adresseLivraison): static
    {
        $this->adresseLivraison = $adresseLivraison;

        return $this;
    }

    public function getConditionPaiement(): ?string
    {
        return $this->conditionPaiement;
    }

    public function setConditionPaiement(?string $conditionPaiement): static
    {
        $this->conditionPaiement = $conditionPaiement;

        return $this;
    }

    public function getSituation(): ?string
    {
        return $this->situation;
    }

    public function setSituation(?string $situation): static
    {
        $this->situation = $situation;

        return $this;
    }

    public function getNDossier(): ?string
    {
        return $this->nDossier;
    }

    public function setNDossier(?string $nDossier): static
    {
        $this->nDossier = $nDossier;

        return $this;
    }

    public function getAlertestock(): ?string
    {
        return $this->alertestock;
    }

    public function setAlertestock(?string $alertestock): static
    {
        $this->alertestock = $alertestock;

        return $this;
    }
}
