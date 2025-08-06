<?php

namespace App\Entity\Oriwood;

use App\Repository\Oriwood\PCatcomptaRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'P_CATCOMPTA')]
#[ORM\Entity(repositoryClass: PCatcomptaRepository::class)]
class PCatcompta
{
    #[ORM\Column(name: "cbMarq")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $cbmarq = null;

    #[ORM\Column(name: "CA_ComptaVen01", length: 35, nullable: true)]
    private ?string $caComptaven01 = null;

    #[ORM\Column(name: "CA_ComptaVen02", length: 35, nullable: true)]
    private ?string $caComptaven02 = null;

    #[ORM\Column(name: "CA_ComptaVen03", length: 35, nullable: true)]
    private ?string $caComptaven03 = null;

    #[ORM\Column(name: "CA_ComptaVen04", length: 35, nullable: true)]
    private ?string $caComptaven04 = null;

    #[ORM\Column(name: "CA_ComptaVen05", length: 35, nullable: true)]
    private ?string $caComptaven05 = null;

    #[ORM\Column(name: "CA_ComptaVen06", length: 35, nullable: true)]
    private ?string $caComptaven06 = null;

    #[ORM\Column(name: "CA_ComptaVen07", length: 35, nullable: true)]
    private ?string $caComptaven07 = null;

    #[ORM\Column(name: "CA_ComptaVen08", length: 35, nullable: true)]
    private ?string $caComptaven08 = null;

    #[ORM\Column(name: "CA_ComptaVen09", length: 35, nullable: true)]
    private ?string $caComptaven09 = null;

    #[ORM\Column(name: "CA_ComptaVen10", length: 35, nullable: true)]
    private ?string $caComptaven10 = null;

    #[ORM\Column(name: "CA_ComptaVen11", length: 35, nullable: true)]
    private ?string $caComptaven11 = null;

    #[ORM\Column(name: "CA_ComptaVen12", length: 35, nullable: true)]
    private ?string $caComptaven12 = null;

    #[ORM\Column(name: "CA_ComptaVen13", length: 35, nullable: true)]
    private ?string $caComptaven13 = null;

    #[ORM\Column(name: "CA_ComptaVen14", length: 35, nullable: true)]
    private ?string $caComptaven14 = null;

    #[ORM\Column(name: "CA_ComptaVen15", length: 35, nullable: true)]
    private ?string $caComptaven15 = null;

    #[ORM\Column(name: "CA_ComptaVen16", length: 35, nullable: true)]
    private ?string $caComptaven16 = null;

    #[ORM\Column(name: "CA_ComptaVen17", length: 35, nullable: true)]
    private ?string $caComptaven17 = null;

    #[ORM\Column(name: "CA_ComptaVen18", length: 35, nullable: true)]
    private ?string $caComptaven18 = null;

    #[ORM\Column(name: "CA_ComptaVen19", length: 35, nullable: true)]
    private ?string $caComptaven19 = null;

    #[ORM\Column(name: "CA_ComptaVen20", length: 35, nullable: true)]
    private ?string $caComptaven20 = null;

    #[ORM\Column(name: "CA_ComptaVen21", length: 35, nullable: true)]
    private ?string $caComptaven21 = null;

    #[ORM\Column(name: "CA_ComptaVen22", length: 35, nullable: true)]
    private ?string $caComptaven22 = null;

    #[ORM\Column(name: "CA_ComptaVen23", length: 35, nullable: true)]
    private ?string $caComptaven23 = null;

    #[ORM\Column(name: "CA_ComptaVen24", length: 35, nullable: true)]
    private ?string $caComptaven24 = null;

    #[ORM\Column(name: "CA_ComptaVen25", length: 35, nullable: true)]
    private ?string $caComptaven25 = null;

    #[ORM\Column(name: "CA_ComptaVen26", length: 35, nullable: true)]
    private ?string $caComptaven26 = null;

    #[ORM\Column(name: "CA_ComptaVen27", length: 35, nullable: true)]
    private ?string $caComptaven27 = null;

    #[ORM\Column(name: "CA_ComptaVen28", length: 35, nullable: true)]
    private ?string $caComptaven28 = null;

    #[ORM\Column(name: "CA_ComptaVen29", length: 35, nullable: true)]
    private ?string $caComptaven29 = null;

    #[ORM\Column(name: "CA_ComptaVen30", length: 35, nullable: true)]
    private ?string $caComptaven30 = null;

    #[ORM\Column(name: "CA_ComptaVen31", length: 35, nullable: true)]
    private ?string $caComptaven31 = null;

    #[ORM\Column(name: "CA_ComptaVen32", length: 35, nullable: true)]
    private ?string $caComptaven32 = null;

    #[ORM\Column(name: "CA_ComptaVen33", length: 35, nullable: true)]
    private ?string $caComptaven33 = null;

    #[ORM\Column(name: "CA_ComptaVen34", length: 35, nullable: true)]
    private ?string $caComptaven34 = null;

    #[ORM\Column(name: "CA_ComptaVen35", length: 35, nullable: true)]
    private ?string $caComptaven35 = null;

    #[ORM\Column(name: "CA_ComptaVen36", length: 35, nullable: true)]
    private ?string $caComptaven36 = null;

    #[ORM\Column(name: "CA_ComptaVen37", length: 35, nullable: true)]
    private ?string $caComptaven37 = null;

    #[ORM\Column(name: "CA_ComptaVen38", length: 35, nullable: true)]
    private ?string $caComptaven38 = null;

    #[ORM\Column(name: "CA_ComptaVen39", length: 35, nullable: true)]
    private ?string $caComptaven39 = null;

    #[ORM\Column(name: "CA_ComptaVen40", length: 35, nullable: true)]
    private ?string $caComptaven40 = null;

    #[ORM\Column(name: "CA_ComptaVen41", length: 35, nullable: true)]
    private ?string $caComptaven41 = null;

    #[ORM\Column(name: "CA_ComptaVen42", length: 35, nullable: true)]
    private ?string $caComptaven42 = null;

    #[ORM\Column(name: "CA_ComptaVen43", length: 35, nullable: true)]
    private ?string $caComptaven43 = null;

    #[ORM\Column(name: "CA_ComptaVen44", length: 35, nullable: true)]
    private ?string $caComptaven44 = null;

    #[ORM\Column(name: "CA_ComptaVen45", length: 35, nullable: true)]
    private ?string $caComptaven45 = null;

    #[ORM\Column(name: "CA_ComptaVen46", length: 35, nullable: true)]
    private ?string $caComptaven46 = null;

    #[ORM\Column(name: "CA_ComptaVen47", length: 35, nullable: true)]
    private ?string $caComptaven47 = null;

    #[ORM\Column(name: "CA_ComptaVen48", length: 35, nullable: true)]
    private ?string $caComptaven48 = null;

    #[ORM\Column(name: "CA_ComptaVen49", length: 35, nullable: true)]
    private ?string $caComptaven49 = null;

