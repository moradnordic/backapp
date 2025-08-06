<?php

namespace App\Entity\Nd;

use App\Repository\Nd\FComptegbudgetRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_COMPTEGBUDGET')]
#[ORM\UniqueConstraint(name: 'ICG_BUDGET', columns: ['cbCG_Num'])]
#[ORM\UniqueConstraint(name: 'UKA_F_COMPTEGBUDGET_CG_Num', columns: ['CG_Num'])]
#[ORM\Index(name: 'FKIA_F_COMPTEGBUDGET_CG_Num', columns: ['CG_Num'])]
#[ORM\Entity(repositoryClass: FComptegbudgetRepository::class)]
class FComptegbudget
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "CG_Num", length: 13)]
    private ?string $cgNum = null;

    #[ORM\Column(name: "cbCG_Num", type: Types::BINARY, nullable: true)]
    private $cbcgNum = null;

    #[ORM\Column(name: "CG_BSens", type: Types::SMALLINT, nullable: true)]
    private ?int $cgBsens = null;

    #[ORM\Column(name: "CG_BDotation0101", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0101 = null;

    #[ORM\Column(name: "CG_BDotation0102", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0102 = null;

    #[ORM\Column(name: "CG_BDotation0103", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0103 = null;

    #[ORM\Column(name: "CG_BDotation0104", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0104 = null;

    #[ORM\Column(name: "CG_BDotation0105", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0105 = null;

    #[ORM\Column(name: "CG_BDotation0106", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0106 = null;

    #[ORM\Column(name: "CG_BDotation0107", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0107 = null;

    #[ORM\Column(name: "CG_BDotation0108", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0108 = null;

    #[ORM\Column(name: "CG_BDotation0109", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0109 = null;

    #[ORM\Column(name: "CG_BDotation0110", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0110 = null;

    #[ORM\Column(name: "CG_BDotation0111", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0111 = null;

    #[ORM\Column(name: "CG_BDotation0112", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0112 = null;

    #[ORM\Column(name: "CG_BDotation0113", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0113 = null;

    #[ORM\Column(name: "CG_BDotation0114", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0114 = null;

    #[ORM\Column(name: "CG_BDotation0115", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0115 = null;

    #[ORM\Column(name: "CG_BDotation0116", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0116 = null;

    #[ORM\Column(name: "CG_BDotation0117", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0117 = null;

    #[ORM\Column(name: "CG_BDotation0118", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0118 = null;

    #[ORM\Column(name: "CG_BDotation0119", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0119 = null;

    #[ORM\Column(name: "CG_BDotation0120", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0120 = null;

    #[ORM\Column(name: "CG_BDotation0121", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0121 = null;

    #[ORM\Column(name: "CG_BDotation0122", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0122 = null;

    #[ORM\Column(name: "CG_BDotation0123", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0123 = null;

    #[ORM\Column(name: "CG_BDotation0124", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0124 = null;

    #[ORM\Column(name: "CG_BDotation0125", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0125 = null;

    #[ORM\Column(name: "CG_BDotation0126", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0126 = null;

    #[ORM\Column(name: "CG_BDotation0127", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0127 = null;

    #[ORM\Column(name: "CG_BDotation0128", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0128 = null;

    #[ORM\Column(name: "CG_BDotation0129", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0129 = null;

    #[ORM\Column(name: "CG_BDotation0130", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0130 = null;

    #[ORM\Column(name: "CG_BDotation0131", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0131 = null;

    #[ORM\Column(name: "CG_BDotation0132", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0132 = null;

    #[ORM\Column(name: "CG_BDotation0133", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0133 = null;

    #[ORM\Column(name: "CG_BDotation0134", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0134 = null;

    #[ORM\Column(name: "CG_BDotation0135", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0135 = null;

    #[ORM\Column(name: "CG_BDotation0136", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0136 = null;

    #[ORM\Column(name: "CG_BDotation0201", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0201 = null;

    #[ORM\Column(name: "CG_BDotation0202", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0202 = null;

    #[ORM\Column(name: "CG_BDotation0203", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0203 = null;

    #[ORM\Column(name: "CG_BDotation0204", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0204 = null;

    #[ORM\Column(name: "CG_BDotation0205", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0205 = null;

    #[ORM\Column(name: "CG_BDotation0206", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0206 = null;

    #[ORM\Column(name: "CG_BDotation0207", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0207 = null;

    #[ORM\Column(name: "CG_BDotation0208", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0208 = null;

    #[ORM\Column(name: "CG_BDotation0209", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0209 = null;

    #[ORM\Column(name: "CG_BDotation0210", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0210 = null;

    #[ORM\Column(name: "CG_BDotation0211", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0211 = null;

    #[ORM\Column(name: "CG_BDotation0212", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0212 = null;

    #[ORM\Column(name: "CG_BDotation0213", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0213 = null;

    #[ORM\Column(name: "CG_BDotation0214", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0214 = null;

    #[ORM\Column(name: "CG_BDotation0215", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0215 = null;

    #[ORM\Column(name: "CG_BDotation0216", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0216 = null;

    #[ORM\Column(name: "CG_BDotation0217", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0217 = null;

    #[ORM\Column(name: "CG_BDotation0218", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0218 = null;

    #[ORM\Column(name: "CG_BDotation0219", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0219 = null;

    #[ORM\Column(name: "CG_BDotation0220", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0220 = null;

    #[ORM\Column(name: "CG_BDotation0221", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0221 = null;

    #[ORM\Column(name: "CG_BDotation0222", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0222 = null;

    #[ORM\Column(name: "CG_BDotation0223", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0223 = null;

    #[ORM\Column(name: "CG_BDotation0224", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0224 = null;

    #[ORM\Column(name: "CG_BDotation0225", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0225 = null;

    #[ORM\Column(name: "CG_BDotation0226", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0226 = null;

    #[ORM\Column(name: "CG_BDotation0227", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0227 = null;

    #[ORM\Column(name: "CG_BDotation0228", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0228 = null;

    #[ORM\Column(name: "CG_BDotation0229", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0229 = null;

    #[ORM\Column(name: "CG_BDotation0230", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0230 = null;

    #[ORM\Column(name: "CG_BDotation0231", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0231 = null;

    #[ORM\Column(name: "CG_BDotation0232", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0232 = null;

    #[ORM\Column(name: "CG_BDotation0233", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0233 = null;

    #[ORM\Column(name: "CG_BDotation0234", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0234 = null;

    #[ORM\Column(name: "CG_BDotation0235", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0235 = null;

    #[ORM\Column(name: "CG_BDotation0236", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0236 = null;

    #[ORM\Column(name: "CG_BDotation0301", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0301 = null;

    #[ORM\Column(name: "CG_BDotation0302", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0302 = null;

    #[ORM\Column(name: "CG_BDotation0303", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0303 = null;

    #[ORM\Column(name: "CG_BDotation0304", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0304 = null;

    #[ORM\Column(name: "CG_BDotation0305", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0305 = null;

    #[ORM\Column(name: "CG_BDotation0306", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0306 = null;

    #[ORM\Column(name: "CG_BDotation0307", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0307 = null;

    #[ORM\Column(name: "CG_BDotation0308", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0308 = null;

    #[ORM\Column(name: "CG_BDotation0309", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0309 = null;

    #[ORM\Column(name: "CG_BDotation0310", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0310 = null;

    #[ORM\Column(name: "CG_BDotation0311", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0311 = null;

    #[ORM\Column(name: "CG_BDotation0312", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0312 = null;

    #[ORM\Column(name: "CG_BDotation0313", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0313 = null;

    #[ORM\Column(name: "CG_BDotation0314", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0314 = null;

    #[ORM\Column(name: "CG_BDotation0315", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0315 = null;

    #[ORM\Column(name: "CG_BDotation0316", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0316 = null;

    #[ORM\Column(name: "CG_BDotation0317", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0317 = null;

    #[ORM\Column(name: "CG_BDotation0318", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0318 = null;

    #[ORM\Column(name: "CG_BDotation0319", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0319 = null;

    #[ORM\Column(name: "CG_BDotation0320", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0320 = null;

    #[ORM\Column(name: "CG_BDotation0321", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0321 = null;

    #[ORM\Column(name: "CG_BDotation0322", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0322 = null;

    #[ORM\Column(name: "CG_BDotation0323", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0323 = null;

    #[ORM\Column(name: "CG_BDotation0324", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0324 = null;

    #[ORM\Column(name: "CG_BDotation0325", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0325 = null;

    #[ORM\Column(name: "CG_BDotation0326", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0326 = null;

    #[ORM\Column(name: "CG_BDotation0327", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0327 = null;

    #[ORM\Column(name: "CG_BDotation0328", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0328 = null;

    #[ORM\Column(name: "CG_BDotation0329", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0329 = null;

    #[ORM\Column(name: "CG_BDotation0330", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0330 = null;

    #[ORM\Column(name: "CG_BDotation0331", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0331 = null;

    #[ORM\Column(name: "CG_BDotation0332", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0332 = null;

    #[ORM\Column(name: "CG_BDotation0333", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0333 = null;

    #[ORM\Column(name: "CG_BDotation0334", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0334 = null;

    #[ORM\Column(name: "CG_BDotation0335", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0335 = null;

    #[ORM\Column(name: "CG_BDotation0336", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0336 = null;

    #[ORM\Column(name: "CG_BDotation0401", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0401 = null;

    #[ORM\Column(name: "CG_BDotation0402", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0402 = null;

    #[ORM\Column(name: "CG_BDotation0403", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0403 = null;

    #[ORM\Column(name: "CG_BDotation0404", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0404 = null;

    #[ORM\Column(name: "CG_BDotation0405", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0405 = null;

    #[ORM\Column(name: "CG_BDotation0406", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0406 = null;

    #[ORM\Column(name: "CG_BDotation0407", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0407 = null;

    #[ORM\Column(name: "CG_BDotation0408", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0408 = null;

    #[ORM\Column(name: "CG_BDotation0409", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0409 = null;

    #[ORM\Column(name: "CG_BDotation0410", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0410 = null;

    #[ORM\Column(name: "CG_BDotation0411", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0411 = null;

    #[ORM\Column(name: "CG_BDotation0412", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0412 = null;

    #[ORM\Column(name: "CG_BDotation0413", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0413 = null;

    #[ORM\Column(name: "CG_BDotation0414", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0414 = null;

    #[ORM\Column(name: "CG_BDotation0415", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0415 = null;

    #[ORM\Column(name: "CG_BDotation0416", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0416 = null;

    #[ORM\Column(name: "CG_BDotation0417", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0417 = null;

    #[ORM\Column(name: "CG_BDotation0418", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0418 = null;

    #[ORM\Column(name: "CG_BDotation0419", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0419 = null;

    #[ORM\Column(name: "CG_BDotation0420", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0420 = null;

    #[ORM\Column(name: "CG_BDotation0421", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0421 = null;

    #[ORM\Column(name: "CG_BDotation0422", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0422 = null;

    #[ORM\Column(name: "CG_BDotation0423", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0423 = null;

    #[ORM\Column(name: "CG_BDotation0424", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0424 = null;

    #[ORM\Column(name: "CG_BDotation0425", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0425 = null;

    #[ORM\Column(name: "CG_BDotation0426", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0426 = null;

    #[ORM\Column(name: "CG_BDotation0427", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0427 = null;

    #[ORM\Column(name: "CG_BDotation0428", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0428 = null;

    #[ORM\Column(name: "CG_BDotation0429", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0429 = null;

    #[ORM\Column(name: "CG_BDotation0430", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0430 = null;

    #[ORM\Column(name: "CG_BDotation0431", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0431 = null;

    #[ORM\Column(name: "CG_BDotation0432", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0432 = null;

    #[ORM\Column(name: "CG_BDotation0433", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0433 = null;

    #[ORM\Column(name: "CG_BDotation0434", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0434 = null;

    #[ORM\Column(name: "CG_BDotation0435", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0435 = null;

    #[ORM\Column(name: "CG_BDotation0436", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0436 = null;

    #[ORM\Column(name: "CG_BDotation0501", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0501 = null;

    #[ORM\Column(name: "CG_BDotation0502", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0502 = null;

    #[ORM\Column(name: "CG_BDotation0503", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0503 = null;

    #[ORM\Column(name: "CG_BDotation0504", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0504 = null;

    #[ORM\Column(name: "CG_BDotation0505", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0505 = null;

    #[ORM\Column(name: "CG_BDotation0506", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0506 = null;

    #[ORM\Column(name: "CG_BDotation0507", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0507 = null;

    #[ORM\Column(name: "CG_BDotation0508", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0508 = null;

    #[ORM\Column(name: "CG_BDotation0509", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0509 = null;

    #[ORM\Column(name: "CG_BDotation0510", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0510 = null;

    #[ORM\Column(name: "CG_BDotation0511", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0511 = null;

    #[ORM\Column(name: "CG_BDotation0512", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0512 = null;

    #[ORM\Column(name: "CG_BDotation0513", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0513 = null;

    #[ORM\Column(name: "CG_BDotation0514", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0514 = null;

    #[ORM\Column(name: "CG_BDotation0515", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0515 = null;

    #[ORM\Column(name: "CG_BDotation0516", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0516 = null;

    #[ORM\Column(name: "CG_BDotation0517", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0517 = null;

    #[ORM\Column(name: "CG_BDotation0518", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0518 = null;

    #[ORM\Column(name: "CG_BDotation0519", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0519 = null;

    #[ORM\Column(name: "CG_BDotation0520", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0520 = null;

    #[ORM\Column(name: "CG_BDotation0521", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0521 = null;

    #[ORM\Column(name: "CG_BDotation0522", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0522 = null;

    #[ORM\Column(name: "CG_BDotation0523", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0523 = null;

    #[ORM\Column(name: "CG_BDotation0524", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0524 = null;

    #[ORM\Column(name: "CG_BDotation0525", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0525 = null;

    #[ORM\Column(name: "CG_BDotation0526", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0526 = null;

    #[ORM\Column(name: "CG_BDotation0527", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0527 = null;

    #[ORM\Column(name: "CG_BDotation0528", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0528 = null;

    #[ORM\Column(name: "CG_BDotation0529", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0529 = null;

    #[ORM\Column(name: "CG_BDotation0530", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0530 = null;

    #[ORM\Column(name: "CG_BDotation0531", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0531 = null;

    #[ORM\Column(name: "CG_BDotation0532", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0532 = null;

    #[ORM\Column(name: "CG_BDotation0533", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0533 = null;

    #[ORM\Column(name: "CG_BDotation0534", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0534 = null;

    #[ORM\Column(name: "CG_BDotation0535", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0535 = null;

    #[ORM\Column(name: "CG_BDotation0536", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0536 = null;

    #[ORM\Column(name: "CG_BDotation0601", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0601 = null;

    #[ORM\Column(name: "CG_BDotation0602", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0602 = null;

    #[ORM\Column(name: "CG_BDotation0603", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0603 = null;

    #[ORM\Column(name: "CG_BDotation0604", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0604 = null;

    #[ORM\Column(name: "CG_BDotation0605", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0605 = null;

    #[ORM\Column(name: "CG_BDotation0606", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0606 = null;

    #[ORM\Column(name: "CG_BDotation0607", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0607 = null;

    #[ORM\Column(name: "CG_BDotation0608", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0608 = null;

    #[ORM\Column(name: "CG_BDotation0609", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0609 = null;

    #[ORM\Column(name: "CG_BDotation0610", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0610 = null;

    #[ORM\Column(name: "CG_BDotation0611", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0611 = null;

    #[ORM\Column(name: "CG_BDotation0612", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0612 = null;

    #[ORM\Column(name: "CG_BDotation0613", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0613 = null;

    #[ORM\Column(name: "CG_BDotation0614", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0614 = null;

    #[ORM\Column(name: "CG_BDotation0615", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0615 = null;

    #[ORM\Column(name: "CG_BDotation0616", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0616 = null;

    #[ORM\Column(name: "CG_BDotation0617", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0617 = null;

    #[ORM\Column(name: "CG_BDotation0618", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0618 = null;

    #[ORM\Column(name: "CG_BDotation0619", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0619 = null;

    #[ORM\Column(name: "CG_BDotation0620", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0620 = null;

    #[ORM\Column(name: "CG_BDotation0621", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0621 = null;

    #[ORM\Column(name: "CG_BDotation0622", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0622 = null;

    #[ORM\Column(name: "CG_BDotation0623", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0623 = null;

    #[ORM\Column(name: "CG_BDotation0624", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0624 = null;

    #[ORM\Column(name: "CG_BDotation0625", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0625 = null;

    #[ORM\Column(name: "CG_BDotation0626", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0626 = null;

    #[ORM\Column(name: "CG_BDotation0627", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0627 = null;

    #[ORM\Column(name: "CG_BDotation0628", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0628 = null;

    #[ORM\Column(name: "CG_BDotation0629", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0629 = null;

    #[ORM\Column(name: "CG_BDotation0630", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0630 = null;

    #[ORM\Column(name: "CG_BDotation0631", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0631 = null;

    #[ORM\Column(name: "CG_BDotation0632", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0632 = null;

    #[ORM\Column(name: "CG_BDotation0633", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0633 = null;

    #[ORM\Column(name: "CG_BDotation0634", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0634 = null;

    #[ORM\Column(name: "CG_BDotation0635", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0635 = null;

    #[ORM\Column(name: "CG_BDotation0636", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotation0636 = null;

    #[ORM\Column(name: "CG_BDotationQ0101", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0101 = null;

    #[ORM\Column(name: "CG_BDotationQ0102", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0102 = null;

    #[ORM\Column(name: "CG_BDotationQ0103", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0103 = null;

    #[ORM\Column(name: "CG_BDotationQ0104", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0104 = null;

    #[ORM\Column(name: "CG_BDotationQ0105", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0105 = null;

    #[ORM\Column(name: "CG_BDotationQ0106", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0106 = null;

    #[ORM\Column(name: "CG_BDotationQ0107", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0107 = null;

    #[ORM\Column(name: "CG_BDotationQ0108", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0108 = null;

    #[ORM\Column(name: "CG_BDotationQ0109", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0109 = null;

    #[ORM\Column(name: "CG_BDotationQ0110", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0110 = null;

    #[ORM\Column(name: "CG_BDotationQ0111", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0111 = null;

    #[ORM\Column(name: "CG_BDotationQ0112", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0112 = null;

    #[ORM\Column(name: "CG_BDotationQ0113", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0113 = null;

    #[ORM\Column(name: "CG_BDotationQ0114", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0114 = null;

    #[ORM\Column(name: "CG_BDotationQ0115", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0115 = null;

    #[ORM\Column(name: "CG_BDotationQ0116", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0116 = null;

    #[ORM\Column(name: "CG_BDotationQ0117", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0117 = null;

    #[ORM\Column(name: "CG_BDotationQ0118", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0118 = null;

    #[ORM\Column(name: "CG_BDotationQ0119", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0119 = null;

    #[ORM\Column(name: "CG_BDotationQ0120", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0120 = null;

    #[ORM\Column(name: "CG_BDotationQ0121", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0121 = null;

    #[ORM\Column(name: "CG_BDotationQ0122", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0122 = null;

    #[ORM\Column(name: "CG_BDotationQ0123", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0123 = null;

    #[ORM\Column(name: "CG_BDotationQ0124", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0124 = null;

    #[ORM\Column(name: "CG_BDotationQ0125", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0125 = null;

    #[ORM\Column(name: "CG_BDotationQ0126", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0126 = null;

    #[ORM\Column(name: "CG_BDotationQ0127", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0127 = null;

    #[ORM\Column(name: "CG_BDotationQ0128", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0128 = null;

    #[ORM\Column(name: "CG_BDotationQ0129", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0129 = null;

    #[ORM\Column(name: "CG_BDotationQ0130", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0130 = null;

    #[ORM\Column(name: "CG_BDotationQ0131", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0131 = null;

    #[ORM\Column(name: "CG_BDotationQ0132", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0132 = null;

    #[ORM\Column(name: "CG_BDotationQ0133", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0133 = null;

    #[ORM\Column(name: "CG_BDotationQ0134", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0134 = null;

    #[ORM\Column(name: "CG_BDotationQ0135", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0135 = null;

    #[ORM\Column(name: "CG_BDotationQ0136", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0136 = null;

    #[ORM\Column(name: "CG_BDotationQ0201", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0201 = null;

    #[ORM\Column(name: "CG_BDotationQ0202", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0202 = null;

    #[ORM\Column(name: "CG_BDotationQ0203", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0203 = null;

    #[ORM\Column(name: "CG_BDotationQ0204", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0204 = null;

    #[ORM\Column(name: "CG_BDotationQ0205", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0205 = null;

    #[ORM\Column(name: "CG_BDotationQ0206", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0206 = null;

    #[ORM\Column(name: "CG_BDotationQ0207", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0207 = null;

    #[ORM\Column(name: "CG_BDotationQ0208", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0208 = null;

    #[ORM\Column(name: "CG_BDotationQ0209", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0209 = null;

    #[ORM\Column(name: "CG_BDotationQ0210", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0210 = null;

    #[ORM\Column(name: "CG_BDotationQ0211", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0211 = null;

    #[ORM\Column(name: "CG_BDotationQ0212", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0212 = null;

    #[ORM\Column(name: "CG_BDotationQ0213", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0213 = null;

    #[ORM\Column(name: "CG_BDotationQ0214", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0214 = null;

    #[ORM\Column(name: "CG_BDotationQ0215", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0215 = null;

    #[ORM\Column(name: "CG_BDotationQ0216", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0216 = null;

    #[ORM\Column(name: "CG_BDotationQ0217", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0217 = null;

    #[ORM\Column(name: "CG_BDotationQ0218", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0218 = null;

    #[ORM\Column(name: "CG_BDotationQ0219", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0219 = null;

    #[ORM\Column(name: "CG_BDotationQ0220", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0220 = null;

    #[ORM\Column(name: "CG_BDotationQ0221", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0221 = null;

    #[ORM\Column(name: "CG_BDotationQ0222", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0222 = null;

    #[ORM\Column(name: "CG_BDotationQ0223", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0223 = null;

    #[ORM\Column(name: "CG_BDotationQ0224", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0224 = null;

    #[ORM\Column(name: "CG_BDotationQ0225", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0225 = null;

    #[ORM\Column(name: "CG_BDotationQ0226", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0226 = null;

    #[ORM\Column(name: "CG_BDotationQ0227", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0227 = null;

    #[ORM\Column(name: "CG_BDotationQ0228", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0228 = null;

    #[ORM\Column(name: "CG_BDotationQ0229", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0229 = null;

    #[ORM\Column(name: "CG_BDotationQ0230", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0230 = null;

    #[ORM\Column(name: "CG_BDotationQ0231", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0231 = null;

    #[ORM\Column(name: "CG_BDotationQ0232", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0232 = null;

    #[ORM\Column(name: "CG_BDotationQ0233", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0233 = null;

    #[ORM\Column(name: "CG_BDotationQ0234", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0234 = null;

    #[ORM\Column(name: "CG_BDotationQ0235", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0235 = null;

    #[ORM\Column(name: "CG_BDotationQ0236", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0236 = null;

    #[ORM\Column(name: "CG_BDotationQ0301", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0301 = null;

    #[ORM\Column(name: "CG_BDotationQ0302", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0302 = null;

    #[ORM\Column(name: "CG_BDotationQ0303", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0303 = null;

    #[ORM\Column(name: "CG_BDotationQ0304", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0304 = null;

    #[ORM\Column(name: "CG_BDotationQ0305", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0305 = null;

    #[ORM\Column(name: "CG_BDotationQ0306", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0306 = null;

    #[ORM\Column(name: "CG_BDotationQ0307", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0307 = null;

    #[ORM\Column(name: "CG_BDotationQ0308", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0308 = null;

    #[ORM\Column(name: "CG_BDotationQ0309", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0309 = null;

    #[ORM\Column(name: "CG_BDotationQ0310", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0310 = null;

    #[ORM\Column(name: "CG_BDotationQ0311", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0311 = null;

    #[ORM\Column(name: "CG_BDotationQ0312", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0312 = null;

    #[ORM\Column(name: "CG_BDotationQ0313", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0313 = null;

    #[ORM\Column(name: "CG_BDotationQ0314", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0314 = null;

    #[ORM\Column(name: "CG_BDotationQ0315", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0315 = null;

    #[ORM\Column(name: "CG_BDotationQ0316", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0316 = null;

    #[ORM\Column(name: "CG_BDotationQ0317", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0317 = null;

    #[ORM\Column(name: "CG_BDotationQ0318", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0318 = null;

    #[ORM\Column(name: "CG_BDotationQ0319", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0319 = null;

    #[ORM\Column(name: "CG_BDotationQ0320", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0320 = null;

    #[ORM\Column(name: "CG_BDotationQ0321", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0321 = null;

    #[ORM\Column(name: "CG_BDotationQ0322", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0322 = null;

    #[ORM\Column(name: "CG_BDotationQ0323", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0323 = null;

    #[ORM\Column(name: "CG_BDotationQ0324", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0324 = null;

    #[ORM\Column(name: "CG_BDotationQ0325", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0325 = null;

    #[ORM\Column(name: "CG_BDotationQ0326", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0326 = null;

    #[ORM\Column(name: "CG_BDotationQ0327", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0327 = null;

    #[ORM\Column(name: "CG_BDotationQ0328", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0328 = null;

    #[ORM\Column(name: "CG_BDotationQ0329", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0329 = null;

    #[ORM\Column(name: "CG_BDotationQ0330", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0330 = null;

    #[ORM\Column(name: "CG_BDotationQ0331", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0331 = null;

    #[ORM\Column(name: "CG_BDotationQ0332", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0332 = null;

    #[ORM\Column(name: "CG_BDotationQ0333", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0333 = null;

    #[ORM\Column(name: "CG_BDotationQ0334", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0334 = null;

    #[ORM\Column(name: "CG_BDotationQ0335", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0335 = null;

    #[ORM\Column(name: "CG_BDotationQ0336", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0336 = null;

    #[ORM\Column(name: "CG_BDotationQ0401", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0401 = null;

    #[ORM\Column(name: "CG_BDotationQ0402", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0402 = null;

    #[ORM\Column(name: "CG_BDotationQ0403", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0403 = null;

    #[ORM\Column(name: "CG_BDotationQ0404", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0404 = null;

    #[ORM\Column(name: "CG_BDotationQ0405", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0405 = null;

    #[ORM\Column(name: "CG_BDotationQ0406", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0406 = null;

    #[ORM\Column(name: "CG_BDotationQ0407", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0407 = null;

    #[ORM\Column(name: "CG_BDotationQ0408", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0408 = null;

    #[ORM\Column(name: "CG_BDotationQ0409", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0409 = null;

    #[ORM\Column(name: "CG_BDotationQ0410", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0410 = null;

    #[ORM\Column(name: "CG_BDotationQ0411", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0411 = null;

    #[ORM\Column(name: "CG_BDotationQ0412", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0412 = null;

    #[ORM\Column(name: "CG_BDotationQ0413", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0413 = null;

    #[ORM\Column(name: "CG_BDotationQ0414", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0414 = null;

    #[ORM\Column(name: "CG_BDotationQ0415", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0415 = null;

    #[ORM\Column(name: "CG_BDotationQ0416", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0416 = null;

    #[ORM\Column(name: "CG_BDotationQ0417", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0417 = null;

    #[ORM\Column(name: "CG_BDotationQ0418", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0418 = null;

    #[ORM\Column(name: "CG_BDotationQ0419", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0419 = null;

    #[ORM\Column(name: "CG_BDotationQ0420", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0420 = null;

    #[ORM\Column(name: "CG_BDotationQ0421", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0421 = null;

    #[ORM\Column(name: "CG_BDotationQ0422", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0422 = null;

    #[ORM\Column(name: "CG_BDotationQ0423", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0423 = null;

    #[ORM\Column(name: "CG_BDotationQ0424", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0424 = null;

    #[ORM\Column(name: "CG_BDotationQ0425", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0425 = null;

    #[ORM\Column(name: "CG_BDotationQ0426", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0426 = null;

    #[ORM\Column(name: "CG_BDotationQ0427", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0427 = null;

    #[ORM\Column(name: "CG_BDotationQ0428", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0428 = null;

    #[ORM\Column(name: "CG_BDotationQ0429", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0429 = null;

    #[ORM\Column(name: "CG_BDotationQ0430", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0430 = null;

    #[ORM\Column(name: "CG_BDotationQ0431", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0431 = null;

    #[ORM\Column(name: "CG_BDotationQ0432", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0432 = null;

    #[ORM\Column(name: "CG_BDotationQ0433", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0433 = null;

    #[ORM\Column(name: "CG_BDotationQ0434", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0434 = null;

    #[ORM\Column(name: "CG_BDotationQ0435", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0435 = null;

    #[ORM\Column(name: "CG_BDotationQ0436", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0436 = null;

    #[ORM\Column(name: "CG_BDotationQ0501", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0501 = null;

    #[ORM\Column(name: "CG_BDotationQ0502", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0502 = null;

    #[ORM\Column(name: "CG_BDotationQ0503", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0503 = null;

    #[ORM\Column(name: "CG_BDotationQ0504", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0504 = null;

    #[ORM\Column(name: "CG_BDotationQ0505", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0505 = null;

    #[ORM\Column(name: "CG_BDotationQ0506", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0506 = null;

    #[ORM\Column(name: "CG_BDotationQ0507", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0507 = null;

    #[ORM\Column(name: "CG_BDotationQ0508", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0508 = null;

    #[ORM\Column(name: "CG_BDotationQ0509", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0509 = null;

    #[ORM\Column(name: "CG_BDotationQ0510", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0510 = null;

    #[ORM\Column(name: "CG_BDotationQ0511", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0511 = null;

    #[ORM\Column(name: "CG_BDotationQ0512", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0512 = null;

    #[ORM\Column(name: "CG_BDotationQ0513", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0513 = null;

    #[ORM\Column(name: "CG_BDotationQ0514", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0514 = null;

    #[ORM\Column(name: "CG_BDotationQ0515", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0515 = null;

    #[ORM\Column(name: "CG_BDotationQ0516", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0516 = null;

    #[ORM\Column(name: "CG_BDotationQ0517", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0517 = null;

    #[ORM\Column(name: "CG_BDotationQ0518", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0518 = null;

    #[ORM\Column(name: "CG_BDotationQ0519", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0519 = null;

    #[ORM\Column(name: "CG_BDotationQ0520", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0520 = null;

    #[ORM\Column(name: "CG_BDotationQ0521", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0521 = null;

    #[ORM\Column(name: "CG_BDotationQ0522", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0522 = null;

    #[ORM\Column(name: "CG_BDotationQ0523", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0523 = null;

    #[ORM\Column(name: "CG_BDotationQ0524", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0524 = null;

    #[ORM\Column(name: "CG_BDotationQ0525", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0525 = null;

    #[ORM\Column(name: "CG_BDotationQ0526", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0526 = null;

    #[ORM\Column(name: "CG_BDotationQ0527", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0527 = null;

    #[ORM\Column(name: "CG_BDotationQ0528", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0528 = null;

    #[ORM\Column(name: "CG_BDotationQ0529", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0529 = null;

    #[ORM\Column(name: "CG_BDotationQ0530", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0530 = null;

    #[ORM\Column(name: "CG_BDotationQ0531", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0531 = null;

    #[ORM\Column(name: "CG_BDotationQ0532", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0532 = null;

    #[ORM\Column(name: "CG_BDotationQ0533", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0533 = null;

    #[ORM\Column(name: "CG_BDotationQ0534", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0534 = null;

    #[ORM\Column(name: "CG_BDotationQ0535", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0535 = null;

    #[ORM\Column(name: "CG_BDotationQ0536", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0536 = null;

    #[ORM\Column(name: "CG_BDotationQ0601", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0601 = null;

    #[ORM\Column(name: "CG_BDotationQ0602", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0602 = null;

    #[ORM\Column(name: "CG_BDotationQ0603", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0603 = null;

    #[ORM\Column(name: "CG_BDotationQ0604", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0604 = null;

    #[ORM\Column(name: "CG_BDotationQ0605", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0605 = null;

    #[ORM\Column(name: "CG_BDotationQ0606", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0606 = null;

    #[ORM\Column(name: "CG_BDotationQ0607", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0607 = null;

    #[ORM\Column(name: "CG_BDotationQ0608", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0608 = null;

    #[ORM\Column(name: "CG_BDotationQ0609", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0609 = null;

    #[ORM\Column(name: "CG_BDotationQ0610", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0610 = null;

    #[ORM\Column(name: "CG_BDotationQ0611", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0611 = null;

    #[ORM\Column(name: "CG_BDotationQ0612", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0612 = null;

    #[ORM\Column(name: "CG_BDotationQ0613", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0613 = null;

    #[ORM\Column(name: "CG_BDotationQ0614", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0614 = null;

    #[ORM\Column(name: "CG_BDotationQ0615", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0615 = null;

    #[ORM\Column(name: "CG_BDotationQ0616", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0616 = null;

    #[ORM\Column(name: "CG_BDotationQ0617", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0617 = null;

    #[ORM\Column(name: "CG_BDotationQ0618", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0618 = null;

    #[ORM\Column(name: "CG_BDotationQ0619", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0619 = null;

    #[ORM\Column(name: "CG_BDotationQ0620", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0620 = null;

    #[ORM\Column(name: "CG_BDotationQ0621", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0621 = null;

    #[ORM\Column(name: "CG_BDotationQ0622", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0622 = null;

    #[ORM\Column(name: "CG_BDotationQ0623", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0623 = null;

    #[ORM\Column(name: "CG_BDotationQ0624", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0624 = null;

    #[ORM\Column(name: "CG_BDotationQ0625", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0625 = null;

    #[ORM\Column(name: "CG_BDotationQ0626", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0626 = null;

    #[ORM\Column(name: "CG_BDotationQ0627", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0627 = null;

    #[ORM\Column(name: "CG_BDotationQ0628", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0628 = null;

    #[ORM\Column(name: "CG_BDotationQ0629", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0629 = null;

    #[ORM\Column(name: "CG_BDotationQ0630", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0630 = null;

    #[ORM\Column(name: "CG_BDotationQ0631", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0631 = null;

    #[ORM\Column(name: "CG_BDotationQ0632", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0632 = null;

    #[ORM\Column(name: "CG_BDotationQ0633", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0633 = null;

    #[ORM\Column(name: "CG_BDotationQ0634", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0634 = null;

    #[ORM\Column(name: "CG_BDotationQ0635", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0635 = null;

    #[ORM\Column(name: "CG_BDotationQ0636", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $cgBdotationq0636 = null;

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

    public function getCgNum(): ?string
    {
        return $this->cgNum;
    }

    public function setCgNum(string $cgNum): static
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

    public function getCgBsens(): ?int
    {
        return $this->cgBsens;
    }

    public function setCgBsens(?int $cgBsens): static
    {
        $this->cgBsens = $cgBsens;

        return $this;
    }

    public function getCgBdotation0101(): ?string
    {
        return $this->cgBdotation0101;
    }

    public function setCgBdotation0101(?string $cgBdotation0101): static
    {
        $this->cgBdotation0101 = $cgBdotation0101;

        return $this;
    }

    public function getCgBdotation0102(): ?string
    {
        return $this->cgBdotation0102;
    }

    public function setCgBdotation0102(?string $cgBdotation0102): static
    {
        $this->cgBdotation0102 = $cgBdotation0102;

        return $this;
    }

    public function getCgBdotation0103(): ?string
    {
        return $this->cgBdotation0103;
    }

    public function setCgBdotation0103(?string $cgBdotation0103): static
    {
        $this->cgBdotation0103 = $cgBdotation0103;

        return $this;
    }

    public function getCgBdotation0104(): ?string
    {
        return $this->cgBdotation0104;
    }

    public function setCgBdotation0104(?string $cgBdotation0104): static
    {
        $this->cgBdotation0104 = $cgBdotation0104;

        return $this;
    }

    public function getCgBdotation0105(): ?string
    {
        return $this->cgBdotation0105;
    }

    public function setCgBdotation0105(?string $cgBdotation0105): static
    {
        $this->cgBdotation0105 = $cgBdotation0105;

        return $this;
    }

    public function getCgBdotation0106(): ?string
    {
        return $this->cgBdotation0106;
    }

    public function setCgBdotation0106(?string $cgBdotation0106): static
    {
        $this->cgBdotation0106 = $cgBdotation0106;

        return $this;
    }

    public function getCgBdotation0107(): ?string
    {
        return $this->cgBdotation0107;
    }

    public function setCgBdotation0107(?string $cgBdotation0107): static
    {
        $this->cgBdotation0107 = $cgBdotation0107;

        return $this;
    }

    public function getCgBdotation0108(): ?string
    {
        return $this->cgBdotation0108;
    }

    public function setCgBdotation0108(?string $cgBdotation0108): static
    {
        $this->cgBdotation0108 = $cgBdotation0108;

        return $this;
    }

    public function getCgBdotation0109(): ?string
    {
        return $this->cgBdotation0109;
    }

    public function setCgBdotation0109(?string $cgBdotation0109): static
    {
        $this->cgBdotation0109 = $cgBdotation0109;

        return $this;
    }

    public function getCgBdotation0110(): ?string
    {
        return $this->cgBdotation0110;
    }

    public function setCgBdotation0110(?string $cgBdotation0110): static
    {
        $this->cgBdotation0110 = $cgBdotation0110;

        return $this;
    }

    public function getCgBdotation0111(): ?string
    {
        return $this->cgBdotation0111;
    }

    public function setCgBdotation0111(?string $cgBdotation0111): static
    {
        $this->cgBdotation0111 = $cgBdotation0111;

        return $this;
    }

    public function getCgBdotation0112(): ?string
    {
        return $this->cgBdotation0112;
    }

    public function setCgBdotation0112(?string $cgBdotation0112): static
    {
        $this->cgBdotation0112 = $cgBdotation0112;

        return $this;
    }

    public function getCgBdotation0113(): ?string
    {
        return $this->cgBdotation0113;
    }

    public function setCgBdotation0113(?string $cgBdotation0113): static
    {
        $this->cgBdotation0113 = $cgBdotation0113;

        return $this;
    }

    public function getCgBdotation0114(): ?string
    {
        return $this->cgBdotation0114;
    }

    public function setCgBdotation0114(?string $cgBdotation0114): static
    {
        $this->cgBdotation0114 = $cgBdotation0114;

        return $this;
    }

    public function getCgBdotation0115(): ?string
    {
        return $this->cgBdotation0115;
    }

    public function setCgBdotation0115(?string $cgBdotation0115): static
    {
        $this->cgBdotation0115 = $cgBdotation0115;

        return $this;
    }

    public function getCgBdotation0116(): ?string
    {
        return $this->cgBdotation0116;
    }

    public function setCgBdotation0116(?string $cgBdotation0116): static
    {
        $this->cgBdotation0116 = $cgBdotation0116;

        return $this;
    }

    public function getCgBdotation0117(): ?string
    {
        return $this->cgBdotation0117;
    }

    public function setCgBdotation0117(?string $cgBdotation0117): static
    {
        $this->cgBdotation0117 = $cgBdotation0117;

        return $this;
    }

    public function getCgBdotation0118(): ?string
    {
        return $this->cgBdotation0118;
    }

    public function setCgBdotation0118(?string $cgBdotation0118): static
    {
        $this->cgBdotation0118 = $cgBdotation0118;

        return $this;
    }

    public function getCgBdotation0119(): ?string
    {
        return $this->cgBdotation0119;
    }

    public function setCgBdotation0119(?string $cgBdotation0119): static
    {
        $this->cgBdotation0119 = $cgBdotation0119;

        return $this;
    }

    public function getCgBdotation0120(): ?string
    {
        return $this->cgBdotation0120;
    }

    public function setCgBdotation0120(?string $cgBdotation0120): static
    {
        $this->cgBdotation0120 = $cgBdotation0120;

        return $this;
    }

    public function getCgBdotation0121(): ?string
    {
        return $this->cgBdotation0121;
    }

    public function setCgBdotation0121(?string $cgBdotation0121): static
    {
        $this->cgBdotation0121 = $cgBdotation0121;

        return $this;
    }

    public function getCgBdotation0122(): ?string
    {
        return $this->cgBdotation0122;
    }

    public function setCgBdotation0122(?string $cgBdotation0122): static
    {
        $this->cgBdotation0122 = $cgBdotation0122;

        return $this;
    }

    public function getCgBdotation0123(): ?string
    {
        return $this->cgBdotation0123;
    }

    public function setCgBdotation0123(?string $cgBdotation0123): static
    {
        $this->cgBdotation0123 = $cgBdotation0123;

        return $this;
    }

    public function getCgBdotation0124(): ?string
    {
        return $this->cgBdotation0124;
    }

    public function setCgBdotation0124(?string $cgBdotation0124): static
    {
        $this->cgBdotation0124 = $cgBdotation0124;

        return $this;
    }

    public function getCgBdotation0125(): ?string
    {
        return $this->cgBdotation0125;
    }

    public function setCgBdotation0125(?string $cgBdotation0125): static
    {
        $this->cgBdotation0125 = $cgBdotation0125;

        return $this;
    }

    public function getCgBdotation0126(): ?string
    {
        return $this->cgBdotation0126;
    }

    public function setCgBdotation0126(?string $cgBdotation0126): static
    {
        $this->cgBdotation0126 = $cgBdotation0126;

        return $this;
    }

    public function getCgBdotation0127(): ?string
    {
        return $this->cgBdotation0127;
    }

    public function setCgBdotation0127(?string $cgBdotation0127): static
    {
        $this->cgBdotation0127 = $cgBdotation0127;

        return $this;
    }

    public function getCgBdotation0128(): ?string
    {
        return $this->cgBdotation0128;
    }

    public function setCgBdotation0128(?string $cgBdotation0128): static
    {
        $this->cgBdotation0128 = $cgBdotation0128;

        return $this;
    }

    public function getCgBdotation0129(): ?string
    {
        return $this->cgBdotation0129;
    }

    public function setCgBdotation0129(?string $cgBdotation0129): static
    {
        $this->cgBdotation0129 = $cgBdotation0129;

        return $this;
    }

    public function getCgBdotation0130(): ?string
    {
        return $this->cgBdotation0130;
    }

    public function setCgBdotation0130(?string $cgBdotation0130): static
    {
        $this->cgBdotation0130 = $cgBdotation0130;

        return $this;
    }

    public function getCgBdotation0131(): ?string
    {
        return $this->cgBdotation0131;
    }

    public function setCgBdotation0131(?string $cgBdotation0131): static
    {
        $this->cgBdotation0131 = $cgBdotation0131;

        return $this;
    }

    public function getCgBdotation0132(): ?string
    {
        return $this->cgBdotation0132;
    }

    public function setCgBdotation0132(?string $cgBdotation0132): static
    {
        $this->cgBdotation0132 = $cgBdotation0132;

        return $this;
    }

    public function getCgBdotation0133(): ?string
    {
        return $this->cgBdotation0133;
    }

    public function setCgBdotation0133(?string $cgBdotation0133): static
    {
        $this->cgBdotation0133 = $cgBdotation0133;

        return $this;
    }

    public function getCgBdotation0134(): ?string
    {
        return $this->cgBdotation0134;
    }

    public function setCgBdotation0134(?string $cgBdotation0134): static
    {
        $this->cgBdotation0134 = $cgBdotation0134;

        return $this;
    }

    public function getCgBdotation0135(): ?string
    {
        return $this->cgBdotation0135;
    }

    public function setCgBdotation0135(?string $cgBdotation0135): static
    {
        $this->cgBdotation0135 = $cgBdotation0135;

        return $this;
    }

    public function getCgBdotation0136(): ?string
    {
        return $this->cgBdotation0136;
    }

    public function setCgBdotation0136(?string $cgBdotation0136): static
    {
        $this->cgBdotation0136 = $cgBdotation0136;

        return $this;
    }

    public function getCgBdotation0201(): ?string
    {
        return $this->cgBdotation0201;
    }

    public function setCgBdotation0201(?string $cgBdotation0201): static
    {
        $this->cgBdotation0201 = $cgBdotation0201;

        return $this;
    }

    public function getCgBdotation0202(): ?string
    {
        return $this->cgBdotation0202;
    }

    public function setCgBdotation0202(?string $cgBdotation0202): static
    {
        $this->cgBdotation0202 = $cgBdotation0202;

        return $this;
    }

    public function getCgBdotation0203(): ?string
    {
        return $this->cgBdotation0203;
    }

    public function setCgBdotation0203(?string $cgBdotation0203): static
    {
        $this->cgBdotation0203 = $cgBdotation0203;

        return $this;
    }

    public function getCgBdotation0204(): ?string
    {
        return $this->cgBdotation0204;
    }

    public function setCgBdotation0204(?string $cgBdotation0204): static
    {
        $this->cgBdotation0204 = $cgBdotation0204;

        return $this;
    }

    public function getCgBdotation0205(): ?string
    {
        return $this->cgBdotation0205;
    }

    public function setCgBdotation0205(?string $cgBdotation0205): static
    {
        $this->cgBdotation0205 = $cgBdotation0205;

        return $this;
    }

    public function getCgBdotation0206(): ?string
    {
        return $this->cgBdotation0206;
    }

    public function setCgBdotation0206(?string $cgBdotation0206): static
    {
        $this->cgBdotation0206 = $cgBdotation0206;

        return $this;
    }

    public function getCgBdotation0207(): ?string
    {
        return $this->cgBdotation0207;
    }

    public function setCgBdotation0207(?string $cgBdotation0207): static
    {
        $this->cgBdotation0207 = $cgBdotation0207;

        return $this;
    }

    public function getCgBdotation0208(): ?string
    {
        return $this->cgBdotation0208;
    }

    public function setCgBdotation0208(?string $cgBdotation0208): static
    {
        $this->cgBdotation0208 = $cgBdotation0208;

        return $this;
    }

    public function getCgBdotation0209(): ?string
    {
        return $this->cgBdotation0209;
    }

    public function setCgBdotation0209(?string $cgBdotation0209): static
    {
        $this->cgBdotation0209 = $cgBdotation0209;

        return $this;
    }

    public function getCgBdotation0210(): ?string
    {
        return $this->cgBdotation0210;
    }

    public function setCgBdotation0210(?string $cgBdotation0210): static
    {
        $this->cgBdotation0210 = $cgBdotation0210;

        return $this;
    }

    public function getCgBdotation0211(): ?string
    {
        return $this->cgBdotation0211;
    }

    public function setCgBdotation0211(?string $cgBdotation0211): static
    {
        $this->cgBdotation0211 = $cgBdotation0211;

        return $this;
    }

    public function getCgBdotation0212(): ?string
    {
        return $this->cgBdotation0212;
    }

    public function setCgBdotation0212(?string $cgBdotation0212): static
    {
        $this->cgBdotation0212 = $cgBdotation0212;

        return $this;
    }

    public function getCgBdotation0213(): ?string
    {
        return $this->cgBdotation0213;
    }

    public function setCgBdotation0213(?string $cgBdotation0213): static
    {
        $this->cgBdotation0213 = $cgBdotation0213;

        return $this;
    }

    public function getCgBdotation0214(): ?string
    {
        return $this->cgBdotation0214;
    }

    public function setCgBdotation0214(?string $cgBdotation0214): static
    {
        $this->cgBdotation0214 = $cgBdotation0214;

        return $this;
    }

    public function getCgBdotation0215(): ?string
    {
        return $this->cgBdotation0215;
    }

    public function setCgBdotation0215(?string $cgBdotation0215): static
    {
        $this->cgBdotation0215 = $cgBdotation0215;

        return $this;
    }

    public function getCgBdotation0216(): ?string
    {
        return $this->cgBdotation0216;
    }

    public function setCgBdotation0216(?string $cgBdotation0216): static
    {
        $this->cgBdotation0216 = $cgBdotation0216;

        return $this;
    }

    public function getCgBdotation0217(): ?string
    {
        return $this->cgBdotation0217;
    }

    public function setCgBdotation0217(?string $cgBdotation0217): static
    {
        $this->cgBdotation0217 = $cgBdotation0217;

        return $this;
    }

    public function getCgBdotation0218(): ?string
    {
        return $this->cgBdotation0218;
    }

    public function setCgBdotation0218(?string $cgBdotation0218): static
    {
        $this->cgBdotation0218 = $cgBdotation0218;

        return $this;
    }

    public function getCgBdotation0219(): ?string
    {
        return $this->cgBdotation0219;
    }

    public function setCgBdotation0219(?string $cgBdotation0219): static
    {
        $this->cgBdotation0219 = $cgBdotation0219;

        return $this;
    }

    public function getCgBdotation0220(): ?string
    {
        return $this->cgBdotation0220;
    }

    public function setCgBdotation0220(?string $cgBdotation0220): static
    {
        $this->cgBdotation0220 = $cgBdotation0220;

        return $this;
    }

    public function getCgBdotation0221(): ?string
    {
        return $this->cgBdotation0221;
    }

    public function setCgBdotation0221(?string $cgBdotation0221): static
    {
        $this->cgBdotation0221 = $cgBdotation0221;

        return $this;
    }

    public function getCgBdotation0222(): ?string
    {
        return $this->cgBdotation0222;
    }

    public function setCgBdotation0222(?string $cgBdotation0222): static
    {
        $this->cgBdotation0222 = $cgBdotation0222;

        return $this;
    }

    public function getCgBdotation0223(): ?string
    {
        return $this->cgBdotation0223;
    }

    public function setCgBdotation0223(?string $cgBdotation0223): static
    {
        $this->cgBdotation0223 = $cgBdotation0223;

        return $this;
    }

    public function getCgBdotation0224(): ?string
    {
        return $this->cgBdotation0224;
    }

    public function setCgBdotation0224(?string $cgBdotation0224): static
    {
        $this->cgBdotation0224 = $cgBdotation0224;

        return $this;
    }

    public function getCgBdotation0225(): ?string
    {
        return $this->cgBdotation0225;
    }

    public function setCgBdotation0225(?string $cgBdotation0225): static
    {
        $this->cgBdotation0225 = $cgBdotation0225;

        return $this;
    }

    public function getCgBdotation0226(): ?string
    {
        return $this->cgBdotation0226;
    }

    public function setCgBdotation0226(?string $cgBdotation0226): static
    {
        $this->cgBdotation0226 = $cgBdotation0226;

        return $this;
    }

    public function getCgBdotation0227(): ?string
    {
        return $this->cgBdotation0227;
    }

    public function setCgBdotation0227(?string $cgBdotation0227): static
    {
        $this->cgBdotation0227 = $cgBdotation0227;

        return $this;
    }

    public function getCgBdotation0228(): ?string
    {
        return $this->cgBdotation0228;
    }

    public function setCgBdotation0228(?string $cgBdotation0228): static
    {
        $this->cgBdotation0228 = $cgBdotation0228;

        return $this;
    }

    public function getCgBdotation0229(): ?string
    {
        return $this->cgBdotation0229;
    }

    public function setCgBdotation0229(?string $cgBdotation0229): static
    {
        $this->cgBdotation0229 = $cgBdotation0229;

        return $this;
    }

    public function getCgBdotation0230(): ?string
    {
        return $this->cgBdotation0230;
    }

    public function setCgBdotation0230(?string $cgBdotation0230): static
    {
        $this->cgBdotation0230 = $cgBdotation0230;

        return $this;
    }

    public function getCgBdotation0231(): ?string
    {
        return $this->cgBdotation0231;
    }

    public function setCgBdotation0231(?string $cgBdotation0231): static
    {
        $this->cgBdotation0231 = $cgBdotation0231;

        return $this;
    }

    public function getCgBdotation0232(): ?string
    {
        return $this->cgBdotation0232;
    }

    public function setCgBdotation0232(?string $cgBdotation0232): static
    {
        $this->cgBdotation0232 = $cgBdotation0232;

        return $this;
    }

    public function getCgBdotation0233(): ?string
    {
        return $this->cgBdotation0233;
    }

    public function setCgBdotation0233(?string $cgBdotation0233): static
    {
        $this->cgBdotation0233 = $cgBdotation0233;

        return $this;
    }

    public function getCgBdotation0234(): ?string
    {
        return $this->cgBdotation0234;
    }

    public function setCgBdotation0234(?string $cgBdotation0234): static
    {
        $this->cgBdotation0234 = $cgBdotation0234;

        return $this;
    }

    public function getCgBdotation0235(): ?string
    {
        return $this->cgBdotation0235;
    }

    public function setCgBdotation0235(?string $cgBdotation0235): static
    {
        $this->cgBdotation0235 = $cgBdotation0235;

        return $this;
    }

    public function getCgBdotation0236(): ?string
    {
        return $this->cgBdotation0236;
    }

    public function setCgBdotation0236(?string $cgBdotation0236): static
    {
        $this->cgBdotation0236 = $cgBdotation0236;

        return $this;
    }

    public function getCgBdotation0301(): ?string
    {
        return $this->cgBdotation0301;
    }

    public function setCgBdotation0301(?string $cgBdotation0301): static
    {
        $this->cgBdotation0301 = $cgBdotation0301;

        return $this;
    }

    public function getCgBdotation0302(): ?string
    {
        return $this->cgBdotation0302;
    }

    public function setCgBdotation0302(?string $cgBdotation0302): static
    {
        $this->cgBdotation0302 = $cgBdotation0302;

        return $this;
    }

    public function getCgBdotation0303(): ?string
    {
        return $this->cgBdotation0303;
    }

    public function setCgBdotation0303(?string $cgBdotation0303): static
    {
        $this->cgBdotation0303 = $cgBdotation0303;

        return $this;
    }

    public function getCgBdotation0304(): ?string
    {
        return $this->cgBdotation0304;
    }

    public function setCgBdotation0304(?string $cgBdotation0304): static
    {
        $this->cgBdotation0304 = $cgBdotation0304;

        return $this;
    }

    public function getCgBdotation0305(): ?string
    {
        return $this->cgBdotation0305;
    }

    public function setCgBdotation0305(?string $cgBdotation0305): static
    {
        $this->cgBdotation0305 = $cgBdotation0305;

        return $this;
    }

    public function getCgBdotation0306(): ?string
    {
        return $this->cgBdotation0306;
    }

    public function setCgBdotation0306(?string $cgBdotation0306): static
    {
        $this->cgBdotation0306 = $cgBdotation0306;

        return $this;
    }

    public function getCgBdotation0307(): ?string
    {
        return $this->cgBdotation0307;
    }

    public function setCgBdotation0307(?string $cgBdotation0307): static
    {
        $this->cgBdotation0307 = $cgBdotation0307;

        return $this;
    }

    public function getCgBdotation0308(): ?string
    {
        return $this->cgBdotation0308;
    }

    public function setCgBdotation0308(?string $cgBdotation0308): static
    {
        $this->cgBdotation0308 = $cgBdotation0308;

        return $this;
    }

    public function getCgBdotation0309(): ?string
    {
        return $this->cgBdotation0309;
    }

    public function setCgBdotation0309(?string $cgBdotation0309): static
    {
        $this->cgBdotation0309 = $cgBdotation0309;

        return $this;
    }

    public function getCgBdotation0310(): ?string
    {
        return $this->cgBdotation0310;
    }

    public function setCgBdotation0310(?string $cgBdotation0310): static
    {
        $this->cgBdotation0310 = $cgBdotation0310;

        return $this;
    }

    public function getCgBdotation0311(): ?string
    {
        return $this->cgBdotation0311;
    }

    public function setCgBdotation0311(?string $cgBdotation0311): static
    {
        $this->cgBdotation0311 = $cgBdotation0311;

        return $this;
    }

    public function getCgBdotation0312(): ?string
    {
        return $this->cgBdotation0312;
    }

    public function setCgBdotation0312(?string $cgBdotation0312): static
    {
        $this->cgBdotation0312 = $cgBdotation0312;

        return $this;
    }

    public function getCgBdotation0313(): ?string
    {
        return $this->cgBdotation0313;
    }

    public function setCgBdotation0313(?string $cgBdotation0313): static
    {
        $this->cgBdotation0313 = $cgBdotation0313;

        return $this;
    }

    public function getCgBdotation0314(): ?string
    {
        return $this->cgBdotation0314;
    }

    public function setCgBdotation0314(?string $cgBdotation0314): static
    {
        $this->cgBdotation0314 = $cgBdotation0314;

        return $this;
    }

    public function getCgBdotation0315(): ?string
    {
        return $this->cgBdotation0315;
    }

    public function setCgBdotation0315(?string $cgBdotation0315): static
    {
        $this->cgBdotation0315 = $cgBdotation0315;

        return $this;
    }

    public function getCgBdotation0316(): ?string
    {
        return $this->cgBdotation0316;
    }

    public function setCgBdotation0316(?string $cgBdotation0316): static
    {
        $this->cgBdotation0316 = $cgBdotation0316;

        return $this;
    }

    public function getCgBdotation0317(): ?string
    {
        return $this->cgBdotation0317;
    }

    public function setCgBdotation0317(?string $cgBdotation0317): static
    {
        $this->cgBdotation0317 = $cgBdotation0317;

        return $this;
    }

    public function getCgBdotation0318(): ?string
    {
        return $this->cgBdotation0318;
    }

    public function setCgBdotation0318(?string $cgBdotation0318): static
    {
        $this->cgBdotation0318 = $cgBdotation0318;

        return $this;
    }

    public function getCgBdotation0319(): ?string
    {
        return $this->cgBdotation0319;
    }

    public function setCgBdotation0319(?string $cgBdotation0319): static
    {
        $this->cgBdotation0319 = $cgBdotation0319;

        return $this;
    }

    public function getCgBdotation0320(): ?string
    {
        return $this->cgBdotation0320;
    }

    public function setCgBdotation0320(?string $cgBdotation0320): static
    {
        $this->cgBdotation0320 = $cgBdotation0320;

        return $this;
    }

    public function getCgBdotation0321(): ?string
    {
        return $this->cgBdotation0321;
    }

    public function setCgBdotation0321(?string $cgBdotation0321): static
    {
        $this->cgBdotation0321 = $cgBdotation0321;

        return $this;
    }

    public function getCgBdotation0322(): ?string
    {
        return $this->cgBdotation0322;
    }

    public function setCgBdotation0322(?string $cgBdotation0322): static
    {
        $this->cgBdotation0322 = $cgBdotation0322;

        return $this;
    }

    public function getCgBdotation0323(): ?string
    {
        return $this->cgBdotation0323;
    }

    public function setCgBdotation0323(?string $cgBdotation0323): static
    {
        $this->cgBdotation0323 = $cgBdotation0323;

        return $this;
    }

    public function getCgBdotation0324(): ?string
    {
        return $this->cgBdotation0324;
    }

    public function setCgBdotation0324(?string $cgBdotation0324): static
    {
        $this->cgBdotation0324 = $cgBdotation0324;

        return $this;
    }

    public function getCgBdotation0325(): ?string
    {
        return $this->cgBdotation0325;
    }

    public function setCgBdotation0325(?string $cgBdotation0325): static
    {
        $this->cgBdotation0325 = $cgBdotation0325;

        return $this;
    }

    public function getCgBdotation0326(): ?string
    {
        return $this->cgBdotation0326;
    }

    public function setCgBdotation0326(?string $cgBdotation0326): static
    {
        $this->cgBdotation0326 = $cgBdotation0326;

        return $this;
    }

    public function getCgBdotation0327(): ?string
    {
        return $this->cgBdotation0327;
    }

    public function setCgBdotation0327(?string $cgBdotation0327): static
    {
        $this->cgBdotation0327 = $cgBdotation0327;

        return $this;
    }

    public function getCgBdotation0328(): ?string
    {
        return $this->cgBdotation0328;
    }

    public function setCgBdotation0328(?string $cgBdotation0328): static
    {
        $this->cgBdotation0328 = $cgBdotation0328;

        return $this;
    }

    public function getCgBdotation0329(): ?string
    {
        return $this->cgBdotation0329;
    }

    public function setCgBdotation0329(?string $cgBdotation0329): static
    {
        $this->cgBdotation0329 = $cgBdotation0329;

        return $this;
    }

    public function getCgBdotation0330(): ?string
    {
        return $this->cgBdotation0330;
    }

    public function setCgBdotation0330(?string $cgBdotation0330): static
    {
        $this->cgBdotation0330 = $cgBdotation0330;

        return $this;
    }

    public function getCgBdotation0331(): ?string
    {
        return $this->cgBdotation0331;
    }

    public function setCgBdotation0331(?string $cgBdotation0331): static
    {
        $this->cgBdotation0331 = $cgBdotation0331;

        return $this;
    }

    public function getCgBdotation0332(): ?string
    {
        return $this->cgBdotation0332;
    }

    public function setCgBdotation0332(?string $cgBdotation0332): static
    {
        $this->cgBdotation0332 = $cgBdotation0332;

        return $this;
    }

    public function getCgBdotation0333(): ?string
    {
        return $this->cgBdotation0333;
    }

    public function setCgBdotation0333(?string $cgBdotation0333): static
    {
        $this->cgBdotation0333 = $cgBdotation0333;

        return $this;
    }

    public function getCgBdotation0334(): ?string
    {
        return $this->cgBdotation0334;
    }

    public function setCgBdotation0334(?string $cgBdotation0334): static
    {
        $this->cgBdotation0334 = $cgBdotation0334;

        return $this;
    }

    public function getCgBdotation0335(): ?string
    {
        return $this->cgBdotation0335;
    }

    public function setCgBdotation0335(?string $cgBdotation0335): static
    {
        $this->cgBdotation0335 = $cgBdotation0335;

        return $this;
    }

    public function getCgBdotation0336(): ?string
    {
        return $this->cgBdotation0336;
    }

    public function setCgBdotation0336(?string $cgBdotation0336): static
    {
        $this->cgBdotation0336 = $cgBdotation0336;

        return $this;
    }

    public function getCgBdotation0401(): ?string
    {
        return $this->cgBdotation0401;
    }

    public function setCgBdotation0401(?string $cgBdotation0401): static
    {
        $this->cgBdotation0401 = $cgBdotation0401;

        return $this;
    }

    public function getCgBdotation0402(): ?string
    {
        return $this->cgBdotation0402;
    }

    public function setCgBdotation0402(?string $cgBdotation0402): static
    {
        $this->cgBdotation0402 = $cgBdotation0402;

        return $this;
    }

    public function getCgBdotation0403(): ?string
    {
        return $this->cgBdotation0403;
    }

    public function setCgBdotation0403(?string $cgBdotation0403): static
    {
        $this->cgBdotation0403 = $cgBdotation0403;

        return $this;
    }

    public function getCgBdotation0404(): ?string
    {
        return $this->cgBdotation0404;
    }

    public function setCgBdotation0404(?string $cgBdotation0404): static
    {
        $this->cgBdotation0404 = $cgBdotation0404;

        return $this;
    }

    public function getCgBdotation0405(): ?string
    {
        return $this->cgBdotation0405;
    }

    public function setCgBdotation0405(?string $cgBdotation0405): static
    {
        $this->cgBdotation0405 = $cgBdotation0405;

        return $this;
    }

    public function getCgBdotation0406(): ?string
    {
        return $this->cgBdotation0406;
    }

    public function setCgBdotation0406(?string $cgBdotation0406): static
    {
        $this->cgBdotation0406 = $cgBdotation0406;

        return $this;
    }

    public function getCgBdotation0407(): ?string
    {
        return $this->cgBdotation0407;
    }

    public function setCgBdotation0407(?string $cgBdotation0407): static
    {
        $this->cgBdotation0407 = $cgBdotation0407;

        return $this;
    }

    public function getCgBdotation0408(): ?string
    {
        return $this->cgBdotation0408;
    }

    public function setCgBdotation0408(?string $cgBdotation0408): static
    {
        $this->cgBdotation0408 = $cgBdotation0408;

        return $this;
    }

    public function getCgBdotation0409(): ?string
    {
        return $this->cgBdotation0409;
    }

    public function setCgBdotation0409(?string $cgBdotation0409): static
    {
        $this->cgBdotation0409 = $cgBdotation0409;

        return $this;
    }

    public function getCgBdotation0410(): ?string
    {
        return $this->cgBdotation0410;
    }

    public function setCgBdotation0410(?string $cgBdotation0410): static
    {
        $this->cgBdotation0410 = $cgBdotation0410;

        return $this;
    }

    public function getCgBdotation0411(): ?string
    {
        return $this->cgBdotation0411;
    }

    public function setCgBdotation0411(?string $cgBdotation0411): static
    {
        $this->cgBdotation0411 = $cgBdotation0411;

        return $this;
    }

    public function getCgBdotation0412(): ?string
    {
        return $this->cgBdotation0412;
    }

    public function setCgBdotation0412(?string $cgBdotation0412): static
    {
        $this->cgBdotation0412 = $cgBdotation0412;

        return $this;
    }

    public function getCgBdotation0413(): ?string
    {
        return $this->cgBdotation0413;
    }

    public function setCgBdotation0413(?string $cgBdotation0413): static
    {
        $this->cgBdotation0413 = $cgBdotation0413;

        return $this;
    }

    public function getCgBdotation0414(): ?string
    {
        return $this->cgBdotation0414;
    }

    public function setCgBdotation0414(?string $cgBdotation0414): static
    {
        $this->cgBdotation0414 = $cgBdotation0414;

        return $this;
    }

    public function getCgBdotation0415(): ?string
    {
        return $this->cgBdotation0415;
    }

    public function setCgBdotation0415(?string $cgBdotation0415): static
    {
        $this->cgBdotation0415 = $cgBdotation0415;

        return $this;
    }

    public function getCgBdotation0416(): ?string
    {
        return $this->cgBdotation0416;
    }

    public function setCgBdotation0416(?string $cgBdotation0416): static
    {
        $this->cgBdotation0416 = $cgBdotation0416;

        return $this;
    }

    public function getCgBdotation0417(): ?string
    {
        return $this->cgBdotation0417;
    }

    public function setCgBdotation0417(?string $cgBdotation0417): static
    {
        $this->cgBdotation0417 = $cgBdotation0417;

        return $this;
    }

    public function getCgBdotation0418(): ?string
    {
        return $this->cgBdotation0418;
    }

    public function setCgBdotation0418(?string $cgBdotation0418): static
    {
        $this->cgBdotation0418 = $cgBdotation0418;

        return $this;
    }

    public function getCgBdotation0419(): ?string
    {
        return $this->cgBdotation0419;
    }

    public function setCgBdotation0419(?string $cgBdotation0419): static
    {
        $this->cgBdotation0419 = $cgBdotation0419;

        return $this;
    }

    public function getCgBdotation0420(): ?string
    {
        return $this->cgBdotation0420;
    }

    public function setCgBdotation0420(?string $cgBdotation0420): static
    {
        $this->cgBdotation0420 = $cgBdotation0420;

        return $this;
    }

    public function getCgBdotation0421(): ?string
    {
        return $this->cgBdotation0421;
    }

    public function setCgBdotation0421(?string $cgBdotation0421): static
    {
        $this->cgBdotation0421 = $cgBdotation0421;

        return $this;
    }

    public function getCgBdotation0422(): ?string
    {
        return $this->cgBdotation0422;
    }

    public function setCgBdotation0422(?string $cgBdotation0422): static
    {
        $this->cgBdotation0422 = $cgBdotation0422;

        return $this;
    }

    public function getCgBdotation0423(): ?string
    {
        return $this->cgBdotation0423;
    }

    public function setCgBdotation0423(?string $cgBdotation0423): static
    {
        $this->cgBdotation0423 = $cgBdotation0423;

        return $this;
    }

    public function getCgBdotation0424(): ?string
    {
        return $this->cgBdotation0424;
    }

    public function setCgBdotation0424(?string $cgBdotation0424): static
    {
        $this->cgBdotation0424 = $cgBdotation0424;

        return $this;
    }

    public function getCgBdotation0425(): ?string
    {
        return $this->cgBdotation0425;
    }

    public function setCgBdotation0425(?string $cgBdotation0425): static
    {
        $this->cgBdotation0425 = $cgBdotation0425;

        return $this;
    }

    public function getCgBdotation0426(): ?string
    {
        return $this->cgBdotation0426;
    }

    public function setCgBdotation0426(?string $cgBdotation0426): static
    {
        $this->cgBdotation0426 = $cgBdotation0426;

        return $this;
    }

    public function getCgBdotation0427(): ?string
    {
        return $this->cgBdotation0427;
    }

    public function setCgBdotation0427(?string $cgBdotation0427): static
    {
        $this->cgBdotation0427 = $cgBdotation0427;

        return $this;
    }

    public function getCgBdotation0428(): ?string
    {
        return $this->cgBdotation0428;
    }

    public function setCgBdotation0428(?string $cgBdotation0428): static
    {
        $this->cgBdotation0428 = $cgBdotation0428;

        return $this;
    }

    public function getCgBdotation0429(): ?string
    {
        return $this->cgBdotation0429;
    }

    public function setCgBdotation0429(?string $cgBdotation0429): static
    {
        $this->cgBdotation0429 = $cgBdotation0429;

        return $this;
    }

    public function getCgBdotation0430(): ?string
    {
        return $this->cgBdotation0430;
    }

    public function setCgBdotation0430(?string $cgBdotation0430): static
    {
        $this->cgBdotation0430 = $cgBdotation0430;

        return $this;
    }

    public function getCgBdotation0431(): ?string
    {
        return $this->cgBdotation0431;
    }

    public function setCgBdotation0431(?string $cgBdotation0431): static
    {
        $this->cgBdotation0431 = $cgBdotation0431;

        return $this;
    }

    public function getCgBdotation0432(): ?string
    {
        return $this->cgBdotation0432;
    }

    public function setCgBdotation0432(?string $cgBdotation0432): static
    {
        $this->cgBdotation0432 = $cgBdotation0432;

        return $this;
    }

    public function getCgBdotation0433(): ?string
    {
        return $this->cgBdotation0433;
    }

    public function setCgBdotation0433(?string $cgBdotation0433): static
    {
        $this->cgBdotation0433 = $cgBdotation0433;

        return $this;
    }

    public function getCgBdotation0434(): ?string
    {
        return $this->cgBdotation0434;
    }

    public function setCgBdotation0434(?string $cgBdotation0434): static
    {
        $this->cgBdotation0434 = $cgBdotation0434;

        return $this;
    }

    public function getCgBdotation0435(): ?string
    {
        return $this->cgBdotation0435;
    }

    public function setCgBdotation0435(?string $cgBdotation0435): static
    {
        $this->cgBdotation0435 = $cgBdotation0435;

        return $this;
    }

    public function getCgBdotation0436(): ?string
    {
        return $this->cgBdotation0436;
    }

    public function setCgBdotation0436(?string $cgBdotation0436): static
    {
        $this->cgBdotation0436 = $cgBdotation0436;

        return $this;
    }

    public function getCgBdotation0501(): ?string
    {
        return $this->cgBdotation0501;
    }

    public function setCgBdotation0501(?string $cgBdotation0501): static
    {
        $this->cgBdotation0501 = $cgBdotation0501;

        return $this;
    }

    public function getCgBdotation0502(): ?string
    {
        return $this->cgBdotation0502;
    }

    public function setCgBdotation0502(?string $cgBdotation0502): static
    {
        $this->cgBdotation0502 = $cgBdotation0502;

        return $this;
    }

    public function getCgBdotation0503(): ?string
    {
        return $this->cgBdotation0503;
    }

    public function setCgBdotation0503(?string $cgBdotation0503): static
    {
        $this->cgBdotation0503 = $cgBdotation0503;

        return $this;
    }

    public function getCgBdotation0504(): ?string
    {
        return $this->cgBdotation0504;
    }

    public function setCgBdotation0504(?string $cgBdotation0504): static
    {
        $this->cgBdotation0504 = $cgBdotation0504;

        return $this;
    }

    public function getCgBdotation0505(): ?string
    {
        return $this->cgBdotation0505;
    }

    public function setCgBdotation0505(?string $cgBdotation0505): static
    {
        $this->cgBdotation0505 = $cgBdotation0505;

        return $this;
    }

    public function getCgBdotation0506(): ?string
    {
        return $this->cgBdotation0506;
    }

    public function setCgBdotation0506(?string $cgBdotation0506): static
    {
        $this->cgBdotation0506 = $cgBdotation0506;

        return $this;
    }

    public function getCgBdotation0507(): ?string
    {
        return $this->cgBdotation0507;
    }

    public function setCgBdotation0507(?string $cgBdotation0507): static
    {
        $this->cgBdotation0507 = $cgBdotation0507;

        return $this;
    }

    public function getCgBdotation0508(): ?string
    {
        return $this->cgBdotation0508;
    }

    public function setCgBdotation0508(?string $cgBdotation0508): static
    {
        $this->cgBdotation0508 = $cgBdotation0508;

        return $this;
    }

    public function getCgBdotation0509(): ?string
    {
        return $this->cgBdotation0509;
    }

    public function setCgBdotation0509(?string $cgBdotation0509): static
    {
        $this->cgBdotation0509 = $cgBdotation0509;

        return $this;
    }

    public function getCgBdotation0510(): ?string
    {
        return $this->cgBdotation0510;
    }

    public function setCgBdotation0510(?string $cgBdotation0510): static
    {
        $this->cgBdotation0510 = $cgBdotation0510;

        return $this;
    }

    public function getCgBdotation0511(): ?string
    {
        return $this->cgBdotation0511;
    }

    public function setCgBdotation0511(?string $cgBdotation0511): static
    {
        $this->cgBdotation0511 = $cgBdotation0511;

        return $this;
    }

    public function getCgBdotation0512(): ?string
    {
        return $this->cgBdotation0512;
    }

    public function setCgBdotation0512(?string $cgBdotation0512): static
    {
        $this->cgBdotation0512 = $cgBdotation0512;

        return $this;
    }

    public function getCgBdotation0513(): ?string
    {
        return $this->cgBdotation0513;
    }

    public function setCgBdotation0513(?string $cgBdotation0513): static
    {
        $this->cgBdotation0513 = $cgBdotation0513;

        return $this;
    }

    public function getCgBdotation0514(): ?string
    {
        return $this->cgBdotation0514;
    }

    public function setCgBdotation0514(?string $cgBdotation0514): static
    {
        $this->cgBdotation0514 = $cgBdotation0514;

        return $this;
    }

    public function getCgBdotation0515(): ?string
    {
        return $this->cgBdotation0515;
    }

    public function setCgBdotation0515(?string $cgBdotation0515): static
    {
        $this->cgBdotation0515 = $cgBdotation0515;

        return $this;
    }

    public function getCgBdotation0516(): ?string
    {
        return $this->cgBdotation0516;
    }

    public function setCgBdotation0516(?string $cgBdotation0516): static
    {
        $this->cgBdotation0516 = $cgBdotation0516;

        return $this;
    }

    public function getCgBdotation0517(): ?string
    {
        return $this->cgBdotation0517;
    }

    public function setCgBdotation0517(?string $cgBdotation0517): static
    {
        $this->cgBdotation0517 = $cgBdotation0517;

        return $this;
    }

    public function getCgBdotation0518(): ?string
    {
        return $this->cgBdotation0518;
    }

    public function setCgBdotation0518(?string $cgBdotation0518): static
    {
        $this->cgBdotation0518 = $cgBdotation0518;

        return $this;
    }

    public function getCgBdotation0519(): ?string
    {
        return $this->cgBdotation0519;
    }

    public function setCgBdotation0519(?string $cgBdotation0519): static
    {
        $this->cgBdotation0519 = $cgBdotation0519;

        return $this;
    }

    public function getCgBdotation0520(): ?string
    {
        return $this->cgBdotation0520;
    }

    public function setCgBdotation0520(?string $cgBdotation0520): static
    {
        $this->cgBdotation0520 = $cgBdotation0520;

        return $this;
    }

    public function getCgBdotation0521(): ?string
    {
        return $this->cgBdotation0521;
    }

    public function setCgBdotation0521(?string $cgBdotation0521): static
    {
        $this->cgBdotation0521 = $cgBdotation0521;

        return $this;
    }

    public function getCgBdotation0522(): ?string
    {
        return $this->cgBdotation0522;
    }

    public function setCgBdotation0522(?string $cgBdotation0522): static
    {
        $this->cgBdotation0522 = $cgBdotation0522;

        return $this;
    }

    public function getCgBdotation0523(): ?string
    {
        return $this->cgBdotation0523;
    }

    public function setCgBdotation0523(?string $cgBdotation0523): static
    {
        $this->cgBdotation0523 = $cgBdotation0523;

        return $this;
    }

    public function getCgBdotation0524(): ?string
    {
        return $this->cgBdotation0524;
    }

    public function setCgBdotation0524(?string $cgBdotation0524): static
    {
        $this->cgBdotation0524 = $cgBdotation0524;

        return $this;
    }

    public function getCgBdotation0525(): ?string
    {
        return $this->cgBdotation0525;
    }

    public function setCgBdotation0525(?string $cgBdotation0525): static
    {
        $this->cgBdotation0525 = $cgBdotation0525;

        return $this;
    }

    public function getCgBdotation0526(): ?string
    {
        return $this->cgBdotation0526;
    }

    public function setCgBdotation0526(?string $cgBdotation0526): static
    {
        $this->cgBdotation0526 = $cgBdotation0526;

        return $this;
    }

    public function getCgBdotation0527(): ?string
    {
        return $this->cgBdotation0527;
    }

    public function setCgBdotation0527(?string $cgBdotation0527): static
    {
        $this->cgBdotation0527 = $cgBdotation0527;

        return $this;
    }

    public function getCgBdotation0528(): ?string
    {
        return $this->cgBdotation0528;
    }

    public function setCgBdotation0528(?string $cgBdotation0528): static
    {
        $this->cgBdotation0528 = $cgBdotation0528;

        return $this;
    }

    public function getCgBdotation0529(): ?string
    {
        return $this->cgBdotation0529;
    }

    public function setCgBdotation0529(?string $cgBdotation0529): static
    {
        $this->cgBdotation0529 = $cgBdotation0529;

        return $this;
    }

    public function getCgBdotation0530(): ?string
    {
        return $this->cgBdotation0530;
    }

    public function setCgBdotation0530(?string $cgBdotation0530): static
    {
        $this->cgBdotation0530 = $cgBdotation0530;

        return $this;
    }

    public function getCgBdotation0531(): ?string
    {
        return $this->cgBdotation0531;
    }

    public function setCgBdotation0531(?string $cgBdotation0531): static
    {
        $this->cgBdotation0531 = $cgBdotation0531;

        return $this;
    }

    public function getCgBdotation0532(): ?string
    {
        return $this->cgBdotation0532;
    }

    public function setCgBdotation0532(?string $cgBdotation0532): static
    {
        $this->cgBdotation0532 = $cgBdotation0532;

        return $this;
    }

    public function getCgBdotation0533(): ?string
    {
        return $this->cgBdotation0533;
    }

    public function setCgBdotation0533(?string $cgBdotation0533): static
    {
        $this->cgBdotation0533 = $cgBdotation0533;

        return $this;
    }

    public function getCgBdotation0534(): ?string
    {
        return $this->cgBdotation0534;
    }

    public function setCgBdotation0534(?string $cgBdotation0534): static
    {
        $this->cgBdotation0534 = $cgBdotation0534;

        return $this;
    }

    public function getCgBdotation0535(): ?string
    {
        return $this->cgBdotation0535;
    }

    public function setCgBdotation0535(?string $cgBdotation0535): static
    {
        $this->cgBdotation0535 = $cgBdotation0535;

        return $this;
    }

    public function getCgBdotation0536(): ?string
    {
        return $this->cgBdotation0536;
    }

    public function setCgBdotation0536(?string $cgBdotation0536): static
    {
        $this->cgBdotation0536 = $cgBdotation0536;

        return $this;
    }

    public function getCgBdotation0601(): ?string
    {
        return $this->cgBdotation0601;
    }

    public function setCgBdotation0601(?string $cgBdotation0601): static
    {
        $this->cgBdotation0601 = $cgBdotation0601;

        return $this;
    }

    public function getCgBdotation0602(): ?string
    {
        return $this->cgBdotation0602;
    }

    public function setCgBdotation0602(?string $cgBdotation0602): static
    {
        $this->cgBdotation0602 = $cgBdotation0602;

        return $this;
    }

    public function getCgBdotation0603(): ?string
    {
        return $this->cgBdotation0603;
    }

    public function setCgBdotation0603(?string $cgBdotation0603): static
    {
        $this->cgBdotation0603 = $cgBdotation0603;

        return $this;
    }

    public function getCgBdotation0604(): ?string
    {
        return $this->cgBdotation0604;
    }

    public function setCgBdotation0604(?string $cgBdotation0604): static
    {
        $this->cgBdotation0604 = $cgBdotation0604;

        return $this;
    }

    public function getCgBdotation0605(): ?string
    {
        return $this->cgBdotation0605;
    }

    public function setCgBdotation0605(?string $cgBdotation0605): static
    {
        $this->cgBdotation0605 = $cgBdotation0605;

        return $this;
    }

    public function getCgBdotation0606(): ?string
    {
        return $this->cgBdotation0606;
    }

    public function setCgBdotation0606(?string $cgBdotation0606): static
    {
        $this->cgBdotation0606 = $cgBdotation0606;

        return $this;
    }

    public function getCgBdotation0607(): ?string
    {
        return $this->cgBdotation0607;
    }

    public function setCgBdotation0607(?string $cgBdotation0607): static
    {
        $this->cgBdotation0607 = $cgBdotation0607;

        return $this;
    }

    public function getCgBdotation0608(): ?string
    {
        return $this->cgBdotation0608;
    }

    public function setCgBdotation0608(?string $cgBdotation0608): static
    {
        $this->cgBdotation0608 = $cgBdotation0608;

        return $this;
    }

    public function getCgBdotation0609(): ?string
    {
        return $this->cgBdotation0609;
    }

    public function setCgBdotation0609(?string $cgBdotation0609): static
    {
        $this->cgBdotation0609 = $cgBdotation0609;

        return $this;
    }

    public function getCgBdotation0610(): ?string
    {
        return $this->cgBdotation0610;
    }

    public function setCgBdotation0610(?string $cgBdotation0610): static
    {
        $this->cgBdotation0610 = $cgBdotation0610;

        return $this;
    }

    public function getCgBdotation0611(): ?string
    {
        return $this->cgBdotation0611;
    }

    public function setCgBdotation0611(?string $cgBdotation0611): static
    {
        $this->cgBdotation0611 = $cgBdotation0611;

        return $this;
    }

    public function getCgBdotation0612(): ?string
    {
        return $this->cgBdotation0612;
    }

    public function setCgBdotation0612(?string $cgBdotation0612): static
    {
        $this->cgBdotation0612 = $cgBdotation0612;

        return $this;
    }

    public function getCgBdotation0613(): ?string
    {
        return $this->cgBdotation0613;
    }

    public function setCgBdotation0613(?string $cgBdotation0613): static
    {
        $this->cgBdotation0613 = $cgBdotation0613;

        return $this;
    }

    public function getCgBdotation0614(): ?string
    {
        return $this->cgBdotation0614;
    }

    public function setCgBdotation0614(?string $cgBdotation0614): static
    {
        $this->cgBdotation0614 = $cgBdotation0614;

        return $this;
    }

    public function getCgBdotation0615(): ?string
    {
        return $this->cgBdotation0615;
    }

    public function setCgBdotation0615(?string $cgBdotation0615): static
    {
        $this->cgBdotation0615 = $cgBdotation0615;

        return $this;
    }

    public function getCgBdotation0616(): ?string
    {
        return $this->cgBdotation0616;
    }

    public function setCgBdotation0616(?string $cgBdotation0616): static
    {
        $this->cgBdotation0616 = $cgBdotation0616;

        return $this;
    }

    public function getCgBdotation0617(): ?string
    {
        return $this->cgBdotation0617;
    }

    public function setCgBdotation0617(?string $cgBdotation0617): static
    {
        $this->cgBdotation0617 = $cgBdotation0617;

        return $this;
    }

    public function getCgBdotation0618(): ?string
    {
        return $this->cgBdotation0618;
    }

    public function setCgBdotation0618(?string $cgBdotation0618): static
    {
        $this->cgBdotation0618 = $cgBdotation0618;

        return $this;
    }

    public function getCgBdotation0619(): ?string
    {
        return $this->cgBdotation0619;
    }

    public function setCgBdotation0619(?string $cgBdotation0619): static
    {
        $this->cgBdotation0619 = $cgBdotation0619;

        return $this;
    }

    public function getCgBdotation0620(): ?string
    {
        return $this->cgBdotation0620;
    }

    public function setCgBdotation0620(?string $cgBdotation0620): static
    {
        $this->cgBdotation0620 = $cgBdotation0620;

        return $this;
    }

    public function getCgBdotation0621(): ?string
    {
        return $this->cgBdotation0621;
    }

    public function setCgBdotation0621(?string $cgBdotation0621): static
    {
        $this->cgBdotation0621 = $cgBdotation0621;

        return $this;
    }

    public function getCgBdotation0622(): ?string
    {
        return $this->cgBdotation0622;
    }

    public function setCgBdotation0622(?string $cgBdotation0622): static
    {
        $this->cgBdotation0622 = $cgBdotation0622;

        return $this;
    }

    public function getCgBdotation0623(): ?string
    {
        return $this->cgBdotation0623;
    }

    public function setCgBdotation0623(?string $cgBdotation0623): static
    {
        $this->cgBdotation0623 = $cgBdotation0623;

        return $this;
    }

    public function getCgBdotation0624(): ?string
    {
        return $this->cgBdotation0624;
    }

    public function setCgBdotation0624(?string $cgBdotation0624): static
    {
        $this->cgBdotation0624 = $cgBdotation0624;

        return $this;
    }

    public function getCgBdotation0625(): ?string
    {
        return $this->cgBdotation0625;
    }

    public function setCgBdotation0625(?string $cgBdotation0625): static
    {
        $this->cgBdotation0625 = $cgBdotation0625;

        return $this;
    }

    public function getCgBdotation0626(): ?string
    {
        return $this->cgBdotation0626;
    }

    public function setCgBdotation0626(?string $cgBdotation0626): static
    {
        $this->cgBdotation0626 = $cgBdotation0626;

        return $this;
    }

    public function getCgBdotation0627(): ?string
    {
        return $this->cgBdotation0627;
    }

    public function setCgBdotation0627(?string $cgBdotation0627): static
    {
        $this->cgBdotation0627 = $cgBdotation0627;

        return $this;
    }

    public function getCgBdotation0628(): ?string
    {
        return $this->cgBdotation0628;
    }

    public function setCgBdotation0628(?string $cgBdotation0628): static
    {
        $this->cgBdotation0628 = $cgBdotation0628;

        return $this;
    }

    public function getCgBdotation0629(): ?string
    {
        return $this->cgBdotation0629;
    }

    public function setCgBdotation0629(?string $cgBdotation0629): static
    {
        $this->cgBdotation0629 = $cgBdotation0629;

        return $this;
    }

    public function getCgBdotation0630(): ?string
    {
        return $this->cgBdotation0630;
    }

    public function setCgBdotation0630(?string $cgBdotation0630): static
    {
        $this->cgBdotation0630 = $cgBdotation0630;

        return $this;
    }

    public function getCgBdotation0631(): ?string
    {
        return $this->cgBdotation0631;
    }

    public function setCgBdotation0631(?string $cgBdotation0631): static
    {
        $this->cgBdotation0631 = $cgBdotation0631;

        return $this;
    }

    public function getCgBdotation0632(): ?string
    {
        return $this->cgBdotation0632;
    }

    public function setCgBdotation0632(?string $cgBdotation0632): static
    {
        $this->cgBdotation0632 = $cgBdotation0632;

        return $this;
    }

    public function getCgBdotation0633(): ?string
    {
        return $this->cgBdotation0633;
    }

    public function setCgBdotation0633(?string $cgBdotation0633): static
    {
        $this->cgBdotation0633 = $cgBdotation0633;

        return $this;
    }

    public function getCgBdotation0634(): ?string
    {
        return $this->cgBdotation0634;
    }

    public function setCgBdotation0634(?string $cgBdotation0634): static
    {
        $this->cgBdotation0634 = $cgBdotation0634;

        return $this;
    }

    public function getCgBdotation0635(): ?string
    {
        return $this->cgBdotation0635;
    }

    public function setCgBdotation0635(?string $cgBdotation0635): static
    {
        $this->cgBdotation0635 = $cgBdotation0635;

        return $this;
    }

    public function getCgBdotation0636(): ?string
    {
        return $this->cgBdotation0636;
    }

    public function setCgBdotation0636(?string $cgBdotation0636): static
    {
        $this->cgBdotation0636 = $cgBdotation0636;

        return $this;
    }

    public function getCgBdotationq0101(): ?string
    {
        return $this->cgBdotationq0101;
    }

    public function setCgBdotationq0101(?string $cgBdotationq0101): static
    {
        $this->cgBdotationq0101 = $cgBdotationq0101;

        return $this;
    }

    public function getCgBdotationq0102(): ?string
    {
        return $this->cgBdotationq0102;
    }

    public function setCgBdotationq0102(?string $cgBdotationq0102): static
    {
        $this->cgBdotationq0102 = $cgBdotationq0102;

        return $this;
    }

    public function getCgBdotationq0103(): ?string
    {
        return $this->cgBdotationq0103;
    }

    public function setCgBdotationq0103(?string $cgBdotationq0103): static
    {
        $this->cgBdotationq0103 = $cgBdotationq0103;

        return $this;
    }

    public function getCgBdotationq0104(): ?string
    {
        return $this->cgBdotationq0104;
    }

    public function setCgBdotationq0104(?string $cgBdotationq0104): static
    {
        $this->cgBdotationq0104 = $cgBdotationq0104;

        return $this;
    }

    public function getCgBdotationq0105(): ?string
    {
        return $this->cgBdotationq0105;
    }

    public function setCgBdotationq0105(?string $cgBdotationq0105): static
    {
        $this->cgBdotationq0105 = $cgBdotationq0105;

        return $this;
    }

    public function getCgBdotationq0106(): ?string
    {
        return $this->cgBdotationq0106;
    }

    public function setCgBdotationq0106(?string $cgBdotationq0106): static
    {
        $this->cgBdotationq0106 = $cgBdotationq0106;

        return $this;
    }

    public function getCgBdotationq0107(): ?string
    {
        return $this->cgBdotationq0107;
    }

    public function setCgBdotationq0107(?string $cgBdotationq0107): static
    {
        $this->cgBdotationq0107 = $cgBdotationq0107;

        return $this;
    }

    public function getCgBdotationq0108(): ?string
    {
        return $this->cgBdotationq0108;
    }

    public function setCgBdotationq0108(?string $cgBdotationq0108): static
    {
        $this->cgBdotationq0108 = $cgBdotationq0108;

        return $this;
    }

    public function getCgBdotationq0109(): ?string
    {
        return $this->cgBdotationq0109;
    }

    public function setCgBdotationq0109(?string $cgBdotationq0109): static
    {
        $this->cgBdotationq0109 = $cgBdotationq0109;

        return $this;
    }

    public function getCgBdotationq0110(): ?string
    {
        return $this->cgBdotationq0110;
    }

    public function setCgBdotationq0110(?string $cgBdotationq0110): static
    {
        $this->cgBdotationq0110 = $cgBdotationq0110;

        return $this;
    }

    public function getCgBdotationq0111(): ?string
    {
        return $this->cgBdotationq0111;
    }

    public function setCgBdotationq0111(?string $cgBdotationq0111): static
    {
        $this->cgBdotationq0111 = $cgBdotationq0111;

        return $this;
    }

    public function getCgBdotationq0112(): ?string
    {
        return $this->cgBdotationq0112;
    }

    public function setCgBdotationq0112(?string $cgBdotationq0112): static
    {
        $this->cgBdotationq0112 = $cgBdotationq0112;

        return $this;
    }

    public function getCgBdotationq0113(): ?string
    {
        return $this->cgBdotationq0113;
    }

    public function setCgBdotationq0113(?string $cgBdotationq0113): static
    {
        $this->cgBdotationq0113 = $cgBdotationq0113;

        return $this;
    }

    public function getCgBdotationq0114(): ?string
    {
        return $this->cgBdotationq0114;
    }

    public function setCgBdotationq0114(?string $cgBdotationq0114): static
    {
        $this->cgBdotationq0114 = $cgBdotationq0114;

        return $this;
    }

    public function getCgBdotationq0115(): ?string
    {
        return $this->cgBdotationq0115;
    }

    public function setCgBdotationq0115(?string $cgBdotationq0115): static
    {
        $this->cgBdotationq0115 = $cgBdotationq0115;

        return $this;
    }

    public function getCgBdotationq0116(): ?string
    {
        return $this->cgBdotationq0116;
    }

    public function setCgBdotationq0116(?string $cgBdotationq0116): static
    {
        $this->cgBdotationq0116 = $cgBdotationq0116;

        return $this;
    }

    public function getCgBdotationq0117(): ?string
    {
        return $this->cgBdotationq0117;
    }

    public function setCgBdotationq0117(?string $cgBdotationq0117): static
    {
        $this->cgBdotationq0117 = $cgBdotationq0117;

        return $this;
    }

    public function getCgBdotationq0118(): ?string
    {
        return $this->cgBdotationq0118;
    }

    public function setCgBdotationq0118(?string $cgBdotationq0118): static
    {
        $this->cgBdotationq0118 = $cgBdotationq0118;

        return $this;
    }

    public function getCgBdotationq0119(): ?string
    {
        return $this->cgBdotationq0119;
    }

    public function setCgBdotationq0119(?string $cgBdotationq0119): static
    {
        $this->cgBdotationq0119 = $cgBdotationq0119;

        return $this;
    }

    public function getCgBdotationq0120(): ?string
    {
        return $this->cgBdotationq0120;
    }

    public function setCgBdotationq0120(?string $cgBdotationq0120): static
    {
        $this->cgBdotationq0120 = $cgBdotationq0120;

        return $this;
    }

    public function getCgBdotationq0121(): ?string
    {
        return $this->cgBdotationq0121;
    }

    public function setCgBdotationq0121(?string $cgBdotationq0121): static
    {
        $this->cgBdotationq0121 = $cgBdotationq0121;

        return $this;
    }

    public function getCgBdotationq0122(): ?string
    {
        return $this->cgBdotationq0122;
    }

    public function setCgBdotationq0122(?string $cgBdotationq0122): static
    {
        $this->cgBdotationq0122 = $cgBdotationq0122;

        return $this;
    }

    public function getCgBdotationq0123(): ?string
    {
        return $this->cgBdotationq0123;
    }

    public function setCgBdotationq0123(?string $cgBdotationq0123): static
    {
        $this->cgBdotationq0123 = $cgBdotationq0123;

        return $this;
    }

    public function getCgBdotationq0124(): ?string
    {
        return $this->cgBdotationq0124;
    }

    public function setCgBdotationq0124(?string $cgBdotationq0124): static
    {
        $this->cgBdotationq0124 = $cgBdotationq0124;

        return $this;
    }

    public function getCgBdotationq0125(): ?string
    {
        return $this->cgBdotationq0125;
    }

    public function setCgBdotationq0125(?string $cgBdotationq0125): static
    {
        $this->cgBdotationq0125 = $cgBdotationq0125;

        return $this;
    }

    public function getCgBdotationq0126(): ?string
    {
        return $this->cgBdotationq0126;
    }

    public function setCgBdotationq0126(?string $cgBdotationq0126): static
    {
        $this->cgBdotationq0126 = $cgBdotationq0126;

        return $this;
    }

    public function getCgBdotationq0127(): ?string
    {
        return $this->cgBdotationq0127;
    }

    public function setCgBdotationq0127(?string $cgBdotationq0127): static
    {
        $this->cgBdotationq0127 = $cgBdotationq0127;

        return $this;
    }

    public function getCgBdotationq0128(): ?string
    {
        return $this->cgBdotationq0128;
    }

    public function setCgBdotationq0128(?string $cgBdotationq0128): static
    {
        $this->cgBdotationq0128 = $cgBdotationq0128;

        return $this;
    }

    public function getCgBdotationq0129(): ?string
    {
        return $this->cgBdotationq0129;
    }

    public function setCgBdotationq0129(?string $cgBdotationq0129): static
    {
        $this->cgBdotationq0129 = $cgBdotationq0129;

        return $this;
    }

    public function getCgBdotationq0130(): ?string
    {
        return $this->cgBdotationq0130;
    }

    public function setCgBdotationq0130(?string $cgBdotationq0130): static
    {
        $this->cgBdotationq0130 = $cgBdotationq0130;

        return $this;
    }

    public function getCgBdotationq0131(): ?string
    {
        return $this->cgBdotationq0131;
    }

    public function setCgBdotationq0131(?string $cgBdotationq0131): static
    {
        $this->cgBdotationq0131 = $cgBdotationq0131;

        return $this;
    }

    public function getCgBdotationq0132(): ?string
    {
        return $this->cgBdotationq0132;
    }

    public function setCgBdotationq0132(?string $cgBdotationq0132): static
    {
        $this->cgBdotationq0132 = $cgBdotationq0132;

        return $this;
    }

    public function getCgBdotationq0133(): ?string
    {
        return $this->cgBdotationq0133;
    }

    public function setCgBdotationq0133(?string $cgBdotationq0133): static
    {
        $this->cgBdotationq0133 = $cgBdotationq0133;

        return $this;
    }

    public function getCgBdotationq0134(): ?string
    {
        return $this->cgBdotationq0134;
    }

    public function setCgBdotationq0134(?string $cgBdotationq0134): static
    {
        $this->cgBdotationq0134 = $cgBdotationq0134;

        return $this;
    }

    public function getCgBdotationq0135(): ?string
    {
        return $this->cgBdotationq0135;
    }

    public function setCgBdotationq0135(?string $cgBdotationq0135): static
    {
        $this->cgBdotationq0135 = $cgBdotationq0135;

        return $this;
    }

    public function getCgBdotationq0136(): ?string
    {
        return $this->cgBdotationq0136;
    }

    public function setCgBdotationq0136(?string $cgBdotationq0136): static
    {
        $this->cgBdotationq0136 = $cgBdotationq0136;

        return $this;
    }

    public function getCgBdotationq0201(): ?string
    {
        return $this->cgBdotationq0201;
    }

    public function setCgBdotationq0201(?string $cgBdotationq0201): static
    {
        $this->cgBdotationq0201 = $cgBdotationq0201;

        return $this;
    }

    public function getCgBdotationq0202(): ?string
    {
        return $this->cgBdotationq0202;
    }

    public function setCgBdotationq0202(?string $cgBdotationq0202): static
    {
        $this->cgBdotationq0202 = $cgBdotationq0202;

        return $this;
    }

    public function getCgBdotationq0203(): ?string
    {
        return $this->cgBdotationq0203;
    }

    public function setCgBdotationq0203(?string $cgBdotationq0203): static
    {
        $this->cgBdotationq0203 = $cgBdotationq0203;

        return $this;
    }

    public function getCgBdotationq0204(): ?string
    {
        return $this->cgBdotationq0204;
    }

    public function setCgBdotationq0204(?string $cgBdotationq0204): static
    {
        $this->cgBdotationq0204 = $cgBdotationq0204;

        return $this;
    }

    public function getCgBdotationq0205(): ?string
    {
        return $this->cgBdotationq0205;
    }

    public function setCgBdotationq0205(?string $cgBdotationq0205): static
    {
        $this->cgBdotationq0205 = $cgBdotationq0205;

        return $this;
    }

    public function getCgBdotationq0206(): ?string
    {
        return $this->cgBdotationq0206;
    }

    public function setCgBdotationq0206(?string $cgBdotationq0206): static
    {
        $this->cgBdotationq0206 = $cgBdotationq0206;

        return $this;
    }

    public function getCgBdotationq0207(): ?string
    {
        return $this->cgBdotationq0207;
    }

    public function setCgBdotationq0207(?string $cgBdotationq0207): static
    {
        $this->cgBdotationq0207 = $cgBdotationq0207;

        return $this;
    }

    public function getCgBdotationq0208(): ?string
    {
        return $this->cgBdotationq0208;
    }

    public function setCgBdotationq0208(?string $cgBdotationq0208): static
    {
        $this->cgBdotationq0208 = $cgBdotationq0208;

        return $this;
    }

    public function getCgBdotationq0209(): ?string
    {
        return $this->cgBdotationq0209;
    }

    public function setCgBdotationq0209(?string $cgBdotationq0209): static
    {
        $this->cgBdotationq0209 = $cgBdotationq0209;

        return $this;
    }

    public function getCgBdotationq0210(): ?string
    {
        return $this->cgBdotationq0210;
    }

    public function setCgBdotationq0210(?string $cgBdotationq0210): static
    {
        $this->cgBdotationq0210 = $cgBdotationq0210;

        return $this;
    }

    public function getCgBdotationq0211(): ?string
    {
        return $this->cgBdotationq0211;
    }

    public function setCgBdotationq0211(?string $cgBdotationq0211): static
    {
        $this->cgBdotationq0211 = $cgBdotationq0211;

        return $this;
    }

    public function getCgBdotationq0212(): ?string
    {
        return $this->cgBdotationq0212;
    }

    public function setCgBdotationq0212(?string $cgBdotationq0212): static
    {
        $this->cgBdotationq0212 = $cgBdotationq0212;

        return $this;
    }

    public function getCgBdotationq0213(): ?string
    {
        return $this->cgBdotationq0213;
    }

    public function setCgBdotationq0213(?string $cgBdotationq0213): static
    {
        $this->cgBdotationq0213 = $cgBdotationq0213;

        return $this;
    }

    public function getCgBdotationq0214(): ?string
    {
        return $this->cgBdotationq0214;
    }

    public function setCgBdotationq0214(?string $cgBdotationq0214): static
    {
        $this->cgBdotationq0214 = $cgBdotationq0214;

        return $this;
    }

    public function getCgBdotationq0215(): ?string
    {
        return $this->cgBdotationq0215;
    }

    public function setCgBdotationq0215(?string $cgBdotationq0215): static
    {
        $this->cgBdotationq0215 = $cgBdotationq0215;

        return $this;
    }

    public function getCgBdotationq0216(): ?string
    {
        return $this->cgBdotationq0216;
    }

    public function setCgBdotationq0216(?string $cgBdotationq0216): static
    {
        $this->cgBdotationq0216 = $cgBdotationq0216;

        return $this;
    }

    public function getCgBdotationq0217(): ?string
    {
        return $this->cgBdotationq0217;
    }

    public function setCgBdotationq0217(?string $cgBdotationq0217): static
    {
        $this->cgBdotationq0217 = $cgBdotationq0217;

        return $this;
    }

    public function getCgBdotationq0218(): ?string
    {
        return $this->cgBdotationq0218;
    }

    public function setCgBdotationq0218(?string $cgBdotationq0218): static
    {
        $this->cgBdotationq0218 = $cgBdotationq0218;

        return $this;
    }

    public function getCgBdotationq0219(): ?string
    {
        return $this->cgBdotationq0219;
    }

    public function setCgBdotationq0219(?string $cgBdotationq0219): static
    {
        $this->cgBdotationq0219 = $cgBdotationq0219;

        return $this;
    }

    public function getCgBdotationq0220(): ?string
    {
        return $this->cgBdotationq0220;
    }

    public function setCgBdotationq0220(?string $cgBdotationq0220): static
    {
        $this->cgBdotationq0220 = $cgBdotationq0220;

        return $this;
    }

    public function getCgBdotationq0221(): ?string
    {
        return $this->cgBdotationq0221;
    }

    public function setCgBdotationq0221(?string $cgBdotationq0221): static
    {
        $this->cgBdotationq0221 = $cgBdotationq0221;

        return $this;
    }

    public function getCgBdotationq0222(): ?string
    {
        return $this->cgBdotationq0222;
    }

    public function setCgBdotationq0222(?string $cgBdotationq0222): static
    {
        $this->cgBdotationq0222 = $cgBdotationq0222;

        return $this;
    }

    public function getCgBdotationq0223(): ?string
    {
        return $this->cgBdotationq0223;
    }

    public function setCgBdotationq0223(?string $cgBdotationq0223): static
    {
        $this->cgBdotationq0223 = $cgBdotationq0223;

        return $this;
    }

    public function getCgBdotationq0224(): ?string
    {
        return $this->cgBdotationq0224;
    }

    public function setCgBdotationq0224(?string $cgBdotationq0224): static
    {
        $this->cgBdotationq0224 = $cgBdotationq0224;

        return $this;
    }

    public function getCgBdotationq0225(): ?string
    {
        return $this->cgBdotationq0225;
    }

    public function setCgBdotationq0225(?string $cgBdotationq0225): static
    {
        $this->cgBdotationq0225 = $cgBdotationq0225;

        return $this;
    }

    public function getCgBdotationq0226(): ?string
    {
        return $this->cgBdotationq0226;
    }

    public function setCgBdotationq0226(?string $cgBdotationq0226): static
    {
        $this->cgBdotationq0226 = $cgBdotationq0226;

        return $this;
    }

    public function getCgBdotationq0227(): ?string
    {
        return $this->cgBdotationq0227;
    }

    public function setCgBdotationq0227(?string $cgBdotationq0227): static
    {
        $this->cgBdotationq0227 = $cgBdotationq0227;

        return $this;
    }

    public function getCgBdotationq0228(): ?string
    {
        return $this->cgBdotationq0228;
    }

    public function setCgBdotationq0228(?string $cgBdotationq0228): static
    {
        $this->cgBdotationq0228 = $cgBdotationq0228;

        return $this;
    }

    public function getCgBdotationq0229(): ?string
    {
        return $this->cgBdotationq0229;
    }

    public function setCgBdotationq0229(?string $cgBdotationq0229): static
    {
        $this->cgBdotationq0229 = $cgBdotationq0229;

        return $this;
    }

    public function getCgBdotationq0230(): ?string
    {
        return $this->cgBdotationq0230;
    }

    public function setCgBdotationq0230(?string $cgBdotationq0230): static
    {
        $this->cgBdotationq0230 = $cgBdotationq0230;

        return $this;
    }

    public function getCgBdotationq0231(): ?string
    {
        return $this->cgBdotationq0231;
    }

    public function setCgBdotationq0231(?string $cgBdotationq0231): static
    {
        $this->cgBdotationq0231 = $cgBdotationq0231;

        return $this;
    }

    public function getCgBdotationq0232(): ?string
    {
        return $this->cgBdotationq0232;
    }

    public function setCgBdotationq0232(?string $cgBdotationq0232): static
    {
        $this->cgBdotationq0232 = $cgBdotationq0232;

        return $this;
    }

    public function getCgBdotationq0233(): ?string
    {
        return $this->cgBdotationq0233;
    }

    public function setCgBdotationq0233(?string $cgBdotationq0233): static
    {
        $this->cgBdotationq0233 = $cgBdotationq0233;

        return $this;
    }

    public function getCgBdotationq0234(): ?string
    {
        return $this->cgBdotationq0234;
    }

    public function setCgBdotationq0234(?string $cgBdotationq0234): static
    {
        $this->cgBdotationq0234 = $cgBdotationq0234;

        return $this;
    }

    public function getCgBdotationq0235(): ?string
    {
        return $this->cgBdotationq0235;
    }

    public function setCgBdotationq0235(?string $cgBdotationq0235): static
    {
        $this->cgBdotationq0235 = $cgBdotationq0235;

        return $this;
    }

    public function getCgBdotationq0236(): ?string
    {
        return $this->cgBdotationq0236;
    }

    public function setCgBdotationq0236(?string $cgBdotationq0236): static
    {
        $this->cgBdotationq0236 = $cgBdotationq0236;

        return $this;
    }

    public function getCgBdotationq0301(): ?string
    {
        return $this->cgBdotationq0301;
    }

    public function setCgBdotationq0301(?string $cgBdotationq0301): static
    {
        $this->cgBdotationq0301 = $cgBdotationq0301;

        return $this;
    }

    public function getCgBdotationq0302(): ?string
    {
        return $this->cgBdotationq0302;
    }

    public function setCgBdotationq0302(?string $cgBdotationq0302): static
    {
        $this->cgBdotationq0302 = $cgBdotationq0302;

        return $this;
    }

    public function getCgBdotationq0303(): ?string
    {
        return $this->cgBdotationq0303;
    }

    public function setCgBdotationq0303(?string $cgBdotationq0303): static
    {
        $this->cgBdotationq0303 = $cgBdotationq0303;

        return $this;
    }

    public function getCgBdotationq0304(): ?string
    {
        return $this->cgBdotationq0304;
    }

    public function setCgBdotationq0304(?string $cgBdotationq0304): static
    {
        $this->cgBdotationq0304 = $cgBdotationq0304;

        return $this;
    }

    public function getCgBdotationq0305(): ?string
    {
        return $this->cgBdotationq0305;
    }

    public function setCgBdotationq0305(?string $cgBdotationq0305): static
    {
        $this->cgBdotationq0305 = $cgBdotationq0305;

        return $this;
    }

    public function getCgBdotationq0306(): ?string
    {
        return $this->cgBdotationq0306;
    }

    public function setCgBdotationq0306(?string $cgBdotationq0306): static
    {
        $this->cgBdotationq0306 = $cgBdotationq0306;

        return $this;
    }

    public function getCgBdotationq0307(): ?string
    {
        return $this->cgBdotationq0307;
    }

    public function setCgBdotationq0307(?string $cgBdotationq0307): static
    {
        $this->cgBdotationq0307 = $cgBdotationq0307;

        return $this;
    }

    public function getCgBdotationq0308(): ?string
    {
        return $this->cgBdotationq0308;
    }

    public function setCgBdotationq0308(?string $cgBdotationq0308): static
    {
        $this->cgBdotationq0308 = $cgBdotationq0308;

        return $this;
    }

    public function getCgBdotationq0309(): ?string
    {
        return $this->cgBdotationq0309;
    }

    public function setCgBdotationq0309(?string $cgBdotationq0309): static
    {
        $this->cgBdotationq0309 = $cgBdotationq0309;

        return $this;
    }

    public function getCgBdotationq0310(): ?string
    {
        return $this->cgBdotationq0310;
    }

    public function setCgBdotationq0310(?string $cgBdotationq0310): static
    {
        $this->cgBdotationq0310 = $cgBdotationq0310;

        return $this;
    }

    public function getCgBdotationq0311(): ?string
    {
        return $this->cgBdotationq0311;
    }

    public function setCgBdotationq0311(?string $cgBdotationq0311): static
    {
        $this->cgBdotationq0311 = $cgBdotationq0311;

        return $this;
    }

    public function getCgBdotationq0312(): ?string
    {
        return $this->cgBdotationq0312;
    }

    public function setCgBdotationq0312(?string $cgBdotationq0312): static
    {
        $this->cgBdotationq0312 = $cgBdotationq0312;

        return $this;
    }

    public function getCgBdotationq0313(): ?string
    {
        return $this->cgBdotationq0313;
    }

    public function setCgBdotationq0313(?string $cgBdotationq0313): static
    {
        $this->cgBdotationq0313 = $cgBdotationq0313;

        return $this;
    }

    public function getCgBdotationq0314(): ?string
    {
        return $this->cgBdotationq0314;
    }

    public function setCgBdotationq0314(?string $cgBdotationq0314): static
    {
        $this->cgBdotationq0314 = $cgBdotationq0314;

        return $this;
    }

    public function getCgBdotationq0315(): ?string
    {
        return $this->cgBdotationq0315;
    }

    public function setCgBdotationq0315(?string $cgBdotationq0315): static
    {
        $this->cgBdotationq0315 = $cgBdotationq0315;

        return $this;
    }

    public function getCgBdotationq0316(): ?string
    {
        return $this->cgBdotationq0316;
    }

    public function setCgBdotationq0316(?string $cgBdotationq0316): static
    {
        $this->cgBdotationq0316 = $cgBdotationq0316;

        return $this;
    }

    public function getCgBdotationq0317(): ?string
    {
        return $this->cgBdotationq0317;
    }

    public function setCgBdotationq0317(?string $cgBdotationq0317): static
    {
        $this->cgBdotationq0317 = $cgBdotationq0317;

        return $this;
    }

    public function getCgBdotationq0318(): ?string
    {
        return $this->cgBdotationq0318;
    }

    public function setCgBdotationq0318(?string $cgBdotationq0318): static
    {
        $this->cgBdotationq0318 = $cgBdotationq0318;

        return $this;
    }

    public function getCgBdotationq0319(): ?string
    {
        return $this->cgBdotationq0319;
    }

    public function setCgBdotationq0319(?string $cgBdotationq0319): static
    {
        $this->cgBdotationq0319 = $cgBdotationq0319;

        return $this;
    }

    public function getCgBdotationq0320(): ?string
    {
        return $this->cgBdotationq0320;
    }

    public function setCgBdotationq0320(?string $cgBdotationq0320): static
    {
        $this->cgBdotationq0320 = $cgBdotationq0320;

        return $this;
    }

    public function getCgBdotationq0321(): ?string
    {
        return $this->cgBdotationq0321;
    }

    public function setCgBdotationq0321(?string $cgBdotationq0321): static
    {
        $this->cgBdotationq0321 = $cgBdotationq0321;

        return $this;
    }

    public function getCgBdotationq0322(): ?string
    {
        return $this->cgBdotationq0322;
    }

    public function setCgBdotationq0322(?string $cgBdotationq0322): static
    {
        $this->cgBdotationq0322 = $cgBdotationq0322;

        return $this;
    }

    public function getCgBdotationq0323(): ?string
    {
        return $this->cgBdotationq0323;
    }

    public function setCgBdotationq0323(?string $cgBdotationq0323): static
    {
        $this->cgBdotationq0323 = $cgBdotationq0323;

        return $this;
    }

    public function getCgBdotationq0324(): ?string
    {
        return $this->cgBdotationq0324;
    }

    public function setCgBdotationq0324(?string $cgBdotationq0324): static
    {
        $this->cgBdotationq0324 = $cgBdotationq0324;

        return $this;
    }

    public function getCgBdotationq0325(): ?string
    {
        return $this->cgBdotationq0325;
    }

    public function setCgBdotationq0325(?string $cgBdotationq0325): static
    {
        $this->cgBdotationq0325 = $cgBdotationq0325;

        return $this;
    }

    public function getCgBdotationq0326(): ?string
    {
        return $this->cgBdotationq0326;
    }

    public function setCgBdotationq0326(?string $cgBdotationq0326): static
    {
        $this->cgBdotationq0326 = $cgBdotationq0326;

        return $this;
    }

    public function getCgBdotationq0327(): ?string
    {
        return $this->cgBdotationq0327;
    }

    public function setCgBdotationq0327(?string $cgBdotationq0327): static
    {
        $this->cgBdotationq0327 = $cgBdotationq0327;

        return $this;
    }

    public function getCgBdotationq0328(): ?string
    {
        return $this->cgBdotationq0328;
    }

    public function setCgBdotationq0328(?string $cgBdotationq0328): static
    {
        $this->cgBdotationq0328 = $cgBdotationq0328;

        return $this;
    }

    public function getCgBdotationq0329(): ?string
    {
        return $this->cgBdotationq0329;
    }

    public function setCgBdotationq0329(?string $cgBdotationq0329): static
    {
        $this->cgBdotationq0329 = $cgBdotationq0329;

        return $this;
    }

    public function getCgBdotationq0330(): ?string
    {
        return $this->cgBdotationq0330;
    }

    public function setCgBdotationq0330(?string $cgBdotationq0330): static
    {
        $this->cgBdotationq0330 = $cgBdotationq0330;

        return $this;
    }

    public function getCgBdotationq0331(): ?string
    {
        return $this->cgBdotationq0331;
    }

    public function setCgBdotationq0331(?string $cgBdotationq0331): static
    {
        $this->cgBdotationq0331 = $cgBdotationq0331;

        return $this;
    }

    public function getCgBdotationq0332(): ?string
    {
        return $this->cgBdotationq0332;
    }

    public function setCgBdotationq0332(?string $cgBdotationq0332): static
    {
        $this->cgBdotationq0332 = $cgBdotationq0332;

        return $this;
    }

    public function getCgBdotationq0333(): ?string
    {
        return $this->cgBdotationq0333;
    }

    public function setCgBdotationq0333(?string $cgBdotationq0333): static
    {
        $this->cgBdotationq0333 = $cgBdotationq0333;

        return $this;
    }

    public function getCgBdotationq0334(): ?string
    {
        return $this->cgBdotationq0334;
    }

    public function setCgBdotationq0334(?string $cgBdotationq0334): static
    {
        $this->cgBdotationq0334 = $cgBdotationq0334;

        return $this;
    }

    public function getCgBdotationq0335(): ?string
    {
        return $this->cgBdotationq0335;
    }

    public function setCgBdotationq0335(?string $cgBdotationq0335): static
    {
        $this->cgBdotationq0335 = $cgBdotationq0335;

        return $this;
    }

    public function getCgBdotationq0336(): ?string
    {
        return $this->cgBdotationq0336;
    }

    public function setCgBdotationq0336(?string $cgBdotationq0336): static
    {
        $this->cgBdotationq0336 = $cgBdotationq0336;

        return $this;
    }

    public function getCgBdotationq0401(): ?string
    {
        return $this->cgBdotationq0401;
    }

    public function setCgBdotationq0401(?string $cgBdotationq0401): static
    {
        $this->cgBdotationq0401 = $cgBdotationq0401;

        return $this;
    }

    public function getCgBdotationq0402(): ?string
    {
        return $this->cgBdotationq0402;
    }

    public function setCgBdotationq0402(?string $cgBdotationq0402): static
    {
        $this->cgBdotationq0402 = $cgBdotationq0402;

        return $this;
    }

    public function getCgBdotationq0403(): ?string
    {
        return $this->cgBdotationq0403;
    }

    public function setCgBdotationq0403(?string $cgBdotationq0403): static
    {
        $this->cgBdotationq0403 = $cgBdotationq0403;

        return $this;
    }

    public function getCgBdotationq0404(): ?string
    {
        return $this->cgBdotationq0404;
    }

    public function setCgBdotationq0404(?string $cgBdotationq0404): static
    {
        $this->cgBdotationq0404 = $cgBdotationq0404;

        return $this;
    }

    public function getCgBdotationq0405(): ?string
    {
        return $this->cgBdotationq0405;
    }

    public function setCgBdotationq0405(?string $cgBdotationq0405): static
    {
        $this->cgBdotationq0405 = $cgBdotationq0405;

        return $this;
    }

    public function getCgBdotationq0406(): ?string
    {
        return $this->cgBdotationq0406;
    }

    public function setCgBdotationq0406(?string $cgBdotationq0406): static
    {
        $this->cgBdotationq0406 = $cgBdotationq0406;

        return $this;
    }

    public function getCgBdotationq0407(): ?string
    {
        return $this->cgBdotationq0407;
    }

    public function setCgBdotationq0407(?string $cgBdotationq0407): static
    {
        $this->cgBdotationq0407 = $cgBdotationq0407;

        return $this;
    }

    public function getCgBdotationq0408(): ?string
    {
        return $this->cgBdotationq0408;
    }

    public function setCgBdotationq0408(?string $cgBdotationq0408): static
    {
        $this->cgBdotationq0408 = $cgBdotationq0408;

        return $this;
    }

    public function getCgBdotationq0409(): ?string
    {
        return $this->cgBdotationq0409;
    }

    public function setCgBdotationq0409(?string $cgBdotationq0409): static
    {
        $this->cgBdotationq0409 = $cgBdotationq0409;

        return $this;
    }

    public function getCgBdotationq0410(): ?string
    {
        return $this->cgBdotationq0410;
    }

    public function setCgBdotationq0410(?string $cgBdotationq0410): static
    {
        $this->cgBdotationq0410 = $cgBdotationq0410;

        return $this;
    }

    public function getCgBdotationq0411(): ?string
    {
        return $this->cgBdotationq0411;
    }

    public function setCgBdotationq0411(?string $cgBdotationq0411): static
    {
        $this->cgBdotationq0411 = $cgBdotationq0411;

        return $this;
    }

    public function getCgBdotationq0412(): ?string
    {
        return $this->cgBdotationq0412;
    }

    public function setCgBdotationq0412(?string $cgBdotationq0412): static
    {
        $this->cgBdotationq0412 = $cgBdotationq0412;

        return $this;
    }

    public function getCgBdotationq0413(): ?string
    {
        return $this->cgBdotationq0413;
    }

    public function setCgBdotationq0413(?string $cgBdotationq0413): static
    {
        $this->cgBdotationq0413 = $cgBdotationq0413;

        return $this;
    }

    public function getCgBdotationq0414(): ?string
    {
        return $this->cgBdotationq0414;
    }

    public function setCgBdotationq0414(?string $cgBdotationq0414): static
    {
        $this->cgBdotationq0414 = $cgBdotationq0414;

        return $this;
    }

    public function getCgBdotationq0415(): ?string
    {
        return $this->cgBdotationq0415;
    }

    public function setCgBdotationq0415(?string $cgBdotationq0415): static
    {
        $this->cgBdotationq0415 = $cgBdotationq0415;

        return $this;
    }

    public function getCgBdotationq0416(): ?string
    {
        return $this->cgBdotationq0416;
    }

    public function setCgBdotationq0416(?string $cgBdotationq0416): static
    {
        $this->cgBdotationq0416 = $cgBdotationq0416;

        return $this;
    }

    public function getCgBdotationq0417(): ?string
    {
        return $this->cgBdotationq0417;
    }

    public function setCgBdotationq0417(?string $cgBdotationq0417): static
    {
        $this->cgBdotationq0417 = $cgBdotationq0417;

        return $this;
    }

    public function getCgBdotationq0418(): ?string
    {
        return $this->cgBdotationq0418;
    }

    public function setCgBdotationq0418(?string $cgBdotationq0418): static
    {
        $this->cgBdotationq0418 = $cgBdotationq0418;

        return $this;
    }

    public function getCgBdotationq0419(): ?string
    {
        return $this->cgBdotationq0419;
    }

    public function setCgBdotationq0419(?string $cgBdotationq0419): static
    {
        $this->cgBdotationq0419 = $cgBdotationq0419;

        return $this;
    }

    public function getCgBdotationq0420(): ?string
    {
        return $this->cgBdotationq0420;
    }

    public function setCgBdotationq0420(?string $cgBdotationq0420): static
    {
        $this->cgBdotationq0420 = $cgBdotationq0420;

        return $this;
    }

    public function getCgBdotationq0421(): ?string
    {
        return $this->cgBdotationq0421;
    }

    public function setCgBdotationq0421(?string $cgBdotationq0421): static
    {
        $this->cgBdotationq0421 = $cgBdotationq0421;

        return $this;
    }

    public function getCgBdotationq0422(): ?string
    {
        return $this->cgBdotationq0422;
    }

    public function setCgBdotationq0422(?string $cgBdotationq0422): static
    {
        $this->cgBdotationq0422 = $cgBdotationq0422;

        return $this;
    }

    public function getCgBdotationq0423(): ?string
    {
        return $this->cgBdotationq0423;
    }

    public function setCgBdotationq0423(?string $cgBdotationq0423): static
    {
        $this->cgBdotationq0423 = $cgBdotationq0423;

        return $this;
    }

    public function getCgBdotationq0424(): ?string
    {
        return $this->cgBdotationq0424;
    }

    public function setCgBdotationq0424(?string $cgBdotationq0424): static
    {
        $this->cgBdotationq0424 = $cgBdotationq0424;

        return $this;
    }

    public function getCgBdotationq0425(): ?string
    {
        return $this->cgBdotationq0425;
    }

    public function setCgBdotationq0425(?string $cgBdotationq0425): static
    {
        $this->cgBdotationq0425 = $cgBdotationq0425;

        return $this;
    }

    public function getCgBdotationq0426(): ?string
    {
        return $this->cgBdotationq0426;
    }

    public function setCgBdotationq0426(?string $cgBdotationq0426): static
    {
        $this->cgBdotationq0426 = $cgBdotationq0426;

        return $this;
    }

    public function getCgBdotationq0427(): ?string
    {
        return $this->cgBdotationq0427;
    }

    public function setCgBdotationq0427(?string $cgBdotationq0427): static
    {
        $this->cgBdotationq0427 = $cgBdotationq0427;

        return $this;
    }

    public function getCgBdotationq0428(): ?string
    {
        return $this->cgBdotationq0428;
    }

    public function setCgBdotationq0428(?string $cgBdotationq0428): static
    {
        $this->cgBdotationq0428 = $cgBdotationq0428;

        return $this;
    }

    public function getCgBdotationq0429(): ?string
    {
        return $this->cgBdotationq0429;
    }

    public function setCgBdotationq0429(?string $cgBdotationq0429): static
    {
        $this->cgBdotationq0429 = $cgBdotationq0429;

        return $this;
    }

    public function getCgBdotationq0430(): ?string
    {
        return $this->cgBdotationq0430;
    }

    public function setCgBdotationq0430(?string $cgBdotationq0430): static
    {
        $this->cgBdotationq0430 = $cgBdotationq0430;

        return $this;
    }

    public function getCgBdotationq0431(): ?string
    {
        return $this->cgBdotationq0431;
    }

    public function setCgBdotationq0431(?string $cgBdotationq0431): static
    {
        $this->cgBdotationq0431 = $cgBdotationq0431;

        return $this;
    }

    public function getCgBdotationq0432(): ?string
    {
        return $this->cgBdotationq0432;
    }

    public function setCgBdotationq0432(?string $cgBdotationq0432): static
    {
        $this->cgBdotationq0432 = $cgBdotationq0432;

        return $this;
    }

    public function getCgBdotationq0433(): ?string
    {
        return $this->cgBdotationq0433;
    }

    public function setCgBdotationq0433(?string $cgBdotationq0433): static
    {
        $this->cgBdotationq0433 = $cgBdotationq0433;

        return $this;
    }

    public function getCgBdotationq0434(): ?string
    {
        return $this->cgBdotationq0434;
    }

    public function setCgBdotationq0434(?string $cgBdotationq0434): static
    {
        $this->cgBdotationq0434 = $cgBdotationq0434;

        return $this;
    }

    public function getCgBdotationq0435(): ?string
    {
        return $this->cgBdotationq0435;
    }

    public function setCgBdotationq0435(?string $cgBdotationq0435): static
    {
        $this->cgBdotationq0435 = $cgBdotationq0435;

        return $this;
    }

    public function getCgBdotationq0436(): ?string
    {
        return $this->cgBdotationq0436;
    }

    public function setCgBdotationq0436(?string $cgBdotationq0436): static
    {
        $this->cgBdotationq0436 = $cgBdotationq0436;

        return $this;
    }

    public function getCgBdotationq0501(): ?string
    {
        return $this->cgBdotationq0501;
    }

    public function setCgBdotationq0501(?string $cgBdotationq0501): static
    {
        $this->cgBdotationq0501 = $cgBdotationq0501;

        return $this;
    }

    public function getCgBdotationq0502(): ?string
    {
        return $this->cgBdotationq0502;
    }

    public function setCgBdotationq0502(?string $cgBdotationq0502): static
    {
        $this->cgBdotationq0502 = $cgBdotationq0502;

        return $this;
    }

    public function getCgBdotationq0503(): ?string
    {
        return $this->cgBdotationq0503;
    }

    public function setCgBdotationq0503(?string $cgBdotationq0503): static
    {
        $this->cgBdotationq0503 = $cgBdotationq0503;

        return $this;
    }

    public function getCgBdotationq0504(): ?string
    {
        return $this->cgBdotationq0504;
    }

    public function setCgBdotationq0504(?string $cgBdotationq0504): static
    {
        $this->cgBdotationq0504 = $cgBdotationq0504;

        return $this;
    }

    public function getCgBdotationq0505(): ?string
    {
        return $this->cgBdotationq0505;
    }

    public function setCgBdotationq0505(?string $cgBdotationq0505): static
    {
        $this->cgBdotationq0505 = $cgBdotationq0505;

        return $this;
    }

    public function getCgBdotationq0506(): ?string
    {
        return $this->cgBdotationq0506;
    }

    public function setCgBdotationq0506(?string $cgBdotationq0506): static
    {
        $this->cgBdotationq0506 = $cgBdotationq0506;

        return $this;
    }

    public function getCgBdotationq0507(): ?string
    {
        return $this->cgBdotationq0507;
    }

    public function setCgBdotationq0507(?string $cgBdotationq0507): static
    {
        $this->cgBdotationq0507 = $cgBdotationq0507;

        return $this;
    }

    public function getCgBdotationq0508(): ?string
    {
        return $this->cgBdotationq0508;
    }

    public function setCgBdotationq0508(?string $cgBdotationq0508): static
    {
        $this->cgBdotationq0508 = $cgBdotationq0508;

        return $this;
    }

    public function getCgBdotationq0509(): ?string
    {
        return $this->cgBdotationq0509;
    }

    public function setCgBdotationq0509(?string $cgBdotationq0509): static
    {
        $this->cgBdotationq0509 = $cgBdotationq0509;

        return $this;
    }

    public function getCgBdotationq0510(): ?string
    {
        return $this->cgBdotationq0510;
    }

    public function setCgBdotationq0510(?string $cgBdotationq0510): static
    {
        $this->cgBdotationq0510 = $cgBdotationq0510;

        return $this;
    }

    public function getCgBdotationq0511(): ?string
    {
        return $this->cgBdotationq0511;
    }

    public function setCgBdotationq0511(?string $cgBdotationq0511): static
    {
        $this->cgBdotationq0511 = $cgBdotationq0511;

        return $this;
    }

    public function getCgBdotationq0512(): ?string
    {
        return $this->cgBdotationq0512;
    }

    public function setCgBdotationq0512(?string $cgBdotationq0512): static
    {
        $this->cgBdotationq0512 = $cgBdotationq0512;

        return $this;
    }

    public function getCgBdotationq0513(): ?string
    {
        return $this->cgBdotationq0513;
    }

    public function setCgBdotationq0513(?string $cgBdotationq0513): static
    {
        $this->cgBdotationq0513 = $cgBdotationq0513;

        return $this;
    }

    public function getCgBdotationq0514(): ?string
    {
        return $this->cgBdotationq0514;
    }

    public function setCgBdotationq0514(?string $cgBdotationq0514): static
    {
        $this->cgBdotationq0514 = $cgBdotationq0514;

        return $this;
    }

    public function getCgBdotationq0515(): ?string
    {
        return $this->cgBdotationq0515;
    }

    public function setCgBdotationq0515(?string $cgBdotationq0515): static
    {
        $this->cgBdotationq0515 = $cgBdotationq0515;

        return $this;
    }

    public function getCgBdotationq0516(): ?string
    {
        return $this->cgBdotationq0516;
    }

    public function setCgBdotationq0516(?string $cgBdotationq0516): static
    {
        $this->cgBdotationq0516 = $cgBdotationq0516;

        return $this;
    }

    public function getCgBdotationq0517(): ?string
    {
        return $this->cgBdotationq0517;
    }

    public function setCgBdotationq0517(?string $cgBdotationq0517): static
    {
        $this->cgBdotationq0517 = $cgBdotationq0517;

        return $this;
    }

    public function getCgBdotationq0518(): ?string
    {
        return $this->cgBdotationq0518;
    }

    public function setCgBdotationq0518(?string $cgBdotationq0518): static
    {
        $this->cgBdotationq0518 = $cgBdotationq0518;

        return $this;
    }

    public function getCgBdotationq0519(): ?string
    {
        return $this->cgBdotationq0519;
    }

    public function setCgBdotationq0519(?string $cgBdotationq0519): static
    {
        $this->cgBdotationq0519 = $cgBdotationq0519;

        return $this;
    }

    public function getCgBdotationq0520(): ?string
    {
        return $this->cgBdotationq0520;
    }

    public function setCgBdotationq0520(?string $cgBdotationq0520): static
    {
        $this->cgBdotationq0520 = $cgBdotationq0520;

        return $this;
    }

    public function getCgBdotationq0521(): ?string
    {
        return $this->cgBdotationq0521;
    }

    public function setCgBdotationq0521(?string $cgBdotationq0521): static
    {
        $this->cgBdotationq0521 = $cgBdotationq0521;

        return $this;
    }

    public function getCgBdotationq0522(): ?string
    {
        return $this->cgBdotationq0522;
    }

    public function setCgBdotationq0522(?string $cgBdotationq0522): static
    {
        $this->cgBdotationq0522 = $cgBdotationq0522;

        return $this;
    }

    public function getCgBdotationq0523(): ?string
    {
        return $this->cgBdotationq0523;
    }

    public function setCgBdotationq0523(?string $cgBdotationq0523): static
    {
        $this->cgBdotationq0523 = $cgBdotationq0523;

        return $this;
    }

    public function getCgBdotationq0524(): ?string
    {
        return $this->cgBdotationq0524;
    }

    public function setCgBdotationq0524(?string $cgBdotationq0524): static
    {
        $this->cgBdotationq0524 = $cgBdotationq0524;

        return $this;
    }

    public function getCgBdotationq0525(): ?string
    {
        return $this->cgBdotationq0525;
    }

    public function setCgBdotationq0525(?string $cgBdotationq0525): static
    {
        $this->cgBdotationq0525 = $cgBdotationq0525;

        return $this;
    }

    public function getCgBdotationq0526(): ?string
    {
        return $this->cgBdotationq0526;
    }

    public function setCgBdotationq0526(?string $cgBdotationq0526): static
    {
        $this->cgBdotationq0526 = $cgBdotationq0526;

        return $this;
    }

    public function getCgBdotationq0527(): ?string
    {
        return $this->cgBdotationq0527;
    }

    public function setCgBdotationq0527(?string $cgBdotationq0527): static
    {
        $this->cgBdotationq0527 = $cgBdotationq0527;

        return $this;
    }

    public function getCgBdotationq0528(): ?string
    {
        return $this->cgBdotationq0528;
    }

    public function setCgBdotationq0528(?string $cgBdotationq0528): static
    {
        $this->cgBdotationq0528 = $cgBdotationq0528;

        return $this;
    }

    public function getCgBdotationq0529(): ?string
    {
        return $this->cgBdotationq0529;
    }

    public function setCgBdotationq0529(?string $cgBdotationq0529): static
    {
        $this->cgBdotationq0529 = $cgBdotationq0529;

        return $this;
    }

    public function getCgBdotationq0530(): ?string
    {
        return $this->cgBdotationq0530;
    }

    public function setCgBdotationq0530(?string $cgBdotationq0530): static
    {
        $this->cgBdotationq0530 = $cgBdotationq0530;

        return $this;
    }

    public function getCgBdotationq0531(): ?string
    {
        return $this->cgBdotationq0531;
    }

    public function setCgBdotationq0531(?string $cgBdotationq0531): static
    {
        $this->cgBdotationq0531 = $cgBdotationq0531;

        return $this;
    }

    public function getCgBdotationq0532(): ?string
    {
        return $this->cgBdotationq0532;
    }

    public function setCgBdotationq0532(?string $cgBdotationq0532): static
    {
        $this->cgBdotationq0532 = $cgBdotationq0532;

        return $this;
    }

    public function getCgBdotationq0533(): ?string
    {
        return $this->cgBdotationq0533;
    }

    public function setCgBdotationq0533(?string $cgBdotationq0533): static
    {
        $this->cgBdotationq0533 = $cgBdotationq0533;

        return $this;
    }

    public function getCgBdotationq0534(): ?string
    {
        return $this->cgBdotationq0534;
    }

    public function setCgBdotationq0534(?string $cgBdotationq0534): static
    {
        $this->cgBdotationq0534 = $cgBdotationq0534;

        return $this;
    }

    public function getCgBdotationq0535(): ?string
    {
        return $this->cgBdotationq0535;
    }

    public function setCgBdotationq0535(?string $cgBdotationq0535): static
    {
        $this->cgBdotationq0535 = $cgBdotationq0535;

        return $this;
    }

    public function getCgBdotationq0536(): ?string
    {
        return $this->cgBdotationq0536;
    }

    public function setCgBdotationq0536(?string $cgBdotationq0536): static
    {
        $this->cgBdotationq0536 = $cgBdotationq0536;

        return $this;
    }

    public function getCgBdotationq0601(): ?string
    {
        return $this->cgBdotationq0601;
    }

    public function setCgBdotationq0601(?string $cgBdotationq0601): static
    {
        $this->cgBdotationq0601 = $cgBdotationq0601;

        return $this;
    }

    public function getCgBdotationq0602(): ?string
    {
        return $this->cgBdotationq0602;
    }

    public function setCgBdotationq0602(?string $cgBdotationq0602): static
    {
        $this->cgBdotationq0602 = $cgBdotationq0602;

        return $this;
    }

    public function getCgBdotationq0603(): ?string
    {
        return $this->cgBdotationq0603;
    }

    public function setCgBdotationq0603(?string $cgBdotationq0603): static
    {
        $this->cgBdotationq0603 = $cgBdotationq0603;

        return $this;
    }

    public function getCgBdotationq0604(): ?string
    {
        return $this->cgBdotationq0604;
    }

    public function setCgBdotationq0604(?string $cgBdotationq0604): static
    {
        $this->cgBdotationq0604 = $cgBdotationq0604;

        return $this;
    }

    public function getCgBdotationq0605(): ?string
    {
        return $this->cgBdotationq0605;
    }

    public function setCgBdotationq0605(?string $cgBdotationq0605): static
    {
        $this->cgBdotationq0605 = $cgBdotationq0605;

        return $this;
    }

    public function getCgBdotationq0606(): ?string
    {
        return $this->cgBdotationq0606;
    }

    public function setCgBdotationq0606(?string $cgBdotationq0606): static
    {
        $this->cgBdotationq0606 = $cgBdotationq0606;

        return $this;
    }

    public function getCgBdotationq0607(): ?string
    {
        return $this->cgBdotationq0607;
    }

    public function setCgBdotationq0607(?string $cgBdotationq0607): static
    {
        $this->cgBdotationq0607 = $cgBdotationq0607;

        return $this;
    }

    public function getCgBdotationq0608(): ?string
    {
        return $this->cgBdotationq0608;
    }

    public function setCgBdotationq0608(?string $cgBdotationq0608): static
    {
        $this->cgBdotationq0608 = $cgBdotationq0608;

        return $this;
    }

    public function getCgBdotationq0609(): ?string
    {
        return $this->cgBdotationq0609;
    }

    public function setCgBdotationq0609(?string $cgBdotationq0609): static
    {
        $this->cgBdotationq0609 = $cgBdotationq0609;

        return $this;
    }

    public function getCgBdotationq0610(): ?string
    {
        return $this->cgBdotationq0610;
    }

    public function setCgBdotationq0610(?string $cgBdotationq0610): static
    {
        $this->cgBdotationq0610 = $cgBdotationq0610;

        return $this;
    }

    public function getCgBdotationq0611(): ?string
    {
        return $this->cgBdotationq0611;
    }

    public function setCgBdotationq0611(?string $cgBdotationq0611): static
    {
        $this->cgBdotationq0611 = $cgBdotationq0611;

        return $this;
    }

    public function getCgBdotationq0612(): ?string
    {
        return $this->cgBdotationq0612;
    }

    public function setCgBdotationq0612(?string $cgBdotationq0612): static
    {
        $this->cgBdotationq0612 = $cgBdotationq0612;

        return $this;
    }

    public function getCgBdotationq0613(): ?string
    {
        return $this->cgBdotationq0613;
    }

    public function setCgBdotationq0613(?string $cgBdotationq0613): static
    {
        $this->cgBdotationq0613 = $cgBdotationq0613;

        return $this;
    }

    public function getCgBdotationq0614(): ?string
    {
        return $this->cgBdotationq0614;
    }

    public function setCgBdotationq0614(?string $cgBdotationq0614): static
    {
        $this->cgBdotationq0614 = $cgBdotationq0614;

        return $this;
    }

    public function getCgBdotationq0615(): ?string
    {
        return $this->cgBdotationq0615;
    }

    public function setCgBdotationq0615(?string $cgBdotationq0615): static
    {
        $this->cgBdotationq0615 = $cgBdotationq0615;

        return $this;
    }

    public function getCgBdotationq0616(): ?string
    {
        return $this->cgBdotationq0616;
    }

    public function setCgBdotationq0616(?string $cgBdotationq0616): static
    {
        $this->cgBdotationq0616 = $cgBdotationq0616;

        return $this;
    }

    public function getCgBdotationq0617(): ?string
    {
        return $this->cgBdotationq0617;
    }

    public function setCgBdotationq0617(?string $cgBdotationq0617): static
    {
        $this->cgBdotationq0617 = $cgBdotationq0617;

        return $this;
    }

    public function getCgBdotationq0618(): ?string
    {
        return $this->cgBdotationq0618;
    }

    public function setCgBdotationq0618(?string $cgBdotationq0618): static
    {
        $this->cgBdotationq0618 = $cgBdotationq0618;

        return $this;
    }

    public function getCgBdotationq0619(): ?string
    {
        return $this->cgBdotationq0619;
    }

    public function setCgBdotationq0619(?string $cgBdotationq0619): static
    {
        $this->cgBdotationq0619 = $cgBdotationq0619;

        return $this;
    }

    public function getCgBdotationq0620(): ?string
    {
        return $this->cgBdotationq0620;
    }

    public function setCgBdotationq0620(?string $cgBdotationq0620): static
    {
        $this->cgBdotationq0620 = $cgBdotationq0620;

        return $this;
    }

    public function getCgBdotationq0621(): ?string
    {
        return $this->cgBdotationq0621;
    }

    public function setCgBdotationq0621(?string $cgBdotationq0621): static
    {
        $this->cgBdotationq0621 = $cgBdotationq0621;

        return $this;
    }

    public function getCgBdotationq0622(): ?string
    {
        return $this->cgBdotationq0622;
    }

    public function setCgBdotationq0622(?string $cgBdotationq0622): static
    {
        $this->cgBdotationq0622 = $cgBdotationq0622;

        return $this;
    }

    public function getCgBdotationq0623(): ?string
    {
        return $this->cgBdotationq0623;
    }

    public function setCgBdotationq0623(?string $cgBdotationq0623): static
    {
        $this->cgBdotationq0623 = $cgBdotationq0623;

        return $this;
    }

    public function getCgBdotationq0624(): ?string
    {
        return $this->cgBdotationq0624;
    }

    public function setCgBdotationq0624(?string $cgBdotationq0624): static
    {
        $this->cgBdotationq0624 = $cgBdotationq0624;

        return $this;
    }

    public function getCgBdotationq0625(): ?string
    {
        return $this->cgBdotationq0625;
    }

    public function setCgBdotationq0625(?string $cgBdotationq0625): static
    {
        $this->cgBdotationq0625 = $cgBdotationq0625;

        return $this;
    }

    public function getCgBdotationq0626(): ?string
    {
        return $this->cgBdotationq0626;
    }

    public function setCgBdotationq0626(?string $cgBdotationq0626): static
    {
        $this->cgBdotationq0626 = $cgBdotationq0626;

        return $this;
    }

    public function getCgBdotationq0627(): ?string
    {
        return $this->cgBdotationq0627;
    }

    public function setCgBdotationq0627(?string $cgBdotationq0627): static
    {
        $this->cgBdotationq0627 = $cgBdotationq0627;

        return $this;
    }

    public function getCgBdotationq0628(): ?string
    {
        return $this->cgBdotationq0628;
    }

    public function setCgBdotationq0628(?string $cgBdotationq0628): static
    {
        $this->cgBdotationq0628 = $cgBdotationq0628;

        return $this;
    }

    public function getCgBdotationq0629(): ?string
    {
        return $this->cgBdotationq0629;
    }

    public function setCgBdotationq0629(?string $cgBdotationq0629): static
    {
        $this->cgBdotationq0629 = $cgBdotationq0629;

        return $this;
    }

    public function getCgBdotationq0630(): ?string
    {
        return $this->cgBdotationq0630;
    }

    public function setCgBdotationq0630(?string $cgBdotationq0630): static
    {
        $this->cgBdotationq0630 = $cgBdotationq0630;

        return $this;
    }

    public function getCgBdotationq0631(): ?string
    {
        return $this->cgBdotationq0631;
    }

    public function setCgBdotationq0631(?string $cgBdotationq0631): static
    {
        $this->cgBdotationq0631 = $cgBdotationq0631;

        return $this;
    }

    public function getCgBdotationq0632(): ?string
    {
        return $this->cgBdotationq0632;
    }

    public function setCgBdotationq0632(?string $cgBdotationq0632): static
    {
        $this->cgBdotationq0632 = $cgBdotationq0632;

        return $this;
    }

    public function getCgBdotationq0633(): ?string
    {
        return $this->cgBdotationq0633;
    }

    public function setCgBdotationq0633(?string $cgBdotationq0633): static
    {
        $this->cgBdotationq0633 = $cgBdotationq0633;

        return $this;
    }

    public function getCgBdotationq0634(): ?string
    {
        return $this->cgBdotationq0634;
    }

    public function setCgBdotationq0634(?string $cgBdotationq0634): static
    {
        $this->cgBdotationq0634 = $cgBdotationq0634;

        return $this;
    }

    public function getCgBdotationq0635(): ?string
    {
        return $this->cgBdotationq0635;
    }

    public function setCgBdotationq0635(?string $cgBdotationq0635): static
    {
        $this->cgBdotationq0635 = $cgBdotationq0635;

        return $this;
    }

    public function getCgBdotationq0636(): ?string
    {
        return $this->cgBdotationq0636;
    }

    public function setCgBdotationq0636(?string $cgBdotationq0636): static
    {
        $this->cgBdotationq0636 = $cgBdotationq0636;

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
