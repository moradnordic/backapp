<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\FCompteabudgetRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_COMPTEABUDGET')]
#[ORM\UniqueConstraint(name: 'ICA_BUDGET', columns: ['cbCA_Num'])]
#[ORM\UniqueConstraint(name: 'UKA_F_COMPTEABUDGET_CA_Num', columns: ['CA_Num'])]
#[ORM\Index(name: 'FKIA_F_COMPTEABUDGET_CA_Num', columns: ['CA_Num'])]
#[ORM\Entity(repositoryClass: FCompteabudgetRepository::class)]
class FCompteabudget
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "N_Analytique", type: Types::SMALLINT)]
    private ?int $nAnalytique = null;

    #[ORM\Column(name: "CA_Num", length: 13)]
    private ?string $caNum = null;

    #[ORM\Column(name: "cbCA_Num", type: Types::BINARY, nullable: true)]
    private $cbcaNum = null;

    #[ORM\Column(name: "CA_BSens", type: Types::SMALLINT, nullable: true)]
    private ?int $caBsens = null;

    #[ORM\Column(name: "CA_BDotation0101", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0101 = null;

    #[ORM\Column(name: "CA_BDotation0102", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0102 = null;

    #[ORM\Column(name: "CA_BDotation0103", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0103 = null;

    #[ORM\Column(name: "CA_BDotation0104", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0104 = null;

    #[ORM\Column(name: "CA_BDotation0105", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0105 = null;

    #[ORM\Column(name: "CA_BDotation0106", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0106 = null;

    #[ORM\Column(name: "CA_BDotation0107", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0107 = null;

    #[ORM\Column(name: "CA_BDotation0108", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0108 = null;

    #[ORM\Column(name: "CA_BDotation0109", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0109 = null;

    #[ORM\Column(name: "CA_BDotation0110", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0110 = null;

    #[ORM\Column(name: "CA_BDotation0111", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0111 = null;

    #[ORM\Column(name: "CA_BDotation0112", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0112 = null;

    #[ORM\Column(name: "CA_BDotation0113", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0113 = null;

    #[ORM\Column(name: "CA_BDotation0114", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0114 = null;

    #[ORM\Column(name: "CA_BDotation0115", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0115 = null;

    #[ORM\Column(name: "CA_BDotation0116", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0116 = null;

    #[ORM\Column(name: "CA_BDotation0117", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0117 = null;

    #[ORM\Column(name: "CA_BDotation0118", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0118 = null;

    #[ORM\Column(name: "CA_BDotation0119", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0119 = null;

    #[ORM\Column(name: "CA_BDotation0120", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0120 = null;

    #[ORM\Column(name: "CA_BDotation0121", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0121 = null;

    #[ORM\Column(name: "CA_BDotation0122", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0122 = null;

    #[ORM\Column(name: "CA_BDotation0123", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0123 = null;

    #[ORM\Column(name: "CA_BDotation0124", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0124 = null;

    #[ORM\Column(name: "CA_BDotation0125", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0125 = null;

    #[ORM\Column(name: "CA_BDotation0126", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0126 = null;

    #[ORM\Column(name: "CA_BDotation0127", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0127 = null;

    #[ORM\Column(name: "CA_BDotation0128", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0128 = null;

    #[ORM\Column(name: "CA_BDotation0129", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0129 = null;

    #[ORM\Column(name: "CA_BDotation0130", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0130 = null;

    #[ORM\Column(name: "CA_BDotation0131", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0131 = null;

    #[ORM\Column(name: "CA_BDotation0132", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0132 = null;

    #[ORM\Column(name: "CA_BDotation0133", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0133 = null;

    #[ORM\Column(name: "CA_BDotation0134", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0134 = null;

    #[ORM\Column(name: "CA_BDotation0135", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0135 = null;

    #[ORM\Column(name: "CA_BDotation0136", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0136 = null;

    #[ORM\Column(name: "CA_BDotation0201", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0201 = null;

    #[ORM\Column(name: "CA_BDotation0202", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0202 = null;

    #[ORM\Column(name: "CA_BDotation0203", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0203 = null;

    #[ORM\Column(name: "CA_BDotation0204", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0204 = null;

    #[ORM\Column(name: "CA_BDotation0205", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0205 = null;

    #[ORM\Column(name: "CA_BDotation0206", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0206 = null;

    #[ORM\Column(name: "CA_BDotation0207", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0207 = null;

    #[ORM\Column(name: "CA_BDotation0208", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0208 = null;

    #[ORM\Column(name: "CA_BDotation0209", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0209 = null;

    #[ORM\Column(name: "CA_BDotation0210", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0210 = null;

    #[ORM\Column(name: "CA_BDotation0211", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0211 = null;

    #[ORM\Column(name: "CA_BDotation0212", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0212 = null;

    #[ORM\Column(name: "CA_BDotation0213", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0213 = null;

    #[ORM\Column(name: "CA_BDotation0214", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0214 = null;

    #[ORM\Column(name: "CA_BDotation0215", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0215 = null;

    #[ORM\Column(name: "CA_BDotation0216", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0216 = null;

    #[ORM\Column(name: "CA_BDotation0217", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0217 = null;

    #[ORM\Column(name: "CA_BDotation0218", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0218 = null;

    #[ORM\Column(name: "CA_BDotation0219", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0219 = null;

    #[ORM\Column(name: "CA_BDotation0220", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0220 = null;

    #[ORM\Column(name: "CA_BDotation0221", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0221 = null;

    #[ORM\Column(name: "CA_BDotation0222", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0222 = null;

    #[ORM\Column(name: "CA_BDotation0223", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0223 = null;

    #[ORM\Column(name: "CA_BDotation0224", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0224 = null;

    #[ORM\Column(name: "CA_BDotation0225", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0225 = null;

    #[ORM\Column(name: "CA_BDotation0226", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0226 = null;

    #[ORM\Column(name: "CA_BDotation0227", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0227 = null;

    #[ORM\Column(name: "CA_BDotation0228", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0228 = null;

    #[ORM\Column(name: "CA_BDotation0229", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0229 = null;

    #[ORM\Column(name: "CA_BDotation0230", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0230 = null;

    #[ORM\Column(name: "CA_BDotation0231", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0231 = null;

    #[ORM\Column(name: "CA_BDotation0232", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0232 = null;

    #[ORM\Column(name: "CA_BDotation0233", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0233 = null;

    #[ORM\Column(name: "CA_BDotation0234", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0234 = null;

    #[ORM\Column(name: "CA_BDotation0235", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0235 = null;

    #[ORM\Column(name: "CA_BDotation0236", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0236 = null;

    #[ORM\Column(name: "CA_BDotation0301", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0301 = null;

    #[ORM\Column(name: "CA_BDotation0302", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0302 = null;

    #[ORM\Column(name: "CA_BDotation0303", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0303 = null;

    #[ORM\Column(name: "CA_BDotation0304", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0304 = null;

    #[ORM\Column(name: "CA_BDotation0305", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0305 = null;

    #[ORM\Column(name: "CA_BDotation0306", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0306 = null;

    #[ORM\Column(name: "CA_BDotation0307", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0307 = null;

    #[ORM\Column(name: "CA_BDotation0308", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0308 = null;

    #[ORM\Column(name: "CA_BDotation0309", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0309 = null;

    #[ORM\Column(name: "CA_BDotation0310", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0310 = null;

    #[ORM\Column(name: "CA_BDotation0311", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0311 = null;

    #[ORM\Column(name: "CA_BDotation0312", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0312 = null;

    #[ORM\Column(name: "CA_BDotation0313", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0313 = null;

    #[ORM\Column(name: "CA_BDotation0314", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0314 = null;

    #[ORM\Column(name: "CA_BDotation0315", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0315 = null;

    #[ORM\Column(name: "CA_BDotation0316", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0316 = null;

    #[ORM\Column(name: "CA_BDotation0317", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0317 = null;

    #[ORM\Column(name: "CA_BDotation0318", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0318 = null;

    #[ORM\Column(name: "CA_BDotation0319", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0319 = null;

    #[ORM\Column(name: "CA_BDotation0320", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0320 = null;

    #[ORM\Column(name: "CA_BDotation0321", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0321 = null;

    #[ORM\Column(name: "CA_BDotation0322", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0322 = null;

    #[ORM\Column(name: "CA_BDotation0323", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0323 = null;

    #[ORM\Column(name: "CA_BDotation0324", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0324 = null;

    #[ORM\Column(name: "CA_BDotation0325", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0325 = null;

    #[ORM\Column(name: "CA_BDotation0326", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0326 = null;

    #[ORM\Column(name: "CA_BDotation0327", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0327 = null;

    #[ORM\Column(name: "CA_BDotation0328", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0328 = null;

    #[ORM\Column(name: "CA_BDotation0329", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0329 = null;

    #[ORM\Column(name: "CA_BDotation0330", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0330 = null;

    #[ORM\Column(name: "CA_BDotation0331", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0331 = null;

    #[ORM\Column(name: "CA_BDotation0332", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0332 = null;

    #[ORM\Column(name: "CA_BDotation0333", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0333 = null;

    #[ORM\Column(name: "CA_BDotation0334", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0334 = null;

    #[ORM\Column(name: "CA_BDotation0335", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0335 = null;

    #[ORM\Column(name: "CA_BDotation0336", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0336 = null;

    #[ORM\Column(name: "CA_BDotation0401", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0401 = null;

    #[ORM\Column(name: "CA_BDotation0402", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0402 = null;

    #[ORM\Column(name: "CA_BDotation0403", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0403 = null;

    #[ORM\Column(name: "CA_BDotation0404", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0404 = null;

    #[ORM\Column(name: "CA_BDotation0405", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0405 = null;

    #[ORM\Column(name: "CA_BDotation0406", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0406 = null;

    #[ORM\Column(name: "CA_BDotation0407", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0407 = null;

    #[ORM\Column(name: "CA_BDotation0408", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0408 = null;

    #[ORM\Column(name: "CA_BDotation0409", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0409 = null;

    #[ORM\Column(name: "CA_BDotation0410", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0410 = null;

    #[ORM\Column(name: "CA_BDotation0411", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0411 = null;

    #[ORM\Column(name: "CA_BDotation0412", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0412 = null;

    #[ORM\Column(name: "CA_BDotation0413", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0413 = null;

    #[ORM\Column(name: "CA_BDotation0414", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0414 = null;

    #[ORM\Column(name: "CA_BDotation0415", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0415 = null;

    #[ORM\Column(name: "CA_BDotation0416", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0416 = null;

    #[ORM\Column(name: "CA_BDotation0417", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0417 = null;

    #[ORM\Column(name: "CA_BDotation0418", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0418 = null;

    #[ORM\Column(name: "CA_BDotation0419", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0419 = null;

    #[ORM\Column(name: "CA_BDotation0420", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0420 = null;

    #[ORM\Column(name: "CA_BDotation0421", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0421 = null;

    #[ORM\Column(name: "CA_BDotation0422", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0422 = null;

    #[ORM\Column(name: "CA_BDotation0423", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0423 = null;

    #[ORM\Column(name: "CA_BDotation0424", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0424 = null;

    #[ORM\Column(name: "CA_BDotation0425", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0425 = null;

    #[ORM\Column(name: "CA_BDotation0426", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0426 = null;

    #[ORM\Column(name: "CA_BDotation0427", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0427 = null;

    #[ORM\Column(name: "CA_BDotation0428", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0428 = null;

    #[ORM\Column(name: "CA_BDotation0429", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0429 = null;

    #[ORM\Column(name: "CA_BDotation0430", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0430 = null;

    #[ORM\Column(name: "CA_BDotation0431", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0431 = null;

    #[ORM\Column(name: "CA_BDotation0432", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0432 = null;

    #[ORM\Column(name: "CA_BDotation0433", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0433 = null;

    #[ORM\Column(name: "CA_BDotation0434", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0434 = null;

    #[ORM\Column(name: "CA_BDotation0435", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0435 = null;

    #[ORM\Column(name: "CA_BDotation0436", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0436 = null;

    #[ORM\Column(name: "CA_BDotation0501", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0501 = null;

    #[ORM\Column(name: "CA_BDotation0502", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0502 = null;

    #[ORM\Column(name: "CA_BDotation0503", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0503 = null;

    #[ORM\Column(name: "CA_BDotation0504", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0504 = null;

    #[ORM\Column(name: "CA_BDotation0505", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0505 = null;

    #[ORM\Column(name: "CA_BDotation0506", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0506 = null;

    #[ORM\Column(name: "CA_BDotation0507", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0507 = null;

    #[ORM\Column(name: "CA_BDotation0508", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0508 = null;

    #[ORM\Column(name: "CA_BDotation0509", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0509 = null;

    #[ORM\Column(name: "CA_BDotation0510", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0510 = null;

    #[ORM\Column(name: "CA_BDotation0511", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0511 = null;

    #[ORM\Column(name: "CA_BDotation0512", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0512 = null;

    #[ORM\Column(name: "CA_BDotation0513", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0513 = null;

    #[ORM\Column(name: "CA_BDotation0514", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0514 = null;

    #[ORM\Column(name: "CA_BDotation0515", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0515 = null;

    #[ORM\Column(name: "CA_BDotation0516", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0516 = null;

    #[ORM\Column(name: "CA_BDotation0517", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0517 = null;

    #[ORM\Column(name: "CA_BDotation0518", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0518 = null;

    #[ORM\Column(name: "CA_BDotation0519", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0519 = null;

    #[ORM\Column(name: "CA_BDotation0520", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0520 = null;

    #[ORM\Column(name: "CA_BDotation0521", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0521 = null;

    #[ORM\Column(name: "CA_BDotation0522", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0522 = null;

    #[ORM\Column(name: "CA_BDotation0523", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0523 = null;

    #[ORM\Column(name: "CA_BDotation0524", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0524 = null;

    #[ORM\Column(name: "CA_BDotation0525", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0525 = null;

    #[ORM\Column(name: "CA_BDotation0526", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0526 = null;

    #[ORM\Column(name: "CA_BDotation0527", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0527 = null;

    #[ORM\Column(name: "CA_BDotation0528", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0528 = null;

    #[ORM\Column(name: "CA_BDotation0529", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0529 = null;

    #[ORM\Column(name: "CA_BDotation0530", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0530 = null;

    #[ORM\Column(name: "CA_BDotation0531", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0531 = null;

    #[ORM\Column(name: "CA_BDotation0532", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0532 = null;

    #[ORM\Column(name: "CA_BDotation0533", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0533 = null;

    #[ORM\Column(name: "CA_BDotation0534", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0534 = null;

    #[ORM\Column(name: "CA_BDotation0535", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0535 = null;

    #[ORM\Column(name: "CA_BDotation0536", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0536 = null;

    #[ORM\Column(name: "CA_BDotation0601", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0601 = null;

    #[ORM\Column(name: "CA_BDotation0602", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0602 = null;

    #[ORM\Column(name: "CA_BDotation0603", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0603 = null;

    #[ORM\Column(name: "CA_BDotation0604", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0604 = null;

    #[ORM\Column(name: "CA_BDotation0605", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0605 = null;

    #[ORM\Column(name: "CA_BDotation0606", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0606 = null;

    #[ORM\Column(name: "CA_BDotation0607", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0607 = null;

    #[ORM\Column(name: "CA_BDotation0608", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0608 = null;

    #[ORM\Column(name: "CA_BDotation0609", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0609 = null;

    #[ORM\Column(name: "CA_BDotation0610", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0610 = null;

    #[ORM\Column(name: "CA_BDotation0611", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0611 = null;

    #[ORM\Column(name: "CA_BDotation0612", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0612 = null;

    #[ORM\Column(name: "CA_BDotation0613", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0613 = null;

    #[ORM\Column(name: "CA_BDotation0614", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0614 = null;

    #[ORM\Column(name: "CA_BDotation0615", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0615 = null;

    #[ORM\Column(name: "CA_BDotation0616", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0616 = null;

    #[ORM\Column(name: "CA_BDotation0617", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0617 = null;

    #[ORM\Column(name: "CA_BDotation0618", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0618 = null;

    #[ORM\Column(name: "CA_BDotation0619", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0619 = null;

    #[ORM\Column(name: "CA_BDotation0620", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0620 = null;

    #[ORM\Column(name: "CA_BDotation0621", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0621 = null;

    #[ORM\Column(name: "CA_BDotation0622", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0622 = null;

    #[ORM\Column(name: "CA_BDotation0623", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0623 = null;

    #[ORM\Column(name: "CA_BDotation0624", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0624 = null;

    #[ORM\Column(name: "CA_BDotation0625", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0625 = null;

    #[ORM\Column(name: "CA_BDotation0626", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0626 = null;

    #[ORM\Column(name: "CA_BDotation0627", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0627 = null;

    #[ORM\Column(name: "CA_BDotation0628", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0628 = null;

    #[ORM\Column(name: "CA_BDotation0629", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0629 = null;

    #[ORM\Column(name: "CA_BDotation0630", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0630 = null;

    #[ORM\Column(name: "CA_BDotation0631", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0631 = null;

    #[ORM\Column(name: "CA_BDotation0632", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0632 = null;

    #[ORM\Column(name: "CA_BDotation0633", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0633 = null;

    #[ORM\Column(name: "CA_BDotation0634", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0634 = null;

    #[ORM\Column(name: "CA_BDotation0635", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0635 = null;

    #[ORM\Column(name: "CA_BDotation0636", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotation0636 = null;

    #[ORM\Column(name: "CA_BDotationQ0101", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0101 = null;

    #[ORM\Column(name: "CA_BDotationQ0102", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0102 = null;

    #[ORM\Column(name: "CA_BDotationQ0103", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0103 = null;

    #[ORM\Column(name: "CA_BDotationQ0104", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0104 = null;

    #[ORM\Column(name: "CA_BDotationQ0105", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0105 = null;

    #[ORM\Column(name: "CA_BDotationQ0106", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0106 = null;

    #[ORM\Column(name: "CA_BDotationQ0107", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0107 = null;

    #[ORM\Column(name: "CA_BDotationQ0108", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0108 = null;

    #[ORM\Column(name: "CA_BDotationQ0109", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0109 = null;

    #[ORM\Column(name: "CA_BDotationQ0110", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0110 = null;

    #[ORM\Column(name: "CA_BDotationQ0111", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0111 = null;

    #[ORM\Column(name: "CA_BDotationQ0112", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0112 = null;

    #[ORM\Column(name: "CA_BDotationQ0113", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0113 = null;

    #[ORM\Column(name: "CA_BDotationQ0114", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0114 = null;

    #[ORM\Column(name: "CA_BDotationQ0115", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0115 = null;

    #[ORM\Column(name: "CA_BDotationQ0116", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0116 = null;

    #[ORM\Column(name: "CA_BDotationQ0117", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0117 = null;

    #[ORM\Column(name: "CA_BDotationQ0118", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0118 = null;

    #[ORM\Column(name: "CA_BDotationQ0119", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0119 = null;

    #[ORM\Column(name: "CA_BDotationQ0120", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0120 = null;

    #[ORM\Column(name: "CA_BDotationQ0121", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0121 = null;

    #[ORM\Column(name: "CA_BDotationQ0122", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0122 = null;

    #[ORM\Column(name: "CA_BDotationQ0123", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0123 = null;

    #[ORM\Column(name: "CA_BDotationQ0124", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0124 = null;

    #[ORM\Column(name: "CA_BDotationQ0125", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0125 = null;

    #[ORM\Column(name: "CA_BDotationQ0126", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0126 = null;

    #[ORM\Column(name: "CA_BDotationQ0127", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0127 = null;

    #[ORM\Column(name: "CA_BDotationQ0128", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0128 = null;

    #[ORM\Column(name: "CA_BDotationQ0129", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0129 = null;

    #[ORM\Column(name: "CA_BDotationQ0130", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0130 = null;

    #[ORM\Column(name: "CA_BDotationQ0131", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0131 = null;

    #[ORM\Column(name: "CA_BDotationQ0132", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0132 = null;

    #[ORM\Column(name: "CA_BDotationQ0133", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0133 = null;

    #[ORM\Column(name: "CA_BDotationQ0134", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0134 = null;

    #[ORM\Column(name: "CA_BDotationQ0135", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0135 = null;

    #[ORM\Column(name: "CA_BDotationQ0136", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0136 = null;

    #[ORM\Column(name: "CA_BDotationQ0201", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0201 = null;

    #[ORM\Column(name: "CA_BDotationQ0202", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0202 = null;

    #[ORM\Column(name: "CA_BDotationQ0203", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0203 = null;

    #[ORM\Column(name: "CA_BDotationQ0204", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0204 = null;

    #[ORM\Column(name: "CA_BDotationQ0205", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0205 = null;

    #[ORM\Column(name: "CA_BDotationQ0206", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0206 = null;

    #[ORM\Column(name: "CA_BDotationQ0207", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0207 = null;

    #[ORM\Column(name: "CA_BDotationQ0208", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0208 = null;

    #[ORM\Column(name: "CA_BDotationQ0209", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0209 = null;

    #[ORM\Column(name: "CA_BDotationQ0210", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0210 = null;

    #[ORM\Column(name: "CA_BDotationQ0211", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0211 = null;

    #[ORM\Column(name: "CA_BDotationQ0212", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0212 = null;

    #[ORM\Column(name: "CA_BDotationQ0213", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0213 = null;

    #[ORM\Column(name: "CA_BDotationQ0214", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0214 = null;

    #[ORM\Column(name: "CA_BDotationQ0215", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0215 = null;

    #[ORM\Column(name: "CA_BDotationQ0216", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0216 = null;

    #[ORM\Column(name: "CA_BDotationQ0217", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0217 = null;

    #[ORM\Column(name: "CA_BDotationQ0218", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0218 = null;

    #[ORM\Column(name: "CA_BDotationQ0219", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0219 = null;

    #[ORM\Column(name: "CA_BDotationQ0220", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0220 = null;

    #[ORM\Column(name: "CA_BDotationQ0221", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0221 = null;

    #[ORM\Column(name: "CA_BDotationQ0222", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0222 = null;

    #[ORM\Column(name: "CA_BDotationQ0223", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0223 = null;

    #[ORM\Column(name: "CA_BDotationQ0224", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0224 = null;

    #[ORM\Column(name: "CA_BDotationQ0225", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0225 = null;

    #[ORM\Column(name: "CA_BDotationQ0226", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0226 = null;

    #[ORM\Column(name: "CA_BDotationQ0227", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0227 = null;

    #[ORM\Column(name: "CA_BDotationQ0228", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0228 = null;

    #[ORM\Column(name: "CA_BDotationQ0229", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0229 = null;

    #[ORM\Column(name: "CA_BDotationQ0230", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0230 = null;

    #[ORM\Column(name: "CA_BDotationQ0231", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0231 = null;

    #[ORM\Column(name: "CA_BDotationQ0232", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0232 = null;

    #[ORM\Column(name: "CA_BDotationQ0233", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0233 = null;

    #[ORM\Column(name: "CA_BDotationQ0234", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0234 = null;

    #[ORM\Column(name: "CA_BDotationQ0235", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0235 = null;

    #[ORM\Column(name: "CA_BDotationQ0236", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0236 = null;

    #[ORM\Column(name: "CA_BDotationQ0301", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0301 = null;

    #[ORM\Column(name: "CA_BDotationQ0302", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0302 = null;

    #[ORM\Column(name: "CA_BDotationQ0303", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0303 = null;

    #[ORM\Column(name: "CA_BDotationQ0304", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0304 = null;

    #[ORM\Column(name: "CA_BDotationQ0305", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0305 = null;

    #[ORM\Column(name: "CA_BDotationQ0306", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0306 = null;

    #[ORM\Column(name: "CA_BDotationQ0307", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0307 = null;

    #[ORM\Column(name: "CA_BDotationQ0308", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0308 = null;

    #[ORM\Column(name: "CA_BDotationQ0309", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0309 = null;

    #[ORM\Column(name: "CA_BDotationQ0310", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0310 = null;

    #[ORM\Column(name: "CA_BDotationQ0311", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0311 = null;

    #[ORM\Column(name: "CA_BDotationQ0312", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0312 = null;

    #[ORM\Column(name: "CA_BDotationQ0313", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0313 = null;

    #[ORM\Column(name: "CA_BDotationQ0314", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0314 = null;

    #[ORM\Column(name: "CA_BDotationQ0315", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0315 = null;

    #[ORM\Column(name: "CA_BDotationQ0316", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0316 = null;

    #[ORM\Column(name: "CA_BDotationQ0317", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0317 = null;

    #[ORM\Column(name: "CA_BDotationQ0318", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0318 = null;

    #[ORM\Column(name: "CA_BDotationQ0319", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0319 = null;

    #[ORM\Column(name: "CA_BDotationQ0320", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0320 = null;

    #[ORM\Column(name: "CA_BDotationQ0321", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0321 = null;

    #[ORM\Column(name: "CA_BDotationQ0322", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0322 = null;

    #[ORM\Column(name: "CA_BDotationQ0323", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0323 = null;

    #[ORM\Column(name: "CA_BDotationQ0324", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0324 = null;

    #[ORM\Column(name: "CA_BDotationQ0325", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0325 = null;

    #[ORM\Column(name: "CA_BDotationQ0326", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0326 = null;

    #[ORM\Column(name: "CA_BDotationQ0327", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0327 = null;

    #[ORM\Column(name: "CA_BDotationQ0328", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0328 = null;

    #[ORM\Column(name: "CA_BDotationQ0329", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0329 = null;

    #[ORM\Column(name: "CA_BDotationQ0330", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0330 = null;

    #[ORM\Column(name: "CA_BDotationQ0331", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0331 = null;

    #[ORM\Column(name: "CA_BDotationQ0332", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0332 = null;

    #[ORM\Column(name: "CA_BDotationQ0333", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0333 = null;

    #[ORM\Column(name: "CA_BDotationQ0334", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0334 = null;

    #[ORM\Column(name: "CA_BDotationQ0335", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0335 = null;

    #[ORM\Column(name: "CA_BDotationQ0336", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0336 = null;

    #[ORM\Column(name: "CA_BDotationQ0401", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0401 = null;

    #[ORM\Column(name: "CA_BDotationQ0402", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0402 = null;

    #[ORM\Column(name: "CA_BDotationQ0403", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0403 = null;

    #[ORM\Column(name: "CA_BDotationQ0404", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0404 = null;

    #[ORM\Column(name: "CA_BDotationQ0405", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0405 = null;

    #[ORM\Column(name: "CA_BDotationQ0406", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0406 = null;

    #[ORM\Column(name: "CA_BDotationQ0407", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0407 = null;

    #[ORM\Column(name: "CA_BDotationQ0408", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0408 = null;

    #[ORM\Column(name: "CA_BDotationQ0409", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0409 = null;

    #[ORM\Column(name: "CA_BDotationQ0410", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0410 = null;

    #[ORM\Column(name: "CA_BDotationQ0411", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0411 = null;

    #[ORM\Column(name: "CA_BDotationQ0412", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0412 = null;

    #[ORM\Column(name: "CA_BDotationQ0413", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0413 = null;

    #[ORM\Column(name: "CA_BDotationQ0414", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0414 = null;

    #[ORM\Column(name: "CA_BDotationQ0415", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0415 = null;

    #[ORM\Column(name: "CA_BDotationQ0416", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0416 = null;

    #[ORM\Column(name: "CA_BDotationQ0417", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0417 = null;

    #[ORM\Column(name: "CA_BDotationQ0418", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0418 = null;

    #[ORM\Column(name: "CA_BDotationQ0419", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0419 = null;

    #[ORM\Column(name: "CA_BDotationQ0420", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0420 = null;

    #[ORM\Column(name: "CA_BDotationQ0421", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0421 = null;

    #[ORM\Column(name: "CA_BDotationQ0422", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0422 = null;

    #[ORM\Column(name: "CA_BDotationQ0423", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0423 = null;

    #[ORM\Column(name: "CA_BDotationQ0424", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0424 = null;

    #[ORM\Column(name: "CA_BDotationQ0425", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0425 = null;

    #[ORM\Column(name: "CA_BDotationQ0426", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0426 = null;

    #[ORM\Column(name: "CA_BDotationQ0427", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0427 = null;

    #[ORM\Column(name: "CA_BDotationQ0428", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0428 = null;

    #[ORM\Column(name: "CA_BDotationQ0429", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0429 = null;

    #[ORM\Column(name: "CA_BDotationQ0430", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0430 = null;

    #[ORM\Column(name: "CA_BDotationQ0431", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0431 = null;

    #[ORM\Column(name: "CA_BDotationQ0432", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0432 = null;

    #[ORM\Column(name: "CA_BDotationQ0433", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0433 = null;

    #[ORM\Column(name: "CA_BDotationQ0434", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0434 = null;

    #[ORM\Column(name: "CA_BDotationQ0435", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0435 = null;

    #[ORM\Column(name: "CA_BDotationQ0436", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0436 = null;

    #[ORM\Column(name: "CA_BDotationQ0501", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0501 = null;

    #[ORM\Column(name: "CA_BDotationQ0502", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0502 = null;

    #[ORM\Column(name: "CA_BDotationQ0503", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0503 = null;

    #[ORM\Column(name: "CA_BDotationQ0504", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0504 = null;

    #[ORM\Column(name: "CA_BDotationQ0505", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0505 = null;

    #[ORM\Column(name: "CA_BDotationQ0506", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0506 = null;

    #[ORM\Column(name: "CA_BDotationQ0507", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0507 = null;

    #[ORM\Column(name: "CA_BDotationQ0508", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0508 = null;

    #[ORM\Column(name: "CA_BDotationQ0509", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0509 = null;

    #[ORM\Column(name: "CA_BDotationQ0510", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0510 = null;

    #[ORM\Column(name: "CA_BDotationQ0511", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0511 = null;

    #[ORM\Column(name: "CA_BDotationQ0512", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0512 = null;

    #[ORM\Column(name: "CA_BDotationQ0513", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0513 = null;

    #[ORM\Column(name: "CA_BDotationQ0514", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0514 = null;

    #[ORM\Column(name: "CA_BDotationQ0515", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0515 = null;

    #[ORM\Column(name: "CA_BDotationQ0516", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0516 = null;

    #[ORM\Column(name: "CA_BDotationQ0517", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0517 = null;

    #[ORM\Column(name: "CA_BDotationQ0518", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0518 = null;

    #[ORM\Column(name: "CA_BDotationQ0519", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0519 = null;

    #[ORM\Column(name: "CA_BDotationQ0520", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0520 = null;

    #[ORM\Column(name: "CA_BDotationQ0521", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0521 = null;

    #[ORM\Column(name: "CA_BDotationQ0522", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0522 = null;

    #[ORM\Column(name: "CA_BDotationQ0523", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0523 = null;

    #[ORM\Column(name: "CA_BDotationQ0524", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0524 = null;

    #[ORM\Column(name: "CA_BDotationQ0525", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0525 = null;

    #[ORM\Column(name: "CA_BDotationQ0526", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0526 = null;

    #[ORM\Column(name: "CA_BDotationQ0527", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0527 = null;

    #[ORM\Column(name: "CA_BDotationQ0528", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0528 = null;

    #[ORM\Column(name: "CA_BDotationQ0529", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0529 = null;

    #[ORM\Column(name: "CA_BDotationQ0530", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0530 = null;

    #[ORM\Column(name: "CA_BDotationQ0531", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0531 = null;

    #[ORM\Column(name: "CA_BDotationQ0532", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0532 = null;

    #[ORM\Column(name: "CA_BDotationQ0533", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0533 = null;

    #[ORM\Column(name: "CA_BDotationQ0534", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0534 = null;

    #[ORM\Column(name: "CA_BDotationQ0535", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0535 = null;

    #[ORM\Column(name: "CA_BDotationQ0536", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0536 = null;

    #[ORM\Column(name: "CA_BDotationQ0601", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0601 = null;

    #[ORM\Column(name: "CA_BDotationQ0602", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0602 = null;

    #[ORM\Column(name: "CA_BDotationQ0603", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0603 = null;

    #[ORM\Column(name: "CA_BDotationQ0604", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0604 = null;

    #[ORM\Column(name: "CA_BDotationQ0605", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0605 = null;

    #[ORM\Column(name: "CA_BDotationQ0606", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0606 = null;

    #[ORM\Column(name: "CA_BDotationQ0607", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0607 = null;

    #[ORM\Column(name: "CA_BDotationQ0608", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0608 = null;

    #[ORM\Column(name: "CA_BDotationQ0609", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0609 = null;

    #[ORM\Column(name: "CA_BDotationQ0610", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0610 = null;

    #[ORM\Column(name: "CA_BDotationQ0611", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0611 = null;

    #[ORM\Column(name: "CA_BDotationQ0612", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0612 = null;

    #[ORM\Column(name: "CA_BDotationQ0613", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0613 = null;

    #[ORM\Column(name: "CA_BDotationQ0614", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0614 = null;

    #[ORM\Column(name: "CA_BDotationQ0615", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0615 = null;

    #[ORM\Column(name: "CA_BDotationQ0616", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0616 = null;

    #[ORM\Column(name: "CA_BDotationQ0617", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0617 = null;

    #[ORM\Column(name: "CA_BDotationQ0618", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0618 = null;

    #[ORM\Column(name: "CA_BDotationQ0619", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0619 = null;

    #[ORM\Column(name: "CA_BDotationQ0620", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0620 = null;

    #[ORM\Column(name: "CA_BDotationQ0621", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0621 = null;

    #[ORM\Column(name: "CA_BDotationQ0622", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0622 = null;

    #[ORM\Column(name: "CA_BDotationQ0623", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0623 = null;

    #[ORM\Column(name: "CA_BDotationQ0624", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0624 = null;

    #[ORM\Column(name: "CA_BDotationQ0625", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0625 = null;

    #[ORM\Column(name: "CA_BDotationQ0626", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0626 = null;

    #[ORM\Column(name: "CA_BDotationQ0627", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0627 = null;

    #[ORM\Column(name: "CA_BDotationQ0628", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0628 = null;

    #[ORM\Column(name: "CA_BDotationQ0629", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0629 = null;

    #[ORM\Column(name: "CA_BDotationQ0630", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0630 = null;

    #[ORM\Column(name: "CA_BDotationQ0631", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0631 = null;

    #[ORM\Column(name: "CA_BDotationQ0632", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0632 = null;

    #[ORM\Column(name: "CA_BDotationQ0633", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0633 = null;

    #[ORM\Column(name: "CA_BDotationQ0634", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0634 = null;

    #[ORM\Column(name: "CA_BDotationQ0635", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0635 = null;

    #[ORM\Column(name: "CA_BDotationQ0636", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $caBdotationq0636 = null;

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

    public function getNAnalytique(): ?int
    {
        return $this->nAnalytique;
    }

    public function setNAnalytique(int $nAnalytique): static
    {
        $this->nAnalytique = $nAnalytique;

        return $this;
    }

    public function getCaNum(): ?string
    {
        return $this->caNum;
    }

    public function setCaNum(string $caNum): static
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

    public function getCaBsens(): ?int
    {
        return $this->caBsens;
    }

    public function setCaBsens(?int $caBsens): static
    {
        $this->caBsens = $caBsens;

        return $this;
    }

    public function getCaBdotation0101(): ?string
    {
        return $this->caBdotation0101;
    }

    public function setCaBdotation0101(?string $caBdotation0101): static
    {
        $this->caBdotation0101 = $caBdotation0101;

        return $this;
    }

    public function getCaBdotation0102(): ?string
    {
        return $this->caBdotation0102;
    }

    public function setCaBdotation0102(?string $caBdotation0102): static
    {
        $this->caBdotation0102 = $caBdotation0102;

        return $this;
    }

    public function getCaBdotation0103(): ?string
    {
        return $this->caBdotation0103;
    }

    public function setCaBdotation0103(?string $caBdotation0103): static
    {
        $this->caBdotation0103 = $caBdotation0103;

        return $this;
    }

    public function getCaBdotation0104(): ?string
    {
        return $this->caBdotation0104;
    }

    public function setCaBdotation0104(?string $caBdotation0104): static
    {
        $this->caBdotation0104 = $caBdotation0104;

        return $this;
    }

    public function getCaBdotation0105(): ?string
    {
        return $this->caBdotation0105;
    }

    public function setCaBdotation0105(?string $caBdotation0105): static
    {
        $this->caBdotation0105 = $caBdotation0105;

        return $this;
    }

    public function getCaBdotation0106(): ?string
    {
        return $this->caBdotation0106;
    }

    public function setCaBdotation0106(?string $caBdotation0106): static
    {
        $this->caBdotation0106 = $caBdotation0106;

        return $this;
    }

    public function getCaBdotation0107(): ?string
    {
        return $this->caBdotation0107;
    }

    public function setCaBdotation0107(?string $caBdotation0107): static
    {
        $this->caBdotation0107 = $caBdotation0107;

        return $this;
    }

    public function getCaBdotation0108(): ?string
    {
        return $this->caBdotation0108;
    }

    public function setCaBdotation0108(?string $caBdotation0108): static
    {
        $this->caBdotation0108 = $caBdotation0108;

        return $this;
    }

    public function getCaBdotation0109(): ?string
    {
        return $this->caBdotation0109;
    }

    public function setCaBdotation0109(?string $caBdotation0109): static
    {
        $this->caBdotation0109 = $caBdotation0109;

        return $this;
    }

    public function getCaBdotation0110(): ?string
    {
        return $this->caBdotation0110;
    }

    public function setCaBdotation0110(?string $caBdotation0110): static
    {
        $this->caBdotation0110 = $caBdotation0110;

        return $this;
    }

    public function getCaBdotation0111(): ?string
    {
        return $this->caBdotation0111;
    }

    public function setCaBdotation0111(?string $caBdotation0111): static
    {
        $this->caBdotation0111 = $caBdotation0111;

        return $this;
    }

    public function getCaBdotation0112(): ?string
    {
        return $this->caBdotation0112;
    }

    public function setCaBdotation0112(?string $caBdotation0112): static
    {
        $this->caBdotation0112 = $caBdotation0112;

        return $this;
    }

    public function getCaBdotation0113(): ?string
    {
        return $this->caBdotation0113;
    }

    public function setCaBdotation0113(?string $caBdotation0113): static
    {
        $this->caBdotation0113 = $caBdotation0113;

        return $this;
    }

    public function getCaBdotation0114(): ?string
    {
        return $this->caBdotation0114;
    }

    public function setCaBdotation0114(?string $caBdotation0114): static
    {
        $this->caBdotation0114 = $caBdotation0114;

        return $this;
    }

    public function getCaBdotation0115(): ?string
    {
        return $this->caBdotation0115;
    }

    public function setCaBdotation0115(?string $caBdotation0115): static
    {
        $this->caBdotation0115 = $caBdotation0115;

        return $this;
    }

    public function getCaBdotation0116(): ?string
    {
        return $this->caBdotation0116;
    }

    public function setCaBdotation0116(?string $caBdotation0116): static
    {
        $this->caBdotation0116 = $caBdotation0116;

        return $this;
    }

    public function getCaBdotation0117(): ?string
    {
        return $this->caBdotation0117;
    }

    public function setCaBdotation0117(?string $caBdotation0117): static
    {
        $this->caBdotation0117 = $caBdotation0117;

        return $this;
    }

    public function getCaBdotation0118(): ?string
    {
        return $this->caBdotation0118;
    }

    public function setCaBdotation0118(?string $caBdotation0118): static
    {
        $this->caBdotation0118 = $caBdotation0118;

        return $this;
    }

    public function getCaBdotation0119(): ?string
    {
        return $this->caBdotation0119;
    }

    public function setCaBdotation0119(?string $caBdotation0119): static
    {
        $this->caBdotation0119 = $caBdotation0119;

        return $this;
    }

    public function getCaBdotation0120(): ?string
    {
        return $this->caBdotation0120;
    }

    public function setCaBdotation0120(?string $caBdotation0120): static
    {
        $this->caBdotation0120 = $caBdotation0120;

        return $this;
    }

    public function getCaBdotation0121(): ?string
    {
        return $this->caBdotation0121;
    }

    public function setCaBdotation0121(?string $caBdotation0121): static
    {
        $this->caBdotation0121 = $caBdotation0121;

        return $this;
    }

    public function getCaBdotation0122(): ?string
    {
        return $this->caBdotation0122;
    }

    public function setCaBdotation0122(?string $caBdotation0122): static
    {
        $this->caBdotation0122 = $caBdotation0122;

        return $this;
    }

    public function getCaBdotation0123(): ?string
    {
        return $this->caBdotation0123;
    }

    public function setCaBdotation0123(?string $caBdotation0123): static
    {
        $this->caBdotation0123 = $caBdotation0123;

        return $this;
    }

    public function getCaBdotation0124(): ?string
    {
        return $this->caBdotation0124;
    }

    public function setCaBdotation0124(?string $caBdotation0124): static
    {
        $this->caBdotation0124 = $caBdotation0124;

        return $this;
    }

    public function getCaBdotation0125(): ?string
    {
        return $this->caBdotation0125;
    }

    public function setCaBdotation0125(?string $caBdotation0125): static
    {
        $this->caBdotation0125 = $caBdotation0125;

        return $this;
    }

    public function getCaBdotation0126(): ?string
    {
        return $this->caBdotation0126;
    }

    public function setCaBdotation0126(?string $caBdotation0126): static
    {
        $this->caBdotation0126 = $caBdotation0126;

        return $this;
    }

    public function getCaBdotation0127(): ?string
    {
        return $this->caBdotation0127;
    }

    public function setCaBdotation0127(?string $caBdotation0127): static
    {
        $this->caBdotation0127 = $caBdotation0127;

        return $this;
    }

    public function getCaBdotation0128(): ?string
    {
        return $this->caBdotation0128;
    }

    public function setCaBdotation0128(?string $caBdotation0128): static
    {
        $this->caBdotation0128 = $caBdotation0128;

        return $this;
    }

    public function getCaBdotation0129(): ?string
    {
        return $this->caBdotation0129;
    }

    public function setCaBdotation0129(?string $caBdotation0129): static
    {
        $this->caBdotation0129 = $caBdotation0129;

        return $this;
    }

    public function getCaBdotation0130(): ?string
    {
        return $this->caBdotation0130;
    }

    public function setCaBdotation0130(?string $caBdotation0130): static
    {
        $this->caBdotation0130 = $caBdotation0130;

        return $this;
    }

    public function getCaBdotation0131(): ?string
    {
        return $this->caBdotation0131;
    }

    public function setCaBdotation0131(?string $caBdotation0131): static
    {
        $this->caBdotation0131 = $caBdotation0131;

        return $this;
    }

    public function getCaBdotation0132(): ?string
    {
        return $this->caBdotation0132;
    }

    public function setCaBdotation0132(?string $caBdotation0132): static
    {
        $this->caBdotation0132 = $caBdotation0132;

        return $this;
    }

    public function getCaBdotation0133(): ?string
    {
        return $this->caBdotation0133;
    }

    public function setCaBdotation0133(?string $caBdotation0133): static
    {
        $this->caBdotation0133 = $caBdotation0133;

        return $this;
    }

    public function getCaBdotation0134(): ?string
    {
        return $this->caBdotation0134;
    }

    public function setCaBdotation0134(?string $caBdotation0134): static
    {
        $this->caBdotation0134 = $caBdotation0134;

        return $this;
    }

    public function getCaBdotation0135(): ?string
    {
        return $this->caBdotation0135;
    }

    public function setCaBdotation0135(?string $caBdotation0135): static
    {
        $this->caBdotation0135 = $caBdotation0135;

        return $this;
    }

    public function getCaBdotation0136(): ?string
    {
        return $this->caBdotation0136;
    }

    public function setCaBdotation0136(?string $caBdotation0136): static
    {
        $this->caBdotation0136 = $caBdotation0136;

        return $this;
    }

    public function getCaBdotation0201(): ?string
    {
        return $this->caBdotation0201;
    }

    public function setCaBdotation0201(?string $caBdotation0201): static
    {
        $this->caBdotation0201 = $caBdotation0201;

        return $this;
    }

    public function getCaBdotation0202(): ?string
    {
        return $this->caBdotation0202;
    }

    public function setCaBdotation0202(?string $caBdotation0202): static
    {
        $this->caBdotation0202 = $caBdotation0202;

        return $this;
    }

    public function getCaBdotation0203(): ?string
    {
        return $this->caBdotation0203;
    }

    public function setCaBdotation0203(?string $caBdotation0203): static
    {
        $this->caBdotation0203 = $caBdotation0203;

        return $this;
    }

    public function getCaBdotation0204(): ?string
    {
        return $this->caBdotation0204;
    }

    public function setCaBdotation0204(?string $caBdotation0204): static
    {
        $this->caBdotation0204 = $caBdotation0204;

        return $this;
    }

    public function getCaBdotation0205(): ?string
    {
        return $this->caBdotation0205;
    }

    public function setCaBdotation0205(?string $caBdotation0205): static
    {
        $this->caBdotation0205 = $caBdotation0205;

        return $this;
    }

    public function getCaBdotation0206(): ?string
    {
        return $this->caBdotation0206;
    }

    public function setCaBdotation0206(?string $caBdotation0206): static
    {
        $this->caBdotation0206 = $caBdotation0206;

        return $this;
    }

    public function getCaBdotation0207(): ?string
    {
        return $this->caBdotation0207;
    }

    public function setCaBdotation0207(?string $caBdotation0207): static
    {
        $this->caBdotation0207 = $caBdotation0207;

        return $this;
    }

    public function getCaBdotation0208(): ?string
    {
        return $this->caBdotation0208;
    }

    public function setCaBdotation0208(?string $caBdotation0208): static
    {
        $this->caBdotation0208 = $caBdotation0208;

        return $this;
    }

    public function getCaBdotation0209(): ?string
    {
        return $this->caBdotation0209;
    }

    public function setCaBdotation0209(?string $caBdotation0209): static
    {
        $this->caBdotation0209 = $caBdotation0209;

        return $this;
    }

    public function getCaBdotation0210(): ?string
    {
        return $this->caBdotation0210;
    }

    public function setCaBdotation0210(?string $caBdotation0210): static
    {
        $this->caBdotation0210 = $caBdotation0210;

        return $this;
    }

    public function getCaBdotation0211(): ?string
    {
        return $this->caBdotation0211;
    }

    public function setCaBdotation0211(?string $caBdotation0211): static
    {
        $this->caBdotation0211 = $caBdotation0211;

        return $this;
    }

    public function getCaBdotation0212(): ?string
    {
        return $this->caBdotation0212;
    }

    public function setCaBdotation0212(?string $caBdotation0212): static
    {
        $this->caBdotation0212 = $caBdotation0212;

        return $this;
    }

    public function getCaBdotation0213(): ?string
    {
        return $this->caBdotation0213;
    }

    public function setCaBdotation0213(?string $caBdotation0213): static
    {
        $this->caBdotation0213 = $caBdotation0213;

        return $this;
    }

    public function getCaBdotation0214(): ?string
    {
        return $this->caBdotation0214;
    }

    public function setCaBdotation0214(?string $caBdotation0214): static
    {
        $this->caBdotation0214 = $caBdotation0214;

        return $this;
    }

    public function getCaBdotation0215(): ?string
    {
        return $this->caBdotation0215;
    }

    public function setCaBdotation0215(?string $caBdotation0215): static
    {
        $this->caBdotation0215 = $caBdotation0215;

        return $this;
    }

    public function getCaBdotation0216(): ?string
    {
        return $this->caBdotation0216;
    }

    public function setCaBdotation0216(?string $caBdotation0216): static
    {
        $this->caBdotation0216 = $caBdotation0216;

        return $this;
    }

    public function getCaBdotation0217(): ?string
    {
        return $this->caBdotation0217;
    }

    public function setCaBdotation0217(?string $caBdotation0217): static
    {
        $this->caBdotation0217 = $caBdotation0217;

        return $this;
    }

    public function getCaBdotation0218(): ?string
    {
        return $this->caBdotation0218;
    }

    public function setCaBdotation0218(?string $caBdotation0218): static
    {
        $this->caBdotation0218 = $caBdotation0218;

        return $this;
    }

    public function getCaBdotation0219(): ?string
    {
        return $this->caBdotation0219;
    }

    public function setCaBdotation0219(?string $caBdotation0219): static
    {
        $this->caBdotation0219 = $caBdotation0219;

        return $this;
    }

    public function getCaBdotation0220(): ?string
    {
        return $this->caBdotation0220;
    }

    public function setCaBdotation0220(?string $caBdotation0220): static
    {
        $this->caBdotation0220 = $caBdotation0220;

        return $this;
    }

    public function getCaBdotation0221(): ?string
    {
        return $this->caBdotation0221;
    }

    public function setCaBdotation0221(?string $caBdotation0221): static
    {
        $this->caBdotation0221 = $caBdotation0221;

        return $this;
    }

    public function getCaBdotation0222(): ?string
    {
        return $this->caBdotation0222;
    }

    public function setCaBdotation0222(?string $caBdotation0222): static
    {
        $this->caBdotation0222 = $caBdotation0222;

        return $this;
    }

    public function getCaBdotation0223(): ?string
    {
        return $this->caBdotation0223;
    }

    public function setCaBdotation0223(?string $caBdotation0223): static
    {
        $this->caBdotation0223 = $caBdotation0223;

        return $this;
    }

    public function getCaBdotation0224(): ?string
    {
        return $this->caBdotation0224;
    }

    public function setCaBdotation0224(?string $caBdotation0224): static
    {
        $this->caBdotation0224 = $caBdotation0224;

        return $this;
    }

    public function getCaBdotation0225(): ?string
    {
        return $this->caBdotation0225;
    }

    public function setCaBdotation0225(?string $caBdotation0225): static
    {
        $this->caBdotation0225 = $caBdotation0225;

        return $this;
    }

    public function getCaBdotation0226(): ?string
    {
        return $this->caBdotation0226;
    }

    public function setCaBdotation0226(?string $caBdotation0226): static
    {
        $this->caBdotation0226 = $caBdotation0226;

        return $this;
    }

    public function getCaBdotation0227(): ?string
    {
        return $this->caBdotation0227;
    }

    public function setCaBdotation0227(?string $caBdotation0227): static
    {
        $this->caBdotation0227 = $caBdotation0227;

        return $this;
    }

    public function getCaBdotation0228(): ?string
    {
        return $this->caBdotation0228;
    }

    public function setCaBdotation0228(?string $caBdotation0228): static
    {
        $this->caBdotation0228 = $caBdotation0228;

        return $this;
    }

    public function getCaBdotation0229(): ?string
    {
        return $this->caBdotation0229;
    }

    public function setCaBdotation0229(?string $caBdotation0229): static
    {
        $this->caBdotation0229 = $caBdotation0229;

        return $this;
    }

    public function getCaBdotation0230(): ?string
    {
        return $this->caBdotation0230;
    }

    public function setCaBdotation0230(?string $caBdotation0230): static
    {
        $this->caBdotation0230 = $caBdotation0230;

        return $this;
    }

    public function getCaBdotation0231(): ?string
    {
        return $this->caBdotation0231;
    }

    public function setCaBdotation0231(?string $caBdotation0231): static
    {
        $this->caBdotation0231 = $caBdotation0231;

        return $this;
    }

    public function getCaBdotation0232(): ?string
    {
        return $this->caBdotation0232;
    }

    public function setCaBdotation0232(?string $caBdotation0232): static
    {
        $this->caBdotation0232 = $caBdotation0232;

        return $this;
    }

    public function getCaBdotation0233(): ?string
    {
        return $this->caBdotation0233;
    }

    public function setCaBdotation0233(?string $caBdotation0233): static
    {
        $this->caBdotation0233 = $caBdotation0233;

        return $this;
    }

    public function getCaBdotation0234(): ?string
    {
        return $this->caBdotation0234;
    }

    public function setCaBdotation0234(?string $caBdotation0234): static
    {
        $this->caBdotation0234 = $caBdotation0234;

        return $this;
    }

    public function getCaBdotation0235(): ?string
    {
        return $this->caBdotation0235;
    }

    public function setCaBdotation0235(?string $caBdotation0235): static
    {
        $this->caBdotation0235 = $caBdotation0235;

        return $this;
    }

    public function getCaBdotation0236(): ?string
    {
        return $this->caBdotation0236;
    }

    public function setCaBdotation0236(?string $caBdotation0236): static
    {
        $this->caBdotation0236 = $caBdotation0236;

        return $this;
    }

    public function getCaBdotation0301(): ?string
    {
        return $this->caBdotation0301;
    }

    public function setCaBdotation0301(?string $caBdotation0301): static
    {
        $this->caBdotation0301 = $caBdotation0301;

        return $this;
    }

    public function getCaBdotation0302(): ?string
    {
        return $this->caBdotation0302;
    }

    public function setCaBdotation0302(?string $caBdotation0302): static
    {
        $this->caBdotation0302 = $caBdotation0302;

        return $this;
    }

    public function getCaBdotation0303(): ?string
    {
        return $this->caBdotation0303;
    }

    public function setCaBdotation0303(?string $caBdotation0303): static
    {
        $this->caBdotation0303 = $caBdotation0303;

        return $this;
    }

    public function getCaBdotation0304(): ?string
    {
        return $this->caBdotation0304;
    }

    public function setCaBdotation0304(?string $caBdotation0304): static
    {
        $this->caBdotation0304 = $caBdotation0304;

        return $this;
    }

    public function getCaBdotation0305(): ?string
    {
        return $this->caBdotation0305;
    }

    public function setCaBdotation0305(?string $caBdotation0305): static
    {
        $this->caBdotation0305 = $caBdotation0305;

        return $this;
    }

    public function getCaBdotation0306(): ?string
    {
        return $this->caBdotation0306;
    }

    public function setCaBdotation0306(?string $caBdotation0306): static
    {
        $this->caBdotation0306 = $caBdotation0306;

        return $this;
    }

    public function getCaBdotation0307(): ?string
    {
        return $this->caBdotation0307;
    }

    public function setCaBdotation0307(?string $caBdotation0307): static
    {
        $this->caBdotation0307 = $caBdotation0307;

        return $this;
    }

    public function getCaBdotation0308(): ?string
    {
        return $this->caBdotation0308;
    }

    public function setCaBdotation0308(?string $caBdotation0308): static
    {
        $this->caBdotation0308 = $caBdotation0308;

        return $this;
    }

    public function getCaBdotation0309(): ?string
    {
        return $this->caBdotation0309;
    }

    public function setCaBdotation0309(?string $caBdotation0309): static
    {
        $this->caBdotation0309 = $caBdotation0309;

        return $this;
    }

    public function getCaBdotation0310(): ?string
    {
        return $this->caBdotation0310;
    }

    public function setCaBdotation0310(?string $caBdotation0310): static
    {
        $this->caBdotation0310 = $caBdotation0310;

        return $this;
    }

    public function getCaBdotation0311(): ?string
    {
        return $this->caBdotation0311;
    }

    public function setCaBdotation0311(?string $caBdotation0311): static
    {
        $this->caBdotation0311 = $caBdotation0311;

        return $this;
    }

    public function getCaBdotation0312(): ?string
    {
        return $this->caBdotation0312;
    }

    public function setCaBdotation0312(?string $caBdotation0312): static
    {
        $this->caBdotation0312 = $caBdotation0312;

        return $this;
    }

    public function getCaBdotation0313(): ?string
    {
        return $this->caBdotation0313;
    }

    public function setCaBdotation0313(?string $caBdotation0313): static
    {
        $this->caBdotation0313 = $caBdotation0313;

        return $this;
    }

    public function getCaBdotation0314(): ?string
    {
        return $this->caBdotation0314;
    }

    public function setCaBdotation0314(?string $caBdotation0314): static
    {
        $this->caBdotation0314 = $caBdotation0314;

        return $this;
    }

    public function getCaBdotation0315(): ?string
    {
        return $this->caBdotation0315;
    }

    public function setCaBdotation0315(?string $caBdotation0315): static
    {
        $this->caBdotation0315 = $caBdotation0315;

        return $this;
    }

    public function getCaBdotation0316(): ?string
    {
        return $this->caBdotation0316;
    }

    public function setCaBdotation0316(?string $caBdotation0316): static
    {
        $this->caBdotation0316 = $caBdotation0316;

        return $this;
    }

    public function getCaBdotation0317(): ?string
    {
        return $this->caBdotation0317;
    }

    public function setCaBdotation0317(?string $caBdotation0317): static
    {
        $this->caBdotation0317 = $caBdotation0317;

        return $this;
    }

    public function getCaBdotation0318(): ?string
    {
        return $this->caBdotation0318;
    }

    public function setCaBdotation0318(?string $caBdotation0318): static
    {
        $this->caBdotation0318 = $caBdotation0318;

        return $this;
    }

    public function getCaBdotation0319(): ?string
    {
        return $this->caBdotation0319;
    }

    public function setCaBdotation0319(?string $caBdotation0319): static
    {
        $this->caBdotation0319 = $caBdotation0319;

        return $this;
    }

    public function getCaBdotation0320(): ?string
    {
        return $this->caBdotation0320;
    }

    public function setCaBdotation0320(?string $caBdotation0320): static
    {
        $this->caBdotation0320 = $caBdotation0320;

        return $this;
    }

    public function getCaBdotation0321(): ?string
    {
        return $this->caBdotation0321;
    }

    public function setCaBdotation0321(?string $caBdotation0321): static
    {
        $this->caBdotation0321 = $caBdotation0321;

        return $this;
    }

    public function getCaBdotation0322(): ?string
    {
        return $this->caBdotation0322;
    }

    public function setCaBdotation0322(?string $caBdotation0322): static
    {
        $this->caBdotation0322 = $caBdotation0322;

        return $this;
    }

    public function getCaBdotation0323(): ?string
    {
        return $this->caBdotation0323;
    }

    public function setCaBdotation0323(?string $caBdotation0323): static
    {
        $this->caBdotation0323 = $caBdotation0323;

        return $this;
    }

    public function getCaBdotation0324(): ?string
    {
        return $this->caBdotation0324;
    }

    public function setCaBdotation0324(?string $caBdotation0324): static
    {
        $this->caBdotation0324 = $caBdotation0324;

        return $this;
    }

    public function getCaBdotation0325(): ?string
    {
        return $this->caBdotation0325;
    }

    public function setCaBdotation0325(?string $caBdotation0325): static
    {
        $this->caBdotation0325 = $caBdotation0325;

        return $this;
    }

    public function getCaBdotation0326(): ?string
    {
        return $this->caBdotation0326;
    }

    public function setCaBdotation0326(?string $caBdotation0326): static
    {
        $this->caBdotation0326 = $caBdotation0326;

        return $this;
    }

    public function getCaBdotation0327(): ?string
    {
        return $this->caBdotation0327;
    }

    public function setCaBdotation0327(?string $caBdotation0327): static
    {
        $this->caBdotation0327 = $caBdotation0327;

        return $this;
    }

    public function getCaBdotation0328(): ?string
    {
        return $this->caBdotation0328;
    }

    public function setCaBdotation0328(?string $caBdotation0328): static
    {
        $this->caBdotation0328 = $caBdotation0328;

        return $this;
    }

    public function getCaBdotation0329(): ?string
    {
        return $this->caBdotation0329;
    }

    public function setCaBdotation0329(?string $caBdotation0329): static
    {
        $this->caBdotation0329 = $caBdotation0329;

        return $this;
    }

    public function getCaBdotation0330(): ?string
    {
        return $this->caBdotation0330;
    }

    public function setCaBdotation0330(?string $caBdotation0330): static
    {
        $this->caBdotation0330 = $caBdotation0330;

        return $this;
    }

    public function getCaBdotation0331(): ?string
    {
        return $this->caBdotation0331;
    }

    public function setCaBdotation0331(?string $caBdotation0331): static
    {
        $this->caBdotation0331 = $caBdotation0331;

        return $this;
    }

    public function getCaBdotation0332(): ?string
    {
        return $this->caBdotation0332;
    }

    public function setCaBdotation0332(?string $caBdotation0332): static
    {
        $this->caBdotation0332 = $caBdotation0332;

        return $this;
    }

    public function getCaBdotation0333(): ?string
    {
        return $this->caBdotation0333;
    }

    public function setCaBdotation0333(?string $caBdotation0333): static
    {
        $this->caBdotation0333 = $caBdotation0333;

        return $this;
    }

    public function getCaBdotation0334(): ?string
    {
        return $this->caBdotation0334;
    }

    public function setCaBdotation0334(?string $caBdotation0334): static
    {
        $this->caBdotation0334 = $caBdotation0334;

        return $this;
    }

    public function getCaBdotation0335(): ?string
    {
        return $this->caBdotation0335;
    }

    public function setCaBdotation0335(?string $caBdotation0335): static
    {
        $this->caBdotation0335 = $caBdotation0335;

        return $this;
    }

    public function getCaBdotation0336(): ?string
    {
        return $this->caBdotation0336;
    }

    public function setCaBdotation0336(?string $caBdotation0336): static
    {
        $this->caBdotation0336 = $caBdotation0336;

        return $this;
    }

    public function getCaBdotation0401(): ?string
    {
        return $this->caBdotation0401;
    }

    public function setCaBdotation0401(?string $caBdotation0401): static
    {
        $this->caBdotation0401 = $caBdotation0401;

        return $this;
    }

    public function getCaBdotation0402(): ?string
    {
        return $this->caBdotation0402;
    }

    public function setCaBdotation0402(?string $caBdotation0402): static
    {
        $this->caBdotation0402 = $caBdotation0402;

        return $this;
    }

    public function getCaBdotation0403(): ?string
    {
        return $this->caBdotation0403;
    }

    public function setCaBdotation0403(?string $caBdotation0403): static
    {
        $this->caBdotation0403 = $caBdotation0403;

        return $this;
    }

    public function getCaBdotation0404(): ?string
    {
        return $this->caBdotation0404;
    }

    public function setCaBdotation0404(?string $caBdotation0404): static
    {
        $this->caBdotation0404 = $caBdotation0404;

        return $this;
    }

    public function getCaBdotation0405(): ?string
    {
        return $this->caBdotation0405;
    }

    public function setCaBdotation0405(?string $caBdotation0405): static
    {
        $this->caBdotation0405 = $caBdotation0405;

        return $this;
    }

    public function getCaBdotation0406(): ?string
    {
        return $this->caBdotation0406;
    }

    public function setCaBdotation0406(?string $caBdotation0406): static
    {
        $this->caBdotation0406 = $caBdotation0406;

        return $this;
    }

    public function getCaBdotation0407(): ?string
    {
        return $this->caBdotation0407;
    }

    public function setCaBdotation0407(?string $caBdotation0407): static
    {
        $this->caBdotation0407 = $caBdotation0407;

        return $this;
    }

    public function getCaBdotation0408(): ?string
    {
        return $this->caBdotation0408;
    }

    public function setCaBdotation0408(?string $caBdotation0408): static
    {
        $this->caBdotation0408 = $caBdotation0408;

        return $this;
    }

    public function getCaBdotation0409(): ?string
    {
        return $this->caBdotation0409;
    }

    public function setCaBdotation0409(?string $caBdotation0409): static
    {
        $this->caBdotation0409 = $caBdotation0409;

        return $this;
    }

    public function getCaBdotation0410(): ?string
    {
        return $this->caBdotation0410;
    }

    public function setCaBdotation0410(?string $caBdotation0410): static
    {
        $this->caBdotation0410 = $caBdotation0410;

        return $this;
    }

    public function getCaBdotation0411(): ?string
    {
        return $this->caBdotation0411;
    }

    public function setCaBdotation0411(?string $caBdotation0411): static
    {
        $this->caBdotation0411 = $caBdotation0411;

        return $this;
    }

    public function getCaBdotation0412(): ?string
    {
        return $this->caBdotation0412;
    }

    public function setCaBdotation0412(?string $caBdotation0412): static
    {
        $this->caBdotation0412 = $caBdotation0412;

        return $this;
    }

    public function getCaBdotation0413(): ?string
    {
        return $this->caBdotation0413;
    }

    public function setCaBdotation0413(?string $caBdotation0413): static
    {
        $this->caBdotation0413 = $caBdotation0413;

        return $this;
    }

    public function getCaBdotation0414(): ?string
    {
        return $this->caBdotation0414;
    }

    public function setCaBdotation0414(?string $caBdotation0414): static
    {
        $this->caBdotation0414 = $caBdotation0414;

        return $this;
    }

    public function getCaBdotation0415(): ?string
    {
        return $this->caBdotation0415;
    }

    public function setCaBdotation0415(?string $caBdotation0415): static
    {
        $this->caBdotation0415 = $caBdotation0415;

        return $this;
    }

    public function getCaBdotation0416(): ?string
    {
        return $this->caBdotation0416;
    }

    public function setCaBdotation0416(?string $caBdotation0416): static
    {
        $this->caBdotation0416 = $caBdotation0416;

        return $this;
    }

    public function getCaBdotation0417(): ?string
    {
        return $this->caBdotation0417;
    }

    public function setCaBdotation0417(?string $caBdotation0417): static
    {
        $this->caBdotation0417 = $caBdotation0417;

        return $this;
    }

    public function getCaBdotation0418(): ?string
    {
        return $this->caBdotation0418;
    }

    public function setCaBdotation0418(?string $caBdotation0418): static
    {
        $this->caBdotation0418 = $caBdotation0418;

        return $this;
    }

    public function getCaBdotation0419(): ?string
    {
        return $this->caBdotation0419;
    }

    public function setCaBdotation0419(?string $caBdotation0419): static
    {
        $this->caBdotation0419 = $caBdotation0419;

        return $this;
    }

    public function getCaBdotation0420(): ?string
    {
        return $this->caBdotation0420;
    }

    public function setCaBdotation0420(?string $caBdotation0420): static
    {
        $this->caBdotation0420 = $caBdotation0420;

        return $this;
    }

    public function getCaBdotation0421(): ?string
    {
        return $this->caBdotation0421;
    }

    public function setCaBdotation0421(?string $caBdotation0421): static
    {
        $this->caBdotation0421 = $caBdotation0421;

        return $this;
    }

    public function getCaBdotation0422(): ?string
    {
        return $this->caBdotation0422;
    }

    public function setCaBdotation0422(?string $caBdotation0422): static
    {
        $this->caBdotation0422 = $caBdotation0422;

        return $this;
    }

    public function getCaBdotation0423(): ?string
    {
        return $this->caBdotation0423;
    }

    public function setCaBdotation0423(?string $caBdotation0423): static
    {
        $this->caBdotation0423 = $caBdotation0423;

        return $this;
    }

    public function getCaBdotation0424(): ?string
    {
        return $this->caBdotation0424;
    }

    public function setCaBdotation0424(?string $caBdotation0424): static
    {
        $this->caBdotation0424 = $caBdotation0424;

        return $this;
    }

    public function getCaBdotation0425(): ?string
    {
        return $this->caBdotation0425;
    }

    public function setCaBdotation0425(?string $caBdotation0425): static
    {
        $this->caBdotation0425 = $caBdotation0425;

        return $this;
    }

    public function getCaBdotation0426(): ?string
    {
        return $this->caBdotation0426;
    }

    public function setCaBdotation0426(?string $caBdotation0426): static
    {
        $this->caBdotation0426 = $caBdotation0426;

        return $this;
    }

    public function getCaBdotation0427(): ?string
    {
        return $this->caBdotation0427;
    }

    public function setCaBdotation0427(?string $caBdotation0427): static
    {
        $this->caBdotation0427 = $caBdotation0427;

        return $this;
    }

    public function getCaBdotation0428(): ?string
    {
        return $this->caBdotation0428;
    }

    public function setCaBdotation0428(?string $caBdotation0428): static
    {
        $this->caBdotation0428 = $caBdotation0428;

        return $this;
    }

    public function getCaBdotation0429(): ?string
    {
        return $this->caBdotation0429;
    }

    public function setCaBdotation0429(?string $caBdotation0429): static
    {
        $this->caBdotation0429 = $caBdotation0429;

        return $this;
    }

    public function getCaBdotation0430(): ?string
    {
        return $this->caBdotation0430;
    }

    public function setCaBdotation0430(?string $caBdotation0430): static
    {
        $this->caBdotation0430 = $caBdotation0430;

        return $this;
    }

    public function getCaBdotation0431(): ?string
    {
        return $this->caBdotation0431;
    }

    public function setCaBdotation0431(?string $caBdotation0431): static
    {
        $this->caBdotation0431 = $caBdotation0431;

        return $this;
    }

    public function getCaBdotation0432(): ?string
    {
        return $this->caBdotation0432;
    }

    public function setCaBdotation0432(?string $caBdotation0432): static
    {
        $this->caBdotation0432 = $caBdotation0432;

        return $this;
    }

    public function getCaBdotation0433(): ?string
    {
        return $this->caBdotation0433;
    }

    public function setCaBdotation0433(?string $caBdotation0433): static
    {
        $this->caBdotation0433 = $caBdotation0433;

        return $this;
    }

    public function getCaBdotation0434(): ?string
    {
        return $this->caBdotation0434;
    }

    public function setCaBdotation0434(?string $caBdotation0434): static
    {
        $this->caBdotation0434 = $caBdotation0434;

        return $this;
    }

    public function getCaBdotation0435(): ?string
    {
        return $this->caBdotation0435;
    }

    public function setCaBdotation0435(?string $caBdotation0435): static
    {
        $this->caBdotation0435 = $caBdotation0435;

        return $this;
    }

    public function getCaBdotation0436(): ?string
    {
        return $this->caBdotation0436;
    }

    public function setCaBdotation0436(?string $caBdotation0436): static
    {
        $this->caBdotation0436 = $caBdotation0436;

        return $this;
    }

    public function getCaBdotation0501(): ?string
    {
        return $this->caBdotation0501;
    }

    public function setCaBdotation0501(?string $caBdotation0501): static
    {
        $this->caBdotation0501 = $caBdotation0501;

        return $this;
    }

    public function getCaBdotation0502(): ?string
    {
        return $this->caBdotation0502;
    }

    public function setCaBdotation0502(?string $caBdotation0502): static
    {
        $this->caBdotation0502 = $caBdotation0502;

        return $this;
    }

    public function getCaBdotation0503(): ?string
    {
        return $this->caBdotation0503;
    }

    public function setCaBdotation0503(?string $caBdotation0503): static
    {
        $this->caBdotation0503 = $caBdotation0503;

        return $this;
    }

    public function getCaBdotation0504(): ?string
    {
        return $this->caBdotation0504;
    }

    public function setCaBdotation0504(?string $caBdotation0504): static
    {
        $this->caBdotation0504 = $caBdotation0504;

        return $this;
    }

    public function getCaBdotation0505(): ?string
    {
        return $this->caBdotation0505;
    }

    public function setCaBdotation0505(?string $caBdotation0505): static
    {
        $this->caBdotation0505 = $caBdotation0505;

        return $this;
    }

    public function getCaBdotation0506(): ?string
    {
        return $this->caBdotation0506;
    }

    public function setCaBdotation0506(?string $caBdotation0506): static
    {
        $this->caBdotation0506 = $caBdotation0506;

        return $this;
    }

    public function getCaBdotation0507(): ?string
    {
        return $this->caBdotation0507;
    }

    public function setCaBdotation0507(?string $caBdotation0507): static
    {
        $this->caBdotation0507 = $caBdotation0507;

        return $this;
    }

    public function getCaBdotation0508(): ?string
    {
        return $this->caBdotation0508;
    }

    public function setCaBdotation0508(?string $caBdotation0508): static
    {
        $this->caBdotation0508 = $caBdotation0508;

        return $this;
    }

    public function getCaBdotation0509(): ?string
    {
        return $this->caBdotation0509;
    }

    public function setCaBdotation0509(?string $caBdotation0509): static
    {
        $this->caBdotation0509 = $caBdotation0509;

        return $this;
    }

    public function getCaBdotation0510(): ?string
    {
        return $this->caBdotation0510;
    }

    public function setCaBdotation0510(?string $caBdotation0510): static
    {
        $this->caBdotation0510 = $caBdotation0510;

        return $this;
    }

    public function getCaBdotation0511(): ?string
    {
        return $this->caBdotation0511;
    }

    public function setCaBdotation0511(?string $caBdotation0511): static
    {
        $this->caBdotation0511 = $caBdotation0511;

        return $this;
    }

    public function getCaBdotation0512(): ?string
    {
        return $this->caBdotation0512;
    }

    public function setCaBdotation0512(?string $caBdotation0512): static
    {
        $this->caBdotation0512 = $caBdotation0512;

        return $this;
    }

    public function getCaBdotation0513(): ?string
    {
        return $this->caBdotation0513;
    }

    public function setCaBdotation0513(?string $caBdotation0513): static
    {
        $this->caBdotation0513 = $caBdotation0513;

        return $this;
    }

    public function getCaBdotation0514(): ?string
    {
        return $this->caBdotation0514;
    }

    public function setCaBdotation0514(?string $caBdotation0514): static
    {
        $this->caBdotation0514 = $caBdotation0514;

        return $this;
    }

    public function getCaBdotation0515(): ?string
    {
        return $this->caBdotation0515;
    }

    public function setCaBdotation0515(?string $caBdotation0515): static
    {
        $this->caBdotation0515 = $caBdotation0515;

        return $this;
    }

    public function getCaBdotation0516(): ?string
    {
        return $this->caBdotation0516;
    }

    public function setCaBdotation0516(?string $caBdotation0516): static
    {
        $this->caBdotation0516 = $caBdotation0516;

        return $this;
    }

    public function getCaBdotation0517(): ?string
    {
        return $this->caBdotation0517;
    }

    public function setCaBdotation0517(?string $caBdotation0517): static
    {
        $this->caBdotation0517 = $caBdotation0517;

        return $this;
    }

    public function getCaBdotation0518(): ?string
    {
        return $this->caBdotation0518;
    }

    public function setCaBdotation0518(?string $caBdotation0518): static
    {
        $this->caBdotation0518 = $caBdotation0518;

        return $this;
    }

    public function getCaBdotation0519(): ?string
    {
        return $this->caBdotation0519;
    }

    public function setCaBdotation0519(?string $caBdotation0519): static
    {
        $this->caBdotation0519 = $caBdotation0519;

        return $this;
    }

    public function getCaBdotation0520(): ?string
    {
        return $this->caBdotation0520;
    }

    public function setCaBdotation0520(?string $caBdotation0520): static
    {
        $this->caBdotation0520 = $caBdotation0520;

        return $this;
    }

    public function getCaBdotation0521(): ?string
    {
        return $this->caBdotation0521;
    }

    public function setCaBdotation0521(?string $caBdotation0521): static
    {
        $this->caBdotation0521 = $caBdotation0521;

        return $this;
    }

    public function getCaBdotation0522(): ?string
    {
        return $this->caBdotation0522;
    }

    public function setCaBdotation0522(?string $caBdotation0522): static
    {
        $this->caBdotation0522 = $caBdotation0522;

        return $this;
    }

    public function getCaBdotation0523(): ?string
    {
        return $this->caBdotation0523;
    }

    public function setCaBdotation0523(?string $caBdotation0523): static
    {
        $this->caBdotation0523 = $caBdotation0523;

        return $this;
    }

    public function getCaBdotation0524(): ?string
    {
        return $this->caBdotation0524;
    }

    public function setCaBdotation0524(?string $caBdotation0524): static
    {
        $this->caBdotation0524 = $caBdotation0524;

        return $this;
    }

    public function getCaBdotation0525(): ?string
    {
        return $this->caBdotation0525;
    }

    public function setCaBdotation0525(?string $caBdotation0525): static
    {
        $this->caBdotation0525 = $caBdotation0525;

        return $this;
    }

    public function getCaBdotation0526(): ?string
    {
        return $this->caBdotation0526;
    }

    public function setCaBdotation0526(?string $caBdotation0526): static
    {
        $this->caBdotation0526 = $caBdotation0526;

        return $this;
    }

    public function getCaBdotation0527(): ?string
    {
        return $this->caBdotation0527;
    }

    public function setCaBdotation0527(?string $caBdotation0527): static
    {
        $this->caBdotation0527 = $caBdotation0527;

        return $this;
    }

    public function getCaBdotation0528(): ?string
    {
        return $this->caBdotation0528;
    }

    public function setCaBdotation0528(?string $caBdotation0528): static
    {
        $this->caBdotation0528 = $caBdotation0528;

        return $this;
    }

    public function getCaBdotation0529(): ?string
    {
        return $this->caBdotation0529;
    }

    public function setCaBdotation0529(?string $caBdotation0529): static
    {
        $this->caBdotation0529 = $caBdotation0529;

        return $this;
    }

    public function getCaBdotation0530(): ?string
    {
        return $this->caBdotation0530;
    }

    public function setCaBdotation0530(?string $caBdotation0530): static
    {
        $this->caBdotation0530 = $caBdotation0530;

        return $this;
    }

    public function getCaBdotation0531(): ?string
    {
        return $this->caBdotation0531;
    }

    public function setCaBdotation0531(?string $caBdotation0531): static
    {
        $this->caBdotation0531 = $caBdotation0531;

        return $this;
    }

    public function getCaBdotation0532(): ?string
    {
        return $this->caBdotation0532;
    }

    public function setCaBdotation0532(?string $caBdotation0532): static
    {
        $this->caBdotation0532 = $caBdotation0532;

        return $this;
    }

    public function getCaBdotation0533(): ?string
    {
        return $this->caBdotation0533;
    }

    public function setCaBdotation0533(?string $caBdotation0533): static
    {
        $this->caBdotation0533 = $caBdotation0533;

        return $this;
    }

    public function getCaBdotation0534(): ?string
    {
        return $this->caBdotation0534;
    }

    public function setCaBdotation0534(?string $caBdotation0534): static
    {
        $this->caBdotation0534 = $caBdotation0534;

        return $this;
    }

    public function getCaBdotation0535(): ?string
    {
        return $this->caBdotation0535;
    }

    public function setCaBdotation0535(?string $caBdotation0535): static
    {
        $this->caBdotation0535 = $caBdotation0535;

        return $this;
    }

    public function getCaBdotation0536(): ?string
    {
        return $this->caBdotation0536;
    }

    public function setCaBdotation0536(?string $caBdotation0536): static
    {
        $this->caBdotation0536 = $caBdotation0536;

        return $this;
    }

    public function getCaBdotation0601(): ?string
    {
        return $this->caBdotation0601;
    }

    public function setCaBdotation0601(?string $caBdotation0601): static
    {
        $this->caBdotation0601 = $caBdotation0601;

        return $this;
    }

    public function getCaBdotation0602(): ?string
    {
        return $this->caBdotation0602;
    }

    public function setCaBdotation0602(?string $caBdotation0602): static
    {
        $this->caBdotation0602 = $caBdotation0602;

        return $this;
    }

    public function getCaBdotation0603(): ?string
    {
        return $this->caBdotation0603;
    }

    public function setCaBdotation0603(?string $caBdotation0603): static
    {
        $this->caBdotation0603 = $caBdotation0603;

        return $this;
    }

    public function getCaBdotation0604(): ?string
    {
        return $this->caBdotation0604;
    }

    public function setCaBdotation0604(?string $caBdotation0604): static
    {
        $this->caBdotation0604 = $caBdotation0604;

        return $this;
    }

    public function getCaBdotation0605(): ?string
    {
        return $this->caBdotation0605;
    }

    public function setCaBdotation0605(?string $caBdotation0605): static
    {
        $this->caBdotation0605 = $caBdotation0605;

        return $this;
    }

    public function getCaBdotation0606(): ?string
    {
        return $this->caBdotation0606;
    }

    public function setCaBdotation0606(?string $caBdotation0606): static
    {
        $this->caBdotation0606 = $caBdotation0606;

        return $this;
    }

    public function getCaBdotation0607(): ?string
    {
        return $this->caBdotation0607;
    }

    public function setCaBdotation0607(?string $caBdotation0607): static
    {
        $this->caBdotation0607 = $caBdotation0607;

        return $this;
    }

    public function getCaBdotation0608(): ?string
    {
        return $this->caBdotation0608;
    }

    public function setCaBdotation0608(?string $caBdotation0608): static
    {
        $this->caBdotation0608 = $caBdotation0608;

        return $this;
    }

    public function getCaBdotation0609(): ?string
    {
        return $this->caBdotation0609;
    }

    public function setCaBdotation0609(?string $caBdotation0609): static
    {
        $this->caBdotation0609 = $caBdotation0609;

        return $this;
    }

    public function getCaBdotation0610(): ?string
    {
        return $this->caBdotation0610;
    }

    public function setCaBdotation0610(?string $caBdotation0610): static
    {
        $this->caBdotation0610 = $caBdotation0610;

        return $this;
    }

    public function getCaBdotation0611(): ?string
    {
        return $this->caBdotation0611;
    }

    public function setCaBdotation0611(?string $caBdotation0611): static
    {
        $this->caBdotation0611 = $caBdotation0611;

        return $this;
    }

    public function getCaBdotation0612(): ?string
    {
        return $this->caBdotation0612;
    }

    public function setCaBdotation0612(?string $caBdotation0612): static
    {
        $this->caBdotation0612 = $caBdotation0612;

        return $this;
    }

    public function getCaBdotation0613(): ?string
    {
        return $this->caBdotation0613;
    }

    public function setCaBdotation0613(?string $caBdotation0613): static
    {
        $this->caBdotation0613 = $caBdotation0613;

        return $this;
    }

    public function getCaBdotation0614(): ?string
    {
        return $this->caBdotation0614;
    }

    public function setCaBdotation0614(?string $caBdotation0614): static
    {
        $this->caBdotation0614 = $caBdotation0614;

        return $this;
    }

    public function getCaBdotation0615(): ?string
    {
        return $this->caBdotation0615;
    }

    public function setCaBdotation0615(?string $caBdotation0615): static
    {
        $this->caBdotation0615 = $caBdotation0615;

        return $this;
    }

    public function getCaBdotation0616(): ?string
    {
        return $this->caBdotation0616;
    }

    public function setCaBdotation0616(?string $caBdotation0616): static
    {
        $this->caBdotation0616 = $caBdotation0616;

        return $this;
    }

    public function getCaBdotation0617(): ?string
    {
        return $this->caBdotation0617;
    }

    public function setCaBdotation0617(?string $caBdotation0617): static
    {
        $this->caBdotation0617 = $caBdotation0617;

        return $this;
    }

    public function getCaBdotation0618(): ?string
    {
        return $this->caBdotation0618;
    }

    public function setCaBdotation0618(?string $caBdotation0618): static
    {
        $this->caBdotation0618 = $caBdotation0618;

        return $this;
    }

    public function getCaBdotation0619(): ?string
    {
        return $this->caBdotation0619;
    }

    public function setCaBdotation0619(?string $caBdotation0619): static
    {
        $this->caBdotation0619 = $caBdotation0619;

        return $this;
    }

    public function getCaBdotation0620(): ?string
    {
        return $this->caBdotation0620;
    }

    public function setCaBdotation0620(?string $caBdotation0620): static
    {
        $this->caBdotation0620 = $caBdotation0620;

        return $this;
    }

    public function getCaBdotation0621(): ?string
    {
        return $this->caBdotation0621;
    }

    public function setCaBdotation0621(?string $caBdotation0621): static
    {
        $this->caBdotation0621 = $caBdotation0621;

        return $this;
    }

    public function getCaBdotation0622(): ?string
    {
        return $this->caBdotation0622;
    }

    public function setCaBdotation0622(?string $caBdotation0622): static
    {
        $this->caBdotation0622 = $caBdotation0622;

        return $this;
    }

    public function getCaBdotation0623(): ?string
    {
        return $this->caBdotation0623;
    }

    public function setCaBdotation0623(?string $caBdotation0623): static
    {
        $this->caBdotation0623 = $caBdotation0623;

        return $this;
    }

    public function getCaBdotation0624(): ?string
    {
        return $this->caBdotation0624;
    }

    public function setCaBdotation0624(?string $caBdotation0624): static
    {
        $this->caBdotation0624 = $caBdotation0624;

        return $this;
    }

    public function getCaBdotation0625(): ?string
    {
        return $this->caBdotation0625;
    }

    public function setCaBdotation0625(?string $caBdotation0625): static
    {
        $this->caBdotation0625 = $caBdotation0625;

        return $this;
    }

    public function getCaBdotation0626(): ?string
    {
        return $this->caBdotation0626;
    }

    public function setCaBdotation0626(?string $caBdotation0626): static
    {
        $this->caBdotation0626 = $caBdotation0626;

        return $this;
    }

    public function getCaBdotation0627(): ?string
    {
        return $this->caBdotation0627;
    }

    public function setCaBdotation0627(?string $caBdotation0627): static
    {
        $this->caBdotation0627 = $caBdotation0627;

        return $this;
    }

    public function getCaBdotation0628(): ?string
    {
        return $this->caBdotation0628;
    }

    public function setCaBdotation0628(?string $caBdotation0628): static
    {
        $this->caBdotation0628 = $caBdotation0628;

        return $this;
    }

    public function getCaBdotation0629(): ?string
    {
        return $this->caBdotation0629;
    }

    public function setCaBdotation0629(?string $caBdotation0629): static
    {
        $this->caBdotation0629 = $caBdotation0629;

        return $this;
    }

    public function getCaBdotation0630(): ?string
    {
        return $this->caBdotation0630;
    }

    public function setCaBdotation0630(?string $caBdotation0630): static
    {
        $this->caBdotation0630 = $caBdotation0630;

        return $this;
    }

    public function getCaBdotation0631(): ?string
    {
        return $this->caBdotation0631;
    }

    public function setCaBdotation0631(?string $caBdotation0631): static
    {
        $this->caBdotation0631 = $caBdotation0631;

        return $this;
    }

    public function getCaBdotation0632(): ?string
    {
        return $this->caBdotation0632;
    }

    public function setCaBdotation0632(?string $caBdotation0632): static
    {
        $this->caBdotation0632 = $caBdotation0632;

        return $this;
    }

    public function getCaBdotation0633(): ?string
    {
        return $this->caBdotation0633;
    }

    public function setCaBdotation0633(?string $caBdotation0633): static
    {
        $this->caBdotation0633 = $caBdotation0633;

        return $this;
    }

    public function getCaBdotation0634(): ?string
    {
        return $this->caBdotation0634;
    }

    public function setCaBdotation0634(?string $caBdotation0634): static
    {
        $this->caBdotation0634 = $caBdotation0634;

        return $this;
    }

    public function getCaBdotation0635(): ?string
    {
        return $this->caBdotation0635;
    }

    public function setCaBdotation0635(?string $caBdotation0635): static
    {
        $this->caBdotation0635 = $caBdotation0635;

        return $this;
    }

    public function getCaBdotation0636(): ?string
    {
        return $this->caBdotation0636;
    }

    public function setCaBdotation0636(?string $caBdotation0636): static
    {
        $this->caBdotation0636 = $caBdotation0636;

        return $this;
    }

    public function getCaBdotationq0101(): ?string
    {
        return $this->caBdotationq0101;
    }

    public function setCaBdotationq0101(?string $caBdotationq0101): static
    {
        $this->caBdotationq0101 = $caBdotationq0101;

        return $this;
    }

    public function getCaBdotationq0102(): ?string
    {
        return $this->caBdotationq0102;
    }

    public function setCaBdotationq0102(?string $caBdotationq0102): static
    {
        $this->caBdotationq0102 = $caBdotationq0102;

        return $this;
    }

    public function getCaBdotationq0103(): ?string
    {
        return $this->caBdotationq0103;
    }

    public function setCaBdotationq0103(?string $caBdotationq0103): static
    {
        $this->caBdotationq0103 = $caBdotationq0103;

        return $this;
    }

    public function getCaBdotationq0104(): ?string
    {
        return $this->caBdotationq0104;
    }

    public function setCaBdotationq0104(?string $caBdotationq0104): static
    {
        $this->caBdotationq0104 = $caBdotationq0104;

        return $this;
    }

    public function getCaBdotationq0105(): ?string
    {
        return $this->caBdotationq0105;
    }

    public function setCaBdotationq0105(?string $caBdotationq0105): static
    {
        $this->caBdotationq0105 = $caBdotationq0105;

        return $this;
    }

    public function getCaBdotationq0106(): ?string
    {
        return $this->caBdotationq0106;
    }

    public function setCaBdotationq0106(?string $caBdotationq0106): static
    {
        $this->caBdotationq0106 = $caBdotationq0106;

        return $this;
    }

    public function getCaBdotationq0107(): ?string
    {
        return $this->caBdotationq0107;
    }

    public function setCaBdotationq0107(?string $caBdotationq0107): static
    {
        $this->caBdotationq0107 = $caBdotationq0107;

        return $this;
    }

    public function getCaBdotationq0108(): ?string
    {
        return $this->caBdotationq0108;
    }

    public function setCaBdotationq0108(?string $caBdotationq0108): static
    {
        $this->caBdotationq0108 = $caBdotationq0108;

        return $this;
    }

    public function getCaBdotationq0109(): ?string
    {
        return $this->caBdotationq0109;
    }

    public function setCaBdotationq0109(?string $caBdotationq0109): static
    {
        $this->caBdotationq0109 = $caBdotationq0109;

        return $this;
    }

    public function getCaBdotationq0110(): ?string
    {
        return $this->caBdotationq0110;
    }

    public function setCaBdotationq0110(?string $caBdotationq0110): static
    {
        $this->caBdotationq0110 = $caBdotationq0110;

        return $this;
    }

    public function getCaBdotationq0111(): ?string
    {
        return $this->caBdotationq0111;
    }

    public function setCaBdotationq0111(?string $caBdotationq0111): static
    {
        $this->caBdotationq0111 = $caBdotationq0111;

        return $this;
    }

    public function getCaBdotationq0112(): ?string
    {
        return $this->caBdotationq0112;
    }

    public function setCaBdotationq0112(?string $caBdotationq0112): static
    {
        $this->caBdotationq0112 = $caBdotationq0112;

        return $this;
    }

    public function getCaBdotationq0113(): ?string
    {
        return $this->caBdotationq0113;
    }

    public function setCaBdotationq0113(?string $caBdotationq0113): static
    {
        $this->caBdotationq0113 = $caBdotationq0113;

        return $this;
    }

    public function getCaBdotationq0114(): ?string
    {
        return $this->caBdotationq0114;
    }

    public function setCaBdotationq0114(?string $caBdotationq0114): static
    {
        $this->caBdotationq0114 = $caBdotationq0114;

        return $this;
    }

    public function getCaBdotationq0115(): ?string
    {
        return $this->caBdotationq0115;
    }

    public function setCaBdotationq0115(?string $caBdotationq0115): static
    {
        $this->caBdotationq0115 = $caBdotationq0115;

        return $this;
    }

    public function getCaBdotationq0116(): ?string
    {
        return $this->caBdotationq0116;
    }

    public function setCaBdotationq0116(?string $caBdotationq0116): static
    {
        $this->caBdotationq0116 = $caBdotationq0116;

        return $this;
    }

    public function getCaBdotationq0117(): ?string
    {
        return $this->caBdotationq0117;
    }

    public function setCaBdotationq0117(?string $caBdotationq0117): static
    {
        $this->caBdotationq0117 = $caBdotationq0117;

        return $this;
    }

    public function getCaBdotationq0118(): ?string
    {
        return $this->caBdotationq0118;
    }

    public function setCaBdotationq0118(?string $caBdotationq0118): static
    {
        $this->caBdotationq0118 = $caBdotationq0118;

        return $this;
    }

    public function getCaBdotationq0119(): ?string
    {
        return $this->caBdotationq0119;
    }

    public function setCaBdotationq0119(?string $caBdotationq0119): static
    {
        $this->caBdotationq0119 = $caBdotationq0119;

        return $this;
    }

    public function getCaBdotationq0120(): ?string
    {
        return $this->caBdotationq0120;
    }

    public function setCaBdotationq0120(?string $caBdotationq0120): static
    {
        $this->caBdotationq0120 = $caBdotationq0120;

        return $this;
    }

    public function getCaBdotationq0121(): ?string
    {
        return $this->caBdotationq0121;
    }

    public function setCaBdotationq0121(?string $caBdotationq0121): static
    {
        $this->caBdotationq0121 = $caBdotationq0121;

        return $this;
    }

    public function getCaBdotationq0122(): ?string
    {
        return $this->caBdotationq0122;
    }

    public function setCaBdotationq0122(?string $caBdotationq0122): static
    {
        $this->caBdotationq0122 = $caBdotationq0122;

        return $this;
    }

    public function getCaBdotationq0123(): ?string
    {
        return $this->caBdotationq0123;
    }

    public function setCaBdotationq0123(?string $caBdotationq0123): static
    {
        $this->caBdotationq0123 = $caBdotationq0123;

        return $this;
    }

    public function getCaBdotationq0124(): ?string
    {
        return $this->caBdotationq0124;
    }

    public function setCaBdotationq0124(?string $caBdotationq0124): static
    {
        $this->caBdotationq0124 = $caBdotationq0124;

        return $this;
    }

    public function getCaBdotationq0125(): ?string
    {
        return $this->caBdotationq0125;
    }

    public function setCaBdotationq0125(?string $caBdotationq0125): static
    {
        $this->caBdotationq0125 = $caBdotationq0125;

        return $this;
    }

    public function getCaBdotationq0126(): ?string
    {
        return $this->caBdotationq0126;
    }

    public function setCaBdotationq0126(?string $caBdotationq0126): static
    {
        $this->caBdotationq0126 = $caBdotationq0126;

        return $this;
    }

    public function getCaBdotationq0127(): ?string
    {
        return $this->caBdotationq0127;
    }

    public function setCaBdotationq0127(?string $caBdotationq0127): static
    {
        $this->caBdotationq0127 = $caBdotationq0127;

        return $this;
    }

    public function getCaBdotationq0128(): ?string
    {
        return $this->caBdotationq0128;
    }

    public function setCaBdotationq0128(?string $caBdotationq0128): static
    {
        $this->caBdotationq0128 = $caBdotationq0128;

        return $this;
    }

    public function getCaBdotationq0129(): ?string
    {
        return $this->caBdotationq0129;
    }

    public function setCaBdotationq0129(?string $caBdotationq0129): static
    {
        $this->caBdotationq0129 = $caBdotationq0129;

        return $this;
    }

    public function getCaBdotationq0130(): ?string
    {
        return $this->caBdotationq0130;
    }

    public function setCaBdotationq0130(?string $caBdotationq0130): static
    {
        $this->caBdotationq0130 = $caBdotationq0130;

        return $this;
    }

    public function getCaBdotationq0131(): ?string
    {
        return $this->caBdotationq0131;
    }

    public function setCaBdotationq0131(?string $caBdotationq0131): static
    {
        $this->caBdotationq0131 = $caBdotationq0131;

        return $this;
    }

    public function getCaBdotationq0132(): ?string
    {
        return $this->caBdotationq0132;
    }

    public function setCaBdotationq0132(?string $caBdotationq0132): static
    {
        $this->caBdotationq0132 = $caBdotationq0132;

        return $this;
    }

    public function getCaBdotationq0133(): ?string
    {
        return $this->caBdotationq0133;
    }

    public function setCaBdotationq0133(?string $caBdotationq0133): static
    {
        $this->caBdotationq0133 = $caBdotationq0133;

        return $this;
    }

    public function getCaBdotationq0134(): ?string
    {
        return $this->caBdotationq0134;
    }

    public function setCaBdotationq0134(?string $caBdotationq0134): static
    {
        $this->caBdotationq0134 = $caBdotationq0134;

        return $this;
    }

    public function getCaBdotationq0135(): ?string
    {
        return $this->caBdotationq0135;
    }

    public function setCaBdotationq0135(?string $caBdotationq0135): static
    {
        $this->caBdotationq0135 = $caBdotationq0135;

        return $this;
    }

    public function getCaBdotationq0136(): ?string
    {
        return $this->caBdotationq0136;
    }

    public function setCaBdotationq0136(?string $caBdotationq0136): static
    {
        $this->caBdotationq0136 = $caBdotationq0136;

        return $this;
    }

    public function getCaBdotationq0201(): ?string
    {
        return $this->caBdotationq0201;
    }

    public function setCaBdotationq0201(?string $caBdotationq0201): static
    {
        $this->caBdotationq0201 = $caBdotationq0201;

        return $this;
    }

    public function getCaBdotationq0202(): ?string
    {
        return $this->caBdotationq0202;
    }

    public function setCaBdotationq0202(?string $caBdotationq0202): static
    {
        $this->caBdotationq0202 = $caBdotationq0202;

        return $this;
    }

    public function getCaBdotationq0203(): ?string
    {
        return $this->caBdotationq0203;
    }

    public function setCaBdotationq0203(?string $caBdotationq0203): static
    {
        $this->caBdotationq0203 = $caBdotationq0203;

        return $this;
    }

    public function getCaBdotationq0204(): ?string
    {
        return $this->caBdotationq0204;
    }

    public function setCaBdotationq0204(?string $caBdotationq0204): static
    {
        $this->caBdotationq0204 = $caBdotationq0204;

        return $this;
    }

    public function getCaBdotationq0205(): ?string
    {
        return $this->caBdotationq0205;
    }

    public function setCaBdotationq0205(?string $caBdotationq0205): static
    {
        $this->caBdotationq0205 = $caBdotationq0205;

        return $this;
    }

    public function getCaBdotationq0206(): ?string
    {
        return $this->caBdotationq0206;
    }

    public function setCaBdotationq0206(?string $caBdotationq0206): static
    {
        $this->caBdotationq0206 = $caBdotationq0206;

        return $this;
    }

    public function getCaBdotationq0207(): ?string
    {
        return $this->caBdotationq0207;
    }

    public function setCaBdotationq0207(?string $caBdotationq0207): static
    {
        $this->caBdotationq0207 = $caBdotationq0207;

        return $this;
    }

    public function getCaBdotationq0208(): ?string
    {
        return $this->caBdotationq0208;
    }

    public function setCaBdotationq0208(?string $caBdotationq0208): static
    {
        $this->caBdotationq0208 = $caBdotationq0208;

        return $this;
    }

    public function getCaBdotationq0209(): ?string
    {
        return $this->caBdotationq0209;
    }

    public function setCaBdotationq0209(?string $caBdotationq0209): static
    {
        $this->caBdotationq0209 = $caBdotationq0209;

        return $this;
    }

    public function getCaBdotationq0210(): ?string
    {
        return $this->caBdotationq0210;
    }

    public function setCaBdotationq0210(?string $caBdotationq0210): static
    {
        $this->caBdotationq0210 = $caBdotationq0210;

        return $this;
    }

    public function getCaBdotationq0211(): ?string
    {
        return $this->caBdotationq0211;
    }

    public function setCaBdotationq0211(?string $caBdotationq0211): static
    {
        $this->caBdotationq0211 = $caBdotationq0211;

        return $this;
    }

    public function getCaBdotationq0212(): ?string
    {
        return $this->caBdotationq0212;
    }

    public function setCaBdotationq0212(?string $caBdotationq0212): static
    {
        $this->caBdotationq0212 = $caBdotationq0212;

        return $this;
    }

    public function getCaBdotationq0213(): ?string
    {
        return $this->caBdotationq0213;
    }

    public function setCaBdotationq0213(?string $caBdotationq0213): static
    {
        $this->caBdotationq0213 = $caBdotationq0213;

        return $this;
    }

    public function getCaBdotationq0214(): ?string
    {
        return $this->caBdotationq0214;
    }

    public function setCaBdotationq0214(?string $caBdotationq0214): static
    {
        $this->caBdotationq0214 = $caBdotationq0214;

        return $this;
    }

    public function getCaBdotationq0215(): ?string
    {
        return $this->caBdotationq0215;
    }

    public function setCaBdotationq0215(?string $caBdotationq0215): static
    {
        $this->caBdotationq0215 = $caBdotationq0215;

        return $this;
    }

    public function getCaBdotationq0216(): ?string
    {
        return $this->caBdotationq0216;
    }

    public function setCaBdotationq0216(?string $caBdotationq0216): static
    {
        $this->caBdotationq0216 = $caBdotationq0216;

        return $this;
    }

    public function getCaBdotationq0217(): ?string
    {
        return $this->caBdotationq0217;
    }

    public function setCaBdotationq0217(?string $caBdotationq0217): static
    {
        $this->caBdotationq0217 = $caBdotationq0217;

        return $this;
    }

    public function getCaBdotationq0218(): ?string
    {
        return $this->caBdotationq0218;
    }

    public function setCaBdotationq0218(?string $caBdotationq0218): static
    {
        $this->caBdotationq0218 = $caBdotationq0218;

        return $this;
    }

    public function getCaBdotationq0219(): ?string
    {
        return $this->caBdotationq0219;
    }

    public function setCaBdotationq0219(?string $caBdotationq0219): static
    {
        $this->caBdotationq0219 = $caBdotationq0219;

        return $this;
    }

    public function getCaBdotationq0220(): ?string
    {
        return $this->caBdotationq0220;
    }

    public function setCaBdotationq0220(?string $caBdotationq0220): static
    {
        $this->caBdotationq0220 = $caBdotationq0220;

        return $this;
    }

    public function getCaBdotationq0221(): ?string
    {
        return $this->caBdotationq0221;
    }

    public function setCaBdotationq0221(?string $caBdotationq0221): static
    {
        $this->caBdotationq0221 = $caBdotationq0221;

        return $this;
    }

    public function getCaBdotationq0222(): ?string
    {
        return $this->caBdotationq0222;
    }

    public function setCaBdotationq0222(?string $caBdotationq0222): static
    {
        $this->caBdotationq0222 = $caBdotationq0222;

        return $this;
    }

    public function getCaBdotationq0223(): ?string
    {
        return $this->caBdotationq0223;
    }

    public function setCaBdotationq0223(?string $caBdotationq0223): static
    {
        $this->caBdotationq0223 = $caBdotationq0223;

        return $this;
    }

    public function getCaBdotationq0224(): ?string
    {
        return $this->caBdotationq0224;
    }

    public function setCaBdotationq0224(?string $caBdotationq0224): static
    {
        $this->caBdotationq0224 = $caBdotationq0224;

        return $this;
    }

    public function getCaBdotationq0225(): ?string
    {
        return $this->caBdotationq0225;
    }

    public function setCaBdotationq0225(?string $caBdotationq0225): static
    {
        $this->caBdotationq0225 = $caBdotationq0225;

        return $this;
    }

    public function getCaBdotationq0226(): ?string
    {
        return $this->caBdotationq0226;
    }

    public function setCaBdotationq0226(?string $caBdotationq0226): static
    {
        $this->caBdotationq0226 = $caBdotationq0226;

        return $this;
    }

    public function getCaBdotationq0227(): ?string
    {
        return $this->caBdotationq0227;
    }

    public function setCaBdotationq0227(?string $caBdotationq0227): static
    {
        $this->caBdotationq0227 = $caBdotationq0227;

        return $this;
    }

    public function getCaBdotationq0228(): ?string
    {
        return $this->caBdotationq0228;
    }

    public function setCaBdotationq0228(?string $caBdotationq0228): static
    {
        $this->caBdotationq0228 = $caBdotationq0228;

        return $this;
    }

    public function getCaBdotationq0229(): ?string
    {
        return $this->caBdotationq0229;
    }

    public function setCaBdotationq0229(?string $caBdotationq0229): static
    {
        $this->caBdotationq0229 = $caBdotationq0229;

        return $this;
    }

    public function getCaBdotationq0230(): ?string
    {
        return $this->caBdotationq0230;
    }

    public function setCaBdotationq0230(?string $caBdotationq0230): static
    {
        $this->caBdotationq0230 = $caBdotationq0230;

        return $this;
    }

    public function getCaBdotationq0231(): ?string
    {
        return $this->caBdotationq0231;
    }

    public function setCaBdotationq0231(?string $caBdotationq0231): static
    {
        $this->caBdotationq0231 = $caBdotationq0231;

        return $this;
    }

    public function getCaBdotationq0232(): ?string
    {
        return $this->caBdotationq0232;
    }

    public function setCaBdotationq0232(?string $caBdotationq0232): static
    {
        $this->caBdotationq0232 = $caBdotationq0232;

        return $this;
    }

    public function getCaBdotationq0233(): ?string
    {
        return $this->caBdotationq0233;
    }

    public function setCaBdotationq0233(?string $caBdotationq0233): static
    {
        $this->caBdotationq0233 = $caBdotationq0233;

        return $this;
    }

    public function getCaBdotationq0234(): ?string
    {
        return $this->caBdotationq0234;
    }

    public function setCaBdotationq0234(?string $caBdotationq0234): static
    {
        $this->caBdotationq0234 = $caBdotationq0234;

        return $this;
    }

    public function getCaBdotationq0235(): ?string
    {
        return $this->caBdotationq0235;
    }

    public function setCaBdotationq0235(?string $caBdotationq0235): static
    {
        $this->caBdotationq0235 = $caBdotationq0235;

        return $this;
    }

    public function getCaBdotationq0236(): ?string
    {
        return $this->caBdotationq0236;
    }

    public function setCaBdotationq0236(?string $caBdotationq0236): static
    {
        $this->caBdotationq0236 = $caBdotationq0236;

        return $this;
    }

    public function getCaBdotationq0301(): ?string
    {
        return $this->caBdotationq0301;
    }

    public function setCaBdotationq0301(?string $caBdotationq0301): static
    {
        $this->caBdotationq0301 = $caBdotationq0301;

        return $this;
    }

    public function getCaBdotationq0302(): ?string
    {
        return $this->caBdotationq0302;
    }

    public function setCaBdotationq0302(?string $caBdotationq0302): static
    {
        $this->caBdotationq0302 = $caBdotationq0302;

        return $this;
    }

    public function getCaBdotationq0303(): ?string
    {
        return $this->caBdotationq0303;
    }

    public function setCaBdotationq0303(?string $caBdotationq0303): static
    {
        $this->caBdotationq0303 = $caBdotationq0303;

        return $this;
    }

    public function getCaBdotationq0304(): ?string
    {
        return $this->caBdotationq0304;
    }

    public function setCaBdotationq0304(?string $caBdotationq0304): static
    {
        $this->caBdotationq0304 = $caBdotationq0304;

        return $this;
    }

    public function getCaBdotationq0305(): ?string
    {
        return $this->caBdotationq0305;
    }

    public function setCaBdotationq0305(?string $caBdotationq0305): static
    {
        $this->caBdotationq0305 = $caBdotationq0305;

        return $this;
    }

    public function getCaBdotationq0306(): ?string
    {
        return $this->caBdotationq0306;
    }

    public function setCaBdotationq0306(?string $caBdotationq0306): static
    {
        $this->caBdotationq0306 = $caBdotationq0306;

        return $this;
    }

    public function getCaBdotationq0307(): ?string
    {
        return $this->caBdotationq0307;
    }

    public function setCaBdotationq0307(?string $caBdotationq0307): static
    {
        $this->caBdotationq0307 = $caBdotationq0307;

        return $this;
    }

    public function getCaBdotationq0308(): ?string
    {
        return $this->caBdotationq0308;
    }

    public function setCaBdotationq0308(?string $caBdotationq0308): static
    {
        $this->caBdotationq0308 = $caBdotationq0308;

        return $this;
    }

    public function getCaBdotationq0309(): ?string
    {
        return $this->caBdotationq0309;
    }

    public function setCaBdotationq0309(?string $caBdotationq0309): static
    {
        $this->caBdotationq0309 = $caBdotationq0309;

        return $this;
    }

    public function getCaBdotationq0310(): ?string
    {
        return $this->caBdotationq0310;
    }

    public function setCaBdotationq0310(?string $caBdotationq0310): static
    {
        $this->caBdotationq0310 = $caBdotationq0310;

        return $this;
    }

    public function getCaBdotationq0311(): ?string
    {
        return $this->caBdotationq0311;
    }

    public function setCaBdotationq0311(?string $caBdotationq0311): static
    {
        $this->caBdotationq0311 = $caBdotationq0311;

        return $this;
    }

    public function getCaBdotationq0312(): ?string
    {
        return $this->caBdotationq0312;
    }

    public function setCaBdotationq0312(?string $caBdotationq0312): static
    {
        $this->caBdotationq0312 = $caBdotationq0312;

        return $this;
    }

    public function getCaBdotationq0313(): ?string
    {
        return $this->caBdotationq0313;
    }

    public function setCaBdotationq0313(?string $caBdotationq0313): static
    {
        $this->caBdotationq0313 = $caBdotationq0313;

        return $this;
    }

    public function getCaBdotationq0314(): ?string
    {
        return $this->caBdotationq0314;
    }

    public function setCaBdotationq0314(?string $caBdotationq0314): static
    {
        $this->caBdotationq0314 = $caBdotationq0314;

        return $this;
    }

    public function getCaBdotationq0315(): ?string
    {
        return $this->caBdotationq0315;
    }

    public function setCaBdotationq0315(?string $caBdotationq0315): static
    {
        $this->caBdotationq0315 = $caBdotationq0315;

        return $this;
    }

    public function getCaBdotationq0316(): ?string
    {
        return $this->caBdotationq0316;
    }

    public function setCaBdotationq0316(?string $caBdotationq0316): static
    {
        $this->caBdotationq0316 = $caBdotationq0316;

        return $this;
    }

    public function getCaBdotationq0317(): ?string
    {
        return $this->caBdotationq0317;
    }

    public function setCaBdotationq0317(?string $caBdotationq0317): static
    {
        $this->caBdotationq0317 = $caBdotationq0317;

        return $this;
    }

    public function getCaBdotationq0318(): ?string
    {
        return $this->caBdotationq0318;
    }

    public function setCaBdotationq0318(?string $caBdotationq0318): static
    {
        $this->caBdotationq0318 = $caBdotationq0318;

        return $this;
    }

    public function getCaBdotationq0319(): ?string
    {
        return $this->caBdotationq0319;
    }

    public function setCaBdotationq0319(?string $caBdotationq0319): static
    {
        $this->caBdotationq0319 = $caBdotationq0319;

        return $this;
    }

    public function getCaBdotationq0320(): ?string
    {
        return $this->caBdotationq0320;
    }

    public function setCaBdotationq0320(?string $caBdotationq0320): static
    {
        $this->caBdotationq0320 = $caBdotationq0320;

        return $this;
    }

    public function getCaBdotationq0321(): ?string
    {
        return $this->caBdotationq0321;
    }

    public function setCaBdotationq0321(?string $caBdotationq0321): static
    {
        $this->caBdotationq0321 = $caBdotationq0321;

        return $this;
    }

    public function getCaBdotationq0322(): ?string
    {
        return $this->caBdotationq0322;
    }

    public function setCaBdotationq0322(?string $caBdotationq0322): static
    {
        $this->caBdotationq0322 = $caBdotationq0322;

        return $this;
    }

    public function getCaBdotationq0323(): ?string
    {
        return $this->caBdotationq0323;
    }

    public function setCaBdotationq0323(?string $caBdotationq0323): static
    {
        $this->caBdotationq0323 = $caBdotationq0323;

        return $this;
    }

    public function getCaBdotationq0324(): ?string
    {
        return $this->caBdotationq0324;
    }

    public function setCaBdotationq0324(?string $caBdotationq0324): static
    {
        $this->caBdotationq0324 = $caBdotationq0324;

        return $this;
    }

    public function getCaBdotationq0325(): ?string
    {
        return $this->caBdotationq0325;
    }

    public function setCaBdotationq0325(?string $caBdotationq0325): static
    {
        $this->caBdotationq0325 = $caBdotationq0325;

        return $this;
    }

    public function getCaBdotationq0326(): ?string
    {
        return $this->caBdotationq0326;
    }

    public function setCaBdotationq0326(?string $caBdotationq0326): static
    {
        $this->caBdotationq0326 = $caBdotationq0326;

        return $this;
    }

    public function getCaBdotationq0327(): ?string
    {
        return $this->caBdotationq0327;
    }

    public function setCaBdotationq0327(?string $caBdotationq0327): static
    {
        $this->caBdotationq0327 = $caBdotationq0327;

        return $this;
    }

    public function getCaBdotationq0328(): ?string
    {
        return $this->caBdotationq0328;
    }

    public function setCaBdotationq0328(?string $caBdotationq0328): static
    {
        $this->caBdotationq0328 = $caBdotationq0328;

        return $this;
    }

    public function getCaBdotationq0329(): ?string
    {
        return $this->caBdotationq0329;
    }

    public function setCaBdotationq0329(?string $caBdotationq0329): static
    {
        $this->caBdotationq0329 = $caBdotationq0329;

        return $this;
    }

    public function getCaBdotationq0330(): ?string
    {
        return $this->caBdotationq0330;
    }

    public function setCaBdotationq0330(?string $caBdotationq0330): static
    {
        $this->caBdotationq0330 = $caBdotationq0330;

        return $this;
    }

    public function getCaBdotationq0331(): ?string
    {
        return $this->caBdotationq0331;
    }

    public function setCaBdotationq0331(?string $caBdotationq0331): static
    {
        $this->caBdotationq0331 = $caBdotationq0331;

        return $this;
    }

    public function getCaBdotationq0332(): ?string
    {
        return $this->caBdotationq0332;
    }

    public function setCaBdotationq0332(?string $caBdotationq0332): static
    {
        $this->caBdotationq0332 = $caBdotationq0332;

        return $this;
    }

    public function getCaBdotationq0333(): ?string
    {
        return $this->caBdotationq0333;
    }

    public function setCaBdotationq0333(?string $caBdotationq0333): static
    {
        $this->caBdotationq0333 = $caBdotationq0333;

        return $this;
    }

    public function getCaBdotationq0334(): ?string
    {
        return $this->caBdotationq0334;
    }

    public function setCaBdotationq0334(?string $caBdotationq0334): static
    {
        $this->caBdotationq0334 = $caBdotationq0334;

        return $this;
    }

    public function getCaBdotationq0335(): ?string
    {
        return $this->caBdotationq0335;
    }

    public function setCaBdotationq0335(?string $caBdotationq0335): static
    {
        $this->caBdotationq0335 = $caBdotationq0335;

        return $this;
    }

    public function getCaBdotationq0336(): ?string
    {
        return $this->caBdotationq0336;
    }

    public function setCaBdotationq0336(?string $caBdotationq0336): static
    {
        $this->caBdotationq0336 = $caBdotationq0336;

        return $this;
    }

    public function getCaBdotationq0401(): ?string
    {
        return $this->caBdotationq0401;
    }

    public function setCaBdotationq0401(?string $caBdotationq0401): static
    {
        $this->caBdotationq0401 = $caBdotationq0401;

        return $this;
    }

    public function getCaBdotationq0402(): ?string
    {
        return $this->caBdotationq0402;
    }

    public function setCaBdotationq0402(?string $caBdotationq0402): static
    {
        $this->caBdotationq0402 = $caBdotationq0402;

        return $this;
    }

    public function getCaBdotationq0403(): ?string
    {
        return $this->caBdotationq0403;
    }

    public function setCaBdotationq0403(?string $caBdotationq0403): static
    {
        $this->caBdotationq0403 = $caBdotationq0403;

        return $this;
    }

    public function getCaBdotationq0404(): ?string
    {
        return $this->caBdotationq0404;
    }

    public function setCaBdotationq0404(?string $caBdotationq0404): static
    {
        $this->caBdotationq0404 = $caBdotationq0404;

        return $this;
    }

    public function getCaBdotationq0405(): ?string
    {
        return $this->caBdotationq0405;
    }

    public function setCaBdotationq0405(?string $caBdotationq0405): static
    {
        $this->caBdotationq0405 = $caBdotationq0405;

        return $this;
    }

    public function getCaBdotationq0406(): ?string
    {
        return $this->caBdotationq0406;
    }

    public function setCaBdotationq0406(?string $caBdotationq0406): static
    {
        $this->caBdotationq0406 = $caBdotationq0406;

        return $this;
    }

    public function getCaBdotationq0407(): ?string
    {
        return $this->caBdotationq0407;
    }

    public function setCaBdotationq0407(?string $caBdotationq0407): static
    {
        $this->caBdotationq0407 = $caBdotationq0407;

        return $this;
    }

    public function getCaBdotationq0408(): ?string
    {
        return $this->caBdotationq0408;
    }

    public function setCaBdotationq0408(?string $caBdotationq0408): static
    {
        $this->caBdotationq0408 = $caBdotationq0408;

        return $this;
    }

    public function getCaBdotationq0409(): ?string
    {
        return $this->caBdotationq0409;
    }

    public function setCaBdotationq0409(?string $caBdotationq0409): static
    {
        $this->caBdotationq0409 = $caBdotationq0409;

        return $this;
    }

    public function getCaBdotationq0410(): ?string
    {
        return $this->caBdotationq0410;
    }

    public function setCaBdotationq0410(?string $caBdotationq0410): static
    {
        $this->caBdotationq0410 = $caBdotationq0410;

        return $this;
    }

    public function getCaBdotationq0411(): ?string
    {
        return $this->caBdotationq0411;
    }

    public function setCaBdotationq0411(?string $caBdotationq0411): static
    {
        $this->caBdotationq0411 = $caBdotationq0411;

        return $this;
    }

    public function getCaBdotationq0412(): ?string
    {
        return $this->caBdotationq0412;
    }

    public function setCaBdotationq0412(?string $caBdotationq0412): static
    {
        $this->caBdotationq0412 = $caBdotationq0412;

        return $this;
    }

    public function getCaBdotationq0413(): ?string
    {
        return $this->caBdotationq0413;
    }

    public function setCaBdotationq0413(?string $caBdotationq0413): static
    {
        $this->caBdotationq0413 = $caBdotationq0413;

        return $this;
    }

    public function getCaBdotationq0414(): ?string
    {
        return $this->caBdotationq0414;
    }

    public function setCaBdotationq0414(?string $caBdotationq0414): static
    {
        $this->caBdotationq0414 = $caBdotationq0414;

        return $this;
    }

    public function getCaBdotationq0415(): ?string
    {
        return $this->caBdotationq0415;
    }

    public function setCaBdotationq0415(?string $caBdotationq0415): static
    {
        $this->caBdotationq0415 = $caBdotationq0415;

        return $this;
    }

    public function getCaBdotationq0416(): ?string
    {
        return $this->caBdotationq0416;
    }

    public function setCaBdotationq0416(?string $caBdotationq0416): static
    {
        $this->caBdotationq0416 = $caBdotationq0416;

        return $this;
    }

    public function getCaBdotationq0417(): ?string
    {
        return $this->caBdotationq0417;
    }

    public function setCaBdotationq0417(?string $caBdotationq0417): static
    {
        $this->caBdotationq0417 = $caBdotationq0417;

        return $this;
    }

    public function getCaBdotationq0418(): ?string
    {
        return $this->caBdotationq0418;
    }

    public function setCaBdotationq0418(?string $caBdotationq0418): static
    {
        $this->caBdotationq0418 = $caBdotationq0418;

        return $this;
    }

    public function getCaBdotationq0419(): ?string
    {
        return $this->caBdotationq0419;
    }

    public function setCaBdotationq0419(?string $caBdotationq0419): static
    {
        $this->caBdotationq0419 = $caBdotationq0419;

        return $this;
    }

    public function getCaBdotationq0420(): ?string
    {
        return $this->caBdotationq0420;
    }

    public function setCaBdotationq0420(?string $caBdotationq0420): static
    {
        $this->caBdotationq0420 = $caBdotationq0420;

        return $this;
    }

    public function getCaBdotationq0421(): ?string
    {
        return $this->caBdotationq0421;
    }

    public function setCaBdotationq0421(?string $caBdotationq0421): static
    {
        $this->caBdotationq0421 = $caBdotationq0421;

        return $this;
    }

    public function getCaBdotationq0422(): ?string
    {
        return $this->caBdotationq0422;
    }

    public function setCaBdotationq0422(?string $caBdotationq0422): static
    {
        $this->caBdotationq0422 = $caBdotationq0422;

        return $this;
    }

    public function getCaBdotationq0423(): ?string
    {
        return $this->caBdotationq0423;
    }

    public function setCaBdotationq0423(?string $caBdotationq0423): static
    {
        $this->caBdotationq0423 = $caBdotationq0423;

        return $this;
    }

    public function getCaBdotationq0424(): ?string
    {
        return $this->caBdotationq0424;
    }

    public function setCaBdotationq0424(?string $caBdotationq0424): static
    {
        $this->caBdotationq0424 = $caBdotationq0424;

        return $this;
    }

    public function getCaBdotationq0425(): ?string
    {
        return $this->caBdotationq0425;
    }

    public function setCaBdotationq0425(?string $caBdotationq0425): static
    {
        $this->caBdotationq0425 = $caBdotationq0425;

        return $this;
    }

    public function getCaBdotationq0426(): ?string
    {
        return $this->caBdotationq0426;
    }

    public function setCaBdotationq0426(?string $caBdotationq0426): static
    {
        $this->caBdotationq0426 = $caBdotationq0426;

        return $this;
    }

    public function getCaBdotationq0427(): ?string
    {
        return $this->caBdotationq0427;
    }

    public function setCaBdotationq0427(?string $caBdotationq0427): static
    {
        $this->caBdotationq0427 = $caBdotationq0427;

        return $this;
    }

    public function getCaBdotationq0428(): ?string
    {
        return $this->caBdotationq0428;
    }

    public function setCaBdotationq0428(?string $caBdotationq0428): static
    {
        $this->caBdotationq0428 = $caBdotationq0428;

        return $this;
    }

    public function getCaBdotationq0429(): ?string
    {
        return $this->caBdotationq0429;
    }

    public function setCaBdotationq0429(?string $caBdotationq0429): static
    {
        $this->caBdotationq0429 = $caBdotationq0429;

        return $this;
    }

    public function getCaBdotationq0430(): ?string
    {
        return $this->caBdotationq0430;
    }

    public function setCaBdotationq0430(?string $caBdotationq0430): static
    {
        $this->caBdotationq0430 = $caBdotationq0430;

        return $this;
    }

    public function getCaBdotationq0431(): ?string
    {
        return $this->caBdotationq0431;
    }

    public function setCaBdotationq0431(?string $caBdotationq0431): static
    {
        $this->caBdotationq0431 = $caBdotationq0431;

        return $this;
    }

    public function getCaBdotationq0432(): ?string
    {
        return $this->caBdotationq0432;
    }

    public function setCaBdotationq0432(?string $caBdotationq0432): static
    {
        $this->caBdotationq0432 = $caBdotationq0432;

        return $this;
    }

    public function getCaBdotationq0433(): ?string
    {
        return $this->caBdotationq0433;
    }

    public function setCaBdotationq0433(?string $caBdotationq0433): static
    {
        $this->caBdotationq0433 = $caBdotationq0433;

        return $this;
    }

    public function getCaBdotationq0434(): ?string
    {
        return $this->caBdotationq0434;
    }

    public function setCaBdotationq0434(?string $caBdotationq0434): static
    {
        $this->caBdotationq0434 = $caBdotationq0434;

        return $this;
    }

    public function getCaBdotationq0435(): ?string
    {
        return $this->caBdotationq0435;
    }

    public function setCaBdotationq0435(?string $caBdotationq0435): static
    {
        $this->caBdotationq0435 = $caBdotationq0435;

        return $this;
    }

    public function getCaBdotationq0436(): ?string
    {
        return $this->caBdotationq0436;
    }

    public function setCaBdotationq0436(?string $caBdotationq0436): static
    {
        $this->caBdotationq0436 = $caBdotationq0436;

        return $this;
    }

    public function getCaBdotationq0501(): ?string
    {
        return $this->caBdotationq0501;
    }

    public function setCaBdotationq0501(?string $caBdotationq0501): static
    {
        $this->caBdotationq0501 = $caBdotationq0501;

        return $this;
    }

    public function getCaBdotationq0502(): ?string
    {
        return $this->caBdotationq0502;
    }

    public function setCaBdotationq0502(?string $caBdotationq0502): static
    {
        $this->caBdotationq0502 = $caBdotationq0502;

        return $this;
    }

    public function getCaBdotationq0503(): ?string
    {
        return $this->caBdotationq0503;
    }

    public function setCaBdotationq0503(?string $caBdotationq0503): static
    {
        $this->caBdotationq0503 = $caBdotationq0503;

        return $this;
    }

    public function getCaBdotationq0504(): ?string
    {
        return $this->caBdotationq0504;
    }

    public function setCaBdotationq0504(?string $caBdotationq0504): static
    {
        $this->caBdotationq0504 = $caBdotationq0504;

        return $this;
    }

    public function getCaBdotationq0505(): ?string
    {
        return $this->caBdotationq0505;
    }

    public function setCaBdotationq0505(?string $caBdotationq0505): static
    {
        $this->caBdotationq0505 = $caBdotationq0505;

        return $this;
    }

    public function getCaBdotationq0506(): ?string
    {
        return $this->caBdotationq0506;
    }

    public function setCaBdotationq0506(?string $caBdotationq0506): static
    {
        $this->caBdotationq0506 = $caBdotationq0506;

        return $this;
    }

    public function getCaBdotationq0507(): ?string
    {
        return $this->caBdotationq0507;
    }

    public function setCaBdotationq0507(?string $caBdotationq0507): static
    {
        $this->caBdotationq0507 = $caBdotationq0507;

        return $this;
    }

    public function getCaBdotationq0508(): ?string
    {
        return $this->caBdotationq0508;
    }

    public function setCaBdotationq0508(?string $caBdotationq0508): static
    {
        $this->caBdotationq0508 = $caBdotationq0508;

        return $this;
    }

    public function getCaBdotationq0509(): ?string
    {
        return $this->caBdotationq0509;
    }

    public function setCaBdotationq0509(?string $caBdotationq0509): static
    {
        $this->caBdotationq0509 = $caBdotationq0509;

        return $this;
    }

    public function getCaBdotationq0510(): ?string
    {
        return $this->caBdotationq0510;
    }

    public function setCaBdotationq0510(?string $caBdotationq0510): static
    {
        $this->caBdotationq0510 = $caBdotationq0510;

        return $this;
    }

    public function getCaBdotationq0511(): ?string
    {
        return $this->caBdotationq0511;
    }

    public function setCaBdotationq0511(?string $caBdotationq0511): static
    {
        $this->caBdotationq0511 = $caBdotationq0511;

        return $this;
    }

    public function getCaBdotationq0512(): ?string
    {
        return $this->caBdotationq0512;
    }

    public function setCaBdotationq0512(?string $caBdotationq0512): static
    {
        $this->caBdotationq0512 = $caBdotationq0512;

        return $this;
    }

    public function getCaBdotationq0513(): ?string
    {
        return $this->caBdotationq0513;
    }

    public function setCaBdotationq0513(?string $caBdotationq0513): static
    {
        $this->caBdotationq0513 = $caBdotationq0513;

        return $this;
    }

    public function getCaBdotationq0514(): ?string
    {
        return $this->caBdotationq0514;
    }

    public function setCaBdotationq0514(?string $caBdotationq0514): static
    {
        $this->caBdotationq0514 = $caBdotationq0514;

        return $this;
    }

    public function getCaBdotationq0515(): ?string
    {
        return $this->caBdotationq0515;
    }

    public function setCaBdotationq0515(?string $caBdotationq0515): static
    {
        $this->caBdotationq0515 = $caBdotationq0515;

        return $this;
    }

    public function getCaBdotationq0516(): ?string
    {
        return $this->caBdotationq0516;
    }

    public function setCaBdotationq0516(?string $caBdotationq0516): static
    {
        $this->caBdotationq0516 = $caBdotationq0516;

        return $this;
    }

    public function getCaBdotationq0517(): ?string
    {
        return $this->caBdotationq0517;
    }

    public function setCaBdotationq0517(?string $caBdotationq0517): static
    {
        $this->caBdotationq0517 = $caBdotationq0517;

        return $this;
    }

    public function getCaBdotationq0518(): ?string
    {
        return $this->caBdotationq0518;
    }

    public function setCaBdotationq0518(?string $caBdotationq0518): static
    {
        $this->caBdotationq0518 = $caBdotationq0518;

        return $this;
    }

    public function getCaBdotationq0519(): ?string
    {
        return $this->caBdotationq0519;
    }

    public function setCaBdotationq0519(?string $caBdotationq0519): static
    {
        $this->caBdotationq0519 = $caBdotationq0519;

        return $this;
    }

    public function getCaBdotationq0520(): ?string
    {
        return $this->caBdotationq0520;
    }

    public function setCaBdotationq0520(?string $caBdotationq0520): static
    {
        $this->caBdotationq0520 = $caBdotationq0520;

        return $this;
    }

    public function getCaBdotationq0521(): ?string
    {
        return $this->caBdotationq0521;
    }

    public function setCaBdotationq0521(?string $caBdotationq0521): static
    {
        $this->caBdotationq0521 = $caBdotationq0521;

        return $this;
    }

    public function getCaBdotationq0522(): ?string
    {
        return $this->caBdotationq0522;
    }

    public function setCaBdotationq0522(?string $caBdotationq0522): static
    {
        $this->caBdotationq0522 = $caBdotationq0522;

        return $this;
    }

    public function getCaBdotationq0523(): ?string
    {
        return $this->caBdotationq0523;
    }

    public function setCaBdotationq0523(?string $caBdotationq0523): static
    {
        $this->caBdotationq0523 = $caBdotationq0523;

        return $this;
    }

    public function getCaBdotationq0524(): ?string
    {
        return $this->caBdotationq0524;
    }

    public function setCaBdotationq0524(?string $caBdotationq0524): static
    {
        $this->caBdotationq0524 = $caBdotationq0524;

        return $this;
    }

    public function getCaBdotationq0525(): ?string
    {
        return $this->caBdotationq0525;
    }

    public function setCaBdotationq0525(?string $caBdotationq0525): static
    {
        $this->caBdotationq0525 = $caBdotationq0525;

        return $this;
    }

    public function getCaBdotationq0526(): ?string
    {
        return $this->caBdotationq0526;
    }

    public function setCaBdotationq0526(?string $caBdotationq0526): static
    {
        $this->caBdotationq0526 = $caBdotationq0526;

        return $this;
    }

    public function getCaBdotationq0527(): ?string
    {
        return $this->caBdotationq0527;
    }

    public function setCaBdotationq0527(?string $caBdotationq0527): static
    {
        $this->caBdotationq0527 = $caBdotationq0527;

        return $this;
    }

    public function getCaBdotationq0528(): ?string
    {
        return $this->caBdotationq0528;
    }

    public function setCaBdotationq0528(?string $caBdotationq0528): static
    {
        $this->caBdotationq0528 = $caBdotationq0528;

        return $this;
    }

    public function getCaBdotationq0529(): ?string
    {
        return $this->caBdotationq0529;
    }

    public function setCaBdotationq0529(?string $caBdotationq0529): static
    {
        $this->caBdotationq0529 = $caBdotationq0529;

        return $this;
    }

    public function getCaBdotationq0530(): ?string
    {
        return $this->caBdotationq0530;
    }

    public function setCaBdotationq0530(?string $caBdotationq0530): static
    {
        $this->caBdotationq0530 = $caBdotationq0530;

        return $this;
    }

    public function getCaBdotationq0531(): ?string
    {
        return $this->caBdotationq0531;
    }

    public function setCaBdotationq0531(?string $caBdotationq0531): static
    {
        $this->caBdotationq0531 = $caBdotationq0531;

        return $this;
    }

    public function getCaBdotationq0532(): ?string
    {
        return $this->caBdotationq0532;
    }

    public function setCaBdotationq0532(?string $caBdotationq0532): static
    {
        $this->caBdotationq0532 = $caBdotationq0532;

        return $this;
    }

    public function getCaBdotationq0533(): ?string
    {
        return $this->caBdotationq0533;
    }

    public function setCaBdotationq0533(?string $caBdotationq0533): static
    {
        $this->caBdotationq0533 = $caBdotationq0533;

        return $this;
    }

    public function getCaBdotationq0534(): ?string
    {
        return $this->caBdotationq0534;
    }

    public function setCaBdotationq0534(?string $caBdotationq0534): static
    {
        $this->caBdotationq0534 = $caBdotationq0534;

        return $this;
    }

    public function getCaBdotationq0535(): ?string
    {
        return $this->caBdotationq0535;
    }

    public function setCaBdotationq0535(?string $caBdotationq0535): static
    {
        $this->caBdotationq0535 = $caBdotationq0535;

        return $this;
    }

    public function getCaBdotationq0536(): ?string
    {
        return $this->caBdotationq0536;
    }

    public function setCaBdotationq0536(?string $caBdotationq0536): static
    {
        $this->caBdotationq0536 = $caBdotationq0536;

        return $this;
    }

    public function getCaBdotationq0601(): ?string
    {
        return $this->caBdotationq0601;
    }

    public function setCaBdotationq0601(?string $caBdotationq0601): static
    {
        $this->caBdotationq0601 = $caBdotationq0601;

        return $this;
    }

    public function getCaBdotationq0602(): ?string
    {
        return $this->caBdotationq0602;
    }

    public function setCaBdotationq0602(?string $caBdotationq0602): static
    {
        $this->caBdotationq0602 = $caBdotationq0602;

        return $this;
    }

    public function getCaBdotationq0603(): ?string
    {
        return $this->caBdotationq0603;
    }

    public function setCaBdotationq0603(?string $caBdotationq0603): static
    {
        $this->caBdotationq0603 = $caBdotationq0603;

        return $this;
    }

    public function getCaBdotationq0604(): ?string
    {
        return $this->caBdotationq0604;
    }

    public function setCaBdotationq0604(?string $caBdotationq0604): static
    {
        $this->caBdotationq0604 = $caBdotationq0604;

        return $this;
    }

    public function getCaBdotationq0605(): ?string
    {
        return $this->caBdotationq0605;
    }

    public function setCaBdotationq0605(?string $caBdotationq0605): static
    {
        $this->caBdotationq0605 = $caBdotationq0605;

        return $this;
    }

    public function getCaBdotationq0606(): ?string
    {
        return $this->caBdotationq0606;
    }

    public function setCaBdotationq0606(?string $caBdotationq0606): static
    {
        $this->caBdotationq0606 = $caBdotationq0606;

        return $this;
    }

    public function getCaBdotationq0607(): ?string
    {
        return $this->caBdotationq0607;
    }

    public function setCaBdotationq0607(?string $caBdotationq0607): static
    {
        $this->caBdotationq0607 = $caBdotationq0607;

        return $this;
    }

    public function getCaBdotationq0608(): ?string
    {
        return $this->caBdotationq0608;
    }

    public function setCaBdotationq0608(?string $caBdotationq0608): static
    {
        $this->caBdotationq0608 = $caBdotationq0608;

        return $this;
    }

    public function getCaBdotationq0609(): ?string
    {
        return $this->caBdotationq0609;
    }

    public function setCaBdotationq0609(?string $caBdotationq0609): static
    {
        $this->caBdotationq0609 = $caBdotationq0609;

        return $this;
    }

    public function getCaBdotationq0610(): ?string
    {
        return $this->caBdotationq0610;
    }

    public function setCaBdotationq0610(?string $caBdotationq0610): static
    {
        $this->caBdotationq0610 = $caBdotationq0610;

        return $this;
    }

    public function getCaBdotationq0611(): ?string
    {
        return $this->caBdotationq0611;
    }

    public function setCaBdotationq0611(?string $caBdotationq0611): static
    {
        $this->caBdotationq0611 = $caBdotationq0611;

        return $this;
    }

    public function getCaBdotationq0612(): ?string
    {
        return $this->caBdotationq0612;
    }

    public function setCaBdotationq0612(?string $caBdotationq0612): static
    {
        $this->caBdotationq0612 = $caBdotationq0612;

        return $this;
    }

    public function getCaBdotationq0613(): ?string
    {
        return $this->caBdotationq0613;
    }

    public function setCaBdotationq0613(?string $caBdotationq0613): static
    {
        $this->caBdotationq0613 = $caBdotationq0613;

        return $this;
    }

    public function getCaBdotationq0614(): ?string
    {
        return $this->caBdotationq0614;
    }

    public function setCaBdotationq0614(?string $caBdotationq0614): static
    {
        $this->caBdotationq0614 = $caBdotationq0614;

        return $this;
    }

    public function getCaBdotationq0615(): ?string
    {
        return $this->caBdotationq0615;
    }

    public function setCaBdotationq0615(?string $caBdotationq0615): static
    {
        $this->caBdotationq0615 = $caBdotationq0615;

        return $this;
    }

    public function getCaBdotationq0616(): ?string
    {
        return $this->caBdotationq0616;
    }

    public function setCaBdotationq0616(?string $caBdotationq0616): static
    {
        $this->caBdotationq0616 = $caBdotationq0616;

        return $this;
    }

    public function getCaBdotationq0617(): ?string
    {
        return $this->caBdotationq0617;
    }

    public function setCaBdotationq0617(?string $caBdotationq0617): static
    {
        $this->caBdotationq0617 = $caBdotationq0617;

        return $this;
    }

    public function getCaBdotationq0618(): ?string
    {
        return $this->caBdotationq0618;
    }

    public function setCaBdotationq0618(?string $caBdotationq0618): static
    {
        $this->caBdotationq0618 = $caBdotationq0618;

        return $this;
    }

    public function getCaBdotationq0619(): ?string
    {
        return $this->caBdotationq0619;
    }

    public function setCaBdotationq0619(?string $caBdotationq0619): static
    {
        $this->caBdotationq0619 = $caBdotationq0619;

        return $this;
    }

    public function getCaBdotationq0620(): ?string
    {
        return $this->caBdotationq0620;
    }

    public function setCaBdotationq0620(?string $caBdotationq0620): static
    {
        $this->caBdotationq0620 = $caBdotationq0620;

        return $this;
    }

    public function getCaBdotationq0621(): ?string
    {
        return $this->caBdotationq0621;
    }

    public function setCaBdotationq0621(?string $caBdotationq0621): static
    {
        $this->caBdotationq0621 = $caBdotationq0621;

        return $this;
    }

    public function getCaBdotationq0622(): ?string
    {
        return $this->caBdotationq0622;
    }

    public function setCaBdotationq0622(?string $caBdotationq0622): static
    {
        $this->caBdotationq0622 = $caBdotationq0622;

        return $this;
    }

    public function getCaBdotationq0623(): ?string
    {
        return $this->caBdotationq0623;
    }

    public function setCaBdotationq0623(?string $caBdotationq0623): static
    {
        $this->caBdotationq0623 = $caBdotationq0623;

        return $this;
    }

    public function getCaBdotationq0624(): ?string
    {
        return $this->caBdotationq0624;
    }

    public function setCaBdotationq0624(?string $caBdotationq0624): static
    {
        $this->caBdotationq0624 = $caBdotationq0624;

        return $this;
    }

    public function getCaBdotationq0625(): ?string
    {
        return $this->caBdotationq0625;
    }

    public function setCaBdotationq0625(?string $caBdotationq0625): static
    {
        $this->caBdotationq0625 = $caBdotationq0625;

        return $this;
    }

    public function getCaBdotationq0626(): ?string
    {
        return $this->caBdotationq0626;
    }

    public function setCaBdotationq0626(?string $caBdotationq0626): static
    {
        $this->caBdotationq0626 = $caBdotationq0626;

        return $this;
    }

    public function getCaBdotationq0627(): ?string
    {
        return $this->caBdotationq0627;
    }

    public function setCaBdotationq0627(?string $caBdotationq0627): static
    {
        $this->caBdotationq0627 = $caBdotationq0627;

        return $this;
    }

    public function getCaBdotationq0628(): ?string
    {
        return $this->caBdotationq0628;
    }

    public function setCaBdotationq0628(?string $caBdotationq0628): static
    {
        $this->caBdotationq0628 = $caBdotationq0628;

        return $this;
    }

    public function getCaBdotationq0629(): ?string
    {
        return $this->caBdotationq0629;
    }

    public function setCaBdotationq0629(?string $caBdotationq0629): static
    {
        $this->caBdotationq0629 = $caBdotationq0629;

        return $this;
    }

    public function getCaBdotationq0630(): ?string
    {
        return $this->caBdotationq0630;
    }

    public function setCaBdotationq0630(?string $caBdotationq0630): static
    {
        $this->caBdotationq0630 = $caBdotationq0630;

        return $this;
    }

    public function getCaBdotationq0631(): ?string
    {
        return $this->caBdotationq0631;
    }

    public function setCaBdotationq0631(?string $caBdotationq0631): static
    {
        $this->caBdotationq0631 = $caBdotationq0631;

        return $this;
    }

    public function getCaBdotationq0632(): ?string
    {
        return $this->caBdotationq0632;
    }

    public function setCaBdotationq0632(?string $caBdotationq0632): static
    {
        $this->caBdotationq0632 = $caBdotationq0632;

        return $this;
    }

    public function getCaBdotationq0633(): ?string
    {
        return $this->caBdotationq0633;
    }

    public function setCaBdotationq0633(?string $caBdotationq0633): static
    {
        $this->caBdotationq0633 = $caBdotationq0633;

        return $this;
    }

    public function getCaBdotationq0634(): ?string
    {
        return $this->caBdotationq0634;
    }

    public function setCaBdotationq0634(?string $caBdotationq0634): static
    {
        $this->caBdotationq0634 = $caBdotationq0634;

        return $this;
    }

    public function getCaBdotationq0635(): ?string
    {
        return $this->caBdotationq0635;
    }

    public function setCaBdotationq0635(?string $caBdotationq0635): static
    {
        $this->caBdotationq0635 = $caBdotationq0635;

        return $this;
    }

    public function getCaBdotationq0636(): ?string
    {
        return $this->caBdotationq0636;
    }

    public function setCaBdotationq0636(?string $caBdotationq0636): static
    {
        $this->caBdotationq0636 = $caBdotationq0636;

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
