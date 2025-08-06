<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\FBanqueRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_BANQUE')]
#[ORM\UniqueConstraint(name: 'IBQ_NO', columns: ['BQ_No'])]
#[ORM\Index(name: 'IBQ_INT', columns: ['cbBQ_Intitule'])]
#[ORM\UniqueConstraint(name: 'IBQ_ABREGE', columns: ['cbBQ_Abrege'])]
#[ORM\Index(name: 'IBQ_CGNUMFRAISOPCVM', columns: ['cbCG_NumFraisOPCVM'])]
#[ORM\Index(name: 'IBQ_CGNUMTVAOPCVM', columns: ['cbCG_NumTVAOPCVM'])]
#[ORM\Index(name: 'IBQ_CGNUMMOINSVALUEOPCVM', columns: ['cbCG_NumMoinsValueOPCVM'])]
#[ORM\Index(name: 'IBQ_CGNUMPLUSVALUEOPCVM', columns: ['cbCG_NumPlusValueOPCVM'])]
#[ORM\Index(name: 'FKIA_F_BANQUE_CG_NumTVAOPCVM', columns: ['CG_NumTVAOPCVM'])]
#[ORM\Index(name: 'FKIA_F_BANQUE_CG_NumFraisOPCVM', columns: ['CG_NumFraisOPCVM'])]
#[ORM\Index(name: 'FKIA_F_BANQUE_CG_NumMoinsValueOPCVM', columns: ['CG_NumMoinsValueOPCVM'])]
#[ORM\Index(name: 'FKIA_F_BANQUE_CG_NumPlusValueOPCVM', columns: ['CG_NumPlusValueOPCVM'])]
#[ORM\Entity(repositoryClass: FBanqueRepository::class)]
class FBanque
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "BQ_No")]
    private ?int $bqNo = null;

    #[ORM\Column(name: "BQ_Intitule", length: 35, nullable: true)]
    private ?string $bqIntitule = null;

    #[ORM\Column(name: "cbBQ_Intitule", type: Types::BINARY, nullable: true)]
    private $cbbqIntitule = null;

    #[ORM\Column(name: "BQ_Adresse", length: 35, nullable: true)]
    private ?string $bqAdresse = null;

    #[ORM\Column(name: "BQ_Complement", length: 35, nullable: true)]
    private ?string $bqComplement = null;

    #[ORM\Column(name: "BQ_CodePostal", length: 9, nullable: true)]
    private ?string $bqCodepostal = null;

    #[ORM\Column(name: "BQ_Ville", length: 35, nullable: true)]
    private ?string $bqVille = null;

    #[ORM\Column(name: "BQ_CodeRegion", length: 25, nullable: true)]
    private ?string $bqCoderegion = null;

    #[ORM\Column(name: "BQ_Pays", length: 35, nullable: true)]
    private ?string $bqPays = null;

    #[ORM\Column(name: "BQ_Contact", length: 35, nullable: true)]
    private ?string $bqContact = null;

    #[ORM\Column(name: "BQ_Abrege", length: 17, nullable: true)]
    private ?string $bqAbrege = null;

    #[ORM\Column(name: "cbBQ_Abrege", type: Types::BINARY, nullable: true)]
    private $cbbqAbrege = null;

    #[ORM\Column(name: "BQ_ModeRemise", type: Types::SMALLINT, nullable: true)]
    private ?int $bqModeremise = null;

    #[ORM\Column(name: "BQ_BordRemise", type: Types::SMALLINT, nullable: true)]
    private ?int $bqBordremise = null;

    #[ORM\Column(name: "BQ_DaillyDateConv", type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $bqDaillydateconv = null;

    #[ORM\Column(name: "BQ_DaillyNatJur", length: 35, nullable: true)]
    private ?string $bqDaillynatjur = null;

    #[ORM\Column(name: "BQ_DaillyAdresse", length: 35, nullable: true)]
    private ?string $bqDaillyadresse = null;

    #[ORM\Column(name: "BQ_DaillyComplement", length: 35, nullable: true)]
    private ?string $bqDaillycomplement = null;

    #[ORM\Column(name: "BQ_DaillyCodePostal", length: 9, nullable: true)]
    private ?string $bqDaillycodepostal = null;

    #[ORM\Column(name: "BQ_DaillyVille", length: 35, nullable: true)]
    private ?string $bqDaillyville = null;

    #[ORM\Column(name: "BQ_DaillyRCS", length: 35, nullable: true)]
    private ?string $bqDaillyrcs = null;

    #[ORM\Column(name: "BQ_BIC", length: 13, nullable: true)]
    private ?string $bqBic = null;

    #[ORM\Column(name: "BQ_CodeIdent", length: 17, nullable: true)]
    private ?string $bqCodeident = null;

    #[ORM\Column(name: "BQ_Achat", type: Types::SMALLINT, nullable: true)]
    private ?int $bqAchat = null;

    #[ORM\Column(name: "BQ_Remise", type: Types::SMALLINT, nullable: true)]
    private ?int $bqRemise = null;

    #[ORM\Column(name: "BQ_DOAdresse", type: Types::SMALLINT, nullable: true)]
    private ?int $bqDoadresse = null;

    #[ORM\Column(name: "BQ_DOVille", type: Types::SMALLINT, nullable: true)]
    private ?int $bqDoville = null;

    #[ORM\Column(name: "BQ_DOCodePostal", type: Types::SMALLINT, nullable: true)]
    private ?int $bqDocodepostal = null;

    #[ORM\Column(name: "BQ_DOSiret", type: Types::SMALLINT, nullable: true)]
    private ?int $bqDosiret = null;

    #[ORM\Column(name: "BQ_DOCodeIdent", type: Types::SMALLINT, nullable: true)]
    private ?int $bqDocodeident = null;

    #[ORM\Column(name: "BQ_DOAgenceVille", type: Types::SMALLINT, nullable: true)]
    private ?int $bqDoagenceville = null;

    #[ORM\Column(name: "BQ_DOAgenceCP", type: Types::SMALLINT, nullable: true)]
    private ?int $bqDoagencecp = null;

    #[ORM\Column(name: "BQ_DOTypeIdent", type: Types::SMALLINT, nullable: true)]
    private ?int $bqDotypeident = null;

    #[ORM\Column(name: "BQ_DOCle", type: Types::SMALLINT, nullable: true)]
    private ?int $bqDocle = null;

    #[ORM\Column(name: "BQ_VTAdresse", type: Types::SMALLINT, nullable: true)]
    private ?int $bqVtadresse = null;

    #[ORM\Column(name: "BQ_VTVille", type: Types::SMALLINT, nullable: true)]
    private ?int $bqVtville = null;

    #[ORM\Column(name: "BQ_VTCodePostal", type: Types::SMALLINT, nullable: true)]
    private ?int $bqVtcodepostal = null;

    #[ORM\Column(name: "BQ_VTSiret", type: Types::SMALLINT, nullable: true)]
    private ?int $bqVtsiret = null;

    #[ORM\Column(name: "BQ_VTPays", type: Types::SMALLINT, nullable: true)]
    private ?int $bqVtpays = null;

    #[ORM\Column(name: "BQ_VTContrat", type: Types::SMALLINT, nullable: true)]
    private ?int $bqVtcontrat = null;

    #[ORM\Column(name: "BQ_VTDateAchat", type: Types::SMALLINT, nullable: true)]
    private ?int $bqVtdateachat = null;

    #[ORM\Column(name: "BQ_VTTauxChange", type: Types::SMALLINT, nullable: true)]
    private ?int $bqVttauxchange = null;

    #[ORM\Column(name: "BQ_VTInstruction", type: Types::SMALLINT, nullable: true)]
    private ?int $bqVtinstruction = null;

    #[ORM\Column(name: "BQ_BBIntitule", type: Types::SMALLINT, nullable: true)]
    private ?int $bqBbintitule = null;

    #[ORM\Column(name: "BQ_BBBIC", type: Types::SMALLINT, nullable: true)]
    private ?int $bqBbbic = null;

    #[ORM\Column(name: "BQ_BBAdresse", type: Types::SMALLINT, nullable: true)]
    private ?int $bqBbadresse = null;

    #[ORM\Column(name: "BQ_BBVille", type: Types::SMALLINT, nullable: true)]
    private ?int $bqBbville = null;

    #[ORM\Column(name: "BQ_BBCodePostal", type: Types::SMALLINT, nullable: true)]
    private ?int $bqBbcodepostal = null;

    #[ORM\Column(name: "BQ_BBCompte", type: Types::SMALLINT, nullable: true)]
    private ?int $bqBbcompte = null;

    #[ORM\Column(name: "BQ_BIIntitule", type: Types::SMALLINT, nullable: true)]
    private ?int $bqBiintitule = null;

    #[ORM\Column(name: "BQ_BIBIC", type: Types::SMALLINT, nullable: true)]
    private ?int $bqBibic = null;

    #[ORM\Column(name: "BQ_BIAdresse", type: Types::SMALLINT, nullable: true)]
    private ?int $bqBiadresse = null;

    #[ORM\Column(name: "BQ_BIVille", type: Types::SMALLINT, nullable: true)]
    private ?int $bqBiville = null;

    #[ORM\Column(name: "BQ_BICodePostal", type: Types::SMALLINT, nullable: true)]
    private ?int $bqBicodepostal = null;

    #[ORM\Column(name: "BQ_BIPays", type: Types::SMALLINT, nullable: true)]
    private ?int $bqBipays = null;

    #[ORM\Column(name: "BQ_Telephone", length: 21, nullable: true)]
    private ?string $bqTelephone = null;

    #[ORM\Column(name: "BQ_Telecopie", length: 21, nullable: true)]
    private ?string $bqTelecopie = null;

    #[ORM\Column(name: "BQ_EMail", length: 69, nullable: true)]
    private ?string $bqEmail = null;

    #[ORM\Column(name: "BQ_Site", length: 69, nullable: true)]
    private ?string $bqSite = null;

    #[ORM\Column(name: "BQ_CondDecouvertCD_TypePlafond", type: Types::SMALLINT, nullable: true)]
    private ?int $bqConddecouvertcdTypeplafond = null;

    #[ORM\Column(name: "BQ_CondDecouvertCD_BaseCalcul", type: Types::SMALLINT, nullable: true)]
    private ?int $bqConddecouvertcdBasecalcul = null;

    #[ORM\Column(name: "BQ_CondDecouvertTR_No", nullable: true)]
    private ?int $bqConddecouverttrNo = null;

    #[ORM\Column(name: "cbBQ_CondDecouvertTR_No", nullable: true)]
    private ?int $cbbqConddecouverttrNo = null;

    #[ORM\Column(name: "BQ_CondDecouvertCD_ValeurTaux", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bqConddecouvertcdValeurtaux = null;

    #[ORM\Column(name: "BQ_CondDecouvertCD_Plafond01CD_ValeurPlafond", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bqConddecouvertcdPlafond01cdValeurplafond = null;

    #[ORM\Column(name: "BQ_CondDecouvertCD_Plafond01CD_Marge", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bqConddecouvertcdPlafond01cdMarge = null;

    #[ORM\Column(name: "BQ_CondDecouvertCD_Plafond02CD_ValeurPlafond", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bqConddecouvertcdPlafond02cdValeurplafond = null;

    #[ORM\Column(name: "BQ_CondDecouvertCD_Plafond02CD_Marge", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bqConddecouvertcdPlafond02cdMarge = null;

    #[ORM\Column(name: "BQ_CondInteretCI_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $bqCondinteretciType = null;

    #[ORM\Column(name: "BQ_CondInteretTR_No", nullable: true)]
    private ?int $bqCondinterettrNo = null;

    #[ORM\Column(name: "cbBQ_CondInteretTR_No", nullable: true)]
    private ?int $cbbqCondinterettrNo = null;

    #[ORM\Column(name: "BQ_CondInteretCI_Taux", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bqCondinteretciTaux = null;

    #[ORM\Column(name: "BQ_CondInteretCI_Assiette", type: Types::SMALLINT, nullable: true)]
    private ?int $bqCondinteretciAssiette = null;

    #[ORM\Column(name: "BQ_CondInteretCI_Limite", type: Types::SMALLINT, nullable: true)]
    private ?int $bqCondinteretciLimite = null;

    #[ORM\Column(name: "BQ_CondInteretCI_BaseCalcul", type: Types::SMALLINT, nullable: true)]
    private ?int $bqCondinteretciBasecalcul = null;

    #[ORM\Column(name: "BQ_CondCommissionCC_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $bqCondcommissionccType = null;

    #[ORM\Column(name: "BQ_CondCommissionCC_Limite", nullable: true)]
    private ?int $bqCondcommissionccLimite = null;

    #[ORM\Column(name: "BQ_CondCommissionCC_Taux", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bqCondcommissionccTaux = null;

    #[ORM\Column(name: "BQ_CondFraisCF_Commission", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bqCondfraiscfCommission = null;

    #[ORM\Column(name: "BQ_CondFraisCF_Compte", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bqCondfraiscfCompte = null;

    #[ORM\Column(name: "BQ_CondFraisCF_Periodicite", type: Types::SMALLINT, nullable: true)]
    private ?int $bqCondfraiscfPeriodicite = null;

    #[ORM\Column(name: "BQ_CondFraisCF_SeuilExoneration", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bqCondfraiscfSeuilexoneration = null;

    #[ORM\Column(name: "BQ_CondFraisCF_TypeExoneration", type: Types::SMALLINT, nullable: true)]
    private ?int $bqCondfraiscfTypeexoneration = null;

    #[ORM\Column(name: "BQ_CondFraisCF_SeuilCrediteur", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bqCondfraiscfSeuilcrediteur = null;

    #[ORM\Column(name: "BQ_CondFraisCF_ModePerception", type: Types::SMALLINT, nullable: true)]
    private ?int $bqCondfraiscfModeperception = null;

    #[ORM\Column(name: "BQ_CondFraisCF_MontantVariableHT", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bqCondfraiscfMontantvariableht = null;

    #[ORM\Column(name: "BQ_CondFraisCF_MinimumPercu", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bqCondfraiscfMinimumpercu = null;

    #[ORM\Column(name: "BQ_CondFraisCF_MaximumPercu", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bqCondfraiscfMaximumpercu = null;

    #[ORM\Column(name: "BQ_CondFraisCF_AssujetTVACommission", type: Types::SMALLINT, nullable: true)]
    private ?int $bqCondfraiscfAssujettvacommission = null;

    #[ORM\Column(name: "BQ_CondFraisCF_AssujetTVAFrais", type: Types::SMALLINT, nullable: true)]
    private ?int $bqCondfraiscfAssujettvafrais = null;

    #[ORM\Column(name: "BQ_TransEMailEnvoi", length: 69, nullable: true)]
    private ?string $bqTransemailenvoi = null;

    #[ORM\Column(name: "BQ_TransSite", length: 69, nullable: true)]
    private ?string $bqTranssite = null;

    #[ORM\Column(name: "BQ_FormatVir", type: Types::SMALLINT, nullable: true)]
    private ?int $bqFormatvir = null;

    #[ORM\Column(name: "BQ_FormatVirInter", type: Types::SMALLINT, nullable: true)]
    private ?int $bqFormatvirinter = null;

    #[ORM\Column(name: "BQ_DelaiHeure01DH_JourTeletrans", type: Types::SMALLINT, nullable: true)]
    private ?int $bqDelaiheure01dhJourteletrans = null;

    #[ORM\Column(name: "BQ_DelaiHeure01DH_JourFichier", type: Types::SMALLINT, nullable: true)]
    private ?int $bqDelaiheure01dhJourfichier = null;

    #[ORM\Column(name: "BQ_DelaiHeure01DH_HeureTeletrans", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $bqDelaiheure01dhHeureteletrans = null;

    #[ORM\Column(name: "BQ_DelaiHeure01DH_HeureFichier", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $bqDelaiheure01dhHeurefichier = null;

    #[ORM\Column(name: "BQ_DelaiHeure02DH_JourTeletrans", type: Types::SMALLINT, nullable: true)]
    private ?int $bqDelaiheure02dhJourteletrans = null;

    #[ORM\Column(name: "BQ_DelaiHeure02DH_JourFichier", type: Types::SMALLINT, nullable: true)]
    private ?int $bqDelaiheure02dhJourfichier = null;

    #[ORM\Column(name: "BQ_DelaiHeure02DH_HeureTeletrans", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $bqDelaiheure02dhHeureteletrans = null;

    #[ORM\Column(name: "BQ_DelaiHeure02DH_HeureFichier", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $bqDelaiheure02dhHeurefichier = null;

    #[ORM\Column(name: "BQ_DelaiHeure03DH_JourTeletrans", type: Types::SMALLINT, nullable: true)]
    private ?int $bqDelaiheure03dhJourteletrans = null;

    #[ORM\Column(name: "BQ_DelaiHeure03DH_JourFichier", type: Types::SMALLINT, nullable: true)]
    private ?int $bqDelaiheure03dhJourfichier = null;

    #[ORM\Column(name: "BQ_DelaiHeure03DH_HeureTeletrans", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $bqDelaiheure03dhHeureteletrans = null;

    #[ORM\Column(name: "BQ_DelaiHeure03DH_HeureFichier", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $bqDelaiheure03dhHeurefichier = null;

    #[ORM\Column(name: "BQ_DelaiHeure04DH_JourTeletrans", type: Types::SMALLINT, nullable: true)]
    private ?int $bqDelaiheure04dhJourteletrans = null;

    #[ORM\Column(name: "BQ_DelaiHeure04DH_JourFichier", type: Types::SMALLINT, nullable: true)]
    private ?int $bqDelaiheure04dhJourfichier = null;

    #[ORM\Column(name: "BQ_DelaiHeure04DH_HeureTeletrans", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $bqDelaiheure04dhHeureteletrans = null;

    #[ORM\Column(name: "BQ_DelaiHeure04DH_HeureFichier", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $bqDelaiheure04dhHeurefichier = null;

    #[ORM\Column(name: "BQ_DelaiHeure05DH_JourTeletrans", type: Types::SMALLINT, nullable: true)]
    private ?int $bqDelaiheure05dhJourteletrans = null;

    #[ORM\Column(name: "BQ_DelaiHeure05DH_JourFichier", type: Types::SMALLINT, nullable: true)]
    private ?int $bqDelaiheure05dhJourfichier = null;

    #[ORM\Column(name: "BQ_DelaiHeure05DH_HeureTeletrans", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $bqDelaiheure05dhHeureteletrans = null;

    #[ORM\Column(name: "BQ_DelaiHeure05DH_HeureFichier", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $bqDelaiheure05dhHeurefichier = null;

    #[ORM\Column(name: "BQ_DelaiHeure06DH_JourTeletrans", type: Types::SMALLINT, nullable: true)]
    private ?int $bqDelaiheure06dhJourteletrans = null;

    #[ORM\Column(name: "BQ_DelaiHeure06DH_JourFichier", type: Types::SMALLINT, nullable: true)]
    private ?int $bqDelaiheure06dhJourfichier = null;

    #[ORM\Column(name: "BQ_DelaiHeure06DH_HeureTeletrans", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $bqDelaiheure06dhHeureteletrans = null;

    #[ORM\Column(name: "BQ_DelaiHeure06DH_HeureFichier", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $bqDelaiheure06dhHeurefichier = null;

    #[ORM\Column(name: "BQ_DelaiHeure07DH_JourTeletrans", type: Types::SMALLINT, nullable: true)]
    private ?int $bqDelaiheure07dhJourteletrans = null;

    #[ORM\Column(name: "BQ_DelaiHeure07DH_JourFichier", type: Types::SMALLINT, nullable: true)]
    private ?int $bqDelaiheure07dhJourfichier = null;

    #[ORM\Column(name: "BQ_DelaiHeure07DH_HeureTeletrans", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $bqDelaiheure07dhHeureteletrans = null;

    #[ORM\Column(name: "BQ_DelaiHeure07DH_HeureFichier", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $bqDelaiheure07dhHeurefichier = null;

    #[ORM\Column(name: "BQ_DelaiHeure08DH_JourTeletrans", type: Types::SMALLINT, nullable: true)]
    private ?int $bqDelaiheure08dhJourteletrans = null;

    #[ORM\Column(name: "BQ_DelaiHeure08DH_JourFichier", type: Types::SMALLINT, nullable: true)]
    private ?int $bqDelaiheure08dhJourfichier = null;

    #[ORM\Column(name: "BQ_DelaiHeure08DH_HeureTeletrans", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $bqDelaiheure08dhHeureteletrans = null;

    #[ORM\Column(name: "BQ_DelaiHeure08DH_HeureFichier", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $bqDelaiheure08dhHeurefichier = null;

    #[ORM\Column(name: "BQ_DelaiHeure09DH_JourTeletrans", type: Types::SMALLINT, nullable: true)]
    private ?int $bqDelaiheure09dhJourteletrans = null;

    #[ORM\Column(name: "BQ_DelaiHeure09DH_JourFichier", type: Types::SMALLINT, nullable: true)]
    private ?int $bqDelaiheure09dhJourfichier = null;

    #[ORM\Column(name: "BQ_DelaiHeure09DH_HeureTeletrans", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $bqDelaiheure09dhHeureteletrans = null;

    #[ORM\Column(name: "BQ_DelaiHeure09DH_HeureFichier", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $bqDelaiheure09dhHeurefichier = null;

    #[ORM\Column(name: "BQ_DelaiHeure10DH_JourTeletrans", type: Types::SMALLINT, nullable: true)]
    private ?int $bqDelaiheure10dhJourteletrans = null;

    #[ORM\Column(name: "BQ_DelaiHeure10DH_JourFichier", type: Types::SMALLINT, nullable: true)]
    private ?int $bqDelaiheure10dhJourfichier = null;

    #[ORM\Column(name: "BQ_DelaiHeure10DH_HeureTeletrans", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $bqDelaiheure10dhHeureteletrans = null;

    #[ORM\Column(name: "BQ_DelaiHeure10DH_HeureFichier", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $bqDelaiheure10dhHeurefichier = null;

    #[ORM\Column(name: "BQ_DelaiHeure11DH_JourTeletrans", type: Types::SMALLINT, nullable: true)]
    private ?int $bqDelaiheure11dhJourteletrans = null;

    #[ORM\Column(name: "BQ_DelaiHeure11DH_JourFichier", type: Types::SMALLINT, nullable: true)]
    private ?int $bqDelaiheure11dhJourfichier = null;

    #[ORM\Column(name: "BQ_DelaiHeure11DH_HeureTeletrans", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $bqDelaiheure11dhHeureteletrans = null;

    #[ORM\Column(name: "BQ_DelaiHeure11DH_HeureFichier", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $bqDelaiheure11dhHeurefichier = null;

    #[ORM\Column(name: "BQ_DelaiHeure12DH_JourTeletrans", type: Types::SMALLINT, nullable: true)]
    private ?int $bqDelaiheure12dhJourteletrans = null;

    #[ORM\Column(name: "BQ_DelaiHeure12DH_JourFichier", type: Types::SMALLINT, nullable: true)]
    private ?int $bqDelaiheure12dhJourfichier = null;

    #[ORM\Column(name: "BQ_DelaiHeure12DH_HeureTeletrans", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $bqDelaiheure12dhHeureteletrans = null;

    #[ORM\Column(name: "BQ_DelaiHeure12DH_HeureFichier", length: 9, nullable: true, options: ["fixed" => true])]
    private ?string $bqDelaiheure12dhHeurefichier = null;

    #[ORM\Column(name: "BQ_VTCodeService", length: 5, nullable: true)]
    private ?string $bqVtcodeservice = null;

    #[ORM\Column(name: "BQ_FormatPrel", type: Types::SMALLINT, nullable: true)]
    private ?int $bqFormatprel = null;

    #[ORM\Column(name: "BQ_FormatPrelVersion", type: Types::SMALLINT, nullable: true)]
    private ?int $bqFormatprelversion = null;

    #[ORM\Column(name: "BQ_FormatVirVersion", type: Types::SMALLINT, nullable: true)]
    private ?int $bqFormatvirversion = null;

    #[ORM\Column(name: "CG_NumFraisOPCVM", length: 13, nullable: true)]
    private ?string $cgNumfraisopcvm = null;

    #[ORM\Column(name: "cbCG_NumFraisOPCVM", type: Types::BINARY, nullable: true)]
    private $cbcgNumfraisopcvm = null;

    #[ORM\Column(name: "CG_NumTVAOPCVM", length: 13, nullable: true)]
    private ?string $cgNumtvaopcvm = null;

    #[ORM\Column(name: "cbCG_NumTVAOPCVM", type: Types::BINARY, nullable: true)]
    private $cbcgNumtvaopcvm = null;

    #[ORM\Column(name: "CG_NumMoinsValueOPCVM", length: 13, nullable: true)]
    private ?string $cgNummoinsvalueopcvm = null;

    #[ORM\Column(name: "cbCG_NumMoinsValueOPCVM", type: Types::BINARY, nullable: true)]
    private $cbcgNummoinsvalueopcvm = null;

    #[ORM\Column(name: "CG_NumPlusValueOPCVM", length: 13, nullable: true)]
    private ?string $cgNumplusvalueopcvm = null;

    #[ORM\Column(name: "cbCG_NumPlusValueOPCVM", type: Types::BINARY, nullable: true)]
    private $cbcgNumplusvalueopcvm = null;

    #[ORM\Column(name: "BQ_VTImputation", type: Types::SMALLINT, nullable: true)]
    private ?int $bqVtimputation = null;

    #[ORM\Column(name: "BQ_ModeleParam", length: 259, nullable: true)]
    private ?string $bqModeleparam = null;

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

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getBqNo(): ?int
    {
        return $this->bqNo;
    }

    public function setBqNo(int $bqNo): static
    {
        $this->bqNo = $bqNo;

        return $this;
    }

    public function getBqIntitule(): ?string
    {
        return $this->bqIntitule;
    }

    public function setBqIntitule(?string $bqIntitule): static
    {
        $this->bqIntitule = $bqIntitule;

        return $this;
    }

    public function getCbbqIntitule()
    {
        return $this->cbbqIntitule;
    }

    public function setCbbqIntitule($cbbqIntitule): static
    {
        $this->cbbqIntitule = $cbbqIntitule;

        return $this;
    }

    public function getBqAdresse(): ?string
    {
        return $this->bqAdresse;
    }

    public function setBqAdresse(?string $bqAdresse): static
    {
        $this->bqAdresse = $bqAdresse;

        return $this;
    }

    public function getBqComplement(): ?string
    {
        return $this->bqComplement;
    }

    public function setBqComplement(?string $bqComplement): static
    {
        $this->bqComplement = $bqComplement;

        return $this;
    }

    public function getBqCodepostal(): ?string
    {
        return $this->bqCodepostal;
    }

    public function setBqCodepostal(?string $bqCodepostal): static
    {
        $this->bqCodepostal = $bqCodepostal;

        return $this;
    }

    public function getBqVille(): ?string
    {
        return $this->bqVille;
    }

    public function setBqVille(?string $bqVille): static
    {
        $this->bqVille = $bqVille;

        return $this;
    }

    public function getBqCoderegion(): ?string
    {
        return $this->bqCoderegion;
    }

    public function setBqCoderegion(?string $bqCoderegion): static
    {
        $this->bqCoderegion = $bqCoderegion;

        return $this;
    }

    public function getBqPays(): ?string
    {
        return $this->bqPays;
    }

    public function setBqPays(?string $bqPays): static
    {
        $this->bqPays = $bqPays;

        return $this;
    }

    public function getBqContact(): ?string
    {
        return $this->bqContact;
    }

    public function setBqContact(?string $bqContact): static
    {
        $this->bqContact = $bqContact;

        return $this;
    }

    public function getBqAbrege(): ?string
    {
        return $this->bqAbrege;
    }

    public function setBqAbrege(?string $bqAbrege): static
    {
        $this->bqAbrege = $bqAbrege;

        return $this;
    }

    public function getCbbqAbrege()
    {
        return $this->cbbqAbrege;
    }

    public function setCbbqAbrege($cbbqAbrege): static
    {
        $this->cbbqAbrege = $cbbqAbrege;

        return $this;
    }

    public function getBqModeremise(): ?int
    {
        return $this->bqModeremise;
    }

    public function setBqModeremise(?int $bqModeremise): static
    {
        $this->bqModeremise = $bqModeremise;

        return $this;
    }

    public function getBqBordremise(): ?int
    {
        return $this->bqBordremise;
    }

    public function setBqBordremise(?int $bqBordremise): static
    {
        $this->bqBordremise = $bqBordremise;

        return $this;
    }

    public function getBqDaillydateconv(): ?\DateTimeInterface
    {
        return $this->bqDaillydateconv;
    }

    public function setBqDaillydateconv(?\DateTimeInterface $bqDaillydateconv): static
    {
        $this->bqDaillydateconv = $bqDaillydateconv;

        return $this;
    }

    public function getBqDaillynatjur(): ?string
    {
        return $this->bqDaillynatjur;
    }

    public function setBqDaillynatjur(?string $bqDaillynatjur): static
    {
        $this->bqDaillynatjur = $bqDaillynatjur;

        return $this;
    }

    public function getBqDaillyadresse(): ?string
    {
        return $this->bqDaillyadresse;
    }

    public function setBqDaillyadresse(?string $bqDaillyadresse): static
    {
        $this->bqDaillyadresse = $bqDaillyadresse;

        return $this;
    }

    public function getBqDaillycomplement(): ?string
    {
        return $this->bqDaillycomplement;
    }

    public function setBqDaillycomplement(?string $bqDaillycomplement): static
    {
        $this->bqDaillycomplement = $bqDaillycomplement;

        return $this;
    }

    public function getBqDaillycodepostal(): ?string
    {
        return $this->bqDaillycodepostal;
    }

    public function setBqDaillycodepostal(?string $bqDaillycodepostal): static
    {
        $this->bqDaillycodepostal = $bqDaillycodepostal;

        return $this;
    }

    public function getBqDaillyville(): ?string
    {
        return $this->bqDaillyville;
    }

    public function setBqDaillyville(?string $bqDaillyville): static
    {
        $this->bqDaillyville = $bqDaillyville;

        return $this;
    }

    public function getBqDaillyrcs(): ?string
    {
        return $this->bqDaillyrcs;
    }

    public function setBqDaillyrcs(?string $bqDaillyrcs): static
    {
        $this->bqDaillyrcs = $bqDaillyrcs;

        return $this;
    }

    public function getBqBic(): ?string
    {
        return $this->bqBic;
    }

    public function setBqBic(?string $bqBic): static
    {
        $this->bqBic = $bqBic;

        return $this;
    }

    public function getBqCodeident(): ?string
    {
        return $this->bqCodeident;
    }

    public function setBqCodeident(?string $bqCodeident): static
    {
        $this->bqCodeident = $bqCodeident;

        return $this;
    }

    public function getBqAchat(): ?int
    {
        return $this->bqAchat;
    }

    public function setBqAchat(?int $bqAchat): static
    {
        $this->bqAchat = $bqAchat;

        return $this;
    }

    public function getBqRemise(): ?int
    {
        return $this->bqRemise;
    }

    public function setBqRemise(?int $bqRemise): static
    {
        $this->bqRemise = $bqRemise;

        return $this;
    }

    public function getBqDoadresse(): ?int
    {
        return $this->bqDoadresse;
    }

    public function setBqDoadresse(?int $bqDoadresse): static
    {
        $this->bqDoadresse = $bqDoadresse;

        return $this;
    }

    public function getBqDoville(): ?int
    {
        return $this->bqDoville;
    }

    public function setBqDoville(?int $bqDoville): static
    {
        $this->bqDoville = $bqDoville;

        return $this;
    }

    public function getBqDocodepostal(): ?int
    {
        return $this->bqDocodepostal;
    }

    public function setBqDocodepostal(?int $bqDocodepostal): static
    {
        $this->bqDocodepostal = $bqDocodepostal;

        return $this;
    }

    public function getBqDosiret(): ?int
    {
        return $this->bqDosiret;
    }

    public function setBqDosiret(?int $bqDosiret): static
    {
        $this->bqDosiret = $bqDosiret;

        return $this;
    }

    public function getBqDocodeident(): ?int
    {
        return $this->bqDocodeident;
    }

    public function setBqDocodeident(?int $bqDocodeident): static
    {
        $this->bqDocodeident = $bqDocodeident;

        return $this;
    }

    public function getBqDoagenceville(): ?int
    {
        return $this->bqDoagenceville;
    }

    public function setBqDoagenceville(?int $bqDoagenceville): static
    {
        $this->bqDoagenceville = $bqDoagenceville;

        return $this;
    }

    public function getBqDoagencecp(): ?int
    {
        return $this->bqDoagencecp;
    }

    public function setBqDoagencecp(?int $bqDoagencecp): static
    {
        $this->bqDoagencecp = $bqDoagencecp;

        return $this;
    }

    public function getBqDotypeident(): ?int
    {
        return $this->bqDotypeident;
    }

    public function setBqDotypeident(?int $bqDotypeident): static
    {
        $this->bqDotypeident = $bqDotypeident;

        return $this;
    }

    public function getBqDocle(): ?int
    {
        return $this->bqDocle;
    }

    public function setBqDocle(?int $bqDocle): static
    {
        $this->bqDocle = $bqDocle;

        return $this;
    }

    public function getBqVtadresse(): ?int
    {
        return $this->bqVtadresse;
    }

    public function setBqVtadresse(?int $bqVtadresse): static
    {
        $this->bqVtadresse = $bqVtadresse;

        return $this;
    }

    public function getBqVtville(): ?int
    {
        return $this->bqVtville;
    }

    public function setBqVtville(?int $bqVtville): static
    {
        $this->bqVtville = $bqVtville;

        return $this;
    }

    public function getBqVtcodepostal(): ?int
    {
        return $this->bqVtcodepostal;
    }

    public function setBqVtcodepostal(?int $bqVtcodepostal): static
    {
        $this->bqVtcodepostal = $bqVtcodepostal;

        return $this;
    }

    public function getBqVtsiret(): ?int
    {
        return $this->bqVtsiret;
    }

    public function setBqVtsiret(?int $bqVtsiret): static
    {
        $this->bqVtsiret = $bqVtsiret;

        return $this;
    }

    public function getBqVtpays(): ?int
    {
        return $this->bqVtpays;
    }

    public function setBqVtpays(?int $bqVtpays): static
    {
        $this->bqVtpays = $bqVtpays;

        return $this;
    }

    public function getBqVtcontrat(): ?int
    {
        return $this->bqVtcontrat;
    }

    public function setBqVtcontrat(?int $bqVtcontrat): static
    {
        $this->bqVtcontrat = $bqVtcontrat;

        return $this;
    }

    public function getBqVtdateachat(): ?int
    {
        return $this->bqVtdateachat;
    }

    public function setBqVtdateachat(?int $bqVtdateachat): static
    {
        $this->bqVtdateachat = $bqVtdateachat;

        return $this;
    }

    public function getBqVttauxchange(): ?int
    {
        return $this->bqVttauxchange;
    }

    public function setBqVttauxchange(?int $bqVttauxchange): static
    {
        $this->bqVttauxchange = $bqVttauxchange;

        return $this;
    }

    public function getBqVtinstruction(): ?int
    {
        return $this->bqVtinstruction;
    }

    public function setBqVtinstruction(?int $bqVtinstruction): static
    {
        $this->bqVtinstruction = $bqVtinstruction;

        return $this;
    }

    public function getBqBbintitule(): ?int
    {
        return $this->bqBbintitule;
    }

    public function setBqBbintitule(?int $bqBbintitule): static
    {
        $this->bqBbintitule = $bqBbintitule;

        return $this;
    }

    public function getBqBbbic(): ?int
    {
        return $this->bqBbbic;
    }

    public function setBqBbbic(?int $bqBbbic): static
    {
        $this->bqBbbic = $bqBbbic;

        return $this;
    }

    public function getBqBbadresse(): ?int
    {
        return $this->bqBbadresse;
    }

    public function setBqBbadresse(?int $bqBbadresse): static
    {
        $this->bqBbadresse = $bqBbadresse;

        return $this;
    }

    public function getBqBbville(): ?int
    {
        return $this->bqBbville;
    }

    public function setBqBbville(?int $bqBbville): static
    {
        $this->bqBbville = $bqBbville;

        return $this;
    }

    public function getBqBbcodepostal(): ?int
    {
        return $this->bqBbcodepostal;
    }

    public function setBqBbcodepostal(?int $bqBbcodepostal): static
    {
        $this->bqBbcodepostal = $bqBbcodepostal;

        return $this;
    }

    public function getBqBbcompte(): ?int
    {
        return $this->bqBbcompte;
    }

    public function setBqBbcompte(?int $bqBbcompte): static
    {
        $this->bqBbcompte = $bqBbcompte;

        return $this;
    }

    public function getBqBiintitule(): ?int
    {
        return $this->bqBiintitule;
    }

    public function setBqBiintitule(?int $bqBiintitule): static
    {
        $this->bqBiintitule = $bqBiintitule;

        return $this;
    }

    public function getBqBibic(): ?int
    {
        return $this->bqBibic;
    }

    public function setBqBibic(?int $bqBibic): static
    {
        $this->bqBibic = $bqBibic;

        return $this;
    }

    public function getBqBiadresse(): ?int
    {
        return $this->bqBiadresse;
    }

    public function setBqBiadresse(?int $bqBiadresse): static
    {
        $this->bqBiadresse = $bqBiadresse;

        return $this;
    }

    public function getBqBiville(): ?int
    {
        return $this->bqBiville;
    }

    public function setBqBiville(?int $bqBiville): static
    {
        $this->bqBiville = $bqBiville;

        return $this;
    }

    public function getBqBicodepostal(): ?int
    {
        return $this->bqBicodepostal;
    }

    public function setBqBicodepostal(?int $bqBicodepostal): static
    {
        $this->bqBicodepostal = $bqBicodepostal;

        return $this;
    }

    public function getBqBipays(): ?int
    {
        return $this->bqBipays;
    }

    public function setBqBipays(?int $bqBipays): static
    {
        $this->bqBipays = $bqBipays;

        return $this;
    }

    public function getBqTelephone(): ?string
    {
        return $this->bqTelephone;
    }

    public function setBqTelephone(?string $bqTelephone): static
    {
        $this->bqTelephone = $bqTelephone;

        return $this;
    }

    public function getBqTelecopie(): ?string
    {
        return $this->bqTelecopie;
    }

    public function setBqTelecopie(?string $bqTelecopie): static
    {
        $this->bqTelecopie = $bqTelecopie;

        return $this;
    }

    public function getBqEmail(): ?string
    {
        return $this->bqEmail;
    }

    public function setBqEmail(?string $bqEmail): static
    {
        $this->bqEmail = $bqEmail;

        return $this;
    }

    public function getBqSite(): ?string
    {
        return $this->bqSite;
    }

    public function setBqSite(?string $bqSite): static
    {
        $this->bqSite = $bqSite;

        return $this;
    }

    public function getBqConddecouvertcdTypeplafond(): ?int
    {
        return $this->bqConddecouvertcdTypeplafond;
    }

    public function setBqConddecouvertcdTypeplafond(?int $bqConddecouvertcdTypeplafond): static
    {
        $this->bqConddecouvertcdTypeplafond = $bqConddecouvertcdTypeplafond;

        return $this;
    }

    public function getBqConddecouvertcdBasecalcul(): ?int
    {
        return $this->bqConddecouvertcdBasecalcul;
    }

    public function setBqConddecouvertcdBasecalcul(?int $bqConddecouvertcdBasecalcul): static
    {
        $this->bqConddecouvertcdBasecalcul = $bqConddecouvertcdBasecalcul;

        return $this;
    }

    public function getBqConddecouverttrNo(): ?int
    {
        return $this->bqConddecouverttrNo;
    }

    public function setBqConddecouverttrNo(?int $bqConddecouverttrNo): static
    {
        $this->bqConddecouverttrNo = $bqConddecouverttrNo;

        return $this;
    }

    public function getCbbqConddecouverttrNo(): ?int
    {
        return $this->cbbqConddecouverttrNo;
    }

    public function setCbbqConddecouverttrNo(?int $cbbqConddecouverttrNo): static
    {
        $this->cbbqConddecouverttrNo = $cbbqConddecouverttrNo;

        return $this;
    }

    public function getBqConddecouvertcdValeurtaux(): ?string
    {
        return $this->bqConddecouvertcdValeurtaux;
    }

    public function setBqConddecouvertcdValeurtaux(?string $bqConddecouvertcdValeurtaux): static
    {
        $this->bqConddecouvertcdValeurtaux = $bqConddecouvertcdValeurtaux;

        return $this;
    }

    public function getBqConddecouvertcdPlafond01cdValeurplafond(): ?string
    {
        return $this->bqConddecouvertcdPlafond01cdValeurplafond;
    }

    public function setBqConddecouvertcdPlafond01cdValeurplafond(?string $bqConddecouvertcdPlafond01cdValeurplafond): static
    {
        $this->bqConddecouvertcdPlafond01cdValeurplafond = $bqConddecouvertcdPlafond01cdValeurplafond;

        return $this;
    }

    public function getBqConddecouvertcdPlafond01cdMarge(): ?string
    {
        return $this->bqConddecouvertcdPlafond01cdMarge;
    }

    public function setBqConddecouvertcdPlafond01cdMarge(?string $bqConddecouvertcdPlafond01cdMarge): static
    {
        $this->bqConddecouvertcdPlafond01cdMarge = $bqConddecouvertcdPlafond01cdMarge;

        return $this;
    }

    public function getBqConddecouvertcdPlafond02cdValeurplafond(): ?string
    {
        return $this->bqConddecouvertcdPlafond02cdValeurplafond;
    }

    public function setBqConddecouvertcdPlafond02cdValeurplafond(?string $bqConddecouvertcdPlafond02cdValeurplafond): static
    {
        $this->bqConddecouvertcdPlafond02cdValeurplafond = $bqConddecouvertcdPlafond02cdValeurplafond;

        return $this;
    }

    public function getBqConddecouvertcdPlafond02cdMarge(): ?string
    {
        return $this->bqConddecouvertcdPlafond02cdMarge;
    }

    public function setBqConddecouvertcdPlafond02cdMarge(?string $bqConddecouvertcdPlafond02cdMarge): static
    {
        $this->bqConddecouvertcdPlafond02cdMarge = $bqConddecouvertcdPlafond02cdMarge;

        return $this;
    }

    public function getBqCondinteretciType(): ?int
    {
        return $this->bqCondinteretciType;
    }

    public function setBqCondinteretciType(?int $bqCondinteretciType): static
    {
        $this->bqCondinteretciType = $bqCondinteretciType;

        return $this;
    }

    public function getBqCondinterettrNo(): ?int
    {
        return $this->bqCondinterettrNo;
    }

    public function setBqCondinterettrNo(?int $bqCondinterettrNo): static
    {
        $this->bqCondinterettrNo = $bqCondinterettrNo;

        return $this;
    }

    public function getCbbqCondinterettrNo(): ?int
    {
        return $this->cbbqCondinterettrNo;
    }

    public function setCbbqCondinterettrNo(?int $cbbqCondinterettrNo): static
    {
        $this->cbbqCondinterettrNo = $cbbqCondinterettrNo;

        return $this;
    }

    public function getBqCondinteretciTaux(): ?string
    {
        return $this->bqCondinteretciTaux;
    }

    public function setBqCondinteretciTaux(?string $bqCondinteretciTaux): static
    {
        $this->bqCondinteretciTaux = $bqCondinteretciTaux;

        return $this;
    }

    public function getBqCondinteretciAssiette(): ?int
    {
        return $this->bqCondinteretciAssiette;
    }

    public function setBqCondinteretciAssiette(?int $bqCondinteretciAssiette): static
    {
        $this->bqCondinteretciAssiette = $bqCondinteretciAssiette;

        return $this;
    }

    public function getBqCondinteretciLimite(): ?int
    {
        return $this->bqCondinteretciLimite;
    }

    public function setBqCondinteretciLimite(?int $bqCondinteretciLimite): static
    {
        $this->bqCondinteretciLimite = $bqCondinteretciLimite;

        return $this;
    }

    public function getBqCondinteretciBasecalcul(): ?int
    {
        return $this->bqCondinteretciBasecalcul;
    }

    public function setBqCondinteretciBasecalcul(?int $bqCondinteretciBasecalcul): static
    {
        $this->bqCondinteretciBasecalcul = $bqCondinteretciBasecalcul;

        return $this;
    }

    public function getBqCondcommissionccType(): ?int
    {
        return $this->bqCondcommissionccType;
    }

    public function setBqCondcommissionccType(?int $bqCondcommissionccType): static
    {
        $this->bqCondcommissionccType = $bqCondcommissionccType;

        return $this;
    }

    public function getBqCondcommissionccLimite(): ?int
    {
        return $this->bqCondcommissionccLimite;
    }

    public function setBqCondcommissionccLimite(?int $bqCondcommissionccLimite): static
    {
        $this->bqCondcommissionccLimite = $bqCondcommissionccLimite;

        return $this;
    }

    public function getBqCondcommissionccTaux(): ?string
    {
        return $this->bqCondcommissionccTaux;
    }

    public function setBqCondcommissionccTaux(?string $bqCondcommissionccTaux): static
    {
        $this->bqCondcommissionccTaux = $bqCondcommissionccTaux;

        return $this;
    }

    public function getBqCondfraiscfCommission(): ?string
    {
        return $this->bqCondfraiscfCommission;
    }

    public function setBqCondfraiscfCommission(?string $bqCondfraiscfCommission): static
    {
        $this->bqCondfraiscfCommission = $bqCondfraiscfCommission;

        return $this;
    }

    public function getBqCondfraiscfCompte(): ?string
    {
        return $this->bqCondfraiscfCompte;
    }

    public function setBqCondfraiscfCompte(?string $bqCondfraiscfCompte): static
    {
        $this->bqCondfraiscfCompte = $bqCondfraiscfCompte;

        return $this;
    }

    public function getBqCondfraiscfPeriodicite(): ?int
    {
        return $this->bqCondfraiscfPeriodicite;
    }

    public function setBqCondfraiscfPeriodicite(?int $bqCondfraiscfPeriodicite): static
    {
        $this->bqCondfraiscfPeriodicite = $bqCondfraiscfPeriodicite;

        return $this;
    }

    public function getBqCondfraiscfSeuilexoneration(): ?string
    {
        return $this->bqCondfraiscfSeuilexoneration;
    }

    public function setBqCondfraiscfSeuilexoneration(?string $bqCondfraiscfSeuilexoneration): static
    {
        $this->bqCondfraiscfSeuilexoneration = $bqCondfraiscfSeuilexoneration;

        return $this;
    }

    public function getBqCondfraiscfTypeexoneration(): ?int
    {
        return $this->bqCondfraiscfTypeexoneration;
    }

    public function setBqCondfraiscfTypeexoneration(?int $bqCondfraiscfTypeexoneration): static
    {
        $this->bqCondfraiscfTypeexoneration = $bqCondfraiscfTypeexoneration;

        return $this;
    }

    public function getBqCondfraiscfSeuilcrediteur(): ?string
    {
        return $this->bqCondfraiscfSeuilcrediteur;
    }

    public function setBqCondfraiscfSeuilcrediteur(?string $bqCondfraiscfSeuilcrediteur): static
    {
        $this->bqCondfraiscfSeuilcrediteur = $bqCondfraiscfSeuilcrediteur;

        return $this;
    }

    public function getBqCondfraiscfModeperception(): ?int
    {
        return $this->bqCondfraiscfModeperception;
    }

    public function setBqCondfraiscfModeperception(?int $bqCondfraiscfModeperception): static
    {
        $this->bqCondfraiscfModeperception = $bqCondfraiscfModeperception;

        return $this;
    }

    public function getBqCondfraiscfMontantvariableht(): ?string
    {
        return $this->bqCondfraiscfMontantvariableht;
    }

    public function setBqCondfraiscfMontantvariableht(?string $bqCondfraiscfMontantvariableht): static
    {
        $this->bqCondfraiscfMontantvariableht = $bqCondfraiscfMontantvariableht;

        return $this;
    }

    public function getBqCondfraiscfMinimumpercu(): ?string
    {
        return $this->bqCondfraiscfMinimumpercu;
    }

    public function setBqCondfraiscfMinimumpercu(?string $bqCondfraiscfMinimumpercu): static
    {
        $this->bqCondfraiscfMinimumpercu = $bqCondfraiscfMinimumpercu;

        return $this;
    }

    public function getBqCondfraiscfMaximumpercu(): ?string
    {
        return $this->bqCondfraiscfMaximumpercu;
    }

    public function setBqCondfraiscfMaximumpercu(?string $bqCondfraiscfMaximumpercu): static
    {
        $this->bqCondfraiscfMaximumpercu = $bqCondfraiscfMaximumpercu;

        return $this;
    }

    public function getBqCondfraiscfAssujettvacommission(): ?int
    {
        return $this->bqCondfraiscfAssujettvacommission;
    }

    public function setBqCondfraiscfAssujettvacommission(?int $bqCondfraiscfAssujettvacommission): static
    {
        $this->bqCondfraiscfAssujettvacommission = $bqCondfraiscfAssujettvacommission;

        return $this;
    }

    public function getBqCondfraiscfAssujettvafrais(): ?int
    {
        return $this->bqCondfraiscfAssujettvafrais;
    }

    public function setBqCondfraiscfAssujettvafrais(?int $bqCondfraiscfAssujettvafrais): static
    {
        $this->bqCondfraiscfAssujettvafrais = $bqCondfraiscfAssujettvafrais;

        return $this;
    }

    public function getBqTransemailenvoi(): ?string
    {
        return $this->bqTransemailenvoi;
    }

    public function setBqTransemailenvoi(?string $bqTransemailenvoi): static
    {
        $this->bqTransemailenvoi = $bqTransemailenvoi;

        return $this;
    }

    public function getBqTranssite(): ?string
    {
        return $this->bqTranssite;
    }

    public function setBqTranssite(?string $bqTranssite): static
    {
        $this->bqTranssite = $bqTranssite;

        return $this;
    }

    public function getBqFormatvir(): ?int
    {
        return $this->bqFormatvir;
    }

    public function setBqFormatvir(?int $bqFormatvir): static
    {
        $this->bqFormatvir = $bqFormatvir;

        return $this;
    }

    public function getBqFormatvirinter(): ?int
    {
        return $this->bqFormatvirinter;
    }

    public function setBqFormatvirinter(?int $bqFormatvirinter): static
    {
        $this->bqFormatvirinter = $bqFormatvirinter;

        return $this;
    }

    public function getBqDelaiheure01dhJourteletrans(): ?int
    {
        return $this->bqDelaiheure01dhJourteletrans;
    }

    public function setBqDelaiheure01dhJourteletrans(?int $bqDelaiheure01dhJourteletrans): static
    {
        $this->bqDelaiheure01dhJourteletrans = $bqDelaiheure01dhJourteletrans;

        return $this;
    }

    public function getBqDelaiheure01dhJourfichier(): ?int
    {
        return $this->bqDelaiheure01dhJourfichier;
    }

    public function setBqDelaiheure01dhJourfichier(?int $bqDelaiheure01dhJourfichier): static
    {
        $this->bqDelaiheure01dhJourfichier = $bqDelaiheure01dhJourfichier;

        return $this;
    }

    public function getBqDelaiheure01dhHeureteletrans(): ?string
    {
        return $this->bqDelaiheure01dhHeureteletrans;
    }

    public function setBqDelaiheure01dhHeureteletrans(?string $bqDelaiheure01dhHeureteletrans): static
    {
        $this->bqDelaiheure01dhHeureteletrans = $bqDelaiheure01dhHeureteletrans;

        return $this;
    }

    public function getBqDelaiheure01dhHeurefichier(): ?string
    {
        return $this->bqDelaiheure01dhHeurefichier;
    }

    public function setBqDelaiheure01dhHeurefichier(?string $bqDelaiheure01dhHeurefichier): static
    {
        $this->bqDelaiheure01dhHeurefichier = $bqDelaiheure01dhHeurefichier;

        return $this;
    }

    public function getBqDelaiheure02dhJourteletrans(): ?int
    {
        return $this->bqDelaiheure02dhJourteletrans;
    }

    public function setBqDelaiheure02dhJourteletrans(?int $bqDelaiheure02dhJourteletrans): static
    {
        $this->bqDelaiheure02dhJourteletrans = $bqDelaiheure02dhJourteletrans;

        return $this;
    }

    public function getBqDelaiheure02dhJourfichier(): ?int
    {
        return $this->bqDelaiheure02dhJourfichier;
    }

    public function setBqDelaiheure02dhJourfichier(?int $bqDelaiheure02dhJourfichier): static
    {
        $this->bqDelaiheure02dhJourfichier = $bqDelaiheure02dhJourfichier;

        return $this;
    }

    public function getBqDelaiheure02dhHeureteletrans(): ?string
    {
        return $this->bqDelaiheure02dhHeureteletrans;
    }

    public function setBqDelaiheure02dhHeureteletrans(?string $bqDelaiheure02dhHeureteletrans): static
    {
        $this->bqDelaiheure02dhHeureteletrans = $bqDelaiheure02dhHeureteletrans;

        return $this;
    }

    public function getBqDelaiheure02dhHeurefichier(): ?string
    {
        return $this->bqDelaiheure02dhHeurefichier;
    }

    public function setBqDelaiheure02dhHeurefichier(?string $bqDelaiheure02dhHeurefichier): static
    {
        $this->bqDelaiheure02dhHeurefichier = $bqDelaiheure02dhHeurefichier;

        return $this;
    }

    public function getBqDelaiheure03dhJourteletrans(): ?int
    {
        return $this->bqDelaiheure03dhJourteletrans;
    }

    public function setBqDelaiheure03dhJourteletrans(?int $bqDelaiheure03dhJourteletrans): static
    {
        $this->bqDelaiheure03dhJourteletrans = $bqDelaiheure03dhJourteletrans;

        return $this;
    }

    public function getBqDelaiheure03dhJourfichier(): ?int
    {
        return $this->bqDelaiheure03dhJourfichier;
    }

    public function setBqDelaiheure03dhJourfichier(?int $bqDelaiheure03dhJourfichier): static
    {
        $this->bqDelaiheure03dhJourfichier = $bqDelaiheure03dhJourfichier;

        return $this;
    }

    public function getBqDelaiheure03dhHeureteletrans(): ?string
    {
        return $this->bqDelaiheure03dhHeureteletrans;
    }

    public function setBqDelaiheure03dhHeureteletrans(?string $bqDelaiheure03dhHeureteletrans): static
    {
        $this->bqDelaiheure03dhHeureteletrans = $bqDelaiheure03dhHeureteletrans;

        return $this;
    }

    public function getBqDelaiheure03dhHeurefichier(): ?string
    {
        return $this->bqDelaiheure03dhHeurefichier;
    }

    public function setBqDelaiheure03dhHeurefichier(?string $bqDelaiheure03dhHeurefichier): static
    {
        $this->bqDelaiheure03dhHeurefichier = $bqDelaiheure03dhHeurefichier;

        return $this;
    }

    public function getBqDelaiheure04dhJourteletrans(): ?int
    {
        return $this->bqDelaiheure04dhJourteletrans;
    }

    public function setBqDelaiheure04dhJourteletrans(?int $bqDelaiheure04dhJourteletrans): static
    {
        $this->bqDelaiheure04dhJourteletrans = $bqDelaiheure04dhJourteletrans;

        return $this;
    }

    public function getBqDelaiheure04dhJourfichier(): ?int
    {
        return $this->bqDelaiheure04dhJourfichier;
    }

    public function setBqDelaiheure04dhJourfichier(?int $bqDelaiheure04dhJourfichier): static
    {
        $this->bqDelaiheure04dhJourfichier = $bqDelaiheure04dhJourfichier;

        return $this;
    }

    public function getBqDelaiheure04dhHeureteletrans(): ?string
    {
        return $this->bqDelaiheure04dhHeureteletrans;
    }

    public function setBqDelaiheure04dhHeureteletrans(?string $bqDelaiheure04dhHeureteletrans): static
    {
        $this->bqDelaiheure04dhHeureteletrans = $bqDelaiheure04dhHeureteletrans;

        return $this;
    }

    public function getBqDelaiheure04dhHeurefichier(): ?string
    {
        return $this->bqDelaiheure04dhHeurefichier;
    }

    public function setBqDelaiheure04dhHeurefichier(?string $bqDelaiheure04dhHeurefichier): static
    {
        $this->bqDelaiheure04dhHeurefichier = $bqDelaiheure04dhHeurefichier;

        return $this;
    }

    public function getBqDelaiheure05dhJourteletrans(): ?int
    {
        return $this->bqDelaiheure05dhJourteletrans;
    }

    public function setBqDelaiheure05dhJourteletrans(?int $bqDelaiheure05dhJourteletrans): static
    {
        $this->bqDelaiheure05dhJourteletrans = $bqDelaiheure05dhJourteletrans;

        return $this;
    }

    public function getBqDelaiheure05dhJourfichier(): ?int
    {
        return $this->bqDelaiheure05dhJourfichier;
    }

    public function setBqDelaiheure05dhJourfichier(?int $bqDelaiheure05dhJourfichier): static
    {
        $this->bqDelaiheure05dhJourfichier = $bqDelaiheure05dhJourfichier;

        return $this;
    }

    public function getBqDelaiheure05dhHeureteletrans(): ?string
    {
        return $this->bqDelaiheure05dhHeureteletrans;
    }

    public function setBqDelaiheure05dhHeureteletrans(?string $bqDelaiheure05dhHeureteletrans): static
    {
        $this->bqDelaiheure05dhHeureteletrans = $bqDelaiheure05dhHeureteletrans;

        return $this;
    }

    public function getBqDelaiheure05dhHeurefichier(): ?string
    {
        return $this->bqDelaiheure05dhHeurefichier;
    }

    public function setBqDelaiheure05dhHeurefichier(?string $bqDelaiheure05dhHeurefichier): static
    {
        $this->bqDelaiheure05dhHeurefichier = $bqDelaiheure05dhHeurefichier;

        return $this;
    }

    public function getBqDelaiheure06dhJourteletrans(): ?int
    {
        return $this->bqDelaiheure06dhJourteletrans;
    }

    public function setBqDelaiheure06dhJourteletrans(?int $bqDelaiheure06dhJourteletrans): static
    {
        $this->bqDelaiheure06dhJourteletrans = $bqDelaiheure06dhJourteletrans;

        return $this;
    }

    public function getBqDelaiheure06dhJourfichier(): ?int
    {
        return $this->bqDelaiheure06dhJourfichier;
    }

    public function setBqDelaiheure06dhJourfichier(?int $bqDelaiheure06dhJourfichier): static
    {
        $this->bqDelaiheure06dhJourfichier = $bqDelaiheure06dhJourfichier;

        return $this;
    }

    public function getBqDelaiheure06dhHeureteletrans(): ?string
    {
        return $this->bqDelaiheure06dhHeureteletrans;
    }

    public function setBqDelaiheure06dhHeureteletrans(?string $bqDelaiheure06dhHeureteletrans): static
    {
        $this->bqDelaiheure06dhHeureteletrans = $bqDelaiheure06dhHeureteletrans;

        return $this;
    }

    public function getBqDelaiheure06dhHeurefichier(): ?string
    {
        return $this->bqDelaiheure06dhHeurefichier;
    }

    public function setBqDelaiheure06dhHeurefichier(?string $bqDelaiheure06dhHeurefichier): static
    {
        $this->bqDelaiheure06dhHeurefichier = $bqDelaiheure06dhHeurefichier;

        return $this;
    }

    public function getBqDelaiheure07dhJourteletrans(): ?int
    {
        return $this->bqDelaiheure07dhJourteletrans;
    }

    public function setBqDelaiheure07dhJourteletrans(?int $bqDelaiheure07dhJourteletrans): static
    {
        $this->bqDelaiheure07dhJourteletrans = $bqDelaiheure07dhJourteletrans;

        return $this;
    }

    public function getBqDelaiheure07dhJourfichier(): ?int
    {
        return $this->bqDelaiheure07dhJourfichier;
    }

    public function setBqDelaiheure07dhJourfichier(?int $bqDelaiheure07dhJourfichier): static
    {
        $this->bqDelaiheure07dhJourfichier = $bqDelaiheure07dhJourfichier;

        return $this;
    }

    public function getBqDelaiheure07dhHeureteletrans(): ?string
    {
        return $this->bqDelaiheure07dhHeureteletrans;
    }

    public function setBqDelaiheure07dhHeureteletrans(?string $bqDelaiheure07dhHeureteletrans): static
    {
        $this->bqDelaiheure07dhHeureteletrans = $bqDelaiheure07dhHeureteletrans;

        return $this;
    }

    public function getBqDelaiheure07dhHeurefichier(): ?string
    {
        return $this->bqDelaiheure07dhHeurefichier;
    }

    public function setBqDelaiheure07dhHeurefichier(?string $bqDelaiheure07dhHeurefichier): static
    {
        $this->bqDelaiheure07dhHeurefichier = $bqDelaiheure07dhHeurefichier;

        return $this;
    }

    public function getBqDelaiheure08dhJourteletrans(): ?int
    {
        return $this->bqDelaiheure08dhJourteletrans;
    }

    public function setBqDelaiheure08dhJourteletrans(?int $bqDelaiheure08dhJourteletrans): static
    {
        $this->bqDelaiheure08dhJourteletrans = $bqDelaiheure08dhJourteletrans;

        return $this;
    }

    public function getBqDelaiheure08dhJourfichier(): ?int
    {
        return $this->bqDelaiheure08dhJourfichier;
    }

    public function setBqDelaiheure08dhJourfichier(?int $bqDelaiheure08dhJourfichier): static
    {
        $this->bqDelaiheure08dhJourfichier = $bqDelaiheure08dhJourfichier;

        return $this;
    }

    public function getBqDelaiheure08dhHeureteletrans(): ?string
    {
        return $this->bqDelaiheure08dhHeureteletrans;
    }

    public function setBqDelaiheure08dhHeureteletrans(?string $bqDelaiheure08dhHeureteletrans): static
    {
        $this->bqDelaiheure08dhHeureteletrans = $bqDelaiheure08dhHeureteletrans;

        return $this;
    }

    public function getBqDelaiheure08dhHeurefichier(): ?string
    {
        return $this->bqDelaiheure08dhHeurefichier;
    }

    public function setBqDelaiheure08dhHeurefichier(?string $bqDelaiheure08dhHeurefichier): static
    {
        $this->bqDelaiheure08dhHeurefichier = $bqDelaiheure08dhHeurefichier;

        return $this;
    }

    public function getBqDelaiheure09dhJourteletrans(): ?int
    {
        return $this->bqDelaiheure09dhJourteletrans;
    }

    public function setBqDelaiheure09dhJourteletrans(?int $bqDelaiheure09dhJourteletrans): static
    {
        $this->bqDelaiheure09dhJourteletrans = $bqDelaiheure09dhJourteletrans;

        return $this;
    }

    public function getBqDelaiheure09dhJourfichier(): ?int
    {
        return $this->bqDelaiheure09dhJourfichier;
    }

    public function setBqDelaiheure09dhJourfichier(?int $bqDelaiheure09dhJourfichier): static
    {
        $this->bqDelaiheure09dhJourfichier = $bqDelaiheure09dhJourfichier;

        return $this;
    }

    public function getBqDelaiheure09dhHeureteletrans(): ?string
    {
        return $this->bqDelaiheure09dhHeureteletrans;
    }

    public function setBqDelaiheure09dhHeureteletrans(?string $bqDelaiheure09dhHeureteletrans): static
    {
        $this->bqDelaiheure09dhHeureteletrans = $bqDelaiheure09dhHeureteletrans;

        return $this;
    }

    public function getBqDelaiheure09dhHeurefichier(): ?string
    {
        return $this->bqDelaiheure09dhHeurefichier;
    }

    public function setBqDelaiheure09dhHeurefichier(?string $bqDelaiheure09dhHeurefichier): static
    {
        $this->bqDelaiheure09dhHeurefichier = $bqDelaiheure09dhHeurefichier;

        return $this;
    }

    public function getBqDelaiheure10dhJourteletrans(): ?int
    {
        return $this->bqDelaiheure10dhJourteletrans;
    }

    public function setBqDelaiheure10dhJourteletrans(?int $bqDelaiheure10dhJourteletrans): static
    {
        $this->bqDelaiheure10dhJourteletrans = $bqDelaiheure10dhJourteletrans;

        return $this;
    }

    public function getBqDelaiheure10dhJourfichier(): ?int
    {
        return $this->bqDelaiheure10dhJourfichier;
    }

    public function setBqDelaiheure10dhJourfichier(?int $bqDelaiheure10dhJourfichier): static
    {
        $this->bqDelaiheure10dhJourfichier = $bqDelaiheure10dhJourfichier;

        return $this;
    }

    public function getBqDelaiheure10dhHeureteletrans(): ?string
    {
        return $this->bqDelaiheure10dhHeureteletrans;
    }

    public function setBqDelaiheure10dhHeureteletrans(?string $bqDelaiheure10dhHeureteletrans): static
    {
        $this->bqDelaiheure10dhHeureteletrans = $bqDelaiheure10dhHeureteletrans;

        return $this;
    }

    public function getBqDelaiheure10dhHeurefichier(): ?string
    {
        return $this->bqDelaiheure10dhHeurefichier;
    }

    public function setBqDelaiheure10dhHeurefichier(?string $bqDelaiheure10dhHeurefichier): static
    {
        $this->bqDelaiheure10dhHeurefichier = $bqDelaiheure10dhHeurefichier;

        return $this;
    }

    public function getBqDelaiheure11dhJourteletrans(): ?int
    {
        return $this->bqDelaiheure11dhJourteletrans;
    }

    public function setBqDelaiheure11dhJourteletrans(?int $bqDelaiheure11dhJourteletrans): static
    {
        $this->bqDelaiheure11dhJourteletrans = $bqDelaiheure11dhJourteletrans;

        return $this;
    }

    public function getBqDelaiheure11dhJourfichier(): ?int
    {
        return $this->bqDelaiheure11dhJourfichier;
    }

    public function setBqDelaiheure11dhJourfichier(?int $bqDelaiheure11dhJourfichier): static
    {
        $this->bqDelaiheure11dhJourfichier = $bqDelaiheure11dhJourfichier;

        return $this;
    }

    public function getBqDelaiheure11dhHeureteletrans(): ?string
    {
        return $this->bqDelaiheure11dhHeureteletrans;
    }

    public function setBqDelaiheure11dhHeureteletrans(?string $bqDelaiheure11dhHeureteletrans): static
    {
        $this->bqDelaiheure11dhHeureteletrans = $bqDelaiheure11dhHeureteletrans;

        return $this;
    }

    public function getBqDelaiheure11dhHeurefichier(): ?string
    {
        return $this->bqDelaiheure11dhHeurefichier;
    }

    public function setBqDelaiheure11dhHeurefichier(?string $bqDelaiheure11dhHeurefichier): static
    {
        $this->bqDelaiheure11dhHeurefichier = $bqDelaiheure11dhHeurefichier;

        return $this;
    }

    public function getBqDelaiheure12dhJourteletrans(): ?int
    {
        return $this->bqDelaiheure12dhJourteletrans;
    }

    public function setBqDelaiheure12dhJourteletrans(?int $bqDelaiheure12dhJourteletrans): static
    {
        $this->bqDelaiheure12dhJourteletrans = $bqDelaiheure12dhJourteletrans;

        return $this;
    }

    public function getBqDelaiheure12dhJourfichier(): ?int
    {
        return $this->bqDelaiheure12dhJourfichier;
    }

    public function setBqDelaiheure12dhJourfichier(?int $bqDelaiheure12dhJourfichier): static
    {
        $this->bqDelaiheure12dhJourfichier = $bqDelaiheure12dhJourfichier;

        return $this;
    }

    public function getBqDelaiheure12dhHeureteletrans(): ?string
    {
        return $this->bqDelaiheure12dhHeureteletrans;
    }

    public function setBqDelaiheure12dhHeureteletrans(?string $bqDelaiheure12dhHeureteletrans): static
    {
        $this->bqDelaiheure12dhHeureteletrans = $bqDelaiheure12dhHeureteletrans;

        return $this;
    }

    public function getBqDelaiheure12dhHeurefichier(): ?string
    {
        return $this->bqDelaiheure12dhHeurefichier;
    }

    public function setBqDelaiheure12dhHeurefichier(?string $bqDelaiheure12dhHeurefichier): static
    {
        $this->bqDelaiheure12dhHeurefichier = $bqDelaiheure12dhHeurefichier;

        return $this;
    }

    public function getBqVtcodeservice(): ?string
    {
        return $this->bqVtcodeservice;
    }

    public function setBqVtcodeservice(?string $bqVtcodeservice): static
    {
        $this->bqVtcodeservice = $bqVtcodeservice;

        return $this;
    }

    public function getBqFormatprel(): ?int
    {
        return $this->bqFormatprel;
    }

    public function setBqFormatprel(?int $bqFormatprel): static
    {
        $this->bqFormatprel = $bqFormatprel;

        return $this;
    }

    public function getBqFormatprelversion(): ?int
    {
        return $this->bqFormatprelversion;
    }

    public function setBqFormatprelversion(?int $bqFormatprelversion): static
    {
        $this->bqFormatprelversion = $bqFormatprelversion;

        return $this;
    }

    public function getBqFormatvirversion(): ?int
    {
        return $this->bqFormatvirversion;
    }

    public function setBqFormatvirversion(?int $bqFormatvirversion): static
    {
        $this->bqFormatvirversion = $bqFormatvirversion;

        return $this;
    }

    public function getCgNumfraisopcvm(): ?string
    {
        return $this->cgNumfraisopcvm;
    }

    public function setCgNumfraisopcvm(?string $cgNumfraisopcvm): static
    {
        $this->cgNumfraisopcvm = $cgNumfraisopcvm;

        return $this;
    }

    public function getCbcgNumfraisopcvm()
    {
        return $this->cbcgNumfraisopcvm;
    }

    public function setCbcgNumfraisopcvm($cbcgNumfraisopcvm): static
    {
        $this->cbcgNumfraisopcvm = $cbcgNumfraisopcvm;

        return $this;
    }

    public function getCgNumtvaopcvm(): ?string
    {
        return $this->cgNumtvaopcvm;
    }

    public function setCgNumtvaopcvm(?string $cgNumtvaopcvm): static
    {
        $this->cgNumtvaopcvm = $cgNumtvaopcvm;

        return $this;
    }

    public function getCbcgNumtvaopcvm()
    {
        return $this->cbcgNumtvaopcvm;
    }

    public function setCbcgNumtvaopcvm($cbcgNumtvaopcvm): static
    {
        $this->cbcgNumtvaopcvm = $cbcgNumtvaopcvm;

        return $this;
    }

    public function getCgNummoinsvalueopcvm(): ?string
    {
        return $this->cgNummoinsvalueopcvm;
    }

    public function setCgNummoinsvalueopcvm(?string $cgNummoinsvalueopcvm): static
    {
        $this->cgNummoinsvalueopcvm = $cgNummoinsvalueopcvm;

        return $this;
    }

    public function getCbcgNummoinsvalueopcvm()
    {
        return $this->cbcgNummoinsvalueopcvm;
    }

    public function setCbcgNummoinsvalueopcvm($cbcgNummoinsvalueopcvm): static
    {
        $this->cbcgNummoinsvalueopcvm = $cbcgNummoinsvalueopcvm;

        return $this;
    }

    public function getCgNumplusvalueopcvm(): ?string
    {
        return $this->cgNumplusvalueopcvm;
    }

    public function setCgNumplusvalueopcvm(?string $cgNumplusvalueopcvm): static
    {
        $this->cgNumplusvalueopcvm = $cgNumplusvalueopcvm;

        return $this;
    }

    public function getCbcgNumplusvalueopcvm()
    {
        return $this->cbcgNumplusvalueopcvm;
    }

    public function setCbcgNumplusvalueopcvm($cbcgNumplusvalueopcvm): static
    {
        $this->cbcgNumplusvalueopcvm = $cbcgNumplusvalueopcvm;

        return $this;
    }

    public function getBqVtimputation(): ?int
    {
        return $this->bqVtimputation;
    }

    public function setBqVtimputation(?int $bqVtimputation): static
    {
        $this->bqVtimputation = $bqVtimputation;

        return $this;
    }

    public function getBqModeleparam(): ?string
    {
        return $this->bqModeleparam;
    }

    public function setBqModeleparam(?string $bqModeleparam): static
    {
        $this->bqModeleparam = $bqModeleparam;

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
}
