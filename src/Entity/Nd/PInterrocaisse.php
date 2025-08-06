<?php

namespace App\Entity\Nd;

use App\Repository\Nd\PInterrocaisseRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'P_INTERROCAISSE')]
#[ORM\Entity(repositoryClass: PInterrocaisseRepository::class)]
class PInterrocaisse
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "IC_ListeMvt01", type: Types::SMALLINT, nullable: true)]
    private ?int $icListemvt01 = null;

    #[ORM\Column(name: "IC_ListeMvt02", type: Types::SMALLINT, nullable: true)]
    private ?int $icListemvt02 = null;

    #[ORM\Column(name: "IC_ListeMvt03", type: Types::SMALLINT, nullable: true)]
    private ?int $icListemvt03 = null;

    #[ORM\Column(name: "IC_ListeMvt04", type: Types::SMALLINT, nullable: true)]
    private ?int $icListemvt04 = null;

    #[ORM\Column(name: "IC_ListeMvt05", type: Types::SMALLINT, nullable: true)]
    private ?int $icListemvt05 = null;

    #[ORM\Column(name: "IC_ListeMvt06", type: Types::SMALLINT, nullable: true)]
    private ?int $icListemvt06 = null;

    #[ORM\Column(name: "IC_ListeMvt07", type: Types::SMALLINT, nullable: true)]
    private ?int $icListemvt07 = null;

    #[ORM\Column(name: "IC_ListeMvt08", type: Types::SMALLINT, nullable: true)]
    private ?int $icListemvt08 = null;

    #[ORM\Column(name: "IC_ListeMvt09", type: Types::SMALLINT, nullable: true)]
    private ?int $icListemvt09 = null;

    #[ORM\Column(name: "IC_ListeMvt10", type: Types::SMALLINT, nullable: true)]
    private ?int $icListemvt10 = null;

    #[ORM\Column(name: "IC_ListeMvt11", type: Types::SMALLINT, nullable: true)]
    private ?int $icListemvt11 = null;

    #[ORM\Column(name: "IC_ListeMvt12", type: Types::SMALLINT, nullable: true)]
    private ?int $icListemvt12 = null;

    #[ORM\Column(name: "IC_ListeMvt13", type: Types::SMALLINT, nullable: true)]
    private ?int $icListemvt13 = null;

    #[ORM\Column(name: "IC_ListeMvt14", type: Types::SMALLINT, nullable: true)]
    private ?int $icListemvt14 = null;

    #[ORM\Column(name: "IC_ListeMvt15", type: Types::SMALLINT, nullable: true)]
    private ?int $icListemvt15 = null;

    #[ORM\Column(name: "IC_ListeMvt16", type: Types::SMALLINT, nullable: true)]
    private ?int $icListemvt16 = null;

    #[ORM\Column(name: "IC_ListeMvt17", type: Types::SMALLINT, nullable: true)]
    private ?int $icListemvt17 = null;

    #[ORM\Column(name: "IC_ListeMvt18", type: Types::SMALLINT, nullable: true)]
    private ?int $icListemvt18 = null;

    #[ORM\Column(name: "IC_ListeMvt19", type: Types::SMALLINT, nullable: true)]
    private ?int $icListemvt19 = null;

    #[ORM\Column(name: "IC_ListeMvt20", type: Types::SMALLINT, nullable: true)]
    private ?int $icListemvt20 = null;

    #[ORM\Column(name: "IC_ListeDoc01", type: Types::SMALLINT, nullable: true)]
    private ?int $icListedoc01 = null;

    #[ORM\Column(name: "IC_ListeDoc02", type: Types::SMALLINT, nullable: true)]
    private ?int $icListedoc02 = null;

    #[ORM\Column(name: "IC_ListeDoc03", type: Types::SMALLINT, nullable: true)]
    private ?int $icListedoc03 = null;

    #[ORM\Column(name: "IC_ListeDoc04", type: Types::SMALLINT, nullable: true)]
    private ?int $icListedoc04 = null;

    #[ORM\Column(name: "IC_ListeDoc05", type: Types::SMALLINT, nullable: true)]
    private ?int $icListedoc05 = null;

    #[ORM\Column(name: "IC_ListeDoc06", type: Types::SMALLINT, nullable: true)]
    private ?int $icListedoc06 = null;

    #[ORM\Column(name: "IC_ListeDoc07", type: Types::SMALLINT, nullable: true)]
    private ?int $icListedoc07 = null;

    #[ORM\Column(name: "IC_ListeDoc08", type: Types::SMALLINT, nullable: true)]
    private ?int $icListedoc08 = null;

    #[ORM\Column(name: "IC_ListeDoc09", type: Types::SMALLINT, nullable: true)]
    private ?int $icListedoc09 = null;

    #[ORM\Column(name: "IC_ListeDoc10", type: Types::SMALLINT, nullable: true)]
    private ?int $icListedoc10 = null;

    #[ORM\Column(name: "IC_ListeDoc11", type: Types::SMALLINT, nullable: true)]
    private ?int $icListedoc11 = null;

    #[ORM\Column(name: "IC_ListeLigne01", type: Types::SMALLINT, nullable: true)]
    private ?int $icListeligne01 = null;

    #[ORM\Column(name: "IC_ListeLigne02", type: Types::SMALLINT, nullable: true)]
    private ?int $icListeligne02 = null;

    #[ORM\Column(name: "IC_ListeLigne03", type: Types::SMALLINT, nullable: true)]
    private ?int $icListeligne03 = null;

    #[ORM\Column(name: "IC_ListeLigne04", type: Types::SMALLINT, nullable: true)]
    private ?int $icListeligne04 = null;

    #[ORM\Column(name: "IC_ListeLigne05", type: Types::SMALLINT, nullable: true)]
    private ?int $icListeligne05 = null;

    #[ORM\Column(name: "IC_ListeLigne06", type: Types::SMALLINT, nullable: true)]
    private ?int $icListeligne06 = null;

    #[ORM\Column(name: "IC_ListeLigne07", type: Types::SMALLINT, nullable: true)]
    private ?int $icListeligne07 = null;

    #[ORM\Column(name: "IC_ListeLigne08", type: Types::SMALLINT, nullable: true)]
    private ?int $icListeligne08 = null;

    #[ORM\Column(name: "IC_ListeLigne09", type: Types::SMALLINT, nullable: true)]
    private ?int $icListeligne09 = null;

    #[ORM\Column(name: "IC_ListeLigne10", type: Types::SMALLINT, nullable: true)]
    private ?int $icListeligne10 = null;

    #[ORM\Column(name: "IC_ListeLigne11", type: Types::SMALLINT, nullable: true)]
    private ?int $icListeligne11 = null;

    #[ORM\Column(name: "IC_ListeLigne12", type: Types::SMALLINT, nullable: true)]
    private ?int $icListeligne12 = null;

    #[ORM\Column(name: "IC_ListeLigne13", type: Types::SMALLINT, nullable: true)]
    private ?int $icListeligne13 = null;

    #[ORM\Column(name: "IC_ListeLigne14", type: Types::SMALLINT, nullable: true)]
    private ?int $icListeligne14 = null;

    #[ORM\Column(name: "IC_ListeLigne15", type: Types::SMALLINT, nullable: true)]
    private ?int $icListeligne15 = null;

    #[ORM\Column(name: "IC_ListeLigne16", type: Types::SMALLINT, nullable: true)]
    private ?int $icListeligne16 = null;

    #[ORM\Column(name: "IC_ListeLigne17", type: Types::SMALLINT, nullable: true)]
    private ?int $icListeligne17 = null;

    #[ORM\Column(name: "IC_ListeLigne18", type: Types::SMALLINT, nullable: true)]
    private ?int $icListeligne18 = null;

    #[ORM\Column(name: "IC_ListeLigne19", type: Types::SMALLINT, nullable: true)]
    private ?int $icListeligne19 = null;

    #[ORM\Column(name: "IC_ListeLigne20", type: Types::SMALLINT, nullable: true)]
    private ?int $icListeligne20 = null;

    #[ORM\Column(name: "IC_ListeLigne21", type: Types::SMALLINT, nullable: true)]
    private ?int $icListeligne21 = null;

    #[ORM\Column(name: "IC_ListeLigne22", type: Types::SMALLINT, nullable: true)]
    private ?int $icListeligne22 = null;

    #[ORM\Column(name: "IC_ListeLigne23", type: Types::SMALLINT, nullable: true)]
    private ?int $icListeligne23 = null;

    #[ORM\Column(name: "IC_ListeLigne24", type: Types::SMALLINT, nullable: true)]
    private ?int $icListeligne24 = null;

    #[ORM\Column(name: "IC_ListeLigne25", type: Types::SMALLINT, nullable: true)]
    private ?int $icListeligne25 = null;

    #[ORM\Column(name: "IC_ListeLigne26", type: Types::SMALLINT, nullable: true)]
    private ?int $icListeligne26 = null;

    #[ORM\Column(name: "IC_ListeLigne27", type: Types::SMALLINT, nullable: true)]
    private ?int $icListeligne27 = null;

    #[ORM\Column(name: "IC_ListeLigne28", type: Types::SMALLINT, nullable: true)]
    private ?int $icListeligne28 = null;

    #[ORM\Column(name: "IC_ListeLigne29", type: Types::SMALLINT, nullable: true)]
    private ?int $icListeligne29 = null;

    #[ORM\Column(name: "IC_ListeLigne30", type: Types::SMALLINT, nullable: true)]
    private ?int $icListeligne30 = null;

    #[ORM\Column(name: "IC_ListeLigne31", type: Types::SMALLINT, nullable: true)]
    private ?int $icListeligne31 = null;

    #[ORM\Column(name: "IC_ListeTicket01", type: Types::SMALLINT, nullable: true)]
    private ?int $icListeticket01 = null;

    #[ORM\Column(name: "IC_ListeTicket02", type: Types::SMALLINT, nullable: true)]
    private ?int $icListeticket02 = null;

    #[ORM\Column(name: "IC_ListeTicket03", type: Types::SMALLINT, nullable: true)]
    private ?int $icListeticket03 = null;

    #[ORM\Column(name: "IC_ListeTicket04", type: Types::SMALLINT, nullable: true)]
    private ?int $icListeticket04 = null;

    #[ORM\Column(name: "IC_ListeTicket05", type: Types::SMALLINT, nullable: true)]
    private ?int $icListeticket05 = null;

    #[ORM\Column(name: "IC_ListeTicket06", type: Types::SMALLINT, nullable: true)]
    private ?int $icListeticket06 = null;

    #[ORM\Column(name: "IC_ListeTicket07", type: Types::SMALLINT, nullable: true)]
    private ?int $icListeticket07 = null;

    #[ORM\Column(name: "IC_ListeTicket08", type: Types::SMALLINT, nullable: true)]
    private ?int $icListeticket08 = null;

    #[ORM\Column(name: "IC_ListeTicket09", type: Types::SMALLINT, nullable: true)]
    private ?int $icListeticket09 = null;

    #[ORM\Column(name: "IC_ListeTicket10", type: Types::SMALLINT, nullable: true)]
    private ?int $icListeticket10 = null;

    #[ORM\Column(name: "IC_ListeTicket11", type: Types::SMALLINT, nullable: true)]
    private ?int $icListeticket11 = null;

    #[ORM\Column(name: "IC_ListeTicket12", type: Types::SMALLINT, nullable: true)]
    private ?int $icListeticket12 = null;

    #[ORM\Column(name: "IC_ListeLigne32", type: Types::SMALLINT, nullable: true)]
    private ?int $icListeligne32 = null;

    #[ORM\Column(name: "IC_ListeLigne33", type: Types::SMALLINT, nullable: true)]
    private ?int $icListeligne33 = null;

    #[ORM\Column(name: "IC_ListeLigne34", type: Types::SMALLINT, nullable: true)]
    private ?int $icListeligne34 = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getIcListemvt01(): ?int
    {
        return $this->icListemvt01;
    }

    public function setIcListemvt01(?int $icListemvt01): static
    {
        $this->icListemvt01 = $icListemvt01;

        return $this;
    }

    public function getIcListemvt02(): ?int
    {
        return $this->icListemvt02;
    }

    public function setIcListemvt02(?int $icListemvt02): static
    {
        $this->icListemvt02 = $icListemvt02;

        return $this;
    }

    public function getIcListemvt03(): ?int
    {
        return $this->icListemvt03;
    }

    public function setIcListemvt03(?int $icListemvt03): static
    {
        $this->icListemvt03 = $icListemvt03;

        return $this;
    }

    public function getIcListemvt04(): ?int
    {
        return $this->icListemvt04;
    }

    public function setIcListemvt04(?int $icListemvt04): static
    {
        $this->icListemvt04 = $icListemvt04;

        return $this;
    }

    public function getIcListemvt05(): ?int
    {
        return $this->icListemvt05;
    }

    public function setIcListemvt05(?int $icListemvt05): static
    {
        $this->icListemvt05 = $icListemvt05;

        return $this;
    }

    public function getIcListemvt06(): ?int
    {
        return $this->icListemvt06;
    }

    public function setIcListemvt06(?int $icListemvt06): static
    {
        $this->icListemvt06 = $icListemvt06;

        return $this;
    }

    public function getIcListemvt07(): ?int
    {
        return $this->icListemvt07;
    }

    public function setIcListemvt07(?int $icListemvt07): static
    {
        $this->icListemvt07 = $icListemvt07;

        return $this;
    }

    public function getIcListemvt08(): ?int
    {
        return $this->icListemvt08;
    }

    public function setIcListemvt08(?int $icListemvt08): static
    {
        $this->icListemvt08 = $icListemvt08;

        return $this;
    }

    public function getIcListemvt09(): ?int
    {
        return $this->icListemvt09;
    }

    public function setIcListemvt09(?int $icListemvt09): static
    {
        $this->icListemvt09 = $icListemvt09;

        return $this;
    }

    public function getIcListemvt10(): ?int
    {
        return $this->icListemvt10;
    }

    public function setIcListemvt10(?int $icListemvt10): static
    {
        $this->icListemvt10 = $icListemvt10;

        return $this;
    }

    public function getIcListemvt11(): ?int
    {
        return $this->icListemvt11;
    }

    public function setIcListemvt11(?int $icListemvt11): static
    {
        $this->icListemvt11 = $icListemvt11;

        return $this;
    }

    public function getIcListemvt12(): ?int
    {
        return $this->icListemvt12;
    }

    public function setIcListemvt12(?int $icListemvt12): static
    {
        $this->icListemvt12 = $icListemvt12;

        return $this;
    }

    public function getIcListemvt13(): ?int
    {
        return $this->icListemvt13;
    }

    public function setIcListemvt13(?int $icListemvt13): static
    {
        $this->icListemvt13 = $icListemvt13;

        return $this;
    }

    public function getIcListemvt14(): ?int
    {
        return $this->icListemvt14;
    }

    public function setIcListemvt14(?int $icListemvt14): static
    {
        $this->icListemvt14 = $icListemvt14;

        return $this;
    }

    public function getIcListemvt15(): ?int
    {
        return $this->icListemvt15;
    }

    public function setIcListemvt15(?int $icListemvt15): static
    {
        $this->icListemvt15 = $icListemvt15;

        return $this;
    }

    public function getIcListemvt16(): ?int
    {
        return $this->icListemvt16;
    }

    public function setIcListemvt16(?int $icListemvt16): static
    {
        $this->icListemvt16 = $icListemvt16;

        return $this;
    }

    public function getIcListemvt17(): ?int
    {
        return $this->icListemvt17;
    }

    public function setIcListemvt17(?int $icListemvt17): static
    {
        $this->icListemvt17 = $icListemvt17;

        return $this;
    }

    public function getIcListemvt18(): ?int
    {
        return $this->icListemvt18;
    }

    public function setIcListemvt18(?int $icListemvt18): static
    {
        $this->icListemvt18 = $icListemvt18;

        return $this;
    }

    public function getIcListemvt19(): ?int
    {
        return $this->icListemvt19;
    }

    public function setIcListemvt19(?int $icListemvt19): static
    {
        $this->icListemvt19 = $icListemvt19;

        return $this;
    }

    public function getIcListemvt20(): ?int
    {
        return $this->icListemvt20;
    }

    public function setIcListemvt20(?int $icListemvt20): static
    {
        $this->icListemvt20 = $icListemvt20;

        return $this;
    }

    public function getIcListedoc01(): ?int
    {
        return $this->icListedoc01;
    }

    public function setIcListedoc01(?int $icListedoc01): static
    {
        $this->icListedoc01 = $icListedoc01;

        return $this;
    }

    public function getIcListedoc02(): ?int
    {
        return $this->icListedoc02;
    }

    public function setIcListedoc02(?int $icListedoc02): static
    {
        $this->icListedoc02 = $icListedoc02;

        return $this;
    }

    public function getIcListedoc03(): ?int
    {
        return $this->icListedoc03;
    }

    public function setIcListedoc03(?int $icListedoc03): static
    {
        $this->icListedoc03 = $icListedoc03;

        return $this;
    }

    public function getIcListedoc04(): ?int
    {
        return $this->icListedoc04;
    }

    public function setIcListedoc04(?int $icListedoc04): static
    {
        $this->icListedoc04 = $icListedoc04;

        return $this;
    }

    public function getIcListedoc05(): ?int
    {
        return $this->icListedoc05;
    }

    public function setIcListedoc05(?int $icListedoc05): static
    {
        $this->icListedoc05 = $icListedoc05;

        return $this;
    }

    public function getIcListedoc06(): ?int
    {
        return $this->icListedoc06;
    }

    public function setIcListedoc06(?int $icListedoc06): static
    {
        $this->icListedoc06 = $icListedoc06;

        return $this;
    }

    public function getIcListedoc07(): ?int
    {
        return $this->icListedoc07;
    }

    public function setIcListedoc07(?int $icListedoc07): static
    {
        $this->icListedoc07 = $icListedoc07;

        return $this;
    }

    public function getIcListedoc08(): ?int
    {
        return $this->icListedoc08;
    }

    public function setIcListedoc08(?int $icListedoc08): static
    {
        $this->icListedoc08 = $icListedoc08;

        return $this;
    }

    public function getIcListedoc09(): ?int
    {
        return $this->icListedoc09;
    }

    public function setIcListedoc09(?int $icListedoc09): static
    {
        $this->icListedoc09 = $icListedoc09;

        return $this;
    }

    public function getIcListedoc10(): ?int
    {
        return $this->icListedoc10;
    }

    public function setIcListedoc10(?int $icListedoc10): static
    {
        $this->icListedoc10 = $icListedoc10;

        return $this;
    }

    public function getIcListedoc11(): ?int
    {
        return $this->icListedoc11;
    }

    public function setIcListedoc11(?int $icListedoc11): static
    {
        $this->icListedoc11 = $icListedoc11;

        return $this;
    }

    public function getIcListeligne01(): ?int
    {
        return $this->icListeligne01;
    }

    public function setIcListeligne01(?int $icListeligne01): static
    {
        $this->icListeligne01 = $icListeligne01;

        return $this;
    }

    public function getIcListeligne02(): ?int
    {
        return $this->icListeligne02;
    }

    public function setIcListeligne02(?int $icListeligne02): static
    {
        $this->icListeligne02 = $icListeligne02;

        return $this;
    }

    public function getIcListeligne03(): ?int
    {
        return $this->icListeligne03;
    }

    public function setIcListeligne03(?int $icListeligne03): static
    {
        $this->icListeligne03 = $icListeligne03;

        return $this;
    }

    public function getIcListeligne04(): ?int
    {
        return $this->icListeligne04;
    }

    public function setIcListeligne04(?int $icListeligne04): static
    {
        $this->icListeligne04 = $icListeligne04;

        return $this;
    }

    public function getIcListeligne05(): ?int
    {
        return $this->icListeligne05;
    }

    public function setIcListeligne05(?int $icListeligne05): static
    {
        $this->icListeligne05 = $icListeligne05;

        return $this;
    }

    public function getIcListeligne06(): ?int
    {
        return $this->icListeligne06;
    }

    public function setIcListeligne06(?int $icListeligne06): static
    {
        $this->icListeligne06 = $icListeligne06;

        return $this;
    }

    public function getIcListeligne07(): ?int
    {
        return $this->icListeligne07;
    }

    public function setIcListeligne07(?int $icListeligne07): static
    {
        $this->icListeligne07 = $icListeligne07;

        return $this;
    }

    public function getIcListeligne08(): ?int
    {
        return $this->icListeligne08;
    }

    public function setIcListeligne08(?int $icListeligne08): static
    {
        $this->icListeligne08 = $icListeligne08;

        return $this;
    }

    public function getIcListeligne09(): ?int
    {
        return $this->icListeligne09;
    }

    public function setIcListeligne09(?int $icListeligne09): static
    {
        $this->icListeligne09 = $icListeligne09;

        return $this;
    }

    public function getIcListeligne10(): ?int
    {
        return $this->icListeligne10;
    }

    public function setIcListeligne10(?int $icListeligne10): static
    {
        $this->icListeligne10 = $icListeligne10;

        return $this;
    }

    public function getIcListeligne11(): ?int
    {
        return $this->icListeligne11;
    }

    public function setIcListeligne11(?int $icListeligne11): static
    {
        $this->icListeligne11 = $icListeligne11;

        return $this;
    }

    public function getIcListeligne12(): ?int
    {
        return $this->icListeligne12;
    }

    public function setIcListeligne12(?int $icListeligne12): static
    {
        $this->icListeligne12 = $icListeligne12;

        return $this;
    }

    public function getIcListeligne13(): ?int
    {
        return $this->icListeligne13;
    }

    public function setIcListeligne13(?int $icListeligne13): static
    {
        $this->icListeligne13 = $icListeligne13;

        return $this;
    }

    public function getIcListeligne14(): ?int
    {
        return $this->icListeligne14;
    }

    public function setIcListeligne14(?int $icListeligne14): static
    {
        $this->icListeligne14 = $icListeligne14;

        return $this;
    }

    public function getIcListeligne15(): ?int
    {
        return $this->icListeligne15;
    }

    public function setIcListeligne15(?int $icListeligne15): static
    {
        $this->icListeligne15 = $icListeligne15;

        return $this;
    }

    public function getIcListeligne16(): ?int
    {
        return $this->icListeligne16;
    }

    public function setIcListeligne16(?int $icListeligne16): static
    {
        $this->icListeligne16 = $icListeligne16;

        return $this;
    }

    public function getIcListeligne17(): ?int
    {
        return $this->icListeligne17;
    }

    public function setIcListeligne17(?int $icListeligne17): static
    {
        $this->icListeligne17 = $icListeligne17;

        return $this;
    }

    public function getIcListeligne18(): ?int
    {
        return $this->icListeligne18;
    }

    public function setIcListeligne18(?int $icListeligne18): static
    {
        $this->icListeligne18 = $icListeligne18;

        return $this;
    }

    public function getIcListeligne19(): ?int
    {
        return $this->icListeligne19;
    }

    public function setIcListeligne19(?int $icListeligne19): static
    {
        $this->icListeligne19 = $icListeligne19;

        return $this;
    }

    public function getIcListeligne20(): ?int
    {
        return $this->icListeligne20;
    }

    public function setIcListeligne20(?int $icListeligne20): static
    {
        $this->icListeligne20 = $icListeligne20;

        return $this;
    }

    public function getIcListeligne21(): ?int
    {
        return $this->icListeligne21;
    }

    public function setIcListeligne21(?int $icListeligne21): static
    {
        $this->icListeligne21 = $icListeligne21;

        return $this;
    }

    public function getIcListeligne22(): ?int
    {
        return $this->icListeligne22;
    }

    public function setIcListeligne22(?int $icListeligne22): static
    {
        $this->icListeligne22 = $icListeligne22;

        return $this;
    }

    public function getIcListeligne23(): ?int
    {
        return $this->icListeligne23;
    }

    public function setIcListeligne23(?int $icListeligne23): static
    {
        $this->icListeligne23 = $icListeligne23;

        return $this;
    }

    public function getIcListeligne24(): ?int
    {
        return $this->icListeligne24;
    }

    public function setIcListeligne24(?int $icListeligne24): static
    {
        $this->icListeligne24 = $icListeligne24;

        return $this;
    }

    public function getIcListeligne25(): ?int
    {
        return $this->icListeligne25;
    }

    public function setIcListeligne25(?int $icListeligne25): static
    {
        $this->icListeligne25 = $icListeligne25;

        return $this;
    }

    public function getIcListeligne26(): ?int
    {
        return $this->icListeligne26;
    }

    public function setIcListeligne26(?int $icListeligne26): static
    {
        $this->icListeligne26 = $icListeligne26;

        return $this;
    }

    public function getIcListeligne27(): ?int
    {
        return $this->icListeligne27;
    }

    public function setIcListeligne27(?int $icListeligne27): static
    {
        $this->icListeligne27 = $icListeligne27;

        return $this;
    }

    public function getIcListeligne28(): ?int
    {
        return $this->icListeligne28;
    }

    public function setIcListeligne28(?int $icListeligne28): static
    {
        $this->icListeligne28 = $icListeligne28;

        return $this;
    }

    public function getIcListeligne29(): ?int
    {
        return $this->icListeligne29;
    }

    public function setIcListeligne29(?int $icListeligne29): static
    {
        $this->icListeligne29 = $icListeligne29;

        return $this;
    }

    public function getIcListeligne30(): ?int
    {
        return $this->icListeligne30;
    }

    public function setIcListeligne30(?int $icListeligne30): static
    {
        $this->icListeligne30 = $icListeligne30;

        return $this;
    }

    public function getIcListeligne31(): ?int
    {
        return $this->icListeligne31;
    }

    public function setIcListeligne31(?int $icListeligne31): static
    {
        $this->icListeligne31 = $icListeligne31;

        return $this;
    }

    public function getIcListeticket01(): ?int
    {
        return $this->icListeticket01;
    }

    public function setIcListeticket01(?int $icListeticket01): static
    {
        $this->icListeticket01 = $icListeticket01;

        return $this;
    }

    public function getIcListeticket02(): ?int
    {
        return $this->icListeticket02;
    }

    public function setIcListeticket02(?int $icListeticket02): static
    {
        $this->icListeticket02 = $icListeticket02;

        return $this;
    }

    public function getIcListeticket03(): ?int
    {
        return $this->icListeticket03;
    }

    public function setIcListeticket03(?int $icListeticket03): static
    {
        $this->icListeticket03 = $icListeticket03;

        return $this;
    }

    public function getIcListeticket04(): ?int
    {
        return $this->icListeticket04;
    }

    public function setIcListeticket04(?int $icListeticket04): static
    {
        $this->icListeticket04 = $icListeticket04;

        return $this;
    }

    public function getIcListeticket05(): ?int
    {
        return $this->icListeticket05;
    }

    public function setIcListeticket05(?int $icListeticket05): static
    {
        $this->icListeticket05 = $icListeticket05;

        return $this;
    }

    public function getIcListeticket06(): ?int
    {
        return $this->icListeticket06;
    }

    public function setIcListeticket06(?int $icListeticket06): static
    {
        $this->icListeticket06 = $icListeticket06;

        return $this;
    }

    public function getIcListeticket07(): ?int
    {
        return $this->icListeticket07;
    }

    public function setIcListeticket07(?int $icListeticket07): static
    {
        $this->icListeticket07 = $icListeticket07;

        return $this;
    }

    public function getIcListeticket08(): ?int
    {
        return $this->icListeticket08;
    }

    public function setIcListeticket08(?int $icListeticket08): static
    {
        $this->icListeticket08 = $icListeticket08;

        return $this;
    }

    public function getIcListeticket09(): ?int
    {
        return $this->icListeticket09;
    }

    public function setIcListeticket09(?int $icListeticket09): static
    {
        $this->icListeticket09 = $icListeticket09;

        return $this;
    }

    public function getIcListeticket10(): ?int
    {
        return $this->icListeticket10;
    }

    public function setIcListeticket10(?int $icListeticket10): static
    {
        $this->icListeticket10 = $icListeticket10;

        return $this;
    }

    public function getIcListeticket11(): ?int
    {
        return $this->icListeticket11;
    }

    public function setIcListeticket11(?int $icListeticket11): static
    {
        $this->icListeticket11 = $icListeticket11;

        return $this;
    }

    public function getIcListeticket12(): ?int
    {
        return $this->icListeticket12;
    }

    public function setIcListeticket12(?int $icListeticket12): static
    {
        $this->icListeticket12 = $icListeticket12;

        return $this;
    }

    public function getIcListeligne32(): ?int
    {
        return $this->icListeligne32;
    }

    public function setIcListeligne32(?int $icListeligne32): static
    {
        $this->icListeligne32 = $icListeligne32;

        return $this;
    }

    public function getIcListeligne33(): ?int
    {
        return $this->icListeligne33;
    }

    public function setIcListeligne33(?int $icListeligne33): static
    {
        $this->icListeligne33 = $icListeligne33;

        return $this;
    }

    public function getIcListeligne34(): ?int
    {
        return $this->icListeligne34;
    }

    public function setIcListeligne34(?int $icListeligne34): static
    {
        $this->icListeligne34 = $icListeligne34;

        return $this;
    }
}