    #[ORM\Column(name: "CA_ComptaVen50", length: 35, nullable: true)]
    private ?string $caComptaven50 = null;

    #[ORM\Column(name: "CA_ComptaAch01", length: 35, nullable: true)]
    private ?string $caComptaach01 = null;

    #[ORM\Column(name: "CA_ComptaAch02", length: 35, nullable: true)]
    private ?string $caComptaach02 = null;

    #[ORM\Column(name: "CA_ComptaAch03", length: 35, nullable: true)]
    private ?string $caComptaach03 = null;

    #[ORM\Column(name: "CA_ComptaAch04", length: 35, nullable: true)]
    private ?string $caComptaach04 = null;

    #[ORM\Column(name: "CA_ComptaAch05", length: 35, nullable: true)]
    private ?string $caComptaach05 = null;

    #[ORM\Column(name: "CA_ComptaAch06", length: 35, nullable: true)]
    private ?string $caComptaach06 = null;

    #[ORM\Column(name: "CA_ComptaAch07", length: 35, nullable: true)]
    private ?string $caComptaach07 = null;

    #[ORM\Column(name: "CA_ComptaAch08", length: 35, nullable: true)]
    private ?string $caComptaach08 = null;

    #[ORM\Column(name: "CA_ComptaAch09", length: 35, nullable: true)]
    private ?string $caComptaach09 = null;

    #[ORM\Column(name: "CA_ComptaAch10", length: 35, nullable: true)]
    private ?string $caComptaach10 = null;

    #[ORM\Column(name: "CA_ComptaAch11", length: 35, nullable: true)]
    private ?string $caComptaach11 = null;

    #[ORM\Column(name: "CA_ComptaAch12", length: 35, nullable: true)]
    private ?string $caComptaach12 = null;

    #[ORM\Column(name: "CA_ComptaAch13", length: 35, nullable: true)]
    private ?string $caComptaach13 = null;

    #[ORM\Column(name: "CA_ComptaAch14", length: 35, nullable: true)]
    private ?string $caComptaach14 = null;

    #[ORM\Column(name: "CA_ComptaAch15", length: 35, nullable: true)]
    private ?string $caComptaach15 = null;

    #[ORM\Column(name: "CA_ComptaAch16", length: 35, nullable: true)]
    private ?string $caComptaach16 = null;

    #[ORM\Column(name: "CA_ComptaAch17", length: 35, nullable: true)]
    private ?string $caComptaach17 = null;

    #[ORM\Column(name: "CA_ComptaAch18", length: 35, nullable: true)]
    private ?string $caComptaach18 = null;

    #[ORM\Column(name: "CA_ComptaAch19", length: 35, nullable: true)]
    private ?string $caComptaach19 = null;

    #[ORM\Column(name: "CA_ComptaAch20", length: 35, nullable: true)]
    private ?string $caComptaach20 = null;

    #[ORM\Column(name: "CA_ComptaAch21", length: 35, nullable: true)]
    private ?string $caComptaach21 = null;

    #[ORM\Column(name: "CA_ComptaAch22", length: 35, nullable: true)]
    private ?string $caComptaach22 = null;

    #[ORM\Column(name: "CA_ComptaAch23", length: 35, nullable: true)]
    private ?string $caComptaach23 = null;

    #[ORM\Column(name: "CA_ComptaAch24", length: 35, nullable: true)]
    private ?string $caComptaach24 = null;

    #[ORM\Column(name: "CA_ComptaAch25", length: 35, nullable: true)]
    private ?string $caComptaach25 = null;

    #[ORM\Column(name: "CA_ComptaAch26", length: 35, nullable: true)]
    private ?string $caComptaach26 = null;

    #[ORM\Column(name: "CA_ComptaAch27", length: 35, nullable: true)]
    private ?string $caComptaach27 = null;

    #[ORM\Column(name: "CA_ComptaAch28", length: 35, nullable: true)]
    private ?string $caComptaach28 = null;

    #[ORM\Column(name: "CA_ComptaAch29", length: 35, nullable: true)]
    private ?string $caComptaach29 = null;

    #[ORM\Column(name: "CA_ComptaAch30", length: 35, nullable: true)]
    private ?string $caComptaach30 = null;

    #[ORM\Column(name: "CA_ComptaAch31", length: 35, nullable: true)]
    private ?string $caComptaach31 = null;

    #[ORM\Column(name: "CA_ComptaAch32", length: 35, nullable: true)]
    private ?string $caComptaach32 = null;

    #[ORM\Column(name: "CA_ComptaAch33", length: 35, nullable: true)]
    private ?string $caComptaach33 = null;

    #[ORM\Column(name: "CA_ComptaAch34", length: 35, nullable: true)]
    private ?string $caComptaach34 = null;

    #[ORM\Column(name: "CA_ComptaAch35", length: 35, nullable: true)]
    private ?string $caComptaach35 = null;

    #[ORM\Column(name: "CA_ComptaAch36", length: 35, nullable: true)]
    private ?string $caComptaach36 = null;

    #[ORM\Column(name: "CA_ComptaAch37", length: 35, nullable: true)]
    private ?string $caComptaach37 = null;

    #[ORM\Column(name: "CA_ComptaAch38", length: 35, nullable: true)]
    private ?string $caComptaach38 = null;

    #[ORM\Column(name: "CA_ComptaAch39", length: 35, nullable: true)]
    private ?string $caComptaach39 = null;

    #[ORM\Column(name: "CA_ComptaAch40", length: 35, nullable: true)]
    private ?string $caComptaach40 = null;

    #[ORM\Column(name: "CA_ComptaAch41", length: 35, nullable: true)]
    private ?string $caComptaach41 = null;

    #[ORM\Column(name: "CA_ComptaAch42", length: 35, nullable: true)]
    private ?string $caComptaach42 = null;

    #[ORM\Column(name: "CA_ComptaAch43", length: 35, nullable: true)]
    private ?string $caComptaach43 = null;

    #[ORM\Column(name: "CA_ComptaAch44", length: 35, nullable: true)]
    private ?string $caComptaach44 = null;

    #[ORM\Column(name: "CA_ComptaAch45", length: 35, nullable: true)]
    private ?string $caComptaach45 = null;

    #[ORM\Column(name: "CA_ComptaAch46", length: 35, nullable: true)]
    private ?string $caComptaach46 = null;

    #[ORM\Column(name: "CA_ComptaAch47", length: 35, nullable: true)]
    private ?string $caComptaach47 = null;

    #[ORM\Column(name: "CA_ComptaAch48", length: 35, nullable: true)]
    private ?string $caComptaach48 = null;

    #[ORM\Column(name: "CA_ComptaAch49", length: 35, nullable: true)]
    private ?string $caComptaach49 = null;

    #[ORM\Column(name: "CA_ComptaAch50", length: 35, nullable: true)]
    private ?string $caComptaach50 = null;

