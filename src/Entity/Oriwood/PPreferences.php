<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\PPreferencesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'P_PREFERENCES')]
#[ORM\Entity(repositoryClass: PPreferencesRepository::class)]
class PPreferences
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "PR_RefEsc", length: 19, nullable: true)]
    private ?string $prRefesc = null;

    #[ORM\Column(name: "PR_AlerteAg", type: Types::SMALLINT, nullable: true)]
    private ?int $prAlerteag = null;

    #[ORM\Column(name: "PR_DelaiPreAlert", type: Types::SMALLINT, nullable: true)]
    private ?int $prDelaiprealert = null;

    #[ORM\Column(name: "PR_Confirmation", type: Types::SMALLINT, nullable: true)]
    private ?int $prConfirmation = null;

    #[ORM\Column(name: "PR_ChoixRemise", type: Types::SMALLINT, nullable: true)]
    private ?int $prChoixremise = null;

    #[ORM\Column(name: "PR_UnitePoids", type: Types::SMALLINT, nullable: true)]
    private ?int $prUnitepoids = null;

    #[ORM\Column(name: "PR_Marge", type: Types::SMALLINT, nullable: true)]
    private ?int $prMarge = null;

    #[ORM\Column(name: "PR_CodeEAN", type: Types::SMALLINT, nullable: true)]
    private ?int $prCodeean = null;

    #[ORM\Column(name: "PR_Prefixe20", type: Types::SMALLINT, nullable: true)]
    private ?int $prPrefixe20 = null;

    #[ORM\Column(name: "PR_UnitePrix", type: Types::SMALLINT, nullable: true)]
    private ?int $prUniteprix = null;

    #[ORM\Column(name: "PR_Poids", type: Types::SMALLINT, nullable: true)]
    private ?int $prPoids = null;

    #[ORM\Column(name: "PR_ModifImport", type: Types::SMALLINT, nullable: true)]
    private ?int $prModifimport = null;

    #[ORM\Column(name: "PR_StockNeg", type: Types::SMALLINT, nullable: true)]
    private ?int $prStockneg = null;

    #[ORM\Column(name: "PR_DelaiLivr", type: Types::SMALLINT, nullable: true)]
    private ?int $prDelailivr = null;

    #[ORM\Column(name: "PR_RefTaxeNP", length: 19, nullable: true)]
    private ?string $prReftaxenp = null;

    #[ORM\Column(name: "CG_NumCli", length: 13, nullable: true)]
    private ?string $cgNumcli = null;

    #[ORM\Column(name: "CG_NumFrs", length: 13, nullable: true)]
    private ?string $cgNumfrs = null;

    #[ORM\Column(name: "CT_Num", length: 17, nullable: true)]
    private ?string $ctNum = null;

    #[ORM\Column(name: "PR_LignesAfficheur", type: Types::SMALLINT, nullable: true)]
    private ?int $prLignesafficheur = null;

    #[ORM\Column(name: "PR_ColonnesAfficheur", type: Types::SMALLINT, nullable: true)]
    private ?int $prColonnesafficheur = null;

    #[ORM\Column(name: "PR_IdentifCaissier", type: Types::SMALLINT, nullable: true)]
    private ?int $prIdentifcaissier = null;

    #[ORM\Column(name: "PR_PrixTTC", type: Types::SMALLINT, nullable: true)]
    private ?int $prPrixttc = null;

    #[ORM\Column(name: "CG_NumVirement", length: 13, nullable: true)]
    private ?string $cgNumvirement = null;

    #[ORM\Column(name: "PR_Souche", type: Types::SMALLINT, nullable: true)]
    private ?int $prSouche = null;

    #[ORM\Column(name: "PR_RegroupTicket", type: Types::SMALLINT, nullable: true)]
    private ?int $prRegroupticket = null;

    #[ORM\Column(name: "PR_RegroupRglt", type: Types::SMALLINT, nullable: true)]
    private ?int $prRegrouprglt = null;

    #[ORM\Column(name: "PR_EMail", length: 69, nullable: true)]
    private ?string $prEmail = null;

    #[ORM\Column(name: "DE_No", nullable: true)]
    private ?int $deNo = null;

    #[ORM\Column(name: "PR_ArtNonLivre", type: Types::SMALLINT, nullable: true)]
    private ?int $prArtnonlivre = null;

    #[ORM\Column(name: "PR_RecalculModele", type: Types::SMALLINT, nullable: true)]
    private ?int $prRecalculmodele = null;

    #[ORM\Column(name: "PR_MajPAFrs", type: Types::SMALLINT, nullable: true)]
    private ?int $prMajpafrs = null;

    #[ORM\Column(name: "PR_CreeFrs", type: Types::SMALLINT, nullable: true)]
    private ?int $prCreefrs = null;

    #[ORM\Column(name: "N_Reglement", type: Types::SMALLINT, nullable: true)]
    private ?int $nReglement = null;

    #[ORM\Column(name: "PR_DateFact", type: Types::SMALLINT, nullable: true)]
    private ?int $prDatefact = null;

    #[ORM\Column(name: "PR_CliCaisse", type: Types::SMALLINT, nullable: true)]
    private ?int $prClicaisse = null;

    #[ORM\Column(name: "CG_NumComptoirDebit", length: 13, nullable: true)]
    private ?string $cgNumcomptoirdebit = null;

    #[ORM\Column(name: "CG_NumComptoirCredit", length: 13, nullable: true)]
    private ?string $cgNumcomptoircredit = null;

    #[ORM\Column(name: "PR_FondCaisse", type: Types::SMALLINT, nullable: true)]
    private ?int $prFondcaisse = null;

    #[ORM\Column(name: "PR_Integration", type: Types::SMALLINT, nullable: true)]
    private ?int $prIntegration = null;

    #[ORM\Column(name: "PR_ComptaBonAchat", type: Types::SMALLINT, nullable: true)]
    private ?int $prComptabonachat = null;

    #[ORM\Column(name: "PR_MontantMaxTicket", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $prMontantmaxticket = null;

    #[ORM\Column(name: "CD_No", nullable: true)]
    private ?int $cdNo = null;

    #[ORM\Column(name: "PR_FormatFacture", type: Types::SMALLINT, nullable: true)]
    private ?int $prFormatfacture = null;

    #[ORM\Column(name: "PR_Certificat", length: 69, nullable: true)]
    private ?string $prCertificat = null;

    #[ORM\Column(name: "PR_CreeArticle", type: Types::SMALLINT, nullable: true)]
    private ?int $prCreearticle = null;

    #[ORM\Column(name: "PR_CreeTiers", type: Types::SMALLINT, nullable: true)]
    private ?int $prCreetiers = null;

    #[ORM\Column(name: "PR_CreeAffaire", type: Types::SMALLINT, nullable: true)]
    private ?int $prCreeaffaire = null;

    #[ORM\Column(name: "PR_EFacture", type: Types::SMALLINT, nullable: true)]
    private ?int $prEfacture = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getPrRefesc(): ?string
    {
        return $this->prRefesc;
    }

    public function setPrRefesc(?string $prRefesc): static
    {
        $this->prRefesc = $prRefesc;

        return $this;
    }

    public function getPrAlerteag(): ?int
    {
        return $this->prAlerteag;
    }

    public function setPrAlerteag(?int $prAlerteag): static
    {
        $this->prAlerteag = $prAlerteag;

        return $this;
    }

    public function getPrDelaiprealert(): ?int
    {
        return $this->prDelaiprealert;
    }

    public function setPrDelaiprealert(?int $prDelaiprealert): static
    {
        $this->prDelaiprealert = $prDelaiprealert;

        return $this;
    }

    public function getPrConfirmation(): ?int
    {
        return $this->prConfirmation;
    }

    public function setPrConfirmation(?int $prConfirmation): static
    {
        $this->prConfirmation = $prConfirmation;

        return $this;
    }

    public function getPrChoixremise(): ?int
    {
        return $this->prChoixremise;
    }

    public function setPrChoixremise(?int $prChoixremise): static
    {
        $this->prChoixremise = $prChoixremise;

        return $this;
    }

    public function getPrUnitepoids(): ?int
    {
        return $this->prUnitepoids;
    }

    public function setPrUnitepoids(?int $prUnitepoids): static
    {
        $this->prUnitepoids = $prUnitepoids;

        return $this;
    }

    public function getPrMarge(): ?int
    {
        return $this->prMarge;
    }

    public function setPrMarge(?int $prMarge): static
    {
        $this->prMarge = $prMarge;

        return $this;
    }

    public function getPrCodeean(): ?int
    {
        return $this->prCodeean;
    }

    public function setPrCodeean(?int $prCodeean): static
    {
        $this->prCodeean = $prCodeean;

        return $this;
    }

    public function getPrPrefixe20(): ?int
    {
        return $this->prPrefixe20;
    }

    public function setPrPrefixe20(?int $prPrefixe20): static
    {
        $this->prPrefixe20 = $prPrefixe20;

        return $this;
    }

    public function getPrUniteprix(): ?int
    {
        return $this->prUniteprix;
    }

    public function setPrUniteprix(?int $prUniteprix): static
    {
        $this->prUniteprix = $prUniteprix;

        return $this;
    }

    public function getPrPoids(): ?int
    {
        return $this->prPoids;
    }

    public function setPrPoids(?int $prPoids): static
    {
        $this->prPoids = $prPoids;

        return $this;
    }

    public function getPrModifimport(): ?int
    {
        return $this->prModifimport;
    }

    public function setPrModifimport(?int $prModifimport): static
    {
        $this->prModifimport = $prModifimport;

        return $this;
    }

    public function getPrStockneg(): ?int
    {
        return $this->prStockneg;
    }

    public function setPrStockneg(?int $prStockneg): static
    {
        $this->prStockneg = $prStockneg;

        return $this;
    }

    public function getPrDelailivr(): ?int
    {
        return $this->prDelailivr;
    }

    public function setPrDelailivr(?int $prDelailivr): static
    {
        $this->prDelailivr = $prDelailivr;

        return $this;
    }

    public function getPrReftaxenp(): ?string
    {
        return $this->prReftaxenp;
    }

    public function setPrReftaxenp(?string $prReftaxenp): static
    {
        $this->prReftaxenp = $prReftaxenp;

        return $this;
    }

    public function getCgNumcli(): ?string
    {
        return $this->cgNumcli;
    }

    public function setCgNumcli(?string $cgNumcli): static
    {
        $this->cgNumcli = $cgNumcli;

        return $this;
    }

    public function getCgNumfrs(): ?string
    {
        return $this->cgNumfrs;
    }

    public function setCgNumfrs(?string $cgNumfrs): static
    {
        $this->cgNumfrs = $cgNumfrs;

        return $this;
    }

    public function getCtNum(): ?string
    {
        return $this->ctNum;
    }

    public function setCtNum(?string $ctNum): static
    {
        $this->ctNum = $ctNum;

        return $this;
    }

    public function getPrLignesafficheur(): ?int
    {
        return $this->prLignesafficheur;
    }

    public function setPrLignesafficheur(?int $prLignesafficheur): static
    {
        $this->prLignesafficheur = $prLignesafficheur;

        return $this;
    }

    public function getPrColonnesafficheur(): ?int
    {
        return $this->prColonnesafficheur;
    }

    public function setPrColonnesafficheur(?int $prColonnesafficheur): static
    {
        $this->prColonnesafficheur = $prColonnesafficheur;

        return $this;
    }

    public function getPrIdentifcaissier(): ?int
    {
        return $this->prIdentifcaissier;
    }

    public function setPrIdentifcaissier(?int $prIdentifcaissier): static
    {
        $this->prIdentifcaissier = $prIdentifcaissier;

        return $this;
    }

    public function getPrPrixttc(): ?int
    {
        return $this->prPrixttc;
    }

    public function setPrPrixttc(?int $prPrixttc): static
    {
        $this->prPrixttc = $prPrixttc;

        return $this;
    }

    public function getCgNumvirement(): ?string
    {
        return $this->cgNumvirement;
    }

    public function setCgNumvirement(?string $cgNumvirement): static
    {
        $this->cgNumvirement = $cgNumvirement;

        return $this;
    }

    public function getPrSouche(): ?int
    {
        return $this->prSouche;
    }

    public function setPrSouche(?int $prSouche): static
    {
        $this->prSouche = $prSouche;

        return $this;
    }

    public function getPrRegroupticket(): ?int
    {
        return $this->prRegroupticket;
    }

    public function setPrRegroupticket(?int $prRegroupticket): static
    {
        $this->prRegroupticket = $prRegroupticket;

        return $this;
    }

    public function getPrRegrouprglt(): ?int
    {
        return $this->prRegrouprglt;
    }

    public function setPrRegrouprglt(?int $prRegrouprglt): static
    {
        $this->prRegrouprglt = $prRegrouprglt;

        return $this;
    }

    public function getPrEmail(): ?string
    {
        return $this->prEmail;
    }

    public function setPrEmail(?string $prEmail): static
    {
        $this->prEmail = $prEmail;

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

    public function getPrArtnonlivre(): ?int
    {
        return $this->prArtnonlivre;
    }

    public function setPrArtnonlivre(?int $prArtnonlivre): static
    {
        $this->prArtnonlivre = $prArtnonlivre;

        return $this;
    }

    public function getPrRecalculmodele(): ?int
    {
        return $this->prRecalculmodele;
    }

    public function setPrRecalculmodele(?int $prRecalculmodele): static
    {
        $this->prRecalculmodele = $prRecalculmodele;

        return $this;
    }

    public function getPrMajpafrs(): ?int
    {
        return $this->prMajpafrs;
    }

    public function setPrMajpafrs(?int $prMajpafrs): static
    {
        $this->prMajpafrs = $prMajpafrs;

        return $this;
    }

    public function getPrCreefrs(): ?int
    {
        return $this->prCreefrs;
    }

    public function setPrCreefrs(?int $prCreefrs): static
    {
        $this->prCreefrs = $prCreefrs;

        return $this;
    }

    public function getNReglement(): ?int
    {
        return $this->nReglement;
    }

    public function setNReglement(?int $nReglement): static
    {
        $this->nReglement = $nReglement;

        return $this;
    }

    public function getPrDatefact(): ?int
    {
        return $this->prDatefact;
    }

    public function setPrDatefact(?int $prDatefact): static
    {
        $this->prDatefact = $prDatefact;

        return $this;
    }

    public function getPrClicaisse(): ?int
    {
        return $this->prClicaisse;
    }

    public function setPrClicaisse(?int $prClicaisse): static
    {
        $this->prClicaisse = $prClicaisse;

        return $this;
    }

    public function getCgNumcomptoirdebit(): ?string
    {
        return $this->cgNumcomptoirdebit;
    }

    public function setCgNumcomptoirdebit(?string $cgNumcomptoirdebit): static
    {
        $this->cgNumcomptoirdebit = $cgNumcomptoirdebit;

        return $this;
    }

    public function getCgNumcomptoircredit(): ?string
    {
        return $this->cgNumcomptoircredit;
    }

    public function setCgNumcomptoircredit(?string $cgNumcomptoircredit): static
    {
        $this->cgNumcomptoircredit = $cgNumcomptoircredit;

        return $this;
    }

    public function getPrFondcaisse(): ?int
    {
        return $this->prFondcaisse;
    }

    public function setPrFondcaisse(?int $prFondcaisse): static
    {
        $this->prFondcaisse = $prFondcaisse;

        return $this;
    }

    public function getPrIntegration(): ?int
    {
        return $this->prIntegration;
    }

    public function setPrIntegration(?int $prIntegration): static
    {
        $this->prIntegration = $prIntegration;

        return $this;
    }

    public function getPrComptabonachat(): ?int
    {
        return $this->prComptabonachat;
    }

    public function setPrComptabonachat(?int $prComptabonachat): static
    {
        $this->prComptabonachat = $prComptabonachat;

        return $this;
    }

    public function getPrMontantmaxticket(): ?string
    {
        return $this->prMontantmaxticket;
    }

    public function setPrMontantmaxticket(?string $prMontantmaxticket): static
    {
        $this->prMontantmaxticket = $prMontantmaxticket;

        return $this;
    }

    public function getCdNo(): ?int
    {
        return $this->cdNo;
    }

    public function setCdNo(?int $cdNo): static
    {
        $this->cdNo = $cdNo;

        return $this;
    }

    public function getPrFormatfacture(): ?int
    {
        return $this->prFormatfacture;
    }

    public function setPrFormatfacture(?int $prFormatfacture): static
    {
        $this->prFormatfacture = $prFormatfacture;

        return $this;
    }

    public function getPrCertificat(): ?string
    {
        return $this->prCertificat;
    }

    public function setPrCertificat(?string $prCertificat): static
    {
        $this->prCertificat = $prCertificat;

        return $this;
    }

    public function getPrCreearticle(): ?int
    {
        return $this->prCreearticle;
    }

    public function setPrCreearticle(?int $prCreearticle): static
    {
        $this->prCreearticle = $prCreearticle;

        return $this;
    }

    public function getPrCreetiers(): ?int
    {
        return $this->prCreetiers;
    }

    public function setPrCreetiers(?int $prCreetiers): static
    {
        $this->prCreetiers = $prCreetiers;

        return $this;
    }

    public function getPrCreeaffaire(): ?int
    {
        return $this->prCreeaffaire;
    }

    public function setPrCreeaffaire(?int $prCreeaffaire): static
    {
        $this->prCreeaffaire = $prCreeaffaire;

        return $this;
    }

    public function getPrEfacture(): ?int
    {
        return $this->prEfacture;
    }

    public function setPrEfacture(?int $prEfacture): static
    {
        $this->prEfacture = $prEfacture;

        return $this;
    }
}
