<?php

namespace App\Entity\Nd;

use App\Repository\Nd\FBudgetRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'F_BUDGET')]
#[ORM\UniqueConstraint(name: 'IBD_NUM', columns: ['cbBD_Num'])]
#[ORM\Index(name: 'IBD_INT', columns: ['cbBD_Intitule'])]
#[ORM\Index(name: 'IBD_TYPE', columns: ['cbBD_Num'])]
#[ORM\UniqueConstraint(name: 'IBD_NO', columns: ['BD_No'])]
#[ORM\Index(name: 'IBD_VREPART', columns: ['cbBD_VRepart'])]
#[ORM\Index(name: 'IBD_NUMCENTR', columns: ['cbBD_NumCentr'])]
#[ORM\Entity(repositoryClass: FBudgetRepository::class)]
class FBudget
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "BD_No")]
    private ?int $bdNo = null;

    #[ORM\Column(name: "BD_Num", length: 13)]
    private ?string $bdNum = null;

    #[ORM\Column(name: "cbBD_Num", type: Types::BINARY, nullable: true)]
    private $cbbdNum = null;

    #[ORM\Column(name: "BD_Intitule", length: 35, nullable: true)]
    private ?string $bdIntitule = null;

    #[ORM\Column(name: "cbBD_Intitule", type: Types::BINARY, nullable: true)]
    private $cbbdIntitule = null;

    #[ORM\Column(name: "BD_Type", type: Types::SMALLINT, nullable: true)]
    private ?int $bdType = null;

    #[ORM\Column(name: "BD_Sens", type: Types::SMALLINT, nullable: true)]
    private ?int $bdSens = null;

    #[ORM\Column(name: "BD_NumCentr", length: 13, nullable: true)]
    private ?string $bdNumcentr = null;

    #[ORM\Column(name: "cbBD_NumCentr", type: Types::BINARY, nullable: true)]
    private $cbbdNumcentr = null;

    #[ORM\Column(name: "BD_TRepart", type: Types::SMALLINT, nullable: true)]
    private ?int $bdTrepart = null;

    #[ORM\Column(name: "BD_VRepart", length: 21, nullable: true)]
    private ?string $bdVrepart = null;

    #[ORM\Column(name: "cbBD_VRepart", type: Types::BINARY, nullable: true)]
    private $cbbdVrepart = null;

    #[ORM\Column(name: "BD_Dotation0101", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0101 = null;

    #[ORM\Column(name: "BD_Dotation0102", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0102 = null;

    #[ORM\Column(name: "BD_Dotation0103", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0103 = null;

    #[ORM\Column(name: "BD_Dotation0104", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0104 = null;

    #[ORM\Column(name: "BD_Dotation0105", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0105 = null;

    #[ORM\Column(name: "BD_Dotation0106", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0106 = null;

    #[ORM\Column(name: "BD_Dotation0107", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0107 = null;

    #[ORM\Column(name: "BD_Dotation0108", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0108 = null;

    #[ORM\Column(name: "BD_Dotation0109", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0109 = null;

    #[ORM\Column(name: "BD_Dotation0110", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0110 = null;

    #[ORM\Column(name: "BD_Dotation0111", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0111 = null;

    #[ORM\Column(name: "BD_Dotation0112", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0112 = null;

    #[ORM\Column(name: "BD_Dotation0113", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0113 = null;

    #[ORM\Column(name: "BD_Dotation0114", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0114 = null;

    #[ORM\Column(name: "BD_Dotation0115", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0115 = null;

    #[ORM\Column(name: "BD_Dotation0116", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0116 = null;

    #[ORM\Column(name: "BD_Dotation0117", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0117 = null;

    #[ORM\Column(name: "BD_Dotation0118", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0118 = null;

    #[ORM\Column(name: "BD_Dotation0119", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0119 = null;

    #[ORM\Column(name: "BD_Dotation0120", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0120 = null;

    #[ORM\Column(name: "BD_Dotation0121", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0121 = null;

    #[ORM\Column(name: "BD_Dotation0122", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0122 = null;

    #[ORM\Column(name: "BD_Dotation0123", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0123 = null;

    #[ORM\Column(name: "BD_Dotation0124", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0124 = null;

    #[ORM\Column(name: "BD_Dotation0125", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0125 = null;

    #[ORM\Column(name: "BD_Dotation0126", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0126 = null;

    #[ORM\Column(name: "BD_Dotation0127", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0127 = null;

    #[ORM\Column(name: "BD_Dotation0128", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0128 = null;

    #[ORM\Column(name: "BD_Dotation0129", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0129 = null;

    #[ORM\Column(name: "BD_Dotation0130", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0130 = null;

    #[ORM\Column(name: "BD_Dotation0131", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0131 = null;

    #[ORM\Column(name: "BD_Dotation0132", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0132 = null;

    #[ORM\Column(name: "BD_Dotation0133", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0133 = null;

    #[ORM\Column(name: "BD_Dotation0134", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0134 = null;

    #[ORM\Column(name: "BD_Dotation0135", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0135 = null;

    #[ORM\Column(name: "BD_Dotation0136", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0136 = null;

    #[ORM\Column(name: "BD_Dotation0201", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0201 = null;

    #[ORM\Column(name: "BD_Dotation0202", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0202 = null;

    #[ORM\Column(name: "BD_Dotation0203", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0203 = null;

    #[ORM\Column(name: "BD_Dotation0204", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0204 = null;

    #[ORM\Column(name: "BD_Dotation0205", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0205 = null;

    #[ORM\Column(name: "BD_Dotation0206", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0206 = null;

    #[ORM\Column(name: "BD_Dotation0207", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0207 = null;

    #[ORM\Column(name: "BD_Dotation0208", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0208 = null;

    #[ORM\Column(name: "BD_Dotation0209", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0209 = null;

    #[ORM\Column(name: "BD_Dotation0210", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0210 = null;

    #[ORM\Column(name: "BD_Dotation0211", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0211 = null;

    #[ORM\Column(name: "BD_Dotation0212", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0212 = null;

    #[ORM\Column(name: "BD_Dotation0213", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0213 = null;

    #[ORM\Column(name: "BD_Dotation0214", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0214 = null;

    #[ORM\Column(name: "BD_Dotation0215", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0215 = null;

    #[ORM\Column(name: "BD_Dotation0216", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0216 = null;

    #[ORM\Column(name: "BD_Dotation0217", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0217 = null;

    #[ORM\Column(name: "BD_Dotation0218", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0218 = null;

    #[ORM\Column(name: "BD_Dotation0219", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0219 = null;

    #[ORM\Column(name: "BD_Dotation0220", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0220 = null;

    #[ORM\Column(name: "BD_Dotation0221", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0221 = null;

    #[ORM\Column(name: "BD_Dotation0222", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0222 = null;

    #[ORM\Column(name: "BD_Dotation0223", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0223 = null;

    #[ORM\Column(name: "BD_Dotation0224", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0224 = null;

    #[ORM\Column(name: "BD_Dotation0225", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0225 = null;

    #[ORM\Column(name: "BD_Dotation0226", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0226 = null;

    #[ORM\Column(name: "BD_Dotation0227", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0227 = null;

    #[ORM\Column(name: "BD_Dotation0228", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0228 = null;

    #[ORM\Column(name: "BD_Dotation0229", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0229 = null;

    #[ORM\Column(name: "BD_Dotation0230", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0230 = null;

    #[ORM\Column(name: "BD_Dotation0231", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0231 = null;

    #[ORM\Column(name: "BD_Dotation0232", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0232 = null;

    #[ORM\Column(name: "BD_Dotation0233", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0233 = null;

    #[ORM\Column(name: "BD_Dotation0234", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0234 = null;

    #[ORM\Column(name: "BD_Dotation0235", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0235 = null;

    #[ORM\Column(name: "BD_Dotation0236", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0236 = null;

    #[ORM\Column(name: "BD_Dotation0301", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0301 = null;

    #[ORM\Column(name: "BD_Dotation0302", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0302 = null;

    #[ORM\Column(name: "BD_Dotation0303", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0303 = null;

    #[ORM\Column(name: "BD_Dotation0304", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0304 = null;

    #[ORM\Column(name: "BD_Dotation0305", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0305 = null;

    #[ORM\Column(name: "BD_Dotation0306", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0306 = null;

    #[ORM\Column(name: "BD_Dotation0307", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0307 = null;

    #[ORM\Column(name: "BD_Dotation0308", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0308 = null;

    #[ORM\Column(name: "BD_Dotation0309", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0309 = null;

    #[ORM\Column(name: "BD_Dotation0310", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0310 = null;

    #[ORM\Column(name: "BD_Dotation0311", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0311 = null;

    #[ORM\Column(name: "BD_Dotation0312", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0312 = null;

    #[ORM\Column(name: "BD_Dotation0313", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0313 = null;

    #[ORM\Column(name: "BD_Dotation0314", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0314 = null;

    #[ORM\Column(name: "BD_Dotation0315", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0315 = null;

    #[ORM\Column(name: "BD_Dotation0316", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0316 = null;

    #[ORM\Column(name: "BD_Dotation0317", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0317 = null;

    #[ORM\Column(name: "BD_Dotation0318", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0318 = null;

    #[ORM\Column(name: "BD_Dotation0319", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0319 = null;

    #[ORM\Column(name: "BD_Dotation0320", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0320 = null;

    #[ORM\Column(name: "BD_Dotation0321", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0321 = null;

    #[ORM\Column(name: "BD_Dotation0322", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0322 = null;

    #[ORM\Column(name: "BD_Dotation0323", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0323 = null;

    #[ORM\Column(name: "BD_Dotation0324", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0324 = null;

    #[ORM\Column(name: "BD_Dotation0325", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0325 = null;

    #[ORM\Column(name: "BD_Dotation0326", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0326 = null;

    #[ORM\Column(name: "BD_Dotation0327", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0327 = null;

    #[ORM\Column(name: "BD_Dotation0328", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0328 = null;

    #[ORM\Column(name: "BD_Dotation0329", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0329 = null;

    #[ORM\Column(name: "BD_Dotation0330", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0330 = null;

    #[ORM\Column(name: "BD_Dotation0331", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0331 = null;

    #[ORM\Column(name: "BD_Dotation0332", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0332 = null;

    #[ORM\Column(name: "BD_Dotation0333", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0333 = null;

    #[ORM\Column(name: "BD_Dotation0334", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0334 = null;

    #[ORM\Column(name: "BD_Dotation0335", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0335 = null;

    #[ORM\Column(name: "BD_Dotation0336", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0336 = null;

    #[ORM\Column(name: "BD_Dotation0401", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0401 = null;

    #[ORM\Column(name: "BD_Dotation0402", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0402 = null;

    #[ORM\Column(name: "BD_Dotation0403", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0403 = null;

    #[ORM\Column(name: "BD_Dotation0404", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0404 = null;

    #[ORM\Column(name: "BD_Dotation0405", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0405 = null;

    #[ORM\Column(name: "BD_Dotation0406", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0406 = null;

    #[ORM\Column(name: "BD_Dotation0407", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0407 = null;

    #[ORM\Column(name: "BD_Dotation0408", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0408 = null;

    #[ORM\Column(name: "BD_Dotation0409", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0409 = null;

    #[ORM\Column(name: "BD_Dotation0410", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0410 = null;

    #[ORM\Column(name: "BD_Dotation0411", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0411 = null;

    #[ORM\Column(name: "BD_Dotation0412", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0412 = null;

    #[ORM\Column(name: "BD_Dotation0413", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0413 = null;

    #[ORM\Column(name: "BD_Dotation0414", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0414 = null;

    #[ORM\Column(name: "BD_Dotation0415", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0415 = null;

    #[ORM\Column(name: "BD_Dotation0416", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0416 = null;

    #[ORM\Column(name: "BD_Dotation0417", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0417 = null;

    #[ORM\Column(name: "BD_Dotation0418", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0418 = null;

    #[ORM\Column(name: "BD_Dotation0419", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0419 = null;

    #[ORM\Column(name: "BD_Dotation0420", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0420 = null;

    #[ORM\Column(name: "BD_Dotation0421", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0421 = null;

    #[ORM\Column(name: "BD_Dotation0422", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0422 = null;

    #[ORM\Column(name: "BD_Dotation0423", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0423 = null;

    #[ORM\Column(name: "BD_Dotation0424", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0424 = null;

    #[ORM\Column(name: "BD_Dotation0425", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0425 = null;

    #[ORM\Column(name: "BD_Dotation0426", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0426 = null;

    #[ORM\Column(name: "BD_Dotation0427", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0427 = null;

    #[ORM\Column(name: "BD_Dotation0428", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0428 = null;

    #[ORM\Column(name: "BD_Dotation0429", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0429 = null;

    #[ORM\Column(name: "BD_Dotation0430", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0430 = null;

    #[ORM\Column(name: "BD_Dotation0431", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0431 = null;

    #[ORM\Column(name: "BD_Dotation0432", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0432 = null;

    #[ORM\Column(name: "BD_Dotation0433", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0433 = null;

    #[ORM\Column(name: "BD_Dotation0434", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0434 = null;

    #[ORM\Column(name: "BD_Dotation0435", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0435 = null;

    #[ORM\Column(name: "BD_Dotation0436", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0436 = null;

    #[ORM\Column(name: "BD_Dotation0501", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0501 = null;

    #[ORM\Column(name: "BD_Dotation0502", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0502 = null;

    #[ORM\Column(name: "BD_Dotation0503", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0503 = null;

    #[ORM\Column(name: "BD_Dotation0504", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0504 = null;

    #[ORM\Column(name: "BD_Dotation0505", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0505 = null;

    #[ORM\Column(name: "BD_Dotation0506", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0506 = null;

    #[ORM\Column(name: "BD_Dotation0507", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0507 = null;

    #[ORM\Column(name: "BD_Dotation0508", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0508 = null;

    #[ORM\Column(name: "BD_Dotation0509", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0509 = null;

    #[ORM\Column(name: "BD_Dotation0510", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0510 = null;

    #[ORM\Column(name: "BD_Dotation0511", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0511 = null;

    #[ORM\Column(name: "BD_Dotation0512", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0512 = null;

    #[ORM\Column(name: "BD_Dotation0513", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0513 = null;

    #[ORM\Column(name: "BD_Dotation0514", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0514 = null;

    #[ORM\Column(name: "BD_Dotation0515", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0515 = null;

    #[ORM\Column(name: "BD_Dotation0516", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0516 = null;

    #[ORM\Column(name: "BD_Dotation0517", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0517 = null;

    #[ORM\Column(name: "BD_Dotation0518", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0518 = null;

    #[ORM\Column(name: "BD_Dotation0519", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0519 = null;

    #[ORM\Column(name: "BD_Dotation0520", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0520 = null;

    #[ORM\Column(name: "BD_Dotation0521", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0521 = null;

    #[ORM\Column(name: "BD_Dotation0522", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0522 = null;

    #[ORM\Column(name: "BD_Dotation0523", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0523 = null;

    #[ORM\Column(name: "BD_Dotation0524", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0524 = null;

    #[ORM\Column(name: "BD_Dotation0525", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0525 = null;

    #[ORM\Column(name: "BD_Dotation0526", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0526 = null;

    #[ORM\Column(name: "BD_Dotation0527", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0527 = null;

    #[ORM\Column(name: "BD_Dotation0528", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0528 = null;

    #[ORM\Column(name: "BD_Dotation0529", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0529 = null;

    #[ORM\Column(name: "BD_Dotation0530", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0530 = null;

    #[ORM\Column(name: "BD_Dotation0531", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0531 = null;

    #[ORM\Column(name: "BD_Dotation0532", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0532 = null;

    #[ORM\Column(name: "BD_Dotation0533", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0533 = null;

    #[ORM\Column(name: "BD_Dotation0534", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0534 = null;

    #[ORM\Column(name: "BD_Dotation0535", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0535 = null;

    #[ORM\Column(name: "BD_Dotation0536", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0536 = null;

    #[ORM\Column(name: "BD_Dotation0601", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0601 = null;

    #[ORM\Column(name: "BD_Dotation0602", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0602 = null;

    #[ORM\Column(name: "BD_Dotation0603", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0603 = null;

    #[ORM\Column(name: "BD_Dotation0604", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0604 = null;

    #[ORM\Column(name: "BD_Dotation0605", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0605 = null;

    #[ORM\Column(name: "BD_Dotation0606", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0606 = null;

    #[ORM\Column(name: "BD_Dotation0607", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0607 = null;

    #[ORM\Column(name: "BD_Dotation0608", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0608 = null;

    #[ORM\Column(name: "BD_Dotation0609", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0609 = null;

    #[ORM\Column(name: "BD_Dotation0610", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0610 = null;

    #[ORM\Column(name: "BD_Dotation0611", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0611 = null;

    #[ORM\Column(name: "BD_Dotation0612", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0612 = null;

    #[ORM\Column(name: "BD_Dotation0613", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0613 = null;

    #[ORM\Column(name: "BD_Dotation0614", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0614 = null;

    #[ORM\Column(name: "BD_Dotation0615", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0615 = null;

    #[ORM\Column(name: "BD_Dotation0616", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0616 = null;

    #[ORM\Column(name: "BD_Dotation0617", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0617 = null;

    #[ORM\Column(name: "BD_Dotation0618", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0618 = null;

    #[ORM\Column(name: "BD_Dotation0619", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0619 = null;

    #[ORM\Column(name: "BD_Dotation0620", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0620 = null;

    #[ORM\Column(name: "BD_Dotation0621", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0621 = null;

    #[ORM\Column(name: "BD_Dotation0622", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0622 = null;

    #[ORM\Column(name: "BD_Dotation0623", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0623 = null;

    #[ORM\Column(name: "BD_Dotation0624", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0624 = null;

    #[ORM\Column(name: "BD_Dotation0625", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0625 = null;

    #[ORM\Column(name: "BD_Dotation0626", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0626 = null;

    #[ORM\Column(name: "BD_Dotation0627", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0627 = null;

    #[ORM\Column(name: "BD_Dotation0628", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0628 = null;

    #[ORM\Column(name: "BD_Dotation0629", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0629 = null;

    #[ORM\Column(name: "BD_Dotation0630", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0630 = null;

    #[ORM\Column(name: "BD_Dotation0631", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0631 = null;

    #[ORM\Column(name: "BD_Dotation0632", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0632 = null;

    #[ORM\Column(name: "BD_Dotation0633", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0633 = null;

    #[ORM\Column(name: "BD_Dotation0634", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0634 = null;

    #[ORM\Column(name: "BD_Dotation0635", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0635 = null;

    #[ORM\Column(name: "BD_Dotation0636", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotation0636 = null;

    #[ORM\Column(name: "BD_DotationQ0101", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0101 = null;

    #[ORM\Column(name: "BD_DotationQ0102", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0102 = null;

    #[ORM\Column(name: "BD_DotationQ0103", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0103 = null;

    #[ORM\Column(name: "BD_DotationQ0104", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0104 = null;

    #[ORM\Column(name: "BD_DotationQ0105", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0105 = null;

    #[ORM\Column(name: "BD_DotationQ0106", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0106 = null;

    #[ORM\Column(name: "BD_DotationQ0107", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0107 = null;

    #[ORM\Column(name: "BD_DotationQ0108", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0108 = null;

    #[ORM\Column(name: "BD_DotationQ0109", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0109 = null;

    #[ORM\Column(name: "BD_DotationQ0110", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0110 = null;

    #[ORM\Column(name: "BD_DotationQ0111", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0111 = null;

    #[ORM\Column(name: "BD_DotationQ0112", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0112 = null;

    #[ORM\Column(name: "BD_DotationQ0113", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0113 = null;

    #[ORM\Column(name: "BD_DotationQ0114", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0114 = null;

    #[ORM\Column(name: "BD_DotationQ0115", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0115 = null;

    #[ORM\Column(name: "BD_DotationQ0116", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0116 = null;

    #[ORM\Column(name: "BD_DotationQ0117", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0117 = null;

    #[ORM\Column(name: "BD_DotationQ0118", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0118 = null;

    #[ORM\Column(name: "BD_DotationQ0119", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0119 = null;

    #[ORM\Column(name: "BD_DotationQ0120", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0120 = null;

    #[ORM\Column(name: "BD_DotationQ0121", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0121 = null;

    #[ORM\Column(name: "BD_DotationQ0122", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0122 = null;

    #[ORM\Column(name: "BD_DotationQ0123", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0123 = null;

    #[ORM\Column(name: "BD_DotationQ0124", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0124 = null;

    #[ORM\Column(name: "BD_DotationQ0125", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0125 = null;

    #[ORM\Column(name: "BD_DotationQ0126", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0126 = null;

    #[ORM\Column(name: "BD_DotationQ0127", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0127 = null;

    #[ORM\Column(name: "BD_DotationQ0128", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0128 = null;

    #[ORM\Column(name: "BD_DotationQ0129", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0129 = null;

    #[ORM\Column(name: "BD_DotationQ0130", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0130 = null;

    #[ORM\Column(name: "BD_DotationQ0131", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0131 = null;

    #[ORM\Column(name: "BD_DotationQ0132", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0132 = null;

    #[ORM\Column(name: "BD_DotationQ0133", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0133 = null;

    #[ORM\Column(name: "BD_DotationQ0134", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0134 = null;

    #[ORM\Column(name: "BD_DotationQ0135", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0135 = null;

    #[ORM\Column(name: "BD_DotationQ0136", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0136 = null;

    #[ORM\Column(name: "BD_DotationQ0201", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0201 = null;

    #[ORM\Column(name: "BD_DotationQ0202", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0202 = null;

    #[ORM\Column(name: "BD_DotationQ0203", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0203 = null;

    #[ORM\Column(name: "BD_DotationQ0204", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0204 = null;

    #[ORM\Column(name: "BD_DotationQ0205", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0205 = null;

    #[ORM\Column(name: "BD_DotationQ0206", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0206 = null;

    #[ORM\Column(name: "BD_DotationQ0207", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0207 = null;

    #[ORM\Column(name: "BD_DotationQ0208", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0208 = null;

    #[ORM\Column(name: "BD_DotationQ0209", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0209 = null;

    #[ORM\Column(name: "BD_DotationQ0210", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0210 = null;

    #[ORM\Column(name: "BD_DotationQ0211", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0211 = null;

    #[ORM\Column(name: "BD_DotationQ0212", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0212 = null;

    #[ORM\Column(name: "BD_DotationQ0213", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0213 = null;

    #[ORM\Column(name: "BD_DotationQ0214", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0214 = null;

    #[ORM\Column(name: "BD_DotationQ0215", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0215 = null;

    #[ORM\Column(name: "BD_DotationQ0216", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0216 = null;

    #[ORM\Column(name: "BD_DotationQ0217", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0217 = null;

    #[ORM\Column(name: "BD_DotationQ0218", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0218 = null;

    #[ORM\Column(name: "BD_DotationQ0219", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0219 = null;

    #[ORM\Column(name: "BD_DotationQ0220", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0220 = null;

    #[ORM\Column(name: "BD_DotationQ0221", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0221 = null;

    #[ORM\Column(name: "BD_DotationQ0222", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0222 = null;

    #[ORM\Column(name: "BD_DotationQ0223", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0223 = null;

    #[ORM\Column(name: "BD_DotationQ0224", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0224 = null;

    #[ORM\Column(name: "BD_DotationQ0225", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0225 = null;

    #[ORM\Column(name: "BD_DotationQ0226", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0226 = null;

    #[ORM\Column(name: "BD_DotationQ0227", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0227 = null;

    #[ORM\Column(name: "BD_DotationQ0228", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0228 = null;

    #[ORM\Column(name: "BD_DotationQ0229", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0229 = null;

    #[ORM\Column(name: "BD_DotationQ0230", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0230 = null;

    #[ORM\Column(name: "BD_DotationQ0231", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0231 = null;

    #[ORM\Column(name: "BD_DotationQ0232", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0232 = null;

    #[ORM\Column(name: "BD_DotationQ0233", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0233 = null;

    #[ORM\Column(name: "BD_DotationQ0234", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0234 = null;

    #[ORM\Column(name: "BD_DotationQ0235", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0235 = null;

    #[ORM\Column(name: "BD_DotationQ0236", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0236 = null;

    #[ORM\Column(name: "BD_DotationQ0301", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0301 = null;

    #[ORM\Column(name: "BD_DotationQ0302", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0302 = null;

    #[ORM\Column(name: "BD_DotationQ0303", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0303 = null;

    #[ORM\Column(name: "BD_DotationQ0304", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0304 = null;

    #[ORM\Column(name: "BD_DotationQ0305", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0305 = null;

    #[ORM\Column(name: "BD_DotationQ0306", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0306 = null;

    #[ORM\Column(name: "BD_DotationQ0307", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0307 = null;

    #[ORM\Column(name: "BD_DotationQ0308", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0308 = null;

    #[ORM\Column(name: "BD_DotationQ0309", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0309 = null;

    #[ORM\Column(name: "BD_DotationQ0310", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0310 = null;

    #[ORM\Column(name: "BD_DotationQ0311", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0311 = null;

    #[ORM\Column(name: "BD_DotationQ0312", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0312 = null;

    #[ORM\Column(name: "BD_DotationQ0313", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0313 = null;

    #[ORM\Column(name: "BD_DotationQ0314", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0314 = null;

    #[ORM\Column(name: "BD_DotationQ0315", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0315 = null;

    #[ORM\Column(name: "BD_DotationQ0316", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0316 = null;

    #[ORM\Column(name: "BD_DotationQ0317", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0317 = null;

    #[ORM\Column(name: "BD_DotationQ0318", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0318 = null;

    #[ORM\Column(name: "BD_DotationQ0319", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0319 = null;

    #[ORM\Column(name: "BD_DotationQ0320", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0320 = null;

    #[ORM\Column(name: "BD_DotationQ0321", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0321 = null;

    #[ORM\Column(name: "BD_DotationQ0322", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0322 = null;

    #[ORM\Column(name: "BD_DotationQ0323", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0323 = null;

    #[ORM\Column(name: "BD_DotationQ0324", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0324 = null;

    #[ORM\Column(name: "BD_DotationQ0325", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0325 = null;

    #[ORM\Column(name: "BD_DotationQ0326", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0326 = null;

    #[ORM\Column(name: "BD_DotationQ0327", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0327 = null;

    #[ORM\Column(name: "BD_DotationQ0328", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0328 = null;

    #[ORM\Column(name: "BD_DotationQ0329", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0329 = null;

    #[ORM\Column(name: "BD_DotationQ0330", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0330 = null;

    #[ORM\Column(name: "BD_DotationQ0331", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0331 = null;

    #[ORM\Column(name: "BD_DotationQ0332", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0332 = null;

    #[ORM\Column(name: "BD_DotationQ0333", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0333 = null;

    #[ORM\Column(name: "BD_DotationQ0334", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0334 = null;

    #[ORM\Column(name: "BD_DotationQ0335", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0335 = null;

    #[ORM\Column(name: "BD_DotationQ0336", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0336 = null;

    #[ORM\Column(name: "BD_DotationQ0401", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0401 = null;

    #[ORM\Column(name: "BD_DotationQ0402", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0402 = null;

    #[ORM\Column(name: "BD_DotationQ0403", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0403 = null;

    #[ORM\Column(name: "BD_DotationQ0404", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0404 = null;

    #[ORM\Column(name: "BD_DotationQ0405", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0405 = null;

    #[ORM\Column(name: "BD_DotationQ0406", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0406 = null;

    #[ORM\Column(name: "BD_DotationQ0407", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0407 = null;

    #[ORM\Column(name: "BD_DotationQ0408", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0408 = null;

    #[ORM\Column(name: "BD_DotationQ0409", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0409 = null;

    #[ORM\Column(name: "BD_DotationQ0410", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0410 = null;

    #[ORM\Column(name: "BD_DotationQ0411", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0411 = null;

    #[ORM\Column(name: "BD_DotationQ0412", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0412 = null;

    #[ORM\Column(name: "BD_DotationQ0413", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0413 = null;

    #[ORM\Column(name: "BD_DotationQ0414", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0414 = null;

    #[ORM\Column(name: "BD_DotationQ0415", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0415 = null;

    #[ORM\Column(name: "BD_DotationQ0416", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0416 = null;

    #[ORM\Column(name: "BD_DotationQ0417", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0417 = null;

    #[ORM\Column(name: "BD_DotationQ0418", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0418 = null;

    #[ORM\Column(name: "BD_DotationQ0419", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0419 = null;

    #[ORM\Column(name: "BD_DotationQ0420", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0420 = null;

    #[ORM\Column(name: "BD_DotationQ0421", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0421 = null;

    #[ORM\Column(name: "BD_DotationQ0422", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0422 = null;

    #[ORM\Column(name: "BD_DotationQ0423", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0423 = null;

    #[ORM\Column(name: "BD_DotationQ0424", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0424 = null;

    #[ORM\Column(name: "BD_DotationQ0425", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0425 = null;

    #[ORM\Column(name: "BD_DotationQ0426", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0426 = null;

    #[ORM\Column(name: "BD_DotationQ0427", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0427 = null;

    #[ORM\Column(name: "BD_DotationQ0428", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0428 = null;

    #[ORM\Column(name: "BD_DotationQ0429", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0429 = null;

    #[ORM\Column(name: "BD_DotationQ0430", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0430 = null;

    #[ORM\Column(name: "BD_DotationQ0431", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0431 = null;

    #[ORM\Column(name: "BD_DotationQ0432", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0432 = null;

    #[ORM\Column(name: "BD_DotationQ0433", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0433 = null;

    #[ORM\Column(name: "BD_DotationQ0434", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0434 = null;

    #[ORM\Column(name: "BD_DotationQ0435", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0435 = null;

    #[ORM\Column(name: "BD_DotationQ0436", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0436 = null;

    #[ORM\Column(name: "BD_DotationQ0501", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0501 = null;

    #[ORM\Column(name: "BD_DotationQ0502", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0502 = null;

    #[ORM\Column(name: "BD_DotationQ0503", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0503 = null;

    #[ORM\Column(name: "BD_DotationQ0504", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0504 = null;

    #[ORM\Column(name: "BD_DotationQ0505", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0505 = null;

    #[ORM\Column(name: "BD_DotationQ0506", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0506 = null;

    #[ORM\Column(name: "BD_DotationQ0507", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0507 = null;

    #[ORM\Column(name: "BD_DotationQ0508", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0508 = null;

    #[ORM\Column(name: "BD_DotationQ0509", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0509 = null;

    #[ORM\Column(name: "BD_DotationQ0510", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0510 = null;

    #[ORM\Column(name: "BD_DotationQ0511", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0511 = null;

    #[ORM\Column(name: "BD_DotationQ0512", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0512 = null;

    #[ORM\Column(name: "BD_DotationQ0513", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0513 = null;

    #[ORM\Column(name: "BD_DotationQ0514", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0514 = null;

    #[ORM\Column(name: "BD_DotationQ0515", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0515 = null;

    #[ORM\Column(name: "BD_DotationQ0516", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0516 = null;

    #[ORM\Column(name: "BD_DotationQ0517", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0517 = null;

    #[ORM\Column(name: "BD_DotationQ0518", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0518 = null;

    #[ORM\Column(name: "BD_DotationQ0519", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0519 = null;

    #[ORM\Column(name: "BD_DotationQ0520", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0520 = null;

    #[ORM\Column(name: "BD_DotationQ0521", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0521 = null;

    #[ORM\Column(name: "BD_DotationQ0522", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0522 = null;

    #[ORM\Column(name: "BD_DotationQ0523", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0523 = null;

    #[ORM\Column(name: "BD_DotationQ0524", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0524 = null;

    #[ORM\Column(name: "BD_DotationQ0525", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0525 = null;

    #[ORM\Column(name: "BD_DotationQ0526", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0526 = null;

    #[ORM\Column(name: "BD_DotationQ0527", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0527 = null;

    #[ORM\Column(name: "BD_DotationQ0528", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0528 = null;

    #[ORM\Column(name: "BD_DotationQ0529", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0529 = null;

    #[ORM\Column(name: "BD_DotationQ0530", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0530 = null;

    #[ORM\Column(name: "BD_DotationQ0531", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0531 = null;

    #[ORM\Column(name: "BD_DotationQ0532", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0532 = null;

    #[ORM\Column(name: "BD_DotationQ0533", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0533 = null;

    #[ORM\Column(name: "BD_DotationQ0534", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0534 = null;

    #[ORM\Column(name: "BD_DotationQ0535", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0535 = null;

    #[ORM\Column(name: "BD_DotationQ0536", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0536 = null;

    #[ORM\Column(name: "BD_DotationQ0601", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0601 = null;

    #[ORM\Column(name: "BD_DotationQ0602", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0602 = null;

    #[ORM\Column(name: "BD_DotationQ0603", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0603 = null;

    #[ORM\Column(name: "BD_DotationQ0604", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0604 = null;

    #[ORM\Column(name: "BD_DotationQ0605", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0605 = null;

    #[ORM\Column(name: "BD_DotationQ0606", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0606 = null;

    #[ORM\Column(name: "BD_DotationQ0607", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0607 = null;

    #[ORM\Column(name: "BD_DotationQ0608", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0608 = null;

    #[ORM\Column(name: "BD_DotationQ0609", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0609 = null;

    #[ORM\Column(name: "BD_DotationQ0610", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0610 = null;

    #[ORM\Column(name: "BD_DotationQ0611", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0611 = null;

    #[ORM\Column(name: "BD_DotationQ0612", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0612 = null;

    #[ORM\Column(name: "BD_DotationQ0613", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0613 = null;

    #[ORM\Column(name: "BD_DotationQ0614", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0614 = null;

    #[ORM\Column(name: "BD_DotationQ0615", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0615 = null;

    #[ORM\Column(name: "BD_DotationQ0616", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0616 = null;

    #[ORM\Column(name: "BD_DotationQ0617", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0617 = null;

    #[ORM\Column(name: "BD_DotationQ0618", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0618 = null;

    #[ORM\Column(name: "BD_DotationQ0619", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0619 = null;

    #[ORM\Column(name: "BD_DotationQ0620", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0620 = null;

    #[ORM\Column(name: "BD_DotationQ0621", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0621 = null;

    #[ORM\Column(name: "BD_DotationQ0622", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0622 = null;

    #[ORM\Column(name: "BD_DotationQ0623", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0623 = null;

    #[ORM\Column(name: "BD_DotationQ0624", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0624 = null;

    #[ORM\Column(name: "BD_DotationQ0625", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0625 = null;

    #[ORM\Column(name: "BD_DotationQ0626", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0626 = null;

    #[ORM\Column(name: "BD_DotationQ0627", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0627 = null;

    #[ORM\Column(name: "BD_DotationQ0628", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0628 = null;

    #[ORM\Column(name: "BD_DotationQ0629", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0629 = null;

    #[ORM\Column(name: "BD_DotationQ0630", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0630 = null;

    #[ORM\Column(name: "BD_DotationQ0631", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0631 = null;

    #[ORM\Column(name: "BD_DotationQ0632", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0632 = null;

    #[ORM\Column(name: "BD_DotationQ0633", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0633 = null;

    #[ORM\Column(name: "BD_DotationQ0634", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0634 = null;

    #[ORM\Column(name: "BD_DotationQ0635", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0635 = null;

    #[ORM\Column(name: "BD_DotationQ0636", type: Types::DECIMAL, precision: 24, scale: 6, nullable: true)]
    private ?string $bdDotationq0636 = null;

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

    public function getBdNo(): ?int
    {
        return $this->bdNo;
    }

    public function setBdNo(int $bdNo): static
    {
        $this->bdNo = $bdNo;

        return $this;
    }

    public function getBdNum(): ?string
    {
        return $this->bdNum;
    }

    public function setBdNum(string $bdNum): static
    {
        $this->bdNum = $bdNum;

        return $this;
    }

    public function getCbbdNum()
    {
        return $this->cbbdNum;
    }

    public function setCbbdNum($cbbdNum): static
    {
        $this->cbbdNum = $cbbdNum;

        return $this;
    }

    public function getBdIntitule(): ?string
    {
        return $this->bdIntitule;
    }

    public function setBdIntitule(?string $bdIntitule): static
    {
        $this->bdIntitule = $bdIntitule;

        return $this;
    }

    public function getCbbdIntitule()
    {
        return $this->cbbdIntitule;
    }

    public function setCbbdIntitule($cbbdIntitule): static
    {
        $this->cbbdIntitule = $cbbdIntitule;

        return $this;
    }

    public function getBdType(): ?int
    {
        return $this->bdType;
    }

    public function setBdType(?int $bdType): static
    {
        $this->bdType = $bdType;

        return $this;
    }

    public function getBdSens(): ?int
    {
        return $this->bdSens;
    }

    public function setBdSens(?int $bdSens): static
    {
        $this->bdSens = $bdSens;

        return $this;
    }

    public function getBdNumcentr(): ?string
    {
        return $this->bdNumcentr;
    }

    public function setBdNumcentr(?string $bdNumcentr): static
    {
        $this->bdNumcentr = $bdNumcentr;

        return $this;
    }

    public function getCbbdNumcentr()
    {
        return $this->cbbdNumcentr;
    }

    public function setCbbdNumcentr($cbbdNumcentr): static
    {
        $this->cbbdNumcentr = $cbbdNumcentr;

        return $this;
    }

    public function getBdTrepart(): ?int
    {
        return $this->bdTrepart;
    }

    public function setBdTrepart(?int $bdTrepart): static
    {
        $this->bdTrepart = $bdTrepart;

        return $this;
    }

    public function getBdVrepart(): ?string
    {
        return $this->bdVrepart;
    }

    public function setBdVrepart(?string $bdVrepart): static
    {
        $this->bdVrepart = $bdVrepart;

        return $this;
    }

    public function getCbbdVrepart()
    {
        return $this->cbbdVrepart;
    }

    public function setCbbdVrepart($cbbdVrepart): static
    {
        $this->cbbdVrepart = $cbbdVrepart;

        return $this;
    }

    public function getBdDotation0101(): ?string
    {
        return $this->bdDotation0101;
    }

    public function setBdDotation0101(?string $bdDotation0101): static
    {
        $this->bdDotation0101 = $bdDotation0101;

        return $this;
    }

    public function getBdDotation0102(): ?string
    {
        return $this->bdDotation0102;
    }

    public function setBdDotation0102(?string $bdDotation0102): static
    {
        $this->bdDotation0102 = $bdDotation0102;

        return $this;
    }

    public function getBdDotation0103(): ?string
    {
        return $this->bdDotation0103;
    }

    public function setBdDotation0103(?string $bdDotation0103): static
    {
        $this->bdDotation0103 = $bdDotation0103;

        return $this;
    }

    public function getBdDotation0104(): ?string
    {
        return $this->bdDotation0104;
    }

    public function setBdDotation0104(?string $bdDotation0104): static
    {
        $this->bdDotation0104 = $bdDotation0104;

        return $this;
    }

    public function getBdDotation0105(): ?string
    {
        return $this->bdDotation0105;
    }

    public function setBdDotation0105(?string $bdDotation0105): static
    {
        $this->bdDotation0105 = $bdDotation0105;

        return $this;
    }

    public function getBdDotation0106(): ?string
    {
        return $this->bdDotation0106;
    }

    public function setBdDotation0106(?string $bdDotation0106): static
    {
        $this->bdDotation0106 = $bdDotation0106;

        return $this;
    }

    public function getBdDotation0107(): ?string
    {
        return $this->bdDotation0107;
    }

    public function setBdDotation0107(?string $bdDotation0107): static
    {
        $this->bdDotation0107 = $bdDotation0107;

        return $this;
    }

    public function getBdDotation0108(): ?string
    {
        return $this->bdDotation0108;
    }

    public function setBdDotation0108(?string $bdDotation0108): static
    {
        $this->bdDotation0108 = $bdDotation0108;

        return $this;
    }

    public function getBdDotation0109(): ?string
    {
        return $this->bdDotation0109;
    }

    public function setBdDotation0109(?string $bdDotation0109): static
    {
        $this->bdDotation0109 = $bdDotation0109;

        return $this;
    }

    public function getBdDotation0110(): ?string
    {
        return $this->bdDotation0110;
    }

    public function setBdDotation0110(?string $bdDotation0110): static
    {
        $this->bdDotation0110 = $bdDotation0110;

        return $this;
    }

    public function getBdDotation0111(): ?string
    {
        return $this->bdDotation0111;
    }

    public function setBdDotation0111(?string $bdDotation0111): static
    {
        $this->bdDotation0111 = $bdDotation0111;

        return $this;
    }

    public function getBdDotation0112(): ?string
    {
        return $this->bdDotation0112;
    }

    public function setBdDotation0112(?string $bdDotation0112): static
    {
        $this->bdDotation0112 = $bdDotation0112;

        return $this;
    }

    public function getBdDotation0113(): ?string
    {
        return $this->bdDotation0113;
    }

    public function setBdDotation0113(?string $bdDotation0113): static
    {
        $this->bdDotation0113 = $bdDotation0113;

        return $this;
    }

    public function getBdDotation0114(): ?string
    {
        return $this->bdDotation0114;
    }

    public function setBdDotation0114(?string $bdDotation0114): static
    {
        $this->bdDotation0114 = $bdDotation0114;

        return $this;
    }

    public function getBdDotation0115(): ?string
    {
        return $this->bdDotation0115;
    }

    public function setBdDotation0115(?string $bdDotation0115): static
    {
        $this->bdDotation0115 = $bdDotation0115;

        return $this;
    }

    public function getBdDotation0116(): ?string
    {
        return $this->bdDotation0116;
    }

    public function setBdDotation0116(?string $bdDotation0116): static
    {
        $this->bdDotation0116 = $bdDotation0116;

        return $this;
    }

    public function getBdDotation0117(): ?string
    {
        return $this->bdDotation0117;
    }

    public function setBdDotation0117(?string $bdDotation0117): static
    {
        $this->bdDotation0117 = $bdDotation0117;

        return $this;
    }

    public function getBdDotation0118(): ?string
    {
        return $this->bdDotation0118;
    }

    public function setBdDotation0118(?string $bdDotation0118): static
    {
        $this->bdDotation0118 = $bdDotation0118;

        return $this;
    }

    public function getBdDotation0119(): ?string
    {
        return $this->bdDotation0119;
    }

    public function setBdDotation0119(?string $bdDotation0119): static
    {
        $this->bdDotation0119 = $bdDotation0119;

        return $this;
    }

    public function getBdDotation0120(): ?string
    {
        return $this->bdDotation0120;
    }

    public function setBdDotation0120(?string $bdDotation0120): static
    {
        $this->bdDotation0120 = $bdDotation0120;

        return $this;
    }

    public function getBdDotation0121(): ?string
    {
        return $this->bdDotation0121;
    }

    public function setBdDotation0121(?string $bdDotation0121): static
    {
        $this->bdDotation0121 = $bdDotation0121;

        return $this;
    }

    public function getBdDotation0122(): ?string
    {
        return $this->bdDotation0122;
    }

    public function setBdDotation0122(?string $bdDotation0122): static
    {
        $this->bdDotation0122 = $bdDotation0122;

        return $this;
    }

    public function getBdDotation0123(): ?string
    {
        return $this->bdDotation0123;
    }

    public function setBdDotation0123(?string $bdDotation0123): static
    {
        $this->bdDotation0123 = $bdDotation0123;

        return $this;
    }

    public function getBdDotation0124(): ?string
    {
        return $this->bdDotation0124;
    }

    public function setBdDotation0124(?string $bdDotation0124): static
    {
        $this->bdDotation0124 = $bdDotation0124;

        return $this;
    }

    public function getBdDotation0125(): ?string
    {
        return $this->bdDotation0125;
    }

    public function setBdDotation0125(?string $bdDotation0125): static
    {
        $this->bdDotation0125 = $bdDotation0125;

        return $this;
    }

    public function getBdDotation0126(): ?string
    {
        return $this->bdDotation0126;
    }

    public function setBdDotation0126(?string $bdDotation0126): static
    {
        $this->bdDotation0126 = $bdDotation0126;

        return $this;
    }

    public function getBdDotation0127(): ?string
    {
        return $this->bdDotation0127;
    }

    public function setBdDotation0127(?string $bdDotation0127): static
    {
        $this->bdDotation0127 = $bdDotation0127;

        return $this;
    }

    public function getBdDotation0128(): ?string
    {
        return $this->bdDotation0128;
    }

    public function setBdDotation0128(?string $bdDotation0128): static
    {
        $this->bdDotation0128 = $bdDotation0128;

        return $this;
    }

    public function getBdDotation0129(): ?string
    {
        return $this->bdDotation0129;
    }

    public function setBdDotation0129(?string $bdDotation0129): static
    {
        $this->bdDotation0129 = $bdDotation0129;

        return $this;
    }

    public function getBdDotation0130(): ?string
    {
        return $this->bdDotation0130;
    }

    public function setBdDotation0130(?string $bdDotation0130): static
    {
        $this->bdDotation0130 = $bdDotation0130;

        return $this;
    }

    public function getBdDotation0131(): ?string
    {
        return $this->bdDotation0131;
    }

    public function setBdDotation0131(?string $bdDotation0131): static
    {
        $this->bdDotation0131 = $bdDotation0131;

        return $this;
    }

    public function getBdDotation0132(): ?string
    {
        return $this->bdDotation0132;
    }

    public function setBdDotation0132(?string $bdDotation0132): static
    {
        $this->bdDotation0132 = $bdDotation0132;

        return $this;
    }

    public function getBdDotation0133(): ?string
    {
        return $this->bdDotation0133;
    }

    public function setBdDotation0133(?string $bdDotation0133): static
    {
        $this->bdDotation0133 = $bdDotation0133;

        return $this;
    }

    public function getBdDotation0134(): ?string
    {
        return $this->bdDotation0134;
    }

    public function setBdDotation0134(?string $bdDotation0134): static
    {
        $this->bdDotation0134 = $bdDotation0134;

        return $this;
    }

    public function getBdDotation0135(): ?string
    {
        return $this->bdDotation0135;
    }

    public function setBdDotation0135(?string $bdDotation0135): static
    {
        $this->bdDotation0135 = $bdDotation0135;

        return $this;
    }

    public function getBdDotation0136(): ?string
    {
        return $this->bdDotation0136;
    }

    public function setBdDotation0136(?string $bdDotation0136): static
    {
        $this->bdDotation0136 = $bdDotation0136;

        return $this;
    }

    public function getBdDotation0201(): ?string
    {
        return $this->bdDotation0201;
    }

    public function setBdDotation0201(?string $bdDotation0201): static
    {
        $this->bdDotation0201 = $bdDotation0201;

        return $this;
    }

    public function getBdDotation0202(): ?string
    {
        return $this->bdDotation0202;
    }

    public function setBdDotation0202(?string $bdDotation0202): static
    {
        $this->bdDotation0202 = $bdDotation0202;

        return $this;
    }

    public function getBdDotation0203(): ?string
    {
        return $this->bdDotation0203;
    }

    public function setBdDotation0203(?string $bdDotation0203): static
    {
        $this->bdDotation0203 = $bdDotation0203;

        return $this;
    }

    public function getBdDotation0204(): ?string
    {
        return $this->bdDotation0204;
    }

    public function setBdDotation0204(?string $bdDotation0204): static
    {
        $this->bdDotation0204 = $bdDotation0204;

        return $this;
    }

    public function getBdDotation0205(): ?string
    {
        return $this->bdDotation0205;
    }

    public function setBdDotation0205(?string $bdDotation0205): static
    {
        $this->bdDotation0205 = $bdDotation0205;

        return $this;
    }

    public function getBdDotation0206(): ?string
    {
        return $this->bdDotation0206;
    }

    public function setBdDotation0206(?string $bdDotation0206): static
    {
        $this->bdDotation0206 = $bdDotation0206;

        return $this;
    }

    public function getBdDotation0207(): ?string
    {
        return $this->bdDotation0207;
    }

    public function setBdDotation0207(?string $bdDotation0207): static
    {
        $this->bdDotation0207 = $bdDotation0207;

        return $this;
    }

    public function getBdDotation0208(): ?string
    {
        return $this->bdDotation0208;
    }

    public function setBdDotation0208(?string $bdDotation0208): static
    {
        $this->bdDotation0208 = $bdDotation0208;

        return $this;
    }

    public function getBdDotation0209(): ?string
    {
        return $this->bdDotation0209;
    }

    public function setBdDotation0209(?string $bdDotation0209): static
    {
        $this->bdDotation0209 = $bdDotation0209;

        return $this;
    }

    public function getBdDotation0210(): ?string
    {
        return $this->bdDotation0210;
    }

    public function setBdDotation0210(?string $bdDotation0210): static
    {
        $this->bdDotation0210 = $bdDotation0210;

        return $this;
    }

    public function getBdDotation0211(): ?string
    {
        return $this->bdDotation0211;
    }

    public function setBdDotation0211(?string $bdDotation0211): static
    {
        $this->bdDotation0211 = $bdDotation0211;

        return $this;
    }

    public function getBdDotation0212(): ?string
    {
        return $this->bdDotation0212;
    }

    public function setBdDotation0212(?string $bdDotation0212): static
    {
        $this->bdDotation0212 = $bdDotation0212;

        return $this;
    }

    public function getBdDotation0213(): ?string
    {
        return $this->bdDotation0213;
    }

    public function setBdDotation0213(?string $bdDotation0213): static
    {
        $this->bdDotation0213 = $bdDotation0213;

        return $this;
    }

    public function getBdDotation0214(): ?string
    {
        return $this->bdDotation0214;
    }

    public function setBdDotation0214(?string $bdDotation0214): static
    {
        $this->bdDotation0214 = $bdDotation0214;

        return $this;
    }

    public function getBdDotation0215(): ?string
    {
        return $this->bdDotation0215;
    }

    public function setBdDotation0215(?string $bdDotation0215): static
    {
        $this->bdDotation0215 = $bdDotation0215;

        return $this;
    }

    public function getBdDotation0216(): ?string
    {
        return $this->bdDotation0216;
    }

    public function setBdDotation0216(?string $bdDotation0216): static
    {
        $this->bdDotation0216 = $bdDotation0216;

        return $this;
    }

    public function getBdDotation0217(): ?string
    {
        return $this->bdDotation0217;
    }

    public function setBdDotation0217(?string $bdDotation0217): static
    {
        $this->bdDotation0217 = $bdDotation0217;

        return $this;
    }

    public function getBdDotation0218(): ?string
    {
        return $this->bdDotation0218;
    }

    public function setBdDotation0218(?string $bdDotation0218): static
    {
        $this->bdDotation0218 = $bdDotation0218;

        return $this;
    }

    public function getBdDotation0219(): ?string
    {
        return $this->bdDotation0219;
    }

    public function setBdDotation0219(?string $bdDotation0219): static
    {
        $this->bdDotation0219 = $bdDotation0219;

        return $this;
    }

    public function getBdDotation0220(): ?string
    {
        return $this->bdDotation0220;
    }

    public function setBdDotation0220(?string $bdDotation0220): static
    {
        $this->bdDotation0220 = $bdDotation0220;

        return $this;
    }

    public function getBdDotation0221(): ?string
    {
        return $this->bdDotation0221;
    }

    public function setBdDotation0221(?string $bdDotation0221): static
    {
        $this->bdDotation0221 = $bdDotation0221;

        return $this;
    }

    public function getBdDotation0222(): ?string
    {
        return $this->bdDotation0222;
    }

    public function setBdDotation0222(?string $bdDotation0222): static
    {
        $this->bdDotation0222 = $bdDotation0222;

        return $this;
    }

    public function getBdDotation0223(): ?string
    {
        return $this->bdDotation0223;
    }

    public function setBdDotation0223(?string $bdDotation0223): static
    {
        $this->bdDotation0223 = $bdDotation0223;

        return $this;
    }

    public function getBdDotation0224(): ?string
    {
        return $this->bdDotation0224;
    }

    public function setBdDotation0224(?string $bdDotation0224): static
    {
        $this->bdDotation0224 = $bdDotation0224;

        return $this;
    }

    public function getBdDotation0225(): ?string
    {
        return $this->bdDotation0225;
    }

    public function setBdDotation0225(?string $bdDotation0225): static
    {
        $this->bdDotation0225 = $bdDotation0225;

        return $this;
    }

    public function getBdDotation0226(): ?string
    {
        return $this->bdDotation0226;
    }

    public function setBdDotation0226(?string $bdDotation0226): static
    {
        $this->bdDotation0226 = $bdDotation0226;

        return $this;
    }

    public function getBdDotation0227(): ?string
    {
        return $this->bdDotation0227;
    }

    public function setBdDotation0227(?string $bdDotation0227): static
    {
        $this->bdDotation0227 = $bdDotation0227;

        return $this;
    }

    public function getBdDotation0228(): ?string
    {
        return $this->bdDotation0228;
    }

    public function setBdDotation0228(?string $bdDotation0228): static
    {
        $this->bdDotation0228 = $bdDotation0228;

        return $this;
    }

    public function getBdDotation0229(): ?string
    {
        return $this->bdDotation0229;
    }

    public function setBdDotation0229(?string $bdDotation0229): static
    {
        $this->bdDotation0229 = $bdDotation0229;

        return $this;
    }

    public function getBdDotation0230(): ?string
    {
        return $this->bdDotation0230;
    }

    public function setBdDotation0230(?string $bdDotation0230): static
    {
        $this->bdDotation0230 = $bdDotation0230;

        return $this;
    }

    public function getBdDotation0231(): ?string
    {
        return $this->bdDotation0231;
    }

    public function setBdDotation0231(?string $bdDotation0231): static
    {
        $this->bdDotation0231 = $bdDotation0231;

        return $this;
    }

    public function getBdDotation0232(): ?string
    {
        return $this->bdDotation0232;
    }

    public function setBdDotation0232(?string $bdDotation0232): static
    {
        $this->bdDotation0232 = $bdDotation0232;

        return $this;
    }

    public function getBdDotation0233(): ?string
    {
        return $this->bdDotation0233;
    }

    public function setBdDotation0233(?string $bdDotation0233): static
    {
        $this->bdDotation0233 = $bdDotation0233;

        return $this;
    }

    public function getBdDotation0234(): ?string
    {
        return $this->bdDotation0234;
    }

    public function setBdDotation0234(?string $bdDotation0234): static
    {
        $this->bdDotation0234 = $bdDotation0234;

        return $this;
    }

    public function getBdDotation0235(): ?string
    {
        return $this->bdDotation0235;
    }

    public function setBdDotation0235(?string $bdDotation0235): static
    {
        $this->bdDotation0235 = $bdDotation0235;

        return $this;
    }

    public function getBdDotation0236(): ?string
    {
        return $this->bdDotation0236;
    }

    public function setBdDotation0236(?string $bdDotation0236): static
    {
        $this->bdDotation0236 = $bdDotation0236;

        return $this;
    }

    public function getBdDotation0301(): ?string
    {
        return $this->bdDotation0301;
    }

    public function setBdDotation0301(?string $bdDotation0301): static
    {
        $this->bdDotation0301 = $bdDotation0301;

        return $this;
    }

    public function getBdDotation0302(): ?string
    {
        return $this->bdDotation0302;
    }

    public function setBdDotation0302(?string $bdDotation0302): static
    {
        $this->bdDotation0302 = $bdDotation0302;

        return $this;
    }

    public function getBdDotation0303(): ?string
    {
        return $this->bdDotation0303;
    }

    public function setBdDotation0303(?string $bdDotation0303): static
    {
        $this->bdDotation0303 = $bdDotation0303;

        return $this;
    }

    public function getBdDotation0304(): ?string
    {
        return $this->bdDotation0304;
    }

    public function setBdDotation0304(?string $bdDotation0304): static
    {
        $this->bdDotation0304 = $bdDotation0304;

        return $this;
    }

    public function getBdDotation0305(): ?string
    {
        return $this->bdDotation0305;
    }

    public function setBdDotation0305(?string $bdDotation0305): static
    {
        $this->bdDotation0305 = $bdDotation0305;

        return $this;
    }

    public function getBdDotation0306(): ?string
    {
        return $this->bdDotation0306;
    }

    public function setBdDotation0306(?string $bdDotation0306): static
    {
        $this->bdDotation0306 = $bdDotation0306;

        return $this;
    }

    public function getBdDotation0307(): ?string
    {
        return $this->bdDotation0307;
    }

    public function setBdDotation0307(?string $bdDotation0307): static
    {
        $this->bdDotation0307 = $bdDotation0307;

        return $this;
    }

    public function getBdDotation0308(): ?string
    {
        return $this->bdDotation0308;
    }

    public function setBdDotation0308(?string $bdDotation0308): static
    {
        $this->bdDotation0308 = $bdDotation0308;

        return $this;
    }

    public function getBdDotation0309(): ?string
    {
        return $this->bdDotation0309;
    }

    public function setBdDotation0309(?string $bdDotation0309): static
    {
        $this->bdDotation0309 = $bdDotation0309;

        return $this;
    }

    public function getBdDotation0310(): ?string
    {
        return $this->bdDotation0310;
    }

    public function setBdDotation0310(?string $bdDotation0310): static
    {
        $this->bdDotation0310 = $bdDotation0310;

        return $this;
    }

    public function getBdDotation0311(): ?string
    {
        return $this->bdDotation0311;
    }

    public function setBdDotation0311(?string $bdDotation0311): static
    {
        $this->bdDotation0311 = $bdDotation0311;

        return $this;
    }

    public function getBdDotation0312(): ?string
    {
        return $this->bdDotation0312;
    }

    public function setBdDotation0312(?string $bdDotation0312): static
    {
        $this->bdDotation0312 = $bdDotation0312;

        return $this;
    }

    public function getBdDotation0313(): ?string
    {
        return $this->bdDotation0313;
    }

    public function setBdDotation0313(?string $bdDotation0313): static
    {
        $this->bdDotation0313 = $bdDotation0313;

        return $this;
    }

    public function getBdDotation0314(): ?string
    {
        return $this->bdDotation0314;
    }

    public function setBdDotation0314(?string $bdDotation0314): static
    {
        $this->bdDotation0314 = $bdDotation0314;

        return $this;
    }

    public function getBdDotation0315(): ?string
    {
        return $this->bdDotation0315;
    }

    public function setBdDotation0315(?string $bdDotation0315): static
    {
        $this->bdDotation0315 = $bdDotation0315;

        return $this;
    }

    public function getBdDotation0316(): ?string
    {
        return $this->bdDotation0316;
    }

    public function setBdDotation0316(?string $bdDotation0316): static
    {
        $this->bdDotation0316 = $bdDotation0316;

        return $this;
    }

    public function getBdDotation0317(): ?string
    {
        return $this->bdDotation0317;
    }

    public function setBdDotation0317(?string $bdDotation0317): static
    {
        $this->bdDotation0317 = $bdDotation0317;

        return $this;
    }

    public function getBdDotation0318(): ?string
    {
        return $this->bdDotation0318;
    }

    public function setBdDotation0318(?string $bdDotation0318): static
    {
        $this->bdDotation0318 = $bdDotation0318;

        return $this;
    }

    public function getBdDotation0319(): ?string
    {
        return $this->bdDotation0319;
    }

    public function setBdDotation0319(?string $bdDotation0319): static
    {
        $this->bdDotation0319 = $bdDotation0319;

        return $this;
    }

    public function getBdDotation0320(): ?string
    {
        return $this->bdDotation0320;
    }

    public function setBdDotation0320(?string $bdDotation0320): static
    {
        $this->bdDotation0320 = $bdDotation0320;

        return $this;
    }

    public function getBdDotation0321(): ?string
    {
        return $this->bdDotation0321;
    }

    public function setBdDotation0321(?string $bdDotation0321): static
    {
        $this->bdDotation0321 = $bdDotation0321;

        return $this;
    }

    public function getBdDotation0322(): ?string
    {
        return $this->bdDotation0322;
    }

    public function setBdDotation0322(?string $bdDotation0322): static
    {
        $this->bdDotation0322 = $bdDotation0322;

        return $this;
    }

    public function getBdDotation0323(): ?string
    {
        return $this->bdDotation0323;
    }

    public function setBdDotation0323(?string $bdDotation0323): static
    {
        $this->bdDotation0323 = $bdDotation0323;

        return $this;
    }

    public function getBdDotation0324(): ?string
    {
        return $this->bdDotation0324;
    }

    public function setBdDotation0324(?string $bdDotation0324): static
    {
        $this->bdDotation0324 = $bdDotation0324;

        return $this;
    }

    public function getBdDotation0325(): ?string
    {
        return $this->bdDotation0325;
    }

    public function setBdDotation0325(?string $bdDotation0325): static
    {
        $this->bdDotation0325 = $bdDotation0325;

        return $this;
    }

    public function getBdDotation0326(): ?string
    {
        return $this->bdDotation0326;
    }

    public function setBdDotation0326(?string $bdDotation0326): static
    {
        $this->bdDotation0326 = $bdDotation0326;

        return $this;
    }

    public function getBdDotation0327(): ?string
    {
        return $this->bdDotation0327;
    }

    public function setBdDotation0327(?string $bdDotation0327): static
    {
        $this->bdDotation0327 = $bdDotation0327;

        return $this;
    }

    public function getBdDotation0328(): ?string
    {
        return $this->bdDotation0328;
    }

    public function setBdDotation0328(?string $bdDotation0328): static
    {
        $this->bdDotation0328 = $bdDotation0328;

        return $this;
    }

    public function getBdDotation0329(): ?string
    {
        return $this->bdDotation0329;
    }

    public function setBdDotation0329(?string $bdDotation0329): static
    {
        $this->bdDotation0329 = $bdDotation0329;

        return $this;
    }

    public function getBdDotation0330(): ?string
    {
        return $this->bdDotation0330;
    }

    public function setBdDotation0330(?string $bdDotation0330): static
    {
        $this->bdDotation0330 = $bdDotation0330;

        return $this;
    }

    public function getBdDotation0331(): ?string
    {
        return $this->bdDotation0331;
    }

    public function setBdDotation0331(?string $bdDotation0331): static
    {
        $this->bdDotation0331 = $bdDotation0331;

        return $this;
    }

    public function getBdDotation0332(): ?string
    {
        return $this->bdDotation0332;
    }

    public function setBdDotation0332(?string $bdDotation0332): static
    {
        $this->bdDotation0332 = $bdDotation0332;

        return $this;
    }

    public function getBdDotation0333(): ?string
    {
        return $this->bdDotation0333;
    }

    public function setBdDotation0333(?string $bdDotation0333): static
    {
        $this->bdDotation0333 = $bdDotation0333;

        return $this;
    }

    public function getBdDotation0334(): ?string
    {
        return $this->bdDotation0334;
    }

    public function setBdDotation0334(?string $bdDotation0334): static
    {
        $this->bdDotation0334 = $bdDotation0334;

        return $this;
    }

    public function getBdDotation0335(): ?string
    {
        return $this->bdDotation0335;
    }

    public function setBdDotation0335(?string $bdDotation0335): static
    {
        $this->bdDotation0335 = $bdDotation0335;

        return $this;
    }

    public function getBdDotation0336(): ?string
    {
        return $this->bdDotation0336;
    }

    public function setBdDotation0336(?string $bdDotation0336): static
    {
        $this->bdDotation0336 = $bdDotation0336;

        return $this;
    }

    public function getBdDotation0401(): ?string
    {
        return $this->bdDotation0401;
    }

    public function setBdDotation0401(?string $bdDotation0401): static
    {
        $this->bdDotation0401 = $bdDotation0401;

        return $this;
    }

    public function getBdDotation0402(): ?string
    {
        return $this->bdDotation0402;
    }

    public function setBdDotation0402(?string $bdDotation0402): static
    {
        $this->bdDotation0402 = $bdDotation0402;

        return $this;
    }

    public function getBdDotation0403(): ?string
    {
        return $this->bdDotation0403;
    }

    public function setBdDotation0403(?string $bdDotation0403): static
    {
        $this->bdDotation0403 = $bdDotation0403;

        return $this;
    }

    public function getBdDotation0404(): ?string
    {
        return $this->bdDotation0404;
    }

    public function setBdDotation0404(?string $bdDotation0404): static
    {
        $this->bdDotation0404 = $bdDotation0404;

        return $this;
    }

    public function getBdDotation0405(): ?string
    {
        return $this->bdDotation0405;
    }

    public function setBdDotation0405(?string $bdDotation0405): static
    {
        $this->bdDotation0405 = $bdDotation0405;

        return $this;
    }

    public function getBdDotation0406(): ?string
    {
        return $this->bdDotation0406;
    }

    public function setBdDotation0406(?string $bdDotation0406): static
    {
        $this->bdDotation0406 = $bdDotation0406;

        return $this;
    }

    public function getBdDotation0407(): ?string
    {
        return $this->bdDotation0407;
    }

    public function setBdDotation0407(?string $bdDotation0407): static
    {
        $this->bdDotation0407 = $bdDotation0407;

        return $this;
    }

    public function getBdDotation0408(): ?string
    {
        return $this->bdDotation0408;
    }

    public function setBdDotation0408(?string $bdDotation0408): static
    {
        $this->bdDotation0408 = $bdDotation0408;

        return $this;
    }

    public function getBdDotation0409(): ?string
    {
        return $this->bdDotation0409;
    }

    public function setBdDotation0409(?string $bdDotation0409): static
    {
        $this->bdDotation0409 = $bdDotation0409;

        return $this;
    }

    public function getBdDotation0410(): ?string
    {
        return $this->bdDotation0410;
    }

    public function setBdDotation0410(?string $bdDotation0410): static
    {
        $this->bdDotation0410 = $bdDotation0410;

        return $this;
    }

    public function getBdDotation0411(): ?string
    {
        return $this->bdDotation0411;
    }

    public function setBdDotation0411(?string $bdDotation0411): static
    {
        $this->bdDotation0411 = $bdDotation0411;

        return $this;
    }

    public function getBdDotation0412(): ?string
    {
        return $this->bdDotation0412;
    }

    public function setBdDotation0412(?string $bdDotation0412): static
    {
        $this->bdDotation0412 = $bdDotation0412;

        return $this;
    }

    public function getBdDotation0413(): ?string
    {
        return $this->bdDotation0413;
    }

    public function setBdDotation0413(?string $bdDotation0413): static
    {
        $this->bdDotation0413 = $bdDotation0413;

        return $this;
    }

    public function getBdDotation0414(): ?string
    {
        return $this->bdDotation0414;
    }

    public function setBdDotation0414(?string $bdDotation0414): static
    {
        $this->bdDotation0414 = $bdDotation0414;

        return $this;
    }

    public function getBdDotation0415(): ?string
    {
        return $this->bdDotation0415;
    }

    public function setBdDotation0415(?string $bdDotation0415): static
    {
        $this->bdDotation0415 = $bdDotation0415;

        return $this;
    }

    public function getBdDotation0416(): ?string
    {
        return $this->bdDotation0416;
    }

    public function setBdDotation0416(?string $bdDotation0416): static
    {
        $this->bdDotation0416 = $bdDotation0416;

        return $this;
    }

    public function getBdDotation0417(): ?string
    {
        return $this->bdDotation0417;
    }

    public function setBdDotation0417(?string $bdDotation0417): static
    {
        $this->bdDotation0417 = $bdDotation0417;

        return $this;
    }

    public function getBdDotation0418(): ?string
    {
        return $this->bdDotation0418;
    }

    public function setBdDotation0418(?string $bdDotation0418): static
    {
        $this->bdDotation0418 = $bdDotation0418;

        return $this;
    }

    public function getBdDotation0419(): ?string
    {
        return $this->bdDotation0419;
    }

    public function setBdDotation0419(?string $bdDotation0419): static
    {
        $this->bdDotation0419 = $bdDotation0419;

        return $this;
    }

    public function getBdDotation0420(): ?string
    {
        return $this->bdDotation0420;
    }

    public function setBdDotation0420(?string $bdDotation0420): static
    {
        $this->bdDotation0420 = $bdDotation0420;

        return $this;
    }

    public function getBdDotation0421(): ?string
    {
        return $this->bdDotation0421;
    }

    public function setBdDotation0421(?string $bdDotation0421): static
    {
        $this->bdDotation0421 = $bdDotation0421;

        return $this;
    }

    public function getBdDotation0422(): ?string
    {
        return $this->bdDotation0422;
    }

    public function setBdDotation0422(?string $bdDotation0422): static
    {
        $this->bdDotation0422 = $bdDotation0422;

        return $this;
    }

    public function getBdDotation0423(): ?string
    {
        return $this->bdDotation0423;
    }

    public function setBdDotation0423(?string $bdDotation0423): static
    {
        $this->bdDotation0423 = $bdDotation0423;

        return $this;
    }

    public function getBdDotation0424(): ?string
    {
        return $this->bdDotation0424;
    }

    public function setBdDotation0424(?string $bdDotation0424): static
    {
        $this->bdDotation0424 = $bdDotation0424;

        return $this;
    }

    public function getBdDotation0425(): ?string
    {
        return $this->bdDotation0425;
    }

    public function setBdDotation0425(?string $bdDotation0425): static
    {
        $this->bdDotation0425 = $bdDotation0425;

        return $this;
    }

    public function getBdDotation0426(): ?string
    {
        return $this->bdDotation0426;
    }

    public function setBdDotation0426(?string $bdDotation0426): static
    {
        $this->bdDotation0426 = $bdDotation0426;

        return $this;
    }

    public function getBdDotation0427(): ?string
    {
        return $this->bdDotation0427;
    }

    public function setBdDotation0427(?string $bdDotation0427): static
    {
        $this->bdDotation0427 = $bdDotation0427;

        return $this;
    }

    public function getBdDotation0428(): ?string
    {
        return $this->bdDotation0428;
    }

    public function setBdDotation0428(?string $bdDotation0428): static
    {
        $this->bdDotation0428 = $bdDotation0428;

        return $this;
    }

    public function getBdDotation0429(): ?string
    {
        return $this->bdDotation0429;
    }

    public function setBdDotation0429(?string $bdDotation0429): static
    {
        $this->bdDotation0429 = $bdDotation0429;

        return $this;
    }

    public function getBdDotation0430(): ?string
    {
        return $this->bdDotation0430;
    }

    public function setBdDotation0430(?string $bdDotation0430): static
    {
        $this->bdDotation0430 = $bdDotation0430;

        return $this;
    }

    public function getBdDotation0431(): ?string
    {
        return $this->bdDotation0431;
    }

    public function setBdDotation0431(?string $bdDotation0431): static
    {
        $this->bdDotation0431 = $bdDotation0431;

        return $this;
    }

    public function getBdDotation0432(): ?string
    {
        return $this->bdDotation0432;
    }

    public function setBdDotation0432(?string $bdDotation0432): static
    {
        $this->bdDotation0432 = $bdDotation0432;

        return $this;
    }

    public function getBdDotation0433(): ?string
    {
        return $this->bdDotation0433;
    }

    public function setBdDotation0433(?string $bdDotation0433): static
    {
        $this->bdDotation0433 = $bdDotation0433;

        return $this;
    }

    public function getBdDotation0434(): ?string
    {
        return $this->bdDotation0434;
    }

    public function setBdDotation0434(?string $bdDotation0434): static
    {
        $this->bdDotation0434 = $bdDotation0434;

        return $this;
    }

    public function getBdDotation0435(): ?string
    {
        return $this->bdDotation0435;
    }

    public function setBdDotation0435(?string $bdDotation0435): static
    {
        $this->bdDotation0435 = $bdDotation0435;

        return $this;
    }

    public function getBdDotation0436(): ?string
    {
        return $this->bdDotation0436;
    }

    public function setBdDotation0436(?string $bdDotation0436): static
    {
        $this->bdDotation0436 = $bdDotation0436;

        return $this;
    }

    public function getBdDotation0501(): ?string
    {
        return $this->bdDotation0501;
    }

    public function setBdDotation0501(?string $bdDotation0501): static
    {
        $this->bdDotation0501 = $bdDotation0501;

        return $this;
    }

    public function getBdDotation0502(): ?string
    {
        return $this->bdDotation0502;
    }

    public function setBdDotation0502(?string $bdDotation0502): static
    {
        $this->bdDotation0502 = $bdDotation0502;

        return $this;
    }

    public function getBdDotation0503(): ?string
    {
        return $this->bdDotation0503;
    }

    public function setBdDotation0503(?string $bdDotation0503): static
    {
        $this->bdDotation0503 = $bdDotation0503;

        return $this;
    }

    public function getBdDotation0504(): ?string
    {
        return $this->bdDotation0504;
    }

    public function setBdDotation0504(?string $bdDotation0504): static
    {
        $this->bdDotation0504 = $bdDotation0504;

        return $this;
    }

    public function getBdDotation0505(): ?string
    {
        return $this->bdDotation0505;
    }

    public function setBdDotation0505(?string $bdDotation0505): static
    {
        $this->bdDotation0505 = $bdDotation0505;

        return $this;
    }

    public function getBdDotation0506(): ?string
    {
        return $this->bdDotation0506;
    }

    public function setBdDotation0506(?string $bdDotation0506): static
    {
        $this->bdDotation0506 = $bdDotation0506;

        return $this;
    }

    public function getBdDotation0507(): ?string
    {
        return $this->bdDotation0507;
    }

    public function setBdDotation0507(?string $bdDotation0507): static
    {
        $this->bdDotation0507 = $bdDotation0507;

        return $this;
    }

    public function getBdDotation0508(): ?string
    {
        return $this->bdDotation0508;
    }

    public function setBdDotation0508(?string $bdDotation0508): static
    {
        $this->bdDotation0508 = $bdDotation0508;

        return $this;
    }

    public function getBdDotation0509(): ?string
    {
        return $this->bdDotation0509;
    }

    public function setBdDotation0509(?string $bdDotation0509): static
    {
        $this->bdDotation0509 = $bdDotation0509;

        return $this;
    }

    public function getBdDotation0510(): ?string
    {
        return $this->bdDotation0510;
    }

    public function setBdDotation0510(?string $bdDotation0510): static
    {
        $this->bdDotation0510 = $bdDotation0510;

        return $this;
    }

    public function getBdDotation0511(): ?string
    {
        return $this->bdDotation0511;
    }

    public function setBdDotation0511(?string $bdDotation0511): static
    {
        $this->bdDotation0511 = $bdDotation0511;

        return $this;
    }

    public function getBdDotation0512(): ?string
    {
        return $this->bdDotation0512;
    }

    public function setBdDotation0512(?string $bdDotation0512): static
    {
        $this->bdDotation0512 = $bdDotation0512;

        return $this;
    }

    public function getBdDotation0513(): ?string
    {
        return $this->bdDotation0513;
    }

    public function setBdDotation0513(?string $bdDotation0513): static
    {
        $this->bdDotation0513 = $bdDotation0513;

        return $this;
    }

    public function getBdDotation0514(): ?string
    {
        return $this->bdDotation0514;
    }

    public function setBdDotation0514(?string $bdDotation0514): static
    {
        $this->bdDotation0514 = $bdDotation0514;

        return $this;
    }

    public function getBdDotation0515(): ?string
    {
        return $this->bdDotation0515;
    }

    public function setBdDotation0515(?string $bdDotation0515): static
    {
        $this->bdDotation0515 = $bdDotation0515;

        return $this;
    }

    public function getBdDotation0516(): ?string
    {
        return $this->bdDotation0516;
    }

    public function setBdDotation0516(?string $bdDotation0516): static
    {
        $this->bdDotation0516 = $bdDotation0516;

        return $this;
    }

    public function getBdDotation0517(): ?string
    {
        return $this->bdDotation0517;
    }

    public function setBdDotation0517(?string $bdDotation0517): static
    {
        $this->bdDotation0517 = $bdDotation0517;

        return $this;
    }

    public function getBdDotation0518(): ?string
    {
        return $this->bdDotation0518;
    }

    public function setBdDotation0518(?string $bdDotation0518): static
    {
        $this->bdDotation0518 = $bdDotation0518;

        return $this;
    }

    public function getBdDotation0519(): ?string
    {
        return $this->bdDotation0519;
    }

    public function setBdDotation0519(?string $bdDotation0519): static
    {
        $this->bdDotation0519 = $bdDotation0519;

        return $this;
    }

    public function getBdDotation0520(): ?string
    {
        return $this->bdDotation0520;
    }

    public function setBdDotation0520(?string $bdDotation0520): static
    {
        $this->bdDotation0520 = $bdDotation0520;

        return $this;
    }

    public function getBdDotation0521(): ?string
    {
        return $this->bdDotation0521;
    }

    public function setBdDotation0521(?string $bdDotation0521): static
    {
        $this->bdDotation0521 = $bdDotation0521;

        return $this;
    }

    public function getBdDotation0522(): ?string
    {
        return $this->bdDotation0522;
    }

    public function setBdDotation0522(?string $bdDotation0522): static
    {
        $this->bdDotation0522 = $bdDotation0522;

        return $this;
    }

    public function getBdDotation0523(): ?string
    {
        return $this->bdDotation0523;
    }

    public function setBdDotation0523(?string $bdDotation0523): static
    {
        $this->bdDotation0523 = $bdDotation0523;

        return $this;
    }

    public function getBdDotation0524(): ?string
    {
        return $this->bdDotation0524;
    }

    public function setBdDotation0524(?string $bdDotation0524): static
    {
        $this->bdDotation0524 = $bdDotation0524;

        return $this;
    }

    public function getBdDotation0525(): ?string
    {
        return $this->bdDotation0525;
    }

    public function setBdDotation0525(?string $bdDotation0525): static
    {
        $this->bdDotation0525 = $bdDotation0525;

        return $this;
    }

    public function getBdDotation0526(): ?string
    {
        return $this->bdDotation0526;
    }

    public function setBdDotation0526(?string $bdDotation0526): static
    {
        $this->bdDotation0526 = $bdDotation0526;

        return $this;
    }

    public function getBdDotation0527(): ?string
    {
        return $this->bdDotation0527;
    }

    public function setBdDotation0527(?string $bdDotation0527): static
    {
        $this->bdDotation0527 = $bdDotation0527;

        return $this;
    }

    public function getBdDotation0528(): ?string
    {
        return $this->bdDotation0528;
    }

    public function setBdDotation0528(?string $bdDotation0528): static
    {
        $this->bdDotation0528 = $bdDotation0528;

        return $this;
    }

    public function getBdDotation0529(): ?string
    {
        return $this->bdDotation0529;
    }

    public function setBdDotation0529(?string $bdDotation0529): static
    {
        $this->bdDotation0529 = $bdDotation0529;

        return $this;
    }

    public function getBdDotation0530(): ?string
    {
        return $this->bdDotation0530;
    }

    public function setBdDotation0530(?string $bdDotation0530): static
    {
        $this->bdDotation0530 = $bdDotation0530;

        return $this;
    }

    public function getBdDotation0531(): ?string
    {
        return $this->bdDotation0531;
    }

    public function setBdDotation0531(?string $bdDotation0531): static
    {
        $this->bdDotation0531 = $bdDotation0531;

        return $this;
    }

    public function getBdDotation0532(): ?string
    {
        return $this->bdDotation0532;
    }

    public function setBdDotation0532(?string $bdDotation0532): static
    {
        $this->bdDotation0532 = $bdDotation0532;

        return $this;
    }

    public function getBdDotation0533(): ?string
    {
        return $this->bdDotation0533;
    }

    public function setBdDotation0533(?string $bdDotation0533): static
    {
        $this->bdDotation0533 = $bdDotation0533;

        return $this;
    }

    public function getBdDotation0534(): ?string
    {
        return $this->bdDotation0534;
    }

    public function setBdDotation0534(?string $bdDotation0534): static
    {
        $this->bdDotation0534 = $bdDotation0534;

        return $this;
    }

    public function getBdDotation0535(): ?string
    {
        return $this->bdDotation0535;
    }

    public function setBdDotation0535(?string $bdDotation0535): static
    {
        $this->bdDotation0535 = $bdDotation0535;

        return $this;
    }

    public function getBdDotation0536(): ?string
    {
        return $this->bdDotation0536;
    }

    public function setBdDotation0536(?string $bdDotation0536): static
    {
        $this->bdDotation0536 = $bdDotation0536;

        return $this;
    }

    public function getBdDotation0601(): ?string
    {
        return $this->bdDotation0601;
    }

    public function setBdDotation0601(?string $bdDotation0601): static
    {
        $this->bdDotation0601 = $bdDotation0601;

        return $this;
    }

    public function getBdDotation0602(): ?string
    {
        return $this->bdDotation0602;
    }

    public function setBdDotation0602(?string $bdDotation0602): static
    {
        $this->bdDotation0602 = $bdDotation0602;

        return $this;
    }

    public function getBdDotation0603(): ?string
    {
        return $this->bdDotation0603;
    }

    public function setBdDotation0603(?string $bdDotation0603): static
    {
        $this->bdDotation0603 = $bdDotation0603;

        return $this;
    }

    public function getBdDotation0604(): ?string
    {
        return $this->bdDotation0604;
    }

    public function setBdDotation0604(?string $bdDotation0604): static
    {
        $this->bdDotation0604 = $bdDotation0604;

        return $this;
    }

    public function getBdDotation0605(): ?string
    {
        return $this->bdDotation0605;
    }

    public function setBdDotation0605(?string $bdDotation0605): static
    {
        $this->bdDotation0605 = $bdDotation0605;

        return $this;
    }

    public function getBdDotation0606(): ?string
    {
        return $this->bdDotation0606;
    }

    public function setBdDotation0606(?string $bdDotation0606): static
    {
        $this->bdDotation0606 = $bdDotation0606;

        return $this;
    }

    public function getBdDotation0607(): ?string
    {
        return $this->bdDotation0607;
    }

    public function setBdDotation0607(?string $bdDotation0607): static
    {
        $this->bdDotation0607 = $bdDotation0607;

        return $this;
    }

    public function getBdDotation0608(): ?string
    {
        return $this->bdDotation0608;
    }

    public function setBdDotation0608(?string $bdDotation0608): static
    {
        $this->bdDotation0608 = $bdDotation0608;

        return $this;
    }

    public function getBdDotation0609(): ?string
    {
        return $this->bdDotation0609;
    }

    public function setBdDotation0609(?string $bdDotation0609): static
    {
        $this->bdDotation0609 = $bdDotation0609;

        return $this;
    }

    public function getBdDotation0610(): ?string
    {
        return $this->bdDotation0610;
    }

    public function setBdDotation0610(?string $bdDotation0610): static
    {
        $this->bdDotation0610 = $bdDotation0610;

        return $this;
    }

    public function getBdDotation0611(): ?string
    {
        return $this->bdDotation0611;
    }

    public function setBdDotation0611(?string $bdDotation0611): static
    {
        $this->bdDotation0611 = $bdDotation0611;

        return $this;
    }

    public function getBdDotation0612(): ?string
    {
        return $this->bdDotation0612;
    }

    public function setBdDotation0612(?string $bdDotation0612): static
    {
        $this->bdDotation0612 = $bdDotation0612;

        return $this;
    }

    public function getBdDotation0613(): ?string
    {
        return $this->bdDotation0613;
    }

    public function setBdDotation0613(?string $bdDotation0613): static
    {
        $this->bdDotation0613 = $bdDotation0613;

        return $this;
    }

    public function getBdDotation0614(): ?string
    {
        return $this->bdDotation0614;
    }

    public function setBdDotation0614(?string $bdDotation0614): static
    {
        $this->bdDotation0614 = $bdDotation0614;

        return $this;
    }

    public function getBdDotation0615(): ?string
    {
        return $this->bdDotation0615;
    }

    public function setBdDotation0615(?string $bdDotation0615): static
    {
        $this->bdDotation0615 = $bdDotation0615;

        return $this;
    }

    public function getBdDotation0616(): ?string
    {
        return $this->bdDotation0616;
    }

    public function setBdDotation0616(?string $bdDotation0616): static
    {
        $this->bdDotation0616 = $bdDotation0616;

        return $this;
    }

    public function getBdDotation0617(): ?string
    {
        return $this->bdDotation0617;
    }

    public function setBdDotation0617(?string $bdDotation0617): static
    {
        $this->bdDotation0617 = $bdDotation0617;

        return $this;
    }

    public function getBdDotation0618(): ?string
    {
        return $this->bdDotation0618;
    }

    public function setBdDotation0618(?string $bdDotation0618): static
    {
        $this->bdDotation0618 = $bdDotation0618;

        return $this;
    }

    public function getBdDotation0619(): ?string
    {
        return $this->bdDotation0619;
    }

    public function setBdDotation0619(?string $bdDotation0619): static
    {
        $this->bdDotation0619 = $bdDotation0619;

        return $this;
    }

    public function getBdDotation0620(): ?string
    {
        return $this->bdDotation0620;
    }

    public function setBdDotation0620(?string $bdDotation0620): static
    {
        $this->bdDotation0620 = $bdDotation0620;

        return $this;
    }

    public function getBdDotation0621(): ?string
    {
        return $this->bdDotation0621;
    }

    public function setBdDotation0621(?string $bdDotation0621): static
    {
        $this->bdDotation0621 = $bdDotation0621;

        return $this;
    }

    public function getBdDotation0622(): ?string
    {
        return $this->bdDotation0622;
    }

    public function setBdDotation0622(?string $bdDotation0622): static
    {
        $this->bdDotation0622 = $bdDotation0622;

        return $this;
    }

    public function getBdDotation0623(): ?string
    {
        return $this->bdDotation0623;
    }

    public function setBdDotation0623(?string $bdDotation0623): static
    {
        $this->bdDotation0623 = $bdDotation0623;

        return $this;
    }

    public function getBdDotation0624(): ?string
    {
        return $this->bdDotation0624;
    }

    public function setBdDotation0624(?string $bdDotation0624): static
    {
        $this->bdDotation0624 = $bdDotation0624;

        return $this;
    }

    public function getBdDotation0625(): ?string
    {
        return $this->bdDotation0625;
    }

    public function setBdDotation0625(?string $bdDotation0625): static
    {
        $this->bdDotation0625 = $bdDotation0625;

        return $this;
    }

    public function getBdDotation0626(): ?string
    {
        return $this->bdDotation0626;
    }

    public function setBdDotation0626(?string $bdDotation0626): static
    {
        $this->bdDotation0626 = $bdDotation0626;

        return $this;
    }

    public function getBdDotation0627(): ?string
    {
        return $this->bdDotation0627;
    }

    public function setBdDotation0627(?string $bdDotation0627): static
    {
        $this->bdDotation0627 = $bdDotation0627;

        return $this;
    }

    public function getBdDotation0628(): ?string
    {
        return $this->bdDotation0628;
    }

    public function setBdDotation0628(?string $bdDotation0628): static
    {
        $this->bdDotation0628 = $bdDotation0628;

        return $this;
    }

    public function getBdDotation0629(): ?string
    {
        return $this->bdDotation0629;
    }

    public function setBdDotation0629(?string $bdDotation0629): static
    {
        $this->bdDotation0629 = $bdDotation0629;

        return $this;
    }

    public function getBdDotation0630(): ?string
    {
        return $this->bdDotation0630;
    }

    public function setBdDotation0630(?string $bdDotation0630): static
    {
        $this->bdDotation0630 = $bdDotation0630;

        return $this;
    }

    public function getBdDotation0631(): ?string
    {
        return $this->bdDotation0631;
    }

    public function setBdDotation0631(?string $bdDotation0631): static
    {
        $this->bdDotation0631 = $bdDotation0631;

        return $this;
    }

    public function getBdDotation0632(): ?string
    {
        return $this->bdDotation0632;
    }

    public function setBdDotation0632(?string $bdDotation0632): static
    {
        $this->bdDotation0632 = $bdDotation0632;

        return $this;
    }

    public function getBdDotation0633(): ?string
    {
        return $this->bdDotation0633;
    }

    public function setBdDotation0633(?string $bdDotation0633): static
    {
        $this->bdDotation0633 = $bdDotation0633;

        return $this;
    }

    public function getBdDotation0634(): ?string
    {
        return $this->bdDotation0634;
    }

    public function setBdDotation0634(?string $bdDotation0634): static
    {
        $this->bdDotation0634 = $bdDotation0634;

        return $this;
    }

    public function getBdDotation0635(): ?string
    {
        return $this->bdDotation0635;
    }

    public function setBdDotation0635(?string $bdDotation0635): static
    {
        $this->bdDotation0635 = $bdDotation0635;

        return $this;
    }

    public function getBdDotation0636(): ?string
    {
        return $this->bdDotation0636;
    }

    public function setBdDotation0636(?string $bdDotation0636): static
    {
        $this->bdDotation0636 = $bdDotation0636;

        return $this;
    }

    public function getBdDotationq0101(): ?string
    {
        return $this->bdDotationq0101;
    }

    public function setBdDotationq0101(?string $bdDotationq0101): static
    {
        $this->bdDotationq0101 = $bdDotationq0101;

        return $this;
    }

    public function getBdDotationq0102(): ?string
    {
        return $this->bdDotationq0102;
    }

    public function setBdDotationq0102(?string $bdDotationq0102): static
    {
        $this->bdDotationq0102 = $bdDotationq0102;

        return $this;
    }

    public function getBdDotationq0103(): ?string
    {
        return $this->bdDotationq0103;
    }

    public function setBdDotationq0103(?string $bdDotationq0103): static
    {
        $this->bdDotationq0103 = $bdDotationq0103;

        return $this;
    }

    public function getBdDotationq0104(): ?string
    {
        return $this->bdDotationq0104;
    }

    public function setBdDotationq0104(?string $bdDotationq0104): static
    {
        $this->bdDotationq0104 = $bdDotationq0104;

        return $this;
    }

    public function getBdDotationq0105(): ?string
    {
        return $this->bdDotationq0105;
    }

    public function setBdDotationq0105(?string $bdDotationq0105): static
    {
        $this->bdDotationq0105 = $bdDotationq0105;

        return $this;
    }

    public function getBdDotationq0106(): ?string
    {
        return $this->bdDotationq0106;
    }

    public function setBdDotationq0106(?string $bdDotationq0106): static
    {
        $this->bdDotationq0106 = $bdDotationq0106;

        return $this;
    }

    public function getBdDotationq0107(): ?string
    {
        return $this->bdDotationq0107;
    }

    public function setBdDotationq0107(?string $bdDotationq0107): static
    {
        $this->bdDotationq0107 = $bdDotationq0107;

        return $this;
    }

    public function getBdDotationq0108(): ?string
    {
        return $this->bdDotationq0108;
    }

    public function setBdDotationq0108(?string $bdDotationq0108): static
    {
        $this->bdDotationq0108 = $bdDotationq0108;

        return $this;
    }

    public function getBdDotationq0109(): ?string
    {
        return $this->bdDotationq0109;
    }

    public function setBdDotationq0109(?string $bdDotationq0109): static
    {
        $this->bdDotationq0109 = $bdDotationq0109;

        return $this;
    }

    public function getBdDotationq0110(): ?string
    {
        return $this->bdDotationq0110;
    }

    public function setBdDotationq0110(?string $bdDotationq0110): static
    {
        $this->bdDotationq0110 = $bdDotationq0110;

        return $this;
    }

    public function getBdDotationq0111(): ?string
    {
        return $this->bdDotationq0111;
    }

    public function setBdDotationq0111(?string $bdDotationq0111): static
    {
        $this->bdDotationq0111 = $bdDotationq0111;

        return $this;
    }

    public function getBdDotationq0112(): ?string
    {
        return $this->bdDotationq0112;
    }

    public function setBdDotationq0112(?string $bdDotationq0112): static
    {
        $this->bdDotationq0112 = $bdDotationq0112;

        return $this;
    }

    public function getBdDotationq0113(): ?string
    {
        return $this->bdDotationq0113;
    }

    public function setBdDotationq0113(?string $bdDotationq0113): static
    {
        $this->bdDotationq0113 = $bdDotationq0113;

        return $this;
    }

    public function getBdDotationq0114(): ?string
    {
        return $this->bdDotationq0114;
    }

    public function setBdDotationq0114(?string $bdDotationq0114): static
    {
        $this->bdDotationq0114 = $bdDotationq0114;

        return $this;
    }

    public function getBdDotationq0115(): ?string
    {
        return $this->bdDotationq0115;
    }

    public function setBdDotationq0115(?string $bdDotationq0115): static
    {
        $this->bdDotationq0115 = $bdDotationq0115;

        return $this;
    }

    public function getBdDotationq0116(): ?string
    {
        return $this->bdDotationq0116;
    }

    public function setBdDotationq0116(?string $bdDotationq0116): static
    {
        $this->bdDotationq0116 = $bdDotationq0116;

        return $this;
    }

    public function getBdDotationq0117(): ?string
    {
        return $this->bdDotationq0117;
    }

    public function setBdDotationq0117(?string $bdDotationq0117): static
    {
        $this->bdDotationq0117 = $bdDotationq0117;

        return $this;
    }

    public function getBdDotationq0118(): ?string
    {
        return $this->bdDotationq0118;
    }

    public function setBdDotationq0118(?string $bdDotationq0118): static
    {
        $this->bdDotationq0118 = $bdDotationq0118;

        return $this;
    }

    public function getBdDotationq0119(): ?string
    {
        return $this->bdDotationq0119;
    }

    public function setBdDotationq0119(?string $bdDotationq0119): static
    {
        $this->bdDotationq0119 = $bdDotationq0119;

        return $this;
    }

    public function getBdDotationq0120(): ?string
    {
        return $this->bdDotationq0120;
    }

    public function setBdDotationq0120(?string $bdDotationq0120): static
    {
        $this->bdDotationq0120 = $bdDotationq0120;

        return $this;
    }

    public function getBdDotationq0121(): ?string
    {
        return $this->bdDotationq0121;
    }

    public function setBdDotationq0121(?string $bdDotationq0121): static
    {
        $this->bdDotationq0121 = $bdDotationq0121;

        return $this;
    }

    public function getBdDotationq0122(): ?string
    {
        return $this->bdDotationq0122;
    }

    public function setBdDotationq0122(?string $bdDotationq0122): static
    {
        $this->bdDotationq0122 = $bdDotationq0122;

        return $this;
    }

    public function getBdDotationq0123(): ?string
    {
        return $this->bdDotationq0123;
    }

    public function setBdDotationq0123(?string $bdDotationq0123): static
    {
        $this->bdDotationq0123 = $bdDotationq0123;

        return $this;
    }

    public function getBdDotationq0124(): ?string
    {
        return $this->bdDotationq0124;
    }

    public function setBdDotationq0124(?string $bdDotationq0124): static
    {
        $this->bdDotationq0124 = $bdDotationq0124;

        return $this;
    }

    public function getBdDotationq0125(): ?string
    {
        return $this->bdDotationq0125;
    }

    public function setBdDotationq0125(?string $bdDotationq0125): static
    {
        $this->bdDotationq0125 = $bdDotationq0125;

        return $this;
    }

    public function getBdDotationq0126(): ?string
    {
        return $this->bdDotationq0126;
    }

    public function setBdDotationq0126(?string $bdDotationq0126): static
    {
        $this->bdDotationq0126 = $bdDotationq0126;

        return $this;
    }

    public function getBdDotationq0127(): ?string
    {
        return $this->bdDotationq0127;
    }

    public function setBdDotationq0127(?string $bdDotationq0127): static
    {
        $this->bdDotationq0127 = $bdDotationq0127;

        return $this;
    }

    public function getBdDotationq0128(): ?string
    {
        return $this->bdDotationq0128;
    }

    public function setBdDotationq0128(?string $bdDotationq0128): static
    {
        $this->bdDotationq0128 = $bdDotationq0128;

        return $this;
    }

    public function getBdDotationq0129(): ?string
    {
        return $this->bdDotationq0129;
    }

    public function setBdDotationq0129(?string $bdDotationq0129): static
    {
        $this->bdDotationq0129 = $bdDotationq0129;

        return $this;
    }

    public function getBdDotationq0130(): ?string
    {
        return $this->bdDotationq0130;
    }

    public function setBdDotationq0130(?string $bdDotationq0130): static
    {
        $this->bdDotationq0130 = $bdDotationq0130;

        return $this;
    }

    public function getBdDotationq0131(): ?string
    {
        return $this->bdDotationq0131;
    }

    public function setBdDotationq0131(?string $bdDotationq0131): static
    {
        $this->bdDotationq0131 = $bdDotationq0131;

        return $this;
    }

    public function getBdDotationq0132(): ?string
    {
        return $this->bdDotationq0132;
    }

    public function setBdDotationq0132(?string $bdDotationq0132): static
    {
        $this->bdDotationq0132 = $bdDotationq0132;

        return $this;
    }

    public function getBdDotationq0133(): ?string
    {
        return $this->bdDotationq0133;
    }

    public function setBdDotationq0133(?string $bdDotationq0133): static
    {
        $this->bdDotationq0133 = $bdDotationq0133;

        return $this;
    }

    public function getBdDotationq0134(): ?string
    {
        return $this->bdDotationq0134;
    }

    public function setBdDotationq0134(?string $bdDotationq0134): static
    {
        $this->bdDotationq0134 = $bdDotationq0134;

        return $this;
    }

    public function getBdDotationq0135(): ?string
    {
        return $this->bdDotationq0135;
    }

    public function setBdDotationq0135(?string $bdDotationq0135): static
    {
        $this->bdDotationq0135 = $bdDotationq0135;

        return $this;
    }

    public function getBdDotationq0136(): ?string
    {
        return $this->bdDotationq0136;
    }

    public function setBdDotationq0136(?string $bdDotationq0136): static
    {
        $this->bdDotationq0136 = $bdDotationq0136;

        return $this;
    }

    public function getBdDotationq0201(): ?string
    {
        return $this->bdDotationq0201;
    }

    public function setBdDotationq0201(?string $bdDotationq0201): static
    {
        $this->bdDotationq0201 = $bdDotationq0201;

        return $this;
    }

    public function getBdDotationq0202(): ?string
    {
        return $this->bdDotationq0202;
    }

    public function setBdDotationq0202(?string $bdDotationq0202): static
    {
        $this->bdDotationq0202 = $bdDotationq0202;

        return $this;
    }

    public function getBdDotationq0203(): ?string
    {
        return $this->bdDotationq0203;
    }

    public function setBdDotationq0203(?string $bdDotationq0203): static
    {
        $this->bdDotationq0203 = $bdDotationq0203;

        return $this;
    }

    public function getBdDotationq0204(): ?string
    {
        return $this->bdDotationq0204;
    }

    public function setBdDotationq0204(?string $bdDotationq0204): static
    {
        $this->bdDotationq0204 = $bdDotationq0204;

        return $this;
    }

    public function getBdDotationq0205(): ?string
    {
        return $this->bdDotationq0205;
    }

    public function setBdDotationq0205(?string $bdDotationq0205): static
    {
        $this->bdDotationq0205 = $bdDotationq0205;

        return $this;
    }

    public function getBdDotationq0206(): ?string
    {
        return $this->bdDotationq0206;
    }

    public function setBdDotationq0206(?string $bdDotationq0206): static
    {
        $this->bdDotationq0206 = $bdDotationq0206;

        return $this;
    }

    public function getBdDotationq0207(): ?string
    {
        return $this->bdDotationq0207;
    }

    public function setBdDotationq0207(?string $bdDotationq0207): static
    {
        $this->bdDotationq0207 = $bdDotationq0207;

        return $this;
    }

    public function getBdDotationq0208(): ?string
    {
        return $this->bdDotationq0208;
    }

    public function setBdDotationq0208(?string $bdDotationq0208): static
    {
        $this->bdDotationq0208 = $bdDotationq0208;

        return $this;
    }

    public function getBdDotationq0209(): ?string
    {
        return $this->bdDotationq0209;
    }

    public function setBdDotationq0209(?string $bdDotationq0209): static
    {
        $this->bdDotationq0209 = $bdDotationq0209;

        return $this;
    }

    public function getBdDotationq0210(): ?string
    {
        return $this->bdDotationq0210;
    }

    public function setBdDotationq0210(?string $bdDotationq0210): static
    {
        $this->bdDotationq0210 = $bdDotationq0210;

        return $this;
    }

    public function getBdDotationq0211(): ?string
    {
        return $this->bdDotationq0211;
    }

    public function setBdDotationq0211(?string $bdDotationq0211): static
    {
        $this->bdDotationq0211 = $bdDotationq0211;

        return $this;
    }

    public function getBdDotationq0212(): ?string
    {
        return $this->bdDotationq0212;
    }

    public function setBdDotationq0212(?string $bdDotationq0212): static
    {
        $this->bdDotationq0212 = $bdDotationq0212;

        return $this;
    }

    public function getBdDotationq0213(): ?string
    {
        return $this->bdDotationq0213;
    }

    public function setBdDotationq0213(?string $bdDotationq0213): static
    {
        $this->bdDotationq0213 = $bdDotationq0213;

        return $this;
    }

    public function getBdDotationq0214(): ?string
    {
        return $this->bdDotationq0214;
    }

    public function setBdDotationq0214(?string $bdDotationq0214): static
    {
        $this->bdDotationq0214 = $bdDotationq0214;

        return $this;
    }

    public function getBdDotationq0215(): ?string
    {
        return $this->bdDotationq0215;
    }

    public function setBdDotationq0215(?string $bdDotationq0215): static
    {
        $this->bdDotationq0215 = $bdDotationq0215;

        return $this;
    }

    public function getBdDotationq0216(): ?string
    {
        return $this->bdDotationq0216;
    }

    public function setBdDotationq0216(?string $bdDotationq0216): static
    {
        $this->bdDotationq0216 = $bdDotationq0216;

        return $this;
    }

    public function getBdDotationq0217(): ?string
    {
        return $this->bdDotationq0217;
    }

    public function setBdDotationq0217(?string $bdDotationq0217): static
    {
        $this->bdDotationq0217 = $bdDotationq0217;

        return $this;
    }

    public function getBdDotationq0218(): ?string
    {
        return $this->bdDotationq0218;
    }

    public function setBdDotationq0218(?string $bdDotationq0218): static
    {
        $this->bdDotationq0218 = $bdDotationq0218;

        return $this;
    }

    public function getBdDotationq0219(): ?string
    {
        return $this->bdDotationq0219;
    }

    public function setBdDotationq0219(?string $bdDotationq0219): static
    {
        $this->bdDotationq0219 = $bdDotationq0219;

        return $this;
    }

    public function getBdDotationq0220(): ?string
    {
        return $this->bdDotationq0220;
    }

    public function setBdDotationq0220(?string $bdDotationq0220): static
    {
        $this->bdDotationq0220 = $bdDotationq0220;

        return $this;
    }

    public function getBdDotationq0221(): ?string
    {
        return $this->bdDotationq0221;
    }

    public function setBdDotationq0221(?string $bdDotationq0221): static
    {
        $this->bdDotationq0221 = $bdDotationq0221;

        return $this;
    }

    public function getBdDotationq0222(): ?string
    {
        return $this->bdDotationq0222;
    }

    public function setBdDotationq0222(?string $bdDotationq0222): static
    {
        $this->bdDotationq0222 = $bdDotationq0222;

        return $this;
    }

    public function getBdDotationq0223(): ?string
    {
        return $this->bdDotationq0223;
    }

    public function setBdDotationq0223(?string $bdDotationq0223): static
    {
        $this->bdDotationq0223 = $bdDotationq0223;

        return $this;
    }

    public function getBdDotationq0224(): ?string
    {
        return $this->bdDotationq0224;
    }

    public function setBdDotationq0224(?string $bdDotationq0224): static
    {
        $this->bdDotationq0224 = $bdDotationq0224;

        return $this;
    }

    public function getBdDotationq0225(): ?string
    {
        return $this->bdDotationq0225;
    }

    public function setBdDotationq0225(?string $bdDotationq0225): static
    {
        $this->bdDotationq0225 = $bdDotationq0225;

        return $this;
    }

    public function getBdDotationq0226(): ?string
    {
        return $this->bdDotationq0226;
    }

    public function setBdDotationq0226(?string $bdDotationq0226): static
    {
        $this->bdDotationq0226 = $bdDotationq0226;

        return $this;
    }

    public function getBdDotationq0227(): ?string
    {
        return $this->bdDotationq0227;
    }

    public function setBdDotationq0227(?string $bdDotationq0227): static
    {
        $this->bdDotationq0227 = $bdDotationq0227;

        return $this;
    }

    public function getBdDotationq0228(): ?string
    {
        return $this->bdDotationq0228;
    }

    public function setBdDotationq0228(?string $bdDotationq0228): static
    {
        $this->bdDotationq0228 = $bdDotationq0228;

        return $this;
    }

    public function getBdDotationq0229(): ?string
    {
        return $this->bdDotationq0229;
    }

    public function setBdDotationq0229(?string $bdDotationq0229): static
    {
        $this->bdDotationq0229 = $bdDotationq0229;

        return $this;
    }

    public function getBdDotationq0230(): ?string
    {
        return $this->bdDotationq0230;
    }

    public function setBdDotationq0230(?string $bdDotationq0230): static
    {
        $this->bdDotationq0230 = $bdDotationq0230;

        return $this;
    }

    public function getBdDotationq0231(): ?string
    {
        return $this->bdDotationq0231;
    }

    public function setBdDotationq0231(?string $bdDotationq0231): static
    {
        $this->bdDotationq0231 = $bdDotationq0231;

        return $this;
    }

    public function getBdDotationq0232(): ?string
    {
        return $this->bdDotationq0232;
    }

    public function setBdDotationq0232(?string $bdDotationq0232): static
    {
        $this->bdDotationq0232 = $bdDotationq0232;

        return $this;
    }

    public function getBdDotationq0233(): ?string
    {
        return $this->bdDotationq0233;
    }

    public function setBdDotationq0233(?string $bdDotationq0233): static
    {
        $this->bdDotationq0233 = $bdDotationq0233;

        return $this;
    }

    public function getBdDotationq0234(): ?string
    {
        return $this->bdDotationq0234;
    }

    public function setBdDotationq0234(?string $bdDotationq0234): static
    {
        $this->bdDotationq0234 = $bdDotationq0234;

        return $this;
    }

    public function getBdDotationq0235(): ?string
    {
        return $this->bdDotationq0235;
    }

    public function setBdDotationq0235(?string $bdDotationq0235): static
    {
        $this->bdDotationq0235 = $bdDotationq0235;

        return $this;
    }

    public function getBdDotationq0236(): ?string
    {
        return $this->bdDotationq0236;
    }

    public function setBdDotationq0236(?string $bdDotationq0236): static
    {
        $this->bdDotationq0236 = $bdDotationq0236;

        return $this;
    }

    public function getBdDotationq0301(): ?string
    {
        return $this->bdDotationq0301;
    }

    public function setBdDotationq0301(?string $bdDotationq0301): static
    {
        $this->bdDotationq0301 = $bdDotationq0301;

        return $this;
    }

    public function getBdDotationq0302(): ?string
    {
        return $this->bdDotationq0302;
    }

    public function setBdDotationq0302(?string $bdDotationq0302): static
    {
        $this->bdDotationq0302 = $bdDotationq0302;

        return $this;
    }

    public function getBdDotationq0303(): ?string
    {
        return $this->bdDotationq0303;
    }

    public function setBdDotationq0303(?string $bdDotationq0303): static
    {
        $this->bdDotationq0303 = $bdDotationq0303;

        return $this;
    }

    public function getBdDotationq0304(): ?string
    {
        return $this->bdDotationq0304;
    }

    public function setBdDotationq0304(?string $bdDotationq0304): static
    {
        $this->bdDotationq0304 = $bdDotationq0304;

        return $this;
    }

    public function getBdDotationq0305(): ?string
    {
        return $this->bdDotationq0305;
    }

    public function setBdDotationq0305(?string $bdDotationq0305): static
    {
        $this->bdDotationq0305 = $bdDotationq0305;

        return $this;
    }

    public function getBdDotationq0306(): ?string
    {
        return $this->bdDotationq0306;
    }

    public function setBdDotationq0306(?string $bdDotationq0306): static
    {
        $this->bdDotationq0306 = $bdDotationq0306;

        return $this;
    }

    public function getBdDotationq0307(): ?string
    {
        return $this->bdDotationq0307;
    }

    public function setBdDotationq0307(?string $bdDotationq0307): static
    {
        $this->bdDotationq0307 = $bdDotationq0307;

        return $this;
    }

    public function getBdDotationq0308(): ?string
    {
        return $this->bdDotationq0308;
    }

    public function setBdDotationq0308(?string $bdDotationq0308): static
    {
        $this->bdDotationq0308 = $bdDotationq0308;

        return $this;
    }

    public function getBdDotationq0309(): ?string
    {
        return $this->bdDotationq0309;
    }

    public function setBdDotationq0309(?string $bdDotationq0309): static
    {
        $this->bdDotationq0309 = $bdDotationq0309;

        return $this;
    }

    public function getBdDotationq0310(): ?string
    {
        return $this->bdDotationq0310;
    }

    public function setBdDotationq0310(?string $bdDotationq0310): static
    {
        $this->bdDotationq0310 = $bdDotationq0310;

        return $this;
    }

    public function getBdDotationq0311(): ?string
    {
        return $this->bdDotationq0311;
    }

    public function setBdDotationq0311(?string $bdDotationq0311): static
    {
        $this->bdDotationq0311 = $bdDotationq0311;

        return $this;
    }

    public function getBdDotationq0312(): ?string
    {
        return $this->bdDotationq0312;
    }

    public function setBdDotationq0312(?string $bdDotationq0312): static
    {
        $this->bdDotationq0312 = $bdDotationq0312;

        return $this;
    }

    public function getBdDotationq0313(): ?string
    {
        return $this->bdDotationq0313;
    }

    public function setBdDotationq0313(?string $bdDotationq0313): static
    {
        $this->bdDotationq0313 = $bdDotationq0313;

        return $this;
    }

    public function getBdDotationq0314(): ?string
    {
        return $this->bdDotationq0314;
    }

    public function setBdDotationq0314(?string $bdDotationq0314): static
    {
        $this->bdDotationq0314 = $bdDotationq0314;

        return $this;
    }

    public function getBdDotationq0315(): ?string
    {
        return $this->bdDotationq0315;
    }

    public function setBdDotationq0315(?string $bdDotationq0315): static
    {
        $this->bdDotationq0315 = $bdDotationq0315;

        return $this;
    }

    public function getBdDotationq0316(): ?string
    {
        return $this->bdDotationq0316;
    }

    public function setBdDotationq0316(?string $bdDotationq0316): static
    {
        $this->bdDotationq0316 = $bdDotationq0316;

        return $this;
    }

    public function getBdDotationq0317(): ?string
    {
        return $this->bdDotationq0317;
    }

    public function setBdDotationq0317(?string $bdDotationq0317): static
    {
        $this->bdDotationq0317 = $bdDotationq0317;

        return $this;
    }

    public function getBdDotationq0318(): ?string
    {
        return $this->bdDotationq0318;
    }

    public function setBdDotationq0318(?string $bdDotationq0318): static
    {
        $this->bdDotationq0318 = $bdDotationq0318;

        return $this;
    }

    public function getBdDotationq0319(): ?string
    {
        return $this->bdDotationq0319;
    }

    public function setBdDotationq0319(?string $bdDotationq0319): static
    {
        $this->bdDotationq0319 = $bdDotationq0319;

        return $this;
    }

    public function getBdDotationq0320(): ?string
    {
        return $this->bdDotationq0320;
    }

    public function setBdDotationq0320(?string $bdDotationq0320): static
    {
        $this->bdDotationq0320 = $bdDotationq0320;

        return $this;
    }

    public function getBdDotationq0321(): ?string
    {
        return $this->bdDotationq0321;
    }

    public function setBdDotationq0321(?string $bdDotationq0321): static
    {
        $this->bdDotationq0321 = $bdDotationq0321;

        return $this;
    }

    public function getBdDotationq0322(): ?string
    {
        return $this->bdDotationq0322;
    }

    public function setBdDotationq0322(?string $bdDotationq0322): static
    {
        $this->bdDotationq0322 = $bdDotationq0322;

        return $this;
    }

    public function getBdDotationq0323(): ?string
    {
        return $this->bdDotationq0323;
    }

    public function setBdDotationq0323(?string $bdDotationq0323): static
    {
        $this->bdDotationq0323 = $bdDotationq0323;

        return $this;
    }

    public function getBdDotationq0324(): ?string
    {
        return $this->bdDotationq0324;
    }

    public function setBdDotationq0324(?string $bdDotationq0324): static
    {
        $this->bdDotationq0324 = $bdDotationq0324;

        return $this;
    }

    public function getBdDotationq0325(): ?string
    {
        return $this->bdDotationq0325;
    }

    public function setBdDotationq0325(?string $bdDotationq0325): static
    {
        $this->bdDotationq0325 = $bdDotationq0325;

        return $this;
    }

    public function getBdDotationq0326(): ?string
    {
        return $this->bdDotationq0326;
    }

    public function setBdDotationq0326(?string $bdDotationq0326): static
    {
        $this->bdDotationq0326 = $bdDotationq0326;

        return $this;
    }

    public function getBdDotationq0327(): ?string
    {
        return $this->bdDotationq0327;
    }

    public function setBdDotationq0327(?string $bdDotationq0327): static
    {
        $this->bdDotationq0327 = $bdDotationq0327;

        return $this;
    }

    public function getBdDotationq0328(): ?string
    {
        return $this->bdDotationq0328;
    }

    public function setBdDotationq0328(?string $bdDotationq0328): static
    {
        $this->bdDotationq0328 = $bdDotationq0328;

        return $this;
    }

    public function getBdDotationq0329(): ?string
    {
        return $this->bdDotationq0329;
    }

    public function setBdDotationq0329(?string $bdDotationq0329): static
    {
        $this->bdDotationq0329 = $bdDotationq0329;

        return $this;
    }

    public function getBdDotationq0330(): ?string
    {
        return $this->bdDotationq0330;
    }

    public function setBdDotationq0330(?string $bdDotationq0330): static
    {
        $this->bdDotationq0330 = $bdDotationq0330;

        return $this;
    }

    public function getBdDotationq0331(): ?string
    {
        return $this->bdDotationq0331;
    }

    public function setBdDotationq0331(?string $bdDotationq0331): static
    {
        $this->bdDotationq0331 = $bdDotationq0331;

        return $this;
    }

    public function getBdDotationq0332(): ?string
    {
        return $this->bdDotationq0332;
    }

    public function setBdDotationq0332(?string $bdDotationq0332): static
    {
        $this->bdDotationq0332 = $bdDotationq0332;

        return $this;
    }

    public function getBdDotationq0333(): ?string
    {
        return $this->bdDotationq0333;
    }

    public function setBdDotationq0333(?string $bdDotationq0333): static
    {
        $this->bdDotationq0333 = $bdDotationq0333;

        return $this;
    }

    public function getBdDotationq0334(): ?string
    {
        return $this->bdDotationq0334;
    }

    public function setBdDotationq0334(?string $bdDotationq0334): static
    {
        $this->bdDotationq0334 = $bdDotationq0334;

        return $this;
    }

    public function getBdDotationq0335(): ?string
    {
        return $this->bdDotationq0335;
    }

    public function setBdDotationq0335(?string $bdDotationq0335): static
    {
        $this->bdDotationq0335 = $bdDotationq0335;

        return $this;
    }

    public function getBdDotationq0336(): ?string
    {
        return $this->bdDotationq0336;
    }

    public function setBdDotationq0336(?string $bdDotationq0336): static
    {
        $this->bdDotationq0336 = $bdDotationq0336;

        return $this;
    }

    public function getBdDotationq0401(): ?string
    {
        return $this->bdDotationq0401;
    }

    public function setBdDotationq0401(?string $bdDotationq0401): static
    {
        $this->bdDotationq0401 = $bdDotationq0401;

        return $this;
    }

    public function getBdDotationq0402(): ?string
    {
        return $this->bdDotationq0402;
    }

    public function setBdDotationq0402(?string $bdDotationq0402): static
    {
        $this->bdDotationq0402 = $bdDotationq0402;

        return $this;
    }

    public function getBdDotationq0403(): ?string
    {
        return $this->bdDotationq0403;
    }

    public function setBdDotationq0403(?string $bdDotationq0403): static
    {
        $this->bdDotationq0403 = $bdDotationq0403;

        return $this;
    }

    public function getBdDotationq0404(): ?string
    {
        return $this->bdDotationq0404;
    }

    public function setBdDotationq0404(?string $bdDotationq0404): static
    {
        $this->bdDotationq0404 = $bdDotationq0404;

        return $this;
    }

    public function getBdDotationq0405(): ?string
    {
        return $this->bdDotationq0405;
    }

    public function setBdDotationq0405(?string $bdDotationq0405): static
    {
        $this->bdDotationq0405 = $bdDotationq0405;

        return $this;
    }

    public function getBdDotationq0406(): ?string
    {
        return $this->bdDotationq0406;
    }

    public function setBdDotationq0406(?string $bdDotationq0406): static
    {
        $this->bdDotationq0406 = $bdDotationq0406;

        return $this;
    }

    public function getBdDotationq0407(): ?string
    {
        return $this->bdDotationq0407;
    }

    public function setBdDotationq0407(?string $bdDotationq0407): static
    {
        $this->bdDotationq0407 = $bdDotationq0407;

        return $this;
    }

    public function getBdDotationq0408(): ?string
    {
        return $this->bdDotationq0408;
    }

    public function setBdDotationq0408(?string $bdDotationq0408): static
    {
        $this->bdDotationq0408 = $bdDotationq0408;

        return $this;
    }

    public function getBdDotationq0409(): ?string
    {
        return $this->bdDotationq0409;
    }

    public function setBdDotationq0409(?string $bdDotationq0409): static
    {
        $this->bdDotationq0409 = $bdDotationq0409;

        return $this;
    }

    public function getBdDotationq0410(): ?string
    {
        return $this->bdDotationq0410;
    }

    public function setBdDotationq0410(?string $bdDotationq0410): static
    {
        $this->bdDotationq0410 = $bdDotationq0410;

        return $this;
    }

    public function getBdDotationq0411(): ?string
    {
        return $this->bdDotationq0411;
    }

    public function setBdDotationq0411(?string $bdDotationq0411): static
    {
        $this->bdDotationq0411 = $bdDotationq0411;

        return $this;
    }

    public function getBdDotationq0412(): ?string
    {
        return $this->bdDotationq0412;
    }

    public function setBdDotationq0412(?string $bdDotationq0412): static
    {
        $this->bdDotationq0412 = $bdDotationq0412;

        return $this;
    }

    public function getBdDotationq0413(): ?string
    {
        return $this->bdDotationq0413;
    }

    public function setBdDotationq0413(?string $bdDotationq0413): static
    {
        $this->bdDotationq0413 = $bdDotationq0413;

        return $this;
    }

    public function getBdDotationq0414(): ?string
    {
        return $this->bdDotationq0414;
    }

    public function setBdDotationq0414(?string $bdDotationq0414): static
    {
        $this->bdDotationq0414 = $bdDotationq0414;

        return $this;
    }

    public function getBdDotationq0415(): ?string
    {
        return $this->bdDotationq0415;
    }

    public function setBdDotationq0415(?string $bdDotationq0415): static
    {
        $this->bdDotationq0415 = $bdDotationq0415;

        return $this;
    }

    public function getBdDotationq0416(): ?string
    {
        return $this->bdDotationq0416;
    }

    public function setBdDotationq0416(?string $bdDotationq0416): static
    {
        $this->bdDotationq0416 = $bdDotationq0416;

        return $this;
    }

    public function getBdDotationq0417(): ?string
    {
        return $this->bdDotationq0417;
    }

    public function setBdDotationq0417(?string $bdDotationq0417): static
    {
        $this->bdDotationq0417 = $bdDotationq0417;

        return $this;
    }

    public function getBdDotationq0418(): ?string
    {
        return $this->bdDotationq0418;
    }

    public function setBdDotationq0418(?string $bdDotationq0418): static
    {
        $this->bdDotationq0418 = $bdDotationq0418;

        return $this;
    }

    public function getBdDotationq0419(): ?string
    {
        return $this->bdDotationq0419;
    }

    public function setBdDotationq0419(?string $bdDotationq0419): static
    {
        $this->bdDotationq0419 = $bdDotationq0419;

        return $this;
    }

    public function getBdDotationq0420(): ?string
    {
        return $this->bdDotationq0420;
    }

    public function setBdDotationq0420(?string $bdDotationq0420): static
    {
        $this->bdDotationq0420 = $bdDotationq0420;

        return $this;
    }

    public function getBdDotationq0421(): ?string
    {
        return $this->bdDotationq0421;
    }

    public function setBdDotationq0421(?string $bdDotationq0421): static
    {
        $this->bdDotationq0421 = $bdDotationq0421;

        return $this;
    }

    public function getBdDotationq0422(): ?string
    {
        return $this->bdDotationq0422;
    }

    public function setBdDotationq0422(?string $bdDotationq0422): static
    {
        $this->bdDotationq0422 = $bdDotationq0422;

        return $this;
    }

    public function getBdDotationq0423(): ?string
    {
        return $this->bdDotationq0423;
    }

    public function setBdDotationq0423(?string $bdDotationq0423): static
    {
        $this->bdDotationq0423 = $bdDotationq0423;

        return $this;
    }

    public function getBdDotationq0424(): ?string
    {
        return $this->bdDotationq0424;
    }

    public function setBdDotationq0424(?string $bdDotationq0424): static
    {
        $this->bdDotationq0424 = $bdDotationq0424;

        return $this;
    }

    public function getBdDotationq0425(): ?string
    {
        return $this->bdDotationq0425;
    }

    public function setBdDotationq0425(?string $bdDotationq0425): static
    {
        $this->bdDotationq0425 = $bdDotationq0425;

        return $this;
    }

    public function getBdDotationq0426(): ?string
    {
        return $this->bdDotationq0426;
    }

    public function setBdDotationq0426(?string $bdDotationq0426): static
    {
        $this->bdDotationq0426 = $bdDotationq0426;

        return $this;
    }

    public function getBdDotationq0427(): ?string
    {
        return $this->bdDotationq0427;
    }

    public function setBdDotationq0427(?string $bdDotationq0427): static
    {
        $this->bdDotationq0427 = $bdDotationq0427;

        return $this;
    }

    public function getBdDotationq0428(): ?string
    {
        return $this->bdDotationq0428;
    }

    public function setBdDotationq0428(?string $bdDotationq0428): static
    {
        $this->bdDotationq0428 = $bdDotationq0428;

        return $this;
    }

    public function getBdDotationq0429(): ?string
    {
        return $this->bdDotationq0429;
    }

    public function setBdDotationq0429(?string $bdDotationq0429): static
    {
        $this->bdDotationq0429 = $bdDotationq0429;

        return $this;
    }

    public function getBdDotationq0430(): ?string
    {
        return $this->bdDotationq0430;
    }

    public function setBdDotationq0430(?string $bdDotationq0430): static
    {
        $this->bdDotationq0430 = $bdDotationq0430;

        return $this;
    }

    public function getBdDotationq0431(): ?string
    {
        return $this->bdDotationq0431;
    }

    public function setBdDotationq0431(?string $bdDotationq0431): static
    {
        $this->bdDotationq0431 = $bdDotationq0431;

        return $this;
    }

    public function getBdDotationq0432(): ?string
    {
        return $this->bdDotationq0432;
    }

    public function setBdDotationq0432(?string $bdDotationq0432): static
    {
        $this->bdDotationq0432 = $bdDotationq0432;

        return $this;
    }

    public function getBdDotationq0433(): ?string
    {
        return $this->bdDotationq0433;
    }

    public function setBdDotationq0433(?string $bdDotationq0433): static
    {
        $this->bdDotationq0433 = $bdDotationq0433;

        return $this;
    }

    public function getBdDotationq0434(): ?string
    {
        return $this->bdDotationq0434;
    }

    public function setBdDotationq0434(?string $bdDotationq0434): static
    {
        $this->bdDotationq0434 = $bdDotationq0434;

        return $this;
    }

    public function getBdDotationq0435(): ?string
    {
        return $this->bdDotationq0435;
    }

    public function setBdDotationq0435(?string $bdDotationq0435): static
    {
        $this->bdDotationq0435 = $bdDotationq0435;

        return $this;
    }

    public function getBdDotationq0436(): ?string
    {
        return $this->bdDotationq0436;
    }

    public function setBdDotationq0436(?string $bdDotationq0436): static
    {
        $this->bdDotationq0436 = $bdDotationq0436;

        return $this;
    }

    public function getBdDotationq0501(): ?string
    {
        return $this->bdDotationq0501;
    }

    public function setBdDotationq0501(?string $bdDotationq0501): static
    {
        $this->bdDotationq0501 = $bdDotationq0501;

        return $this;
    }

    public function getBdDotationq0502(): ?string
    {
        return $this->bdDotationq0502;
    }

    public function setBdDotationq0502(?string $bdDotationq0502): static
    {
        $this->bdDotationq0502 = $bdDotationq0502;

        return $this;
    }

    public function getBdDotationq0503(): ?string
    {
        return $this->bdDotationq0503;
    }

    public function setBdDotationq0503(?string $bdDotationq0503): static
    {
        $this->bdDotationq0503 = $bdDotationq0503;

        return $this;
    }

    public function getBdDotationq0504(): ?string
    {
        return $this->bdDotationq0504;
    }

    public function setBdDotationq0504(?string $bdDotationq0504): static
    {
        $this->bdDotationq0504 = $bdDotationq0504;

        return $this;
    }

    public function getBdDotationq0505(): ?string
    {
        return $this->bdDotationq0505;
    }

    public function setBdDotationq0505(?string $bdDotationq0505): static
    {
        $this->bdDotationq0505 = $bdDotationq0505;

        return $this;
    }

    public function getBdDotationq0506(): ?string
    {
        return $this->bdDotationq0506;
    }

    public function setBdDotationq0506(?string $bdDotationq0506): static
    {
        $this->bdDotationq0506 = $bdDotationq0506;

        return $this;
    }

    public function getBdDotationq0507(): ?string
    {
        return $this->bdDotationq0507;
    }

    public function setBdDotationq0507(?string $bdDotationq0507): static
    {
        $this->bdDotationq0507 = $bdDotationq0507;

        return $this;
    }

    public function getBdDotationq0508(): ?string
    {
        return $this->bdDotationq0508;
    }

    public function setBdDotationq0508(?string $bdDotationq0508): static
    {
        $this->bdDotationq0508 = $bdDotationq0508;

        return $this;
    }

    public function getBdDotationq0509(): ?string
    {
        return $this->bdDotationq0509;
    }

    public function setBdDotationq0509(?string $bdDotationq0509): static
    {
        $this->bdDotationq0509 = $bdDotationq0509;

        return $this;
    }

    public function getBdDotationq0510(): ?string
    {
        return $this->bdDotationq0510;
    }

    public function setBdDotationq0510(?string $bdDotationq0510): static
    {
        $this->bdDotationq0510 = $bdDotationq0510;

        return $this;
    }

    public function getBdDotationq0511(): ?string
    {
        return $this->bdDotationq0511;
    }

    public function setBdDotationq0511(?string $bdDotationq0511): static
    {
        $this->bdDotationq0511 = $bdDotationq0511;

        return $this;
    }

    public function getBdDotationq0512(): ?string
    {
        return $this->bdDotationq0512;
    }

    public function setBdDotationq0512(?string $bdDotationq0512): static
    {
        $this->bdDotationq0512 = $bdDotationq0512;

        return $this;
    }

    public function getBdDotationq0513(): ?string
    {
        return $this->bdDotationq0513;
    }

    public function setBdDotationq0513(?string $bdDotationq0513): static
    {
        $this->bdDotationq0513 = $bdDotationq0513;

        return $this;
    }

    public function getBdDotationq0514(): ?string
    {
        return $this->bdDotationq0514;
    }

    public function setBdDotationq0514(?string $bdDotationq0514): static
    {
        $this->bdDotationq0514 = $bdDotationq0514;

        return $this;
    }

    public function getBdDotationq0515(): ?string
    {
        return $this->bdDotationq0515;
    }

    public function setBdDotationq0515(?string $bdDotationq0515): static
    {
        $this->bdDotationq0515 = $bdDotationq0515;

        return $this;
    }

    public function getBdDotationq0516(): ?string
    {
        return $this->bdDotationq0516;
    }

    public function setBdDotationq0516(?string $bdDotationq0516): static
    {
        $this->bdDotationq0516 = $bdDotationq0516;

        return $this;
    }

    public function getBdDotationq0517(): ?string
    {
        return $this->bdDotationq0517;
    }

    public function setBdDotationq0517(?string $bdDotationq0517): static
    {
        $this->bdDotationq0517 = $bdDotationq0517;

        return $this;
    }

    public function getBdDotationq0518(): ?string
    {
        return $this->bdDotationq0518;
    }

    public function setBdDotationq0518(?string $bdDotationq0518): static
    {
        $this->bdDotationq0518 = $bdDotationq0518;

        return $this;
    }

    public function getBdDotationq0519(): ?string
    {
        return $this->bdDotationq0519;
    }

    public function setBdDotationq0519(?string $bdDotationq0519): static
    {
        $this->bdDotationq0519 = $bdDotationq0519;

        return $this;
    }

    public function getBdDotationq0520(): ?string
    {
        return $this->bdDotationq0520;
    }

    public function setBdDotationq0520(?string $bdDotationq0520): static
    {
        $this->bdDotationq0520 = $bdDotationq0520;

        return $this;
    }

    public function getBdDotationq0521(): ?string
    {
        return $this->bdDotationq0521;
    }

    public function setBdDotationq0521(?string $bdDotationq0521): static
    {
        $this->bdDotationq0521 = $bdDotationq0521;

        return $this;
    }

    public function getBdDotationq0522(): ?string
    {
        return $this->bdDotationq0522;
    }

    public function setBdDotationq0522(?string $bdDotationq0522): static
    {
        $this->bdDotationq0522 = $bdDotationq0522;

        return $this;
    }

    public function getBdDotationq0523(): ?string
    {
        return $this->bdDotationq0523;
    }

    public function setBdDotationq0523(?string $bdDotationq0523): static
    {
        $this->bdDotationq0523 = $bdDotationq0523;

        return $this;
    }

    public function getBdDotationq0524(): ?string
    {
        return $this->bdDotationq0524;
    }

    public function setBdDotationq0524(?string $bdDotationq0524): static
    {
        $this->bdDotationq0524 = $bdDotationq0524;

        return $this;
    }

    public function getBdDotationq0525(): ?string
    {
        return $this->bdDotationq0525;
    }

    public function setBdDotationq0525(?string $bdDotationq0525): static
    {
        $this->bdDotationq0525 = $bdDotationq0525;

        return $this;
    }

    public function getBdDotationq0526(): ?string
    {
        return $this->bdDotationq0526;
    }

    public function setBdDotationq0526(?string $bdDotationq0526): static
    {
        $this->bdDotationq0526 = $bdDotationq0526;

        return $this;
    }

    public function getBdDotationq0527(): ?string
    {
        return $this->bdDotationq0527;
    }

    public function setBdDotationq0527(?string $bdDotationq0527): static
    {
        $this->bdDotationq0527 = $bdDotationq0527;

        return $this;
    }

    public function getBdDotationq0528(): ?string
    {
        return $this->bdDotationq0528;
    }

    public function setBdDotationq0528(?string $bdDotationq0528): static
    {
        $this->bdDotationq0528 = $bdDotationq0528;

        return $this;
    }

    public function getBdDotationq0529(): ?string
    {
        return $this->bdDotationq0529;
    }

    public function setBdDotationq0529(?string $bdDotationq0529): static
    {
        $this->bdDotationq0529 = $bdDotationq0529;

        return $this;
    }

    public function getBdDotationq0530(): ?string
    {
        return $this->bdDotationq0530;
    }

    public function setBdDotationq0530(?string $bdDotationq0530): static
    {
        $this->bdDotationq0530 = $bdDotationq0530;

        return $this;
    }

    public function getBdDotationq0531(): ?string
    {
        return $this->bdDotationq0531;
    }

    public function setBdDotationq0531(?string $bdDotationq0531): static
    {
        $this->bdDotationq0531 = $bdDotationq0531;

        return $this;
    }

    public function getBdDotationq0532(): ?string
    {
        return $this->bdDotationq0532;
    }

    public function setBdDotationq0532(?string $bdDotationq0532): static
    {
        $this->bdDotationq0532 = $bdDotationq0532;

        return $this;
    }

    public function getBdDotationq0533(): ?string
    {
        return $this->bdDotationq0533;
    }

    public function setBdDotationq0533(?string $bdDotationq0533): static
    {
        $this->bdDotationq0533 = $bdDotationq0533;

        return $this;
    }

    public function getBdDotationq0534(): ?string
    {
        return $this->bdDotationq0534;
    }

    public function setBdDotationq0534(?string $bdDotationq0534): static
    {
        $this->bdDotationq0534 = $bdDotationq0534;

        return $this;
    }

    public function getBdDotationq0535(): ?string
    {
        return $this->bdDotationq0535;
    }

    public function setBdDotationq0535(?string $bdDotationq0535): static
    {
        $this->bdDotationq0535 = $bdDotationq0535;

        return $this;
    }

    public function getBdDotationq0536(): ?string
    {
        return $this->bdDotationq0536;
    }

    public function setBdDotationq0536(?string $bdDotationq0536): static
    {
        $this->bdDotationq0536 = $bdDotationq0536;

        return $this;
    }

    public function getBdDotationq0601(): ?string
    {
        return $this->bdDotationq0601;
    }

    public function setBdDotationq0601(?string $bdDotationq0601): static
    {
        $this->bdDotationq0601 = $bdDotationq0601;

        return $this;
    }

    public function getBdDotationq0602(): ?string
    {
        return $this->bdDotationq0602;
    }

    public function setBdDotationq0602(?string $bdDotationq0602): static
    {
        $this->bdDotationq0602 = $bdDotationq0602;

        return $this;
    }

    public function getBdDotationq0603(): ?string
    {
        return $this->bdDotationq0603;
    }

    public function setBdDotationq0603(?string $bdDotationq0603): static
    {
        $this->bdDotationq0603 = $bdDotationq0603;

        return $this;
    }

    public function getBdDotationq0604(): ?string
    {
        return $this->bdDotationq0604;
    }

    public function setBdDotationq0604(?string $bdDotationq0604): static
    {
        $this->bdDotationq0604 = $bdDotationq0604;

        return $this;
    }

    public function getBdDotationq0605(): ?string
    {
        return $this->bdDotationq0605;
    }

    public function setBdDotationq0605(?string $bdDotationq0605): static
    {
        $this->bdDotationq0605 = $bdDotationq0605;

        return $this;
    }

    public function getBdDotationq0606(): ?string
    {
        return $this->bdDotationq0606;
    }

    public function setBdDotationq0606(?string $bdDotationq0606): static
    {
        $this->bdDotationq0606 = $bdDotationq0606;

        return $this;
    }

    public function getBdDotationq0607(): ?string
    {
        return $this->bdDotationq0607;
    }

    public function setBdDotationq0607(?string $bdDotationq0607): static
    {
        $this->bdDotationq0607 = $bdDotationq0607;

        return $this;
    }

    public function getBdDotationq0608(): ?string
    {
        return $this->bdDotationq0608;
    }

    public function setBdDotationq0608(?string $bdDotationq0608): static
    {
        $this->bdDotationq0608 = $bdDotationq0608;

        return $this;
    }

    public function getBdDotationq0609(): ?string
    {
        return $this->bdDotationq0609;
    }

    public function setBdDotationq0609(?string $bdDotationq0609): static
    {
        $this->bdDotationq0609 = $bdDotationq0609;

        return $this;
    }

    public function getBdDotationq0610(): ?string
    {
        return $this->bdDotationq0610;
    }

    public function setBdDotationq0610(?string $bdDotationq0610): static
    {
        $this->bdDotationq0610 = $bdDotationq0610;

        return $this;
    }

    public function getBdDotationq0611(): ?string
    {
        return $this->bdDotationq0611;
    }

    public function setBdDotationq0611(?string $bdDotationq0611): static
    {
        $this->bdDotationq0611 = $bdDotationq0611;

        return $this;
    }

    public function getBdDotationq0612(): ?string
    {
        return $this->bdDotationq0612;
    }

    public function setBdDotationq0612(?string $bdDotationq0612): static
    {
        $this->bdDotationq0612 = $bdDotationq0612;

        return $this;
    }

    public function getBdDotationq0613(): ?string
    {
        return $this->bdDotationq0613;
    }

    public function setBdDotationq0613(?string $bdDotationq0613): static
    {
        $this->bdDotationq0613 = $bdDotationq0613;

        return $this;
    }

    public function getBdDotationq0614(): ?string
    {
        return $this->bdDotationq0614;
    }

    public function setBdDotationq0614(?string $bdDotationq0614): static
    {
        $this->bdDotationq0614 = $bdDotationq0614;

        return $this;
    }

    public function getBdDotationq0615(): ?string
    {
        return $this->bdDotationq0615;
    }

    public function setBdDotationq0615(?string $bdDotationq0615): static
    {
        $this->bdDotationq0615 = $bdDotationq0615;

        return $this;
    }

    public function getBdDotationq0616(): ?string
    {
        return $this->bdDotationq0616;
    }

    public function setBdDotationq0616(?string $bdDotationq0616): static
    {
        $this->bdDotationq0616 = $bdDotationq0616;

        return $this;
    }

    public function getBdDotationq0617(): ?string
    {
        return $this->bdDotationq0617;
    }

    public function setBdDotationq0617(?string $bdDotationq0617): static
    {
        $this->bdDotationq0617 = $bdDotationq0617;

        return $this;
    }

    public function getBdDotationq0618(): ?string
    {
        return $this->bdDotationq0618;
    }

    public function setBdDotationq0618(?string $bdDotationq0618): static
    {
        $this->bdDotationq0618 = $bdDotationq0618;

        return $this;
    }

    public function getBdDotationq0619(): ?string
    {
        return $this->bdDotationq0619;
    }

    public function setBdDotationq0619(?string $bdDotationq0619): static
    {
        $this->bdDotationq0619 = $bdDotationq0619;

        return $this;
    }

    public function getBdDotationq0620(): ?string
    {
        return $this->bdDotationq0620;
    }

    public function setBdDotationq0620(?string $bdDotationq0620): static
    {
        $this->bdDotationq0620 = $bdDotationq0620;

        return $this;
    }

    public function getBdDotationq0621(): ?string
    {
        return $this->bdDotationq0621;
    }

    public function setBdDotationq0621(?string $bdDotationq0621): static
    {
        $this->bdDotationq0621 = $bdDotationq0621;

        return $this;
    }

    public function getBdDotationq0622(): ?string
    {
        return $this->bdDotationq0622;
    }

    public function setBdDotationq0622(?string $bdDotationq0622): static
    {
        $this->bdDotationq0622 = $bdDotationq0622;

        return $this;
    }

    public function getBdDotationq0623(): ?string
    {
        return $this->bdDotationq0623;
    }

    public function setBdDotationq0623(?string $bdDotationq0623): static
    {
        $this->bdDotationq0623 = $bdDotationq0623;

        return $this;
    }

    public function getBdDotationq0624(): ?string
    {
        return $this->bdDotationq0624;
    }

    public function setBdDotationq0624(?string $bdDotationq0624): static
    {
        $this->bdDotationq0624 = $bdDotationq0624;

        return $this;
    }

    public function getBdDotationq0625(): ?string
    {
        return $this->bdDotationq0625;
    }

    public function setBdDotationq0625(?string $bdDotationq0625): static
    {
        $this->bdDotationq0625 = $bdDotationq0625;

        return $this;
    }

    public function getBdDotationq0626(): ?string
    {
        return $this->bdDotationq0626;
    }

    public function setBdDotationq0626(?string $bdDotationq0626): static
    {
        $this->bdDotationq0626 = $bdDotationq0626;

        return $this;
    }

    public function getBdDotationq0627(): ?string
    {
        return $this->bdDotationq0627;
    }

    public function setBdDotationq0627(?string $bdDotationq0627): static
    {
        $this->bdDotationq0627 = $bdDotationq0627;

        return $this;
    }

    public function getBdDotationq0628(): ?string
    {
        return $this->bdDotationq0628;
    }

    public function setBdDotationq0628(?string $bdDotationq0628): static
    {
        $this->bdDotationq0628 = $bdDotationq0628;

        return $this;
    }

    public function getBdDotationq0629(): ?string
    {
        return $this->bdDotationq0629;
    }

    public function setBdDotationq0629(?string $bdDotationq0629): static
    {
        $this->bdDotationq0629 = $bdDotationq0629;

        return $this;
    }

    public function getBdDotationq0630(): ?string
    {
        return $this->bdDotationq0630;
    }

    public function setBdDotationq0630(?string $bdDotationq0630): static
    {
        $this->bdDotationq0630 = $bdDotationq0630;

        return $this;
    }

    public function getBdDotationq0631(): ?string
    {
        return $this->bdDotationq0631;
    }

    public function setBdDotationq0631(?string $bdDotationq0631): static
    {
        $this->bdDotationq0631 = $bdDotationq0631;

        return $this;
    }

    public function getBdDotationq0632(): ?string
    {
        return $this->bdDotationq0632;
    }

    public function setBdDotationq0632(?string $bdDotationq0632): static
    {
        $this->bdDotationq0632 = $bdDotationq0632;

        return $this;
    }

    public function getBdDotationq0633(): ?string
    {
        return $this->bdDotationq0633;
    }

    public function setBdDotationq0633(?string $bdDotationq0633): static
    {
        $this->bdDotationq0633 = $bdDotationq0633;

        return $this;
    }

    public function getBdDotationq0634(): ?string
    {
        return $this->bdDotationq0634;
    }

    public function setBdDotationq0634(?string $bdDotationq0634): static
    {
        $this->bdDotationq0634 = $bdDotationq0634;

        return $this;
    }

    public function getBdDotationq0635(): ?string
    {
        return $this->bdDotationq0635;
    }

    public function setBdDotationq0635(?string $bdDotationq0635): static
    {
        $this->bdDotationq0635 = $bdDotationq0635;

        return $this;
    }

    public function getBdDotationq0636(): ?string
    {
        return $this->bdDotationq0636;
    }

    public function setBdDotationq0636(?string $bdDotationq0636): static
    {
        $this->bdDotationq0636 = $bdDotationq0636;

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