    #[ORM\Column(name: "CA_ComptaSto01", length: 35, nullable: true)]
    private ?string $caComptasto01 = null;

    #[ORM\Column(name: "CA_ComptaSto02", length: 35, nullable: true)]
    private ?string $caComptasto02 = null;

    #[ORM\Column(name: "CA_ComptaSto03", length: 35, nullable: true)]
    private ?string $caComptasto03 = null;

    #[ORM\Column(name: "CA_ComptaSto04", length: 35, nullable: true)]
    private ?string $caComptasto04 = null;

    #[ORM\Column(name: "CA_ComptaSto05", length: 35, nullable: true)]
    private ?string $caComptasto05 = null;

    #[ORM\Column(name: "CA_ComptaSto06", length: 35, nullable: true)]
    private ?string $caComptasto06 = null;

    #[ORM\Column(name: "CA_ComptaSto07", length: 35, nullable: true)]
    private ?string $caComptasto07 = null;

    #[ORM\Column(name: "CA_ComptaSto08", length: 35, nullable: true)]
    private ?string $caComptasto08 = null;

    #[ORM\Column(name: "CA_ComptaSto09", length: 35, nullable: true)]
    private ?string $caComptasto09 = null;

    #[ORM\Column(name: "CA_ComptaSto10", length: 35, nullable: true)]
    private ?string $caComptasto10 = null;

    #[ORM\Column(name: "CA_ComptaSto11", length: 35, nullable: true)]
    private ?string $caComptasto11 = null;

    #[ORM\Column(name: "CA_ComptaSto12", length: 35, nullable: true)]
    private ?string $caComptasto12 = null;

    #[ORM\Column(name: "CA_ComptaSto13", length: 35, nullable: true)]
    private ?string $caComptasto13 = null;

    #[ORM\Column(name: "CA_ComptaSto14", length: 35, nullable: true)]
    private ?string $caComptasto14 = null;

    #[ORM\Column(name: "CA_ComptaSto15", length: 35, nullable: true)]
    private ?string $caComptasto15 = null;

    #[ORM\Column(name: "CA_ComptaSto16", length: 35, nullable: true)]
    private ?string $caComptasto16 = null;

    #[ORM\Column(name: "CA_ComptaSto17", length: 35, nullable: true)]
    private ?string $caComptasto17 = null;

    #[ORM\Column(name: "CA_ComptaSto18", length: 35, nullable: true)]
    private ?string $caComptasto18 = null;

    #[ORM\Column(name: "CA_ComptaSto19", length: 35, nullable: true)]
    private ?string $caComptasto19 = null;

    #[ORM\Column(name: "CA_ComptaSto20", length: 35, nullable: true)]
    private ?string $caComptasto20 = null;

    #[ORM\Column(name: "CA_ComptaSto21", length: 35, nullable: true)]
    private ?string $caComptasto21 = null;

    #[ORM\Column(name: "CA_ComptaSto22", length: 35, nullable: true)]
    private ?string $caComptasto22 = null;

    #[ORM\Column(name: "CA_ComptaSto23", length: 35, nullable: true)]
    private ?string $caComptasto23 = null;

    #[ORM\Column(name: "CA_ComptaSto24", length: 35, nullable: true)]
    private ?string $caComptasto24 = null;

    #[ORM\Column(name: "CA_ComptaSto25", length: 35, nullable: true)]
    private ?string $caComptasto25 = null;

    #[ORM\Column(name: "CA_ComptaSto26", length: 35, nullable: true)]
    private ?string $caComptasto26 = null;

    #[ORM\Column(name: "CA_ComptaSto27", length: 35, nullable: true)]
    private ?string $caComptasto27 = null;

    #[ORM\Column(name: "CA_ComptaSto28", length: 35, nullable: true)]
    private ?string $caComptasto28 = null;

    #[ORM\Column(name: "CA_ComptaSto29", length: 35, nullable: true)]
    private ?string $caComptasto29 = null;

    #[ORM\Column(name: "CA_ComptaSto30", length: 35, nullable: true)]
    private ?string $caComptasto30 = null;

    #[ORM\Column(name: "CA_ComptaSto31", length: 35, nullable: true)]
    private ?string $caComptasto31 = null;

    #[ORM\Column(name: "CA_ComptaSto32", length: 35, nullable: true)]
    private ?string $caComptasto32 = null;

    #[ORM\Column(name: "CA_ComptaSto33", length: 35, nullable: true)]
    private ?string $caComptasto33 = null;

    #[ORM\Column(name: "CA_ComptaSto34", length: 35, nullable: true)]
    private ?string $caComptasto34 = null;

    #[ORM\Column(name: "CA_ComptaSto35", length: 35, nullable: true)]
    private ?string $caComptasto35 = null;

    #[ORM\Column(name: "CA_ComptaSto36", length: 35, nullable: true)]
    private ?string $caComptasto36 = null;

    #[ORM\Column(name: "CA_ComptaSto37", length: 35, nullable: true)]
    private ?string $caComptasto37 = null;

    #[ORM\Column(name: "CA_ComptaSto38", length: 35, nullable: true)]
    private ?string $caComptasto38 = null;

    #[ORM\Column(name: "CA_ComptaSto39", length: 35, nullable: true)]
    private ?string $caComptasto39 = null;

    #[ORM\Column(name: "CA_ComptaSto40", length: 35, nullable: true)]
    private ?string $caComptasto40 = null;

    #[ORM\Column(name: "CA_ComptaSto41", length: 35, nullable: true)]
    private ?string $caComptasto41 = null;

    #[ORM\Column(name: "CA_ComptaSto42", length: 35, nullable: true)]
    private ?string $caComptasto42 = null;

    #[ORM\Column(name: "CA_ComptaSto43", length: 35, nullable: true)]
    private ?string $caComptasto43 = null;

    #[ORM\Column(name: "CA_ComptaSto44", length: 35, nullable: true)]
    private ?string $caComptasto44 = null;

    #[ORM\Column(name: "CA_ComptaSto45", length: 35, nullable: true)]
    private ?string $caComptasto45 = null;

    #[ORM\Column(name: "CA_ComptaSto46", length: 35, nullable: true)]
    private ?string $caComptasto46 = null;

    #[ORM\Column(name: "CA_ComptaSto47", length: 35, nullable: true)]
    private ?string $caComptasto47 = null;

    #[ORM\Column(name: "CA_ComptaSto48", length: 35, nullable: true)]
    private ?string $caComptasto48 = null;

    #[ORM\Column(name: "CA_ComptaSto49", length: 35, nullable: true)]
    private ?string $caComptasto49 = null;

    #[ORM\Column(name: "CA_ComptaSto50", length: 35, nullable: true)]
    private ?string $caComptasto50 = null;

    public function getCbmarq(): ?int
    {
        return $this->cbmarq;
    }

    public function getCaComptaven01(): ?string
    {
        return $this->caComptaven01;
    }

