<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\PFiscalRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'P_FISCAL')]
#[ORM\Entity(repositoryClass: PFiscalRepository::class)]
class PFiscal
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "F_Regime", type: Types::SMALLINT, nullable: true)]
    private ?int $fRegime = null;

    #[ORM\Column(name: "F_Recette", length: 13, nullable: true)]
    private ?string $fRecette = null;

    #[ORM\Column(name: "F_NoDossier", length: 13, nullable: true)]
    private ?string $fNodossier = null;

    #[ORM\Column(name: "F_Cle", length: 5, nullable: true)]
    private ?string $fCle = null;

    #[ORM\Column(name: "F_CDI", length: 5, nullable: true)]
    private ?string $fCdi = null;

    #[ORM\Column(name: "F_Inspection", length: 5, nullable: true)]
    private ?string $fInspection = null;

    #[ORM\Column(name: "F_Deduction", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $fDeduction = null;

    #[ORM\Column(name: "F_CentreAdresse", length: 35, nullable: true)]
    private ?string $fCentreadresse = null;

    #[ORM\Column(name: "F_CentreComplement", length: 35, nullable: true)]
    private ?string $fCentrecomplement = null;

    #[ORM\Column(name: "F_CentreCP", length: 15, nullable: true)]
    private ?string $fCentrecp = null;

    #[ORM\Column(name: "F_CentreVille", length: 35, nullable: true)]
    private ?string $fCentreville = null;

    #[ORM\Column(name: "F_CentreTelephone", length: 21, nullable: true)]
    private ?string $fCentretelephone = null;

    #[ORM\Column(name: "F_CentreHoraire", length: 35, nullable: true)]
    private ?string $fCentrehoraire = null;

    #[ORM\Column(name: "JO_NumMAJ", length: 7, nullable: true)]
    private ?string $joNummaj = null;

    #[ORM\Column(name: "CG_NumMAJDecaisser", length: 13, nullable: true)]
    private ?string $cgNummajdecaisser = null;

    #[ORM\Column(name: "CG_NumMAJCredit", length: 13, nullable: true)]
    private ?string $cgNummajcredit = null;

    #[ORM\Column(name: "CG_NumMAJEcartD", length: 13, nullable: true)]
    private ?string $cgNummajecartd = null;

    #[ORM\Column(name: "CG_NumMAJEcartC", length: 13, nullable: true)]
    private ?string $cgNummajecartc = null;

    #[ORM\Column(name: "CG_NumMAJApur", length: 13, nullable: true)]
    private ?string $cgNummajapur = null;

    #[ORM\Column(name: "F_Arrondissement", length: 31, nullable: true)]
    private ?string $fArrondissement = null;

    #[ORM\Column(name: "F_ArrondissementCode", length: 5, nullable: true)]
    private ?string $fArrondissementcode = null;

    #[ORM\Column(name: "F_ArrondissementNum", length: 5, nullable: true)]
    private ?string $fArrondissementnum = null;

    #[ORM\Column(name: "F_NIFExpert", length: 25, nullable: true)]
    private ?string $fNifexpert = null;

    #[ORM\Column(name: "F_MontantLimite", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $fMontantlimite = null;

    #[ORM\Column(name: "F_AffiliationCM", type: Types::SMALLINT, nullable: true)]
    private ?int $fAffiliationcm = null;

    #[ORM\Column(name: "F_DateLimiteJour", type: Types::SMALLINT, nullable: true)]
    private ?int $fDatelimitejour = null;

    #[ORM\Column(name: "F_DateLimiteMois", type: Types::SMALLINT, nullable: true)]
    private ?int $fDatelimitemois = null;

    #[ORM\Column(name: "F_EDINumFRP", length: 15, nullable: true)]
    private ?string $fEdinumfrp = null;

    #[ORM\Column(name: "CD_Nom", length: 35, nullable: true)]
    private ?string $cdNom = null;

    #[ORM\Column(name: "F_EDIAutreTiers", type: Types::SMALLINT, nullable: true)]
    private ?int $fEdiautretiers = null;

    #[ORM\Column(name: "F_EDIRaisonSoc", length: 35, nullable: true)]
    private ?string $fEdiraisonsoc = null;

    #[ORM\Column(name: "F_EDIAdresse", length: 35, nullable: true)]
    private ?string $fEdiadresse = null;

    #[ORM\Column(name: "F_EDIComplement", length: 35, nullable: true)]
    private ?string $fEdicomplement = null;

    #[ORM\Column(name: "F_EDICodePostal", length: 9, nullable: true)]
    private ?string $fEdicodepostal = null;

    #[ORM\Column(name: "F_EDIVille", length: 35, nullable: true)]
    private ?string $fEdiville = null;

    #[ORM\Column(name: "F_EDISiret", length: 15, nullable: true)]
    private ?string $fEdisiret = null;

    #[ORM\Column(name: "F_EDITelephone", length: 21, nullable: true)]
    private ?string $fEditelephone = null;

    #[ORM\Column(name: "F_EDIEMail", length: 69, nullable: true)]
    private ?string $fEdiemail = null;

    #[ORM\Column(name: "F_DeclNom", length: 69, nullable: true)]
    private ?string $fDeclnom = null;

    #[ORM\Column(name: "F_DeclQualite", length: 35, nullable: true)]
    private ?string $fDeclqualite = null;

    #[ORM\Column(name: "F_DeclTelephone", length: 21, nullable: true)]
    private ?string $fDecltelephone = null;

    #[ORM\Column(name: "F_VatIntraNo", type: Types::SMALLINT, nullable: true)]
    private ?int $fVatintrano = null;

    #[ORM\Column(name: "F_VatListNo", type: Types::SMALLINT, nullable: true)]
    private ?int $fVatlistno = null;

    #[ORM\Column(name: "F_EDINumOCFI", length: 9, nullable: true)]
    private ?string $fEdinumocfi = null;

    #[ORM\Column(name: "F_EDIDateRedress", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $fEdidateredress = null;

    #[ORM\Column(name: "F_EDICodeRegion", length: 25, nullable: true)]
    private ?string $fEdicoderegion = null;

    #[ORM\Column(name: "F_EDIPays", length: 35, nullable: true)]
    private ?string $fEdipays = null;

    #[ORM\Column(name: "F_CentreCodeRegion", length: 25, nullable: true)]
    private ?string $fCentrecoderegion = null;

    #[ORM\Column(name: "F_CentrePays", length: 35, nullable: true)]
    private ?string $fCentrepays = null;

    #[ORM\Column(name: "F_OGARaisonSoc", length: 35, nullable: true)]
    private ?string $fOgaraisonsoc = null;

    #[ORM\Column(name: "F_OGAComplementSoc", length: 35, nullable: true)]
    private ?string $fOgacomplementsoc = null;

    #[ORM\Column(name: "F_OGAQualite", length: 35, nullable: true)]
    private ?string $fOgaqualite = null;

    #[ORM\Column(name: "F_OGASiret", length: 15, nullable: true)]
    private ?string $fOgasiret = null;

    #[ORM\Column(name: "F_OGAAdherent", length: 35, nullable: true)]
    private ?string $fOgaadherent = null;

    #[ORM\Column(name: "F_OGAAgrement", length: 7, nullable: true)]
    private ?string $fOgaagrement = null;

    #[ORM\Column(name: "F_OGAAdresse", length: 35, nullable: true)]
    private ?string $fOgaadresse = null;

    #[ORM\Column(name: "F_OGAComplement", length: 35, nullable: true)]
    private ?string $fOgacomplement = null;

    #[ORM\Column(name: "F_OGACodePostal", length: 9, nullable: true)]
    private ?string $fOgacodepostal = null;

    #[ORM\Column(name: "F_OGAVille", length: 35, nullable: true)]
    private ?string $fOgaville = null;

    #[ORM\Column(name: "F_OGAPays", length: 35, nullable: true)]
    private ?string $fOgapays = null;

    #[ORM\Column(name: "F_OGATelephone", length: 21, nullable: true)]
    private ?string $fOgatelephone = null;

    #[ORM\Column(name: "F_OGAEMail", length: 69, nullable: true)]
    private ?string $fOgaemail = null;

    #[ORM\Column(name: "F_EDIDateCession", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $fEdidatecession = null;

    #[ORM\Column(name: "F_MAJConstante01CG_NumMAJConstante", length: 13, nullable: true)]
    private ?string $fMajconstante01cgNummajconstante = null;

    #[ORM\Column(name: "F_MAJConstante01BP_CodeMAJConstante", length: 9, nullable: true)]
    private ?string $fMajconstante01bpCodemajconstante = null;

    #[ORM\Column(name: "F_MAJConstante02CG_NumMAJConstante", length: 13, nullable: true)]
    private ?string $fMajconstante02cgNummajconstante = null;

    #[ORM\Column(name: "F_MAJConstante02BP_CodeMAJConstante", length: 9, nullable: true)]
    private ?string $fMajconstante02bpCodemajconstante = null;

    #[ORM\Column(name: "F_MAJConstante03CG_NumMAJConstante", length: 13, nullable: true)]
    private ?string $fMajconstante03cgNummajconstante = null;

    #[ORM\Column(name: "F_MAJConstante03BP_CodeMAJConstante", length: 9, nullable: true)]
    private ?string $fMajconstante03bpCodemajconstante = null;

    #[ORM\Column(name: "F_MAJConstante04CG_NumMAJConstante", length: 13, nullable: true)]
    private ?string $fMajconstante04cgNummajconstante = null;

    #[ORM\Column(name: "F_MAJConstante04BP_CodeMAJConstante", length: 9, nullable: true)]
    private ?string $fMajconstante04bpCodemajconstante = null;

    #[ORM\Column(name: "F_MAJConstante05CG_NumMAJConstante", length: 13, nullable: true)]
    private ?string $fMajconstante05cgNummajconstante = null;

    #[ORM\Column(name: "F_MAJConstante05BP_CodeMAJConstante", length: 9, nullable: true)]
    private ?string $fMajconstante05bpCodemajconstante = null;

    #[ORM\Column(name: "F_MAJConstante06CG_NumMAJConstante", length: 13, nullable: true)]
    private ?string $fMajconstante06cgNummajconstante = null;

    #[ORM\Column(name: "F_MAJConstante06BP_CodeMAJConstante", length: 9, nullable: true)]
    private ?string $fMajconstante06bpCodemajconstante = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getFRegime(): ?int
    {
        return $this->fRegime;
    }

    public function setFRegime(?int $fRegime): static
    {
        $this->fRegime = $fRegime;

        return $this;
    }

    public function getFRecette(): ?string
    {
        return $this->fRecette;
    }

    public function setFRecette(?string $fRecette): static
    {
        $this->fRecette = $fRecette;

        return $this;
    }

    public function getFNodossier(): ?string
    {
        return $this->fNodossier;
    }

    public function setFNodossier(?string $fNodossier): static
    {
        $this->fNodossier = $fNodossier;

        return $this;
    }

    public function getFCle(): ?string
    {
        return $this->fCle;
    }

    public function setFCle(?string $fCle): static
    {
        $this->fCle = $fCle;

        return $this;
    }

    public function getFCdi(): ?string
    {
        return $this->fCdi;
    }

    public function setFCdi(?string $fCdi): static
    {
        $this->fCdi = $fCdi;

        return $this;
    }

    public function getFInspection(): ?string
    {
        return $this->fInspection;
    }

    public function setFInspection(?string $fInspection): static
    {
        $this->fInspection = $fInspection;

        return $this;
    }

    public function getFDeduction(): ?string
    {
        return $this->fDeduction;
    }

    public function setFDeduction(?string $fDeduction): static
    {
        $this->fDeduction = $fDeduction;

        return $this;
    }

    public function getFCentreadresse(): ?string
    {
        return $this->fCentreadresse;
    }

    public function setFCentreadresse(?string $fCentreadresse): static
    {
        $this->fCentreadresse = $fCentreadresse;

        return $this;
    }

    public function getFCentrecomplement(): ?string
    {
        return $this->fCentrecomplement;
    }

    public function setFCentrecomplement(?string $fCentrecomplement): static
    {
        $this->fCentrecomplement = $fCentrecomplement;

        return $this;
    }

    public function getFCentrecp(): ?string
    {
        return $this->fCentrecp;
    }

    public function setFCentrecp(?string $fCentrecp): static
    {
        $this->fCentrecp = $fCentrecp;

        return $this;
    }

    public function getFCentreville(): ?string
    {
        return $this->fCentreville;
    }

    public function setFCentreville(?string $fCentreville): static
    {
        $this->fCentreville = $fCentreville;

        return $this;
    }

    public function getFCentretelephone(): ?string
    {
        return $this->fCentretelephone;
    }

    public function setFCentretelephone(?string $fCentretelephone): static
    {
        $this->fCentretelephone = $fCentretelephone;

        return $this;
    }

    public function getFCentrehoraire(): ?string
    {
        return $this->fCentrehoraire;
    }

    public function setFCentrehoraire(?string $fCentrehoraire): static
    {
        $this->fCentrehoraire = $fCentrehoraire;

        return $this;
    }

    public function getJoNummaj(): ?string
    {
        return $this->joNummaj;
    }

    public function setJoNummaj(?string $joNummaj): static
    {
        $this->joNummaj = $joNummaj;

        return $this;
    }

    public function getCgNummajdecaisser(): ?string
    {
        return $this->cgNummajdecaisser;
    }

    public function setCgNummajdecaisser(?string $cgNummajdecaisser): static
    {
        $this->cgNummajdecaisser = $cgNummajdecaisser;

        return $this;
    }

    public function getCgNummajcredit(): ?string
    {
        return $this->cgNummajcredit;
    }

    public function setCgNummajcredit(?string $cgNummajcredit): static
    {
        $this->cgNummajcredit = $cgNummajcredit;

        return $this;
    }

    public function getCgNummajecartd(): ?string
    {
        return $this->cgNummajecartd;
    }

    public function setCgNummajecartd(?string $cgNummajecartd): static
    {
        $this->cgNummajecartd = $cgNummajecartd;

        return $this;
    }

    public function getCgNummajecartc(): ?string
    {
        return $this->cgNummajecartc;
    }

    public function setCgNummajecartc(?string $cgNummajecartc): static
    {
        $this->cgNummajecartc = $cgNummajecartc;

        return $this;
    }

    public function getCgNummajapur(): ?string
    {
        return $this->cgNummajapur;
    }

    public function setCgNummajapur(?string $cgNummajapur): static
    {
        $this->cgNummajapur = $cgNummajapur;

        return $this;
    }

    public function getFArrondissement(): ?string
    {
        return $this->fArrondissement;
    }

    public function setFArrondissement(?string $fArrondissement): static
    {
        $this->fArrondissement = $fArrondissement;

        return $this;
    }

    public function getFArrondissementcode(): ?string
    {
        return $this->fArrondissementcode;
    }

    public function setFArrondissementcode(?string $fArrondissementcode): static
    {
        $this->fArrondissementcode = $fArrondissementcode;

        return $this;
    }

    public function getFArrondissementnum(): ?string
    {
        return $this->fArrondissementnum;
    }

    public function setFArrondissementnum(?string $fArrondissementnum): static
    {
        $this->fArrondissementnum = $fArrondissementnum;

        return $this;
    }

    public function getFNifexpert(): ?string
    {
        return $this->fNifexpert;
    }

    public function setFNifexpert(?string $fNifexpert): static
    {
        $this->fNifexpert = $fNifexpert;

        return $this;
    }

    public function getFMontantlimite(): ?string
    {
        return $this->fMontantlimite;
    }

    public function setFMontantlimite(?string $fMontantlimite): static
    {
        $this->fMontantlimite = $fMontantlimite;

        return $this;
    }

    public function getFAffiliationcm(): ?int
    {
        return $this->fAffiliationcm;
    }

    public function setFAffiliationcm(?int $fAffiliationcm): static
    {
        $this->fAffiliationcm = $fAffiliationcm;

        return $this;
    }

    public function getFDatelimitejour(): ?int
    {
        return $this->fDatelimitejour;
    }

    public function setFDatelimitejour(?int $fDatelimitejour): static
    {
        $this->fDatelimitejour = $fDatelimitejour;

        return $this;
    }

    public function getFDatelimitemois(): ?int
    {
        return $this->fDatelimitemois;
    }

    public function setFDatelimitemois(?int $fDatelimitemois): static
    {
        $this->fDatelimitemois = $fDatelimitemois;

        return $this;
    }

    public function getFEdinumfrp(): ?string
    {
        return $this->fEdinumfrp;
    }

    public function setFEdinumfrp(?string $fEdinumfrp): static
    {
        $this->fEdinumfrp = $fEdinumfrp;

        return $this;
    }

    public function getCdNom(): ?string
    {
        return $this->cdNom;
    }

    public function setCdNom(?string $cdNom): static
    {
        $this->cdNom = $cdNom;

        return $this;
    }

    public function getFEdiautretiers(): ?int
    {
        return $this->fEdiautretiers;
    }

    public function setFEdiautretiers(?int $fEdiautretiers): static
    {
        $this->fEdiautretiers = $fEdiautretiers;

        return $this;
    }

    public function getFEdiraisonsoc(): ?string
    {
        return $this->fEdiraisonsoc;
    }

    public function setFEdiraisonsoc(?string $fEdiraisonsoc): static
    {
        $this->fEdiraisonsoc = $fEdiraisonsoc;

        return $this;
    }

    public function getFEdiadresse(): ?string
    {
        return $this->fEdiadresse;
    }

    public function setFEdiadresse(?string $fEdiadresse): static
    {
        $this->fEdiadresse = $fEdiadresse;

        return $this;
    }

    public function getFEdicomplement(): ?string
    {
        return $this->fEdicomplement;
    }

    public function setFEdicomplement(?string $fEdicomplement): static
    {
        $this->fEdicomplement = $fEdicomplement;

        return $this;
    }

    public function getFEdicodepostal(): ?string
    {
        return $this->fEdicodepostal;
    }

    public function setFEdicodepostal(?string $fEdicodepostal): static
    {
        $this->fEdicodepostal = $fEdicodepostal;

        return $this;
    }

    public function getFEdiville(): ?string
    {
        return $this->fEdiville;
    }

    public function setFEdiville(?string $fEdiville): static
    {
        $this->fEdiville = $fEdiville;

        return $this;
    }

    public function getFEdisiret(): ?string
    {
        return $this->fEdisiret;
    }

    public function setFEdisiret(?string $fEdisiret): static
    {
        $this->fEdisiret = $fEdisiret;

        return $this;
    }

    public function getFEditelephone(): ?string
    {
        return $this->fEditelephone;
    }

    public function setFEditelephone(?string $fEditelephone): static
    {
        $this->fEditelephone = $fEditelephone;

        return $this;
    }

    public function getFEdiemail(): ?string
    {
        return $this->fEdiemail;
    }

    public function setFEdiemail(?string $fEdiemail): static
    {
        $this->fEdiemail = $fEdiemail;

        return $this;
    }

    public function getFDeclnom(): ?string
    {
        return $this->fDeclnom;
    }

    public function setFDeclnom(?string $fDeclnom): static
    {
        $this->fDeclnom = $fDeclnom;

        return $this;
    }

    public function getFDeclqualite(): ?string
    {
        return $this->fDeclqualite;
    }

    public function setFDeclqualite(?string $fDeclqualite): static
    {
        $this->fDeclqualite = $fDeclqualite;

        return $this;
    }

    public function getFDecltelephone(): ?string
    {
        return $this->fDecltelephone;
    }

    public function setFDecltelephone(?string $fDecltelephone): static
    {
        $this->fDecltelephone = $fDecltelephone;

        return $this;
    }

    public function getFVatintrano(): ?int
    {
        return $this->fVatintrano;
    }

    public function setFVatintrano(?int $fVatintrano): static
    {
        $this->fVatintrano = $fVatintrano;

        return $this;
    }

    public function getFVatlistno(): ?int
    {
        return $this->fVatlistno;
    }

    public function setFVatlistno(?int $fVatlistno): static
    {
        $this->fVatlistno = $fVatlistno;

        return $this;
    }

    public function getFEdinumocfi(): ?string
    {
        return $this->fEdinumocfi;
    }

    public function setFEdinumocfi(?string $fEdinumocfi): static
    {
        $this->fEdinumocfi = $fEdinumocfi;

        return $this;
    }

    public function getFEdidateredress(): ?\DateTimeInterface
    {
        return $this->fEdidateredress;
    }

    public function setFEdidateredress(?\DateTimeInterface $fEdidateredress): static
    {
        $this->fEdidateredress = $fEdidateredress;

        return $this;
    }

    public function getFEdicoderegion(): ?string
    {
        return $this->fEdicoderegion;
    }

    public function setFEdicoderegion(?string $fEdicoderegion): static
    {
        $this->fEdicoderegion = $fEdicoderegion;

        return $this;
    }

    public function getFEdipays(): ?string
    {
        return $this->fEdipays;
    }

    public function setFEdipays(?string $fEdipays): static
    {
        $this->fEdipays = $fEdipays;

        return $this;
    }

    public function getFCentrecoderegion(): ?string
    {
        return $this->fCentrecoderegion;
    }

    public function setFCentrecoderegion(?string $fCentrecoderegion): static
    {
        $this->fCentrecoderegion = $fCentrecoderegion;

        return $this;
    }

    public function getFCentrepays(): ?string
    {
        return $this->fCentrepays;
    }

    public function setFCentrepays(?string $fCentrepays): static
    {
        $this->fCentrepays = $fCentrepays;

        return $this;
    }

    public function getFOgaraisonsoc(): ?string
    {
        return $this->fOgaraisonsoc;
    }

    public function setFOgaraisonsoc(?string $fOgaraisonsoc): static
    {
        $this->fOgaraisonsoc = $fOgaraisonsoc;

        return $this;
    }

    public function getFOgacomplementsoc(): ?string
    {
        return $this->fOgacomplementsoc;
    }

    public function setFOgacomplementsoc(?string $fOgacomplementsoc): static
    {
        $this->fOgacomplementsoc = $fOgacomplementsoc;

        return $this;
    }

    public function getFOgaqualite(): ?string
    {
        return $this->fOgaqualite;
    }

    public function setFOgaqualite(?string $fOgaqualite): static
    {
        $this->fOgaqualite = $fOgaqualite;

        return $this;
    }

    public function getFOgasiret(): ?string
    {
        return $this->fOgasiret;
    }

    public function setFOgasiret(?string $fOgasiret): static
    {
        $this->fOgasiret = $fOgasiret;

        return $this;
    }

    public function getFOgaadherent(): ?string
    {
        return $this->fOgaadherent;
    }

    public function setFOgaadherent(?string $fOgaadherent): static
    {
        $this->fOgaadherent = $fOgaadherent;

        return $this;
    }

    public function getFOgaagrement(): ?string
    {
        return $this->fOgaagrement;
    }

    public function setFOgaagrement(?string $fOgaagrement): static
    {
        $this->fOgaagrement = $fOgaagrement;

        return $this;
    }

    public function getFOgaadresse(): ?string
    {
        return $this->fOgaadresse;
    }

    public function setFOgaadresse(?string $fOgaadresse): static
    {
        $this->fOgaadresse = $fOgaadresse;

        return $this;
    }

    public function getFOgacomplement(): ?string
    {
        return $this->fOgacomplement;
    }

    public function setFOgacomplement(?string $fOgacomplement): static
    {
        $this->fOgacomplement = $fOgacomplement;

        return $this;
    }

    public function getFOgacodepostal(): ?string
    {
        return $this->fOgacodepostal;
    }

    public function setFOgacodepostal(?string $fOgacodepostal): static
    {
        $this->fOgacodepostal = $fOgacodepostal;

        return $this;
    }

    public function getFOgaville(): ?string
    {
        return $this->fOgaville;
    }

    public function setFOgaville(?string $fOgaville): static
    {
        $this->fOgaville = $fOgaville;

        return $this;
    }

    public function getFOgapays(): ?string
    {
        return $this->fOgapays;
    }

    public function setFOgapays(?string $fOgapays): static
    {
        $this->fOgapays = $fOgapays;

        return $this;
    }

    public function getFOgatelephone(): ?string
    {
        return $this->fOgatelephone;
    }

    public function setFOgatelephone(?string $fOgatelephone): static
    {
        $this->fOgatelephone = $fOgatelephone;

        return $this;
    }

    public function getFOgaemail(): ?string
    {
        return $this->fOgaemail;
    }

    public function setFOgaemail(?string $fOgaemail): static
    {
        $this->fOgaemail = $fOgaemail;

        return $this;
    }

    public function getFEdidatecession(): ?\DateTimeInterface
    {
        return $this->fEdidatecession;
    }

    public function setFEdidatecession(?\DateTimeInterface $fEdidatecession): static
    {
        $this->fEdidatecession = $fEdidatecession;

        return $this;
    }

    public function getFMajconstante01cgNummajconstante(): ?string
    {
        return $this->fMajconstante01cgNummajconstante;
    }

    public function setFMajconstante01cgNummajconstante(?string $fMajconstante01cgNummajconstante): static
    {
        $this->fMajconstante01cgNummajconstante = $fMajconstante01cgNummajconstante;

        return $this;
    }

    public function getFMajconstante01bpCodemajconstante(): ?string
    {
        return $this->fMajconstante01bpCodemajconstante;
    }

    public function setFMajconstante01bpCodemajconstante(?string $fMajconstante01bpCodemajconstante): static
    {
        $this->fMajconstante01bpCodemajconstante = $fMajconstante01bpCodemajconstante;

        return $this;
    }

    public function getFMajconstante02cgNummajconstante(): ?string
    {
        return $this->fMajconstante02cgNummajconstante;
    }

    public function setFMajconstante02cgNummajconstante(?string $fMajconstante02cgNummajconstante): static
    {
        $this->fMajconstante02cgNummajconstante = $fMajconstante02cgNummajconstante;

        return $this;
    }

    public function getFMajconstante02bpCodemajconstante(): ?string
    {
        return $this->fMajconstante02bpCodemajconstante;
    }

    public function setFMajconstante02bpCodemajconstante(?string $fMajconstante02bpCodemajconstante): static
    {
        $this->fMajconstante02bpCodemajconstante = $fMajconstante02bpCodemajconstante;

        return $this;
    }

    public function getFMajconstante03cgNummajconstante(): ?string
    {
        return $this->fMajconstante03cgNummajconstante;
    }

    public function setFMajconstante03cgNummajconstante(?string $fMajconstante03cgNummajconstante): static
    {
        $this->fMajconstante03cgNummajconstante = $fMajconstante03cgNummajconstante;

        return $this;
    }

    public function getFMajconstante03bpCodemajconstante(): ?string
    {
        return $this->fMajconstante03bpCodemajconstante;
    }

    public function setFMajconstante03bpCodemajconstante(?string $fMajconstante03bpCodemajconstante): static
    {
        $this->fMajconstante03bpCodemajconstante = $fMajconstante03bpCodemajconstante;

        return $this;
    }

    public function getFMajconstante04cgNummajconstante(): ?string
    {
        return $this->fMajconstante04cgNummajconstante;
    }

    public function setFMajconstante04cgNummajconstante(?string $fMajconstante04cgNummajconstante): static
    {
        $this->fMajconstante04cgNummajconstante = $fMajconstante04cgNummajconstante;

        return $this;
    }

    public function getFMajconstante04bpCodemajconstante(): ?string
    {
        return $this->fMajconstante04bpCodemajconstante;
    }

    public function setFMajconstante04bpCodemajconstante(?string $fMajconstante04bpCodemajconstante): static
    {
        $this->fMajconstante04bpCodemajconstante = $fMajconstante04bpCodemajconstante;

        return $this;
    }

    public function getFMajconstante05cgNummajconstante(): ?string
    {
        return $this->fMajconstante05cgNummajconstante;
    }

    public function setFMajconstante05cgNummajconstante(?string $fMajconstante05cgNummajconstante): static
    {
        $this->fMajconstante05cgNummajconstante = $fMajconstante05cgNummajconstante;

        return $this;
    }

    public function getFMajconstante05bpCodemajconstante(): ?string
    {
        return $this->fMajconstante05bpCodemajconstante;
    }

    public function setFMajconstante05bpCodemajconstante(?string $fMajconstante05bpCodemajconstante): static
    {
        $this->fMajconstante05bpCodemajconstante = $fMajconstante05bpCodemajconstante;

        return $this;
    }

    public function getFMajconstante06cgNummajconstante(): ?string
    {
        return $this->fMajconstante06cgNummajconstante;
    }

    public function setFMajconstante06cgNummajconstante(?string $fMajconstante06cgNummajconstante): static
    {
        $this->fMajconstante06cgNummajconstante = $fMajconstante06cgNummajconstante;

        return $this;
    }

    public function getFMajconstante06bpCodemajconstante(): ?string
    {
        return $this->fMajconstante06bpCodemajconstante;
    }

    public function setFMajconstante06bpCodemajconstante(?string $fMajconstante06bpCodemajconstante): static
    {
        $this->fMajconstante06bpCodemajconstante = $fMajconstante06bpCodemajconstante;

        return $this;
    }
}
