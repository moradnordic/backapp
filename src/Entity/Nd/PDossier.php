<?php

namespace App\Entity\Nd;

use App\Repository\Nd\PDossierRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'P_DOSSIER')]
#[ORM\Entity(repositoryClass: PDossierRepository::class)]
class PDossier
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "D_RaisonSoc", length: 35, nullable: true)]
    private ?string $dRaisonsoc = null;

    #[ORM\Column(name: "D_Profession", length: 35, nullable: true)]
    private ?string $dProfession = null;

    #[ORM\Column(name: "D_Adresse", length: 35, nullable: true)]
    private ?string $dAdresse = null;

    #[ORM\Column(name: "D_Complement", length: 35, nullable: true)]
    private ?string $dComplement = null;

    #[ORM\Column(name: "D_CodePostal", length: 9, nullable: true)]
    private ?string $dCodepostal = null;

    #[ORM\Column(name: "D_Ville", length: 35, nullable: true)]
    private ?string $dVille = null;

    #[ORM\Column(name: "D_CodeRegion", length: 25, nullable: true)]
    private ?string $dCoderegion = null;

    #[ORM\Column(name: "D_Pays", length: 35, nullable: true)]
    private ?string $dPays = null;

    #[ORM\Column(name: "D_Commentaire", length: 69, nullable: true)]
    private ?string $dCommentaire = null;

    #[ORM\Column(name: "D_Siret", length: 15, nullable: true)]
    private ?string $dSiret = null;

    #[ORM\Column(name: "D_Ape", length: 7, nullable: true)]
    private ?string $dApe = null;

    #[ORM\Column(name: "D_Identifiant", length: 25, nullable: true)]
    private ?string $dIdentifiant = null;

    #[ORM\Column(name: "D_DebutExo01", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dDebutexo01 = null;

    #[ORM\Column(name: "D_DebutExo02", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dDebutexo02 = null;

    #[ORM\Column(name: "D_DebutExo03", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dDebutexo03 = null;

    #[ORM\Column(name: "D_DebutExo04", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dDebutexo04 = null;

    #[ORM\Column(name: "D_DebutExo05", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dDebutexo05 = null;

    #[ORM\Column(name: "D_FinExo01", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dFinexo01 = null;

    #[ORM\Column(name: "D_FinExo02", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dFinexo02 = null;

    #[ORM\Column(name: "D_FinExo03", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dFinexo03 = null;

    #[ORM\Column(name: "D_FinExo04", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dFinexo04 = null;

    #[ORM\Column(name: "D_FinExo05", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dFinexo05 = null;

    #[ORM\Column(name: "D_LgCg", type: Types::SMALLINT, nullable: true)]
    private ?int $dLgcg = null;

    #[ORM\Column(name: "D_LgAn", type: Types::SMALLINT, nullable: true)]
    private ?int $dLgan = null;

    #[ORM\Column(name: "D_FormatQtes", length: 31, nullable: true)]
    private ?string $dFormatqtes = null;

    #[ORM\Column(name: "D_CodeTrait", type: Types::SMALLINT, nullable: true)]
    private ?int $dCodetrait = null;

    #[ORM\Column(name: "D_ConfSupp", type: Types::SMALLINT, nullable: true)]
    private ?int $dConfsupp = null;

    #[ORM\Column(name: "D_AnalyseGL01", type: Types::SMALLINT, nullable: true)]
    private ?int $dAnalysegl01 = null;

    #[ORM\Column(name: "D_AnalyseGL02", type: Types::SMALLINT, nullable: true)]
    private ?int $dAnalysegl02 = null;

    #[ORM\Column(name: "D_AnalyseGL03", type: Types::SMALLINT, nullable: true)]
    private ?int $dAnalysegl03 = null;

    #[ORM\Column(name: "D_Delai", type: Types::SMALLINT, nullable: true)]
    private ?int $dDelai = null;

    #[ORM\Column(name: "D_OuvCompte", type: Types::SMALLINT, nullable: true)]
    private ?int $dOuvcompte = null;

    #[ORM\Column(name: "D_Budget", type: Types::SMALLINT, nullable: true)]
    private ?int $dBudget = null;

    #[ORM\Column(name: "D_SuppEc", type: Types::SMALLINT, nullable: true)]
    private ?int $dSuppec = null;

    #[ORM\Column(name: "D_RegTaxe", type: Types::SMALLINT, nullable: true)]
    private ?int $dRegtaxe = null;

    #[ORM\Column(name: "D_Ventil", type: Types::SMALLINT, nullable: true)]
    private ?int $dVentil = null;

    #[ORM\Column(name: "D_Edi", type: Types::SMALLINT, nullable: true)]
    private ?int $dEdi = null;

    #[ORM\Column(name: "D_Archivage01", type: Types::SMALLINT, nullable: true)]
    private ?int $dArchivage01 = null;

    #[ORM\Column(name: "D_Archivage02", type: Types::SMALLINT, nullable: true)]
    private ?int $dArchivage02 = null;

    #[ORM\Column(name: "D_Archivage03", type: Types::SMALLINT, nullable: true)]
    private ?int $dArchivage03 = null;

    #[ORM\Column(name: "D_Archivage04", type: Types::SMALLINT, nullable: true)]
    private ?int $dArchivage04 = null;

    #[ORM\Column(name: "D_Archivage05", type: Types::SMALLINT, nullable: true)]
    private ?int $dArchivage05 = null;

    #[ORM\Column(name: "D_RBSupp", type: Types::SMALLINT, nullable: true)]
    private ?int $dRbsupp = null;

    #[ORM\Column(name: "D_MajImport", type: Types::SMALLINT, nullable: true)]
    private ?int $dMajimport = null;

    #[ORM\Column(name: "D_SaisCab", type: Types::SMALLINT, nullable: true)]
    private ?int $dSaiscab = null;

    #[ORM\Column(name: "D_TypeValid", type: Types::SMALLINT, nullable: true)]
    private ?int $dTypevalid = null;

    #[ORM\Column(name: "D_ImpressZero", type: Types::SMALLINT, nullable: true)]
    private ?int $dImpresszero = null;

    #[ORM\Column(name: "N_DeviseCompte", type: Types::SMALLINT, nullable: true)]
    private ?int $nDevisecompte = null;

    #[ORM\Column(name: "N_DeviseEquival", type: Types::SMALLINT, nullable: true)]
    private ?int $nDeviseequival = null;

    #[ORM\Column(name: "D_ANSais", type: Types::SMALLINT, nullable: true)]
    private ?int $dAnsais = null;

    #[ORM\Column(name: "JO_NumAN", length: 7, nullable: true)]
    private ?string $joNuman = null;

    #[ORM\Column(name: "CG_NumANOuv", length: 13, nullable: true)]
    private ?string $cgNumanouv = null;

    #[ORM\Column(name: "CG_NumANBenef", length: 13, nullable: true)]
    private ?string $cgNumanbenef = null;

    #[ORM\Column(name: "CG_NumANPerte", length: 13, nullable: true)]
    private ?string $cgNumanperte = null;

    #[ORM\Column(name: "D_TVAEncReg", type: Types::SMALLINT, nullable: true)]
    private ?int $dTvaencreg = null;

    #[ORM\Column(name: "D_TVAEncAffect", type: Types::SMALLINT, nullable: true)]
    private ?int $dTvaencaffect = null;

    #[ORM\Column(name: "D_DeviseEq", type: Types::SMALLINT, nullable: true)]
    private ?int $dDeviseeq = null;

    #[ORM\Column(name: "D_AnAffect", type: Types::SMALLINT, nullable: true)]
    private ?int $dAnaffect = null;

    #[ORM\Column(name: "D_ReglPiece", type: Types::SMALLINT, nullable: true)]
    private ?int $dReglpiece = null;

    #[ORM\Column(name: "D_ExtNeg", type: Types::SMALLINT, nullable: true)]
    private ?int $dExtneg = null;

    #[ORM\Column(name: "D_RapproDevise", type: Types::SMALLINT, nullable: true)]
    private ?int $dRapprodevise = null;

    #[ORM\Column(name: "D_ImportEqJo", type: Types::SMALLINT, nullable: true)]
    private ?int $dImporteqjo = null;

    #[ORM\Column(name: "D_ImportEqAn", type: Types::SMALLINT, nullable: true)]
    private ?int $dImporteqan = null;

    #[ORM\Column(name: "CG_NumImportDebit", length: 13, nullable: true)]
    private ?string $cgNumimportdebit = null;

    #[ORM\Column(name: "CG_NumImportCredit", length: 13, nullable: true)]
    private ?string $cgNumimportcredit = null;

    #[ORM\Column(name: "N_Analytique", type: Types::SMALLINT, nullable: true)]
    private ?int $nAnalytique = null;

    #[ORM\Column(name: "D_NumDoss", length: 9, nullable: true)]
    private ?string $dNumdoss = null;

    #[ORM\Column(name: "D_EMail", length: 69, nullable: true)]
    private ?string $dEmail = null;

    #[ORM\Column(name: "D_EMailExpert", length: 69, nullable: true)]
    private ?string $dEmailexpert = null;

    #[ORM\Column(name: "D_Expert", length: 35, nullable: true)]
    private ?string $dExpert = null;

    #[ORM\Column(name: "D_Telephone", length: 21, nullable: true)]
    private ?string $dTelephone = null;

    #[ORM\Column(name: "D_Telecopie", length: 21, nullable: true)]
    private ?string $dTelecopie = null;

    #[ORM\Column(name: "D_EMailSoc", length: 69, nullable: true)]
    private ?string $dEmailsoc = null;

    #[ORM\Column(name: "D_Site", length: 69, nullable: true)]
    private ?string $dSite = null;

    #[ORM\Column(name: "D_AppelTiers", type: Types::SMALLINT, nullable: true)]
    private ?int $dAppeltiers = null;

    #[ORM\Column(name: "D_AppelSection", type: Types::SMALLINT, nullable: true)]
    private ?int $dAppelsection = null;

    #[ORM\Column(name: "D_ProtPiece", type: Types::SMALLINT, nullable: true)]
    private ?int $dProtpiece = null;

    #[ORM\Column(name: "D_NumCont", type: Types::SMALLINT, nullable: true)]
    private ?int $dNumcont = null;

    #[ORM\Column(name: "D_DateClot", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dDateclot = null;

    #[ORM\Column(name: "D_CompteGTotal", type: Types::SMALLINT, nullable: true)]
    private ?int $dComptegtotal = null;

    #[ORM\Column(name: "D_RapproRecherche", type: Types::SMALLINT, nullable: true)]
    private ?int $dRapprorecherche = null;

    #[ORM\Column(name: "D_RapproEcart", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $dRapproecart = null;

    #[ORM\Column(name: "CG_NumRappro", length: 13, nullable: true)]
    private ?string $cgNumrappro = null;

    #[ORM\Column(name: "D_RapproContrepartie", type: Types::SMALLINT, nullable: true)]
    private ?int $dRapprocontrepartie = null;

    #[ORM\Column(name: "D_ComSens", type: Types::SMALLINT, nullable: true)]
    private ?int $dComsens = null;

    #[ORM\Column(name: "D_ComType", type: Types::SMALLINT, nullable: true)]
    private ?int $dComtype = null;

    #[ORM\Column(name: "D_ComMoyen", type: Types::SMALLINT, nullable: true)]
    private ?int $dCommoyen = null;

    #[ORM\Column(name: "D_ComSoft", type: Types::SMALLINT, nullable: true)]
    private ?int $dComsoft = null;

    #[ORM\Column(name: "D_ComCodeExpert", length: 9, nullable: true)]
    private ?string $dComcodeexpert = null;

    #[ORM\Column(name: "D_ComDateSynchro", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dComdatesynchro = null;

    #[ORM\Column(name: "D_ComGUID", type: Types::GUID, nullable: true)]
    private ?string $dComguid = null;

    #[ORM\Column(name: "D_RapproTypeEcart", type: Types::SMALLINT, nullable: true)]
    private ?int $dRapprotypeecart = null;

    #[ORM\Column(name: "D_RapproReport", type: Types::SMALLINT, nullable: true)]
    private ?int $dRapproreport = null;

    #[ORM\Column(name: "JO_NumRapproEscCl", length: 7, nullable: true)]
    private ?string $joNumrapproesccl = null;

    #[ORM\Column(name: "PI_NoRapproEscCl", nullable: true)]
    private ?int $piNorapproesccl = null;

    #[ORM\Column(name: "JO_NumRapproEscFr", length: 7, nullable: true)]
    private ?string $joNumrapproescfr = null;

    #[ORM\Column(name: "PI_NoRapproEscFr", nullable: true)]
    private ?int $piNorapproescfr = null;

    #[ORM\Column(name: "D_GestionIFRS", type: Types::SMALLINT, nullable: true)]
    private ?int $dGestionifrs = null;

    #[ORM\Column(name: "D_SaisieIFRS", type: Types::SMALLINT, nullable: true)]
    private ?int $dSaisieifrs = null;

    #[ORM\Column(name: "N_AnalytiqueIFRS", type: Types::SMALLINT, nullable: true)]
    private ?int $nAnalytiqueifrs = null;

    #[ORM\Column(name: "JA_NumAN", length: 7, nullable: true)]
    private ?string $jaNuman = null;

    #[ORM\Column(name: "JO_NumANIFRS", length: 7, nullable: true)]
    private ?string $joNumanifrs = null;

    #[ORM\Column(name: "JA_NumANIFRS", length: 7, nullable: true)]
    private ?string $jaNumanifrs = null;

    #[ORM\Column(name: "D_RappelSoldeMin", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $dRappelsoldemin = null;

    #[ORM\Column(name: "D_ImportVentil", type: Types::SMALLINT, nullable: true)]
    private ?int $dImportventil = null;

    #[ORM\Column(name: "D_PenalTaux", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $dPenaltaux = null;

    #[ORM\Column(name: "D_PenalImputation", type: Types::SMALLINT, nullable: true)]
    private ?int $dPenalimputation = null;

    #[ORM\Column(name: "JO_NumPenal", length: 7, nullable: true)]
    private ?string $joNumpenal = null;

    #[ORM\Column(name: "PI_NoPenal", nullable: true)]
    private ?int $piNopenal = null;

    #[ORM\Column(name: "JO_NumImpayes", length: 7, nullable: true)]
    private ?string $joNumimpayes = null;

    #[ORM\Column(name: "PI_NoImpayes", nullable: true)]
    private ?int $piNoimpayes = null;

    #[ORM\Column(name: "D_ImpressFactRef", type: Types::SMALLINT, nullable: true)]
    private ?int $dImpressfactref = null;

    #[ORM\Column(name: "D_SeuilTVA", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $dSeuiltva = null;

    #[ORM\Column(name: "D_NotSaisieSommeil", type: Types::SMALLINT, nullable: true)]
    private ?int $dNotsaisiesommeil = null;

    #[ORM\Column(name: "D_NormeDGI", type: Types::SMALLINT, nullable: true)]
    private ?int $dNormedgi = null;

    #[ORM\Column(name: "D_ArchivePeriod", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dArchiveperiod = null;

    #[ORM\Column(name: "D_ECNoCloture01", nullable: true)]
    private ?int $dEcnocloture01 = null;

    #[ORM\Column(name: "D_ECNoCloture02", nullable: true)]
    private ?int $dEcnocloture02 = null;

    #[ORM\Column(name: "D_ECNoCloture03", nullable: true)]
    private ?int $dEcnocloture03 = null;

    #[ORM\Column(name: "D_ECNoCloture04", nullable: true)]
    private ?int $dEcnocloture04 = null;

    #[ORM\Column(name: "D_ECNoCloture05", nullable: true)]
    private ?int $dEcnocloture05 = null;

    #[ORM\Column(name: "D_CloturePeriod", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dClotureperiod = null;

    #[ORM\Column(name: "D_MaterialPiece", type: Types::SMALLINT, nullable: true)]
    private ?int $dMaterialpiece = null;

    #[ORM\Column(name: "D_BudgetAn", type: Types::SMALLINT, nullable: true)]
    private ?int $dBudgetan = null;

    #[ORM\Column(name: "D_Capital", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $dCapital = null;

    #[ORM\Column(name: "D_FormeJuridique", length: 35, nullable: true)]
    private ?string $dFormejuridique = null;

    #[ORM\Column(name: "D_ForfaitImpayes", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $dForfaitimpayes = null;

    #[ORM\Column(name: "D_CodeOctave", length: 21, nullable: true)]
    private ?string $dCodeoctave = null;

    #[ORM\Column(name: "D_FinexKap", type: Types::SMALLINT, nullable: true)]
    private ?int $dFinexkap = null;

    #[ORM\Column(name: "JO_NumFinexKap", length: 7, nullable: true)]
    private ?string $joNumfinexkap = null;

    #[ORM\Column(name: "PI_NoFinexKap", nullable: true)]
    private ?int $piNofinexkap = null;

    #[ORM\Column(name: "D_Facebook", length: 35, nullable: true)]
    private ?string $dFacebook = null;

    #[ORM\Column(name: "D_LinkedIn", length: 35, nullable: true)]
    private ?string $dLinkedin = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getDRaisonsoc(): ?string
    {
        return $this->dRaisonsoc;
    }

    public function setDRaisonsoc(?string $dRaisonsoc): static
    {
        $this->dRaisonsoc = $dRaisonsoc;

        return $this;
    }

    public function getDProfession(): ?string
    {
        return $this->dProfession;
    }

    public function setDProfession(?string $dProfession): static
    {
        $this->dProfession = $dProfession;

        return $this;
    }

    public function getDAdresse(): ?string
    {
        return $this->dAdresse;
    }

    public function setDAdresse(?string $dAdresse): static
    {
        $this->dAdresse = $dAdresse;

        return $this;
    }

    public function getDComplement(): ?string
    {
        return $this->dComplement;
    }

    public function setDComplement(?string $dComplement): static
    {
        $this->dComplement = $dComplement;

        return $this;
    }

    public function getDCodepostal(): ?string
    {
        return $this->dCodepostal;
    }

    public function setDCodepostal(?string $dCodepostal): static
    {
        $this->dCodepostal = $dCodepostal;

        return $this;
    }

    public function getDVille(): ?string
    {
        return $this->dVille;
    }

    public function setDVille(?string $dVille): static
    {
        $this->dVille = $dVille;

        return $this;
    }

    public function getDCoderegion(): ?string
    {
        return $this->dCoderegion;
    }

    public function setDCoderegion(?string $dCoderegion): static
    {
        $this->dCoderegion = $dCoderegion;

        return $this;
    }

    public function getDPays(): ?string
    {
        return $this->dPays;
    }

    public function setDPays(?string $dPays): static
    {
        $this->dPays = $dPays;

        return $this;
    }

    public function getDCommentaire(): ?string
    {
        return $this->dCommentaire;
    }

    public function setDCommentaire(?string $dCommentaire): static
    {
        $this->dCommentaire = $dCommentaire;

        return $this;
    }

    public function getDSiret(): ?string
    {
        return $this->dSiret;
    }

    public function setDSiret(?string $dSiret): static
    {
        $this->dSiret = $dSiret;

        return $this;
    }

    public function getDApe(): ?string
    {
        return $this->dApe;
    }

    public function setDApe(?string $dApe): static
    {
        $this->dApe = $dApe;

        return $this;
    }

    public function getDIdentifiant(): ?string
    {
        return $this->dIdentifiant;
    }

    public function setDIdentifiant(?string $dIdentifiant): static
    {
        $this->dIdentifiant = $dIdentifiant;

        return $this;
    }

    public function getDDebutexo01(): ?\DateTimeInterface
    {
        return $this->dDebutexo01;
    }

    public function setDDebutexo01(?\DateTimeInterface $dDebutexo01): static
    {
        $this->dDebutexo01 = $dDebutexo01;

        return $this;
    }

    public function getDDebutexo02(): ?\DateTimeInterface
    {
        return $this->dDebutexo02;
    }

    public function setDDebutexo02(?\DateTimeInterface $dDebutexo02): static
    {
        $this->dDebutexo02 = $dDebutexo02;

        return $this;
    }

    public function getDDebutexo03(): ?\DateTimeInterface
    {
        return $this->dDebutexo03;
    }

    public function setDDebutexo03(?\DateTimeInterface $dDebutexo03): static
    {
        $this->dDebutexo03 = $dDebutexo03;

        return $this;
    }

    public function getDDebutexo04(): ?\DateTimeInterface
    {
        return $this->dDebutexo04;
    }

    public function setDDebutexo04(?\DateTimeInterface $dDebutexo04): static
    {
        $this->dDebutexo04 = $dDebutexo04;

        return $this;
    }

    public function getDDebutexo05(): ?\DateTimeInterface
    {
        return $this->dDebutexo05;
    }

    public function setDDebutexo05(?\DateTimeInterface $dDebutexo05): static
    {
        $this->dDebutexo05 = $dDebutexo05;

        return $this;
    }

    public function getDFinexo01(): ?\DateTimeInterface
    {
        return $this->dFinexo01;
    }

    public function setDFinexo01(?\DateTimeInterface $dFinexo01): static
    {
        $this->dFinexo01 = $dFinexo01;

        return $this;
    }

    public function getDFinexo02(): ?\DateTimeInterface
    {
        return $this->dFinexo02;
    }

    public function setDFinexo02(?\DateTimeInterface $dFinexo02): static
    {
        $this->dFinexo02 = $dFinexo02;

        return $this;
    }

    public function getDFinexo03(): ?\DateTimeInterface
    {
        return $this->dFinexo03;
    }

    public function setDFinexo03(?\DateTimeInterface $dFinexo03): static
    {
        $this->dFinexo03 = $dFinexo03;

        return $this;
    }

    public function getDFinexo04(): ?\DateTimeInterface
    {
        return $this->dFinexo04;
    }

    public function setDFinexo04(?\DateTimeInterface $dFinexo04): static
    {
        $this->dFinexo04 = $dFinexo04;

        return $this;
    }

    public function getDFinexo05(): ?\DateTimeInterface
    {
        return $this->dFinexo05;
    }

    public function setDFinexo05(?\DateTimeInterface $dFinexo05): static
    {
        $this->dFinexo05 = $dFinexo05;

        return $this;
    }

    public function getDLgcg(): ?int
    {
        return $this->dLgcg;
    }

    public function setDLgcg(?int $dLgcg): static
    {
        $this->dLgcg = $dLgcg;

        return $this;
    }

    public function getDLgan(): ?int
    {
        return $this->dLgan;
    }

    public function setDLgan(?int $dLgan): static
    {
        $this->dLgan = $dLgan;

        return $this;
    }

    public function getDFormatqtes(): ?string
    {
        return $this->dFormatqtes;
    }

    public function setDFormatqtes(?string $dFormatqtes): static
    {
        $this->dFormatqtes = $dFormatqtes;

        return $this;
    }

    public function getDCodetrait(): ?int
    {
        return $this->dCodetrait;
    }

    public function setDCodetrait(?int $dCodetrait): static
    {
        $this->dCodetrait = $dCodetrait;

        return $this;
    }

    public function getDConfsupp(): ?int
    {
        return $this->dConfsupp;
    }

    public function setDConfsupp(?int $dConfsupp): static
    {
        $this->dConfsupp = $dConfsupp;

        return $this;
    }

    public function getDAnalysegl01(): ?int
    {
        return $this->dAnalysegl01;
    }

    public function setDAnalysegl01(?int $dAnalysegl01): static
    {
        $this->dAnalysegl01 = $dAnalysegl01;

        return $this;
    }

    public function getDAnalysegl02(): ?int
    {
        return $this->dAnalysegl02;
    }

    public function setDAnalysegl02(?int $dAnalysegl02): static
    {
        $this->dAnalysegl02 = $dAnalysegl02;

        return $this;
    }

    public function getDAnalysegl03(): ?int
    {
        return $this->dAnalysegl03;
    }

    public function setDAnalysegl03(?int $dAnalysegl03): static
    {
        $this->dAnalysegl03 = $dAnalysegl03;

        return $this;
    }

    public function getDDelai(): ?int
    {
        return $this->dDelai;
    }

    public function setDDelai(?int $dDelai): static
    {
        $this->dDelai = $dDelai;

        return $this;
    }

    public function getDOuvcompte(): ?int
    {
        return $this->dOuvcompte;
    }

    public function setDOuvcompte(?int $dOuvcompte): static
    {
        $this->dOuvcompte = $dOuvcompte;

        return $this;
    }

    public function getDBudget(): ?int
    {
        return $this->dBudget;
    }

    public function setDBudget(?int $dBudget): static
    {
        $this->dBudget = $dBudget;

        return $this;
    }

    public function getDSuppec(): ?int
    {
        return $this->dSuppec;
    }

    public function setDSuppec(?int $dSuppec): static
    {
        $this->dSuppec = $dSuppec;

        return $this;
    }

    public function getDRegtaxe(): ?int
    {
        return $this->dRegtaxe;
    }

    public function setDRegtaxe(?int $dRegtaxe): static
    {
        $this->dRegtaxe = $dRegtaxe;

        return $this;
    }

    public function getDVentil(): ?int
    {
        return $this->dVentil;
    }

    public function setDVentil(?int $dVentil): static
    {
        $this->dVentil = $dVentil;

        return $this;
    }

    public function getDEdi(): ?int
    {
        return $this->dEdi;
    }

    public function setDEdi(?int $dEdi): static
    {
        $this->dEdi = $dEdi;

        return $this;
    }

    public function getDArchivage01(): ?int
    {
        return $this->dArchivage01;
    }

    public function setDArchivage01(?int $dArchivage01): static
    {
        $this->dArchivage01 = $dArchivage01;

        return $this;
    }

    public function getDArchivage02(): ?int
    {
        return $this->dArchivage02;
    }

    public function setDArchivage02(?int $dArchivage02): static
    {
        $this->dArchivage02 = $dArchivage02;

        return $this;
    }

    public function getDArchivage03(): ?int
    {
        return $this->dArchivage03;
    }

    public function setDArchivage03(?int $dArchivage03): static
    {
        $this->dArchivage03 = $dArchivage03;

        return $this;
    }

    public function getDArchivage04(): ?int
    {
        return $this->dArchivage04;
    }

    public function setDArchivage04(?int $dArchivage04): static
    {
        $this->dArchivage04 = $dArchivage04;

        return $this;
    }

    public function getDArchivage05(): ?int
    {
        return $this->dArchivage05;
    }

    public function setDArchivage05(?int $dArchivage05): static
    {
        $this->dArchivage05 = $dArchivage05;

        return $this;
    }

    public function getDRbsupp(): ?int
    {
        return $this->dRbsupp;
    }

    public function setDRbsupp(?int $dRbsupp): static
    {
        $this->dRbsupp = $dRbsupp;

        return $this;
    }

    public function getDMajimport(): ?int
    {
        return $this->dMajimport;
    }

    public function setDMajimport(?int $dMajimport): static
    {
        $this->dMajimport = $dMajimport;

        return $this;
    }

    public function getDSaiscab(): ?int
    {
        return $this->dSaiscab;
    }

    public function setDSaiscab(?int $dSaiscab): static
    {
        $this->dSaiscab = $dSaiscab;

        return $this;
    }

    public function getDTypevalid(): ?int
    {
        return $this->dTypevalid;
    }

    public function setDTypevalid(?int $dTypevalid): static
    {
        $this->dTypevalid = $dTypevalid;

        return $this;
    }

    public function getDImpresszero(): ?int
    {
        return $this->dImpresszero;
    }

    public function setDImpresszero(?int $dImpresszero): static
    {
        $this->dImpresszero = $dImpresszero;

        return $this;
    }

    public function getNDevisecompte(): ?int
    {
        return $this->nDevisecompte;
    }

    public function setNDevisecompte(?int $nDevisecompte): static
    {
        $this->nDevisecompte = $nDevisecompte;

        return $this;
    }

    public function getNDeviseequival(): ?int
    {
        return $this->nDeviseequival;
    }

    public function setNDeviseequival(?int $nDeviseequival): static
    {
        $this->nDeviseequival = $nDeviseequival;

        return $this;
    }

    public function getDAnsais(): ?int
    {
        return $this->dAnsais;
    }

    public function setDAnsais(?int $dAnsais): static
    {
        $this->dAnsais = $dAnsais;

        return $this;
    }

    public function getJoNuman(): ?string
    {
        return $this->joNuman;
    }

    public function setJoNuman(?string $joNuman): static
    {
        $this->joNuman = $joNuman;

        return $this;
    }

    public function getCgNumanouv(): ?string
    {
        return $this->cgNumanouv;
    }

    public function setCgNumanouv(?string $cgNumanouv): static
    {
        $this->cgNumanouv = $cgNumanouv;

        return $this;
    }

    public function getCgNumanbenef(): ?string
    {
        return $this->cgNumanbenef;
    }

    public function setCgNumanbenef(?string $cgNumanbenef): static
    {
        $this->cgNumanbenef = $cgNumanbenef;

        return $this;
    }

    public function getCgNumanperte(): ?string
    {
        return $this->cgNumanperte;
    }

    public function setCgNumanperte(?string $cgNumanperte): static
    {
        $this->cgNumanperte = $cgNumanperte;

        return $this;
    }

    public function getDTvaencreg(): ?int
    {
        return $this->dTvaencreg;
    }

    public function setDTvaencreg(?int $dTvaencreg): static
    {
        $this->dTvaencreg = $dTvaencreg;

        return $this;
    }

    public function getDTvaencaffect(): ?int
    {
        return $this->dTvaencaffect;
    }

    public function setDTvaencaffect(?int $dTvaencaffect): static
    {
        $this->dTvaencaffect = $dTvaencaffect;

        return $this;
    }

    public function getDDeviseeq(): ?int
    {
        return $this->dDeviseeq;
    }

    public function setDDeviseeq(?int $dDeviseeq): static
    {
        $this->dDeviseeq = $dDeviseeq;

        return $this;
    }

    public function getDAnaffect(): ?int
    {
        return $this->dAnaffect;
    }

    public function setDAnaffect(?int $dAnaffect): static
    {
        $this->dAnaffect = $dAnaffect;

        return $this;
    }

    public function getDReglpiece(): ?int
    {
        return $this->dReglpiece;
    }

    public function setDReglpiece(?int $dReglpiece): static
    {
        $this->dReglpiece = $dReglpiece;

        return $this;
    }

    public function getDExtneg(): ?int
    {
        return $this->dExtneg;
    }

    public function setDExtneg(?int $dExtneg): static
    {
        $this->dExtneg = $dExtneg;

        return $this;
    }

    public function getDRapprodevise(): ?int
    {
        return $this->dRapprodevise;
    }

    public function setDRapprodevise(?int $dRapprodevise): static
    {
        $this->dRapprodevise = $dRapprodevise;

        return $this;
    }

    public function getDImporteqjo(): ?int
    {
        return $this->dImporteqjo;
    }

    public function setDImporteqjo(?int $dImporteqjo): static
    {
        $this->dImporteqjo = $dImporteqjo;

        return $this;
    }

    public function getDImporteqan(): ?int
    {
        return $this->dImporteqan;
    }

    public function setDImporteqan(?int $dImporteqan): static
    {
        $this->dImporteqan = $dImporteqan;

        return $this;
    }

    public function getCgNumimportdebit(): ?string
    {
        return $this->cgNumimportdebit;
    }

    public function setCgNumimportdebit(?string $cgNumimportdebit): static
    {
        $this->cgNumimportdebit = $cgNumimportdebit;

        return $this;
    }

    public function getCgNumimportcredit(): ?string
    {
        return $this->cgNumimportcredit;
    }

    public function setCgNumimportcredit(?string $cgNumimportcredit): static
    {
        $this->cgNumimportcredit = $cgNumimportcredit;

        return $this;
    }

    public function getNAnalytique(): ?int
    {
        return $this->nAnalytique;
    }

    public function setNAnalytique(?int $nAnalytique): static
    {
        $this->nAnalytique = $nAnalytique;

        return $this;
    }

    public function getDNumdoss(): ?string
    {
        return $this->dNumdoss;
    }

    public function setDNumdoss(?string $dNumdoss): static
    {
        $this->dNumdoss = $dNumdoss;

        return $this;
    }

    public function getDEmail(): ?string
    {
        return $this->dEmail;
    }

    public function setDEmail(?string $dEmail): static
    {
        $this->dEmail = $dEmail;

        return $this;
    }

    public function getDEmailexpert(): ?string
    {
        return $this->dEmailexpert;
    }

    public function setDEmailexpert(?string $dEmailexpert): static
    {
        $this->dEmailexpert = $dEmailexpert;

        return $this;
    }

    public function getDExpert(): ?string
    {
        return $this->dExpert;
    }

    public function setDExpert(?string $dExpert): static
    {
        $this->dExpert = $dExpert;

        return $this;
    }

    public function getDTelephone(): ?string
    {
        return $this->dTelephone;
    }

    public function setDTelephone(?string $dTelephone): static
    {
        $this->dTelephone = $dTelephone;

        return $this;
    }

    public function getDTelecopie(): ?string
    {
        return $this->dTelecopie;
    }

    public function setDTelecopie(?string $dTelecopie): static
    {
        $this->dTelecopie = $dTelecopie;

        return $this;
    }

    public function getDEmailsoc(): ?string
    {
        return $this->dEmailsoc;
    }

    public function setDEmailsoc(?string $dEmailsoc): static
    {
        $this->dEmailsoc = $dEmailsoc;

        return $this;
    }

    public function getDSite(): ?string
    {
        return $this->dSite;
    }

    public function setDSite(?string $dSite): static
    {
        $this->dSite = $dSite;

        return $this;
    }

    public function getDAppeltiers(): ?int
    {
        return $this->dAppeltiers;
    }

    public function setDAppeltiers(?int $dAppeltiers): static
    {
        $this->dAppeltiers = $dAppeltiers;

        return $this;
    }

    public function getDAppelsection(): ?int
    {
        return $this->dAppelsection;
    }

    public function setDAppelsection(?int $dAppelsection): static
    {
        $this->dAppelsection = $dAppelsection;

        return $this;
    }

    public function getDProtpiece(): ?int
    {
        return $this->dProtpiece;
    }

    public function setDProtpiece(?int $dProtpiece): static
    {
        $this->dProtpiece = $dProtpiece;

        return $this;
    }

    public function getDNumcont(): ?int
    {
        return $this->dNumcont;
    }

    public function setDNumcont(?int $dNumcont): static
    {
        $this->dNumcont = $dNumcont;

        return $this;
    }

    public function getDDateclot(): ?\DateTimeInterface
    {
        return $this->dDateclot;
    }

    public function setDDateclot(?\DateTimeInterface $dDateclot): static
    {
        $this->dDateclot = $dDateclot;

        return $this;
    }

    public function getDComptegtotal(): ?int
    {
        return $this->dComptegtotal;
    }

    public function setDComptegtotal(?int $dComptegtotal): static
    {
        $this->dComptegtotal = $dComptegtotal;

        return $this;
    }

    public function getDRapprorecherche(): ?int
    {
        return $this->dRapprorecherche;
    }

    public function setDRapprorecherche(?int $dRapprorecherche): static
    {
        $this->dRapprorecherche = $dRapprorecherche;

        return $this;
    }

    public function getDRapproecart(): ?string
    {
        return $this->dRapproecart;
    }

    public function setDRapproecart(?string $dRapproecart): static
    {
        $this->dRapproecart = $dRapproecart;

        return $this;
    }

    public function getCgNumrappro(): ?string
    {
        return $this->cgNumrappro;
    }

    public function setCgNumrappro(?string $cgNumrappro): static
    {
        $this->cgNumrappro = $cgNumrappro;

        return $this;
    }

    public function getDRapprocontrepartie(): ?int
    {
        return $this->dRapprocontrepartie;
    }

    public function setDRapprocontrepartie(?int $dRapprocontrepartie): static
    {
        $this->dRapprocontrepartie = $dRapprocontrepartie;

        return $this;
    }

    public function getDComsens(): ?int
    {
        return $this->dComsens;
    }

    public function setDComsens(?int $dComsens): static
    {
        $this->dComsens = $dComsens;

        return $this;
    }

    public function getDComtype(): ?int
    {
        return $this->dComtype;
    }

    public function setDComtype(?int $dComtype): static
    {
        $this->dComtype = $dComtype;

        return $this;
    }

    public function getDCommoyen(): ?int
    {
        return $this->dCommoyen;
    }

    public function setDCommoyen(?int $dCommoyen): static
    {
        $this->dCommoyen = $dCommoyen;

        return $this;
    }

    public function getDComsoft(): ?int
    {
        return $this->dComsoft;
    }

    public function setDComsoft(?int $dComsoft): static
    {
        $this->dComsoft = $dComsoft;

        return $this;
    }

    public function getDComcodeexpert(): ?string
    {
        return $this->dComcodeexpert;
    }

    public function setDComcodeexpert(?string $dComcodeexpert): static
    {
        $this->dComcodeexpert = $dComcodeexpert;

        return $this;
    }

    public function getDComdatesynchro(): ?\DateTimeInterface
    {
        return $this->dComdatesynchro;
    }

    public function setDComdatesynchro(?\DateTimeInterface $dComdatesynchro): static
    {
        $this->dComdatesynchro = $dComdatesynchro;

        return $this;
    }

    public function getDComguid(): ?string
    {
        return $this->dComguid;
    }

    public function setDComguid(?string $dComguid): static
    {
        $this->dComguid = $dComguid;

        return $this;
    }

    public function getDRapprotypeecart(): ?int
    {
        return $this->dRapprotypeecart;
    }

    public function setDRapprotypeecart(?int $dRapprotypeecart): static
    {
        $this->dRapprotypeecart = $dRapprotypeecart;

        return $this;
    }

    public function getDRapproreport(): ?int
    {
        return $this->dRapproreport;
    }

    public function setDRapproreport(?int $dRapproreport): static
    {
        $this->dRapproreport = $dRapproreport;

        return $this;
    }

    public function getJoNumrapproesccl(): ?string
    {
        return $this->joNumrapproesccl;
    }

    public function setJoNumrapproesccl(?string $joNumrapproesccl): static
    {
        $this->joNumrapproesccl = $joNumrapproesccl;

        return $this;
    }

    public function getPiNorapproesccl(): ?int
    {
        return $this->piNorapproesccl;
    }

    public function setPiNorapproesccl(?int $piNorapproesccl): static
    {
        $this->piNorapproesccl = $piNorapproesccl;

        return $this;
    }

    public function getJoNumrapproescfr(): ?string
    {
        return $this->joNumrapproescfr;
    }

    public function setJoNumrapproescfr(?string $joNumrapproescfr): static
    {
        $this->joNumrapproescfr = $joNumrapproescfr;

        return $this;
    }

    public function getPiNorapproescfr(): ?int
    {
        return $this->piNorapproescfr;
    }

    public function setPiNorapproescfr(?int $piNorapproescfr): static
    {
        $this->piNorapproescfr = $piNorapproescfr;

        return $this;
    }

    public function getDGestionifrs(): ?int
    {
        return $this->dGestionifrs;
    }

    public function setDGestionifrs(?int $dGestionifrs): static
    {
        $this->dGestionifrs = $dGestionifrs;

        return $this;
    }

    public function getDSaisieifrs(): ?int
    {
        return $this->dSaisieifrs;
    }

    public function setDSaisieifrs(?int $dSaisieifrs): static
    {
        $this->dSaisieifrs = $dSaisieifrs;

        return $this;
    }

    public function getNAnalytiqueifrs(): ?int
    {
        return $this->nAnalytiqueifrs;
    }

    public function setNAnalytiqueifrs(?int $nAnalytiqueifrs): static
    {
        $this->nAnalytiqueifrs = $nAnalytiqueifrs;

        return $this;
    }

    public function getJaNuman(): ?string
    {
        return $this->jaNuman;
    }

    public function setJaNuman(?string $jaNuman): static
    {
        $this->jaNuman = $jaNuman;

        return $this;
    }

    public function getJoNumanifrs(): ?string
    {
        return $this->joNumanifrs;
    }

    public function setJoNumanifrs(?string $joNumanifrs): static
    {
        $this->joNumanifrs = $joNumanifrs;

        return $this;
    }

    public function getJaNumanifrs(): ?string
    {
        return $this->jaNumanifrs;
    }

    public function setJaNumanifrs(?string $jaNumanifrs): static
    {
        $this->jaNumanifrs = $jaNumanifrs;

        return $this;
    }

    public function getDRappelsoldemin(): ?string
    {
        return $this->dRappelsoldemin;
    }

    public function setDRappelsoldemin(?string $dRappelsoldemin): static
    {
        $this->dRappelsoldemin = $dRappelsoldemin;

        return $this;
    }

    public function getDImportventil(): ?int
    {
        return $this->dImportventil;
    }

    public function setDImportventil(?int $dImportventil): static
    {
        $this->dImportventil = $dImportventil;

        return $this;
    }

    public function getDPenaltaux(): ?string
    {
        return $this->dPenaltaux;
    }

    public function setDPenaltaux(?string $dPenaltaux): static
    {
        $this->dPenaltaux = $dPenaltaux;

        return $this;
    }

    public function getDPenalimputation(): ?int
    {
        return $this->dPenalimputation;
    }

    public function setDPenalimputation(?int $dPenalimputation): static
    {
        $this->dPenalimputation = $dPenalimputation;

        return $this;
    }

    public function getJoNumpenal(): ?string
    {
        return $this->joNumpenal;
    }

    public function setJoNumpenal(?string $joNumpenal): static
    {
        $this->joNumpenal = $joNumpenal;

        return $this;
    }

    public function getPiNopenal(): ?int
    {
        return $this->piNopenal;
    }

    public function setPiNopenal(?int $piNopenal): static
    {
        $this->piNopenal = $piNopenal;

        return $this;
    }

    public function getJoNumimpayes(): ?string
    {
        return $this->joNumimpayes;
    }

    public function setJoNumimpayes(?string $joNumimpayes): static
    {
        $this->joNumimpayes = $joNumimpayes;

        return $this;
    }

    public function getPiNoimpayes(): ?int
    {
        return $this->piNoimpayes;
    }

    public function setPiNoimpayes(?int $piNoimpayes): static
    {
        $this->piNoimpayes = $piNoimpayes;

        return $this;
    }

    public function getDImpressfactref(): ?int
    {
        return $this->dImpressfactref;
    }

    public function setDImpressfactref(?int $dImpressfactref): static
    {
        $this->dImpressfactref = $dImpressfactref;

        return $this;
    }

    public function getDSeuiltva(): ?string
    {
        return $this->dSeuiltva;
    }

    public function setDSeuiltva(?string $dSeuiltva): static
    {
        $this->dSeuiltva = $dSeuiltva;

        return $this;
    }

    public function getDNotsaisiesommeil(): ?int
    {
        return $this->dNotsaisiesommeil;
    }

    public function setDNotsaisiesommeil(?int $dNotsaisiesommeil): static
    {
        $this->dNotsaisiesommeil = $dNotsaisiesommeil;

        return $this;
    }

    public function getDNormedgi(): ?int
    {
        return $this->dNormedgi;
    }

    public function setDNormedgi(?int $dNormedgi): static
    {
        $this->dNormedgi = $dNormedgi;

        return $this;
    }

    public function getDArchiveperiod(): ?\DateTimeInterface
    {
        return $this->dArchiveperiod;
    }

    public function setDArchiveperiod(?\DateTimeInterface $dArchiveperiod): static
    {
        $this->dArchiveperiod = $dArchiveperiod;

        return $this;
    }

    public function getDEcnocloture01(): ?int
    {
        return $this->dEcnocloture01;
    }

    public function setDEcnocloture01(?int $dEcnocloture01): static
    {
        $this->dEcnocloture01 = $dEcnocloture01;

        return $this;
    }

    public function getDEcnocloture02(): ?int
    {
        return $this->dEcnocloture02;
    }

    public function setDEcnocloture02(?int $dEcnocloture02): static
    {
        $this->dEcnocloture02 = $dEcnocloture02;

        return $this;
    }

    public function getDEcnocloture03(): ?int
    {
        return $this->dEcnocloture03;
    }

    public function setDEcnocloture03(?int $dEcnocloture03): static
    {
        $this->dEcnocloture03 = $dEcnocloture03;

        return $this;
    }

    public function getDEcnocloture04(): ?int
    {
        return $this->dEcnocloture04;
    }

    public function setDEcnocloture04(?int $dEcnocloture04): static
    {
        $this->dEcnocloture04 = $dEcnocloture04;

        return $this;
    }

    public function getDEcnocloture05(): ?int
    {
        return $this->dEcnocloture05;
    }

    public function setDEcnocloture05(?int $dEcnocloture05): static
    {
        $this->dEcnocloture05 = $dEcnocloture05;

        return $this;
    }

    public function getDClotureperiod(): ?\DateTimeInterface
    {
        return $this->dClotureperiod;
    }

    public function setDClotureperiod(?\DateTimeInterface $dClotureperiod): static
    {
        $this->dClotureperiod = $dClotureperiod;

        return $this;
    }

    public function getDMaterialpiece(): ?int
    {
        return $this->dMaterialpiece;
    }

    public function setDMaterialpiece(?int $dMaterialpiece): static
    {
        $this->dMaterialpiece = $dMaterialpiece;

        return $this;
    }

    public function getDBudgetan(): ?int
    {
        return $this->dBudgetan;
    }

    public function setDBudgetan(?int $dBudgetan): static
    {
        $this->dBudgetan = $dBudgetan;

        return $this;
    }

    public function getDCapital(): ?string
    {
        return $this->dCapital;
    }

    public function setDCapital(?string $dCapital): static
    {
        $this->dCapital = $dCapital;

        return $this;
    }

    public function getDFormejuridique(): ?string
    {
        return $this->dFormejuridique;
    }

    public function setDFormejuridique(?string $dFormejuridique): static
    {
        $this->dFormejuridique = $dFormejuridique;

        return $this;
    }

    public function getDForfaitimpayes(): ?string
    {
        return $this->dForfaitimpayes;
    }

    public function setDForfaitimpayes(?string $dForfaitimpayes): static
    {
        $this->dForfaitimpayes = $dForfaitimpayes;

        return $this;
    }

    public function getDCodeoctave(): ?string
    {
        return $this->dCodeoctave;
    }

    public function setDCodeoctave(?string $dCodeoctave): static
    {
        $this->dCodeoctave = $dCodeoctave;

        return $this;
    }

    public function getDFinexkap(): ?int
    {
        return $this->dFinexkap;
    }

    public function setDFinexkap(?int $dFinexkap): static
    {
        $this->dFinexkap = $dFinexkap;

        return $this;
    }

    public function getJoNumfinexkap(): ?string
    {
        return $this->joNumfinexkap;
    }

    public function setJoNumfinexkap(?string $joNumfinexkap): static
    {
        $this->joNumfinexkap = $joNumfinexkap;

        return $this;
    }

    public function getPiNofinexkap(): ?int
    {
        return $this->piNofinexkap;
    }

    public function setPiNofinexkap(?int $piNofinexkap): static
    {
        $this->piNofinexkap = $piNofinexkap;

        return $this;
    }

    public function getDFacebook(): ?string
    {
        return $this->dFacebook;
    }

    public function setDFacebook(?string $dFacebook): static
    {
        $this->dFacebook = $dFacebook;

        return $this;
    }

    public function getDLinkedin(): ?string
    {
        return $this->dLinkedin;
    }

    public function setDLinkedin(?string $dLinkedin): static
    {
        $this->dLinkedin = $dLinkedin;

        return $this;
    }
}