    public function setCaComptaven01(?string $caComptaven01): static
    {
        $this->caComptaven01 = $caComptaven01;

        return $this;
    }

    public function getCaComptaven02(): ?string
    {
        return $this->caComptaven02;
    }

    public function setCaComptaven02(?string $caComptaven02): static
    {
        $this->caComptaven02 = $caComptaven02;

        return $this;
    }

    public function getCaComptaven03(): ?string
    {
        return $this->caComptaven03;
    }

    public function setCaComptaven03(?string $caComptaven03): static
    {
        $this->caComptaven03 = $caComptaven03;

        return $this;
    }

    public function getCaComptaven04(): ?string
    {
        return $this->caComptaven04;
    }

    public function setCaComptaven04(?string $caComptaven04): static
    {
        $this->caComptaven04 = $caComptaven04;

        return $this;
    }

    public function getCaComptaven05(): ?string
    {
        return $this->caComptaven05;
    }

    public function setCaComptaven05(?string $caComptaven05): static
    {
        $this->caComptaven05 = $caComptaven05;

        return $this;
    }

    public function getCaComptaven06(): ?string
    {
        return $this->caComptaven06;
    }

    public function setCaComptaven06(?string $caComptaven06): static
    {
        $this->caComptaven06 = $caComptaven06;

        return $this;
    }

    public function getCaComptaven07(): ?string
    {
        return $this->caComptaven07;
    }

    public function setCaComptaven07(?string $caComptaven07): static
    {
        $this->caComptaven07 = $caComptaven07;

        return $this;
    }

    public function getCaComptaven08(): ?string
    {
        return $this->caComptaven08;
    }

    public function setCaComptaven08(?string $caComptaven08): static
    {
        $this->caComptaven08 = $caComptaven08;

        return $this;
    }

    public function getCaComptaven09(): ?string
    {
        return $this->caComptaven09;
    }

    public function setCaComptaven09(?string $caComptaven09): static
    {
        $this->caComptaven09 = $caComptaven09;

        return $this;
    }

    public function getCaComptaven10(): ?string
    {
        return $this->caComptaven10;
    }

    public function setCaComptaven10(?string $caComptaven10): static
    {
        $this->caComptaven10 = $caComptaven10;

        return $this;
    }

    public function getCaComptaven11(): ?string
    {
        return $this->caComptaven11;
    }

    public function setCaComptaven11(?string $caComptaven11): static
    {
        $this->caComptaven11 = $caComptaven11;

        return $this;
    }

    public function getCaComptaven12(): ?string
    {
        return $this->caComptaven12;
    }

    public function setCaComptaven12(?string $caComptaven12): static
    {
        $this->caComptaven12 = $caComptaven12;

        return $this;
    }

    public function getCaComptaven13(): ?string
    {
        return $this->caComptaven13;
    }

    public function setCaComptaven13(?string $caComptaven13): static
    {
        $this->caComptaven13 = $caComptaven13;

        return $this;
    }

    public function getCaComptaven14(): ?string
    {
        return $this->caComptaven14;
    }

    public function setCaComptaven14(?string $caComptaven14): static
    {
        $this->caComptaven14 = $caComptaven14;

        return $this;
    }

    public function getCaComptaven15(): ?string
    {
        return $this->caComptaven15;
    }

    public function setCaComptaven15(?string $caComptaven15): static
    {
        $this->caComptaven15 = $caComptaven15;

        return $this;
    }

    public function getCaComptaven16(): ?string
    {
        return $this->caComptaven16;
    }

    public function setCaComptaven16(?string $caComptaven16): static
    {
        $this->caComptaven16 = $caComptaven16;

        return $this;
    }

    public function getCaComptaven17(): ?string
    {
        return $this->caComptaven17;
    }

    public function setCaComptaven17(?string $caComptaven17): static
    {
        $this->caComptaven17 = $caComptaven17;

        return $this;
    }

    public function getCaComptaven18(): ?string
    {
        return $this->caComptaven18;
    }

    public function setCaComptaven18(?string $caComptaven18): static
    {
        $this->caComptaven18 = $caComptaven18;

        return $this;
    }

    public function getCaComptaven19(): ?string
    {
        return $this->caComptaven19;
    }

    public function setCaComptaven19(?string $caComptaven19): static
    {
        $this->caComptaven19 = $caComptaven19;

        return $this;
    }

    public function getCaComptaven20(): ?string
    {
        return $this->caComptaven20;
    }

    public function setCaComptaven20(?string $caComptaven20): static
    {
        $this->caComptaven20 = $caComptaven20;

        return $this;
    }

    public function getCaComptaven21(): ?string
    {
        return $this->caComptaven21;
    }

    public function setCaComptaven21(?string $caComptaven21): static
    {
        $this->caComptaven21 = $caComptaven21;

        return $this;
    }

    public function getCaComptaven22(): ?string
    {
        return $this->caComptaven22;
    }

    public function setCaComptaven22(?string $caComptaven22): static
    {
        $this->caComptaven22 = $caComptaven22;

        return $this;
    }

    public function getCaComptaven23(): ?string
    {
        return $this->caComptaven23;
    }

    public function setCaComptaven23(?string $caComptaven23): static
    {
        $this->caComptaven23 = $caComptaven23;

        return $this;
    }

    public function getCaComptaven24(): ?string
    {
        return $this->caComptaven24;
    }

    public function setCaComptaven24(?string $caComptaven24): static
    {
        $this->caComptaven24 = $caComptaven24;

        return $this;
    }

    public function getCaComptaven25(): ?string
    {
        return $this->caComptaven25;
    }

    public function setCaComptaven25(?string $caComptaven25): static
    {
        $this->caComptaven25 = $caComptaven25;

        return $this;
    }

    public function getCaComptaven26(): ?string
    {
        return $this->caComptaven26;
    }

    public function setCaComptaven26(?string $caComptaven26): static
    {
        $this->caComptaven26 = $caComptaven26;

        return $this;
    }

    public function getCaComptaven27(): ?string
    {
        return $this->caComptaven27;
    }

    public function setCaComptaven27(?string $caComptaven27): static
    {
        $this->caComptaven27 = $caComptaven27;

        return $this;
    }

    public function getCaComptaven28(): ?string
    {
        return $this->caComptaven28;
    }

    public function setCaComptaven28(?string $caComptaven28): static
    {
        $this->caComptaven28 = $caComptaven28;

        return $this;
    }

    public function getCaComptaven29(): ?string
    {
        return $this->caComptaven29;
    }

    public function setCaComptaven29(?string $caComptaven29): static
    {
        $this->caComptaven29 = $caComptaven29;

        return $this;
    }

    public function getCaComptaven30(): ?string
    {
        return $this->caComptaven30;
    }

    public function setCaComptaven30(?string $caComptaven30): static
    {
        $this->caComptaven30 = $caComptaven30;

        return $this;
    }

    public function getCaComptaven31(): ?string
    {
        return $this->caComptaven31;
    }

