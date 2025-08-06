<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\PComptoirRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'P_COMPTOIR')]
#[ORM\Entity(repositoryClass: PComptoirRepository::class)]
class PComptoir
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "C_Intitule", length: 35, nullable: true)]
    private ?string $cIntitule = null;

    #[ORM\Column(name: "C_Modele", type: Types::SMALLINT, nullable: true)]
    private ?int $cModele = null;

    #[ORM\Column(name: "C_Affiche01", type: Types::SMALLINT, nullable: true)]
    private ?int $cAffiche01 = null;

    #[ORM\Column(name: "C_Affiche02", type: Types::SMALLINT, nullable: true)]
    private ?int $cAffiche02 = null;

    #[ORM\Column(name: "C_Affiche03", type: Types::SMALLINT, nullable: true)]
    private ?int $cAffiche03 = null;

    #[ORM\Column(name: "C_Affiche04", type: Types::SMALLINT, nullable: true)]
    private ?int $cAffiche04 = null;

    #[ORM\Column(name: "C_Affiche05", type: Types::SMALLINT, nullable: true)]
    private ?int $cAffiche05 = null;

    #[ORM\Column(name: "C_Affiche06", type: Types::SMALLINT, nullable: true)]
    private ?int $cAffiche06 = null;

    #[ORM\Column(name: "C_Affiche07", type: Types::SMALLINT, nullable: true)]
    private ?int $cAffiche07 = null;

    #[ORM\Column(name: "C_Affiche08", type: Types::SMALLINT, nullable: true)]
    private ?int $cAffiche08 = null;

    #[ORM\Column(name: "C_Affiche09", type: Types::SMALLINT, nullable: true)]
    private ?int $cAffiche09 = null;

    #[ORM\Column(name: "C_Affiche10", type: Types::SMALLINT, nullable: true)]
    private ?int $cAffiche10 = null;

    #[ORM\Column(name: "C_Affiche11", type: Types::SMALLINT, nullable: true)]
    private ?int $cAffiche11 = null;

    #[ORM\Column(name: "C_Affiche12", type: Types::SMALLINT, nullable: true)]
    private ?int $cAffiche12 = null;

    #[ORM\Column(name: "C_Affiche13", type: Types::SMALLINT, nullable: true)]
    private ?int $cAffiche13 = null;

    #[ORM\Column(name: "C_Affiche14", type: Types::SMALLINT, nullable: true)]
    private ?int $cAffiche14 = null;

    #[ORM\Column(name: "C_Affiche15", type: Types::SMALLINT, nullable: true)]
    private ?int $cAffiche15 = null;

    #[ORM\Column(name: "C_Affiche16", type: Types::SMALLINT, nullable: true)]
    private ?int $cAffiche16 = null;

    #[ORM\Column(name: "C_Affiche17", type: Types::SMALLINT, nullable: true)]
    private ?int $cAffiche17 = null;

    #[ORM\Column(name: "C_Affiche18", type: Types::SMALLINT, nullable: true)]
    private ?int $cAffiche18 = null;

    #[ORM\Column(name: "C_Affiche19", type: Types::SMALLINT, nullable: true)]
    private ?int $cAffiche19 = null;

    #[ORM\Column(name: "C_Affiche20", type: Types::SMALLINT, nullable: true)]
    private ?int $cAffiche20 = null;

    #[ORM\Column(name: "C_Affiche21", type: Types::SMALLINT, nullable: true)]
    private ?int $cAffiche21 = null;

    #[ORM\Column(name: "C_Affiche22", type: Types::SMALLINT, nullable: true)]
    private ?int $cAffiche22 = null;

    #[ORM\Column(name: "C_Affiche23", type: Types::SMALLINT, nullable: true)]
    private ?int $cAffiche23 = null;

    #[ORM\Column(name: "C_Affiche24", type: Types::SMALLINT, nullable: true)]
    private ?int $cAffiche24 = null;

    #[ORM\Column(name: "C_Affiche25", type: Types::SMALLINT, nullable: true)]
    private ?int $cAffiche25 = null;

    #[ORM\Column(name: "C_Affiche26", type: Types::SMALLINT, nullable: true)]
    private ?int $cAffiche26 = null;

    #[ORM\Column(name: "C_Affiche27", type: Types::SMALLINT, nullable: true)]
    private ?int $cAffiche27 = null;

    #[ORM\Column(name: "C_Affiche28", type: Types::SMALLINT, nullable: true)]
    private ?int $cAffiche28 = null;

    #[ORM\Column(name: "C_Affiche29", type: Types::SMALLINT, nullable: true)]
    private ?int $cAffiche29 = null;

    #[ORM\Column(name: "C_Affiche30", type: Types::SMALLINT, nullable: true)]
    private ?int $cAffiche30 = null;

    #[ORM\Column(name: "C_Affiche31", type: Types::SMALLINT, nullable: true)]
    private ?int $cAffiche31 = null;

    #[ORM\Column(name: "C_Affiche32", type: Types::SMALLINT, nullable: true)]
    private ?int $cAffiche32 = null;

    #[ORM\Column(name: "C_Affiche33", type: Types::SMALLINT, nullable: true)]
    private ?int $cAffiche33 = null;

    #[ORM\Column(name: "C_Affiche34", type: Types::SMALLINT, nullable: true)]
    private ?int $cAffiche34 = null;

    #[ORM\Column(name: "C_Affiche35", type: Types::SMALLINT, nullable: true)]
    private ?int $cAffiche35 = null;

    #[ORM\Column(name: "C_Affiche36", type: Types::SMALLINT, nullable: true)]
    private ?int $cAffiche36 = null;

    #[ORM\Column(name: "C_Affiche37", type: Types::SMALLINT, nullable: true)]
    private ?int $cAffiche37 = null;

    #[ORM\Column(name: "C_Colonne01", type: Types::SMALLINT, nullable: true)]
    private ?int $cColonne01 = null;

    #[ORM\Column(name: "C_Colonne02", type: Types::SMALLINT, nullable: true)]
    private ?int $cColonne02 = null;

    #[ORM\Column(name: "C_Colonne03", type: Types::SMALLINT, nullable: true)]
    private ?int $cColonne03 = null;

    #[ORM\Column(name: "C_Colonne04", type: Types::SMALLINT, nullable: true)]
    private ?int $cColonne04 = null;

    #[ORM\Column(name: "C_Colonne05", type: Types::SMALLINT, nullable: true)]
    private ?int $cColonne05 = null;

    #[ORM\Column(name: "C_Colonne06", type: Types::SMALLINT, nullable: true)]
    private ?int $cColonne06 = null;

    #[ORM\Column(name: "C_Colonne07", type: Types::SMALLINT, nullable: true)]
    private ?int $cColonne07 = null;

    #[ORM\Column(name: "C_Colonne08", type: Types::SMALLINT, nullable: true)]
    private ?int $cColonne08 = null;

    #[ORM\Column(name: "C_Colonne09", type: Types::SMALLINT, nullable: true)]
    private ?int $cColonne09 = null;

    #[ORM\Column(name: "C_Colonne10", type: Types::SMALLINT, nullable: true)]
    private ?int $cColonne10 = null;

    #[ORM\Column(name: "C_Colonne11", type: Types::SMALLINT, nullable: true)]
    private ?int $cColonne11 = null;

    #[ORM\Column(name: "C_Colonne12", type: Types::SMALLINT, nullable: true)]
    private ?int $cColonne12 = null;

    #[ORM\Column(name: "C_Colonne13", type: Types::SMALLINT, nullable: true)]
    private ?int $cColonne13 = null;

    #[ORM\Column(name: "C_Colonne14", type: Types::SMALLINT, nullable: true)]
    private ?int $cColonne14 = null;

    #[ORM\Column(name: "C_Colonne15", type: Types::SMALLINT, nullable: true)]
    private ?int $cColonne15 = null;

    #[ORM\Column(name: "C_Colonne16", type: Types::SMALLINT, nullable: true)]
    private ?int $cColonne16 = null;

    #[ORM\Column(name: "C_Colonne17", type: Types::SMALLINT, nullable: true)]
    private ?int $cColonne17 = null;

    #[ORM\Column(name: "C_Colonne18", type: Types::SMALLINT, nullable: true)]
    private ?int $cColonne18 = null;

    #[ORM\Column(name: "C_Colonne19", type: Types::SMALLINT, nullable: true)]
    private ?int $cColonne19 = null;

    #[ORM\Column(name: "C_Colonne20", type: Types::SMALLINT, nullable: true)]
    private ?int $cColonne20 = null;

    #[ORM\Column(name: "C_Colonne21", type: Types::SMALLINT, nullable: true)]
    private ?int $cColonne21 = null;

    #[ORM\Column(name: "C_Colonne22", type: Types::SMALLINT, nullable: true)]
    private ?int $cColonne22 = null;

    #[ORM\Column(name: "C_Colonne23", type: Types::SMALLINT, nullable: true)]
    private ?int $cColonne23 = null;

    #[ORM\Column(name: "C_Colonne24", type: Types::SMALLINT, nullable: true)]
    private ?int $cColonne24 = null;

    #[ORM\Column(name: "C_Colonne25", type: Types::SMALLINT, nullable: true)]
    private ?int $cColonne25 = null;

    #[ORM\Column(name: "C_Colonne26", type: Types::SMALLINT, nullable: true)]
    private ?int $cColonne26 = null;

    #[ORM\Column(name: "C_Colonne27", type: Types::SMALLINT, nullable: true)]
    private ?int $cColonne27 = null;

    #[ORM\Column(name: "C_Colonne28", type: Types::SMALLINT, nullable: true)]
    private ?int $cColonne28 = null;

    #[ORM\Column(name: "C_Colonne29", type: Types::SMALLINT, nullable: true)]
    private ?int $cColonne29 = null;

    #[ORM\Column(name: "C_Colonne30", type: Types::SMALLINT, nullable: true)]
    private ?int $cColonne30 = null;

    #[ORM\Column(name: "C_Colonne31", type: Types::SMALLINT, nullable: true)]
    private ?int $cColonne31 = null;

    #[ORM\Column(name: "C_Colonne32", type: Types::SMALLINT, nullable: true)]
    private ?int $cColonne32 = null;

    #[ORM\Column(name: "C_Colonne33", type: Types::SMALLINT, nullable: true)]
    private ?int $cColonne33 = null;

    #[ORM\Column(name: "C_Colonne34", type: Types::SMALLINT, nullable: true)]
    private ?int $cColonne34 = null;

    #[ORM\Column(name: "C_Colonne35", type: Types::SMALLINT, nullable: true)]
    private ?int $cColonne35 = null;

    #[ORM\Column(name: "C_Colonne36", type: Types::SMALLINT, nullable: true)]
    private ?int $cColonne36 = null;

    #[ORM\Column(name: "C_Colonne37", type: Types::SMALLINT, nullable: true)]
    private ?int $cColonne37 = null;

    #[ORM\Column(name: "C_Colonne38", type: Types::SMALLINT, nullable: true)]
    private ?int $cColonne38 = null;

    #[ORM\Column(name: "C_Colonne39", type: Types::SMALLINT, nullable: true)]
    private ?int $cColonne39 = null;

    #[ORM\Column(name: "C_Colonne40", type: Types::SMALLINT, nullable: true)]
    private ?int $cColonne40 = null;

    #[ORM\Column(name: "C_Colonne41", type: Types::SMALLINT, nullable: true)]
    private ?int $cColonne41 = null;

    #[ORM\Column(name: "C_Colonne42", type: Types::SMALLINT, nullable: true)]
    private ?int $cColonne42 = null;

    #[ORM\Column(name: "C_Colonne43", type: Types::SMALLINT, nullable: true)]
    private ?int $cColonne43 = null;

    #[ORM\Column(name: "C_Colonne44", type: Types::SMALLINT, nullable: true)]
    private ?int $cColonne44 = null;

    #[ORM\Column(name: "C_Colonne45", type: Types::SMALLINT, nullable: true)]
    private ?int $cColonne45 = null;

    #[ORM\Column(name: "C_Colonne46", type: Types::SMALLINT, nullable: true)]
    private ?int $cColonne46 = null;

    #[ORM\Column(name: "C_Colonne47", type: Types::SMALLINT, nullable: true)]
    private ?int $cColonne47 = null;

    #[ORM\Column(name: "C_Colonne48", type: Types::SMALLINT, nullable: true)]
    private ?int $cColonne48 = null;

    #[ORM\Column(name: "C_Colonne49", type: Types::SMALLINT, nullable: true)]
    private ?int $cColonne49 = null;

    #[ORM\Column(name: "C_Colonne50", type: Types::SMALLINT, nullable: true)]
    private ?int $cColonne50 = null;

    #[ORM\Column(name: "C_Colonne51", type: Types::SMALLINT, nullable: true)]
    private ?int $cColonne51 = null;

    #[ORM\Column(name: "C_Colonne52", type: Types::SMALLINT, nullable: true)]
    private ?int $cColonne52 = null;

    #[ORM\Column(name: "C_Colonne53", type: Types::SMALLINT, nullable: true)]
    private ?int $cColonne53 = null;

    #[ORM\Column(name: "C_Colonne54", type: Types::SMALLINT, nullable: true)]
    private ?int $cColonne54 = null;

    #[ORM\Column(name: "C_Colonne55", type: Types::SMALLINT, nullable: true)]
    private ?int $cColonne55 = null;

    #[ORM\Column(name: "C_Colonne56", type: Types::SMALLINT, nullable: true)]
    private ?int $cColonne56 = null;

    #[ORM\Column(name: "C_Colonne57", type: Types::SMALLINT, nullable: true)]
    private ?int $cColonne57 = null;

    #[ORM\Column(name: "C_Colonne58", type: Types::SMALLINT, nullable: true)]
    private ?int $cColonne58 = null;

    #[ORM\Column(name: "C_Colonne59", type: Types::SMALLINT, nullable: true)]
    private ?int $cColonne59 = null;

    #[ORM\Column(name: "C_Colonne60", type: Types::SMALLINT, nullable: true)]
    private ?int $cColonne60 = null;

    #[ORM\Column(name: "C_Colonne61", type: Types::SMALLINT, nullable: true)]
    private ?int $cColonne61 = null;

    #[ORM\Column(name: "C_Colonne62", type: Types::SMALLINT, nullable: true)]
    private ?int $cColonne62 = null;

    #[ORM\Column(name: "C_Colonne63", type: Types::SMALLINT, nullable: true)]
    private ?int $cColonne63 = null;

    #[ORM\Column(name: "C_Colonne64", type: Types::SMALLINT, nullable: true)]
    private ?int $cColonne64 = null;

    #[ORM\Column(name: "C_Colonne65", type: Types::SMALLINT, nullable: true)]
    private ?int $cColonne65 = null;

    #[ORM\Column(name: "C_Colonne66", type: Types::SMALLINT, nullable: true)]
    private ?int $cColonne66 = null;

    #[ORM\Column(name: "C_Colonne67", type: Types::SMALLINT, nullable: true)]
    private ?int $cColonne67 = null;

    #[ORM\Column(name: "C_Colonne68", type: Types::SMALLINT, nullable: true)]
    private ?int $cColonne68 = null;

    #[ORM\Column(name: "C_Colonne69", type: Types::SMALLINT, nullable: true)]
    private ?int $cColonne69 = null;

    #[ORM\Column(name: "C_Colonne70", type: Types::SMALLINT, nullable: true)]
    private ?int $cColonne70 = null;

    #[ORM\Column(name: "C_Colonne71", type: Types::SMALLINT, nullable: true)]
    private ?int $cColonne71 = null;

    #[ORM\Column(name: "C_Colonne72", type: Types::SMALLINT, nullable: true)]
    private ?int $cColonne72 = null;

    #[ORM\Column(name: "C_Colonne73", type: Types::SMALLINT, nullable: true)]
    private ?int $cColonne73 = null;

    #[ORM\Column(name: "C_Colonne74", type: Types::SMALLINT, nullable: true)]
    private ?int $cColonne74 = null;

    #[ORM\Column(name: "C_Colonne75", type: Types::SMALLINT, nullable: true)]
    private ?int $cColonne75 = null;

    #[ORM\Column(name: "C_Colonne76", type: Types::SMALLINT, nullable: true)]
    private ?int $cColonne76 = null;

    #[ORM\Column(name: "C_Colonne77", type: Types::SMALLINT, nullable: true)]
    private ?int $cColonne77 = null;

    #[ORM\Column(name: "C_Colonne78", type: Types::SMALLINT, nullable: true)]
    private ?int $cColonne78 = null;

    #[ORM\Column(name: "C_Colonne79", type: Types::SMALLINT, nullable: true)]
    private ?int $cColonne79 = null;

    #[ORM\Column(name: "C_Colonne80", type: Types::SMALLINT, nullable: true)]
    private ?int $cColonne80 = null;

    #[ORM\Column(name: "C_Colonne81", type: Types::SMALLINT, nullable: true)]
    private ?int $cColonne81 = null;

    #[ORM\Column(name: "C_Colonne82", type: Types::SMALLINT, nullable: true)]
    private ?int $cColonne82 = null;

    #[ORM\Column(name: "C_Colonne83", type: Types::SMALLINT, nullable: true)]
    private ?int $cColonne83 = null;

    #[ORM\Column(name: "C_Colonne84", type: Types::SMALLINT, nullable: true)]
    private ?int $cColonne84 = null;

    #[ORM\Column(name: "C_Colonne85", type: Types::SMALLINT, nullable: true)]
    private ?int $cColonne85 = null;

    #[ORM\Column(name: "C_Colonne86", type: Types::SMALLINT, nullable: true)]
    private ?int $cColonne86 = null;

    #[ORM\Column(name: "C_Colonne87", type: Types::SMALLINT, nullable: true)]
    private ?int $cColonne87 = null;

    #[ORM\Column(name: "C_Colonne88", type: Types::SMALLINT, nullable: true)]
    private ?int $cColonne88 = null;

    #[ORM\Column(name: "C_Colonne89", type: Types::SMALLINT, nullable: true)]
    private ?int $cColonne89 = null;

    #[ORM\Column(name: "C_Colonne90", type: Types::SMALLINT, nullable: true)]
    private ?int $cColonne90 = null;

    #[ORM\Column(name: "C_Colonne91", type: Types::SMALLINT, nullable: true)]
    private ?int $cColonne91 = null;

    #[ORM\Column(name: "C_Colonne92", type: Types::SMALLINT, nullable: true)]
    private ?int $cColonne92 = null;

    #[ORM\Column(name: "C_Colonne93", type: Types::SMALLINT, nullable: true)]
    private ?int $cColonne93 = null;

    #[ORM\Column(name: "C_TypeDoc", type: Types::SMALLINT, nullable: true)]
    private ?int $cTypedoc = null;

    #[ORM\Column(name: "C_BtnTexte01", length: 15, nullable: true)]
    private ?string $cBtntexte01 = null;

    #[ORM\Column(name: "C_BtnTexte02", length: 15, nullable: true)]
    private ?string $cBtntexte02 = null;

    #[ORM\Column(name: "C_BtnTexte03", length: 15, nullable: true)]
    private ?string $cBtntexte03 = null;

    #[ORM\Column(name: "C_BtnTexte04", length: 15, nullable: true)]
    private ?string $cBtntexte04 = null;

    #[ORM\Column(name: "C_BtnTexte05", length: 15, nullable: true)]
    private ?string $cBtntexte05 = null;

    #[ORM\Column(name: "C_BtnTexte06", length: 15, nullable: true)]
    private ?string $cBtntexte06 = null;

    #[ORM\Column(name: "C_BtnTexte07", length: 15, nullable: true)]
    private ?string $cBtntexte07 = null;

    #[ORM\Column(name: "C_BtnTexte08", length: 15, nullable: true)]
    private ?string $cBtntexte08 = null;

    #[ORM\Column(name: "C_BtnTexte09", length: 15, nullable: true)]
    private ?string $cBtntexte09 = null;

    #[ORM\Column(name: "C_BtnTexte10", length: 15, nullable: true)]
    private ?string $cBtntexte10 = null;

    #[ORM\Column(name: "C_BtnTexte11", length: 15, nullable: true)]
    private ?string $cBtntexte11 = null;

    #[ORM\Column(name: "C_BtnTexte12", length: 15, nullable: true)]
    private ?string $cBtntexte12 = null;

    #[ORM\Column(name: "C_BtnTexte13", length: 15, nullable: true)]
    private ?string $cBtntexte13 = null;

    #[ORM\Column(name: "C_BtnTexte14", length: 15, nullable: true)]
    private ?string $cBtntexte14 = null;

    #[ORM\Column(name: "C_BtnTexte15", length: 15, nullable: true)]
    private ?string $cBtntexte15 = null;

    #[ORM\Column(name: "C_BtnTexte16", length: 15, nullable: true)]
    private ?string $cBtntexte16 = null;

    #[ORM\Column(name: "C_BtnTexte17", length: 15, nullable: true)]
    private ?string $cBtntexte17 = null;

    #[ORM\Column(name: "C_BtnTexte18", length: 15, nullable: true)]
    private ?string $cBtntexte18 = null;

    #[ORM\Column(name: "C_BtnTexte19", length: 15, nullable: true)]
    private ?string $cBtntexte19 = null;

    #[ORM\Column(name: "C_BtnTexte20", length: 15, nullable: true)]
    private ?string $cBtntexte20 = null;

    #[ORM\Column(name: "C_BtnTexte21", length: 15, nullable: true)]
    private ?string $cBtntexte21 = null;

    #[ORM\Column(name: "C_BtnTexte22", length: 15, nullable: true)]
    private ?string $cBtntexte22 = null;

    #[ORM\Column(name: "C_BtnTexte23", length: 15, nullable: true)]
    private ?string $cBtntexte23 = null;

    #[ORM\Column(name: "C_BtnTexte24", length: 15, nullable: true)]
    private ?string $cBtntexte24 = null;

    #[ORM\Column(name: "C_BtnTexte25", length: 15, nullable: true)]
    private ?string $cBtntexte25 = null;

    #[ORM\Column(name: "C_BtnTexte26", length: 15, nullable: true)]
    private ?string $cBtntexte26 = null;

    #[ORM\Column(name: "C_BtnTexte27", length: 15, nullable: true)]
    private ?string $cBtntexte27 = null;

    #[ORM\Column(name: "C_BtnTexte28", length: 15, nullable: true)]
    private ?string $cBtntexte28 = null;

    #[ORM\Column(name: "C_BtnTexte29", length: 15, nullable: true)]
    private ?string $cBtntexte29 = null;

    #[ORM\Column(name: "C_BtnTexte30", length: 15, nullable: true)]
    private ?string $cBtntexte30 = null;

    #[ORM\Column(name: "C_BtnTexte31", length: 15, nullable: true)]
    private ?string $cBtntexte31 = null;

    #[ORM\Column(name: "C_BtnTexte32", length: 15, nullable: true)]
    private ?string $cBtntexte32 = null;

    #[ORM\Column(name: "C_BtnTexte33", length: 15, nullable: true)]
    private ?string $cBtntexte33 = null;

    #[ORM\Column(name: "C_BtnTexte34", length: 15, nullable: true)]
    private ?string $cBtntexte34 = null;

    #[ORM\Column(name: "C_BtnTexte35", length: 15, nullable: true)]
    private ?string $cBtntexte35 = null;

    #[ORM\Column(name: "C_BtnTexte36", length: 15, nullable: true)]
    private ?string $cBtntexte36 = null;

    #[ORM\Column(name: "C_BtnTexte37", length: 15, nullable: true)]
    private ?string $cBtntexte37 = null;

    #[ORM\Column(name: "C_BtnFonction01", type: Types::SMALLINT, nullable: true)]
    private ?int $cBtnfonction01 = null;

    #[ORM\Column(name: "C_BtnFonction02", type: Types::SMALLINT, nullable: true)]
    private ?int $cBtnfonction02 = null;

    #[ORM\Column(name: "C_BtnFonction03", type: Types::SMALLINT, nullable: true)]
    private ?int $cBtnfonction03 = null;

    #[ORM\Column(name: "C_BtnFonction04", type: Types::SMALLINT, nullable: true)]
    private ?int $cBtnfonction04 = null;

    #[ORM\Column(name: "C_BtnFonction05", type: Types::SMALLINT, nullable: true)]
    private ?int $cBtnfonction05 = null;

    #[ORM\Column(name: "C_BtnFonction06", type: Types::SMALLINT, nullable: true)]
    private ?int $cBtnfonction06 = null;

    #[ORM\Column(name: "C_BtnFonction07", type: Types::SMALLINT, nullable: true)]
    private ?int $cBtnfonction07 = null;

    #[ORM\Column(name: "C_BtnFonction08", type: Types::SMALLINT, nullable: true)]
    private ?int $cBtnfonction08 = null;

    #[ORM\Column(name: "C_BtnFonction09", type: Types::SMALLINT, nullable: true)]
    private ?int $cBtnfonction09 = null;

    #[ORM\Column(name: "C_BtnFonction10", type: Types::SMALLINT, nullable: true)]
    private ?int $cBtnfonction10 = null;

    #[ORM\Column(name: "C_BtnFonction11", type: Types::SMALLINT, nullable: true)]
    private ?int $cBtnfonction11 = null;

    #[ORM\Column(name: "C_BtnFonction12", type: Types::SMALLINT, nullable: true)]
    private ?int $cBtnfonction12 = null;

    #[ORM\Column(name: "C_BtnFonction13", type: Types::SMALLINT, nullable: true)]
    private ?int $cBtnfonction13 = null;

    #[ORM\Column(name: "C_BtnFonction14", type: Types::SMALLINT, nullable: true)]
    private ?int $cBtnfonction14 = null;

    #[ORM\Column(name: "C_BtnFonction15", type: Types::SMALLINT, nullable: true)]
    private ?int $cBtnfonction15 = null;

    #[ORM\Column(name: "C_BtnFonction16", type: Types::SMALLINT, nullable: true)]
    private ?int $cBtnfonction16 = null;

    #[ORM\Column(name: "C_BtnFonction17", type: Types::SMALLINT, nullable: true)]
    private ?int $cBtnfonction17 = null;

    #[ORM\Column(name: "C_BtnFonction18", type: Types::SMALLINT, nullable: true)]
    private ?int $cBtnfonction18 = null;

    #[ORM\Column(name: "C_BtnFonction19", type: Types::SMALLINT, nullable: true)]
    private ?int $cBtnfonction19 = null;

    #[ORM\Column(name: "C_BtnFonction20", type: Types::SMALLINT, nullable: true)]
    private ?int $cBtnfonction20 = null;

    #[ORM\Column(name: "C_BtnFonction21", type: Types::SMALLINT, nullable: true)]
    private ?int $cBtnfonction21 = null;

    #[ORM\Column(name: "C_BtnFonction22", type: Types::SMALLINT, nullable: true)]
    private ?int $cBtnfonction22 = null;

    #[ORM\Column(name: "C_BtnFonction23", type: Types::SMALLINT, nullable: true)]
    private ?int $cBtnfonction23 = null;

    #[ORM\Column(name: "C_BtnFonction24", type: Types::SMALLINT, nullable: true)]
    private ?int $cBtnfonction24 = null;

    #[ORM\Column(name: "C_BtnFonction25", type: Types::SMALLINT, nullable: true)]
    private ?int $cBtnfonction25 = null;

    #[ORM\Column(name: "C_BtnFonction26", type: Types::SMALLINT, nullable: true)]
    private ?int $cBtnfonction26 = null;

    #[ORM\Column(name: "C_BtnFonction27", type: Types::SMALLINT, nullable: true)]
    private ?int $cBtnfonction27 = null;

    #[ORM\Column(name: "C_BtnFonction28", type: Types::SMALLINT, nullable: true)]
    private ?int $cBtnfonction28 = null;

    #[ORM\Column(name: "C_BtnFonction29", type: Types::SMALLINT, nullable: true)]
    private ?int $cBtnfonction29 = null;

    #[ORM\Column(name: "C_BtnFonction30", type: Types::SMALLINT, nullable: true)]
    private ?int $cBtnfonction30 = null;

    #[ORM\Column(name: "C_BtnFonction31", type: Types::SMALLINT, nullable: true)]
    private ?int $cBtnfonction31 = null;

    #[ORM\Column(name: "C_BtnFonction32", type: Types::SMALLINT, nullable: true)]
    private ?int $cBtnfonction32 = null;

    #[ORM\Column(name: "C_BtnFonction33", type: Types::SMALLINT, nullable: true)]
    private ?int $cBtnfonction33 = null;

    #[ORM\Column(name: "C_BtnFonction34", type: Types::SMALLINT, nullable: true)]
    private ?int $cBtnfonction34 = null;

    #[ORM\Column(name: "C_BtnFonction35", type: Types::SMALLINT, nullable: true)]
    private ?int $cBtnfonction35 = null;

    #[ORM\Column(name: "C_BtnFonction36", type: Types::SMALLINT, nullable: true)]
    private ?int $cBtnfonction36 = null;

    #[ORM\Column(name: "C_BtnFonction37", type: Types::SMALLINT, nullable: true)]
    private ?int $cBtnfonction37 = null;

    #[ORM\Column(name: "cbIndice", type: Types::SMALLINT, nullable: true)]
    private ?int $cbindice = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getCIntitule(): ?string
    {
        return $this->cIntitule;
    }

    public function setCIntitule(?string $cIntitule): static
    {
        $this->cIntitule = $cIntitule;

        return $this;
    }

    public function getCModele(): ?int
    {
        return $this->cModele;
    }

    public function setCModele(?int $cModele): static
    {
        $this->cModele = $cModele;

        return $this;
    }

    public function getCAffiche01(): ?int
    {
        return $this->cAffiche01;
    }

    public function setCAffiche01(?int $cAffiche01): static
    {
        $this->cAffiche01 = $cAffiche01;

        return $this;
    }

    public function getCAffiche02(): ?int
    {
        return $this->cAffiche02;
    }

    public function setCAffiche02(?int $cAffiche02): static
    {
        $this->cAffiche02 = $cAffiche02;

        return $this;
    }

    public function getCAffiche03(): ?int
    {
        return $this->cAffiche03;
    }

    public function setCAffiche03(?int $cAffiche03): static
    {
        $this->cAffiche03 = $cAffiche03;

        return $this;
    }

    public function getCAffiche04(): ?int
    {
        return $this->cAffiche04;
    }

    public function setCAffiche04(?int $cAffiche04): static
    {
        $this->cAffiche04 = $cAffiche04;

        return $this;
    }

    public function getCAffiche05(): ?int
    {
        return $this->cAffiche05;
    }

    public function setCAffiche05(?int $cAffiche05): static
    {
        $this->cAffiche05 = $cAffiche05;

        return $this;
    }

    public function getCAffiche06(): ?int
    {
        return $this->cAffiche06;
    }

    public function setCAffiche06(?int $cAffiche06): static
    {
        $this->cAffiche06 = $cAffiche06;

        return $this;
    }

    public function getCAffiche07(): ?int
    {
        return $this->cAffiche07;
    }

    public function setCAffiche07(?int $cAffiche07): static
    {
        $this->cAffiche07 = $cAffiche07;

        return $this;
    }

    public function getCAffiche08(): ?int
    {
        return $this->cAffiche08;
    }

    public function setCAffiche08(?int $cAffiche08): static
    {
        $this->cAffiche08 = $cAffiche08;

        return $this;
    }

    public function getCAffiche09(): ?int
    {
        return $this->cAffiche09;
    }

    public function setCAffiche09(?int $cAffiche09): static
    {
        $this->cAffiche09 = $cAffiche09;

        return $this;
    }

    public function getCAffiche10(): ?int
    {
        return $this->cAffiche10;
    }

    public function setCAffiche10(?int $cAffiche10): static
    {
        $this->cAffiche10 = $cAffiche10;

        return $this;
    }

    public function getCAffiche11(): ?int
    {
        return $this->cAffiche11;
    }

    public function setCAffiche11(?int $cAffiche11): static
    {
        $this->cAffiche11 = $cAffiche11;

        return $this;
    }

    public function getCAffiche12(): ?int
    {
        return $this->cAffiche12;
    }

    public function setCAffiche12(?int $cAffiche12): static
    {
        $this->cAffiche12 = $cAffiche12;

        return $this;
    }

    public function getCAffiche13(): ?int
    {
        return $this->cAffiche13;
    }

    public function setCAffiche13(?int $cAffiche13): static
    {
        $this->cAffiche13 = $cAffiche13;

        return $this;
    }

    public function getCAffiche14(): ?int
    {
        return $this->cAffiche14;
    }

    public function setCAffiche14(?int $cAffiche14): static
    {
        $this->cAffiche14 = $cAffiche14;

        return $this;
    }

    public function getCAffiche15(): ?int
    {
        return $this->cAffiche15;
    }

    public function setCAffiche15(?int $cAffiche15): static
    {
        $this->cAffiche15 = $cAffiche15;

        return $this;
    }

    public function getCAffiche16(): ?int
    {
        return $this->cAffiche16;
    }

    public function setCAffiche16(?int $cAffiche16): static
    {
        $this->cAffiche16 = $cAffiche16;

        return $this;
    }

    public function getCAffiche17(): ?int
    {
        return $this->cAffiche17;
    }

    public function setCAffiche17(?int $cAffiche17): static
    {
        $this->cAffiche17 = $cAffiche17;

        return $this;
    }

    public function getCAffiche18(): ?int
    {
        return $this->cAffiche18;
    }

    public function setCAffiche18(?int $cAffiche18): static
    {
        $this->cAffiche18 = $cAffiche18;

        return $this;
    }

    public function getCAffiche19(): ?int
    {
        return $this->cAffiche19;
    }

    public function setCAffiche19(?int $cAffiche19): static
    {
        $this->cAffiche19 = $cAffiche19;

        return $this;
    }

    public function getCAffiche20(): ?int
    {
        return $this->cAffiche20;
    }

    public function setCAffiche20(?int $cAffiche20): static
    {
        $this->cAffiche20 = $cAffiche20;

        return $this;
    }

    public function getCAffiche21(): ?int
    {
        return $this->cAffiche21;
    }

    public function setCAffiche21(?int $cAffiche21): static
    {
        $this->cAffiche21 = $cAffiche21;

        return $this;
    }

    public function getCAffiche22(): ?int
    {
        return $this->cAffiche22;
    }

    public function setCAffiche22(?int $cAffiche22): static
    {
        $this->cAffiche22 = $cAffiche22;

        return $this;
    }

    public function getCAffiche23(): ?int
    {
        return $this->cAffiche23;
    }

    public function setCAffiche23(?int $cAffiche23): static
    {
        $this->cAffiche23 = $cAffiche23;

        return $this;
    }

    public function getCAffiche24(): ?int
    {
        return $this->cAffiche24;
    }

    public function setCAffiche24(?int $cAffiche24): static
    {
        $this->cAffiche24 = $cAffiche24;

        return $this;
    }

    public function getCAffiche25(): ?int
    {
        return $this->cAffiche25;
    }

    public function setCAffiche25(?int $cAffiche25): static
    {
        $this->cAffiche25 = $cAffiche25;

        return $this;
    }

    public function getCAffiche26(): ?int
    {
        return $this->cAffiche26;
    }

    public function setCAffiche26(?int $cAffiche26): static
    {
        $this->cAffiche26 = $cAffiche26;

        return $this;
    }

    public function getCAffiche27(): ?int
    {
        return $this->cAffiche27;
    }

    public function setCAffiche27(?int $cAffiche27): static
    {
        $this->cAffiche27 = $cAffiche27;

        return $this;
    }

    public function getCAffiche28(): ?int
    {
        return $this->cAffiche28;
    }

    public function setCAffiche28(?int $cAffiche28): static
    {
        $this->cAffiche28 = $cAffiche28;

        return $this;
    }

    public function getCAffiche29(): ?int
    {
        return $this->cAffiche29;
    }

    public function setCAffiche29(?int $cAffiche29): static
    {
        $this->cAffiche29 = $cAffiche29;

        return $this;
    }

    public function getCAffiche30(): ?int
    {
        return $this->cAffiche30;
    }

    public function setCAffiche30(?int $cAffiche30): static
    {
        $this->cAffiche30 = $cAffiche30;

        return $this;
    }

    public function getCAffiche31(): ?int
    {
        return $this->cAffiche31;
    }

    public function setCAffiche31(?int $cAffiche31): static
    {
        $this->cAffiche31 = $cAffiche31;

        return $this;
    }

    public function getCAffiche32(): ?int
    {
        return $this->cAffiche32;
    }

    public function setCAffiche32(?int $cAffiche32): static
    {
        $this->cAffiche32 = $cAffiche32;

        return $this;
    }

    public function getCAffiche33(): ?int
    {
        return $this->cAffiche33;
    }

    public function setCAffiche33(?int $cAffiche33): static
    {
        $this->cAffiche33 = $cAffiche33;

        return $this;
    }

    public function getCAffiche34(): ?int
    {
        return $this->cAffiche34;
    }

    public function setCAffiche34(?int $cAffiche34): static
    {
        $this->cAffiche34 = $cAffiche34;

        return $this;
    }

    public function getCAffiche35(): ?int
    {
        return $this->cAffiche35;
    }

    public function setCAffiche35(?int $cAffiche35): static
    {
        $this->cAffiche35 = $cAffiche35;

        return $this;
    }

    public function getCAffiche36(): ?int
    {
        return $this->cAffiche36;
    }

    public function setCAffiche36(?int $cAffiche36): static
    {
        $this->cAffiche36 = $cAffiche36;

        return $this;
    }

    public function getCAffiche37(): ?int
    {
        return $this->cAffiche37;
    }

    public function setCAffiche37(?int $cAffiche37): static
    {
        $this->cAffiche37 = $cAffiche37;

        return $this;
    }

    public function getCColonne01(): ?int
    {
        return $this->cColonne01;
    }

    public function setCColonne01(?int $cColonne01): static
    {
        $this->cColonne01 = $cColonne01;

        return $this;
    }

    public function getCColonne02(): ?int
    {
        return $this->cColonne02;
    }

    public function setCColonne02(?int $cColonne02): static
    {
        $this->cColonne02 = $cColonne02;

        return $this;
    }

    public function getCColonne03(): ?int
    {
        return $this->cColonne03;
    }

    public function setCColonne03(?int $cColonne03): static
    {
        $this->cColonne03 = $cColonne03;

        return $this;
    }

    public function getCColonne04(): ?int
    {
        return $this->cColonne04;
    }

    public function setCColonne04(?int $cColonne04): static
    {
        $this->cColonne04 = $cColonne04;

        return $this;
    }

    public function getCColonne05(): ?int
    {
        return $this->cColonne05;
    }

    public function setCColonne05(?int $cColonne05): static
    {
        $this->cColonne05 = $cColonne05;

        return $this;
    }

    public function getCColonne06(): ?int
    {
        return $this->cColonne06;
    }

    public function setCColonne06(?int $cColonne06): static
    {
        $this->cColonne06 = $cColonne06;

        return $this;
    }

    public function getCColonne07(): ?int
    {
        return $this->cColonne07;
    }

    public function setCColonne07(?int $cColonne07): static
    {
        $this->cColonne07 = $cColonne07;

        return $this;
    }

    public function getCColonne08(): ?int
    {
        return $this->cColonne08;
    }

    public function setCColonne08(?int $cColonne08): static
    {
        $this->cColonne08 = $cColonne08;

        return $this;
    }

    public function getCColonne09(): ?int
    {
        return $this->cColonne09;
    }

    public function setCColonne09(?int $cColonne09): static
    {
        $this->cColonne09 = $cColonne09;

        return $this;
    }

    public function getCColonne10(): ?int
    {
        return $this->cColonne10;
    }

    public function setCColonne10(?int $cColonne10): static
    {
        $this->cColonne10 = $cColonne10;

        return $this;
    }

    public function getCColonne11(): ?int
    {
        return $this->cColonne11;
    }

    public function setCColonne11(?int $cColonne11): static
    {
        $this->cColonne11 = $cColonne11;

        return $this;
    }

    public function getCColonne12(): ?int
    {
        return $this->cColonne12;
    }

    public function setCColonne12(?int $cColonne12): static
    {
        $this->cColonne12 = $cColonne12;

        return $this;
    }

    public function getCColonne13(): ?int
    {
        return $this->cColonne13;
    }

    public function setCColonne13(?int $cColonne13): static
    {
        $this->cColonne13 = $cColonne13;

        return $this;
    }

    public function getCColonne14(): ?int
    {
        return $this->cColonne14;
    }

    public function setCColonne14(?int $cColonne14): static
    {
        $this->cColonne14 = $cColonne14;

        return $this;
    }

    public function getCColonne15(): ?int
    {
        return $this->cColonne15;
    }

    public function setCColonne15(?int $cColonne15): static
    {
        $this->cColonne15 = $cColonne15;

        return $this;
    }

    public function getCColonne16(): ?int
    {
        return $this->cColonne16;
    }

    public function setCColonne16(?int $cColonne16): static
    {
        $this->cColonne16 = $cColonne16;

        return $this;
    }

    public function getCColonne17(): ?int
    {
        return $this->cColonne17;
    }

    public function setCColonne17(?int $cColonne17): static
    {
        $this->cColonne17 = $cColonne17;

        return $this;
    }

    public function getCColonne18(): ?int
    {
        return $this->cColonne18;
    }

    public function setCColonne18(?int $cColonne18): static
    {
        $this->cColonne18 = $cColonne18;

        return $this;
    }

    public function getCColonne19(): ?int
    {
        return $this->cColonne19;
    }

    public function setCColonne19(?int $cColonne19): static
    {
        $this->cColonne19 = $cColonne19;

        return $this;
    }

    public function getCColonne20(): ?int
    {
        return $this->cColonne20;
    }

    public function setCColonne20(?int $cColonne20): static
    {
        $this->cColonne20 = $cColonne20;

        return $this;
    }

    public function getCColonne21(): ?int
    {
        return $this->cColonne21;
    }

    public function setCColonne21(?int $cColonne21): static
    {
        $this->cColonne21 = $cColonne21;

        return $this;
    }

    public function getCColonne22(): ?int
    {
        return $this->cColonne22;
    }

    public function setCColonne22(?int $cColonne22): static
    {
        $this->cColonne22 = $cColonne22;

        return $this;
    }

    public function getCColonne23(): ?int
    {
        return $this->cColonne23;
    }

    public function setCColonne23(?int $cColonne23): static
    {
        $this->cColonne23 = $cColonne23;

        return $this;
    }

    public function getCColonne24(): ?int
    {
        return $this->cColonne24;
    }

    public function setCColonne24(?int $cColonne24): static
    {
        $this->cColonne24 = $cColonne24;

        return $this;
    }

    public function getCColonne25(): ?int
    {
        return $this->cColonne25;
    }

    public function setCColonne25(?int $cColonne25): static
    {
        $this->cColonne25 = $cColonne25;

        return $this;
    }

    public function getCColonne26(): ?int
    {
        return $this->cColonne26;
    }

    public function setCColonne26(?int $cColonne26): static
    {
        $this->cColonne26 = $cColonne26;

        return $this;
    }

    public function getCColonne27(): ?int
    {
        return $this->cColonne27;
    }

    public function setCColonne27(?int $cColonne27): static
    {
        $this->cColonne27 = $cColonne27;

        return $this;
    }

    public function getCColonne28(): ?int
    {
        return $this->cColonne28;
    }

    public function setCColonne28(?int $cColonne28): static
    {
        $this->cColonne28 = $cColonne28;

        return $this;
    }

    public function getCColonne29(): ?int
    {
        return $this->cColonne29;
    }

    public function setCColonne29(?int $cColonne29): static
    {
        $this->cColonne29 = $cColonne29;

        return $this;
    }

    public function getCColonne30(): ?int
    {
        return $this->cColonne30;
    }

    public function setCColonne30(?int $cColonne30): static
    {
        $this->cColonne30 = $cColonne30;

        return $this;
    }

    public function getCColonne31(): ?int
    {
        return $this->cColonne31;
    }

    public function setCColonne31(?int $cColonne31): static
    {
        $this->cColonne31 = $cColonne31;

        return $this;
    }

    public function getCColonne32(): ?int
    {
        return $this->cColonne32;
    }

    public function setCColonne32(?int $cColonne32): static
    {
        $this->cColonne32 = $cColonne32;

        return $this;
    }

    public function getCColonne33(): ?int
    {
        return $this->cColonne33;
    }

    public function setCColonne33(?int $cColonne33): static
    {
        $this->cColonne33 = $cColonne33;

        return $this;
    }

    public function getCColonne34(): ?int
    {
        return $this->cColonne34;
    }

    public function setCColonne34(?int $cColonne34): static
    {
        $this->cColonne34 = $cColonne34;

        return $this;
    }

    public function getCColonne35(): ?int
    {
        return $this->cColonne35;
    }

    public function setCColonne35(?int $cColonne35): static
    {
        $this->cColonne35 = $cColonne35;

        return $this;
    }

    public function getCColonne36(): ?int
    {
        return $this->cColonne36;
    }

    public function setCColonne36(?int $cColonne36): static
    {
        $this->cColonne36 = $cColonne36;

        return $this;
    }

    public function getCColonne37(): ?int
    {
        return $this->cColonne37;
    }

    public function setCColonne37(?int $cColonne37): static
    {
        $this->cColonne37 = $cColonne37;

        return $this;
    }

    public function getCColonne38(): ?int
    {
        return $this->cColonne38;
    }

    public function setCColonne38(?int $cColonne38): static
    {
        $this->cColonne38 = $cColonne38;

        return $this;
    }

    public function getCColonne39(): ?int
    {
        return $this->cColonne39;
    }

    public function setCColonne39(?int $cColonne39): static
    {
        $this->cColonne39 = $cColonne39;

        return $this;
    }

    public function getCColonne40(): ?int
    {
        return $this->cColonne40;
    }

    public function setCColonne40(?int $cColonne40): static
    {
        $this->cColonne40 = $cColonne40;

        return $this;
    }

    public function getCColonne41(): ?int
    {
        return $this->cColonne41;
    }

    public function setCColonne41(?int $cColonne41): static
    {
        $this->cColonne41 = $cColonne41;

        return $this;
    }

    public function getCColonne42(): ?int
    {
        return $this->cColonne42;
    }

    public function setCColonne42(?int $cColonne42): static
    {
        $this->cColonne42 = $cColonne42;

        return $this;
    }

    public function getCColonne43(): ?int
    {
        return $this->cColonne43;
    }

    public function setCColonne43(?int $cColonne43): static
    {
        $this->cColonne43 = $cColonne43;

        return $this;
    }

    public function getCColonne44(): ?int
    {
        return $this->cColonne44;
    }

    public function setCColonne44(?int $cColonne44): static
    {
        $this->cColonne44 = $cColonne44;

        return $this;
    }

    public function getCColonne45(): ?int
    {
        return $this->cColonne45;
    }

    public function setCColonne45(?int $cColonne45): static
    {
        $this->cColonne45 = $cColonne45;

        return $this;
    }

    public function getCColonne46(): ?int
    {
        return $this->cColonne46;
    }

    public function setCColonne46(?int $cColonne46): static
    {
        $this->cColonne46 = $cColonne46;

        return $this;
    }

    public function getCColonne47(): ?int
    {
        return $this->cColonne47;
    }

    public function setCColonne47(?int $cColonne47): static
    {
        $this->cColonne47 = $cColonne47;

        return $this;
    }

    public function getCColonne48(): ?int
    {
        return $this->cColonne48;
    }

    public function setCColonne48(?int $cColonne48): static
    {
        $this->cColonne48 = $cColonne48;

        return $this;
    }

    public function getCColonne49(): ?int
    {
        return $this->cColonne49;
    }

    public function setCColonne49(?int $cColonne49): static
    {
        $this->cColonne49 = $cColonne49;

        return $this;
    }

    public function getCColonne50(): ?int
    {
        return $this->cColonne50;
    }

    public function setCColonne50(?int $cColonne50): static
    {
        $this->cColonne50 = $cColonne50;

        return $this;
    }

    public function getCColonne51(): ?int
    {
        return $this->cColonne51;
    }

    public function setCColonne51(?int $cColonne51): static
    {
        $this->cColonne51 = $cColonne51;

        return $this;
    }

    public function getCColonne52(): ?int
    {
        return $this->cColonne52;
    }

    public function setCColonne52(?int $cColonne52): static
    {
        $this->cColonne52 = $cColonne52;

        return $this;
    }

    public function getCColonne53(): ?int
    {
        return $this->cColonne53;
    }

    public function setCColonne53(?int $cColonne53): static
    {
        $this->cColonne53 = $cColonne53;

        return $this;
    }

    public function getCColonne54(): ?int
    {
        return $this->cColonne54;
    }

    public function setCColonne54(?int $cColonne54): static
    {
        $this->cColonne54 = $cColonne54;

        return $this;
    }

    public function getCColonne55(): ?int
    {
        return $this->cColonne55;
    }

    public function setCColonne55(?int $cColonne55): static
    {
        $this->cColonne55 = $cColonne55;

        return $this;
    }

    public function getCColonne56(): ?int
    {
        return $this->cColonne56;
    }

    public function setCColonne56(?int $cColonne56): static
    {
        $this->cColonne56 = $cColonne56;

        return $this;
    }

    public function getCColonne57(): ?int
    {
        return $this->cColonne57;
    }

    public function setCColonne57(?int $cColonne57): static
    {
        $this->cColonne57 = $cColonne57;

        return $this;
    }

    public function getCColonne58(): ?int
    {
        return $this->cColonne58;
    }

    public function setCColonne58(?int $cColonne58): static
    {
        $this->cColonne58 = $cColonne58;

        return $this;
    }

    public function getCColonne59(): ?int
    {
        return $this->cColonne59;
    }

    public function setCColonne59(?int $cColonne59): static
    {
        $this->cColonne59 = $cColonne59;

        return $this;
    }

    public function getCColonne60(): ?int
    {
        return $this->cColonne60;
    }

    public function setCColonne60(?int $cColonne60): static
    {
        $this->cColonne60 = $cColonne60;

        return $this;
    }

    public function getCColonne61(): ?int
    {
        return $this->cColonne61;
    }

    public function setCColonne61(?int $cColonne61): static
    {
        $this->cColonne61 = $cColonne61;

        return $this;
    }

    public function getCColonne62(): ?int
    {
        return $this->cColonne62;
    }

    public function setCColonne62(?int $cColonne62): static
    {
        $this->cColonne62 = $cColonne62;

        return $this;
    }

    public function getCColonne63(): ?int
    {
        return $this->cColonne63;
    }

    public function setCColonne63(?int $cColonne63): static
    {
        $this->cColonne63 = $cColonne63;

        return $this;
    }

    public function getCColonne64(): ?int
    {
        return $this->cColonne64;
    }

    public function setCColonne64(?int $cColonne64): static
    {
        $this->cColonne64 = $cColonne64;

        return $this;
    }

    public function getCColonne65(): ?int
    {
        return $this->cColonne65;
    }

    public function setCColonne65(?int $cColonne65): static
    {
        $this->cColonne65 = $cColonne65;

        return $this;
    }

    public function getCColonne66(): ?int
    {
        return $this->cColonne66;
    }

    public function setCColonne66(?int $cColonne66): static
    {
        $this->cColonne66 = $cColonne66;

        return $this;
    }

    public function getCColonne67(): ?int
    {
        return $this->cColonne67;
    }

    public function setCColonne67(?int $cColonne67): static
    {
        $this->cColonne67 = $cColonne67;

        return $this;
    }

    public function getCColonne68(): ?int
    {
        return $this->cColonne68;
    }

    public function setCColonne68(?int $cColonne68): static
    {
        $this->cColonne68 = $cColonne68;

        return $this;
    }

    public function getCColonne69(): ?int
    {
        return $this->cColonne69;
    }

    public function setCColonne69(?int $cColonne69): static
    {
        $this->cColonne69 = $cColonne69;

        return $this;
    }

    public function getCColonne70(): ?int
    {
        return $this->cColonne70;
    }

    public function setCColonne70(?int $cColonne70): static
    {
        $this->cColonne70 = $cColonne70;

        return $this;
    }

    public function getCColonne71(): ?int
    {
        return $this->cColonne71;
    }

    public function setCColonne71(?int $cColonne71): static
    {
        $this->cColonne71 = $cColonne71;

        return $this;
    }

    public function getCColonne72(): ?int
    {
        return $this->cColonne72;
    }

    public function setCColonne72(?int $cColonne72): static
    {
        $this->cColonne72 = $cColonne72;

        return $this;
    }

    public function getCColonne73(): ?int
    {
        return $this->cColonne73;
    }

    public function setCColonne73(?int $cColonne73): static
    {
        $this->cColonne73 = $cColonne73;

        return $this;
    }

    public function getCColonne74(): ?int
    {
        return $this->cColonne74;
    }

    public function setCColonne74(?int $cColonne74): static
    {
        $this->cColonne74 = $cColonne74;

        return $this;
    }

    public function getCColonne75(): ?int
    {
        return $this->cColonne75;
    }

    public function setCColonne75(?int $cColonne75): static
    {
        $this->cColonne75 = $cColonne75;

        return $this;
    }

    public function getCColonne76(): ?int
    {
        return $this->cColonne76;
    }

    public function setCColonne76(?int $cColonne76): static
    {
        $this->cColonne76 = $cColonne76;

        return $this;
    }

    public function getCColonne77(): ?int
    {
        return $this->cColonne77;
    }

    public function setCColonne77(?int $cColonne77): static
    {
        $this->cColonne77 = $cColonne77;

        return $this;
    }

    public function getCColonne78(): ?int
    {
        return $this->cColonne78;
    }

    public function setCColonne78(?int $cColonne78): static
    {
        $this->cColonne78 = $cColonne78;

        return $this;
    }

    public function getCColonne79(): ?int
    {
        return $this->cColonne79;
    }

    public function setCColonne79(?int $cColonne79): static
    {
        $this->cColonne79 = $cColonne79;

        return $this;
    }

    public function getCColonne80(): ?int
    {
        return $this->cColonne80;
    }

    public function setCColonne80(?int $cColonne80): static
    {
        $this->cColonne80 = $cColonne80;

        return $this;
    }

    public function getCColonne81(): ?int
    {
        return $this->cColonne81;
    }

    public function setCColonne81(?int $cColonne81): static
    {
        $this->cColonne81 = $cColonne81;

        return $this;
    }

    public function getCColonne82(): ?int
    {
        return $this->cColonne82;
    }

    public function setCColonne82(?int $cColonne82): static
    {
        $this->cColonne82 = $cColonne82;

        return $this;
    }

    public function getCColonne83(): ?int
    {
        return $this->cColonne83;
    }

    public function setCColonne83(?int $cColonne83): static
    {
        $this->cColonne83 = $cColonne83;

        return $this;
    }

    public function getCColonne84(): ?int
    {
        return $this->cColonne84;
    }

    public function setCColonne84(?int $cColonne84): static
    {
        $this->cColonne84 = $cColonne84;

        return $this;
    }

    public function getCColonne85(): ?int
    {
        return $this->cColonne85;
    }

    public function setCColonne85(?int $cColonne85): static
    {
        $this->cColonne85 = $cColonne85;

        return $this;
    }

    public function getCColonne86(): ?int
    {
        return $this->cColonne86;
    }

    public function setCColonne86(?int $cColonne86): static
    {
        $this->cColonne86 = $cColonne86;

        return $this;
    }

    public function getCColonne87(): ?int
    {
        return $this->cColonne87;
    }

    public function setCColonne87(?int $cColonne87): static
    {
        $this->cColonne87 = $cColonne87;

        return $this;
    }

    public function getCColonne88(): ?int
    {
        return $this->cColonne88;
    }

    public function setCColonne88(?int $cColonne88): static
    {
        $this->cColonne88 = $cColonne88;

        return $this;
    }

    public function getCColonne89(): ?int
    {
        return $this->cColonne89;
    }

    public function setCColonne89(?int $cColonne89): static
    {
        $this->cColonne89 = $cColonne89;

        return $this;
    }

    public function getCColonne90(): ?int
    {
        return $this->cColonne90;
    }

    public function setCColonne90(?int $cColonne90): static
    {
        $this->cColonne90 = $cColonne90;

        return $this;
    }

    public function getCColonne91(): ?int
    {
        return $this->cColonne91;
    }

    public function setCColonne91(?int $cColonne91): static
    {
        $this->cColonne91 = $cColonne91;

        return $this;
    }

    public function getCColonne92(): ?int
    {
        return $this->cColonne92;
    }

    public function setCColonne92(?int $cColonne92): static
    {
        $this->cColonne92 = $cColonne92;

        return $this;
    }

    public function getCColonne93(): ?int
    {
        return $this->cColonne93;
    }

    public function setCColonne93(?int $cColonne93): static
    {
        $this->cColonne93 = $cColonne93;

        return $this;
    }

    public function getCTypedoc(): ?int
    {
        return $this->cTypedoc;
    }

    public function setCTypedoc(?int $cTypedoc): static
    {
        $this->cTypedoc = $cTypedoc;

        return $this;
    }

    public function getCBtntexte01(): ?string
    {
        return $this->cBtntexte01;
    }

    public function setCBtntexte01(?string $cBtntexte01): static
    {
        $this->cBtntexte01 = $cBtntexte01;

        return $this;
    }

    public function getCBtntexte02(): ?string
    {
        return $this->cBtntexte02;
    }

    public function setCBtntexte02(?string $cBtntexte02): static
    {
        $this->cBtntexte02 = $cBtntexte02;

        return $this;
    }

    public function getCBtntexte03(): ?string
    {
        return $this->cBtntexte03;
    }

    public function setCBtntexte03(?string $cBtntexte03): static
    {
        $this->cBtntexte03 = $cBtntexte03;

        return $this;
    }

    public function getCBtntexte04(): ?string
    {
        return $this->cBtntexte04;
    }

    public function setCBtntexte04(?string $cBtntexte04): static
    {
        $this->cBtntexte04 = $cBtntexte04;

        return $this;
    }

    public function getCBtntexte05(): ?string
    {
        return $this->cBtntexte05;
    }

    public function setCBtntexte05(?string $cBtntexte05): static
    {
        $this->cBtntexte05 = $cBtntexte05;

        return $this;
    }

    public function getCBtntexte06(): ?string
    {
        return $this->cBtntexte06;
    }

    public function setCBtntexte06(?string $cBtntexte06): static
    {
        $this->cBtntexte06 = $cBtntexte06;

        return $this;
    }

    public function getCBtntexte07(): ?string
    {
        return $this->cBtntexte07;
    }

    public function setCBtntexte07(?string $cBtntexte07): static
    {
        $this->cBtntexte07 = $cBtntexte07;

        return $this;
    }

    public function getCBtntexte08(): ?string
    {
        return $this->cBtntexte08;
    }

    public function setCBtntexte08(?string $cBtntexte08): static
    {
        $this->cBtntexte08 = $cBtntexte08;

        return $this;
    }

    public function getCBtntexte09(): ?string
    {
        return $this->cBtntexte09;
    }

    public function setCBtntexte09(?string $cBtntexte09): static
    {
        $this->cBtntexte09 = $cBtntexte09;

        return $this;
    }

    public function getCBtntexte10(): ?string
    {
        return $this->cBtntexte10;
    }

    public function setCBtntexte10(?string $cBtntexte10): static
    {
        $this->cBtntexte10 = $cBtntexte10;

        return $this;
    }

    public function getCBtntexte11(): ?string
    {
        return $this->cBtntexte11;
    }

    public function setCBtntexte11(?string $cBtntexte11): static
    {
        $this->cBtntexte11 = $cBtntexte11;

        return $this;
    }

    public function getCBtntexte12(): ?string
    {
        return $this->cBtntexte12;
    }

    public function setCBtntexte12(?string $cBtntexte12): static
    {
        $this->cBtntexte12 = $cBtntexte12;

        return $this;
    }

    public function getCBtntexte13(): ?string
    {
        return $this->cBtntexte13;
    }

    public function setCBtntexte13(?string $cBtntexte13): static
    {
        $this->cBtntexte13 = $cBtntexte13;

        return $this;
    }

    public function getCBtntexte14(): ?string
    {
        return $this->cBtntexte14;
    }

    public function setCBtntexte14(?string $cBtntexte14): static
    {
        $this->cBtntexte14 = $cBtntexte14;

        return $this;
    }

    public function getCBtntexte15(): ?string
    {
        return $this->cBtntexte15;
    }

    public function setCBtntexte15(?string $cBtntexte15): static
    {
        $this->cBtntexte15 = $cBtntexte15;

        return $this;
    }

    public function getCBtntexte16(): ?string
    {
        return $this->cBtntexte16;
    }

    public function setCBtntexte16(?string $cBtntexte16): static
    {
        $this->cBtntexte16 = $cBtntexte16;

        return $this;
    }

    public function getCBtntexte17(): ?string
    {
        return $this->cBtntexte17;
    }

    public function setCBtntexte17(?string $cBtntexte17): static
    {
        $this->cBtntexte17 = $cBtntexte17;

        return $this;
    }

    public function getCBtntexte18(): ?string
    {
        return $this->cBtntexte18;
    }

    public function setCBtntexte18(?string $cBtntexte18): static
    {
        $this->cBtntexte18 = $cBtntexte18;

        return $this;
    }

    public function getCBtntexte19(): ?string
    {
        return $this->cBtntexte19;
    }

    public function setCBtntexte19(?string $cBtntexte19): static
    {
        $this->cBtntexte19 = $cBtntexte19;

        return $this;
    }

    public function getCBtntexte20(): ?string
    {
        return $this->cBtntexte20;
    }

    public function setCBtntexte20(?string $cBtntexte20): static
    {
        $this->cBtntexte20 = $cBtntexte20;

        return $this;
    }

    public function getCBtntexte21(): ?string
    {
        return $this->cBtntexte21;
    }

    public function setCBtntexte21(?string $cBtntexte21): static
    {
        $this->cBtntexte21 = $cBtntexte21;

        return $this;
    }

    public function getCBtntexte22(): ?string
    {
        return $this->cBtntexte22;
    }

    public function setCBtntexte22(?string $cBtntexte22): static
    {
        $this->cBtntexte22 = $cBtntexte22;

        return $this;
    }

    public function getCBtntexte23(): ?string
    {
        return $this->cBtntexte23;
    }

    public function setCBtntexte23(?string $cBtntexte23): static
    {
        $this->cBtntexte23 = $cBtntexte23;

        return $this;
    }

    public function getCBtntexte24(): ?string
    {
        return $this->cBtntexte24;
    }

    public function setCBtntexte24(?string $cBtntexte24): static
    {
        $this->cBtntexte24 = $cBtntexte24;

        return $this;
    }

    public function getCBtntexte25(): ?string
    {
        return $this->cBtntexte25;
    }

    public function setCBtntexte25(?string $cBtntexte25): static
    {
        $this->cBtntexte25 = $cBtntexte25;

        return $this;
    }

    public function getCBtntexte26(): ?string
    {
        return $this->cBtntexte26;
    }

    public function setCBtntexte26(?string $cBtntexte26): static
    {
        $this->cBtntexte26 = $cBtntexte26;

        return $this;
    }

    public function getCBtntexte27(): ?string
    {
        return $this->cBtntexte27;
    }

    public function setCBtntexte27(?string $cBtntexte27): static
    {
        $this->cBtntexte27 = $cBtntexte27;

        return $this;
    }

    public function getCBtntexte28(): ?string
    {
        return $this->cBtntexte28;
    }

    public function setCBtntexte28(?string $cBtntexte28): static
    {
        $this->cBtntexte28 = $cBtntexte28;

        return $this;
    }

    public function getCBtntexte29(): ?string
    {
        return $this->cBtntexte29;
    }

    public function setCBtntexte29(?string $cBtntexte29): static
    {
        $this->cBtntexte29 = $cBtntexte29;

        return $this;
    }

    public function getCBtntexte30(): ?string
    {
        return $this->cBtntexte30;
    }

    public function setCBtntexte30(?string $cBtntexte30): static
    {
        $this->cBtntexte30 = $cBtntexte30;

        return $this;
    }

    public function getCBtntexte31(): ?string
    {
        return $this->cBtntexte31;
    }

    public function setCBtntexte31(?string $cBtntexte31): static
    {
        $this->cBtntexte31 = $cBtntexte31;

        return $this;
    }

    public function getCBtntexte32(): ?string
    {
        return $this->cBtntexte32;
    }

    public function setCBtntexte32(?string $cBtntexte32): static
    {
        $this->cBtntexte32 = $cBtntexte32;

        return $this;
    }

    public function getCBtntexte33(): ?string
    {
        return $this->cBtntexte33;
    }

    public function setCBtntexte33(?string $cBtntexte33): static
    {
        $this->cBtntexte33 = $cBtntexte33;

        return $this;
    }

    public function getCBtntexte34(): ?string
    {
        return $this->cBtntexte34;
    }

    public function setCBtntexte34(?string $cBtntexte34): static
    {
        $this->cBtntexte34 = $cBtntexte34;

        return $this;
    }

    public function getCBtntexte35(): ?string
    {
        return $this->cBtntexte35;
    }

    public function setCBtntexte35(?string $cBtntexte35): static
    {
        $this->cBtntexte35 = $cBtntexte35;

        return $this;
    }

    public function getCBtntexte36(): ?string
    {
        return $this->cBtntexte36;
    }

    public function setCBtntexte36(?string $cBtntexte36): static
    {
        $this->cBtntexte36 = $cBtntexte36;

        return $this;
    }

    public function getCBtntexte37(): ?string
    {
        return $this->cBtntexte37;
    }

    public function setCBtntexte37(?string $cBtntexte37): static
    {
        $this->cBtntexte37 = $cBtntexte37;

        return $this;
    }

    public function getCBtnfonction01(): ?int
    {
        return $this->cBtnfonction01;
    }

    public function setCBtnfonction01(?int $cBtnfonction01): static
    {
        $this->cBtnfonction01 = $cBtnfonction01;

        return $this;
    }

    public function getCBtnfonction02(): ?int
    {
        return $this->cBtnfonction02;
    }

    public function setCBtnfonction02(?int $cBtnfonction02): static
    {
        $this->cBtnfonction02 = $cBtnfonction02;

        return $this;
    }

    public function getCBtnfonction03(): ?int
    {
        return $this->cBtnfonction03;
    }

    public function setCBtnfonction03(?int $cBtnfonction03): static
    {
        $this->cBtnfonction03 = $cBtnfonction03;

        return $this;
    }

    public function getCBtnfonction04(): ?int
    {
        return $this->cBtnfonction04;
    }

    public function setCBtnfonction04(?int $cBtnfonction04): static
    {
        $this->cBtnfonction04 = $cBtnfonction04;

        return $this;
    }

    public function getCBtnfonction05(): ?int
    {
        return $this->cBtnfonction05;
    }

    public function setCBtnfonction05(?int $cBtnfonction05): static
    {
        $this->cBtnfonction05 = $cBtnfonction05;

        return $this;
    }

    public function getCBtnfonction06(): ?int
    {
        return $this->cBtnfonction06;
    }

    public function setCBtnfonction06(?int $cBtnfonction06): static
    {
        $this->cBtnfonction06 = $cBtnfonction06;

        return $this;
    }

    public function getCBtnfonction07(): ?int
    {
        return $this->cBtnfonction07;
    }

    public function setCBtnfonction07(?int $cBtnfonction07): static
    {
        $this->cBtnfonction07 = $cBtnfonction07;

        return $this;
    }

    public function getCBtnfonction08(): ?int
    {
        return $this->cBtnfonction08;
    }

    public function setCBtnfonction08(?int $cBtnfonction08): static
    {
        $this->cBtnfonction08 = $cBtnfonction08;

        return $this;
    }

    public function getCBtnfonction09(): ?int
    {
        return $this->cBtnfonction09;
    }

    public function setCBtnfonction09(?int $cBtnfonction09): static
    {
        $this->cBtnfonction09 = $cBtnfonction09;

        return $this;
    }

    public function getCBtnfonction10(): ?int
    {
        return $this->cBtnfonction10;
    }

    public function setCBtnfonction10(?int $cBtnfonction10): static
    {
        $this->cBtnfonction10 = $cBtnfonction10;

        return $this;
    }

    public function getCBtnfonction11(): ?int
    {
        return $this->cBtnfonction11;
    }

    public function setCBtnfonction11(?int $cBtnfonction11): static
    {
        $this->cBtnfonction11 = $cBtnfonction11;

        return $this;
    }

    public function getCBtnfonction12(): ?int
    {
        return $this->cBtnfonction12;
    }

    public function setCBtnfonction12(?int $cBtnfonction12): static
    {
        $this->cBtnfonction12 = $cBtnfonction12;

        return $this;
    }

    public function getCBtnfonction13(): ?int
    {
        return $this->cBtnfonction13;
    }

    public function setCBtnfonction13(?int $cBtnfonction13): static
    {
        $this->cBtnfonction13 = $cBtnfonction13;

        return $this;
    }

    public function getCBtnfonction14(): ?int
    {
        return $this->cBtnfonction14;
    }

    public function setCBtnfonction14(?int $cBtnfonction14): static
    {
        $this->cBtnfonction14 = $cBtnfonction14;

        return $this;
    }

    public function getCBtnfonction15(): ?int
    {
        return $this->cBtnfonction15;
    }

    public function setCBtnfonction15(?int $cBtnfonction15): static
    {
        $this->cBtnfonction15 = $cBtnfonction15;

        return $this;
    }

    public function getCBtnfonction16(): ?int
    {
        return $this->cBtnfonction16;
    }

    public function setCBtnfonction16(?int $cBtnfonction16): static
    {
        $this->cBtnfonction16 = $cBtnfonction16;

        return $this;
    }

    public function getCBtnfonction17(): ?int
    {
        return $this->cBtnfonction17;
    }

    public function setCBtnfonction17(?int $cBtnfonction17): static
    {
        $this->cBtnfonction17 = $cBtnfonction17;

        return $this;
    }

    public function getCBtnfonction18(): ?int
    {
        return $this->cBtnfonction18;
    }

    public function setCBtnfonction18(?int $cBtnfonction18): static
    {
        $this->cBtnfonction18 = $cBtnfonction18;

        return $this;
    }

    public function getCBtnfonction19(): ?int
    {
        return $this->cBtnfonction19;
    }

    public function setCBtnfonction19(?int $cBtnfonction19): static
    {
        $this->cBtnfonction19 = $cBtnfonction19;

        return $this;
    }

    public function getCBtnfonction20(): ?int
    {
        return $this->cBtnfonction20;
    }

    public function setCBtnfonction20(?int $cBtnfonction20): static
    {
        $this->cBtnfonction20 = $cBtnfonction20;

        return $this;
    }

    public function getCBtnfonction21(): ?int
    {
        return $this->cBtnfonction21;
    }

    public function setCBtnfonction21(?int $cBtnfonction21): static
    {
        $this->cBtnfonction21 = $cBtnfonction21;

        return $this;
    }

    public function getCBtnfonction22(): ?int
    {
        return $this->cBtnfonction22;
    }

    public function setCBtnfonction22(?int $cBtnfonction22): static
    {
        $this->cBtnfonction22 = $cBtnfonction22;

        return $this;
    }

    public function getCBtnfonction23(): ?int
    {
        return $this->cBtnfonction23;
    }

    public function setCBtnfonction23(?int $cBtnfonction23): static
    {
        $this->cBtnfonction23 = $cBtnfonction23;

        return $this;
    }

    public function getCBtnfonction24(): ?int
    {
        return $this->cBtnfonction24;
    }

    public function setCBtnfonction24(?int $cBtnfonction24): static
    {
        $this->cBtnfonction24 = $cBtnfonction24;

        return $this;
    }

    public function getCBtnfonction25(): ?int
    {
        return $this->cBtnfonction25;
    }

    public function setCBtnfonction25(?int $cBtnfonction25): static
    {
        $this->cBtnfonction25 = $cBtnfonction25;

        return $this;
    }

    public function getCBtnfonction26(): ?int
    {
        return $this->cBtnfonction26;
    }

    public function setCBtnfonction26(?int $cBtnfonction26): static
    {
        $this->cBtnfonction26 = $cBtnfonction26;

        return $this;
    }

    public function getCBtnfonction27(): ?int
    {
        return $this->cBtnfonction27;
    }

    public function setCBtnfonction27(?int $cBtnfonction27): static
    {
        $this->cBtnfonction27 = $cBtnfonction27;

        return $this;
    }

    public function getCBtnfonction28(): ?int
    {
        return $this->cBtnfonction28;
    }

    public function setCBtnfonction28(?int $cBtnfonction28): static
    {
        $this->cBtnfonction28 = $cBtnfonction28;

        return $this;
    }

    public function getCBtnfonction29(): ?int
    {
        return $this->cBtnfonction29;
    }

    public function setCBtnfonction29(?int $cBtnfonction29): static
    {
        $this->cBtnfonction29 = $cBtnfonction29;

        return $this;
    }

    public function getCBtnfonction30(): ?int
    {
        return $this->cBtnfonction30;
    }

    public function setCBtnfonction30(?int $cBtnfonction30): static
    {
        $this->cBtnfonction30 = $cBtnfonction30;

        return $this;
    }

    public function getCBtnfonction31(): ?int
    {
        return $this->cBtnfonction31;
    }

    public function setCBtnfonction31(?int $cBtnfonction31): static
    {
        $this->cBtnfonction31 = $cBtnfonction31;

        return $this;
    }

    public function getCBtnfonction32(): ?int
    {
        return $this->cBtnfonction32;
    }

    public function setCBtnfonction32(?int $cBtnfonction32): static
    {
        $this->cBtnfonction32 = $cBtnfonction32;

        return $this;
    }

    public function getCBtnfonction33(): ?int
    {
        return $this->cBtnfonction33;
    }

    public function setCBtnfonction33(?int $cBtnfonction33): static
    {
        $this->cBtnfonction33 = $cBtnfonction33;

        return $this;
    }

    public function getCBtnfonction34(): ?int
    {
        return $this->cBtnfonction34;
    }

    public function setCBtnfonction34(?int $cBtnfonction34): static
    {
        $this->cBtnfonction34 = $cBtnfonction34;

        return $this;
    }

    public function getCBtnfonction35(): ?int
    {
        return $this->cBtnfonction35;
    }

    public function setCBtnfonction35(?int $cBtnfonction35): static
    {
        $this->cBtnfonction35 = $cBtnfonction35;

        return $this;
    }

    public function getCBtnfonction36(): ?int
    {
        return $this->cBtnfonction36;
    }

    public function setCBtnfonction36(?int $cBtnfonction36): static
    {
        $this->cBtnfonction36 = $cBtnfonction36;

        return $this;
    }

    public function getCBtnfonction37(): ?int
    {
        return $this->cBtnfonction37;
    }

    public function setCBtnfonction37(?int $cBtnfonction37): static
    {
        $this->cBtnfonction37 = $cBtnfonction37;

        return $this;
    }

    public function getCbindice(): ?int
    {
        return $this->cbindice;
    }

    public function setCbindice(?int $cbindice): static
    {
        $this->cbindice = $cbindice;

        return $this;
    }
}
