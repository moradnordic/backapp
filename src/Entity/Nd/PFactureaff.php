<?php

namespace App\Entity\Nd;

use App\Repository\Nd\PFactureaffRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'P_FACTUREAFF')]
#[ORM\Entity(repositoryClass: PFactureaffRepository::class)]
class PFactureaff
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "FA_ListeFact01", type: Types::SMALLINT, nullable: true)]
    private ?int $faListefact01 = null;

    #[ORM\Column(name: "FA_ListeFact02", type: Types::SMALLINT, nullable: true)]
    private ?int $faListefact02 = null;

    #[ORM\Column(name: "FA_ListeFact03", type: Types::SMALLINT, nullable: true)]
    private ?int $faListefact03 = null;

    #[ORM\Column(name: "FA_ListeFact04", type: Types::SMALLINT, nullable: true)]
    private ?int $faListefact04 = null;

    #[ORM\Column(name: "FA_ListeFact05", type: Types::SMALLINT, nullable: true)]
    private ?int $faListefact05 = null;

    #[ORM\Column(name: "FA_ListeFact06", type: Types::SMALLINT, nullable: true)]
    private ?int $faListefact06 = null;

    #[ORM\Column(name: "FA_ListeFact07", type: Types::SMALLINT, nullable: true)]
    private ?int $faListefact07 = null;

    #[ORM\Column(name: "FA_ListeFact08", type: Types::SMALLINT, nullable: true)]
    private ?int $faListefact08 = null;

    #[ORM\Column(name: "FA_ListeFact09", type: Types::SMALLINT, nullable: true)]
    private ?int $faListefact09 = null;

    #[ORM\Column(name: "FA_ListeFact10", type: Types::SMALLINT, nullable: true)]
    private ?int $faListefact10 = null;

    #[ORM\Column(name: "FA_ListeFact11", type: Types::SMALLINT, nullable: true)]
    private ?int $faListefact11 = null;

    #[ORM\Column(name: "FA_ListeFact12", type: Types::SMALLINT, nullable: true)]
    private ?int $faListefact12 = null;

    #[ORM\Column(name: "FA_ListeFact13", type: Types::SMALLINT, nullable: true)]
    private ?int $faListefact13 = null;

    #[ORM\Column(name: "FA_ListeFact14", type: Types::SMALLINT, nullable: true)]
    private ?int $faListefact14 = null;

    #[ORM\Column(name: "FA_ListeFact15", type: Types::SMALLINT, nullable: true)]
    private ?int $faListefact15 = null;

    #[ORM\Column(name: "FA_ListeFact16", type: Types::SMALLINT, nullable: true)]
    private ?int $faListefact16 = null;

    #[ORM\Column(name: "FA_ListeFact17", type: Types::SMALLINT, nullable: true)]
    private ?int $faListefact17 = null;

    #[ORM\Column(name: "FA_ListeFact18", type: Types::SMALLINT, nullable: true)]
    private ?int $faListefact18 = null;

    #[ORM\Column(name: "FA_ListeFact19", type: Types::SMALLINT, nullable: true)]
    private ?int $faListefact19 = null;

    #[ORM\Column(name: "FA_ListeFact20", type: Types::SMALLINT, nullable: true)]
    private ?int $faListefact20 = null;

    #[ORM\Column(name: "FA_ListeFact21", type: Types::SMALLINT, nullable: true)]
    private ?int $faListefact21 = null;

    #[ORM\Column(name: "FA_ListeFact22", type: Types::SMALLINT, nullable: true)]
    private ?int $faListefact22 = null;

    #[ORM\Column(name: "FA_ListeFact23", type: Types::SMALLINT, nullable: true)]
    private ?int $faListefact23 = null;

    #[ORM\Column(name: "FA_ListeFact24", type: Types::SMALLINT, nullable: true)]
    private ?int $faListefact24 = null;

    #[ORM\Column(name: "FA_ListeFact25", type: Types::SMALLINT, nullable: true)]
    private ?int $faListefact25 = null;

    #[ORM\Column(name: "FA_ListeFact26", type: Types::SMALLINT, nullable: true)]
    private ?int $faListefact26 = null;

    #[ORM\Column(name: "FA_ListeFact27", type: Types::SMALLINT, nullable: true)]
    private ?int $faListefact27 = null;

    #[ORM\Column(name: "FA_ListeFact28", type: Types::SMALLINT, nullable: true)]
    private ?int $faListefact28 = null;

    #[ORM\Column(name: "FA_ListeFact29", type: Types::SMALLINT, nullable: true)]
    private ?int $faListefact29 = null;

    #[ORM\Column(name: "FA_ListeFact30", type: Types::SMALLINT, nullable: true)]
    private ?int $faListefact30 = null;

    #[ORM\Column(name: "FA_ListeFact31", type: Types::SMALLINT, nullable: true)]
    private ?int $faListefact31 = null;

    #[ORM\Column(name: "FA_ListeFact32", type: Types::SMALLINT, nullable: true)]
    private ?int $faListefact32 = null;

    #[ORM\Column(name: "FA_ListeFact33", type: Types::SMALLINT, nullable: true)]
    private ?int $faListefact33 = null;

    #[ORM\Column(name: "FA_ListeFact34", type: Types::SMALLINT, nullable: true)]
    private ?int $faListefact34 = null;

    #[ORM\Column(name: "FA_ListeFact35", type: Types::SMALLINT, nullable: true)]
    private ?int $faListefact35 = null;

    #[ORM\Column(name: "FA_ListeFact36", type: Types::SMALLINT, nullable: true)]
    private ?int $faListefact36 = null;

    #[ORM\Column(name: "FA_ListeFact37", type: Types::SMALLINT, nullable: true)]
    private ?int $faListefact37 = null;

    #[ORM\Column(name: "FA_ListeFact38", type: Types::SMALLINT, nullable: true)]
    private ?int $faListefact38 = null;

    #[ORM\Column(name: "FA_ListeFact39", type: Types::SMALLINT, nullable: true)]
    private ?int $faListefact39 = null;

    #[ORM\Column(name: "FA_ListeFact40", type: Types::SMALLINT, nullable: true)]
    private ?int $faListefact40 = null;

    #[ORM\Column(name: "FA_ListeFact41", type: Types::SMALLINT, nullable: true)]
    private ?int $faListefact41 = null;

    #[ORM\Column(name: "FA_ListeFact42", type: Types::SMALLINT, nullable: true)]
    private ?int $faListefact42 = null;

    #[ORM\Column(name: "FA_ListeFact43", type: Types::SMALLINT, nullable: true)]
    private ?int $faListefact43 = null;

    #[ORM\Column(name: "FA_ListeFact44", type: Types::SMALLINT, nullable: true)]
    private ?int $faListefact44 = null;

    #[ORM\Column(name: "FA_ListeFact45", type: Types::SMALLINT, nullable: true)]
    private ?int $faListefact45 = null;

    #[ORM\Column(name: "FA_ListeFact46", type: Types::SMALLINT, nullable: true)]
    private ?int $faListefact46 = null;

    #[ORM\Column(name: "FA_ListeFact47", type: Types::SMALLINT, nullable: true)]
    private ?int $faListefact47 = null;

    #[ORM\Column(name: "FA_ListeFact48", type: Types::SMALLINT, nullable: true)]
    private ?int $faListefact48 = null;

    #[ORM\Column(name: "FA_ListeFact49", type: Types::SMALLINT, nullable: true)]
    private ?int $faListefact49 = null;

    #[ORM\Column(name: "FA_ListeFact50", type: Types::SMALLINT, nullable: true)]
    private ?int $faListefact50 = null;

    #[ORM\Column(name: "FA_ListeFact51", type: Types::SMALLINT, nullable: true)]
    private ?int $faListefact51 = null;

    #[ORM\Column(name: "FA_ListeFact52", type: Types::SMALLINT, nullable: true)]
    private ?int $faListefact52 = null;

    #[ORM\Column(name: "FA_ListeFact53", type: Types::SMALLINT, nullable: true)]
    private ?int $faListefact53 = null;

    #[ORM\Column(name: "FA_ListeFact54", type: Types::SMALLINT, nullable: true)]
    private ?int $faListefact54 = null;

    #[ORM\Column(name: "FA_ListeFact55", type: Types::SMALLINT, nullable: true)]
    private ?int $faListefact55 = null;

    #[ORM\Column(name: "FA_ListeFact56", type: Types::SMALLINT, nullable: true)]
    private ?int $faListefact56 = null;

    #[ORM\Column(name: "FA_ListeFact57", type: Types::SMALLINT, nullable: true)]
    private ?int $faListefact57 = null;

    #[ORM\Column(name: "FA_ListeFact58", type: Types::SMALLINT, nullable: true)]
    private ?int $faListefact58 = null;

    #[ORM\Column(name: "FA_ListeFact59", type: Types::SMALLINT, nullable: true)]
    private ?int $faListefact59 = null;

    #[ORM\Column(name: "FA_ListeFact60", type: Types::SMALLINT, nullable: true)]
    private ?int $faListefact60 = null;

    #[ORM\Column(name: "FA_ListeFact61", type: Types::SMALLINT, nullable: true)]
    private ?int $faListefact61 = null;

    #[ORM\Column(name: "FA_ListeFact62", type: Types::SMALLINT, nullable: true)]
    private ?int $faListefact62 = null;

    #[ORM\Column(name: "FA_ListeFact63", type: Types::SMALLINT, nullable: true)]
    private ?int $faListefact63 = null;

    #[ORM\Column(name: "FA_ListeFact64", type: Types::SMALLINT, nullable: true)]
    private ?int $faListefact64 = null;

    #[ORM\Column(name: "FA_ListeFact65", type: Types::SMALLINT, nullable: true)]
    private ?int $faListefact65 = null;

    #[ORM\Column(name: "FA_ListeFact66", type: Types::SMALLINT, nullable: true)]
    private ?int $faListefact66 = null;

    #[ORM\Column(name: "FA_ListeFact67", type: Types::SMALLINT, nullable: true)]
    private ?int $faListefact67 = null;

    #[ORM\Column(name: "FA_ListeFact68", type: Types::SMALLINT, nullable: true)]
    private ?int $faListefact68 = null;

    #[ORM\Column(name: "FA_ListeFact69", type: Types::SMALLINT, nullable: true)]
    private ?int $faListefact69 = null;

    #[ORM\Column(name: "FA_ListeFact70", type: Types::SMALLINT, nullable: true)]
    private ?int $faListefact70 = null;

    #[ORM\Column(name: "FA_ListeFact71", type: Types::SMALLINT, nullable: true)]
    private ?int $faListefact71 = null;

    #[ORM\Column(name: "FA_ListeFact72", type: Types::SMALLINT, nullable: true)]
    private ?int $faListefact72 = null;

    #[ORM\Column(name: "FA_ListeFact73", type: Types::SMALLINT, nullable: true)]
    private ?int $faListefact73 = null;

    #[ORM\Column(name: "FA_ListeFact74", type: Types::SMALLINT, nullable: true)]
    private ?int $faListefact74 = null;

    #[ORM\Column(name: "FA_ListeFact75", type: Types::SMALLINT, nullable: true)]
    private ?int $faListefact75 = null;

    #[ORM\Column(name: "FA_ListeFact76", type: Types::SMALLINT, nullable: true)]
    private ?int $faListefact76 = null;

    #[ORM\Column(name: "FA_ListeFact77", type: Types::SMALLINT, nullable: true)]
    private ?int $faListefact77 = null;

    #[ORM\Column(name: "FA_ListeFact78", type: Types::SMALLINT, nullable: true)]
    private ?int $faListefact78 = null;

    #[ORM\Column(name: "FA_ListeFact79", type: Types::SMALLINT, nullable: true)]
    private ?int $faListefact79 = null;

    #[ORM\Column(name: "FA_ListeFact80", type: Types::SMALLINT, nullable: true)]
    private ?int $faListefact80 = null;

    #[ORM\Column(name: "FA_ListeFact81", type: Types::SMALLINT, nullable: true)]
    private ?int $faListefact81 = null;

    #[ORM\Column(name: "FA_ListeFact82", type: Types::SMALLINT, nullable: true)]
    private ?int $faListefact82 = null;

    #[ORM\Column(name: "FA_ListeFact83", type: Types::SMALLINT, nullable: true)]
    private ?int $faListefact83 = null;

    #[ORM\Column(name: "FA_ListeFact84", type: Types::SMALLINT, nullable: true)]
    private ?int $faListefact84 = null;

    #[ORM\Column(name: "FA_ListeFact85", type: Types::SMALLINT, nullable: true)]
    private ?int $faListefact85 = null;

    #[ORM\Column(name: "FA_ListeFact86", type: Types::SMALLINT, nullable: true)]
    private ?int $faListefact86 = null;

    #[ORM\Column(name: "FA_ListeFact87", type: Types::SMALLINT, nullable: true)]
    private ?int $faListefact87 = null;

    #[ORM\Column(name: "FA_ListeFact88", type: Types::SMALLINT, nullable: true)]
    private ?int $faListefact88 = null;

    #[ORM\Column(name: "FA_ListeFact89", type: Types::SMALLINT, nullable: true)]
    private ?int $faListefact89 = null;

    #[ORM\Column(name: "FA_ListeFact90", type: Types::SMALLINT, nullable: true)]
    private ?int $faListefact90 = null;

    #[ORM\Column(name: "FA_ListeFact91", type: Types::SMALLINT, nullable: true)]
    private ?int $faListefact91 = null;

    #[ORM\Column(name: "FA_ListeFact92", type: Types::SMALLINT, nullable: true)]
    private ?int $faListefact92 = null;

    #[ORM\Column(name: "FA_ListeFact93", type: Types::SMALLINT, nullable: true)]
    private ?int $faListefact93 = null;

    #[ORM\Column(name: "FA_ListeFact94", type: Types::SMALLINT, nullable: true)]
    private ?int $faListefact94 = null;

    #[ORM\Column(name: "FA_ListeFact95", type: Types::SMALLINT, nullable: true)]
    private ?int $faListefact95 = null;

    #[ORM\Column(name: "FA_ListeFact96", type: Types::SMALLINT, nullable: true)]
    private ?int $faListefact96 = null;

    #[ORM\Column(name: "FA_DetailFact01", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact01 = null;

    #[ORM\Column(name: "FA_DetailFact02", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact02 = null;

    #[ORM\Column(name: "FA_DetailFact03", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact03 = null;

    #[ORM\Column(name: "FA_DetailFact04", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact04 = null;

    #[ORM\Column(name: "FA_DetailFact05", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact05 = null;

    #[ORM\Column(name: "FA_DetailFact06", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact06 = null;

    #[ORM\Column(name: "FA_DetailFact07", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact07 = null;

    #[ORM\Column(name: "FA_DetailFact08", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact08 = null;

    #[ORM\Column(name: "FA_DetailFact09", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact09 = null;

    #[ORM\Column(name: "FA_DetailFact10", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact10 = null;

    #[ORM\Column(name: "FA_DetailFact11", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact11 = null;

    #[ORM\Column(name: "FA_DetailFact12", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact12 = null;

    #[ORM\Column(name: "FA_DetailFact13", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact13 = null;

    #[ORM\Column(name: "FA_DetailFact14", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact14 = null;

    #[ORM\Column(name: "FA_DetailFact15", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact15 = null;

    #[ORM\Column(name: "FA_DetailFact16", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact16 = null;

    #[ORM\Column(name: "FA_DetailFact17", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact17 = null;

    #[ORM\Column(name: "FA_DetailFact18", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact18 = null;

    #[ORM\Column(name: "FA_DetailFact19", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact19 = null;

    #[ORM\Column(name: "FA_DetailFact20", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact20 = null;

    #[ORM\Column(name: "FA_DetailFact21", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact21 = null;

    #[ORM\Column(name: "FA_DetailFact22", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact22 = null;

    #[ORM\Column(name: "FA_DetailFact23", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact23 = null;

    #[ORM\Column(name: "FA_DetailFact24", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact24 = null;

    #[ORM\Column(name: "FA_DetailFact25", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact25 = null;

    #[ORM\Column(name: "FA_DetailFact26", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact26 = null;

    #[ORM\Column(name: "FA_DetailFact27", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact27 = null;

    #[ORM\Column(name: "FA_DetailFact28", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact28 = null;

    #[ORM\Column(name: "FA_DetailFact29", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact29 = null;

    #[ORM\Column(name: "FA_DetailFact30", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact30 = null;

    #[ORM\Column(name: "FA_DetailFact31", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact31 = null;

    #[ORM\Column(name: "FA_DetailFact32", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact32 = null;

    #[ORM\Column(name: "FA_DetailFact33", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact33 = null;

    #[ORM\Column(name: "FA_DetailFact34", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact34 = null;

    #[ORM\Column(name: "FA_DetailFact35", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact35 = null;

    #[ORM\Column(name: "FA_DetailFact36", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact36 = null;

    #[ORM\Column(name: "FA_DetailFact37", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact37 = null;

    #[ORM\Column(name: "FA_DetailFact38", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact38 = null;

    #[ORM\Column(name: "FA_DetailFact39", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact39 = null;

    #[ORM\Column(name: "FA_DetailFact40", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact40 = null;

    #[ORM\Column(name: "FA_DetailFact41", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact41 = null;

    #[ORM\Column(name: "FA_DetailFact42", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact42 = null;

    #[ORM\Column(name: "FA_DetailFact43", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact43 = null;

    #[ORM\Column(name: "FA_DetailFact44", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact44 = null;

    #[ORM\Column(name: "FA_DetailFact45", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact45 = null;

    #[ORM\Column(name: "FA_DetailFact46", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact46 = null;

    #[ORM\Column(name: "FA_DetailFact47", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact47 = null;

    #[ORM\Column(name: "FA_DetailFact48", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact48 = null;

    #[ORM\Column(name: "FA_DetailFact49", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact49 = null;

    #[ORM\Column(name: "FA_DetailFact50", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact50 = null;

    #[ORM\Column(name: "FA_DetailFact51", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact51 = null;

    #[ORM\Column(name: "FA_DetailFact52", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact52 = null;

    #[ORM\Column(name: "FA_DetailFact53", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact53 = null;

    #[ORM\Column(name: "FA_DetailFact54", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact54 = null;

    #[ORM\Column(name: "FA_DetailFact55", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact55 = null;

    #[ORM\Column(name: "FA_DetailFact56", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact56 = null;

    #[ORM\Column(name: "FA_DetailFact57", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact57 = null;

    #[ORM\Column(name: "FA_DetailFact58", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact58 = null;

    #[ORM\Column(name: "FA_DetailFact59", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact59 = null;

    #[ORM\Column(name: "FA_DetailFact60", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact60 = null;

    #[ORM\Column(name: "FA_DetailFact61", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact61 = null;

    #[ORM\Column(name: "FA_DetailFact62", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact62 = null;

    #[ORM\Column(name: "FA_DetailFact63", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact63 = null;

    #[ORM\Column(name: "FA_DetailFact64", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact64 = null;

    #[ORM\Column(name: "FA_DetailFact65", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact65 = null;

    #[ORM\Column(name: "FA_DetailFact66", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact66 = null;

    #[ORM\Column(name: "FA_DetailFact67", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact67 = null;

    #[ORM\Column(name: "FA_DetailFact68", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact68 = null;

    #[ORM\Column(name: "FA_DetailFact69", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact69 = null;

    #[ORM\Column(name: "FA_DetailFact70", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact70 = null;

    #[ORM\Column(name: "FA_DetailFact71", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact71 = null;

    #[ORM\Column(name: "FA_DetailFact72", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact72 = null;

    #[ORM\Column(name: "FA_DetailFact73", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact73 = null;

    #[ORM\Column(name: "FA_DetailFact74", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact74 = null;

    #[ORM\Column(name: "FA_DetailFact75", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact75 = null;

    #[ORM\Column(name: "FA_DetailFact76", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact76 = null;

    #[ORM\Column(name: "FA_DetailFact77", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact77 = null;

    #[ORM\Column(name: "FA_DetailFact78", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact78 = null;

    #[ORM\Column(name: "FA_DetailFact79", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact79 = null;

    #[ORM\Column(name: "FA_DetailFact80", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact80 = null;

    #[ORM\Column(name: "FA_DetailFact81", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact81 = null;

    #[ORM\Column(name: "FA_DetailFact82", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact82 = null;

    #[ORM\Column(name: "FA_DetailFact83", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact83 = null;

    #[ORM\Column(name: "FA_DetailFact84", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact84 = null;

    #[ORM\Column(name: "FA_DetailFact85", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact85 = null;

    #[ORM\Column(name: "FA_DetailFact86", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact86 = null;

    #[ORM\Column(name: "FA_DetailFact87", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact87 = null;

    #[ORM\Column(name: "FA_DetailFact88", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact88 = null;

    #[ORM\Column(name: "FA_DetailFact89", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact89 = null;

    #[ORM\Column(name: "FA_DetailFact90", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact90 = null;

    #[ORM\Column(name: "FA_DetailFact91", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact91 = null;

    #[ORM\Column(name: "FA_DetailFact92", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact92 = null;

    #[ORM\Column(name: "FA_DetailFact93", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact93 = null;

    #[ORM\Column(name: "FA_DetailFact94", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact94 = null;

    #[ORM\Column(name: "FA_DetailFact95", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact95 = null;

    #[ORM\Column(name: "FA_DetailFact96", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact96 = null;

    #[ORM\Column(name: "FA_DetailFact97", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact97 = null;

    #[ORM\Column(name: "FA_DetailFact98", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact98 = null;

    #[ORM\Column(name: "FA_DetailFact99", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact99 = null;

    #[ORM\Column(name: "FA_DetailFact100", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact100 = null;

    #[ORM\Column(name: "FA_DetailFact101", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact101 = null;

    #[ORM\Column(name: "FA_DetailFact102", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact102 = null;

    #[ORM\Column(name: "FA_DetailFact103", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact103 = null;

    #[ORM\Column(name: "FA_DetailFact104", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact104 = null;

    #[ORM\Column(name: "FA_DetailFact105", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact105 = null;

    #[ORM\Column(name: "FA_DetailFact106", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact106 = null;

    #[ORM\Column(name: "FA_DetailFact107", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact107 = null;

    #[ORM\Column(name: "FA_DetailFact108", type: Types::SMALLINT, nullable: true)]
    private ?int $faDetailfact108 = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getFaListefact01(): ?int
    {
        return $this->faListefact01;
    }

    public function setFaListefact01(?int $faListefact01): static
    {
        $this->faListefact01 = $faListefact01;

        return $this;
    }

    public function getFaListefact02(): ?int
    {
        return $this->faListefact02;
    }

    public function setFaListefact02(?int $faListefact02): static
    {
        $this->faListefact02 = $faListefact02;

        return $this;
    }

    public function getFaListefact03(): ?int
    {
        return $this->faListefact03;
    }

    public function setFaListefact03(?int $faListefact03): static
    {
        $this->faListefact03 = $faListefact03;

        return $this;
    }

    public function getFaListefact04(): ?int
    {
        return $this->faListefact04;
    }

    public function setFaListefact04(?int $faListefact04): static
    {
        $this->faListefact04 = $faListefact04;

        return $this;
    }

    public function getFaListefact05(): ?int
    {
        return $this->faListefact05;
    }

    public function setFaListefact05(?int $faListefact05): static
    {
        $this->faListefact05 = $faListefact05;

        return $this;
    }

    public function getFaListefact06(): ?int
    {
        return $this->faListefact06;
    }

    public function setFaListefact06(?int $faListefact06): static
    {
        $this->faListefact06 = $faListefact06;

        return $this;
    }

    public function getFaListefact07(): ?int
    {
        return $this->faListefact07;
    }

    public function setFaListefact07(?int $faListefact07): static
    {
        $this->faListefact07 = $faListefact07;

        return $this;
    }

    public function getFaListefact08(): ?int
    {
        return $this->faListefact08;
    }

    public function setFaListefact08(?int $faListefact08): static
    {
        $this->faListefact08 = $faListefact08;

        return $this;
    }

    public function getFaListefact09(): ?int
    {
        return $this->faListefact09;
    }

    public function setFaListefact09(?int $faListefact09): static
    {
        $this->faListefact09 = $faListefact09;

        return $this;
    }

    public function getFaListefact10(): ?int
    {
        return $this->faListefact10;
    }

    public function setFaListefact10(?int $faListefact10): static
    {
        $this->faListefact10 = $faListefact10;

        return $this;
    }

    public function getFaListefact11(): ?int
    {
        return $this->faListefact11;
    }

    public function setFaListefact11(?int $faListefact11): static
    {
        $this->faListefact11 = $faListefact11;

        return $this;
    }

    public function getFaListefact12(): ?int
    {
        return $this->faListefact12;
    }

    public function setFaListefact12(?int $faListefact12): static
    {
        $this->faListefact12 = $faListefact12;

        return $this;
    }

    public function getFaListefact13(): ?int
    {
        return $this->faListefact13;
    }

    public function setFaListefact13(?int $faListefact13): static
    {
        $this->faListefact13 = $faListefact13;

        return $this;
    }

    public function getFaListefact14(): ?int
    {
        return $this->faListefact14;
    }

    public function setFaListefact14(?int $faListefact14): static
    {
        $this->faListefact14 = $faListefact14;

        return $this;
    }

    public function getFaListefact15(): ?int
    {
        return $this->faListefact15;
    }

    public function setFaListefact15(?int $faListefact15): static
    {
        $this->faListefact15 = $faListefact15;

        return $this;
    }

    public function getFaListefact16(): ?int
    {
        return $this->faListefact16;
    }

    public function setFaListefact16(?int $faListefact16): static
    {
        $this->faListefact16 = $faListefact16;

        return $this;
    }

    public function getFaListefact17(): ?int
    {
        return $this->faListefact17;
    }

    public function setFaListefact17(?int $faListefact17): static
    {
        $this->faListefact17 = $faListefact17;

        return $this;
    }

    public function getFaListefact18(): ?int
    {
        return $this->faListefact18;
    }

    public function setFaListefact18(?int $faListefact18): static
    {
        $this->faListefact18 = $faListefact18;

        return $this;
    }

    public function getFaListefact19(): ?int
    {
        return $this->faListefact19;
    }

    public function setFaListefact19(?int $faListefact19): static
    {
        $this->faListefact19 = $faListefact19;

        return $this;
    }

    public function getFaListefact20(): ?int
    {
        return $this->faListefact20;
    }

    public function setFaListefact20(?int $faListefact20): static
    {
        $this->faListefact20 = $faListefact20;

        return $this;
    }

    public function getFaListefact21(): ?int
    {
        return $this->faListefact21;
    }

    public function setFaListefact21(?int $faListefact21): static
    {
        $this->faListefact21 = $faListefact21;

        return $this;
    }

    public function getFaListefact22(): ?int
    {
        return $this->faListefact22;
    }

    public function setFaListefact22(?int $faListefact22): static
    {
        $this->faListefact22 = $faListefact22;

        return $this;
    }

    public function getFaListefact23(): ?int
    {
        return $this->faListefact23;
    }

    public function setFaListefact23(?int $faListefact23): static
    {
        $this->faListefact23 = $faListefact23;

        return $this;
    }

    public function getFaListefact24(): ?int
    {
        return $this->faListefact24;
    }

    public function setFaListefact24(?int $faListefact24): static
    {
        $this->faListefact24 = $faListefact24;

        return $this;
    }

    public function getFaListefact25(): ?int
    {
        return $this->faListefact25;
    }

    public function setFaListefact25(?int $faListefact25): static
    {
        $this->faListefact25 = $faListefact25;

        return $this;
    }

    public function getFaListefact26(): ?int
    {
        return $this->faListefact26;
    }

    public function setFaListefact26(?int $faListefact26): static
    {
        $this->faListefact26 = $faListefact26;

        return $this;
    }

    public function getFaListefact27(): ?int
    {
        return $this->faListefact27;
    }

    public function setFaListefact27(?int $faListefact27): static
    {
        $this->faListefact27 = $faListefact27;

        return $this;
    }

    public function getFaListefact28(): ?int
    {
        return $this->faListefact28;
    }

    public function setFaListefact28(?int $faListefact28): static
    {
        $this->faListefact28 = $faListefact28;

        return $this;
    }

    public function getFaListefact29(): ?int
    {
        return $this->faListefact29;
    }

    public function setFaListefact29(?int $faListefact29): static
    {
        $this->faListefact29 = $faListefact29;

        return $this;
    }

    public function getFaListefact30(): ?int
    {
        return $this->faListefact30;
    }

    public function setFaListefact30(?int $faListefact30): static
    {
        $this->faListefact30 = $faListefact30;

        return $this;
    }

    public function getFaListefact31(): ?int
    {
        return $this->faListefact31;
    }

    public function setFaListefact31(?int $faListefact31): static
    {
        $this->faListefact31 = $faListefact31;

        return $this;
    }

    public function getFaListefact32(): ?int
    {
        return $this->faListefact32;
    }

    public function setFaListefact32(?int $faListefact32): static
    {
        $this->faListefact32 = $faListefact32;

        return $this;
    }

    public function getFaListefact33(): ?int
    {
        return $this->faListefact33;
    }

    public function setFaListefact33(?int $faListefact33): static
    {
        $this->faListefact33 = $faListefact33;

        return $this;
    }

    public function getFaListefact34(): ?int
    {
        return $this->faListefact34;
    }

    public function setFaListefact34(?int $faListefact34): static
    {
        $this->faListefact34 = $faListefact34;

        return $this;
    }

    public function getFaListefact35(): ?int
    {
        return $this->faListefact35;
    }

    public function setFaListefact35(?int $faListefact35): static
    {
        $this->faListefact35 = $faListefact35;

        return $this;
    }

    public function getFaListefact36(): ?int
    {
        return $this->faListefact36;
    }

    public function setFaListefact36(?int $faListefact36): static
    {
        $this->faListefact36 = $faListefact36;

        return $this;
    }

    public function getFaListefact37(): ?int
    {
        return $this->faListefact37;
    }

    public function setFaListefact37(?int $faListefact37): static
    {
        $this->faListefact37 = $faListefact37;

        return $this;
    }

    public function getFaListefact38(): ?int
    {
        return $this->faListefact38;
    }

    public function setFaListefact38(?int $faListefact38): static
    {
        $this->faListefact38 = $faListefact38;

        return $this;
    }

    public function getFaListefact39(): ?int
    {
        return $this->faListefact39;
    }

    public function setFaListefact39(?int $faListefact39): static
    {
        $this->faListefact39 = $faListefact39;

        return $this;
    }

    public function getFaListefact40(): ?int
    {
        return $this->faListefact40;
    }

    public function setFaListefact40(?int $faListefact40): static
    {
        $this->faListefact40 = $faListefact40;

        return $this;
    }

    public function getFaListefact41(): ?int
    {
        return $this->faListefact41;
    }

    public function setFaListefact41(?int $faListefact41): static
    {
        $this->faListefact41 = $faListefact41;

        return $this;
    }

    public function getFaListefact42(): ?int
    {
        return $this->faListefact42;
    }

    public function setFaListefact42(?int $faListefact42): static
    {
        $this->faListefact42 = $faListefact42;

        return $this;
    }

    public function getFaListefact43(): ?int
    {
        return $this->faListefact43;
    }

    public function setFaListefact43(?int $faListefact43): static
    {
        $this->faListefact43 = $faListefact43;

        return $this;
    }

    public function getFaListefact44(): ?int
    {
        return $this->faListefact44;
    }

    public function setFaListefact44(?int $faListefact44): static
    {
        $this->faListefact44 = $faListefact44;

        return $this;
    }

    public function getFaListefact45(): ?int
    {
        return $this->faListefact45;
    }

    public function setFaListefact45(?int $faListefact45): static
    {
        $this->faListefact45 = $faListefact45;

        return $this;
    }

    public function getFaListefact46(): ?int
    {
        return $this->faListefact46;
    }

    public function setFaListefact46(?int $faListefact46): static
    {
        $this->faListefact46 = $faListefact46;

        return $this;
    }

    public function getFaListefact47(): ?int
    {
        return $this->faListefact47;
    }

    public function setFaListefact47(?int $faListefact47): static
    {
        $this->faListefact47 = $faListefact47;

        return $this;
    }

    public function getFaListefact48(): ?int
    {
        return $this->faListefact48;
    }

    public function setFaListefact48(?int $faListefact48): static
    {
        $this->faListefact48 = $faListefact48;

        return $this;
    }

    public function getFaListefact49(): ?int
    {
        return $this->faListefact49;
    }

    public function setFaListefact49(?int $faListefact49): static
    {
        $this->faListefact49 = $faListefact49;

        return $this;
    }

    public function getFaListefact50(): ?int
    {
        return $this->faListefact50;
    }

    public function setFaListefact50(?int $faListefact50): static
    {
        $this->faListefact50 = $faListefact50;

        return $this;
    }

    public function getFaListefact51(): ?int
    {
        return $this->faListefact51;
    }

    public function setFaListefact51(?int $faListefact51): static
    {
        $this->faListefact51 = $faListefact51;

        return $this;
    }

    public function getFaListefact52(): ?int
    {
        return $this->faListefact52;
    }

    public function setFaListefact52(?int $faListefact52): static
    {
        $this->faListefact52 = $faListefact52;

        return $this;
    }

    public function getFaListefact53(): ?int
    {
        return $this->faListefact53;
    }

    public function setFaListefact53(?int $faListefact53): static
    {
        $this->faListefact53 = $faListefact53;

        return $this;
    }

    public function getFaListefact54(): ?int
    {
        return $this->faListefact54;
    }

    public function setFaListefact54(?int $faListefact54): static
    {
        $this->faListefact54 = $faListefact54;

        return $this;
    }

    public function getFaListefact55(): ?int
    {
        return $this->faListefact55;
    }

    public function setFaListefact55(?int $faListefact55): static
    {
        $this->faListefact55 = $faListefact55;

        return $this;
    }

    public function getFaListefact56(): ?int
    {
        return $this->faListefact56;
    }

    public function setFaListefact56(?int $faListefact56): static
    {
        $this->faListefact56 = $faListefact56;

        return $this;
    }

    public function getFaListefact57(): ?int
    {
        return $this->faListefact57;
    }

    public function setFaListefact57(?int $faListefact57): static
    {
        $this->faListefact57 = $faListefact57;

        return $this;
    }

    public function getFaListefact58(): ?int
    {
        return $this->faListefact58;
    }

    public function setFaListefact58(?int $faListefact58): static
    {
        $this->faListefact58 = $faListefact58;

        return $this;
    }

    public function getFaListefact59(): ?int
    {
        return $this->faListefact59;
    }

    public function setFaListefact59(?int $faListefact59): static
    {
        $this->faListefact59 = $faListefact59;

        return $this;
    }

    public function getFaListefact60(): ?int
    {
        return $this->faListefact60;
    }

    public function setFaListefact60(?int $faListefact60): static
    {
        $this->faListefact60 = $faListefact60;

        return $this;
    }

    public function getFaListefact61(): ?int
    {
        return $this->faListefact61;
    }

    public function setFaListefact61(?int $faListefact61): static
    {
        $this->faListefact61 = $faListefact61;

        return $this;
    }

    public function getFaListefact62(): ?int
    {
        return $this->faListefact62;
    }

    public function setFaListefact62(?int $faListefact62): static
    {
        $this->faListefact62 = $faListefact62;

        return $this;
    }

    public function getFaListefact63(): ?int
    {
        return $this->faListefact63;
    }

    public function setFaListefact63(?int $faListefact63): static
    {
        $this->faListefact63 = $faListefact63;

        return $this;
    }

    public function getFaListefact64(): ?int
    {
        return $this->faListefact64;
    }

    public function setFaListefact64(?int $faListefact64): static
    {
        $this->faListefact64 = $faListefact64;

        return $this;
    }

    public function getFaListefact65(): ?int
    {
        return $this->faListefact65;
    }

    public function setFaListefact65(?int $faListefact65): static
    {
        $this->faListefact65 = $faListefact65;

        return $this;
    }

    public function getFaListefact66(): ?int
    {
        return $this->faListefact66;
    }

    public function setFaListefact66(?int $faListefact66): static
    {
        $this->faListefact66 = $faListefact66;

        return $this;
    }

    public function getFaListefact67(): ?int
    {
        return $this->faListefact67;
    }

    public function setFaListefact67(?int $faListefact67): static
    {
        $this->faListefact67 = $faListefact67;

        return $this;
    }

    public function getFaListefact68(): ?int
    {
        return $this->faListefact68;
    }

    public function setFaListefact68(?int $faListefact68): static
    {
        $this->faListefact68 = $faListefact68;

        return $this;
    }

    public function getFaListefact69(): ?int
    {
        return $this->faListefact69;
    }

    public function setFaListefact69(?int $faListefact69): static
    {
        $this->faListefact69 = $faListefact69;

        return $this;
    }

    public function getFaListefact70(): ?int
    {
        return $this->faListefact70;
    }

    public function setFaListefact70(?int $faListefact70): static
    {
        $this->faListefact70 = $faListefact70;

        return $this;
    }

    public function getFaListefact71(): ?int
    {
        return $this->faListefact71;
    }

    public function setFaListefact71(?int $faListefact71): static
    {
        $this->faListefact71 = $faListefact71;

        return $this;
    }

    public function getFaListefact72(): ?int
    {
        return $this->faListefact72;
    }

    public function setFaListefact72(?int $faListefact72): static
    {
        $this->faListefact72 = $faListefact72;

        return $this;
    }

    public function getFaListefact73(): ?int
    {
        return $this->faListefact73;
    }

    public function setFaListefact73(?int $faListefact73): static
    {
        $this->faListefact73 = $faListefact73;

        return $this;
    }

    public function getFaListefact74(): ?int
    {
        return $this->faListefact74;
    }

    public function setFaListefact74(?int $faListefact74): static
    {
        $this->faListefact74 = $faListefact74;

        return $this;
    }

    public function getFaListefact75(): ?int
    {
        return $this->faListefact75;
    }

    public function setFaListefact75(?int $faListefact75): static
    {
        $this->faListefact75 = $faListefact75;

        return $this;
    }

    public function getFaListefact76(): ?int
    {
        return $this->faListefact76;
    }

    public function setFaListefact76(?int $faListefact76): static
    {
        $this->faListefact76 = $faListefact76;

        return $this;
    }

    public function getFaListefact77(): ?int
    {
        return $this->faListefact77;
    }

    public function setFaListefact77(?int $faListefact77): static
    {
        $this->faListefact77 = $faListefact77;

        return $this;
    }

    public function getFaListefact78(): ?int
    {
        return $this->faListefact78;
    }

    public function setFaListefact78(?int $faListefact78): static
    {
        $this->faListefact78 = $faListefact78;

        return $this;
    }

    public function getFaListefact79(): ?int
    {
        return $this->faListefact79;
    }

    public function setFaListefact79(?int $faListefact79): static
    {
        $this->faListefact79 = $faListefact79;

        return $this;
    }

    public function getFaListefact80(): ?int
    {
        return $this->faListefact80;
    }

    public function setFaListefact80(?int $faListefact80): static
    {
        $this->faListefact80 = $faListefact80;

        return $this;
    }

    public function getFaListefact81(): ?int
    {
        return $this->faListefact81;
    }

    public function setFaListefact81(?int $faListefact81): static
    {
        $this->faListefact81 = $faListefact81;

        return $this;
    }

    public function getFaListefact82(): ?int
    {
        return $this->faListefact82;
    }

    public function setFaListefact82(?int $faListefact82): static
    {
        $this->faListefact82 = $faListefact82;

        return $this;
    }

    public function getFaListefact83(): ?int
    {
        return $this->faListefact83;
    }

    public function setFaListefact83(?int $faListefact83): static
    {
        $this->faListefact83 = $faListefact83;

        return $this;
    }

    public function getFaListefact84(): ?int
    {
        return $this->faListefact84;
    }

    public function setFaListefact84(?int $faListefact84): static
    {
        $this->faListefact84 = $faListefact84;

        return $this;
    }

    public function getFaListefact85(): ?int
    {
        return $this->faListefact85;
    }

    public function setFaListefact85(?int $faListefact85): static
    {
        $this->faListefact85 = $faListefact85;

        return $this;
    }

    public function getFaListefact86(): ?int
    {
        return $this->faListefact86;
    }

    public function setFaListefact86(?int $faListefact86): static
    {
        $this->faListefact86 = $faListefact86;

        return $this;
    }

    public function getFaListefact87(): ?int
    {
        return $this->faListefact87;
    }

    public function setFaListefact87(?int $faListefact87): static
    {
        $this->faListefact87 = $faListefact87;

        return $this;
    }

    public function getFaListefact88(): ?int
    {
        return $this->faListefact88;
    }

    public function setFaListefact88(?int $faListefact88): static
    {
        $this->faListefact88 = $faListefact88;

        return $this;
    }

    public function getFaListefact89(): ?int
    {
        return $this->faListefact89;
    }

    public function setFaListefact89(?int $faListefact89): static
    {
        $this->faListefact89 = $faListefact89;

        return $this;
    }

    public function getFaListefact90(): ?int
    {
        return $this->faListefact90;
    }

    public function setFaListefact90(?int $faListefact90): static
    {
        $this->faListefact90 = $faListefact90;

        return $this;
    }

    public function getFaListefact91(): ?int
    {
        return $this->faListefact91;
    }

    public function setFaListefact91(?int $faListefact91): static
    {
        $this->faListefact91 = $faListefact91;

        return $this;
    }

    public function getFaListefact92(): ?int
    {
        return $this->faListefact92;
    }

    public function setFaListefact92(?int $faListefact92): static
    {
        $this->faListefact92 = $faListefact92;

        return $this;
    }

    public function getFaListefact93(): ?int
    {
        return $this->faListefact93;
    }

    public function setFaListefact93(?int $faListefact93): static
    {
        $this->faListefact93 = $faListefact93;

        return $this;
    }

    public function getFaListefact94(): ?int
    {
        return $this->faListefact94;
    }

    public function setFaListefact94(?int $faListefact94): static
    {
        $this->faListefact94 = $faListefact94;

        return $this;
    }

    public function getFaListefact95(): ?int
    {
        return $this->faListefact95;
    }

    public function setFaListefact95(?int $faListefact95): static
    {
        $this->faListefact95 = $faListefact95;

        return $this;
    }

    public function getFaListefact96(): ?int
    {
        return $this->faListefact96;
    }

    public function setFaListefact96(?int $faListefact96): static
    {
        $this->faListefact96 = $faListefact96;

        return $this;
    }

    public function getFaDetailfact01(): ?int
    {
        return $this->faDetailfact01;
    }

    public function setFaDetailfact01(?int $faDetailfact01): static
    {
        $this->faDetailfact01 = $faDetailfact01;

        return $this;
    }

    public function getFaDetailfact02(): ?int
    {
        return $this->faDetailfact02;
    }

    public function setFaDetailfact02(?int $faDetailfact02): static
    {
        $this->faDetailfact02 = $faDetailfact02;

        return $this;
    }

    public function getFaDetailfact03(): ?int
    {
        return $this->faDetailfact03;
    }

    public function setFaDetailfact03(?int $faDetailfact03): static
    {
        $this->faDetailfact03 = $faDetailfact03;

        return $this;
    }

    public function getFaDetailfact04(): ?int
    {
        return $this->faDetailfact04;
    }

    public function setFaDetailfact04(?int $faDetailfact04): static
    {
        $this->faDetailfact04 = $faDetailfact04;

        return $this;
    }

    public function getFaDetailfact05(): ?int
    {
        return $this->faDetailfact05;
    }

    public function setFaDetailfact05(?int $faDetailfact05): static
    {
        $this->faDetailfact05 = $faDetailfact05;

        return $this;
    }

    public function getFaDetailfact06(): ?int
    {
        return $this->faDetailfact06;
    }

    public function setFaDetailfact06(?int $faDetailfact06): static
    {
        $this->faDetailfact06 = $faDetailfact06;

        return $this;
    }

    public function getFaDetailfact07(): ?int
    {
        return $this->faDetailfact07;
    }

    public function setFaDetailfact07(?int $faDetailfact07): static
    {
        $this->faDetailfact07 = $faDetailfact07;

        return $this;
    }

    public function getFaDetailfact08(): ?int
    {
        return $this->faDetailfact08;
    }

    public function setFaDetailfact08(?int $faDetailfact08): static
    {
        $this->faDetailfact08 = $faDetailfact08;

        return $this;
    }

    public function getFaDetailfact09(): ?int
    {
        return $this->faDetailfact09;
    }

    public function setFaDetailfact09(?int $faDetailfact09): static
    {
        $this->faDetailfact09 = $faDetailfact09;

        return $this;
    }

    public function getFaDetailfact10(): ?int
    {
        return $this->faDetailfact10;
    }

    public function setFaDetailfact10(?int $faDetailfact10): static
    {
        $this->faDetailfact10 = $faDetailfact10;

        return $this;
    }

    public function getFaDetailfact11(): ?int
    {
        return $this->faDetailfact11;
    }

    public function setFaDetailfact11(?int $faDetailfact11): static
    {
        $this->faDetailfact11 = $faDetailfact11;

        return $this;
    }

    public function getFaDetailfact12(): ?int
    {
        return $this->faDetailfact12;
    }

    public function setFaDetailfact12(?int $faDetailfact12): static
    {
        $this->faDetailfact12 = $faDetailfact12;

        return $this;
    }

    public function getFaDetailfact13(): ?int
    {
        return $this->faDetailfact13;
    }

    public function setFaDetailfact13(?int $faDetailfact13): static
    {
        $this->faDetailfact13 = $faDetailfact13;

        return $this;
    }

    public function getFaDetailfact14(): ?int
    {
        return $this->faDetailfact14;
    }

    public function setFaDetailfact14(?int $faDetailfact14): static
    {
        $this->faDetailfact14 = $faDetailfact14;

        return $this;
    }

    public function getFaDetailfact15(): ?int
    {
        return $this->faDetailfact15;
    }

    public function setFaDetailfact15(?int $faDetailfact15): static
    {
        $this->faDetailfact15 = $faDetailfact15;

        return $this;
    }

    public function getFaDetailfact16(): ?int
    {
        return $this->faDetailfact16;
    }

    public function setFaDetailfact16(?int $faDetailfact16): static
    {
        $this->faDetailfact16 = $faDetailfact16;

        return $this;
    }

    public function getFaDetailfact17(): ?int
    {
        return $this->faDetailfact17;
    }

    public function setFaDetailfact17(?int $faDetailfact17): static
    {
        $this->faDetailfact17 = $faDetailfact17;

        return $this;
    }

    public function getFaDetailfact18(): ?int
    {
        return $this->faDetailfact18;
    }

    public function setFaDetailfact18(?int $faDetailfact18): static
    {
        $this->faDetailfact18 = $faDetailfact18;

        return $this;
    }

    public function getFaDetailfact19(): ?int
    {
        return $this->faDetailfact19;
    }

    public function setFaDetailfact19(?int $faDetailfact19): static
    {
        $this->faDetailfact19 = $faDetailfact19;

        return $this;
    }

    public function getFaDetailfact20(): ?int
    {
        return $this->faDetailfact20;
    }

    public function setFaDetailfact20(?int $faDetailfact20): static
    {
        $this->faDetailfact20 = $faDetailfact20;

        return $this;
    }

    public function getFaDetailfact21(): ?int
    {
        return $this->faDetailfact21;
    }

    public function setFaDetailfact21(?int $faDetailfact21): static
    {
        $this->faDetailfact21 = $faDetailfact21;

        return $this;
    }

    public function getFaDetailfact22(): ?int
    {
        return $this->faDetailfact22;
    }

    public function setFaDetailfact22(?int $faDetailfact22): static
    {
        $this->faDetailfact22 = $faDetailfact22;

        return $this;
    }

    public function getFaDetailfact23(): ?int
    {
        return $this->faDetailfact23;
    }

    public function setFaDetailfact23(?int $faDetailfact23): static
    {
        $this->faDetailfact23 = $faDetailfact23;

        return $this;
    }

    public function getFaDetailfact24(): ?int
    {
        return $this->faDetailfact24;
    }

    public function setFaDetailfact24(?int $faDetailfact24): static
    {
        $this->faDetailfact24 = $faDetailfact24;

        return $this;
    }

    public function getFaDetailfact25(): ?int
    {
        return $this->faDetailfact25;
    }

    public function setFaDetailfact25(?int $faDetailfact25): static
    {
        $this->faDetailfact25 = $faDetailfact25;

        return $this;
    }

    public function getFaDetailfact26(): ?int
    {
        return $this->faDetailfact26;
    }

    public function setFaDetailfact26(?int $faDetailfact26): static
    {
        $this->faDetailfact26 = $faDetailfact26;

        return $this;
    }

    public function getFaDetailfact27(): ?int
    {
        return $this->faDetailfact27;
    }

    public function setFaDetailfact27(?int $faDetailfact27): static
    {
        $this->faDetailfact27 = $faDetailfact27;

        return $this;
    }

    public function getFaDetailfact28(): ?int
    {
        return $this->faDetailfact28;
    }

    public function setFaDetailfact28(?int $faDetailfact28): static
    {
        $this->faDetailfact28 = $faDetailfact28;

        return $this;
    }

    public function getFaDetailfact29(): ?int
    {
        return $this->faDetailfact29;
    }

    public function setFaDetailfact29(?int $faDetailfact29): static
    {
        $this->faDetailfact29 = $faDetailfact29;

        return $this;
    }

    public function getFaDetailfact30(): ?int
    {
        return $this->faDetailfact30;
    }

    public function setFaDetailfact30(?int $faDetailfact30): static
    {
        $this->faDetailfact30 = $faDetailfact30;

        return $this;
    }

    public function getFaDetailfact31(): ?int
    {
        return $this->faDetailfact31;
    }

    public function setFaDetailfact31(?int $faDetailfact31): static
    {
        $this->faDetailfact31 = $faDetailfact31;

        return $this;
    }

    public function getFaDetailfact32(): ?int
    {
        return $this->faDetailfact32;
    }

    public function setFaDetailfact32(?int $faDetailfact32): static
    {
        $this->faDetailfact32 = $faDetailfact32;

        return $this;
    }

    public function getFaDetailfact33(): ?int
    {
        return $this->faDetailfact33;
    }

    public function setFaDetailfact33(?int $faDetailfact33): static
    {
        $this->faDetailfact33 = $faDetailfact33;

        return $this;
    }

    public function getFaDetailfact34(): ?int
    {
        return $this->faDetailfact34;
    }

    public function setFaDetailfact34(?int $faDetailfact34): static
    {
        $this->faDetailfact34 = $faDetailfact34;

        return $this;
    }

    public function getFaDetailfact35(): ?int
    {
        return $this->faDetailfact35;
    }

    public function setFaDetailfact35(?int $faDetailfact35): static
    {
        $this->faDetailfact35 = $faDetailfact35;

        return $this;
    }

    public function getFaDetailfact36(): ?int
    {
        return $this->faDetailfact36;
    }

    public function setFaDetailfact36(?int $faDetailfact36): static
    {
        $this->faDetailfact36 = $faDetailfact36;

        return $this;
    }

    public function getFaDetailfact37(): ?int
    {
        return $this->faDetailfact37;
    }

    public function setFaDetailfact37(?int $faDetailfact37): static
    {
        $this->faDetailfact37 = $faDetailfact37;

        return $this;
    }

    public function getFaDetailfact38(): ?int
    {
        return $this->faDetailfact38;
    }

    public function setFaDetailfact38(?int $faDetailfact38): static
    {
        $this->faDetailfact38 = $faDetailfact38;

        return $this;
    }

    public function getFaDetailfact39(): ?int
    {
        return $this->faDetailfact39;
    }

    public function setFaDetailfact39(?int $faDetailfact39): static
    {
        $this->faDetailfact39 = $faDetailfact39;

        return $this;
    }

    public function getFaDetailfact40(): ?int
    {
        return $this->faDetailfact40;
    }

    public function setFaDetailfact40(?int $faDetailfact40): static
    {
        $this->faDetailfact40 = $faDetailfact40;

        return $this;
    }

    public function getFaDetailfact41(): ?int
    {
        return $this->faDetailfact41;
    }

    public function setFaDetailfact41(?int $faDetailfact41): static
    {
        $this->faDetailfact41 = $faDetailfact41;

        return $this;
    }

    public function getFaDetailfact42(): ?int
    {
        return $this->faDetailfact42;
    }

    public function setFaDetailfact42(?int $faDetailfact42): static
    {
        $this->faDetailfact42 = $faDetailfact42;

        return $this;
    }

    public function getFaDetailfact43(): ?int
    {
        return $this->faDetailfact43;
    }

    public function setFaDetailfact43(?int $faDetailfact43): static
    {
        $this->faDetailfact43 = $faDetailfact43;

        return $this;
    }

    public function getFaDetailfact44(): ?int
    {
        return $this->faDetailfact44;
    }

    public function setFaDetailfact44(?int $faDetailfact44): static
    {
        $this->faDetailfact44 = $faDetailfact44;

        return $this;
    }

    public function getFaDetailfact45(): ?int
    {
        return $this->faDetailfact45;
    }

    public function setFaDetailfact45(?int $faDetailfact45): static
    {
        $this->faDetailfact45 = $faDetailfact45;

        return $this;
    }

    public function getFaDetailfact46(): ?int
    {
        return $this->faDetailfact46;
    }

    public function setFaDetailfact46(?int $faDetailfact46): static
    {
        $this->faDetailfact46 = $faDetailfact46;

        return $this;
    }

    public function getFaDetailfact47(): ?int
    {
        return $this->faDetailfact47;
    }

    public function setFaDetailfact47(?int $faDetailfact47): static
    {
        $this->faDetailfact47 = $faDetailfact47;

        return $this;
    }

    public function getFaDetailfact48(): ?int
    {
        return $this->faDetailfact48;
    }

    public function setFaDetailfact48(?int $faDetailfact48): static
    {
        $this->faDetailfact48 = $faDetailfact48;

        return $this;
    }

    public function getFaDetailfact49(): ?int
    {
        return $this->faDetailfact49;
    }

    public function setFaDetailfact49(?int $faDetailfact49): static
    {
        $this->faDetailfact49 = $faDetailfact49;

        return $this;
    }

    public function getFaDetailfact50(): ?int
    {
        return $this->faDetailfact50;
    }

    public function setFaDetailfact50(?int $faDetailfact50): static
    {
        $this->faDetailfact50 = $faDetailfact50;

        return $this;
    }

    public function getFaDetailfact51(): ?int
    {
        return $this->faDetailfact51;
    }

    public function setFaDetailfact51(?int $faDetailfact51): static
    {
        $this->faDetailfact51 = $faDetailfact51;

        return $this;
    }

    public function getFaDetailfact52(): ?int
    {
        return $this->faDetailfact52;
    }

    public function setFaDetailfact52(?int $faDetailfact52): static
    {
        $this->faDetailfact52 = $faDetailfact52;

        return $this;
    }

    public function getFaDetailfact53(): ?int
    {
        return $this->faDetailfact53;
    }

    public function setFaDetailfact53(?int $faDetailfact53): static
    {
        $this->faDetailfact53 = $faDetailfact53;

        return $this;
    }

    public function getFaDetailfact54(): ?int
    {
        return $this->faDetailfact54;
    }

    public function setFaDetailfact54(?int $faDetailfact54): static
    {
        $this->faDetailfact54 = $faDetailfact54;

        return $this;
    }

    public function getFaDetailfact55(): ?int
    {
        return $this->faDetailfact55;
    }

    public function setFaDetailfact55(?int $faDetailfact55): static
    {
        $this->faDetailfact55 = $faDetailfact55;

        return $this;
    }

    public function getFaDetailfact56(): ?int
    {
        return $this->faDetailfact56;
    }

    public function setFaDetailfact56(?int $faDetailfact56): static
    {
        $this->faDetailfact56 = $faDetailfact56;

        return $this;
    }

    public function getFaDetailfact57(): ?int
    {
        return $this->faDetailfact57;
    }

    public function setFaDetailfact57(?int $faDetailfact57): static
    {
        $this->faDetailfact57 = $faDetailfact57;

        return $this;
    }

    public function getFaDetailfact58(): ?int
    {
        return $this->faDetailfact58;
    }

    public function setFaDetailfact58(?int $faDetailfact58): static
    {
        $this->faDetailfact58 = $faDetailfact58;

        return $this;
    }

    public function getFaDetailfact59(): ?int
    {
        return $this->faDetailfact59;
    }

    public function setFaDetailfact59(?int $faDetailfact59): static
    {
        $this->faDetailfact59 = $faDetailfact59;

        return $this;
    }

    public function getFaDetailfact60(): ?int
    {
        return $this->faDetailfact60;
    }

    public function setFaDetailfact60(?int $faDetailfact60): static
    {
        $this->faDetailfact60 = $faDetailfact60;

        return $this;
    }

    public function getFaDetailfact61(): ?int
    {
        return $this->faDetailfact61;
    }

    public function setFaDetailfact61(?int $faDetailfact61): static
    {
        $this->faDetailfact61 = $faDetailfact61;

        return $this;
    }

    public function getFaDetailfact62(): ?int
    {
        return $this->faDetailfact62;
    }

    public function setFaDetailfact62(?int $faDetailfact62): static
    {
        $this->faDetailfact62 = $faDetailfact62;

        return $this;
    }

    public function getFaDetailfact63(): ?int
    {
        return $this->faDetailfact63;
    }

    public function setFaDetailfact63(?int $faDetailfact63): static
    {
        $this->faDetailfact63 = $faDetailfact63;

        return $this;
    }

    public function getFaDetailfact64(): ?int
    {
        return $this->faDetailfact64;
    }

    public function setFaDetailfact64(?int $faDetailfact64): static
    {
        $this->faDetailfact64 = $faDetailfact64;

        return $this;
    }

    public function getFaDetailfact65(): ?int
    {
        return $this->faDetailfact65;
    }

    public function setFaDetailfact65(?int $faDetailfact65): static
    {
        $this->faDetailfact65 = $faDetailfact65;

        return $this;
    }

    public function getFaDetailfact66(): ?int
    {
        return $this->faDetailfact66;
    }

    public function setFaDetailfact66(?int $faDetailfact66): static
    {
        $this->faDetailfact66 = $faDetailfact66;

        return $this;
    }

    public function getFaDetailfact67(): ?int
    {
        return $this->faDetailfact67;
    }

    public function setFaDetailfact67(?int $faDetailfact67): static
    {
        $this->faDetailfact67 = $faDetailfact67;

        return $this;
    }

    public function getFaDetailfact68(): ?int
    {
        return $this->faDetailfact68;
    }

    public function setFaDetailfact68(?int $faDetailfact68): static
    {
        $this->faDetailfact68 = $faDetailfact68;

        return $this;
    }

    public function getFaDetailfact69(): ?int
    {
        return $this->faDetailfact69;
    }

    public function setFaDetailfact69(?int $faDetailfact69): static
    {
        $this->faDetailfact69 = $faDetailfact69;

        return $this;
    }

    public function getFaDetailfact70(): ?int
    {
        return $this->faDetailfact70;
    }

    public function setFaDetailfact70(?int $faDetailfact70): static
    {
        $this->faDetailfact70 = $faDetailfact70;

        return $this;
    }

    public function getFaDetailfact71(): ?int
    {
        return $this->faDetailfact71;
    }

    public function setFaDetailfact71(?int $faDetailfact71): static
    {
        $this->faDetailfact71 = $faDetailfact71;

        return $this;
    }

    public function getFaDetailfact72(): ?int
    {
        return $this->faDetailfact72;
    }

    public function setFaDetailfact72(?int $faDetailfact72): static
    {
        $this->faDetailfact72 = $faDetailfact72;

        return $this;
    }

    public function getFaDetailfact73(): ?int
    {
        return $this->faDetailfact73;
    }

    public function setFaDetailfact73(?int $faDetailfact73): static
    {
        $this->faDetailfact73 = $faDetailfact73;

        return $this;
    }

    public function getFaDetailfact74(): ?int
    {
        return $this->faDetailfact74;
    }

    public function setFaDetailfact74(?int $faDetailfact74): static
    {
        $this->faDetailfact74 = $faDetailfact74;

        return $this;
    }

    public function getFaDetailfact75(): ?int
    {
        return $this->faDetailfact75;
    }

    public function setFaDetailfact75(?int $faDetailfact75): static
    {
        $this->faDetailfact75 = $faDetailfact75;

        return $this;
    }

    public function getFaDetailfact76(): ?int
    {
        return $this->faDetailfact76;
    }

    public function setFaDetailfact76(?int $faDetailfact76): static
    {
        $this->faDetailfact76 = $faDetailfact76;

        return $this;
    }

    public function getFaDetailfact77(): ?int
    {
        return $this->faDetailfact77;
    }

    public function setFaDetailfact77(?int $faDetailfact77): static
    {
        $this->faDetailfact77 = $faDetailfact77;

        return $this;
    }

    public function getFaDetailfact78(): ?int
    {
        return $this->faDetailfact78;
    }

    public function setFaDetailfact78(?int $faDetailfact78): static
    {
        $this->faDetailfact78 = $faDetailfact78;

        return $this;
    }

    public function getFaDetailfact79(): ?int
    {
        return $this->faDetailfact79;
    }

    public function setFaDetailfact79(?int $faDetailfact79): static
    {
        $this->faDetailfact79 = $faDetailfact79;

        return $this;
    }

    public function getFaDetailfact80(): ?int
    {
        return $this->faDetailfact80;
    }

    public function setFaDetailfact80(?int $faDetailfact80): static
    {
        $this->faDetailfact80 = $faDetailfact80;

        return $this;
    }

    public function getFaDetailfact81(): ?int
    {
        return $this->faDetailfact81;
    }

    public function setFaDetailfact81(?int $faDetailfact81): static
    {
        $this->faDetailfact81 = $faDetailfact81;

        return $this;
    }

    public function getFaDetailfact82(): ?int
    {
        return $this->faDetailfact82;
    }

    public function setFaDetailfact82(?int $faDetailfact82): static
    {
        $this->faDetailfact82 = $faDetailfact82;

        return $this;
    }

    public function getFaDetailfact83(): ?int
    {
        return $this->faDetailfact83;
    }

    public function setFaDetailfact83(?int $faDetailfact83): static
    {
        $this->faDetailfact83 = $faDetailfact83;

        return $this;
    }

    public function getFaDetailfact84(): ?int
    {
        return $this->faDetailfact84;
    }

    public function setFaDetailfact84(?int $faDetailfact84): static
    {
        $this->faDetailfact84 = $faDetailfact84;

        return $this;
    }

    public function getFaDetailfact85(): ?int
    {
        return $this->faDetailfact85;
    }

    public function setFaDetailfact85(?int $faDetailfact85): static
    {
        $this->faDetailfact85 = $faDetailfact85;

        return $this;
    }

    public function getFaDetailfact86(): ?int
    {
        return $this->faDetailfact86;
    }

    public function setFaDetailfact86(?int $faDetailfact86): static
    {
        $this->faDetailfact86 = $faDetailfact86;

        return $this;
    }

    public function getFaDetailfact87(): ?int
    {
        return $this->faDetailfact87;
    }

    public function setFaDetailfact87(?int $faDetailfact87): static
    {
        $this->faDetailfact87 = $faDetailfact87;

        return $this;
    }

    public function getFaDetailfact88(): ?int
    {
        return $this->faDetailfact88;
    }

    public function setFaDetailfact88(?int $faDetailfact88): static
    {
        $this->faDetailfact88 = $faDetailfact88;

        return $this;
    }

    public function getFaDetailfact89(): ?int
    {
        return $this->faDetailfact89;
    }

    public function setFaDetailfact89(?int $faDetailfact89): static
    {
        $this->faDetailfact89 = $faDetailfact89;

        return $this;
    }

    public function getFaDetailfact90(): ?int
    {
        return $this->faDetailfact90;
    }

    public function setFaDetailfact90(?int $faDetailfact90): static
    {
        $this->faDetailfact90 = $faDetailfact90;

        return $this;
    }

    public function getFaDetailfact91(): ?int
    {
        return $this->faDetailfact91;
    }

    public function setFaDetailfact91(?int $faDetailfact91): static
    {
        $this->faDetailfact91 = $faDetailfact91;

        return $this;
    }

    public function getFaDetailfact92(): ?int
    {
        return $this->faDetailfact92;
    }

    public function setFaDetailfact92(?int $faDetailfact92): static
    {
        $this->faDetailfact92 = $faDetailfact92;

        return $this;
    }

    public function getFaDetailfact93(): ?int
    {
        return $this->faDetailfact93;
    }

    public function setFaDetailfact93(?int $faDetailfact93): static
    {
        $this->faDetailfact93 = $faDetailfact93;

        return $this;
    }

    public function getFaDetailfact94(): ?int
    {
        return $this->faDetailfact94;
    }

    public function setFaDetailfact94(?int $faDetailfact94): static
    {
        $this->faDetailfact94 = $faDetailfact94;

        return $this;
    }

    public function getFaDetailfact95(): ?int
    {
        return $this->faDetailfact95;
    }

    public function setFaDetailfact95(?int $faDetailfact95): static
    {
        $this->faDetailfact95 = $faDetailfact95;

        return $this;
    }

    public function getFaDetailfact96(): ?int
    {
        return $this->faDetailfact96;
    }

    public function setFaDetailfact96(?int $faDetailfact96): static
    {
        $this->faDetailfact96 = $faDetailfact96;

        return $this;
    }

    public function getFaDetailfact97(): ?int
    {
        return $this->faDetailfact97;
    }

    public function setFaDetailfact97(?int $faDetailfact97): static
    {
        $this->faDetailfact97 = $faDetailfact97;

        return $this;
    }

    public function getFaDetailfact98(): ?int
    {
        return $this->faDetailfact98;
    }

    public function setFaDetailfact98(?int $faDetailfact98): static
    {
        $this->faDetailfact98 = $faDetailfact98;

        return $this;
    }

    public function getFaDetailfact99(): ?int
    {
        return $this->faDetailfact99;
    }

    public function setFaDetailfact99(?int $faDetailfact99): static
    {
        $this->faDetailfact99 = $faDetailfact99;

        return $this;
    }

    public function getFaDetailfact100(): ?int
    {
        return $this->faDetailfact100;
    }

    public function setFaDetailfact100(?int $faDetailfact100): static
    {
        $this->faDetailfact100 = $faDetailfact100;

        return $this;
    }

    public function getFaDetailfact101(): ?int
    {
        return $this->faDetailfact101;
    }

    public function setFaDetailfact101(?int $faDetailfact101): static
    {
        $this->faDetailfact101 = $faDetailfact101;

        return $this;
    }

    public function getFaDetailfact102(): ?int
    {
        return $this->faDetailfact102;
    }

    public function setFaDetailfact102(?int $faDetailfact102): static
    {
        $this->faDetailfact102 = $faDetailfact102;

        return $this;
    }

    public function getFaDetailfact103(): ?int
    {
        return $this->faDetailfact103;
    }

    public function setFaDetailfact103(?int $faDetailfact103): static
    {
        $this->faDetailfact103 = $faDetailfact103;

        return $this;
    }

    public function getFaDetailfact104(): ?int
    {
        return $this->faDetailfact104;
    }

    public function setFaDetailfact104(?int $faDetailfact104): static
    {
        $this->faDetailfact104 = $faDetailfact104;

        return $this;
    }

    public function getFaDetailfact105(): ?int
    {
        return $this->faDetailfact105;
    }

    public function setFaDetailfact105(?int $faDetailfact105): static
    {
        $this->faDetailfact105 = $faDetailfact105;

        return $this;
    }

    public function getFaDetailfact106(): ?int
    {
        return $this->faDetailfact106;
    }

    public function setFaDetailfact106(?int $faDetailfact106): static
    {
        $this->faDetailfact106 = $faDetailfact106;

        return $this;
    }

    public function getFaDetailfact107(): ?int
    {
        return $this->faDetailfact107;
    }

    public function setFaDetailfact107(?int $faDetailfact107): static
    {
        $this->faDetailfact107 = $faDetailfact107;

        return $this;
    }

    public function getFaDetailfact108(): ?int
    {
        return $this->faDetailfact108;
    }

    public function setFaDetailfact108(?int $faDetailfact108): static
    {
        $this->faDetailfact108 = $faDetailfact108;

        return $this;
    }
}