    public function setCaComptaven31(?string $caComptaven31): static
    {
        $this->caComptaven31 = $caComptaven31;

        return $this;
    }

    public function getCaComptaven32(): ?string
    {
        return $this->caComptaven32;
    }

    public function setCaComptaven32(?string $caComptaven32): static
    {
        $this->caComptaven32 = $caComptaven32;

        return $this;
    }

    public function getCaComptaven33(): ?string
    {
        return $this->caComptaven33;
    }

    public function setCaComptaven33(?string $caComptaven33): static
    {
        $this->caComptaven33 = $caComptaven33;

        return $this;
    }

    public function getCaComptaven34(): ?string
    {
        return $this->caComptaven34;
    }

    public function setCaComptaven34(?string $caComptaven34): static
    {
        $this->caComptaven34 = $caComptaven34;

        return $this;
    }

    public function getCaComptaven35(): ?string
    {
        return $this->caComptaven35;
    }

    public function setCaComptaven35(?string $caComptaven35): static
    {
        $this->caComptaven35 = $caComptaven35;

        return $this;
    }

    public function getCaComptaven36(): ?string
    {
        return $this->caComptaven36;
    }

    public function setCaComptaven36(?string $caComptaven36): static
    {
        $this->caComptaven36 = $caComptaven36;

        return $this;
    }

    public function getCaComptaven37(): ?string
    {
        return $this->caComptaven37;
    }

    public function setCaComptaven37(?string $caComptaven37): static
    {
        $this->caComptaven37 = $caComptaven37;

        return $this;
    }

    public function getCaComptaven38(): ?string
    {
        return $this->caComptaven38;
    }

    public function setCaComptaven38(?string $caComptaven38): static
    {
        $this->caComptaven38 = $caComptaven38;

        return $this;
    }

    public function getCaComptaven39(): ?string
    {
        return $this->caComptaven39;
    }

    public function setCaComptaven39(?string $caComptaven39): static
    {
        $this->caComptaven39 = $caComptaven39;

        return $this;
    }

    public function getCaComptaven40(): ?string
    {
        return $this->caComptaven40;
    }

    public function setCaComptaven40(?string $caComptaven40): static
    {
        $this->caComptaven40 = $caComptaven40;

        return $this;
    }

    public function getCaComptaven41(): ?string
    {
        return $this->caComptaven41;
    }

    public function setCaComptaven41(?string $caComptaven41): static
    {
        $this->caComptaven41 = $caComptaven41;

        return $this;
    }

    public function getCaComptaven42(): ?string
    {
        return $this->caComptaven42;
    }

    public function setCaComptaven42(?string $caComptaven42): static
    {
        $this->caComptaven42 = $caComptaven42;

        return $this;
    }

    public function getCaComptaven43(): ?string
    {
        return $this->caComptaven43;
    }

    public function setCaComptaven43(?string $caComptaven43): static
    {
        $this->caComptaven43 = $caComptaven43;

        return $this;
    }

    public function getCaComptaven44(): ?string
    {
        return $this->caComptaven44;
    }

    public function setCaComptaven44(?string $caComptaven44): static
    {
        $this->caComptaven44 = $caComptaven44;

        return $this;
    }

    public function getCaComptaven45(): ?string
    {
        return $this->caComptaven45;
    }

    public function setCaComptaven45(?string $caComptaven45): static
    {
        $this->caComptaven45 = $caComptaven45;

        return $this;
    }

    public function getCaComptaven46(): ?string
    {
        return $this->caComptaven46;
    }

    public function setCaComptaven46(?string $caComptaven46): static
    {
        $this->caComptaven46 = $caComptaven46;

        return $this;
    }

    public function getCaComptaven47(): ?string
    {
        return $this->caComptaven47;
    }

    public function setCaComptaven47(?string $caComptaven47): static
    {
        $this->caComptaven47 = $caComptaven47;

        return $this;
    }

    public function getCaComptaven48(): ?string
    {
        return $this->caComptaven48;
    }

    public function setCaComptaven48(?string $caComptaven48): static
    {
        $this->caComptaven48 = $caComptaven48;

        return $this;
    }

    public function getCaComptaven49(): ?string
    {
        return $this->caComptaven49;
    }

    public function setCaComptaven49(?string $caComptaven49): static
    {
        $this->caComptaven49 = $caComptaven49;

        return $this;
    }

    public function getCaComptaven50(): ?string
    {
        return $this->caComptaven50;
    }

    public function setCaComptaven50(?string $caComptaven50): static
    {
        $this->caComptaven50 = $caComptaven50;

        return $this;
    }

    public function getCaComptaach01(): ?string
    {
        return $this->caComptaach01;
    }

    public function setCaComptaach01(?string $caComptaach01): static
    {
        $this->caComptaach01 = $caComptaach01;

        return $this;
    }

    public function getCaComptaach02(): ?string
    {
        return $this->caComptaach02;
    }

    public function setCaComptaach02(?string $caComptaach02): static
    {
        $this->caComptaach02 = $caComptaach02;

        return $this;
    }

    public function getCaComptaach03(): ?string
    {
        return $this->caComptaach03;
    }

    public function setCaComptaach03(?string $caComptaach03): static
    {
        $this->caComptaach03 = $caComptaach03;

        return $this;
    }

    public function getCaComptaach04(): ?string
    {
        return $this->caComptaach04;
    }

    public function setCaComptaach04(?string $caComptaach04): static
    {
        $this->caComptaach04 = $caComptaach04;

        return $this;
    }

    public function getCaComptaach05(): ?string
    {
        return $this->caComptaach05;
    }

    public function setCaComptaach05(?string $caComptaach05): static
    {
        $this->caComptaach05 = $caComptaach05;

        return $this;
    }

    public function getCaComptaach06(): ?string
    {
        return $this->caComptaach06;
    }

    public function setCaComptaach06(?string $caComptaach06): static
    {
        $this->caComptaach06 = $caComptaach06;

        return $this;
    }

    public function getCaComptaach07(): ?string
    {
        return $this->caComptaach07;
    }

    public function setCaComptaach07(?string $caComptaach07): static
    {
        $this->caComptaach07 = $caComptaach07;

        return $this;
    }

    public function getCaComptaach08(): ?string
    {
        return $this->caComptaach08;
    }

    public function setCaComptaach08(?string $caComptaach08): static
    {
        $this->caComptaach08 = $caComptaach08;

        return $this;
    }

    public function getCaComptaach09(): ?string
    {
        return $this->caComptaach09;
    }

    public function setCaComptaach09(?string $caComptaach09): static
    {
        $this->caComptaach09 = $caComptaach09;

        return $this;
    }

    public function getCaComptaach10(): ?string
    {
        return $this->caComptaach10;
    }

    public function setCaComptaach10(?string $caComptaach10): static
    {
        $this->caComptaach10 = $caComptaach10;

        return $this;
    }

    public function getCaComptaach11(): ?string
    {
        return $this->caComptaach11;
    }

    public function setCaComptaach11(?string $caComptaach11): static
    {
        $this->caComptaach11 = $caComptaach11;

        return $this;
    }

    public function getCaComptaach12(): ?string
    {
        return $this->caComptaach12;
    }

    public function setCaComptaach12(?string $caComptaach12): static
    {
        $this->caComptaach12 = $caComptaach12;

        return $this;
    }

    public function getCaComptaach13(): ?string
    {
        return $this->caComptaach13;
    }

    public function setCaComptaach13(?string $caComptaach13): static
    {
        $this->caComptaach13 = $caComptaach13;

        return $this;
    }

    public function getCaComptaach14(): ?string
    {
        return $this->caComptaach14;
    }

    public function setCaComptaach14(?string $caComptaach14): static
    {
        $this->caComptaach14 = $caComptaach14;

        return $this;
    }

    public function getCaComptaach15(): ?string
    {
        return $this->caComptaach15;
    }

    public function setCaComptaach15(?string $caComptaach15): static
    {
        $this->caComptaach15 = $caComptaach15;

        return $this;
    }

    public function getCaComptaach16(): ?string
    {
        return $this->caComptaach16;
    }

    public function setCaComptaach16(?string $caComptaach16): static
    {
        $this->caComptaach16 = $caComptaach16;

        return $this;
    }

    public function getCaComptaach17(): ?string
    {
        return $this->caComptaach17;
    }

    public function setCaComptaach17(?string $caComptaach17): static
    {
        $this->caComptaach17 = $caComptaach17;

        return $this;
    }

    public function getCaComptaach18(): ?string
    {
        return $this->caComptaach18;
    }

    public function setCaComptaach18(?string $caComptaach18): static
    {
        $this->caComptaach18 = $caComptaach18;

        return $this;
    }

    public function getCaComptaach19(): ?string
    {
        return $this->caComptaach19;
    }

    public function setCaComptaach19(?string $caComptaach19): static
    {
        $this->caComptaach19 = $caComptaach19;

        return $this;
    }

    public function getCaComptaach20(): ?string
    {
        return $this->caComptaach20;
    }

    public function setCaComptaach20(?string $caComptaach20): static
    {
        $this->caComptaach20 = $caComptaach20;

        return $this;
    }

    public function getCaComptaach21(): ?string
    {
        return $this->caComptaach21;
    }

    public function setCaComptaach21(?string $caComptaach21): static
    {
        $this->caComptaach21 = $caComptaach21;

        return $this;
    }

    public function getCaComptaach22(): ?string
    {
        return $this->caComptaach22;
    }

    public function setCaComptaach22(?string $caComptaach22): static
    {
        $this->caComptaach22 = $caComptaach22;

        return $this;
    }

    public function getCaComptaach23(): ?string
    {
        return $this->caComptaach23;
    }

    public function setCaComptaach23(?string $caComptaach23): static
    {
        $this->caComptaach23 = $caComptaach23;

        return $this;
    }

    public function getCaComptaach24(): ?string
    {
        return $this->caComptaach24;
    }

    public function setCaComptaach24(?string $caComptaach24): static
    {
        $this->caComptaach24 = $caComptaach24;

        return $this;
    }

    public function getCaComptaach25(): ?string
    {
        return $this->caComptaach25;
    }

    public function setCaComptaach25(?string $caComptaach25): static
    {
        $this->caComptaach25 = $caComptaach25;

        return $this;
    }

    public function getCaComptaach26(): ?string
    {
        return $this->caComptaach26;
    }

    public function setCaComptaach26(?string $caComptaach26): static
    {
        $this->caComptaach26 = $caComptaach26;

        return $this;
    }

    public function getCaComptaach27(): ?string
    {
        return $this->caComptaach27;
    }

    public function setCaComptaach27(?string $caComptaach27): static
    {
        $this->caComptaach27 = $caComptaach27;

        return $this;
    }

    public function getCaComptaach28(): ?string
    {
        return $this->caComptaach28;
    }

    public function setCaComptaach28(?string $caComptaach28): static
    {
        $this->caComptaach28 = $caComptaach28;

        return $this;
    }

    public function getCaComptaach29(): ?string
    {
        return $this->caComptaach29;
    }

    public function setCaComptaach29(?string $caComptaach29): static
    {
        $this->caComptaach29 = $caComptaach29;

        return $this;
    }

    public function getCaComptaach30(): ?string
    {
        return $this->caComptaach30;
    }

    public function setCaComptaach30(?string $caComptaach30): static
    {
        $this->caComptaach30 = $caComptaach30;

        return $this;
    }

    public function getCaComptaach31(): ?string
    {
        return $this->caComptaach31;
    }

    public function setCaComptaach31(?string $caComptaach31): static
    {
        $this->caComptaach31 = $caComptaach31;

        return $this;
    }

    public function getCaComptaach32(): ?string
    {
        return $this->caComptaach32;
    }

    public function setCaComptaach32(?string $caComptaach32): static
    {
        $this->caComptaach32 = $caComptaach32;

        return $this;
    }

    public function getCaComptaach33(): ?string
    {
        return $this->caComptaach33;
    }

    public function setCaComptaach33(?string $caComptaach33): static
    {
        $this->caComptaach33 = $caComptaach33;

        return $this;
    }

    public function getCaComptaach34(): ?string
    {
        return $this->caComptaach34;
    }

    public function setCaComptaach34(?string $caComptaach34): static
    {
        $this->caComptaach34 = $caComptaach34;

        return $this;
    }

    public function getCaComptaach35(): ?string
    {
        return $this->caComptaach35;
    }

    public function setCaComptaach35(?string $caComptaach35): static
    {
        $this->caComptaach35 = $caComptaach35;

        return $this;
    }

    public function getCaComptaach36(): ?string
    {
        return $this->caComptaach36;
    }

    public function setCaComptaach36(?string $caComptaach36): static
    {
        $this->caComptaach36 = $caComptaach36;

        return $this;
    }

    public function getCaComptaach37(): ?string
    {
        return $this->caComptaach37;
    }

    public function setCaComptaach37(?string $caComptaach37): static
    {
        $this->caComptaach37 = $caComptaach37;

        return $this;
    }

    public function getCaComptaach38(): ?string
    {
        return $this->caComptaach38;
    }

    public function setCaComptaach38(?string $caComptaach38): static
    {
        $this->caComptaach38 = $caComptaach38;

        return $this;
    }

    public function getCaComptaach39(): ?string
    {
        return $this->caComptaach39;
    }

    public function setCaComptaach39(?string $caComptaach39): static
    {
        $this->caComptaach39 = $caComptaach39;

        return $this;
    }

    public function getCaComptaach40(): ?string
    {
        return $this->caComptaach40;
    }

    public function setCaComptaach40(?string $caComptaach40): static
    {
        $this->caComptaach40 = $caComptaach40;

        return $this;
    }

    public function getCaComptaach41(): ?string
    {
        return $this->caComptaach41;
    }

    public function setCaComptaach41(?string $caComptaach41): static
    {
        $this->caComptaach41 = $caComptaach41;

        return $this;
    }

    public function getCaComptaach42(): ?string
    {
        return $this->caComptaach42;
    }

    public function setCaComptaach42(?string $caComptaach42): static
    {
        $this->caComptaach42 = $caComptaach42;

        return $this;
    }

    public function getCaComptaach43(): ?string
    {
        return $this->caComptaach43;
    }

    public function setCaComptaach43(?string $caComptaach43): static
    {
        $this->caComptaach43 = $caComptaach43;

        return $this;
    }

    public function getCaComptaach44(): ?string
    {
        return $this->caComptaach44;
    }

    public function setCaComptaach44(?string $caComptaach44): static
    {
        $this->caComptaach44 = $caComptaach44;

        return $this;
    }

    public function getCaComptaach45(): ?string
    {
        return $this->caComptaach45;
    }

    public function setCaComptaach45(?string $caComptaach45): static
    {
        $this->caComptaach45 = $caComptaach45;

        return $this;
    }

    public function getCaComptaach46(): ?string
    {
        return $this->caComptaach46;
    }

    public function setCaComptaach46(?string $caComptaach46): static
    {
        $this->caComptaach46 = $caComptaach46;

        return $this;
    }

    public function getCaComptaach47(): ?string
    {
        return $this->caComptaach47;
    }

    public function setCaComptaach47(?string $caComptaach47): static
    {
        $this->caComptaach47 = $caComptaach47;

        return $this;
    }

    public function getCaComptaach48(): ?string
    {
        return $this->caComptaach48;
    }

    public function setCaComptaach48(?string $caComptaach48): static
    {
        $this->caComptaach48 = $caComptaach48;

        return $this;
    }

    public function getCaComptaach49(): ?string
    {
        return $this->caComptaach49;
    }

    public function setCaComptaach49(?string $caComptaach49): static
    {
        $this->caComptaach49 = $caComptaach49;

        return $this;
    }

    public function getCaComptaach50(): ?string
    {
        return $this->caComptaach50;
    }

    public function setCaComptaach50(?string $caComptaach50): static
    {
        $this->caComptaach50 = $caComptaach50;

        return $this;
    }

    public function getCaComptasto01(): ?string
    {
        return $this->caComptasto01;
    }

    public function setCaComptasto01(?string $caComptasto01): static
    {
        $this->caComptasto01 = $caComptasto01;

        return $this;
    }

    public function getCaComptasto02(): ?string
    {
        return $this->caComptasto02;
    }

    public function setCaComptasto02(?string $caComptasto02): static
    {
        $this->caComptasto02 = $caComptasto02;

        return $this;
    }

    public function getCaComptasto03(): ?string
    {
        return $this->caComptasto03;
    }

    public function setCaComptasto03(?string $caComptasto03): static
    {
        $this->caComptasto03 = $caComptasto03;

        return $this;
    }

    public function getCaComptasto04(): ?string
    {
        return $this->caComptasto04;
    }

    public function setCaComptasto04(?string $caComptasto04): static
    {
        $this->caComptasto04 = $caComptasto04;

        return $this;
    }

    public function getCaComptasto05(): ?string
    {
        return $this->caComptasto05;
    }

    public function setCaComptasto05(?string $caComptasto05): static
    {
        $this->caComptasto05 = $caComptasto05;

        return $this;
    }

    public function getCaComptasto06(): ?string
    {
        return $this->caComptasto06;
    }

    public function setCaComptasto06(?string $caComptasto06): static
    {
        $this->caComptasto06 = $caComptasto06;

        return $this;
    }

    public function getCaComptasto07(): ?string
    {
        return $this->caComptasto07;
    }

    public function setCaComptasto07(?string $caComptasto07): static
    {
        $this->caComptasto07 = $caComptasto07;

        return $this;
    }

    public function getCaComptasto08(): ?string
    {
        return $this->caComptasto08;
    }

    public function setCaComptasto08(?string $caComptasto08): static
    {
        $this->caComptasto08 = $caComptasto08;

        return $this;
    }

    public function getCaComptasto09(): ?string
    {
        return $this->caComptasto09;
    }

    public function setCaComptasto09(?string $caComptasto09): static
    {
        $this->caComptasto09 = $caComptasto09;

        return $this;
    }

    public function getCaComptasto10(): ?string
    {
        return $this->caComptasto10;
    }

    public function setCaComptasto10(?string $caComptasto10): static
    {
        $this->caComptasto10 = $caComptasto10;

        return $this;
    }

    public function getCaComptasto11(): ?string
    {
        return $this->caComptasto11;
    }

    public function setCaComptasto11(?string $caComptasto11): static
    {
        $this->caComptasto11 = $caComptasto11;

        return $this;
    }

    public function getCaComptasto12(): ?string
    {
        return $this->caComptasto12;
    }

    public function setCaComptasto12(?string $caComptasto12): static
    {
        $this->caComptasto12 = $caComptasto12;

        return $this;
    }

    public function getCaComptasto13(): ?string
    {
        return $this->caComptasto13;
    }

    public function setCaComptasto13(?string $caComptasto13): static
    {
        $this->caComptasto13 = $caComptasto13;

        return $this;
    }

    public function getCaComptasto14(): ?string
    {
        return $this->caComptasto14;
    }

    public function setCaComptasto14(?string $caComptasto14): static
    {
        $this->caComptasto14 = $caComptasto14;

        return $this;
    }

    public function getCaComptasto15(): ?string
    {
        return $this->caComptasto15;
    }

    public function setCaComptasto15(?string $caComptasto15): static
    {
        $this->caComptasto15 = $caComptasto15;

        return $this;
    }

    public function getCaComptasto16(): ?string
    {
        return $this->caComptasto16;
    }

    public function setCaComptasto16(?string $caComptasto16): static
    {
        $this->caComptasto16 = $caComptasto16;

        return $this;
    }

    public function getCaComptasto17(): ?string
    {
        return $this->caComptasto17;
    }

    public function setCaComptasto17(?string $caComptasto17): static
    {
        $this->caComptasto17 = $caComptasto17;

        return $this;
    }

    public function getCaComptasto18(): ?string
    {
        return $this->caComptasto18;
    }

    public function setCaComptasto18(?string $caComptasto18): static
    {
        $this->caComptasto18 = $caComptasto18;

        return $this;
    }

    public function getCaComptasto19(): ?string
    {
        return $this->caComptasto19;
    }

    public function setCaComptasto19(?string $caComptasto19): static
    {
        $this->caComptasto19 = $caComptasto19;

        return $this;
    }

    public function getCaComptasto20(): ?string
    {
        return $this->caComptasto20;
    }

    public function setCaComptasto20(?string $caComptasto20): static
    {
        $this->caComptasto20 = $caComptasto20;

        return $this;
    }

    public function getCaComptasto21(): ?string
    {
        return $this->caComptasto21;
    }

    public function setCaComptasto21(?string $caComptasto21): static
    {
        $this->caComptasto21 = $caComptasto21;

        return $this;
    }

    public function getCaComptasto22(): ?string
    {
        return $this->caComptasto22;
    }

    public function setCaComptasto22(?string $caComptasto22): static
    {
        $this->caComptasto22 = $caComptasto22;

        return $this;
    }

    public function getCaComptasto23(): ?string
    {
        return $this->caComptasto23;
    }

    public function setCaComptasto23(?string $caComptasto23): static
    {
        $this->caComptasto23 = $caComptasto23;

        return $this;
    }

    public function getCaComptasto24(): ?string
    {
        return $this->caComptasto24;
    }

    public function setCaComptasto24(?string $caComptasto24): static
    {
        $this->caComptasto24 = $caComptasto24;

        return $this;
    }

    public function getCaComptasto25(): ?string
    {
        return $this->caComptasto25;
    }

    public function setCaComptasto25(?string $caComptasto25): static
    {
        $this->caComptasto25 = $caComptasto25;

        return $this;
    }

    public function getCaComptasto26(): ?string
    {
        return $this->caComptasto26;
    }

    public function setCaComptasto26(?string $caComptasto26): static
    {
        $this->caComptasto26 = $caComptasto26;

        return $this;
    }

    public function getCaComptasto27(): ?string
    {
        return $this->caComptasto27;
    }

    public function setCaComptasto27(?string $caComptasto27): static
    {
        $this->caComptasto27 = $caComptasto27;

        return $this;
    }

    public function getCaComptasto28(): ?string
    {
        return $this->caComptasto28;
    }

    public function setCaComptasto28(?string $caComptasto28): static
    {
        $this->caComptasto28 = $caComptasto28;

        return $this;
    }

    public function getCaComptasto29(): ?string
    {
        return $this->caComptasto29;
    }

    public function setCaComptasto29(?string $caComptasto29): static
    {
        $this->caComptasto29 = $caComptasto29;

        return $this;
    }

    public function getCaComptasto30(): ?string
    {
        return $this->caComptasto30;
    }

    public function setCaComptasto30(?string $caComptasto30): static
    {
        $this->caComptasto30 = $caComptasto30;

        return $this;
    }

    public function getCaComptasto31(): ?string
    {
        return $this->caComptasto31;
    }

    public function setCaComptasto31(?string $caComptasto31): static
    {
        $this->caComptasto31 = $caComptasto31;

        return $this;
    }

    public function getCaComptasto32(): ?string
    {
        return $this->caComptasto32;
    }

    public function setCaComptasto32(?string $caComptasto32): static
    {
        $this->caComptasto32 = $caComptasto32;

        return $this;
    }

    public function getCaComptasto33(): ?string
    {
        return $this->caComptasto33;
    }

    public function setCaComptasto33(?string $caComptasto33): static
    {
        $this->caComptasto33 = $caComptasto33;

        return $this;
    }

    public function getCaComptasto34(): ?string
    {
        return $this->caComptasto34;
    }

    public function setCaComptasto34(?string $caComptasto34): static
    {
        $this->caComptasto34 = $caComptasto34;

        return $this;
    }

    public function getCaComptasto35(): ?string
    {
        return $this->caComptasto35;
    }

    public function setCaComptasto35(?string $caComptasto35): static
    {
        $this->caComptasto35 = $caComptasto35;

        return $this;
    }

    public function getCaComptasto36(): ?string
    {
        return $this->caComptasto36;
    }

    public function setCaComptasto36(?string $caComptasto36): static
    {
        $this->caComptasto36 = $caComptasto36;

        return $this;
    }

    public function getCaComptasto37(): ?string
    {
        return $this->caComptasto37;
    }

    public function setCaComptasto37(?string $caComptasto37): static
    {
        $this->caComptasto37 = $caComptasto37;

        return $this;
    }

    public function getCaComptasto38(): ?string
    {
        return $this->caComptasto38;
    }

    public function setCaComptasto38(?string $caComptasto38): static
    {
        $this->caComptasto38 = $caComptasto38;

        return $this;
    }

    public function getCaComptasto39(): ?string
    {
        return $this->caComptasto39;
    }

    public function setCaComptasto39(?string $caComptasto39): static
    {
        $this->caComptasto39 = $caComptasto39;

        return $this;
    }

    public function getCaComptasto40(): ?string
    {
        return $this->caComptasto40;
    }

    public function setCaComptasto40(?string $caComptasto40): static
    {
        $this->caComptasto40 = $caComptasto40;

        return $this;
    }

    public function getCaComptasto41(): ?string
    {
        return $this->caComptasto41;
    }

    public function setCaComptasto41(?string $caComptasto41): static
    {
        $this->caComptasto41 = $caComptasto41;

        return $this;
    }

    public function getCaComptasto42(): ?string
    {
        return $this->caComptasto42;
    }

    public function setCaComptasto42(?string $caComptasto42): static
    {
        $this->caComptasto42 = $caComptasto42;

        return $this;
    }

    public function getCaComptasto43(): ?string
    {
        return $this->caComptasto43;
    }

    public function setCaComptasto43(?string $caComptasto43): static
    {
        $this->caComptasto43 = $caComptasto43;

        return $this;
    }

    public function getCaComptasto44(): ?string
    {
        return $this->caComptasto44;
    }

    public function setCaComptasto44(?string $caComptasto44): static
    {
        $this->caComptasto44 = $caComptasto44;

        return $this;
    }

    public function getCaComptasto45(): ?string
    {
        return $this->caComptasto45;
    }

    public function setCaComptasto45(?string $caComptasto45): static
    {
        $this->caComptasto45 = $caComptasto45;

        return $this;
    }

    public function getCaComptasto46(): ?string
    {
        return $this->caComptasto46;
    }

    public function setCaComptasto46(?string $caComptasto46): static
    {
        $this->caComptasto46 = $caComptasto46;

        return $this;
    }

    public function getCaComptasto47(): ?string
    {
        return $this->caComptasto47;
    }

    public function setCaComptasto47(?string $caComptasto47): static
    {
        $this->caComptasto47 = $caComptasto47;

        return $this;
    }

    public function getCaComptasto48(): ?string
    {
        return $this->caComptasto48;
    }

    public function setCaComptasto48(?string $caComptasto48): static
    {
        $this->caComptasto48 = $caComptasto48;

        return $this;
    }

    public function getCaComptasto49(): ?string
    {
        return $this->caComptasto49;
    }

    public function setCaComptasto49(?string $caComptasto49): static
    {
        $this->caComptasto49 = $caComptasto49;

        return $this;
    }

    public function getCaComptasto50(): ?string
    {
        return $this->caComptasto50;
    }

    public function setCaComptasto50(?string $caComptasto50): static
    {
        $this->caComptasto50 = $caComptasto50;

        return $this;
    }
}
